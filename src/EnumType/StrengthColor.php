<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for strengthColor EnumType
 * @subpackage Enumerations
 */
class StrengthColor extends AbstractStructEnumBase
{
    /**
     * Constant for value 'RED'
     * @return string 'RED'
     */
    const VALUE_RED = 'RED';
    /**
     * Constant for value 'YELLOW'
     * @return string 'YELLOW'
     */
    const VALUE_YELLOW = 'YELLOW';
    /**
     * Constant for value 'GREEN'
     * @return string 'GREEN'
     */
    const VALUE_GREEN = 'GREEN';
    /**
     * Return allowed values
     * @uses self::VALUE_RED
     * @uses self::VALUE_YELLOW
     * @uses self::VALUE_GREEN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RED,
            self::VALUE_YELLOW,
            self::VALUE_GREEN,
        ];
    }
}
