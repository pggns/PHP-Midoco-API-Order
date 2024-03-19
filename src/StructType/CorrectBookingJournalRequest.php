<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CorrectBookingJournalRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CorrectBookingJournalRequest extends AbstractStructBase
{
    /**
     * The paymentId
     * @var int|null
     */
    protected ?int $paymentId = null;
    /**
     * The newDebitAccount
     * @var string|null
     */
    protected ?string $newDebitAccount = null;
    /**
     * Constructor method for CorrectBookingJournalRequest
     * @uses CorrectBookingJournalRequest::setPaymentId()
     * @uses CorrectBookingJournalRequest::setNewDebitAccount()
     * @param int $paymentId
     * @param string $newDebitAccount
     */
    public function __construct(?int $paymentId = null, ?string $newDebitAccount = null)
    {
        $this
            ->setPaymentId($paymentId)
            ->setNewDebitAccount($newDebitAccount);
    }
    /**
     * Get paymentId value
     * @return int|null
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }
    /**
     * Set paymentId value
     * @param int $paymentId
     * @return \Pggns\MidocoApi\Order\StructType\CorrectBookingJournalRequest
     */
    public function setPaymentId(?int $paymentId = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentId) && !(is_int($paymentId) || ctype_digit($paymentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentId, true), gettype($paymentId)), __LINE__);
        }
        $this->paymentId = $paymentId;
        
        return $this;
    }
    /**
     * Get newDebitAccount value
     * @return string|null
     */
    public function getNewDebitAccount(): ?string
    {
        return $this->newDebitAccount;
    }
    /**
     * Set newDebitAccount value
     * @param string $newDebitAccount
     * @return \Pggns\MidocoApi\Order\StructType\CorrectBookingJournalRequest
     */
    public function setNewDebitAccount(?string $newDebitAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($newDebitAccount) && !is_string($newDebitAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newDebitAccount, true), gettype($newDebitAccount)), __LINE__);
        }
        $this->newDebitAccount = $newDebitAccount;
        
        return $this;
    }
}
