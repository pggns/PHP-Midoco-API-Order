<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderDocument4Selection StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderDocument4Selection extends OrderDocumentDTO
{
    /**
     * The selected
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $selected = null;
    /**
     * Constructor method for MidocoOrderDocument4Selection
     * @uses MidocoOrderDocument4Selection::setSelected()
     * @param bool $selected
     */
    public function __construct(?bool $selected = false)
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument4Selection
     */
    public function setSelected(?bool $selected = false): self
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->selected = $selected;
        
        return $this;
    }
}
