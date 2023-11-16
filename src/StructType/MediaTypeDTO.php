<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediaTypeDTO StructType
 * @subpackage Structs
 */
class MediaTypeDTO extends AbstractStructBase
{
    /**
     * The mediaType
     * @var int|null
     */
    protected ?int $mediaType = null;
    /**
     * Constructor method for MediaTypeDTO
     * @uses MediaTypeDTO::setMediaType()
     * @param int $mediaType
     */
    public function __construct(?int $mediaType = null)
    {
        $this
            ->setMediaType($mediaType);
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
     * @return \Pggns\MidocoApi\Order\StructType\MediaTypeDTO
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
