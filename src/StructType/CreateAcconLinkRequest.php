<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAcconLinkRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: create http link for accessing documents from Accon
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateAcconLinkRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $MidocoSellItem = null;
    /**
     * Constructor method for CreateAcconLinkRequest
     * @uses CreateAcconLinkRequest::setMidocoSellItem()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem = null)
    {
        $this
            ->setMidocoSellItem($midocoSellItem);
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateAcconLinkRequest
     */
    public function setMidocoSellItem(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem = null): self
    {
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
}
