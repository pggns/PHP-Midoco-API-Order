<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TemplateTypeDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for TemplateTypeDTO
     * @uses TemplateTypeDTO::setDescription()
     * @uses TemplateTypeDTO::setType()
     * @param string $description
     * @param string $type
     */
    public function __construct(?string $description = null, ?string $type = null)
    {
        $this
            ->setDescription($description)
            ->setType($type);
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
     * @return \Pggns\MidocoApi\Order\StructType\TemplateTypeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TemplateTypeDTO
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
}
