<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintCashBookResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintCashBookResponse extends AbstractStructBase
{
    /**
     * The printId
     * @var int|null
     */
    protected ?int $printId = null;
    /**
     * Constructor method for PrintCashBookResponse
     * @uses PrintCashBookResponse::setPrintId()
     * @param int $printId
     */
    public function __construct(?int $printId = null)
    {
        $this
            ->setPrintId($printId);
    }
    /**
     * Get printId value
     * @return int|null
     */
    public function getPrintId(): ?int
    {
        return $this->printId;
    }
    /**
     * Set printId value
     * @param int $printId
     * @return \Pggns\MidocoApi\Order\StructType\PrintCashBookResponse
     */
    public function setPrintId(?int $printId = null): self
    {
        // validation for constraint: int
        if (!is_null($printId) && !(is_int($printId) || ctype_digit($printId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printId, true), gettype($printId)), __LINE__);
        }
        $this->printId = $printId;
        
        return $this;
    }
}
