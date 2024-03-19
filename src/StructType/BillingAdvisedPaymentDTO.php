<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingAdvisedPaymentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingAdvisedPaymentDTO extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
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
     * Constructor method for BillingAdvisedPaymentDTO
     * @uses BillingAdvisedPaymentDTO::setDocumentId()
     * @uses BillingAdvisedPaymentDTO::setPaymentStatus()
     * @uses BillingAdvisedPaymentDTO::setPaymentType()
     * @uses BillingAdvisedPaymentDTO::setReferenceNo()
     * @param int $documentId
     * @param string $paymentStatus
     * @param string $paymentType
     * @param string $referenceNo
     */
    public function __construct(?int $documentId = null, ?string $paymentStatus = null, ?string $paymentType = null, ?string $referenceNo = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setPaymentStatus($paymentStatus)
            ->setPaymentType($paymentType)
            ->setReferenceNo($referenceNo);
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO
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
