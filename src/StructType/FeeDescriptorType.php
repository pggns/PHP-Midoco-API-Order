<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeDescriptorType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FeeDescriptorType extends FeeTypeDTO
{
    /**
     * The ticketType
     * @var string|null
     */
    protected ?string $ticketType = null;
    /**
     * The departureGeographicalCategory
     * @var string|null
     */
    protected ?string $departureGeographicalCategory = null;
    /**
     * The feeGroupValue
     * @var float|null
     */
    protected ?float $feeGroupValue = null;
    /**
     * The sellItemAttribute
     * @var string|null
     */
    protected ?string $sellItemAttribute = null;
    /**
     * The sellItemAttributeValue
     * @var string|null
     */
    protected ?string $sellItemAttributeValue = null;
    /**
     * The orderAttribute
     * @var string|null
     */
    protected ?string $orderAttribute = null;
    /**
     * The orderAttributeValue
     * @var string|null
     */
    protected ?string $orderAttributeValue = null;
    /**
     * The feeGroup
     * @var string|null
     */
    protected ?string $feeGroup = null;
    /**
     * The feeCategory
     * @var string|null
     */
    protected ?string $feeCategory = null;
    /**
     * The feeGroupComment
     * @var string|null
     */
    protected ?string $feeGroupComment = null;
    /**
     * The feePriority
     * @var int|null
     */
    protected ?int $feePriority = null;
    /**
     * The feeAssignId
     * @var string|null
     */
    protected ?string $feeAssignId = null;
    /**
     * The geographicalCategory
     * @var string|null
     */
    protected ?string $geographicalCategory = null;
    /**
     * Constructor method for FeeDescriptorType
     * @uses FeeDescriptorType::setTicketType()
     * @uses FeeDescriptorType::setDepartureGeographicalCategory()
     * @uses FeeDescriptorType::setFeeGroupValue()
     * @uses FeeDescriptorType::setSellItemAttribute()
     * @uses FeeDescriptorType::setSellItemAttributeValue()
     * @uses FeeDescriptorType::setOrderAttribute()
     * @uses FeeDescriptorType::setOrderAttributeValue()
     * @uses FeeDescriptorType::setFeeGroup()
     * @uses FeeDescriptorType::setFeeCategory()
     * @uses FeeDescriptorType::setFeeGroupComment()
     * @uses FeeDescriptorType::setFeePriority()
     * @uses FeeDescriptorType::setFeeAssignId()
     * @uses FeeDescriptorType::setGeographicalCategory()
     * @param string $ticketType
     * @param string $departureGeographicalCategory
     * @param float $feeGroupValue
     * @param string $sellItemAttribute
     * @param string $sellItemAttributeValue
     * @param string $orderAttribute
     * @param string $orderAttributeValue
     * @param string $feeGroup
     * @param string $feeCategory
     * @param string $feeGroupComment
     * @param int $feePriority
     * @param string $feeAssignId
     * @param string $geographicalCategory
     */
    public function __construct(?string $ticketType = null, ?string $departureGeographicalCategory = null, ?float $feeGroupValue = null, ?string $sellItemAttribute = null, ?string $sellItemAttributeValue = null, ?string $orderAttribute = null, ?string $orderAttributeValue = null, ?string $feeGroup = null, ?string $feeCategory = null, ?string $feeGroupComment = null, ?int $feePriority = null, ?string $feeAssignId = null, ?string $geographicalCategory = null)
    {
        $this
            ->setTicketType($ticketType)
            ->setDepartureGeographicalCategory($departureGeographicalCategory)
            ->setFeeGroupValue($feeGroupValue)
            ->setSellItemAttribute($sellItemAttribute)
            ->setSellItemAttributeValue($sellItemAttributeValue)
            ->setOrderAttribute($orderAttribute)
            ->setOrderAttributeValue($orderAttributeValue)
            ->setFeeGroup($feeGroup)
            ->setFeeCategory($feeCategory)
            ->setFeeGroupComment($feeGroupComment)
            ->setFeePriority($feePriority)
            ->setFeeAssignId($feeAssignId)
            ->setGeographicalCategory($geographicalCategory);
    }
    /**
     * Get ticketType value
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->ticketType;
    }
    /**
     * Set ticketType value
     * @param string $ticketType
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setTicketType(?string $ticketType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketType, true), gettype($ticketType)), __LINE__);
        }
        $this->ticketType = $ticketType;
        
        return $this;
    }
    /**
     * Get departureGeographicalCategory value
     * @return string|null
     */
    public function getDepartureGeographicalCategory(): ?string
    {
        return $this->departureGeographicalCategory;
    }
    /**
     * Set departureGeographicalCategory value
     * @param string $departureGeographicalCategory
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setDepartureGeographicalCategory(?string $departureGeographicalCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($departureGeographicalCategory) && !is_string($departureGeographicalCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureGeographicalCategory, true), gettype($departureGeographicalCategory)), __LINE__);
        }
        $this->departureGeographicalCategory = $departureGeographicalCategory;
        
        return $this;
    }
    /**
     * Get feeGroupValue value
     * @return float|null
     */
    public function getFeeGroupValue(): ?float
    {
        return $this->feeGroupValue;
    }
    /**
     * Set feeGroupValue value
     * @param float $feeGroupValue
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setFeeGroupValue(?float $feeGroupValue = null): self
    {
        // validation for constraint: float
        if (!is_null($feeGroupValue) && !(is_float($feeGroupValue) || is_numeric($feeGroupValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeGroupValue, true), gettype($feeGroupValue)), __LINE__);
        }
        $this->feeGroupValue = $feeGroupValue;
        
        return $this;
    }
    /**
     * Get sellItemAttribute value
     * @return string|null
     */
    public function getSellItemAttribute(): ?string
    {
        return $this->sellItemAttribute;
    }
    /**
     * Set sellItemAttribute value
     * @param string $sellItemAttribute
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setSellItemAttribute(?string $sellItemAttribute = null): self
    {
        // validation for constraint: string
        if (!is_null($sellItemAttribute) && !is_string($sellItemAttribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellItemAttribute, true), gettype($sellItemAttribute)), __LINE__);
        }
        $this->sellItemAttribute = $sellItemAttribute;
        
        return $this;
    }
    /**
     * Get sellItemAttributeValue value
     * @return string|null
     */
    public function getSellItemAttributeValue(): ?string
    {
        return $this->sellItemAttributeValue;
    }
    /**
     * Set sellItemAttributeValue value
     * @param string $sellItemAttributeValue
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setSellItemAttributeValue(?string $sellItemAttributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($sellItemAttributeValue) && !is_string($sellItemAttributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellItemAttributeValue, true), gettype($sellItemAttributeValue)), __LINE__);
        }
        $this->sellItemAttributeValue = $sellItemAttributeValue;
        
        return $this;
    }
    /**
     * Get orderAttribute value
     * @return string|null
     */
    public function getOrderAttribute(): ?string
    {
        return $this->orderAttribute;
    }
    /**
     * Set orderAttribute value
     * @param string $orderAttribute
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setOrderAttribute(?string $orderAttribute = null): self
    {
        // validation for constraint: string
        if (!is_null($orderAttribute) && !is_string($orderAttribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderAttribute, true), gettype($orderAttribute)), __LINE__);
        }
        $this->orderAttribute = $orderAttribute;
        
        return $this;
    }
    /**
     * Get orderAttributeValue value
     * @return string|null
     */
    public function getOrderAttributeValue(): ?string
    {
        return $this->orderAttributeValue;
    }
    /**
     * Set orderAttributeValue value
     * @param string $orderAttributeValue
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setOrderAttributeValue(?string $orderAttributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($orderAttributeValue) && !is_string($orderAttributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderAttributeValue, true), gettype($orderAttributeValue)), __LINE__);
        }
        $this->orderAttributeValue = $orderAttributeValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
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
     * Get feeCategory value
     * @return string|null
     */
    public function getFeeCategory(): ?string
    {
        return $this->feeCategory;
    }
    /**
     * Set feeCategory value
     * @param string $feeCategory
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setFeeCategory(?string $feeCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCategory) && !is_string($feeCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCategory, true), gettype($feeCategory)), __LINE__);
        }
        $this->feeCategory = $feeCategory;
        
        return $this;
    }
    /**
     * Get feeGroupComment value
     * @return string|null
     */
    public function getFeeGroupComment(): ?string
    {
        return $this->feeGroupComment;
    }
    /**
     * Set feeGroupComment value
     * @param string $feeGroupComment
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setFeeGroupComment(?string $feeGroupComment = null): self
    {
        // validation for constraint: string
        if (!is_null($feeGroupComment) && !is_string($feeGroupComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeGroupComment, true), gettype($feeGroupComment)), __LINE__);
        }
        $this->feeGroupComment = $feeGroupComment;
        
        return $this;
    }
    /**
     * Get feePriority value
     * @return int|null
     */
    public function getFeePriority(): ?int
    {
        return $this->feePriority;
    }
    /**
     * Set feePriority value
     * @param int $feePriority
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setFeePriority(?int $feePriority = null): self
    {
        // validation for constraint: int
        if (!is_null($feePriority) && !(is_int($feePriority) || ctype_digit($feePriority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feePriority, true), gettype($feePriority)), __LINE__);
        }
        $this->feePriority = $feePriority;
        
        return $this;
    }
    /**
     * Get feeAssignId value
     * @return string|null
     */
    public function getFeeAssignId(): ?string
    {
        return $this->feeAssignId;
    }
    /**
     * Set feeAssignId value
     * @param string $feeAssignId
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setFeeAssignId(?string $feeAssignId = null): self
    {
        // validation for constraint: string
        if (!is_null($feeAssignId) && !is_string($feeAssignId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeAssignId, true), gettype($feeAssignId)), __LINE__);
        }
        $this->feeAssignId = $feeAssignId;
        
        return $this;
    }
    /**
     * Get geographicalCategory value
     * @return string|null
     */
    public function getGeographicalCategory(): ?string
    {
        return $this->geographicalCategory;
    }
    /**
     * Set geographicalCategory value
     * @param string $geographicalCategory
     * @return \Pggns\MidocoApi\Order\StructType\FeeDescriptorType
     */
    public function setGeographicalCategory(?string $geographicalCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($geographicalCategory) && !is_string($geographicalCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geographicalCategory, true), gettype($geographicalCategory)), __LINE__);
        }
        $this->geographicalCategory = $geographicalCategory;
        
        return $this;
    }
}
