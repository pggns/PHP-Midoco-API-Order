<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAutoRemarkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAutoRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAutoRemark
     * @var \Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO $MidocoSupplierAutoRemark = null;
    /**
     * Constructor method for DeleteAutoRemarkRequest
     * @uses DeleteAutoRemarkRequest::setMidocoSupplierAutoRemark()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark = null)
    {
        $this
            ->setMidocoSupplierAutoRemark($midocoSupplierAutoRemark);
    }
    /**
     * Get MidocoSupplierAutoRemark value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO|null
     */
    public function getMidocoSupplierAutoRemark(): ?\Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO
    {
        return $this->MidocoSupplierAutoRemark;
    }
    /**
     * Set MidocoSupplierAutoRemark value
     * @param \Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark
     * @return \Pggns\MidocoApi\Order\StructType\DeleteAutoRemarkRequest
     */
    public function setMidocoSupplierAutoRemark(?\Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark = null): self
    {
        $this->MidocoSupplierAutoRemark = $midocoSupplierAutoRemark;
        
        return $this;
    }
}
