<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSpecifiedSupplierPaymentConditionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSpecifiedSupplierPaymentConditionResponse extends AbstractStructBase
{
    /**
     * The SupplierPaymentConditionInfo
     * @var \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SupplierPaymentCondDTO $SupplierPaymentConditionInfo = null;
    /**
     * Constructor method for GetSpecifiedSupplierPaymentConditionResponse
     * @uses GetSpecifiedSupplierPaymentConditionResponse::setSupplierPaymentConditionInfo()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo = null)
    {
        $this
            ->setSupplierPaymentConditionInfo($supplierPaymentConditionInfo);
    }
    /**
     * Get SupplierPaymentConditionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondDTO|null
     */
    public function getSupplierPaymentConditionInfo(): ?\Pggns\MidocoApi\Order\StructType\SupplierPaymentCondDTO
    {
        return $this->SupplierPaymentConditionInfo;
    }
    /**
     * Set SupplierPaymentConditionInfo value
     * @param \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetSpecifiedSupplierPaymentConditionResponse
     */
    public function setSupplierPaymentConditionInfo(?\Pggns\MidocoApi\Order\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo = null): self
    {
        $this->SupplierPaymentConditionInfo = $supplierPaymentConditionInfo;
        
        return $this;
    }
}
