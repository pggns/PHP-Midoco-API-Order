<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ticket-category EnumType
 * Meta information extracted from the WSDL
 * - documentation: used to specify the ticket category
 * @subpackage Enumerations
 */
class Ticket_category extends AbstractStructEnumBase
{
    /**
     * Constant for value 'STANDARD_DOMESTIC'
     * @return string 'STANDARD_DOMESTIC'
     */
    const VALUE_STANDARD_DOMESTIC = 'STANDARD_DOMESTIC';
    /**
     * Constant for value 'STANDARD_ABROAD'
     * @return string 'STANDARD_ABROAD'
     */
    const VALUE_STANDARD_ABROAD = 'STANDARD_ABROAD';
    /**
     * Constant for value 'BAHN_TIX_DOMESTIC'
     * @return string 'BAHN_TIX_DOMESTIC'
     */
    const VALUE_BAHN_TIX_DOMESTIC = 'BAHN_TIX_DOMESTIC';
    /**
     * Constant for value 'BAHN_TIX_ABROAD'
     * @return string 'BAHN_TIX_ABROAD'
     */
    const VALUE_BAHN_TIX_ABROAD = 'BAHN_TIX_ABROAD';
    /**
     * Constant for value 'RIT_STANDARD'
     * @return string 'RIT_STANDARD'
     */
    const VALUE_RIT_STANDARD = 'RIT_STANDARD';
    /**
     * Constant for value 'RIT_BAHN_TIX'
     * @return string 'RIT_BAHN_TIX'
     */
    const VALUE_RIT_BAHN_TIX = 'RIT_BAHN_TIX';
    /**
     * Constant for value 'STANDARD_ONLINE'
     * @return string 'STANDARD_ONLINE'
     */
    const VALUE_STANDARD_ONLINE = 'STANDARD_ONLINE';
    /**
     * Constant for value 'STANDARD_ONLINE_ABROAD'
     * @return string 'STANDARD_ONLINE_ABROAD'
     */
    const VALUE_STANDARD_ONLINE_ABROAD = 'STANDARD_ONLINE_ABROAD';
    /**
     * Constant for value 'LOCAL_TRAIN'
     * @return string 'LOCAL_TRAIN'
     */
    const VALUE_LOCAL_TRAIN = 'LOCAL_TRAIN';
    /**
     * Constant for value 'PLACE_RESERVATION_EPA'
     * @return string 'PLACE_RESERVATION_EPA'
     */
    const VALUE_PLACE_RESERVATION_EPA = 'PLACE_RESERVATION_EPA';
    /**
     * Constant for value 'PLACE_RESERVATION_ONLINE'
     * @return string 'PLACE_RESERVATION_ONLINE'
     */
    const VALUE_PLACE_RESERVATION_ONLINE = 'PLACE_RESERVATION_ONLINE';
    /**
     * Constant for value 'PLACE_RESERVATION_BAHN_TIX'
     * @return string 'PLACE_RESERVATION_BAHN_TIX'
     */
    const VALUE_PLACE_RESERVATION_BAHN_TIX = 'PLACE_RESERVATION_BAHN_TIX';
    /**
     * Constant for value 'DOMESTIC_STANDARD_REFUND'
     * @return string 'DOMESTIC_STANDARD_REFUND'
     */
    const VALUE_DOMESTIC_STANDARD_REFUND = 'DOMESTIC_STANDARD_REFUND';
    /**
     * Constant for value 'ABROAD_STANDARD_REFUND'
     * @return string 'ABROAD_STANDARD_REFUND'
     */
    const VALUE_ABROAD_STANDARD_REFUND = 'ABROAD_STANDARD_REFUND';
    /**
     * Constant for value 'RIT_REFUND'
     * @return string 'RIT_REFUND'
     */
    const VALUE_RIT_REFUND = 'RIT_REFUND';
    /**
     * Constant for value 'ONLINE_REFUND'
     * @return string 'ONLINE_REFUND'
     */
    const VALUE_ONLINE_REFUND = 'ONLINE_REFUND';
    /**
     * Constant for value 'BAHN_TIX_REFUND'
     * @return string 'BAHN_TIX_REFUND'
     */
    const VALUE_BAHN_TIX_REFUND = 'BAHN_TIX_REFUND';
    /**
     * Constant for value 'DOMESTIC_REIMBURSMENT'
     * @return string 'DOMESTIC_REIMBURSMENT'
     */
    const VALUE_DOMESTIC_REIMBURSMENT = 'DOMESTIC_REIMBURSMENT';
    /**
     * Constant for value 'ABROAD_REIMBURSMENT'
     * @return string 'ABROAD_REIMBURSMENT'
     */
    const VALUE_ABROAD_REIMBURSMENT = 'ABROAD_REIMBURSMENT';
    /**
     * Constant for value 'EXCHANGE_FEE'
     * @return string 'EXCHANGE_FEE'
     */
    const VALUE_EXCHANGE_FEE = 'EXCHANGE_FEE';
    /**
     * Constant for value 'STANDARD_REDUCTION_MARKUP'
     * @return string 'STANDARD_REDUCTION_MARKUP'
     */
    const VALUE_STANDARD_REDUCTION_MARKUP = 'STANDARD_REDUCTION_MARKUP';
    /**
     * Constant for value 'VOID_REDUCTION_MARKUP'
     * @return string 'VOID_REDUCTION_MARKUP'
     */
    const VALUE_VOID_REDUCTION_MARKUP = 'VOID_REDUCTION_MARKUP';
    /**
     * Constant for value 'PARTIAL_PAYMENT_VOUCHER'
     * @return string 'PARTIAL_PAYMENT_VOUCHER'
     */
    const VALUE_PARTIAL_PAYMENT_VOUCHER = 'PARTIAL_PAYMENT_VOUCHER';
    /**
     * Constant for value 'MC_CREDIT_CARD_PAYMENT'
     * @return string 'MC_CREDIT_CARD_PAYMENT'
     */
    const VALUE_MC_CREDIT_CARD_PAYMENT = 'MC_CREDIT_CARD_PAYMENT';
    /**
     * Constant for value 'DC_CREDIT_CARD_PAYMENT'
     * @return string 'DC_CREDIT_CARD_PAYMENT'
     */
    const VALUE_DC_CREDIT_CARD_PAYMENT = 'DC_CREDIT_CARD_PAYMENT';
    /**
     * Constant for value 'VI_CREDIT_CARD_PAYMENT'
     * @return string 'VI_CREDIT_CARD_PAYMENT'
     */
    const VALUE_VI_CREDIT_CARD_PAYMENT = 'VI_CREDIT_CARD_PAYMENT';
    /**
     * Constant for value 'AX_CREDIT_CARD_PAYMENT'
     * @return string 'AX_CREDIT_CARD_PAYMENT'
     */
    const VALUE_AX_CREDIT_CARD_PAYMENT = 'AX_CREDIT_CARD_PAYMENT';
    /**
     * Constant for value 'TP_CREDIT_CARD_PAYMENT'
     * @return string 'TP_CREDIT_CARD_PAYMENT'
     */
    const VALUE_TP_CREDIT_CARD_PAYMENT = 'TP_CREDIT_CARD_PAYMENT';
    /**
     * Constant for value 'JP_CREDIT_CARD_PAYMENT'
     * @return string 'JP_CREDIT_CARD_PAYMENT'
     */
    const VALUE_JP_CREDIT_CARD_PAYMENT = 'JP_CREDIT_CARD_PAYMENT';
    /**
     * Constant for value 'CC_PAYMENT_FEE'
     * @return string 'CC_PAYMENT_FEE'
     */
    const VALUE_CC_PAYMENT_FEE = 'CC_PAYMENT_FEE';
    /**
     * Constant for value 'CC_PAYMENT_FEE_REFUND'
     * @return string 'CC_PAYMENT_FEE_REFUND'
     */
    const VALUE_CC_PAYMENT_FEE_REFUND = 'CC_PAYMENT_FEE_REFUND';
    /**
     * Constant for value 'ROUT'
     * @return string 'ROUT'
     */
    const VALUE_ROUT = 'ROUT';
    /**
     * Return allowed values
     * @uses self::VALUE_STANDARD_DOMESTIC
     * @uses self::VALUE_STANDARD_ABROAD
     * @uses self::VALUE_BAHN_TIX_DOMESTIC
     * @uses self::VALUE_BAHN_TIX_ABROAD
     * @uses self::VALUE_RIT_STANDARD
     * @uses self::VALUE_RIT_BAHN_TIX
     * @uses self::VALUE_STANDARD_ONLINE
     * @uses self::VALUE_STANDARD_ONLINE_ABROAD
     * @uses self::VALUE_LOCAL_TRAIN
     * @uses self::VALUE_PLACE_RESERVATION_EPA
     * @uses self::VALUE_PLACE_RESERVATION_ONLINE
     * @uses self::VALUE_PLACE_RESERVATION_BAHN_TIX
     * @uses self::VALUE_DOMESTIC_STANDARD_REFUND
     * @uses self::VALUE_ABROAD_STANDARD_REFUND
     * @uses self::VALUE_RIT_REFUND
     * @uses self::VALUE_ONLINE_REFUND
     * @uses self::VALUE_BAHN_TIX_REFUND
     * @uses self::VALUE_DOMESTIC_REIMBURSMENT
     * @uses self::VALUE_ABROAD_REIMBURSMENT
     * @uses self::VALUE_EXCHANGE_FEE
     * @uses self::VALUE_STANDARD_REDUCTION_MARKUP
     * @uses self::VALUE_VOID_REDUCTION_MARKUP
     * @uses self::VALUE_PARTIAL_PAYMENT_VOUCHER
     * @uses self::VALUE_MC_CREDIT_CARD_PAYMENT
     * @uses self::VALUE_DC_CREDIT_CARD_PAYMENT
     * @uses self::VALUE_VI_CREDIT_CARD_PAYMENT
     * @uses self::VALUE_AX_CREDIT_CARD_PAYMENT
     * @uses self::VALUE_TP_CREDIT_CARD_PAYMENT
     * @uses self::VALUE_JP_CREDIT_CARD_PAYMENT
     * @uses self::VALUE_CC_PAYMENT_FEE
     * @uses self::VALUE_CC_PAYMENT_FEE_REFUND
     * @uses self::VALUE_ROUT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STANDARD_DOMESTIC,
            self::VALUE_STANDARD_ABROAD,
            self::VALUE_BAHN_TIX_DOMESTIC,
            self::VALUE_BAHN_TIX_ABROAD,
            self::VALUE_RIT_STANDARD,
            self::VALUE_RIT_BAHN_TIX,
            self::VALUE_STANDARD_ONLINE,
            self::VALUE_STANDARD_ONLINE_ABROAD,
            self::VALUE_LOCAL_TRAIN,
            self::VALUE_PLACE_RESERVATION_EPA,
            self::VALUE_PLACE_RESERVATION_ONLINE,
            self::VALUE_PLACE_RESERVATION_BAHN_TIX,
            self::VALUE_DOMESTIC_STANDARD_REFUND,
            self::VALUE_ABROAD_STANDARD_REFUND,
            self::VALUE_RIT_REFUND,
            self::VALUE_ONLINE_REFUND,
            self::VALUE_BAHN_TIX_REFUND,
            self::VALUE_DOMESTIC_REIMBURSMENT,
            self::VALUE_ABROAD_REIMBURSMENT,
            self::VALUE_EXCHANGE_FEE,
            self::VALUE_STANDARD_REDUCTION_MARKUP,
            self::VALUE_VOID_REDUCTION_MARKUP,
            self::VALUE_PARTIAL_PAYMENT_VOUCHER,
            self::VALUE_MC_CREDIT_CARD_PAYMENT,
            self::VALUE_DC_CREDIT_CARD_PAYMENT,
            self::VALUE_VI_CREDIT_CARD_PAYMENT,
            self::VALUE_AX_CREDIT_CARD_PAYMENT,
            self::VALUE_TP_CREDIT_CARD_PAYMENT,
            self::VALUE_JP_CREDIT_CARD_PAYMENT,
            self::VALUE_CC_PAYMENT_FEE,
            self::VALUE_CC_PAYMENT_FEE_REFUND,
            self::VALUE_ROUT,
        ];
    }
}
