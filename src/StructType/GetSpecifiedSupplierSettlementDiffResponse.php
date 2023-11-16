<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSpecifiedSupplierSettlementDiffResponse StructType
 * @subpackage Structs
 */
class GetSpecifiedSupplierSettlementDiffResponse extends AbstractStructBase
{
    /**
     * The SupplierSettlemDiffInfo
     * @var \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO $SupplierSettlemDiffInfo = null;
    /**
     * Constructor method for GetSpecifiedSupplierSettlementDiffResponse
     * @uses GetSpecifiedSupplierSettlementDiffResponse::setSupplierSettlemDiffInfo()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO $supplierSettlemDiffInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO $supplierSettlemDiffInfo = null)
    {
        $this
            ->setSupplierSettlemDiffInfo($supplierSettlemDiffInfo);
    }
    /**
     * Get SupplierSettlemDiffInfo value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO|null
     */
    public function getSupplierSettlemDiffInfo(): ?\Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO
    {
        return $this->SupplierSettlemDiffInfo;
    }
    /**
     * Set SupplierSettlemDiffInfo value
     * @param \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO $supplierSettlemDiffInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetSpecifiedSupplierSettlementDiffResponse
     */
    public function setSupplierSettlemDiffInfo(?\Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO $supplierSettlemDiffInfo = null): self
    {
        $this->SupplierSettlemDiffInfo = $supplierSettlemDiffInfo;
        
        return $this;
    }
}
