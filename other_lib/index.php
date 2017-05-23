<?php

$config = array(
    'id' => '',
    'pass' => '',
    'shipperAccountNumber' => '',
    'billingAccountNumber' => '',
    'dutyAccountNumber' => '',
);

include 'vendor/autoload.php';

$headers = new \Dhl\DataTypesGlobal\ServiceHeaderType();
$headers->setSiteID($config['id']);
$headers->setPassword($config['pass']);
$headers->setMessageTime(new DateTime());
$headers->setMessageReference('1234567890123456789012345678901');

$request = new \Dhl\DataTypesGlobal\RequestType();
$request->setServiceHeader($headers);

$sample = new \Dhl\ShipmentRequest();
$sample->setRequest($request);
$sample->setLanguageCode('bg');
$sample->setPiecesEnabled('Y');
$sample->setNewShipper('Y');
$sample->setRequestedPickupTime('Y');
$sample->setRegionCode('AM');

$billing = new \Dhl\DataTypesGlobal\BillingType();
$billing->setBillingAccountNumber($config['billingAccountNumber']);
$billing->setDutyAccountNumber($config['dutyAccountNumber']);
$billing->setDutyPaymentType('S');
$billing->setShipperAccountNumber($config['shipperAccountNumber']);
$billing->setShippingPaymentType('S');
$sample->setBilling($billing);

$contact = new \Dhl\DataTypesGlobal\ContactType();
$contact->setPersonName('Bashar Al-Fallouji');
$contact->setPhoneNumber('0435 336 653');
$contact->setPhoneExtension('123');
$contact->setFaxNumber('506-851-7403');
$contact->setTelex('506-851-7121');
$contact->setEmail('bashar@alfallouji.com');

$consignee = new \Dhl\DataTypesGlobal\ConsigneeType();
$consignee->setCompanyName('Ssense');
$consignee->setAddressLine(['333 Chabanel West, #900']);
$consignee->setCity('Montreal');
$consignee->setPostalCode('H3E1G6');
$consignee->setCountryCode('CA');
$consignee->setCountryName('Canada');
$consignee->setContact($contact);
$sample->setConsignee($consignee);

$commodity = new \Dhl\DataTypesGlobal\CommodityType();
$commodity->setCommodityCode('cc');
$commodity->setCommodityName('cn');
$sample->setCommodity([$commodity]);

$dutiable = new \Dhl\DataTypesGlobal\DutiableType();
$dutiable->setDeclaredValue(200.00);
$dutiable->setDeclaredCurrency('USD');
$dutiable->setScheduleB('3002905110');
$dutiable->setExportLicense('D123456');
$dutiable->setShipperEIN('112233445566');
$dutiable->setShipperIDType('S');
$dutiable->setImportLicense('ALFAL');
$dutiable->setConsigneeEIN('ConEIN2123');
$dutiable->setTermsOfTrade('DTP');
$sample->setDutiable($dutiable);

$reference = new \Dhl\DataTypesGlobal\ReferenceType();
$reference->setReferenceID('AM international shipment');
$reference->setReferenceType('St');
$sample->setReference([$reference]);

$shipment_details = new \Dhl\DataTypesGlobal\ShipmentDetailsType();
$shipment_details->setNumberOfPieces(2);

$piece = new \Dhl\DataTypesGlobal\PieceType();
$piece->setPieceID(1);
$piece->setPackageType('EE');
$piece->setWeight(5.0);
$piece->setDimWeight(600.0);
$piece->setWidth(50);
$piece->setHeight(100);
$piece->setDepth(150);
$shipment_details->addToPieces($piece);

$piece = new \Dhl\DataTypesGlobal\PieceType();
$piece->setPieceID(2);
$piece->setPackageType('EE');
$piece->setWeight(5.0);
$piece->setDimWeight(600.0);
$piece->setWidth(50);
$piece->setHeight(100);
$piece->setDepth(150);
$shipment_details->addToPieces($piece);

$shipment_details->setWeight(10.0);
$shipment_details->setWeightUnit('L');
$shipment_details->setGlobalProductCode('P');
$shipment_details->setLocalProductCode('P');
$shipment_details->setDate(new DateTime());
$shipment_details->setContents('AM international shipment contents');
$shipment_details->setDoorTo('DD');
$shipment_details->setDimensionUnit('I');
$shipment_details->setInsuredAmount(1000.00);
$shipment_details->setPackageType('EE');
$shipment_details->setIsDutiable('Y');
$shipment_details->setCurrencyCode('USD');
$sample->setShipmentDetails($shipment_details);

$shipper = new \Dhl\DataTypesGlobal\ShipperType();
$shipper->setShipperID('751008818');
$shipper->setRegisteredAccount('751008818');
$shipper->setCompanyName('IBM Corporation');
$shipper->setAddressLine(['1 New Orchard Road', 'Armonk']);
$shipper->setCity('New York');
$shipper->setDivision('ny');
$shipper->setDivisionCode('ny');
$shipper->setPostalCode('10504');
$shipper->setCountryCode('US');
$shipper->setCountryName('United States Of America');

$contact = new \Dhl\DataTypesGlobal\ContactType();
$contact->setPersonName('Mr peter');
$contact->setPhoneNumber('1 905 8613402');
$contact->setPhoneExtension('3403');
$contact->setFaxNumber('1 905 8613411');
$contact->setTelex('1245');
$contact->setEmail('test@email.com');
$shipper->setContact($contact);
$sample->setShipper($shipper);

$special_service = new \Dhl\DataTypesGlobal\SpecialServiceType();
$special_service->setSpecialServiceType('A');
$sample->addToSpecialService($special_service);

$special_service = new \Dhl\DataTypesGlobal\SpecialServiceType();
$special_service->setSpecialServiceType('I');
$sample->addToSpecialService($special_service);

$sample->setEProcShip('N');
$sample->setLabelImageFormat('PDF');



echo '<pre>';
echo (htmlspecialchars($sample->toXML()));


$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://xmlpitest-ea.dhl.com/XMLShippingServlet?isUTF8Support=true');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_PORT , 443);
curl_setopt($ch, CURLOPT_POSTFIELDS, $sample->toXML());
$result = curl_exec($ch);
curl_close($ch);

echo '<pre>';
echo (htmlspecialchars($result));
