<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmadeusManualClearingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AmadeusManualClearingRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $supplierId;
    /**
     * The bookingId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $bookingId;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The reasonNo
     * @var int|null
     */
    protected ?int $reasonNo = null;
    /**
     * The reasonText
     * @var string|null
     */
    protected ?string $reasonText = null;
    /**
     * Constructor method for AmadeusManualClearingRequest
     * @uses AmadeusManualClearingRequest::setSupplierId()
     * @uses AmadeusManualClearingRequest::setBookingId()
     * @uses AmadeusManualClearingRequest::setTravelType()
     * @uses AmadeusManualClearingRequest::setStatus()
     * @uses AmadeusManualClearingRequest::setStartDate()
     * @uses AmadeusManualClearingRequest::setEndDate()
     * @uses AmadeusManualClearingRequest::setReasonNo()
     * @uses AmadeusManualClearingRequest::setReasonText()
     * @param string $supplierId
     * @param string $bookingId
     * @param string $travelType
     * @param string $status
     * @param string $startDate
     * @param string $endDate
     * @param int $reasonNo
     * @param string $reasonText
     */
    public function __construct(string $supplierId, string $bookingId, ?string $travelType = null, ?string $status = null, ?string $startDate = null, ?string $endDate = null, ?int $reasonNo = null, ?string $reasonText = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setTravelType($travelType)
            ->setStatus($status)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setReasonNo($reasonNo)
            ->setReasonText($reasonText);
    }
    /**
     * Get supplierId value
     * @return string
     */
    public function getSupplierId(): string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusManualClearingRequest
     */
    public function setSupplierId(string $supplierId): self
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
     * @return string
     */
    public function getBookingId(): string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusManualClearingRequest
     */
    public function setBookingId(string $bookingId): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusManualClearingRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusManualClearingRequest
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
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusManualClearingRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusManualClearingRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get reasonNo value
     * @return int|null
     */
    public function getReasonNo(): ?int
    {
        return $this->reasonNo;
    }
    /**
     * Set reasonNo value
     * @param int $reasonNo
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusManualClearingRequest
     */
    public function setReasonNo(?int $reasonNo = null): self
    {
        // validation for constraint: int
        if (!is_null($reasonNo) && !(is_int($reasonNo) || ctype_digit($reasonNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reasonNo, true), gettype($reasonNo)), __LINE__);
        }
        $this->reasonNo = $reasonNo;
        
        return $this;
    }
    /**
     * Get reasonText value
     * @return string|null
     */
    public function getReasonText(): ?string
    {
        return $this->reasonText;
    }
    /**
     * Set reasonText value
     * @param string $reasonText
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusManualClearingRequest
     */
    public function setReasonText(?string $reasonText = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonText) && !is_string($reasonText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonText, true), gettype($reasonText)), __LINE__);
        }
        $this->reasonText = $reasonText;
        
        return $this;
    }
}
