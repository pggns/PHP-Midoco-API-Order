<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderLockReasonDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderLockReasonDTO extends AbstractStructBase
{
    /**
     * The reasonId
     * @var string|null
     */
    protected ?string $reasonId = null;
    /**
     * Constructor method for OrderLockReasonDTO
     * @uses OrderLockReasonDTO::setReasonId()
     * @param string $reasonId
     */
    public function __construct(?string $reasonId = null)
    {
        $this
            ->setReasonId($reasonId);
    }
    /**
     * Get reasonId value
     * @return string|null
     */
    public function getReasonId(): ?string
    {
        return $this->reasonId;
    }
    /**
     * Set reasonId value
     * @param string $reasonId
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO
     */
    public function setReasonId(?string $reasonId = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonId) && !is_string($reasonId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonId, true), gettype($reasonId)), __LINE__);
        }
        $this->reasonId = $reasonId;
        
        return $this;
    }
}
