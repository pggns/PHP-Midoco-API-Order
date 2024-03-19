<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SplitSupplAgencySettlemBookRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SplitSupplAgencySettlemBookRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlementBooking
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencySettlementBooking
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $MidocoSupplierAgencySettlementBooking = null;
    /**
     * The MidocoSupplierAgencySettlementDetail
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencySettlementDetail
     * @var \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $MidocoSupplierAgencySettlementDetail = null;
    /**
     * Constructor method for SplitSupplAgencySettlemBookRequest
     * @uses SplitSupplAgencySettlemBookRequest::setMidocoSupplierAgencySettlementBooking()
     * @uses SplitSupplAgencySettlemBookRequest::setMidocoSupplierAgencySettlementDetail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking = null, ?\Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail = null)
    {
        $this
            ->setMidocoSupplierAgencySettlementBooking($midocoSupplierAgencySettlementBooking)
            ->setMidocoSupplierAgencySettlementDetail($midocoSupplierAgencySettlementDetail);
    }
    /**
     * Get MidocoSupplierAgencySettlementBooking value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking|null
     */
    public function getMidocoSupplierAgencySettlementBooking(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking
    {
        return $this->MidocoSupplierAgencySettlementBooking;
    }
    /**
     * Set MidocoSupplierAgencySettlementBooking value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking
     * @return \Pggns\MidocoApi\Order\StructType\SplitSupplAgencySettlemBookRequest
     */
    public function setMidocoSupplierAgencySettlementBooking(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking = null): self
    {
        $this->MidocoSupplierAgencySettlementBooking = $midocoSupplierAgencySettlementBooking;
        
        return $this;
    }
    /**
     * Get MidocoSupplierAgencySettlementDetail value
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO|null
     */
    public function getMidocoSupplierAgencySettlementDetail(): ?\Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
    {
        return $this->MidocoSupplierAgencySettlementDetail;
    }
    /**
     * Set MidocoSupplierAgencySettlementDetail value
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail
     * @return \Pggns\MidocoApi\Order\StructType\SplitSupplAgencySettlemBookRequest
     */
    public function setMidocoSupplierAgencySettlementDetail(?\Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail = null): self
    {
        $this->MidocoSupplierAgencySettlementDetail = $midocoSupplierAgencySettlementDetail;
        
        return $this;
    }
}
