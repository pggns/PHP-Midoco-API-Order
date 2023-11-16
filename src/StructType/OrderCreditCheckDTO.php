<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderCreditCheckDTO StructType
 * @subpackage Structs
 */
class OrderCreditCheckDTO extends AbstractStructBase
{
    /**
     * The creditType
     * @var string|null
     */
    protected ?string $creditType = null;
    /**
     * The handled
     * @var bool|null
     */
    protected ?bool $handled = null;
    /**
     * The handledBy
     * @var int|null
     */
    protected ?int $handledBy = null;
    /**
     * The handledTimestamp
     * @var string|null
     */
    protected ?string $handledTimestamp = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The requestsCounter
     * @var int|null
     */
    protected ?int $requestsCounter = null;
    /**
     * The score
     * @var int|null
     */
    protected ?int $score = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The statusAdr
     * @var string|null
     */
    protected ?string $statusAdr = null;
    /**
     * The statusId
     * @var string|null
     */
    protected ?string $statusId = null;
    /**
     * The techStatus
     * @var string|null
     */
    protected ?string $techStatus = null;
    /**
     * The textMessage
     * @var string|null
     */
    protected ?string $textMessage = null;
    /**
     * Constructor method for OrderCreditCheckDTO
     * @uses OrderCreditCheckDTO::setCreditType()
     * @uses OrderCreditCheckDTO::setHandled()
     * @uses OrderCreditCheckDTO::setHandledBy()
     * @uses OrderCreditCheckDTO::setHandledTimestamp()
     * @uses OrderCreditCheckDTO::setOrderId()
     * @uses OrderCreditCheckDTO::setRequestsCounter()
     * @uses OrderCreditCheckDTO::setScore()
     * @uses OrderCreditCheckDTO::setStatus()
     * @uses OrderCreditCheckDTO::setStatusAdr()
     * @uses OrderCreditCheckDTO::setStatusId()
     * @uses OrderCreditCheckDTO::setTechStatus()
     * @uses OrderCreditCheckDTO::setTextMessage()
     * @param string $creditType
     * @param bool $handled
     * @param int $handledBy
     * @param string $handledTimestamp
     * @param int $orderId
     * @param int $requestsCounter
     * @param int $score
     * @param string $status
     * @param string $statusAdr
     * @param string $statusId
     * @param string $techStatus
     * @param string $textMessage
     */
    public function __construct(?string $creditType = null, ?bool $handled = null, ?int $handledBy = null, ?string $handledTimestamp = null, ?int $orderId = null, ?int $requestsCounter = null, ?int $score = null, ?string $status = null, ?string $statusAdr = null, ?string $statusId = null, ?string $techStatus = null, ?string $textMessage = null)
    {
        $this
            ->setCreditType($creditType)
            ->setHandled($handled)
            ->setHandledBy($handledBy)
            ->setHandledTimestamp($handledTimestamp)
            ->setOrderId($orderId)
            ->setRequestsCounter($requestsCounter)
            ->setScore($score)
            ->setStatus($status)
            ->setStatusAdr($statusAdr)
            ->setStatusId($statusId)
            ->setTechStatus($techStatus)
            ->setTextMessage($textMessage);
    }
    /**
     * Get creditType value
     * @return string|null
     */
    public function getCreditType(): ?string
    {
        return $this->creditType;
    }
    /**
     * Set creditType value
     * @param string $creditType
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
     */
    public function setCreditType(?string $creditType = null): self
    {
        // validation for constraint: string
        if (!is_null($creditType) && !is_string($creditType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditType, true), gettype($creditType)), __LINE__);
        }
        $this->creditType = $creditType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
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
     * Get handledBy value
     * @return int|null
     */
    public function getHandledBy(): ?int
    {
        return $this->handledBy;
    }
    /**
     * Set handledBy value
     * @param int $handledBy
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
     */
    public function setHandledBy(?int $handledBy = null): self
    {
        // validation for constraint: int
        if (!is_null($handledBy) && !(is_int($handledBy) || ctype_digit($handledBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($handledBy, true), gettype($handledBy)), __LINE__);
        }
        $this->handledBy = $handledBy;
        
        return $this;
    }
    /**
     * Get handledTimestamp value
     * @return string|null
     */
    public function getHandledTimestamp(): ?string
    {
        return $this->handledTimestamp;
    }
    /**
     * Set handledTimestamp value
     * @param string $handledTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
     */
    public function setHandledTimestamp(?string $handledTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($handledTimestamp) && !is_string($handledTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handledTimestamp, true), gettype($handledTimestamp)), __LINE__);
        }
        $this->handledTimestamp = $handledTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
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
     * Get requestsCounter value
     * @return int|null
     */
    public function getRequestsCounter(): ?int
    {
        return $this->requestsCounter;
    }
    /**
     * Set requestsCounter value
     * @param int $requestsCounter
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
     */
    public function setRequestsCounter(?int $requestsCounter = null): self
    {
        // validation for constraint: int
        if (!is_null($requestsCounter) && !(is_int($requestsCounter) || ctype_digit($requestsCounter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($requestsCounter, true), gettype($requestsCounter)), __LINE__);
        }
        $this->requestsCounter = $requestsCounter;
        
        return $this;
    }
    /**
     * Get score value
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
    }
    /**
     * Set score value
     * @param int $score
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
     */
    public function setScore(?int $score = null): self
    {
        // validation for constraint: int
        if (!is_null($score) && !(is_int($score) || ctype_digit($score))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($score, true), gettype($score)), __LINE__);
        }
        $this->score = $score;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
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
     * Get statusAdr value
     * @return string|null
     */
    public function getStatusAdr(): ?string
    {
        return $this->statusAdr;
    }
    /**
     * Set statusAdr value
     * @param string $statusAdr
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
     */
    public function setStatusAdr(?string $statusAdr = null): self
    {
        // validation for constraint: string
        if (!is_null($statusAdr) && !is_string($statusAdr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusAdr, true), gettype($statusAdr)), __LINE__);
        }
        $this->statusAdr = $statusAdr;
        
        return $this;
    }
    /**
     * Get statusId value
     * @return string|null
     */
    public function getStatusId(): ?string
    {
        return $this->statusId;
    }
    /**
     * Set statusId value
     * @param string $statusId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
     */
    public function setStatusId(?string $statusId = null): self
    {
        // validation for constraint: string
        if (!is_null($statusId) && !is_string($statusId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusId, true), gettype($statusId)), __LINE__);
        }
        $this->statusId = $statusId;
        
        return $this;
    }
    /**
     * Get techStatus value
     * @return string|null
     */
    public function getTechStatus(): ?string
    {
        return $this->techStatus;
    }
    /**
     * Set techStatus value
     * @param string $techStatus
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
     */
    public function setTechStatus(?string $techStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($techStatus) && !is_string($techStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($techStatus, true), gettype($techStatus)), __LINE__);
        }
        $this->techStatus = $techStatus;
        
        return $this;
    }
    /**
     * Get textMessage value
     * @return string|null
     */
    public function getTextMessage(): ?string
    {
        return $this->textMessage;
    }
    /**
     * Set textMessage value
     * @param string $textMessage
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
     */
    public function setTextMessage(?string $textMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($textMessage) && !is_string($textMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textMessage, true), gettype($textMessage)), __LINE__);
        }
        $this->textMessage = $textMessage;
        
        return $this;
    }
}
