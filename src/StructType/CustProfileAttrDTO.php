<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustProfileAttrDTO StructType
 * @subpackage Structs
 */
class CustProfileAttrDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The gdsAttributeId
     * @var string|null
     */
    protected ?string $gdsAttributeId = null;
    /**
     * The gdsAttributeValue
     * @var string|null
     */
    protected ?string $gdsAttributeValue = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The profileAttrId
     * @var int|null
     */
    protected ?int $profileAttrId = null;
    /**
     * Constructor method for CustProfileAttrDTO
     * @uses CustProfileAttrDTO::setCustomerId()
     * @uses CustProfileAttrDTO::setGdsAttributeId()
     * @uses CustProfileAttrDTO::setGdsAttributeValue()
     * @uses CustProfileAttrDTO::setPosition()
     * @uses CustProfileAttrDTO::setProfileAttrId()
     * @param int $customerId
     * @param string $gdsAttributeId
     * @param string $gdsAttributeValue
     * @param int $position
     * @param int $profileAttrId
     */
    public function __construct(?int $customerId = null, ?string $gdsAttributeId = null, ?string $gdsAttributeValue = null, ?int $position = null, ?int $profileAttrId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setGdsAttributeId($gdsAttributeId)
            ->setGdsAttributeValue($gdsAttributeValue)
            ->setPosition($position)
            ->setProfileAttrId($profileAttrId);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CustProfileAttrDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get gdsAttributeId value
     * @return string|null
     */
    public function getGdsAttributeId(): ?string
    {
        return $this->gdsAttributeId;
    }
    /**
     * Set gdsAttributeId value
     * @param string $gdsAttributeId
     * @return \Pggns\MidocoApi\Order\StructType\CustProfileAttrDTO
     */
    public function setGdsAttributeId(?string $gdsAttributeId = null): self
    {
        // validation for constraint: string
        if (!is_null($gdsAttributeId) && !is_string($gdsAttributeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gdsAttributeId, true), gettype($gdsAttributeId)), __LINE__);
        }
        $this->gdsAttributeId = $gdsAttributeId;
        
        return $this;
    }
    /**
     * Get gdsAttributeValue value
     * @return string|null
     */
    public function getGdsAttributeValue(): ?string
    {
        return $this->gdsAttributeValue;
    }
    /**
     * Set gdsAttributeValue value
     * @param string $gdsAttributeValue
     * @return \Pggns\MidocoApi\Order\StructType\CustProfileAttrDTO
     */
    public function setGdsAttributeValue(?string $gdsAttributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($gdsAttributeValue) && !is_string($gdsAttributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gdsAttributeValue, true), gettype($gdsAttributeValue)), __LINE__);
        }
        $this->gdsAttributeValue = $gdsAttributeValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustProfileAttrDTO
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
     * Get profileAttrId value
     * @return int|null
     */
    public function getProfileAttrId(): ?int
    {
        return $this->profileAttrId;
    }
    /**
     * Set profileAttrId value
     * @param int $profileAttrId
     * @return \Pggns\MidocoApi\Order\StructType\CustProfileAttrDTO
     */
    public function setProfileAttrId(?int $profileAttrId = null): self
    {
        // validation for constraint: int
        if (!is_null($profileAttrId) && !(is_int($profileAttrId) || ctype_digit($profileAttrId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($profileAttrId, true), gettype($profileAttrId)), __LINE__);
        }
        $this->profileAttrId = $profileAttrId;
        
        return $this;
    }
}
