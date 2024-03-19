<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateSellItemPricingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateSellItemPricingRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItemPricing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSellItemPricing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $MidocoSellItemPricing = null;
    /**
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $MidocoSellItem = null;
    /**
     * Constructor method for CalculateSellItemPricingRequest
     * @uses CalculateSellItemPricingRequest::setMidocoSellItemPricing()
     * @uses CalculateSellItemPricingRequest::setMidocoSellItem()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing = null, ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem = null)
    {
        $this
            ->setMidocoSellItemPricing($midocoSellItemPricing)
            ->setMidocoSellItem($midocoSellItem);
    }
    /**
     * Get MidocoSellItemPricing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing|null
     */
    public function getMidocoSellItemPricing(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
    {
        return $this->MidocoSellItemPricing;
    }
    /**
     * Set MidocoSellItemPricing value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSellItemPricingRequest
     */
    public function setMidocoSellItemPricing(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing = null): self
    {
        $this->MidocoSellItemPricing = $midocoSellItemPricing;
        
        return $this;
    }
    /**
     * Get MidocoSellItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType|null
     */
    public function getMidocoSellItem(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType
    {
        return $this->MidocoSellItem;
    }
    /**
     * Set MidocoSellItem value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSellItemPricingRequest
     */
    public function setMidocoSellItem(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem = null): self
    {
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
}
