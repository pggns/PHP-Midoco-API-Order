<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSettlementChargeResponse StructType
 * @subpackage Structs
 */
class DeleteSettlementChargeResponse extends AbstractStructBase
{
    /**
     * The MidocoSettlementCharge
     * Meta information extracted from the WSDL
     * - ref: MidocoSettlementCharge
     * @var \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SettlementChargeDTO $MidocoSettlementCharge = null;
    /**
     * Constructor method for DeleteSettlementChargeResponse
     * @uses DeleteSettlementChargeResponse::setMidocoSettlementCharge()
     * @param \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO $midocoSettlementCharge
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SettlementChargeDTO $midocoSettlementCharge = null)
    {
        $this
            ->setMidocoSettlementCharge($midocoSettlementCharge);
    }
    /**
     * Get MidocoSettlementCharge value
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO|null
     */
    public function getMidocoSettlementCharge(): ?\Pggns\MidocoApi\Order\StructType\SettlementChargeDTO
    {
        return $this->MidocoSettlementCharge;
    }
    /**
     * Set MidocoSettlementCharge value
     * @param \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO $midocoSettlementCharge
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSettlementChargeResponse
     */
    public function setMidocoSettlementCharge(?\Pggns\MidocoApi\Order\StructType\SettlementChargeDTO $midocoSettlementCharge = null): self
    {
        $this->MidocoSettlementCharge = $midocoSettlementCharge;
        
        return $this;
    }
}
