<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOnlinePaymentTransaction4CreditReceiptRequest
 * StructType
 * @subpackage Structs
 */
class GetOnlinePaymentTransaction4CreditReceiptRequest extends AbstractStructBase
{
    /**
     * The MidocoReceiptInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoReceiptInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo $MidocoReceiptInfo = null;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for GetOnlinePaymentTransaction4CreditReceiptRequest
     * @uses GetOnlinePaymentTransaction4CreditReceiptRequest::setMidocoReceiptInfo()
     * @uses GetOnlinePaymentTransaction4CreditReceiptRequest::setOrderId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo
     * @param int $orderId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo = null, ?int $orderId = null)
    {
        $this
            ->setMidocoReceiptInfo($midocoReceiptInfo)
            ->setOrderId($orderId);
    }
    /**
     * Get MidocoReceiptInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo|null
     */
    public function getMidocoReceiptInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
    {
        return $this->MidocoReceiptInfo;
    }
    /**
     * Set MidocoReceiptInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetOnlinePaymentTransaction4CreditReceiptRequest
     */
    public function setMidocoReceiptInfo(?\Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo = null): self
    {
        $this->MidocoReceiptInfo = $midocoReceiptInfo;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetOnlinePaymentTransaction4CreditReceiptRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
}
