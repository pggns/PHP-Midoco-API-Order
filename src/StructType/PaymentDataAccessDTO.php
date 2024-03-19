<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDataAccessDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentDataAccessDTO extends AbstractStructBase
{
    /**
     * The accessId
     * @var int|null
     */
    protected ?int $accessId = null;
    /**
     * The accessTimestamp
     * @var string|null
     */
    protected ?string $accessTimestamp = null;
    /**
     * The data
     * @var string|null
     */
    protected ?string $data = null;
    /**
     * The ipAddress
     * @var string|null
     */
    protected ?string $ipAddress = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for PaymentDataAccessDTO
     * @uses PaymentDataAccessDTO::setAccessId()
     * @uses PaymentDataAccessDTO::setAccessTimestamp()
     * @uses PaymentDataAccessDTO::setData()
     * @uses PaymentDataAccessDTO::setIpAddress()
     * @uses PaymentDataAccessDTO::setUserId()
     * @param int $accessId
     * @param string $accessTimestamp
     * @param string $data
     * @param string $ipAddress
     * @param int $userId
     */
    public function __construct(?int $accessId = null, ?string $accessTimestamp = null, ?string $data = null, ?string $ipAddress = null, ?int $userId = null)
    {
        $this
            ->setAccessId($accessId)
            ->setAccessTimestamp($accessTimestamp)
            ->setData($data)
            ->setIpAddress($ipAddress)
            ->setUserId($userId);
    }
    /**
     * Get accessId value
     * @return int|null
     */
    public function getAccessId(): ?int
    {
        return $this->accessId;
    }
    /**
     * Set accessId value
     * @param int $accessId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentDataAccessDTO
     */
    public function setAccessId(?int $accessId = null): self
    {
        // validation for constraint: int
        if (!is_null($accessId) && !(is_int($accessId) || ctype_digit($accessId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accessId, true), gettype($accessId)), __LINE__);
        }
        $this->accessId = $accessId;
        
        return $this;
    }
    /**
     * Get accessTimestamp value
     * @return string|null
     */
    public function getAccessTimestamp(): ?string
    {
        return $this->accessTimestamp;
    }
    /**
     * Set accessTimestamp value
     * @param string $accessTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\PaymentDataAccessDTO
     */
    public function setAccessTimestamp(?string $accessTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($accessTimestamp) && !is_string($accessTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessTimestamp, true), gettype($accessTimestamp)), __LINE__);
        }
        $this->accessTimestamp = $accessTimestamp;
        
        return $this;
    }
    /**
     * Get data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \Pggns\MidocoApi\Order\StructType\PaymentDataAccessDTO
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        
        return $this;
    }
    /**
     * Get ipAddress value
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }
    /**
     * Set ipAddress value
     * @param string $ipAddress
     * @return \Pggns\MidocoApi\Order\StructType\PaymentDataAccessDTO
     */
    public function setIpAddress(?string $ipAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($ipAddress) && !is_string($ipAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ipAddress, true), gettype($ipAddress)), __LINE__);
        }
        $this->ipAddress = $ipAddress;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentDataAccessDTO
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
