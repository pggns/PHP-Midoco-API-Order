<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarketingKeyDescriptionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarketingKeyDescriptionDTO extends AbstractStructBase
{
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
     * The marketingKey
     * @var string|null
     */
    protected ?string $marketingKey = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for MarketingKeyDescriptionDTO
     * @uses MarketingKeyDescriptionDTO::setCultureId()
     * @uses MarketingKeyDescriptionDTO::setDescription()
     * @uses MarketingKeyDescriptionDTO::setMarketingKey()
     * @uses MarketingKeyDescriptionDTO::setTypeId()
     * @param string $cultureId
     * @param string $description
     * @param string $marketingKey
     * @param string $typeId
     */
    public function __construct(?string $cultureId = null, ?string $description = null, ?string $marketingKey = null, ?string $typeId = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setDescription($description)
            ->setMarketingKey($marketingKey)
            ->setTypeId($typeId);
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
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionDTO
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
