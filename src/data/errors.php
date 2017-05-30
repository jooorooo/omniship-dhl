<?php

return array (
  'ShipmentValidation' => 
  array (
    'AM' => 
    array (
      0 => 
      array (
        'Code' => 'SV003',
        'Message' => 'Consignee country not found. Please check your entries and resubmit.',
        'Meaning' => 'Consignee country not found',
      ),
      1 => 
      array (
        'Code' => 'SV004',
        'Message' => 'Consignee country not active. Please check your entries and resubmit.',
        'Meaning' => 'Consignee country not active',
      ),
      2 => 
      array (
        'Code' => 'SV005',
        'Message' => 'DHL has a temporary restriction on shipments to the consignee country. Please check your entries and resubmit.',
        'Meaning' => 'Temporary ban on consignee country',
      ),
      3 => 
      array (
        'Code' => 'SV006a',
        'Message' => 'There is a temporary ban on dutiable shipments to consignee country.',
        'Meaning' => 'Temporary ban on dutiable shipments to consignee country',
      ),
      4 => 
      array (
        'Code' => 'SV006b',
        'Message' => 'There is a temporary ban on high-value, dutiable shipments to the destination country.',
        'Meaning' => 'Ban on dutiable shipments that exceed the declared value to the destination country',
      ),
      5 => 
      array (
        'Code' => 'SV007',
        'Message' => 'Your package size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      6 => 
      array (
        'Code' => 'SV007a',
        'Message' => 'Your package size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      7 => 
      array (
        'Code' => 'SV007b',
        'Message' => 'Your shipment size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      8 => 
      array (
        'Code' => 'SV008',
        'Message' => 'WARNING: The number of packages in your shipment, the dimensions, or the weights may require special handling or may add to transit time.',
        'Meaning' => 'WARNING: Piece dimensional weight exceeded warning limit',
      ),
      9 => 
      array (
        'Code' => 'SV009',
        'Message' => 'WARNING: Your shipment value exceeds limits for destination country and may require pre-approval and added transit time.',
        'Meaning' => 'WARNING: Shipment declared value exceeded normal limits',
      ),
      10 => 
      array (
        'Code' => 'SV010a',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Origin routing code could not be determined',
      ),
      11 => 
      array (
        'Code' => 'SV010b',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Postal code not provided to determine the origin routing code.',
      ),
      12 => 
      array (
        'Code' => 'SV010c',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Postal code invalid for the purpose of identifying the origin routing code',
      ),
      13 => 
      array (
        'Code' => 'SV011a',
        'Message' => 'Consignee postal code or city name cannot be recognized. Please update this information and resubmit.',
        'Meaning' => 'Destination routing code could not be determined',
      ),
      14 => 
      array (
        'Code' => 'SV011b',
        'Message' => 'The system could not determine service for the destination. Please check the recipient postal code and resubmit.',
        'Meaning' => 'Postal code not provided to determine the destination routing code',
      ),
      15 => 
      array (
        'Code' => 'SV011c',
        'Message' => 'The system could not determine service for the destination. Please check the recipient postal code and country and resubmit.',
        'Meaning' => 'Postal code invalid for the purpose of identifying the destination routing code',
      ),
      16 => 
      array (
        'Code' => 'SV012a',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number was not found in the billing records',
      ),
      17 => 
      array (
        'Code' => 'SV012b',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region . Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is not a domestically billed shipper account',
      ),
      18 => 
      array (
        'Code' => 'SV012c',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is for internal use only',
      ),
      19 => 
      array (
        'Code' => 'SV012d',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is for inbound use only',
      ),
      20 => 
      array (
        'Code' => 'SV012e',
        'Message' => 'Your shipping account number is marked for deletion. It cannot be used for shipments originating in this region',
        'Meaning' => 'Shipper account is marked for deletion. Please enter another account and resubmit.',
      ),
      21 => 
      array (
        'Code' => 'SV012f',
        'Message' => 'The shipment was not scheduled due to the credit status of shipping account. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is not in good credit standing',
      ),
      22 => 
      array (
        'Code' => 'SV013a',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      23 => 
      array (
        'Code' => 'SV013b',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      24 => 
      array (
        'Code' => 'SV013c',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      25 => 
      array (
        'Code' => 'SV013d',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      26 => 
      array (
        'Code' => 'SV014a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipment bill-to account number was not found in the billing records',
      ),
      27 => 
      array (
        'Code' => 'SV014b',
        'Message' => 'Your billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Shipment bill-to account is not a domestically billed shipper account',
      ),
      28 => 
      array (
        'Code' => 'SV014c',
        'Message' => 'Your billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Shipment bill-to account is for internal use only',
      ),
      29 => 
      array (
        'Code' => 'SV014d',
        'Message' => 'Your billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Shipment bill-to account is for inbound use only',
      ),
      30 => 
      array (
        'Code' => 'SV014e',
        'Message' => 'The shipment was not scheduled due to the credit status of billing account. Please enter another account.',
        'Meaning' => 'Shipment bill-to account is not in good credit standing',
      ),
      31 => 
      array (
        'Code' => 'SV015a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      32 => 
      array (
        'Code' => 'SV015b',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      33 => 
      array (
        'Code' => 'SV015c',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      34 => 
      array (
        'Code' => 'SV015d',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      35 => 
      array (
        'Code' => 'SV016a',
        'Message' => 'The system could not verify your duty billing account number. Please correct this number and resubmit.',
        'Meaning' => 'Duty bill-to account number was not found in the billing records',
      ),
      36 => 
      array (
        'Code' => 'SV016b',
        'Message' => 'Your duty billing account number cannot be used for shipments originating in the region. Please enter another account number and resubmit.',
        'Meaning' => 'Duty bill-to account is for internal use only',
      ),
      37 => 
      array (
        'Code' => 'SV016c',
        'Message' => 'Your duty billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Duty bill-to account is for inbound use only',
      ),
      38 => 
      array (
        'Code' => 'SV016d',
        'Message' => 'The shipment was not scheduled due to the credit status of duty billing account number. Please enter another account and resubmit.',
        'Meaning' => 'Duty bill-to account is not in good credit standing',
      ),
      39 => 
      array (
        'Code' => 'SV017a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      40 => 
      array (
        'Code' => 'SV017b',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      41 => 
      array (
        'Code' => 'SV017c',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      42 => 
      array (
        'Code' => 'SV017d',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      43 => 
      array (
        'Code' => 'SV018',
        'Message' => 'The system is unable to process shipments at this time. Please resubmit your request at a later time.',
        'Meaning' => 'Cannot complete the validation due to system failure',
      ),
      44 => 
      array (
        'Code' => 'SV019',
        'Message' => 'Shipments to this city in Consignee address cannot have duties/taxes billed to the shipper. Please change the duty payment option and resubmit.',
        'Meaning' => 'Payment method was not bill recipient',
      ),
      45 => 
      array (
        'Code' => 'SV021',
        'Message' => 'Shipments to Consignee country cannot be billed to the recipient. Please change the payment option and resubmit.',
        'Meaning' => 'Invalid transport collect billing option (shipments to ship-to country cannot be billed to recipient)',
      ),
      46 => 
      array (
        'Code' => 'SV022',
        'Message' => 'Your billing account number is for international billing only. Please correct the account or destination and resubmit.',
        'Meaning' => 'International country was not specified',
      ),
      47 => 
      array (
        'Code' => 'SV023a',
        'Message' => 'Duty and taxes charges for destination country must be billed to the recipient. Please change the duty payment option and resubmit.',
        'Meaning' => 'Billing option not available for the destination country',
      ),
      48 => 
      array (
        'Code' => 'SV023b',
        'Message' => 'Duty/tax charges must be billed to recipients in destination city/country. Please change the duty payment option and resubmit.',
        'Meaning' => 'Billing option not available for the specific service area of the destination country',
      ),
      49 => 
      array (
        'Code' => 'SV024',
        'Message' => 'The destination country requires recipients to pay duties and taxes. Please change your duty/tax billing option to recipient.',
        'Meaning' => 'Invalid duty payment option',
      ),
      50 => 
      array (
        'Code' => 'SV025a',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      51 => 
      array (
        'Code' => 'SV025b',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      52 => 
      array (
        'Code' => 'SV025c',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      53 => 
      array (
        'Code' => 'SV026',
        'Message' => 'The insured value of your shipment exceeds 110% of the declared value. Please adjust the insured or declared value and resubmit.',
        'Meaning' => 'Insured value exceeds 110% of the declared value',
      ),
      54 => 
      array (
        'Code' => 'SV027a',
        'Message' => 'Your shipment date has already passed. Please correct the date and resubmit.',
        'Meaning' => 'Current date at the origin service area is already more than one day past the requested ship date',
      ),
      55 => 
      array (
        'Code' => 'SV027b',
        'Message' => 'Shipments cannot be scheduled more than ten days in the future. Please resubmit your request with an earlier shipment date.',
        'Meaning' => 'Requested date is more than 10 days from the current date at the origin service area',
      ),
      56 => 
      array (
        'Code' => 'SV028',
        'Message' => 'Your billing account number does not support door- to-airport or airport-to-airport service. Please select another service or account.',
        'Meaning' => 'Invalid Door-To option',
      ),
      57 => 
      array (
        'Code' => 'SV029',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      58 => 
      array (
        'Code' => 'SV029a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      59 => 
      array (
        'Code' => 'SV029b',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      60 => 
      array (
        'Code' => 'SV029c',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      61 => 
      array (
        'Code' => 'SV029d',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      62 => 
      array (
        'Code' => 'SV029e',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      63 => 
      array (
        'Code' => 'SV029f',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      64 => 
      array (
        'Code' => 'SV030',
        'Message' => 'The insurance limit is unavailable for your country. Please call Customer Services.',
        'Meaning' => 'The insurance limit is unavailable',
      ),
      65 => 
      array (
        'Code' => 'SV031',
        'Message' => 'WARNING:Your Account is a Cash Customer type account.  Please contact your customer service representative.',
        'Meaning' => 'Account type invalid.',
      ),
      66 => 
      array (
        'Code' => 'SV034a',
        'Message' => 'Sorry, our system is not able to assign Piece IDs to your shipment at the moment. Please try again later or call our DHL Customer Service Hotline for further assistance.',
        'Meaning' => 'Piece IDs not sufficient error',
      ),
      67 => 
      array (
        'Code' => 'SV034b',
        'Message' => 'Sorry, there are insufficient Piece IDs to be assigned to your shipment at the moment. Please try again later or call our DHL Customer Service Hotline for further assistance.',
        'Meaning' => 'Piece IDs is exhausted error.',
      ),
      68 => 
      array (
        'Code' => 'SV035',
        'Message' => 'We are unable to service this ZIP code. Please contact your DHL sales representative for further assistance',
        'Meaning' => 'Postcode is incorrect and failed in routing',
      ),
      69 => 
      array (
        'Code' => 'SV036',
        'Message' => 'Your shipper account number cannot be used for shipments originating in the US.  Enter another account and resubmit or call technical support representative.',
        'Meaning' => 'Shipper account number is not correct',
      ),
      70 => 
      array (
        'Code' => 'SV037',
        'Message' => 'Your billing account number cannot be used for shipments originating in the US.  Enter another account and resubmit or call technical support representative.',
        'Meaning' => 'Billing account number is not correct.',
      ),
      71 => 
      array (
        'Code' => 'SV038',
        'Message' => 'Your duty tax account number cannot be used for shipments originating in the US.  Enter another account and resubmit or call technical support represenative.',
        'Meaning' => 'Duty tax account number is not correct.',
      ),
      72 => 
      array (
        'Code' => 'SV039',
        'Message' => 'Your billing account number cannot be used.  Enter another account and resubmit or call technical support representative.',
        'Meaning' => 'Billing account number is not correct.',
      ),
      73 => 
      array (
        'Code' => 'SV040',
        'Message' => 'Your duty tax account number cannot be used.  Enter another account and resubmit or call technical support representative.',
        'Meaning' => 'Duty tax account number is not correct.',
      ),
      74 => 
      array (
        'Code' => 'SV041',
        'Message' => 'Your billing account number is for international billing only.  Correct the account or destination and resubmit.',
        'Meaning' => 'Billing account number is not correct.',
      ),
      75 => 
      array (
        'Code' => 'SV042',
        'Message' => 'Shipments to the destination country cannot be billed to the recipient.  Change the payment option and resubmit.',
        'Meaning' => 'Shipment to the destination country is not supported for the payment option of Recipient.',
      ),
      76 => 
      array (
        'Code' => 'SV045',
        'Message' => 'This is an onforwarded destination. Your shipment can take 1 or 2 days more to be delivered',
        'Meaning' => 'Additonal delivery days required for required destination.',
      ),
      77 => 
      array (
        'Code' => 'SV046',
        'Message' => 'NOTE! The number of packages in your shipment, the dimensions, or the weights may require special handling or may add to transit time',
        'Meaning' => 'The packages require special handling.',
      ),
      78 => 
      array (
        'Code' => 'SV047',
        'Message' => 'Your package size or weight exceeds the limits for the destination country.  For assistance, please call technical support representative.',
        'Meaning' => 'The package size or weight exceeds the destination country\'s limit.',
      ),
      79 => 
      array (
        'Code' => 'SV048',
        'Message' => 'NOTE! The dimension or weight of your shipment may require special handling or may add to transit time.',
        'Meaning' => 'The shipment required special handling as oversize.',
      ),
      80 => 
      array (
        'Code' => 'SV049',
        'Message' => 'Your shipment was not accepted.  The weight of one or more SED Line exceeds limit.  For assistance, call technical support representative.',
        'Meaning' => 'The shipment is not accepted as exceeds limits.',
      ),
      81 => 
      array (
        'Code' => 'SV044',
        'Message' => 'The insured value exceeds the declared value of the package. Please correct and re-submit.',
        'Meaning' => 'The insured values exceeds the declared value of the package.',
      ),
      82 => 
      array (
        'Code' => 'SV050',
        'Message' => 'Local Product Code not configured for the country. Please contact technical service representative.',
        'Meaning' => '',
      ),
      83 => 
      array (
        'Code' => 'SV051',
        'Message' => 'POD is not available for shipments to destination country. Please unselect the POD option and resubmit.',
        'Meaning' => '',
      ),
      84 => 
      array (
        'Code' => '107',
        'Message' => 'Incorrect or Incomplete Input Parameters',
        'Meaning' => 'Incorrect or Incomplete Input Parameters',
      ),
      85 => 
      array (
        'Code' => '108',
        'Message' => 'System Unavailable',
        'Meaning' => 'System Unavailable',
      ),
      86 => 
      array (
        'Code' => '111',
        'Message' => 'Error in parsing request XML',
        'Meaning' => 'Error in parsing request XML',
      ),
      87 => 
      array (
        'Code' => '112',
        'Message' => 'Request type could not be identified',
        'Meaning' => 'Request type could not be identified',
      ),
      88 => 
      array (
        'Code' => '113',
        'Message' => 'The same special service cannot be requested more than once',
        'Meaning' => 'The same special service cannot be requested more than once',
      ),
      89 => 
      array (
        'Code' => '114',
        'Message' => 'Wrong packaging Type entered. Packaging type can only be CP.',
        'Meaning' => 'Wrong packaging Type entered. Packaging type can only be CP.',
      ),
      90 => 
      array (
        'Code' => '123',
        'Message' => 'Query User Profile System Unavailable',
        'Meaning' => 'eCom backend - Query User Profile service is not available',
      ),
      91 => 
      array (
        'Code' => '124',
        'Message' => 'DCT System Unavailable',
        'Meaning' => 'DCT application is not available',
      ),
      92 => 
      array (
        'Code' => '150',
        'Message' => 'Error in the Data',
        'Meaning' => 'The data is not Valid',
      ),
      93 => 
      array (
        'Code' => '151',
        'Message' => 'Mandatory Required error',
        'Meaning' => 'Mandatory Field Missing Error',
      ),
      94 => 
      array (
        'Code' => '152',
        'Message' => 'Conditional Required Error',
        'Meaning' => 'Condition Field Missing Error',
      ),
      95 => 
      array (
        'Code' => '153',
        'Message' => 'Recurrence Error',
        'Meaning' => 'Data Recurrence Error',
      ),
      96 => 
      array (
        'Code' => '154',
        'Message' => 'Value Error',
        'Meaning' => 'Value Provided is wrong',
      ),
      97 => 
      array (
        'Code' => '155',
        'Message' => 'Type Error',
        'Meaning' => 'Type of data is wrong',
      ),
      98 => 
      array (
        'Code' => '156',
        'Message' => 'Length Error',
        'Meaning' => 'The length of the value is wrong',
      ),
      99 => 
      array (
        'Code' => '157',
        'Message' => 'Format Error',
        'Meaning' => 'The format of the value is wrong',
      ),
      100 => 
      array (
        'Code' => '158',
        'Message' => 'Shipment from Specified Country is not Supported',
        'Meaning' => 'Shipment cannot originate from this country',
      ),
      101 => 
      array (
        'Code' => '211',
        'Message' => 'Please contact DHL representative',
        'Meaning' => 'DHL Internal Error',
      ),
      102 => 
      array (
        'Code' => 'PLT002',
        'Message' => 'DocImages is required for Paperless Trade (PLT) shipments.',
        'Meaning' => 'Paperless trade (PLT) shipment is only available for:
1) dutiable shipment
<IsDutiable> element must contain value of ‘Y’
2) <Dutiable> element must be included
3) <SpecialServiceType> element must contain value of ‘WY’
4) <DocImages> element must contain the commercial invoice or other supporting document images required for Customs clearance',
      ),
      103 => 
      array (
        'Code' => 'PLT003',
        'Message' => 'The origin country does not support Paperless shipment service. Please contact DHL representative for further information or resubmit as regular shipment.',
        'Meaning' => 'This is warning message if the shipper country does not support PLT shipment and it will be processed as regular shipment without WY Paperless Trade service.',
      ),
      104 => 
      array (
        'Code' => 'PLT004',
        'Message' => 'You are not subscribed for Paperless shipment service. Please contact your DHL technical representative for Paperless shipment subscription.',
        'Meaning' => 'If the client is not subscribed for PLT shipmet service.For <PLTStatus> field value of “D” – De-registered',
      ),
      105 => 
      array (
        'Code' => 'PLT005',
        'Message' => 'Paperless shipment is suspended. Please contact your DHL technical representative for reactivation.',
        'Meaning' => 'If the <PLTStatus> field value is “S” – Suspended, XML-PI Shipment Validation service will not allow to proceed with the shipment flow and return a error message to the XML-PI client',
      ),
      106 => 
      array (
        'Code' => 'PLT006',
        'Message' => 'Paperless shipment service is not allowed for one of these reasons: Shipper or receiver country doesn\'t support Paperless Service, the product selected doesn\'t support Paperless or the declared value entered is greater than the allowed limit. Please contact DHL representative for further information or resubmit as regular shipment.',
        'Meaning' => 'PLT capability failed due to:
1) Shipper or receiver country does not support Paperless Trade (WY)
2) the selected product does not support Paperless Trade (WY)
3) delcared value is exceeded the allowed value limit',
      ),
      107 => 
      array (
        'Code' => 'PLT007',
        'Message' => 'The total image sizes exceeded the maximum image size for Paperless shipment. Please check and resubmit with correct request message.',
        'Meaning' => 'The total document images for PLT shipment is exceeded the maximum images size in XMLPI application.',
      ),
      108 => 
      array (
        'Code' => 'RG001',
        'Message' => 'eCom backend Registration service is temporary not available. Please resubmit your request later.',
        'Meaning' => 'Registration service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      109 => 
      array (
        'Code' => 'RG002',
        'Message' => 'eCom backend Registration Service – account validation process is temporary not available. Please resubmit your request later.',
        'Meaning' => 'The account validation service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      110 => 
      array (
        'Code' => 'RG003',
        'Message' => 'eCom backend Registration service – Routing process is temporarily not available. Please resubmit your request later.',
        'Meaning' => 'The routing service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      111 => 
      array (
        'Code' => 'RG004',
        'Message' => 'Registration failed. Registration information is incomplete or invalid. Please check the registration information and resubmit your request again',
        'Meaning' => 'At least one item in the registration request is either missing or has an invalid value. Registration is rejected.',
      ),
      112 => 
      array (
        'Code' => 'RG005',
        'Message' => 'Registration failed. The software or data version is invalid. Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'The software / data version is not acceptable for registration. Registration is rejected.',
      ),
      113 => 
      array (
        'Code' => 'RG006',
        'Message' => 'Registration failed. Your eCom Site ID is invalid.  Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'Site ID has a “revoked” status. Re-registration is rejected.',
      ),
      114 => 
      array (
        'Code' => 'RG007',
        'Message' => 'Registration failed. It is not a valid location within US. Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'User’s location is not in the USA. Registration is rejected',
      ),
      115 => 
      array (
        'Code' => 'RG008',
        'Message' => 'Registration failed. Invalid Zip or Postal Code for the Country. Please correct and resubmit. For assistance, please contact your DHL technical service representative for further assistance',
        'Meaning' => 'There is no DHL service area code for the shipper and/or pickup address. Registration rejected.',
      ),
      116 => 
      array (
        'Code' => 'RG009',
        'Message' => 'Registration failed. Different shipper and pickup address is not allowed. Please correct and resubmit. For assistance, please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'The shipper address and pickup address have different service area codes. Registration cannot occur.',
      ),
      117 => 
      array (
        'Code' => 'RG010',
        'Message' => 'Account number not found. Please contact your DHL technical service representative for further assistance',
        'Meaning' => 'Account number specified by the user was not found in the NBC records. Registration cannot occur.',
      ),
      118 => 
      array (
        'Code' => 'RG011',
        'Message' => 'Invalid account Number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified is not a domestically billed account. Registration cannot occur.',
      ),
      119 => 
      array (
        'Code' => 'RG012',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified is for internal use only. Registration cannot occur.',
      ),
      120 => 
      array (
        'Code' => 'RG013',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified by the user is restricted to “inbound shipments only”. Registration cannot occur.',
      ),
      121 => 
      array (
        'Code' => 'RG014',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'The credit status of the account number specified by the user is not in “good standing” or “removed from credit suspension”.',
      ),
      122 => 
      array (
        'Code' => 'RG018',
        'Message' => 'Registration failed. eCom Site ID is invalid. Please contact your DHL technical service representative.',
        'Meaning' => 'Re-registration’s site ID not found in the database.',
      ),
      123 => 
      array (
        'Code' => 'RG019',
        'Message' => 'Registration failed. Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account validation cannot be completed',
      ),
      124 => 
      array (
        'Code' => 'RG020',
        'Message' => 'Invalid account number due to invalid account type. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account type is unknown',
      ),
      125 => 
      array (
        'Code' => 'RG021',
        'Message' => 'Registration failed. Invalid postcode. Please resubmit after checking the zip or postal code and city name. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Invalid postal code',
      ),
      126 => 
      array (
        'Code' => 'RG022',
        'Message' => 'Registration failed. City and zip or postal code does not match. Please correct and resubmit. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'City not found in Routing service',
      ),
      127 => 
      array (
        'Code' => 'RG023',
        'Message' => 'eCom backend Registration service – Account validation process is encountering some technical problem. Please resubmit your request at a later time. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account validation service can not be located',
      ),
      128 => 
      array (
        'Code' => 'RG024',
        'Message' => 'eCom backend Registration service database is encountering some technical problem. Please resubmit your request at a later time. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'eCom backend database error',
      ),
      129 => 
      array (
        'Code' => 'RG025',
        'Message' => 'Cash Account not allowed. Please contact your DHL customer service representative.',
        'Meaning' => 'Cash Account not allowed.',
      ),
      130 => 
      array (
        'Code' => 'RG026',
        'Message' => 'The eCom Site ID is unable to process Registration. Please contact your DHL technical representative.',
        'Meaning' => 'eCom backend is not able to locate the pickup location',
      ),
      131 => 
      array (
        'Code' => 'RG027',
        'Message' => 'Registration failed. The billing type for your account is invalid to register.  Enter another account and resubmit or you’re your DHL technical representative.',
        'Meaning' => 'Billing type for account is invalid.',
      ),
      132 => 
      array (
        'Code' => 'RG028',
        'Message' => 'Invalid eCom Site ID. Please contact your DHL technical representative for assistance.',
        'Meaning' => 'Site Id not found. Unable to retrieve the PLT Status. The site Id is invalid.',
      ),
    ),
    'AP' => 
    array (
      0 => 
      array (
        'Code' => 'SV003',
        'Message' => 'Consignee country not found. Please check your entries and resubmit.',
        'Meaning' => 'Consignee country not found',
      ),
      1 => 
      array (
        'Code' => 'SV004',
        'Message' => 'Consignee country not active. Please check your entries and resubmit.',
        'Meaning' => 'Consignee country not active',
      ),
      2 => 
      array (
        'Code' => 'SV005',
        'Message' => 'DHL has a temporary restriction on shipments to the consignee country. Please check your entries and resubmit.',
        'Meaning' => 'Temporary ban on consignee country',
      ),
      3 => 
      array (
        'Code' => 'SV006a',
        'Message' => 'There is a temporary ban on dutiable shipments to consignee country.',
        'Meaning' => 'Temporary ban on dutiable shipments to consignee country',
      ),
      4 => 
      array (
        'Code' => 'SV006b',
        'Message' => 'There is a temporary ban on high-value, dutiable shipments to the destination country.',
        'Meaning' => 'Ban on dutiable shipments that exceed the declared value to the destination country',
      ),
      5 => 
      array (
        'Code' => 'SV007',
        'Message' => 'Your package size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      6 => 
      array (
        'Code' => 'SV007a',
        'Message' => 'Your package size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      7 => 
      array (
        'Code' => 'SV007b',
        'Message' => 'Your shipment size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      8 => 
      array (
        'Code' => 'SV008',
        'Message' => 'WARNING: The number of packages in your shipment, the dimensions, or the weights may require special handling or may add to transit time.',
        'Meaning' => 'WARNING: Piece dimensional weight exceeded warning limit',
      ),
      9 => 
      array (
        'Code' => 'SV009',
        'Message' => 'WARNING: Your shipment value exceeds limits for destination country and may require pre-approval and added transit time.',
        'Meaning' => 'WARNING: Shipment declared value exceeded normal limits',
      ),
      10 => 
      array (
        'Code' => 'SV010a',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Origin routing code could not be determined',
      ),
      11 => 
      array (
        'Code' => 'SV010b',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Postal code not provided to determine the origin routing code.',
      ),
      12 => 
      array (
        'Code' => 'SV010c',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Postal code invalid for the purpose of identifying the origin routing code',
      ),
      13 => 
      array (
        'Code' => 'SV011a',
        'Message' => 'Consignee postal code or city name cannot be recognized. Please update this information and resubmit.',
        'Meaning' => 'Destination routing code could not be determined',
      ),
      14 => 
      array (
        'Code' => 'SV011b',
        'Message' => 'The system could not determine service for the destination. Please check the recipient postal code and resubmit.',
        'Meaning' => 'Postal code not provided to determine the destination routing code',
      ),
      15 => 
      array (
        'Code' => 'SV011c',
        'Message' => 'The system could not determine service for the destination. Please check the recipient postal code and country and resubmit.',
        'Meaning' => 'Postal code invalid for the purpose of identifying the destination routing code',
      ),
      16 => 
      array (
        'Code' => 'SV012a',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number was not found in the billing records',
      ),
      17 => 
      array (
        'Code' => 'SV012b',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region . Please enter',
        'Meaning' => 'Shipper account is not a domestically billed shipper account',
      ),
      18 => 
      array (
        'Code' => 'SV012c',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is for internal use only',
      ),
      19 => 
      array (
        'Code' => 'SV012d',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is for inbound use only',
      ),
      20 => 
      array (
        'Code' => 'SV012e',
        'Message' => 'Your shipping account number is marked for deletion. It cannot be used for shipments originating in this region. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is marked for deletion',
      ),
      21 => 
      array (
        'Code' => 'SV012f',
        'Message' => 'The shipment was not scheduled due to the credit status of shipping account. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is not in good credit standing',
      ),
      22 => 
      array (
        'Code' => 'SV018',
        'Message' => 'The system is unable to process shipments at this time. Please resubmit your request at a later time.',
        'Meaning' => 'Cannot complete the validation due to system failure',
      ),
      23 => 
      array (
        'Code' => 'SV022',
        'Message' => 'Your billing account number is for international billing only. Please correct the account or destination and resubmit.',
        'Meaning' => 'International country was not specified',
      ),
      24 => 
      array (
        'Code' => 'SV023a',
        'Message' => 'Duty and taxes charges for destination country must be billed to the recipient. Please change the duty payment option and resubmit.',
        'Meaning' => 'Billing option not available for the destination country',
      ),
      25 => 
      array (
        'Code' => 'SV025a',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      26 => 
      array (
        'Code' => 'SV025b',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      27 => 
      array (
        'Code' => 'SV025c',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      28 => 
      array (
        'Code' => 'SV026',
        'Message' => 'The insured value of your shipment exceeds 110% of the declared value. Please adjust the insured or declared value and resubmit.',
        'Meaning' => 'Insured value exceeds 110% of the declared value',
      ),
      29 => 
      array (
        'Code' => 'SV027a',
        'Message' => 'Your shipment date has already passed. Please correct the date and resubmit.',
        'Meaning' => 'Current date at the origin service area is already more than one day past the requested ship date',
      ),
      30 => 
      array (
        'Code' => 'SV027b',
        'Message' => 'Shipments cannot be scheduled more than ten days in the future. Please resubmit your request with an earlier shipment date.',
        'Meaning' => 'Requested date is more than 10 days from the current date at the origin service area',
      ),
      31 => 
      array (
        'Code' => 'SV028',
        'Message' => 'Your billing account number does not support door- to-airport or airport-to-airport service. Please select another service or account.',
        'Meaning' => 'Invalid Door-To option',
      ),
      32 => 
      array (
        'Code' => 'SV029',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      33 => 
      array (
        'Code' => 'SV029a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      34 => 
      array (
        'Code' => 'SV029b',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      35 => 
      array (
        'Code' => 'SV029c',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      36 => 
      array (
        'Code' => 'SV029d',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      37 => 
      array (
        'Code' => 'SV029e',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      38 => 
      array (
        'Code' => 'SV029f',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      39 => 
      array (
        'Code' => 'SV030',
        'Message' => 'The insurance limit is unavailable for your country. Please call Customer Services.',
        'Meaning' => 'The insurance limit is unavailable',
      ),
      40 => 
      array (
        'Code' => 'SV031',
        'Message' => 'WARNING:Your Account is a Cash Customer type account.  Please contact your customer service representative.',
        'Meaning' => 'Account type invalid.',
      ),
      41 => 
      array (
        'Code' => 'SV034a',
        'Message' => 'Sorry, our system is not able to assign Piece IDs to your shipment at the moment. Please try again later or call our DHL Customer Service Hotline for further assistance.',
        'Meaning' => 'Piece IDs not sufficient error',
      ),
      42 => 
      array (
        'Code' => 'SV034b',
        'Message' => 'Sorry, there are insufficient Piece IDs to be assigned to your shipment at the moment. Please try again later or call our DHL Customer Service Hotline for further assistance.',
        'Meaning' => 'Piece IDs is exhausted error.',
      ),
      43 => 
      array (
        'Code' => '107',
        'Message' => 'Incorrect or Incomplete Input Parameters',
        'Meaning' => 'Incorrect or Incomplete Input Parameters',
      ),
      44 => 
      array (
        'Code' => '108',
        'Message' => 'System Unavailable',
        'Meaning' => 'System Unavailable',
      ),
      45 => 
      array (
        'Code' => '111',
        'Message' => 'Error in parsing request XML',
        'Meaning' => 'Error in parsing request XML',
      ),
      46 => 
      array (
        'Code' => '112',
        'Message' => 'Request type could not be identified',
        'Meaning' => 'Request type could not be identified',
      ),
      47 => 
      array (
        'Code' => '113',
        'Message' => 'The same special service cannot be requested more than once',
        'Meaning' => 'The same special service cannot be requested more than once',
      ),
      48 => 
      array (
        'Code' => '114',
        'Message' => 'Wrong packaging Type entered. Packaging type can only be CP.',
        'Meaning' => 'Wrong packaging Type entered. Packaging type can only be CP.',
      ),
      49 => 
      array (
        'Code' => '123',
        'Message' => 'Query User Profile System Unavailable',
        'Meaning' => 'eCom backend - Query User Profile service is not available',
      ),
      50 => 
      array (
        'Code' => '124',
        'Message' => 'DCT System Unavailable',
        'Meaning' => 'DCT application is not available',
      ),
      51 => 
      array (
        'Code' => '150',
        'Message' => 'Error in the Data',
        'Meaning' => 'The data is not Valid',
      ),
      52 => 
      array (
        'Code' => '151',
        'Message' => 'Mandatory Required error',
        'Meaning' => 'Mandatory Field Missing Error',
      ),
      53 => 
      array (
        'Code' => '152',
        'Message' => 'Conditional Required Error',
        'Meaning' => 'Condition Field Missing Error',
      ),
      54 => 
      array (
        'Code' => '153',
        'Message' => 'Recurrence Error',
        'Meaning' => 'Data Recurrence Error',
      ),
      55 => 
      array (
        'Code' => '154',
        'Message' => 'Value Error',
        'Meaning' => 'Value Provided is wrong',
      ),
      56 => 
      array (
        'Code' => '155',
        'Message' => 'Type Error',
        'Meaning' => 'Type of data is wrong',
      ),
      57 => 
      array (
        'Code' => '156',
        'Message' => 'Length Error',
        'Meaning' => 'The length of the value is wrong',
      ),
      58 => 
      array (
        'Code' => '157',
        'Message' => 'Format Error',
        'Meaning' => 'The format of the value is wrong',
      ),
      59 => 
      array (
        'Code' => '158',
        'Message' => 'Shipment from Specified Country is not Supported',
        'Meaning' => 'Shipment cannot originate from this country',
      ),
      60 => 
      array (
        'Code' => '211',
        'Message' => 'Please contact DHL representative',
        'Meaning' => 'DHL Internal Error',
      ),
      61 => 
      array (
        'Code' => 'PLT002',
        'Message' => 'Paperless Trade is only available for dutiable shipments. Please check all mandatory fields required for Paperless Trade are correct or resubmit as a regular shipment. If further information is required, please contact your DHL representative.',
        'Meaning' => 'Paperless trade (PLT) shipment is only available for:
1) dutiable shipment
<IsDutiable> element must contain value of ‘Y’
2) <Dutiable> element must be included
3) <SpecialServiceType> element must contain value of ‘WY’
4) <DocImages> element must contain the commercial invoice or other supporting document images required for Customs clearance',
      ),
      62 => 
      array (
        'Code' => 'PLT003',
        'Message' => 'The origin country does not support Paperless shipment service. Please contact DHL representative for further information or resubmit as regular shipment.',
        'Meaning' => 'This is warning message if the shipper country does not support PLT shipment and it will be processed as regular shipment without WY Paperless Trade service.',
      ),
      63 => 
      array (
        'Code' => 'PLT004',
        'Message' => 'You are not subscribed for Paperless shipment service. Please contact your DHL technical representative for Paperless shipment subscription.',
        'Meaning' => 'If the client is not subscribed for PLT shipmet service.For <PLTStatus> field value of “D” – De-registered',
      ),
      64 => 
      array (
        'Code' => 'PLT005',
        'Message' => 'Paperless shipment is suspended. Please contact your DHL technical representative for reactivation.',
        'Meaning' => 'If the <PLTStatus> field value is “S” – Suspended, XML-PI Shipment Validation service will not allow to proceed with the shipment flow and return a error message to the XML-PI client',
      ),
      65 => 
      array (
        'Code' => 'PLT006',
        'Message' => 'Paperless shipment service is not allowed for one of these reasons: Shipper or receiver country doesn\'t support Paperless Service, the product selected doesn\'t support Paperless or the declared value entered is greater than the allowed limit. Please contact DHL representative for further information or resubmit as regular shipment.',
        'Meaning' => 'PLT capability failed due to:
1) Shipper or receiver country does not support Paperless Trade (WY)
2) the selected product does not support Paperless Trade (WY)
3) delcared value is exceeded the allowed value limit',
      ),
      66 => 
      array (
        'Code' => 'PLT007',
        'Message' => 'The total image sizes exceeded the maximum image size for Paperless shipment. Please check and resubmit with correct request message.',
        'Meaning' => 'The total document images for PLT shipment is exceeded the maximum images size in XMLPI application.',
      ),
      67 => 
      array (
        'Code' => 'RG001',
        'Message' => 'eCom backend Registration service is temporary not available. Please resubmit your request later.',
        'Meaning' => 'Registration service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      68 => 
      array (
        'Code' => 'RG002',
        'Message' => 'eCom backend Registration Service – account validation process is temporary not available. Please resubmit your request later.',
        'Meaning' => 'The account validation service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      69 => 
      array (
        'Code' => 'RG003',
        'Message' => 'eCom backend Registration service – Routing process is temporarily not available. Please resubmit your request later.',
        'Meaning' => 'The routing service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      70 => 
      array (
        'Code' => 'RG004',
        'Message' => 'Registration failed. Registration information is incomplete or invalid. Please check the registration information and resubmit your request again',
        'Meaning' => 'At least one item in the registration request is either missing or has an invalid value. Registration is rejected.',
      ),
      71 => 
      array (
        'Code' => 'RG005',
        'Message' => 'Registration failed. The software or data version is invalid. Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'The software / data version is not acceptable for registration. Registration is rejected.',
      ),
      72 => 
      array (
        'Code' => 'RG006',
        'Message' => 'Registration failed. Your eCom Site ID is invalid.  Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'Site ID has a “revoked” status. Re-registration is rejected.',
      ),
      73 => 
      array (
        'Code' => 'RG007',
        'Message' => 'Registration failed. It is not a valid location within US. Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'User’s location is not in the USA. Registration is rejected',
      ),
      74 => 
      array (
        'Code' => 'RG008',
        'Message' => 'Registration failed. Invalid Zip or Postal Code for the Country. Please correct and resubmit. For assistance, please contact your DHL technical service representative for further assistance',
        'Meaning' => 'There is no DHL service area code for the shipper and/or pickup address. Registration rejected.',
      ),
      75 => 
      array (
        'Code' => 'RG009',
        'Message' => 'Registration failed. Different shipper and pickup address is not allowed. Please correct and resubmit. For assistance, please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'The shipper address and pickup address have different service area codes. Registration cannot occur.',
      ),
      76 => 
      array (
        'Code' => 'RG010',
        'Message' => 'Account number not found. Please contact your DHL technical service representative for further assistance',
        'Meaning' => 'Account number specified by the user was not found in the NBC records. Registration cannot occur.',
      ),
      77 => 
      array (
        'Code' => 'RG011',
        'Message' => 'Invalid account Number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified is not a domestically billed account. Registration cannot occur.',
      ),
      78 => 
      array (
        'Code' => 'RG012',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified is for internal use only. Registration cannot occur.',
      ),
      79 => 
      array (
        'Code' => 'RG013',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified by the user is restricted to “inbound shipments only”. Registration cannot occur.',
      ),
      80 => 
      array (
        'Code' => 'RG014',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'The credit status of the account number specified by the user is not in “good standing” or “removed from credit suspension”.',
      ),
      81 => 
      array (
        'Code' => 'RG018',
        'Message' => 'Registration failed. eCom Site ID is invalid. Please contact your DHL technical service representative.',
        'Meaning' => 'Re-registration’s site ID not found in the database.',
      ),
      82 => 
      array (
        'Code' => 'RG019',
        'Message' => 'Registration failed. Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account validation cannot be completed',
      ),
      83 => 
      array (
        'Code' => 'RG020',
        'Message' => 'Invalid account number due to invalid account type. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account type is unknown',
      ),
      84 => 
      array (
        'Code' => 'RG021',
        'Message' => 'Registration failed. Invalid postcode. Please resubmit after checking the zip or postal code and city name. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Invalid postal code',
      ),
      85 => 
      array (
        'Code' => 'RG022',
        'Message' => 'Registration failed. City and zip or postal code does not match. Please correct and resubmit. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'City not found in Routing service',
      ),
      86 => 
      array (
        'Code' => 'RG023',
        'Message' => 'eCom backend Registration service – Account validation process is encountering some technical problem. Please resubmit your request at a later time. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account validation service can not be located',
      ),
      87 => 
      array (
        'Code' => 'RG024',
        'Message' => 'eCom backend Registration service database is encountering some technical problem. Please resubmit your request at a later time. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'eCom backend database error',
      ),
      88 => 
      array (
        'Code' => 'RG025',
        'Message' => 'Cash Account not allowed. Please contact your DHL customer service representative.',
        'Meaning' => 'Cash Account not allowed.',
      ),
      89 => 
      array (
        'Code' => 'RG026',
        'Message' => 'The eCom Site ID is unable to process Registration. Please contact your DHL technical representative.',
        'Meaning' => 'eCom backend is not able to locate the pickup location',
      ),
      90 => 
      array (
        'Code' => 'RG027',
        'Message' => 'Registration failed. The billing type for your account is invalid to register.  Enter another account and resubmit or you’re your DHL technical representative.',
        'Meaning' => 'Billing type for account is invalid.',
      ),
      91 => 
      array (
        'Code' => 'RG028',
        'Message' => 'Invalid eCom Site ID. Please contact your DHL technical representative for assistance.',
        'Meaning' => 'Site Id not found. Unable to retrieve the PLT Status.

The site Id is invalid.',
      ),
      92 => 
      array (
        'Code' => 'Shipment Validation- EA Region',
        'Message' => '',
        'Meaning' => '',
      ),
      93 => 
      array (
        'Code' => 'Code',
        'Message' => 'Message',
        'Meaning' => 'Meaning',
      ),
      94 => 
      array (
        'Code' => 'SV003',
        'Message' => 'Consignee country not found. Please check your entries and resubmit.',
        'Meaning' => 'Consignee country not found',
      ),
      95 => 
      array (
        'Code' => 'SV004',
        'Message' => 'Consignee country not active. Please check your entries and resubmit.',
        'Meaning' => 'Consignee country not active',
      ),
      96 => 
      array (
        'Code' => 'SV005',
        'Message' => 'DHL has a temporary restriction on shipments to the consignee country. Please check your entries and resubmit.',
        'Meaning' => 'Temporary ban on consignee country',
      ),
      97 => 
      array (
        'Code' => 'SV006a',
        'Message' => 'There is a temporary ban on dutiable shipments to consignee country.',
        'Meaning' => 'Temporary ban on dutiable shipments to consignee country',
      ),
      98 => 
      array (
        'Code' => 'SV006b',
        'Message' => 'There is a temporary ban on high-value, dutiable shipments to the destination country.',
        'Meaning' => 'Ban on dutiable shipments that exceed the declared value to the destination country',
      ),
      99 => 
      array (
        'Code' => 'SV007',
        'Message' => 'Your package size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      100 => 
      array (
        'Code' => 'SV007a',
        'Message' => 'Your package size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      101 => 
      array (
        'Code' => 'SV007b',
        'Message' => 'Your shipment size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      102 => 
      array (
        'Code' => 'SV008',
        'Message' => 'WARNING: The number of packages in your shipment, the dimensions, or the weights may require special handling or may add to transit time.',
        'Meaning' => 'WARNING: Piece dimensional weight exceeded warning limit',
      ),
      103 => 
      array (
        'Code' => 'SV009',
        'Message' => 'WARNING: Your shipment value exceeds limits for destination country and may require pre-approval and added transit time.',
        'Meaning' => 'WARNING: Shipment declared value exceeded normal limits',
      ),
      104 => 
      array (
        'Code' => 'SV010a',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Origin routing code could not be determined',
      ),
      105 => 
      array (
        'Code' => 'SV010b',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Postal code not provided to determine the origin routing code.',
      ),
      106 => 
      array (
        'Code' => 'SV010c',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Postal code invalid for the purpose of identifying the origin routing code',
      ),
      107 => 
      array (
        'Code' => 'SV010d',
        'Message' => 'Warning - Courier Route unavailable for shipment',
        'Meaning' => 'Courier route code not available for the requested account which mainly is IMPex account in DCI cache database for XML PI v4.1 change.',
      ),
      108 => 
      array (
        'Code' => 'SV011a',
        'Message' => 'Consignee postal code or city name cannot be recognized. Please update this information and resubmit.',
        'Meaning' => 'Destination routing code could not be determined',
      ),
      109 => 
      array (
        'Code' => 'SV011b',
        'Message' => 'The system could not determine service for the destination. Please check the recipient postal code and resubmit.',
        'Meaning' => 'Postal code not provided to determine the destination routing code',
      ),
      110 => 
      array (
        'Code' => 'SV011c',
        'Message' => 'The system could not determine service for the destination. Please check the recipient postal code and country and resubmit.',
        'Meaning' => 'Postal code invalid for the purpose of identifying the destination routing code',
      ),
      111 => 
      array (
        'Code' => 'SV012a',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number was not found in the billing records',
      ),
      112 => 
      array (
        'Code' => 'SV012b',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region . Please enter',
        'Meaning' => 'Shipper account is not a domestically billed shipper account',
      ),
      113 => 
      array (
        'Code' => 'SV012c',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is for internal use only',
      ),
      114 => 
      array (
        'Code' => 'SV012d',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is for inbound use only',
      ),
      115 => 
      array (
        'Code' => 'SV012e',
        'Message' => 'Your shipping account number is marked for deletion. It cannot be used for shipments originating in this region. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is marked for deletion',
      ),
      116 => 
      array (
        'Code' => 'SV012f',
        'Message' => 'The shipment was not scheduled due to the credit status of shipping account. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is not in good credit standing',
      ),
      117 => 
      array (
        'Code' => 'SV013a',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      118 => 
      array (
        'Code' => 'SV013b',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      119 => 
      array (
        'Code' => 'SV013c',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      120 => 
      array (
        'Code' => 'SV013d',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      121 => 
      array (
        'Code' => 'SV014a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipment bill-to account number was not found in the billing records',
      ),
      122 => 
      array (
        'Code' => 'SV014b',
        'Message' => 'Your billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Shipment bill-to account is not a domestically billed shipper account',
      ),
      123 => 
      array (
        'Code' => 'SV014c',
        'Message' => 'Your billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Shipment bill-to account is for internal use only',
      ),
      124 => 
      array (
        'Code' => 'SV014d',
        'Message' => 'Your billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Shipment bill-to account is for inbound use only',
      ),
      125 => 
      array (
        'Code' => 'SV014e',
        'Message' => 'The shipment was not scheduled due to the credit status of billing account. Please enter another account.',
        'Meaning' => 'Shipment bill-to account is not in good credit standing',
      ),
      126 => 
      array (
        'Code' => 'SV015a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      127 => 
      array (
        'Code' => 'SV015b',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      128 => 
      array (
        'Code' => 'SV015c',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      129 => 
      array (
        'Code' => 'SV015d',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      130 => 
      array (
        'Code' => 'SV016a',
        'Message' => 'The system could not verify your duty billing account number. Please correct this number and resubmit.',
        'Meaning' => 'Duty bill-to account number was not found in the billing records',
      ),
      131 => 
      array (
        'Code' => 'SV016b',
        'Message' => 'Your duty billing account number cannot be used for shipments originating in the region. Please enter another account number and resubmit.',
        'Meaning' => 'Duty bill-to account is for internal use only',
      ),
      132 => 
      array (
        'Code' => 'SV016c',
        'Message' => 'Your duty billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Duty bill-to account is for inbound use only',
      ),
      133 => 
      array (
        'Code' => 'SV016d',
        'Message' => 'The shipment was not scheduled due to the credit status of duty billing account number. Please enter another account and resubmit.',
        'Meaning' => 'Duty bill-to account is not in good credit standing',
      ),
      134 => 
      array (
        'Code' => 'SV017a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      135 => 
      array (
        'Code' => 'SV017b',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      136 => 
      array (
        'Code' => 'SV017c',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      137 => 
      array (
        'Code' => 'SV017d',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      138 => 
      array (
        'Code' => 'SV018',
        'Message' => 'The system is unable to process shipments at this time. Please resubmit your request at a later time.',
        'Meaning' => 'Cannot complete the validation due to system failure',
      ),
      139 => 
      array (
        'Code' => 'SV019',
        'Message' => 'Shipments to this city in Consignee address cannot have duties/taxes billed to the shipper. Please change the duty payment option and resubmit.',
        'Meaning' => 'Payment method was not bill recipient',
      ),
      140 => 
      array (
        'Code' => 'SV021',
        'Message' => 'Shipments to Consignee country cannot be billed to the recipient. Please change the payment option and resubmit.',
        'Meaning' => 'Invalid transport collect billing option (shipments to ship-to country cannot be billed to recipient)',
      ),
      141 => 
      array (
        'Code' => 'SV022',
        'Message' => 'Your billing account number is for international billing only. Please correct the account or destination and resubmit.',
        'Meaning' => 'International country was not specified',
      ),
      142 => 
      array (
        'Code' => 'SV023a',
        'Message' => 'Duty and taxes charges for destination country must be billed to the recipient. Please change the duty payment option and resubmit.',
        'Meaning' => 'Billing option not available for the destination country',
      ),
      143 => 
      array (
        'Code' => 'SV023b',
        'Message' => 'Duty/tax charges must be billed to recipients in destination city/country. Please change the duty payment option and resubmit.',
        'Meaning' => 'Billing option not available for the specific service area of the destination country',
      ),
      144 => 
      array (
        'Code' => 'SV024',
        'Message' => 'The destination country requires recipients to pay duties and taxes. Please change your duty/tax billing option to recipient.',
        'Meaning' => 'Invalid duty payment option',
      ),
      145 => 
      array (
        'Code' => 'SV025a',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      146 => 
      array (
        'Code' => 'SV025b',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      147 => 
      array (
        'Code' => 'SV025c',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      148 => 
      array (
        'Code' => 'SV026',
        'Message' => 'The insured value of your shipment exceeds 110% of the declared value. Please adjust the insured or declared value and resubmit.',
        'Meaning' => 'Insured value exceeds 110% of the declared value',
      ),
      149 => 
      array (
        'Code' => 'SV027a',
        'Message' => 'Your shipment date has already passed. Please correct the date and resubmit.',
        'Meaning' => 'Current date at the origin service area is already more than one day past the requested ship date',
      ),
      150 => 
      array (
        'Code' => 'SV027b',
        'Message' => 'Shipments cannot be scheduled more than ten days in the future. Please resubmit your request with an earlier shipment date.',
        'Meaning' => 'Requested date is more than 10 days from the current date at the origin service area',
      ),
      151 => 
      array (
        'Code' => 'SV028',
        'Message' => 'Your billing account number does not support door- to-airport or airport-to-airport service. Please select another service or account.',
        'Meaning' => 'Invalid Door-To option',
      ),
      152 => 
      array (
        'Code' => 'SV029',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      153 => 
      array (
        'Code' => 'SV029a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      154 => 
      array (
        'Code' => 'SV029b',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      155 => 
      array (
        'Code' => 'SV029c',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      156 => 
      array (
        'Code' => 'SV029d',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      157 => 
      array (
        'Code' => 'SV029e',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      158 => 
      array (
        'Code' => 'SV029f',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      159 => 
      array (
        'Code' => 'SV030',
        'Message' => 'The insurance limit is unavailable for your country. Please call Customer Services.',
        'Meaning' => 'The insurance limit is unavailable',
      ),
      160 => 
      array (
        'Code' => 'SV031',
        'Message' => 'WARNING:Your Account is a Cash Customer type account.  Please contact your customer service representative.',
        'Meaning' => 'Account type invalid.',
      ),
      161 => 
      array (
        'Code' => 'SV034a',
        'Message' => 'Sorry, our system is not able to assign Piece IDs to your shipment at the moment. Please try again later or call our DHL Customer Service Hotline for further assistance.',
        'Meaning' => 'Piece IDs not sufficient error',
      ),
      162 => 
      array (
        'Code' => 'SV034b',
        'Message' => 'Sorry, there are insufficient Piece IDs to be assigned to your shipment at the moment. Please try again later or call our DHL Customer Service Hotline for further assistance.',
        'Meaning' => 'Piece IDs is exhausted error.',
      ),
      163 => 
      array (
        'Code' => 'SV035',
        'Message' => 'We are unable to service this ZIP code. Please contact your DHL sales representative for further assistance',
        'Meaning' => 'Postcode is incorrect and failed in routing',
      ),
      164 => 
      array (
        'Code' => 'SV050',
        'Message' => 'Local Product Code not configured for the country. Please contact technical service representative.',
        'Meaning' => '',
      ),
      165 => 
      array (
        'Code' => 'SV051',
        'Message' => 'POD is not available for shipments to destination country. Please unselect the POD option and resubmit.',
        'Meaning' => '',
      ),
      166 => 
      array (
        'Code' => '107',
        'Message' => 'Incorrect or Incomplete Input Parameters',
        'Meaning' => 'Incorrect or Incomplete Input Parameters',
      ),
      167 => 
      array (
        'Code' => '108',
        'Message' => 'System Unavailable',
        'Meaning' => 'System Unavailable',
      ),
      168 => 
      array (
        'Code' => '111',
        'Message' => 'Error in parsing request XML',
        'Meaning' => 'Error in parsing request XML',
      ),
      169 => 
      array (
        'Code' => '112',
        'Message' => 'Request type could not be identified',
        'Meaning' => 'Request type could not be identified',
      ),
      170 => 
      array (
        'Code' => '113',
        'Message' => 'The same special service cannot be requested more than once',
        'Meaning' => 'The same special service cannot be requested more than once',
      ),
      171 => 
      array (
        'Code' => '114',
        'Message' => 'Wrong packaging Type entered. Packaging type can only be CP.',
        'Meaning' => 'Wrong packaging Type entered. Packaging type can only be CP.',
      ),
      172 => 
      array (
        'Code' => '123',
        'Message' => 'Query User Profile System Unavailable',
        'Meaning' => 'eCom backend - Query User Profile service is not available',
      ),
      173 => 
      array (
        'Code' => '124',
        'Message' => 'DCT System Unavailable',
        'Meaning' => 'DCT application is not available',
      ),
      174 => 
      array (
        'Code' => '150',
        'Message' => 'Error in the Data',
        'Meaning' => 'The data is not Valid',
      ),
      175 => 
      array (
        'Code' => '151',
        'Message' => 'Mandatory Required error',
        'Meaning' => 'Mandatory Field Missing Error',
      ),
      176 => 
      array (
        'Code' => '152',
        'Message' => 'Conditional Required Error',
        'Meaning' => 'Condition Field Missing Error',
      ),
      177 => 
      array (
        'Code' => '153',
        'Message' => 'Recurrence Error',
        'Meaning' => 'Data Recurrence Error',
      ),
      178 => 
      array (
        'Code' => '154',
        'Message' => 'Value Error',
        'Meaning' => 'Value Provided is wrong',
      ),
      179 => 
      array (
        'Code' => '155',
        'Message' => 'Type Error',
        'Meaning' => 'Type of data is wrong',
      ),
      180 => 
      array (
        'Code' => '156',
        'Message' => 'Length Error',
        'Meaning' => 'The length of the value is wrong',
      ),
      181 => 
      array (
        'Code' => '157',
        'Message' => 'Format Error',
        'Meaning' => 'The format of the value is wrong',
      ),
      182 => 
      array (
        'Code' => '158',
        'Message' => 'Shipment from Specified Country is not Supported',
        'Meaning' => 'Shipment cannot originate from this country',
      ),
      183 => 
      array (
        'Code' => '211',
        'Message' => 'Please contact DHL representative',
        'Meaning' => 'DHL Internal Error',
      ),
      184 => 
      array (
        'Code' => 'PLT002',
        'Message' => 'Paperless Trade is only available for dutiable shipments. Please check all mandatory fields required for Paperless Trade are correct or resubmit as a regular shipment. If further information is required, please contact your DHL representative.',
        'Meaning' => 'Paperless trade (PLT) shipment is only available for:
1) dutiable shipment
<IsDutiable> element must contain value of ‘Y’
2) <Dutiable> element must be included
3) <SpecialServiceType> element must contain value of ‘WY’
4) <DocImages> element must contain the commercial invoice or other supporting document images required for Customs clearance',
      ),
      185 => 
      array (
        'Code' => 'PLT003',
        'Message' => 'The origin country does not support Paperless shipment service. Please contact DHL representative for further information or resubmit as regular shipment.',
        'Meaning' => 'This is warning message if the shipper country does not support PLT shipment and it will be processed as regular shipment without WY Paperless Trade service.',
      ),
      186 => 
      array (
        'Code' => 'PLT004',
        'Message' => 'You are not subscribed for Paperless shipment service. Please contact your DHL technical representative for Paperless shipment subscription.',
        'Meaning' => 'If the client is not subscribed for PLT shipmet service.For <PLTStatus> field value of “D” – De-registered',
      ),
      187 => 
      array (
        'Code' => 'PLT005',
        'Message' => 'Paperless shipment is suspended. Please contact your DHL technical representative for reactivation.',
        'Meaning' => 'If the <PLTStatus> field value is “S” – Suspended, XML-PI Shipment Validation service will not allow to proceed with the shipment flow and return a error message to the XML-PI client',
      ),
      188 => 
      array (
        'Code' => 'PLT006',
        'Message' => 'Paperless shipment service is not allowed for one of these reasons: Shipper or receiver country doesn\'t support Paperless Service, the product selected doesn\'t support Paperless or the declared value entered is greater than the allowed limit. Please contact DHL representative for further information or resubmit as regular shipment.',
        'Meaning' => 'PLT capability failed due to:
1) Shipper or receiver country does not support Paperless Trade (WY)
2) the selected product does not support Paperless Trade (WY)
3) delcared value is exceeded the allowed value limit',
      ),
      189 => 
      array (
        'Code' => 'PLT007',
        'Message' => 'The total image sizes exceeded the maximum image size for Paperless shipment. Please check and resubmit with correct request message.',
        'Meaning' => 'The total document images for PLT shipment is exceeded the maximum images size in XMLPI application.',
      ),
      190 => 
      array (
        'Code' => 'RG001',
        'Message' => 'eCom backend Registration service is temporary not available. Please resubmit your request later.',
        'Meaning' => 'Registration service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      191 => 
      array (
        'Code' => 'RG002',
        'Message' => 'eCom backend Registration Service – account validation process is temporary not available. Please resubmit your request later.',
        'Meaning' => 'The account validation service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      192 => 
      array (
        'Code' => 'RG003',
        'Message' => 'eCom backend Registration service – Routing process is temporarily not available. Please resubmit your request later.',
        'Meaning' => 'The routing service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      193 => 
      array (
        'Code' => 'RG004',
        'Message' => 'Registration failed. Registration information is incomplete or invalid. Please check the registration information and resubmit your request again',
        'Meaning' => 'At least one item in the registration request is either missing or has an invalid value. Registration is rejected.',
      ),
      194 => 
      array (
        'Code' => 'RG005',
        'Message' => 'Registration failed. The software or data version is invalid. Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'The software / data version is not acceptable for registration. Registration is rejected.',
      ),
      195 => 
      array (
        'Code' => 'RG006',
        'Message' => 'Registration failed. Your eCom Site ID is invalid.  Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'Site ID has a “revoked” status. Re-registration is rejected.',
      ),
      196 => 
      array (
        'Code' => 'RG007',
        'Message' => 'Registration failed. It is not a valid location within US. Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'User’s location is not in the USA. Registration is rejected',
      ),
      197 => 
      array (
        'Code' => 'RG008',
        'Message' => 'Registration failed. Invalid Zip or Postal Code for the Country. Please correct and resubmit. For assistance, please contact your DHL technical service representative for further assistance',
        'Meaning' => 'There is no DHL service area code for the shipper and/or pickup address. Registration rejected.',
      ),
      198 => 
      array (
        'Code' => 'RG009',
        'Message' => 'Registration failed. Different shipper and pickup address is not allowed. Please correct and resubmit. For assistance, please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'The shipper address and pickup address have different service area codes. Registration cannot occur.',
      ),
      199 => 
      array (
        'Code' => 'RG010',
        'Message' => 'Account number not found. Please contact your DHL technical service representative for further assistance',
        'Meaning' => 'Account number specified by the user was not found in the NBC records. Registration cannot occur.',
      ),
      200 => 
      array (
        'Code' => 'RG011',
        'Message' => 'Invalid account Number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified is not a domestically billed account. Registration cannot occur.',
      ),
      201 => 
      array (
        'Code' => 'RG012',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified is for internal use only. Registration cannot occur.',
      ),
      202 => 
      array (
        'Code' => 'RG013',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified by the user is restricted to “inbound shipments only”. Registration cannot occur.',
      ),
      203 => 
      array (
        'Code' => 'RG014',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'The credit status of the account number specified by the user is not in “good standing” or “removed from credit suspension”.',
      ),
      204 => 
      array (
        'Code' => 'RG018',
        'Message' => 'Registration failed. eCom Site ID is invalid. Please contact your DHL technical service representative.',
        'Meaning' => 'Re-registration’s site ID not found in the database.',
      ),
      205 => 
      array (
        'Code' => 'RG019',
        'Message' => 'Registration failed. Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account validation cannot be completed',
      ),
      206 => 
      array (
        'Code' => 'RG020',
        'Message' => 'Invalid account number due to invalid account type. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account type is unknown',
      ),
      207 => 
      array (
        'Code' => 'RG021',
        'Message' => 'Registration failed. Invalid postcode. Please resubmit after checking the zip or postal code and city name. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Invalid postal code',
      ),
      208 => 
      array (
        'Code' => 'RG022',
        'Message' => 'Registration failed. City and zip or postal code does not match. Please correct and resubmit. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'City not found in Routing service',
      ),
      209 => 
      array (
        'Code' => 'RG023',
        'Message' => 'eCom backend Registration service – Account validation process is encountering some technical problem. Please resubmit your request at a later time. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account validation service can not be located',
      ),
      210 => 
      array (
        'Code' => 'RG024',
        'Message' => 'eCom backend Registration service database is encountering some technical problem. Please resubmit your request at a later time. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'eCom backend database error',
      ),
      211 => 
      array (
        'Code' => 'RG025',
        'Message' => 'Cash Account not allowed. Please contact your DHL customer service representative.',
        'Meaning' => 'Cash Account not allowed.',
      ),
      212 => 
      array (
        'Code' => 'RG026',
        'Message' => 'The eCom Site ID is unable to process Registration. Please contact your DHL technical representative.',
        'Meaning' => 'eCom backend is not able to locate the pickup location',
      ),
      213 => 
      array (
        'Code' => 'RG027',
        'Message' => 'Registration failed. The billing type for your account is invalid to register.  Enter another account and resubmit or you’re your DHL technical representative.',
        'Meaning' => 'Billing type for account is invalid.',
      ),
      214 => 
      array (
        'Code' => 'RG028',
        'Message' => 'Invalid eCom Site ID. Please contact your DHL technical representative for assistance.',
        'Meaning' => 'Site Id not found. Unable to retrieve the PLT Status.

The site Id is invalid.',
      ),
      215 => 
      array (
        'Code' => 'Tracking Service',
        'Message' => '',
        'Meaning' => '',
      ),
      216 => 
      array (
        'Code' => 'Code',
        'Message' => 'Message',
        'Meaning' => 'Meaning',
      ),
      217 => 
      array (
        'Code' => '100',
        'Message' => 'Error Validating incoming request XML  + <No Site ID provided> OR <No Password provided>',
        'Meaning' => 'XML PI Site ID or password is not provided in the request xml',
      ),
      218 => 
      array (
        'Code' => '102',
        'Message' => 'No Shipper Reference',
        'Meaning' => 'No value entered for Shipper Reference field',
      ),
      219 => 
      array (
        'Code' => '104',
        'Message' => 'No Shipper AccoutNumber',
        'Meaning' => 'No value entered for Shipper Account Number field',
      ),
      220 => 
      array (
        'Code' => '105',
        'Message' => 'Invalid  Begin date <date> date must be of yyyy-MM-dd format',
        'Meaning' => 'invalid date format for Begin date in Unknown tracking request.',
      ),
      221 => 
      array (
        'Code' => '106',
        'Message' => 'Too many Shipments Found.',
        'Meaning' => 'Number of results returned exceeds maximum allowable limit set by  system.',
      ),
      222 => 
      array (
        'Code' => '107',
        'Message' => 'Incorrect or Incomplete Input Parameters',
        'Meaning' => 'Request xml is not form correctly',
      ),
      223 => 
      array (
        'Code' => '108',
        'Message' => 'System Unavailable',
        'Meaning' => 'If  the backend is unavailable and not exact error message is available (it will be the default message for tracking message).',
      ),
      224 => 
      array (
        'Code' => '110',
        'Message' => 'Invalid Date Range',
        'Meaning' => 'End date has to be after Begin date',
      ),
      225 => 
      array (
        'Code' => '111',
        'Message' => 'Error in parsing request XML',
        'Meaning' => 'The Request XML is failed against the XSD.',
      ),
      226 => 
      array (
        'Code' => '118',
        'Message' => 'The system could not determine the Air Way Bill Number(s) associated with this request. Please contact DHL for further assistance.',
        'Meaning' => 'For Unknown Query: Any Exception occurred during parsing the response or any invalid data obtained from backend.',
      ),
      227 => 
      array (
        'Code' => '119',
        'Message' => 'The system could not determine the Shipper Reference associated with this request. Please contact DHL for further assistance.',
        'Meaning' => 'For Unknown Query: Any Exception occurred during parsing the response or any invalid data obtained from backend.',
      ),
      228 => 
      array (
        'Code' => '200',
        'Message' => 'No AirwayBill Numbers received',
        'Meaning' => 'No air waybill number being provided in the <AWBNumber> element',
      ),
      229 => 
      array (
        'Code' => '201',
        'Message' => 'Multiple shipper refrences are not supported.',
        'Meaning' => 'Multiple references are not allowed',
      ),
      230 => 
      array (
        'Code' => '202',
        'Message' => 'Contact DHL to get information on the requested AWB Number',
        'Meaning' => 'The air waybill number could be incorrect and contact DHL representative to check the tracked air waybill number',
      ),
      231 => 
      array (
        'Code' => '207',
        'Message' => 'Invalid AWBNumber',
        'Meaning' => 'Waybill number is incorrect',
      ),
      232 => 
      array (
        'Code' => '208',
        'Message' => 'Call DHL for AWBNumber',
        'Meaning' => 'Waybill number is not exists and please contact DHL representative',
      ),
      233 => 
      array (
        'Code' => '209',
        'Message' => 'No Shipments Found for AWBNumber',
        'Meaning' => 'The tracked waybill number is not available',
      ),
      234 => 
      array (
        'Code' => '210',
        'Message' => 'Call DHL for LPNumber',
        'Meaning' => 'License Plate number or Piece ID is not exists and please contact DHL representative',
      ),
      237 => 
      array (
        'Code' => 'RA001',
        'Message' => 'The system was unable to determine the correct rate type for your shipment.',
        'Meaning' => 'The system was unable to determine the correct rate type for your shipment.',
      ),
      238 => 
      array (
        'Code' => 'RA002',
        'Message' => 'A rate could not be determined for the address specified. Please correct and re-submit. For assistance please call technical service representative.',
        'Meaning' => 'Shipper address information for this shipment is incomplete or invalid. Please correct your address information and resubmit.',
      ),
      239 => 
      array (
        'Code' => 'RA003',
        'Message' => 'The system was unable to estimate charges for your shipment. For assistance please call customer service representative.',
        'Meaning' => 'The system was unable to estimate charges for your shipment. For assistance please call customer service representative.',
      ),
      240 => 
      array (
        'Code' => 'RA004',
        'Message' => 'The shipper or billing account is not valid or is not appropriate for this usage. Change the account and resubmit.',
        'Meaning' => 'The shipper or billing account is not valid or is not appropriate for this usage. Change the account and resubmit',
      ),
      241 => 
      array (
        'Code' => 'RA005',
        'Message' => 'The consignee country code is invalid. Please contact technical service representative.',
        'Meaning' => 'The consignee country code is invalid. Please contact technical service representative.',
      ),
      242 => 
      array (
        'Code' => 'RA006',
        'Message' => 'Your account rates are not available here. Please contact your DHL sales representative to obtain your special rates or call technical service representative.',
        'Meaning' => 'Your account rates are not available here. Please contact your DHL sales representative to obtain your special rates or call technical service representative.',
      ),
      243 => 
      array (
        'Code' => 'RA007',
        'Message' => 'We are unable to service this ZIP code. Please contact your DHL sales representative for further assistance.',
        'Meaning' => 'We are unable to service this ZIP code. Please contact your DHL sales representative for further assistance.',
      ),
      244 => 
      array (
        'Code' => 'RA008',
        'Message' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
        'Meaning' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
      ),
      245 => 
      array (
        'Code' => 'RA009',
        'Message' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
        'Meaning' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
      ),
      246 => 
      array (
        'Code' => 'RA010',
        'Message' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
        'Meaning' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
      ),
      247 => 
      array (
        'Code' => 'RA011',
        'Message' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
        'Meaning' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
      ),
      248 => 
      array (
        'Code' => 'RA012',
        'Message' => 'Package weight exceeds limits for consignee country. Please contact your customer service representative.',
        'Meaning' => 'Package weight exceeds limits for consignee country. Please contact your customer service representative.',
      ),
      249 => 
      array (
        'Code' => 'RA013',
        'Message' => 'Total shipment weight exceeds limits for consignee country. Please contact your customer service representative.',
        'Meaning' => 'Total shipment weight exceeds limits for consignee country. Please contact your customer service representative.',
      ),
      250 => 
      array (
        'Code' => 'RA014',
        'Message' => 'Warning Note! Dimensions or weights may require special handling or add to transit time. Please contact your customer service representative.',
        'Meaning' => 'Warning Note! Dimensions or weights may require special handling or add to transit time. Please contact your customer service representative.',
      ),
      251 => 
      array (
        'Code' => 'RA015',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
      ),
      252 => 
      array (
        'Code' => 'RA016',
        'Message' => 'A system service is unavailable. Please resubmit your request at a later time.',
        'Meaning' => 'A system service is unavailable. Please resubmit your request at a later time.',
      ),
      253 => 
      array (
        'Code' => 'RA017',
        'Message' => 'TDD/Jumbo/Jumbo Junior products should not be used in conjunction with 95/96 account numbers',
        'Meaning' => 'TDD/Jumbo/Jumbo Junior products should not be used in conjunction with 95/96 account numbers',
      ),
      254 => 
      array (
        'Code' => 'RA018',
        'Message' => 'System failure. Please contact your technical service representative.',
        'Meaning' => 'Backend unavailable',
      ),
      255 => 
      array (
        'Code' => 'RA019',
        'Message' => 'Invalid sector indicator.',
        'Meaning' => 'Invalid sector indicator.',
      ),
      256 => 
      array (
        'Code' => 'RA020',
        'Message' => 'Your account is not valid or is not appropriate for this usage.',
        'Meaning' => 'Invalid Account Number.',
      ),
      257 => 
      array (
        'Code' => 'RA021',
        'Message' => 'Invalid local or global product code.',
        'Meaning' => 'Local or Global Product is incorrect.Please refer the ReferenceData provided or call our DHL representative.',
      ),
      258 => 
      array (
        'Code' => 'RA022',
        'Message' => 'Invalid weight or weight decimals.',
        'Meaning' => 'Invalid weight or weight decimals.',
      ),
      259 => 
      array (
        'Code' => 'RA023',
        'Message' => 'Invalid insurance value or insurance decimals.',
        'Meaning' => 'Invalid insurance value or insurance decimals.',
      ),
      260 => 
      array (
        'Code' => 'RA024',
        'Message' => 'Invalid currency code.',
        'Meaning' => 'Invalid currency code.',
      ),
      261 => 
      array (
        'Code' => 'RA025',
        'Message' => 'Invalid Special Service Charge Code.',
        'Meaning' => 'Invalid Special Service Charge Code. Please refer to the ReferenceData provided or call our DHL representative.',
      ),
      262 => 
      array (
        'Code' => 'RA026',
        'Message' => 'Floating sur-charges not allowed for sector.',
        'Meaning' => 'Floating sur-charges not allowed for sector.',
      ),
      263 => 
      array (
        'Code' => 'RA027',
        'Message' => 'Sector do not have min. insurance, charges not computed.',
        'Meaning' => 'Sector do not have min. insurance, charges not computed.',
      ),
      264 => 
      array (
        'Code' => 'RA028',
        'Message' => 'Insurance is not configured at system parameter.',
        'Meaning' => 'Insurance is not configured at system parameter.',
      ),
      265 => 
      array (
        'Code' => 'RA029',
        'Message' => 'Account/contract/product insurance setup(s) not found.',
        'Meaning' => 'Account/contract/product insurance setup(s) not found.',
      ),
      266 => 
      array (
        'Code' => 'RA030',
        'Message' => 'Product surcharge is not allowed.',
        'Meaning' => 'Product surcharge is not allowed.',
      ),
      267 => 
      array (
        'Code' => 'RA031',
        'Message' => 'No product surcharge configured at account / system.',
        'Meaning' => 'No product surcharge configured at account / system.',
      ),
      268 => 
      array (
        'Code' => 'RA032',
        'Message' => 'Rate cannot be determined for this combination of product code, origin location and destination.',
        'Meaning' => 'Rate cannot be determined for this combination of product code, origin location and destination.',
      ),
      269 => 
      array (
        'Code' => 'RA033',
        'Message' => 'Insurance currency is invalid for sector.',
        'Meaning' => 'Insurance currency is invalid for sector.',
      ),
      270 => 
      array (
        'Code' => 'RA034',
        'Message' => 'The system was unable to estimate charges for your shipment.',
        'Meaning' => 'The system was unable to estimate charges for your shipment.',
      ),
      271 => 
      array (
        'Code' => 'RA035',
        'Message' => 'Weight sur-charges not allowed for sector.',
        'Meaning' => 'Weight sur-charges not allowed for sector.',
      ),
      272 => 
      array (
        'Code' => 'RA036',
        'Message' => 'Zip code format not present for the country.',
        'Meaning' => 'Zip code format not present for the country.',
      ),
      273 => 
      array (
        'Code' => 'RA037',
        'Message' => 'No floating surcharge configured.',
        'Meaning' => 'No floating surcharge configured.',
      ),
      274 => 
      array (
        'Code' => 'RA038',
        'Message' => 'No weight surcharge configured.',
        'Meaning' => 'No weight surcharge configured.',
      ),
      275 => 
      array (
        'Code' => 'RA039',
        'Message' => 'Your account is not valid or is not appropriate for this usage.',
        'Meaning' => 'Your account is not valid or is not appropriate for this usage.',
      ),
      276 => 
      array (
        'Code' => 'Pick Up Service - AM Region',
        'Message' => '',
        'Meaning' => '',
      ),
      277 => 
      array (
        'Code' => 'Code',
        'Message' => 'Message',
        'Meaning' => 'Meaning',
      ),
      278 => 
      array (
        'Code' => 'PU003',
        'Message' => 'Cannot schedule a pickup due to unknown city or Zip/postal code. Please contact your technical service representative.',
        'Meaning' => 'Cannot schedule a pickup due to unknown city or Zip/postal code. Please contact your technical service representative.',
      ),
      279 => 
      array (
        'Code' => 'PU004',
        'Message' => 'Account number not valid for pickup.',
        'Meaning' => 'Account number not valid for pickup.',
      ),
      280 => 
      array (
        'Code' => 'PU005',
        'Message' => 'Unable to verify account number',
        'Meaning' => 'The system could not verify your account number.',
      ),
      281 => 
      array (
        'Code' => 'PU006',
        'Message' => 'Unable to verify account number. To schedule a pickup call customer service representative',
        'Meaning' => 'The system could not verify your account number.Please call the customer service representative',
      ),
      282 => 
      array (
        'Code' => 'PU007a',
        'Message' => 'Pickup NOT scheduled due to credit status of account number.',
        'Meaning' => 'A pickup was NOT scheduled due to the credit status of account.',
      ),
      283 => 
      array (
        'Code' => 'PU007b',
        'Message' => 'Pickup NOT scheduled due to credit status of account number.',
        'Meaning' => 'A pickup was NOT scheduled due to the credit status of account.',
      ),
      284 => 
      array (
        'Code' => 'PU008a',
        'Message' => 'Pickup NOT scheduled.  Date for pickup has passed. Correct pickup date and resubmit pickup request.',
        'Meaning' => 'A pickup was NOT scheduled. Your  date has already passed. Please resubmit your pickup request with a later delivery date.',
      ),
      285 => 
      array (
        'Code' => 'PU008b',
        'Message' => 'Pickup NOT scheduled.  Pickup date is more than ten days in advance of current date. Correct pickup date and resubmit.',
        'Meaning' => 'Pickups cannot be scheduled more than ten days in the future. Please resubmit your pickup request with an earlier delivery date.',
      ),
      286 => 
      array (
        'Code' => 'PU009',
        'Message' => 'The requested pickup date is a <?cndtn>. Call customer service.',
        'Meaning' => 'The requested pickup date is a <?cndtn>. Call customer service.',
      ),
      287 => 
      array (
        'Code' => 'PU009a',
        'Message' => 'Pickup NOT scheduled. There is no weekend pickup service at the location. Please contact your customer service representative.',
        'Meaning' => 'Pickup NOT scheduled. There is no weekend pickup service at the location. Please contact your customer service representative.',
      ),
      288 => 
      array (
        'Code' => 'PU009b',
        'Message' => 'Pickup NOT scheduled. Your ready-by time is not within the Station pickup time range. Please contact your customer service representative.',
        'Meaning' => 'Pickup NOT scheduled. Your ready-by time is not within the Station pickup time range. Please contact your customer service representative.',
      ),
      289 => 
      array (
        'Code' => 'PU009c',
        'Message' => 'Pickup NOT scheduled. Pickup date is a holiday. Please reschedule your pickup request date.',
        'Meaning' => 'Pickup NOT scheduled. Pickup date is a holiday. Please reschedule your pickup request date.',
      ),
      290 => 
      array (
        'Code' => 'PU010a',
        'Message' => 'Pickup NOT scheduled.  No pickup information for the Zip/postal code. For assistance call technical service representative.',
        'Meaning' => 'Pickup NOT scheduled.  No pickup information for the Zip/postal code. For assistance call technical service representative.',
      ),
      291 => 
      array (
        'Code' => 'PU010b',
        'Message' => 'Pickup NOT scheduled.  Cannot match Zip/postal code with cutoff times for city For assistance call technical service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot match Zip/postal code with cutoff times for city For assistance call technical service representative.',
      ),
      292 => 
      array (
        'Code' => 'PU011a',
        'Message' => 'Pickup NOT scheduled. Insufficient time for the pickup. Please reschedule your pickup request to the next day.',
        'Meaning' => 'Pickup NOT scheduled. Insufficient time for the pickup. Please reschedule your pickup request to the next day.',
      ),
      293 => 
      array (
        'Code' => 'PU011b',
        'Message' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location. For pickup information call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location. For pickup information call customer service representative.',
      ),
      294 => 
      array (
        'Code' => 'PU012',
        'Message' => 'Pickup NOT scheduled.  Ready by time is passed the station cutoff time. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Ready by time is passed the station cutoff time. For pickup assistance call customer service representative.',
      ),
      295 => 
      array (
        'Code' => 'PU013a',
        'Message' => 'Pickup NOT scheduled. Ready Time must be earlier than or same as the closing time.',
        'Meaning' => 'Pickup NOT scheduled. Ready Time must be earlier than or same as the closing time.',
      ),
      296 => 
      array (
        'Code' => 'PU013b',
        'Message' => 'Pickup NOT scheduled. Pickup request must be at least 1 hr before closing time.',
        'Meaning' => 'Pickup NOT scheduled. Pickup request must be at least 1 hr before closing time.',
      ),
      297 => 
      array (
        'Code' => 'PU013c',
        'Message' => 'Ready Time must be greater than Current Time.',
        'Meaning' => 'Ready Time must be greater than Current Time.',
      ),
      298 => 
      array (
        'Code' => 'PU014',
        'Message' => 'Shipment(s) exceed normal weight or size limits. If special arrangements are required DHL will telephone the contact person you specified.',
        'Meaning' => 'Shipment(s) exceed normal weight or size limits. If special arrangements are required DHL will telephone the contact person you specified.',
      ),
      299 => 
      array (
        'Code' => 'PU015',
        'Message' => 'Pickup NOT scheduled.  Cannot process due to credit status of account. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot process due to credit status of account. For pickup assistance call customer service representative.',
      ),
      300 => 
      array (
        'Code' => 'PU016',
        'Message' => 'Pickup NOT scheduled.  Pickup location outside the continental United States. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Pickup location outside the continental United States. For pickup assistance call customer service representative.',
      ),
      301 => 
      array (
        'Code' => 'PU017a',
        'Message' => 'Pickup NOT scheduled.  Registration information missing or invalid. For pickup assistance call technical service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Registration information missing or invalid. For pickup assistance call technical service representative.',
      ),
      302 => 
      array (
        'Code' => 'PU017b',
        'Message' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call technical service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call technical service representative.',
      ),
      303 => 
      array (
        'Code' => 'PU018',
        'Message' => 'Pickup service not available at this time. Please try again at later time. If this problem reoccurs contact your technical service representative.',
        'Meaning' => 'Pickup service not available at this time. Please try again at later time. If this problem reoccurs contact your technical service representative.',
      ),
      304 => 
      array (
        'Code' => 'PU019',
        'Message' => 'Pickup NOT scheduled.  Cannot book pickup for account. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book pickup for account. For pickup assistance call customer service representative.',
      ),
      305 => 
      array (
        'Code' => 'PU020a',
        'Message' => 'Pickup NOT scheduled.  Cannot book a pickup for account. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book a pickup for account. For pickup assistance call customer service representative.',
      ),
      306 => 
      array (
        'Code' => 'PU020b',
        'Message' => 'Pickup NOT Scheduled.  Cannot book a pickup for account. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT Scheduled.  Cannot book a pickup for account. For pickup assistance call customer service representative.',
      ),
      307 => 
      array (
        'Code' => 'PU021',
        'Message' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
        'Meaning' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
      ),
      308 => 
      array (
        'Code' => 'PU022',
        'Message' => 'Pickup cannot be modified, please contact Customer service Representatives.',
        'Meaning' => 'Pickup cannot be modified, please contact Customer service Representatives.',
      ),
      309 => 
      array (
        'Code' => 'PU023',
        'Message' => '[PU023] Service Name could not be resolved for given Station. Please contact your customer service representative.',
        'Meaning' => 'Pickup service is not available for the station.',
      ),
      310 => 
      array (
        'Code' => 'PU100',
        'Message' => 'Pickup NOT modified.  Cannot verify original pickup information. Please contact your customer service representative.',
        'Meaning' => 'Pickup NOT modified.  Cannot verify original pickup information. Please contact your customer service representative.',
      ),
      311 => 
      array (
        'Code' => 'PU100a',
        'Message' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service.',
        'Meaning' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service.',
      ),
      312 => 
      array (
        'Code' => 'PU101',
        'Message' => 'Pickup NOT modified. Your pickup request has already been completed. Please contact your customer service representative.',
        'Meaning' => 'Pickup NOT modified. Your pickup request has already been completed. Please contact your customer service representative.',
      ),
      313 => 
      array (
        'Code' => 'PU102a',
        'Message' => 'Unable to modify pickup request! The original request was previously cancelled',
        'Meaning' => 'Unable to modify pickup request! The original request was previously cancelled',
      ),
      314 => 
      array (
        'Code' => 'PU102b',
        'Message' => 'Unable to modify pickup request! This pickup was modified previously. To modify pickup manually call customer service representative.',
        'Meaning' => 'Unable to modify pickup request! This pickup was modified previously. To modify pickup manually call customer service representative.',
      ),
      315 => 
      array (
        'Code' => 'PU102c',
        'Message' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call customer service representative.',
        'Meaning' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call customer service representative.',
      ),
      316 => 
      array (
        'Code' => 'PU103',
        'Message' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call customer service representative.',
        'Meaning' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call customer service representative.',
      ),
      317 => 
      array (
        'Code' => 'PU104',
        'Message' => 'Pickup request NOT modified. Original pickup information cannot be verified. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup request NOT modified. Original pickup information cannot be verified. For pickup assistance call customer service representative.',
      ),
      318 => 
      array (
        'Code' => 'PU105',
        'Message' => 'Pickup request modified successfully. New confirmation number assigned.',
        'Meaning' => 'Pickup request modified successfully. New confirmation number assigned.',
      ),
      319 => 
      array (
        'Code' => 'PU106',
        'Message' => 'ickup NOT modified.  Missing or invalid information modification request. To modify pickup call technical service representative.',
        'Meaning' => 'ickup NOT modified.  Missing or invalid information modification request. To modify pickup call technical service representative.',
      ),
      320 => 
      array (
        'Code' => 'PU200',
        'Message' => 'ickup NOT cancelled.  Cannot verify original pickup information. Please contact your customer service representative.',
        'Meaning' => 'ickup NOT cancelled.  Cannot verify original pickup information. Please contact your customer service representative.',
      ),
      321 => 
      array (
        'Code' => 'PU200a',
        'Message' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service.',
        'Meaning' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service.',
      ),
      322 => 
      array (
        'Code' => 'PU201',
        'Message' => 'Pickup NOT cancelled.  Pickup information not matched. To cancel the pickup call your customer service representative.',
        'Meaning' => 'Pickup NOT cancelled.  Pickup information not matched. To cancel the pickup call your customer service representative.',
      ),
      323 => 
      array (
        'Code' => 'PU202',
        'Message' => 'Pickup NOT cancelled. Your pickup request has already been completed. Please contact your customer service representative.',
        'Meaning' => 'Pickup NOT cancelled. Your pickup request has already been completed. Please contact your customer service representative.',
      ),
      324 => 
      array (
        'Code' => 'PU203a',
        'Message' => 'The pickup request was previously cancelled. No action required.',
        'Meaning' => 'The pickup request was previously cancelled. No action required.',
      ),
      325 => 
      array (
        'Code' => 'PU203b',
        'Message' => 'Unable to cancel the pickup. Pickup status now pending.',
        'Meaning' => 'Unable to cancel the pickup. Pickup status now pending.',
      ),
      326 => 
      array (
        'Code' => 'PU204',
        'Message' => 'Unable to cancel this pickup. Not a system scheduled pickup.',
        'Meaning' => 'Unable to cancel this pickup. Not a system scheduled pickup.',
      ),
      327 => 
      array (
        'Code' => 'PU205a',
        'Message' => 'Unable to cancel the pickup. System information mismatched. to cancel pickup call your customer service representative.',
        'Meaning' => 'Unable to cancel the pickup. System information mismatched. to cancel pickup call your customer service representative.',
      ),
      328 => 
      array (
        'Code' => 'PU205b',
        'Message' => 'pickup NOT cancelled.  pickup cannot be cancelled by pickup service. to cancel pickup call your customer service representative.',
        'Meaning' => 'pickup NOT cancelled.  pickup cannot be cancelled by pickup service. to cancel pickup call your customer service representative.',
      ),
      329 => 
      array (
        'Code' => 'PU300',
        'Message' => 'System error! System cannot schedule pickups. Please contact your technical service representative.',
        'Meaning' => 'System error! System cannot schedule pickups. Please contact your technical service representative.',
      ),
      330 => 
      array (
        'Code' => 'PU301',
        'Message' => 'System error! Cannot schedule pickups. Please contact your technical service representative.',
        'Meaning' => 'System error! Cannot schedule pickups. Please contact your technical service representative.',
      ),
      331 => 
      array (
        'Code' => 'PU302',
        'Message' => 'System error! Cannot schedule pickups. To schedule a pickup call technical service representative.',
        'Meaning' => 'System error! Cannot schedule pickups. To schedule a pickup call technical service representative.',
      ),
      332 => 
      array (
        'Code' => 'PU303',
        'Message' => 'Pickup service not available. Please resubmit your request at later time or contact your technical service representative.',
        'Meaning' => 'Pickup service not available. Please resubmit your request at later time or contact your technical service representative.',
      ),
      333 => 
      array (
        'Code' => 'PU306',
        'Message' => '[PU306] You have scheduled a pickup outside of business hours.  Please adjust your ready by time.',
        'Meaning' => 'Ready by time is outside the business hours.',
      ),
      334 => 
      array (
        'Code' => 'PU307',
        'Message' => '[PU307]Your pickup was NOT scheduled. Packages must be ready at least one hour prior to closing for businesses and two hours prior for residences.',
        'Meaning' => 'Ready by time must be at least one hour prior to closing for business and two hour for residences.',
      ),
      335 => 
      array (
        'Code' => 'PU308',
        'Message' => '[PU308]Your pickup was NOT scheduled as it is currently too close to your closing time.  Please change your pickup time or date and resubmit.',
        'Meaning' => 'Pickup time is too close to the closing time.',
      ),
      336 => 
      array (
        'Code' => 'Shipment Validation Service - Global',
        'Message' => '',
        'Meaning' => '',
      ),
      337 => 
      array (
        'Code' => 'Code',
        'Message' => 'Message',
        'Meaning' => 'Meaning',
      ),
      338 => 
      array (
        'Code' => 'LG200001',
        'Message' => 'Account not white-listed for ODD service; please contact your DHL account manager.',
        'Meaning' => 'Shipper account number not in ODD Shipper Account White List.',
      ),
      339 => 
      array (
        'Code' => 'LG200002',
        'Message' => 'ODD is not deployed in this country.',
        'Meaning' => 'Shipment’s destination country is not ODD deployed country.',
      ),
      340 => 
      array (
        'Code' => 'LG200004',
        'Message' => 'ODD Shipper Account Number field is required and waybill number is not exists in ODD. Please provide the Shipper Account Number.',
        'Meaning' => 'Shipper account number is required and waybill not found in ODD.',
      ),
      341 => 
      array (
        'Code' => 'LG200008',
        'Message' => 'SHIPPER does not have access to GenType : <Gentype>',
        'Meaning' => 'When SHIPPER tries to get URL with GenType other than DeliveryOpt and ShpDeliveryOpt.',
      ),
      342 => 
      array (
        'Code' => 'LG005',
        'Message' => 'ESB LinkGen Service is not able to query to fetch ODD URL. Please contact DHL for further assistance',
        'Meaning' => 'ESB LinkGen service is not available',
      ),
      343 => 
      array (
        'Code' => 'Pick Up Service - AP Region',
        'Message' => '',
        'Meaning' => '',
      ),
      344 => 
      array (
        'Code' => 'Code',
        'Message' => 'Message',
        'Meaning' => 'Meaning',
      ),
      345 => 
      array (
        'Code' => 'PU003',
        'Message' => 'Cannot schedule pickup for Zip Code. To book a pickup call DHL customer services',
        'Meaning' => 'Cannot schedule pickup for Zip Code. To book a pickup call DHL customer services',
      ),
      346 => 
      array (
        'Code' => 'PU004',
        'Message' => 'Account number not valid for pickup.  To book a pickup call DHL customer services',
        'Meaning' => 'Account number not valid for pickup.  To book a pickup call DHL customer services',
      ),
      347 => 
      array (
        'Code' => 'PU005',
        'Message' => 'Unable to verify account number. For assistance call DHL customer services',
        'Meaning' => 'Unable to verify account number. For assistance call DHL customer services',
      ),
      348 => 
      array (
        'Code' => 'PU006',
        'Message' => 'Unable to verify account number.  To schedule a pickup call DHL customer services',
        'Meaning' => 'Unable to verify account number.  To schedule a pickup call DHL customer services',
      ),
      349 => 
      array (
        'Code' => 'PU007a',
        'Message' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup, call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup, call DHL customer services.',
      ),
      350 => 
      array (
        'Code' => 'PU007b',
        'Message' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup call DHL customer services',
      ),
      351 => 
      array (
        'Code' => 'PU008a',
        'Message' => 'Pickup NOT scheduled.  Date for pickup has passed. Correct pickup date and resubmit pickup request.',
        'Meaning' => 'Pickup NOT scheduled.  Date for pickup has passed. Correct pickup date and resubmit pickup request.',
      ),
      352 => 
      array (
        'Code' => 'PU008b',
        'Message' => 'Pickup NOT scheduled.  Pickup date is more than ten days in advance of current date.  Correct pickup date and resubmit.',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is more than ten days in advance of current date.  Correct pickup date and resubmit.',
      ),
      353 => 
      array (
        'Code' => 'PU009a',
        'Message' => 'Pickup NOT scheduled.  Requested pickup date is a Saturday. For Saturday pickup services call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Requested pickup date is a Saturday. For Saturday pickup services call DHL customer services',
      ),
      354 => 
      array (
        'Code' => 'PU009b',
        'Message' => 'Pickup NOT scheduled.  Pickup date is a Sunday. For Sunday pickup service information call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is a Sunday. For Sunday pickup service information call DHL customer services',
      ),
      355 => 
      array (
        'Code' => 'PU009c',
        'Message' => 'Pickup NOT scheduled.  Pickup date is a holiday. For holiday pickup service information call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is a holiday. For holiday pickup service information call DHL customer services',
      ),
      356 => 
      array (
        'Code' => 'PU009d',
        'Message' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
      ),
      357 => 
      array (
        'Code' => 'PU009e',
        'Message' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
      ),
      358 => 
      array (
        'Code' => 'PU010a',
        'Message' => 'Pickup NOT scheduled.  No pickup information for the postal code. For assistance call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  No pickup information for the postal code. For assistance call DHL customer services.',
      ),
      359 => 
      array (
        'Code' => 'PU010b',
        'Message' => 'Pickup NOT scheduled.  Cannot match the postal code with cutoff times.  For assistance call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot match the postal code with cutoff times.  For assistance call DHL customer services.',
      ),
      360 => 
      array (
        'Code' => 'PU011a',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      361 => 
      array (
        'Code' => 'PU011b',
        'Message' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location.  For pickup information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location.  For pickup information call DHL customer services.',
      ),
      362 => 
      array (
        'Code' => 'PU012',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      363 => 
      array (
        'Code' => 'PU012a',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      364 => 
      array (
        'Code' => 'PU013a',
        'Message' => 'Pickup NOT scheduled.  Insufficient time between ready by, and closing time.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Insufficient time between ready by, and closing time.  For pickup assistance call DHL customer services',
      ),
      365 => 
      array (
        'Code' => 'PU013b',
        'Message' => 'Pickup NOT scheduled.  Insufficient time between current time and closing time. Adjust pickup times and resubmit. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Insufficient time between current time and closing time. Adjust pickup times and resubmit. For pickup assistance call DHL customer services',
      ),
      366 => 
      array (
        'Code' => 'PU014',
        'Message' => 'Shipment(s)exceed normal weight or size limits. If special arrangements are required, DHL will telephone the contact person you specified.',
        'Meaning' => 'Shipment(s)exceed normal weight or size limits. If special arrangements are required, DHL will telephone the contact person you specified.',
      ),
      367 => 
      array (
        'Code' => 'PU015',
        'Message' => 'Pickup NOT scheduled.  Cannot process due to credit status of the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot process due to credit status of the account.  For pickup assistance call DHL customer services',
      ),
      368 => 
      array (
        'Code' => 'PU016',
        'Message' => 'Pickup NOT scheduled.  Pickup location outside the continental United States.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup location outside the continental United States.  For pickup assistance call DHL customer services',
      ),
      369 => 
      array (
        'Code' => 'PU017a',
        'Message' => 'Pickup NOT scheduled.  Registration information missing or invalid.   For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Registration information missing or invalid.   For pickup assistance call DHL customer services',
      ),
      370 => 
      array (
        'Code' => 'PU017b',
        'Message' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call DHL customer services',
      ),
      371 => 
      array (
        'Code' => 'PU018',
        'Message' => 'Pickup NOT scheduled.  Unable to process pickup request at this location. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Unable to process pickup request at this location. For pickup assistance call DHL customer services',
      ),
      372 => 
      array (
        'Code' => 'PU019',
        'Message' => 'Pickup NOT scheduled.  Cannot book pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book pickup for the account.  For pickup assistance call DHL customer services',
      ),
      373 => 
      array (
        'Code' => 'PU020a',
        'Message' => 'Pickup NOT scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
      ),
      374 => 
      array (
        'Code' => 'PU020b',
        'Message' => 'Pickup NOT Scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT Scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
      ),
      375 => 
      array (
        'Code' => 'PU021',
        'Message' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
        'Meaning' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
      ),
      376 => 
      array (
        'Code' => 'PU100',
        'Message' => 'Pickup NOT modified.  Cannot verify original pickup information.  For assistance call DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Cannot verify original pickup information.  For assistance call DHL customer services',
      ),
      377 => 
      array (
        'Code' => 'PU100a',
        'Message' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
        'Meaning' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
      ),
      378 => 
      array (
        'Code' => 'PU101',
        'Message' => 'Unable to modify pickup request!  Current date is past the original pickup date.',
        'Meaning' => 'Unable to modify pickup request!  Current date is past the original pickup date.',
      ),
      379 => 
      array (
        'Code' => 'PU102a',
        'Message' => 'Unable to modify pickup request!  The original request was previously canceled',
        'Meaning' => 'Unable to modify pickup request!  The original request was previously canceled',
      ),
      380 => 
      array (
        'Code' => 'PU102b',
        'Message' => 'Unable to modify pickup request!  This pickup was modified previously.  To modify pickup manually call DHL customer services',
        'Meaning' => 'Unable to modify pickup request!  This pickup was modified previously.  To modify pickup manually call DHL customer services',
      ),
      381 => 
      array (
        'Code' => 'PU102c',
        'Message' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call DHL customer services.',
        'Meaning' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call DHL customer services.',
      ),
      382 => 
      array (
        'Code' => 'PU103',
        'Message' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call DHL customer services',
        'Meaning' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call DHL customer services',
      ),
      383 => 
      array (
        'Code' => 'PU104',
        'Message' => 'Pickup request NOT modified.  Original pickup information cannot be verified.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup request NOT modified.  Original pickup information cannot be verified.  For pickup assistance call DHL customer services',
      ),
      384 => 
      array (
        'Code' => 'PU105',
        'Message' => 'Pickup request modified successfully. Original request and pickup canceled. New confirmation number assigned.',
        'Meaning' => 'Pickup request modified successfully. Original request and pickup canceled. New confirmation number assigned.',
      ),
      385 => 
      array (
        'Code' => 'PU106',
        'Message' => 'Pickup NOT modified.  Missing or invalid information modification request.  To modify pickup call DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Missing or invalid information modification request.  To modify pickup call DHL customer services',
      ),
      386 => 
      array (
        'Code' => 'PU200',
        'Message' => 'Pickup NOT modified.  Cannot verify original pickup information.  To cancel pickup call  DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Cannot verify original pickup information.  To cancel pickup call  DHL customer services',
      ),
      387 => 
      array (
        'Code' => 'PU200a',
        'Message' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
        'Meaning' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
      ),
      388 => 
      array (
        'Code' => 'PU201',
        'Message' => 'Pickup NOT cancelled.  Pickup information not matched.  To cancel the pickup call DHL customer services',
        'Meaning' => 'Pickup NOT cancelled.  Pickup information not matched.  To cancel the pickup call DHL customer services',
      ),
      389 => 
      array (
        'Code' => 'PU202',
        'Message' => 'Pickup NOT cancelled.  Current date is past original pickup date.',
        'Meaning' => 'Pickup NOT cancelled.  Current date is past original pickup date.',
      ),
      390 => 
      array (
        'Code' => 'PU203a',
        'Message' => 'The pickup was previously cancelled.  No action required.',
        'Meaning' => 'The pickup was previously cancelled.  No action required.',
      ),
      391 => 
      array (
        'Code' => 'PU203b',
        'Message' => 'Unable to cancel the pickup.  Pickup status now pending.',
        'Meaning' => 'Unable to cancel the pickup.  Pickup status now pending.',
      ),
      392 => 
      array (
        'Code' => 'PU204',
        'Message' => 'Unable to cancel this pickup.  Not a system scheduled pickup.',
        'Meaning' => 'Unable to cancel this pickup.  Not a system scheduled pickup.',
      ),
      393 => 
      array (
        'Code' => 'PU205a',
        'Message' => 'Unable to cancel the pickup.  System information mismatched.  To cancel pickup call DHL customer services',
        'Meaning' => 'Unable to cancel the pickup.  System information mismatched.  To cancel pickup call DHL customer services',
      ),
      394 => 
      array (
        'Code' => 'PU205b',
        'Message' => 'Pickup NOT cancelled.  Pickup cannot be cancelled by pickup service.  To cancel pickup call DHL customer services',
        'Meaning' => 'Pickup NOT cancelled.  Pickup cannot be cancelled by pickup service.  To cancel pickup call DHL customer services',
      ),
      395 => 
      array (
        'Code' => 'PU300',
        'Message' => 'System error!  System cannot schedule pickups.  To schedule a pickup call DHL customer services',
        'Meaning' => 'System error!  System cannot schedule pickups.  To schedule a pickup call DHL customer services',
      ),
      396 => 
      array (
        'Code' => 'PU301',
        'Message' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services.',
        'Meaning' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services.',
      ),
      397 => 
      array (
        'Code' => 'PU302',
        'Message' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services',
        'Meaning' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services',
      ),
      398 => 
      array (
        'Code' => 'PU303',
        'Message' => 'Pickup service not available. Please resubmit your request at later time or contact your customer service representative.',
        'Meaning' => 'Pickup service not available. Please resubmit your request at later time or contact your customer service representative.',
      ),
      399 => 
      array (
        'Code' => 'PU030',
        'Message' => 'Request Pickup at the same time or before closing time.',
        'Meaning' => 'Request Pickup at the same time or before closing time.',
      ),
      400 => 
      array (
        'Code' => 'PU031',
        'Message' => 'Ready by Time must be at same time or before closing time.',
        'Meaning' => 'Ready by Time must be at same time or before closing time.',
      ),
      401 => 
      array (
        'Code' => 'PU032',
        'Message' => 'Ready by Time must be before Closing Time',
        'Meaning' => 'Ready by Time must be before Closing Time',
      ),
      402 => 
      array (
        'Code' => 'PU033',
        'Message' => 'Request Pickup before closing time.',
        'Meaning' => 'Request Pickup before closing time.',
      ),
      403 => 
      array (
        'Code' => 'PU034',
        'Message' => 'Request Pickup at the same time or before your Ready time.',
        'Meaning' => 'Request Pickup at the same time or before your Ready time.',
      ),
      404 => 
      array (
        'Code' => 'PU035',
        'Message' => 'Ready By Time must be at the same time or after the"EARLIEST TIME FROM".',
        'Meaning' => 'Ready By Time must be at the same time or after the"EARLIEST TIME FROM".',
      ),
      405 => 
      array (
        'Code' => 'PL002',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - Unable to get socket',
      ),
      406 => 
      array (
        'Code' => 'PL003',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - country server not in hosts file',
      ),
      407 => 
      array (
        'Code' => 'PL004',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - service name not in services file',
      ),
      408 => 
      array (
        'Code' => 'PL005',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - country code not in configuration file',
      ),
      409 => 
      array (
        'Code' => 'PL006',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - unable to connect to CSV',
      ),
      410 => 
      array (
        'Code' => 'PL007',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - error writing to socket',
      ),
      411 => 
      array (
        'Code' => 'PL008',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - error reading from socket',
      ),
      412 => 
      array (
        'Code' => 'Pick Up Service - EA Region',
        'Message' => '',
        'Meaning' => '',
      ),
      413 => 
      array (
        'Code' => 'Code',
        'Message' => 'Message',
        'Meaning' => 'Meaning',
      ),
      414 => 
      array (
        'Code' => 'PU003',
        'Message' => 'Cannot schedule pickup for Zip Code. To book a pickup call DHL customer services',
        'Meaning' => 'Cannot schedule pickup for Zip Code. To book a pickup call DHL customer services',
      ),
      415 => 
      array (
        'Code' => 'PU004',
        'Message' => 'Account number not valid for pickup.  To book a pickup call DHL customer services',
        'Meaning' => 'Account number not valid for pickup.  To book a pickup call DHL customer services',
      ),
      416 => 
      array (
        'Code' => 'PU005',
        'Message' => 'Unable to verify account number. For assistance call DHL customer services',
        'Meaning' => 'Unable to verify account number. For assistance call DHL customer services',
      ),
      417 => 
      array (
        'Code' => 'PU006',
        'Message' => 'Unable to verify account number.  To schedule a pickup call DHL customer services',
        'Meaning' => 'Unable to verify account number.  To schedule a pickup call DHL customer services',
      ),
      418 => 
      array (
        'Code' => 'PU007a',
        'Message' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup, call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup, call DHL customer services.',
      ),
      419 => 
      array (
        'Code' => 'PU007b',
        'Message' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup call DHL customer services',
      ),
      420 => 
      array (
        'Code' => 'PU008a',
        'Message' => 'Pickup NOT scheduled.  Date for pickup has passed. Correct pickup date and resubmit pickup request.',
        'Meaning' => 'Pickup NOT scheduled.  Date for pickup has passed. Correct pickup date and resubmit pickup request.',
      ),
      421 => 
      array (
        'Code' => 'PU008b',
        'Message' => 'Pickup NOT scheduled.  Pickup date is more than ten days in advance of current date.  Correct pickup date and resubmit.',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is more than ten days in advance of current date.  Correct pickup date and resubmit.',
      ),
      422 => 
      array (
        'Code' => 'PU009a',
        'Message' => 'Pickup NOT scheduled.  Requested pickup date is a Saturday. For Saturday pickup services call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Requested pickup date is a Saturday. For Saturday pickup services call DHL customer services',
      ),
      423 => 
      array (
        'Code' => 'PU009b',
        'Message' => 'Pickup NOT scheduled.  Pickup date is a Sunday. For Sunday pickup service information call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is a Sunday. For Sunday pickup service information call DHL customer services',
      ),
      424 => 
      array (
        'Code' => 'PU009c',
        'Message' => 'Pickup NOT scheduled.  Pickup date is a holiday. For holiday pickup service information call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is a holiday. For holiday pickup service information call DHL customer services',
      ),
      425 => 
      array (
        'Code' => 'PU009d',
        'Message' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
      ),
      426 => 
      array (
        'Code' => 'PU009e',
        'Message' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
      ),
      427 => 
      array (
        'Code' => 'PU010a',
        'Message' => 'Pickup NOT scheduled.  No pickup information for the postal code. For assistance call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  No pickup information for the postal code. For assistance call DHL customer services.',
      ),
      428 => 
      array (
        'Code' => 'PU010b',
        'Message' => 'Pickup NOT scheduled.  Cannot match the postal code with cutoff times.  For assistance call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot match the postal code with cutoff times.  For assistance call DHL customer services.',
      ),
      429 => 
      array (
        'Code' => 'PU011a',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      430 => 
      array (
        'Code' => 'PU011b',
        'Message' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location.  For pickup information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location.  For pickup information call DHL customer services.',
      ),
      431 => 
      array (
        'Code' => 'PU012',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      432 => 
      array (
        'Code' => 'PU012a',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      433 => 
      array (
        'Code' => 'PU012b',
        'Message' => 'Pickup NOT scheduled.  Pickup submitted after ready by cut off time. For pickup assistance call DHL customer services.',
        'Meaning' => 'Ready By time is later than the cut off time.',
      ),
      434 => 
      array (
        'Code' => 'PU013a',
        'Message' => 'Pickup NOT scheduled.  Insufficient time between ready by, and closing time.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Insufficient time between ready by, and closing time.  For pickup assistance call DHL customer services',
      ),
      435 => 
      array (
        'Code' => 'PU013b',
        'Message' => 'Pickup NOT scheduled.  Insufficient time between current time and closing time. Adjust pickup times and resubmit. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Insufficient time between current time and closing time. Adjust pickup times and resubmit. For pickup assistance call DHL customer services',
      ),
      436 => 
      array (
        'Code' => 'PU014',
        'Message' => 'Shipment(s)exceed normal weight or size limits. If special arrangements are required, DHL will telephone the contact person you specified.',
        'Meaning' => 'Shipment(s)exceed normal weight or size limits. If special arrangements are required, DHL will telephone the contact person you specified.',
      ),
      437 => 
      array (
        'Code' => 'PU015',
        'Message' => 'Pickup NOT scheduled.  Cannot process due to credit status of the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot process due to credit status of the account.  For pickup assistance call DHL customer services',
      ),
      438 => 
      array (
        'Code' => 'PU016',
        'Message' => 'Pickup NOT scheduled.  Pickup location outside the continental United States.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup location outside the continental United States.  For pickup assistance call DHL customer services',
      ),
      439 => 
      array (
        'Code' => 'PU017a',
        'Message' => 'Pickup NOT scheduled.  Registration information missing or invalid.   For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Registration information missing or invalid.   For pickup assistance call DHL customer services',
      ),
      440 => 
      array (
        'Code' => 'PU017b',
        'Message' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call DHL customer services',
      ),
      441 => 
      array (
        'Code' => 'PU018',
        'Message' => 'Pickup NOT scheduled.  Unable to process pickup request at this location. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Unable to process pickup request at this location. For pickup assistance call DHL customer services',
      ),
      442 => 
      array (
        'Code' => 'PU019',
        'Message' => 'Pickup NOT scheduled.  Cannot book pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book pickup for the account.  For pickup assistance call DHL customer services',
      ),
      443 => 
      array (
        'Code' => 'PU020a',
        'Message' => 'Pickup NOT scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
      ),
      444 => 
      array (
        'Code' => 'PU020b',
        'Message' => 'Pickup NOT Scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT Scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
      ),
      445 => 
      array (
        'Code' => 'PU021',
        'Message' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
        'Meaning' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
      ),
      446 => 
      array (
        'Code' => 'PU100',
        'Message' => 'Pickup NOT modified.  Cannot verify original pickup information.  For assistance call DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Cannot verify original pickup information.  For assistance call DHL customer services',
      ),
      447 => 
      array (
        'Code' => 'PU100a',
        'Message' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
        'Meaning' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
      ),
      448 => 
      array (
        'Code' => 'PU101',
        'Message' => 'Unable to modify pickup request!  Current date is past the original pickup date.',
        'Meaning' => 'Unable to modify pickup request!  Current date is past the original pickup date.',
      ),
      449 => 
      array (
        'Code' => 'PU102a',
        'Message' => 'Unable to modify pickup request!  The original request was previously canceled',
        'Meaning' => 'Unable to modify pickup request!  The original request was previously canceled',
      ),
      450 => 
      array (
        'Code' => 'PU102b',
        'Message' => 'Unable to modify pickup request!  This pickup was modified previously.  To modify pickup manually call DHL customer services',
        'Meaning' => 'Unable to modify pickup request!  This pickup was modified previously.  To modify pickup manually call DHL customer services',
      ),
      451 => 
      array (
        'Code' => 'PU102c',
        'Message' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call DHL customer services.',
        'Meaning' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call DHL customer services.',
      ),
      452 => 
      array (
        'Code' => 'PU103',
        'Message' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call DHL customer services',
        'Meaning' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call DHL customer services',
      ),
      453 => 
      array (
        'Code' => 'PU104',
        'Message' => 'Pickup request NOT modified.  Original pickup information cannot be verified.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup request NOT modified.  Original pickup information cannot be verified.  For pickup assistance call DHL customer services',
      ),
      454 => 
      array (
        'Code' => 'PU105',
        'Message' => 'Pickup request modified successfully. Original request and pickup canceled. New confirmation number assigned.',
        'Meaning' => 'Pickup request modified successfully. Original request and pickup canceled. New confirmation number assigned.',
      ),
      455 => 
      array (
        'Code' => 'PU106',
        'Message' => 'Pickup NOT modified.  Missing or invalid information modification request.  To modify pickup call DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Missing or invalid information modification request.  To modify pickup call DHL customer services',
      ),
      456 => 
      array (
        'Code' => 'PU200',
        'Message' => 'Pickup NOT modified.  Cannot verify original pickup information.  To cancel pickup call  DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Cannot verify original pickup information.  To cancel pickup call  DHL customer services',
      ),
      457 => 
      array (
        'Code' => 'PU200a',
        'Message' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
        'Meaning' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
      ),
      458 => 
      array (
        'Code' => 'PU201',
        'Message' => 'Pickup NOT cancelled.  Pickup information not matched.  To cancel the pickup call DHL customer services',
        'Meaning' => 'Pickup NOT cancelled.  Pickup information not matched.  To cancel the pickup call DHL customer services',
      ),
      459 => 
      array (
        'Code' => 'PU202',
        'Message' => 'Pickup NOT cancelled.  Current date is past original pickup date.',
        'Meaning' => 'Pickup NOT cancelled.  Current date is past original pickup date.',
      ),
      460 => 
      array (
        'Code' => 'PU203a',
        'Message' => 'The pickup was previously cancelled.  No action required.',
        'Meaning' => 'The pickup was previously cancelled.  No action required.',
      ),
      461 => 
      array (
        'Code' => 'PU203b',
        'Message' => 'Unable to cancel the pickup.  Pickup status now pending.',
        'Meaning' => 'Unable to cancel the pickup.  Pickup status now pending.',
      ),
      462 => 
      array (
        'Code' => 'PU204',
        'Message' => 'Unable to cancel this pickup.  Not a system scheduled pickup.',
        'Meaning' => 'Unable to cancel this pickup.  Not a system scheduled pickup.',
      ),
      463 => 
      array (
        'Code' => 'PU205a',
        'Message' => 'Unable to cancel the pickup.  System information mismatched.  To cancel pickup call DHL customer services',
        'Meaning' => 'Unable to cancel the pickup.  System information mismatched.  To cancel pickup call DHL customer services',
      ),
      464 => 
      array (
        'Code' => 'PU205b',
        'Message' => 'Pickup NOT cancelled.  Pickup cannot be cancelled by pickup service.  To cancel pickup call DHL customer services',
        'Meaning' => 'Pickup NOT cancelled.  Pickup cannot be cancelled by pickup service.  To cancel pickup call DHL customer services',
      ),
      465 => 
      array (
        'Code' => 'PU300',
        'Message' => 'System error!  System cannot schedule pickups.  To schedule a pickup call DHL customer services',
        'Meaning' => 'System error!  System cannot schedule pickups.  To schedule a pickup call DHL customer services',
      ),
      466 => 
      array (
        'Code' => 'PU301',
        'Message' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services.',
        'Meaning' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services.',
      ),
      467 => 
      array (
        'Code' => 'PU302',
        'Message' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services',
        'Meaning' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services',
      ),
      468 => 
      array (
        'Code' => 'PU303',
        'Message' => 'Pickup service not available. Please resubmit your request at later time or contact your customer service representative.',
        'Meaning' => 'Pickup service not available. Please resubmit your request at later time or contact your customer service representative.',
      ),
      469 => 
      array (
        'Code' => 'PU030',
        'Message' => 'Request Pickup at the same time or before closing time.',
        'Meaning' => 'Request Pickup at the same time or before closing time.',
      ),
      470 => 
      array (
        'Code' => 'PU031',
        'Message' => 'Ready by Time must be at same time or before closing time.',
        'Meaning' => 'Ready by Time must be at same time or before closing time.',
      ),
      471 => 
      array (
        'Code' => 'PU032',
        'Message' => 'Ready by Time must be before Closing Time',
        'Meaning' => 'Ready by Time must be before Closing Time',
      ),
      472 => 
      array (
        'Code' => 'PU033',
        'Message' => 'Request Pickup before closing time.',
        'Meaning' => 'Request Pickup before closing time.',
      ),
      473 => 
      array (
        'Code' => 'PU034',
        'Message' => 'Request Pickup at the same time or before your Ready time.',
        'Meaning' => 'Request Pickup at the same time or before your Ready time.',
      ),
      474 => 
      array (
        'Code' => 'PU035',
        'Message' => 'Ready By Time must be at the same time or after the"EARLIEST TIME FROM".',
        'Meaning' => 'Ready By Time must be at the same time or after the"EARLIEST TIME FROM".',
      ),
      475 => 
      array (
        'Code' => 'PU901',
        'Message' => 'Pickup not scheduled. Courier route unavailable. Please call DHL customer services.',
        'Meaning' => 'Pickup not scheduled. Courier route unavailable. Please call DHL customer services.',
      ),
      476 => 
      array (
        'Code' => 'PU902',
        'Message' => 'Pickup not scheduled. Cut-off times unavailable. Please call DHL customer services.',
        'Meaning' => 'Pickup not scheduled. Cut-off times unavailable. Please call DHL customer services.',
      ),
      477 => 
      array (
        'Code' => 'PU903',
        'Message' => 'Pickup not scheduled. Session unavailable. Please submit request again. If problem persists please call DHL customer services.',
        'Meaning' => 'Pickup not scheduled. Session unavailable. Please submit request again. If problem persists please call DHL customer services.',
      ),
      478 => 
      array (
        'Code' => 'PU904',
        'Message' => 'Pickup modifications not permitted. Please call DHL customer services.',
        'Meaning' => 'Pickup modifications not permitted. Please call DHL customer services.',
      ),
      479 => 
      array (
        'Code' => 'PU905',
        'Message' => 'Pickup not scheduled. Holiday dates unavailable. Please call DHL customer services.',
        'Meaning' => 'Pickup not scheduled. Holiday dates unavailable. Please call DHL customer services.',
      ),
      480 => 
      array (
        'Code' => 'PU908',
        'Message' => 'Pickup cancellations not permitted. Please call DHL customer services.',
        'Meaning' => 'Pickup cancellations not permitted. Please call DHL customer services.',
      ),
      481 => 
      array (
        'Code' => 'PU909',
        'Message' => 'Pickup not scheduled. Timezone data unavailable. Please call DHL customer services.',
        'Meaning' => 'Pickup not scheduled. Timezone data unavailable. Please call DHL customer services.',
      ),
      482 => 
      array (
        'Code' => 'PU910',
        'Message' => 'Booking system busy, try again later.',
        'Meaning' => 'Booking system busy, try again later.',
      ),
      483 => 
      array (
        'Code' => 'PU911',
        'Message' => 'The Booking System is temporarily unavailable. Please call Customer Services to book this collection',
        'Meaning' => 'The Booking System is temporarily unavailable. Please call Customer Services to book this collection',
      ),
      484 => 
      array (
        'Code' => 'PU912',
        'Message' => 'Country and regional accounts out of synch.',
        'Meaning' => 'Country and regional accounts out of synch.',
      ),
      485 => 
      array (
        'Code' => 'PU913',
        'Message' => 'Trying to book a pickup for a time that has already passed.',
        'Meaning' => 'Trying to book a pickup for a time that has already passed.',
      ),
      486 => 
      array (
        'Code' => 'PU914',
        'Message' => 'One or more mandatory data fields missing or a field contains invalid data.',
        'Meaning' => 'One or more mandatory data fields missing or a field contains invalid data.',
      ),
      487 => 
      array (
        'Code' => 'Routing Service- AM Region',
        'Message' => '',
        'Meaning' => '',
      ),
      488 => 
      array (
        'Code' => 'Code',
        'Message' => 'Message',
        'Meaning' => 'Meaning',
      ),
      489 => 
      array (
        'Code' => 'RT1001',
        'Message' => 'The service area is suspended or not in action.',
        'Meaning' => 'The service area is suspended or not in action.',
      ),
      490 => 
      array (
        'Code' => 'RT1002',
        'Message' => 'The service area is unavailable.',
        'Meaning' => 'The service area is unavailable.',
      ),
      491 => 
      array (
        'Code' => 'RT1003',
        'Message' => 'The service area is not opened.',
        'Meaning' => 'The service area is not opened.',
      ),
      492 => 
      array (
        'Code' => 'RT1004',
        'Message' => 'The service area is closed.',
        'Meaning' => 'The service area is closed.',
      ),
      493 => 
      array (
        'Code' => 'RT1005',
        'Message' => 'The status of the service area is unknown.',
        'Meaning' => 'The status of the service area is unknown.',
      ),
      494 => 
      array (
        'Code' => 'RT1006',
        'Message' => 'The search for the service area information has failed',
        'Meaning' => 'The search for the service area information has failed',
      ),
      495 => 
      array (
        'Code' => 'RT1101',
        'Message' => 'The postal code is not provided by the user.',
        'Meaning' => 'The postal code is not provided by the user.',
      ),
      496 => 
      array (
        'Code' => 'RT1102',
        'Message' => 'The postal code provided by user is invalid.',
        'Meaning' => 'The postal code provided by user is invalid.',
      ),
      497 => 
      array (
        'Code' => 'RT1103',
        'Message' => 'The postal code provided by user does not exist in the country.',
        'Meaning' => 'The postal code provided by user does not exist in the country.',
      ),
      498 => 
      array (
        'Code' => 'RT1104',
        'Message' => 'The city name provided by user does not exist in the country.',
        'Meaning' => 'The city name provided by user does not exist in the country.',
      ),
      499 => 
      array (
        'Code' => 'RT1105',
        'Message' => 'More than one city with the same name found.',
        'Meaning' => 'More than one city with the same name found.',
      ),
      500 => 
      array (
        'Code' => 'RT1106',
        'Message' => 'More than one service areas are found in the city.',
        'Meaning' => 'More than one service areas are found in the city.',
      ),
      501 => 
      array (
        'Code' => 'RT1107',
        'Message' => 'Multiple Cities found for the same postal code.',
        'Meaning' => 'Multiple Cities found for the same postal code.',
      ),
      502 => 
      array (
        'Code' => 'RT1108',
        'Message' => 'The city name provided by the user does not have an exact match',
        'Meaning' => 'The city name provided by the user does not have an exact match',
      ),
      503 => 
      array (
        'Code' => 'RT1109',
        'Message' => 'The postal code is incorrectly written in the city or the division field.',
        'Meaning' => 'The postal code is incorrectly written in the city or the division field.',
      ),
      504 => 
      array (
        'Code' => 'RT1110',
        'Message' => 'The postal code is incorrectly written in the address field.',
        'Meaning' => 'The postal code is incorrectly written in the address field.',
      ),
      505 => 
      array (
        'Code' => 'Routing Service- AP Region',
        'Message' => '',
        'Meaning' => '',
      ),
      506 => 
      array (
        'Code' => 'Code',
        'Message' => 'Message',
        'Meaning' => 'Meaning',
      ),
      507 => 
      array (
        'Code' => 'RT0003a',
        'Message' => 'Identified service area for the routing request, is currently suspended',
        'Meaning' => 'Identified service area for the routing request, is currently suspended',
      ),
      508 => 
      array (
        'Code' => 'RT0003b',
        'Message' => 'Identified service area for the routing request  is currently unavailable',
        'Meaning' => 'Identified service area for the routing request  is currently unavailable',
      ),
      509 => 
      array (
        'Code' => 'RT0003c',
        'Message' => 'Identified service area for the routing request is not yet opened',
        'Meaning' => 'Identified service area for the routing request is not yet opened',
      ),
      510 => 
      array (
        'Code' => 'RT0003d',
        'Message' => 'Identified service area for the routing request is closed',
        'Meaning' => 'Identified service area for the routing request is closed',
      ),
      511 => 
      array (
        'Code' => 'RT0003e',
        'Message' => 'Identified service area for the routing request has an unknown status',
        'Meaning' => 'Identified service area for the routing request has an unknown status',
      ),
      512 => 
      array (
        'Code' => 'RT0004',
        'Message' => 'Unable to identify a service area for the routing request. Exhausted all possibilities',
        'Meaning' => 'Unable to identify a service area for the routing request. Exhausted all possibilities',
      ),
      513 => 
      array (
        'Code' => 'RT0005',
        'Message' => 'Unable to identify a service area for routing request; Zip/postal code may narrow search.',
        'Meaning' => 'Unable to identify a service area for routing request; Zip/postal code may narrow search.',
      ),
      514 => 
      array (
        'Code' => 'RT0006',
        'Message' => 'Zip/Postal code not valid for country in routing request.',
        'Meaning' => 'Zip/Postal code not valid for country in routing request.',
      ),
      515 => 
      array (
        'Code' => 'RT0007',
        'Message' => 'Zip/Postal code does not exist in country.',
        'Meaning' => 'Zip/Postal code does not exist in country.',
      ),
      516 => 
      array (
        'Code' => 'RT0008',
        'Message' => 'City name does not exist in country.',
        'Meaning' => 'City name does not exist in country.',
      ),
      517 => 
      array (
        'Code' => 'RT0009',
        'Message' => 'More than one city with the same city name in country',
        'Meaning' => 'More than one city with the same city name in country',
      ),
      518 => 
      array (
        'Code' => 'RT0010',
        'Message' => 'More than one service area within city with different service standards.',
        'Meaning' => 'More than one service area within city with different service standards.',
      ),
      519 => 
      array (
        'Code' => 'RT0011',
        'Message' => 'Zip/Postal code covers more than one city and has differing service standards.',
        'Meaning' => 'Zip/Postal code covers more than one city and has differing service standards.',
      ),
      520 => 
      array (
        'Code' => 'RT0012',
        'Message' => 'City name found using an approximate match algorithm.',
        'Meaning' => 'City name found using an approximate match algorithm.',
      ),
      521 => 
      array (
        'Code' => 'RT0013',
        'Message' => 'Zip/Post code found in the city or division field of the message.',
        'Meaning' => 'Zip/Post code found in the city or division field of the message.',
      ),
      522 => 
      array (
        'Code' => 'RT0014',
        'Message' => 'Zip/Postal code found in the address line of the message.',
        'Meaning' => 'Zip/Postal code found in the address line of the message.',
      ),
      523 => 
      array (
        'Code' => 'Routing Service- EA Region',
        'Message' => '',
        'Meaning' => '',
      ),
      524 => 
      array (
        'Code' => 'Code',
        'Message' => 'Message',
        'Meaning' => 'Meaning',
      ),
      525 => 
      array (
        'Code' => 'RT0003a',
        'Message' => 'The Service area is suspended',
        'Meaning' => 'The Service area is suspended',
      ),
      526 => 
      array (
        'Code' => 'RT0003b',
        'Message' => 'The Service area is unavailable.',
        'Meaning' => 'The Service area is unavailable.',
      ),
      527 => 
      array (
        'Code' => 'RT0003c',
        'Message' => 'The service area is not opened.',
        'Meaning' => 'The service area is not opened.',
      ),
      528 => 
      array (
        'Code' => 'RT0003d',
        'Message' => 'The service area is closed.',
        'Meaning' => 'The service area is closed.',
      ),
      529 => 
      array (
        'Code' => 'RT0003e',
        'Message' => 'The status of the service area is unknown.',
        'Meaning' => 'The status of the service area is unknown.',
      ),
      530 => 
      array (
        'Code' => 'RT0004',
        'Message' => 'The search for the service area information has failed.',
        'Meaning' => 'The search for the service area information has failed.',
      ),
      531 => 
      array (
        'Code' => 'RT0005',
        'Message' => 'The postal code is not provided by the user.',
        'Meaning' => 'The postal code is not provided by the user.',
      ),
      532 => 
      array (
        'Code' => 'RT0006',
        'Message' => 'The postal code provided by the user is invalid.',
        'Meaning' => 'The postal code provided by the user is invalid.',
      ),
      533 => 
      array (
        'Code' => 'RT0007',
        'Message' => 'The postal code provided by the user does not exist in the country.',
        'Meaning' => 'The postal code provided by the user does not exist in the country.',
      ),
      534 => 
      array (
        'Code' => 'RT0008',
        'Message' => 'The city name provided by the user does not exist in the country.',
        'Meaning' => 'The city name provided by the user does not exist in the country.',
      ),
      535 => 
      array (
        'Code' => 'RT0009',
        'Message' => 'More than one city with the same name found.',
        'Meaning' => 'More than one city with the same name found.',
      ),
      536 => 
      array (
        'Code' => 'RT0010',
        'Message' => 'More than one service areas are found in the city.',
        'Meaning' => 'More than one service areas are found in the city.',
      ),
      537 => 
      array (
        'Code' => 'RT0011',
        'Message' => 'Multiple Cities for same postal code.',
        'Meaning' => 'Multiple Cities for same postal code.',
      ),
      538 => 
      array (
        'Code' => 'RT0012',
        'Message' => 'The city name provided by the user does not have an exact match.',
        'Meaning' => 'The city name provided by the user does not have an exact match.',
      ),
      539 => 
      array (
        'Code' => 'RT0013',
        'Message' => 'The postal code is incorrectly written in the city or the division field.',
        'Meaning' => 'The postal code is incorrectly written in the city or the division field.',
      ),
      540 => 
      array (
        'Code' => 'RT0014',
        'Message' => 'Postcode in address is invalid',
        'Meaning' => 'Postcode in address is invalid',
      ),
      541 => 
      array (
        'Code' => 'RT0015',
        'Message' => 'Origin Country Is Not Supported.',
        'Meaning' => 'Origin Country Is Not Supported.',
      ),
      542 => 
      array (
        'Code' => 'Capability and Quote Service',
        'Message' => '',
        'Meaning' => '',
      ),
      543 => 
      array (
        'Code' => 'Code',
        'Message' => 'Message',
        'Meaning' => 'Meaning',
      ),
      544 => 
      array (
        'Code' => '1000',
        'Message' => 'The requested Global Product Code <GlobalProductCode> and Local Product Code <LocalProductCode> is not available based on origin country <From\\CountryCode> postal location and destination country <To\\CountryCode> postal location for payment country <<PaymentCountryCode>. Please make sure data entered is valid before proceeding or contact our customer service.',
        'Meaning' => 'There is no products available based on your search criteria. Please make sure data entered is valid before proceeding.',
      ),
      545 => 
      array (
        'Code' => '1001',
        'Message' => 'The requested Global Product Code <GlobalProductCode> and Local Product Code <LocalProductCode> is not available based on origin country <From\\CountryCode> and destination country <To\\CountryCode> for payment country <<PaymentCountryCode>',
        'Meaning' => 'The requested product(s) not available based on your search criteria.',
      ),
      546 => 
      array (
        'Code' => '1002',
        'Message' => 'The requested Global Product Code <GlobalProductCode> and Local Product Code <LocalProductCode> is not available based on origin country <From\\CountryCode> postal location and destination country <To\\CountryCode> postal location for payment country <<PaymentCountryCode>. Please make sure data entered is valid before proceeding or contact our customer service.',
        'Meaning' => 'There is no data available based on your search criteria.',
      ),
      547 => 
      array (
        'Code' => '1003',
        'Message' => 'Standard pick-up service is not provided from this location on this day <Date>. Please contact Customer Service  for more details.',
        'Meaning' => 'Pick-up service is not provided on this day.',
      ),
      548 => 
      array (
        'Code' => '1004',
        'Message' => 'The requested Global Product Code <GlobalProductCode> and Local Product Code <LocalProductCode> is not available based on origin country <From\\CountryCode> and destination country <To\\CountryCode> for payment country <<PaymentCountryCode>.',
        'Meaning' => 'Product not available between this origin and destination.',
      ),
      549 => 
      array (
        'Code' => '1005',
        'Message' => 'The origin and destination offers this product capability but the shipment restrictions does not allow any product availability. Please change the search criteria or contact Customer Service  for more details.',
        'Meaning' => 'Product not returned because of Marketed restrictions (of weight, dimension, value, availability etc.)',
      ),
      550 => 
      array (
        'Code' => '2001',
        'Message' => 'Invalid header ID.',
        'Meaning' => 'Invalid header id.',
      ),
      551 => 
      array (
        'Code' => '2002',
        'Message' => 'Invalid application code.',
        'Meaning' => 'Invalid application code.',
      ),
      552 => 
      array (
        'Code' => '3000',
        'Message' => 'The origin country code <From\\CountryCode> could not be found. Please check the origin country code.',
        'Meaning' => 'The origin country code could not be found. Please check the country code.',
      ),
      553 => 
      array (
        'Code' => '3001',
        'Message' => 'The location country code <From\\CountryCode> could not be found. Please check the origin country code.',
        'Meaning' => 'The location country code could not be found please check the location country parameter.',
      ),
      554 => 
      array (
        'Code' => '3002',
        'Message' => 'The origin zip code <From\\Postalcode> could not be found. Please check the origin post code parameter.',
        'Meaning' => 'The origin zip code could not be found please check your origin zip code parameter.',
      ),
      555 => 
      array (
        'Code' => '3003',
        'Message' => 'The origin city name <From\\City> could not be found. Please check the origin city name.',
        'Meaning' => 'The origin city name could not be found please check the city name.',
      ),
      556 => 
      array (
        'Code' => '3004',
        'Message' => 'not used',
        'Meaning' => 'The origin service area code could not be found please check the origin service area code.',
      ),
      557 => 
      array (
        'Code' => '3005',
        'Message' => 'The destination country code <To\\CountryCpde> could not be found. Please check the destination country code.',
        'Meaning' => 'The destination country code could not be found. Please check the country code.',
      ),
      558 => 
      array (
        'Code' => '3006',
        'Message' => 'The destination zip code <To\\Postalcode> could be found. Please check your destination zip code parameter.',
        'Meaning' => 'The destination zip code could not be found please check your destination zip code parameter.',
      ),
      559 => 
      array (
        'Code' => '3007',
        'Message' => 'The destination city name <To\\City> could not be found. Please check the destination city name.',
        'Meaning' => 'The destination city name could not be found please check the destination city name.',
      ),
      560 => 
      array (
        'Code' => '3008',
        'Message' => 'not used',
        'Meaning' => 'The destination service area code could not be found please check the destination service area code.',
      ),
      561 => 
      array (
        'Code' => '3009',
        'Message' => 'The format of the shipment date <Date> is not correct. Please check the shipment date format.',
        'Meaning' => 'The format of the pickup date is not correct. Please check the pickup date format.',
      ),
      562 => 
      array (
        'Code' => '3010',
        'Message' => 'The format of ready time <ReadyTime> is not correct. Please check the time format.',
        'Meaning' => 'The format of the ready time is not correct. Please check the time format.',
      ),
      563 => 
      array (
        'Code' => '3011',
        'Message' => 'The format of the dimensions - height <Height>, depth <Depth> and width <Width>are not correct. Please check the dimensions format.',
        'Meaning' => 'The format of the dimensions is not correct. Please check the dimensions format.',
      ),
      564 => 
      array (
        'Code' => '3012',
        'Message' => 'The format of the weight <ShipmentWeight> is not correct. Please check the weight format.',
        'Meaning' => 'The format of the weight is not correct. Please check the weight format.',
      ),
      565 => 
      array (
        'Code' => '3013',
        'Message' => 'The shipment weight <Pieces/Piece/Weight> is not within the restrictions for the selected origin country <From\\CountryCode>. Please check the piece weight.',
        'Meaning' => 'The shipment weight is not with the restrictions for the selected country. Please check your piece weight.',
      ),
      566 => 
      array (
        'Code' => '3014',
        'Message' => 'The shipment height <Pieces/Piece/Height> is not within the restrictions for the selected origin country <From\\CountryCode>. Please check the piece height.',
        'Meaning' => 'The shipment height is not with the restrictions for the selected country. Please check your piece height.',
      ),
      567 => 
      array (
        'Code' => '3015',
        'Message' => 'The shipment depth <Pieces/Piece/Depth> is not within the restrictions for the selected origin country <From\\CountryCode>. Please check the piece depth.',
        'Meaning' => 'The shipment length is not with the restrictions for the selected country. Please check your piece length.',
      ),
      568 => 
      array (
        'Code' => '3016',
        'Message' => 'The shipment width <Pieces/Piece/Width> is not within the restrictions for the selected origin country <From\\CountryCode>. Please check the piece width.',
        'Meaning' => 'The shipment width/diameter is not with the restrictions for the selected country. Please check your width/diameter',
      ),
      569 => 
      array (
        'Code' => '3017',
        'Message' => 'The shipment declared value <DeclaredValue> is not within the restriction for the selected origin country <From\\CountryCode>. Please check the shipment declared value.',
        'Meaning' => 'The shipment value is not within the restrictions.',
      ),
      570 => 
      array (
        'Code' => '3018',
        'Message' => 'The payment country code <PaymentCountryCode> could not be found. Please check the pament country code.',
        'Meaning' => 'The payment country could not be found  please check your payment country.',
      ),
      571 => 
      array (
        'Code' => '3019',
        'Message' => 'not used',
        'Meaning' => 'The commodity code could not be found  please check the commodity code.',
      ),
      572 => 
      array (
        'Code' => '3020',
        'Message' => 'The origin country <From\\CountryCode> location postal code <From\\Postalcode> or City <From\\City> is invalid. Please check the origin country location details.',
        'Meaning' => 'The origin location is invalid. Please check the data.',
      ),
      573 => 
      array (
        'Code' => '3021',
        'Message' => 'The destination country <To\\CountryCode> location postal code <To\\Postalcode> or City <To\\City> is invalid. Please check the destination country location details.',
        'Meaning' => 'The destination location is invalid. Please check the data.',
      ),
      574 => 
      array (
        'Code' => '3022',
        'Message' => 'The origin postcode <From\\Postalcode> does not provide standard pick up for selected origin country <From\\CountryCode>. Please call customer service for special handling.',
        'Meaning' => 'The origin postcode does not provide standard pick up. Please call customer service for special handling.',
      ),
      575 => 
      array (
        'Code' => '3023',
        'Message' => 'The destination postcode <To\\Postalcode> does not provide standard delivery. Please call customer service for special handling.',
        'Meaning' => 'The destination postcode does not provide standard delivery. Please call customer service for special handling.',
      ),
      576 => 
      array (
        'Code' => '3024',
        'Message' => 'The origin postcode <From\\Postalcode> or destination postcode <To\\Postalcode> format is not correct. Please check the postcode format.',
        'Meaning' => 'Postcode format wrong.',
      ),
      577 => 
      array (
        'Code' => '3025',
        'Message' => 'The origin location information is missing. Post code, city name or suburb name should be provided.',
        'Meaning' => 'Insufficient origin location information such as postcode, city and suburb name.',
      ),
      578 => 
      array (
        'Code' => '3026',
        'Message' => 'The destination location information is missing. Post code, city name or suburb name should be provided.',
        'Meaning' => 'Insufficient destination location information such as postcode, city and suburb name.',
      ),
      579 => 
      array (
        'Code' => '3027',
        'Message' => 'Origin facility is suspended.',
        'Meaning' => 'Origin facilty code is suspended.',
      ),
      580 => 
      array (
        'Code' => '3028',
        'Message' => 'Destination facility is suspended.',
        'Meaning' => 'Destination facility code is suspended.',
      ),
      581 => 
      array (
        'Code' => '5001',
        'Message' => 'The origin country code is missing. This is a mandatory input parameter.',
        'Meaning' => 'The origin country code is missing. This is a mandatory input parameter.',
      ),
      582 => 
      array (
        'Code' => '5002',
        'Message' => 'The origin zip code is missing. The zip code for the selected country <From\\CountryCode> is mandatory.',
        'Meaning' => 'The origin zip code is missing. The zip code for the selected country is mandatory.',
      ),
      583 => 
      array (
        'Code' => '5003',
        'Message' => 'The origin city name is missing. The city name for the selected country <From\\CountryCode> is mandatory.',
        'Meaning' => 'The origin city name is missing. The city name for the selected country is mandatory.',
      ),
      584 => 
      array (
        'Code' => '5004',
        'Message' => 'The origin service area code is missing. The service area code for the selected country is mandatory.',
        'Meaning' => 'The origin service area code is missing. The service area code for the selected country is mandatory.',
      ),
      585 => 
      array (
        'Code' => '5005',
        'Message' => 'The destination country code is missing. This is a mandatory input parameter.',
        'Meaning' => 'The destination country code is missing. This is a mandatory input parameter.',
      ),
      586 => 
      array (
        'Code' => '5006',
        'Message' => 'The destination zip code is missing. The zip code for the selected country <To\\CountryCode> is mandatory.',
        'Meaning' => 'The destination zip code is missing. The zip code for the selected country is mandatory.',
      ),
      587 => 
      array (
        'Code' => '5007',
        'Message' => 'The destination city name is missing. The city name for the selected country <To\\CountryCode> is mandatory.',
        'Meaning' => 'The destination city name is missing. The city name for the selected country is mandatory.',
      ),
      588 => 
      array (
        'Code' => '5008',
        'Message' => 'The destination service area code is missing. The service area code for the selected country is mandatory.',
        'Meaning' => 'The destination service area code is missing. The service area code for the selected country is mandatory.',
      ),
      589 => 
      array (
        'Code' => '5009',
        'Message' => 'The pickup date is missing. The pickup date is a mandatory field.',
        'Meaning' => 'The pickup date is missing. The pickup date is a mandatory field.',
      ),
      590 => 
      array (
        'Code' => '5010',
        'Message' => 'The ready time is missing. This is a mandatory parameter.',
        'Meaning' => 'The ready time is missing. This is a mandatory parameter.',
      ),
      591 => 
      array (
        'Code' => '5011',
        'Message' => 'The unit of measure is missing.',
        'Meaning' => 'The unit of measure is missing.',
      ),
      592 => 
      array (
        'Code' => '5012',
        'Message' => 'The piece weight is missing. This is mandatory information for the requested lane.',
        'Meaning' => 'The piece weight is missing. This is mandatory information for the requested lane.',
      ),
      593 => 
      array (
        'Code' => '5013',
        'Message' => 'The number of pieces field value is missing.',
        'Meaning' => 'The number of pieces is missing.',
      ),
      594 => 
      array (
        'Code' => '5014',
        'Message' => 'The total shipment volume field value is missing.',
        'Meaning' => 'The total shipment volume is missing.',
      ),
      595 => 
      array (
        'Code' => '5017',
        'Message' => 'The maximum piece weight field value is missing.',
        'Meaning' => 'The maximum piece weight is missing.',
      ),
      596 => 
      array (
        'Code' => '5018',
        'Message' => 'The maximum piece height field value is missing.',
        'Meaning' => 'The maximum piece height is missing.',
      ),
      597 => 
      array (
        'Code' => '5019',
        'Message' => 'The maximum piece depth field value is missing.',
        'Meaning' => 'The maximum piece length is missing.',
      ),
      598 => 
      array (
        'Code' => '5020',
        'Message' => 'The maximum piece width field value is missing.',
        'Meaning' => 'The maximum piece width/diameter is missing.',
      ),
      599 => 
      array (
        'Code' => '5021',
        'Message' => 'The declared value field value is missing.',
        'Meaning' => 'The declared value is missing.',
      ),
      600 => 
      array (
        'Code' => '5022',
        'Message' => 'The shipment piece contains invalid values. Please check   Piece Height <Piece\\Height>, Piece Depth <Piece\\Depth>, Piece Width <Piece\\Width> and Piece Weight <Piece\\Weight>.',
        'Meaning' => 'The shipment piece contains invalid values.',
      ),
      601 => 
      array (
        'Code' => '5023',
        'Message' => 'The pickup date <Date> is too old. Please check pickup date.',
        'Meaning' => 'The pickup date is too old.',
      ),
      602 => 
      array (
        'Code' => '5024',
        'Message' => 'The unit of weight is missing.',
        'Meaning' => 'The unit of weight is missing.',
      ),
      603 => 
      array (
        'Code' => '5027',
        'Message' => 'The declared value cannot exceed the limit set for the country <From\\CountryCode>.',
        'Meaning' => 'The declared value cannot exceed the limit set for the country.',
      ),
      604 => 
      array (
        'Code' => '5028',
        'Message' => 'Unknown unit of measure for weight.',
        'Meaning' => 'Unknown unit of measure for weight.',
      ),
      605 => 
      array (
        'Code' => '5029',
        'Message' => 'Unknown unit of measure for dimensions.',
        'Meaning' => 'Unknown unit of measure for dimensions.',
      ),
      606 => 
      array (
        'Code' => '5030',
        'Message' => 'The currency is missing.',
        'Meaning' => '',
      ),
      607 => 
      array (
        'Code' => '5031',
        'Message' => 'The maximum piece weight <MaxPieceWeight> is greater than the total shipment weight <ShipmentWeight>.',
        'Meaning' => 'The maximum piece weight is greater than the total shipment weight.',
      ),
      608 => 
      array (
        'Code' => '5032',
        'Message' => 'Currency symbol <CurrencyCode> or <DeclaredCurrency> or <CODCurrencyCode> or <InsuredCurrency> could not be found. Please check the currency symbol field.',
        'Meaning' => 'Unknown currency symbol.',
      ),
      609 => 
      array (
        'Code' => '5033',
        'Message' => 'Invalid combination of origin country <From\\CountryCode> City <From\\City> and Postal Code <From\\Postalcode> or destination country <To\\CountryCode> City <To\\City> and Postal Code <To\\PostalCode>.Please check and enter a valid combination of city and postal code.',
        'Meaning' => 'The location information is missing!',
      ),
      610 => 
      array (
        'Code' => '5034',
        'Message' => 'Invalid combination of origin country <From\\CountryCode> City <From\\City> and Postal Code <From\\Postalcode> or destination country <To\\CountryCode> City <To\\City> and Postal Code <To\\PostalCode>. Please check and enter a valid combination of city and postal code.',
        'Meaning' => 'Location information is not complete. Please specify zip code, city name.',
      ),
      611 => 
      array (
        'Code' => '5035',
        'Message' => 'Invalid combination of origin country <From\\CountryCode> City <From\\City> and Postal Code <From\\Postalcode> or destination country <To\\CountryCode> City <To\\City> and Postal Code <To\\PostalCode>. Please check and enter a valid combination of city and postal code.',
        'Meaning' => '5035 : Location information is incorrect. Please specify city name, suburb.',
      ),
      612 => 
      array (
        'Code' => '5036',
        'Message' => 'The Global Product Code <GlobalProductCode> or Local Product Code <LocalProductCode> information is/are missing.',
        'Meaning' => 'The global/local product code information  is/are missing.',
      ),
      613 => 
      array (
        'Code' => '5037',
        'Message' => 'The Global Service Name <GlobalServiceName> or Local Service Type <LocalServiceType> information is/are missing.',
        'Meaning' => 'The global/local optional service code information is/are missing.',
      ),
      614 => 
      array (
        'Code' => '5038',
        'Message' => 'Invalid combinations of unit of measurement for weight <WeightUnit> and unit of measurement for dimension <DimensionUnit>. Please check units of weight and dimention value.',
        'Meaning' => 'Invalid combination of units of weight and dimension.',
      ),
      615 => 
      array (
        'Code' => '5100',
        'Message' => 'Invalid Global Product Code <QtdShp/GlobalProductCode> and Special Service Type <QtdShp/QtdShpExChrg/SpecialServiceType> combination. Please check the product and service combination.',
        'Meaning' => 'Invalid product service combination.',
      ),
      616 => 
      array (
        'Code' => '5110',
        'Message' => 'Special Service Type <QtdShp/QtdShpExChrg/SpecialServiceType> not applicable. Please check the optional service.',
        'Meaning' => 'Optional service not applicable.',
      ),
      617 => 
      array (
        'Code' => '6000',
        'Message' => 'Unexpected DCT application error.',
        'Meaning' => 'Unexpected application error',
      ),
      618 => 
      array (
        'Code' => '6100',
        'Message' => 'DCT - General schema constrait violation.',
        'Meaning' => 'General schema constraint violation.',
      ),
    ),
    'EA' => 
    array (
      0 => 
      array (
        'Code' => 'SV003',
        'Message' => 'Consignee country not found. Please check your entries and resubmit.',
        'Meaning' => 'Consignee country not found',
      ),
      1 => 
      array (
        'Code' => 'SV004',
        'Message' => 'Consignee country not active. Please check your entries and resubmit.',
        'Meaning' => 'Consignee country not active',
      ),
      2 => 
      array (
        'Code' => 'SV005',
        'Message' => 'DHL has a temporary restriction on shipments to the consignee country. Please check your entries and resubmit.',
        'Meaning' => 'Temporary ban on consignee country',
      ),
      3 => 
      array (
        'Code' => 'SV006a',
        'Message' => 'There is a temporary ban on dutiable shipments to consignee country.',
        'Meaning' => 'Temporary ban on dutiable shipments to consignee country',
      ),
      4 => 
      array (
        'Code' => 'SV006b',
        'Message' => 'There is a temporary ban on high-value, dutiable shipments to the destination country.',
        'Meaning' => 'Ban on dutiable shipments that exceed the declared value to the destination country',
      ),
      5 => 
      array (
        'Code' => 'SV007',
        'Message' => 'Your package size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      6 => 
      array (
        'Code' => 'SV007a',
        'Message' => 'Your package size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      7 => 
      array (
        'Code' => 'SV007b',
        'Message' => 'Your shipment size or weight exceeds the limits for the destination country.',
        'Meaning' => 'Piece dimensional weight exceeded error limit',
      ),
      8 => 
      array (
        'Code' => 'SV008',
        'Message' => 'WARNING: The number of packages in your shipment, the dimensions, or the weights may require special handling or may add to transit time.',
        'Meaning' => 'WARNING: Piece dimensional weight exceeded warning limit',
      ),
      9 => 
      array (
        'Code' => 'SV009',
        'Message' => 'WARNING: Your shipment value exceeds limits for destination country and may require pre-approval and added transit time.',
        'Meaning' => 'WARNING: Shipment declared value exceeded normal limits',
      ),
      10 => 
      array (
        'Code' => 'SV010a',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Origin routing code could not be determined',
      ),
      11 => 
      array (
        'Code' => 'SV010b',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Postal code not provided to determine the origin routing code.',
      ),
      12 => 
      array (
        'Code' => 'SV010c',
        'Message' => 'The system could not determine service information for your location. Please check the shipper postal code and city and resubmit.',
        'Meaning' => 'Postal code invalid for the purpose of identifying the origin routing code',
      ),
      13 => 
      array (
        'Code' => 'SV010d',
        'Message' => 'Warning - Courier Route unavailable for shipment',
        'Meaning' => 'Courier route code not available for the requested account which mainly is IMPex account in DCI cache database for XML PI v4.1 change.',
      ),
      14 => 
      array (
        'Code' => 'SV011a',
        'Message' => 'Consignee postal code or city name cannot be recognized. Please update this information and resubmit.',
        'Meaning' => 'Destination routing code could not be determined',
      ),
      15 => 
      array (
        'Code' => 'SV011b',
        'Message' => 'The system could not determine service for the destination. Please check the recipient postal code and resubmit.',
        'Meaning' => 'Postal code not provided to determine the destination routing code',
      ),
      16 => 
      array (
        'Code' => 'SV011c',
        'Message' => 'The system could not determine service for the destination. Please check the recipient postal code and country and resubmit.',
        'Meaning' => 'Postal code invalid for the purpose of identifying the destination routing code',
      ),
      17 => 
      array (
        'Code' => 'SV012a',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number was not found in the billing records',
      ),
      18 => 
      array (
        'Code' => 'SV012b',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region . Please enter',
        'Meaning' => 'Shipper account is not a domestically billed shipper account',
      ),
      19 => 
      array (
        'Code' => 'SV012c',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is for internal use only',
      ),
      20 => 
      array (
        'Code' => 'SV012d',
        'Message' => 'Your shipping account number cannot be used for shipments originating in this region. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is for inbound use only',
      ),
      21 => 
      array (
        'Code' => 'SV012e',
        'Message' => 'Your shipping account number is marked for deletion. It cannot be used for shipments originating in this region. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is marked for deletion',
      ),
      22 => 
      array (
        'Code' => 'SV012f',
        'Message' => 'The shipment was not scheduled due to the credit status of shipping account. Please enter another account and resubmit.',
        'Meaning' => 'Shipper account is not in good credit standing',
      ),
      23 => 
      array (
        'Code' => 'SV013a',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      24 => 
      array (
        'Code' => 'SV013b',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      25 => 
      array (
        'Code' => 'SV013c',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      26 => 
      array (
        'Code' => 'SV013d',
        'Message' => 'The system could not verify your shipping account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipper account number is not valid',
      ),
      27 => 
      array (
        'Code' => 'SV014a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'Shipment bill-to account number was not found in the billing records',
      ),
      28 => 
      array (
        'Code' => 'SV014b',
        'Message' => 'Your billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Shipment bill-to account is not a domestically billed shipper account',
      ),
      29 => 
      array (
        'Code' => 'SV014c',
        'Message' => 'Your billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Shipment bill-to account is for internal use only',
      ),
      30 => 
      array (
        'Code' => 'SV014d',
        'Message' => 'Your billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Shipment bill-to account is for inbound use only',
      ),
      31 => 
      array (
        'Code' => 'SV014e',
        'Message' => 'The shipment was not scheduled due to the credit status of billing account. Please enter another account.',
        'Meaning' => 'Shipment bill-to account is not in good credit standing',
      ),
      32 => 
      array (
        'Code' => 'SV015a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      33 => 
      array (
        'Code' => 'SV015b',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      34 => 
      array (
        'Code' => 'SV015c',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      35 => 
      array (
        'Code' => 'SV015d',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      36 => 
      array (
        'Code' => 'SV016a',
        'Message' => 'The system could not verify your duty billing account number. Please correct this number and resubmit.',
        'Meaning' => 'Duty bill-to account number was not found in the billing records',
      ),
      37 => 
      array (
        'Code' => 'SV016b',
        'Message' => 'Your duty billing account number cannot be used for shipments originating in the region. Please enter another account number and resubmit.',
        'Meaning' => 'Duty bill-to account is for internal use only',
      ),
      38 => 
      array (
        'Code' => 'SV016c',
        'Message' => 'Your duty billing account number cannot be used for shipments originating in the region. Please enter another account and resubmit.',
        'Meaning' => 'Duty bill-to account is for inbound use only',
      ),
      39 => 
      array (
        'Code' => 'SV016d',
        'Message' => 'The shipment was not scheduled due to the credit status of duty billing account number. Please enter another account and resubmit.',
        'Meaning' => 'Duty bill-to account is not in good credit standing',
      ),
      40 => 
      array (
        'Code' => 'SV017a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      41 => 
      array (
        'Code' => 'SV017b',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      42 => 
      array (
        'Code' => 'SV017c',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      43 => 
      array (
        'Code' => 'SV017d',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit.',
        'Meaning' => 'billing account number is not valid',
      ),
      44 => 
      array (
        'Code' => 'SV018',
        'Message' => 'The system is unable to process shipments at this time. Please resubmit your request at a later time.',
        'Meaning' => 'Cannot complete the validation due to system failure',
      ),
      45 => 
      array (
        'Code' => 'SV019',
        'Message' => 'Shipments to this city in Consignee address cannot have duties/taxes billed to the shipper. Please change the duty payment option and resubmit.',
        'Meaning' => 'Payment method was not bill recipient',
      ),
      46 => 
      array (
        'Code' => 'SV021',
        'Message' => 'Shipments to Consignee country cannot be billed to the recipient. Please change the payment option and resubmit.',
        'Meaning' => 'Invalid transport collect billing option (shipments to ship-to country cannot be billed to recipient)',
      ),
      47 => 
      array (
        'Code' => 'SV022',
        'Message' => 'Your billing account number is for international billing only. Please correct the account or destination and resubmit.',
        'Meaning' => 'International country was not specified',
      ),
      48 => 
      array (
        'Code' => 'SV023a',
        'Message' => 'Duty and taxes charges for destination country must be billed to the recipient. Please change the duty payment option and resubmit.',
        'Meaning' => 'Billing option not available for the destination country',
      ),
      49 => 
      array (
        'Code' => 'SV023b',
        'Message' => 'Duty/tax charges must be billed to recipients in destination city/country. Please change the duty payment option and resubmit.',
        'Meaning' => 'Billing option not available for the specific service area of the destination country',
      ),
      50 => 
      array (
        'Code' => 'SV024',
        'Message' => 'The destination country requires recipients to pay duties and taxes. Please change your duty/tax billing option to recipient.',
        'Meaning' => 'Invalid duty payment option',
      ),
      51 => 
      array (
        'Code' => 'SV025a',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      52 => 
      array (
        'Code' => 'SV025b',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      53 => 
      array (
        'Code' => 'SV025c',
        'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
        'Meaning' => 'Shipping charges not determined',
      ),
      54 => 
      array (
        'Code' => 'SV026',
        'Message' => 'The insured value of your shipment exceeds 110% of the declared value. Please adjust the insured or declared value and resubmit.',
        'Meaning' => 'Insured value exceeds 110% of the declared value',
      ),
      55 => 
      array (
        'Code' => 'SV027a',
        'Message' => 'Your shipment date has already passed. Please correct the date and resubmit.',
        'Meaning' => 'Current date at the origin service area is already more than one day past the requested ship date',
      ),
      56 => 
      array (
        'Code' => 'SV027b',
        'Message' => 'Shipments cannot be scheduled more than ten days in the future. Please resubmit your request with an earlier shipment date.',
        'Meaning' => 'Requested date is more than 10 days from the current date at the origin service area',
      ),
      57 => 
      array (
        'Code' => 'SV028',
        'Message' => 'Your billing account number does not support door- to-airport or airport-to-airport service. Please select another service or account.',
        'Meaning' => 'Invalid Door-To option',
      ),
      58 => 
      array (
        'Code' => 'SV029',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      59 => 
      array (
        'Code' => 'SV029a',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      60 => 
      array (
        'Code' => 'SV029b',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      61 => 
      array (
        'Code' => 'SV029c',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      62 => 
      array (
        'Code' => 'SV029d',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      63 => 
      array (
        'Code' => 'SV029e',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      64 => 
      array (
        'Code' => 'SV029f',
        'Message' => 'The system could not verify your billing account number. Please correct this number and resubmit',
        'Meaning' => 'billing account number invalid',
      ),
      65 => 
      array (
        'Code' => 'SV030',
        'Message' => 'The insurance limit is unavailable for your country. Please call Customer Services.',
        'Meaning' => 'The insurance limit is unavailable',
      ),
      66 => 
      array (
        'Code' => 'SV031',
        'Message' => 'WARNING:Your Account is a Cash Customer type account.  Please contact your customer service representative.',
        'Meaning' => 'Account type invalid.',
      ),
      67 => 
      array (
        'Code' => 'SV034a',
        'Message' => 'Sorry, our system is not able to assign Piece IDs to your shipment at the moment. Please try again later or call our DHL Customer Service Hotline for further assistance.',
        'Meaning' => 'Piece IDs not sufficient error',
      ),
      68 => 
      array (
        'Code' => 'SV034b',
        'Message' => 'Sorry, there are insufficient Piece IDs to be assigned to your shipment at the moment. Please try again later or call our DHL Customer Service Hotline for further assistance.',
        'Meaning' => 'Piece IDs is exhausted error.',
      ),
      69 => 
      array (
        'Code' => 'SV035',
        'Message' => 'We are unable to service this ZIP code. Please contact your DHL sales representative for further assistance',
        'Meaning' => 'Postcode is incorrect and failed in routing',
      ),
      70 => 
      array (
        'Code' => 'SV050',
        'Message' => 'Local Product Code not configured for the country. Please contact technical service representative.',
        'Meaning' => '',
      ),
      71 => 
      array (
        'Code' => 'SV051',
        'Message' => 'POD is not available for shipments to destination country. Please unselect the POD option and resubmit.',
        'Meaning' => '',
      ),
      72 => 
      array (
        'Code' => '107',
        'Message' => 'Incorrect or Incomplete Input Parameters',
        'Meaning' => 'Incorrect or Incomplete Input Parameters',
      ),
      73 => 
      array (
        'Code' => '108',
        'Message' => 'System Unavailable',
        'Meaning' => 'System Unavailable',
      ),
      74 => 
      array (
        'Code' => '111',
        'Message' => 'Error in parsing request XML',
        'Meaning' => 'Error in parsing request XML',
      ),
      75 => 
      array (
        'Code' => '112',
        'Message' => 'Request type could not be identified',
        'Meaning' => 'Request type could not be identified',
      ),
      76 => 
      array (
        'Code' => '113',
        'Message' => 'The same special service cannot be requested more than once',
        'Meaning' => 'The same special service cannot be requested more than once',
      ),
      77 => 
      array (
        'Code' => '114',
        'Message' => 'Wrong packaging Type entered. Packaging type can only be CP.',
        'Meaning' => 'Wrong packaging Type entered. Packaging type can only be CP.',
      ),
      78 => 
      array (
        'Code' => '123',
        'Message' => 'Query User Profile System Unavailable',
        'Meaning' => 'eCom backend - Query User Profile service is not available',
      ),
      79 => 
      array (
        'Code' => '124',
        'Message' => 'DCT System Unavailable',
        'Meaning' => 'DCT application is not available',
      ),
      80 => 
      array (
        'Code' => '150',
        'Message' => 'Error in the Data',
        'Meaning' => 'The data is not Valid',
      ),
      81 => 
      array (
        'Code' => '151',
        'Message' => 'Mandatory Required error',
        'Meaning' => 'Mandatory Field Missing Error',
      ),
      82 => 
      array (
        'Code' => '152',
        'Message' => 'Conditional Required Error',
        'Meaning' => 'Condition Field Missing Error',
      ),
      83 => 
      array (
        'Code' => '153',
        'Message' => 'Recurrence Error',
        'Meaning' => 'Data Recurrence Error',
      ),
      84 => 
      array (
        'Code' => '154',
        'Message' => 'Value Error',
        'Meaning' => 'Value Provided is wrong',
      ),
      85 => 
      array (
        'Code' => '155',
        'Message' => 'Type Error',
        'Meaning' => 'Type of data is wrong',
      ),
      86 => 
      array (
        'Code' => '156',
        'Message' => 'Length Error',
        'Meaning' => 'The length of the value is wrong',
      ),
      87 => 
      array (
        'Code' => '157',
        'Message' => 'Format Error',
        'Meaning' => 'The format of the value is wrong',
      ),
      88 => 
      array (
        'Code' => '158',
        'Message' => 'Shipment from Specified Country is not Supported',
        'Meaning' => 'Shipment cannot originate from this country',
      ),
      89 => 
      array (
        'Code' => '211',
        'Message' => 'Please contact DHL representative',
        'Meaning' => 'DHL Internal Error',
      ),
      90 => 
      array (
        'Code' => 'PLT002',
        'Message' => 'Paperless Trade is only available for dutiable shipments. Please check all mandatory fields required for Paperless Trade are correct or resubmit as a regular shipment. If further information is required, please contact your DHL representative.',
        'Meaning' => 'Paperless trade (PLT) shipment is only available for:
1) dutiable shipment
<IsDutiable> element must contain value of ‘Y’
2) <Dutiable> element must be included
3) <SpecialServiceType> element must contain value of ‘WY’
4) <DocImages> element must contain the commercial invoice or other supporting document images required for Customs clearance',
      ),
      91 => 
      array (
        'Code' => 'PLT003',
        'Message' => 'The origin country does not support Paperless shipment service. Please contact DHL representative for further information or resubmit as regular shipment.',
        'Meaning' => 'This is warning message if the shipper country does not support PLT shipment and it will be processed as regular shipment without WY Paperless Trade service.',
      ),
      92 => 
      array (
        'Code' => 'PLT004',
        'Message' => 'You are not subscribed for Paperless shipment service. Please contact your DHL technical representative for Paperless shipment subscription.',
        'Meaning' => 'If the client is not subscribed for PLT shipmet service.For <PLTStatus> field value of “D” – De-registered',
      ),
      93 => 
      array (
        'Code' => 'PLT005',
        'Message' => 'Paperless shipment is suspended. Please contact your DHL technical representative for reactivation.',
        'Meaning' => 'If the <PLTStatus> field value is “S” – Suspended, XML-PI Shipment Validation service will not allow to proceed with the shipment flow and return a error message to the XML-PI client',
      ),
      94 => 
      array (
        'Code' => 'PLT006',
        'Message' => 'Paperless shipment service is not allowed for one of these reasons: Shipper or receiver country doesn\'t support Paperless Service, the product selected doesn\'t support Paperless or the declared value entered is greater than the allowed limit. Please contact DHL representative for further information or resubmit as regular shipment.',
        'Meaning' => 'PLT capability failed due to:
1) Shipper or receiver country does not support Paperless Trade (WY)
2) the selected product does not support Paperless Trade (WY)
3) delcared value is exceeded the allowed value limit',
      ),
      95 => 
      array (
        'Code' => 'PLT007',
        'Message' => 'The total image sizes exceeded the maximum image size for Paperless shipment. Please check and resubmit with correct request message.',
        'Meaning' => 'The total document images for PLT shipment is exceeded the maximum images size in XMLPI application.',
      ),
      96 => 
      array (
        'Code' => 'RG001',
        'Message' => 'eCom backend Registration service is temporary not available. Please resubmit your request later.',
        'Meaning' => 'Registration service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      97 => 
      array (
        'Code' => 'RG002',
        'Message' => 'eCom backend Registration Service – account validation process is temporary not available. Please resubmit your request later.',
        'Meaning' => 'The account validation service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      98 => 
      array (
        'Code' => 'RG003',
        'Message' => 'eCom backend Registration service – Routing process is temporarily not available. Please resubmit your request later.',
        'Meaning' => 'The routing service is having a problem that prevents processing of the registration request. Registration cannot occur.',
      ),
      99 => 
      array (
        'Code' => 'RG004',
        'Message' => 'Registration failed. Registration information is incomplete or invalid. Please check the registration information and resubmit your request again',
        'Meaning' => 'At least one item in the registration request is either missing or has an invalid value. Registration is rejected.',
      ),
      100 => 
      array (
        'Code' => 'RG005',
        'Message' => 'Registration failed. The software or data version is invalid. Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'The software / data version is not acceptable for registration. Registration is rejected.',
      ),
      101 => 
      array (
        'Code' => 'RG006',
        'Message' => 'Registration failed. Your eCom Site ID is invalid.  Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'Site ID has a “revoked” status. Re-registration is rejected.',
      ),
      102 => 
      array (
        'Code' => 'RG007',
        'Message' => 'Registration failed. It is not a valid location within US. Please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'User’s location is not in the USA. Registration is rejected',
      ),
      103 => 
      array (
        'Code' => 'RG008',
        'Message' => 'Registration failed. Invalid Zip or Postal Code for the Country. Please correct and resubmit. For assistance, please contact your DHL technical service representative for further assistance',
        'Meaning' => 'There is no DHL service area code for the shipper and/or pickup address. Registration rejected.',
      ),
      104 => 
      array (
        'Code' => 'RG009',
        'Message' => 'Registration failed. Different shipper and pickup address is not allowed. Please correct and resubmit. For assistance, please contact your DHL technical service representative for further assistance.',
        'Meaning' => 'The shipper address and pickup address have different service area codes. Registration cannot occur.',
      ),
      105 => 
      array (
        'Code' => 'RG010',
        'Message' => 'Account number not found. Please contact your DHL technical service representative for further assistance',
        'Meaning' => 'Account number specified by the user was not found in the NBC records. Registration cannot occur.',
      ),
      106 => 
      array (
        'Code' => 'RG011',
        'Message' => 'Invalid account Number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified is not a domestically billed account. Registration cannot occur.',
      ),
      107 => 
      array (
        'Code' => 'RG012',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified is for internal use only. Registration cannot occur.',
      ),
      108 => 
      array (
        'Code' => 'RG013',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account number specified by the user is restricted to “inbound shipments only”. Registration cannot occur.',
      ),
      109 => 
      array (
        'Code' => 'RG014',
        'Message' => 'Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'The credit status of the account number specified by the user is not in “good standing” or “removed from credit suspension”.',
      ),
      110 => 
      array (
        'Code' => 'RG018',
        'Message' => 'Registration failed. eCom Site ID is invalid. Please contact your DHL technical service representative.',
        'Meaning' => 'Re-registration’s site ID not found in the database.',
      ),
      111 => 
      array (
        'Code' => 'RG019',
        'Message' => 'Registration failed. Invalid account number. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account validation cannot be completed',
      ),
      112 => 
      array (
        'Code' => 'RG020',
        'Message' => 'Invalid account number due to invalid account type. Please correct and resubmit your request again. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account type is unknown',
      ),
      113 => 
      array (
        'Code' => 'RG021',
        'Message' => 'Registration failed. Invalid postcode. Please resubmit after checking the zip or postal code and city name. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Invalid postal code',
      ),
      114 => 
      array (
        'Code' => 'RG022',
        'Message' => 'Registration failed. City and zip or postal code does not match. Please correct and resubmit. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'City not found in Routing service',
      ),
      115 => 
      array (
        'Code' => 'RG023',
        'Message' => 'eCom backend Registration service – Account validation process is encountering some technical problem. Please resubmit your request at a later time. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'Account validation service can not be located',
      ),
      116 => 
      array (
        'Code' => 'RG024',
        'Message' => 'eCom backend Registration service database is encountering some technical problem. Please resubmit your request at a later time. If this problem reoccurs contact your DHL technical service representative.',
        'Meaning' => 'eCom backend database error',
      ),
      117 => 
      array (
        'Code' => 'RG025',
        'Message' => 'Cash Account not allowed. Please contact your DHL customer service representative.',
        'Meaning' => 'Cash Account not allowed.',
      ),
      118 => 
      array (
        'Code' => 'RG026',
        'Message' => 'The eCom Site ID is unable to process Registration. Please contact your DHL technical representative.',
        'Meaning' => 'eCom backend is not able to locate the pickup location',
      ),
      119 => 
      array (
        'Code' => 'RG027',
        'Message' => 'Registration failed. The billing type for your account is invalid to register.  Enter another account and resubmit or you’re your DHL technical representative.',
        'Meaning' => 'Billing type for account is invalid.',
      ),
      120 => 
      array (
        'Code' => 'RG028',
        'Message' => 'Invalid eCom Site ID. Please contact your DHL technical representative for assistance.',
        'Meaning' => 'Site Id not found. Unable to retrieve the PLT Status. The site Id is invalid.',
      ),
    ),
    'GLOBAL' => 
    array (
      0 => 
      array (
        'Code' => 'LG200001',
        'Message' => 'Account not white-listed for ODD service; please contact your DHL account manager.',
        'Meaning' => 'Shipper account number not in ODD Shipper Account White List.',
      ),
      1 => 
      array (
        'Code' => 'LG200002',
        'Message' => 'ODD is not deployed in this country.',
        'Meaning' => 'Shipment’s destination country is not ODD deployed country.',
      ),
      2 => 
      array (
        'Code' => 'LG200004',
        'Message' => 'ODD Shipper Account Number field is required and waybill number is not exists in ODD. Please provide the Shipper Account Number.',
        'Meaning' => 'Shipper account number is required and waybill not found in ODD.',
      ),
      3 => 
      array (
        'Code' => 'LG200008',
        'Message' => 'SHIPPER does not have access to GenType : <Gentype>',
        'Meaning' => 'When SHIPPER tries to get URL with GenType other than DeliveryOpt and ShpDeliveryOpt.',
      ),
      4 => 
      array (
        'Code' => 'LG005',
        'Message' => 'ESB LinkGen Service is not able to query to fetch ODD URL. Please contact DHL for further assistance',
        'Meaning' => 'ESB LinkGen service is not available',
      ),
    ),
  ),
  'PickUpService' => 
  array (
    'AM' => 
    array (
      0 => 
      array (
        'Code' => 'PU003',
        'Message' => 'Cannot schedule a pickup due to unknown city or Zip/postal code. Please contact your technical service representative.',
        'Meaning' => 'Cannot schedule a pickup due to unknown city or Zip/postal code. Please contact your technical service representative.',
      ),
      1 => 
      array (
        'Code' => 'PU004',
        'Message' => 'Account number not valid for pickup.',
        'Meaning' => 'Account number not valid for pickup.',
      ),
      2 => 
      array (
        'Code' => 'PU005',
        'Message' => 'Unable to verify account number',
        'Meaning' => 'The system could not verify your account number.',
      ),
      3 => 
      array (
        'Code' => 'PU006',
        'Message' => 'Unable to verify account number. To schedule a pickup call customer service representative',
        'Meaning' => 'The system could not verify your account number.Please call the customer service representative',
      ),
      4 => 
      array (
        'Code' => 'PU007a',
        'Message' => 'Pickup NOT scheduled due to credit status of account number.',
        'Meaning' => 'A pickup was NOT scheduled due to the credit status of account.',
      ),
      5 => 
      array (
        'Code' => 'PU007b',
        'Message' => 'Pickup NOT scheduled due to credit status of account number.',
        'Meaning' => 'A pickup was NOT scheduled due to the credit status of account.',
      ),
      6 => 
      array (
        'Code' => 'PU008a',
        'Message' => 'Pickup NOT scheduled.  Date for pickup has passed. Correct pickup date and resubmit pickup request.',
        'Meaning' => 'A pickup was NOT scheduled. Your  date has already passed. Please resubmit your pickup request with a later delivery date.',
      ),
      7 => 
      array (
        'Code' => 'PU008b',
        'Message' => 'Pickup NOT scheduled.  Pickup date is more than ten days in advance of current date. Correct pickup date and resubmit.',
        'Meaning' => 'Pickups cannot be scheduled more than ten days in the future. Please resubmit your pickup request with an earlier delivery date.',
      ),
      8 => 
      array (
        'Code' => 'PU009',
        'Message' => 'The requested pickup date is a <?cndtn>. Call customer service.',
        'Meaning' => 'The requested pickup date is a <?cndtn>. Call customer service.',
      ),
      9 => 
      array (
        'Code' => 'PU009a',
        'Message' => 'Pickup NOT scheduled. There is no weekend pickup service at the location. Please contact your customer service representative.',
        'Meaning' => 'Pickup NOT scheduled. There is no weekend pickup service at the location. Please contact your customer service representative.',
      ),
      10 => 
      array (
        'Code' => 'PU009b',
        'Message' => 'Pickup NOT scheduled. Your ready-by time is not within the Station pickup time range. Please contact your customer service representative.',
        'Meaning' => 'Pickup NOT scheduled. Your ready-by time is not within the Station pickup time range. Please contact your customer service representative.',
      ),
      11 => 
      array (
        'Code' => 'PU009c',
        'Message' => 'Pickup NOT scheduled. Pickup date is a holiday. Please reschedule your pickup request date.',
        'Meaning' => 'Pickup NOT scheduled. Pickup date is a holiday. Please reschedule your pickup request date.',
      ),
      12 => 
      array (
        'Code' => 'PU010a',
        'Message' => 'Pickup NOT scheduled.  No pickup information for the Zip/postal code. For assistance call technical service representative.',
        'Meaning' => 'Pickup NOT scheduled.  No pickup information for the Zip/postal code. For assistance call technical service representative.',
      ),
      13 => 
      array (
        'Code' => 'PU010b',
        'Message' => 'Pickup NOT scheduled.  Cannot match Zip/postal code with cutoff times for city For assistance call technical service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot match Zip/postal code with cutoff times for city For assistance call technical service representative.',
      ),
      14 => 
      array (
        'Code' => 'PU011a',
        'Message' => 'Pickup NOT scheduled. Insufficient time for the pickup. Please reschedule your pickup request to the next day.',
        'Meaning' => 'Pickup NOT scheduled. Insufficient time for the pickup. Please reschedule your pickup request to the next day.',
      ),
      15 => 
      array (
        'Code' => 'PU011b',
        'Message' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location. For pickup information call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location. For pickup information call customer service representative.',
      ),
      16 => 
      array (
        'Code' => 'PU012',
        'Message' => 'Pickup NOT scheduled.  Ready by time is passed the station cutoff time. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Ready by time is passed the station cutoff time. For pickup assistance call customer service representative.',
      ),
      17 => 
      array (
        'Code' => 'PU013a',
        'Message' => 'Pickup NOT scheduled. Ready Time must be earlier than or same as the closing time.',
        'Meaning' => 'Pickup NOT scheduled. Ready Time must be earlier than or same as the closing time.',
      ),
      18 => 
      array (
        'Code' => 'PU013b',
        'Message' => 'Pickup NOT scheduled. Pickup request must be at least 1 hr before closing time.',
        'Meaning' => 'Pickup NOT scheduled. Pickup request must be at least 1 hr before closing time.',
      ),
      19 => 
      array (
        'Code' => 'PU013c',
        'Message' => 'Ready Time must be greater than Current Time.',
        'Meaning' => 'Ready Time must be greater than Current Time.',
      ),
      20 => 
      array (
        'Code' => 'PU014',
        'Message' => 'Shipment(s) exceed normal weight or size limits. If special arrangements are required DHL will telephone the contact person you specified.',
        'Meaning' => 'Shipment(s) exceed normal weight or size limits. If special arrangements are required DHL will telephone the contact person you specified.',
      ),
      21 => 
      array (
        'Code' => 'PU015',
        'Message' => 'Pickup NOT scheduled.  Cannot process due to credit status of account. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot process due to credit status of account. For pickup assistance call customer service representative.',
      ),
      22 => 
      array (
        'Code' => 'PU016',
        'Message' => 'Pickup NOT scheduled.  Pickup location outside the continental United States. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Pickup location outside the continental United States. For pickup assistance call customer service representative.',
      ),
      23 => 
      array (
        'Code' => 'PU017a',
        'Message' => 'Pickup NOT scheduled.  Registration information missing or invalid. For pickup assistance call technical service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Registration information missing or invalid. For pickup assistance call technical service representative.',
      ),
      24 => 
      array (
        'Code' => 'PU017b',
        'Message' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call technical service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call technical service representative.',
      ),
      25 => 
      array (
        'Code' => 'PU018',
        'Message' => 'Pickup service not available at this time. Please try again at later time. If this problem reoccurs contact your technical service representative.',
        'Meaning' => 'Pickup service not available at this time. Please try again at later time. If this problem reoccurs contact your technical service representative.',
      ),
      26 => 
      array (
        'Code' => 'PU019',
        'Message' => 'Pickup NOT scheduled.  Cannot book pickup for account. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book pickup for account. For pickup assistance call customer service representative.',
      ),
      27 => 
      array (
        'Code' => 'PU020a',
        'Message' => 'Pickup NOT scheduled.  Cannot book a pickup for account. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book a pickup for account. For pickup assistance call customer service representative.',
      ),
      28 => 
      array (
        'Code' => 'PU020b',
        'Message' => 'Pickup NOT Scheduled.  Cannot book a pickup for account. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup NOT Scheduled.  Cannot book a pickup for account. For pickup assistance call customer service representative.',
      ),
      29 => 
      array (
        'Code' => 'PU021',
        'Message' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
        'Meaning' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
      ),
      30 => 
      array (
        'Code' => 'PU022',
        'Message' => 'Pickup cannot be modified, please contact Customer service Representatives.',
        'Meaning' => 'Pickup cannot be modified, please contact Customer service Representatives.',
      ),
      31 => 
      array (
        'Code' => 'PU023',
        'Message' => '[PU023] Service Name could not be resolved for given Station. Please contact your customer service representative.',
        'Meaning' => 'Pickup service is not available for the station.',
      ),
      32 => 
      array (
        'Code' => 'PU100',
        'Message' => 'Pickup NOT modified.  Cannot verify original pickup information. Please contact your customer service representative.',
        'Meaning' => 'Pickup NOT modified.  Cannot verify original pickup information. Please contact your customer service representative.',
      ),
      33 => 
      array (
        'Code' => 'PU100a',
        'Message' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service.',
        'Meaning' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service.',
      ),
      34 => 
      array (
        'Code' => 'PU101',
        'Message' => 'Pickup NOT modified. Your pickup request has already been completed. Please contact your customer service representative.',
        'Meaning' => 'Pickup NOT modified. Your pickup request has already been completed. Please contact your customer service representative.',
      ),
      35 => 
      array (
        'Code' => 'PU102a',
        'Message' => 'Unable to modify pickup request! The original request was previously cancelled',
        'Meaning' => 'Unable to modify pickup request! The original request was previously cancelled',
      ),
      36 => 
      array (
        'Code' => 'PU102b',
        'Message' => 'Unable to modify pickup request! This pickup was modified previously. To modify pickup manually call customer service representative.',
        'Meaning' => 'Unable to modify pickup request! This pickup was modified previously. To modify pickup manually call customer service representative.',
      ),
      37 => 
      array (
        'Code' => 'PU102c',
        'Message' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call customer service representative.',
        'Meaning' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call customer service representative.',
      ),
      38 => 
      array (
        'Code' => 'PU103',
        'Message' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call customer service representative.',
        'Meaning' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call customer service representative.',
      ),
      39 => 
      array (
        'Code' => 'PU104',
        'Message' => 'Pickup request NOT modified. Original pickup information cannot be verified. For pickup assistance call customer service representative.',
        'Meaning' => 'Pickup request NOT modified. Original pickup information cannot be verified. For pickup assistance call customer service representative.',
      ),
      40 => 
      array (
        'Code' => 'PU105',
        'Message' => 'Pickup request modified successfully. New confirmation number assigned.',
        'Meaning' => 'Pickup request modified successfully. New confirmation number assigned.',
      ),
      41 => 
      array (
        'Code' => 'PU106',
        'Message' => 'ickup NOT modified.  Missing or invalid information modification request. To modify pickup call technical service representative.',
        'Meaning' => 'ickup NOT modified.  Missing or invalid information modification request. To modify pickup call technical service representative.',
      ),
      42 => 
      array (
        'Code' => 'PU200',
        'Message' => 'ickup NOT cancelled.  Cannot verify original pickup information. Please contact your customer service representative.',
        'Meaning' => 'ickup NOT cancelled.  Cannot verify original pickup information. Please contact your customer service representative.',
      ),
      43 => 
      array (
        'Code' => 'PU200a',
        'Message' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service.',
        'Meaning' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service.',
      ),
      44 => 
      array (
        'Code' => 'PU201',
        'Message' => 'Pickup NOT cancelled.  Pickup information not matched. To cancel the pickup call your customer service representative.',
        'Meaning' => 'Pickup NOT cancelled.  Pickup information not matched. To cancel the pickup call your customer service representative.',
      ),
      45 => 
      array (
        'Code' => 'PU202',
        'Message' => 'Pickup NOT cancelled. Your pickup request has already been completed. Please contact your customer service representative.',
        'Meaning' => 'Pickup NOT cancelled. Your pickup request has already been completed. Please contact your customer service representative.',
      ),
      46 => 
      array (
        'Code' => 'PU203a',
        'Message' => 'The pickup request was previously cancelled. No action required.',
        'Meaning' => 'The pickup request was previously cancelled. No action required.',
      ),
      47 => 
      array (
        'Code' => 'PU203b',
        'Message' => 'Unable to cancel the pickup. Pickup status now pending.',
        'Meaning' => 'Unable to cancel the pickup. Pickup status now pending.',
      ),
      48 => 
      array (
        'Code' => 'PU204',
        'Message' => 'Unable to cancel this pickup. Not a system scheduled pickup.',
        'Meaning' => 'Unable to cancel this pickup. Not a system scheduled pickup.',
      ),
      49 => 
      array (
        'Code' => 'PU205a',
        'Message' => 'Unable to cancel the pickup. System information mismatched. to cancel pickup call your customer service representative.',
        'Meaning' => 'Unable to cancel the pickup. System information mismatched. to cancel pickup call your customer service representative.',
      ),
      50 => 
      array (
        'Code' => 'PU205b',
        'Message' => 'pickup NOT cancelled.  pickup cannot be cancelled by pickup service. to cancel pickup call your customer service representative.',
        'Meaning' => 'pickup NOT cancelled.  pickup cannot be cancelled by pickup service. to cancel pickup call your customer service representative.',
      ),
      51 => 
      array (
        'Code' => 'PU300',
        'Message' => 'System error! System cannot schedule pickups. Please contact your technical service representative.',
        'Meaning' => 'System error! System cannot schedule pickups. Please contact your technical service representative.',
      ),
      52 => 
      array (
        'Code' => 'PU301',
        'Message' => 'System error! Cannot schedule pickups. Please contact your technical service representative.',
        'Meaning' => 'System error! Cannot schedule pickups. Please contact your technical service representative.',
      ),
      53 => 
      array (
        'Code' => 'PU302',
        'Message' => 'System error! Cannot schedule pickups. To schedule a pickup call technical service representative.',
        'Meaning' => 'System error! Cannot schedule pickups. To schedule a pickup call technical service representative.',
      ),
      54 => 
      array (
        'Code' => 'PU303',
        'Message' => 'Pickup service not available. Please resubmit your request at later time or contact your technical service representative.',
        'Meaning' => 'Pickup service not available. Please resubmit your request at later time or contact your technical service representative.',
      ),
      55 => 
      array (
        'Code' => 'PU306',
        'Message' => '[PU306] You have scheduled a pickup outside of business hours.  Please adjust your ready by time.',
        'Meaning' => 'Ready by time is outside the business hours.',
      ),
      56 => 
      array (
        'Code' => 'PU307',
        'Message' => '[PU307]Your pickup was NOT scheduled. Packages must be ready at least one hour prior to closing for businesses and two hours prior for residences.',
        'Meaning' => 'Ready by time must be at least one hour prior to closing for business and two hour for residences.',
      ),
      57 => 
      array (
        'Code' => 'PU308',
        'Message' => '[PU308]Your pickup was NOT scheduled as it is currently too close to your closing time.  Please change your pickup time or date and resubmit.',
        'Meaning' => 'Pickup time is too close to the closing time.',
      ),
    ),
    'AP' => 
    array (
      0 => 
      array (
        'Code' => 'PU003',
        'Message' => 'Cannot schedule pickup for Zip Code. To book a pickup call DHL customer services',
        'Meaning' => 'Cannot schedule pickup for Zip Code. To book a pickup call DHL customer services',
      ),
      1 => 
      array (
        'Code' => 'PU004',
        'Message' => 'Account number not valid for pickup.  To book a pickup call DHL customer services',
        'Meaning' => 'Account number not valid for pickup.  To book a pickup call DHL customer services',
      ),
      2 => 
      array (
        'Code' => 'PU005',
        'Message' => 'Unable to verify account number. For assistance call DHL customer services',
        'Meaning' => 'Unable to verify account number. For assistance call DHL customer services',
      ),
      3 => 
      array (
        'Code' => 'PU006',
        'Message' => 'Unable to verify account number.  To schedule a pickup call DHL customer services',
        'Meaning' => 'Unable to verify account number.  To schedule a pickup call DHL customer services',
      ),
      4 => 
      array (
        'Code' => 'PU007a',
        'Message' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup, call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup, call DHL customer services.',
      ),
      5 => 
      array (
        'Code' => 'PU007b',
        'Message' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup call DHL customer services',
      ),
      6 => 
      array (
        'Code' => 'PU008a',
        'Message' => 'Pickup NOT scheduled.  Date for pickup has passed. Correct pickup date and resubmit pickup request.',
        'Meaning' => 'Pickup NOT scheduled.  Date for pickup has passed. Correct pickup date and resubmit pickup request.',
      ),
      7 => 
      array (
        'Code' => 'PU008b',
        'Message' => 'Pickup NOT scheduled.  Pickup date is more than ten days in advance of current date.  Correct pickup date and resubmit.',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is more than ten days in advance of current date.  Correct pickup date and resubmit.',
      ),
      8 => 
      array (
        'Code' => 'PU009a',
        'Message' => 'Pickup NOT scheduled.  Requested pickup date is a Saturday. For Saturday pickup services call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Requested pickup date is a Saturday. For Saturday pickup services call DHL customer services',
      ),
      9 => 
      array (
        'Code' => 'PU009b',
        'Message' => 'Pickup NOT scheduled.  Pickup date is a Sunday. For Sunday pickup service information call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is a Sunday. For Sunday pickup service information call DHL customer services',
      ),
      10 => 
      array (
        'Code' => 'PU009c',
        'Message' => 'Pickup NOT scheduled.  Pickup date is a holiday. For holiday pickup service information call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is a holiday. For holiday pickup service information call DHL customer services',
      ),
      11 => 
      array (
        'Code' => 'PU009d',
        'Message' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
      ),
      12 => 
      array (
        'Code' => 'PU009e',
        'Message' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
      ),
      13 => 
      array (
        'Code' => 'PU010a',
        'Message' => 'Pickup NOT scheduled.  No pickup information for the postal code. For assistance call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  No pickup information for the postal code. For assistance call DHL customer services.',
      ),
      14 => 
      array (
        'Code' => 'PU010b',
        'Message' => 'Pickup NOT scheduled.  Cannot match the postal code with cutoff times.  For assistance call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot match the postal code with cutoff times.  For assistance call DHL customer services.',
      ),
      15 => 
      array (
        'Code' => 'PU011a',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      16 => 
      array (
        'Code' => 'PU011b',
        'Message' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location.  For pickup information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location.  For pickup information call DHL customer services.',
      ),
      17 => 
      array (
        'Code' => 'PU012',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      18 => 
      array (
        'Code' => 'PU012a',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      19 => 
      array (
        'Code' => 'PU013a',
        'Message' => 'Pickup NOT scheduled.  Insufficient time between ready by, and closing time.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Insufficient time between ready by, and closing time.  For pickup assistance call DHL customer services',
      ),
      20 => 
      array (
        'Code' => 'PU013b',
        'Message' => 'Pickup NOT scheduled.  Insufficient time between current time and closing time. Adjust pickup times and resubmit. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Insufficient time between current time and closing time. Adjust pickup times and resubmit. For pickup assistance call DHL customer services',
      ),
      21 => 
      array (
        'Code' => 'PU014',
        'Message' => 'Shipment(s)exceed normal weight or size limits. If special arrangements are required, DHL will telephone the contact person you specified.',
        'Meaning' => 'Shipment(s)exceed normal weight or size limits. If special arrangements are required, DHL will telephone the contact person you specified.',
      ),
      22 => 
      array (
        'Code' => 'PU015',
        'Message' => 'Pickup NOT scheduled.  Cannot process due to credit status of the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot process due to credit status of the account.  For pickup assistance call DHL customer services',
      ),
      23 => 
      array (
        'Code' => 'PU016',
        'Message' => 'Pickup NOT scheduled.  Pickup location outside the continental United States.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup location outside the continental United States.  For pickup assistance call DHL customer services',
      ),
      24 => 
      array (
        'Code' => 'PU017a',
        'Message' => 'Pickup NOT scheduled.  Registration information missing or invalid.   For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Registration information missing or invalid.   For pickup assistance call DHL customer services',
      ),
      25 => 
      array (
        'Code' => 'PU017b',
        'Message' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call DHL customer services',
      ),
      26 => 
      array (
        'Code' => 'PU018',
        'Message' => 'Pickup NOT scheduled.  Unable to process pickup request at this location. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Unable to process pickup request at this location. For pickup assistance call DHL customer services',
      ),
      27 => 
      array (
        'Code' => 'PU019',
        'Message' => 'Pickup NOT scheduled.  Cannot book pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book pickup for the account.  For pickup assistance call DHL customer services',
      ),
      28 => 
      array (
        'Code' => 'PU020a',
        'Message' => 'Pickup NOT scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
      ),
      29 => 
      array (
        'Code' => 'PU020b',
        'Message' => 'Pickup NOT Scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT Scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
      ),
      30 => 
      array (
        'Code' => 'PU021',
        'Message' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
        'Meaning' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
      ),
      31 => 
      array (
        'Code' => 'PU100',
        'Message' => 'Pickup NOT modified.  Cannot verify original pickup information.  For assistance call DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Cannot verify original pickup information.  For assistance call DHL customer services',
      ),
      32 => 
      array (
        'Code' => 'PU100a',
        'Message' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
        'Meaning' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
      ),
      33 => 
      array (
        'Code' => 'PU101',
        'Message' => 'Unable to modify pickup request!  Current date is past the original pickup date.',
        'Meaning' => 'Unable to modify pickup request!  Current date is past the original pickup date.',
      ),
      34 => 
      array (
        'Code' => 'PU102a',
        'Message' => 'Unable to modify pickup request!  The original request was previously canceled',
        'Meaning' => 'Unable to modify pickup request!  The original request was previously canceled',
      ),
      35 => 
      array (
        'Code' => 'PU102b',
        'Message' => 'Unable to modify pickup request!  This pickup was modified previously.  To modify pickup manually call DHL customer services',
        'Meaning' => 'Unable to modify pickup request!  This pickup was modified previously.  To modify pickup manually call DHL customer services',
      ),
      36 => 
      array (
        'Code' => 'PU102c',
        'Message' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call DHL customer services.',
        'Meaning' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call DHL customer services.',
      ),
      37 => 
      array (
        'Code' => 'PU103',
        'Message' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call DHL customer services',
        'Meaning' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call DHL customer services',
      ),
      38 => 
      array (
        'Code' => 'PU104',
        'Message' => 'Pickup request NOT modified.  Original pickup information cannot be verified.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup request NOT modified.  Original pickup information cannot be verified.  For pickup assistance call DHL customer services',
      ),
      39 => 
      array (
        'Code' => 'PU105',
        'Message' => 'Pickup request modified successfully. Original request and pickup canceled. New confirmation number assigned.',
        'Meaning' => 'Pickup request modified successfully. Original request and pickup canceled. New confirmation number assigned.',
      ),
      40 => 
      array (
        'Code' => 'PU106',
        'Message' => 'Pickup NOT modified.  Missing or invalid information modification request.  To modify pickup call DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Missing or invalid information modification request.  To modify pickup call DHL customer services',
      ),
      41 => 
      array (
        'Code' => 'PU200',
        'Message' => 'Pickup NOT modified.  Cannot verify original pickup information.  To cancel pickup call  DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Cannot verify original pickup information.  To cancel pickup call  DHL customer services',
      ),
      42 => 
      array (
        'Code' => 'PU200a',
        'Message' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
        'Meaning' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
      ),
      43 => 
      array (
        'Code' => 'PU201',
        'Message' => 'Pickup NOT cancelled.  Pickup information not matched.  To cancel the pickup call DHL customer services',
        'Meaning' => 'Pickup NOT cancelled.  Pickup information not matched.  To cancel the pickup call DHL customer services',
      ),
      44 => 
      array (
        'Code' => 'PU202',
        'Message' => 'Pickup NOT cancelled.  Current date is past original pickup date.',
        'Meaning' => 'Pickup NOT cancelled.  Current date is past original pickup date.',
      ),
      45 => 
      array (
        'Code' => 'PU203a',
        'Message' => 'The pickup was previously cancelled.  No action required.',
        'Meaning' => 'The pickup was previously cancelled.  No action required.',
      ),
      46 => 
      array (
        'Code' => 'PU203b',
        'Message' => 'Unable to cancel the pickup.  Pickup status now pending.',
        'Meaning' => 'Unable to cancel the pickup.  Pickup status now pending.',
      ),
      47 => 
      array (
        'Code' => 'PU204',
        'Message' => 'Unable to cancel this pickup.  Not a system scheduled pickup.',
        'Meaning' => 'Unable to cancel this pickup.  Not a system scheduled pickup.',
      ),
      48 => 
      array (
        'Code' => 'PU205a',
        'Message' => 'Unable to cancel the pickup.  System information mismatched.  To cancel pickup call DHL customer services',
        'Meaning' => 'Unable to cancel the pickup.  System information mismatched.  To cancel pickup call DHL customer services',
      ),
      49 => 
      array (
        'Code' => 'PU205b',
        'Message' => 'Pickup NOT cancelled.  Pickup cannot be cancelled by pickup service.  To cancel pickup call DHL customer services',
        'Meaning' => 'Pickup NOT cancelled.  Pickup cannot be cancelled by pickup service.  To cancel pickup call DHL customer services',
      ),
      50 => 
      array (
        'Code' => 'PU300',
        'Message' => 'System error!  System cannot schedule pickups.  To schedule a pickup call DHL customer services',
        'Meaning' => 'System error!  System cannot schedule pickups.  To schedule a pickup call DHL customer services',
      ),
      51 => 
      array (
        'Code' => 'PU301',
        'Message' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services.',
        'Meaning' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services.',
      ),
      52 => 
      array (
        'Code' => 'PU302',
        'Message' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services',
        'Meaning' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services',
      ),
      53 => 
      array (
        'Code' => 'PU303',
        'Message' => 'Pickup service not available. Please resubmit your request at later time or contact your customer service representative.',
        'Meaning' => 'Pickup service not available. Please resubmit your request at later time or contact your customer service representative.',
      ),
      54 => 
      array (
        'Code' => 'PU030',
        'Message' => 'Request Pickup at the same time or before closing time.',
        'Meaning' => 'Request Pickup at the same time or before closing time.',
      ),
      55 => 
      array (
        'Code' => 'PU031',
        'Message' => 'Ready by Time must be at same time or before closing time.',
        'Meaning' => 'Ready by Time must be at same time or before closing time.',
      ),
      56 => 
      array (
        'Code' => 'PU032',
        'Message' => 'Ready by Time must be before Closing Time',
        'Meaning' => 'Ready by Time must be before Closing Time',
      ),
      57 => 
      array (
        'Code' => 'PU033',
        'Message' => 'Request Pickup before closing time.',
        'Meaning' => 'Request Pickup before closing time.',
      ),
      58 => 
      array (
        'Code' => 'PU034',
        'Message' => 'Request Pickup at the same time or before your Ready time.',
        'Meaning' => 'Request Pickup at the same time or before your Ready time.',
      ),
      59 => 
      array (
        'Code' => 'PU035',
        'Message' => 'Ready By Time must be at the same time or after the"EARLIEST TIME FROM".',
        'Meaning' => 'Ready By Time must be at the same time or after the"EARLIEST TIME FROM".',
      ),
      60 => 
      array (
        'Code' => 'PL002',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - Unable to get socket',
      ),
      61 => 
      array (
        'Code' => 'PL003',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - country server not in hosts file',
      ),
      62 => 
      array (
        'Code' => 'PL004',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - service name not in services file',
      ),
      63 => 
      array (
        'Code' => 'PL005',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - country code not in configuration file',
      ),
      64 => 
      array (
        'Code' => 'PL006',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - unable to connect to CSV',
      ),
      65 => 
      array (
        'Code' => 'PL007',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - error writing to socket',
      ),
      66 => 
      array (
        'Code' => 'PL008',
        'Message' => 'Booking system is temporarily unavailable. Please call Customer Services to book this collection.',
        'Meaning' => 'Connection to CSV - error reading from socket',
      ),
    ),
    'EA' => 
    array (
      0 => 
      array (
        'Code' => 'PU003',
        'Message' => 'Cannot schedule pickup for Zip Code. To book a pickup call DHL customer services',
        'Meaning' => 'Cannot schedule pickup for Zip Code. To book a pickup call DHL customer services',
      ),
      1 => 
      array (
        'Code' => 'PU004',
        'Message' => 'Account number not valid for pickup.  To book a pickup call DHL customer services',
        'Meaning' => 'Account number not valid for pickup.  To book a pickup call DHL customer services',
      ),
      2 => 
      array (
        'Code' => 'PU005',
        'Message' => 'Unable to verify account number. For assistance call DHL customer services',
        'Meaning' => 'Unable to verify account number. For assistance call DHL customer services',
      ),
      3 => 
      array (
        'Code' => 'PU006',
        'Message' => 'Unable to verify account number.  To schedule a pickup call DHL customer services',
        'Meaning' => 'Unable to verify account number.  To schedule a pickup call DHL customer services',
      ),
      4 => 
      array (
        'Code' => 'PU007a',
        'Message' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup, call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup, call DHL customer services.',
      ),
      5 => 
      array (
        'Code' => 'PU007b',
        'Message' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled due to credit status of the account number.  To schedule a pickup call DHL customer services',
      ),
      6 => 
      array (
        'Code' => 'PU008a',
        'Message' => 'Pickup NOT scheduled.  Date for pickup has passed. Correct pickup date and resubmit pickup request.',
        'Meaning' => 'Pickup NOT scheduled.  Date for pickup has passed. Correct pickup date and resubmit pickup request.',
      ),
      7 => 
      array (
        'Code' => 'PU008b',
        'Message' => 'Pickup NOT scheduled.  Pickup date is more than ten days in advance of current date.  Correct pickup date and resubmit.',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is more than ten days in advance of current date.  Correct pickup date and resubmit.',
      ),
      8 => 
      array (
        'Code' => 'PU009a',
        'Message' => 'Pickup NOT scheduled.  Requested pickup date is a Saturday. For Saturday pickup services call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Requested pickup date is a Saturday. For Saturday pickup services call DHL customer services',
      ),
      9 => 
      array (
        'Code' => 'PU009b',
        'Message' => 'Pickup NOT scheduled.  Pickup date is a Sunday. For Sunday pickup service information call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is a Sunday. For Sunday pickup service information call DHL customer services',
      ),
      10 => 
      array (
        'Code' => 'PU009c',
        'Message' => 'Pickup NOT scheduled.  Pickup date is a holiday. For holiday pickup service information call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup date is a holiday. For holiday pickup service information call DHL customer services',
      ),
      11 => 
      array (
        'Code' => 'PU009d',
        'Message' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
      ),
      12 => 
      array (
        'Code' => 'PU009e',
        'Message' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled. Pickup date is a holiday. For holiday pickup service information call DHL customer services.',
      ),
      13 => 
      array (
        'Code' => 'PU010a',
        'Message' => 'Pickup NOT scheduled.  No pickup information for the postal code. For assistance call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  No pickup information for the postal code. For assistance call DHL customer services.',
      ),
      14 => 
      array (
        'Code' => 'PU010b',
        'Message' => 'Pickup NOT scheduled.  Cannot match the postal code with cutoff times.  For assistance call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  Cannot match the postal code with cutoff times.  For assistance call DHL customer services.',
      ),
      15 => 
      array (
        'Code' => 'PU011a',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      16 => 
      array (
        'Code' => 'PU011b',
        'Message' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location.  For pickup information call DHL customer services.',
        'Meaning' => 'Pickup NOT scheduled.  Advance notice for pickup needed at this location.  For pickup information call DHL customer services.',
      ),
      17 => 
      array (
        'Code' => 'PU012',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      18 => 
      array (
        'Code' => 'PU012a',
        'Message' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
        'Meaning' => 'Unfortunately either your pickup time submitted is not available or a pickup service may not be possible for this shipment.',
      ),
      19 => 
      array (
        'Code' => 'PU012b',
        'Message' => 'Pickup NOT scheduled.  Pickup submitted after ready by cut off time. For pickup assistance call DHL customer services.',
        'Meaning' => 'Ready By time is later than the cut off time.',
      ),
      20 => 
      array (
        'Code' => 'PU013a',
        'Message' => 'Pickup NOT scheduled.  Insufficient time between ready by, and closing time.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Insufficient time between ready by, and closing time.  For pickup assistance call DHL customer services',
      ),
      21 => 
      array (
        'Code' => 'PU013b',
        'Message' => 'Pickup NOT scheduled.  Insufficient time between current time and closing time. Adjust pickup times and resubmit. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Insufficient time between current time and closing time. Adjust pickup times and resubmit. For pickup assistance call DHL customer services',
      ),
      22 => 
      array (
        'Code' => 'PU014',
        'Message' => 'Shipment(s)exceed normal weight or size limits. If special arrangements are required, DHL will telephone the contact person you specified.',
        'Meaning' => 'Shipment(s)exceed normal weight or size limits. If special arrangements are required, DHL will telephone the contact person you specified.',
      ),
      23 => 
      array (
        'Code' => 'PU015',
        'Message' => 'Pickup NOT scheduled.  Cannot process due to credit status of the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot process due to credit status of the account.  For pickup assistance call DHL customer services',
      ),
      24 => 
      array (
        'Code' => 'PU016',
        'Message' => 'Pickup NOT scheduled.  Pickup location outside the continental United States.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Pickup location outside the continental United States.  For pickup assistance call DHL customer services',
      ),
      25 => 
      array (
        'Code' => 'PU017a',
        'Message' => 'Pickup NOT scheduled.  Registration information missing or invalid.   For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Registration information missing or invalid.   For pickup assistance call DHL customer services',
      ),
      26 => 
      array (
        'Code' => 'PU017b',
        'Message' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Unable to process your pickup transactions. For pickup assistance call DHL customer services',
      ),
      27 => 
      array (
        'Code' => 'PU018',
        'Message' => 'Pickup NOT scheduled.  Unable to process pickup request at this location. For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Unable to process pickup request at this location. For pickup assistance call DHL customer services',
      ),
      28 => 
      array (
        'Code' => 'PU019',
        'Message' => 'Pickup NOT scheduled.  Cannot book pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book pickup for the account.  For pickup assistance call DHL customer services',
      ),
      29 => 
      array (
        'Code' => 'PU020a',
        'Message' => 'Pickup NOT scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
      ),
      30 => 
      array (
        'Code' => 'PU020b',
        'Message' => 'Pickup NOT Scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup NOT Scheduled.  Cannot book a pickup for the account.  For pickup assistance call DHL customer services',
      ),
      31 => 
      array (
        'Code' => 'PU021',
        'Message' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
        'Meaning' => 'NOTICE!  Packages picked up after hours may be inspected by a DHL Courier for FAA security purposes.',
      ),
      32 => 
      array (
        'Code' => 'PU100',
        'Message' => 'Pickup NOT modified.  Cannot verify original pickup information.  For assistance call DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Cannot verify original pickup information.  For assistance call DHL customer services',
      ),
      33 => 
      array (
        'Code' => 'PU100a',
        'Message' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
        'Meaning' => 'Pickup NOT modified. Cannot process modification now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
      ),
      34 => 
      array (
        'Code' => 'PU101',
        'Message' => 'Unable to modify pickup request!  Current date is past the original pickup date.',
        'Meaning' => 'Unable to modify pickup request!  Current date is past the original pickup date.',
      ),
      35 => 
      array (
        'Code' => 'PU102a',
        'Message' => 'Unable to modify pickup request!  The original request was previously canceled',
        'Meaning' => 'Unable to modify pickup request!  The original request was previously canceled',
      ),
      36 => 
      array (
        'Code' => 'PU102b',
        'Message' => 'Unable to modify pickup request!  This pickup was modified previously.  To modify pickup manually call DHL customer services',
        'Meaning' => 'Unable to modify pickup request!  This pickup was modified previously.  To modify pickup manually call DHL customer services',
      ),
      37 => 
      array (
        'Code' => 'PU102c',
        'Message' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call DHL customer services.',
        'Meaning' => 'Pickup NOT modified!  Pickup has a pending or expired status and cannot be modified. For further information call DHL customer services.',
      ),
      38 => 
      array (
        'Code' => 'PU103',
        'Message' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call DHL customer services',
        'Meaning' => 'This pickup NOT modified!  The original pickup request was booked outside the pickup service. To modify this pickup call DHL customer services',
      ),
      39 => 
      array (
        'Code' => 'PU104',
        'Message' => 'Pickup request NOT modified.  Original pickup information cannot be verified.  For pickup assistance call DHL customer services',
        'Meaning' => 'Pickup request NOT modified.  Original pickup information cannot be verified.  For pickup assistance call DHL customer services',
      ),
      40 => 
      array (
        'Code' => 'PU105',
        'Message' => 'Pickup request modified successfully. Original request and pickup canceled. New confirmation number assigned.',
        'Meaning' => 'Pickup request modified successfully. Original request and pickup canceled. New confirmation number assigned.',
      ),
      41 => 
      array (
        'Code' => 'PU106',
        'Message' => 'Pickup NOT modified.  Missing or invalid information modification request.  To modify pickup call DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Missing or invalid information modification request.  To modify pickup call DHL customer services',
      ),
      42 => 
      array (
        'Code' => 'PU200',
        'Message' => 'Pickup NOT modified.  Cannot verify original pickup information.  To cancel pickup call  DHL customer services',
        'Meaning' => 'Pickup NOT modified.  Cannot verify original pickup information.  To cancel pickup call  DHL customer services',
      ),
      43 => 
      array (
        'Code' => 'PU200a',
        'Message' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
        'Meaning' => 'Pickup NOT cancelled. Cannot process cancellation now. Please try again at later time. If this problem reoccurs contact your customer service representative.',
      ),
      44 => 
      array (
        'Code' => 'PU201',
        'Message' => 'Pickup NOT cancelled.  Pickup information not matched.  To cancel the pickup call DHL customer services',
        'Meaning' => 'Pickup NOT cancelled.  Pickup information not matched.  To cancel the pickup call DHL customer services',
      ),
      45 => 
      array (
        'Code' => 'PU202',
        'Message' => 'Pickup NOT cancelled.  Current date is past original pickup date.',
        'Meaning' => 'Pickup NOT cancelled.  Current date is past original pickup date.',
      ),
      46 => 
      array (
        'Code' => 'PU203a',
        'Message' => 'The pickup was previously cancelled.  No action required.',
        'Meaning' => 'The pickup was previously cancelled.  No action required.',
      ),
      47 => 
      array (
        'Code' => 'PU203b',
        'Message' => 'Unable to cancel the pickup.  Pickup status now pending.',
        'Meaning' => 'Unable to cancel the pickup.  Pickup status now pending.',
      ),
      48 => 
      array (
        'Code' => 'PU204',
        'Message' => 'Unable to cancel this pickup.  Not a system scheduled pickup.',
        'Meaning' => 'Unable to cancel this pickup.  Not a system scheduled pickup.',
      ),
      49 => 
      array (
        'Code' => 'PU205a',
        'Message' => 'Unable to cancel the pickup.  System information mismatched.  To cancel pickup call DHL customer services',
        'Meaning' => 'Unable to cancel the pickup.  System information mismatched.  To cancel pickup call DHL customer services',
      ),
      50 => 
      array (
        'Code' => 'PU205b',
        'Message' => 'Pickup NOT cancelled.  Pickup cannot be cancelled by pickup service.  To cancel pickup call DHL customer services',
        'Meaning' => 'Pickup NOT cancelled.  Pickup cannot be cancelled by pickup service.  To cancel pickup call DHL customer services',
      ),
      51 => 
      array (
        'Code' => 'PU300',
        'Message' => 'System error!  System cannot schedule pickups.  To schedule a pickup call DHL customer services',
        'Meaning' => 'System error!  System cannot schedule pickups.  To schedule a pickup call DHL customer services',
      ),
      52 => 
      array (
        'Code' => 'PU301',
        'Message' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services.',
        'Meaning' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services.',
      ),
      53 => 
      array (
        'Code' => 'PU302',
        'Message' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services',
        'Meaning' => 'System error!  Cannot schedule pickups.  To schedule a pickup call DHL customer services',
      ),
      54 => 
      array (
        'Code' => 'PU303',
        'Message' => 'Pickup service not available. Please resubmit your request at later time or contact your customer service representative.',
        'Meaning' => 'Pickup service not available. Please resubmit your request at later time or contact your customer service representative.',
      ),
      55 => 
      array (
        'Code' => 'PU030',
        'Message' => 'Request Pickup at the same time or before closing time.',
        'Meaning' => 'Request Pickup at the same time or before closing time.',
      ),
      56 => 
      array (
        'Code' => 'PU031',
        'Message' => 'Ready by Time must be at same time or before closing time.',
        'Meaning' => 'Ready by Time must be at same time or before closing time.',
      ),
      57 => 
      array (
        'Code' => 'PU032',
        'Message' => 'Ready by Time must be before Closing Time',
        'Meaning' => 'Ready by Time must be before Closing Time',
      ),
      58 => 
      array (
        'Code' => 'PU033',
        'Message' => 'Request Pickup before closing time.',
        'Meaning' => 'Request Pickup before closing time.',
      ),
      59 => 
      array (
        'Code' => 'PU034',
        'Message' => 'Request Pickup at the same time or before your Ready time.',
        'Meaning' => 'Request Pickup at the same time or before your Ready time.',
      ),
      60 => 
      array (
        'Code' => 'PU035',
        'Message' => 'Ready By Time must be at the same time or after the"EARLIEST TIME FROM".',
        'Meaning' => 'Ready By Time must be at the same time or after the"EARLIEST TIME FROM".',
      ),
      61 => 
      array (
        'Code' => 'PU901',
        'Message' => 'Pickup not scheduled. Courier route unavailable. Please call DHL customer services.',
        'Meaning' => 'Pickup not scheduled. Courier route unavailable. Please call DHL customer services.',
      ),
      62 => 
      array (
        'Code' => 'PU902',
        'Message' => 'Pickup not scheduled. Cut-off times unavailable. Please call DHL customer services.',
        'Meaning' => 'Pickup not scheduled. Cut-off times unavailable. Please call DHL customer services.',
      ),
      63 => 
      array (
        'Code' => 'PU903',
        'Message' => 'Pickup not scheduled. Session unavailable. Please submit request again. If problem persists please call DHL customer services.',
        'Meaning' => 'Pickup not scheduled. Session unavailable. Please submit request again. If problem persists please call DHL customer services.',
      ),
      64 => 
      array (
        'Code' => 'PU904',
        'Message' => 'Pickup modifications not permitted. Please call DHL customer services.',
        'Meaning' => 'Pickup modifications not permitted. Please call DHL customer services.',
      ),
      65 => 
      array (
        'Code' => 'PU905',
        'Message' => 'Pickup not scheduled. Holiday dates unavailable. Please call DHL customer services.',
        'Meaning' => 'Pickup not scheduled. Holiday dates unavailable. Please call DHL customer services.',
      ),
      66 => 
      array (
        'Code' => 'PU908',
        'Message' => 'Pickup cancellations not permitted. Please call DHL customer services.',
        'Meaning' => 'Pickup cancellations not permitted. Please call DHL customer services.',
      ),
      67 => 
      array (
        'Code' => 'PU909',
        'Message' => 'Pickup not scheduled. Timezone data unavailable. Please call DHL customer services.',
        'Meaning' => 'Pickup not scheduled. Timezone data unavailable. Please call DHL customer services.',
      ),
      68 => 
      array (
        'Code' => 'PU910',
        'Message' => 'Booking system busy, try again later.',
        'Meaning' => 'Booking system busy, try again later.',
      ),
      69 => 
      array (
        'Code' => 'PU911',
        'Message' => 'The Booking System is temporarily unavailable. Please call Customer Services to book this collection',
        'Meaning' => 'The Booking System is temporarily unavailable. Please call Customer Services to book this collection',
      ),
      70 => 
      array (
        'Code' => 'PU912',
        'Message' => 'Country and regional accounts out of synch.',
        'Meaning' => 'Country and regional accounts out of synch.',
      ),
      71 => 
      array (
        'Code' => 'PU913',
        'Message' => 'Trying to book a pickup for a time that has already passed.',
        'Meaning' => 'Trying to book a pickup for a time that has already passed.',
      ),
      72 => 
      array (
        'Code' => 'PU914',
        'Message' => 'One or more mandatory data fields missing or a field contains invalid data.',
        'Meaning' => 'One or more mandatory data fields missing or a field contains invalid data.',
      ),
    ),
  ),
  'RoutingService' => 
  array (
    'AM' => 
    array (
      0 => 
      array (
        'Code' => 'RT1001',
        'Message' => 'The service area is suspended or not in action.',
        'Meaning' => 'The service area is suspended or not in action.',
      ),
      1 => 
      array (
        'Code' => 'RT1002',
        'Message' => 'The service area is unavailable.',
        'Meaning' => 'The service area is unavailable.',
      ),
      2 => 
      array (
        'Code' => 'RT1003',
        'Message' => 'The service area is not opened.',
        'Meaning' => 'The service area is not opened.',
      ),
      3 => 
      array (
        'Code' => 'RT1004',
        'Message' => 'The service area is closed.',
        'Meaning' => 'The service area is closed.',
      ),
      4 => 
      array (
        'Code' => 'RT1005',
        'Message' => 'The status of the service area is unknown.',
        'Meaning' => 'The status of the service area is unknown.',
      ),
      5 => 
      array (
        'Code' => 'RT1006',
        'Message' => 'The search for the service area information has failed',
        'Meaning' => 'The search for the service area information has failed',
      ),
      6 => 
      array (
        'Code' => 'RT1101',
        'Message' => 'The postal code is not provided by the user.',
        'Meaning' => 'The postal code is not provided by the user.',
      ),
      7 => 
      array (
        'Code' => 'RT1102',
        'Message' => 'The postal code provided by user is invalid.',
        'Meaning' => 'The postal code provided by user is invalid.',
      ),
      8 => 
      array (
        'Code' => 'RT1103',
        'Message' => 'The postal code provided by user does not exist in the country.',
        'Meaning' => 'The postal code provided by user does not exist in the country.',
      ),
      9 => 
      array (
        'Code' => 'RT1104',
        'Message' => 'The city name provided by user does not exist in the country.',
        'Meaning' => 'The city name provided by user does not exist in the country.',
      ),
      10 => 
      array (
        'Code' => 'RT1105',
        'Message' => 'More than one city with the same name found.',
        'Meaning' => 'More than one city with the same name found.',
      ),
      11 => 
      array (
        'Code' => 'RT1106',
        'Message' => 'More than one service areas are found in the city.',
        'Meaning' => 'More than one service areas are found in the city.',
      ),
      12 => 
      array (
        'Code' => 'RT1107',
        'Message' => 'Multiple Cities found for the same postal code.',
        'Meaning' => 'Multiple Cities found for the same postal code.',
      ),
      13 => 
      array (
        'Code' => 'RT1108',
        'Message' => 'The city name provided by the user does not have an exact match',
        'Meaning' => 'The city name provided by the user does not have an exact match',
      ),
      14 => 
      array (
        'Code' => 'RT1109',
        'Message' => 'The postal code is incorrectly written in the city or the division field.',
        'Meaning' => 'The postal code is incorrectly written in the city or the division field.',
      ),
      15 => 
      array (
        'Code' => 'RT1110',
        'Message' => 'The postal code is incorrectly written in the address field.',
        'Meaning' => 'The postal code is incorrectly written in the address field.',
      ),
    ),
    'AP' => 
    array (
      0 => 
      array (
        'Code' => 'RT0003a',
        'Message' => 'Identified service area for the routing request, is currently suspended',
        'Meaning' => 'Identified service area for the routing request, is currently suspended',
      ),
      1 => 
      array (
        'Code' => 'RT0003b',
        'Message' => 'Identified service area for the routing request  is currently unavailable',
        'Meaning' => 'Identified service area for the routing request  is currently unavailable',
      ),
      2 => 
      array (
        'Code' => 'RT0003c',
        'Message' => 'Identified service area for the routing request is not yet opened',
        'Meaning' => 'Identified service area for the routing request is not yet opened',
      ),
      3 => 
      array (
        'Code' => 'RT0003d',
        'Message' => 'Identified service area for the routing request is closed',
        'Meaning' => 'Identified service area for the routing request is closed',
      ),
      4 => 
      array (
        'Code' => 'RT0003e',
        'Message' => 'Identified service area for the routing request has an unknown status',
        'Meaning' => 'Identified service area for the routing request has an unknown status',
      ),
      5 => 
      array (
        'Code' => 'RT0004',
        'Message' => 'Unable to identify a service area for the routing request. Exhausted all possibilities',
        'Meaning' => 'Unable to identify a service area for the routing request. Exhausted all possibilities',
      ),
      6 => 
      array (
        'Code' => 'RT0005',
        'Message' => 'Unable to identify a service area for routing request; Zip/postal code may narrow search.',
        'Meaning' => 'Unable to identify a service area for routing request; Zip/postal code may narrow search.',
      ),
      7 => 
      array (
        'Code' => 'RT0006',
        'Message' => 'Zip/Postal code not valid for country in routing request.',
        'Meaning' => 'Zip/Postal code not valid for country in routing request.',
      ),
      8 => 
      array (
        'Code' => 'RT0007',
        'Message' => 'Zip/Postal code does not exist in country.',
        'Meaning' => 'Zip/Postal code does not exist in country.',
      ),
      9 => 
      array (
        'Code' => 'RT0008',
        'Message' => 'City name does not exist in country.',
        'Meaning' => 'City name does not exist in country.',
      ),
      10 => 
      array (
        'Code' => 'RT0009',
        'Message' => 'More than one city with the same city name in country',
        'Meaning' => 'More than one city with the same city name in country',
      ),
      11 => 
      array (
        'Code' => 'RT0010',
        'Message' => 'More than one service area within city with different service standards.',
        'Meaning' => 'More than one service area within city with different service standards.',
      ),
      12 => 
      array (
        'Code' => 'RT0011',
        'Message' => 'Zip/Postal code covers more than one city and has differing service standards.',
        'Meaning' => 'Zip/Postal code covers more than one city and has differing service standards.',
      ),
      13 => 
      array (
        'Code' => 'RT0012',
        'Message' => 'City name found using an approximate match algorithm.',
        'Meaning' => 'City name found using an approximate match algorithm.',
      ),
      14 => 
      array (
        'Code' => 'RT0013',
        'Message' => 'Zip/Post code found in the city or division field of the message.',
        'Meaning' => 'Zip/Post code found in the city or division field of the message.',
      ),
      15 => 
      array (
        'Code' => 'RT0014',
        'Message' => 'Zip/Postal code found in the address line of the message.',
        'Meaning' => 'Zip/Postal code found in the address line of the message.',
      ),
    ),
    'EA' => 
    array (
      0 => 
      array (
        'Code' => 'RT0003a',
        'Message' => 'The Service area is suspended',
        'Meaning' => 'The Service area is suspended',
      ),
      1 => 
      array (
        'Code' => 'RT0003b',
        'Message' => 'The Service area is unavailable.',
        'Meaning' => 'The Service area is unavailable.',
      ),
      2 => 
      array (
        'Code' => 'RT0003c',
        'Message' => 'The service area is not opened.',
        'Meaning' => 'The service area is not opened.',
      ),
      3 => 
      array (
        'Code' => 'RT0003d',
        'Message' => 'The service area is closed.',
        'Meaning' => 'The service area is closed.',
      ),
      4 => 
      array (
        'Code' => 'RT0003e',
        'Message' => 'The status of the service area is unknown.',
        'Meaning' => 'The status of the service area is unknown.',
      ),
      5 => 
      array (
        'Code' => 'RT0004',
        'Message' => 'The search for the service area information has failed.',
        'Meaning' => 'The search for the service area information has failed.',
      ),
      6 => 
      array (
        'Code' => 'RT0005',
        'Message' => 'The postal code is not provided by the user.',
        'Meaning' => 'The postal code is not provided by the user.',
      ),
      7 => 
      array (
        'Code' => 'RT0006',
        'Message' => 'The postal code provided by the user is invalid.',
        'Meaning' => 'The postal code provided by the user is invalid.',
      ),
      8 => 
      array (
        'Code' => 'RT0007',
        'Message' => 'The postal code provided by the user does not exist in the country.',
        'Meaning' => 'The postal code provided by the user does not exist in the country.',
      ),
      9 => 
      array (
        'Code' => 'RT0008',
        'Message' => 'The city name provided by the user does not exist in the country.',
        'Meaning' => 'The city name provided by the user does not exist in the country.',
      ),
      10 => 
      array (
        'Code' => 'RT0009',
        'Message' => 'More than one city with the same name found.',
        'Meaning' => 'More than one city with the same name found.',
      ),
      11 => 
      array (
        'Code' => 'RT0010',
        'Message' => 'More than one service areas are found in the city.',
        'Meaning' => 'More than one service areas are found in the city.',
      ),
      12 => 
      array (
        'Code' => 'RT0011',
        'Message' => 'Multiple Cities for same postal code.',
        'Meaning' => 'Multiple Cities for same postal code.',
      ),
      13 => 
      array (
        'Code' => 'RT0012',
        'Message' => 'The city name provided by the user does not have an exact match.',
        'Meaning' => 'The city name provided by the user does not have an exact match.',
      ),
      14 => 
      array (
        'Code' => 'RT0013',
        'Message' => 'The postal code is incorrectly written in the city or the division field.',
        'Meaning' => 'The postal code is incorrectly written in the city or the division field.',
      ),
      15 => 
      array (
        'Code' => 'RT0014',
        'Message' => 'Postcode in address is invalid',
        'Meaning' => 'Postcode in address is invalid',
      ),
      16 => 
      array (
        'Code' => 'RT0015',
        'Message' => 'Origin Country Is Not Supported.',
        'Meaning' => 'Origin Country Is Not Supported.',
      ),
    ),
  ),
  'TrackingService' => 
  array (
    0 => 
    array (
      'Code' => '100',
      'Message' => 'Error Validating incoming request XML  + <No Site ID provided> OR <No Password provided>',
      'Meaning' => 'XML PI Site ID or password is not provided in the request xml',
    ),
    1 => 
    array (
      'Code' => '102',
      'Message' => 'No Shipper Reference',
      'Meaning' => 'No value entered for Shipper Reference field',
    ),
    2 => 
    array (
      'Code' => '104',
      'Message' => 'No Shipper AccoutNumber',
      'Meaning' => 'No value entered for Shipper Account Number field',
    ),
    3 => 
    array (
      'Code' => '105',
      'Message' => 'Invalid  Begin date <date> date must be of yyyy-MM-dd format',
      'Meaning' => 'invalid date format for Begin date in Unknown tracking request.',
    ),
    4 => 
    array (
      'Code' => '106',
      'Message' => 'Too many Shipments Found.',
      'Meaning' => 'Number of results returned exceeds maximum allowable limit set by  system.',
    ),
    5 => 
    array (
      'Code' => '107',
      'Message' => 'Incorrect or Incomplete Input Parameters',
      'Meaning' => 'Request xml is not form correctly',
    ),
    6 => 
    array (
      'Code' => '108',
      'Message' => 'System Unavailable',
      'Meaning' => 'If  the backend is unavailable and not exact error message is available (it will be the default message for tracking message).',
    ),
    7 => 
    array (
      'Code' => '110',
      'Message' => 'Invalid Date Range',
      'Meaning' => 'End date has to be after Begin date',
    ),
    8 => 
    array (
      'Code' => '111',
      'Message' => 'Error in parsing request XML',
      'Meaning' => 'The Request XML is failed against the XSD.',
    ),
    9 => 
    array (
      'Code' => '118',
      'Message' => 'The system could not determine the Air Way Bill Number(s) associated with this request. Please contact DHL for further assistance.',
      'Meaning' => 'For Unknown Query: Any Exception occurred during parsing the response or any invalid data obtained from backend.',
    ),
    10 => 
    array (
      'Code' => '119',
      'Message' => 'The system could not determine the Shipper Reference associated with this request. Please contact DHL for further assistance.',
      'Meaning' => 'For Unknown Query: Any Exception occurred during parsing the response or any invalid data obtained from backend.',
    ),
    11 => 
    array (
      'Code' => '200',
      'Message' => 'No AirwayBill Numbers received',
      'Meaning' => 'No air waybill number being provided in the <AWBNumber> element',
    ),
    12 => 
    array (
      'Code' => '201',
      'Message' => 'Multiple shipper refrences are not supported.',
      'Meaning' => 'Multiple references are not allowed',
    ),
    13 => 
    array (
      'Code' => '202',
      'Message' => 'Contact DHL to get information on the requested AWB Number',
      'Meaning' => 'The air waybill number could be incorrect and contact DHL representative to check the tracked air waybill number',
    ),
    14 => 
    array (
      'Code' => '207',
      'Message' => 'Invalid AWBNumber',
      'Meaning' => 'Waybill number is incorrect',
    ),
    15 => 
    array (
      'Code' => '208',
      'Message' => 'Call DHL for AWBNumber',
      'Meaning' => 'Waybill number is not exists and please contact DHL representative',
    ),
    16 => 
    array (
      'Code' => '209',
      'Message' => 'No Shipments Found for AWBNumber',
      'Meaning' => 'The tracked waybill number is not available',
    ),
    17 => 
    array (
      'Code' => '210',
      'Message' => 'Call DHL for LPNumber',
      'Meaning' => 'License Plate number or Piece ID is not exists and please contact DHL representative',
    ),
  ),
  'RatingService' => 
  array (
    0 => 
    array (
      'Code' => 'RA001',
      'Message' => 'The system was unable to determine the correct rate type for your shipment.',
      'Meaning' => 'The system was unable to determine the correct rate type for your shipment.',
    ),
    1 => 
    array (
      'Code' => 'RA002',
      'Message' => 'A rate could not be determined for the address specified. Please correct and re-submit. For assistance please call technical service representative.',
      'Meaning' => 'Shipper address information for this shipment is incomplete or invalid. Please correct your address information and resubmit.',
    ),
    2 => 
    array (
      'Code' => 'RA003',
      'Message' => 'The system was unable to estimate charges for your shipment. For assistance please call customer service representative.',
      'Meaning' => 'The system was unable to estimate charges for your shipment. For assistance please call customer service representative.',
    ),
    3 => 
    array (
      'Code' => 'RA004',
      'Message' => 'The shipper or billing account is not valid or is not appropriate for this usage. Change the account and resubmit.',
      'Meaning' => 'The shipper or billing account is not valid or is not appropriate for this usage. Change the account and resubmit',
    ),
    4 => 
    array (
      'Code' => 'RA005',
      'Message' => 'The consignee country code is invalid. Please contact technical service representative.',
      'Meaning' => 'The consignee country code is invalid. Please contact technical service representative.',
    ),
    5 => 
    array (
      'Code' => 'RA006',
      'Message' => 'Your account rates are not available here. Please contact your DHL sales representative to obtain your special rates or call technical service representative.',
      'Meaning' => 'Your account rates are not available here. Please contact your DHL sales representative to obtain your special rates or call technical service representative.',
    ),
    6 => 
    array (
      'Code' => 'RA007',
      'Message' => 'We are unable to service this ZIP code. Please contact your DHL sales representative for further assistance.',
      'Meaning' => 'We are unable to service this ZIP code. Please contact your DHL sales representative for further assistance.',
    ),
    7 => 
    array (
      'Code' => 'RA008',
      'Message' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
      'Meaning' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
    ),
    8 => 
    array (
      'Code' => 'RA009',
      'Message' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
      'Meaning' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
    ),
    9 => 
    array (
      'Code' => 'RA010',
      'Message' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
      'Meaning' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
    ),
    10 => 
    array (
      'Code' => 'RA011',
      'Message' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
      'Meaning' => 'Cannot complete rating request for consignee country. Please contact your technical service representative.',
    ),
    11 => 
    array (
      'Code' => 'RA012',
      'Message' => 'Package weight exceeds limits for consignee country. Please contact your customer service representative.',
      'Meaning' => 'Package weight exceeds limits for consignee country. Please contact your customer service representative.',
    ),
    12 => 
    array (
      'Code' => 'RA013',
      'Message' => 'Total shipment weight exceeds limits for consignee country. Please contact your customer service representative.',
      'Meaning' => 'Total shipment weight exceeds limits for consignee country. Please contact your customer service representative.',
    ),
    13 => 
    array (
      'Code' => 'RA014',
      'Message' => 'Warning Note! Dimensions or weights may require special handling or add to transit time. Please contact your customer service representative.',
      'Meaning' => 'Warning Note! Dimensions or weights may require special handling or add to transit time. Please contact your customer service representative.',
    ),
    14 => 
    array (
      'Code' => 'RA015',
      'Message' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
      'Meaning' => 'Shipment not accepted for Transport Collect. Shipping charges not determined. Please contact your customer service representative.',
    ),
    15 => 
    array (
      'Code' => 'RA016',
      'Message' => 'A system service is unavailable. Please resubmit your request at a later time.',
      'Meaning' => 'A system service is unavailable. Please resubmit your request at a later time.',
    ),
    16 => 
    array (
      'Code' => 'RA017',
      'Message' => 'TDD/Jumbo/Jumbo Junior products should not be used in conjunction with 95/96 account numbers',
      'Meaning' => 'TDD/Jumbo/Jumbo Junior products should not be used in conjunction with 95/96 account numbers',
    ),
    17 => 
    array (
      'Code' => 'RA018',
      'Message' => 'System failure. Please contact your technical service representative.',
      'Meaning' => 'Backend unavailable',
    ),
    18 => 
    array (
      'Code' => 'RA019',
      'Message' => 'Invalid sector indicator.',
      'Meaning' => 'Invalid sector indicator.',
    ),
    19 => 
    array (
      'Code' => 'RA020',
      'Message' => 'Your account is not valid or is not appropriate for this usage.',
      'Meaning' => 'Invalid Account Number.',
    ),
    20 => 
    array (
      'Code' => 'RA021',
      'Message' => 'Invalid local or global product code.',
      'Meaning' => 'Local or Global Product is incorrect.Please refer the ReferenceData provided or call our DHL representative.',
    ),
    21 => 
    array (
      'Code' => 'RA022',
      'Message' => 'Invalid weight or weight decimals.',
      'Meaning' => 'Invalid weight or weight decimals.',
    ),
    22 => 
    array (
      'Code' => 'RA023',
      'Message' => 'Invalid insurance value or insurance decimals.',
      'Meaning' => 'Invalid insurance value or insurance decimals.',
    ),
    23 => 
    array (
      'Code' => 'RA024',
      'Message' => 'Invalid currency code.',
      'Meaning' => 'Invalid currency code.',
    ),
    24 => 
    array (
      'Code' => 'RA025',
      'Message' => 'Invalid Special Service Charge Code.',
      'Meaning' => 'Invalid Special Service Charge Code. Please refer to the ReferenceData provided or call our DHL representative.',
    ),
    25 => 
    array (
      'Code' => 'RA026',
      'Message' => 'Floating sur-charges not allowed for sector.',
      'Meaning' => 'Floating sur-charges not allowed for sector.',
    ),
    26 => 
    array (
      'Code' => 'RA027',
      'Message' => 'Sector do not have min. insurance, charges not computed.',
      'Meaning' => 'Sector do not have min. insurance, charges not computed.',
    ),
    27 => 
    array (
      'Code' => 'RA028',
      'Message' => 'Insurance is not configured at system parameter.',
      'Meaning' => 'Insurance is not configured at system parameter.',
    ),
    28 => 
    array (
      'Code' => 'RA029',
      'Message' => 'Account/contract/product insurance setup(s) not found.',
      'Meaning' => 'Account/contract/product insurance setup(s) not found.',
    ),
    29 => 
    array (
      'Code' => 'RA030',
      'Message' => 'Product surcharge is not allowed.',
      'Meaning' => 'Product surcharge is not allowed.',
    ),
    30 => 
    array (
      'Code' => 'RA031',
      'Message' => 'No product surcharge configured at account / system.',
      'Meaning' => 'No product surcharge configured at account / system.',
    ),
    31 => 
    array (
      'Code' => 'RA032',
      'Message' => 'Rate cannot be determined for this combination of product code, origin location and destination.',
      'Meaning' => 'Rate cannot be determined for this combination of product code, origin location and destination.',
    ),
    32 => 
    array (
      'Code' => 'RA033',
      'Message' => 'Insurance currency is invalid for sector.',
      'Meaning' => 'Insurance currency is invalid for sector.',
    ),
    33 => 
    array (
      'Code' => 'RA034',
      'Message' => 'The system was unable to estimate charges for your shipment.',
      'Meaning' => 'The system was unable to estimate charges for your shipment.',
    ),
    34 => 
    array (
      'Code' => 'RA035',
      'Message' => 'Weight sur-charges not allowed for sector.',
      'Meaning' => 'Weight sur-charges not allowed for sector.',
    ),
    35 => 
    array (
      'Code' => 'RA036',
      'Message' => 'Zip code format not present for the country.',
      'Meaning' => 'Zip code format not present for the country.',
    ),
    36 => 
    array (
      'Code' => 'RA037',
      'Message' => 'No floating surcharge configured.',
      'Meaning' => 'No floating surcharge configured.',
    ),
    37 => 
    array (
      'Code' => 'RA038',
      'Message' => 'No weight surcharge configured.',
      'Meaning' => 'No weight surcharge configured.',
    ),
    38 => 
    array (
      'Code' => 'RA039',
      'Message' => 'Your account is not valid or is not appropriate for this usage.',
      'Meaning' => 'Your account is not valid or is not appropriate for this usage.',
    ),
  ),
  'CapabilityAndQuoteService' => 
  array (
    0 => 
    array (
      'Code' => '1000',
      'Message' => 'The requested Global Product Code <GlobalProductCode> and Local Product Code <LocalProductCode> is not available based on origin country <From\\CountryCode> postal location and destination country <To\\CountryCode> postal location for payment country <<PaymentCountryCode>. Please make sure data entered is valid before proceeding or contact our customer service.',
      'Meaning' => 'There is no products available based on your search criteria. Please make sure data entered is valid before proceeding.',
    ),
    1 => 
    array (
      'Code' => '1001',
      'Message' => 'The requested Global Product Code <GlobalProductCode> and Local Product Code <LocalProductCode> is not available based on origin country <From\\CountryCode> and destination country <To\\CountryCode> for payment country <<PaymentCountryCode>',
      'Meaning' => 'The requested product(s) not available based on your search criteria.',
    ),
    2 => 
    array (
      'Code' => '1002',
      'Message' => 'The requested Global Product Code <GlobalProductCode> and Local Product Code <LocalProductCode> is not available based on origin country <From\\CountryCode> postal location and destination country <To\\CountryCode> postal location for payment country <<PaymentCountryCode>. Please make sure data entered is valid before proceeding or contact our customer service.',
      'Meaning' => 'There is no data available based on your search criteria.',
    ),
    3 => 
    array (
      'Code' => '1003',
      'Message' => 'Standard pick-up service is not provided from this location on this day <Date>. Please contact Customer Service  for more details.',
      'Meaning' => 'Pick-up service is not provided on this day.',
    ),
    4 => 
    array (
      'Code' => '1004',
      'Message' => 'The requested Global Product Code <GlobalProductCode> and Local Product Code <LocalProductCode> is not available based on origin country <From\\CountryCode> and destination country <To\\CountryCode> for payment country <<PaymentCountryCode>.',
      'Meaning' => 'Product not available between this origin and destination.',
    ),
    5 => 
    array (
      'Code' => '1005',
      'Message' => 'The origin and destination offers this product capability but the shipment restrictions does not allow any product availability. Please change the search criteria or contact Customer Service  for more details.',
      'Meaning' => 'Product not returned because of Marketed restrictions (of weight, dimension, value, availability etc.)',
    ),
    6 => 
    array (
      'Code' => '2001',
      'Message' => 'Invalid header ID.',
      'Meaning' => 'Invalid header id.',
    ),
    7 => 
    array (
      'Code' => '2002',
      'Message' => 'Invalid application code.',
      'Meaning' => 'Invalid application code.',
    ),
    8 => 
    array (
      'Code' => '3000',
      'Message' => 'The origin country code <From\\CountryCode> could not be found. Please check the origin country code.',
      'Meaning' => 'The origin country code could not be found. Please check the country code.',
    ),
    9 => 
    array (
      'Code' => '3001',
      'Message' => 'The location country code <From\\CountryCode> could not be found. Please check the origin country code.',
      'Meaning' => 'The location country code could not be found please check the location country parameter.',
    ),
    10 => 
    array (
      'Code' => '3002',
      'Message' => 'The origin zip code <From\\Postalcode> could not be found. Please check the origin post code parameter.',
      'Meaning' => 'The origin zip code could not be found please check your origin zip code parameter.',
    ),
    11 => 
    array (
      'Code' => '3003',
      'Message' => 'The origin city name <From\\City> could not be found. Please check the origin city name.',
      'Meaning' => 'The origin city name could not be found please check the city name.',
    ),
    12 => 
    array (
      'Code' => '3004',
      'Message' => 'not used',
      'Meaning' => 'The origin service area code could not be found please check the origin service area code.',
    ),
    13 => 
    array (
      'Code' => '3005',
      'Message' => 'The destination country code <To\\CountryCpde> could not be found. Please check the destination country code.',
      'Meaning' => 'The destination country code could not be found. Please check the country code.',
    ),
    14 => 
    array (
      'Code' => '3006',
      'Message' => 'The destination zip code <To\\Postalcode> could be found. Please check your destination zip code parameter.',
      'Meaning' => 'The destination zip code could not be found please check your destination zip code parameter.',
    ),
    15 => 
    array (
      'Code' => '3007',
      'Message' => 'The destination city name <To\\City> could not be found. Please check the destination city name.',
      'Meaning' => 'The destination city name could not be found please check the destination city name.',
    ),
    16 => 
    array (
      'Code' => '3008',
      'Message' => 'not used',
      'Meaning' => 'The destination service area code could not be found please check the destination service area code.',
    ),
    17 => 
    array (
      'Code' => '3009',
      'Message' => 'The format of the shipment date <Date> is not correct. Please check the shipment date format.',
      'Meaning' => 'The format of the pickup date is not correct. Please check the pickup date format.',
    ),
    18 => 
    array (
      'Code' => '3010',
      'Message' => 'The format of ready time <ReadyTime> is not correct. Please check the time format.',
      'Meaning' => 'The format of the ready time is not correct. Please check the time format.',
    ),
    19 => 
    array (
      'Code' => '3011',
      'Message' => 'The format of the dimensions - height <Height>, depth <Depth> and width <Width>are not correct. Please check the dimensions format.',
      'Meaning' => 'The format of the dimensions is not correct. Please check the dimensions format.',
    ),
    20 => 
    array (
      'Code' => '3012',
      'Message' => 'The format of the weight <ShipmentWeight> is not correct. Please check the weight format.',
      'Meaning' => 'The format of the weight is not correct. Please check the weight format.',
    ),
    21 => 
    array (
      'Code' => '3013',
      'Message' => 'The shipment weight <Pieces/Piece/Weight> is not within the restrictions for the selected origin country <From\\CountryCode>. Please check the piece weight.',
      'Meaning' => 'The shipment weight is not with the restrictions for the selected country. Please check your piece weight.',
    ),
    22 => 
    array (
      'Code' => '3014',
      'Message' => 'The shipment height <Pieces/Piece/Height> is not within the restrictions for the selected origin country <From\\CountryCode>. Please check the piece height.',
      'Meaning' => 'The shipment height is not with the restrictions for the selected country. Please check your piece height.',
    ),
    23 => 
    array (
      'Code' => '3015',
      'Message' => 'The shipment depth <Pieces/Piece/Depth> is not within the restrictions for the selected origin country <From\\CountryCode>. Please check the piece depth.',
      'Meaning' => 'The shipment length is not with the restrictions for the selected country. Please check your piece length.',
    ),
    24 => 
    array (
      'Code' => '3016',
      'Message' => 'The shipment width <Pieces/Piece/Width> is not within the restrictions for the selected origin country <From\\CountryCode>. Please check the piece width.',
      'Meaning' => 'The shipment width/diameter is not with the restrictions for the selected country. Please check your width/diameter',
    ),
    25 => 
    array (
      'Code' => '3017',
      'Message' => 'The shipment declared value <DeclaredValue> is not within the restriction for the selected origin country <From\\CountryCode>. Please check the shipment declared value.',
      'Meaning' => 'The shipment value is not within the restrictions.',
    ),
    26 => 
    array (
      'Code' => '3018',
      'Message' => 'The payment country code <PaymentCountryCode> could not be found. Please check the pament country code.',
      'Meaning' => 'The payment country could not be found  please check your payment country.',
    ),
    27 => 
    array (
      'Code' => '3019',
      'Message' => 'not used',
      'Meaning' => 'The commodity code could not be found  please check the commodity code.',
    ),
    28 => 
    array (
      'Code' => '3020',
      'Message' => 'The origin country <From\\CountryCode> location postal code <From\\Postalcode> or City <From\\City> is invalid. Please check the origin country location details.',
      'Meaning' => 'The origin location is invalid. Please check the data.',
    ),
    29 => 
    array (
      'Code' => '3021',
      'Message' => 'The destination country <To\\CountryCode> location postal code <To\\Postalcode> or City <To\\City> is invalid. Please check the destination country location details.',
      'Meaning' => 'The destination location is invalid. Please check the data.',
    ),
    30 => 
    array (
      'Code' => '3022',
      'Message' => 'The origin postcode <From\\Postalcode> does not provide standard pick up for selected origin country <From\\CountryCode>. Please call customer service for special handling.',
      'Meaning' => 'The origin postcode does not provide standard pick up. Please call customer service for special handling.',
    ),
    31 => 
    array (
      'Code' => '3023',
      'Message' => 'The destination postcode <To\\Postalcode> does not provide standard delivery. Please call customer service for special handling.',
      'Meaning' => 'The destination postcode does not provide standard delivery. Please call customer service for special handling.',
    ),
    32 => 
    array (
      'Code' => '3024',
      'Message' => 'The origin postcode <From\\Postalcode> or destination postcode <To\\Postalcode> format is not correct. Please check the postcode format.',
      'Meaning' => 'Postcode format wrong.',
    ),
    33 => 
    array (
      'Code' => '3025',
      'Message' => 'The origin location information is missing. Post code, city name or suburb name should be provided.',
      'Meaning' => 'Insufficient origin location information such as postcode, city and suburb name.',
    ),
    34 => 
    array (
      'Code' => '3026',
      'Message' => 'The destination location information is missing. Post code, city name or suburb name should be provided.',
      'Meaning' => 'Insufficient destination location information such as postcode, city and suburb name.',
    ),
    35 => 
    array (
      'Code' => '3027',
      'Message' => 'Origin facility is suspended.',
      'Meaning' => 'Origin facilty code is suspended.',
    ),
    36 => 
    array (
      'Code' => '3028',
      'Message' => 'Destination facility is suspended.',
      'Meaning' => 'Destination facility code is suspended.',
    ),
    37 => 
    array (
      'Code' => '5001',
      'Message' => 'The origin country code is missing. This is a mandatory input parameter.',
      'Meaning' => 'The origin country code is missing. This is a mandatory input parameter.',
    ),
    38 => 
    array (
      'Code' => '5002',
      'Message' => 'The origin zip code is missing. The zip code for the selected country <From\\CountryCode> is mandatory.',
      'Meaning' => 'The origin zip code is missing. The zip code for the selected country is mandatory.',
    ),
    39 => 
    array (
      'Code' => '5003',
      'Message' => 'The origin city name is missing. The city name for the selected country <From\\CountryCode> is mandatory.',
      'Meaning' => 'The origin city name is missing. The city name for the selected country is mandatory.',
    ),
    40 => 
    array (
      'Code' => '5004',
      'Message' => 'The origin service area code is missing. The service area code for the selected country is mandatory.',
      'Meaning' => 'The origin service area code is missing. The service area code for the selected country is mandatory.',
    ),
    41 => 
    array (
      'Code' => '5005',
      'Message' => 'The destination country code is missing. This is a mandatory input parameter.',
      'Meaning' => 'The destination country code is missing. This is a mandatory input parameter.',
    ),
    42 => 
    array (
      'Code' => '5006',
      'Message' => 'The destination zip code is missing. The zip code for the selected country <To\\CountryCode> is mandatory.',
      'Meaning' => 'The destination zip code is missing. The zip code for the selected country is mandatory.',
    ),
    43 => 
    array (
      'Code' => '5007',
      'Message' => 'The destination city name is missing. The city name for the selected country <To\\CountryCode> is mandatory.',
      'Meaning' => 'The destination city name is missing. The city name for the selected country is mandatory.',
    ),
    44 => 
    array (
      'Code' => '5008',
      'Message' => 'The destination service area code is missing. The service area code for the selected country is mandatory.',
      'Meaning' => 'The destination service area code is missing. The service area code for the selected country is mandatory.',
    ),
    45 => 
    array (
      'Code' => '5009',
      'Message' => 'The pickup date is missing. The pickup date is a mandatory field.',
      'Meaning' => 'The pickup date is missing. The pickup date is a mandatory field.',
    ),
    46 => 
    array (
      'Code' => '5010',
      'Message' => 'The ready time is missing. This is a mandatory parameter.',
      'Meaning' => 'The ready time is missing. This is a mandatory parameter.',
    ),
    47 => 
    array (
      'Code' => '5011',
      'Message' => 'The unit of measure is missing.',
      'Meaning' => 'The unit of measure is missing.',
    ),
    48 => 
    array (
      'Code' => '5012',
      'Message' => 'The piece weight is missing. This is mandatory information for the requested lane.',
      'Meaning' => 'The piece weight is missing. This is mandatory information for the requested lane.',
    ),
    49 => 
    array (
      'Code' => '5013',
      'Message' => 'The number of pieces field value is missing.',
      'Meaning' => 'The number of pieces is missing.',
    ),
    50 => 
    array (
      'Code' => '5014',
      'Message' => 'The total shipment volume field value is missing.',
      'Meaning' => 'The total shipment volume is missing.',
    ),
    51 => 
    array (
      'Code' => '5017',
      'Message' => 'The maximum piece weight field value is missing.',
      'Meaning' => 'The maximum piece weight is missing.',
    ),
    52 => 
    array (
      'Code' => '5018',
      'Message' => 'The maximum piece height field value is missing.',
      'Meaning' => 'The maximum piece height is missing.',
    ),
    53 => 
    array (
      'Code' => '5019',
      'Message' => 'The maximum piece depth field value is missing.',
      'Meaning' => 'The maximum piece length is missing.',
    ),
    54 => 
    array (
      'Code' => '5020',
      'Message' => 'The maximum piece width field value is missing.',
      'Meaning' => 'The maximum piece width/diameter is missing.',
    ),
    55 => 
    array (
      'Code' => '5021',
      'Message' => 'The declared value field value is missing.',
      'Meaning' => 'The declared value is missing.',
    ),
    56 => 
    array (
      'Code' => '5022',
      'Message' => 'The shipment piece contains invalid values. Please check   Piece Height <Piece\\Height>, Piece Depth <Piece\\Depth>, Piece Width <Piece\\Width> and Piece Weight <Piece\\Weight>.',
      'Meaning' => 'The shipment piece contains invalid values.',
    ),
    57 => 
    array (
      'Code' => '5023',
      'Message' => 'The pickup date <Date> is too old. Please check pickup date.',
      'Meaning' => 'The pickup date is too old.',
    ),
    58 => 
    array (
      'Code' => '5024',
      'Message' => 'The unit of weight is missing.',
      'Meaning' => 'The unit of weight is missing.',
    ),
    59 => 
    array (
      'Code' => '5027',
      'Message' => 'The declared value cannot exceed the limit set for the country <From\\CountryCode>.',
      'Meaning' => 'The declared value cannot exceed the limit set for the country.',
    ),
    60 => 
    array (
      'Code' => '5028',
      'Message' => 'Unknown unit of measure for weight.',
      'Meaning' => 'Unknown unit of measure for weight.',
    ),
    61 => 
    array (
      'Code' => '5029',
      'Message' => 'Unknown unit of measure for dimensions.',
      'Meaning' => 'Unknown unit of measure for dimensions.',
    ),
    62 => 
    array (
      'Code' => '5030',
      'Message' => 'The currency is missing.',
      'Meaning' => NULL,
    ),
    63 => 
    array (
      'Code' => '5031',
      'Message' => 'The maximum piece weight <MaxPieceWeight> is greater than the total shipment weight <ShipmentWeight>.',
      'Meaning' => 'The maximum piece weight is greater than the total shipment weight.',
    ),
    64 => 
    array (
      'Code' => '5032',
      'Message' => 'Currency symbol <CurrencyCode> or <DeclaredCurrency> or <CODCurrencyCode> or <InsuredCurrency> could not be found. Please check the currency symbol field.',
      'Meaning' => 'Unknown currency symbol.',
    ),
    65 => 
    array (
      'Code' => '5033',
      'Message' => 'Invalid combination of origin country <From\\CountryCode> City <From\\City> and Postal Code <From\\Postalcode> or destination country <To\\CountryCode> City <To\\City> and Postal Code <To\\PostalCode>.Please check and enter a valid combination of city and postal code.',
      'Meaning' => 'The location information is missing!',
    ),
    66 => 
    array (
      'Code' => '5034',
      'Message' => 'Invalid combination of origin country <From\\CountryCode> City <From\\City> and Postal Code <From\\Postalcode> or destination country <To\\CountryCode> City <To\\City> and Postal Code <To\\PostalCode>. Please check and enter a valid combination of city and postal code.',
      'Meaning' => 'Location information is not complete. Please specify zip code, city name.',
    ),
    67 => 
    array (
      'Code' => '5035',
      'Message' => 'Invalid combination of origin country <From\\CountryCode> City <From\\City> and Postal Code <From\\Postalcode> or destination country <To\\CountryCode> City <To\\City> and Postal Code <To\\PostalCode>. Please check and enter a valid combination of city and postal code.',
      'Meaning' => '5035 : Location information is incorrect. Please specify city name, suburb.',
    ),
    68 => 
    array (
      'Code' => '5036',
      'Message' => 'The Global Product Code <GlobalProductCode> or Local Product Code <LocalProductCode> information is/are missing.',
      'Meaning' => 'The global/local product code information  is/are missing.',
    ),
    69 => 
    array (
      'Code' => '5037',
      'Message' => 'The Global Service Name <GlobalServiceName> or Local Service Type <LocalServiceType> information is/are missing.',
      'Meaning' => 'The global/local optional service code information is/are missing.',
    ),
    70 => 
    array (
      'Code' => '5038',
      'Message' => 'Invalid combinations of unit of measurement for weight <WeightUnit> and unit of measurement for dimension <DimensionUnit>. Please check units of weight and dimention value.',
      'Meaning' => 'Invalid combination of units of weight and dimension.',
    ),
    71 => 
    array (
      'Code' => '5100',
      'Message' => 'Invalid Global Product Code <QtdShp/GlobalProductCode> and Special Service Type <QtdShp/QtdShpExChrg/SpecialServiceType> combination. Please check the product and service combination.',
      'Meaning' => 'Invalid product service combination.',
    ),
    72 => 
    array (
      'Code' => '5110',
      'Message' => 'Special Service Type <QtdShp/QtdShpExChrg/SpecialServiceType> not applicable. Please check the optional service.',
      'Meaning' => 'Optional service not applicable.',
    ),
    73 => 
    array (
      'Code' => '6000',
      'Message' => 'Unexpected DCT application error.',
      'Meaning' => 'Unexpected application error',
    ),
    74 => 
    array (
      'Code' => '6100',
      'Message' => 'DCT - General schema constrait violation.',
      'Meaning' => 'General schema constraint violation.',
    ),
  ),
);