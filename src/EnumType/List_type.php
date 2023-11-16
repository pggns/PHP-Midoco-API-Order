<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for list_type EnumType
 * @subpackage Enumerations
 */
class List_type extends AbstractStructEnumBase
{
    /**
     * Constant for value 'WORKSTATION'
     * @return string 'WORKSTATION'
     */
    const VALUE_WORKSTATION = 'WORKSTATION';
    /**
     * Constant for value 'USER'
     * @return string 'USER'
     */
    const VALUE_USER = 'USER';
    /**
     * Constant for value 'ORGUNIT'
     * @return string 'ORGUNIT'
     */
    const VALUE_ORGUNIT = 'ORGUNIT';
    /**
     * Return allowed values
     * @uses self::VALUE_WORKSTATION
     * @uses self::VALUE_USER
     * @uses self::VALUE_ORGUNIT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WORKSTATION,
            self::VALUE_USER,
            self::VALUE_ORGUNIT,
        ];
    }
}
