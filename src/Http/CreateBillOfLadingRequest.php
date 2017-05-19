<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Dhl\Datatype\GB\Piece;
use Dhl\Datatype\GB\SpecialService;
use Dhl\Entity\AM\GetQuote;
use Dhl\Entity\GB\ShipmentRequest;
use Omniship\Common\ItemBag;

class CreateBillOfLadingRequest extends AbstractRequest
{
    /**
     * @return GetQuote
     */
    public function getData() {
        $quote = new ShipmentRequest();
        $quote->SiteID = $this->getUsername();
        $quote->Password = $this->getPassword();

        // Set values of the request
        $quote->MessageTime = Carbon::now()->format('Y-m-d\TH:i:sP');
        $quote->MessageReference = md5($this->getTransactionId());

        $quote->RegionCode = 'EU';
        $quote->RequestedPickupTime = 'Y';
        $quote->NewShipper = 'Y';
        $quote->LanguageCode = $this->getLanguageCode();
        $quote->PiecesEnabled = 'Y';

        $quote->Billing->ShipperAccountNumber = $this->getShipperAccountNumber();
        $quote->Billing->ShippingPaymentType = 'S';
        $quote->Billing->BillingAccountNumber = $this->getBillingAccountNumber();
        $quote->Billing->DutyPaymentType = 'S';
        $quote->Billing->DutyAccountNumber = $this->getDutyAccountNumber();

        $receiver_address = $this->getReceiverAddress();
        $country = $receiver_address->getCountry();
        $quote->Consignee->CompanyName = $receiver_address->getCompanyName();
        $quote->Consignee->addAddressLine($receiver_address->getAddress1());
        $quote->Consignee->addAddressLine($receiver_address->getAddress2());
        $quote->Consignee->City = $receiver_address->getCity() ? $receiver_address->getCity()->getName() : '';
        $quote->Consignee->PostalCode = $receiver_address->getPostCode();
        $quote->Consignee->CountryCode = $country ? $country->getIso2() : '';
        $quote->Consignee->CountryName = $country ? $country->getName() : '';
        $quote->Consignee->Contact->PersonName = $receiver_address->getFirstName() . ' ' . $receiver_address->getLastName();
        $quote->Consignee->Contact->PhoneNumber = $receiver_address->getPhone();
        $quote->Consignee->Contact->PhoneExtension = '';
        $quote->Consignee->Contact->FaxNumber = '';
        $quote->Consignee->Contact->Telex = '';
        $quote->Consignee->Contact->Email = $this->getOtherParameters('receiver_email');
        
        $quote->Commodity->CommodityCode = 'cc';
        $quote->Commodity->CommodityName = 'cn';

        $da = $this->getDeclaredAmount();
        if($da && $da > 0) {
            $quote->Dutiable->DeclaredValue = $da;
            $quote->Dutiable->DeclaredCurrency = $this->getDeclaredCurrency() ? : $this->getCurrency();
//            $quote->Dutiable->ScheduleB = '3002905110';
//            $quote->Dutiable->ExportLicense = 'D123456';
//            $quote->Dutiable->ShipperEIN = '112233445566';
//            $quote->Dutiable->ShipperIDType = 'S';
//            $quote->Dutiable->ImportLicense = 'ALFAL';
//            $quote->Dutiable->ConsigneeEIN = 'ConEIN2123';
//            $quote->Dutiable->TermsOfTrade = 'DTP';
        }
        
        $quote->Reference->ReferenceID = 'AM international shipment';
        $quote->Reference->ReferenceType = 'St';

        /** @var $items ItemBag */
        $items = $this->getItems();
        if($items) {
            $total = 0;
            foreach($items->all() as $item) {
                for($i=1; $i<=$item->getQuantity(); $i++) {
                    $piece = new Piece();
                    $piece->PieceID = $item->getId();
                    if ($item->getHeight() && $item->getDepth() && $item->getWidth()) {
                        $piece->Height = $item->getHeight();
                        $piece->Depth = $item->getDepth();
                        $piece->Width = $item->getWidth();
                    }
                    $piece->Weight = $item->getWeight();
                    $quote->ShipmentDetails->addPiece($piece);
                    $total++;
                }
            }
            $quote->ShipmentDetails->NumberOfPieces = $total;
        }

        $quote->ShipmentDetails->Weight = $this->getWeight();
        $quote->ShipmentDetails->WeightUnit = $this->getWeightUnit() == 'KG' ? 'K' : 'L';
        $quote->ShipmentDetails->GlobalProductCode = 'P'; //service GlobalProductCode
        $quote->ShipmentDetails->LocalProductCode = 'P'; //service LocalProductCode
        $quote->ShipmentDetails->Date = $this->getShipmentDate() ? $this->getShipmentDate()->format('Y-m-d') : Carbon::now()->format('Y-m-d');
        $quote->ShipmentDetails->Contents = 'Contents for shipping';
        $quote->ShipmentDetails->DoorTo = 'DD';
        $quote->ShipmentDetails->DimensionUnit = $this->getDimensionUnit() == 'CM' ? 'C' : 'I';
        if(($ia = $this->getInsuranceAmount()) > 0) {
            $quote->ShipmentDetails->InsuredAmount = $ia;
        }

        $quote->ShipmentDetails->PackageType = 'YP';
        $quote->ShipmentDetails->IsDutiable = $this->getDutiable() ? 'Y' : 'N';
        $quote->ShipmentDetails->CurrencyCode = $this->getCurrency();

        $shipping_address = $this->getSenderAddress();
        $country = $shipping_address->getCountry();
        $quote->Shipper->ShipperID = $this->getShipperAccountNumber(); //@todo ??
        $quote->Shipper->CompanyName = $shipping_address->getCompanyName() ? : $shipping_address->getFirstName() . ' ' . $shipping_address->getLastName();
        $quote->Shipper->RegisteredAccount = $this->getShipperAccountNumber(); //@todo ???
        foreach([$shipping_address->getAddress1(), $shipping_address->getAddress2(), $shipping_address->getAddress3()] AS $line) {
            if($line) {
                $quote->Shipper->addAddressLine($line);
            }
        }
        $quote->Shipper->City = $shipping_address->getCity() ? $shipping_address->getCity()->getName() : '';
        $quote->Shipper->Division = 'sf';
        $quote->Shipper->DivisionCode = 'sf';
        $quote->Shipper->PostalCode = $shipping_address->getPostCode();
        $quote->Shipper->CountryCode = $country ? $country->getIso2() : '';
        $quote->Shipper->CountryName = $country ? $country->getName() : '';
        $quote->Shipper->Contact->PersonName = $shipping_address->getFirstName() . ' ' . $shipping_address->getLastName();
        $quote->Shipper->Contact->PhoneNumber = $shipping_address->getPhone();
//        $quote->Shipper->Contact->PhoneExtension = '3403';
//        $quote->Shipper->Contact->FaxNumber = '1 905 8613411';
//        $quote->Shipper->Contact->Telex = '1245';
//        $quote->Shipper->Contact->Email = 'test@email.com';

        $specialService = new SpecialService();
        $specialService->SpecialServiceType = 'A';
        $quote->addSpecialService($specialService);

        $specialService = new SpecialService();
        $specialService->SpecialServiceType = 'I';
        $quote->addSpecialService($specialService);

        $quote->EProcShip = 'N';
        $quote->LabelImageFormat = 'PDF';
        $quote->Label = new \DHL\Datatype\GB\Label();
        $quote->Label->LabelTemplate = '8X4_A4_PDF';
        $quote->Label->Logo = 'Y';
        $quote->Label->CustomerLogo = new \DHL\Datatype\GB\CustomerLogo();
        $quote->Label->CustomerLogo->LogoImage = base64_encode(file_get_contents('http://www.terramall.bg/images/new_logo-ZORA.jpg'));
        $quote->Label->CustomerLogo->LogoImageFormat = 'JPEG';

        return $quote;
    }

    /**
     * @param $data
     * @return CreateBillOfLadingResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new CreateBillOfLadingResponse($this, $data);
    }

}