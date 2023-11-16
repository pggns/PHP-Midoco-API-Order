<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GUIAttributeGroup EnumType
 * @subpackage Enumerations
 */
class GUIAttributeGroup extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SearchOrder'
     * @return string 'SearchOrder'
     */
    const VALUE_SEARCH_ORDER = 'SearchOrder';
    /**
     * Constant for value 'SearchInvoice'
     * @return string 'SearchInvoice'
     */
    const VALUE_SEARCH_INVOICE = 'SearchInvoice';
    /**
     * Constant for value 'SearchCrm'
     * @return string 'SearchCrm'
     */
    const VALUE_SEARCH_CRM = 'SearchCrm';
    /**
     * Constant for value 'SearchStatistics'
     * @return string 'SearchStatistics'
     */
    const VALUE_SEARCH_STATISTICS = 'SearchStatistics';
    /**
     * Return allowed values
     * @uses self::VALUE_SEARCH_ORDER
     * @uses self::VALUE_SEARCH_INVOICE
     * @uses self::VALUE_SEARCH_CRM
     * @uses self::VALUE_SEARCH_STATISTICS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SEARCH_ORDER,
            self::VALUE_SEARCH_INVOICE,
            self::VALUE_SEARCH_CRM,
            self::VALUE_SEARCH_STATISTICS,
        ];
    }
}
