<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for extPaymentType EnumType
 * @subpackage Enumerations
 */
class ExtPaymentType extends AbstractStructEnumBase
{
    /**
     * Constant for value ''
     * @return string ''
     */
    const VALUE_ = '';
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const VALUE_CASH = 'CASH';
    /**
     * Constant for value 'DEBIT'
     * @return string 'DEBIT'
     */
    const VALUE_DEBIT = 'DEBIT';
    /**
     * Constant for value 'CC'
     * @return string 'CC'
     */
    const VALUE_CC = 'CC';
    /**
     * Constant for value 'PAYPAL'
     * @return string 'PAYPAL'
     */
    const VALUE_PAYPAL = 'PAYPAL';
    /**
     * Constant for value 'DIRECTEBANKING'
     * @return string 'DIRECTEBANKING'
     */
    const VALUE_DIRECTEBANKING = 'DIRECTEBANKING';
    /**
     * Constant for value 'FULL_CREDIT'
     * @return string 'FULL_CREDIT'
     */
    const VALUE_FULL_CREDIT = 'FULL_CREDIT';
    /**
     * Return allowed values
     * @uses self::VALUE_
     * @uses self::VALUE_CASH
     * @uses self::VALUE_DEBIT
     * @uses self::VALUE_CC
     * @uses self::VALUE_PAYPAL
     * @uses self::VALUE_DIRECTEBANKING
     * @uses self::VALUE_FULL_CREDIT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_,
            self::VALUE_CASH,
            self::VALUE_DEBIT,
            self::VALUE_CC,
            self::VALUE_PAYPAL,
            self::VALUE_DIRECTEBANKING,
            self::VALUE_FULL_CREDIT,
        ];
    }
}
