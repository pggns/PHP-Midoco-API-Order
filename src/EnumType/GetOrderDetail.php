<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GetOrderDetail EnumType
 * @subpackage Enumerations
 */
class GetOrderDetail extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MilesAndMore'
     * Meta information extracted from the WSDL
     * - documentation: In case the org.-unit has the MILES_AND_MORE adapter, the earn-transaction information is included.
     * @return string 'MilesAndMore'
     */
    const VALUE_MILES_AND_MORE = 'MilesAndMore';
    /**
     * Return allowed values
     * @uses self::VALUE_MILES_AND_MORE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MILES_AND_MORE,
        ];
    }
}
