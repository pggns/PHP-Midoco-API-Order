<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ticket-subtype EnumType
 * Meta information extracted from the WSDL
 * - documentation: MCO Subtypes: PTA, AIR_TRANS - Air transportation, SURF_TRANS - Surface transportation, BAG_CARGO - Bag cargo, LAND_ARR - Land arrangements, CAR_HIRE - Car hire, SLEEPER - Sleeper Berth, UPGRADING - Upgrading class, UNDER_COLL -
 * Under Collections, CHARGES - Charges, DEPOSITS - Deposits Down Payments, REFUNDABLE - Refundable Balances, HOTEL - Hotel, SUNDRY - Sundry charges, CANCEL - Cancellation, OTHER - Other, RB_DOM - Rebooking DOM, RB_DOM_VAT - Rebooking DOM With VAT,
 * RB_NO_VAT - Rebooking No VAT, RB_INT - Rebooking int LOST - Lost, UM_FEE_DOM - UN Fee DOM, UM_FEE_INT - UM Fee INT, BAGGAGE - Excess Baggage, DEP_FEE - Deposit Fee, TRANSIT - Transit, INDIVIDUAL - Individual INFLI_SERV - EMD_TYPE_IN_FLIGHT_SERVICES
 * @subpackage Enumerations
 */
class Ticket_subtype extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PTA'
     * @return string 'PTA'
     */
    const VALUE_PTA = 'PTA';
    /**
     * Constant for value 'AIR_TRANS'
     * @return string 'AIR_TRANS'
     */
    const VALUE_AIR_TRANS = 'AIR_TRANS';
    /**
     * Constant for value 'SURF_TRANS'
     * @return string 'SURF_TRANS'
     */
    const VALUE_SURF_TRANS = 'SURF_TRANS';
    /**
     * Constant for value 'BAG_CARGO'
     * @return string 'BAG_CARGO'
     */
    const VALUE_BAG_CARGO = 'BAG_CARGO';
    /**
     * Constant for value 'LAND_ARR'
     * @return string 'LAND_ARR'
     */
    const VALUE_LAND_ARR = 'LAND_ARR';
    /**
     * Constant for value 'CAR_HIRE'
     * @return string 'CAR_HIRE'
     */
    const VALUE_CAR_HIRE = 'CAR_HIRE';
    /**
     * Constant for value 'SLEEPER'
     * @return string 'SLEEPER'
     */
    const VALUE_SLEEPER = 'SLEEPER';
    /**
     * Constant for value 'UPGRADING'
     * @return string 'UPGRADING'
     */
    const VALUE_UPGRADING = 'UPGRADING';
    /**
     * Constant for value 'UNDER_COLL'
     * @return string 'UNDER_COLL'
     */
    const VALUE_UNDER_COLL = 'UNDER_COLL';
    /**
     * Constant for value 'CHARGES'
     * @return string 'CHARGES'
     */
    const VALUE_CHARGES = 'CHARGES';
    /**
     * Constant for value 'DEPOSITS'
     * @return string 'DEPOSITS'
     */
    const VALUE_DEPOSITS = 'DEPOSITS';
    /**
     * Constant for value 'REFUNDABLE'
     * @return string 'REFUNDABLE'
     */
    const VALUE_REFUNDABLE = 'REFUNDABLE';
    /**
     * Constant for value 'HOTEL'
     * @return string 'HOTEL'
     */
    const VALUE_HOTEL = 'HOTEL';
    /**
     * Constant for value 'SUNDRY'
     * @return string 'SUNDRY'
     */
    const VALUE_SUNDRY = 'SUNDRY';
    /**
     * Constant for value 'CANCEL'
     * @return string 'CANCEL'
     */
    const VALUE_CANCEL = 'CANCEL';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'RB_DOM'
     * @return string 'RB_DOM'
     */
    const VALUE_RB_DOM = 'RB_DOM';
    /**
     * Constant for value 'RB_DOM_VAT'
     * @return string 'RB_DOM_VAT'
     */
    const VALUE_RB_DOM_VAT = 'RB_DOM_VAT';
    /**
     * Constant for value 'RB_NO_VAT'
     * @return string 'RB_NO_VAT'
     */
    const VALUE_RB_NO_VAT = 'RB_NO_VAT';
    /**
     * Constant for value 'RB_INT'
     * @return string 'RB_INT'
     */
    const VALUE_RB_INT = 'RB_INT';
    /**
     * Constant for value 'LOST'
     * @return string 'LOST'
     */
    const VALUE_LOST = 'LOST';
    /**
     * Constant for value 'UM_FEE_DOM'
     * @return string 'UM_FEE_DOM'
     */
    const VALUE_UM_FEE_DOM = 'UM_FEE_DOM';
    /**
     * Constant for value 'UM_FEE_INT'
     * @return string 'UM_FEE_INT'
     */
    const VALUE_UM_FEE_INT = 'UM_FEE_INT';
    /**
     * Constant for value 'BAGGAGE'
     * @return string 'BAGGAGE'
     */
    const VALUE_BAGGAGE = 'BAGGAGE';
    /**
     * Constant for value 'DEP_FEE'
     * @return string 'DEP_FEE'
     */
    const VALUE_DEP_FEE = 'DEP_FEE';
    /**
     * Constant for value 'TRANSIT'
     * @return string 'TRANSIT'
     */
    const VALUE_TRANSIT = 'TRANSIT';
    /**
     * Constant for value 'INDIVIDUAL'
     * @return string 'INDIVIDUAL'
     */
    const VALUE_INDIVIDUAL = 'INDIVIDUAL';
    /**
     * Constant for value 'INFLI_SERV'
     * @return string 'INFLI_SERV'
     */
    const VALUE_INFLI_SERV = 'INFLI_SERV';
    /**
     * Constant for value 'FIN_IMP'
     * @return string 'FIN_IMP'
     */
    const VALUE_FIN_IMP = 'FIN_IMP';
    /**
     * Constant for value 'AIRP_SERV'
     * @return string 'AIRP_SERV'
     */
    const VALUE_AIRP_SERV = 'AIRP_SERV';
    /**
     * Constant for value 'MERCHAND'
     * @return string 'MERCHAND'
     */
    const VALUE_MERCHAND = 'MERCHAND';
    /**
     * Return allowed values
     * @uses self::VALUE_PTA
     * @uses self::VALUE_AIR_TRANS
     * @uses self::VALUE_SURF_TRANS
     * @uses self::VALUE_BAG_CARGO
     * @uses self::VALUE_LAND_ARR
     * @uses self::VALUE_CAR_HIRE
     * @uses self::VALUE_SLEEPER
     * @uses self::VALUE_UPGRADING
     * @uses self::VALUE_UNDER_COLL
     * @uses self::VALUE_CHARGES
     * @uses self::VALUE_DEPOSITS
     * @uses self::VALUE_REFUNDABLE
     * @uses self::VALUE_HOTEL
     * @uses self::VALUE_SUNDRY
     * @uses self::VALUE_CANCEL
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_RB_DOM
     * @uses self::VALUE_RB_DOM_VAT
     * @uses self::VALUE_RB_NO_VAT
     * @uses self::VALUE_RB_INT
     * @uses self::VALUE_LOST
     * @uses self::VALUE_UM_FEE_DOM
     * @uses self::VALUE_UM_FEE_INT
     * @uses self::VALUE_BAGGAGE
     * @uses self::VALUE_DEP_FEE
     * @uses self::VALUE_TRANSIT
     * @uses self::VALUE_INDIVIDUAL
     * @uses self::VALUE_INFLI_SERV
     * @uses self::VALUE_FIN_IMP
     * @uses self::VALUE_AIRP_SERV
     * @uses self::VALUE_MERCHAND
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PTA,
            self::VALUE_AIR_TRANS,
            self::VALUE_SURF_TRANS,
            self::VALUE_BAG_CARGO,
            self::VALUE_LAND_ARR,
            self::VALUE_CAR_HIRE,
            self::VALUE_SLEEPER,
            self::VALUE_UPGRADING,
            self::VALUE_UNDER_COLL,
            self::VALUE_CHARGES,
            self::VALUE_DEPOSITS,
            self::VALUE_REFUNDABLE,
            self::VALUE_HOTEL,
            self::VALUE_SUNDRY,
            self::VALUE_CANCEL,
            self::VALUE_OTHER,
            self::VALUE_RB_DOM,
            self::VALUE_RB_DOM_VAT,
            self::VALUE_RB_NO_VAT,
            self::VALUE_RB_INT,
            self::VALUE_LOST,
            self::VALUE_UM_FEE_DOM,
            self::VALUE_UM_FEE_INT,
            self::VALUE_BAGGAGE,
            self::VALUE_DEP_FEE,
            self::VALUE_TRANSIT,
            self::VALUE_INDIVIDUAL,
            self::VALUE_INFLI_SERV,
            self::VALUE_FIN_IMP,
            self::VALUE_AIRP_SERV,
            self::VALUE_MERCHAND,
        ];
    }
}
