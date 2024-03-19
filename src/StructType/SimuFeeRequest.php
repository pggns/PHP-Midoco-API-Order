<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimuFeeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SimuFeeRequest extends AbstractStructBase
{
    /**
     * The orderNr
     * @var int|null
     */
    protected ?int $orderNr = null;
    /**
     * The feeGroup
     * @var string|null
     */
    protected ?string $feeGroup = null;
    /**
     * The newFeesOnly
     * @var bool|null
     */
    protected ?bool $newFeesOnly = null;
    /**
     * Constructor method for SimuFeeRequest
     * @uses SimuFeeRequest::setOrderNr()
     * @uses SimuFeeRequest::setFeeGroup()
     * @uses SimuFeeRequest::setNewFeesOnly()
     * @param int $orderNr
     * @param string $feeGroup
     * @param bool $newFeesOnly
     */
    public function __construct(?int $orderNr = null, ?string $feeGroup = null, ?bool $newFeesOnly = null)
    {
        $this
            ->setOrderNr($orderNr)
            ->setFeeGroup($feeGroup)
            ->setNewFeesOnly($newFeesOnly);
    }
    /**
     * Get orderNr value
     * @return int|null
     */
    public function getOrderNr(): ?int
    {
        return $this->orderNr;
    }
    /**
     * Set orderNr value
     * @param int $orderNr
     * @return \Pggns\MidocoApi\Order\StructType\SimuFeeRequest
     */
    public function setOrderNr(?int $orderNr = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNr) && !(is_int($orderNr) || ctype_digit($orderNr))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNr, true), gettype($orderNr)), __LINE__);
        }
        $this->orderNr = $orderNr;
        
        return $this;
    }
    /**
     * Get feeGroup value
     * @return string|null
     */
    public function getFeeGroup(): ?string
    {
        return $this->feeGroup;
    }
    /**
     * Set feeGroup value
     * @param string $feeGroup
     * @return \Pggns\MidocoApi\Order\StructType\SimuFeeRequest
     */
    public function setFeeGroup(?string $feeGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($feeGroup) && !is_string($feeGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeGroup, true), gettype($feeGroup)), __LINE__);
        }
        $this->feeGroup = $feeGroup;
        
        return $this;
    }
    /**
     * Get newFeesOnly value
     * @return bool|null
     */
    public function getNewFeesOnly(): ?bool
    {
        return $this->newFeesOnly;
    }
    /**
     * Set newFeesOnly value
     * @param bool $newFeesOnly
     * @return \Pggns\MidocoApi\Order\StructType\SimuFeeRequest
     */
    public function setNewFeesOnly(?bool $newFeesOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($newFeesOnly) && !is_bool($newFeesOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($newFeesOnly, true), gettype($newFeesOnly)), __LINE__);
        }
        $this->newFeesOnly = $newFeesOnly;
        
        return $this;
    }
}
