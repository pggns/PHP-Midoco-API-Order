<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentType EnumType
 * @subpackage Enumerations
 */
class PaymentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CC'
     * @return string 'CC'
     */
    const VALUE_CC = 'CC';
    /**
     * Constant for value 'DEBIT'
     * @return string 'DEBIT'
     */
    const VALUE_DEBIT = 'DEBIT';
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const VALUE_CASH = 'CASH';
    /**
     * Constant for value 'PP'
     * @return string 'PP'
     */
    const VALUE_PP = 'PP';
    /**
     * Constant for value 'AGENCY'
     * @return string 'AGENCY'
     */
    const VALUE_AGENCY = 'AGENCY';
    /**
     * Constant for value 'SUPPLIER'
     * @return string 'SUPPLIER'
     */
    const VALUE_SUPPLIER = 'SUPPLIER';
    /**
     * Return allowed values
     * @uses self::VALUE_CC
     * @uses self::VALUE_DEBIT
     * @uses self::VALUE_CASH
     * @uses self::VALUE_PP
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_SUPPLIER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CC,
            self::VALUE_DEBIT,
            self::VALUE_CASH,
            self::VALUE_PP,
            self::VALUE_AGENCY,
            self::VALUE_SUPPLIER,
        ];
    }
}
