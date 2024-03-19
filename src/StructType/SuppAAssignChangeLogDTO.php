<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuppAAssignChangeLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SuppAAssignChangeLogDTO extends AbstractStructBase
{
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The destinationKey
     * @var string|null
     */
    protected ?string $destinationKey = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * Constructor method for SuppAAssignChangeLogDTO
     * @uses SuppAAssignChangeLogDTO::setChangeId()
     * @uses SuppAAssignChangeLogDTO::setDestinationKey()
     * @uses SuppAAssignChangeLogDTO::setSupplierId()
     * @uses SuppAAssignChangeLogDTO::setTimestamp()
     * @uses SuppAAssignChangeLogDTO::setTraveltype()
     * @uses SuppAAssignChangeLogDTO::setUserId()
     * @uses SuppAAssignChangeLogDTO::setValidFrom()
     * @param int $changeId
     * @param string $destinationKey
     * @param string $supplierId
     * @param string $timestamp
     * @param string $traveltype
     * @param int $userId
     * @param string $validFrom
     */
    public function __construct(?int $changeId = null, ?string $destinationKey = null, ?string $supplierId = null, ?string $timestamp = null, ?string $traveltype = null, ?int $userId = null, ?string $validFrom = null)
    {
        $this
            ->setChangeId($changeId)
            ->setDestinationKey($destinationKey)
            ->setSupplierId($supplierId)
            ->setTimestamp($timestamp)
            ->setTraveltype($traveltype)
            ->setUserId($userId)
            ->setValidFrom($validFrom);
    }
    /**
     * Get changeId value
     * @return int|null
     */
    public function getChangeId(): ?int
    {
        return $this->changeId;
    }
    /**
     * Set changeId value
     * @param int $changeId
     * @return \Pggns\MidocoApi\Order\StructType\SuppAAssignChangeLogDTO
     */
    public function setChangeId(?int $changeId = null): self
    {
        // validation for constraint: int
        if (!is_null($changeId) && !(is_int($changeId) || ctype_digit($changeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changeId, true), gettype($changeId)), __LINE__);
        }
        $this->changeId = $changeId;
        
        return $this;
    }
    /**
     * Get destinationKey value
     * @return string|null
     */
    public function getDestinationKey(): ?string
    {
        return $this->destinationKey;
    }
    /**
     * Set destinationKey value
     * @param string $destinationKey
     * @return \Pggns\MidocoApi\Order\StructType\SuppAAssignChangeLogDTO
     */
    public function setDestinationKey(?string $destinationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationKey) && !is_string($destinationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationKey, true), gettype($destinationKey)), __LINE__);
        }
        $this->destinationKey = $destinationKey;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppAAssignChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppAAssignChangeLogDTO
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
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\SuppAAssignChangeLogDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppAAssignChangeLogDTO
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
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\SuppAAssignChangeLogDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
}
