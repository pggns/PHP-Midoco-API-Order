<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignedMidocoChargeOuDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AssignedMidocoChargeOuDTO extends AbstractStructBase
{
    /**
     * The assignedMidocoChargeOuId
     * @var int|null
     */
    protected ?int $assignedMidocoChargeOuId = null;
    /**
     * The chargeId
     * @var int|null
     */
    protected ?int $chargeId = null;
    /**
     * The contractEndDate
     * @var string|null
     */
    protected ?string $contractEndDate = null;
    /**
     * The contractStartDate
     * @var string|null
     */
    protected ?string $contractStartDate = null;
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
     * The isActivated
     * @var bool|null
     */
    protected ?bool $isActivated = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The useAllSubUnits
     * @var bool|null
     */
    protected ?bool $useAllSubUnits = null;
    /**
     * Constructor method for AssignedMidocoChargeOuDTO
     * @uses AssignedMidocoChargeOuDTO::setAssignedMidocoChargeOuId()
     * @uses AssignedMidocoChargeOuDTO::setChargeId()
     * @uses AssignedMidocoChargeOuDTO::setContractEndDate()
     * @uses AssignedMidocoChargeOuDTO::setContractStartDate()
     * @uses AssignedMidocoChargeOuDTO::setCrmChargeId()
     * @uses AssignedMidocoChargeOuDTO::setCustomerId()
     * @uses AssignedMidocoChargeOuDTO::setIsActivated()
     * @uses AssignedMidocoChargeOuDTO::setUnitName()
     * @uses AssignedMidocoChargeOuDTO::setUseAllSubUnits()
     * @param int $assignedMidocoChargeOuId
     * @param int $chargeId
     * @param string $contractEndDate
     * @param string $contractStartDate
     * @param int $crmChargeId
     * @param int $customerId
     * @param bool $isActivated
     * @param string $unitName
     * @param bool $useAllSubUnits
     */
    public function __construct(?int $assignedMidocoChargeOuId = null, ?int $chargeId = null, ?string $contractEndDate = null, ?string $contractStartDate = null, ?int $crmChargeId = null, ?int $customerId = null, ?bool $isActivated = null, ?string $unitName = null, ?bool $useAllSubUnits = null)
    {
        $this
            ->setAssignedMidocoChargeOuId($assignedMidocoChargeOuId)
            ->setChargeId($chargeId)
            ->setContractEndDate($contractEndDate)
            ->setContractStartDate($contractStartDate)
            ->setCrmChargeId($crmChargeId)
            ->setCustomerId($customerId)
            ->setIsActivated($isActivated)
            ->setUnitName($unitName)
            ->setUseAllSubUnits($useAllSubUnits);
    }
    /**
     * Get assignedMidocoChargeOuId value
     * @return int|null
     */
    public function getAssignedMidocoChargeOuId(): ?int
    {
        return $this->assignedMidocoChargeOuId;
    }
    /**
     * Set assignedMidocoChargeOuId value
     * @param int $assignedMidocoChargeOuId
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO
     */
    public function setAssignedMidocoChargeOuId(?int $assignedMidocoChargeOuId = null): self
    {
        // validation for constraint: int
        if (!is_null($assignedMidocoChargeOuId) && !(is_int($assignedMidocoChargeOuId) || ctype_digit($assignedMidocoChargeOuId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($assignedMidocoChargeOuId, true), gettype($assignedMidocoChargeOuId)), __LINE__);
        }
        $this->assignedMidocoChargeOuId = $assignedMidocoChargeOuId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO
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
     * Get contractEndDate value
     * @return string|null
     */
    public function getContractEndDate(): ?string
    {
        return $this->contractEndDate;
    }
    /**
     * Set contractEndDate value
     * @param string $contractEndDate
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO
     */
    public function setContractEndDate(?string $contractEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($contractEndDate) && !is_string($contractEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractEndDate, true), gettype($contractEndDate)), __LINE__);
        }
        $this->contractEndDate = $contractEndDate;
        
        return $this;
    }
    /**
     * Get contractStartDate value
     * @return string|null
     */
    public function getContractStartDate(): ?string
    {
        return $this->contractStartDate;
    }
    /**
     * Set contractStartDate value
     * @param string $contractStartDate
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO
     */
    public function setContractStartDate(?string $contractStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($contractStartDate) && !is_string($contractStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractStartDate, true), gettype($contractStartDate)), __LINE__);
        }
        $this->contractStartDate = $contractStartDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO
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
     * Get isActivated value
     * @return bool|null
     */
    public function getIsActivated(): ?bool
    {
        return $this->isActivated;
    }
    /**
     * Set isActivated value
     * @param bool $isActivated
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO
     */
    public function setIsActivated(?bool $isActivated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActivated) && !is_bool($isActivated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActivated, true), gettype($isActivated)), __LINE__);
        }
        $this->isActivated = $isActivated;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO
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
     * Get useAllSubUnits value
     * @return bool|null
     */
    public function getUseAllSubUnits(): ?bool
    {
        return $this->useAllSubUnits;
    }
    /**
     * Set useAllSubUnits value
     * @param bool $useAllSubUnits
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO
     */
    public function setUseAllSubUnits(?bool $useAllSubUnits = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useAllSubUnits) && !is_bool($useAllSubUnits)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useAllSubUnits, true), gettype($useAllSubUnits)), __LINE__);
        }
        $this->useAllSubUnits = $useAllSubUnits;
        
        return $this;
    }
}
