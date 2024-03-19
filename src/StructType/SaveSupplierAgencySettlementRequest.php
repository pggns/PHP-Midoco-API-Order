<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAgencySettlementRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencySettlement
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $MidocoSupplierAgencySettlement = null;
    /**
     * Constructor method for SaveSupplierAgencySettlementRequest
     * @uses SaveSupplierAgencySettlementRequest::setMidocoSupplierAgencySettlement()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement = null)
    {
        $this
            ->setMidocoSupplierAgencySettlement($midocoSupplierAgencySettlement);
    }
    /**
     * Get MidocoSupplierAgencySettlement value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement|null
     */
    public function getMidocoSupplierAgencySettlement(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement
    {
        return $this->MidocoSupplierAgencySettlement;
    }
    /**
     * Set MidocoSupplierAgencySettlement value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierAgencySettlementRequest
     */
    public function setMidocoSupplierAgencySettlement(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement = null): self
    {
        $this->MidocoSupplierAgencySettlement = $midocoSupplierAgencySettlement;
        
        return $this;
    }
}
