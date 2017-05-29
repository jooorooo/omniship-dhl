<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Dhl\DataTypesGlobal\BillingType;
use Dhl\DataTypesGlobal\CommodityType;
use Dhl\DataTypesGlobal\ConsigneeType;
use Dhl\DataTypesGlobal\CustomerLogoType;
use Dhl\DataTypesGlobal\DutiableType;
use Dhl\DataTypesGlobal\LabelType;
use Dhl\DataTypesGlobal\PieceType;
use Dhl\DataTypesGlobal\ReferenceType;
use Dhl\DataTypesGlobal\ShipperType;
use Dhl\DataTypesGlobal\SpecialServiceType;
use Dhl\Entity\AM\GetQuote;
use Dhl\DataTypesGlobal\ContactType;
use Dhl\DataTypesGlobal\ShipmentDetailsType;
use Dhl\ShipmentRequest;
use Omniship\Common\ItemBag;

class CreateBillOfLadingRequest extends AbstractRequest
{
    /**
     * @return GetQuote
     */
    public function getData() {
        $shipment_request = new ShipmentRequest();
        $shipment_request->setRequest($this->getHeaderRequestTypeGlobal());

        $shipment_request->setRegionCode('AM');
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

        if(!is_null($dutiable = $this->_getDutiable())) {
            $shipment_request->setDutiable($dutiable);
        }

//        Customer sends shipment validation request message for Baby Shipment with relevant shipment information and the below information
//        $reference_type = new ReferenceType();
//        $reference_type->setReferenceID($this->getOtherParameters('contents_text'));
//        $reference_type->setReferenceType($this->getOtherParameters('packing_type'));
//        $shipment_request->setReference([$reference_type]);

        $shipment_request->setShipmentDetails($this->_getShipmentDetails());

        $shipment_request->setShipper($this->_getShipper());

        $specialService = new SpecialServiceType();
        $specialService->setSpecialServiceType('A');
        $shipment_request->addToSpecialService($specialService);

        $specialService = new SpecialServiceType();
        $specialService->setSpecialServiceType('I');
        $shipment_request->addToSpecialService($specialService);

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
    protected function _getBilling() {
        $request = new BillingType();
        $request->setShipperAccountNumber($this->getShipperAccountNumber());
        $request->setShippingPaymentType('S');
        $request->setBillingAccountNumber($this->getBillingAccountNumber());
        $request->setDutyPaymentType('S');
        $request->setDutyAccountNumber($this->getDutyAccountNumber());
        return $request;
    }

    /**
     * @return ConsigneeType
     */
    protected function _getConsignee() {
        $request = new ConsigneeType();

        $receiver_address = $this->getReceiverAddress();
        $country = $receiver_address->getCountry();
        $request->setCompanyName($receiver_address->getCompanyName() ? : ($receiver_address->getFirstName() . ' ' . $receiver_address->getLastName()));
        $request->addToAddressLine($receiver_address->getAddress1());
        $request->addToAddressLine($receiver_address->getAddress2());
        $request->addToAddressLine($receiver_address->getAddress3());
        $request->setCity($receiver_address->getCity() ? $receiver_address->getCity()->getName() : '');
        $request->setPostalCode($receiver_address->getPostCode());
        $request->setCountryCode($country ? $country->getIso2() : '');
        $request->setCountryName($country ? $country->getName() : '');

        $contact = new ContactType();
        $contact->setPersonName($receiver_address->getFirstName() . ' ' . $receiver_address->getLastName());
        $contact->setPhoneNumber($receiver_address->getPhone());
//        $request->setPhoneExtension('');
//        $contact->setFaxNumber('');
//        $contact->setTelex('');
        $contact->setEmail($this->getOtherParameters('receiver_email'));

        $request->setContact($contact);

        return $request;
    }

    /**
     * @return DutiableType|null
     */
    protected function _getDutiable() {
        $da = $this->getDeclaredAmount();
        if(!$da || $da <=0) {
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
    protected function _getShipmentDetails() {
        $request = new ShipmentDetailsType();

        /** @var $items ItemBag */
        $items = $this->getItems();
        if($items) {
            $total = 0;
            foreach($items->all() as $item) {
                for($i=1; $i<=$item->getQuantity(); $i++) {
                    $piece = new PieceType();
                    $piece->setPieceID($item->getId());
                    if ($item->getHeight() && $item->getDepth() && $item->getWidth()) {
                        $piece->setHeight($item->getHeight());
                        $piece->setDepth($item->getDepth());
                        $piece->setWidth($item->getWidth());
                    }
                    $piece->setWeight($item->getWeight());
                    $request->addToPieces($piece);
                    $total++;
                }
            }
            $request->setNumberOfPieces($total);
        }

        $request->setWeight($this->getWeight());
        $request->setWeightUnit($this->getWeightUnit() == 'KG' ? 'K' : 'L');
        $request->setGlobalProductCode($this->getServiceId()); //service GlobalProductCode
        $request->setLocalProductCode($this->getServiceId()); //service LocalProductCode
        $request->setDate($this->getShipmentDate() ? $this->getShipmentDate() : Carbon::now() );
        $request->setContents($this->getOtherParameters('contents_text'));
        $request->setDoorTo('DD');
        $request->setDimensionUnit($this->getDimensionUnit() == 'CM' ? 'C' : 'I');
        if(($ia = $this->getInsuranceAmount()) > 0) {
            $request->setInsuredAmount($ia);
        }

        $request->setPackageType('YP');
        $request->setIsDutiable($this->getDutiable() ? 'Y' : 'N');
        $request->setCurrencyCode($this->getCurrency());

        return $request;
    }

    /**
     * @return ShipperType
     */
    protected function _getShipper() {
        $request = new ShipperType();

        $shipping_address = $this->getSenderAddress();
        $request->setShipperID($this->getShipperAccountNumber()); //@todo ??
        $request->setCompanyName($shipping_address->getCompanyName() ? : $shipping_address->getFirstName() . ' ' . $shipping_address->getLastName());
//        $request->setRegisteredAccount($this->getShipperAccountNumber()); //@todo ???
        foreach([$shipping_address->getAddress1(), $shipping_address->getAddress2(), $shipping_address->getAddress3()] AS $line) {
            if(trim($line)) {
                $request->addToAddressLine($line);
            }
        }
        if(!is_null($city = $shipping_address->getCity())) {
            $request->setCity($city->getName());
        }
//        $request->setDivision('mo');
//        $request->setDivisionCode('mo');
        $request->setPostalCode($shipping_address->getPostCode());
        if(!is_null($country = $shipping_address->getCountry())) {
            $request->setCountryCode($country->getIso2());
            $request->setCountryName($country->getName());
        }

        $contact = new ContactType();
        $contact->setPersonName($shipping_address->getFirstName() . ' ' . $shipping_address->getLastName());
        $contact->setPhoneNumber($shipping_address->getPhone());
//        $request->setPhoneExtension('');
//        $contact->setFaxNumber('');
//        $contact->setTelex('');
//        $contact->setEmail($this->getOtherParameters('receiver_email'));

        $request->setContact($contact);

        return $request;
    }

    /**
     * @return LabelType
     */
    protected function _getLabel() {
        $request = new LabelType();
        $request->setLabelTemplate('8X4_A4_PDF');
        $request->setLogo('Y');

        if(!is_null($logo = $this->getLogo()) && $data = @file_get_contents($logo)) {
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

    protected function _findLogoExtension($logo) {
        $extension = pathinfo($logo, PATHINFO_EXTENSION);
        $extension = explode('?', $extension);
        return strtoupper($extension[0]);
    }

}