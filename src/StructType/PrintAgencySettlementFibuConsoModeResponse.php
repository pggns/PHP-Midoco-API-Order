<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintAgencySettlementFibuConsoModeResponse StructType
 * @subpackage Structs
 */
class PrintAgencySettlementFibuConsoModeResponse extends AbstractStructBase
{
    /**
     * The printjobId
     * @var int|null
     */
    protected ?int $printjobId = null;
    /**
     * Constructor method for PrintAgencySettlementFibuConsoModeResponse
     * @uses PrintAgencySettlementFibuConsoModeResponse::setPrintjobId()
     * @param int $printjobId
     */
    public function __construct(?int $printjobId = null)
    {
        $this
            ->setPrintjobId($printjobId);
    }
    /**
     * Get printjobId value
     * @return int|null
     */
    public function getPrintjobId(): ?int
    {
        return $this->printjobId;
    }
    /**
     * Set printjobId value
     * @param int $printjobId
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementFibuConsoModeResponse
     */
    public function setPrintjobId(?int $printjobId = null): self
    {
        // validation for constraint: int
        if (!is_null($printjobId) && !(is_int($printjobId) || ctype_digit($printjobId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printjobId, true), gettype($printjobId)), __LINE__);
        }
        $this->printjobId = $printjobId;
        
        return $this;
    }
}
