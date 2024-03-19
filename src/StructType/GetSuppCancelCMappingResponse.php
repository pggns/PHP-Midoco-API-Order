<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSuppCancelCMappingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSuppCancelCMappingResponse extends AbstractStructBase
{
    /**
     * The MidocoSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoSuppCancelCMapping
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping $MidocoSuppCancelCMapping = null;
    /**
     * Constructor method for GetSuppCancelCMappingResponse
     * @uses GetSuppCancelCMappingResponse::setMidocoSuppCancelCMapping()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping = null)
    {
        $this
            ->setMidocoSuppCancelCMapping($midocoSuppCancelCMapping);
    }
    /**
     * Get MidocoSuppCancelCMapping value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping|null
     */
    public function getMidocoSuppCancelCMapping(): ?\Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping
    {
        return $this->MidocoSuppCancelCMapping;
    }
    /**
     * Set MidocoSuppCancelCMapping value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping
     * @return \Pggns\MidocoApi\Order\StructType\GetSuppCancelCMappingResponse
     */
    public function setMidocoSuppCancelCMapping(?\Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping = null): self
    {
        $this->MidocoSuppCancelCMapping = $midocoSuppCancelCMapping;
        
        return $this;
    }
}
