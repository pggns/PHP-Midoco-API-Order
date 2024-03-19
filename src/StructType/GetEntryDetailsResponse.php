<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEntryDetailsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEntryDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoEntryDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoEntryDetails
     * @var \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoEntryDetails $MidocoEntryDetails = null;
    /**
     * Constructor method for GetEntryDetailsResponse
     * @uses GetEntryDetailsResponse::setMidocoEntryDetails()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails $midocoEntryDetails
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoEntryDetails $midocoEntryDetails = null)
    {
        $this
            ->setMidocoEntryDetails($midocoEntryDetails);
    }
    /**
     * Get MidocoEntryDetails value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails|null
     */
    public function getMidocoEntryDetails(): ?\Pggns\MidocoApi\Order\StructType\MidocoEntryDetails
    {
        return $this->MidocoEntryDetails;
    }
    /**
     * Set MidocoEntryDetails value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails $midocoEntryDetails
     * @return \Pggns\MidocoApi\Order\StructType\GetEntryDetailsResponse
     */
    public function setMidocoEntryDetails(?\Pggns\MidocoApi\Order\StructType\MidocoEntryDetails $midocoEntryDetails = null): self
    {
        $this->MidocoEntryDetails = $midocoEntryDetails;
        
        return $this;
    }
}
