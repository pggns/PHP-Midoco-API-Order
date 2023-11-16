<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarketingKeyDTO StructType
 * @subpackage Structs
 */
class MarketingKeyDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The marketingKey
     * @var string|null
     */
    protected ?string $marketingKey = null;
    /**
     * The maxValue
     * @var int|null
     */
    protected ?int $maxValue = null;
    /**
     * The minValue
     * @var int|null
     */
    protected ?int $minValue = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for MarketingKeyDTO
     * @uses MarketingKeyDTO::setDescription()
     * @uses MarketingKeyDTO::setMarketingKey()
     * @uses MarketingKeyDTO::setMaxValue()
     * @uses MarketingKeyDTO::setMinValue()
     * @uses MarketingKeyDTO::setTypeId()
     * @param string $description
     * @param string $marketingKey
     * @param int $maxValue
     * @param int $minValue
     * @param string $typeId
     */
    public function __construct(?string $description = null, ?string $marketingKey = null, ?int $maxValue = null, ?int $minValue = null, ?string $typeId = null)
    {
        $this
            ->setDescription($description)
            ->setMarketingKey($marketingKey)
            ->setMaxValue($maxValue)
            ->setMinValue($minValue)
            ->setTypeId($typeId);
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
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDTO
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
     * Get marketingKey value
     * @return string|null
     */
    public function getMarketingKey(): ?string
    {
        return $this->marketingKey;
    }
    /**
     * Set marketingKey value
     * @param string $marketingKey
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDTO
     */
    public function setMarketingKey(?string $marketingKey = null): self
    {
        // validation for constraint: string
        if (!is_null($marketingKey) && !is_string($marketingKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marketingKey, true), gettype($marketingKey)), __LINE__);
        }
        $this->marketingKey = $marketingKey;
        
        return $this;
    }
    /**
     * Get maxValue value
     * @return int|null
     */
    public function getMaxValue(): ?int
    {
        return $this->maxValue;
    }
    /**
     * Set maxValue value
     * @param int $maxValue
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDTO
     */
    public function setMaxValue(?int $maxValue = null): self
    {
        // validation for constraint: int
        if (!is_null($maxValue) && !(is_int($maxValue) || ctype_digit($maxValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxValue, true), gettype($maxValue)), __LINE__);
        }
        $this->maxValue = $maxValue;
        
        return $this;
    }
    /**
     * Get minValue value
     * @return int|null
     */
    public function getMinValue(): ?int
    {
        return $this->minValue;
    }
    /**
     * Set minValue value
     * @param int $minValue
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDTO
     */
    public function setMinValue(?int $minValue = null): self
    {
        // validation for constraint: int
        if (!is_null($minValue) && !(is_int($minValue) || ctype_digit($minValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minValue, true), gettype($minValue)), __LINE__);
        }
        $this->minValue = $minValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDTO
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
}
