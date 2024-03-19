<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoDestinationKeyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoDestinationKeyRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationKeyAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationKeyAssign
     * @var \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO $MidocoDestinationKeyAssign = null;
    /**
     * Constructor method for GetMidocoDestinationKeyRequest
     * @uses GetMidocoDestinationKeyRequest::setMidocoDestinationKeyAssign()
     * @param \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign = null)
    {
        $this
            ->setMidocoDestinationKeyAssign($midocoDestinationKeyAssign);
    }
    /**
     * Get MidocoDestinationKeyAssign value
     * @return \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO|null
     */
    public function getMidocoDestinationKeyAssign(): ?\Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO
    {
        return $this->MidocoDestinationKeyAssign;
    }
    /**
     * Set MidocoDestinationKeyAssign value
     * @param \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoDestinationKeyRequest
     */
    public function setMidocoDestinationKeyAssign(?\Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO $midocoDestinationKeyAssign = null): self
    {
        $this->MidocoDestinationKeyAssign = $midocoDestinationKeyAssign;
        
        return $this;
    }
}
