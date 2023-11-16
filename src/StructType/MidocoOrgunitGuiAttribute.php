<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrgunitGuiAttribute StructType
 * @subpackage Structs
 */
class MidocoOrgunitGuiAttribute extends OrgunitGuiAttributeDTO
{
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * The group
     * @var string|null
     */
    protected ?string $group = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoOrgunitGuiAttribute
     * @uses MidocoOrgunitGuiAttribute::setAttributeName()
     * @uses MidocoOrgunitGuiAttribute::setGroup()
     * @uses MidocoOrgunitGuiAttribute::setDescription()
     * @param string $attributeName
     * @param string $group
     * @param string $description
     */
    public function __construct(?string $attributeName = null, ?string $group = null, ?string $description = null)
    {
        $this
            ->setAttributeName($attributeName)
            ->setGroup($group)
            ->setDescription($description);
    }
    /**
     * Get attributeName value
     * @return string|null
     */
    public function getAttributeName(): ?string
    {
        return $this->attributeName;
    }
    /**
     * Set attributeName value
     * @param string $attributeName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute
     */
    public function setAttributeName(?string $attributeName = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeName) && !is_string($attributeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeName, true), gettype($attributeName)), __LINE__);
        }
        $this->attributeName = $attributeName;
        
        return $this;
    }
    /**
     * Get group value
     * @return string|null
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }
    /**
     * Set group value
     * @param string $group
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute
     */
    public function setGroup(?string $group = null): self
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->group = $group;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute
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
}
