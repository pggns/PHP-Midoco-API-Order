<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierDisabledItemTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierDisabledItemTypeDTO extends AbstractStructBase
{
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for SupplierDisabledItemTypeDTO
     * @uses SupplierDisabledItemTypeDTO::setItemType()
     * @uses SupplierDisabledItemTypeDTO::setSupplierId()
     * @param string $itemType
     * @param string $supplierId
     */
    public function __construct(?string $itemType = null, ?string $supplierId = null)
    {
        $this
            ->setItemType($itemType)
            ->setSupplierId($supplierId);
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDisabledItemTypeDTO
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDisabledItemTypeDTO
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
