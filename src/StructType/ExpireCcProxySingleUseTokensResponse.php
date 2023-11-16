<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpireCcProxySingleUseTokensResponse StructType
 * @subpackage Structs
 */
class ExpireCcProxySingleUseTokensResponse extends AbstractStructBase
{
    /**
     * The count
     * @var int|null
     */
    protected ?int $count = null;
    /**
     * Constructor method for ExpireCcProxySingleUseTokensResponse
     * @uses ExpireCcProxySingleUseTokensResponse::setCount()
     * @param int $count
     */
    public function __construct(?int $count = null)
    {
        $this
            ->setCount($count);
    }
    /**
     * Get count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \Pggns\MidocoApi\Order\StructType\ExpireCcProxySingleUseTokensResponse
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->count = $count;
        
        return $this;
    }
}
