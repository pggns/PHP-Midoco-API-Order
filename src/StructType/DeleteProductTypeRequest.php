<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProductTypeRequest StructType
 * @subpackage Structs
 */
class DeleteProductTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoProductType
     * Meta information extracted from the WSDL
     * - ref: MidocoProductType
     * @var \Pggns\MidocoApi\Order\StructType\MidocoProductTypeType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoProductTypeType $MidocoProductType = null;
    /**
     * Constructor method for DeleteProductTypeRequest
     * @uses DeleteProductTypeRequest::setMidocoProductType()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoProductTypeType $midocoProductType
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoProductTypeType $midocoProductType = null)
    {
        $this
            ->setMidocoProductType($midocoProductType);
    }
    /**
     * Get MidocoProductType value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProductTypeType|null
     */
    public function getMidocoProductType(): ?\Pggns\MidocoApi\Order\StructType\MidocoProductTypeType
    {
        return $this->MidocoProductType;
    }
    /**
     * Set MidocoProductType value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoProductTypeType $midocoProductType
     * @return \Pggns\MidocoApi\Order\StructType\DeleteProductTypeRequest
     */
    public function setMidocoProductType(?\Pggns\MidocoApi\Order\StructType\MidocoProductTypeType $midocoProductType = null): self
    {
        $this->MidocoProductType = $midocoProductType;
        
        return $this;
    }
}
