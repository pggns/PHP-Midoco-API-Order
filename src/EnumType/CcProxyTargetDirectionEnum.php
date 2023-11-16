<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CcProxyTargetDirectionEnum EnumType
 * @subpackage Enumerations
 */
class CcProxyTargetDirectionEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'I'
     * @return string 'I'
     */
    const VALUE_I = 'I';
    /**
     * Constant for value 'O'
     * @return string 'O'
     */
    const VALUE_O = 'O';
    /**
     * Return allowed values
     * @uses self::VALUE_I
     * @uses self::VALUE_O
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_I,
            self::VALUE_O,
        ];
    }
}
