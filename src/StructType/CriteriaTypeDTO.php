<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CriteriaTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CriteriaTypeDTO extends AbstractStructBase
{
    /**
     * The categoryId
     * @var int|null
     */
    protected ?int $categoryId = null;
    /**
     * The editValue
     * @var bool|null
     */
    protected ?bool $editValue = null;
    /**
     * The exportToReporting
     * @var bool|null
     */
    protected ?bool $exportToReporting = null;
    /**
     * The forceUpshift
     * @var bool|null
     */
    protected ?bool $forceUpshift = null;
    /**
     * The guiCategoryPosition
     * @var int|null
     */
    protected ?int $guiCategoryPosition = null;
    /**
     * The isPasswordType
     * @var bool|null
     */
    protected ?bool $isPasswordType = null;
    /**
     * The printDataProtection
     * @var bool|null
     */
    protected ?bool $printDataProtection = null;
    /**
     * The readonly
     * @var bool|null
     */
    protected ?bool $readonly = null;
    /**
     * The required
     * @var bool|null
     */
    protected ?bool $required = null;
    /**
     * The requiresUpdateRight
     * @var bool|null
     */
    protected ?bool $requiresUpdateRight = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The valueTakeover
     * @var bool|null
     */
    protected ?bool $valueTakeover = null;
    /**
     * Constructor method for CriteriaTypeDTO
     * @uses CriteriaTypeDTO::setCategoryId()
     * @uses CriteriaTypeDTO::setEditValue()
     * @uses CriteriaTypeDTO::setExportToReporting()
     * @uses CriteriaTypeDTO::setForceUpshift()
     * @uses CriteriaTypeDTO::setGuiCategoryPosition()
     * @uses CriteriaTypeDTO::setIsPasswordType()
     * @uses CriteriaTypeDTO::setPrintDataProtection()
     * @uses CriteriaTypeDTO::setReadonly()
     * @uses CriteriaTypeDTO::setRequired()
     * @uses CriteriaTypeDTO::setRequiresUpdateRight()
     * @uses CriteriaTypeDTO::setTypeId()
     * @uses CriteriaTypeDTO::setValueTakeover()
     * @param int $categoryId
     * @param bool $editValue
     * @param bool $exportToReporting
     * @param bool $forceUpshift
     * @param int $guiCategoryPosition
     * @param bool $isPasswordType
     * @param bool $printDataProtection
     * @param bool $readonly
     * @param bool $required
     * @param bool $requiresUpdateRight
     * @param string $typeId
     * @param bool $valueTakeover
     */
    public function __construct(?int $categoryId = null, ?bool $editValue = null, ?bool $exportToReporting = null, ?bool $forceUpshift = null, ?int $guiCategoryPosition = null, ?bool $isPasswordType = null, ?bool $printDataProtection = null, ?bool $readonly = null, ?bool $required = null, ?bool $requiresUpdateRight = null, ?string $typeId = null, ?bool $valueTakeover = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setEditValue($editValue)
            ->setExportToReporting($exportToReporting)
            ->setForceUpshift($forceUpshift)
            ->setGuiCategoryPosition($guiCategoryPosition)
            ->setIsPasswordType($isPasswordType)
            ->setPrintDataProtection($printDataProtection)
            ->setReadonly($readonly)
            ->setRequired($required)
            ->setRequiresUpdateRight($requiresUpdateRight)
            ->setTypeId($typeId)
            ->setValueTakeover($valueTakeover);
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
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
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
     * Get editValue value
     * @return bool|null
     */
    public function getEditValue(): ?bool
    {
        return $this->editValue;
    }
    /**
     * Set editValue value
     * @param bool $editValue
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
     */
    public function setEditValue(?bool $editValue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($editValue) && !is_bool($editValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($editValue, true), gettype($editValue)), __LINE__);
        }
        $this->editValue = $editValue;
        
        return $this;
    }
    /**
     * Get exportToReporting value
     * @return bool|null
     */
    public function getExportToReporting(): ?bool
    {
        return $this->exportToReporting;
    }
    /**
     * Set exportToReporting value
     * @param bool $exportToReporting
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
     */
    public function setExportToReporting(?bool $exportToReporting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportToReporting) && !is_bool($exportToReporting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportToReporting, true), gettype($exportToReporting)), __LINE__);
        }
        $this->exportToReporting = $exportToReporting;
        
        return $this;
    }
    /**
     * Get forceUpshift value
     * @return bool|null
     */
    public function getForceUpshift(): ?bool
    {
        return $this->forceUpshift;
    }
    /**
     * Set forceUpshift value
     * @param bool $forceUpshift
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
     */
    public function setForceUpshift(?bool $forceUpshift = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forceUpshift) && !is_bool($forceUpshift)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forceUpshift, true), gettype($forceUpshift)), __LINE__);
        }
        $this->forceUpshift = $forceUpshift;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
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
    /**
     * Get isPasswordType value
     * @return bool|null
     */
    public function getIsPasswordType(): ?bool
    {
        return $this->isPasswordType;
    }
    /**
     * Set isPasswordType value
     * @param bool $isPasswordType
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
     */
    public function setIsPasswordType(?bool $isPasswordType = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPasswordType) && !is_bool($isPasswordType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPasswordType, true), gettype($isPasswordType)), __LINE__);
        }
        $this->isPasswordType = $isPasswordType;
        
        return $this;
    }
    /**
     * Get printDataProtection value
     * @return bool|null
     */
    public function getPrintDataProtection(): ?bool
    {
        return $this->printDataProtection;
    }
    /**
     * Set printDataProtection value
     * @param bool $printDataProtection
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
     */
    public function setPrintDataProtection(?bool $printDataProtection = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printDataProtection) && !is_bool($printDataProtection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printDataProtection, true), gettype($printDataProtection)), __LINE__);
        }
        $this->printDataProtection = $printDataProtection;
        
        return $this;
    }
    /**
     * Get readonly value
     * @return bool|null
     */
    public function getReadonly(): ?bool
    {
        return $this->readonly;
    }
    /**
     * Set readonly value
     * @param bool $readonly
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
     */
    public function setReadonly(?bool $readonly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($readonly) && !is_bool($readonly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($readonly, true), gettype($readonly)), __LINE__);
        }
        $this->readonly = $readonly;
        
        return $this;
    }
    /**
     * Get required value
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param bool $required
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
     */
    public function setRequired(?bool $required = null): self
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->required = $required;
        
        return $this;
    }
    /**
     * Get requiresUpdateRight value
     * @return bool|null
     */
    public function getRequiresUpdateRight(): ?bool
    {
        return $this->requiresUpdateRight;
    }
    /**
     * Set requiresUpdateRight value
     * @param bool $requiresUpdateRight
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
     */
    public function setRequiresUpdateRight(?bool $requiresUpdateRight = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requiresUpdateRight) && !is_bool($requiresUpdateRight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiresUpdateRight, true), gettype($requiresUpdateRight)), __LINE__);
        }
        $this->requiresUpdateRight = $requiresUpdateRight;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
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
     * Get valueTakeover value
     * @return bool|null
     */
    public function getValueTakeover(): ?bool
    {
        return $this->valueTakeover;
    }
    /**
     * Set valueTakeover value
     * @param bool $valueTakeover
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaTypeDTO
     */
    public function setValueTakeover(?bool $valueTakeover = null): self
    {
        // validation for constraint: boolean
        if (!is_null($valueTakeover) && !is_bool($valueTakeover)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($valueTakeover, true), gettype($valueTakeover)), __LINE__);
        }
        $this->valueTakeover = $valueTakeover;
        
        return $this;
    }
}
