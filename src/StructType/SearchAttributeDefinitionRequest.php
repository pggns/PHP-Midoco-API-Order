<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAttributeDefinitionRequest StructType
 * @subpackage Structs
 */
class SearchAttributeDefinitionRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * The contextId
     * @var string|null
     */
    protected ?string $contextId = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for SearchAttributeDefinitionRequest
     * @uses SearchAttributeDefinitionRequest::setUnitName()
     * @uses SearchAttributeDefinitionRequest::setAttributeName()
     * @uses SearchAttributeDefinitionRequest::setContextId()
     * @uses SearchAttributeDefinitionRequest::setType()
     * @param string $unitName
     * @param string $attributeName
     * @param string $contextId
     * @param int $type
     */
    public function __construct(?string $unitName = null, ?string $attributeName = null, ?string $contextId = null, ?int $type = null)
    {
        $this
            ->setUnitName($unitName)
            ->setAttributeName($attributeName)
            ->setContextId($contextId)
            ->setType($type);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchAttributeDefinitionRequest
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
     * Get attributeName value
     * @return string|null
     */
    public function getAttributeName(): ?string
    {
        return $this->attributeName;
    }
    /**
     * Set attributeName value
     * @param string $attributeName
     * @return \Pggns\MidocoApi\Order\StructType\SearchAttributeDefinitionRequest
     */
    public function setAttributeName(?string $attributeName = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeName) && !is_string($attributeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeName, true), gettype($attributeName)), __LINE__);
        }
        $this->attributeName = $attributeName;
        
        return $this;
    }
    /**
     * Get contextId value
     * @return string|null
     */
    public function getContextId(): ?string
    {
        return $this->contextId;
    }
    /**
     * Set contextId value
     * @param string $contextId
     * @return \Pggns\MidocoApi\Order\StructType\SearchAttributeDefinitionRequest
     */
    public function setContextId(?string $contextId = null): self
    {
        // validation for constraint: string
        if (!is_null($contextId) && !is_string($contextId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextId, true), gettype($contextId)), __LINE__);
        }
        $this->contextId = $contextId;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Pggns\MidocoApi\Order\StructType\SearchAttributeDefinitionRequest
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
