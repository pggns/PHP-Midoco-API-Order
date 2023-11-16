<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelCMSResponse StructType
 * @subpackage Structs
 */
class GetTravelCMSResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelCm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTravelCm
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelCm|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelCm $MidocoTravelCm = null;
    /**
     * Constructor method for GetTravelCMSResponse
     * @uses GetTravelCMSResponse::setMidocoTravelCm()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelCm $midocoTravelCm
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTravelCm $midocoTravelCm = null)
    {
        $this
            ->setMidocoTravelCm($midocoTravelCm);
    }
    /**
     * Get MidocoTravelCm value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelCm|null
     */
    public function getMidocoTravelCm(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelCm
    {
        return $this->MidocoTravelCm;
    }
    /**
     * Set MidocoTravelCm value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelCm $midocoTravelCm
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelCMSResponse
     */
    public function setMidocoTravelCm(?\Pggns\MidocoApi\Order\StructType\MidocoTravelCm $midocoTravelCm = null): self
    {
        $this->MidocoTravelCm = $midocoTravelCm;
        
        return $this;
    }
}
