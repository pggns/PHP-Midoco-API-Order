<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ticketType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Normal Ticket, Void, Refund, MCO
 * @subpackage Enumerations
 */
class TicketType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TICKET'
     * @return string 'TICKET'
     */
    const VALUE_TICKET = 'TICKET';
    /**
     * Constant for value 'REFUND'
     * @return string 'REFUND'
     */
    const VALUE_REFUND = 'REFUND';
    /**
     * Constant for value 'VOID'
     * @return string 'VOID'
     */
    const VALUE_VOID = 'VOID';
    /**
     * Constant for value 'MCO'
     * @return string 'MCO'
     */
    const VALUE_MCO = 'MCO';
    /**
     * Constant for value 'EMD'
     * @return string 'EMD'
     */
    const VALUE_EMD = 'EMD';
    /**
     * Constant for value 'ADM'
     * @return string 'ADM'
     */
    const VALUE_ADM = 'ADM';
    /**
     * Constant for value 'ACM'
     * @return string 'ACM'
     */
    const VALUE_ACM = 'ACM';
    /**
     * Constant for value 'TASF'
     * @return string 'TASF'
     */
    const VALUE_TASF = 'TASF';
    /**
     * Return allowed values
     * @uses self::VALUE_TICKET
     * @uses self::VALUE_REFUND
     * @uses self::VALUE_VOID
     * @uses self::VALUE_MCO
     * @uses self::VALUE_EMD
     * @uses self::VALUE_ADM
     * @uses self::VALUE_ACM
     * @uses self::VALUE_TASF
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TICKET,
            self::VALUE_REFUND,
            self::VALUE_VOID,
            self::VALUE_MCO,
            self::VALUE_EMD,
            self::VALUE_ADM,
            self::VALUE_ACM,
            self::VALUE_TASF,
        ];
    }
}
