<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerCreditScoreRequest StructType
 * @subpackage Structs
 */
class GetCustomerCreditScoreRequest extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderId;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderNo;
    /**
     * The callWorkflow
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $callWorkflow;
    /**
     * Constructor method for GetCustomerCreditScoreRequest
     * @uses GetCustomerCreditScoreRequest::setOrderId()
     * @uses GetCustomerCreditScoreRequest::setOrderNo()
     * @uses GetCustomerCreditScoreRequest::setCallWorkflow()
     * @param int $orderId
     * @param int $orderNo
     * @param bool $callWorkflow
     */
    public function __construct(int $orderId, int $orderNo, bool $callWorkflow)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setCallWorkflow($callWorkflow);
    }
    /**
     * Get orderId value
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetCustomerCreditScoreRequest
     */
    public function setOrderId(int $orderId): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int
     */
    public function getOrderNo(): int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\GetCustomerCreditScoreRequest
     */
    public function setOrderNo(int $orderNo): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get callWorkflow value
     * @return bool
     */
    public function getCallWorkflow(): bool
    {
        return $this->callWorkflow;
    }
    /**
     * Set callWorkflow value
     * @param bool $callWorkflow
     * @return \Pggns\MidocoApi\Order\StructType\GetCustomerCreditScoreRequest
     */
    public function setCallWorkflow(bool $callWorkflow): self
    {
        // validation for constraint: boolean
        if (!is_null($callWorkflow) && !is_bool($callWorkflow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($callWorkflow, true), gettype($callWorkflow)), __LINE__);
        }
        $this->callWorkflow = $callWorkflow;
        
        return $this;
    }
}
