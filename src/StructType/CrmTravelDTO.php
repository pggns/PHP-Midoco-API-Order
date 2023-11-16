<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmTravelDTO StructType
 * @subpackage Structs
 */
class CrmTravelDTO extends AbstractStructBase
{
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The bookingOrgunit
     * @var string|null
     */
    protected ?string $bookingOrgunit = null;
    /**
     * The bookingReference
     * @var int|null
     */
    protected ?int $bookingReference = null;
    /**
     * The bookingUser
     * @var int|null
     */
    protected ?int $bookingUser = null;
    /**
     * The customerFeedback
     * @var bool|null
     */
    protected ?bool $customerFeedback = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The dateOfBooking
     * @var string|null
     */
    protected ?string $dateOfBooking = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The destinationKey
     * @var string|null
     */
    protected ?string $destinationKey = null;
    /**
     * The durationKey
     * @var string|null
     */
    protected ?string $durationKey = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The foreignBooking
     * @var bool|null
     */
    protected ?bool $foreignBooking = null;
    /**
     * The hotelLocation
     * @var string|null
     */
    protected ?string $hotelLocation = null;
    /**
     * The hotelName
     * @var string|null
     */
    protected ?string $hotelName = null;
    /**
     * The hotelStars
     * @var string|null
     */
    protected ?string $hotelStars = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The manual
     * @var bool|null
     */
    protected ?bool $manual = null;
    /**
     * The mediatorAffiliate
     * @var string|null
     */
    protected ?string $mediatorAffiliate = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The noOfPersons
     * @var int|null
     */
    protected ?int $noOfPersons = null;
    /**
     * The numberOfAdults
     * @var int|null
     */
    protected ?int $numberOfAdults = null;
    /**
     * The numberOfChildren
     * @var int|null
     */
    protected ?int $numberOfChildren = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The personsKey
     * @var string|null
     */
    protected ?string $personsKey = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The transportKey
     * @var string|null
     */
    protected ?string $transportKey = null;
    /**
     * The traveltypeKey
     * @var string|null
     */
    protected ?string $traveltypeKey = null;
    /**
     * Constructor method for CrmTravelDTO
     * @uses CrmTravelDTO::setBookingId()
     * @uses CrmTravelDTO::setBookingOrgunit()
     * @uses CrmTravelDTO::setBookingReference()
     * @uses CrmTravelDTO::setBookingUser()
     * @uses CrmTravelDTO::setCustomerFeedback()
     * @uses CrmTravelDTO::setCustomerId()
     * @uses CrmTravelDTO::setDateOfBooking()
     * @uses CrmTravelDTO::setDestinationCode()
     * @uses CrmTravelDTO::setDestinationKey()
     * @uses CrmTravelDTO::setDurationKey()
     * @uses CrmTravelDTO::setEndTravel()
     * @uses CrmTravelDTO::setForeignBooking()
     * @uses CrmTravelDTO::setHotelLocation()
     * @uses CrmTravelDTO::setHotelName()
     * @uses CrmTravelDTO::setHotelStars()
     * @uses CrmTravelDTO::setItemId()
     * @uses CrmTravelDTO::setManual()
     * @uses CrmTravelDTO::setMediatorAffiliate()
     * @uses CrmTravelDTO::setMediatorId()
     * @uses CrmTravelDTO::setNoOfPersons()
     * @uses CrmTravelDTO::setNumberOfAdults()
     * @uses CrmTravelDTO::setNumberOfChildren()
     * @uses CrmTravelDTO::setOrderId()
     * @uses CrmTravelDTO::setOrderNo()
     * @uses CrmTravelDTO::setPersonsKey()
     * @uses CrmTravelDTO::setStartTravel()
     * @uses CrmTravelDTO::setStatus()
     * @uses CrmTravelDTO::setSupplierId()
     * @uses CrmTravelDTO::setTotalPrice()
     * @uses CrmTravelDTO::setTransportKey()
     * @uses CrmTravelDTO::setTraveltypeKey()
     * @param string $bookingId
     * @param string $bookingOrgunit
     * @param int $bookingReference
     * @param int $bookingUser
     * @param bool $customerFeedback
     * @param int $customerId
     * @param string $dateOfBooking
     * @param string $destinationCode
     * @param string $destinationKey
     * @param string $durationKey
     * @param string $endTravel
     * @param bool $foreignBooking
     * @param string $hotelLocation
     * @param string $hotelName
     * @param string $hotelStars
     * @param int $itemId
     * @param bool $manual
     * @param string $mediatorAffiliate
     * @param string $mediatorId
     * @param int $noOfPersons
     * @param int $numberOfAdults
     * @param int $numberOfChildren
     * @param int $orderId
     * @param int $orderNo
     * @param string $personsKey
     * @param string $startTravel
     * @param string $status
     * @param string $supplierId
     * @param float $totalPrice
     * @param string $transportKey
     * @param string $traveltypeKey
     */
    public function __construct(?string $bookingId = null, ?string $bookingOrgunit = null, ?int $bookingReference = null, ?int $bookingUser = null, ?bool $customerFeedback = null, ?int $customerId = null, ?string $dateOfBooking = null, ?string $destinationCode = null, ?string $destinationKey = null, ?string $durationKey = null, ?string $endTravel = null, ?bool $foreignBooking = null, ?string $hotelLocation = null, ?string $hotelName = null, ?string $hotelStars = null, ?int $itemId = null, ?bool $manual = null, ?string $mediatorAffiliate = null, ?string $mediatorId = null, ?int $noOfPersons = null, ?int $numberOfAdults = null, ?int $numberOfChildren = null, ?int $orderId = null, ?int $orderNo = null, ?string $personsKey = null, ?string $startTravel = null, ?string $status = null, ?string $supplierId = null, ?float $totalPrice = null, ?string $transportKey = null, ?string $traveltypeKey = null)
    {
        $this
            ->setBookingId($bookingId)
            ->setBookingOrgunit($bookingOrgunit)
            ->setBookingReference($bookingReference)
            ->setBookingUser($bookingUser)
            ->setCustomerFeedback($customerFeedback)
            ->setCustomerId($customerId)
            ->setDateOfBooking($dateOfBooking)
            ->setDestinationCode($destinationCode)
            ->setDestinationKey($destinationKey)
            ->setDurationKey($durationKey)
            ->setEndTravel($endTravel)
            ->setForeignBooking($foreignBooking)
            ->setHotelLocation($hotelLocation)
            ->setHotelName($hotelName)
            ->setHotelStars($hotelStars)
            ->setItemId($itemId)
            ->setManual($manual)
            ->setMediatorAffiliate($mediatorAffiliate)
            ->setMediatorId($mediatorId)
            ->setNoOfPersons($noOfPersons)
            ->setNumberOfAdults($numberOfAdults)
            ->setNumberOfChildren($numberOfChildren)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setPersonsKey($personsKey)
            ->setStartTravel($startTravel)
            ->setStatus($status)
            ->setSupplierId($supplierId)
            ->setTotalPrice($totalPrice)
            ->setTransportKey($transportKey)
            ->setTraveltypeKey($traveltypeKey);
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
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
     * Get bookingOrgunit value
     * @return string|null
     */
    public function getBookingOrgunit(): ?string
    {
        return $this->bookingOrgunit;
    }
    /**
     * Set bookingOrgunit value
     * @param string $bookingOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setBookingOrgunit(?string $bookingOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingOrgunit) && !is_string($bookingOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingOrgunit, true), gettype($bookingOrgunit)), __LINE__);
        }
        $this->bookingOrgunit = $bookingOrgunit;
        
        return $this;
    }
    /**
     * Get bookingReference value
     * @return int|null
     */
    public function getBookingReference(): ?int
    {
        return $this->bookingReference;
    }
    /**
     * Set bookingReference value
     * @param int $bookingReference
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setBookingReference(?int $bookingReference = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingReference) && !(is_int($bookingReference) || ctype_digit($bookingReference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingReference, true), gettype($bookingReference)), __LINE__);
        }
        $this->bookingReference = $bookingReference;
        
        return $this;
    }
    /**
     * Get bookingUser value
     * @return int|null
     */
    public function getBookingUser(): ?int
    {
        return $this->bookingUser;
    }
    /**
     * Set bookingUser value
     * @param int $bookingUser
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setBookingUser(?int $bookingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingUser) && !(is_int($bookingUser) || ctype_digit($bookingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingUser, true), gettype($bookingUser)), __LINE__);
        }
        $this->bookingUser = $bookingUser;
        
        return $this;
    }
    /**
     * Get customerFeedback value
     * @return bool|null
     */
    public function getCustomerFeedback(): ?bool
    {
        return $this->customerFeedback;
    }
    /**
     * Set customerFeedback value
     * @param bool $customerFeedback
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setCustomerFeedback(?bool $customerFeedback = null): self
    {
        // validation for constraint: boolean
        if (!is_null($customerFeedback) && !is_bool($customerFeedback)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customerFeedback, true), gettype($customerFeedback)), __LINE__);
        }
        $this->customerFeedback = $customerFeedback;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
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
     * Get destinationKey value
     * @return string|null
     */
    public function getDestinationKey(): ?string
    {
        return $this->destinationKey;
    }
    /**
     * Set destinationKey value
     * @param string $destinationKey
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setDestinationKey(?string $destinationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationKey) && !is_string($destinationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationKey, true), gettype($destinationKey)), __LINE__);
        }
        $this->destinationKey = $destinationKey;
        
        return $this;
    }
    /**
     * Get durationKey value
     * @return string|null
     */
    public function getDurationKey(): ?string
    {
        return $this->durationKey;
    }
    /**
     * Set durationKey value
     * @param string $durationKey
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setDurationKey(?string $durationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($durationKey) && !is_string($durationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($durationKey, true), gettype($durationKey)), __LINE__);
        }
        $this->durationKey = $durationKey;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
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
     * Get foreignBooking value
     * @return bool|null
     */
    public function getForeignBooking(): ?bool
    {
        return $this->foreignBooking;
    }
    /**
     * Set foreignBooking value
     * @param bool $foreignBooking
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setForeignBooking(?bool $foreignBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($foreignBooking) && !is_bool($foreignBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($foreignBooking, true), gettype($foreignBooking)), __LINE__);
        }
        $this->foreignBooking = $foreignBooking;
        
        return $this;
    }
    /**
     * Get hotelLocation value
     * @return string|null
     */
    public function getHotelLocation(): ?string
    {
        return $this->hotelLocation;
    }
    /**
     * Set hotelLocation value
     * @param string $hotelLocation
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setHotelLocation(?string $hotelLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelLocation) && !is_string($hotelLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelLocation, true), gettype($hotelLocation)), __LINE__);
        }
        $this->hotelLocation = $hotelLocation;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
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
     * Get hotelStars value
     * @return string|null
     */
    public function getHotelStars(): ?string
    {
        return $this->hotelStars;
    }
    /**
     * Set hotelStars value
     * @param string $hotelStars
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setHotelStars(?string $hotelStars = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelStars) && !is_string($hotelStars)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelStars, true), gettype($hotelStars)), __LINE__);
        }
        $this->hotelStars = $hotelStars;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get manual value
     * @return bool|null
     */
    public function getManual(): ?bool
    {
        return $this->manual;
    }
    /**
     * Set manual value
     * @param bool $manual
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setManual(?bool $manual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manual) && !is_bool($manual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manual, true), gettype($manual)), __LINE__);
        }
        $this->manual = $manual;
        
        return $this;
    }
    /**
     * Get mediatorAffiliate value
     * @return string|null
     */
    public function getMediatorAffiliate(): ?string
    {
        return $this->mediatorAffiliate;
    }
    /**
     * Set mediatorAffiliate value
     * @param string $mediatorAffiliate
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setMediatorAffiliate(?string $mediatorAffiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorAffiliate) && !is_string($mediatorAffiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorAffiliate, true), gettype($mediatorAffiliate)), __LINE__);
        }
        $this->mediatorAffiliate = $mediatorAffiliate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
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
     * Get numberOfAdults value
     * @return int|null
     */
    public function getNumberOfAdults(): ?int
    {
        return $this->numberOfAdults;
    }
    /**
     * Set numberOfAdults value
     * @param int $numberOfAdults
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setNumberOfAdults(?int $numberOfAdults = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfAdults) && !(is_int($numberOfAdults) || ctype_digit($numberOfAdults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfAdults, true), gettype($numberOfAdults)), __LINE__);
        }
        $this->numberOfAdults = $numberOfAdults;
        
        return $this;
    }
    /**
     * Get numberOfChildren value
     * @return int|null
     */
    public function getNumberOfChildren(): ?int
    {
        return $this->numberOfChildren;
    }
    /**
     * Set numberOfChildren value
     * @param int $numberOfChildren
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setNumberOfChildren(?int $numberOfChildren = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfChildren) && !(is_int($numberOfChildren) || ctype_digit($numberOfChildren))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfChildren, true), gettype($numberOfChildren)), __LINE__);
        }
        $this->numberOfChildren = $numberOfChildren;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get personsKey value
     * @return string|null
     */
    public function getPersonsKey(): ?string
    {
        return $this->personsKey;
    }
    /**
     * Set personsKey value
     * @param string $personsKey
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setPersonsKey(?string $personsKey = null): self
    {
        // validation for constraint: string
        if (!is_null($personsKey) && !is_string($personsKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personsKey, true), gettype($personsKey)), __LINE__);
        }
        $this->personsKey = $personsKey;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
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
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get transportKey value
     * @return string|null
     */
    public function getTransportKey(): ?string
    {
        return $this->transportKey;
    }
    /**
     * Set transportKey value
     * @param string $transportKey
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setTransportKey(?string $transportKey = null): self
    {
        // validation for constraint: string
        if (!is_null($transportKey) && !is_string($transportKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transportKey, true), gettype($transportKey)), __LINE__);
        }
        $this->transportKey = $transportKey;
        
        return $this;
    }
    /**
     * Get traveltypeKey value
     * @return string|null
     */
    public function getTraveltypeKey(): ?string
    {
        return $this->traveltypeKey;
    }
    /**
     * Set traveltypeKey value
     * @param string $traveltypeKey
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelDTO
     */
    public function setTraveltypeKey(?string $traveltypeKey = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltypeKey) && !is_string($traveltypeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltypeKey, true), gettype($traveltypeKey)), __LINE__);
        }
        $this->traveltypeKey = $traveltypeKey;
        
        return $this;
    }
}
