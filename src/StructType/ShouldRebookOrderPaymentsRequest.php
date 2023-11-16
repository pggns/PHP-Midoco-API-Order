<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShouldRebookOrderPaymentsRequest StructType
 * @subpackage Structs
 */
class ShouldRebookOrderPaymentsRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The currentDebitorNo
     * @var string|null
     */
    protected ?string $currentDebitorNo = null;
    /**
     * Constructor method for ShouldRebookOrderPaymentsRequest
     * @uses ShouldRebookOrderPaymentsRequest::setOrderId()
     * @uses ShouldRebookOrderPaymentsRequest::setCurrentDebitorNo()
     * @param int $orderId
     * @param string $currentDebitorNo
     */
    public function __construct(?int $orderId = null, ?string $currentDebitorNo = null)
    {
        $this
            ->setOrderId($orderId)
            ->setCurrentDebitorNo($currentDebitorNo);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\ShouldRebookOrderPaymentsRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get currentDebitorNo value
     * @return string|null
     */
    public function getCurrentDebitorNo(): ?string
    {
        return $this->currentDebitorNo;
    }
    /**
     * Set currentDebitorNo value
     * @param string $currentDebitorNo
     * @return \Pggns\MidocoApi\Order\StructType\ShouldRebookOrderPaymentsRequest
     */
    public function setCurrentDebitorNo(?string $currentDebitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($currentDebitorNo) && !is_string($currentDebitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentDebitorNo, true), gettype($currentDebitorNo)), __LINE__);
        }
        $this->currentDebitorNo = $currentDebitorNo;
        
        return $this;
    }
}
