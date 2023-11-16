<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MidocoOrgTemplateTextType EnumType
 * @subpackage Enumerations
 */
class MidocoOrgTemplateTextType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FOOTER'
     * @return string 'FOOTER'
     */
    const VALUE_FOOTER = 'FOOTER';
    /**
     * Return allowed values
     * @uses self::VALUE_FOOTER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FOOTER,
        ];
    }
}
