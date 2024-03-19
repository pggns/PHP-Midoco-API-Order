<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoContactDescription StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoContactDescription extends ContactDescriptionDTO
{
    /**
     * The contactGroup
     * Meta information extracted from the WSDL
     * - default: 0
     * @var int|null
     */
    protected ?int $contactGroup = null;
    /**
     * Constructor method for MidocoContactDescription
     * @uses MidocoContactDescription::setContactGroup()
     * @param int $contactGroup
     */
    public function __construct(?int $contactGroup = 0)
    {
        $this
            ->setContactGroup($contactGroup);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoContactDescription
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
}
