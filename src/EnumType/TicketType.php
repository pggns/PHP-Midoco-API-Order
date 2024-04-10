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
    const VALUE_REFUND_1 = 'REFUND';
    /**
     * Constant for value 'VOID'
     * @return string 'VOID'
     */
    const VALUE_VOID_1 = 'VOID';
    /**
     * Constant for value 'MCO'
     * @return string 'MCO'
     */
    const VALUE_MCO_1 = 'MCO';
    /**
     * Constant for value 'EMD'
     * @return string 'EMD'
     */
    const VALUE_EMD_1 = 'EMD';
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
     * Constant for value 'VOID_EMD'
     * @return string 'VOID_EMD'
     */
    const VALUE_VOID_EMD = 'VOID_EMD';
    /**
     * Return allowed values
     * @uses self::VALUE_TICKET
     * @uses self::VALUE_REFUND_1
     * @uses self::VALUE_VOID_1
     * @uses self::VALUE_MCO_1
     * @uses self::VALUE_EMD_1
     * @uses self::VALUE_ADM
     * @uses self::VALUE_ACM
     * @uses self::VALUE_TASF
     * @uses self::VALUE_VOID_EMD
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TICKET,
            self::VALUE_REFUND_1,
            self::VALUE_VOID_1,
            self::VALUE_MCO_1,
            self::VALUE_EMD_1,
            self::VALUE_ADM,
            self::VALUE_ACM,
            self::VALUE_TASF,
            self::VALUE_VOID_EMD,
        ];
    }
}
