<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoOrgUnitGuiAttributeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoOrgUnitGuiAttributeRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The attributeId
     * @var int|null
     */
    protected ?int $attributeId = null;
    /**
     * Constructor method for DeleteMidocoOrgUnitGuiAttributeRequest
     * @uses DeleteMidocoOrgUnitGuiAttributeRequest::setUnitName()
     * @uses DeleteMidocoOrgUnitGuiAttributeRequest::setAttributeId()
     * @param string $unitName
     * @param int $attributeId
     */
    public function __construct(?string $unitName = null, ?int $attributeId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setAttributeId($attributeId);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoOrgUnitGuiAttributeRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get attributeId value
     * @return int|null
     */
    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }
    /**
     * Set attributeId value
     * @param int $attributeId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoOrgUnitGuiAttributeRequest
     */
    public function setAttributeId(?int $attributeId = null): self
    {
        // validation for constraint: int
        if (!is_null($attributeId) && !(is_int($attributeId) || ctype_digit($attributeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeId, true), gettype($attributeId)), __LINE__);
        }
        $this->attributeId = $attributeId;
        
        return $this;
    }
}
