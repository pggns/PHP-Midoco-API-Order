<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckCcDbiInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckCcDbiInfoResponse extends AbstractStructBase
{
    /**
     * The dbiComplete
     * @var bool|null
     */
    protected ?bool $dbiComplete = null;
    /**
     * Constructor method for CheckCcDbiInfoResponse
     * @uses CheckCcDbiInfoResponse::setDbiComplete()
     * @param bool $dbiComplete
     */
    public function __construct(?bool $dbiComplete = null)
    {
        $this
            ->setDbiComplete($dbiComplete);
    }
    /**
     * Get dbiComplete value
     * @return bool|null
     */
    public function getDbiComplete(): ?bool
    {
        return $this->dbiComplete;
    }
    /**
     * Set dbiComplete value
     * @param bool $dbiComplete
     * @return \Pggns\MidocoApi\Order\StructType\CheckCcDbiInfoResponse
     */
    public function setDbiComplete(?bool $dbiComplete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dbiComplete) && !is_bool($dbiComplete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dbiComplete, true), gettype($dbiComplete)), __LINE__);
        }
        $this->dbiComplete = $dbiComplete;
        
        return $this;
    }
}
