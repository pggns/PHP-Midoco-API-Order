<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CreditCardType EnumType
 * @subpackage Enumerations
 */
class CreditCardType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AX'
     * @return string 'AX'
     */
    const VALUE_AX = 'AX';
    /**
     * Constant for value 'DC'
     * @return string 'DC'
     */
    const VALUE_DC = 'DC';
    /**
     * Constant for value 'JC'
     * @return string 'JC'
     */
    const VALUE_JC = 'JC';
    /**
     * Constant for value 'MC'
     * @return string 'MC'
     */
    const VALUE_MC = 'MC';
    /**
     * Constant for value 'TP'
     * @return string 'TP'
     */
    const VALUE_TP = 'TP';
    /**
     * Constant for value 'VI'
     * @return string 'VI'
     */
    const VALUE_VI = 'VI';
    /**
     * Return allowed values
     * @uses self::VALUE_AX
     * @uses self::VALUE_DC
     * @uses self::VALUE_JC
     * @uses self::VALUE_MC
     * @uses self::VALUE_TP
     * @uses self::VALUE_VI
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AX,
            self::VALUE_DC,
            self::VALUE_JC,
            self::VALUE_MC,
            self::VALUE_TP,
            self::VALUE_VI,
        ];
    }
}
