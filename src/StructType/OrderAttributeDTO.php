<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderAttributeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderAttributeDTO extends AbstractStructBase
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
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The preventPrinting
     * @var bool|null
     */
    protected ?bool $preventPrinting = null;
    /**
     * Constructor method for OrderAttributeDTO
     * @uses OrderAttributeDTO::setAttributeName()
     * @uses OrderAttributeDTO::setAttributeValue()
     * @uses OrderAttributeDTO::setCreationDate()
     * @uses OrderAttributeDTO::setCreationUser()
     * @uses OrderAttributeDTO::setModifyDate()
     * @uses OrderAttributeDTO::setModifyUser()
     * @uses OrderAttributeDTO::setOrderId()
     * @uses OrderAttributeDTO::setPreventPrinting()
     * @param string $attributeName
     * @param string $attributeValue
     * @param string $creationDate
     * @param int $creationUser
     * @param string $modifyDate
     * @param int $modifyUser
     * @param int $orderId
     * @param bool $preventPrinting
     */
    public function __construct(?string $attributeName = null, ?string $attributeValue = null, ?string $creationDate = null, ?int $creationUser = null, ?string $modifyDate = null, ?int $modifyUser = null, ?int $orderId = null, ?bool $preventPrinting = null)
    {
        $this
            ->setAttributeName($attributeName)
            ->setAttributeValue($attributeValue)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setOrderId($orderId)
            ->setPreventPrinting($preventPrinting);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderAttributeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderAttributeDTO
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
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderAttributeDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderAttributeDTO
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
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderAttributeDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderAttributeDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\OrderAttributeDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get preventPrinting value
     * @return bool|null
     */
    public function getPreventPrinting(): ?bool
    {
        return $this->preventPrinting;
    }
    /**
     * Set preventPrinting value
     * @param bool $preventPrinting
     * @return \Pggns\MidocoApi\Order\StructType\OrderAttributeDTO
     */
    public function setPreventPrinting(?bool $preventPrinting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventPrinting) && !is_bool($preventPrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventPrinting, true), gettype($preventPrinting)), __LINE__);
        }
        $this->preventPrinting = $preventPrinting;
        
        return $this;
    }
}
