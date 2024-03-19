<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceAgencySaleMessageResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnounceAgencySaleMessageResponse extends AbstractStructBase
{
    /**
     * The OrderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OrderId = null;
    /**
     * The OrderNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OrderNo = null;
    /**
     * Constructor method for AnnounceAgencySaleMessageResponse
     * @uses AnnounceAgencySaleMessageResponse::setOrderId()
     * @uses AnnounceAgencySaleMessageResponse::setOrderNo()
     * @param int $orderId
     * @param int $orderNo
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo);
    }
    /**
     * Get OrderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->OrderId;
    }
    /**
     * Set OrderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAgencySaleMessageResponse
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->OrderId = $orderId;
        
        return $this;
    }
    /**
     * Get OrderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->OrderNo;
    }
    /**
     * Set OrderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAgencySaleMessageResponse
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->OrderNo = $orderNo;
        
        return $this;
    }
}
