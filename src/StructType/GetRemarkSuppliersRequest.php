<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemarkSuppliersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRemarkSuppliersRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkSupplier
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier $MidocoRemarkSupplier = null;
    /**
     * Constructor method for GetRemarkSuppliersRequest
     * @uses GetRemarkSuppliersRequest::setMidocoRemarkSupplier()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier $midocoRemarkSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier $midocoRemarkSupplier = null)
    {
        $this
            ->setMidocoRemarkSupplier($midocoRemarkSupplier);
    }
    /**
     * Get MidocoRemarkSupplier value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier|null
     */
    public function getMidocoRemarkSupplier(): ?\Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier
    {
        return $this->MidocoRemarkSupplier;
    }
    /**
     * Set MidocoRemarkSupplier value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier $midocoRemarkSupplier
     * @return \Pggns\MidocoApi\Order\StructType\GetRemarkSuppliersRequest
     */
    public function setMidocoRemarkSupplier(?\Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier $midocoRemarkSupplier = null): self
    {
        $this->MidocoRemarkSupplier = $midocoRemarkSupplier;
        
        return $this;
    }
}
