<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemarkCategoryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemarkCategoryDTO extends AbstractStructBase
{
    /**
     * The categoryId
     * @var string|null
     */
    protected ?string $categoryId = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The parentCategoryId
     * @var string|null
     */
    protected ?string $parentCategoryId = null;
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * Constructor method for RemarkCategoryDTO
     * @uses RemarkCategoryDTO::setCategoryId()
     * @uses RemarkCategoryDTO::setCreationTime()
     * @uses RemarkCategoryDTO::setCreationUser()
     * @uses RemarkCategoryDTO::setParentCategoryId()
     * @uses RemarkCategoryDTO::setPositionNo()
     * @param string $categoryId
     * @param string $creationTime
     * @param int $creationUser
     * @param string $parentCategoryId
     * @param int $positionNo
     */
    public function __construct(?string $categoryId = null, ?string $creationTime = null, ?int $creationUser = null, ?string $parentCategoryId = null, ?int $positionNo = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setParentCategoryId($parentCategoryId)
            ->setPositionNo($positionNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\RemarkCategoryDTO
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
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\RemarkCategoryDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\RemarkCategoryDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get parentCategoryId value
     * @return string|null
     */
    public function getParentCategoryId(): ?string
    {
        return $this->parentCategoryId;
    }
    /**
     * Set parentCategoryId value
     * @param string $parentCategoryId
     * @return \Pggns\MidocoApi\Order\StructType\RemarkCategoryDTO
     */
    public function setParentCategoryId(?string $parentCategoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentCategoryId) && !is_string($parentCategoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentCategoryId, true), gettype($parentCategoryId)), __LINE__);
        }
        $this->parentCategoryId = $parentCategoryId;
        
        return $this;
    }
    /**
     * Get positionNo value
     * @return int|null
     */
    public function getPositionNo(): ?int
    {
        return $this->positionNo;
    }
    /**
     * Set positionNo value
     * @param int $positionNo
     * @return \Pggns\MidocoApi\Order\StructType\RemarkCategoryDTO
     */
    public function setPositionNo(?int $positionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($positionNo) && !(is_int($positionNo) || ctype_digit($positionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionNo, true), gettype($positionNo)), __LINE__);
        }
        $this->positionNo = $positionNo;
        
        return $this;
    }
}
