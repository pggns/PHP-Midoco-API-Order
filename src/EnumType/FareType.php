<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for fareType EnumType
 * Meta information extracted from the WSDL
 * - documentation: net, published, nofrill, charter | net, published, nofrill, charter, neg
 * @subpackage Enumerations
 */
class FareType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NET'
     * @return string 'NET'
     */
    const VALUE_NET = 'NET';
    /**
     * Constant for value 'PUBLISHED'
     * @return string 'PUBLISHED'
     */
    const VALUE_PUBLISHED_1 = 'PUBLISHED';
    /**
     * Constant for value 'NOFRILL'
     * @return string 'NOFRILL'
     */
    const VALUE_NOFRILL_1 = 'NOFRILL';
    /**
     * Constant for value 'CHARTER'
     * @return string 'CHARTER'
     */
    const VALUE_CHARTER_1 = 'CHARTER';
    /**
     * Constant for value 'NEG'
     * @return string 'NEG'
     */
    const VALUE_NEG = 'NEG';
    /**
     * Constant for value 'CNG'
     * @return string 'CNG'
     */
    const VALUE_CNG = 'CNG';
    /**
     * Return allowed values
     * @uses self::VALUE_NET
     * @uses self::VALUE_PUBLISHED_1
     * @uses self::VALUE_NOFRILL_1
     * @uses self::VALUE_CHARTER_1
     * @uses self::VALUE_NEG
     * @uses self::VALUE_CNG
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NET,
            self::VALUE_PUBLISHED_1,
            self::VALUE_NOFRILL_1,
            self::VALUE_CHARTER_1,
            self::VALUE_NEG,
            self::VALUE_CNG,
        ];
    }
}
