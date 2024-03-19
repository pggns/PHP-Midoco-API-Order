<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GdsAttribCatAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GdsAttribCatAssignDTO extends AbstractStructBase
{
    /**
     * The attributeId
     * @var string|null
     */
    protected ?string $attributeId = null;
    /**
     * The categoryId
     * @var string|null
     */
    protected ?string $categoryId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for GdsAttribCatAssignDTO
     * @uses GdsAttribCatAssignDTO::setAttributeId()
     * @uses GdsAttribCatAssignDTO::setCategoryId()
     * @uses GdsAttribCatAssignDTO::setPosition()
     * @param string $attributeId
     * @param string $categoryId
     * @param int $position
     */
    public function __construct(?string $attributeId = null, ?string $categoryId = null, ?int $position = null)
    {
        $this
            ->setAttributeId($attributeId)
            ->setCategoryId($categoryId)
            ->setPosition($position);
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
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribCatAssignDTO
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
     * Get categoryId value
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param string $categoryId
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribCatAssignDTO
     */
    public function setCategoryId(?string $categoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryId) && !is_string($categoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribCatAssignDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
}
