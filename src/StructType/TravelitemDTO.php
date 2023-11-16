<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelitemDTO StructType
 * @subpackage Structs
 */
class TravelitemDTO extends AbstractStructBase
{
    /**
     * The articleType
     * @var string|null
     */
    protected ?string $articleType = null;
    /**
     * The bookingConfirmationNumber
     * @var string|null
     */
    protected ?string $bookingConfirmationNumber = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The bookingReference
     * @var int|null
     */
    protected ?int $bookingReference = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The expired
     * @var bool|null
     */
    protected ?bool $expired = null;
    /**
     * The extChannel
     * @var string|null
     */
    protected ?string $extChannel = null;
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
     * The extUrl
     * @var string|null
     */
    protected ?string $extUrl = null;
    /**
     * The feeCode
     * @var string|null
     */
    protected ?string $feeCode = null;
    /**
     * The forCustomer
     * @var string|null
     */
    protected ?string $forCustomer = null;
    /**
     * The fromCustomer
     * @var string|null
     */
    protected ?string $fromCustomer = null;
    /**
     * The groupItemFlag
     * @var bool|null
     */
    protected ?bool $groupItemFlag = null;
    /**
     * The groupItemName
     * @var string|null
     */
    protected ?string $groupItemName = null;
    /**
     * The isOneWay
     * @var bool|null
     */
    protected ?bool $isOneWay = null;
    /**
     * The isOption
     * @var bool|null
     */
    protected ?bool $isOption = null;
    /**
     * The isRequest
     * @var bool|null
     */
    protected ?bool $isRequest = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The mainUnitName
     * @var string|null
     */
    protected ?string $mainUnitName = null;
    /**
     * The ndcOrderId
     * @var string|null
     */
    protected ?string $ndcOrderId = null;
    /**
     * The noOfPersons
     * @var int|null
     */
    protected ?int $noOfPersons = null;
    /**
     * The optionPeriod
     * @var int|null
     */
    protected ?int $optionPeriod = null;
    /**
     * The originalBookingId
     * @var string|null
     */
    protected ?string $originalBookingId = null;
    /**
     * The originalStatus
     * @var string|null
     */
    protected ?string $originalStatus = null;
    /**
     * The originalSupplierId
     * @var string|null
     */
    protected ?string $originalSupplierId = null;
    /**
     * The sourceExtId
     * @var string|null
     */
    protected ?string $sourceExtId = null;
    /**
     * The sourceExtSystem
     * @var string|null
     */
    protected ?string $sourceExtSystem = null;
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
     * The stornoConfirmationNo
     * @var string|null
     */
    protected ?string $stornoConfirmationNo = null;
    /**
     * The stornoDate
     * @var string|null
     */
    protected ?string $stornoDate = null;
    /**
     * The stornoText
     * @var string|null
     */
    protected ?string $stornoText = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The transferStatus
     * @var int|null
     */
    protected ?int $transferStatus = null;
    /**
     * The transferTimestamp
     * @var string|null
     */
    protected ?string $transferTimestamp = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The travelNoHandling
     * @var string|null
     */
    protected ?string $travelNoHandling = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The voucherQuantity
     * @var int|null
     */
    protected ?int $voucherQuantity = null;
    /**
     * The voucherSinglePrice
     * @var float|null
     */
    protected ?float $voucherSinglePrice = null;
    /**
     * The voucherTypeId
     * @var string|null
     */
    protected ?string $voucherTypeId = null;
    /**
     * Constructor method for TravelitemDTO
     * @uses TravelitemDTO::setArticleType()
     * @uses TravelitemDTO::setBookingConfirmationNumber()
     * @uses TravelitemDTO::setBookingDate()
     * @uses TravelitemDTO::setBookingId()
     * @uses TravelitemDTO::setBookingReference()
     * @uses TravelitemDTO::setDestination()
     * @uses TravelitemDTO::setEndTravel()
     * @uses TravelitemDTO::setExpired()
     * @uses TravelitemDTO::setExtChannel()
     * @uses TravelitemDTO::setExtId()
     * @uses TravelitemDTO::setExtSystem()
     * @uses TravelitemDTO::setExtUrl()
     * @uses TravelitemDTO::setFeeCode()
     * @uses TravelitemDTO::setForCustomer()
     * @uses TravelitemDTO::setFromCustomer()
     * @uses TravelitemDTO::setGroupItemFlag()
     * @uses TravelitemDTO::setGroupItemName()
     * @uses TravelitemDTO::setIsOneWay()
     * @uses TravelitemDTO::setIsOption()
     * @uses TravelitemDTO::setIsRequest()
     * @uses TravelitemDTO::setIsStorno()
     * @uses TravelitemDTO::setItemId()
     * @uses TravelitemDTO::setMainUnitName()
     * @uses TravelitemDTO::setNdcOrderId()
     * @uses TravelitemDTO::setNoOfPersons()
     * @uses TravelitemDTO::setOptionPeriod()
     * @uses TravelitemDTO::setOriginalBookingId()
     * @uses TravelitemDTO::setOriginalStatus()
     * @uses TravelitemDTO::setOriginalSupplierId()
     * @uses TravelitemDTO::setSourceExtId()
     * @uses TravelitemDTO::setSourceExtSystem()
     * @uses TravelitemDTO::setStartTravel()
     * @uses TravelitemDTO::setStatus()
     * @uses TravelitemDTO::setStornoConfirmationNo()
     * @uses TravelitemDTO::setStornoDate()
     * @uses TravelitemDTO::setStornoText()
     * @uses TravelitemDTO::setSupplierId()
     * @uses TravelitemDTO::setTransferStatus()
     * @uses TravelitemDTO::setTransferTimestamp()
     * @uses TravelitemDTO::setTravelNo()
     * @uses TravelitemDTO::setTravelNoHandling()
     * @uses TravelitemDTO::setTraveltype()
     * @uses TravelitemDTO::setVoucherQuantity()
     * @uses TravelitemDTO::setVoucherSinglePrice()
     * @uses TravelitemDTO::setVoucherTypeId()
     * @param string $articleType
     * @param string $bookingConfirmationNumber
     * @param string $bookingDate
     * @param string $bookingId
     * @param int $bookingReference
     * @param string $destination
     * @param string $endTravel
     * @param bool $expired
     * @param string $extChannel
     * @param string $extId
     * @param string $extSystem
     * @param string $extUrl
     * @param string $feeCode
     * @param string $forCustomer
     * @param string $fromCustomer
     * @param bool $groupItemFlag
     * @param string $groupItemName
     * @param bool $isOneWay
     * @param bool $isOption
     * @param bool $isRequest
     * @param bool $isStorno
     * @param int $itemId
     * @param string $mainUnitName
     * @param string $ndcOrderId
     * @param int $noOfPersons
     * @param int $optionPeriod
     * @param string $originalBookingId
     * @param string $originalStatus
     * @param string $originalSupplierId
     * @param string $sourceExtId
     * @param string $sourceExtSystem
     * @param string $startTravel
     * @param string $status
     * @param string $stornoConfirmationNo
     * @param string $stornoDate
     * @param string $stornoText
     * @param string $supplierId
     * @param int $transferStatus
     * @param string $transferTimestamp
     * @param string $travelNo
     * @param string $travelNoHandling
     * @param string $traveltype
     * @param int $voucherQuantity
     * @param float $voucherSinglePrice
     * @param string $voucherTypeId
     */
    public function __construct(?string $articleType = null, ?string $bookingConfirmationNumber = null, ?string $bookingDate = null, ?string $bookingId = null, ?int $bookingReference = null, ?string $destination = null, ?string $endTravel = null, ?bool $expired = null, ?string $extChannel = null, ?string $extId = null, ?string $extSystem = null, ?string $extUrl = null, ?string $feeCode = null, ?string $forCustomer = null, ?string $fromCustomer = null, ?bool $groupItemFlag = null, ?string $groupItemName = null, ?bool $isOneWay = null, ?bool $isOption = null, ?bool $isRequest = null, ?bool $isStorno = null, ?int $itemId = null, ?string $mainUnitName = null, ?string $ndcOrderId = null, ?int $noOfPersons = null, ?int $optionPeriod = null, ?string $originalBookingId = null, ?string $originalStatus = null, ?string $originalSupplierId = null, ?string $sourceExtId = null, ?string $sourceExtSystem = null, ?string $startTravel = null, ?string $status = null, ?string $stornoConfirmationNo = null, ?string $stornoDate = null, ?string $stornoText = null, ?string $supplierId = null, ?int $transferStatus = null, ?string $transferTimestamp = null, ?string $travelNo = null, ?string $travelNoHandling = null, ?string $traveltype = null, ?int $voucherQuantity = null, ?float $voucherSinglePrice = null, ?string $voucherTypeId = null)
    {
        $this
            ->setArticleType($articleType)
            ->setBookingConfirmationNumber($bookingConfirmationNumber)
            ->setBookingDate($bookingDate)
            ->setBookingId($bookingId)
            ->setBookingReference($bookingReference)
            ->setDestination($destination)
            ->setEndTravel($endTravel)
            ->setExpired($expired)
            ->setExtChannel($extChannel)
            ->setExtId($extId)
            ->setExtSystem($extSystem)
            ->setExtUrl($extUrl)
            ->setFeeCode($feeCode)
            ->setForCustomer($forCustomer)
            ->setFromCustomer($fromCustomer)
            ->setGroupItemFlag($groupItemFlag)
            ->setGroupItemName($groupItemName)
            ->setIsOneWay($isOneWay)
            ->setIsOption($isOption)
            ->setIsRequest($isRequest)
            ->setIsStorno($isStorno)
            ->setItemId($itemId)
            ->setMainUnitName($mainUnitName)
            ->setNdcOrderId($ndcOrderId)
            ->setNoOfPersons($noOfPersons)
            ->setOptionPeriod($optionPeriod)
            ->setOriginalBookingId($originalBookingId)
            ->setOriginalStatus($originalStatus)
            ->setOriginalSupplierId($originalSupplierId)
            ->setSourceExtId($sourceExtId)
            ->setSourceExtSystem($sourceExtSystem)
            ->setStartTravel($startTravel)
            ->setStatus($status)
            ->setStornoConfirmationNo($stornoConfirmationNo)
            ->setStornoDate($stornoDate)
            ->setStornoText($stornoText)
            ->setSupplierId($supplierId)
            ->setTransferStatus($transferStatus)
            ->setTransferTimestamp($transferTimestamp)
            ->setTravelNo($travelNo)
            ->setTravelNoHandling($travelNoHandling)
            ->setTraveltype($traveltype)
            ->setVoucherQuantity($voucherQuantity)
            ->setVoucherSinglePrice($voucherSinglePrice)
            ->setVoucherTypeId($voucherTypeId);
    }
    /**
     * Get articleType value
     * @return string|null
     */
    public function getArticleType(): ?string
    {
        return $this->articleType;
    }
    /**
     * Set articleType value
     * @param string $articleType
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setArticleType(?string $articleType = null): self
    {
        // validation for constraint: string
        if (!is_null($articleType) && !is_string($articleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($articleType, true), gettype($articleType)), __LINE__);
        }
        $this->articleType = $articleType;
        
        return $this;
    }
    /**
     * Get bookingConfirmationNumber value
     * @return string|null
     */
    public function getBookingConfirmationNumber(): ?string
    {
        return $this->bookingConfirmationNumber;
    }
    /**
     * Set bookingConfirmationNumber value
     * @param string $bookingConfirmationNumber
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setBookingConfirmationNumber(?string $bookingConfirmationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingConfirmationNumber) && !is_string($bookingConfirmationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingConfirmationNumber, true), gettype($bookingConfirmationNumber)), __LINE__);
        }
        $this->bookingConfirmationNumber = $bookingConfirmationNumber;
        
        return $this;
    }
    /**
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
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
     * @return int|null
     */
    public function getBookingReference(): ?int
    {
        return $this->bookingReference;
    }
    /**
     * Set bookingReference value
     * @param int $bookingReference
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
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
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
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
     * Get expired value
     * @return bool|null
     */
    public function getExpired(): ?bool
    {
        return $this->expired;
    }
    /**
     * Set expired value
     * @param bool $expired
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setExpired(?bool $expired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expired) && !is_bool($expired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expired, true), gettype($expired)), __LINE__);
        }
        $this->expired = $expired;
        
        return $this;
    }
    /**
     * Get extChannel value
     * @return string|null
     */
    public function getExtChannel(): ?string
    {
        return $this->extChannel;
    }
    /**
     * Set extChannel value
     * @param string $extChannel
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setExtChannel(?string $extChannel = null): self
    {
        // validation for constraint: string
        if (!is_null($extChannel) && !is_string($extChannel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extChannel, true), gettype($extChannel)), __LINE__);
        }
        $this->extChannel = $extChannel;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
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
     * Get extUrl value
     * @return string|null
     */
    public function getExtUrl(): ?string
    {
        return $this->extUrl;
    }
    /**
     * Set extUrl value
     * @param string $extUrl
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setExtUrl(?string $extUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($extUrl) && !is_string($extUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extUrl, true), gettype($extUrl)), __LINE__);
        }
        $this->extUrl = $extUrl;
        
        return $this;
    }
    /**
     * Get feeCode value
     * @return string|null
     */
    public function getFeeCode(): ?string
    {
        return $this->feeCode;
    }
    /**
     * Set feeCode value
     * @param string $feeCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setFeeCode(?string $feeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCode, true), gettype($feeCode)), __LINE__);
        }
        $this->feeCode = $feeCode;
        
        return $this;
    }
    /**
     * Get forCustomer value
     * @return string|null
     */
    public function getForCustomer(): ?string
    {
        return $this->forCustomer;
    }
    /**
     * Set forCustomer value
     * @param string $forCustomer
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setForCustomer(?string $forCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($forCustomer) && !is_string($forCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forCustomer, true), gettype($forCustomer)), __LINE__);
        }
        $this->forCustomer = $forCustomer;
        
        return $this;
    }
    /**
     * Get fromCustomer value
     * @return string|null
     */
    public function getFromCustomer(): ?string
    {
        return $this->fromCustomer;
    }
    /**
     * Set fromCustomer value
     * @param string $fromCustomer
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setFromCustomer(?string $fromCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($fromCustomer) && !is_string($fromCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromCustomer, true), gettype($fromCustomer)), __LINE__);
        }
        $this->fromCustomer = $fromCustomer;
        
        return $this;
    }
    /**
     * Get groupItemFlag value
     * @return bool|null
     */
    public function getGroupItemFlag(): ?bool
    {
        return $this->groupItemFlag;
    }
    /**
     * Set groupItemFlag value
     * @param bool $groupItemFlag
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setGroupItemFlag(?bool $groupItemFlag = null): self
    {
        // validation for constraint: boolean
        if (!is_null($groupItemFlag) && !is_bool($groupItemFlag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupItemFlag, true), gettype($groupItemFlag)), __LINE__);
        }
        $this->groupItemFlag = $groupItemFlag;
        
        return $this;
    }
    /**
     * Get groupItemName value
     * @return string|null
     */
    public function getGroupItemName(): ?string
    {
        return $this->groupItemName;
    }
    /**
     * Set groupItemName value
     * @param string $groupItemName
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setGroupItemName(?string $groupItemName = null): self
    {
        // validation for constraint: string
        if (!is_null($groupItemName) && !is_string($groupItemName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupItemName, true), gettype($groupItemName)), __LINE__);
        }
        $this->groupItemName = $groupItemName;
        
        return $this;
    }
    /**
     * Get isOneWay value
     * @return bool|null
     */
    public function getIsOneWay(): ?bool
    {
        return $this->isOneWay;
    }
    /**
     * Set isOneWay value
     * @param bool $isOneWay
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setIsOneWay(?bool $isOneWay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOneWay) && !is_bool($isOneWay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOneWay, true), gettype($isOneWay)), __LINE__);
        }
        $this->isOneWay = $isOneWay;
        
        return $this;
    }
    /**
     * Get isOption value
     * @return bool|null
     */
    public function getIsOption(): ?bool
    {
        return $this->isOption;
    }
    /**
     * Set isOption value
     * @param bool $isOption
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setIsOption(?bool $isOption = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOption) && !is_bool($isOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOption, true), gettype($isOption)), __LINE__);
        }
        $this->isOption = $isOption;
        
        return $this;
    }
    /**
     * Get isRequest value
     * @return bool|null
     */
    public function getIsRequest(): ?bool
    {
        return $this->isRequest;
    }
    /**
     * Set isRequest value
     * @param bool $isRequest
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setIsRequest(?bool $isRequest = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRequest) && !is_bool($isRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRequest, true), gettype($isRequest)), __LINE__);
        }
        $this->isRequest = $isRequest;
        
        return $this;
    }
    /**
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
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
     * Get mainUnitName value
     * @return string|null
     */
    public function getMainUnitName(): ?string
    {
        return $this->mainUnitName;
    }
    /**
     * Set mainUnitName value
     * @param string $mainUnitName
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setMainUnitName(?string $mainUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($mainUnitName) && !is_string($mainUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mainUnitName, true), gettype($mainUnitName)), __LINE__);
        }
        $this->mainUnitName = $mainUnitName;
        
        return $this;
    }
    /**
     * Get ndcOrderId value
     * @return string|null
     */
    public function getNdcOrderId(): ?string
    {
        return $this->ndcOrderId;
    }
    /**
     * Set ndcOrderId value
     * @param string $ndcOrderId
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setNdcOrderId(?string $ndcOrderId = null): self
    {
        // validation for constraint: string
        if (!is_null($ndcOrderId) && !is_string($ndcOrderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ndcOrderId, true), gettype($ndcOrderId)), __LINE__);
        }
        $this->ndcOrderId = $ndcOrderId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
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
     * Get optionPeriod value
     * @return int|null
     */
    public function getOptionPeriod(): ?int
    {
        return $this->optionPeriod;
    }
    /**
     * Set optionPeriod value
     * @param int $optionPeriod
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setOptionPeriod(?int $optionPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($optionPeriod) && !(is_int($optionPeriod) || ctype_digit($optionPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($optionPeriod, true), gettype($optionPeriod)), __LINE__);
        }
        $this->optionPeriod = $optionPeriod;
        
        return $this;
    }
    /**
     * Get originalBookingId value
     * @return string|null
     */
    public function getOriginalBookingId(): ?string
    {
        return $this->originalBookingId;
    }
    /**
     * Set originalBookingId value
     * @param string $originalBookingId
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setOriginalBookingId(?string $originalBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($originalBookingId) && !is_string($originalBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBookingId, true), gettype($originalBookingId)), __LINE__);
        }
        $this->originalBookingId = $originalBookingId;
        
        return $this;
    }
    /**
     * Get originalStatus value
     * @return string|null
     */
    public function getOriginalStatus(): ?string
    {
        return $this->originalStatus;
    }
    /**
     * Set originalStatus value
     * @param string $originalStatus
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setOriginalStatus(?string $originalStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($originalStatus) && !is_string($originalStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalStatus, true), gettype($originalStatus)), __LINE__);
        }
        $this->originalStatus = $originalStatus;
        
        return $this;
    }
    /**
     * Get originalSupplierId value
     * @return string|null
     */
    public function getOriginalSupplierId(): ?string
    {
        return $this->originalSupplierId;
    }
    /**
     * Set originalSupplierId value
     * @param string $originalSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setOriginalSupplierId(?string $originalSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($originalSupplierId) && !is_string($originalSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalSupplierId, true), gettype($originalSupplierId)), __LINE__);
        }
        $this->originalSupplierId = $originalSupplierId;
        
        return $this;
    }
    /**
     * Get sourceExtId value
     * @return string|null
     */
    public function getSourceExtId(): ?string
    {
        return $this->sourceExtId;
    }
    /**
     * Set sourceExtId value
     * @param string $sourceExtId
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setSourceExtId(?string $sourceExtId = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceExtId) && !is_string($sourceExtId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceExtId, true), gettype($sourceExtId)), __LINE__);
        }
        $this->sourceExtId = $sourceExtId;
        
        return $this;
    }
    /**
     * Get sourceExtSystem value
     * @return string|null
     */
    public function getSourceExtSystem(): ?string
    {
        return $this->sourceExtSystem;
    }
    /**
     * Set sourceExtSystem value
     * @param string $sourceExtSystem
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setSourceExtSystem(?string $sourceExtSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceExtSystem) && !is_string($sourceExtSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceExtSystem, true), gettype($sourceExtSystem)), __LINE__);
        }
        $this->sourceExtSystem = $sourceExtSystem;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
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
     * Get stornoConfirmationNo value
     * @return string|null
     */
    public function getStornoConfirmationNo(): ?string
    {
        return $this->stornoConfirmationNo;
    }
    /**
     * Set stornoConfirmationNo value
     * @param string $stornoConfirmationNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setStornoConfirmationNo(?string $stornoConfirmationNo = null): self
    {
        // validation for constraint: string
        if (!is_null($stornoConfirmationNo) && !is_string($stornoConfirmationNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stornoConfirmationNo, true), gettype($stornoConfirmationNo)), __LINE__);
        }
        $this->stornoConfirmationNo = $stornoConfirmationNo;
        
        return $this;
    }
    /**
     * Get stornoDate value
     * @return string|null
     */
    public function getStornoDate(): ?string
    {
        return $this->stornoDate;
    }
    /**
     * Set stornoDate value
     * @param string $stornoDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setStornoDate(?string $stornoDate = null): self
    {
        // validation for constraint: string
        if (!is_null($stornoDate) && !is_string($stornoDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stornoDate, true), gettype($stornoDate)), __LINE__);
        }
        $this->stornoDate = $stornoDate;
        
        return $this;
    }
    /**
     * Get stornoText value
     * @return string|null
     */
    public function getStornoText(): ?string
    {
        return $this->stornoText;
    }
    /**
     * Set stornoText value
     * @param string $stornoText
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setStornoText(?string $stornoText = null): self
    {
        // validation for constraint: string
        if (!is_null($stornoText) && !is_string($stornoText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stornoText, true), gettype($stornoText)), __LINE__);
        }
        $this->stornoText = $stornoText;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
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
     * Get transferStatus value
     * @return int|null
     */
    public function getTransferStatus(): ?int
    {
        return $this->transferStatus;
    }
    /**
     * Set transferStatus value
     * @param int $transferStatus
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setTransferStatus(?int $transferStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($transferStatus) && !(is_int($transferStatus) || ctype_digit($transferStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transferStatus, true), gettype($transferStatus)), __LINE__);
        }
        $this->transferStatus = $transferStatus;
        
        return $this;
    }
    /**
     * Get transferTimestamp value
     * @return string|null
     */
    public function getTransferTimestamp(): ?string
    {
        return $this->transferTimestamp;
    }
    /**
     * Set transferTimestamp value
     * @param string $transferTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setTransferTimestamp(?string $transferTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($transferTimestamp) && !is_string($transferTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferTimestamp, true), gettype($transferTimestamp)), __LINE__);
        }
        $this->transferTimestamp = $transferTimestamp;
        
        return $this;
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
    /**
     * Get travelNoHandling value
     * @return string|null
     */
    public function getTravelNoHandling(): ?string
    {
        return $this->travelNoHandling;
    }
    /**
     * Set travelNoHandling value
     * @param string $travelNoHandling
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setTravelNoHandling(?string $travelNoHandling = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNoHandling) && !is_string($travelNoHandling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNoHandling, true), gettype($travelNoHandling)), __LINE__);
        }
        $this->travelNoHandling = $travelNoHandling;
        
        return $this;
    }
    /**
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
        return $this;
    }
    /**
     * Get voucherQuantity value
     * @return int|null
     */
    public function getVoucherQuantity(): ?int
    {
        return $this->voucherQuantity;
    }
    /**
     * Set voucherQuantity value
     * @param int $voucherQuantity
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setVoucherQuantity(?int $voucherQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($voucherQuantity) && !(is_int($voucherQuantity) || ctype_digit($voucherQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voucherQuantity, true), gettype($voucherQuantity)), __LINE__);
        }
        $this->voucherQuantity = $voucherQuantity;
        
        return $this;
    }
    /**
     * Get voucherSinglePrice value
     * @return float|null
     */
    public function getVoucherSinglePrice(): ?float
    {
        return $this->voucherSinglePrice;
    }
    /**
     * Set voucherSinglePrice value
     * @param float $voucherSinglePrice
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setVoucherSinglePrice(?float $voucherSinglePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($voucherSinglePrice) && !(is_float($voucherSinglePrice) || is_numeric($voucherSinglePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($voucherSinglePrice, true), gettype($voucherSinglePrice)), __LINE__);
        }
        $this->voucherSinglePrice = $voucherSinglePrice;
        
        return $this;
    }
    /**
     * Get voucherTypeId value
     * @return string|null
     */
    public function getVoucherTypeId(): ?string
    {
        return $this->voucherTypeId;
    }
    /**
     * Set voucherTypeId value
     * @param string $voucherTypeId
     * @return \Pggns\MidocoApi\Order\StructType\TravelitemDTO
     */
    public function setVoucherTypeId(?string $voucherTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherTypeId) && !is_string($voucherTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherTypeId, true), gettype($voucherTypeId)), __LINE__);
        }
        $this->voucherTypeId = $voucherTypeId;
        
        return $this;
    }
}
