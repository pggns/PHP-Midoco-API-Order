<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMarketingKeyDescriptionRequest StructType
 * @subpackage Structs
 */
class DeleteMarketingKeyDescriptionRequest extends AbstractStructBase
{
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The marketingKey
     * @var string|null
     */
    protected ?string $marketingKey = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * Constructor method for DeleteMarketingKeyDescriptionRequest
     * @uses DeleteMarketingKeyDescriptionRequest::setType()
     * @uses DeleteMarketingKeyDescriptionRequest::setMarketingKey()
     * @uses DeleteMarketingKeyDescriptionRequest::setCultureId()
     * @param string $type
     * @param string $marketingKey
     * @param string $cultureId
     */
    public function __construct(?string $type = null, ?string $marketingKey = null, ?string $cultureId = null)
    {
        $this
            ->setType($type)
            ->setMarketingKey($marketingKey)
            ->setCultureId($cultureId);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMarketingKeyDescriptionRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMarketingKeyDescriptionRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMarketingKeyDescriptionRequest
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
}
