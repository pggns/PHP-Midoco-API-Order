<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCooperationInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCooperationInfo extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * The cooperationName
     * @var string|null
     */
    protected ?string $cooperationName = null;
    /**
     * Constructor method for MidocoCooperationInfo
     * @uses MidocoCooperationInfo::setCustomerId()
     * @uses MidocoCooperationInfo::setCooperationId()
     * @uses MidocoCooperationInfo::setCooperationName()
     * @param int $customerId
     * @param string $cooperationId
     * @param string $cooperationName
     */
    public function __construct(?int $customerId = null, ?string $cooperationId = null, ?string $cooperationName = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setCooperationId($cooperationId)
            ->setCooperationName($cooperationName);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCooperationInfo
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
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCooperationInfo
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
    /**
     * Get cooperationName value
     * @return string|null
     */
    public function getCooperationName(): ?string
    {
        return $this->cooperationName;
    }
    /**
     * Set cooperationName value
     * @param string $cooperationName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCooperationInfo
     */
    public function setCooperationName(?string $cooperationName = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationName) && !is_string($cooperationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationName, true), gettype($cooperationName)), __LINE__);
        }
        $this->cooperationName = $cooperationName;
        
        return $this;
    }
}
