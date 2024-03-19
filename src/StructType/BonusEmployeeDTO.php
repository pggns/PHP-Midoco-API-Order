<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusEmployeeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BonusEmployeeDTO extends AbstractStructBase
{
    /**
     * The baseAmountRule
     * @var float|null
     */
    protected ?float $baseAmountRule = null;
    /**
     * The bonusId
     * @var int|null
     */
    protected ?int $bonusId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The grantedAmountAdditional
     * @var float|null
     */
    protected ?float $grantedAmountAdditional = null;
    /**
     * The grantedAmountCompetition
     * @var float|null
     */
    protected ?float $grantedAmountCompetition = null;
    /**
     * The grantedAmountRule
     * @var float|null
     */
    protected ?float $grantedAmountRule = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for BonusEmployeeDTO
     * @uses BonusEmployeeDTO::setBaseAmountRule()
     * @uses BonusEmployeeDTO::setBonusId()
     * @uses BonusEmployeeDTO::setDescription()
     * @uses BonusEmployeeDTO::setGrantedAmountAdditional()
     * @uses BonusEmployeeDTO::setGrantedAmountCompetition()
     * @uses BonusEmployeeDTO::setGrantedAmountRule()
     * @uses BonusEmployeeDTO::setUserId()
     * @param float $baseAmountRule
     * @param int $bonusId
     * @param string $description
     * @param float $grantedAmountAdditional
     * @param float $grantedAmountCompetition
     * @param float $grantedAmountRule
     * @param int $userId
     */
    public function __construct(?float $baseAmountRule = null, ?int $bonusId = null, ?string $description = null, ?float $grantedAmountAdditional = null, ?float $grantedAmountCompetition = null, ?float $grantedAmountRule = null, ?int $userId = null)
    {
        $this
            ->setBaseAmountRule($baseAmountRule)
            ->setBonusId($bonusId)
            ->setDescription($description)
            ->setGrantedAmountAdditional($grantedAmountAdditional)
            ->setGrantedAmountCompetition($grantedAmountCompetition)
            ->setGrantedAmountRule($grantedAmountRule)
            ->setUserId($userId);
    }
    /**
     * Get baseAmountRule value
     * @return float|null
     */
    public function getBaseAmountRule(): ?float
    {
        return $this->baseAmountRule;
    }
    /**
     * Set baseAmountRule value
     * @param float $baseAmountRule
     * @return \Pggns\MidocoApi\Order\StructType\BonusEmployeeDTO
     */
    public function setBaseAmountRule(?float $baseAmountRule = null): self
    {
        // validation for constraint: float
        if (!is_null($baseAmountRule) && !(is_float($baseAmountRule) || is_numeric($baseAmountRule))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseAmountRule, true), gettype($baseAmountRule)), __LINE__);
        }
        $this->baseAmountRule = $baseAmountRule;
        
        return $this;
    }
    /**
     * Get bonusId value
     * @return int|null
     */
    public function getBonusId(): ?int
    {
        return $this->bonusId;
    }
    /**
     * Set bonusId value
     * @param int $bonusId
     * @return \Pggns\MidocoApi\Order\StructType\BonusEmployeeDTO
     */
    public function setBonusId(?int $bonusId = null): self
    {
        // validation for constraint: int
        if (!is_null($bonusId) && !(is_int($bonusId) || ctype_digit($bonusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bonusId, true), gettype($bonusId)), __LINE__);
        }
        $this->bonusId = $bonusId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusEmployeeDTO
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
     * Get grantedAmountAdditional value
     * @return float|null
     */
    public function getGrantedAmountAdditional(): ?float
    {
        return $this->grantedAmountAdditional;
    }
    /**
     * Set grantedAmountAdditional value
     * @param float $grantedAmountAdditional
     * @return \Pggns\MidocoApi\Order\StructType\BonusEmployeeDTO
     */
    public function setGrantedAmountAdditional(?float $grantedAmountAdditional = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedAmountAdditional) && !(is_float($grantedAmountAdditional) || is_numeric($grantedAmountAdditional))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedAmountAdditional, true), gettype($grantedAmountAdditional)), __LINE__);
        }
        $this->grantedAmountAdditional = $grantedAmountAdditional;
        
        return $this;
    }
    /**
     * Get grantedAmountCompetition value
     * @return float|null
     */
    public function getGrantedAmountCompetition(): ?float
    {
        return $this->grantedAmountCompetition;
    }
    /**
     * Set grantedAmountCompetition value
     * @param float $grantedAmountCompetition
     * @return \Pggns\MidocoApi\Order\StructType\BonusEmployeeDTO
     */
    public function setGrantedAmountCompetition(?float $grantedAmountCompetition = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedAmountCompetition) && !(is_float($grantedAmountCompetition) || is_numeric($grantedAmountCompetition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedAmountCompetition, true), gettype($grantedAmountCompetition)), __LINE__);
        }
        $this->grantedAmountCompetition = $grantedAmountCompetition;
        
        return $this;
    }
    /**
     * Get grantedAmountRule value
     * @return float|null
     */
    public function getGrantedAmountRule(): ?float
    {
        return $this->grantedAmountRule;
    }
    /**
     * Set grantedAmountRule value
     * @param float $grantedAmountRule
     * @return \Pggns\MidocoApi\Order\StructType\BonusEmployeeDTO
     */
    public function setGrantedAmountRule(?float $grantedAmountRule = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedAmountRule) && !(is_float($grantedAmountRule) || is_numeric($grantedAmountRule))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedAmountRule, true), gettype($grantedAmountRule)), __LINE__);
        }
        $this->grantedAmountRule = $grantedAmountRule;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusEmployeeDTO
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
