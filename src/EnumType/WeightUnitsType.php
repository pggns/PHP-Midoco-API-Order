<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WeightUnitsType EnumType
 * @subpackage Enumerations
 */
class WeightUnitsType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'KG'
     * @return string 'KG'
     */
    const VALUE_KG = 'KG';
    /**
     * Constant for value 'LBS'
     * @return string 'LBS'
     */
    const VALUE_LBS = 'LBS';
    /**
     * Return allowed values
     * @uses self::VALUE_KG
     * @uses self::VALUE_LBS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_KG,
            self::VALUE_LBS,
        ];
    }
}
