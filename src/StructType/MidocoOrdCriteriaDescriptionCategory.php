<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrdCriteriaDescriptionCategory StructType
 * @subpackage Structs
 */
class MidocoOrdCriteriaDescriptionCategory extends AbstractStructBase
{
    /**
     * The categoryId
     * @var int|null
     */
    protected ?int $categoryId = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The guiCategoryPosition
     * @var int|null
     */
    protected ?int $guiCategoryPosition = null;
    /**
     * Constructor method for MidocoOrdCriteriaDescriptionCategory
     * @uses MidocoOrdCriteriaDescriptionCategory::setCategoryId()
     * @uses MidocoOrdCriteriaDescriptionCategory::setCultureId()
     * @uses MidocoOrdCriteriaDescriptionCategory::setDescription()
     * @uses MidocoOrdCriteriaDescriptionCategory::setTypeId()
     * @uses MidocoOrdCriteriaDescriptionCategory::setGuiCategoryPosition()
     * @param int $categoryId
     * @param string $cultureId
     * @param string $description
     * @param string $typeId
     * @param int $guiCategoryPosition
     */
    public function __construct(?int $categoryId = null, ?string $cultureId = null, ?string $description = null, ?string $typeId = null, ?int $guiCategoryPosition = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setCultureId($cultureId)
            ->setDescription($description)
            ->setTypeId($typeId)
            ->setGuiCategoryPosition($guiCategoryPosition);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaDescriptionCategory
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
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaDescriptionCategory
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaDescriptionCategory
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaDescriptionCategory
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
    /**
     * Get guiCategoryPosition value
     * @return int|null
     */
    public function getGuiCategoryPosition(): ?int
    {
        return $this->guiCategoryPosition;
    }
    /**
     * Set guiCategoryPosition value
     * @param int $guiCategoryPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaDescriptionCategory
     */
    public function setGuiCategoryPosition(?int $guiCategoryPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($guiCategoryPosition) && !(is_int($guiCategoryPosition) || ctype_digit($guiCategoryPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($guiCategoryPosition, true), gettype($guiCategoryPosition)), __LINE__);
        }
        $this->guiCategoryPosition = $guiCategoryPosition;
        
        return $this;
    }
}
