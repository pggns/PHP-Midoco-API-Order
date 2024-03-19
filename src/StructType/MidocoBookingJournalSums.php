<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBookingJournalSums StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBookingJournalSums extends AbstractStructBase
{
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The credit
     * @var float|null
     */
    protected ?float $credit = null;
    /**
     * The debit
     * @var float|null
     */
    protected ?float $debit = null;
    /**
     * The total
     * @var float|null
     */
    protected ?float $total = null;
    /**
     * Constructor method for MidocoBookingJournalSums
     * @uses MidocoBookingJournalSums::setAccountNo()
     * @uses MidocoBookingJournalSums::setCredit()
     * @uses MidocoBookingJournalSums::setDebit()
     * @uses MidocoBookingJournalSums::setTotal()
     * @param string $accountNo
     * @param float $credit
     * @param float $debit
     * @param float $total
     */
    public function __construct(?string $accountNo = null, ?float $credit = null, ?float $debit = null, ?float $total = null)
    {
        $this
            ->setAccountNo($accountNo)
            ->setCredit($credit)
            ->setDebit($debit)
            ->setTotal($total);
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
    /**
     * Get credit value
     * @return float|null
     */
    public function getCredit(): ?float
    {
        return $this->credit;
    }
    /**
     * Set credit value
     * @param float $credit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums
     */
    public function setCredit(?float $credit = null): self
    {
        // validation for constraint: float
        if (!is_null($credit) && !(is_float($credit) || is_numeric($credit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($credit, true), gettype($credit)), __LINE__);
        }
        $this->credit = $credit;
        
        return $this;
    }
    /**
     * Get debit value
     * @return float|null
     */
    public function getDebit(): ?float
    {
        return $this->debit;
    }
    /**
     * Set debit value
     * @param float $debit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums
     */
    public function setDebit(?float $debit = null): self
    {
        // validation for constraint: float
        if (!is_null($debit) && !(is_float($debit) || is_numeric($debit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($debit, true), gettype($debit)), __LINE__);
        }
        $this->debit = $debit;
        
        return $this;
    }
    /**
     * Get total value
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }
    /**
     * Set total value
     * @param float $total
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums
     */
    public function setTotal(?float $total = null): self
    {
        // validation for constraint: float
        if (!is_null($total) && !(is_float($total) || is_numeric($total))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
        $this->total = $total;
        
        return $this;
    }
}
