<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountPlanDTO StructType
 * @subpackage Structs
 */
class AccountPlanDTO extends AbstractStructBase
{
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * Constructor method for AccountPlanDTO
     * @uses AccountPlanDTO::setPlanId()
     * @param string $planId
     */
    public function __construct(?string $planId = null)
    {
        $this
            ->setPlanId($planId);
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
     * @return \Pggns\MidocoApi\Order\StructType\AccountPlanDTO
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
}
