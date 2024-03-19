<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSellItemRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItemId
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItemId
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemId|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemId $MidocoSellItemId = null;
    /**
     * Constructor method for GetSellItemRequest
     * @uses GetSellItemRequest::setMidocoSellItemId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemId $midocoSellItemId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemId $midocoSellItemId = null)
    {
        $this
            ->setMidocoSellItemId($midocoSellItemId);
    }
    /**
     * Get MidocoSellItemId value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemId|null
     */
    public function getMidocoSellItemId(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemId
    {
        return $this->MidocoSellItemId;
    }
    /**
     * Set MidocoSellItemId value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemId $midocoSellItemId
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemRequest
     */
    public function setMidocoSellItemId(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemId $midocoSellItemId = null): self
    {
        $this->MidocoSellItemId = $midocoSellItemId;
        
        return $this;
    }
}
