<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for paymentType EnumType
 * Meta information extracted from the WSDL
 * - documentation: supplier is set when creditcard payment via airline is used | SUPPLIER: intended payment is via creditcard using an airline mechanism | optional info about payment way (supplier based or agency inkasso)
 * @subpackage Enumerations
 */
class PaymentType_1 extends AbstractStructEnumBase
{
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
     * Constant for value 'DEBIT'
     * @return string 'DEBIT'
     */
    const VALUE_DEBIT_3 = 'DEBIT';
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const VALUE_CASH_3 = 'CASH';
    /**
     * Constant for value 'CC'
     * @return string 'CC'
     */
    const VALUE_CC_2 = 'CC';
    /**
     * Return allowed values
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_SUPPLIER
     * @uses self::VALUE_DEBIT_3
     * @uses self::VALUE_CASH_3
     * @uses self::VALUE_CC_2
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AGENCY,
            self::VALUE_SUPPLIER,
            self::VALUE_DEBIT_3,
            self::VALUE_CASH_3,
            self::VALUE_CC_2,
        ];
    }
}
