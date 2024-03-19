<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareMidocoSettlementRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: prepare the midoco settlement - generates companies list
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrepareMidocoSettlementRequest extends AbstractStructBase
{
    /**
     * The month
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $month;
    /**
     * Constructor method for PrepareMidocoSettlementRequest
     * @uses PrepareMidocoSettlementRequest::setMonth()
     * @param string $month
     */
    public function __construct(string $month)
    {
        $this
            ->setMonth($month);
    }
    /**
     * Get month value
     * @return string
     */
    public function getMonth(): string
    {
        return $this->month;
    }
    /**
     * Set month value
     * @uses \Pggns\MidocoApi\Order\EnumType\Month::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Month::getValidValues()
     * @throws InvalidArgumentException
     * @param string $month
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMidocoSettlementRequest
     */
    public function setMonth(string $month): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Month::valueIsValid($month)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Month', is_array($month) ? implode(', ', $month) : var_export($month, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Month::getValidValues())), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
}
