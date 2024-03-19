<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentReminderInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentReminderInfo extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The forDeposit
     * @var bool|null
     */
    protected ?bool $forDeposit = null;
    /**
     * Constructor method for PaymentReminderInfo
     * @uses PaymentReminderInfo::setOrderId()
     * @uses PaymentReminderInfo::setForDeposit()
     * @param int $orderId
     * @param bool $forDeposit
     */
    public function __construct(?int $orderId = null, ?bool $forDeposit = null)
    {
        $this
            ->setOrderId($orderId)
            ->setForDeposit($forDeposit);
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentReminderInfo
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
     * Get forDeposit value
     * @return bool|null
     */
    public function getForDeposit(): ?bool
    {
        return $this->forDeposit;
    }
    /**
     * Set forDeposit value
     * @param bool $forDeposit
     * @return \Pggns\MidocoApi\Order\StructType\PaymentReminderInfo
     */
    public function setForDeposit(?bool $forDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forDeposit) && !is_bool($forDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forDeposit, true), gettype($forDeposit)), __LINE__);
        }
        $this->forDeposit = $forDeposit;
        
        return $this;
    }
}
