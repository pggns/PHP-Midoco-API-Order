<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GdsAttribDTO StructType
 * @subpackage Structs
 */
class GdsAttribDTO extends AbstractStructBase
{
    /**
     * The attributeId
     * @var string|null
     */
    protected ?string $attributeId = null;
    /**
     * The isOptional
     * @var bool|null
     */
    protected ?bool $isOptional = null;
    /**
     * Constructor method for GdsAttribDTO
     * @uses GdsAttribDTO::setAttributeId()
     * @uses GdsAttribDTO::setIsOptional()
     * @param string $attributeId
     * @param bool $isOptional
     */
    public function __construct(?string $attributeId = null, ?bool $isOptional = null)
    {
        $this
            ->setAttributeId($attributeId)
            ->setIsOptional($isOptional);
    }
    /**
     * Get attributeId value
     * @return string|null
     */
    public function getAttributeId(): ?string
    {
        return $this->attributeId;
    }
    /**
     * Set attributeId value
     * @param string $attributeId
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribDTO
     */
    public function setAttributeId(?string $attributeId = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeId) && !is_string($attributeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeId, true), gettype($attributeId)), __LINE__);
        }
        $this->attributeId = $attributeId;
        
        return $this;
    }
    /**
     * Get isOptional value
     * @return bool|null
     */
    public function getIsOptional(): ?bool
    {
        return $this->isOptional;
    }
    /**
     * Set isOptional value
     * @param bool $isOptional
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribDTO
     */
    public function setIsOptional(?bool $isOptional = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOptional) && !is_bool($isOptional)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOptional, true), gettype($isOptional)), __LINE__);
        }
        $this->isOptional = $isOptional;
        
        return $this;
    }
}
