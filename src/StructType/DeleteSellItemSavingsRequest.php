<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellItemSavingsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSellItemSavingsRequest extends AbstractStructBase
{
    /**
     * The savingId
     * @var int|null
     */
    protected ?int $savingId = null;
    /**
     * Constructor method for DeleteSellItemSavingsRequest
     * @uses DeleteSellItemSavingsRequest::setSavingId()
     * @param int $savingId
     */
    public function __construct(?int $savingId = null)
    {
        $this
            ->setSavingId($savingId);
    }
    /**
     * Get savingId value
     * @return int|null
     */
    public function getSavingId(): ?int
    {
        return $this->savingId;
    }
    /**
     * Set savingId value
     * @param int $savingId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSellItemSavingsRequest
     */
    public function setSavingId(?int $savingId = null): self
    {
        // validation for constraint: int
        if (!is_null($savingId) && !(is_int($savingId) || ctype_digit($savingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($savingId, true), gettype($savingId)), __LINE__);
        }
        $this->savingId = $savingId;
        
        return $this;
    }
}
