<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateSellItemProvisionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateSellItemProvisionResponse extends AbstractStructBase
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
     * Constructor method for CalculateSellItemProvisionResponse
     * @uses CalculateSellItemProvisionResponse::setSellItemProvision()
     * @uses CalculateSellItemProvisionResponse::setMidocoAdviceSettlementDetail()
     * @param \Pggns\MidocoApi\Order\StructType\SellItemProvisionType[] $sellItemProvision
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail[] $midocoAdviceSettlementDetail
     */
    public function __construct(?array $sellItemProvision = null, ?array $midocoAdviceSettlementDetail = null)
    {
        $this
            ->setSellItemProvision($sellItemProvision)
            ->setMidocoAdviceSettlementDetail($midocoAdviceSettlementDetail);
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
        foreach ($values as $calculateSellItemProvisionResponseSellItemProvisionItem) {
            // validation for constraint: itemType
            if (!$calculateSellItemProvisionResponseSellItemProvisionItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemProvisionType) {
                $invalidValues[] = is_object($calculateSellItemProvisionResponseSellItemProvisionItem) ? get_class($calculateSellItemProvisionResponseSellItemProvisionItem) : sprintf('%s(%s)', gettype($calculateSellItemProvisionResponseSellItemProvisionItem), var_export($calculateSellItemProvisionResponseSellItemProvisionItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSellItemProvisionResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSellItemProvisionResponse
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
        foreach ($values as $calculateSellItemProvisionResponseMidocoAdviceSettlementDetailItem) {
            // validation for constraint: itemType
            if (!$calculateSellItemProvisionResponseMidocoAdviceSettlementDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail) {
                $invalidValues[] = is_object($calculateSellItemProvisionResponseMidocoAdviceSettlementDetailItem) ? get_class($calculateSellItemProvisionResponseMidocoAdviceSettlementDetailItem) : sprintf('%s(%s)', gettype($calculateSellItemProvisionResponseMidocoAdviceSettlementDetailItem), var_export($calculateSellItemProvisionResponseMidocoAdviceSettlementDetailItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSellItemProvisionResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSellItemProvisionResponse
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
}
