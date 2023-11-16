<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemRevenuesRequest StructType
 * @subpackage Structs
 */
class GetSellItemRevenuesRequest extends AbstractStructBase
{
    /**
     * The sellItemId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $sellItemId;
    /**
     * Constructor method for GetSellItemRevenuesRequest
     * @uses GetSellItemRevenuesRequest::setSellItemId()
     * @param int $sellItemId
     */
    public function __construct(int $sellItemId)
    {
        $this
            ->setSellItemId($sellItemId);
    }
    /**
     * Get sellItemId value
     * @return int
     */
    public function getSellItemId(): int
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param int $sellItemId
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemRevenuesRequest
     */
    public function setSellItemId(int $sellItemId): self
    {
        // validation for constraint: int
        if (!is_null($sellItemId) && !(is_int($sellItemId) || ctype_digit($sellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemId, true), gettype($sellItemId)), __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
        return $this;
    }
}
