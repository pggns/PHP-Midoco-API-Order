<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FareType EnumType
 * @subpackage Enumerations
 */
class FareType_1 extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PUBLISHED'
     * @return string 'PUBLISHED'
     */
    const VALUE_PUBLISHED = 'PUBLISHED';
    /**
     * Constant for value 'NETTO'
     * @return string 'NETTO'
     */
    const VALUE_NETTO = 'NETTO';
    /**
     * Constant for value 'NEGO'
     * @return string 'NEGO'
     */
    const VALUE_NEGO = 'NEGO';
    /**
     * Constant for value 'CORPORATE_NEGO'
     * @return string 'CORPORATE_NEGO'
     */
    const VALUE_CORPORATE_NEGO = 'CORPORATE_NEGO';
    /**
     * Constant for value 'NOFRILL'
     * @return string 'NOFRILL'
     */
    const VALUE_NOFRILL = 'NOFRILL';
    /**
     * Constant for value 'CHARTER'
     * @return string 'CHARTER'
     */
    const VALUE_CHARTER = 'CHARTER';
    /**
     * Return allowed values
     * @uses self::VALUE_PUBLISHED
     * @uses self::VALUE_NETTO
     * @uses self::VALUE_NEGO
     * @uses self::VALUE_CORPORATE_NEGO
     * @uses self::VALUE_NOFRILL
     * @uses self::VALUE_CHARTER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PUBLISHED,
            self::VALUE_NETTO,
            self::VALUE_NEGO,
            self::VALUE_CORPORATE_NEGO,
            self::VALUE_NOFRILL,
            self::VALUE_CHARTER,
        ];
    }
}
