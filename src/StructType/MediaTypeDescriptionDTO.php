<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediaTypeDescriptionDTO StructType
 * @subpackage Structs
 */
class MediaTypeDescriptionDTO extends AbstractStructBase
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
     * The mediaType
     * @var int|null
     */
    protected ?int $mediaType = null;
    /**
     * Constructor method for MediaTypeDescriptionDTO
     * @uses MediaTypeDescriptionDTO::setCultureId()
     * @uses MediaTypeDescriptionDTO::setDescription()
     * @uses MediaTypeDescriptionDTO::setMediaType()
     * @param string $cultureId
     * @param string $description
     * @param int $mediaType
     */
    public function __construct(?string $cultureId = null, ?string $description = null, ?int $mediaType = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setDescription($description)
            ->setMediaType($mediaType);
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
     * @return \Pggns\MidocoApi\Order\StructType\MediaTypeDescriptionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediaTypeDescriptionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediaTypeDescriptionDTO
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
