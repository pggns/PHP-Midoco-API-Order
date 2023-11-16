<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderRetentionPeriod StructType
 * @subpackage Structs
 */
class MidocoOrderRetentionPeriod extends OrderRetentionPeriodDTO
{
    /**
     * The isInheritance
     * @var bool|null
     */
    protected ?bool $isInheritance = null;
    /**
     * The period
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $period = null;
    /**
     * Constructor method for MidocoOrderRetentionPeriod
     * @uses MidocoOrderRetentionPeriod::setIsInheritance()
     * @uses MidocoOrderRetentionPeriod::setPeriod()
     * @param bool $isInheritance
     * @param bool $period
     */
    public function __construct(?bool $isInheritance = null, ?bool $period = true)
    {
        $this
            ->setIsInheritance($isInheritance)
            ->setPeriod($period);
    }
    /**
     * Get isInheritance value
     * @return bool|null
     */
    public function getIsInheritance(): ?bool
    {
        return $this->isInheritance;
    }
    /**
     * Set isInheritance value
     * @param bool $isInheritance
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod
     */
    public function setIsInheritance(?bool $isInheritance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInheritance) && !is_bool($isInheritance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInheritance, true), gettype($isInheritance)), __LINE__);
        }
        $this->isInheritance = $isInheritance;
        
        return $this;
    }
    /**
     * Get period value
     * @return bool|null
     */
    public function getPeriod(): ?bool
    {
        return $this->period;
    }
    /**
     * Set period value
     * @param bool $period
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod
     */
    public function setPeriod(?bool $period = true): self
    {
        // validation for constraint: boolean
        if (!is_null($period) && !is_bool($period)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($period, true), gettype($period)), __LINE__);
        }
        $this->period = $period;
        
        return $this;
    }
}
