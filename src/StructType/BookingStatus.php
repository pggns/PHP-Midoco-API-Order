<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bookingStatus StructType
 * @subpackage Structs
 */
class BookingStatus extends AbstractStructBase
{
    /**
     * The subitemStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\SubitemStatus[]
     */
    protected array $subitemStatus = [];
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The noOfPersons
     * @var int|null
     */
    protected ?int $noOfPersons = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The extId
     * @var string|null
     */
    protected ?string $extId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * Constructor method for bookingStatus
     * @uses BookingStatus::setSubitemStatus()
     * @uses BookingStatus::setPrice()
     * @uses BookingStatus::setStatus()
     * @uses BookingStatus::setNoOfPersons()
     * @uses BookingStatus::setStartTravel()
     * @uses BookingStatus::setEndTravel()
     * @uses BookingStatus::setExtId()
     * @uses BookingStatus::setSupplierId()
     * @uses BookingStatus::setBookingId()
     * @param \Pggns\MidocoApi\Order\StructType\SubitemStatus[] $subitemStatus
     * @param float $price
     * @param string $status
     * @param int $noOfPersons
     * @param string $startTravel
     * @param string $endTravel
     * @param string $extId
     * @param string $supplierId
     * @param string $bookingId
     */
    public function __construct(array $subitemStatus = [], ?float $price = null, ?string $status = null, ?int $noOfPersons = null, ?string $startTravel = null, ?string $endTravel = null, ?string $extId = null, ?string $supplierId = null, ?string $bookingId = null)
    {
        $this
            ->setSubitemStatus($subitemStatus)
            ->setPrice($price)
            ->setStatus($status)
            ->setNoOfPersons($noOfPersons)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setExtId($extId)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId);
    }
    /**
     * Get subitemStatus value
     * @return \Pggns\MidocoApi\Order\StructType\SubitemStatus[]
     */
    public function getSubitemStatus(): array
    {
        return $this->subitemStatus;
    }
    /**
     * This method is responsible for validating the values passed to the setSubitemStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubitemStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubitemStatusForArrayConstraintsFromSetSubitemStatus(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingStatusSubitemStatusItem) {
            // validation for constraint: itemType
            if (!$bookingStatusSubitemStatusItem instanceof \Pggns\MidocoApi\Order\StructType\SubitemStatus) {
                $invalidValues[] = is_object($bookingStatusSubitemStatusItem) ? get_class($bookingStatusSubitemStatusItem) : sprintf('%s(%s)', gettype($bookingStatusSubitemStatusItem), var_export($bookingStatusSubitemStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subitemStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\SubitemStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set subitemStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SubitemStatus[] $subitemStatus
     * @return \Pggns\MidocoApi\Order\StructType\BookingStatus
     */
    public function setSubitemStatus(array $subitemStatus = []): self
    {
        // validation for constraint: array
        if ('' !== ($subitemStatusArrayErrorMessage = self::validateSubitemStatusForArrayConstraintsFromSetSubitemStatus($subitemStatus))) {
            throw new InvalidArgumentException($subitemStatusArrayErrorMessage, __LINE__);
        }
        $this->subitemStatus = $subitemStatus;
        
        return $this;
    }
    /**
     * Add item to subitemStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SubitemStatus $item
     * @return \Pggns\MidocoApi\Order\StructType\BookingStatus
     */
    public function addToSubitemStatus(\Pggns\MidocoApi\Order\StructType\SubitemStatus $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SubitemStatus) {
            throw new InvalidArgumentException(sprintf('The subitemStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\SubitemStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->subitemStatus[] = $item;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\BookingStatus
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingStatus
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
    /**
     * Get noOfPersons value
     * @return int|null
     */
    public function getNoOfPersons(): ?int
    {
        return $this->noOfPersons;
    }
    /**
     * Set noOfPersons value
     * @param int $noOfPersons
     * @return \Pggns\MidocoApi\Order\StructType\BookingStatus
     */
    public function setNoOfPersons(?int $noOfPersons = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPersons) && !(is_int($noOfPersons) || ctype_digit($noOfPersons))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPersons, true), gettype($noOfPersons)), __LINE__);
        }
        $this->noOfPersons = $noOfPersons;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\BookingStatus
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\BookingStatus
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingStatus
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
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\BookingStatus
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\BookingStatus
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
}
