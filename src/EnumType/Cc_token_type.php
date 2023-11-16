<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for cc-token-type EnumType
 * @subpackage Enumerations
 */
class Cc_token_type extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MIDOCO_TOKEN'
     * @return string 'MIDOCO_TOKEN'
     */
    const VALUE_MIDOCO_TOKEN = 'MIDOCO_TOKEN';
    /**
     * Constant for value 'BS_TOKEN'
     * @return string 'BS_TOKEN'
     */
    const VALUE_BS_TOKEN = 'BS_TOKEN';
    /**
     * Constant for value 'TT_TOKEN'
     * @return string 'TT_TOKEN'
     */
    const VALUE_TT_TOKEN = 'TT_TOKEN';
    /**
     * Constant for value 'TUI_TOKEN'
     * @return string 'TUI_TOKEN'
     */
    const VALUE_TUI_TOKEN = 'TUI_TOKEN';
    /**
     * Constant for value 'COMPUTOP_TOKEN'
     * @return string 'COMPUTOP_TOKEN'
     */
    const VALUE_COMPUTOP_TOKEN = 'COMPUTOP_TOKEN';
    /**
     * Constant for value 'QUENTA_TOKEN'
     * @return string 'QUENTA_TOKEN'
     */
    const VALUE_QUENTA_TOKEN = 'QUENTA_TOKEN';
    /**
     * Constant for value 'WIRECARD_TOKEN'
     * @return string 'WIRECARD_TOKEN'
     */
    const VALUE_WIRECARD_TOKEN = 'WIRECARD_TOKEN';
    /**
     * Constant for value 'DIVERS_TOKEN'
     * @return string 'DIVERS_TOKEN'
     */
    const VALUE_DIVERS_TOKEN = 'DIVERS_TOKEN';
    /**
     * Constant for value 'YPSILON_TOKEN'
     * @return string 'YPSILON_TOKEN'
     */
    const VALUE_YPSILON_TOKEN = 'YPSILON_TOKEN';
    /**
     * Constant for value 'CONCARDIS_TOKEN'
     * @return string 'CONCARDIS_TOKEN'
     */
    const VALUE_CONCARDIS_TOKEN = 'CONCARDIS_TOKEN';
    /**
     * Constant for value 'QMORE_ZNT_TOKEN'
     * @return string 'QMORE_ZNT_TOKEN'
     */
    const VALUE_QMORE_ZNT_TOKEN = 'QMORE_ZNT_TOKEN';
    /**
     * Constant for value 'UNISTER_TOKEN'
     * @return string 'UNISTER_TOKEN'
     */
    const VALUE_UNISTER_TOKEN = 'UNISTER_TOKEN';
    /**
     * Constant for value 'AERTICKET_TOKEN'
     * @return string 'AERTICKET_TOKEN'
     */
    const VALUE_AERTICKET_TOKEN = 'AERTICKET_TOKEN';
    /**
     * Constant for value 'WIRECARD_EE_TOKEN'
     * @return string 'WIRECARD_EE_TOKEN'
     */
    const VALUE_WIRECARD_EE_TOKEN = 'WIRECARD_EE_TOKEN';
    /**
     * Constant for value 'DATATRANS_TOKEN'
     * @return string 'DATATRANS_TOKEN'
     */
    const VALUE_DATATRANS_TOKEN = 'DATATRANS_TOKEN';
    /**
     * Constant for value 'L3P_TOKEN'
     * @return string 'L3P_TOKEN'
     */
    const VALUE_L_3_P_TOKEN = 'L3P_TOKEN';
    /**
     * Constant for value 'GETNET_TOKEN'
     * @return string 'GETNET_TOKEN'
     */
    const VALUE_GETNET_TOKEN = 'GETNET_TOKEN';
    /**
     * Return allowed values
     * @uses self::VALUE_MIDOCO_TOKEN
     * @uses self::VALUE_BS_TOKEN
     * @uses self::VALUE_TT_TOKEN
     * @uses self::VALUE_TUI_TOKEN
     * @uses self::VALUE_COMPUTOP_TOKEN
     * @uses self::VALUE_QUENTA_TOKEN
     * @uses self::VALUE_WIRECARD_TOKEN
     * @uses self::VALUE_DIVERS_TOKEN
     * @uses self::VALUE_YPSILON_TOKEN
     * @uses self::VALUE_CONCARDIS_TOKEN
     * @uses self::VALUE_QMORE_ZNT_TOKEN
     * @uses self::VALUE_UNISTER_TOKEN
     * @uses self::VALUE_AERTICKET_TOKEN
     * @uses self::VALUE_WIRECARD_EE_TOKEN
     * @uses self::VALUE_DATATRANS_TOKEN
     * @uses self::VALUE_L_3_P_TOKEN
     * @uses self::VALUE_GETNET_TOKEN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MIDOCO_TOKEN,
            self::VALUE_BS_TOKEN,
            self::VALUE_TT_TOKEN,
            self::VALUE_TUI_TOKEN,
            self::VALUE_COMPUTOP_TOKEN,
            self::VALUE_QUENTA_TOKEN,
            self::VALUE_WIRECARD_TOKEN,
            self::VALUE_DIVERS_TOKEN,
            self::VALUE_YPSILON_TOKEN,
            self::VALUE_CONCARDIS_TOKEN,
            self::VALUE_QMORE_ZNT_TOKEN,
            self::VALUE_UNISTER_TOKEN,
            self::VALUE_AERTICKET_TOKEN,
            self::VALUE_WIRECARD_EE_TOKEN,
            self::VALUE_DATATRANS_TOKEN,
            self::VALUE_L_3_P_TOKEN,
            self::VALUE_GETNET_TOKEN,
        ];
    }
}
