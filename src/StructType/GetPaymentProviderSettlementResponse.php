<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentProviderSettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPaymentProviderSettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentProviderSettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentProviderSettlement
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement $MidocoPaymentProviderSettlement = null;
    /**
     * Constructor method for GetPaymentProviderSettlementResponse
     * @uses GetPaymentProviderSettlementResponse::setMidocoPaymentProviderSettlement()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement $midocoPaymentProviderSettlement
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement $midocoPaymentProviderSettlement = null)
    {
        $this
            ->setMidocoPaymentProviderSettlement($midocoPaymentProviderSettlement);
    }
    /**
     * Get MidocoPaymentProviderSettlement value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement|null
     */
    public function getMidocoPaymentProviderSettlement(): ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement
    {
        return $this->MidocoPaymentProviderSettlement;
    }
    /**
     * Set MidocoPaymentProviderSettlement value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement $midocoPaymentProviderSettlement
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementResponse
     */
    public function setMidocoPaymentProviderSettlement(?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement $midocoPaymentProviderSettlement = null): self
    {
        $this->MidocoPaymentProviderSettlement = $midocoPaymentProviderSettlement;
        
        return $this;
    }
}
