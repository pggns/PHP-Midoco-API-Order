<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoOrderQmRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListMidocoOrderQmRequest extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * Constructor method for ListMidocoOrderQmRequest
     * @uses ListMidocoOrderQmRequest::setMidocoOrder()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null)
    {
        $this
            ->setMidocoOrder($midocoOrder);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\ListMidocoOrderQmRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
}
