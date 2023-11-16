<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusDetailDTO StructType
 * @subpackage Structs
 */
class BusDetailDTO extends AbstractStructBase
{
    /**
     * The accomodationCode
     * @var string|null
     */
    protected ?string $accomodationCode = null;
    /**
     * The accomodationDesc
     * @var string|null
     */
    protected ?string $accomodationDesc = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The cateringCode
     * @var string|null
     */
    protected ?string $cateringCode = null;
    /**
     * The cateringDescription
     * @var string|null
     */
    protected ?string $cateringDescription = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The noOfNights
     * @var string|null
     */
    protected ?string $noOfNights = null;
    /**
     * The outFromCityCode
     * @var string|null
     */
    protected ?string $outFromCityCode = null;
    /**
     * The outFromCityDesc
     * @var string|null
     */
    protected ?string $outFromCityDesc = null;
    /**
     * The outFromDate
     * @var string|null
     */
    protected ?string $outFromDate = null;
    /**
     * The outFromTime
     * @var string|null
     */
    protected ?string $outFromTime = null;
    /**
     * The outPlatform
     * @var string|null
     */
    protected ?string $outPlatform = null;
    /**
     * The outSeat
     * @var string|null
     */
    protected ?string $outSeat = null;
    /**
     * The outToCityCode
     * @var string|null
     */
    protected ?string $outToCityCode = null;
    /**
     * The outToCityDesc
     * @var string|null
     */
    protected ?string $outToCityDesc = null;
    /**
     * The outToDate
     * @var string|null
     */
    protected ?string $outToDate = null;
    /**
     * The outToTime
     * @var string|null
     */
    protected ?string $outToTime = null;
    /**
     * The paxPerServices
     * @var int|null
     */
    protected ?int $paxPerServices = null;
    /**
     * The personAssignment
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The referencePosition
     * @var int|null
     */
    protected ?int $referencePosition = null;
    /**
     * The retFromCityCode
     * @var string|null
     */
    protected ?string $retFromCityCode = null;
    /**
     * The retFromCityDesc
     * @var string|null
     */
    protected ?string $retFromCityDesc = null;
    /**
     * The retFromDate
     * @var string|null
     */
    protected ?string $retFromDate = null;
    /**
     * The retFromTime
     * @var string|null
     */
    protected ?string $retFromTime = null;
    /**
     * The retPlatform
     * @var string|null
     */
    protected ?string $retPlatform = null;
    /**
     * The retSeat
     * @var string|null
     */
    protected ?string $retSeat = null;
    /**
     * The retToCityCode
     * @var string|null
     */
    protected ?string $retToCityCode = null;
    /**
     * The retToCityDesc
     * @var string|null
     */
    protected ?string $retToCityDesc = null;
    /**
     * The retToDate
     * @var string|null
     */
    protected ?string $retToDate = null;
    /**
     * The retToTime
     * @var string|null
     */
    protected ?string $retToTime = null;
    /**
     * The roomCode
     * @var string|null
     */
    protected ?string $roomCode = null;
    /**
     * The roomDescription
     * @var string|null
     */
    protected ?string $roomDescription = null;
    /**
     * The serviceCode
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * The serviceDesc
     * @var string|null
     */
    protected ?string $serviceDesc = null;
    /**
     * The serviceName
     * @var string|null
     */
    protected ?string $serviceName = null;
    /**
     * The servicePrice
     * @var float|null
     */
    protected ?float $servicePrice = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The transfer
     * @var string|null
     */
    protected ?string $transfer = null;
    /**
     * The vatIncluded
     * @var bool|null
     */
    protected ?bool $vatIncluded = null;
    /**
     * Constructor method for BusDetailDTO
     * @uses BusDetailDTO::setAccomodationCode()
     * @uses BusDetailDTO::setAccomodationDesc()
     * @uses BusDetailDTO::setCategory()
     * @uses BusDetailDTO::setCateringCode()
     * @uses BusDetailDTO::setCateringDescription()
     * @uses BusDetailDTO::setCurrency()
     * @uses BusDetailDTO::setItemId()
     * @uses BusDetailDTO::setNoOfNights()
     * @uses BusDetailDTO::setOutFromCityCode()
     * @uses BusDetailDTO::setOutFromCityDesc()
     * @uses BusDetailDTO::setOutFromDate()
     * @uses BusDetailDTO::setOutFromTime()
     * @uses BusDetailDTO::setOutPlatform()
     * @uses BusDetailDTO::setOutSeat()
     * @uses BusDetailDTO::setOutToCityCode()
     * @uses BusDetailDTO::setOutToCityDesc()
     * @uses BusDetailDTO::setOutToDate()
     * @uses BusDetailDTO::setOutToTime()
     * @uses BusDetailDTO::setPaxPerServices()
     * @uses BusDetailDTO::setPersonAssignment()
     * @uses BusDetailDTO::setPosition()
     * @uses BusDetailDTO::setReferencePosition()
     * @uses BusDetailDTO::setRetFromCityCode()
     * @uses BusDetailDTO::setRetFromCityDesc()
     * @uses BusDetailDTO::setRetFromDate()
     * @uses BusDetailDTO::setRetFromTime()
     * @uses BusDetailDTO::setRetPlatform()
     * @uses BusDetailDTO::setRetSeat()
     * @uses BusDetailDTO::setRetToCityCode()
     * @uses BusDetailDTO::setRetToCityDesc()
     * @uses BusDetailDTO::setRetToDate()
     * @uses BusDetailDTO::setRetToTime()
     * @uses BusDetailDTO::setRoomCode()
     * @uses BusDetailDTO::setRoomDescription()
     * @uses BusDetailDTO::setServiceCode()
     * @uses BusDetailDTO::setServiceDesc()
     * @uses BusDetailDTO::setServiceName()
     * @uses BusDetailDTO::setServicePrice()
     * @uses BusDetailDTO::setServiceStatus()
     * @uses BusDetailDTO::setTransfer()
     * @uses BusDetailDTO::setVatIncluded()
     * @param string $accomodationCode
     * @param string $accomodationDesc
     * @param string $category
     * @param string $cateringCode
     * @param string $cateringDescription
     * @param string $currency
     * @param int $itemId
     * @param string $noOfNights
     * @param string $outFromCityCode
     * @param string $outFromCityDesc
     * @param string $outFromDate
     * @param string $outFromTime
     * @param string $outPlatform
     * @param string $outSeat
     * @param string $outToCityCode
     * @param string $outToCityDesc
     * @param string $outToDate
     * @param string $outToTime
     * @param int $paxPerServices
     * @param string $personAssignment
     * @param int $position
     * @param int $referencePosition
     * @param string $retFromCityCode
     * @param string $retFromCityDesc
     * @param string $retFromDate
     * @param string $retFromTime
     * @param string $retPlatform
     * @param string $retSeat
     * @param string $retToCityCode
     * @param string $retToCityDesc
     * @param string $retToDate
     * @param string $retToTime
     * @param string $roomCode
     * @param string $roomDescription
     * @param string $serviceCode
     * @param string $serviceDesc
     * @param string $serviceName
     * @param float $servicePrice
     * @param string $serviceStatus
     * @param string $transfer
     * @param bool $vatIncluded
     */
    public function __construct(?string $accomodationCode = null, ?string $accomodationDesc = null, ?string $category = null, ?string $cateringCode = null, ?string $cateringDescription = null, ?string $currency = null, ?int $itemId = null, ?string $noOfNights = null, ?string $outFromCityCode = null, ?string $outFromCityDesc = null, ?string $outFromDate = null, ?string $outFromTime = null, ?string $outPlatform = null, ?string $outSeat = null, ?string $outToCityCode = null, ?string $outToCityDesc = null, ?string $outToDate = null, ?string $outToTime = null, ?int $paxPerServices = null, ?string $personAssignment = null, ?int $position = null, ?int $referencePosition = null, ?string $retFromCityCode = null, ?string $retFromCityDesc = null, ?string $retFromDate = null, ?string $retFromTime = null, ?string $retPlatform = null, ?string $retSeat = null, ?string $retToCityCode = null, ?string $retToCityDesc = null, ?string $retToDate = null, ?string $retToTime = null, ?string $roomCode = null, ?string $roomDescription = null, ?string $serviceCode = null, ?string $serviceDesc = null, ?string $serviceName = null, ?float $servicePrice = null, ?string $serviceStatus = null, ?string $transfer = null, ?bool $vatIncluded = null)
    {
        $this
            ->setAccomodationCode($accomodationCode)
            ->setAccomodationDesc($accomodationDesc)
            ->setCategory($category)
            ->setCateringCode($cateringCode)
            ->setCateringDescription($cateringDescription)
            ->setCurrency($currency)
            ->setItemId($itemId)
            ->setNoOfNights($noOfNights)
            ->setOutFromCityCode($outFromCityCode)
            ->setOutFromCityDesc($outFromCityDesc)
            ->setOutFromDate($outFromDate)
            ->setOutFromTime($outFromTime)
            ->setOutPlatform($outPlatform)
            ->setOutSeat($outSeat)
            ->setOutToCityCode($outToCityCode)
            ->setOutToCityDesc($outToCityDesc)
            ->setOutToDate($outToDate)
            ->setOutToTime($outToTime)
            ->setPaxPerServices($paxPerServices)
            ->setPersonAssignment($personAssignment)
            ->setPosition($position)
            ->setReferencePosition($referencePosition)
            ->setRetFromCityCode($retFromCityCode)
            ->setRetFromCityDesc($retFromCityDesc)
            ->setRetFromDate($retFromDate)
            ->setRetFromTime($retFromTime)
            ->setRetPlatform($retPlatform)
            ->setRetSeat($retSeat)
            ->setRetToCityCode($retToCityCode)
            ->setRetToCityDesc($retToCityDesc)
            ->setRetToDate($retToDate)
            ->setRetToTime($retToTime)
            ->setRoomCode($roomCode)
            ->setRoomDescription($roomDescription)
            ->setServiceCode($serviceCode)
            ->setServiceDesc($serviceDesc)
            ->setServiceName($serviceName)
            ->setServicePrice($servicePrice)
            ->setServiceStatus($serviceStatus)
            ->setTransfer($transfer)
            ->setVatIncluded($vatIncluded);
    }
    /**
     * Get accomodationCode value
     * @return string|null
     */
    public function getAccomodationCode(): ?string
    {
        return $this->accomodationCode;
    }
    /**
     * Set accomodationCode value
     * @param string $accomodationCode
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setAccomodationCode(?string $accomodationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationCode) && !is_string($accomodationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationCode, true), gettype($accomodationCode)), __LINE__);
        }
        $this->accomodationCode = $accomodationCode;
        
        return $this;
    }
    /**
     * Get accomodationDesc value
     * @return string|null
     */
    public function getAccomodationDesc(): ?string
    {
        return $this->accomodationDesc;
    }
    /**
     * Set accomodationDesc value
     * @param string $accomodationDesc
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setAccomodationDesc(?string $accomodationDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationDesc) && !is_string($accomodationDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationDesc, true), gettype($accomodationDesc)), __LINE__);
        }
        $this->accomodationDesc = $accomodationDesc;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get cateringCode value
     * @return string|null
     */
    public function getCateringCode(): ?string
    {
        return $this->cateringCode;
    }
    /**
     * Set cateringCode value
     * @param string $cateringCode
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setCateringCode(?string $cateringCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cateringCode) && !is_string($cateringCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cateringCode, true), gettype($cateringCode)), __LINE__);
        }
        $this->cateringCode = $cateringCode;
        
        return $this;
    }
    /**
     * Get cateringDescription value
     * @return string|null
     */
    public function getCateringDescription(): ?string
    {
        return $this->cateringDescription;
    }
    /**
     * Set cateringDescription value
     * @param string $cateringDescription
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setCateringDescription(?string $cateringDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cateringDescription) && !is_string($cateringDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cateringDescription, true), gettype($cateringDescription)), __LINE__);
        }
        $this->cateringDescription = $cateringDescription;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
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
     * Get noOfNights value
     * @return string|null
     */
    public function getNoOfNights(): ?string
    {
        return $this->noOfNights;
    }
    /**
     * Set noOfNights value
     * @param string $noOfNights
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setNoOfNights(?string $noOfNights = null): self
    {
        // validation for constraint: string
        if (!is_null($noOfNights) && !is_string($noOfNights)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noOfNights, true), gettype($noOfNights)), __LINE__);
        }
        $this->noOfNights = $noOfNights;
        
        return $this;
    }
    /**
     * Get outFromCityCode value
     * @return string|null
     */
    public function getOutFromCityCode(): ?string
    {
        return $this->outFromCityCode;
    }
    /**
     * Set outFromCityCode value
     * @param string $outFromCityCode
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setOutFromCityCode(?string $outFromCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($outFromCityCode) && !is_string($outFromCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outFromCityCode, true), gettype($outFromCityCode)), __LINE__);
        }
        $this->outFromCityCode = $outFromCityCode;
        
        return $this;
    }
    /**
     * Get outFromCityDesc value
     * @return string|null
     */
    public function getOutFromCityDesc(): ?string
    {
        return $this->outFromCityDesc;
    }
    /**
     * Set outFromCityDesc value
     * @param string $outFromCityDesc
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setOutFromCityDesc(?string $outFromCityDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($outFromCityDesc) && !is_string($outFromCityDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outFromCityDesc, true), gettype($outFromCityDesc)), __LINE__);
        }
        $this->outFromCityDesc = $outFromCityDesc;
        
        return $this;
    }
    /**
     * Get outFromDate value
     * @return string|null
     */
    public function getOutFromDate(): ?string
    {
        return $this->outFromDate;
    }
    /**
     * Set outFromDate value
     * @param string $outFromDate
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setOutFromDate(?string $outFromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($outFromDate) && !is_string($outFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outFromDate, true), gettype($outFromDate)), __LINE__);
        }
        $this->outFromDate = $outFromDate;
        
        return $this;
    }
    /**
     * Get outFromTime value
     * @return string|null
     */
    public function getOutFromTime(): ?string
    {
        return $this->outFromTime;
    }
    /**
     * Set outFromTime value
     * @param string $outFromTime
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setOutFromTime(?string $outFromTime = null): self
    {
        // validation for constraint: string
        if (!is_null($outFromTime) && !is_string($outFromTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outFromTime, true), gettype($outFromTime)), __LINE__);
        }
        $this->outFromTime = $outFromTime;
        
        return $this;
    }
    /**
     * Get outPlatform value
     * @return string|null
     */
    public function getOutPlatform(): ?string
    {
        return $this->outPlatform;
    }
    /**
     * Set outPlatform value
     * @param string $outPlatform
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setOutPlatform(?string $outPlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($outPlatform) && !is_string($outPlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outPlatform, true), gettype($outPlatform)), __LINE__);
        }
        $this->outPlatform = $outPlatform;
        
        return $this;
    }
    /**
     * Get outSeat value
     * @return string|null
     */
    public function getOutSeat(): ?string
    {
        return $this->outSeat;
    }
    /**
     * Set outSeat value
     * @param string $outSeat
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setOutSeat(?string $outSeat = null): self
    {
        // validation for constraint: string
        if (!is_null($outSeat) && !is_string($outSeat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outSeat, true), gettype($outSeat)), __LINE__);
        }
        $this->outSeat = $outSeat;
        
        return $this;
    }
    /**
     * Get outToCityCode value
     * @return string|null
     */
    public function getOutToCityCode(): ?string
    {
        return $this->outToCityCode;
    }
    /**
     * Set outToCityCode value
     * @param string $outToCityCode
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setOutToCityCode(?string $outToCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($outToCityCode) && !is_string($outToCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outToCityCode, true), gettype($outToCityCode)), __LINE__);
        }
        $this->outToCityCode = $outToCityCode;
        
        return $this;
    }
    /**
     * Get outToCityDesc value
     * @return string|null
     */
    public function getOutToCityDesc(): ?string
    {
        return $this->outToCityDesc;
    }
    /**
     * Set outToCityDesc value
     * @param string $outToCityDesc
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setOutToCityDesc(?string $outToCityDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($outToCityDesc) && !is_string($outToCityDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outToCityDesc, true), gettype($outToCityDesc)), __LINE__);
        }
        $this->outToCityDesc = $outToCityDesc;
        
        return $this;
    }
    /**
     * Get outToDate value
     * @return string|null
     */
    public function getOutToDate(): ?string
    {
        return $this->outToDate;
    }
    /**
     * Set outToDate value
     * @param string $outToDate
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setOutToDate(?string $outToDate = null): self
    {
        // validation for constraint: string
        if (!is_null($outToDate) && !is_string($outToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outToDate, true), gettype($outToDate)), __LINE__);
        }
        $this->outToDate = $outToDate;
        
        return $this;
    }
    /**
     * Get outToTime value
     * @return string|null
     */
    public function getOutToTime(): ?string
    {
        return $this->outToTime;
    }
    /**
     * Set outToTime value
     * @param string $outToTime
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setOutToTime(?string $outToTime = null): self
    {
        // validation for constraint: string
        if (!is_null($outToTime) && !is_string($outToTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outToTime, true), gettype($outToTime)), __LINE__);
        }
        $this->outToTime = $outToTime;
        
        return $this;
    }
    /**
     * Get paxPerServices value
     * @return int|null
     */
    public function getPaxPerServices(): ?int
    {
        return $this->paxPerServices;
    }
    /**
     * Set paxPerServices value
     * @param int $paxPerServices
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setPaxPerServices(?int $paxPerServices = null): self
    {
        // validation for constraint: int
        if (!is_null($paxPerServices) && !(is_int($paxPerServices) || ctype_digit($paxPerServices))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxPerServices, true), gettype($paxPerServices)), __LINE__);
        }
        $this->paxPerServices = $paxPerServices;
        
        return $this;
    }
    /**
     * Get personAssignment value
     * @return string|null
     */
    public function getPersonAssignment(): ?string
    {
        return $this->personAssignment;
    }
    /**
     * Set personAssignment value
     * @param string $personAssignment
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setPersonAssignment(?string $personAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($personAssignment) && !is_string($personAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personAssignment, true), gettype($personAssignment)), __LINE__);
        }
        $this->personAssignment = $personAssignment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
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
     * Get referencePosition value
     * @return int|null
     */
    public function getReferencePosition(): ?int
    {
        return $this->referencePosition;
    }
    /**
     * Set referencePosition value
     * @param int $referencePosition
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setReferencePosition(?int $referencePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($referencePosition) && !(is_int($referencePosition) || ctype_digit($referencePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referencePosition, true), gettype($referencePosition)), __LINE__);
        }
        $this->referencePosition = $referencePosition;
        
        return $this;
    }
    /**
     * Get retFromCityCode value
     * @return string|null
     */
    public function getRetFromCityCode(): ?string
    {
        return $this->retFromCityCode;
    }
    /**
     * Set retFromCityCode value
     * @param string $retFromCityCode
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRetFromCityCode(?string $retFromCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($retFromCityCode) && !is_string($retFromCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retFromCityCode, true), gettype($retFromCityCode)), __LINE__);
        }
        $this->retFromCityCode = $retFromCityCode;
        
        return $this;
    }
    /**
     * Get retFromCityDesc value
     * @return string|null
     */
    public function getRetFromCityDesc(): ?string
    {
        return $this->retFromCityDesc;
    }
    /**
     * Set retFromCityDesc value
     * @param string $retFromCityDesc
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRetFromCityDesc(?string $retFromCityDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($retFromCityDesc) && !is_string($retFromCityDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retFromCityDesc, true), gettype($retFromCityDesc)), __LINE__);
        }
        $this->retFromCityDesc = $retFromCityDesc;
        
        return $this;
    }
    /**
     * Get retFromDate value
     * @return string|null
     */
    public function getRetFromDate(): ?string
    {
        return $this->retFromDate;
    }
    /**
     * Set retFromDate value
     * @param string $retFromDate
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRetFromDate(?string $retFromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($retFromDate) && !is_string($retFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retFromDate, true), gettype($retFromDate)), __LINE__);
        }
        $this->retFromDate = $retFromDate;
        
        return $this;
    }
    /**
     * Get retFromTime value
     * @return string|null
     */
    public function getRetFromTime(): ?string
    {
        return $this->retFromTime;
    }
    /**
     * Set retFromTime value
     * @param string $retFromTime
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRetFromTime(?string $retFromTime = null): self
    {
        // validation for constraint: string
        if (!is_null($retFromTime) && !is_string($retFromTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retFromTime, true), gettype($retFromTime)), __LINE__);
        }
        $this->retFromTime = $retFromTime;
        
        return $this;
    }
    /**
     * Get retPlatform value
     * @return string|null
     */
    public function getRetPlatform(): ?string
    {
        return $this->retPlatform;
    }
    /**
     * Set retPlatform value
     * @param string $retPlatform
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRetPlatform(?string $retPlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($retPlatform) && !is_string($retPlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retPlatform, true), gettype($retPlatform)), __LINE__);
        }
        $this->retPlatform = $retPlatform;
        
        return $this;
    }
    /**
     * Get retSeat value
     * @return string|null
     */
    public function getRetSeat(): ?string
    {
        return $this->retSeat;
    }
    /**
     * Set retSeat value
     * @param string $retSeat
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRetSeat(?string $retSeat = null): self
    {
        // validation for constraint: string
        if (!is_null($retSeat) && !is_string($retSeat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retSeat, true), gettype($retSeat)), __LINE__);
        }
        $this->retSeat = $retSeat;
        
        return $this;
    }
    /**
     * Get retToCityCode value
     * @return string|null
     */
    public function getRetToCityCode(): ?string
    {
        return $this->retToCityCode;
    }
    /**
     * Set retToCityCode value
     * @param string $retToCityCode
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRetToCityCode(?string $retToCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($retToCityCode) && !is_string($retToCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retToCityCode, true), gettype($retToCityCode)), __LINE__);
        }
        $this->retToCityCode = $retToCityCode;
        
        return $this;
    }
    /**
     * Get retToCityDesc value
     * @return string|null
     */
    public function getRetToCityDesc(): ?string
    {
        return $this->retToCityDesc;
    }
    /**
     * Set retToCityDesc value
     * @param string $retToCityDesc
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRetToCityDesc(?string $retToCityDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($retToCityDesc) && !is_string($retToCityDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retToCityDesc, true), gettype($retToCityDesc)), __LINE__);
        }
        $this->retToCityDesc = $retToCityDesc;
        
        return $this;
    }
    /**
     * Get retToDate value
     * @return string|null
     */
    public function getRetToDate(): ?string
    {
        return $this->retToDate;
    }
    /**
     * Set retToDate value
     * @param string $retToDate
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRetToDate(?string $retToDate = null): self
    {
        // validation for constraint: string
        if (!is_null($retToDate) && !is_string($retToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retToDate, true), gettype($retToDate)), __LINE__);
        }
        $this->retToDate = $retToDate;
        
        return $this;
    }
    /**
     * Get retToTime value
     * @return string|null
     */
    public function getRetToTime(): ?string
    {
        return $this->retToTime;
    }
    /**
     * Set retToTime value
     * @param string $retToTime
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRetToTime(?string $retToTime = null): self
    {
        // validation for constraint: string
        if (!is_null($retToTime) && !is_string($retToTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retToTime, true), gettype($retToTime)), __LINE__);
        }
        $this->retToTime = $retToTime;
        
        return $this;
    }
    /**
     * Get roomCode value
     * @return string|null
     */
    public function getRoomCode(): ?string
    {
        return $this->roomCode;
    }
    /**
     * Set roomCode value
     * @param string $roomCode
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRoomCode(?string $roomCode = null): self
    {
        // validation for constraint: string
        if (!is_null($roomCode) && !is_string($roomCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roomCode, true), gettype($roomCode)), __LINE__);
        }
        $this->roomCode = $roomCode;
        
        return $this;
    }
    /**
     * Get roomDescription value
     * @return string|null
     */
    public function getRoomDescription(): ?string
    {
        return $this->roomDescription;
    }
    /**
     * Set roomDescription value
     * @param string $roomDescription
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setRoomDescription(?string $roomDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($roomDescription) && !is_string($roomDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roomDescription, true), gettype($roomDescription)), __LINE__);
        }
        $this->roomDescription = $roomDescription;
        
        return $this;
    }
    /**
     * Get serviceCode value
     * @return string|null
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }
    /**
     * Set serviceCode value
     * @param string $serviceCode
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setServiceCode(?string $serviceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceCode) && !is_string($serviceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), gettype($serviceCode)), __LINE__);
        }
        $this->serviceCode = $serviceCode;
        
        return $this;
    }
    /**
     * Get serviceDesc value
     * @return string|null
     */
    public function getServiceDesc(): ?string
    {
        return $this->serviceDesc;
    }
    /**
     * Set serviceDesc value
     * @param string $serviceDesc
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setServiceDesc(?string $serviceDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceDesc) && !is_string($serviceDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceDesc, true), gettype($serviceDesc)), __LINE__);
        }
        $this->serviceDesc = $serviceDesc;
        
        return $this;
    }
    /**
     * Get serviceName value
     * @return string|null
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }
    /**
     * Set serviceName value
     * @param string $serviceName
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setServiceName(?string $serviceName = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceName, true), gettype($serviceName)), __LINE__);
        }
        $this->serviceName = $serviceName;
        
        return $this;
    }
    /**
     * Get servicePrice value
     * @return float|null
     */
    public function getServicePrice(): ?float
    {
        return $this->servicePrice;
    }
    /**
     * Set servicePrice value
     * @param float $servicePrice
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setServicePrice(?float $servicePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($servicePrice) && !(is_float($servicePrice) || is_numeric($servicePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($servicePrice, true), gettype($servicePrice)), __LINE__);
        }
        $this->servicePrice = $servicePrice;
        
        return $this;
    }
    /**
     * Get serviceStatus value
     * @return string|null
     */
    public function getServiceStatus(): ?string
    {
        return $this->serviceStatus;
    }
    /**
     * Set serviceStatus value
     * @param string $serviceStatus
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setServiceStatus(?string $serviceStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceStatus) && !is_string($serviceStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceStatus, true), gettype($serviceStatus)), __LINE__);
        }
        $this->serviceStatus = $serviceStatus;
        
        return $this;
    }
    /**
     * Get transfer value
     * @return string|null
     */
    public function getTransfer(): ?string
    {
        return $this->transfer;
    }
    /**
     * Set transfer value
     * @param string $transfer
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setTransfer(?string $transfer = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer) && !is_string($transfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer, true), gettype($transfer)), __LINE__);
        }
        $this->transfer = $transfer;
        
        return $this;
    }
    /**
     * Get vatIncluded value
     * @return bool|null
     */
    public function getVatIncluded(): ?bool
    {
        return $this->vatIncluded;
    }
    /**
     * Set vatIncluded value
     * @param bool $vatIncluded
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO
     */
    public function setVatIncluded(?bool $vatIncluded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatIncluded) && !is_bool($vatIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatIncluded, true), gettype($vatIncluded)), __LINE__);
        }
        $this->vatIncluded = $vatIncluded;
        
        return $this;
    }
}
