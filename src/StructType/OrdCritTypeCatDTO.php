<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrdCritTypeCatDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrdCritTypeCatDTO extends AbstractStructBase
{
    /**
     * The categoryId
     * @var int|null
     */
    protected ?int $categoryId = null;
    /**
     * The guiPosition
     * @var int|null
     */
    protected ?int $guiPosition = null;
    /**
     * Constructor method for OrdCritTypeCatDTO
     * @uses OrdCritTypeCatDTO::setCategoryId()
     * @uses OrdCritTypeCatDTO::setGuiPosition()
     * @param int $categoryId
     * @param int $guiPosition
     */
    public function __construct(?int $categoryId = null, ?int $guiPosition = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setGuiPosition($guiPosition);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDTO
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
     * Get guiPosition value
     * @return int|null
     */
    public function getGuiPosition(): ?int
    {
        return $this->guiPosition;
    }
    /**
     * Set guiPosition value
     * @param int $guiPosition
     * @return \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDTO
     */
    public function setGuiPosition(?int $guiPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($guiPosition) && !(is_int($guiPosition) || ctype_digit($guiPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($guiPosition, true), gettype($guiPosition)), __LINE__);
        }
        $this->guiPosition = $guiPosition;
        
        return $this;
    }
}
