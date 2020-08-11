<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Crisu83\Conversion\Quantity\Mass\Unit AS MassUnit;
use Crisu83\Conversion\Quantity\Length\Unit AS LengthUnit;
use Dhl\DataTypesGlobal\BillingType;
use Dhl\DataTypesGlobal\CommodityType;
use Dhl\DataTypesGlobal\ConsigneeType;
use Dhl\DataTypesGlobal\CustomerLogoType;
use Dhl\DataTypesGlobal\DutiableType;
use Dhl\DataTypesGlobal\LabelType;
use Dhl\DataTypesGlobal\PieceType;
use Dhl\DataTypesGlobal\ShipperType;
use Dhl\DataTypesGlobal\SpecialServiceType;
use Dhl\DataTypesGlobal\ContactType;
use Dhl\DataTypesGlobal\ShipmentDetailsType;
use Dhl\ShipmentRequest;
use Omniship\Common\ItemBag;
use Omniship\Common\PieceBag;
use Omniship\Consts;
use Omniship\Dhl\Helper\Convert;

class CreateBillOfLadingRequest extends AbstractRequest
{
    /**
     * @return ShipmentRequest
     */
    public function getData()
    {
        $shipment_request = new ShipmentRequest();
        $shipment_request->setRequest($this->getHeaderRequestTypeGlobal());

        $shipment_request->setRegionCode($this->getOtherParameters('region'));
        $shipment_request->setRequestedPickupTime('Y');
        $shipment_request->setNewShipper('Y');
        $shipment_request->setLanguageCode($this->getLanguageCode());
        $shipment_request->setPiecesEnabled('Y');

        $shipment_request->setBilling($this->_getBilling());

        $shipment_request->setConsignee($this->_getConsignee());

        $commodity_type = new CommodityType();
        $commodity_type->setCommodityCode('cc');
        $commodity_type->setCommodityName('cn');
        $shipment_request->setCommodity([$commodity_type]);

        if (!is_null($dutiable = $this->_getDutiable())) {
            $shipment_request->setDutiable($dutiable);
        }

//        Customer sends shipment validation request message for Baby Shipment with relevant shipment information and the below information
//        $reference_type = new ReferenceType();
//        $reference_type->setReferenceID($this->getOtherParameters('reference_id'));
//        $reference_type->setReferenceType($this->getOtherParameters('reference_type'));
//        $shipment_request->setReference([$reference_type]);

        $shipment_request->setShipmentDetails($this->_getShipmentDetails());

        $shipment_request->setShipper($this->_getShipper());

//        $specialService = new SpecialServiceType();
//        $specialService->setSpecialServiceType('A');
//        $shipment_request->addToSpecialService($specialService);
//
//        $specialService = new SpecialServiceType();
//        $specialService->setSpecialServiceType('I');
//        $shipment_request->addToSpecialService($specialService);

        $shipment_request->setEProcShip('N');
        $shipment_request->setLabelImageFormat('PDF');

        $shipment_request->setLabel($this->_getLabel());

        return $shipment_request;
    }

    /**
     * @param $data
     * @return CreateBillOfLadingResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new CreateBillOfLadingResponse($this, $data);
    }

    /**
     * @return BillingType
     */
    protected function _getBilling()
    {
        $request = new BillingType();
        $request->setShipperAccountNumber($this->getShipperAccountNumber());
        $request->setShippingPaymentType($this->getPayerType());
        $request->setBillingAccountNumber($this->getBillingAccountNumber());
        if(($da = $this->getDeclaredAmount()) > 0 && !empty($this->getDutyAccountNumber())) {
            $request->setDutyPaymentType($this->getPayerType());
            $request->setDutyAccountNumber($this->getDutyAccountNumber());
        }
        return $request;
    }

    /**
     * @return string
     */
    protected function getPayerType() {
        switch ($this->getPayer()) {
            case Consts::PAYER_SENDER:
            default:
                return 'S'; //sender
            case Consts::PAYER_RECEIVER:
                return 'R'; //receiver
            case Consts::PAYER_OTHER:
                return 'T'; //other
        }
    }

    /**
     * @return ConsigneeType
     */
    protected function _getConsignee()
    {
        $request = new ConsigneeType();

        $receiver_address = $this->getReceiverAddress();
        $country = $receiver_address->getCountry();
        $request->setCompanyName(mb_substr($receiver_address->getCompanyName() ?: ($receiver_address->getFullName()), 0, 35));
        $request->addToAddressLine($receiver_address->getAddress1());
        $request->addToAddressLine($receiver_address->getAddress2());
        $request->addToAddressLine($receiver_address->getAddress3());
        $request->setCity($receiver_address->getCity() ? $receiver_address->getCity()->getName() : '');
        $request->setPostalCode($receiver_address->getPostCode());
        $request->setCountryCode($country ? $country->getIso2() : '');
        $request->setCountryName($country ? $country->getName() : '');

        $contact = new ContactType();
        $contact->setPersonName(mb_substr($receiver_address->getFullName(), 0, 35));
        $contact->setPhoneNumber($receiver_address->getPhone());
//        $request->setPhoneExtension('');
//        $contact->setFaxNumber('');
//        $contact->setTelex('');
        $contact->setEmail($this->getReceiverEmail());

        $request->setContact($contact);

        return $request;
    }

    /**
     * @return DutiableType|null
     */
    protected function _getDutiable()
    {
        if (($da = $this->getDeclaredAmount()) <= 0) {
            return null;
        }
        $request = new DutiableType();
        $request->setDeclaredValue($da);
        $request->setDeclaredCurrency($this->getDeclaredCurrency());
//        $request->setScheduleB('3002905110');
//        $request->setExportLicense('D123456');
//        $request->setShipperEIN('112233445566');
//        $request->setShipperIDType('S');
//        $request->setImportLicense('ALFAL');
//        $request->setConsigneeEIN('ConEIN2123');
//        $request->setTermsOfTrade('DTP');
        return $request;
    }

    /**
     * @return ShipmentDetailsType
     */
    protected function _getShipmentDetails()
    {
        $convert = new Convert();
        $request = new ShipmentDetailsType();

        $request->setNumberOfPieces($this->getNumberOfPieces());
        $request->setWeight($convert->convertWeightUnit($this->getWeight(), $this->getWeightUnit()));
        $request->setWeightUnit($convert->validateWeightUnit($this->getWeightUnit()) == MassUnit::KILOGRAM ? 'K' : 'L');
        $request->setGlobalProductCode($this->getServiceId()); //service GlobalProductCode
        $request->setLocalProductCode($this->getServiceId()); //service LocalProductCode
        $request->setDate($this->getShipmentDate() ? $this->getShipmentDate() : Carbon::now());
        $request->setContents($this->getContent());
        $request->setDoorTo('DD');

        $request->setDimensionUnit($convert->validateLengthUnit($this->getDimensionUnit()) == LengthUnit::CENTIMETRE ? 'C' : 'I');
        if (($ia = $this->getInsuranceAmount()) > 0) {
            $request->setInsuredAmount($ia);
        }

        /** @var $pieces PieceBag */
        $pieces = $this->getPieces();
        if ($pieces->count()) {
            foreach ($pieces->all() as $item) {
                $piece = new PieceType();
                $piece->setPieceID($item->getId());
                if(trim($type = $item->getName())) {
                    $piece->setPackageType($type);
                }
                if ($item->getHeight() && $item->getDepth() && $item->getWidth()) {
                    $piece->setHeight($convert->convertLengthUnit($item->getHeight(), $this->getDimensionUnit()));
                    $piece->setDepth($convert->convertLengthUnit($item->getDepth(), $this->getDimensionUnit()));
                    $piece->setWidth($convert->convertLengthUnit($item->getWidth(), $this->getDimensionUnit()));
                }
                $piece->setWeight($convert->convertWeightUnit($item->getWeight(), $this->getWeightUnit()));
                $request->addToPieces($piece);
            }
        }

        $request->setPackageType($this->getPackageType() ?: 'YP');
        $request->setCurrencyCode($this->getCurrency());
        $sender_address = $this->getSenderAddress();
        $receiver_address = $this->getReceiverAddress();
        $request->setIsDutiable('N');
        if ($this->_getDutiable() && !$this->getIsDocuments() && $sender_address && !is_null($country = $sender_address->getCountry()) && $receiver_address && !is_null($rcountry = $receiver_address->getCountry()) && (in_array($rcountry->getIso2(), $this->EUCodeList) || in_array($country->getIso2(), $this->EUCodeList))) {
            if((in_array($rcountry->getIso2(), $this->EUCodeList) && !in_array($country->getIso2(), $this->EUCodeList)) || (!in_array($rcountry->getIso2(), $this->EUCodeList) && in_array($country->getIso2(), $this->EUCodeList))) {
                $request->setIsDutiable($rcountry->getIso2() != $country->getIso2() ? 'Y' : 'N');
            }
        }

        return $request;
    }

    /**
     * @return ShipperType
     */
    protected function _getShipper()
    {
        $request = new ShipperType();

        $shipping_address = $this->getSenderAddress();
        $request->setShipperID($this->getShipperAccountNumber()); //@todo ??
        $request->setCompanyName($shipping_address->getCompanyName() ?: $shipping_address->getFullName());
//        $request->setRegisteredAccount($this->getShipperAccountNumber()); //@todo ???
        if (!is_null($country = $shipping_address->getCountry())) {
            $request->setCountryCode($country->getIso2());
            $request->setCountryName($country->getName());
        }
        foreach (array_filter([$shipping_address->getAddress1(), $shipping_address->getAddress2(), $shipping_address->getAddress3()]) AS $line) {
            $request->addToAddressLine($line);
        }
        if (!is_null($city = $shipping_address->getCity())) {
            $request->setCity($city->getName());
        }
//        $request->setDivision('mo');
//        $request->setDivisionCode('mo');
        $request->setPostalCode($shipping_address->getPostCode());

        $contact = new ContactType();
        $contact->setPersonName($shipping_address->getFullName());
        $contact->setPhoneNumber($shipping_address->getPhone());
//        $request->setPhoneExtension('');
//        $contact->setFaxNumber('');
//        $contact->setTelex('');
//        $contact->setEmail($this->getSenderEmail());

        $request->setContact($contact);

        return $request;
    }

    /**
     * @return LabelType
     */
    protected function _getLabel()
    {
        $request = new LabelType();
        $request->setLabelTemplate($this->getOtherParameters('label_size', '8X4_A4_PDF')); //'8X4_A4_PDF'

        $request->setLogo('Y');
        if (!is_null($logo = $this->getLogo()) && $data = @file_get_contents($logo)) {
            $customer_logo = new CustomerLogoType();
            $customer_logo->setLogoImage(base64_encode($data));
            $customer_logo->setLogoImageFormat($this->_findLogoExtension($logo));

            $request->setCustomerLogo($customer_logo);
        }

//        $request->setDocDetach();
//        $request->setHideAccount();
//        $request->setReceiptTemplate();
//        $request->setResolution();

        return $request;
    }

    protected function _findLogoExtension($logo)
    {
        $extension = pathinfo($logo, PATHINFO_EXTENSION);
        $extension = explode('?', $extension);
        return strtoupper($extension[0]);
    }

}