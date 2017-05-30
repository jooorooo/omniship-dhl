<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 30.5.2017 г.
 * Time: 14:44 ч.
 */

namespace Omniship\Dhl\Helper;

use Omniship\Helper\Collection;

class Errors
{

    /**
     * @param string $region
     * @param null $code
     * @return Collection|array|null
     */
    public static function shipmentValidation($region = 'GLOBAL', $code = null) {
        $errors = Data::errors()->get('ShipmentValidation');
        $collection =  Collection::make(!empty($errors[$region]) ? $errors[$region] : [])->keyBy('Code');
        return $code ? $collection->get($code) : $collection;
    }

    /**
     * @param string $region
     * @param null $code
     * @return Collection|array|null
     */
    public static function pickUpService($region = 'AM', $code = null) {
        $errors = Data::errors()->get('PickUpService');
        $collection =  Collection::make(!empty($errors[$region]) ? $errors[$region] : [])->keyBy('Code');
        return $code ? $collection->get($code) : $collection;
    }

    /**
     * @param string $region
     * @param null $code
     * @return Collection|array|null
     */
    public static function routingService($region = 'AM', $code = null) {
        $errors = Data::errors()->get('RoutingService');
        $collection =  Collection::make(!empty($errors[$region]) ? $errors[$region] : [])->keyBy('Code');
        return $code ? $collection->get($code) : $collection;
    }

    /**
     * @param null $code
     * @return Collection|array|null
     */
    public static function trackingService($code = null) {
        $collection =  Collection::make(Data::errors()->get('TrackingService'))->keyBy('Code');
        return $code ? $collection->get($code) : $collection;
    }

    /**
     * @param null $code
     * @return Collection|array|null
     */
    public static function ratingService($code = null) {
        $collection = Collection::make(Data::errors()->get('RatingService'))->keyBy('Code');
        return $code ? $collection->get($code) : $collection;
    }

    /**
     * @param null $code
     * @return Collection|array|null
     */
    public static function capabilityAndQuoteService($code = null) {
        $collection = Collection::make(Data::errors()->get('CapabilityAndQuoteService'))->keyBy('Code');
        return $code ? $collection->get($code) : $collection;
    }

}