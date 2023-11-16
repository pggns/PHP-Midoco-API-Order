<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactMediaDTO StructType
 * @subpackage Structs
 */
class ContactMediaDTO extends AbstractStructBase
{
    /**
     * The isOrderVisible
     * @var bool|null
     */
    protected ?bool $isOrderVisible = null;
    /**
     * The isPrivate
     * @var bool|null
     */
    protected ?bool $isPrivate = null;
    /**
     * The mediaId
     * @var string|null
     */
    protected ?string $mediaId = null;
    /**
     * The mediaType
     * @var int|null
     */
    protected ?int $mediaType = null;
    /**
     * Constructor method for ContactMediaDTO
     * @uses ContactMediaDTO::setIsOrderVisible()
     * @uses ContactMediaDTO::setIsPrivate()
     * @uses ContactMediaDTO::setMediaId()
     * @uses ContactMediaDTO::setMediaType()
     * @param bool $isOrderVisible
     * @param bool $isPrivate
     * @param string $mediaId
     * @param int $mediaType
     */
    public function __construct(?bool $isOrderVisible = null, ?bool $isPrivate = null, ?string $mediaId = null, ?int $mediaType = null)
    {
        $this
            ->setIsOrderVisible($isOrderVisible)
            ->setIsPrivate($isPrivate)
            ->setMediaId($mediaId)
            ->setMediaType($mediaType);
    }
    /**
     * Get isOrderVisible value
     * @return bool|null
     */
    public function getIsOrderVisible(): ?bool
    {
        return $this->isOrderVisible;
    }
    /**
     * Set isOrderVisible value
     * @param bool $isOrderVisible
     * @return \Pggns\MidocoApi\Order\StructType\ContactMediaDTO
     */
    public function setIsOrderVisible(?bool $isOrderVisible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrderVisible) && !is_bool($isOrderVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrderVisible, true), gettype($isOrderVisible)), __LINE__);
        }
        $this->isOrderVisible = $isOrderVisible;
        
        return $this;
    }
    /**
     * Get isPrivate value
     * @return bool|null
     */
    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
    }
    /**
     * Set isPrivate value
     * @param bool $isPrivate
     * @return \Pggns\MidocoApi\Order\StructType\ContactMediaDTO
     */
    public function setIsPrivate(?bool $isPrivate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrivate) && !is_bool($isPrivate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrivate, true), gettype($isPrivate)), __LINE__);
        }
        $this->isPrivate = $isPrivate;
        
        return $this;
    }
    /**
     * Get mediaId value
     * @return string|null
     */
    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }
    /**
     * Set mediaId value
     * @param string $mediaId
     * @return \Pggns\MidocoApi\Order\StructType\ContactMediaDTO
     */
    public function setMediaId(?string $mediaId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediaId) && !is_string($mediaId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediaId, true), gettype($mediaId)), __LINE__);
        }
        $this->mediaId = $mediaId;
        
        return $this;
    }
    /**
     * Get mediaType value
     * @return int|null
     */
    public function getMediaType(): ?int
    {
        return $this->mediaType;
    }
    /**
     * Set mediaType value
     * @param int $mediaType
     * @return \Pggns\MidocoApi\Order\StructType\ContactMediaDTO
     */
    public function setMediaType(?int $mediaType = null): self
    {
        // validation for constraint: int
        if (!is_null($mediaType) && !(is_int($mediaType) || ctype_digit($mediaType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediaType, true), gettype($mediaType)), __LINE__);
        }
        $this->mediaType = $mediaType;
        
        return $this;
    }
}
