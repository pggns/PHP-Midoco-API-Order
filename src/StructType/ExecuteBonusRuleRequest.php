<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteBonusRuleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteBonusRuleRequest extends AbstractStructBase
{
    /**
     * The bonusId
     * @var int|null
     */
    protected ?int $bonusId = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * Constructor method for ExecuteBonusRuleRequest
     * @uses ExecuteBonusRuleRequest::setBonusId()
     * @uses ExecuteBonusRuleRequest::setCreationUser()
     * @param int $bonusId
     * @param int $creationUser
     */
    public function __construct(?int $bonusId = null, ?int $creationUser = null)
    {
        $this
            ->setBonusId($bonusId)
            ->setCreationUser($creationUser);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteBonusRuleRequest
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
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteBonusRuleRequest
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
}
