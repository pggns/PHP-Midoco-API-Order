<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorBillingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMediatorBillingResponse extends AbstractStructBase
{
    /**
     * The MidocoMediatorBilling
     * Meta information extracted from the WSDL
     * - ref: MidocoMediatorBilling
     * @var \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MediatorBillingDTO $MidocoMediatorBilling = null;
    /**
     * Constructor method for SaveMediatorBillingResponse
     * @uses SaveMediatorBillingResponse::setMidocoMediatorBilling()
     * @param \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO $midocoMediatorBilling
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MediatorBillingDTO $midocoMediatorBilling = null)
    {
        $this
            ->setMidocoMediatorBilling($midocoMediatorBilling);
    }
    /**
     * Get MidocoMediatorBilling value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO|null
     */
    public function getMidocoMediatorBilling(): ?\Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
    {
        return $this->MidocoMediatorBilling;
    }
    /**
     * Set MidocoMediatorBilling value
     * @param \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO $midocoMediatorBilling
     * @return \Pggns\MidocoApi\Order\StructType\SaveMediatorBillingResponse
     */
    public function setMidocoMediatorBilling(?\Pggns\MidocoApi\Order\StructType\MediatorBillingDTO $midocoMediatorBilling = null): self
    {
        $this->MidocoMediatorBilling = $midocoMediatorBilling;
        
        return $this;
    }
}
