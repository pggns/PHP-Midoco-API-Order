<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateSellItemProvisionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateSellItemProvisionRequest extends AbstractStructBase
{
    /**
     * The SellItemProvision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: SellItemProvision
     * @var \Pggns\MidocoApi\Order\StructType\SellItemProvisionType[]
     */
    protected ?array $SellItemProvision = null;
    /**
     * The MidocoAdviceSettlementDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdviceSettlementDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail[]
     */
    protected ?array $MidocoAdviceSettlementDetail = null;
    /**
     * The event
     * @var string|null
     */
    protected ?string $event = null;
    /**
     * Constructor method for CalculateSellItemProvisionRequest
     * @uses CalculateSellItemProvisionRequest::setSellItemProvision()
     * @uses CalculateSellItemProvisionRequest::setMidocoAdviceSettlementDetail()
     * @uses CalculateSellItemProvisionRequest::setEvent()
     * @param \Pggns\MidocoApi\Order\StructType\SellItemProvisionType[] $sellItemProvision
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail[] $midocoAdviceSettlementDetail
     * @param string $event
     */
    public function __construct(?array $sellItemProvision = null, ?array $midocoAdviceSettlementDetail = null, ?string $event = null)
    {
        $this
            ->setSellItemProvision($sellItemProvision)
            ->setMidocoAdviceSettlementDetail($midocoAdviceSettlementDetail)
            ->setEvent($event);
    }
    /**
     * Get SellItemProvision value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType[]
     */
    public function getSellItemProvision(): ?array
    {
        return $this->SellItemProvision;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSellItemProvision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellItemProvision method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellItemProvisionForArrayConstraintFromSetSellItemProvision(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $calculateSellItemProvisionRequestSellItemProvisionItem) {
            // validation for constraint: itemType
            if (!$calculateSellItemProvisionRequestSellItemProvisionItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemProvisionType) {
                $invalidValues[] = is_object($calculateSellItemProvisionRequestSellItemProvisionItem) ? get_class($calculateSellItemProvisionRequestSellItemProvisionItem) : sprintf('%s(%s)', gettype($calculateSellItemProvisionRequestSellItemProvisionItem), var_export($calculateSellItemProvisionRequestSellItemProvisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellItemProvision property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemProvisionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellItemProvision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemProvisionType[] $sellItemProvision
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSellItemProvisionRequest
     */
    public function setSellItemProvision(?array $sellItemProvision = null): self
    {
        // validation for constraint: array
        if ('' !== ($sellItemProvisionArrayErrorMessage = self::validateSellItemProvisionForArrayConstraintFromSetSellItemProvision($sellItemProvision))) {
            throw new InvalidArgumentException($sellItemProvisionArrayErrorMessage, __LINE__);
        }
        $this->SellItemProvision = $sellItemProvision;
        
        return $this;
    }
    /**
     * Add item to SellItemProvision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemProvisionType $item
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSellItemProvisionRequest
     */
    public function addToSellItemProvision(\Pggns\MidocoApi\Order\StructType\SellItemProvisionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SellItemProvisionType) {
            throw new InvalidArgumentException(sprintf('The SellItemProvision property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemProvisionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellItemProvision[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAdviceSettlementDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail[]
     */
    public function getMidocoAdviceSettlementDetail(): ?array
    {
        return $this->MidocoAdviceSettlementDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAdviceSettlementDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdviceSettlementDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdviceSettlementDetailForArrayConstraintFromSetMidocoAdviceSettlementDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $calculateSellItemProvisionRequestMidocoAdviceSettlementDetailItem) {
            // validation for constraint: itemType
            if (!$calculateSellItemProvisionRequestMidocoAdviceSettlementDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail) {
                $invalidValues[] = is_object($calculateSellItemProvisionRequestMidocoAdviceSettlementDetailItem) ? get_class($calculateSellItemProvisionRequestMidocoAdviceSettlementDetailItem) : sprintf('%s(%s)', gettype($calculateSellItemProvisionRequestMidocoAdviceSettlementDetailItem), var_export($calculateSellItemProvisionRequestMidocoAdviceSettlementDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdviceSettlementDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdviceSettlementDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail[] $midocoAdviceSettlementDetail
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSellItemProvisionRequest
     */
    public function setMidocoAdviceSettlementDetail(?array $midocoAdviceSettlementDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdviceSettlementDetailArrayErrorMessage = self::validateMidocoAdviceSettlementDetailForArrayConstraintFromSetMidocoAdviceSettlementDetail($midocoAdviceSettlementDetail))) {
            throw new InvalidArgumentException($midocoAdviceSettlementDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdviceSettlementDetail = $midocoAdviceSettlementDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoAdviceSettlementDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail $item
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSellItemProvisionRequest
     */
    public function addToMidocoAdviceSettlementDetail(\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail) {
            throw new InvalidArgumentException(sprintf('The MidocoAdviceSettlementDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdviceSettlementDetail[] = $item;
        
        return $this;
    }
    /**
     * Get event value
     * @return string|null
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }
    /**
     * Set event value
     * @param string $event
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSellItemProvisionRequest
     */
    public function setEvent(?string $event = null): self
    {
        // validation for constraint: string
        if (!is_null($event) && !is_string($event)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($event, true), gettype($event)), __LINE__);
        }
        $this->event = $event;
        
        return $this;
    }
}
