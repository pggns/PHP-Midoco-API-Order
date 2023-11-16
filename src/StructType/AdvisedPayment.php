<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for advisedPayment StructType
 * @subpackage Structs
 */
class AdvisedPayment extends AbstractStructBase
{
    /**
     * The paymentType
     * Meta information extracted from the WSDL
     * - documentation: in case of paypal: PAYPAL_ORDER
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The paymentStatus
     * Meta information extracted from the WSDL
     * - documentation: status of payment. in case of paypal: CREATED, CAPTURED, DENIED, EXPIRED, PARTIALLY_CAPTURED, VOIDED, PENDING
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentStatus = null;
    /**
     * The referenceNo
     * Meta information extracted from the WSDL
     * - documentation: external reference to payment transaction. in case of paypal the orderId or the orderReferenceId
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $referenceNo = null;
    /**
     * Constructor method for advisedPayment
     * @uses AdvisedPayment::setPaymentType()
     * @uses AdvisedPayment::setPaymentStatus()
     * @uses AdvisedPayment::setReferenceNo()
     * @param string $paymentType
     * @param string $paymentStatus
     * @param string $referenceNo
     */
    public function __construct(?string $paymentType = null, ?string $paymentStatus = null, ?string $referenceNo = null)
    {
        $this
            ->setPaymentType($paymentType)
            ->setPaymentStatus($paymentStatus)
            ->setReferenceNo($referenceNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\AdvisedPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\AdvisedPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\AdvisedPayment
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
