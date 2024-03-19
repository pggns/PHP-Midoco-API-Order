<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSubBookingInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSubBookingInfoType extends AbstractStructBase
{
    /**
     * The MidocoOrderCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderCustomer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $MidocoOrderCustomer = null;
    /**
     * The MidocoSellPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellPassenger
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    protected ?array $MidocoSellPassenger = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The customerForename
     * @var string|null
     */
    protected ?string $customerForename = null;
    /**
     * The isSubItem
     * @var bool|null
     */
    protected ?bool $isSubItem = null;
    /**
     * The positionReference
     * @var int|null
     */
    protected ?int $positionReference = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The subBookingId
     * @var string|null
     */
    protected ?string $subBookingId = null;
    /**
     * The subBookingAmount
     * @var float|null
     */
    protected ?float $subBookingAmount = null;
    /**
     * Constructor method for MidocoSubBookingInfoType
     * @uses MidocoSubBookingInfoType::setMidocoOrderCustomer()
     * @uses MidocoSubBookingInfoType::setMidocoSellPassenger()
     * @uses MidocoSubBookingInfoType::setPosition()
     * @uses MidocoSubBookingInfoType::setCustomerId()
     * @uses MidocoSubBookingInfoType::setCustomerName()
     * @uses MidocoSubBookingInfoType::setCustomerForename()
     * @uses MidocoSubBookingInfoType::setIsSubItem()
     * @uses MidocoSubBookingInfoType::setPositionReference()
     * @uses MidocoSubBookingInfoType::setItemType()
     * @uses MidocoSubBookingInfoType::setSubBookingId()
     * @uses MidocoSubBookingInfoType::setSubBookingAmount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @param int $position
     * @param int $customerId
     * @param string $customerName
     * @param string $customerForename
     * @param bool $isSubItem
     * @param int $positionReference
     * @param string $itemType
     * @param string $subBookingId
     * @param float $subBookingAmount
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer = null, ?array $midocoSellPassenger = null, ?int $position = null, ?int $customerId = null, ?string $customerName = null, ?string $customerForename = null, ?bool $isSubItem = null, ?int $positionReference = null, ?string $itemType = null, ?string $subBookingId = null, ?float $subBookingAmount = null)
    {
        $this
            ->setMidocoOrderCustomer($midocoOrderCustomer)
            ->setMidocoSellPassenger($midocoSellPassenger)
            ->setPosition($position)
            ->setCustomerId($customerId)
            ->setCustomerName($customerName)
            ->setCustomerForename($customerForename)
            ->setIsSubItem($isSubItem)
            ->setPositionReference($positionReference)
            ->setItemType($itemType)
            ->setSubBookingId($subBookingId)
            ->setSubBookingAmount($subBookingAmount);
    }
    /**
     * Get MidocoOrderCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer|null
     */
    public function getMidocoOrderCustomer(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer
    {
        return $this->MidocoOrderCustomer;
    }
    /**
     * Set MidocoOrderCustomer value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
     */
    public function setMidocoOrderCustomer(?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer = null): self
    {
        $this->MidocoOrderCustomer = $midocoOrderCustomer;
        
        return $this;
    }
    /**
     * Get MidocoSellPassenger value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    public function getMidocoSellPassenger(): ?array
    {
        return $this->MidocoSellPassenger;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellPassenger method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellPassengerForArrayConstraintFromSetMidocoSellPassenger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSubBookingInfoTypeMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$midocoSubBookingInfoTypeMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($midocoSubBookingInfoTypeMidocoSellPassengerItem) ? get_class($midocoSubBookingInfoTypeMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($midocoSubBookingInfoTypeMidocoSellPassengerItem), var_export($midocoSubBookingInfoTypeMidocoSellPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
     */
    public function setMidocoSellPassenger(?array $midocoSellPassenger = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellPassengerArrayErrorMessage = self::validateMidocoSellPassengerForArrayConstraintFromSetMidocoSellPassenger($midocoSellPassenger))) {
            throw new InvalidArgumentException($midocoSellPassengerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellPassenger = $midocoSellPassenger;
        
        return $this;
    }
    /**
     * Add item to MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
     */
    public function addToMidocoSellPassenger(\Pggns\MidocoApi\Order\StructType\MidocoSellPassenger $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
            throw new InvalidArgumentException(sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellPassenger[] = $item;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get customerForename value
     * @return string|null
     */
    public function getCustomerForename(): ?string
    {
        return $this->customerForename;
    }
    /**
     * Set customerForename value
     * @param string $customerForename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
     */
    public function setCustomerForename(?string $customerForename = null): self
    {
        // validation for constraint: string
        if (!is_null($customerForename) && !is_string($customerForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerForename, true), gettype($customerForename)), __LINE__);
        }
        $this->customerForename = $customerForename;
        
        return $this;
    }
    /**
     * Get isSubItem value
     * @return bool|null
     */
    public function getIsSubItem(): ?bool
    {
        return $this->isSubItem;
    }
    /**
     * Set isSubItem value
     * @param bool $isSubItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
     */
    public function setIsSubItem(?bool $isSubItem = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSubItem) && !is_bool($isSubItem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSubItem, true), gettype($isSubItem)), __LINE__);
        }
        $this->isSubItem = $isSubItem;
        
        return $this;
    }
    /**
     * Get positionReference value
     * @return int|null
     */
    public function getPositionReference(): ?int
    {
        return $this->positionReference;
    }
    /**
     * Set positionReference value
     * @param int $positionReference
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
     */
    public function setPositionReference(?int $positionReference = null): self
    {
        // validation for constraint: int
        if (!is_null($positionReference) && !(is_int($positionReference) || ctype_digit($positionReference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionReference, true), gettype($positionReference)), __LINE__);
        }
        $this->positionReference = $positionReference;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
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
     * Get subBookingId value
     * @return string|null
     */
    public function getSubBookingId(): ?string
    {
        return $this->subBookingId;
    }
    /**
     * Set subBookingId value
     * @param string $subBookingId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
     */
    public function setSubBookingId(?string $subBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($subBookingId) && !is_string($subBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subBookingId, true), gettype($subBookingId)), __LINE__);
        }
        $this->subBookingId = $subBookingId;
        
        return $this;
    }
    /**
     * Get subBookingAmount value
     * @return float|null
     */
    public function getSubBookingAmount(): ?float
    {
        return $this->subBookingAmount;
    }
    /**
     * Set subBookingAmount value
     * @param float $subBookingAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubBookingInfoType
     */
    public function setSubBookingAmount(?float $subBookingAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($subBookingAmount) && !(is_float($subBookingAmount) || is_numeric($subBookingAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($subBookingAmount, true), gettype($subBookingAmount)), __LINE__);
        }
        $this->subBookingAmount = $subBookingAmount;
        
        return $this;
    }
}
