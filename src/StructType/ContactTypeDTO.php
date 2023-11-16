<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactTypeDTO StructType
 * @subpackage Structs
 */
class ContactTypeDTO extends AbstractStructBase
{
    /**
     * The categoryId
     * @var int|null
     */
    protected ?int $categoryId = null;
    /**
     * The contactGroup
     * @var int|null
     */
    protected ?int $contactGroup = null;
    /**
     * The isOrderVisible
     * @var bool|null
     */
    protected ?bool $isOrderVisible = null;
    /**
     * The isPrivate
     * @var bool|null
     */
    protected ?bool $isPrivate = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for ContactTypeDTO
     * @uses ContactTypeDTO::setCategoryId()
     * @uses ContactTypeDTO::setContactGroup()
     * @uses ContactTypeDTO::setIsOrderVisible()
     * @uses ContactTypeDTO::setIsPrivate()
     * @uses ContactTypeDTO::setPosition()
     * @uses ContactTypeDTO::setTypeId()
     * @param int $categoryId
     * @param int $contactGroup
     * @param bool $isOrderVisible
     * @param bool $isPrivate
     * @param int $position
     * @param string $typeId
     */
    public function __construct(?int $categoryId = null, ?int $contactGroup = null, ?bool $isOrderVisible = null, ?bool $isPrivate = null, ?int $position = null, ?string $typeId = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setContactGroup($contactGroup)
            ->setIsOrderVisible($isOrderVisible)
            ->setIsPrivate($isPrivate)
            ->setPosition($position)
            ->setTypeId($typeId);
    }
    /**
     * Get categoryId value
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $categoryId
     * @return \Pggns\MidocoApi\Order\StructType\ContactTypeDTO
     */
    public function setCategoryId(?int $categoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($categoryId) && !(is_int($categoryId) || ctype_digit($categoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
    /**
     * Get contactGroup value
     * @return int|null
     */
    public function getContactGroup(): ?int
    {
        return $this->contactGroup;
    }
    /**
     * Set contactGroup value
     * @param int $contactGroup
     * @return \Pggns\MidocoApi\Order\StructType\ContactTypeDTO
     */
    public function setContactGroup(?int $contactGroup = null): self
    {
        // validation for constraint: int
        if (!is_null($contactGroup) && !(is_int($contactGroup) || ctype_digit($contactGroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactGroup, true), gettype($contactGroup)), __LINE__);
        }
        $this->contactGroup = $contactGroup;
        
        return $this;
    }
    /**
     * Get isOrderVisible value
     * @return bool|null
     */
    public function getIsOrderVisible(): ?bool
    {
        return $this->isOrderVisible;
    }
    /**
     * Set isOrderVisible value
     * @param bool $isOrderVisible
     * @return \Pggns\MidocoApi\Order\StructType\ContactTypeDTO
     */
    public function setIsOrderVisible(?bool $isOrderVisible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrderVisible) && !is_bool($isOrderVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrderVisible, true), gettype($isOrderVisible)), __LINE__);
        }
        $this->isOrderVisible = $isOrderVisible;
        
        return $this;
    }
    /**
     * Get isPrivate value
     * @return bool|null
     */
    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
    }
    /**
     * Set isPrivate value
     * @param bool $isPrivate
     * @return \Pggns\MidocoApi\Order\StructType\ContactTypeDTO
     */
    public function setIsPrivate(?bool $isPrivate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrivate) && !is_bool($isPrivate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrivate, true), gettype($isPrivate)), __LINE__);
        }
        $this->isPrivate = $isPrivate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactTypeDTO
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
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\ContactTypeDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
