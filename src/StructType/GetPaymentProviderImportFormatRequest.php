<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentProviderImportFormatRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPaymentProviderImportFormatRequest extends AbstractStructBase
{
    /**
     * The paymentProviderId
     * @var string|null
     */
    protected ?string $paymentProviderId = null;
    /**
     * Constructor method for GetPaymentProviderImportFormatRequest
     * @uses GetPaymentProviderImportFormatRequest::setPaymentProviderId()
     * @param string $paymentProviderId
     */
    public function __construct(?string $paymentProviderId = null)
    {
        $this
            ->setPaymentProviderId($paymentProviderId);
    }
    /**
     * Get paymentProviderId value
     * @return string|null
     */
    public function getPaymentProviderId(): ?string
    {
        return $this->paymentProviderId;
    }
    /**
     * Set paymentProviderId value
     * @param string $paymentProviderId
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderImportFormatRequest
     */
    public function setPaymentProviderId(?string $paymentProviderId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentProviderId) && !is_string($paymentProviderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentProviderId, true), gettype($paymentProviderId)), __LINE__);
        }
        $this->paymentProviderId = $paymentProviderId;
        
        return $this;
    }
}
