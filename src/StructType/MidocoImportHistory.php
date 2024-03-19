<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportHistory StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoImportHistory extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The SupplierId
     * @var string|null
     */
    protected ?string $SupplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The noOfPersons
     * @var string|null
     */
    protected ?string $noOfPersons = null;
    /**
     * The dateOfBooking
     * @var string|null
     */
    protected ?string $dateOfBooking = null;
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
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The totalPrice
     * @var string|null
     */
    protected ?string $totalPrice = null;
    /**
     * The hotelName
     * @var string|null
     */
    protected ?string $hotelName = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The travelTypeKey
     * @var string|null
     */
    protected ?string $travelTypeKey = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * Constructor method for MidocoImportHistory
     * @uses MidocoImportHistory::setCustomerId()
     * @uses MidocoImportHistory::setSupplierId()
     * @uses MidocoImportHistory::setBookingId()
     * @uses MidocoImportHistory::setNoOfPersons()
     * @uses MidocoImportHistory::setDateOfBooking()
     * @uses MidocoImportHistory::setStartTravel()
     * @uses MidocoImportHistory::setEndTravel()
     * @uses MidocoImportHistory::setStatus()
     * @uses MidocoImportHistory::setTotalPrice()
     * @uses MidocoImportHistory::setHotelName()
     * @uses MidocoImportHistory::setDestinationCode()
     * @uses MidocoImportHistory::setTravelTypeKey()
     * @uses MidocoImportHistory::setMediatorId()
     * @param string $customerId
     * @param string $supplierId
     * @param string $bookingId
     * @param string $noOfPersons
     * @param string $dateOfBooking
     * @param string $startTravel
     * @param string $endTravel
     * @param string $status
     * @param string $totalPrice
     * @param string $hotelName
     * @param string $destinationCode
     * @param string $travelTypeKey
     * @param string $mediatorId
     */
    public function __construct(?string $customerId = null, ?string $supplierId = null, ?string $bookingId = null, ?string $noOfPersons = null, ?string $dateOfBooking = null, ?string $startTravel = null, ?string $endTravel = null, ?string $status = null, ?string $totalPrice = null, ?string $hotelName = null, ?string $destinationCode = null, ?string $travelTypeKey = null, ?string $mediatorId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setNoOfPersons($noOfPersons)
            ->setDateOfBooking($dateOfBooking)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setStatus($status)
            ->setTotalPrice($totalPrice)
            ->setHotelName($hotelName)
            ->setDestinationCode($destinationCode)
            ->setTravelTypeKey($travelTypeKey)
            ->setMediatorId($mediatorId);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get SupplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->SupplierId;
    }
    /**
     * Set SupplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->SupplierId = $supplierId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
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
    /**
     * Get noOfPersons value
     * @return string|null
     */
    public function getNoOfPersons(): ?string
    {
        return $this->noOfPersons;
    }
    /**
     * Set noOfPersons value
     * @param string $noOfPersons
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
     */
    public function setNoOfPersons(?string $noOfPersons = null): self
    {
        // validation for constraint: string
        if (!is_null($noOfPersons) && !is_string($noOfPersons)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noOfPersons, true), gettype($noOfPersons)), __LINE__);
        }
        $this->noOfPersons = $noOfPersons;
        
        return $this;
    }
    /**
     * Get dateOfBooking value
     * @return string|null
     */
    public function getDateOfBooking(): ?string
    {
        return $this->dateOfBooking;
    }
    /**
     * Set dateOfBooking value
     * @param string $dateOfBooking
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
     */
    public function setDateOfBooking(?string $dateOfBooking = null): self
    {
        // validation for constraint: string
        if (!is_null($dateOfBooking) && !is_string($dateOfBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfBooking, true), gettype($dateOfBooking)), __LINE__);
        }
        $this->dateOfBooking = $dateOfBooking;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
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
     * Get totalPrice value
     * @return string|null
     */
    public function getTotalPrice(): ?string
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param string $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get hotelName value
     * @return string|null
     */
    public function getHotelName(): ?string
    {
        return $this->hotelName;
    }
    /**
     * Set hotelName value
     * @param string $hotelName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
     */
    public function setHotelName(?string $hotelName = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelName, true), gettype($hotelName)), __LINE__);
        }
        $this->hotelName = $hotelName;
        
        return $this;
    }
    /**
     * Get destinationCode value
     * @return string|null
     */
    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }
    /**
     * Set destinationCode value
     * @param string $destinationCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
        return $this;
    }
    /**
     * Get travelTypeKey value
     * @return string|null
     */
    public function getTravelTypeKey(): ?string
    {
        return $this->travelTypeKey;
    }
    /**
     * Set travelTypeKey value
     * @param string $travelTypeKey
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
     */
    public function setTravelTypeKey(?string $travelTypeKey = null): self
    {
        // validation for constraint: string
        if (!is_null($travelTypeKey) && !is_string($travelTypeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelTypeKey, true), gettype($travelTypeKey)), __LINE__);
        }
        $this->travelTypeKey = $travelTypeKey;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
}
