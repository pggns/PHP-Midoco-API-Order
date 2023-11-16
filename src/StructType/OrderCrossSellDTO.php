<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderCrossSellDTO StructType
 * @subpackage Structs
 */
class OrderCrossSellDTO extends AbstractStructBase
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
     * The crossSellType
     * @var string|null
     */
    protected ?string $crossSellType = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for OrderCrossSellDTO
     * @uses OrderCrossSellDTO::setAttributeName()
     * @uses OrderCrossSellDTO::setAttributeValue()
     * @uses OrderCrossSellDTO::setCrossSellType()
     * @uses OrderCrossSellDTO::setId()
     * @uses OrderCrossSellDTO::setOrderId()
     * @param string $attributeName
     * @param string $attributeValue
     * @param string $crossSellType
     * @param int $id
     * @param int $orderId
     */
    public function __construct(?string $attributeName = null, ?string $attributeValue = null, ?string $crossSellType = null, ?int $id = null, ?int $orderId = null)
    {
        $this
            ->setAttributeName($attributeName)
            ->setAttributeValue($attributeValue)
            ->setCrossSellType($crossSellType)
            ->setId($id)
            ->setOrderId($orderId);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO
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
     * Get crossSellType value
     * @return string|null
     */
    public function getCrossSellType(): ?string
    {
        return $this->crossSellType;
    }
    /**
     * Set crossSellType value
     * @param string $crossSellType
     * @return \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO
     */
    public function setCrossSellType(?string $crossSellType = null): self
    {
        // validation for constraint: string
        if (!is_null($crossSellType) && !is_string($crossSellType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crossSellType, true), gettype($crossSellType)), __LINE__);
        }
        $this->crossSellType = $crossSellType;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO
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
}
