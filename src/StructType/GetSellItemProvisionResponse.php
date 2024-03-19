<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemProvisionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSellItemProvisionResponse extends AbstractStructBase
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
     * The MidocoAdviceSettlement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAdviceSettlement
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $MidocoAdviceSettlement = null;
    /**
     * The AdviceSettlementDescriptionsForSellItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem[]
     */
    protected ?array $AdviceSettlementDescriptionsForSellItem = null;
    /**
     * Constructor method for GetSellItemProvisionResponse
     * @uses GetSellItemProvisionResponse::setSellItemProvision()
     * @uses GetSellItemProvisionResponse::setMidocoAdviceSettlement()
     * @uses GetSellItemProvisionResponse::setAdviceSettlementDescriptionsForSellItem()
     * @param \Pggns\MidocoApi\Order\StructType\SellItemProvisionType[] $sellItemProvision
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement
     * @param \Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem[] $adviceSettlementDescriptionsForSellItem
     */
    public function __construct(?array $sellItemProvision = null, ?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement = null, ?array $adviceSettlementDescriptionsForSellItem = null)
    {
        $this
            ->setSellItemProvision($sellItemProvision)
            ->setMidocoAdviceSettlement($midocoAdviceSettlement)
            ->setAdviceSettlementDescriptionsForSellItem($adviceSettlementDescriptionsForSellItem);
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
        foreach ($values as $getSellItemProvisionResponseSellItemProvisionItem) {
            // validation for constraint: itemType
            if (!$getSellItemProvisionResponseSellItemProvisionItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemProvisionType) {
                $invalidValues[] = is_object($getSellItemProvisionResponseSellItemProvisionItem) ? get_class($getSellItemProvisionResponseSellItemProvisionItem) : sprintf('%s(%s)', gettype($getSellItemProvisionResponseSellItemProvisionItem), var_export($getSellItemProvisionResponseSellItemProvisionItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemProvisionResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemProvisionResponse
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
     * Get MidocoAdviceSettlement value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement|null
     */
    public function getMidocoAdviceSettlement(): ?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement
    {
        return $this->MidocoAdviceSettlement;
    }
    /**
     * Set MidocoAdviceSettlement value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemProvisionResponse
     */
    public function setMidocoAdviceSettlement(?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement = null): self
    {
        $this->MidocoAdviceSettlement = $midocoAdviceSettlement;
        
        return $this;
    }
    /**
     * Get AdviceSettlementDescriptionsForSellItem value
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem[]
     */
    public function getAdviceSettlementDescriptionsForSellItem(): ?array
    {
        return $this->AdviceSettlementDescriptionsForSellItem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAdviceSettlementDescriptionsForSellItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdviceSettlementDescriptionsForSellItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdviceSettlementDescriptionsForSellItemForArrayConstraintFromSetAdviceSettlementDescriptionsForSellItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellItemProvisionResponseAdviceSettlementDescriptionsForSellItemItem) {
            // validation for constraint: itemType
            if (!$getSellItemProvisionResponseAdviceSettlementDescriptionsForSellItemItem instanceof \Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem) {
                $invalidValues[] = is_object($getSellItemProvisionResponseAdviceSettlementDescriptionsForSellItemItem) ? get_class($getSellItemProvisionResponseAdviceSettlementDescriptionsForSellItemItem) : sprintf('%s(%s)', gettype($getSellItemProvisionResponseAdviceSettlementDescriptionsForSellItemItem), var_export($getSellItemProvisionResponseAdviceSettlementDescriptionsForSellItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdviceSettlementDescriptionsForSellItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdviceSettlementDescriptionsForSellItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem[] $adviceSettlementDescriptionsForSellItem
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemProvisionResponse
     */
    public function setAdviceSettlementDescriptionsForSellItem(?array $adviceSettlementDescriptionsForSellItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($adviceSettlementDescriptionsForSellItemArrayErrorMessage = self::validateAdviceSettlementDescriptionsForSellItemForArrayConstraintFromSetAdviceSettlementDescriptionsForSellItem($adviceSettlementDescriptionsForSellItem))) {
            throw new InvalidArgumentException($adviceSettlementDescriptionsForSellItemArrayErrorMessage, __LINE__);
        }
        $this->AdviceSettlementDescriptionsForSellItem = $adviceSettlementDescriptionsForSellItem;
        
        return $this;
    }
    /**
     * Add item to AdviceSettlementDescriptionsForSellItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemProvisionResponse
     */
    public function addToAdviceSettlementDescriptionsForSellItem(\Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem) {
            throw new InvalidArgumentException(sprintf('The AdviceSettlementDescriptionsForSellItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdviceSettlementDescriptionsForSellItem[] = $item;
        
        return $this;
    }
}
