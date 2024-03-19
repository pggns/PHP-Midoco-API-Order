<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierCancelConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierCancelConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierCancelCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierCancelCondition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition $MidocoSupplierCancelCondition = null;
    /**
     * Constructor method for SaveSupplierCancelConditionRequest
     * @uses SaveSupplierCancelConditionRequest::setMidocoSupplierCancelCondition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition = null)
    {
        $this
            ->setMidocoSupplierCancelCondition($midocoSupplierCancelCondition);
    }
    /**
     * Get MidocoSupplierCancelCondition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition|null
     */
    public function getMidocoSupplierCancelCondition(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition
    {
        return $this->MidocoSupplierCancelCondition;
    }
    /**
     * Set MidocoSupplierCancelCondition value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierCancelConditionRequest
     */
    public function setMidocoSupplierCancelCondition(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition = null): self
    {
        $this->MidocoSupplierCancelCondition = $midocoSupplierCancelCondition;
        
        return $this;
    }
}
