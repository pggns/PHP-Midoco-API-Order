<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierSettlPaymentConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchSupplierSettlPaymentConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierSettlPaymentCondition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition $MidocoSupplierSettlPaymentCondition = null;
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * Constructor method for SearchSupplierSettlPaymentConditionRequest
     * @uses SearchSupplierSettlPaymentConditionRequest::setMidocoSupplierSettlPaymentCondition()
     * @uses SearchSupplierSettlPaymentConditionRequest::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition = null, ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplierSettlPaymentCondition($midocoSupplierSettlPaymentCondition)
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplierSettlPaymentCondition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition|null
     */
    public function getMidocoSupplierSettlPaymentCondition(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition
    {
        return $this->MidocoSupplierSettlPaymentCondition;
    }
    /**
     * Set MidocoSupplierSettlPaymentCondition value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierSettlPaymentConditionRequest
     */
    public function setMidocoSupplierSettlPaymentCondition(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition = null): self
    {
        $this->MidocoSupplierSettlPaymentCondition = $midocoSupplierSettlPaymentCondition;
        
        return $this;
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierSettlPaymentConditionRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
}
