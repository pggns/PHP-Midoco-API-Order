<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSellItemResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveSellItem --- this method is used internally to save information about a sell-item, which has been changed. It is also used from external dialogs to store changed information or to store a newly created sell-item. Each sell-item
 * is processed in a central workflow (see method announceBookingInfo), which will construct the billing positions and create the tasks around a sell-item) The request is a constructed with: - one SellItemDTO - zero or more SellRemarkDTO - one or more
 * SellPassengerDTO - one or two SellCustomerDTO (delivery/invoice) - zero or more DocumentItemDTO (ticket records, a reference to a PriceDetailsDTO might be set) - zero or more CalcItemDTO (created automatically, on base of a SellItem or its Order,
 * represents a service fee) a choice of: - one TravelItemDTO, one or more TravelDetailsDTO records, one or more PriceDetailsDTO records - one InsuranceItemDTO, one or more InsuranceDetailDTO records - one ManualItemDTO (entered manually, no travel
 * position) A sellItem inkasso_value is changeable only in case the tour operator inkasso handling allows the modification.
 * @subpackage Structs
 */
class SaveSellItemResponse extends AbstractStructBase
{
    /**
     * The MidocoSellItemInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItemInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo $MidocoSellItemInfo = null;
    /**
     * Constructor method for SaveSellItemResponse
     * @uses SaveSellItemResponse::setMidocoSellItemInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo $midocoSellItemInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo $midocoSellItemInfo = null)
    {
        $this
            ->setMidocoSellItemInfo($midocoSellItemInfo);
    }
    /**
     * Get MidocoSellItemInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo|null
     */
    public function getMidocoSellItemInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo
    {
        return $this->MidocoSellItemInfo;
    }
    /**
     * Set MidocoSellItemInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo $midocoSellItemInfo
     * @return \Pggns\MidocoApi\Order\StructType\SaveSellItemResponse
     */
    public function setMidocoSellItemInfo(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo $midocoSellItemInfo = null): self
    {
        $this->MidocoSellItemInfo = $midocoSellItemInfo;
        
        return $this;
    }
}
