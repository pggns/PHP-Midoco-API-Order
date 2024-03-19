<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderCreditCheckLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderCreditCheckLogDTO extends AbstractStructBase
{
    /**
     * The creditCheckId
     * @var int|null
     */
    protected ?int $creditCheckId = null;
    /**
     * The logTimestamp
     * @var string|null
     */
    protected ?string $logTimestamp = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The requestString
     * @var string|null
     */
    protected ?string $requestString = null;
    /**
     * The responseString
     * @var string|null
     */
    protected ?string $responseString = null;
    /**
     * The techStatus
     * @var string|null
     */
    protected ?string $techStatus = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for OrderCreditCheckLogDTO
     * @uses OrderCreditCheckLogDTO::setCreditCheckId()
     * @uses OrderCreditCheckLogDTO::setLogTimestamp()
     * @uses OrderCreditCheckLogDTO::setOrderId()
     * @uses OrderCreditCheckLogDTO::setRequestString()
     * @uses OrderCreditCheckLogDTO::setResponseString()
     * @uses OrderCreditCheckLogDTO::setTechStatus()
     * @uses OrderCreditCheckLogDTO::setUserId()
     * @param int $creditCheckId
     * @param string $logTimestamp
     * @param int $orderId
     * @param string $requestString
     * @param string $responseString
     * @param string $techStatus
     * @param int $userId
     */
    public function __construct(?int $creditCheckId = null, ?string $logTimestamp = null, ?int $orderId = null, ?string $requestString = null, ?string $responseString = null, ?string $techStatus = null, ?int $userId = null)
    {
        $this
            ->setCreditCheckId($creditCheckId)
            ->setLogTimestamp($logTimestamp)
            ->setOrderId($orderId)
            ->setRequestString($requestString)
            ->setResponseString($responseString)
            ->setTechStatus($techStatus)
            ->setUserId($userId);
    }
    /**
     * Get creditCheckId value
     * @return int|null
     */
    public function getCreditCheckId(): ?int
    {
        return $this->creditCheckId;
    }
    /**
     * Set creditCheckId value
     * @param int $creditCheckId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckLogDTO
     */
    public function setCreditCheckId(?int $creditCheckId = null): self
    {
        // validation for constraint: int
        if (!is_null($creditCheckId) && !(is_int($creditCheckId) || ctype_digit($creditCheckId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creditCheckId, true), gettype($creditCheckId)), __LINE__);
        }
        $this->creditCheckId = $creditCheckId;
        
        return $this;
    }
    /**
     * Get logTimestamp value
     * @return string|null
     */
    public function getLogTimestamp(): ?string
    {
        return $this->logTimestamp;
    }
    /**
     * Set logTimestamp value
     * @param string $logTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckLogDTO
     */
    public function setLogTimestamp(?string $logTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($logTimestamp) && !is_string($logTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logTimestamp, true), gettype($logTimestamp)), __LINE__);
        }
        $this->logTimestamp = $logTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckLogDTO
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
     * Get requestString value
     * @return string|null
     */
    public function getRequestString(): ?string
    {
        return $this->requestString;
    }
    /**
     * Set requestString value
     * @param string $requestString
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckLogDTO
     */
    public function setRequestString(?string $requestString = null): self
    {
        // validation for constraint: string
        if (!is_null($requestString) && !is_string($requestString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestString, true), gettype($requestString)), __LINE__);
        }
        $this->requestString = $requestString;
        
        return $this;
    }
    /**
     * Get responseString value
     * @return string|null
     */
    public function getResponseString(): ?string
    {
        return $this->responseString;
    }
    /**
     * Set responseString value
     * @param string $responseString
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckLogDTO
     */
    public function setResponseString(?string $responseString = null): self
    {
        // validation for constraint: string
        if (!is_null($responseString) && !is_string($responseString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseString, true), gettype($responseString)), __LINE__);
        }
        $this->responseString = $responseString;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckLogDTO
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
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckLogDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
