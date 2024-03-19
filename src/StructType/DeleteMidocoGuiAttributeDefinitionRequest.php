<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoGuiAttributeDefinitionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoGuiAttributeDefinitionRequest extends AbstractStructBase
{
    /**
     * The attributeId
     * @var int|null
     */
    protected ?int $attributeId = null;
    /**
     * Constructor method for DeleteMidocoGuiAttributeDefinitionRequest
     * @uses DeleteMidocoGuiAttributeDefinitionRequest::setAttributeId()
     * @param int $attributeId
     */
    public function __construct(?int $attributeId = null)
    {
        $this
            ->setAttributeId($attributeId);
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoGuiAttributeDefinitionRequest
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
