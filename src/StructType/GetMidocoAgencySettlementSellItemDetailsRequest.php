<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoAgencySettlementSellItemDetailsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoAgencySettlementSellItemDetailsRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyProvisionInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyProvisionInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo $MidocoAgencyProvisionInfo = null;
    /**
     * Constructor method for GetMidocoAgencySettlementSellItemDetailsRequest
     * @uses GetMidocoAgencySettlementSellItemDetailsRequest::setMidocoAgencyProvisionInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo $midocoAgencyProvisionInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo $midocoAgencyProvisionInfo = null)
    {
        $this
            ->setMidocoAgencyProvisionInfo($midocoAgencyProvisionInfo);
    }
    /**
     * Get MidocoAgencyProvisionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo|null
     */
    public function getMidocoAgencyProvisionInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
    {
        return $this->MidocoAgencyProvisionInfo;
    }
    /**
     * Set MidocoAgencyProvisionInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo $midocoAgencyProvisionInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoAgencySettlementSellItemDetailsRequest
     */
    public function setMidocoAgencyProvisionInfo(?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo $midocoAgencyProvisionInfo = null): self
    {
        $this->MidocoAgencyProvisionInfo = $midocoAgencyProvisionInfo;
        
        return $this;
    }
}
