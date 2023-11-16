<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MidocoCrmCustomerPaymentVatTypeType EnumType
 * @subpackage Enumerations
 */
class MidocoCrmCustomerPaymentVatTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'INLAND_STEUERPFLICHTIG'
     * @return string 'INLAND_STEUERPFLICHTIG'
     */
    const VALUE_INLAND_STEUERPFLICHTIG = 'INLAND_STEUERPFLICHTIG';
    /**
     * Constant for value 'KLEINUNTERNEHMER_INLAND'
     * @return string 'KLEINUNTERNEHMER_INLAND'
     */
    const VALUE_KLEINUNTERNEHMER_INLAND = 'KLEINUNTERNEHMER_INLAND';
    /**
     * Constant for value 'AUSLAND_REVERSE_CHARGE'
     * @return string 'AUSLAND_REVERSE_CHARGE'
     */
    const VALUE_AUSLAND_REVERSE_CHARGE = 'AUSLAND_REVERSE_CHARGE';
    /**
     * Constant for value 'AUSLAND_STEUERFREI'
     * @return string 'AUSLAND_STEUERFREI'
     */
    const VALUE_AUSLAND_STEUERFREI = 'AUSLAND_STEUERFREI';
    /**
     * Constant for value 'ORGANSCHAFT'
     * @return string 'ORGANSCHAFT'
     */
    const VALUE_ORGANSCHAFT = 'ORGANSCHAFT';
    /**
     * Return allowed values
     * @uses self::VALUE_INLAND_STEUERPFLICHTIG
     * @uses self::VALUE_KLEINUNTERNEHMER_INLAND
     * @uses self::VALUE_AUSLAND_REVERSE_CHARGE
     * @uses self::VALUE_AUSLAND_STEUERFREI
     * @uses self::VALUE_ORGANSCHAFT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INLAND_STEUERPFLICHTIG,
            self::VALUE_KLEINUNTERNEHMER_INLAND,
            self::VALUE_AUSLAND_REVERSE_CHARGE,
            self::VALUE_AUSLAND_STEUERFREI,
            self::VALUE_ORGANSCHAFT,
        ];
    }
}
