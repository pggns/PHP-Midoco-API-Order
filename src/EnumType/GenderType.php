<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GenderType EnumType
 * @subpackage Enumerations
 */
class GenderType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MALE'
     * @return string 'MALE'
     */
    const VALUE_MALE = 'MALE';
    /**
     * Constant for value 'FEMALE'
     * @return string 'FEMALE'
     */
    const VALUE_FEMALE = 'FEMALE';
    /**
     * Constant for value 'DIVERS'
     * @return string 'DIVERS'
     */
    const VALUE_DIVERS = 'DIVERS';
    /**
     * Return allowed values
     * @uses self::VALUE_MALE
     * @uses self::VALUE_FEMALE
     * @uses self::VALUE_DIVERS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MALE,
            self::VALUE_FEMALE,
            self::VALUE_DIVERS,
        ];
    }
}
