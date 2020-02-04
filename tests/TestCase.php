<?php

namespace SpicePay;

class TestCase extends \PHPUnit_Framework_TestCase
{
    const AUTH_TOKEN  = '-39RHqyAiyBmpwAEz9FcFxcVZDqbGmvKXTdHztny';
    const ENVIRONMENT = 'sandbox';

    public static function getGoodAuthentication()
    {
        return array(
            'siteId'  => self::AUTH_TOKEN,
            'environment' => self::ENVIRONMENT,
        );
    }
}