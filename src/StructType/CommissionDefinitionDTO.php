<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionDefinitionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CommissionDefinitionDTO extends AbstractStructBase
{
    /**
     * The accountIdNoVat
     * @var string|null
     */
    protected ?string $accountIdNoVat = null;
    /**
     * The accountIdVat
     * @var string|null
     */
    protected ?string $accountIdVat = null;
    /**
     * The commissionId
     * @var int|null
     */
    protected ?int $commissionId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The hasLevels
     * @var bool|null
     */
    protected ?bool $hasLevels = null;
    /**
     * The isProgression
     * @var bool|null
     */
    protected ?bool $isProgression = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
    /**
     * The usePercentsInLevels
     * @var bool|null
     */
    protected ?bool $usePercentsInLevels = null;
    /**
     * Constructor method for CommissionDefinitionDTO
     * @uses CommissionDefinitionDTO::setAccountIdNoVat()
     * @uses CommissionDefinitionDTO::setAccountIdVat()
     * @uses CommissionDefinitionDTO::setCommissionId()
     * @uses CommissionDefinitionDTO::setDescription()
     * @uses CommissionDefinitionDTO::setHasLevels()
     * @uses CommissionDefinitionDTO::setIsProgression()
     * @uses CommissionDefinitionDTO::setPercent()
     * @uses CommissionDefinitionDTO::setUsePercentsInLevels()
     * @param string $accountIdNoVat
     * @param string $accountIdVat
     * @param int $commissionId
     * @param string $description
     * @param bool $hasLevels
     * @param bool $isProgression
     * @param float $percent
     * @param bool $usePercentsInLevels
     */
    public function __construct(?string $accountIdNoVat = null, ?string $accountIdVat = null, ?int $commissionId = null, ?string $description = null, ?bool $hasLevels = null, ?bool $isProgression = null, ?float $percent = null, ?bool $usePercentsInLevels = null)
    {
        $this
            ->setAccountIdNoVat($accountIdNoVat)
            ->setAccountIdVat($accountIdVat)
            ->setCommissionId($commissionId)
            ->setDescription($description)
            ->setHasLevels($hasLevels)
            ->setIsProgression($isProgression)
            ->setPercent($percent)
            ->setUsePercentsInLevels($usePercentsInLevels);
    }
    /**
     * Get accountIdNoVat value
     * @return string|null
     */
    public function getAccountIdNoVat(): ?string
    {
        return $this->accountIdNoVat;
    }
    /**
     * Set accountIdNoVat value
     * @param string $accountIdNoVat
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionDTO
     */
    public function setAccountIdNoVat(?string $accountIdNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdNoVat) && !is_string($accountIdNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdNoVat, true), gettype($accountIdNoVat)), __LINE__);
        }
        $this->accountIdNoVat = $accountIdNoVat;
        
        return $this;
    }
    /**
     * Get accountIdVat value
     * @return string|null
     */
    public function getAccountIdVat(): ?string
    {
        return $this->accountIdVat;
    }
    /**
     * Set accountIdVat value
     * @param string $accountIdVat
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionDTO
     */
    public function setAccountIdVat(?string $accountIdVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdVat) && !is_string($accountIdVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdVat, true), gettype($accountIdVat)), __LINE__);
        }
        $this->accountIdVat = $accountIdVat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionDTO
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
     * Get hasLevels value
     * @return bool|null
     */
    public function getHasLevels(): ?bool
    {
        return $this->hasLevels;
    }
    /**
     * Set hasLevels value
     * @param bool $hasLevels
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionDTO
     */
    public function setHasLevels(?bool $hasLevels = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasLevels) && !is_bool($hasLevels)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasLevels, true), gettype($hasLevels)), __LINE__);
        }
        $this->hasLevels = $hasLevels;
        
        return $this;
    }
    /**
     * Get isProgression value
     * @return bool|null
     */
    public function getIsProgression(): ?bool
    {
        return $this->isProgression;
    }
    /**
     * Set isProgression value
     * @param bool $isProgression
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionDTO
     */
    public function setIsProgression(?bool $isProgression = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProgression) && !is_bool($isProgression)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProgression, true), gettype($isProgression)), __LINE__);
        }
        $this->isProgression = $isProgression;
        
        return $this;
    }
    /**
     * Get percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }
    /**
     * Set percent value
     * @param float $percent
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionDTO
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->percent = $percent;
        
        return $this;
    }
    /**
     * Get usePercentsInLevels value
     * @return bool|null
     */
    public function getUsePercentsInLevels(): ?bool
    {
        return $this->usePercentsInLevels;
    }
    /**
     * Set usePercentsInLevels value
     * @param bool $usePercentsInLevels
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionDTO
     */
    public function setUsePercentsInLevels(?bool $usePercentsInLevels = null): self
    {
        // validation for constraint: boolean
        if (!is_null($usePercentsInLevels) && !is_bool($usePercentsInLevels)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($usePercentsInLevels, true), gettype($usePercentsInLevels)), __LINE__);
        }
        $this->usePercentsInLevels = $usePercentsInLevels;
        
        return $this;
    }
}
