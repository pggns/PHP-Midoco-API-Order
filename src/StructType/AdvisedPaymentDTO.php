<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdvisedPaymentDTO StructType
 * @subpackage Structs
 */
class AdvisedPaymentDTO extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The paymentStatus
     * @var string|null
     */
    protected ?string $paymentStatus = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The referenceNo
     * @var string|null
     */
    protected ?string $referenceNo = null;
    /**
     * Constructor method for AdvisedPaymentDTO
     * @uses AdvisedPaymentDTO::setOrderId()
     * @uses AdvisedPaymentDTO::setPaymentStatus()
     * @uses AdvisedPaymentDTO::setPaymentType()
     * @uses AdvisedPaymentDTO::setReferenceNo()
     * @param int $orderId
     * @param string $paymentStatus
     * @param string $paymentType
     * @param string $referenceNo
     */
    public function __construct(?int $orderId = null, ?string $paymentStatus = null, ?string $paymentType = null, ?string $referenceNo = null)
    {
        $this
            ->setOrderId($orderId)
            ->setPaymentStatus($paymentStatus)
            ->setPaymentType($paymentType)
            ->setReferenceNo($referenceNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO
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
     * Get paymentStatus value
     * @return string|null
     */
    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }
    /**
     * Set paymentStatus value
     * @param string $paymentStatus
     * @return \Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO
     */
    public function setPaymentStatus(?string $paymentStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentStatus) && !is_string($paymentStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentStatus, true), gettype($paymentStatus)), __LINE__);
        }
        $this->paymentStatus = $paymentStatus;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get referenceNo value
     * @return string|null
     */
    public function getReferenceNo(): ?string
    {
        return $this->referenceNo;
    }
    /**
     * Set referenceNo value
     * @param string $referenceNo
     * @return \Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO
     */
    public function setReferenceNo(?string $referenceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceNo) && !is_string($referenceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceNo, true), gettype($referenceNo)), __LINE__);
        }
        $this->referenceNo = $referenceNo;
        
        return $this;
    }
}
