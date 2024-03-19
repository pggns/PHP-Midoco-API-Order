<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastDunningResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetLastDunningResponse extends AbstractStructBase
{
    /**
     * The MidocoDunning
     * Meta information extracted from the WSDL
     * - ref: MidocoDunning
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDunning|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDunning $MidocoDunning = null;
    /**
     * Constructor method for GetLastDunningResponse
     * @uses GetLastDunningResponse::setMidocoDunning()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunning $midocoDunning
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDunning $midocoDunning = null)
    {
        $this
            ->setMidocoDunning($midocoDunning);
    }
    /**
     * Get MidocoDunning value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning|null
     */
    public function getMidocoDunning(): ?\Pggns\MidocoApi\Order\StructType\MidocoDunning
    {
        return $this->MidocoDunning;
    }
    /**
     * Set MidocoDunning value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunning $midocoDunning
     * @return \Pggns\MidocoApi\Order\StructType\GetLastDunningResponse
     */
    public function setMidocoDunning(?\Pggns\MidocoApi\Order\StructType\MidocoDunning $midocoDunning = null): self
    {
        $this->MidocoDunning = $midocoDunning;
        
        return $this;
    }
}
