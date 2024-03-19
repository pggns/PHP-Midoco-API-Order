<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemSavingsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSellItemSavingsRequest extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * Constructor method for GetSellItemSavingsRequest
     * @uses GetSellItemSavingsRequest::setItemId()
     * @param int $itemId
     */
    public function __construct(?int $itemId = null)
    {
        $this
            ->setItemId($itemId);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemSavingsRequest
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
}
