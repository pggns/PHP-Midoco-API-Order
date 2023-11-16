<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadPaymentDataResponse StructType
 * @subpackage Structs
 */
class UploadPaymentDataResponse extends AbstractStructBase
{
    /**
     * The PaymentUploadError
     * Meta information extracted from the WSDL
     * - ref: PaymentUploadError
     * @var \Pggns\MidocoApi\Order\StructType\PaymentUploadError|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PaymentUploadError $PaymentUploadError = null;
    /**
     * Constructor method for UploadPaymentDataResponse
     * @uses UploadPaymentDataResponse::setPaymentUploadError()
     * @param \Pggns\MidocoApi\Order\StructType\PaymentUploadError $paymentUploadError
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PaymentUploadError $paymentUploadError = null)
    {
        $this
            ->setPaymentUploadError($paymentUploadError);
    }
    /**
     * Get PaymentUploadError value
     * @return \Pggns\MidocoApi\Order\StructType\PaymentUploadError|null
     */
    public function getPaymentUploadError(): ?\Pggns\MidocoApi\Order\StructType\PaymentUploadError
    {
        return $this->PaymentUploadError;
    }
    /**
     * Set PaymentUploadError value
     * @param \Pggns\MidocoApi\Order\StructType\PaymentUploadError $paymentUploadError
     * @return \Pggns\MidocoApi\Order\StructType\UploadPaymentDataResponse
     */
    public function setPaymentUploadError(?\Pggns\MidocoApi\Order\StructType\PaymentUploadError $paymentUploadError = null): self
    {
        $this->PaymentUploadError = $paymentUploadError;
        
        return $this;
    }
}
