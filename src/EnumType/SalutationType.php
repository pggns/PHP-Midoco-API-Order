<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SalutationType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type of salutation.
 * @subpackage Enumerations
 */
class SalutationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MR'
     * @return string 'MR'
     */
    const VALUE_MR = 'MR';
    /**
     * Constant for value 'MS'
     * @return string 'MS'
     */
    const VALUE_MS = 'MS';
    /**
     * Constant for value 'MRS'
     * @return string 'MRS'
     */
    const VALUE_MRS = 'MRS';
    /**
     * Constant for value 'CHD'
     * @return string 'CHD'
     */
    const VALUE_CHD = 'CHD';
    /**
     * Constant for value 'INF'
     * @return string 'INF'
     */
    const VALUE_INF = 'INF';
    /**
     * Return allowed values
     * @uses self::VALUE_MR
     * @uses self::VALUE_MS
     * @uses self::VALUE_MRS
     * @uses self::VALUE_CHD
     * @uses self::VALUE_INF
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MR,
            self::VALUE_MS,
            self::VALUE_MRS,
            self::VALUE_CHD,
            self::VALUE_INF,
        ];
    }
}
