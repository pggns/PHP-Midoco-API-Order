<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserBonusOrgunitDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserBonusOrgunitDTO extends AbstractStructBase
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
     * The grantedAmountRule
     * @var float|null
     */
    protected ?float $grantedAmountRule = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userBonusId
     * @var int|null
     */
    protected ?int $userBonusId = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for UserBonusOrgunitDTO
     * @uses UserBonusOrgunitDTO::setBaseAmountRule()
     * @uses UserBonusOrgunitDTO::setBonusId()
     * @uses UserBonusOrgunitDTO::setGrantedAmountRule()
     * @uses UserBonusOrgunitDTO::setUnitName()
     * @uses UserBonusOrgunitDTO::setUserBonusId()
     * @uses UserBonusOrgunitDTO::setUserId()
     * @param float $baseAmountRule
     * @param int $bonusId
     * @param float $grantedAmountRule
     * @param string $unitName
     * @param int $userBonusId
     * @param int $userId
     */
    public function __construct(?float $baseAmountRule = null, ?int $bonusId = null, ?float $grantedAmountRule = null, ?string $unitName = null, ?int $userBonusId = null, ?int $userId = null)
    {
        $this
            ->setBaseAmountRule($baseAmountRule)
            ->setBonusId($bonusId)
            ->setGrantedAmountRule($grantedAmountRule)
            ->setUnitName($unitName)
            ->setUserBonusId($userBonusId)
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
     * @return \Pggns\MidocoApi\Order\StructType\UserBonusOrgunitDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UserBonusOrgunitDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UserBonusOrgunitDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UserBonusOrgunitDTO
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
     * Get userBonusId value
     * @return int|null
     */
    public function getUserBonusId(): ?int
    {
        return $this->userBonusId;
    }
    /**
     * Set userBonusId value
     * @param int $userBonusId
     * @return \Pggns\MidocoApi\Order\StructType\UserBonusOrgunitDTO
     */
    public function setUserBonusId(?int $userBonusId = null): self
    {
        // validation for constraint: int
        if (!is_null($userBonusId) && !(is_int($userBonusId) || ctype_digit($userBonusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userBonusId, true), gettype($userBonusId)), __LINE__);
        }
        $this->userBonusId = $userBonusId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserBonusOrgunitDTO
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
