<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderMarginResponse StructType
 * @subpackage Structs
 */
class GetOrderMarginResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderMargin
     * @var \Pggns\MidocoApi\Order\StructType\OrderMarginDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrderMarginDTO $MidocoOrderMargin = null;
    /**
     * Constructor method for GetOrderMarginResponse
     * @uses GetOrderMarginResponse::setMidocoOrderMargin()
     * @param \Pggns\MidocoApi\Order\StructType\OrderMarginDTO $midocoOrderMargin
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\OrderMarginDTO $midocoOrderMargin = null)
    {
        $this
            ->setMidocoOrderMargin($midocoOrderMargin);
    }
    /**
     * Get MidocoOrderMargin value
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO|null
     */
    public function getMidocoOrderMargin(): ?\Pggns\MidocoApi\Order\StructType\OrderMarginDTO
    {
        return $this->MidocoOrderMargin;
    }
    /**
     * Set MidocoOrderMargin value
     * @param \Pggns\MidocoApi\Order\StructType\OrderMarginDTO $midocoOrderMargin
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderMarginResponse
     */
    public function setMidocoOrderMargin(?\Pggns\MidocoApi\Order\StructType\OrderMarginDTO $midocoOrderMargin = null): self
    {
        $this->MidocoOrderMargin = $midocoOrderMargin;
        
        return $this;
    }
}
