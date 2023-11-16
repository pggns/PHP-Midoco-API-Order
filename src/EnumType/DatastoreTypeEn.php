<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DatastoreTypeEn EnumType
 * @subpackage Enumerations
 */
class DatastoreTypeEn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CRM'
     * @return string 'CRM'
     */
    const VALUE_CRM = 'CRM';
    /**
     * Constant for value 'CRMSD'
     * @return string 'CRMSD'
     */
    const VALUE_CRMSD = 'CRMSD';
    /**
     * Constant for value 'DOCUMENTS'
     * @return string 'DOCUMENTS'
     */
    const VALUE_DOCUMENTS = 'DOCUMENTS';
    /**
     * Constant for value 'DOCARCHIVE'
     * @return string 'DOCARCHIVE'
     */
    const VALUE_DOCARCHIVE = 'DOCARCHIVE';
    /**
     * Constant for value 'LOG'
     * @return string 'LOG'
     */
    const VALUE_LOG = 'LOG';
    /**
     * Constant for value 'MIS'
     * @return string 'MIS'
     */
    const VALUE_MIS = 'MIS';
    /**
     * Constant for value 'ORDER'
     * @return string 'ORDER'
     */
    const VALUE_ORDER = 'ORDER';
    /**
     * Constant for value 'ORDERSD'
     * @return string 'ORDERSD'
     */
    const VALUE_ORDERSD = 'ORDERSD';
    /**
     * Constant for value 'INSURANCE'
     * @return string 'INSURANCE'
     */
    const VALUE_INSURANCE = 'INSURANCE';
    /**
     * Constant for value 'INSURANCESD'
     * @return string 'INSURANCESD'
     */
    const VALUE_INSURANCESD = 'INSURANCESD';
    /**
     * Constant for value 'WORKFLOW'
     * @return string 'WORKFLOW'
     */
    const VALUE_WORKFLOW = 'WORKFLOW';
    /**
     * Return allowed values
     * @uses self::VALUE_CRM
     * @uses self::VALUE_CRMSD
     * @uses self::VALUE_DOCUMENTS
     * @uses self::VALUE_DOCARCHIVE
     * @uses self::VALUE_LOG
     * @uses self::VALUE_MIS
     * @uses self::VALUE_ORDER
     * @uses self::VALUE_ORDERSD
     * @uses self::VALUE_INSURANCE
     * @uses self::VALUE_INSURANCESD
     * @uses self::VALUE_WORKFLOW
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CRM,
            self::VALUE_CRMSD,
            self::VALUE_DOCUMENTS,
            self::VALUE_DOCARCHIVE,
            self::VALUE_LOG,
            self::VALUE_MIS,
            self::VALUE_ORDER,
            self::VALUE_ORDERSD,
            self::VALUE_INSURANCE,
            self::VALUE_INSURANCESD,
            self::VALUE_WORKFLOW,
        ];
    }
}
