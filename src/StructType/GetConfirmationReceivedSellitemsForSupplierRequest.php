<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConfirmationReceivedSellitemsForSupplierRequest
 * StructType
 * @subpackage Structs
 */
class GetConfirmationReceivedSellitemsForSupplierRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The startCreationDate
     * @var string|null
     */
    protected ?string $startCreationDate = null;
    /**
     * The endCreationDate
     * @var string|null
     */
    protected ?string $endCreationDate = null;
    /**
     * The beginTravelStartDate
     * @var string|null
     */
    protected ?string $beginTravelStartDate = null;
    /**
     * The endTravelStartDate
     * @var string|null
     */
    protected ?string $endTravelStartDate = null;
    /**
     * The needsConfirmation
     * @var bool|null
     */
    protected ?bool $needsConfirmation = null;
    /**
     * The declined
     * @var bool|null
     */
    protected ?bool $declined = null;
    /**
     * The beginTravelEndDate
     * @var string|null
     */
    protected ?string $beginTravelEndDate = null;
    /**
     * The endTravelEndDate
     * @var string|null
     */
    protected ?string $endTravelEndDate = null;
    /**
     * The onlyHotel
     * @var bool|null
     */
    protected ?bool $onlyHotel = null;
    /**
     * The onlyTransfer
     * @var bool|null
     */
    protected ?bool $onlyTransfer = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The confirmed
     * @var bool|null
     */
    protected ?bool $confirmed = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The onlyStatusRQ
     * @var bool|null
     */
    protected ?bool $onlyStatusRQ = null;
    /**
     * The onlyStatusOK
     * @var bool|null
     */
    protected ?bool $onlyStatusOK = null;
    /**
     * Constructor method for GetConfirmationReceivedSellitemsForSupplierRequest
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setSupplierId()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setStartCreationDate()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setEndCreationDate()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setBeginTravelStartDate()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setEndTravelStartDate()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setNeedsConfirmation()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setDeclined()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setBeginTravelEndDate()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setEndTravelEndDate()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setOnlyHotel()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setOnlyTransfer()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setDestinationCode()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setConfirmed()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setOrderNo()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setOnlyStatusRQ()
     * @uses GetConfirmationReceivedSellitemsForSupplierRequest::setOnlyStatusOK()
     * @param string $supplierId
     * @param string $startCreationDate
     * @param string $endCreationDate
     * @param string $beginTravelStartDate
     * @param string $endTravelStartDate
     * @param bool $needsConfirmation
     * @param bool $declined
     * @param string $beginTravelEndDate
     * @param string $endTravelEndDate
     * @param bool $onlyHotel
     * @param bool $onlyTransfer
     * @param string $destinationCode
     * @param bool $confirmed
     * @param int $orderNo
     * @param bool $onlyStatusRQ
     * @param bool $onlyStatusOK
     */
    public function __construct(?string $supplierId = null, ?string $startCreationDate = null, ?string $endCreationDate = null, ?string $beginTravelStartDate = null, ?string $endTravelStartDate = null, ?bool $needsConfirmation = null, ?bool $declined = null, ?string $beginTravelEndDate = null, ?string $endTravelEndDate = null, ?bool $onlyHotel = null, ?bool $onlyTransfer = null, ?string $destinationCode = null, ?bool $confirmed = null, ?int $orderNo = null, ?bool $onlyStatusRQ = null, ?bool $onlyStatusOK = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setStartCreationDate($startCreationDate)
            ->setEndCreationDate($endCreationDate)
            ->setBeginTravelStartDate($beginTravelStartDate)
            ->setEndTravelStartDate($endTravelStartDate)
            ->setNeedsConfirmation($needsConfirmation)
            ->setDeclined($declined)
            ->setBeginTravelEndDate($beginTravelEndDate)
            ->setEndTravelEndDate($endTravelEndDate)
            ->setOnlyHotel($onlyHotel)
            ->setOnlyTransfer($onlyTransfer)
            ->setDestinationCode($destinationCode)
            ->setConfirmed($confirmed)
            ->setOrderNo($orderNo)
            ->setOnlyStatusRQ($onlyStatusRQ)
            ->setOnlyStatusOK($onlyStatusOK);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
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
     * Get startCreationDate value
     * @return string|null
     */
    public function getStartCreationDate(): ?string
    {
        return $this->startCreationDate;
    }
    /**
     * Set startCreationDate value
     * @param string $startCreationDate
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setStartCreationDate(?string $startCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startCreationDate) && !is_string($startCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startCreationDate, true), gettype($startCreationDate)), __LINE__);
        }
        $this->startCreationDate = $startCreationDate;
        
        return $this;
    }
    /**
     * Get endCreationDate value
     * @return string|null
     */
    public function getEndCreationDate(): ?string
    {
        return $this->endCreationDate;
    }
    /**
     * Set endCreationDate value
     * @param string $endCreationDate
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setEndCreationDate(?string $endCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endCreationDate) && !is_string($endCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endCreationDate, true), gettype($endCreationDate)), __LINE__);
        }
        $this->endCreationDate = $endCreationDate;
        
        return $this;
    }
    /**
     * Get beginTravelStartDate value
     * @return string|null
     */
    public function getBeginTravelStartDate(): ?string
    {
        return $this->beginTravelStartDate;
    }
    /**
     * Set beginTravelStartDate value
     * @param string $beginTravelStartDate
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setBeginTravelStartDate(?string $beginTravelStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($beginTravelStartDate) && !is_string($beginTravelStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginTravelStartDate, true), gettype($beginTravelStartDate)), __LINE__);
        }
        $this->beginTravelStartDate = $beginTravelStartDate;
        
        return $this;
    }
    /**
     * Get endTravelStartDate value
     * @return string|null
     */
    public function getEndTravelStartDate(): ?string
    {
        return $this->endTravelStartDate;
    }
    /**
     * Set endTravelStartDate value
     * @param string $endTravelStartDate
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setEndTravelStartDate(?string $endTravelStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravelStartDate) && !is_string($endTravelStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravelStartDate, true), gettype($endTravelStartDate)), __LINE__);
        }
        $this->endTravelStartDate = $endTravelStartDate;
        
        return $this;
    }
    /**
     * Get needsConfirmation value
     * @return bool|null
     */
    public function getNeedsConfirmation(): ?bool
    {
        return $this->needsConfirmation;
    }
    /**
     * Set needsConfirmation value
     * @param bool $needsConfirmation
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setNeedsConfirmation(?bool $needsConfirmation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsConfirmation) && !is_bool($needsConfirmation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsConfirmation, true), gettype($needsConfirmation)), __LINE__);
        }
        $this->needsConfirmation = $needsConfirmation;
        
        return $this;
    }
    /**
     * Get declined value
     * @return bool|null
     */
    public function getDeclined(): ?bool
    {
        return $this->declined;
    }
    /**
     * Set declined value
     * @param bool $declined
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setDeclined(?bool $declined = null): self
    {
        // validation for constraint: boolean
        if (!is_null($declined) && !is_bool($declined)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($declined, true), gettype($declined)), __LINE__);
        }
        $this->declined = $declined;
        
        return $this;
    }
    /**
     * Get beginTravelEndDate value
     * @return string|null
     */
    public function getBeginTravelEndDate(): ?string
    {
        return $this->beginTravelEndDate;
    }
    /**
     * Set beginTravelEndDate value
     * @param string $beginTravelEndDate
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setBeginTravelEndDate(?string $beginTravelEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($beginTravelEndDate) && !is_string($beginTravelEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginTravelEndDate, true), gettype($beginTravelEndDate)), __LINE__);
        }
        $this->beginTravelEndDate = $beginTravelEndDate;
        
        return $this;
    }
    /**
     * Get endTravelEndDate value
     * @return string|null
     */
    public function getEndTravelEndDate(): ?string
    {
        return $this->endTravelEndDate;
    }
    /**
     * Set endTravelEndDate value
     * @param string $endTravelEndDate
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setEndTravelEndDate(?string $endTravelEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravelEndDate) && !is_string($endTravelEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravelEndDate, true), gettype($endTravelEndDate)), __LINE__);
        }
        $this->endTravelEndDate = $endTravelEndDate;
        
        return $this;
    }
    /**
     * Get onlyHotel value
     * @return bool|null
     */
    public function getOnlyHotel(): ?bool
    {
        return $this->onlyHotel;
    }
    /**
     * Set onlyHotel value
     * @param bool $onlyHotel
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setOnlyHotel(?bool $onlyHotel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyHotel) && !is_bool($onlyHotel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyHotel, true), gettype($onlyHotel)), __LINE__);
        }
        $this->onlyHotel = $onlyHotel;
        
        return $this;
    }
    /**
     * Get onlyTransfer value
     * @return bool|null
     */
    public function getOnlyTransfer(): ?bool
    {
        return $this->onlyTransfer;
    }
    /**
     * Set onlyTransfer value
     * @param bool $onlyTransfer
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setOnlyTransfer(?bool $onlyTransfer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyTransfer) && !is_bool($onlyTransfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyTransfer, true), gettype($onlyTransfer)), __LINE__);
        }
        $this->onlyTransfer = $onlyTransfer;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
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
     * Get confirmed value
     * @return bool|null
     */
    public function getConfirmed(): ?bool
    {
        return $this->confirmed;
    }
    /**
     * Set confirmed value
     * @param bool $confirmed
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setConfirmed(?bool $confirmed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($confirmed) && !is_bool($confirmed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($confirmed, true), gettype($confirmed)), __LINE__);
        }
        $this->confirmed = $confirmed;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
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
     * Get onlyStatusRQ value
     * @return bool|null
     */
    public function getOnlyStatusRQ(): ?bool
    {
        return $this->onlyStatusRQ;
    }
    /**
     * Set onlyStatusRQ value
     * @param bool $onlyStatusRQ
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setOnlyStatusRQ(?bool $onlyStatusRQ = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyStatusRQ) && !is_bool($onlyStatusRQ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyStatusRQ, true), gettype($onlyStatusRQ)), __LINE__);
        }
        $this->onlyStatusRQ = $onlyStatusRQ;
        
        return $this;
    }
    /**
     * Get onlyStatusOK value
     * @return bool|null
     */
    public function getOnlyStatusOK(): ?bool
    {
        return $this->onlyStatusOK;
    }
    /**
     * Set onlyStatusOK value
     * @param bool $onlyStatusOK
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest
     */
    public function setOnlyStatusOK(?bool $onlyStatusOK = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyStatusOK) && !is_bool($onlyStatusOK)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyStatusOK, true), gettype($onlyStatusOK)), __LINE__);
        }
        $this->onlyStatusOK = $onlyStatusOK;
        
        return $this;
    }
}
