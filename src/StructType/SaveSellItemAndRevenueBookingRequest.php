<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSellItemAndRevenueBookingRequest StructType
 * @subpackage Structs
 */
class SaveSellItemAndRevenueBookingRequest extends AbstractStructBase
{
    /**
     * The SellItemProvision
     * Meta information extracted from the WSDL
     * - ref: SellItemProvision
     * @var \Pggns\MidocoApi\Order\StructType\SellItemProvisionType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SellItemProvisionType $SellItemProvision = null;
    /**
     * The RevenueBookingInfo
     * Meta information extracted from the WSDL
     * - ref: RevenueBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $RevenueBookingInfo = null;
    /**
     * Constructor method for SaveSellItemAndRevenueBookingRequest
     * @uses SaveSellItemAndRevenueBookingRequest::setSellItemProvision()
     * @uses SaveSellItemAndRevenueBookingRequest::setRevenueBookingInfo()
     * @param \Pggns\MidocoApi\Order\StructType\SellItemProvisionType $sellItemProvision
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SellItemProvisionType $sellItemProvision = null, ?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null)
    {
        $this
            ->setSellItemProvision($sellItemProvision)
            ->setRevenueBookingInfo($revenueBookingInfo);
    }
    /**
     * Get SellItemProvision value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType|null
     */
    public function getSellItemProvision(): ?\Pggns\MidocoApi\Order\StructType\SellItemProvisionType
    {
        return $this->SellItemProvision;
    }
    /**
     * Set SellItemProvision value
     * @param \Pggns\MidocoApi\Order\StructType\SellItemProvisionType $sellItemProvision
     * @return \Pggns\MidocoApi\Order\StructType\SaveSellItemAndRevenueBookingRequest
     */
    public function setSellItemProvision(?\Pggns\MidocoApi\Order\StructType\SellItemProvisionType $sellItemProvision = null): self
    {
        $this->SellItemProvision = $sellItemProvision;
        
        return $this;
    }
    /**
     * Get RevenueBookingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType|null
     */
    public function getRevenueBookingInfo(): ?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
    {
        return $this->RevenueBookingInfo;
    }
    /**
     * Set RevenueBookingInfo value
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo
     * @return \Pggns\MidocoApi\Order\StructType\SaveSellItemAndRevenueBookingRequest
     */
    public function setRevenueBookingInfo(?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null): self
    {
        $this->RevenueBookingInfo = $revenueBookingInfo;
        
        return $this;
    }
}
