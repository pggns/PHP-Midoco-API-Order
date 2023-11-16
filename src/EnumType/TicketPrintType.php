<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TicketPrintType EnumType
 * @subpackage Enumerations
 */
class TicketPrintType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ELECTRONIC'
     * @return string 'ELECTRONIC'
     */
    const VALUE_ELECTRONIC = 'ELECTRONIC';
    /**
     * Constant for value 'PAPER'
     * @return string 'PAPER'
     */
    const VALUE_PAPER = 'PAPER';
    /**
     * Return allowed values
     * @uses self::VALUE_ELECTRONIC
     * @uses self::VALUE_PAPER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ELECTRONIC,
            self::VALUE_PAPER,
        ];
    }
}
