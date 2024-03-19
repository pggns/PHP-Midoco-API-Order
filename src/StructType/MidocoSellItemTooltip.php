<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellItemTooltip StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSellItemTooltip extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The htmlTooltip
     * @var string|null
     */
    protected ?string $htmlTooltip = null;
    /**
     * Constructor method for MidocoSellItemTooltip
     * @uses MidocoSellItemTooltip::setItemId()
     * @uses MidocoSellItemTooltip::setItemType()
     * @uses MidocoSellItemTooltip::setHtmlTooltip()
     * @param int $itemId
     * @param string $itemType
     * @param string $htmlTooltip
     */
    public function __construct(?int $itemId = null, ?string $itemType = null, ?string $htmlTooltip = null)
    {
        $this
            ->setItemId($itemId)
            ->setItemType($itemType)
            ->setHtmlTooltip($htmlTooltip);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip
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
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get htmlTooltip value
     * @return string|null
     */
    public function getHtmlTooltip(): ?string
    {
        return $this->htmlTooltip;
    }
    /**
     * Set htmlTooltip value
     * @param string $htmlTooltip
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip
     */
    public function setHtmlTooltip(?string $htmlTooltip = null): self
    {
        // validation for constraint: string
        if (!is_null($htmlTooltip) && !is_string($htmlTooltip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($htmlTooltip, true), gettype($htmlTooltip)), __LINE__);
        }
        $this->htmlTooltip = $htmlTooltip;
        
        return $this;
    }
}
