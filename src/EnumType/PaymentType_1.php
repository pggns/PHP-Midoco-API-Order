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
    const VALUE_AGENCY_1 = 'AGENCY';
    /**
     * Constant for value 'SUPPLIER'
     * @return string 'SUPPLIER'
     */
    const VALUE_SUPPLIER_1 = 'SUPPLIER';
    /**
     * Constant for value 'DEBIT'
     * @return string 'DEBIT'
     */
    const VALUE_DEBIT_1 = 'DEBIT';
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const VALUE_CASH_1 = 'CASH';
    /**
     * Constant for value 'CC'
     * @return string 'CC'
     */
    const VALUE_CC_1 = 'CC';
    /**
     * Return allowed values
     * @uses self::VALUE_AGENCY_1
     * @uses self::VALUE_SUPPLIER_1
     * @uses self::VALUE_DEBIT_1
     * @uses self::VALUE_CASH_1
     * @uses self::VALUE_CC_1
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AGENCY_1,
            self::VALUE_SUPPLIER_1,
            self::VALUE_DEBIT_1,
            self::VALUE_CASH_1,
            self::VALUE_CC_1,
        ];
    }
}
