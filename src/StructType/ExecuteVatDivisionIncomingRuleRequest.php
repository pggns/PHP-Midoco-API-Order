<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteVatDivisionIncomingRuleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteVatDivisionIncomingRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ordersd:MidocoVatCode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoVatCode[]
     */
    protected ?array $MidocoVatCode = null;
    /**
     * The RevenueBookingInfo
     * Meta information extracted from the WSDL
     * - ref: RevenueBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $RevenueBookingInfo = null;
    /**
     * Constructor method for ExecuteVatDivisionIncomingRuleRequest
     * @uses ExecuteVatDivisionIncomingRuleRequest::setMidocoVatCode()
     * @uses ExecuteVatDivisionIncomingRuleRequest::setRevenueBookingInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode[] $midocoVatCode
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo
     */
    public function __construct(?array $midocoVatCode = null, ?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null)
    {
        $this
            ->setMidocoVatCode($midocoVatCode)
            ->setRevenueBookingInfo($revenueBookingInfo);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatCode[]
     */
    public function getMidocoVatCode(): ?array
    {
        return $this->MidocoVatCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVatCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatCodeForArrayConstraintFromSetMidocoVatCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeVatDivisionIncomingRuleRequestMidocoVatCodeItem) {
            // validation for constraint: itemType
            if (!$executeVatDivisionIncomingRuleRequestMidocoVatCodeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoVatCode) {
                $invalidValues[] = is_object($executeVatDivisionIncomingRuleRequestMidocoVatCodeItem) ? get_class($executeVatDivisionIncomingRuleRequestMidocoVatCodeItem) : sprintf('%s(%s)', gettype($executeVatDivisionIncomingRuleRequestMidocoVatCodeItem), var_export($executeVatDivisionIncomingRuleRequestMidocoVatCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVatCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode[] $midocoVatCode
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteVatDivisionIncomingRuleRequest
     */
    public function setMidocoVatCode(?array $midocoVatCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatCodeArrayErrorMessage = self::validateMidocoVatCodeForArrayConstraintFromSetMidocoVatCode($midocoVatCode))) {
            throw new InvalidArgumentException($midocoVatCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
    /**
     * Add item to MidocoVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteVatDivisionIncomingRuleRequest
     */
    public function addToMidocoVatCode(\Pggns\MidocoApi\Order\StructType\MidocoVatCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoVatCode) {
            throw new InvalidArgumentException(sprintf('The MidocoVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVatCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatCode[] = $item;
        
        return $this;
    }
    /**
     * Get RevenueBookingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType|null
     */
    public function getRevenueBookingInfo(): ?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
    {
        return $this->RevenueBookingInfo;
    }
    /**
     * Set RevenueBookingInfo value
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteVatDivisionIncomingRuleRequest
     */
    public function setRevenueBookingInfo(?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null): self
    {
        $this->RevenueBookingInfo = $revenueBookingInfo;
        
        return $this;
    }
}
