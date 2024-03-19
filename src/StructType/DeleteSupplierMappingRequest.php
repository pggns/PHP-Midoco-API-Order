<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierMappingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSupplierMappingRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierMapping
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierMapping
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping $MidocoSupplierMapping = null;
    /**
     * Constructor method for DeleteSupplierMappingRequest
     * @uses DeleteSupplierMappingRequest::setMidocoSupplierMapping()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping $midocoSupplierMapping
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping $midocoSupplierMapping = null)
    {
        $this
            ->setMidocoSupplierMapping($midocoSupplierMapping);
    }
    /**
     * Get MidocoSupplierMapping value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping|null
     */
    public function getMidocoSupplierMapping(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping
    {
        return $this->MidocoSupplierMapping;
    }
    /**
     * Set MidocoSupplierMapping value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping $midocoSupplierMapping
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierMappingRequest
     */
    public function setMidocoSupplierMapping(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping $midocoSupplierMapping = null): self
    {
        $this->MidocoSupplierMapping = $midocoSupplierMapping;
        
        return $this;
    }
}
