<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncorrectOrderInvoiceId StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IncorrectOrderInvoiceId extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The reason
     * @var string|null
     */
    protected ?string $reason = null;
    /**
     * Constructor method for IncorrectOrderInvoiceId
     * @uses IncorrectOrderInvoiceId::setOrderId()
     * @uses IncorrectOrderInvoiceId::setReason()
     * @param int $orderId
     * @param string $reason
     */
    public function __construct(?int $orderId = null, ?string $reason = null)
    {
        $this
            ->setOrderId($orderId)
            ->setReason($reason);
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
     * @return \Pggns\MidocoApi\Order\StructType\IncorrectOrderInvoiceId
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
     * Get reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param string $reason
     * @return \Pggns\MidocoApi\Order\StructType\IncorrectOrderInvoiceId
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        
        return $this;
    }
}
