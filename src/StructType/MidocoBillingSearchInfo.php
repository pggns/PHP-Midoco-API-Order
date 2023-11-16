<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingSearchInfo StructType
 * @subpackage Structs
 */
class MidocoBillingSearchInfo extends MidocoBillingSearchInfoType
{
    /**
     * The selected
     * @var bool|null
     */
    protected ?bool $selected = null;
    /**
     * Constructor method for MidocoBillingSearchInfo
     * @uses MidocoBillingSearchInfo::setSelected()
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo
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
