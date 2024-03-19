<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierMailNotReceivedSellItemInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierMailNotReceivedSellItemInfo extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The travelStart
     * @var string|null
     */
    protected ?string $travelStart = null;
    /**
     * The travelEnd
     * @var string|null
     */
    protected ?string $travelEnd = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The pax
     * @var int|null
     */
    protected ?int $pax = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The accomodationDescription
     * @var string|null
     */
    protected ?string $accomodationDescription = null;
    /**
     * The hotelName
     * @var string|null
     */
    protected ?string $hotelName = null;
    /**
     * The confirmationReceived
     * @var bool|null
     */
    protected ?bool $confirmationReceived = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The cateringDescription
     * @var string|null
     */
    protected ?string $cateringDescription = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The hotelLocalization
     * @var string|null
     */
    protected ?string $hotelLocalization = null;
    /**
     * The receivedStatus
     * @var string|null
     */
    protected ?string $receivedStatus = null;
    /**
     * The receivedDate
     * @var string|null
     */
    protected ?string $receivedDate = null;
    /**
     * The bookingFlightNo
     * @var string|null
     */
    protected ?string $bookingFlightNo = null;
    /**
     * Constructor method for SupplierMailNotReceivedSellItemInfo
     * @uses SupplierMailNotReceivedSellItemInfo::setCreationDate()
     * @uses SupplierMailNotReceivedSellItemInfo::setOrderNo()
     * @uses SupplierMailNotReceivedSellItemInfo::setTravelStart()
     * @uses SupplierMailNotReceivedSellItemInfo::setTravelEnd()
     * @uses SupplierMailNotReceivedSellItemInfo::setStatus()
     * @uses SupplierMailNotReceivedSellItemInfo::setPax()
     * @uses SupplierMailNotReceivedSellItemInfo::setPrice()
     * @uses SupplierMailNotReceivedSellItemInfo::setAccomodationDescription()
     * @uses SupplierMailNotReceivedSellItemInfo::setHotelName()
     * @uses SupplierMailNotReceivedSellItemInfo::setConfirmationReceived()
     * @uses SupplierMailNotReceivedSellItemInfo::setItemId()
     * @uses SupplierMailNotReceivedSellItemInfo::setRemark()
     * @uses SupplierMailNotReceivedSellItemInfo::setCateringDescription()
     * @uses SupplierMailNotReceivedSellItemInfo::setItemType()
     * @uses SupplierMailNotReceivedSellItemInfo::setHotelLocalization()
     * @uses SupplierMailNotReceivedSellItemInfo::setReceivedStatus()
     * @uses SupplierMailNotReceivedSellItemInfo::setReceivedDate()
     * @uses SupplierMailNotReceivedSellItemInfo::setBookingFlightNo()
     * @param string $creationDate
     * @param int $orderNo
     * @param string $travelStart
     * @param string $travelEnd
     * @param string $status
     * @param int $pax
     * @param float $price
     * @param string $accomodationDescription
     * @param string $hotelName
     * @param bool $confirmationReceived
     * @param int $itemId
     * @param string $remark
     * @param string $cateringDescription
     * @param string $itemType
     * @param string $hotelLocalization
     * @param string $receivedStatus
     * @param string $receivedDate
     * @param string $bookingFlightNo
     */
    public function __construct(?string $creationDate = null, ?int $orderNo = null, ?string $travelStart = null, ?string $travelEnd = null, ?string $status = null, ?int $pax = null, ?float $price = null, ?string $accomodationDescription = null, ?string $hotelName = null, ?bool $confirmationReceived = null, ?int $itemId = null, ?string $remark = null, ?string $cateringDescription = null, ?string $itemType = null, ?string $hotelLocalization = null, ?string $receivedStatus = null, ?string $receivedDate = null, ?string $bookingFlightNo = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setOrderNo($orderNo)
            ->setTravelStart($travelStart)
            ->setTravelEnd($travelEnd)
            ->setStatus($status)
            ->setPax($pax)
            ->setPrice($price)
            ->setAccomodationDescription($accomodationDescription)
            ->setHotelName($hotelName)
            ->setConfirmationReceived($confirmationReceived)
            ->setItemId($itemId)
            ->setRemark($remark)
            ->setCateringDescription($cateringDescription)
            ->setItemType($itemType)
            ->setHotelLocalization($hotelLocalization)
            ->setReceivedStatus($receivedStatus)
            ->setReceivedDate($receivedDate)
            ->setBookingFlightNo($bookingFlightNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
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
     * Get travelStart value
     * @return string|null
     */
    public function getTravelStart(): ?string
    {
        return $this->travelStart;
    }
    /**
     * Set travelStart value
     * @param string $travelStart
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
     */
    public function setTravelStart(?string $travelStart = null): self
    {
        // validation for constraint: string
        if (!is_null($travelStart) && !is_string($travelStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStart, true), gettype($travelStart)), __LINE__);
        }
        $this->travelStart = $travelStart;
        
        return $this;
    }
    /**
     * Get travelEnd value
     * @return string|null
     */
    public function getTravelEnd(): ?string
    {
        return $this->travelEnd;
    }
    /**
     * Set travelEnd value
     * @param string $travelEnd
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
     */
    public function setTravelEnd(?string $travelEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($travelEnd) && !is_string($travelEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelEnd, true), gettype($travelEnd)), __LINE__);
        }
        $this->travelEnd = $travelEnd;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
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
     * Get pax value
     * @return int|null
     */
    public function getPax(): ?int
    {
        return $this->pax;
    }
    /**
     * Set pax value
     * @param int $pax
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
     */
    public function setPax(?int $pax = null): self
    {
        // validation for constraint: int
        if (!is_null($pax) && !(is_int($pax) || ctype_digit($pax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pax, true), gettype($pax)), __LINE__);
        }
        $this->pax = $pax;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
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
     * Get accomodationDescription value
     * @return string|null
     */
    public function getAccomodationDescription(): ?string
    {
        return $this->accomodationDescription;
    }
    /**
     * Set accomodationDescription value
     * @param string $accomodationDescription
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
     */
    public function setAccomodationDescription(?string $accomodationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationDescription) && !is_string($accomodationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationDescription, true), gettype($accomodationDescription)), __LINE__);
        }
        $this->accomodationDescription = $accomodationDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
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
     * Get confirmationReceived value
     * @return bool|null
     */
    public function getConfirmationReceived(): ?bool
    {
        return $this->confirmationReceived;
    }
    /**
     * Set confirmationReceived value
     * @param bool $confirmationReceived
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
     */
    public function setConfirmationReceived(?bool $confirmationReceived = null): self
    {
        // validation for constraint: boolean
        if (!is_null($confirmationReceived) && !is_bool($confirmationReceived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($confirmationReceived, true), gettype($confirmationReceived)), __LINE__);
        }
        $this->confirmationReceived = $confirmationReceived;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
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
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
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
     * Get hotelLocalization value
     * @return string|null
     */
    public function getHotelLocalization(): ?string
    {
        return $this->hotelLocalization;
    }
    /**
     * Set hotelLocalization value
     * @param string $hotelLocalization
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
     */
    public function setHotelLocalization(?string $hotelLocalization = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelLocalization) && !is_string($hotelLocalization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelLocalization, true), gettype($hotelLocalization)), __LINE__);
        }
        $this->hotelLocalization = $hotelLocalization;
        
        return $this;
    }
    /**
     * Get receivedStatus value
     * @return string|null
     */
    public function getReceivedStatus(): ?string
    {
        return $this->receivedStatus;
    }
    /**
     * Set receivedStatus value
     * @param string $receivedStatus
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
     */
    public function setReceivedStatus(?string $receivedStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($receivedStatus) && !is_string($receivedStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receivedStatus, true), gettype($receivedStatus)), __LINE__);
        }
        $this->receivedStatus = $receivedStatus;
        
        return $this;
    }
    /**
     * Get receivedDate value
     * @return string|null
     */
    public function getReceivedDate(): ?string
    {
        return $this->receivedDate;
    }
    /**
     * Set receivedDate value
     * @param string $receivedDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
     */
    public function setReceivedDate(?string $receivedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receivedDate) && !is_string($receivedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receivedDate, true), gettype($receivedDate)), __LINE__);
        }
        $this->receivedDate = $receivedDate;
        
        return $this;
    }
    /**
     * Get bookingFlightNo value
     * @return string|null
     */
    public function getBookingFlightNo(): ?string
    {
        return $this->bookingFlightNo;
    }
    /**
     * Set bookingFlightNo value
     * @param string $bookingFlightNo
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedSellItemInfo
     */
    public function setBookingFlightNo(?string $bookingFlightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingFlightNo) && !is_string($bookingFlightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingFlightNo, true), gettype($bookingFlightNo)), __LINE__);
        }
        $this->bookingFlightNo = $bookingFlightNo;
        
        return $this;
    }
}
