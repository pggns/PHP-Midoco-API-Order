<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectableFeeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SelectableFeeType extends FeeTypeDTO
{
    /**
     * The selected
     * @var bool|null
     */
    protected ?bool $selected = null;
    /**
     * Constructor method for SelectableFeeType
     * @uses SelectableFeeType::setSelected()
     * @param bool $selected
     */
    public function __construct(?bool $selected = null)
    {
        $this
            ->setSelected($selected);
    }
    /**
     * Get selected value
     * @return bool|null
     */
    public function getSelected(): ?bool
    {
        return $this->selected;
    }
    /**
     * Set selected value
     * @param bool $selected
     * @return \Pggns\MidocoApi\Order\StructType\SelectableFeeType
     */
    public function setSelected(?bool $selected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->selected = $selected;
        
        return $this;
    }
}
