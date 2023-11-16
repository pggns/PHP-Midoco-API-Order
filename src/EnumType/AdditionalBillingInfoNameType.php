<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AdditionalBillingInfoNameType EnumType
 * @subpackage Enumerations
 */
class AdditionalBillingInfoNameType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'COST_CENTRE'
     * @return string 'COST_CENTRE'
     */
    const VALUE_COST_CENTRE = 'COST_CENTRE';
    /**
     * Constant for value 'CUSTOMER_COST_CENTRE'
     * @return string 'CUSTOMER_COST_CENTRE'
     */
    const VALUE_CUSTOMER_COST_CENTRE = 'CUSTOMER_COST_CENTRE';
    /**
     * Constant for value 'PROJECT_NUMBER'
     * @return string 'PROJECT_NUMBER'
     */
    const VALUE_PROJECT_NUMBER = 'PROJECT_NUMBER';
    /**
     * Constant for value 'PERSON_NUMBERr'
     * @return string 'PERSON_NUMBERr'
     */
    const VALUE_PERSON_NUMBERR = 'PERSON_NUMBERr';
    /**
     * Constant for value 'FUNDING'
     * @return string 'FUNDING'
     */
    const VALUE_FUNDING = 'FUNDING';
    /**
     * Constant for value 'ORDER_DATE'
     * @return string 'ORDER_DATE'
     */
    const VALUE_ORDER_DATE = 'ORDER_DATE';
    /**
     * Constant for value 'ORDER_NUMBER'
     * @return string 'ORDER_NUMBER'
     */
    const VALUE_ORDER_NUMBER = 'ORDER_NUMBER';
    /**
     * Constant for value 'ORDERER'
     * @return string 'ORDERER'
     */
    const VALUE_ORDERER = 'ORDERER';
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
     * Constant for value 'DESTINATION_CODE'
     * @return string 'DESTINATION_CODE'
     */
    const VALUE_DESTINATION_CODE = 'DESTINATION_CODE';
    /**
     * Constant for value 'DEBTOR_NO'
     * @return string 'DEBTOR_NO'
     */
    const VALUE_DEBTOR_NO = 'DEBTOR_NO';
    /**
     * Return allowed values
     * @uses self::VALUE_COST_CENTRE
     * @uses self::VALUE_CUSTOMER_COST_CENTRE
     * @uses self::VALUE_PROJECT_NUMBER
     * @uses self::VALUE_PERSON_NUMBERR
     * @uses self::VALUE_FUNDING
     * @uses self::VALUE_ORDER_DATE
     * @uses self::VALUE_ORDER_NUMBER
     * @uses self::VALUE_ORDERER
     * @uses self::VALUE_REMARK_1
     * @uses self::VALUE_REMARK_2
     * @uses self::VALUE_DESTINATION_CODE
     * @uses self::VALUE_DEBTOR_NO
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_COST_CENTRE,
            self::VALUE_CUSTOMER_COST_CENTRE,
            self::VALUE_PROJECT_NUMBER,
            self::VALUE_PERSON_NUMBERR,
            self::VALUE_FUNDING,
            self::VALUE_ORDER_DATE,
            self::VALUE_ORDER_NUMBER,
            self::VALUE_ORDERER,
            self::VALUE_REMARK_1,
            self::VALUE_REMARK_2,
            self::VALUE_DESTINATION_CODE,
            self::VALUE_DEBTOR_NO,
        ];
    }
}
