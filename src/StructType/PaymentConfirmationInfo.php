<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentConfirmationInfo StructType
 * @subpackage Structs
 */
class PaymentConfirmationInfo extends AbstractStructBase
{
    /**
     * The orderPaymentId
     * @var int|null
     */
    protected ?int $orderPaymentId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The isFinalPaymentReceived
     * @var bool|null
     */
    protected ?bool $isFinalPaymentReceived = null;
    /**
     * Constructor method for PaymentConfirmationInfo
     * @uses PaymentConfirmationInfo::setOrderPaymentId()
     * @uses PaymentConfirmationInfo::setOrderId()
     * @uses PaymentConfirmationInfo::setIsFinalPaymentReceived()
     * @param int $orderPaymentId
     * @param int $orderId
     * @param bool $isFinalPaymentReceived
     */
    public function __construct(?int $orderPaymentId = null, ?int $orderId = null, ?bool $isFinalPaymentReceived = null)
    {
        $this
            ->setOrderPaymentId($orderPaymentId)
            ->setOrderId($orderId)
            ->setIsFinalPaymentReceived($isFinalPaymentReceived);
    }
    /**
     * Get orderPaymentId value
     * @return int|null
     */
    public function getOrderPaymentId(): ?int
    {
        return $this->orderPaymentId;
    }
    /**
     * Set orderPaymentId value
     * @param int $orderPaymentId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo
     */
    public function setOrderPaymentId(?int $orderPaymentId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderPaymentId) && !(is_int($orderPaymentId) || ctype_digit($orderPaymentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderPaymentId, true), gettype($orderPaymentId)), __LINE__);
        }
        $this->orderPaymentId = $orderPaymentId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo
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
    /**
     * Get isFinalPaymentReceived value
     * @return bool|null
     */
    public function getIsFinalPaymentReceived(): ?bool
    {
        return $this->isFinalPaymentReceived;
    }
    /**
     * Set isFinalPaymentReceived value
     * @param bool $isFinalPaymentReceived
     * @return \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo
     */
    public function setIsFinalPaymentReceived(?bool $isFinalPaymentReceived = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFinalPaymentReceived) && !is_bool($isFinalPaymentReceived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFinalPaymentReceived, true), gettype($isFinalPaymentReceived)), __LINE__);
        }
        $this->isFinalPaymentReceived = $isFinalPaymentReceived;
        
        return $this;
    }
}
