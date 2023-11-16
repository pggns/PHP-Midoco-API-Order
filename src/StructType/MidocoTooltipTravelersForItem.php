<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTooltipTravelersForItem StructType
 * @subpackage Structs
 */
class MidocoTooltipTravelersForItem extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The tooltip
     * @var string|null
     */
    protected ?string $tooltip = null;
    /**
     * Constructor method for MidocoTooltipTravelersForItem
     * @uses MidocoTooltipTravelersForItem::setItemId()
     * @uses MidocoTooltipTravelersForItem::setTooltip()
     * @param int $itemId
     * @param string $tooltip
     */
    public function __construct(?int $itemId = null, ?string $tooltip = null)
    {
        $this
            ->setItemId($itemId)
            ->setTooltip($tooltip);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTooltipTravelersForItem
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
     * Get tooltip value
     * @return string|null
     */
    public function getTooltip(): ?string
    {
        return $this->tooltip;
    }
    /**
     * Set tooltip value
     * @param string $tooltip
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTooltipTravelersForItem
     */
    public function setTooltip(?string $tooltip = null): self
    {
        // validation for constraint: string
        if (!is_null($tooltip) && !is_string($tooltip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tooltip, true), gettype($tooltip)), __LINE__);
        }
        $this->tooltip = $tooltip;
        
        return $this;
    }
}
