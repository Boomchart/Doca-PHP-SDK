<?php

declare(strict_types=1);

/*
 * DocaLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace DocaLib;

use DocaLib\ApiHelper;
use Exception;
use stdClass;

/**
 * Baseurl aliases
 */
class Server
{
    public const SERVER_1 = 'Server 1';

    private const _ALL_VALUES = [self::SERVER_1];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        ApiHelper::checkValueInEnum($value, self::class, self::_ALL_VALUES);
        return $value;
    }
}
