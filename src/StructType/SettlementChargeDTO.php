<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SettlementChargeDTO StructType
 * @subpackage Structs
 */
class SettlementChargeDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
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
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The includedQuantity
     * @var int|null
     */
    protected ?int $includedQuantity = null;
    /**
     * The isCredit
     * @var bool|null
     */
    protected ?bool $isCredit = null;
    /**
     * The isInteractive
     * @var bool|null
     */
    protected ?bool $isInteractive = null;
    /**
     * The lastExecDate
     * @var string|null
     */
    protected ?string $lastExecDate = null;
    /**
     * The lastExecUserId
     * @var int|null
     */
    protected ?int $lastExecUserId = null;
    /**
     * The modulId
     * @var string|null
     */
    protected ?string $modulId = null;
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The schedulePeriod
     * @var int|null
     */
    protected ?int $schedulePeriod = null;
    /**
     * The settlementType
     * @var int|null
     */
    protected ?int $settlementType = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The useVat
     * @var bool|null
     */
    protected ?bool $useVat = null;
    /**
     * Constructor method for SettlementChargeDTO
     * @uses SettlementChargeDTO::setAccountId()
     * @uses SettlementChargeDTO::setAmountPerBatch()
     * @uses SettlementChargeDTO::setBatchQuantity()
     * @uses SettlementChargeDTO::setChargeId()
     * @uses SettlementChargeDTO::setDescription()
     * @uses SettlementChargeDTO::setIncludedQuantity()
     * @uses SettlementChargeDTO::setIsCredit()
     * @uses SettlementChargeDTO::setIsInteractive()
     * @uses SettlementChargeDTO::setLastExecDate()
     * @uses SettlementChargeDTO::setLastExecUserId()
     * @uses SettlementChargeDTO::setModulId()
     * @uses SettlementChargeDTO::setNettoAmount()
     * @uses SettlementChargeDTO::setPlanId()
     * @uses SettlementChargeDTO::setSchedulePeriod()
     * @uses SettlementChargeDTO::setSettlementType()
     * @uses SettlementChargeDTO::setStartDate()
     * @uses SettlementChargeDTO::setUnitName()
     * @uses SettlementChargeDTO::setUseVat()
     * @param string $accountId
     * @param float $amountPerBatch
     * @param int $batchQuantity
     * @param int $chargeId
     * @param string $description
     * @param int $includedQuantity
     * @param bool $isCredit
     * @param bool $isInteractive
     * @param string $lastExecDate
     * @param int $lastExecUserId
     * @param string $modulId
     * @param float $nettoAmount
     * @param string $planId
     * @param int $schedulePeriod
     * @param int $settlementType
     * @param string $startDate
     * @param string $unitName
     * @param bool $useVat
     */
    public function __construct(?string $accountId = null, ?float $amountPerBatch = null, ?int $batchQuantity = null, ?int $chargeId = null, ?string $description = null, ?int $includedQuantity = null, ?bool $isCredit = null, ?bool $isInteractive = null, ?string $lastExecDate = null, ?int $lastExecUserId = null, ?string $modulId = null, ?float $nettoAmount = null, ?string $planId = null, ?int $schedulePeriod = null, ?int $settlementType = null, ?string $startDate = null, ?string $unitName = null, ?bool $useVat = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAmountPerBatch($amountPerBatch)
            ->setBatchQuantity($batchQuantity)
            ->setChargeId($chargeId)
            ->setDescription($description)
            ->setIncludedQuantity($includedQuantity)
            ->setIsCredit($isCredit)
            ->setIsInteractive($isInteractive)
            ->setLastExecDate($lastExecDate)
            ->setLastExecUserId($lastExecUserId)
            ->setModulId($modulId)
            ->setNettoAmount($nettoAmount)
            ->setPlanId($planId)
            ->setSchedulePeriod($schedulePeriod)
            ->setSettlementType($settlementType)
            ->setStartDate($startDate)
            ->setUnitName($unitName)
            ->setUseVat($useVat);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
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
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
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
     * Get isCredit value
     * @return bool|null
     */
    public function getIsCredit(): ?bool
    {
        return $this->isCredit;
    }
    /**
     * Set isCredit value
     * @param bool $isCredit
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
     */
    public function setIsCredit(?bool $isCredit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCredit) && !is_bool($isCredit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCredit, true), gettype($isCredit)), __LINE__);
        }
        $this->isCredit = $isCredit;
        
        return $this;
    }
    /**
     * Get isInteractive value
     * @return bool|null
     */
    public function getIsInteractive(): ?bool
    {
        return $this->isInteractive;
    }
    /**
     * Set isInteractive value
     * @param bool $isInteractive
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
     */
    public function setIsInteractive(?bool $isInteractive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInteractive) && !is_bool($isInteractive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInteractive, true), gettype($isInteractive)), __LINE__);
        }
        $this->isInteractive = $isInteractive;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
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
     * Get lastExecUserId value
     * @return int|null
     */
    public function getLastExecUserId(): ?int
    {
        return $this->lastExecUserId;
    }
    /**
     * Set lastExecUserId value
     * @param int $lastExecUserId
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
     */
    public function setLastExecUserId(?int $lastExecUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($lastExecUserId) && !(is_int($lastExecUserId) || ctype_digit($lastExecUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastExecUserId, true), gettype($lastExecUserId)), __LINE__);
        }
        $this->lastExecUserId = $lastExecUserId;
        
        return $this;
    }
    /**
     * Get modulId value
     * @return string|null
     */
    public function getModulId(): ?string
    {
        return $this->modulId;
    }
    /**
     * Set modulId value
     * @param string $modulId
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
     */
    public function setModulId(?string $modulId = null): self
    {
        // validation for constraint: string
        if (!is_null($modulId) && !is_string($modulId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modulId, true), gettype($modulId)), __LINE__);
        }
        $this->modulId = $modulId;
        
        return $this;
    }
    /**
     * Get nettoAmount value
     * @return float|null
     */
    public function getNettoAmount(): ?float
    {
        return $this->nettoAmount;
    }
    /**
     * Set nettoAmount value
     * @param float $nettoAmount
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
     */
    public function setNettoAmount(?float $nettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nettoAmount) && !(is_float($nettoAmount) || is_numeric($nettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nettoAmount, true), gettype($nettoAmount)), __LINE__);
        }
        $this->nettoAmount = $nettoAmount;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get schedulePeriod value
     * @return int|null
     */
    public function getSchedulePeriod(): ?int
    {
        return $this->schedulePeriod;
    }
    /**
     * Set schedulePeriod value
     * @param int $schedulePeriod
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
     */
    public function setSchedulePeriod(?int $schedulePeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($schedulePeriod) && !(is_int($schedulePeriod) || ctype_digit($schedulePeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($schedulePeriod, true), gettype($schedulePeriod)), __LINE__);
        }
        $this->schedulePeriod = $schedulePeriod;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return int|null
     */
    public function getSettlementType(): ?int
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param int $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
     */
    public function setSettlementType(?int $settlementType = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementType) && !(is_int($settlementType) || ctype_digit($settlementType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
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
     * Get useVat value
     * @return bool|null
     */
    public function getUseVat(): ?bool
    {
        return $this->useVat;
    }
    /**
     * Set useVat value
     * @param bool $useVat
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
     */
    public function setUseVat(?bool $useVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useVat) && !is_bool($useVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useVat, true), gettype($useVat)), __LINE__);
        }
        $this->useVat = $useVat;
        
        return $this;
    }
}
