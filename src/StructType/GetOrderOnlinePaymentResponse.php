<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderOnlinePaymentResponse StructType
 * @subpackage Structs
 */
class GetOrderOnlinePaymentResponse extends AbstractStructBase
{
    /**
     * The MidocoOnlinePayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOnlinePayment
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment $MidocoOnlinePayment = null;
    /**
     * Constructor method for GetOrderOnlinePaymentResponse
     * @uses GetOrderOnlinePaymentResponse::setMidocoOnlinePayment()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment = null)
    {
        $this
            ->setMidocoOnlinePayment($midocoOnlinePayment);
    }
    /**
     * Get MidocoOnlinePayment value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment|null
     */
    public function getMidocoOnlinePayment(): ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment
    {
        return $this->MidocoOnlinePayment;
    }
    /**
     * Set MidocoOnlinePayment value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderOnlinePaymentResponse
     */
    public function setMidocoOnlinePayment(?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment = null): self
    {
        $this->MidocoOnlinePayment = $midocoOnlinePayment;
        
        return $this;
    }
}
