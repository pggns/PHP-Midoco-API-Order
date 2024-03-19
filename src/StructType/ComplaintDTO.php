<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplaintDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ComplaintDTO extends AbstractStructBase
{
    /**
     * The complaintId
     * @var int|null
     */
    protected ?int $complaintId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The forwardDate
     * @var string|null
     */
    protected ?string $forwardDate = null;
    /**
     * The handled
     * @var bool|null
     */
    protected ?bool $handled = null;
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
     * The receiveDate
     * @var string|null
     */
    protected ?string $receiveDate = null;
    /**
     * The stateId
     * @var string|null
     */
    protected ?string $stateId = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for ComplaintDTO
     * @uses ComplaintDTO::setComplaintId()
     * @uses ComplaintDTO::setCustomerId()
     * @uses ComplaintDTO::setDescription()
     * @uses ComplaintDTO::setForwardDate()
     * @uses ComplaintDTO::setHandled()
     * @uses ComplaintDTO::setOrderId()
     * @uses ComplaintDTO::setOrderNo()
     * @uses ComplaintDTO::setReceiveDate()
     * @uses ComplaintDTO::setStateId()
     * @uses ComplaintDTO::setTypeId()
     * @param int $complaintId
     * @param int $customerId
     * @param string $description
     * @param string $forwardDate
     * @param bool $handled
     * @param int $orderId
     * @param int $orderNo
     * @param string $receiveDate
     * @param string $stateId
     * @param string $typeId
     */
    public function __construct(?int $complaintId = null, ?int $customerId = null, ?string $description = null, ?string $forwardDate = null, ?bool $handled = null, ?int $orderId = null, ?int $orderNo = null, ?string $receiveDate = null, ?string $stateId = null, ?string $typeId = null)
    {
        $this
            ->setComplaintId($complaintId)
            ->setCustomerId($customerId)
            ->setDescription($description)
            ->setForwardDate($forwardDate)
            ->setHandled($handled)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setReceiveDate($receiveDate)
            ->setStateId($stateId)
            ->setTypeId($typeId);
    }
    /**
     * Get complaintId value
     * @return int|null
     */
    public function getComplaintId(): ?int
    {
        return $this->complaintId;
    }
    /**
     * Set complaintId value
     * @param int $complaintId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDTO
     */
    public function setComplaintId(?int $complaintId = null): self
    {
        // validation for constraint: int
        if (!is_null($complaintId) && !(is_int($complaintId) || ctype_digit($complaintId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($complaintId, true), gettype($complaintId)), __LINE__);
        }
        $this->complaintId = $complaintId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDTO
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
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get forwardDate value
     * @return string|null
     */
    public function getForwardDate(): ?string
    {
        return $this->forwardDate;
    }
    /**
     * Set forwardDate value
     * @param string $forwardDate
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDTO
     */
    public function setForwardDate(?string $forwardDate = null): self
    {
        // validation for constraint: string
        if (!is_null($forwardDate) && !is_string($forwardDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardDate, true), gettype($forwardDate)), __LINE__);
        }
        $this->forwardDate = $forwardDate;
        
        return $this;
    }
    /**
     * Get handled value
     * @return bool|null
     */
    public function getHandled(): ?bool
    {
        return $this->handled;
    }
    /**
     * Set handled value
     * @param bool $handled
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDTO
     */
    public function setHandled(?bool $handled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($handled) && !is_bool($handled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($handled, true), gettype($handled)), __LINE__);
        }
        $this->handled = $handled;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDTO
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
     * Get receiveDate value
     * @return string|null
     */
    public function getReceiveDate(): ?string
    {
        return $this->receiveDate;
    }
    /**
     * Set receiveDate value
     * @param string $receiveDate
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDTO
     */
    public function setReceiveDate(?string $receiveDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiveDate) && !is_string($receiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiveDate, true), gettype($receiveDate)), __LINE__);
        }
        $this->receiveDate = $receiveDate;
        
        return $this;
    }
    /**
     * Get stateId value
     * @return string|null
     */
    public function getStateId(): ?string
    {
        return $this->stateId;
    }
    /**
     * Set stateId value
     * @param string $stateId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDTO
     */
    public function setStateId(?string $stateId = null): self
    {
        // validation for constraint: string
        if (!is_null($stateId) && !is_string($stateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateId, true), gettype($stateId)), __LINE__);
        }
        $this->stateId = $stateId;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
