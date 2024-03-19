<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductTypeSupplierRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetProductTypeSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoProductTypeSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoProductTypeSupplier
     * @var \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO $MidocoProductTypeSupplier = null;
    /**
     * Constructor method for GetProductTypeSupplierRequest
     * @uses GetProductTypeSupplierRequest::setMidocoProductTypeSupplier()
     * @param \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier = null)
    {
        $this
            ->setMidocoProductTypeSupplier($midocoProductTypeSupplier);
    }
    /**
     * Get MidocoProductTypeSupplier value
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO|null
     */
    public function getMidocoProductTypeSupplier(): ?\Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO
    {
        return $this->MidocoProductTypeSupplier;
    }
    /**
     * Set MidocoProductTypeSupplier value
     * @param \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier
     * @return \Pggns\MidocoApi\Order\StructType\GetProductTypeSupplierRequest
     */
    public function setMidocoProductTypeSupplier(?\Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier = null): self
    {
        $this->MidocoProductTypeSupplier = $midocoProductTypeSupplier;
        
        return $this;
    }
}
