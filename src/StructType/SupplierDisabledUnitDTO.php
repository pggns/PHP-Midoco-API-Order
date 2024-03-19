<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierDisabledUnitDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierDisabledUnitDTO extends AbstractStructBase
{
    /**
     * The disabledUnitName
     * @var string|null
     */
    protected ?string $disabledUnitName = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for SupplierDisabledUnitDTO
     * @uses SupplierDisabledUnitDTO::setDisabledUnitName()
     * @uses SupplierDisabledUnitDTO::setSupplierId()
     * @param string $disabledUnitName
     * @param string $supplierId
     */
    public function __construct(?string $disabledUnitName = null, ?string $supplierId = null)
    {
        $this
            ->setDisabledUnitName($disabledUnitName)
            ->setSupplierId($supplierId);
    }
    /**
     * Get disabledUnitName value
     * @return string|null
     */
    public function getDisabledUnitName(): ?string
    {
        return $this->disabledUnitName;
    }
    /**
     * Set disabledUnitName value
     * @param string $disabledUnitName
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDisabledUnitDTO
     */
    public function setDisabledUnitName(?string $disabledUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($disabledUnitName) && !is_string($disabledUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disabledUnitName, true), gettype($disabledUnitName)), __LINE__);
        }
        $this->disabledUnitName = $disabledUnitName;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDisabledUnitDTO
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
}
