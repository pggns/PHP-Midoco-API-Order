<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakePreparedAgencySettlementRequest StructType
 * @subpackage Structs
 */
class MakePreparedAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The MakeBillingDocumentForAgencySettlementRequest
     * Meta information extracted from the WSDL
     * - ref: MakeBillingDocumentForAgencySettlementRequest
     * @var \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $MakeBillingDocumentForAgencySettlementRequest = null;
    /**
     * Constructor method for MakePreparedAgencySettlementRequest
     * @uses MakePreparedAgencySettlementRequest::setMakeBillingDocumentForAgencySettlementRequest()
     * @param \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $makeBillingDocumentForAgencySettlementRequest
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $makeBillingDocumentForAgencySettlementRequest = null)
    {
        $this
            ->setMakeBillingDocumentForAgencySettlementRequest($makeBillingDocumentForAgencySettlementRequest);
    }
    /**
     * Get MakeBillingDocumentForAgencySettlementRequest value
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest|null
     */
    public function getMakeBillingDocumentForAgencySettlementRequest(): ?\Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest
    {
        return $this->MakeBillingDocumentForAgencySettlementRequest;
    }
    /**
     * Set MakeBillingDocumentForAgencySettlementRequest value
     * @param \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $makeBillingDocumentForAgencySettlementRequest
     * @return \Pggns\MidocoApi\Order\StructType\MakePreparedAgencySettlementRequest
     */
    public function setMakeBillingDocumentForAgencySettlementRequest(?\Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $makeBillingDocumentForAgencySettlementRequest = null): self
    {
        $this->MakeBillingDocumentForAgencySettlementRequest = $makeBillingDocumentForAgencySettlementRequest;
        
        return $this;
    }
}
