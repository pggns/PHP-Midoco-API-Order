<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoExtendedSellPassenger StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoExtendedSellPassenger extends SellPassengerDTO
{
    /**
     * The isSelected
     * @var bool|null
     */
    protected ?bool $isSelected = null;
    /**
     * Constructor method for MidocoExtendedSellPassenger
     * @uses MidocoExtendedSellPassenger::setIsSelected()
     * @param bool $isSelected
     */
    public function __construct(?bool $isSelected = null)
    {
        $this
            ->setIsSelected($isSelected);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedSellPassenger
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
}
