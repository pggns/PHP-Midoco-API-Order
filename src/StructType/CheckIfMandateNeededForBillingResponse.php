<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfMandateNeededForBillingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckIfMandateNeededForBillingResponse extends AbstractStructBase
{
    /**
     * The mandateIsNeeded
     * @var bool|null
     */
    protected ?bool $mandateIsNeeded = null;
    /**
     * Constructor method for CheckIfMandateNeededForBillingResponse
     * @uses CheckIfMandateNeededForBillingResponse::setMandateIsNeeded()
     * @param bool $mandateIsNeeded
     */
    public function __construct(?bool $mandateIsNeeded = null)
    {
        $this
            ->setMandateIsNeeded($mandateIsNeeded);
    }
    /**
     * Get mandateIsNeeded value
     * @return bool|null
     */
    public function getMandateIsNeeded(): ?bool
    {
        return $this->mandateIsNeeded;
    }
    /**
     * Set mandateIsNeeded value
     * @param bool $mandateIsNeeded
     * @return \Pggns\MidocoApi\Order\StructType\CheckIfMandateNeededForBillingResponse
     */
    public function setMandateIsNeeded(?bool $mandateIsNeeded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mandateIsNeeded) && !is_bool($mandateIsNeeded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mandateIsNeeded, true), gettype($mandateIsNeeded)), __LINE__);
        }
        $this->mandateIsNeeded = $mandateIsNeeded;
        
        return $this;
    }
}
