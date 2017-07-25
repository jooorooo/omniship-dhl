<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 30.5.2017 г.
 * Time: 14:44 ч.
 */

namespace Omniship\Dhl\Helper;


use Omniship\Helper\Collection;

class Data
{
    /**
     * @var Collection
     */
    protected static $countries;
    /**
     * @var Collection
     */
    protected static $errors;
    /**
     * @var Collection
     */
    protected static $global_product_codes;
    /**
     * @var Collection
     */
    protected static $language_codes;
    /**
     * @var Collection
     */
    protected static $regions;
    /**
     * @var Collection
     */
    protected static $special_service_codes;
    /**
     * @var Collection
     */
    protected static $terms_of_trade;
    /**
     * @var Collection
     */
    protected static $tracking_event_codes;
    /**
     * @var Collection
     */
    protected static $package_types;

    /**
     * @return Collection
     */
    public static function countries() {
        if(is_null(static::$countries)) {
            static::$countries = new Collection(include __DIR__ . './../data/countries.php');
        }
        return static::$countries;
    }

    /**
     * @return Collection
     */
    public static function errors() {
        if(is_null(static::$errors)) {
            static::$errors = new Collection(include __DIR__ . './../data/errors.php');
        }
        return static::$errors;
    }

    /**
     * @return Collection
     */
    public static function globalProductCodes() {
        if(is_null(static::$global_product_codes)) {
            static::$global_product_codes = new Collection(include __DIR__ . './../data/global_product_codes.php');
        }
        return static::$global_product_codes;
    }

    /**
     * @return Collection
     */
    public static function languageCodes() {
        if(is_null(static::$language_codes)) {
            static::$language_codes = new Collection(include __DIR__ . './../data/language_codes.php');
        }
        return static::$language_codes;
    }

    /**
     * @return Collection
     */
    public static function regions() {
        if(is_null(static::$regions)) {
            static::$regions = new Collection(include __DIR__ . './../data/regions.php');
        }
        return static::$regions;
    }

    /**
     * @return Collection
     */
    public static function packageTypes() {
        if(is_null(static::$regions)) {
            static::$regions = new Collection(include __DIR__ . './../data/package_types.php');
        }
        return static::$regions;
    }

    /**
     * @return Collection
     */
    public static function specialServiceCodes() {
        if(is_null(static::$special_service_codes)) {
            static::$special_service_codes = new Collection(include __DIR__ . './../data/special_service_codes.php');
        }
        return static::$special_service_codes;
    }

    /**
     * @return Collection
     */
    public static function termsOfTrade() {
        if(is_null(static::$terms_of_trade)) {
            static::$terms_of_trade = new Collection(include __DIR__ . './../data/terms_of_trade.php');
        }
        return static::$terms_of_trade;
    }

    /**
     * @return Collection
     */
    public static function trackingEventCodes() {
        if(is_null(static::$tracking_event_codes)) {
            static::$tracking_event_codes = new Collection(include __DIR__ . './../data/tracking_event_codes.php');
        }
        return static::$tracking_event_codes;
    }

}