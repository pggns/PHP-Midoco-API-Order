<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StatusType EnumType
 * @subpackage Enumerations
 */
class StatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OK'
     * @return string 'OK'
     */
    const VALUE_OK = 'OK';
    /**
     * Constant for value 'ER'
     * @return string 'ER'
     */
    const VALUE_ER = 'ER';
    /**
     * Return allowed values
     * @uses self::VALUE_OK
     * @uses self::VALUE_ER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OK,
            self::VALUE_ER,
        ];
    }
}
