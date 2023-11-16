<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierName StructType
 * @subpackage Structs
 */
class MidocoSupplierName extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The isLocked
     * @var bool|null
     */
    protected ?bool $isLocked = null;
    /**
     * Constructor method for MidocoSupplierName
     * @uses MidocoSupplierName::setSupplierId()
     * @uses MidocoSupplierName::setName()
     * @uses MidocoSupplierName::setIsLocked()
     * @param string $supplierId
     * @param string $name
     * @param bool $isLocked
     */
    public function __construct(?string $supplierId = null, ?string $name = null, ?bool $isLocked = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setName($name)
            ->setIsLocked($isLocked);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierName
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
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierName
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get isLocked value
     * @return bool|null
     */
    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }
    /**
     * Set isLocked value
     * @param bool $isLocked
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierName
     */
    public function setIsLocked(?bool $isLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLocked) && !is_bool($isLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLocked, true), gettype($isLocked)), __LINE__);
        }
        $this->isLocked = $isLocked;
        
        return $this;
    }
}
