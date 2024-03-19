<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSettlementChargeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSettlementChargeRequest extends AbstractStructBase
{
    /**
     * The chargeId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $chargeId;
    /**
     * Constructor method for DeleteSettlementChargeRequest
     * @uses DeleteSettlementChargeRequest::setChargeId()
     * @param int $chargeId
     */
    public function __construct(int $chargeId)
    {
        $this
            ->setChargeId($chargeId);
    }
    /**
     * Get chargeId value
     * @return int
     */
    public function getChargeId(): int
    {
        return $this->chargeId;
    }
    /**
     * Set chargeId value
     * @param int $chargeId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSettlementChargeRequest
     */
    public function setChargeId(int $chargeId): self
    {
        // validation for constraint: int
        if (!is_null($chargeId) && !(is_int($chargeId) || ctype_digit($chargeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($chargeId, true), gettype($chargeId)), __LINE__);
        }
        $this->chargeId = $chargeId;
        
        return $this;
    }
}
