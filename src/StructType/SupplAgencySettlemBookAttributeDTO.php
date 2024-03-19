<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplAgencySettlemBookAttributeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplAgencySettlemBookAttributeDTO extends AbstractStructBase
{
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * The attributeValue
     * @var string|null
     */
    protected ?string $attributeValue = null;
    /**
     * The bookingPosition
     * @var int|null
     */
    protected ?int $bookingPosition = null;
    /**
     * The saveAsItemAttribute
     * @var bool|null
     */
    protected ?bool $saveAsItemAttribute = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * Constructor method for SupplAgencySettlemBookAttributeDTO
     * @uses SupplAgencySettlemBookAttributeDTO::setAttributeName()
     * @uses SupplAgencySettlemBookAttributeDTO::setAttributeValue()
     * @uses SupplAgencySettlemBookAttributeDTO::setBookingPosition()
     * @uses SupplAgencySettlemBookAttributeDTO::setSaveAsItemAttribute()
     * @uses SupplAgencySettlemBookAttributeDTO::setSettlementId()
     * @param string $attributeName
     * @param string $attributeValue
     * @param int $bookingPosition
     * @param bool $saveAsItemAttribute
     * @param int $settlementId
     */
    public function __construct(?string $attributeName = null, ?string $attributeValue = null, ?int $bookingPosition = null, ?bool $saveAsItemAttribute = null, ?int $settlementId = null)
    {
        $this
            ->setAttributeName($attributeName)
            ->setAttributeValue($attributeValue)
            ->setBookingPosition($bookingPosition)
            ->setSaveAsItemAttribute($saveAsItemAttribute)
            ->setSettlementId($settlementId);
    }
    /**
     * Get attributeName value
     * @return string|null
     */
    public function getAttributeName(): ?string
    {
        return $this->attributeName;
    }
    /**
     * Set attributeName value
     * @param string $attributeName
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookAttributeDTO
     */
    public function setAttributeName(?string $attributeName = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeName) && !is_string($attributeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeName, true), gettype($attributeName)), __LINE__);
        }
        $this->attributeName = $attributeName;
        
        return $this;
    }
    /**
     * Get attributeValue value
     * @return string|null
     */
    public function getAttributeValue(): ?string
    {
        return $this->attributeValue;
    }
    /**
     * Set attributeValue value
     * @param string $attributeValue
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookAttributeDTO
     */
    public function setAttributeValue(?string $attributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeValue) && !is_string($attributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeValue, true), gettype($attributeValue)), __LINE__);
        }
        $this->attributeValue = $attributeValue;
        
        return $this;
    }
    /**
     * Get bookingPosition value
     * @return int|null
     */
    public function getBookingPosition(): ?int
    {
        return $this->bookingPosition;
    }
    /**
     * Set bookingPosition value
     * @param int $bookingPosition
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookAttributeDTO
     */
    public function setBookingPosition(?int $bookingPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPosition) && !(is_int($bookingPosition) || ctype_digit($bookingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPosition, true), gettype($bookingPosition)), __LINE__);
        }
        $this->bookingPosition = $bookingPosition;
        
        return $this;
    }
    /**
     * Get saveAsItemAttribute value
     * @return bool|null
     */
    public function getSaveAsItemAttribute(): ?bool
    {
        return $this->saveAsItemAttribute;
    }
    /**
     * Set saveAsItemAttribute value
     * @param bool $saveAsItemAttribute
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookAttributeDTO
     */
    public function setSaveAsItemAttribute(?bool $saveAsItemAttribute = null): self
    {
        // validation for constraint: boolean
        if (!is_null($saveAsItemAttribute) && !is_bool($saveAsItemAttribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveAsItemAttribute, true), gettype($saveAsItemAttribute)), __LINE__);
        }
        $this->saveAsItemAttribute = $saveAsItemAttribute;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookAttributeDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
}
