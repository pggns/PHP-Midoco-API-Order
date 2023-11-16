<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TransportType EnumType
 * @subpackage Enumerations
 */
class TransportType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BUS'
     * @return string 'BUS'
     */
    const VALUE_BUS = 'BUS';
    /**
     * Constant for value 'TRAIN'
     * @return string 'TRAIN'
     */
    const VALUE_TRAIN = 'TRAIN';
    /**
     * Constant for value 'FLIGHT'
     * @return string 'FLIGHT'
     */
    const VALUE_FLIGHT = 'FLIGHT';
    /**
     * Constant for value 'CAR'
     * @return string 'CAR'
     */
    const VALUE_CAR = 'CAR';
    /**
     * Return allowed values
     * @uses self::VALUE_BUS
     * @uses self::VALUE_TRAIN
     * @uses self::VALUE_FLIGHT
     * @uses self::VALUE_CAR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BUS,
            self::VALUE_TRAIN,
            self::VALUE_FLIGHT,
            self::VALUE_CAR,
        ];
    }
}
