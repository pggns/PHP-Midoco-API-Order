<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingOnlinePaymentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveBillingOnlinePayment --- saves a billing online payment
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBillingOnlinePaymentResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingOnlinePayment
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingOnlinePayment
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $MidocoBillingOnlinePayment = null;
    /**
     * Constructor method for SaveBillingOnlinePaymentResponse
     * @uses SaveBillingOnlinePaymentResponse::setMidocoBillingOnlinePayment()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment = null)
    {
        $this
            ->setMidocoBillingOnlinePayment($midocoBillingOnlinePayment);
    }
    /**
     * Get MidocoBillingOnlinePayment value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment|null
     */
    public function getMidocoBillingOnlinePayment(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment
    {
        return $this->MidocoBillingOnlinePayment;
    }
    /**
     * Set MidocoBillingOnlinePayment value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingOnlinePaymentResponse
     */
    public function setMidocoBillingOnlinePayment(?\Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment = null): self
    {
        $this->MidocoBillingOnlinePayment = $midocoBillingOnlinePayment;
        
        return $this;
    }
}
