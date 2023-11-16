<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdviceDetailResponse StructType
 * @subpackage Structs
 */
class GetAdviceDetailResponse extends AbstractStructBase
{
    /**
     * The MidocoAdviceSettlementDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAdviceSettlementDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail $MidocoAdviceSettlementDetail = null;
    /**
     * Constructor method for GetAdviceDetailResponse
     * @uses GetAdviceDetailResponse::setMidocoAdviceSettlementDetail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail $midocoAdviceSettlementDetail
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail $midocoAdviceSettlementDetail = null)
    {
        $this
            ->setMidocoAdviceSettlementDetail($midocoAdviceSettlementDetail);
    }
    /**
     * Get MidocoAdviceSettlementDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail|null
     */
    public function getMidocoAdviceSettlementDetail(): ?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail
    {
        return $this->MidocoAdviceSettlementDetail;
    }
    /**
     * Set MidocoAdviceSettlementDetail value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail $midocoAdviceSettlementDetail
     * @return \Pggns\MidocoApi\Order\StructType\GetAdviceDetailResponse
     */
    public function setMidocoAdviceSettlementDetail(?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail $midocoAdviceSettlementDetail = null): self
    {
        $this->MidocoAdviceSettlementDetail = $midocoAdviceSettlementDetail;
        
        return $this;
    }
}
