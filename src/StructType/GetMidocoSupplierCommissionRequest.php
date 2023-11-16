<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierCommissionRequest StructType
 * @subpackage Structs
 */
class GetMidocoSupplierCommissionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierCommission
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierCommission
     * @var \Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO $MidocoSupplierCommission = null;
    /**
     * Constructor method for GetMidocoSupplierCommissionRequest
     * @uses GetMidocoSupplierCommissionRequest::setMidocoSupplierCommission()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO $midocoSupplierCommission
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO $midocoSupplierCommission = null)
    {
        $this
            ->setMidocoSupplierCommission($midocoSupplierCommission);
    }
    /**
     * Get MidocoSupplierCommission value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO|null
     */
    public function getMidocoSupplierCommission(): ?\Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO
    {
        return $this->MidocoSupplierCommission;
    }
    /**
     * Set MidocoSupplierCommission value
     * @param \Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO $midocoSupplierCommission
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoSupplierCommissionRequest
     */
    public function setMidocoSupplierCommission(?\Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO $midocoSupplierCommission = null): self
    {
        $this->MidocoSupplierCommission = $midocoSupplierCommission;
        
        return $this;
    }
}
