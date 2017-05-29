<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Dhl\Client\Web;
use Dhl\Datatype\GB\CustomerLogo;
use Dhl\Datatype\GB\Label;
use Dhl\Datatype\GB\Piece;
use Dhl\Datatype\GB\SpecialService;
use Dhl\Entity\AM\GetQuote;
use Dhl\Entity\GB\ShipmentRequest;
use Dhl\Entity\GB\ShipmentResponse;
use Omniship\Common\ItemBag;

class CreateBillOfLadingRequest extends AbstractRequest
{
    /**
     * @return GetQuote
     */
    public function getData() {
        $shipment_request = new ShipmentRequest();
        $shipment_request->SiteID = $this->getUsername();
        $shipment_request->Password = $this->getPassword();

        // Set values of the request
        $shipment_request->MessageTime = $this->getShipmentDate()->format('Y-m-d\TH:i:sP');
        $shipment_request->MessageReference = md5($this->getTransactionId());

        $shipment_request->RegionCode = 'EU';
        $shipment_request->RequestedPickupTime = 'Y';
        $shipment_request->NewShipper = 'Y';
        $shipment_request->LanguageCode = $this->getLanguageCode();
        $shipment_request->PiecesEnabled = 'Y';

        $shipment_request->Billing->ShipperAccountNumber = $this->getShipperAccountNumber();
        $shipment_request->Billing->ShippingPaymentType = 'S';
        $shipment_request->Billing->BillingAccountNumber = $this->getBillingAccountNumber();
        $shipment_request->Billing->DutyPaymentType = 'S';
        $shipment_request->Billing->DutyAccountNumber = $this->getDutyAccountNumber();

        $receiver_address = $this->getReceiverAddress();
        $country = $receiver_address->getCountry();
        $shipment_request->Consignee->CompanyName = $receiver_address->getCompanyName() ? : ($receiver_address->getFirstName() . ' ' . $receiver_address->getLastName());
        $shipment_request->Consignee->addAddressLine($receiver_address->getAddress1());
        $shipment_request->Consignee->addAddressLine($receiver_address->getAddress2());
        $shipment_request->Consignee->City = $receiver_address->getCity() ? $receiver_address->getCity()->getName() : '';
        $shipment_request->Consignee->PostalCode = $receiver_address->getPostCode();
        $shipment_request->Consignee->CountryCode = $country ? $country->getIso2() : '';
        $shipment_request->Consignee->CountryName = $country ? $country->getName() : '';
        $shipment_request->Consignee->Contact->PersonName = $receiver_address->getFirstName() . ' ' . $receiver_address->getLastName();
        $shipment_request->Consignee->Contact->PhoneNumber = $receiver_address->getPhone();
        $shipment_request->Consignee->Contact->PhoneExtension = '';
        $shipment_request->Consignee->Contact->FaxNumber = '';
        $shipment_request->Consignee->Contact->Telex = '';
        $shipment_request->Consignee->Contact->Email = $this->getOtherParameters('receiver_email');

        $shipment_request->Commodity->CommodityCode = 'cc';
        $shipment_request->Commodity->CommodityName = 'cn';

        $da = $this->getDeclaredAmount();
        if($da && $da > 0) {
            $shipment_request->Dutiable->DeclaredValue = $da;
            $shipment_request->Dutiable->DeclaredCurrency = $this->getDeclaredCurrency() ? : $this->getCurrency();
//            $shipment_request->Dutiable->ScheduleB = '3002905110';
//            $shipment_request->Dutiable->ExportLicense = 'D123456';
//            $shipment_request->Dutiable->ShipperEIN = '112233445566';
//            $shipment_request->Dutiable->ShipperIDType = 'S';
//            $shipment_request->Dutiable->ImportLicense = 'ALFAL';
//            $shipment_request->Dutiable->ConsigneeEIN = 'ConEIN2123';
//            $shipment_request->Dutiable->TermsOfTrade = 'DTP';
        }

        $shipment_request->Reference->ReferenceID = $this->getOtherParameters('contents_text');
        $shipment_request->Reference->ReferenceType = $this->getOtherParameters('packing_type');

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
                    $shipment_request->ShipmentDetails->addPiece($piece);
                    $total++;
                }
            }
            $shipment_request->ShipmentDetails->NumberOfPieces = $total;
        }

        $shipment_request->ShipmentDetails->Weight = $this->getWeight();
        $shipment_request->ShipmentDetails->WeightUnit = $this->getWeightUnit() == 'KG' ? 'K' : 'L';
        $shipment_request->ShipmentDetails->GlobalProductCode = $this->getServiceId(); //service GlobalProductCode
        $shipment_request->ShipmentDetails->LocalProductCode = $this->getServiceId(); //service LocalProductCode
        $shipment_request->ShipmentDetails->Date = $this->getShipmentDate() ? $this->getShipmentDate()->format('Y-m-d') : Carbon::now()->format('Y-m-d');
        $shipment_request->ShipmentDetails->Contents = $this->getOtherParameters('contents_text');
        $shipment_request->ShipmentDetails->DoorTo = 'DD';
        $shipment_request->ShipmentDetails->DimensionUnit = $this->getDimensionUnit() == 'CM' ? 'C' : 'I';
        if(($ia = $this->getInsuranceAmount()) > 0) {
            $shipment_request->ShipmentDetails->InsuredAmount = $ia;
        }

        $shipment_request->ShipmentDetails->PackageType = 'YP';
        $shipment_request->ShipmentDetails->IsDutiable = $this->getDutiable() ? 'Y' : 'N';
        $shipment_request->ShipmentDetails->CurrencyCode = $this->getCurrency();

        $shipping_address = $this->getSenderAddress();
        $country = $shipping_address->getCountry();
        $shipment_request->Shipper->ShipperID = $this->getShipperAccountNumber(); //@todo ??
        $shipment_request->Shipper->CompanyName = $shipping_address->getCompanyName() ? : $shipping_address->getFirstName() . ' ' . $shipping_address->getLastName();
//        $shipment_request->Shipper->RegisteredAccount = $this->getShipperAccountNumber(); //@todo ???
        foreach([$shipping_address->getAddress1(), $shipping_address->getAddress2(), $shipping_address->getAddress3()] AS $line) {
            if(trim($line)) {
                $shipment_request->Shipper->addAddressLine($line);
            }
        }
        $shipment_request->Shipper->City = $shipping_address->getCity() ? $shipping_address->getCity()->getName() : '';
//        $shipment_request->Shipper->Division = 'mo';
//        $shipment_request->Shipper->DivisionCode = 'mo';
        $shipment_request->Shipper->PostalCode = $shipping_address->getPostCode();
        $shipment_request->Shipper->CountryCode = $country ? $country->getIso2() : '';
        $shipment_request->Shipper->CountryName = $country ? $country->getName() : '';
        $shipment_request->Shipper->Contact->PersonName = $shipping_address->getFirstName() . ' ' . $shipping_address->getLastName();
        $shipment_request->Shipper->Contact->PhoneNumber = $shipping_address->getPhone();
//        $shipment_request->Shipper->Contact->PhoneExtension = '3403';
//        $shipment_request->Shipper->Contact->FaxNumber = '1 905 8613411';
//        $shipment_request->Shipper->Contact->Telex = '1245';
//        $shipment_request->Shipper->Contact->Email = 'test@email.com';

        $specialService = new SpecialService();
        $specialService->SpecialServiceType = 'A';
        $shipment_request->addSpecialService($specialService);

        $specialService = new SpecialService();
        $specialService->SpecialServiceType = 'I';
        $shipment_request->addSpecialService($specialService);

        $shipment_request->EProcShip = 'N';
        $shipment_request->LabelImageFormat = 'PDF';
        $shipment_request->Label = new Label();
        $shipment_request->Label->LabelTemplate = '8X4_A4_PDF';
        $shipment_request->Label->Logo = 'Y';
        $shipment_request->Label->CustomerLogo = new CustomerLogo();
        $shipment_request->Label->CustomerLogo->LogoImage = base64_encode(file_get_contents('http://www.terramall.bg/images/new_logo-ZORA.jpg'));
        $shipment_request->Label->CustomerLogo->LogoImageFormat = 'JPEG';

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

}