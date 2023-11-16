<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CcProxySingleUseTokenStatus EnumType
 * @subpackage Enumerations
 */
class CcProxySingleUseTokenStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PENDING'
     * @return string 'PENDING'
     */
    const VALUE_PENDING = 'PENDING';
    /**
     * Constant for value 'EXPIRED'
     * @return string 'EXPIRED'
     */
    const VALUE_EXPIRED = 'EXPIRED';
    /**
     * Constant for value 'USED'
     * @return string 'USED'
     */
    const VALUE_USED = 'USED';
    /**
     * Return allowed values
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_USED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PENDING,
            self::VALUE_EXPIRED,
            self::VALUE_USED,
        ];
    }
}
