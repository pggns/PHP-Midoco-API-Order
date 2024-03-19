<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBookingControl StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBookingControl extends AbstractStructBase
{
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
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The workingUser
     * @var int|null
     */
    protected ?int $workingUser = null;
    /**
     * The workingUserTimeStamp
     * @var string|null
     */
    protected ?string $workingUserTimeStamp = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The travelDateFrom
     * @var string|null
     */
    protected ?string $travelDateFrom = null;
    /**
     * The travelDateTo
     * @var string|null
     */
    protected ?string $travelDateTo = null;
    /**
     * The travelTarget
     * @var string|null
     */
    protected ?string $travelTarget = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The travelPartner
     * @var string|null
     */
    protected ?string $travelPartner = null;
    /**
     * The extSystem
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The surname
     * @var string|null
     */
    protected ?string $surname = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The custId
     * @var int|null
     */
    protected ?int $custId = null;
    /**
     * The createdBy
     * @var int|null
     */
    protected ?int $createdBy = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The mediator
     * @var string|null
     */
    protected ?string $mediator = null;
    /**
     * The invoiceNo
     * @var string|null
     */
    protected ?string $invoiceNo = null;
    /**
     * The ticketNo
     * @var string|null
     */
    protected ?string $ticketNo = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The isBookingIdEmpty
     * @var bool|null
     */
    protected ?bool $isBookingIdEmpty = null;
    /**
     * The hideInsurances
     * @var bool|null
     */
    protected ?bool $hideInsurances = null;
    /**
     * The hideCancellations
     * @var bool|null
     */
    protected ?bool $hideCancellations = null;
    /**
     * Constructor method for MidocoBookingControl
     * @uses MidocoBookingControl::setOrderId()
     * @uses MidocoBookingControl::setOrderNo()
     * @uses MidocoBookingControl::setCreationDate()
     * @uses MidocoBookingControl::setCreationDateFrom()
     * @uses MidocoBookingControl::setCreationDateTo()
     * @uses MidocoBookingControl::setPrice()
     * @uses MidocoBookingControl::setWorkingUser()
     * @uses MidocoBookingControl::setWorkingUserTimeStamp()
     * @uses MidocoBookingControl::setTravelDate()
     * @uses MidocoBookingControl::setTravelDateFrom()
     * @uses MidocoBookingControl::setTravelDateTo()
     * @uses MidocoBookingControl::setTravelTarget()
     * @uses MidocoBookingControl::setTravelType()
     * @uses MidocoBookingControl::setTravelPartner()
     * @uses MidocoBookingControl::setExtSystem()
     * @uses MidocoBookingControl::setRemark()
     * @uses MidocoBookingControl::setSurname()
     * @uses MidocoBookingControl::setForename()
     * @uses MidocoBookingControl::setCustId()
     * @uses MidocoBookingControl::setCreatedBy()
     * @uses MidocoBookingControl::setOrgUnit()
     * @uses MidocoBookingControl::setBookingId()
     * @uses MidocoBookingControl::setMediator()
     * @uses MidocoBookingControl::setInvoiceNo()
     * @uses MidocoBookingControl::setTicketNo()
     * @uses MidocoBookingControl::setAgencyId()
     * @uses MidocoBookingControl::setSupplierId()
     * @uses MidocoBookingControl::setStatus()
     * @uses MidocoBookingControl::setIsBookingIdEmpty()
     * @uses MidocoBookingControl::setHideInsurances()
     * @uses MidocoBookingControl::setHideCancellations()
     * @param int $orderId
     * @param int $orderNo
     * @param string $creationDate
     * @param string $creationDateFrom
     * @param string $creationDateTo
     * @param float $price
     * @param int $workingUser
     * @param string $workingUserTimeStamp
     * @param string $travelDate
     * @param string $travelDateFrom
     * @param string $travelDateTo
     * @param string $travelTarget
     * @param string $travelType
     * @param string $travelPartner
     * @param string $extSystem
     * @param string $remark
     * @param string $surname
     * @param string $forename
     * @param int $custId
     * @param int $createdBy
     * @param string $orgUnit
     * @param string $bookingId
     * @param string $mediator
     * @param string $invoiceNo
     * @param string $ticketNo
     * @param string $agencyId
     * @param string $supplierId
     * @param string $status
     * @param bool $isBookingIdEmpty
     * @param bool $hideInsurances
     * @param bool $hideCancellations
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?string $creationDate = null, ?string $creationDateFrom = null, ?string $creationDateTo = null, ?float $price = null, ?int $workingUser = null, ?string $workingUserTimeStamp = null, ?string $travelDate = null, ?string $travelDateFrom = null, ?string $travelDateTo = null, ?string $travelTarget = null, ?string $travelType = null, ?string $travelPartner = null, ?string $extSystem = null, ?string $remark = null, ?string $surname = null, ?string $forename = null, ?int $custId = null, ?int $createdBy = null, ?string $orgUnit = null, ?string $bookingId = null, ?string $mediator = null, ?string $invoiceNo = null, ?string $ticketNo = null, ?string $agencyId = null, ?string $supplierId = null, ?string $status = null, ?bool $isBookingIdEmpty = null, ?bool $hideInsurances = null, ?bool $hideCancellations = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setCreationDate($creationDate)
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo)
            ->setPrice($price)
            ->setWorkingUser($workingUser)
            ->setWorkingUserTimeStamp($workingUserTimeStamp)
            ->setTravelDate($travelDate)
            ->setTravelDateFrom($travelDateFrom)
            ->setTravelDateTo($travelDateTo)
            ->setTravelTarget($travelTarget)
            ->setTravelType($travelType)
            ->setTravelPartner($travelPartner)
            ->setExtSystem($extSystem)
            ->setRemark($remark)
            ->setSurname($surname)
            ->setForename($forename)
            ->setCustId($custId)
            ->setCreatedBy($createdBy)
            ->setOrgUnit($orgUnit)
            ->setBookingId($bookingId)
            ->setMediator($mediator)
            ->setInvoiceNo($invoiceNo)
            ->setTicketNo($ticketNo)
            ->setAgencyId($agencyId)
            ->setSupplierId($supplierId)
            ->setStatus($status)
            ->setIsBookingIdEmpty($isBookingIdEmpty)
            ->setHideInsurances($hideInsurances)
            ->setHideCancellations($hideCancellations);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * Get workingUserTimeStamp value
     * @return string|null
     */
    public function getWorkingUserTimeStamp(): ?string
    {
        return $this->workingUserTimeStamp;
    }
    /**
     * Set workingUserTimeStamp value
     * @param string $workingUserTimeStamp
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setWorkingUserTimeStamp(?string $workingUserTimeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($workingUserTimeStamp) && !is_string($workingUserTimeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workingUserTimeStamp, true), gettype($workingUserTimeStamp)), __LINE__);
        }
        $this->workingUserTimeStamp = $workingUserTimeStamp;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get travelDateFrom value
     * @return string|null
     */
    public function getTravelDateFrom(): ?string
    {
        return $this->travelDateFrom;
    }
    /**
     * Set travelDateFrom value
     * @param string $travelDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setTravelDateFrom(?string $travelDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateFrom) && !is_string($travelDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateFrom, true), gettype($travelDateFrom)), __LINE__);
        }
        $this->travelDateFrom = $travelDateFrom;
        
        return $this;
    }
    /**
     * Get travelDateTo value
     * @return string|null
     */
    public function getTravelDateTo(): ?string
    {
        return $this->travelDateTo;
    }
    /**
     * Set travelDateTo value
     * @param string $travelDateTo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setTravelDateTo(?string $travelDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateTo) && !is_string($travelDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateTo, true), gettype($travelDateTo)), __LINE__);
        }
        $this->travelDateTo = $travelDateTo;
        
        return $this;
    }
    /**
     * Get travelTarget value
     * @return string|null
     */
    public function getTravelTarget(): ?string
    {
        return $this->travelTarget;
    }
    /**
     * Set travelTarget value
     * @param string $travelTarget
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setTravelTarget(?string $travelTarget = null): self
    {
        // validation for constraint: string
        if (!is_null($travelTarget) && !is_string($travelTarget)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelTarget, true), gettype($travelTarget)), __LINE__);
        }
        $this->travelTarget = $travelTarget;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * Get travelPartner value
     * @return string|null
     */
    public function getTravelPartner(): ?string
    {
        return $this->travelPartner;
    }
    /**
     * Set travelPartner value
     * @param string $travelPartner
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setTravelPartner(?string $travelPartner = null): self
    {
        // validation for constraint: string
        if (!is_null($travelPartner) && !is_string($travelPartner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelPartner, true), gettype($travelPartner)), __LINE__);
        }
        $this->travelPartner = $travelPartner;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * Get surname value
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }
    /**
     * Set surname value
     * @param string $surname
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setSurname(?string $surname = null): self
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get custId value
     * @return int|null
     */
    public function getCustId(): ?int
    {
        return $this->custId;
    }
    /**
     * Set custId value
     * @param int $custId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setCustId(?int $custId = null): self
    {
        // validation for constraint: int
        if (!is_null($custId) && !(is_int($custId) || ctype_digit($custId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($custId, true), gettype($custId)), __LINE__);
        }
        $this->custId = $custId;
        
        return $this;
    }
    /**
     * Get createdBy value
     * @return int|null
     */
    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }
    /**
     * Set createdBy value
     * @param int $createdBy
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setCreatedBy(?int $createdBy = null): self
    {
        // validation for constraint: int
        if (!is_null($createdBy) && !(is_int($createdBy) || ctype_digit($createdBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($createdBy, true), gettype($createdBy)), __LINE__);
        }
        $this->createdBy = $createdBy;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * Get mediator value
     * @return string|null
     */
    public function getMediator(): ?string
    {
        return $this->mediator;
    }
    /**
     * Set mediator value
     * @param string $mediator
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setMediator(?string $mediator = null): self
    {
        // validation for constraint: string
        if (!is_null($mediator) && !is_string($mediator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediator, true), gettype($mediator)), __LINE__);
        }
        $this->mediator = $mediator;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return string|null
     */
    public function getInvoiceNo(): ?string
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param string $invoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setInvoiceNo(?string $invoiceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNo) && !is_string($invoiceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get ticketNo value
     * @return string|null
     */
    public function getTicketNo(): ?string
    {
        return $this->ticketNo;
    }
    /**
     * Set ticketNo value
     * @param string $ticketNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setTicketNo(?string $ticketNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNo) && !is_string($ticketNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNo, true), gettype($ticketNo)), __LINE__);
        }
        $this->ticketNo = $ticketNo;
        
        return $this;
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
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
     * Get isBookingIdEmpty value
     * @return bool|null
     */
    public function getIsBookingIdEmpty(): ?bool
    {
        return $this->isBookingIdEmpty;
    }
    /**
     * Set isBookingIdEmpty value
     * @param bool $isBookingIdEmpty
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setIsBookingIdEmpty(?bool $isBookingIdEmpty = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBookingIdEmpty) && !is_bool($isBookingIdEmpty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBookingIdEmpty, true), gettype($isBookingIdEmpty)), __LINE__);
        }
        $this->isBookingIdEmpty = $isBookingIdEmpty;
        
        return $this;
    }
    /**
     * Get hideInsurances value
     * @return bool|null
     */
    public function getHideInsurances(): ?bool
    {
        return $this->hideInsurances;
    }
    /**
     * Set hideInsurances value
     * @param bool $hideInsurances
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setHideInsurances(?bool $hideInsurances = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hideInsurances) && !is_bool($hideInsurances)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideInsurances, true), gettype($hideInsurances)), __LINE__);
        }
        $this->hideInsurances = $hideInsurances;
        
        return $this;
    }
    /**
     * Get hideCancellations value
     * @return bool|null
     */
    public function getHideCancellations(): ?bool
    {
        return $this->hideCancellations;
    }
    /**
     * Set hideCancellations value
     * @param bool $hideCancellations
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl
     */
    public function setHideCancellations(?bool $hideCancellations = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hideCancellations) && !is_bool($hideCancellations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideCancellations, true), gettype($hideCancellations)), __LINE__);
        }
        $this->hideCancellations = $hideCancellations;
        
        return $this;
    }
}
