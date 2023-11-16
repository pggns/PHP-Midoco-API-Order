<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ExternalPaymentType EnumType
 * @subpackage Enumerations
 */
class ExternalPaymentType extends AbstractStructEnumBase
{
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
     * Return allowed values
     * @uses self::VALUE_CASH
     * @uses self::VALUE_DEBIT
     * @uses self::VALUE_CC
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CASH,
            self::VALUE_DEBIT,
            self::VALUE_CC,
        ];
    }
}
