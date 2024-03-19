<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveOrderRemarkResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveOrderRemarkResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderRemark
     * @var \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrderRemarkDTO $MidocoOrderRemark = null;
    /**
     * Constructor method for MoveOrderRemarkResponse
     * @uses MoveOrderRemarkResponse::setMidocoOrderRemark()
     * @param \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO $midocoOrderRemark
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\OrderRemarkDTO $midocoOrderRemark = null)
    {
        $this
            ->setMidocoOrderRemark($midocoOrderRemark);
    }
    /**
     * Get MidocoOrderRemark value
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO|null
     */
    public function getMidocoOrderRemark(): ?\Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
    {
        return $this->MidocoOrderRemark;
    }
    /**
     * Set MidocoOrderRemark value
     * @param \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO $midocoOrderRemark
     * @return \Pggns\MidocoApi\Order\StructType\MoveOrderRemarkResponse
     */
    public function setMidocoOrderRemark(?\Pggns\MidocoApi\Order\StructType\OrderRemarkDTO $midocoOrderRemark = null): self
    {
        $this->MidocoOrderRemark = $midocoOrderRemark;
        
        return $this;
    }
}
