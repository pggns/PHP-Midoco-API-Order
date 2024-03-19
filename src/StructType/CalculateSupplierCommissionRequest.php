<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateSupplierCommissionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateSupplierCommissionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierCommissionCondition
     * Meta information extracted from the WSDL
     * - ref: ordersd:MidocoSupplierCommissionCondition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition $MidocoSupplierCommissionCondition = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * Constructor method for CalculateSupplierCommissionRequest
     * @uses CalculateSupplierCommissionRequest::setMidocoSupplierCommissionCondition()
     * @uses CalculateSupplierCommissionRequest::setOrderNo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition
     * @param int $orderNo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition = null, ?int $orderNo = null)
    {
        $this
            ->setMidocoSupplierCommissionCondition($midocoSupplierCommissionCondition)
            ->setOrderNo($orderNo);
    }
    /**
     * Get MidocoSupplierCommissionCondition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition|null
     */
    public function getMidocoSupplierCommissionCondition(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition
    {
        return $this->MidocoSupplierCommissionCondition;
    }
    /**
     * Set MidocoSupplierCommissionCondition value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSupplierCommissionRequest
     */
    public function setMidocoSupplierCommissionCondition(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition = null): self
    {
        $this->MidocoSupplierCommissionCondition = $midocoSupplierCommissionCondition;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\CalculateSupplierCommissionRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
}
