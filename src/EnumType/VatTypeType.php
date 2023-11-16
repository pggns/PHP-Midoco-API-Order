<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VatTypeType EnumType
 * @subpackage Enumerations
 */
class VatTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'VatOrganic'
     * @return string 'VatOrganic'
     */
    const VALUE_VAT_ORGANIC = 'VatOrganic';
    /**
     * Constant for value 'ReverseCharge'
     * @return string 'ReverseCharge'
     */
    const VALUE_REVERSE_CHARGE = 'ReverseCharge';
    /**
     * Constant for value 'VatLiabilityInland'
     * @return string 'VatLiabilityInland'
     */
    const VALUE_VAT_LIABILITY_INLAND = 'VatLiabilityInland';
    /**
     * Constant for value 'TaxFreeAbroad'
     * @return string 'TaxFreeAbroad'
     */
    const VALUE_TAX_FREE_ABROAD = 'TaxFreeAbroad';
    /**
     * Constant for value 'SmallBusiness'
     * @return string 'SmallBusiness'
     */
    const VALUE_SMALL_BUSINESS = 'SmallBusiness';
    /**
     * Return allowed values
     * @uses self::VALUE_VAT_ORGANIC
     * @uses self::VALUE_REVERSE_CHARGE
     * @uses self::VALUE_VAT_LIABILITY_INLAND
     * @uses self::VALUE_TAX_FREE_ABROAD
     * @uses self::VALUE_SMALL_BUSINESS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VAT_ORGANIC,
            self::VALUE_REVERSE_CHARGE,
            self::VALUE_VAT_LIABILITY_INLAND,
            self::VALUE_TAX_FREE_ABROAD,
            self::VALUE_SMALL_BUSINESS,
        ];
    }
}
