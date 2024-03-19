<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingOnlinePaymentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBillingOnlinePaymentRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingOnlinePayment
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingOnlinePayment
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $MidocoBillingOnlinePayment = null;
    /**
     * Constructor method for SaveBillingOnlinePaymentRequest
     * @uses SaveBillingOnlinePaymentRequest::setMidocoBillingOnlinePayment()
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingOnlinePaymentRequest
     */
    public function setMidocoBillingOnlinePayment(?\Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment = null): self
    {
        $this->MidocoBillingOnlinePayment = $midocoBillingOnlinePayment;
        
        return $this;
    }
}
