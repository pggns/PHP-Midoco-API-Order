<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenericDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenericDetailDTO extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The referencePosition
     * @var int|null
     */
    protected ?int $referencePosition = null;
    /**
     * The serviceDescription
     * @var string|null
     */
    protected ?string $serviceDescription = null;
    /**
     * Constructor method for GenericDetailDTO
     * @uses GenericDetailDTO::setItemId()
     * @uses GenericDetailDTO::setPosition()
     * @uses GenericDetailDTO::setReferencePosition()
     * @uses GenericDetailDTO::setServiceDescription()
     * @param int $itemId
     * @param int $position
     * @param int $referencePosition
     * @param string $serviceDescription
     */
    public function __construct(?int $itemId = null, ?int $position = null, ?int $referencePosition = null, ?string $serviceDescription = null)
    {
        $this
            ->setItemId($itemId)
            ->setPosition($position)
            ->setReferencePosition($referencePosition)
            ->setServiceDescription($serviceDescription);
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\GenericDetailDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericDetailDTO
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
    /**
     * Get referencePosition value
     * @return int|null
     */
    public function getReferencePosition(): ?int
    {
        return $this->referencePosition;
    }
    /**
     * Set referencePosition value
     * @param int $referencePosition
     * @return \Pggns\MidocoApi\Order\StructType\GenericDetailDTO
     */
    public function setReferencePosition(?int $referencePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($referencePosition) && !(is_int($referencePosition) || ctype_digit($referencePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referencePosition, true), gettype($referencePosition)), __LINE__);
        }
        $this->referencePosition = $referencePosition;
        
        return $this;
    }
    /**
     * Get serviceDescription value
     * @return string|null
     */
    public function getServiceDescription(): ?string
    {
        return $this->serviceDescription;
    }
    /**
     * Set serviceDescription value
     * @param string $serviceDescription
     * @return \Pggns\MidocoApi\Order\StructType\GenericDetailDTO
     */
    public function setServiceDescription(?string $serviceDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceDescription) && !is_string($serviceDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceDescription, true), gettype($serviceDescription)), __LINE__);
        }
        $this->serviceDescription = $serviceDescription;
        
        return $this;
    }
}
