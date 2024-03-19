<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderCreditCheckResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderCreditCheckResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderCreditCheck
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderCreditCheck
     * @var \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO $MidocoOrderCreditCheck = null;
    /**
     * Constructor method for GetOrderCreditCheckResponse
     * @uses GetOrderCreditCheckResponse::setMidocoOrderCreditCheck()
     * @param \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO $midocoOrderCreditCheck
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO $midocoOrderCreditCheck = null)
    {
        $this
            ->setMidocoOrderCreditCheck($midocoOrderCreditCheck);
    }
    /**
     * Get MidocoOrderCreditCheck value
     * @return \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO|null
     */
    public function getMidocoOrderCreditCheck(): ?\Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO
    {
        return $this->MidocoOrderCreditCheck;
    }
    /**
     * Set MidocoOrderCreditCheck value
     * @param \Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO $midocoOrderCreditCheck
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderCreditCheckResponse
     */
    public function setMidocoOrderCreditCheck(?\Pggns\MidocoApi\Order\StructType\OrderCreditCheckDTO $midocoOrderCreditCheck = null): self
    {
        $this->MidocoOrderCreditCheck = $midocoOrderCreditCheck;
        
        return $this;
    }
}
