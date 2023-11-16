<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsOrderTotallyCancelledResponse StructType
 * @subpackage Structs
 */
class IsOrderTotallyCancelledResponse extends AbstractStructBase
{
    /**
     * The isTotallyCancelled
     * @var bool|null
     */
    protected ?bool $isTotallyCancelled = null;
    /**
     * Constructor method for IsOrderTotallyCancelledResponse
     * @uses IsOrderTotallyCancelledResponse::setIsTotallyCancelled()
     * @param bool $isTotallyCancelled
     */
    public function __construct(?bool $isTotallyCancelled = null)
    {
        $this
            ->setIsTotallyCancelled($isTotallyCancelled);
    }
    /**
     * Get isTotallyCancelled value
     * @return bool|null
     */
    public function getIsTotallyCancelled(): ?bool
    {
        return $this->isTotallyCancelled;
    }
    /**
     * Set isTotallyCancelled value
     * @param bool $isTotallyCancelled
     * @return \Pggns\MidocoApi\Order\StructType\IsOrderTotallyCancelledResponse
     */
    public function setIsTotallyCancelled(?bool $isTotallyCancelled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTotallyCancelled) && !is_bool($isTotallyCancelled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTotallyCancelled, true), gettype($isTotallyCancelled)), __LINE__);
        }
        $this->isTotallyCancelled = $isTotallyCancelled;
        
        return $this;
    }
}
