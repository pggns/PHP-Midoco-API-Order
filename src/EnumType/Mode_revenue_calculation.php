<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for mode-revenue-calculation EnumType
 * Meta information extracted from the WSDL
 * - documentation: Mode for manual revenue/commission calculations based on value in value-revenue-calculation-element: (naming is case sensitive!) - "Calculated commission" -> set the calculated commission directly by value-revenue-calculation. -
 * "Commission|%" -> calculate the commission in percent (value-revenue-calculation) based on original-price (in case of foreign currency) or total-price - "Price" -> the commission is the different between total-price and value-revenue-calculation -
 * "Buying price foreign" -> value-revenue-calculation is foreign currency and replaces original_price. The commission is the difference between total-price and value-revenue-calculation (by base currency)
 * @subpackage Enumerations
 */
class Mode_revenue_calculation extends AbstractStructEnumBase
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
