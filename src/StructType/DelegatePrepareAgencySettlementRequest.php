<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DelegatePrepareAgencySettlementRequest StructType
 * @subpackage Structs
 */
class DelegatePrepareAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyProvisionSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyProvisionSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $MidocoAgencyProvisionSearchCriteria = null;
    /**
     * The MidocoAgencySettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencySettlement
     * @var \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AgencySettlementDTO $MidocoAgencySettlement = null;
    /**
     * Constructor method for DelegatePrepareAgencySettlementRequest
     * @uses DelegatePrepareAgencySettlementRequest::setMidocoAgencyProvisionSearchCriteria()
     * @uses DelegatePrepareAgencySettlementRequest::setMidocoAgencySettlement()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria
     * @param \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO $midocoAgencySettlement
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria = null, ?\Pggns\MidocoApi\Order\StructType\AgencySettlementDTO $midocoAgencySettlement = null)
    {
        $this
            ->setMidocoAgencyProvisionSearchCriteria($midocoAgencyProvisionSearchCriteria)
            ->setMidocoAgencySettlement($midocoAgencySettlement);
    }
    /**
     * Get MidocoAgencyProvisionSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria|null
     */
    public function getMidocoAgencyProvisionSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
    {
        return $this->MidocoAgencyProvisionSearchCriteria;
    }
    /**
     * Set MidocoAgencyProvisionSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\DelegatePrepareAgencySettlementRequest
     */
    public function setMidocoAgencyProvisionSearchCriteria(?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria = null): self
    {
        $this->MidocoAgencyProvisionSearchCriteria = $midocoAgencyProvisionSearchCriteria;
        
        return $this;
    }
    /**
     * Get MidocoAgencySettlement value
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO|null
     */
    public function getMidocoAgencySettlement(): ?\Pggns\MidocoApi\Order\StructType\AgencySettlementDTO
    {
        return $this->MidocoAgencySettlement;
    }
    /**
     * Set MidocoAgencySettlement value
     * @param \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO $midocoAgencySettlement
     * @return \Pggns\MidocoApi\Order\StructType\DelegatePrepareAgencySettlementRequest
     */
    public function setMidocoAgencySettlement(?\Pggns\MidocoApi\Order\StructType\AgencySettlementDTO $midocoAgencySettlement = null): self
    {
        $this->MidocoAgencySettlement = $midocoAgencySettlement;
        
        return $this;
    }
}
