<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for modeRevenueCalculation EnumType
 * Meta information extracted from the WSDL
 * - documentation: Mode for manual revenue/commission calculations based on value in valueRevenueCalculationElement: (naming is case sensitive!) - "Calculated commission" -> set the calculated commission directly by valueRevenueCalculation. -
 * "Commission|%" -> calculate the commission in percent (valueRevenueCalculation) based on originalPrice (in case of foreign currency) or totalPrice - "Price" -> the commission is the different between totalPrice and valueRevenueCalculation - "Buying
 * price foreign" -> valueRevenueCalculation is foreign currency and replaces original_price. The commission is the difference between totalPrice and valueRevenueCalculation (by base currency)
 * @subpackage Enumerations
 */
class ModeRevenueCalculation extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Calculated commission'
     * @return string 'Calculated commission'
     */
    const VALUE_CALCULATED_COMMISSION = 'Calculated commission';
    /**
     * Constant for value 'Commission|%'
     * @return string 'Commission|%'
     */
    const VALUE_COMMISSION = 'Commission|%';
    /**
     * Constant for value 'Buying price foreign'
     * @return string 'Buying price foreign'
     */
    const VALUE_BUYING_PRICE_FOREIGN = 'Buying price foreign';
    /**
     * Constant for value 'Price'
     * @return string 'Price'
     */
    const VALUE_PRICE = 'Price';
    /**
     * Return allowed values
     * @uses self::VALUE_CALCULATED_COMMISSION
     * @uses self::VALUE_COMMISSION
     * @uses self::VALUE_BUYING_PRICE_FOREIGN
     * @uses self::VALUE_PRICE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CALCULATED_COMMISSION,
            self::VALUE_COMMISSION,
            self::VALUE_BUYING_PRICE_FOREIGN,
            self::VALUE_PRICE,
        ];
    }
}
