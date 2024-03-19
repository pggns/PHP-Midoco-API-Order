<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirportCodesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAirportCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoAirportCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAirportCode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAirportCode|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAirportCode $MidocoAirportCode = null;
    /**
     * Constructor method for GetAirportCodesRequest
     * @uses GetAirportCodesRequest::setMidocoAirportCode()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAirportCode $midocoAirportCode
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAirportCode $midocoAirportCode = null)
    {
        $this
            ->setMidocoAirportCode($midocoAirportCode);
    }
    /**
     * Get MidocoAirportCode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAirportCode|null
     */
    public function getMidocoAirportCode(): ?\Pggns\MidocoApi\Order\StructType\MidocoAirportCode
    {
        return $this->MidocoAirportCode;
    }
    /**
     * Set MidocoAirportCode value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAirportCode $midocoAirportCode
     * @return \Pggns\MidocoApi\Order\StructType\GetAirportCodesRequest
     */
    public function setMidocoAirportCode(?\Pggns\MidocoApi\Order\StructType\MidocoAirportCode $midocoAirportCode = null): self
    {
        $this->MidocoAirportCode = $midocoAirportCode;
        
        return $this;
    }
}
