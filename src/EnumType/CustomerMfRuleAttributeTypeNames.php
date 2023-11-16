<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CustomerMfRuleAttributeTypeNames EnumType
 * @subpackage Enumerations
 */
class CustomerMfRuleAttributeTypeNames extends AbstractStructEnumBase
{
    /**
     * Constant for value 'mediatorId'
     * @return string 'mediatorId'
     */
    const VALUE_MEDIATOR_ID = 'mediatorId';
    /**
     * Return allowed values
     * @uses self::VALUE_MEDIATOR_ID
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MEDIATOR_ID,
        ];
    }
}
