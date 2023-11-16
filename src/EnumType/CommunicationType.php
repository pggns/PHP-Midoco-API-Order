<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CommunicationType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type of the communication (TELEPHONE, FAX, MOBILE, BUSINESS-PHONE, EMAIL etc).
 * @subpackage Enumerations
 */
class CommunicationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FAX'
     * @return string 'FAX'
     */
    const VALUE_FAX = 'FAX';
    /**
     * Constant for value 'EMAIL'
     * @return string 'EMAIL'
     */
    const VALUE_EMAIL = 'EMAIL';
    /**
     * Constant for value 'PHONE'
     * @return string 'PHONE'
     */
    const VALUE_PHONE = 'PHONE';
    /**
     * Constant for value 'MOBILE'
     * @return string 'MOBILE'
     */
    const VALUE_MOBILE = 'MOBILE';
    /**
     * Constant for value 'BUSINESS-PHONE'
     * @return string 'BUSINESS-PHONE'
     */
    const VALUE_BUSINESS_PHONE = 'BUSINESS-PHONE';
    /**
     * Constant for value 'WEB'
     * @return string 'WEB'
     */
    const VALUE_WEB = 'WEB';
    /**
     * Return allowed values
     * @uses self::VALUE_FAX
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_PHONE
     * @uses self::VALUE_MOBILE
     * @uses self::VALUE_BUSINESS_PHONE
     * @uses self::VALUE_WEB
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FAX,
            self::VALUE_EMAIL,
            self::VALUE_PHONE,
            self::VALUE_MOBILE,
            self::VALUE_BUSINESS_PHONE,
            self::VALUE_WEB,
        ];
    }
}
