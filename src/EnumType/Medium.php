<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for medium EnumType
 * @subpackage Enumerations
 */
class Medium extends AbstractStructEnumBase
{
    /**
     * Constant for value 'VISA'
     * @return string 'VISA'
     */
    const VALUE_VISA = 'VISA';
    /**
     * Constant for value 'MASTERCARD'
     * @return string 'MASTERCARD'
     */
    const VALUE_MASTERCARD = 'MASTERCARD';
    /**
     * Constant for value 'AMEX'
     * @return string 'AMEX'
     */
    const VALUE_AMEX = 'AMEX';
    /**
     * Constant for value 'DINERS'
     * @return string 'DINERS'
     */
    const VALUE_DINERS = 'DINERS';
    /**
     * Constant for value 'AIRPLUS'
     * @return string 'AIRPLUS'
     */
    const VALUE_AIRPLUS = 'AIRPLUS';
    /**
     * Constant for value 'BANKCARD'
     * @return string 'BANKCARD'
     */
    const VALUE_BANKCARD = 'BANKCARD';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Constant for value 'VOUCHER'
     * @return string 'VOUCHER'
     */
    const VALUE_VOUCHER = 'VOUCHER';
    /**
     * Return allowed values
     * @uses self::VALUE_VISA
     * @uses self::VALUE_MASTERCARD
     * @uses self::VALUE_AMEX
     * @uses self::VALUE_DINERS
     * @uses self::VALUE_AIRPLUS
     * @uses self::VALUE_BANKCARD
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_VOUCHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VISA,
            self::VALUE_MASTERCARD,
            self::VALUE_AMEX,
            self::VALUE_DINERS,
            self::VALUE_AIRPLUS,
            self::VALUE_BANKCARD,
            self::VALUE_UNKNOWN,
            self::VALUE_VOUCHER,
        ];
    }
}
