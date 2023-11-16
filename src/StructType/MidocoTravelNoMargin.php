<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTravelNoMargin StructType
 * @subpackage Structs
 */
class MidocoTravelNoMargin extends TravelNoMarginDTO
{
    /**
     * The MidocoTravelNoMarginBuyItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNoMarginBuyItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem[]
     */
    protected array $MidocoTravelNoMarginBuyItem = [];
    /**
     * The MidocoTravelNoMarginSaleItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNoMarginSaleItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem[]
     */
    protected array $MidocoTravelNoMarginSaleItem = [];
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
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for MidocoTravelNoMargin
     * @uses MidocoTravelNoMargin::setMidocoTravelNoMarginBuyItem()
     * @uses MidocoTravelNoMargin::setMidocoTravelNoMarginSaleItem()
     * @uses MidocoTravelNoMargin::setCalculatedMarginBrutto()
     * @uses MidocoTravelNoMargin::setBookedMarginBrutto()
     * @uses MidocoTravelNoMargin::setStatus()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem[] $midocoTravelNoMarginBuyItem
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem[] $midocoTravelNoMarginSaleItem
     * @param float $calculatedMarginBrutto
     * @param float $bookedMarginBrutto
     * @param string $status
     */
    public function __construct(array $midocoTravelNoMarginBuyItem = [], array $midocoTravelNoMarginSaleItem = [], ?float $calculatedMarginBrutto = null, ?float $bookedMarginBrutto = null, ?string $status = null)
    {
        $this
            ->setMidocoTravelNoMarginBuyItem($midocoTravelNoMarginBuyItem)
            ->setMidocoTravelNoMarginSaleItem($midocoTravelNoMarginSaleItem)
            ->setCalculatedMarginBrutto($calculatedMarginBrutto)
            ->setBookedMarginBrutto($bookedMarginBrutto)
            ->setStatus($status);
    }
    /**
     * Get MidocoTravelNoMarginBuyItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem[]
     */
    public function getMidocoTravelNoMarginBuyItem(): array
    {
        return $this->MidocoTravelNoMarginBuyItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelNoMarginBuyItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNoMarginBuyItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNoMarginBuyItemForArrayConstraintsFromSetMidocoTravelNoMarginBuyItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTravelNoMarginMidocoTravelNoMarginBuyItemItem) {
            // validation for constraint: itemType
            if (!$midocoTravelNoMarginMidocoTravelNoMarginBuyItemItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem) {
                $invalidValues[] = is_object($midocoTravelNoMarginMidocoTravelNoMarginBuyItemItem) ? get_class($midocoTravelNoMarginMidocoTravelNoMarginBuyItemItem) : sprintf('%s(%s)', gettype($midocoTravelNoMarginMidocoTravelNoMarginBuyItemItem), var_export($midocoTravelNoMarginMidocoTravelNoMarginBuyItemItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin
     */
    public function setMidocoTravelNoMarginBuyItem(array $midocoTravelNoMarginBuyItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNoMarginBuyItemArrayErrorMessage = self::validateMidocoTravelNoMarginBuyItemForArrayConstraintsFromSetMidocoTravelNoMarginBuyItem($midocoTravelNoMarginBuyItem))) {
            throw new InvalidArgumentException($midocoTravelNoMarginBuyItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNoMarginBuyItem = $midocoTravelNoMarginBuyItem;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNoMarginBuyItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginBuyItem $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin
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
    public function getMidocoTravelNoMarginSaleItem(): array
    {
        return $this->MidocoTravelNoMarginSaleItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelNoMarginSaleItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNoMarginSaleItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNoMarginSaleItemForArrayConstraintsFromSetMidocoTravelNoMarginSaleItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTravelNoMarginMidocoTravelNoMarginSaleItemItem) {
            // validation for constraint: itemType
            if (!$midocoTravelNoMarginMidocoTravelNoMarginSaleItemItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem) {
                $invalidValues[] = is_object($midocoTravelNoMarginMidocoTravelNoMarginSaleItemItem) ? get_class($midocoTravelNoMarginMidocoTravelNoMarginSaleItemItem) : sprintf('%s(%s)', gettype($midocoTravelNoMarginMidocoTravelNoMarginSaleItemItem), var_export($midocoTravelNoMarginMidocoTravelNoMarginSaleItemItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin
     */
    public function setMidocoTravelNoMarginSaleItem(array $midocoTravelNoMarginSaleItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNoMarginSaleItemArrayErrorMessage = self::validateMidocoTravelNoMarginSaleItemForArrayConstraintsFromSetMidocoTravelNoMarginSaleItem($midocoTravelNoMarginSaleItem))) {
            throw new InvalidArgumentException($midocoTravelNoMarginSaleItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNoMarginSaleItem = $midocoTravelNoMarginSaleItem;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNoMarginSaleItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin
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
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
