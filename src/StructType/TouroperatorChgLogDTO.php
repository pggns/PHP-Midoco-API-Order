<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TouroperatorChgLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TouroperatorChgLogDTO extends AbstractStructBase
{
    /**
     * The action
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The companyName
     * @var string|null
     */
    protected ?string $companyName = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The touroperatorId
     * @var int|null
     */
    protected ?int $touroperatorId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for TouroperatorChgLogDTO
     * @uses TouroperatorChgLogDTO::setAction()
     * @uses TouroperatorChgLogDTO::setChangeId()
     * @uses TouroperatorChgLogDTO::setCompanyName()
     * @uses TouroperatorChgLogDTO::setTimestamp()
     * @uses TouroperatorChgLogDTO::setTouroperatorId()
     * @uses TouroperatorChgLogDTO::setUnitName()
     * @uses TouroperatorChgLogDTO::setUserId()
     * @param string $action
     * @param int $changeId
     * @param string $companyName
     * @param string $timestamp
     * @param int $touroperatorId
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?string $action = null, ?int $changeId = null, ?string $companyName = null, ?string $timestamp = null, ?int $touroperatorId = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setAction($action)
            ->setChangeId($changeId)
            ->setCompanyName($companyName)
            ->setTimestamp($timestamp)
            ->setTouroperatorId($touroperatorId)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorChgLogDTO
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorChgLogDTO
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
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorChgLogDTO
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorChgLogDTO
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
     * Get touroperatorId value
     * @return int|null
     */
    public function getTouroperatorId(): ?int
    {
        return $this->touroperatorId;
    }
    /**
     * Set touroperatorId value
     * @param int $touroperatorId
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorChgLogDTO
     */
    public function setTouroperatorId(?int $touroperatorId = null): self
    {
        // validation for constraint: int
        if (!is_null($touroperatorId) && !(is_int($touroperatorId) || ctype_digit($touroperatorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($touroperatorId, true), gettype($touroperatorId)), __LINE__);
        }
        $this->touroperatorId = $touroperatorId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorChgLogDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorChgLogDTO
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
