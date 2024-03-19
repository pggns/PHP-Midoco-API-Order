<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgattribvalueDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrgattribvalueDTO extends AbstractStructBase
{
    /**
     * The attribName
     * @var string|null
     */
    protected ?string $attribName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for OrgattribvalueDTO
     * @uses OrgattribvalueDTO::setAttribName()
     * @uses OrgattribvalueDTO::setUnitName()
     * @uses OrgattribvalueDTO::setValue()
     * @param string $attribName
     * @param string $unitName
     * @param string $value
     */
    public function __construct(?string $attribName = null, ?string $unitName = null, ?string $value = null)
    {
        $this
            ->setAttribName($attribName)
            ->setUnitName($unitName)
            ->setValue($value);
    }
    /**
     * Get attribName value
     * @return string|null
     */
    public function getAttribName(): ?string
    {
        return $this->attribName;
    }
    /**
     * Set attribName value
     * @param string $attribName
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribvalueDTO
     */
    public function setAttribName(?string $attribName = null): self
    {
        // validation for constraint: string
        if (!is_null($attribName) && !is_string($attribName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribName, true), gettype($attribName)), __LINE__);
        }
        $this->attribName = $attribName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribvalueDTO
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
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribvalueDTO
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
