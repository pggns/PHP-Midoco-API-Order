<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdapterDefAttrDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdapterDefAttrDTO extends AbstractStructBase
{
    /**
     * The adapterId
     * @var string|null
     */
    protected ?string $adapterId = null;
    /**
     * The attrDefValue
     * @var string|null
     */
    protected ?string $attrDefValue = null;
    /**
     * The attrName
     * @var string|null
     */
    protected ?string $attrName = null;
    /**
     * Constructor method for AdapterDefAttrDTO
     * @uses AdapterDefAttrDTO::setAdapterId()
     * @uses AdapterDefAttrDTO::setAttrDefValue()
     * @uses AdapterDefAttrDTO::setAttrName()
     * @param string $adapterId
     * @param string $attrDefValue
     * @param string $attrName
     */
    public function __construct(?string $adapterId = null, ?string $attrDefValue = null, ?string $attrName = null)
    {
        $this
            ->setAdapterId($adapterId)
            ->setAttrDefValue($attrDefValue)
            ->setAttrName($attrName);
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
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDefAttrDTO
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
     * Get attrDefValue value
     * @return string|null
     */
    public function getAttrDefValue(): ?string
    {
        return $this->attrDefValue;
    }
    /**
     * Set attrDefValue value
     * @param string $attrDefValue
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDefAttrDTO
     */
    public function setAttrDefValue(?string $attrDefValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attrDefValue) && !is_string($attrDefValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrDefValue, true), gettype($attrDefValue)), __LINE__);
        }
        $this->attrDefValue = $attrDefValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDefAttrDTO
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
}
