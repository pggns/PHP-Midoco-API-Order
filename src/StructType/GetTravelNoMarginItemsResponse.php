<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNoMarginItemsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelNoMarginItemsResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelNoMarginBuyItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNoMarginBuyItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem[]
     */
    protected ?array $MidocoTravelNoMarginBuyItem = null;
    /**
     * The MidocoTravelNoMarginSaleItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNoMarginSaleItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem[]
     */
    protected ?array $MidocoTravelNoMarginSaleItem = null;
    /**
     * Constructor method for GetTravelNoMarginItemsResponse
     * @uses GetTravelNoMarginItemsResponse::setMidocoTravelNoMarginBuyItem()
     * @uses GetTravelNoMarginItemsResponse::setMidocoTravelNoMarginSaleItem()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem[] $midocoTravelNoMarginBuyItem
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem[] $midocoTravelNoMarginSaleItem
     */
    public function __construct(?array $midocoTravelNoMarginBuyItem = null, ?array $midocoTravelNoMarginSaleItem = null)
    {
        $this
            ->setMidocoTravelNoMarginBuyItem($midocoTravelNoMarginBuyItem)
            ->setMidocoTravelNoMarginSaleItem($midocoTravelNoMarginSaleItem);
    }
    /**
     * Get MidocoTravelNoMarginBuyItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem[]
     */
    public function getMidocoTravelNoMarginBuyItem(): ?array
    {
        return $this->MidocoTravelNoMarginBuyItem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTravelNoMarginBuyItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNoMarginBuyItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNoMarginBuyItemForArrayConstraintFromSetMidocoTravelNoMarginBuyItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelNoMarginItemsResponseMidocoTravelNoMarginBuyItemItem) {
            // validation for constraint: itemType
            if (!$getTravelNoMarginItemsResponseMidocoTravelNoMarginBuyItemItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem) {
                $invalidValues[] = is_object($getTravelNoMarginItemsResponseMidocoTravelNoMarginBuyItemItem) ? get_class($getTravelNoMarginItemsResponseMidocoTravelNoMarginBuyItemItem) : sprintf('%s(%s)', gettype($getTravelNoMarginItemsResponseMidocoTravelNoMarginBuyItemItem), var_export($getTravelNoMarginItemsResponseMidocoTravelNoMarginBuyItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelNoMarginBuyItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelNoMarginBuyItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem[] $midocoTravelNoMarginBuyItem
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNoMarginItemsResponse
     */
    public function setMidocoTravelNoMarginBuyItem(?array $midocoTravelNoMarginBuyItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNoMarginBuyItemArrayErrorMessage = self::validateMidocoTravelNoMarginBuyItemForArrayConstraintFromSetMidocoTravelNoMarginBuyItem($midocoTravelNoMarginBuyItem))) {
            throw new InvalidArgumentException($midocoTravelNoMarginBuyItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNoMarginBuyItem = $midocoTravelNoMarginBuyItem;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNoMarginBuyItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNoMarginItemsResponse
     */
    public function addToMidocoTravelNoMarginBuyItem(\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelNoMarginBuyItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelNoMarginBuyItem[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTravelNoMarginSaleItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem[]
     */
    public function getMidocoTravelNoMarginSaleItem(): ?array
    {
        return $this->MidocoTravelNoMarginSaleItem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTravelNoMarginSaleItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNoMarginSaleItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNoMarginSaleItemForArrayConstraintFromSetMidocoTravelNoMarginSaleItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelNoMarginItemsResponseMidocoTravelNoMarginSaleItemItem) {
            // validation for constraint: itemType
            if (!$getTravelNoMarginItemsResponseMidocoTravelNoMarginSaleItemItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem) {
                $invalidValues[] = is_object($getTravelNoMarginItemsResponseMidocoTravelNoMarginSaleItemItem) ? get_class($getTravelNoMarginItemsResponseMidocoTravelNoMarginSaleItemItem) : sprintf('%s(%s)', gettype($getTravelNoMarginItemsResponseMidocoTravelNoMarginSaleItemItem), var_export($getTravelNoMarginItemsResponseMidocoTravelNoMarginSaleItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelNoMarginSaleItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelNoMarginSaleItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem[] $midocoTravelNoMarginSaleItem
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNoMarginItemsResponse
     */
    public function setMidocoTravelNoMarginSaleItem(?array $midocoTravelNoMarginSaleItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNoMarginSaleItemArrayErrorMessage = self::validateMidocoTravelNoMarginSaleItemForArrayConstraintFromSetMidocoTravelNoMarginSaleItem($midocoTravelNoMarginSaleItem))) {
            throw new InvalidArgumentException($midocoTravelNoMarginSaleItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNoMarginSaleItem = $midocoTravelNoMarginSaleItem;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNoMarginSaleItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNoMarginItemsResponse
     */
    public function addToMidocoTravelNoMarginSaleItem(\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelNoMarginSaleItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelNoMarginSaleItem[] = $item;
        
        return $this;
    }
}
