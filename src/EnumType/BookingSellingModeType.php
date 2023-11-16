<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BookingSellingModeType EnumType
 * @subpackage Enumerations
 */
class BookingSellingModeType extends AbstractStructEnumBase
{
    /**
     * Constant for value ''
     * @return string ''
     */
    const VALUE_ = '';
    /**
     * Constant for value 'SINGLE_SERVICE'
     * @return string 'SINGLE_SERVICE'
     */
    const VALUE_SINGLE_SERVICE = 'SINGLE_SERVICE';
    /**
     * Constant for value 'ARRANGEMENT'
     * @return string 'ARRANGEMENT'
     */
    const VALUE_ARRANGEMENT = 'ARRANGEMENT';
    /**
     * Constant for value 'SELF_ARRANGEMENT'
     * @return string 'SELF_ARRANGEMENT'
     */
    const VALUE_SELF_ARRANGEMENT = 'SELF_ARRANGEMENT';
    /**
     * Constant for value 'CONNECTED_SERVICE'
     * @return string 'CONNECTED_SERVICE'
     */
    const VALUE_CONNECTED_SERVICE = 'CONNECTED_SERVICE';
    /**
     * Constant for value 'DAYTRIP'
     * @return string 'DAYTRIP'
     */
    const VALUE_DAYTRIP = 'DAYTRIP';
    /**
     * Constant for value 'EDUCATIONAL'
     * @return string 'EDUCATIONAL'
     */
    const VALUE_EDUCATIONAL = 'EDUCATIONAL';
    /**
     * Constant for value 'LOW_VALUE_ADDON'
     * @return string 'LOW_VALUE_ADDON'
     */
    const VALUE_LOW_VALUE_ADDON = 'LOW_VALUE_ADDON';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'SINGLE_SERVICE_TRANSPORT'
     * @return string 'SINGLE_SERVICE_TRANSPORT'
     */
    const VALUE_SINGLE_SERVICE_TRANSPORT = 'SINGLE_SERVICE_TRANSPORT';
    /**
     * Constant for value 'SINGLE_SERVICE_ACCOMODATION'
     * @return string 'SINGLE_SERVICE_ACCOMODATION'
     */
    const VALUE_SINGLE_SERVICE_ACCOMODATION = 'SINGLE_SERVICE_ACCOMODATION';
    /**
     * Constant for value 'SINGLE_SERVICE_RENTALCAR'
     * @return string 'SINGLE_SERVICE_RENTALCAR'
     */
    const VALUE_SINGLE_SERVICE_RENTALCAR = 'SINGLE_SERVICE_RENTALCAR';
    /**
     * Return allowed values
     * @uses self::VALUE_
     * @uses self::VALUE_SINGLE_SERVICE
     * @uses self::VALUE_ARRANGEMENT
     * @uses self::VALUE_SELF_ARRANGEMENT
     * @uses self::VALUE_CONNECTED_SERVICE
     * @uses self::VALUE_DAYTRIP
     * @uses self::VALUE_EDUCATIONAL
     * @uses self::VALUE_LOW_VALUE_ADDON
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_SINGLE_SERVICE_TRANSPORT
     * @uses self::VALUE_SINGLE_SERVICE_ACCOMODATION
     * @uses self::VALUE_SINGLE_SERVICE_RENTALCAR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_,
            self::VALUE_SINGLE_SERVICE,
            self::VALUE_ARRANGEMENT,
            self::VALUE_SELF_ARRANGEMENT,
            self::VALUE_CONNECTED_SERVICE,
            self::VALUE_DAYTRIP,
            self::VALUE_EDUCATIONAL,
            self::VALUE_LOW_VALUE_ADDON,
            self::VALUE_OTHER,
            self::VALUE_SINGLE_SERVICE_TRANSPORT,
            self::VALUE_SINGLE_SERVICE_ACCOMODATION,
            self::VALUE_SINGLE_SERVICE_RENTALCAR,
        ];
    }
}
