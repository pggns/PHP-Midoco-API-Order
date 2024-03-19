<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierInkassoModeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierInkassoModeType extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The mode
     * @var int|null
     */
    protected ?int $mode = null;
    /**
     * Constructor method for SupplierInkassoModeType
     * @uses SupplierInkassoModeType::setSupplierId()
     * @uses SupplierInkassoModeType::setMode()
     * @param string $supplierId
     * @param int $mode
     */
    public function __construct(?string $supplierId = null, ?int $mode = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setMode($mode);
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get mode value
     * @return int|null
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @param int $mode
     * @return \Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType
     */
    public function setMode(?int $mode = null): self
    {
        // validation for constraint: int
        if (!is_null($mode) && !(is_int($mode) || ctype_digit($mode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;
        
        return $this;
    }
}
