<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MilesAndMoreCustomerDataRequestDTO StructType
 * @subpackage Structs
 */
class MilesAndMoreCustomerDataRequestDTO extends AbstractStructBase
{
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The requestId
     * @var string|null
     */
    protected ?string $requestId = null;
    /**
     * The secret
     * @var string|null
     */
    protected ?string $secret = null;
    /**
     * The used
     * @var string|null
     */
    protected ?string $used = null;
    /**
     * Constructor method for MilesAndMoreCustomerDataRequestDTO
     * @uses MilesAndMoreCustomerDataRequestDTO::setCreationTime()
     * @uses MilesAndMoreCustomerDataRequestDTO::setCreationUser()
     * @uses MilesAndMoreCustomerDataRequestDTO::setCustomerId()
     * @uses MilesAndMoreCustomerDataRequestDTO::setRequestId()
     * @uses MilesAndMoreCustomerDataRequestDTO::setSecret()
     * @uses MilesAndMoreCustomerDataRequestDTO::setUsed()
     * @param string $creationTime
     * @param int $creationUser
     * @param int $customerId
     * @param string $requestId
     * @param string $secret
     * @param string $used
     */
    public function __construct(?string $creationTime = null, ?int $creationUser = null, ?int $customerId = null, ?string $requestId = null, ?string $secret = null, ?string $used = null)
    {
        $this
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setCustomerId($customerId)
            ->setRequestId($requestId)
            ->setSecret($secret)
            ->setUsed($used);
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataRequestDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataRequestDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataRequestDTO
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
     * Get requestId value
     * @return string|null
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }
    /**
     * Set requestId value
     * @param string $requestId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataRequestDTO
     */
    public function setRequestId(?string $requestId = null): self
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestId, true), gettype($requestId)), __LINE__);
        }
        $this->requestId = $requestId;
        
        return $this;
    }
    /**
     * Get secret value
     * @return string|null
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }
    /**
     * Set secret value
     * @param string $secret
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataRequestDTO
     */
    public function setSecret(?string $secret = null): self
    {
        // validation for constraint: string
        if (!is_null($secret) && !is_string($secret)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secret, true), gettype($secret)), __LINE__);
        }
        $this->secret = $secret;
        
        return $this;
    }
    /**
     * Get used value
     * @return string|null
     */
    public function getUsed(): ?string
    {
        return $this->used;
    }
    /**
     * Set used value
     * @param string $used
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataRequestDTO
     */
    public function setUsed(?string $used = null): self
    {
        // validation for constraint: string
        if (!is_null($used) && !is_string($used)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($used, true), gettype($used)), __LINE__);
        }
        $this->used = $used;
        
        return $this;
    }
}
