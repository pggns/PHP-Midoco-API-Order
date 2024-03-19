<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetConsentRequest extends AbstractStructBase
{
    /**
     * The MidocoConsent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoConsent
     * @var \Pggns\MidocoApi\Order\StructType\MidocoConsent|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoConsent $MidocoConsent = null;
    /**
     * Constructor method for GetConsentRequest
     * @uses GetConsentRequest::setMidocoConsent()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoConsent $midocoConsent
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoConsent $midocoConsent = null)
    {
        $this
            ->setMidocoConsent($midocoConsent);
    }
    /**
     * Get MidocoConsent value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConsent|null
     */
    public function getMidocoConsent(): ?\Pggns\MidocoApi\Order\StructType\MidocoConsent
    {
        return $this->MidocoConsent;
    }
    /**
     * Set MidocoConsent value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoConsent $midocoConsent
     * @return \Pggns\MidocoApi\Order\StructType\GetConsentRequest
     */
    public function setMidocoConsent(?\Pggns\MidocoApi\Order\StructType\MidocoConsent $midocoConsent = null): self
    {
        $this->MidocoConsent = $midocoConsent;
        
        return $this;
    }
}
