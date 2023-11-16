<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrgunitSupplierAgencyResponse StructType
 * @subpackage Structs
 */
class DeleteOrgunitSupplierAgencyResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunitSupplierAgency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrgunitSupplierAgency
     * @var \Pggns\MidocoApi\Order\StructType\OrgunitSupplierAgencyDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrgunitSupplierAgencyDTO $MidocoOrgunitSupplierAgency = null;
    /**
     * Constructor method for DeleteOrgunitSupplierAgencyResponse
     * @uses DeleteOrgunitSupplierAgencyResponse::setMidocoOrgunitSupplierAgency()
     * @param \Pggns\MidocoApi\Order\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency = null)
    {
        $this
            ->setMidocoOrgunitSupplierAgency($midocoOrgunitSupplierAgency);
    }
    /**
     * Get MidocoOrgunitSupplierAgency value
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitSupplierAgencyDTO|null
     */
    public function getMidocoOrgunitSupplierAgency(): ?\Pggns\MidocoApi\Order\StructType\OrgunitSupplierAgencyDTO
    {
        return $this->MidocoOrgunitSupplierAgency;
    }
    /**
     * Set MidocoOrgunitSupplierAgency value
     * @param \Pggns\MidocoApi\Order\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrgunitSupplierAgencyResponse
     */
    public function setMidocoOrgunitSupplierAgency(?\Pggns\MidocoApi\Order\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency = null): self
    {
        $this->MidocoOrgunitSupplierAgency = $midocoOrgunitSupplierAgency;
        
        return $this;
    }
}
