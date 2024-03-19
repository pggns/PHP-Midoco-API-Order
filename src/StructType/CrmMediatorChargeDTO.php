<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmMediatorChargeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmMediatorChargeDTO extends AbstractStructBase
{
    /**
     * The chargeId
     * @var int|null
     */
    protected ?int $chargeId = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The lastExecDate
     * @var string|null
     */
    protected ?string $lastExecDate = null;
    /**
     * The lastExecUser
     * @var int|null
     */
    protected ?int $lastExecUser = null;
    /**
     * The manualAmount
     * @var bool|null
     */
    protected ?bool $manualAmount = null;
    /**
     * The manualNettoAmount
     * @var float|null
     */
    protected ?float $manualNettoAmount = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * Constructor method for CrmMediatorChargeDTO
     * @uses CrmMediatorChargeDTO::setChargeId()
     * @uses CrmMediatorChargeDTO::setCostCentre()
     * @uses CrmMediatorChargeDTO::setCustomerId()
     * @uses CrmMediatorChargeDTO::setEndDate()
     * @uses CrmMediatorChargeDTO::setLastExecDate()
     * @uses CrmMediatorChargeDTO::setLastExecUser()
     * @uses CrmMediatorChargeDTO::setManualAmount()
     * @uses CrmMediatorChargeDTO::setManualNettoAmount()
     * @uses CrmMediatorChargeDTO::setStartDate()
     * @param int $chargeId
     * @param string $costCentre
     * @param int $customerId
     * @param string $endDate
     * @param string $lastExecDate
     * @param int $lastExecUser
     * @param bool $manualAmount
     * @param float $manualNettoAmount
     * @param string $startDate
     */
    public function __construct(?int $chargeId = null, ?string $costCentre = null, ?int $customerId = null, ?string $endDate = null, ?string $lastExecDate = null, ?int $lastExecUser = null, ?bool $manualAmount = null, ?float $manualNettoAmount = null, ?string $startDate = null)
    {
        $this
            ->setChargeId($chargeId)
            ->setCostCentre($costCentre)
            ->setCustomerId($customerId)
            ->setEndDate($endDate)
            ->setLastExecDate($lastExecDate)
            ->setLastExecUser($lastExecUser)
            ->setManualAmount($manualAmount)
            ->setManualNettoAmount($manualNettoAmount)
            ->setStartDate($startDate);
    }
    /**
     * Get chargeId value
     * @return int|null
     */
    public function getChargeId(): ?int
    {
        return $this->chargeId;
    }
    /**
     * Set chargeId value
     * @param int $chargeId
     * @return \Pggns\MidocoApi\Order\StructType\CrmMediatorChargeDTO
     */
    public function setChargeId(?int $chargeId = null): self
    {
        // validation for constraint: int
        if (!is_null($chargeId) && !(is_int($chargeId) || ctype_digit($chargeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($chargeId, true), gettype($chargeId)), __LINE__);
        }
        $this->chargeId = $chargeId;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\CrmMediatorChargeDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMediatorChargeDTO
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
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\CrmMediatorChargeDTO
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get lastExecDate value
     * @return string|null
     */
    public function getLastExecDate(): ?string
    {
        return $this->lastExecDate;
    }
    /**
     * Set lastExecDate value
     * @param string $lastExecDate
     * @return \Pggns\MidocoApi\Order\StructType\CrmMediatorChargeDTO
     */
    public function setLastExecDate(?string $lastExecDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastExecDate) && !is_string($lastExecDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastExecDate, true), gettype($lastExecDate)), __LINE__);
        }
        $this->lastExecDate = $lastExecDate;
        
        return $this;
    }
    /**
     * Get lastExecUser value
     * @return int|null
     */
    public function getLastExecUser(): ?int
    {
        return $this->lastExecUser;
    }
    /**
     * Set lastExecUser value
     * @param int $lastExecUser
     * @return \Pggns\MidocoApi\Order\StructType\CrmMediatorChargeDTO
     */
    public function setLastExecUser(?int $lastExecUser = null): self
    {
        // validation for constraint: int
        if (!is_null($lastExecUser) && !(is_int($lastExecUser) || ctype_digit($lastExecUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastExecUser, true), gettype($lastExecUser)), __LINE__);
        }
        $this->lastExecUser = $lastExecUser;
        
        return $this;
    }
    /**
     * Get manualAmount value
     * @return bool|null
     */
    public function getManualAmount(): ?bool
    {
        return $this->manualAmount;
    }
    /**
     * Set manualAmount value
     * @param bool $manualAmount
     * @return \Pggns\MidocoApi\Order\StructType\CrmMediatorChargeDTO
     */
    public function setManualAmount(?bool $manualAmount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manualAmount) && !is_bool($manualAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manualAmount, true), gettype($manualAmount)), __LINE__);
        }
        $this->manualAmount = $manualAmount;
        
        return $this;
    }
    /**
     * Get manualNettoAmount value
     * @return float|null
     */
    public function getManualNettoAmount(): ?float
    {
        return $this->manualNettoAmount;
    }
    /**
     * Set manualNettoAmount value
     * @param float $manualNettoAmount
     * @return \Pggns\MidocoApi\Order\StructType\CrmMediatorChargeDTO
     */
    public function setManualNettoAmount(?float $manualNettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($manualNettoAmount) && !(is_float($manualNettoAmount) || is_numeric($manualNettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($manualNettoAmount, true), gettype($manualNettoAmount)), __LINE__);
        }
        $this->manualNettoAmount = $manualNettoAmount;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\CrmMediatorChargeDTO
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
}
