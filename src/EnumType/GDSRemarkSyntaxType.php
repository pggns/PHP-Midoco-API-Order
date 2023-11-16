<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GDSRemarkSyntaxType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type of the GDS Remark.
 * @subpackage Enumerations
 */
class GDSRemarkSyntaxType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AMADEUS'
     * @return string 'AMADEUS'
     */
    const VALUE_AMADEUS = 'AMADEUS';
    /**
     * Constant for value 'SABRE'
     * @return string 'SABRE'
     */
    const VALUE_SABRE = 'SABRE';
    /**
     * Constant for value 'GALILEO'
     * @return string 'GALILEO'
     */
    const VALUE_GALILEO = 'GALILEO';
    /**
     * Return allowed values
     * @uses self::VALUE_AMADEUS
     * @uses self::VALUE_SABRE
     * @uses self::VALUE_GALILEO
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AMADEUS,
            self::VALUE_SABRE,
            self::VALUE_GALILEO,
        ];
    }
}
