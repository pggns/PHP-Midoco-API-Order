<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoContactMediaExt StructType
 * @subpackage Structs
 */
class MidocoContactMediaExt extends ContactMediaExtDTO
{
    /**
     * The contactGroup
     * Meta information extracted from the WSDL
     * - default: 0
     * @var int|null
     */
    protected ?int $contactGroup = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for MidocoContactMediaExt
     * @uses MidocoContactMediaExt::setContactGroup()
     * @uses MidocoContactMediaExt::setPosition()
     * @param int $contactGroup
     * @param int $position
     */
    public function __construct(?int $contactGroup = 0, ?int $position = null)
    {
        $this
            ->setContactGroup($contactGroup)
            ->setPosition($position);
    }
    /**
     * Get contactGroup value
     * @return int|null
     */
    public function getContactGroup(): ?int
    {
        return $this->contactGroup;
    }
    /**
     * Set contactGroup value
     * @param int $contactGroup
     * @return \Pggns\MidocoApi\Order\StructType\MidocoContactMediaExt
     */
    public function setContactGroup(?int $contactGroup = 0): self
    {
        // validation for constraint: int
        if (!is_null($contactGroup) && !(is_int($contactGroup) || ctype_digit($contactGroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactGroup, true), gettype($contactGroup)), __LINE__);
        }
        $this->contactGroup = $contactGroup;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoContactMediaExt
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
}
