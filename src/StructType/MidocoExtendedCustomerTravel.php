<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoExtendedCustomerTravel StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoExtendedCustomerTravel extends MidocoCustomerTravelType
{
    /**
     * The MidocoFeeItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFeeItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFeeItem[]
     */
    protected ?array $MidocoFeeItem = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The extId
     * @var string|null
     */
    protected ?string $extId = null;
    /**
     * The extSystem
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The originalAmount
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The orderStartTravelDate
     * @var string|null
     */
    protected ?string $orderStartTravelDate = null;
    /**
     * The orderEndTravelDate
     * @var string|null
     */
    protected ?string $orderEndTravelDate = null;
    /**
     * The orderTotalPrice
     * @var float|null
     */
    protected ?float $orderTotalPrice = null;
    /**
     * Constructor method for MidocoExtendedCustomerTravel
     * @uses MidocoExtendedCustomerTravel::setMidocoFeeItem()
     * @uses MidocoExtendedCustomerTravel::setItemType()
     * @uses MidocoExtendedCustomerTravel::setTravelType()
     * @uses MidocoExtendedCustomerTravel::setExtId()
     * @uses MidocoExtendedCustomerTravel::setExtSystem()
     * @uses MidocoExtendedCustomerTravel::setCreationTime()
     * @uses MidocoExtendedCustomerTravel::setOriginalAmount()
     * @uses MidocoExtendedCustomerTravel::setOriginalCurrency()
     * @uses MidocoExtendedCustomerTravel::setOrderStartTravelDate()
     * @uses MidocoExtendedCustomerTravel::setOrderEndTravelDate()
     * @uses MidocoExtendedCustomerTravel::setOrderTotalPrice()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeItem[] $midocoFeeItem
     * @param string $itemType
     * @param string $travelType
     * @param string $extId
     * @param string $extSystem
     * @param string $creationTime
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param string $orderStartTravelDate
     * @param string $orderEndTravelDate
     * @param float $orderTotalPrice
     */
    public function __construct(?array $midocoFeeItem = null, ?string $itemType = null, ?string $travelType = null, ?string $extId = null, ?string $extSystem = null, ?string $creationTime = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?string $orderStartTravelDate = null, ?string $orderEndTravelDate = null, ?float $orderTotalPrice = null)
    {
        $this
            ->setMidocoFeeItem($midocoFeeItem)
            ->setItemType($itemType)
            ->setTravelType($travelType)
            ->setExtId($extId)
            ->setExtSystem($extSystem)
            ->setCreationTime($creationTime)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setOrderStartTravelDate($orderStartTravelDate)
            ->setOrderEndTravelDate($orderEndTravelDate)
            ->setOrderTotalPrice($orderTotalPrice);
    }
    /**
     * Get MidocoFeeItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeItem[]
     */
    public function getMidocoFeeItem(): ?array
    {
        return $this->MidocoFeeItem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFeeItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeItemForArrayConstraintFromSetMidocoFeeItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoExtendedCustomerTravelMidocoFeeItemItem) {
            // validation for constraint: itemType
            if (!$midocoExtendedCustomerTravelMidocoFeeItemItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeItem) {
                $invalidValues[] = is_object($midocoExtendedCustomerTravelMidocoFeeItemItem) ? get_class($midocoExtendedCustomerTravelMidocoFeeItemItem) : sprintf('%s(%s)', gettype($midocoExtendedCustomerTravelMidocoFeeItemItem), var_export($midocoExtendedCustomerTravelMidocoFeeItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeItem[] $midocoFeeItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function setMidocoFeeItem(?array $midocoFeeItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeItemArrayErrorMessage = self::validateMidocoFeeItemForArrayConstraintFromSetMidocoFeeItem($midocoFeeItem))) {
            throw new InvalidArgumentException($midocoFeeItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeItem = $midocoFeeItem;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeItem $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function addToMidocoFeeItem(\Pggns\MidocoApi\Order\StructType\MidocoFeeItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeItem) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeItem[] = $item;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
    /**
     * Get extId value
     * @return string|null
     */
    public function getExtId(): ?string
    {
        return $this->extId;
    }
    /**
     * Set extId value
     * @param string $extId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function setExtId(?string $extId = null): self
    {
        // validation for constraint: string
        if (!is_null($extId) && !is_string($extId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extId, true), gettype($extId)), __LINE__);
        }
        $this->extId = $extId;
        
        return $this;
    }
    /**
     * Get extSystem value
     * @return string|null
     */
    public function getExtSystem(): ?string
    {
        return $this->extSystem;
    }
    /**
     * Set extSystem value
     * @param string $extSystem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function setExtSystem(?string $extSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($extSystem) && !is_string($extSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extSystem, true), gettype($extSystem)), __LINE__);
        }
        $this->extSystem = $extSystem;
        
        return $this;
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get originalAmount value
     * @return float|null
     */
    public function getOriginalAmount(): ?float
    {
        return $this->originalAmount;
    }
    /**
     * Set originalAmount value
     * @param float $originalAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function setOriginalAmount(?float $originalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalAmount) && !(is_float($originalAmount) || is_numeric($originalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalAmount, true), gettype($originalAmount)), __LINE__);
        }
        $this->originalAmount = $originalAmount;
        
        return $this;
    }
    /**
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
    }
    /**
     * Get orderStartTravelDate value
     * @return string|null
     */
    public function getOrderStartTravelDate(): ?string
    {
        return $this->orderStartTravelDate;
    }
    /**
     * Set orderStartTravelDate value
     * @param string $orderStartTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function setOrderStartTravelDate(?string $orderStartTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderStartTravelDate) && !is_string($orderStartTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderStartTravelDate, true), gettype($orderStartTravelDate)), __LINE__);
        }
        $this->orderStartTravelDate = $orderStartTravelDate;
        
        return $this;
    }
    /**
     * Get orderEndTravelDate value
     * @return string|null
     */
    public function getOrderEndTravelDate(): ?string
    {
        return $this->orderEndTravelDate;
    }
    /**
     * Set orderEndTravelDate value
     * @param string $orderEndTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function setOrderEndTravelDate(?string $orderEndTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderEndTravelDate) && !is_string($orderEndTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderEndTravelDate, true), gettype($orderEndTravelDate)), __LINE__);
        }
        $this->orderEndTravelDate = $orderEndTravelDate;
        
        return $this;
    }
    /**
     * Get orderTotalPrice value
     * @return float|null
     */
    public function getOrderTotalPrice(): ?float
    {
        return $this->orderTotalPrice;
    }
    /**
     * Set orderTotalPrice value
     * @param float $orderTotalPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedCustomerTravel
     */
    public function setOrderTotalPrice(?float $orderTotalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($orderTotalPrice) && !(is_float($orderTotalPrice) || is_numeric($orderTotalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($orderTotalPrice, true), gettype($orderTotalPrice)), __LINE__);
        }
        $this->orderTotalPrice = $orderTotalPrice;
        
        return $this;
    }
}
