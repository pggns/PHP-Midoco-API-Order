<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GdsProfileAttribute StructType
 * @subpackage Structs
 */
class GdsProfileAttribute extends AbstractStructBase
{
    /**
     * The gds
     * @var string|null
     */
    protected ?string $gds = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The subType
     * @var string|null
     */
    protected ?string $subType = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The translatedValue
     * @var string|null
     */
    protected ?string $translatedValue = null;
    /**
     * Constructor method for GdsProfileAttribute
     * @uses GdsProfileAttribute::setGds()
     * @uses GdsProfileAttribute::setType()
     * @uses GdsProfileAttribute::setSubType()
     * @uses GdsProfileAttribute::setCategory()
     * @uses GdsProfileAttribute::setTranslatedValue()
     * @param string $gds
     * @param string $type
     * @param string $subType
     * @param string $category
     * @param string $translatedValue
     */
    public function __construct(?string $gds = null, ?string $type = null, ?string $subType = null, ?string $category = null, ?string $translatedValue = null)
    {
        $this
            ->setGds($gds)
            ->setType($type)
            ->setSubType($subType)
            ->setCategory($category)
            ->setTranslatedValue($translatedValue);
    }
    /**
     * Get gds value
     * @return string|null
     */
    public function getGds(): ?string
    {
        return $this->gds;
    }
    /**
     * Set gds value
     * @param string $gds
     * @return \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute
     */
    public function setGds(?string $gds = null): self
    {
        // validation for constraint: string
        if (!is_null($gds) && !is_string($gds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gds, true), gettype($gds)), __LINE__);
        }
        $this->gds = $gds;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get subType value
     * @return string|null
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }
    /**
     * Set subType value
     * @param string $subType
     * @return \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute
     */
    public function setSubType(?string $subType = null): self
    {
        // validation for constraint: string
        if (!is_null($subType) && !is_string($subType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subType, true), gettype($subType)), __LINE__);
        }
        $this->subType = $subType;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get translatedValue value
     * @return string|null
     */
    public function getTranslatedValue(): ?string
    {
        return $this->translatedValue;
    }
    /**
     * Set translatedValue value
     * @param string $translatedValue
     * @return \Pggns\MidocoApi\Order\StructType\GdsProfileAttribute
     */
    public function setTranslatedValue(?string $translatedValue = null): self
    {
        // validation for constraint: string
        if (!is_null($translatedValue) && !is_string($translatedValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($translatedValue, true), gettype($translatedValue)), __LINE__);
        }
        $this->translatedValue = $translatedValue;
        
        return $this;
    }
}
