<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Direction EnumType
 * @subpackage Enumerations
 */
class Direction extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OUTWARD'
     * @return string 'OUTWARD'
     */
    const VALUE_OUTWARD = 'OUTWARD';
    /**
     * Constant for value 'RETURN'
     * @return string 'RETURN'
     */
    const VALUE_RETURN = 'RETURN';
    /**
     * Constant for value 'BOTH'
     * @return string 'BOTH'
     */
    const VALUE_BOTH = 'BOTH';
    /**
     * Return allowed values
     * @uses self::VALUE_OUTWARD
     * @uses self::VALUE_RETURN
     * @uses self::VALUE_BOTH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OUTWARD,
            self::VALUE_RETURN,
            self::VALUE_BOTH,
        ];
    }
}
