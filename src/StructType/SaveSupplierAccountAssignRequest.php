<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAccountAssignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierAccountAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign $MidocoSupplierAccountAssign = null;
    /**
     * Constructor method for SaveSupplierAccountAssignRequest
     * @uses SaveSupplierAccountAssignRequest::setMidocoSupplierAccountAssign()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null)
    {
        $this
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign);
    }
    /**
     * Get MidocoSupplierAccountAssign value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign|null
     */
    public function getMidocoSupplierAccountAssign(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign
    {
        return $this->MidocoSupplierAccountAssign;
    }
    /**
     * Set MidocoSupplierAccountAssign value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierAccountAssignRequest
     */
    public function setMidocoSupplierAccountAssign(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null): self
    {
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
}
