<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmUserAddressingDTO StructType
 * @subpackage Structs
 */
class CrmUserAddressingDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The formalAddressing
     * @var bool|null
     */
    protected ?bool $formalAddressing = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for CrmUserAddressingDTO
     * @uses CrmUserAddressingDTO::setCustomerId()
     * @uses CrmUserAddressingDTO::setFormalAddressing()
     * @uses CrmUserAddressingDTO::setUserId()
     * @param int $customerId
     * @param bool $formalAddressing
     * @param int $userId
     */
    public function __construct(?int $customerId = null, ?bool $formalAddressing = null, ?int $userId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setFormalAddressing($formalAddressing)
            ->setUserId($userId);
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmUserAddressingDTO
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
     * Get formalAddressing value
     * @return bool|null
     */
    public function getFormalAddressing(): ?bool
    {
        return $this->formalAddressing;
    }
    /**
     * Set formalAddressing value
     * @param bool $formalAddressing
     * @return \Pggns\MidocoApi\Order\StructType\CrmUserAddressingDTO
     */
    public function setFormalAddressing(?bool $formalAddressing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($formalAddressing) && !is_bool($formalAddressing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($formalAddressing, true), gettype($formalAddressing)), __LINE__);
        }
        $this->formalAddressing = $formalAddressing;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmUserAddressingDTO
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
