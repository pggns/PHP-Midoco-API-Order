<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoAgencySettlementRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencySettlementSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencySettlementSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementSearchCriteria $MidocoAgencySettlementSearchCriteria = null;
    /**
     * Constructor method for GetMidocoAgencySettlementRequest
     * @uses GetMidocoAgencySettlementRequest::setMidocoAgencySettlementSearchCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementSearchCriteria $midocoAgencySettlementSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementSearchCriteria $midocoAgencySettlementSearchCriteria = null)
    {
        $this
            ->setMidocoAgencySettlementSearchCriteria($midocoAgencySettlementSearchCriteria);
    }
    /**
     * Get MidocoAgencySettlementSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementSearchCriteria|null
     */
    public function getMidocoAgencySettlementSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementSearchCriteria
    {
        return $this->MidocoAgencySettlementSearchCriteria;
    }
    /**
     * Set MidocoAgencySettlementSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementSearchCriteria $midocoAgencySettlementSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoAgencySettlementRequest
     */
    public function setMidocoAgencySettlementSearchCriteria(?\Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementSearchCriteria $midocoAgencySettlementSearchCriteria = null): self
    {
        $this->MidocoAgencySettlementSearchCriteria = $midocoAgencySettlementSearchCriteria;
        
        return $this;
    }
}
