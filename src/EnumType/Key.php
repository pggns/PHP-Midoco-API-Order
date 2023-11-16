<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for key EnumType
 * @subpackage Enumerations
 */
class Key extends AbstractStructEnumBase
{
    /**
     * Constant for value 'COST_CENTRE'
     * @return string 'COST_CENTRE'
     */
    const VALUE_COST_CENTRE = 'COST_CENTRE';
    /**
     * Constant for value 'CUST_COSTCENT'
     * @return string 'CUST_COSTCENT'
     */
    const VALUE_CUST_COSTCENT = 'CUST_COSTCENT';
    /**
     * Constant for value 'CUST_PERS_NO'
     * @return string 'CUST_PERS_NO'
     */
    const VALUE_CUST_PERS_NO = 'CUST_PERS_NO';
    /**
     * Constant for value 'CUST_PROJ_NO'
     * @return string 'CUST_PROJ_NO'
     */
    const VALUE_CUST_PROJ_NO = 'CUST_PROJ_NO';
    /**
     * Constant for value 'FUNDING'
     * @return string 'FUNDING'
     */
    const VALUE_FUNDING = 'FUNDING';
    /**
     * Constant for value 'ORDERER'
     * @return string 'ORDERER'
     */
    const VALUE_ORDERER = 'ORDERER';
    /**
     * Constant for value 'ORDER_DATE'
     * @return string 'ORDER_DATE'
     */
    const VALUE_ORDER_DATE = 'ORDER_DATE';
    /**
     * Constant for value 'ORDER_NO'
     * @return string 'ORDER_NO'
     */
    const VALUE_ORDER_NO = 'ORDER_NO';
    /**
     * Constant for value 'REMARK1'
     * @return string 'REMARK1'
     */
    const VALUE_REMARK_1 = 'REMARK1';
    /**
     * Constant for value 'REMARK2'
     * @return string 'REMARK2'
     */
    const VALUE_REMARK_2 = 'REMARK2';
    /**
     * Constant for value 'REMARK3'
     * @return string 'REMARK3'
     */
    const VALUE_REMARK_3 = 'REMARK3';
    /**
     * Constant for value 'TRAVELLER'
     * @return string 'TRAVELLER'
     */
    const VALUE_TRAVELLER = 'TRAVELLER';
    /**
     * Constant for value 'TRAVEL_DATE'
     * @return string 'TRAVEL_DATE'
     */
    const VALUE_TRAVEL_DATE = 'TRAVEL_DATE';
    /**
     * Return allowed values
     * @uses self::VALUE_COST_CENTRE
     * @uses self::VALUE_CUST_COSTCENT
     * @uses self::VALUE_CUST_PERS_NO
     * @uses self::VALUE_CUST_PROJ_NO
     * @uses self::VALUE_FUNDING
     * @uses self::VALUE_ORDERER
     * @uses self::VALUE_ORDER_DATE
     * @uses self::VALUE_ORDER_NO
     * @uses self::VALUE_REMARK_1
     * @uses self::VALUE_REMARK_2
     * @uses self::VALUE_REMARK_3
     * @uses self::VALUE_TRAVELLER
     * @uses self::VALUE_TRAVEL_DATE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_COST_CENTRE,
            self::VALUE_CUST_COSTCENT,
            self::VALUE_CUST_PERS_NO,
            self::VALUE_CUST_PROJ_NO,
            self::VALUE_FUNDING,
            self::VALUE_ORDERER,
            self::VALUE_ORDER_DATE,
            self::VALUE_ORDER_NO,
            self::VALUE_REMARK_1,
            self::VALUE_REMARK_2,
            self::VALUE_REMARK_3,
            self::VALUE_TRAVELLER,
            self::VALUE_TRAVEL_DATE,
        ];
    }
}
