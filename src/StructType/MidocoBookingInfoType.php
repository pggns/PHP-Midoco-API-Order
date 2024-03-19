<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBookingInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBookingInfoType extends AbstractStructBase
{
    /**
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The tourOperator
     * @var string|null
     */
    protected ?string $tourOperator = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The firstService
     * @var string|null
     */
    protected ?string $firstService = null;
    /**
     * The firstTraveller
     * @var string|null
     */
    protected ?string $firstTraveller = null;
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
     * The noOfPassengers
     * @var int|null
     */
    protected ?int $noOfPassengers = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The displayedTotalPrice
     * @var float|null
     */
    protected ?float $displayedTotalPrice = null;
    /**
     * The displayedCurrency
     * @var string|null
     */
    protected ?string $displayedCurrency = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The workingUser
     * @var int|null
     */
    protected ?int $workingUser = null;
    /**
     * The workingTimestamp
     * @var string|null
     */
    protected ?string $workingTimestamp = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The bookingReference
     * @var string|null
     */
    protected ?string $bookingReference = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The externalSystem
     * @var string|null
     */
    protected ?string $externalSystem = null;
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
     * The invoiceCustomer
     * @var string|null
     */
    protected ?string $invoiceCustomer = null;
    /**
     * The unitAlias
     * @var string|null
     */
    protected ?string $unitAlias = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The mediatorAffiliate
     * @var string|null
     */
    protected ?string $mediatorAffiliate = null;
    /**
     * The isNew
     * @var bool|null
     */
    protected ?bool $isNew = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The debitor
     * @var string|null
     */
    protected ?string $debitor = null;
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The handlingType
     * @var string|null
     */
    protected ?string $handlingType = null;
    /**
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The finalPaymentType
     * @var string|null
     */
    protected ?string $finalPaymentType = null;
    /**
     * The buyPriceBaseCurrency
     * @var float|null
     */
    protected ?float $buyPriceBaseCurrency = null;
    /**
     * The buyPriceFxCurrency
     * @var float|null
     */
    protected ?float $buyPriceFxCurrency = null;
    /**
     * Constructor method for MidocoBookingInfoType
     * @uses MidocoBookingInfoType::setSellItemId()
     * @uses MidocoBookingInfoType::setTourOperator()
     * @uses MidocoBookingInfoType::setTravelType()
     * @uses MidocoBookingInfoType::setFirstService()
     * @uses MidocoBookingInfoType::setFirstTraveller()
     * @uses MidocoBookingInfoType::setStartTravel()
     * @uses MidocoBookingInfoType::setEndTravel()
     * @uses MidocoBookingInfoType::setNoOfPassengers()
     * @uses MidocoBookingInfoType::setTotalPrice()
     * @uses MidocoBookingInfoType::setDisplayedTotalPrice()
     * @uses MidocoBookingInfoType::setDisplayedCurrency()
     * @uses MidocoBookingInfoType::setStatus()
     * @uses MidocoBookingInfoType::setWorkingUser()
     * @uses MidocoBookingInfoType::setWorkingTimestamp()
     * @uses MidocoBookingInfoType::setBookingId()
     * @uses MidocoBookingInfoType::setBookingReference()
     * @uses MidocoBookingInfoType::setOrgUnit()
     * @uses MidocoBookingInfoType::setExternalSystem()
     * @uses MidocoBookingInfoType::setOrderId()
     * @uses MidocoBookingInfoType::setOrderNo()
     * @uses MidocoBookingInfoType::setInvoiceCustomer()
     * @uses MidocoBookingInfoType::setUnitAlias()
     * @uses MidocoBookingInfoType::setMediatorId()
     * @uses MidocoBookingInfoType::setMediatorAffiliate()
     * @uses MidocoBookingInfoType::setIsNew()
     * @uses MidocoBookingInfoType::setCreationUser()
     * @uses MidocoBookingInfoType::setDebitor()
     * @uses MidocoBookingInfoType::setIsSpecialCustomer()
     * @uses MidocoBookingInfoType::setCreationDate()
     * @uses MidocoBookingInfoType::setHandlingType()
     * @uses MidocoBookingInfoType::setItemPrice()
     * @uses MidocoBookingInfoType::setSettlementType()
     * @uses MidocoBookingInfoType::setFinalPaymentType()
     * @uses MidocoBookingInfoType::setBuyPriceBaseCurrency()
     * @uses MidocoBookingInfoType::setBuyPriceFxCurrency()
     * @param int $sellItemId
     * @param string $tourOperator
     * @param string $travelType
     * @param string $firstService
     * @param string $firstTraveller
     * @param string $startTravel
     * @param string $endTravel
     * @param int $noOfPassengers
     * @param float $totalPrice
     * @param float $displayedTotalPrice
     * @param string $displayedCurrency
     * @param string $status
     * @param int $workingUser
     * @param string $workingTimestamp
     * @param string $bookingId
     * @param string $bookingReference
     * @param string $orgUnit
     * @param string $externalSystem
     * @param int $orderId
     * @param int $orderNo
     * @param string $invoiceCustomer
     * @param string $unitAlias
     * @param string $mediatorId
     * @param string $mediatorAffiliate
     * @param bool $isNew
     * @param int $creationUser
     * @param string $debitor
     * @param bool $isSpecialCustomer
     * @param string $creationDate
     * @param string $handlingType
     * @param float $itemPrice
     * @param string $settlementType
     * @param string $finalPaymentType
     * @param float $buyPriceBaseCurrency
     * @param float $buyPriceFxCurrency
     */
    public function __construct(?int $sellItemId = null, ?string $tourOperator = null, ?string $travelType = null, ?string $firstService = null, ?string $firstTraveller = null, ?string $startTravel = null, ?string $endTravel = null, ?int $noOfPassengers = null, ?float $totalPrice = null, ?float $displayedTotalPrice = null, ?string $displayedCurrency = null, ?string $status = null, ?int $workingUser = null, ?string $workingTimestamp = null, ?string $bookingId = null, ?string $bookingReference = null, ?string $orgUnit = null, ?string $externalSystem = null, ?int $orderId = null, ?int $orderNo = null, ?string $invoiceCustomer = null, ?string $unitAlias = null, ?string $mediatorId = null, ?string $mediatorAffiliate = null, ?bool $isNew = null, ?int $creationUser = null, ?string $debitor = null, ?bool $isSpecialCustomer = null, ?string $creationDate = null, ?string $handlingType = null, ?float $itemPrice = null, ?string $settlementType = null, ?string $finalPaymentType = null, ?float $buyPriceBaseCurrency = null, ?float $buyPriceFxCurrency = null)
    {
        $this
            ->setSellItemId($sellItemId)
            ->setTourOperator($tourOperator)
            ->setTravelType($travelType)
            ->setFirstService($firstService)
            ->setFirstTraveller($firstTraveller)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setNoOfPassengers($noOfPassengers)
            ->setTotalPrice($totalPrice)
            ->setDisplayedTotalPrice($displayedTotalPrice)
            ->setDisplayedCurrency($displayedCurrency)
            ->setStatus($status)
            ->setWorkingUser($workingUser)
            ->setWorkingTimestamp($workingTimestamp)
            ->setBookingId($bookingId)
            ->setBookingReference($bookingReference)
            ->setOrgUnit($orgUnit)
            ->setExternalSystem($externalSystem)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setInvoiceCustomer($invoiceCustomer)
            ->setUnitAlias($unitAlias)
            ->setMediatorId($mediatorId)
            ->setMediatorAffiliate($mediatorAffiliate)
            ->setIsNew($isNew)
            ->setCreationUser($creationUser)
            ->setDebitor($debitor)
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setCreationDate($creationDate)
            ->setHandlingType($handlingType)
            ->setItemPrice($itemPrice)
            ->setSettlementType($settlementType)
            ->setFinalPaymentType($finalPaymentType)
            ->setBuyPriceBaseCurrency($buyPriceBaseCurrency)
            ->setBuyPriceFxCurrency($buyPriceFxCurrency);
    }
    /**
     * Get sellItemId value
     * @return int|null
     */
    public function getSellItemId(): ?int
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param int $sellItemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setSellItemId(?int $sellItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellItemId) && !(is_int($sellItemId) || ctype_digit($sellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemId, true), gettype($sellItemId)), __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
        return $this;
    }
    /**
     * Get tourOperator value
     * @return string|null
     */
    public function getTourOperator(): ?string
    {
        return $this->tourOperator;
    }
    /**
     * Set tourOperator value
     * @param string $tourOperator
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setTourOperator(?string $tourOperator = null): self
    {
        // validation for constraint: string
        if (!is_null($tourOperator) && !is_string($tourOperator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourOperator, true), gettype($tourOperator)), __LINE__);
        }
        $this->tourOperator = $tourOperator;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
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
     * Get firstService value
     * @return string|null
     */
    public function getFirstService(): ?string
    {
        return $this->firstService;
    }
    /**
     * Set firstService value
     * @param string $firstService
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setFirstService(?string $firstService = null): self
    {
        // validation for constraint: string
        if (!is_null($firstService) && !is_string($firstService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstService, true), gettype($firstService)), __LINE__);
        }
        $this->firstService = $firstService;
        
        return $this;
    }
    /**
     * Get firstTraveller value
     * @return string|null
     */
    public function getFirstTraveller(): ?string
    {
        return $this->firstTraveller;
    }
    /**
     * Set firstTraveller value
     * @param string $firstTraveller
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setFirstTraveller(?string $firstTraveller = null): self
    {
        // validation for constraint: string
        if (!is_null($firstTraveller) && !is_string($firstTraveller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstTraveller, true), gettype($firstTraveller)), __LINE__);
        }
        $this->firstTraveller = $firstTraveller;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
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
     * Get noOfPassengers value
     * @return int|null
     */
    public function getNoOfPassengers(): ?int
    {
        return $this->noOfPassengers;
    }
    /**
     * Set noOfPassengers value
     * @param int $noOfPassengers
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setNoOfPassengers(?int $noOfPassengers = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPassengers) && !(is_int($noOfPassengers) || ctype_digit($noOfPassengers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPassengers, true), gettype($noOfPassengers)), __LINE__);
        }
        $this->noOfPassengers = $noOfPassengers;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
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
     * Get displayedTotalPrice value
     * @return float|null
     */
    public function getDisplayedTotalPrice(): ?float
    {
        return $this->displayedTotalPrice;
    }
    /**
     * Set displayedTotalPrice value
     * @param float $displayedTotalPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setDisplayedTotalPrice(?float $displayedTotalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedTotalPrice) && !(is_float($displayedTotalPrice) || is_numeric($displayedTotalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedTotalPrice, true), gettype($displayedTotalPrice)), __LINE__);
        }
        $this->displayedTotalPrice = $displayedTotalPrice;
        
        return $this;
    }
    /**
     * Get displayedCurrency value
     * @return string|null
     */
    public function getDisplayedCurrency(): ?string
    {
        return $this->displayedCurrency;
    }
    /**
     * Set displayedCurrency value
     * @param string $displayedCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setDisplayedCurrency(?string $displayedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($displayedCurrency) && !is_string($displayedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayedCurrency, true), gettype($displayedCurrency)), __LINE__);
        }
        $this->displayedCurrency = $displayedCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
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
     * Get workingUser value
     * @return int|null
     */
    public function getWorkingUser(): ?int
    {
        return $this->workingUser;
    }
    /**
     * Set workingUser value
     * @param int $workingUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setWorkingUser(?int $workingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($workingUser) && !(is_int($workingUser) || ctype_digit($workingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workingUser, true), gettype($workingUser)), __LINE__);
        }
        $this->workingUser = $workingUser;
        
        return $this;
    }
    /**
     * Get workingTimestamp value
     * @return string|null
     */
    public function getWorkingTimestamp(): ?string
    {
        return $this->workingTimestamp;
    }
    /**
     * Set workingTimestamp value
     * @param string $workingTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setWorkingTimestamp(?string $workingTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($workingTimestamp) && !is_string($workingTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workingTimestamp, true), gettype($workingTimestamp)), __LINE__);
        }
        $this->workingTimestamp = $workingTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
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
     * Get bookingReference value
     * @return string|null
     */
    public function getBookingReference(): ?string
    {
        return $this->bookingReference;
    }
    /**
     * Set bookingReference value
     * @param string $bookingReference
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setBookingReference(?string $bookingReference = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingReference) && !is_string($bookingReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingReference, true), gettype($bookingReference)), __LINE__);
        }
        $this->bookingReference = $bookingReference;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get externalSystem value
     * @return string|null
     */
    public function getExternalSystem(): ?string
    {
        return $this->externalSystem;
    }
    /**
     * Set externalSystem value
     * @param string $externalSystem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setExternalSystem(?string $externalSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($externalSystem) && !is_string($externalSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSystem, true), gettype($externalSystem)), __LINE__);
        }
        $this->externalSystem = $externalSystem;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
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
     * Get invoiceCustomer value
     * @return string|null
     */
    public function getInvoiceCustomer(): ?string
    {
        return $this->invoiceCustomer;
    }
    /**
     * Set invoiceCustomer value
     * @param string $invoiceCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setInvoiceCustomer(?string $invoiceCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceCustomer) && !is_string($invoiceCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceCustomer, true), gettype($invoiceCustomer)), __LINE__);
        }
        $this->invoiceCustomer = $invoiceCustomer;
        
        return $this;
    }
    /**
     * Get unitAlias value
     * @return string|null
     */
    public function getUnitAlias(): ?string
    {
        return $this->unitAlias;
    }
    /**
     * Set unitAlias value
     * @param string $unitAlias
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setUnitAlias(?string $unitAlias = null): self
    {
        // validation for constraint: string
        if (!is_null($unitAlias) && !is_string($unitAlias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitAlias, true), gettype($unitAlias)), __LINE__);
        }
        $this->unitAlias = $unitAlias;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
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
     * Get isNew value
     * @return bool|null
     */
    public function getIsNew(): ?bool
    {
        return $this->isNew;
    }
    /**
     * Set isNew value
     * @param bool $isNew
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setIsNew(?bool $isNew = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNew) && !is_bool($isNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNew, true), gettype($isNew)), __LINE__);
        }
        $this->isNew = $isNew;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get debitor value
     * @return string|null
     */
    public function getDebitor(): ?string
    {
        return $this->debitor;
    }
    /**
     * Set debitor value
     * @param string $debitor
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setDebitor(?string $debitor = null): self
    {
        // validation for constraint: string
        if (!is_null($debitor) && !is_string($debitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitor, true), gettype($debitor)), __LINE__);
        }
        $this->debitor = $debitor;
        
        return $this;
    }
    /**
     * Get isSpecialCustomer value
     * @return bool|null
     */
    public function getIsSpecialCustomer(): ?bool
    {
        return $this->isSpecialCustomer;
    }
    /**
     * Set isSpecialCustomer value
     * @param bool $isSpecialCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setIsSpecialCustomer(?bool $isSpecialCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialCustomer) && !is_bool($isSpecialCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSpecialCustomer, true), gettype($isSpecialCustomer)), __LINE__);
        }
        $this->isSpecialCustomer = $isSpecialCustomer;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get handlingType value
     * @return string|null
     */
    public function getHandlingType(): ?string
    {
        return $this->handlingType;
    }
    /**
     * Set handlingType value
     * @param string $handlingType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setHandlingType(?string $handlingType = null): self
    {
        // validation for constraint: string
        if (!is_null($handlingType) && !is_string($handlingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handlingType, true), gettype($handlingType)), __LINE__);
        }
        $this->handlingType = $handlingType;
        
        return $this;
    }
    /**
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setItemPrice(?float $itemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get finalPaymentType value
     * @return string|null
     */
    public function getFinalPaymentType(): ?string
    {
        return $this->finalPaymentType;
    }
    /**
     * Set finalPaymentType value
     * @param string $finalPaymentType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setFinalPaymentType(?string $finalPaymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($finalPaymentType) && !is_string($finalPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalPaymentType, true), gettype($finalPaymentType)), __LINE__);
        }
        $this->finalPaymentType = $finalPaymentType;
        
        return $this;
    }
    /**
     * Get buyPriceBaseCurrency value
     * @return float|null
     */
    public function getBuyPriceBaseCurrency(): ?float
    {
        return $this->buyPriceBaseCurrency;
    }
    /**
     * Set buyPriceBaseCurrency value
     * @param float $buyPriceBaseCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setBuyPriceBaseCurrency(?float $buyPriceBaseCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($buyPriceBaseCurrency) && !(is_float($buyPriceBaseCurrency) || is_numeric($buyPriceBaseCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyPriceBaseCurrency, true), gettype($buyPriceBaseCurrency)), __LINE__);
        }
        $this->buyPriceBaseCurrency = $buyPriceBaseCurrency;
        
        return $this;
    }
    /**
     * Get buyPriceFxCurrency value
     * @return float|null
     */
    public function getBuyPriceFxCurrency(): ?float
    {
        return $this->buyPriceFxCurrency;
    }
    /**
     * Set buyPriceFxCurrency value
     * @param float $buyPriceFxCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
     */
    public function setBuyPriceFxCurrency(?float $buyPriceFxCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($buyPriceFxCurrency) && !(is_float($buyPriceFxCurrency) || is_numeric($buyPriceFxCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyPriceFxCurrency, true), gettype($buyPriceFxCurrency)), __LINE__);
        }
        $this->buyPriceFxCurrency = $buyPriceFxCurrency;
        
        return $this;
    }
}
