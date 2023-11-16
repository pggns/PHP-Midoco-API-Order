<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdapterAttrDTO StructType
 * @subpackage Structs
 */
class AdapterAttrDTO extends AbstractStructBase
{
    /**
     * The adapterId
     * @var string|null
     */
    protected ?string $adapterId = null;
    /**
     * The attrName
     * @var string|null
     */
    protected ?string $attrName = null;
    /**
     * The attrValue
     * @var string|null
     */
    protected ?string $attrValue = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for AdapterAttrDTO
     * @uses AdapterAttrDTO::setAdapterId()
     * @uses AdapterAttrDTO::setAttrName()
     * @uses AdapterAttrDTO::setAttrValue()
     * @uses AdapterAttrDTO::setUnitName()
     * @param string $adapterId
     * @param string $attrName
     * @param string $attrValue
     * @param string $unitName
     */
    public function __construct(?string $adapterId = null, ?string $attrName = null, ?string $attrValue = null, ?string $unitName = null)
    {
        $this
            ->setAdapterId($adapterId)
            ->setAttrName($attrName)
            ->setAttrValue($attrValue)
            ->setUnitName($unitName);
    }
    /**
     * Get adapterId value
     * @return string|null
     */
    public function getAdapterId(): ?string
    {
        return $this->adapterId;
    }
    /**
     * Set adapterId value
     * @param string $adapterId
     * @return \Pggns\MidocoApi\Order\StructType\AdapterAttrDTO
     */
    public function setAdapterId(?string $adapterId = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterId) && !is_string($adapterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterId, true), gettype($adapterId)), __LINE__);
        }
        $this->adapterId = $adapterId;
        
        return $this;
    }
    /**
     * Get attrName value
     * @return string|null
     */
    public function getAttrName(): ?string
    {
        return $this->attrName;
    }
    /**
     * Set attrName value
     * @param string $attrName
     * @return \Pggns\MidocoApi\Order\StructType\AdapterAttrDTO
     */
    public function setAttrName(?string $attrName = null): self
    {
        // validation for constraint: string
        if (!is_null($attrName) && !is_string($attrName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrName, true), gettype($attrName)), __LINE__);
        }
        $this->attrName = $attrName;
        
        return $this;
    }
    /**
     * Get attrValue value
     * @return string|null
     */
    public function getAttrValue(): ?string
    {
        return $this->attrValue;
    }
    /**
     * Set attrValue value
     * @param string $attrValue
     * @return \Pggns\MidocoApi\Order\StructType\AdapterAttrDTO
     */
    public function setAttrValue(?string $attrValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attrValue) && !is_string($attrValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrValue, true), gettype($attrValue)), __LINE__);
        }
        $this->attrValue = $attrValue;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\AdapterAttrDTO
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
}
