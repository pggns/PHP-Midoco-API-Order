<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmMidocoChargeDTO StructType
 * @subpackage Structs
 */
class CrmMidocoChargeDTO extends AbstractStructBase
{
    /**
     * The amountPerBatch
     * @var float|null
     */
    protected ?float $amountPerBatch = null;
    /**
     * The batchQuantity
     * @var int|null
     */
    protected ?int $batchQuantity = null;
    /**
     * The chargeId
     * @var int|null
     */
    protected ?int $chargeId = null;
    /**
     * The crmChargeId
     * @var int|null
     */
    protected ?int $crmChargeId = null;
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
     * The factor
     * @var int|null
     */
    protected ?int $factor = null;
    /**
     * The includedQuantity
     * @var int|null
     */
    protected ?int $includedQuantity = null;
    /**
     * The isMaster
     * @var bool|null
     */
    protected ?bool $isMaster = null;
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
     * Constructor method for CrmMidocoChargeDTO
     * @uses CrmMidocoChargeDTO::setAmountPerBatch()
     * @uses CrmMidocoChargeDTO::setBatchQuantity()
     * @uses CrmMidocoChargeDTO::setChargeId()
     * @uses CrmMidocoChargeDTO::setCrmChargeId()
     * @uses CrmMidocoChargeDTO::setCustomerId()
     * @uses CrmMidocoChargeDTO::setEndDate()
     * @uses CrmMidocoChargeDTO::setFactor()
     * @uses CrmMidocoChargeDTO::setIncludedQuantity()
     * @uses CrmMidocoChargeDTO::setIsMaster()
     * @uses CrmMidocoChargeDTO::setLastExecDate()
     * @uses CrmMidocoChargeDTO::setLastExecUser()
     * @uses CrmMidocoChargeDTO::setManualAmount()
     * @uses CrmMidocoChargeDTO::setManualNettoAmount()
     * @uses CrmMidocoChargeDTO::setStartDate()
     * @param float $amountPerBatch
     * @param int $batchQuantity
     * @param int $chargeId
     * @param int $crmChargeId
     * @param int $customerId
     * @param string $endDate
     * @param int $factor
     * @param int $includedQuantity
     * @param bool $isMaster
     * @param string $lastExecDate
     * @param int $lastExecUser
     * @param bool $manualAmount
     * @param float $manualNettoAmount
     * @param string $startDate
     */
    public function __construct(?float $amountPerBatch = null, ?int $batchQuantity = null, ?int $chargeId = null, ?int $crmChargeId = null, ?int $customerId = null, ?string $endDate = null, ?int $factor = null, ?int $includedQuantity = null, ?bool $isMaster = null, ?string $lastExecDate = null, ?int $lastExecUser = null, ?bool $manualAmount = null, ?float $manualNettoAmount = null, ?string $startDate = null)
    {
        $this
            ->setAmountPerBatch($amountPerBatch)
            ->setBatchQuantity($batchQuantity)
            ->setChargeId($chargeId)
            ->setCrmChargeId($crmChargeId)
            ->setCustomerId($customerId)
            ->setEndDate($endDate)
            ->setFactor($factor)
            ->setIncludedQuantity($includedQuantity)
            ->setIsMaster($isMaster)
            ->setLastExecDate($lastExecDate)
            ->setLastExecUser($lastExecUser)
            ->setManualAmount($manualAmount)
            ->setManualNettoAmount($manualNettoAmount)
            ->setStartDate($startDate);
    }
    /**
     * Get amountPerBatch value
     * @return float|null
     */
    public function getAmountPerBatch(): ?float
    {
        return $this->amountPerBatch;
    }
    /**
     * Set amountPerBatch value
     * @param float $amountPerBatch
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
     */
    public function setAmountPerBatch(?float $amountPerBatch = null): self
    {
        // validation for constraint: float
        if (!is_null($amountPerBatch) && !(is_float($amountPerBatch) || is_numeric($amountPerBatch))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountPerBatch, true), gettype($amountPerBatch)), __LINE__);
        }
        $this->amountPerBatch = $amountPerBatch;
        
        return $this;
    }
    /**
     * Get batchQuantity value
     * @return int|null
     */
    public function getBatchQuantity(): ?int
    {
        return $this->batchQuantity;
    }
    /**
     * Set batchQuantity value
     * @param int $batchQuantity
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
     */
    public function setBatchQuantity(?int $batchQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($batchQuantity) && !(is_int($batchQuantity) || ctype_digit($batchQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchQuantity, true), gettype($batchQuantity)), __LINE__);
        }
        $this->batchQuantity = $batchQuantity;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
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
     * Get crmChargeId value
     * @return int|null
     */
    public function getCrmChargeId(): ?int
    {
        return $this->crmChargeId;
    }
    /**
     * Set crmChargeId value
     * @param int $crmChargeId
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
     */
    public function setCrmChargeId(?int $crmChargeId = null): self
    {
        // validation for constraint: int
        if (!is_null($crmChargeId) && !(is_int($crmChargeId) || ctype_digit($crmChargeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($crmChargeId, true), gettype($crmChargeId)), __LINE__);
        }
        $this->crmChargeId = $crmChargeId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
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
     * Get factor value
     * @return int|null
     */
    public function getFactor(): ?int
    {
        return $this->factor;
    }
    /**
     * Set factor value
     * @param int $factor
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
     */
    public function setFactor(?int $factor = null): self
    {
        // validation for constraint: int
        if (!is_null($factor) && !(is_int($factor) || ctype_digit($factor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($factor, true), gettype($factor)), __LINE__);
        }
        $this->factor = $factor;
        
        return $this;
    }
    /**
     * Get includedQuantity value
     * @return int|null
     */
    public function getIncludedQuantity(): ?int
    {
        return $this->includedQuantity;
    }
    /**
     * Set includedQuantity value
     * @param int $includedQuantity
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
     */
    public function setIncludedQuantity(?int $includedQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($includedQuantity) && !(is_int($includedQuantity) || ctype_digit($includedQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($includedQuantity, true), gettype($includedQuantity)), __LINE__);
        }
        $this->includedQuantity = $includedQuantity;
        
        return $this;
    }
    /**
     * Get isMaster value
     * @return bool|null
     */
    public function getIsMaster(): ?bool
    {
        return $this->isMaster;
    }
    /**
     * Set isMaster value
     * @param bool $isMaster
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
     */
    public function setIsMaster(?bool $isMaster = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMaster) && !is_bool($isMaster)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMaster, true), gettype($isMaster)), __LINE__);
        }
        $this->isMaster = $isMaster;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeDTO
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
