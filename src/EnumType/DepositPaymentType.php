<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for depositPaymentType EnumType
 * Meta information extracted from the WSDL
 * - documentation: used to describe that a deposit payment has a different type of handling (TUI case: deposit via Agency, Total via TUI card)
 * @subpackage Enumerations
 */
class DepositPaymentType extends AbstractStructEnumBase
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
     * Return allowed values
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_SUPPLIER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AGENCY,
            self::VALUE_SUPPLIER,
        ];
    }
}
