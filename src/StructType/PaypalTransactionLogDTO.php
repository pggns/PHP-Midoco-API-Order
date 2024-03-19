<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaypalTransactionLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaypalTransactionLogDTO extends AbstractStructBase
{
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
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
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * Constructor method for PaypalTransactionLogDTO
     * @uses PaypalTransactionLogDTO::setId()
     * @uses PaypalTransactionLogDTO::setRequestString()
     * @uses PaypalTransactionLogDTO::setResponseString()
     * @uses PaypalTransactionLogDTO::setTimestamp()
     * @uses PaypalTransactionLogDTO::setTransactionId()
     * @param int $id
     * @param string $requestString
     * @param string $responseString
     * @param string $timestamp
     * @param int $transactionId
     */
    public function __construct(?int $id = null, ?string $requestString = null, ?string $responseString = null, ?string $timestamp = null, ?int $transactionId = null)
    {
        $this
            ->setId($id)
            ->setRequestString($requestString)
            ->setResponseString($responseString)
            ->setTimestamp($timestamp)
            ->setTransactionId($transactionId);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionLogDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionLogDTO
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
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionLogDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get transactionId value
     * @return int|null
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param int $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionLogDTO
     */
    public function setTransactionId(?int $transactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionId) && !(is_int($transactionId) || ctype_digit($transactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
}
