<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderAdvisedPaymentRequest StructType
 * @subpackage Structs
 */
class DeleteOrderAdvisedPaymentRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderId
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderId
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderId|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderId $MidocoOrderId = null;
    /**
     * Constructor method for DeleteOrderAdvisedPaymentRequest
     * @uses DeleteOrderAdvisedPaymentRequest::setMidocoOrderId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderId $midocoOrderId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderId $midocoOrderId = null)
    {
        $this
            ->setMidocoOrderId($midocoOrderId);
    }
    /**
     * Get MidocoOrderId value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderId|null
     */
    public function getMidocoOrderId(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderId
    {
        return $this->MidocoOrderId;
    }
    /**
     * Set MidocoOrderId value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderId $midocoOrderId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderAdvisedPaymentRequest
     */
    public function setMidocoOrderId(?\Pggns\MidocoApi\Order\StructType\MidocoOrderId $midocoOrderId = null): self
    {
        $this->MidocoOrderId = $midocoOrderId;
        
        return $this;
    }
}
