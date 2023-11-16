<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceBookingMessageNormResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: announceBookingMessage --- a method for all external reservation systems to inform midoco about a booking created or changed for a specific agency. MidocoBookingMessage has the ability to store various types of bookings and combine
 * them, building packages aso. The data is stored into the order database in appropriate tables and for each booking (or order, in case there is one) a workflow is invoked to process the tasks around a booking (such as generation of billing-positions
 * or tasks for the user to print other documents)
 * @subpackage Structs
 */
class AnnounceBookingMessageNormResponse extends AbstractStructBase
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
     * The VoucherInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mbm_norm:VoucherInfo
     * @var \Pggns\MidocoApi\Order\StructType\VoucherInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\VoucherInfo $VoucherInfo = null;
    /**
     * Constructor method for AnnounceBookingMessageNormResponse
     * @uses AnnounceBookingMessageNormResponse::setOrderId()
     * @uses AnnounceBookingMessageNormResponse::setOrderNo()
     * @uses AnnounceBookingMessageNormResponse::setVoucherInfo()
     * @param int $orderId
     * @param int $orderNo
     * @param \Pggns\MidocoApi\Order\StructType\VoucherInfo $voucherInfo
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?\Pggns\MidocoApi\Order\StructType\VoucherInfo $voucherInfo = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setVoucherInfo($voucherInfo);
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
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageNormResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageNormResponse
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
    /**
     * Get VoucherInfo value
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo|null
     */
    public function getVoucherInfo(): ?\Pggns\MidocoApi\Order\StructType\VoucherInfo
    {
        return $this->VoucherInfo;
    }
    /**
     * Set VoucherInfo value
     * @param \Pggns\MidocoApi\Order\StructType\VoucherInfo $voucherInfo
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageNormResponse
     */
    public function setVoucherInfo(?\Pggns\MidocoApi\Order\StructType\VoucherInfo $voucherInfo = null): self
    {
        $this->VoucherInfo = $voucherInfo;
        
        return $this;
    }
}
