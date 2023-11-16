<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoEntryDetails StructType
 * @subpackage Structs
 */
class MidocoEntryDetails extends DebitorAccountEntryType
{
    /**
     * The dunningLock
     * @var bool|null
     */
    protected ?bool $dunningLock = null;
    /**
     * Constructor method for MidocoEntryDetails
     * @uses MidocoEntryDetails::setDunningLock()
     * @param bool $dunningLock
     */
    public function __construct(?bool $dunningLock = null)
    {
        $this
            ->setDunningLock($dunningLock);
    }
    /**
     * Get dunningLock value
     * @return bool|null
     */
    public function getDunningLock(): ?bool
    {
        return $this->dunningLock;
    }
    /**
     * Set dunningLock value
     * @param bool $dunningLock
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails
     */
    public function setDunningLock(?bool $dunningLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dunningLock) && !is_bool($dunningLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dunningLock, true), gettype($dunningLock)), __LINE__);
        }
        $this->dunningLock = $dunningLock;
        
        return $this;
    }
}
