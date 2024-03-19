<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyStlmntLevelDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AgencyStlmntLevelDetailDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The actualTurnover
     * @var float|null
     */
    protected ?float $actualTurnover = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The commissionId
     * @var int|null
     */
    protected ?int $commissionId = null;
    /**
     * The commissionNettoAmount
     * @var float|null
     */
    protected ?float $commissionNettoAmount = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The commissionVatAmount
     * @var float|null
     */
    protected ?float $commissionVatAmount = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The previousTurnover
     * @var float|null
     */
    protected ?float $previousTurnover = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for AgencyStlmntLevelDetailDTO
     * @uses AgencyStlmntLevelDetailDTO::setAccountId()
     * @uses AgencyStlmntLevelDetailDTO::setActualTurnover()
     * @uses AgencyStlmntLevelDetailDTO::setAgencyId()
     * @uses AgencyStlmntLevelDetailDTO::setCommissionId()
     * @uses AgencyStlmntLevelDetailDTO::setCommissionNettoAmount()
     * @uses AgencyStlmntLevelDetailDTO::setCommissionPercent()
     * @uses AgencyStlmntLevelDetailDTO::setCommissionVatAmount()
     * @uses AgencyStlmntLevelDetailDTO::setDescription()
     * @uses AgencyStlmntLevelDetailDTO::setPlanId()
     * @uses AgencyStlmntLevelDetailDTO::setPosition()
     * @uses AgencyStlmntLevelDetailDTO::setPreviousTurnover()
     * @uses AgencyStlmntLevelDetailDTO::setSettlementId()
     * @uses AgencyStlmntLevelDetailDTO::setVatPercent()
     * @param string $accountId
     * @param float $actualTurnover
     * @param string $agencyId
     * @param int $commissionId
     * @param float $commissionNettoAmount
     * @param float $commissionPercent
     * @param float $commissionVatAmount
     * @param string $description
     * @param string $planId
     * @param int $position
     * @param float $previousTurnover
     * @param int $settlementId
     * @param float $vatPercent
     */
    public function __construct(?string $accountId = null, ?float $actualTurnover = null, ?string $agencyId = null, ?int $commissionId = null, ?float $commissionNettoAmount = null, ?float $commissionPercent = null, ?float $commissionVatAmount = null, ?string $description = null, ?string $planId = null, ?int $position = null, ?float $previousTurnover = null, ?int $settlementId = null, ?float $vatPercent = null)
    {
        $this
            ->setAccountId($accountId)
            ->setActualTurnover($actualTurnover)
            ->setAgencyId($agencyId)
            ->setCommissionId($commissionId)
            ->setCommissionNettoAmount($commissionNettoAmount)
            ->setCommissionPercent($commissionPercent)
            ->setCommissionVatAmount($commissionVatAmount)
            ->setDescription($description)
            ->setPlanId($planId)
            ->setPosition($position)
            ->setPreviousTurnover($previousTurnover)
            ->setSettlementId($settlementId)
            ->setVatPercent($vatPercent);
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
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
     * Get actualTurnover value
     * @return float|null
     */
    public function getActualTurnover(): ?float
    {
        return $this->actualTurnover;
    }
    /**
     * Set actualTurnover value
     * @param float $actualTurnover
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
     */
    public function setActualTurnover(?float $actualTurnover = null): self
    {
        // validation for constraint: float
        if (!is_null($actualTurnover) && !(is_float($actualTurnover) || is_numeric($actualTurnover))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($actualTurnover, true), gettype($actualTurnover)), __LINE__);
        }
        $this->actualTurnover = $actualTurnover;
        
        return $this;
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get commissionId value
     * @return int|null
     */
    public function getCommissionId(): ?int
    {
        return $this->commissionId;
    }
    /**
     * Set commissionId value
     * @param int $commissionId
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
     */
    public function setCommissionId(?int $commissionId = null): self
    {
        // validation for constraint: int
        if (!is_null($commissionId) && !(is_int($commissionId) || ctype_digit($commissionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commissionId, true), gettype($commissionId)), __LINE__);
        }
        $this->commissionId = $commissionId;
        
        return $this;
    }
    /**
     * Get commissionNettoAmount value
     * @return float|null
     */
    public function getCommissionNettoAmount(): ?float
    {
        return $this->commissionNettoAmount;
    }
    /**
     * Set commissionNettoAmount value
     * @param float $commissionNettoAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
     */
    public function setCommissionNettoAmount(?float $commissionNettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionNettoAmount) && !(is_float($commissionNettoAmount) || is_numeric($commissionNettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionNettoAmount, true), gettype($commissionNettoAmount)), __LINE__);
        }
        $this->commissionNettoAmount = $commissionNettoAmount;
        
        return $this;
    }
    /**
     * Get commissionPercent value
     * @return float|null
     */
    public function getCommissionPercent(): ?float
    {
        return $this->commissionPercent;
    }
    /**
     * Set commissionPercent value
     * @param float $commissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
     */
    public function setCommissionPercent(?float $commissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercent) && !(is_float($commissionPercent) || is_numeric($commissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercent, true), gettype($commissionPercent)), __LINE__);
        }
        $this->commissionPercent = $commissionPercent;
        
        return $this;
    }
    /**
     * Get commissionVatAmount value
     * @return float|null
     */
    public function getCommissionVatAmount(): ?float
    {
        return $this->commissionVatAmount;
    }
    /**
     * Set commissionVatAmount value
     * @param float $commissionVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
     */
    public function setCommissionVatAmount(?float $commissionVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionVatAmount) && !(is_float($commissionVatAmount) || is_numeric($commissionVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionVatAmount, true), gettype($commissionVatAmount)), __LINE__);
        }
        $this->commissionVatAmount = $commissionVatAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get previousTurnover value
     * @return float|null
     */
    public function getPreviousTurnover(): ?float
    {
        return $this->previousTurnover;
    }
    /**
     * Set previousTurnover value
     * @param float $previousTurnover
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
     */
    public function setPreviousTurnover(?float $previousTurnover = null): self
    {
        // validation for constraint: float
        if (!is_null($previousTurnover) && !(is_float($previousTurnover) || is_numeric($previousTurnover))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($previousTurnover, true), gettype($previousTurnover)), __LINE__);
        }
        $this->previousTurnover = $previousTurnover;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelDetailDTO
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
}
