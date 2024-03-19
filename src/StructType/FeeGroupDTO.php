<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeGroupDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FeeGroupDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The feeGroup
     * @var string|null
     */
    protected ?string $feeGroup = null;
    /**
     * The feeGroupId
     * @var int|null
     */
    protected ?int $feeGroupId = null;
    /**
     * The groupComment
     * @var string|null
     */
    protected ?string $groupComment = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * Constructor method for FeeGroupDTO
     * @uses FeeGroupDTO::setDescription()
     * @uses FeeGroupDTO::setFeeGroup()
     * @uses FeeGroupDTO::setFeeGroupId()
     * @uses FeeGroupDTO::setGroupComment()
     * @uses FeeGroupDTO::setOrgUnit()
     * @param string $description
     * @param string $feeGroup
     * @param int $feeGroupId
     * @param string $groupComment
     * @param string $orgUnit
     */
    public function __construct(?string $description = null, ?string $feeGroup = null, ?int $feeGroupId = null, ?string $groupComment = null, ?string $orgUnit = null)
    {
        $this
            ->setDescription($description)
            ->setFeeGroup($feeGroup)
            ->setFeeGroupId($feeGroupId)
            ->setGroupComment($groupComment)
            ->setOrgUnit($orgUnit);
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeGroupDTO
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
     * Get feeGroup value
     * @return string|null
     */
    public function getFeeGroup(): ?string
    {
        return $this->feeGroup;
    }
    /**
     * Set feeGroup value
     * @param string $feeGroup
     * @return \Pggns\MidocoApi\Order\StructType\FeeGroupDTO
     */
    public function setFeeGroup(?string $feeGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($feeGroup) && !is_string($feeGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeGroup, true), gettype($feeGroup)), __LINE__);
        }
        $this->feeGroup = $feeGroup;
        
        return $this;
    }
    /**
     * Get feeGroupId value
     * @return int|null
     */
    public function getFeeGroupId(): ?int
    {
        return $this->feeGroupId;
    }
    /**
     * Set feeGroupId value
     * @param int $feeGroupId
     * @return \Pggns\MidocoApi\Order\StructType\FeeGroupDTO
     */
    public function setFeeGroupId(?int $feeGroupId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeGroupId) && !(is_int($feeGroupId) || ctype_digit($feeGroupId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeGroupId, true), gettype($feeGroupId)), __LINE__);
        }
        $this->feeGroupId = $feeGroupId;
        
        return $this;
    }
    /**
     * Get groupComment value
     * @return string|null
     */
    public function getGroupComment(): ?string
    {
        return $this->groupComment;
    }
    /**
     * Set groupComment value
     * @param string $groupComment
     * @return \Pggns\MidocoApi\Order\StructType\FeeGroupDTO
     */
    public function setGroupComment(?string $groupComment = null): self
    {
        // validation for constraint: string
        if (!is_null($groupComment) && !is_string($groupComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupComment, true), gettype($groupComment)), __LINE__);
        }
        $this->groupComment = $groupComment;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\FeeGroupDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
}
