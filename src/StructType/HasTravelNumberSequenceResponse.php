<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HasTravelNumberSequenceResponse StructType
 * @subpackage Structs
 */
class HasTravelNumberSequenceResponse extends AbstractStructBase
{
    /**
     * The hasSequence
     * @var bool|null
     */
    protected ?bool $hasSequence = null;
    /**
     * Constructor method for HasTravelNumberSequenceResponse
     * @uses HasTravelNumberSequenceResponse::setHasSequence()
     * @param bool $hasSequence
     */
    public function __construct(?bool $hasSequence = null)
    {
        $this
            ->setHasSequence($hasSequence);
    }
    /**
     * Get hasSequence value
     * @return bool|null
     */
    public function getHasSequence(): ?bool
    {
        return $this->hasSequence;
    }
    /**
     * Set hasSequence value
     * @param bool $hasSequence
     * @return \Pggns\MidocoApi\Order\StructType\HasTravelNumberSequenceResponse
     */
    public function setHasSequence(?bool $hasSequence = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasSequence) && !is_bool($hasSequence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasSequence, true), gettype($hasSequence)), __LINE__);
        }
        $this->hasSequence = $hasSequence;
        
        return $this;
    }
}
