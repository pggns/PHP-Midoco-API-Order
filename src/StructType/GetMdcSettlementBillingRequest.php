<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMdcSettlementBillingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMdcSettlementBillingRequest extends AbstractStructBase
{
    /**
     * The mdcSettlementBillingId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $mdcSettlementBillingId;
    /**
     * Constructor method for GetMdcSettlementBillingRequest
     * @uses GetMdcSettlementBillingRequest::setMdcSettlementBillingId()
     * @param int $mdcSettlementBillingId
     */
    public function __construct(int $mdcSettlementBillingId)
    {
        $this
            ->setMdcSettlementBillingId($mdcSettlementBillingId);
    }
    /**
     * Get mdcSettlementBillingId value
     * @return int
     */
    public function getMdcSettlementBillingId(): int
    {
        return $this->mdcSettlementBillingId;
    }
    /**
     * Set mdcSettlementBillingId value
     * @param int $mdcSettlementBillingId
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingRequest
     */
    public function setMdcSettlementBillingId(int $mdcSettlementBillingId): self
    {
        // validation for constraint: int
        if (!is_null($mdcSettlementBillingId) && !(is_int($mdcSettlementBillingId) || ctype_digit($mdcSettlementBillingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mdcSettlementBillingId, true), gettype($mdcSettlementBillingId)), __LINE__);
        }
        $this->mdcSettlementBillingId = $mdcSettlementBillingId;
        
        return $this;
    }
}
