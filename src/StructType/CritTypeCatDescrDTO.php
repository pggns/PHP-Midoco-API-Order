<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CritTypeCatDescrDTO StructType
 * @subpackage Structs
 */
class CritTypeCatDescrDTO extends AbstractStructBase
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
     * Constructor method for CritTypeCatDescrDTO
     * @uses CritTypeCatDescrDTO::setCategoryId()
     * @uses CritTypeCatDescrDTO::setCultureId()
     * @uses CritTypeCatDescrDTO::setDescription()
     * @param int $categoryId
     * @param string $cultureId
     * @param string $description
     */
    public function __construct(?int $categoryId = null, ?string $cultureId = null, ?string $description = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setCultureId($cultureId)
            ->setDescription($description);
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
     * @return \Pggns\MidocoApi\Order\StructType\CritTypeCatDescrDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CritTypeCatDescrDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CritTypeCatDescrDTO
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
}
