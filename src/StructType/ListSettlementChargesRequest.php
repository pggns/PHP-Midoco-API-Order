<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSettlementChargesRequest StructType
 * @subpackage Structs
 */
class ListSettlementChargesRequest extends AbstractStructBase
{
    /**
     * The settlementType
     * @var int|null
     */
    protected ?int $settlementType = null;
    /**
     * Constructor method for ListSettlementChargesRequest
     * @uses ListSettlementChargesRequest::setSettlementType()
     * @param int $settlementType
     */
    public function __construct(?int $settlementType = null)
    {
        $this
            ->setSettlementType($settlementType);
    }
    /**
     * Get settlementType value
     * @return int|null
     */
    public function getSettlementType(): ?int
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param int $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\ListSettlementChargesRequest
     */
    public function setSettlementType(?int $settlementType = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementType) && !(is_int($settlementType) || ctype_digit($settlementType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
}
