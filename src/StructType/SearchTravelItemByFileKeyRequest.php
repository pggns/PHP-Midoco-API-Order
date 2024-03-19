<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTravelItemByFileKeyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchTravelItemByFileKeyRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelItemInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelItemInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelItemInfoType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemInfoType $MidocoTravelItemInfo = null;
    /**
     * Constructor method for SearchTravelItemByFileKeyRequest
     * @uses SearchTravelItemByFileKeyRequest::setMidocoTravelItemInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelItemInfoType $midocoTravelItemInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemInfoType $midocoTravelItemInfo = null)
    {
        $this
            ->setMidocoTravelItemInfo($midocoTravelItemInfo);
    }
    /**
     * Get MidocoTravelItemInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemInfoType|null
     */
    public function getMidocoTravelItemInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemInfoType
    {
        return $this->MidocoTravelItemInfo;
    }
    /**
     * Set MidocoTravelItemInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelItemInfoType $midocoTravelItemInfo
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelItemByFileKeyRequest
     */
    public function setMidocoTravelItemInfo(?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemInfoType $midocoTravelItemInfo = null): self
    {
        $this->MidocoTravelItemInfo = $midocoTravelItemInfo;
        
        return $this;
    }
}
