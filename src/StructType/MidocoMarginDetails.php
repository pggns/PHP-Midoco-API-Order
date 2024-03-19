<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMarginDetails StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMarginDetails extends AbstractStructBase
{
    /**
     * The MidocoMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMargin
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMargin|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMargin $MidocoMargin = null;
    /**
     * The MidocoMarginBuyItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMarginBuyItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem[]
     */
    protected ?array $MidocoMarginBuyItem = null;
    /**
     * The MidocoMarginSaleItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMarginSaleItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMarginSaleItem[]
     */
    protected ?array $MidocoMarginSaleItem = null;
    /**
     * The calculatedMarginBrutto
     * @var float|null
     */
    protected ?float $calculatedMarginBrutto = null;
    /**
     * The bookedMarginBrutto
     * @var float|null
     */
    protected ?float $bookedMarginBrutto = null;
    /**
     * Constructor method for MidocoMarginDetails
     * @uses MidocoMarginDetails::setMidocoMargin()
     * @uses MidocoMarginDetails::setMidocoMarginBuyItem()
     * @uses MidocoMarginDetails::setMidocoMarginSaleItem()
     * @uses MidocoMarginDetails::setCalculatedMarginBrutto()
     * @uses MidocoMarginDetails::setBookedMarginBrutto()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMargin $midocoMargin
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem[] $midocoMarginBuyItem
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMarginSaleItem[] $midocoMarginSaleItem
     * @param float $calculatedMarginBrutto
     * @param float $bookedMarginBrutto
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoMargin $midocoMargin = null, ?array $midocoMarginBuyItem = null, ?array $midocoMarginSaleItem = null, ?float $calculatedMarginBrutto = null, ?float $bookedMarginBrutto = null)
    {
        $this
            ->setMidocoMargin($midocoMargin)
            ->setMidocoMarginBuyItem($midocoMarginBuyItem)
            ->setMidocoMarginSaleItem($midocoMarginSaleItem)
            ->setCalculatedMarginBrutto($calculatedMarginBrutto)
            ->setBookedMarginBrutto($bookedMarginBrutto);
    }
    /**
     * Get MidocoMargin value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin|null
     */
    public function getMidocoMargin(): ?\Pggns\MidocoApi\Order\StructType\MidocoMargin
    {
        return $this->MidocoMargin;
    }
    /**
     * Set MidocoMargin value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMargin $midocoMargin
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginDetails
     */
    public function setMidocoMargin(?\Pggns\MidocoApi\Order\StructType\MidocoMargin $midocoMargin = null): self
    {
        $this->MidocoMargin = $midocoMargin;
        
        return $this;
    }
    /**
     * Get MidocoMarginBuyItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem[]
     */
    public function getMidocoMarginBuyItem(): ?array
    {
        return $this->MidocoMarginBuyItem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMarginBuyItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarginBuyItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginBuyItemForArrayConstraintFromSetMidocoMarginBuyItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMarginDetailsMidocoMarginBuyItemItem) {
            // validation for constraint: itemType
            if (!$midocoMarginDetailsMidocoMarginBuyItemItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem) {
                $invalidValues[] = is_object($midocoMarginDetailsMidocoMarginBuyItemItem) ? get_class($midocoMarginDetailsMidocoMarginBuyItemItem) : sprintf('%s(%s)', gettype($midocoMarginDetailsMidocoMarginBuyItemItem), var_export($midocoMarginDetailsMidocoMarginBuyItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarginBuyItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarginBuyItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem[] $midocoMarginBuyItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginDetails
     */
    public function setMidocoMarginBuyItem(?array $midocoMarginBuyItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginBuyItemArrayErrorMessage = self::validateMidocoMarginBuyItemForArrayConstraintFromSetMidocoMarginBuyItem($midocoMarginBuyItem))) {
            throw new InvalidArgumentException($midocoMarginBuyItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarginBuyItem = $midocoMarginBuyItem;
        
        return $this;
    }
    /**
     * Add item to MidocoMarginBuyItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginDetails
     */
    public function addToMidocoMarginBuyItem(\Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem) {
            throw new InvalidArgumentException(sprintf('The MidocoMarginBuyItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarginBuyItem[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMarginSaleItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginSaleItem[]
     */
    public function getMidocoMarginSaleItem(): ?array
    {
        return $this->MidocoMarginSaleItem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMarginSaleItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarginSaleItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginSaleItemForArrayConstraintFromSetMidocoMarginSaleItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMarginDetailsMidocoMarginSaleItemItem) {
            // validation for constraint: itemType
            if (!$midocoMarginDetailsMidocoMarginSaleItemItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMarginSaleItem) {
                $invalidValues[] = is_object($midocoMarginDetailsMidocoMarginSaleItemItem) ? get_class($midocoMarginDetailsMidocoMarginSaleItemItem) : sprintf('%s(%s)', gettype($midocoMarginDetailsMidocoMarginSaleItemItem), var_export($midocoMarginDetailsMidocoMarginSaleItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarginSaleItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMarginSaleItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarginSaleItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMarginSaleItem[] $midocoMarginSaleItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginDetails
     */
    public function setMidocoMarginSaleItem(?array $midocoMarginSaleItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginSaleItemArrayErrorMessage = self::validateMidocoMarginSaleItemForArrayConstraintFromSetMidocoMarginSaleItem($midocoMarginSaleItem))) {
            throw new InvalidArgumentException($midocoMarginSaleItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarginSaleItem = $midocoMarginSaleItem;
        
        return $this;
    }
    /**
     * Add item to MidocoMarginSaleItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMarginSaleItem $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginDetails
     */
    public function addToMidocoMarginSaleItem(\Pggns\MidocoApi\Order\StructType\MidocoMarginSaleItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMarginSaleItem) {
            throw new InvalidArgumentException(sprintf('The MidocoMarginSaleItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMarginSaleItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarginSaleItem[] = $item;
        
        return $this;
    }
    /**
     * Get calculatedMarginBrutto value
     * @return float|null
     */
    public function getCalculatedMarginBrutto(): ?float
    {
        return $this->calculatedMarginBrutto;
    }
    /**
     * Set calculatedMarginBrutto value
     * @param float $calculatedMarginBrutto
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginDetails
     */
    public function setCalculatedMarginBrutto(?float $calculatedMarginBrutto = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMarginBrutto) && !(is_float($calculatedMarginBrutto) || is_numeric($calculatedMarginBrutto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMarginBrutto, true), gettype($calculatedMarginBrutto)), __LINE__);
        }
        $this->calculatedMarginBrutto = $calculatedMarginBrutto;
        
        return $this;
    }
    /**
     * Get bookedMarginBrutto value
     * @return float|null
     */
    public function getBookedMarginBrutto(): ?float
    {
        return $this->bookedMarginBrutto;
    }
    /**
     * Set bookedMarginBrutto value
     * @param float $bookedMarginBrutto
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginDetails
     */
    public function setBookedMarginBrutto(?float $bookedMarginBrutto = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedMarginBrutto) && !(is_float($bookedMarginBrutto) || is_numeric($bookedMarginBrutto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedMarginBrutto, true), gettype($bookedMarginBrutto)), __LINE__);
        }
        $this->bookedMarginBrutto = $bookedMarginBrutto;
        
        return $this;
    }
}
