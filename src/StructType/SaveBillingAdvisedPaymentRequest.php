<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingAdvisedPaymentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBillingAdvisedPaymentRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingAdvisedPayment
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingAdvisedPayment
     * @var \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO $MidocoBillingAdvisedPayment = null;
    /**
     * Constructor method for SaveBillingAdvisedPaymentRequest
     * @uses SaveBillingAdvisedPaymentRequest::setMidocoBillingAdvisedPayment()
     * @param \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment = null)
    {
        $this
            ->setMidocoBillingAdvisedPayment($midocoBillingAdvisedPayment);
    }
    /**
     * Get MidocoBillingAdvisedPayment value
     * @return \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO|null
     */
    public function getMidocoBillingAdvisedPayment(): ?\Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO
    {
        return $this->MidocoBillingAdvisedPayment;
    }
    /**
     * Set MidocoBillingAdvisedPayment value
     * @param \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingAdvisedPaymentRequest
     */
    public function setMidocoBillingAdvisedPayment(?\Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment = null): self
    {
        $this->MidocoBillingAdvisedPayment = $midocoBillingAdvisedPayment;
        
        return $this;
    }
}
