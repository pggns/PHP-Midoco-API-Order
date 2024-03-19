<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMergedMidocoPropertiesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMergedMidocoPropertiesRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The className
     * @var string|null
     */
    protected ?string $className = null;
    /**
     * Constructor method for GetMergedMidocoPropertiesRequest
     * @uses GetMergedMidocoPropertiesRequest::setUnitName()
     * @uses GetMergedMidocoPropertiesRequest::setClassName()
     * @param string $unitName
     * @param string $className
     */
    public function __construct(?string $unitName = null, ?string $className = null)
    {
        $this
            ->setUnitName($unitName)
            ->setClassName($className);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMergedMidocoPropertiesRequest
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
     * Get className value
     * @return string|null
     */
    public function getClassName(): ?string
    {
        return $this->className;
    }
    /**
     * Set className value
     * @param string $className
     * @return \Pggns\MidocoApi\Order\StructType\GetMergedMidocoPropertiesRequest
     */
    public function setClassName(?string $className = null): self
    {
        // validation for constraint: string
        if (!is_null($className) && !is_string($className)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($className, true), gettype($className)), __LINE__);
        }
        $this->className = $className;
        
        return $this;
    }
}
