<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareAgenciesListForSettlementRequest StructType
 * @subpackage Structs
 */
class PrepareAgenciesListForSettlementRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyProvisionSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyProvisionSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $MidocoAgencyProvisionSearchCriteria = null;
    /**
     * Constructor method for PrepareAgenciesListForSettlementRequest
     * @uses PrepareAgenciesListForSettlementRequest::setMidocoAgencyProvisionSearchCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria = null)
    {
        $this
            ->setMidocoAgencyProvisionSearchCriteria($midocoAgencyProvisionSearchCriteria);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAgenciesListForSettlementRequest
     */
    public function setMidocoAgencyProvisionSearchCriteria(?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria = null): self
    {
        $this->MidocoAgencyProvisionSearchCriteria = $midocoAgencyProvisionSearchCriteria;
        
        return $this;
    }
}
