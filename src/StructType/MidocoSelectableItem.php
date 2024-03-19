<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSelectableItem StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSelectableItem extends AbstractStructBase
{
    /**
     * The isSelected
     * @var bool|null
     */
    protected ?bool $isSelected = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoSelectableItem
     * @uses MidocoSelectableItem::setIsSelected()
     * @uses MidocoSelectableItem::setDescription()
     * @param bool $isSelected
     * @param string $description
     */
    public function __construct(?bool $isSelected = null, ?string $description = null)
    {
        $this
            ->setIsSelected($isSelected)
            ->setDescription($description);
    }
    /**
     * Get isSelected value
     * @return bool|null
     */
    public function getIsSelected(): ?bool
    {
        return $this->isSelected;
    }
    /**
     * Set isSelected value
     * @param bool $isSelected
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSelectableItem
     */
    public function setIsSelected(?bool $isSelected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSelected) && !is_bool($isSelected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSelected, true), gettype($isSelected)), __LINE__);
        }
        $this->isSelected = $isSelected;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSelectableItem
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
