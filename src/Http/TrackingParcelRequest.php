<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 12.5.2017 г.
 * Time: 18:03 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Dhl\Entity\EA\KnownTrackingRequest;

class TrackingParcelRequest extends AbstractRequest
{
    /**
     * @return KnownTrackingRequest
     */
    public function getData() {

        $request = new KnownTrackingRequest();
        $request->SiteID = $this->getUsername();
        $request->Password = $this->getPassword();

        // Set values of the request
        $request->MessageTime = Carbon::now()->format('Y-m-d\TH:i:sP');
        $request->MessageReference = $this->getMessageReference();

        $request->LanguageCode = 'en';
        $request->CountryCode = 'BG';
        $request->AWBNumber = $this->getParcelId();
        $request->LevelOfDetails = 'ALL_CHECK_POINTS';
        $request->PiecesEnabled = 'S';

        return $request;
    }

    /**
     * @param $data
     * @return ShippingServicesResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new TrackingParcelResponse($this, $data);
    }
}