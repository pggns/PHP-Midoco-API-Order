<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExtraMFRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExtraMFRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The supplier
     * @var string|null
     */
    protected ?string $supplier = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The bean
     * @var string|null
     */
    protected ?string $bean = null;
    /**
     * Constructor method for GetExtraMFRequest
     * @uses GetExtraMFRequest::setUnitName()
     * @uses GetExtraMFRequest::setSupplier()
     * @uses GetExtraMFRequest::setItemType()
     * @uses GetExtraMFRequest::setBean()
     * @param string $unitName
     * @param string $supplier
     * @param string $itemType
     * @param string $bean
     */
    public function __construct(?string $unitName = null, ?string $supplier = null, ?string $itemType = null, ?string $bean = null)
    {
        $this
            ->setUnitName($unitName)
            ->setSupplier($supplier)
            ->setItemType($itemType)
            ->setBean($bean);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetExtraMFRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Order\StructType\GetExtraMFRequest
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExtraMFRequest
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
     * Get bean value
     * @return string|null
     */
    public function getBean(): ?string
    {
        return $this->bean;
    }
    /**
     * Set bean value
     * @param string $bean
     * @return \Pggns\MidocoApi\Order\StructType\GetExtraMFRequest
     */
    public function setBean(?string $bean = null): self
    {
        // validation for constraint: string
        if (!is_null($bean) && !is_string($bean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bean, true), gettype($bean)), __LINE__);
        }
        $this->bean = $bean;
        
        return $this;
    }
}
