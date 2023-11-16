<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for searchType EnumType
 * @subpackage Enumerations
 */
class SearchType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'STANDARD_ORDER_SEARCH'
     * @return string 'STANDARD_ORDER_SEARCH'
     */
    const VALUE_STANDARD_ORDER_SEARCH = 'STANDARD_ORDER_SEARCH';
    /**
     * Constant for value 'FOR_AGENCY'
     * @return string 'FOR_AGENCY'
     */
    const VALUE_FOR_AGENCY = 'FOR_AGENCY';
    /**
     * Constant for value 'FOR_SUPPLIER_AGENCY_SETTLEMENT'
     * @return string 'FOR_SUPPLIER_AGENCY_SETTLEMENT'
     */
    const VALUE_FOR_SUPPLIER_AGENCY_SETTLEMENT = 'FOR_SUPPLIER_AGENCY_SETTLEMENT';
    /**
     * Return allowed values
     * @uses self::VALUE_STANDARD_ORDER_SEARCH
     * @uses self::VALUE_FOR_AGENCY
     * @uses self::VALUE_FOR_SUPPLIER_AGENCY_SETTLEMENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STANDARD_ORDER_SEARCH,
            self::VALUE_FOR_AGENCY,
            self::VALUE_FOR_SUPPLIER_AGENCY_SETTLEMENT,
        ];
    }
}
