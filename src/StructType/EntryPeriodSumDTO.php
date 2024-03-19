<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntryPeriodSumDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EntryPeriodSumDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The bookingPeriod
     * @var int|null
     */
    protected ?int $bookingPeriod = null;
    /**
     * The bookingYear
     * @var int|null
     */
    protected ?int $bookingYear = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creditAccount
     * @var string|null
     */
    protected ?string $creditAccount = null;
    /**
     * The debitAccount
     * @var string|null
     */
    protected ?string $debitAccount = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The totalInvoicedAmount
     * @var float|null
     */
    protected ?float $totalInvoicedAmount = null;
    /**
     * The totalOrigInvoicedAmount
     * @var float|null
     */
    protected ?float $totalOrigInvoicedAmount = null;
    /**
     * The totalOrigPaidAmount
     * @var float|null
     */
    protected ?float $totalOrigPaidAmount = null;
    /**
     * The totalPaidAmount
     * @var float|null
     */
    protected ?float $totalPaidAmount = null;
    /**
     * Constructor method for EntryPeriodSumDTO
     * @uses EntryPeriodSumDTO::setAccountId()
     * @uses EntryPeriodSumDTO::setBookingDate()
     * @uses EntryPeriodSumDTO::setBookingPeriod()
     * @uses EntryPeriodSumDTO::setBookingYear()
     * @uses EntryPeriodSumDTO::setCreationDate()
     * @uses EntryPeriodSumDTO::setCreditAccount()
     * @uses EntryPeriodSumDTO::setDebitAccount()
     * @uses EntryPeriodSumDTO::setEntryId()
     * @uses EntryPeriodSumDTO::setExportId()
     * @uses EntryPeriodSumDTO::setIsExported()
     * @uses EntryPeriodSumDTO::setPlanId()
     * @uses EntryPeriodSumDTO::setReceiptDate()
     * @uses EntryPeriodSumDTO::setTotalInvoicedAmount()
     * @uses EntryPeriodSumDTO::setTotalOrigInvoicedAmount()
     * @uses EntryPeriodSumDTO::setTotalOrigPaidAmount()
     * @uses EntryPeriodSumDTO::setTotalPaidAmount()
     * @param string $accountId
     * @param string $bookingDate
     * @param int $bookingPeriod
     * @param int $bookingYear
     * @param string $creationDate
     * @param string $creditAccount
     * @param string $debitAccount
     * @param string $entryId
     * @param int $exportId
     * @param bool $isExported
     * @param string $planId
     * @param string $receiptDate
     * @param float $totalInvoicedAmount
     * @param float $totalOrigInvoicedAmount
     * @param float $totalOrigPaidAmount
     * @param float $totalPaidAmount
     */
    public function __construct(?string $accountId = null, ?string $bookingDate = null, ?int $bookingPeriod = null, ?int $bookingYear = null, ?string $creationDate = null, ?string $creditAccount = null, ?string $debitAccount = null, ?string $entryId = null, ?int $exportId = null, ?bool $isExported = null, ?string $planId = null, ?string $receiptDate = null, ?float $totalInvoicedAmount = null, ?float $totalOrigInvoicedAmount = null, ?float $totalOrigPaidAmount = null, ?float $totalPaidAmount = null)
    {
        $this
            ->setAccountId($accountId)
            ->setBookingDate($bookingDate)
            ->setBookingPeriod($bookingPeriod)
            ->setBookingYear($bookingYear)
            ->setCreationDate($creationDate)
            ->setCreditAccount($creditAccount)
            ->setDebitAccount($debitAccount)
            ->setEntryId($entryId)
            ->setExportId($exportId)
            ->setIsExported($isExported)
            ->setPlanId($planId)
            ->setReceiptDate($receiptDate)
            ->setTotalInvoicedAmount($totalInvoicedAmount)
            ->setTotalOrigInvoicedAmount($totalOrigInvoicedAmount)
            ->setTotalOrigPaidAmount($totalOrigPaidAmount)
            ->setTotalPaidAmount($totalPaidAmount);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get bookingPeriod value
     * @return int|null
     */
    public function getBookingPeriod(): ?int
    {
        return $this->bookingPeriod;
    }
    /**
     * Set bookingPeriod value
     * @param int $bookingPeriod
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setBookingPeriod(?int $bookingPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriod) && !(is_int($bookingPeriod) || ctype_digit($bookingPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriod, true), gettype($bookingPeriod)), __LINE__);
        }
        $this->bookingPeriod = $bookingPeriod;
        
        return $this;
    }
    /**
     * Get bookingYear value
     * @return int|null
     */
    public function getBookingYear(): ?int
    {
        return $this->bookingYear;
    }
    /**
     * Set bookingYear value
     * @param int $bookingYear
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setBookingYear(?int $bookingYear = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingYear) && !(is_int($bookingYear) || ctype_digit($bookingYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingYear, true), gettype($bookingYear)), __LINE__);
        }
        $this->bookingYear = $bookingYear;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get creditAccount value
     * @return string|null
     */
    public function getCreditAccount(): ?string
    {
        return $this->creditAccount;
    }
    /**
     * Set creditAccount value
     * @param string $creditAccount
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setCreditAccount(?string $creditAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($creditAccount) && !is_string($creditAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditAccount, true), gettype($creditAccount)), __LINE__);
        }
        $this->creditAccount = $creditAccount;
        
        return $this;
    }
    /**
     * Get debitAccount value
     * @return string|null
     */
    public function getDebitAccount(): ?string
    {
        return $this->debitAccount;
    }
    /**
     * Set debitAccount value
     * @param string $debitAccount
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setDebitAccount(?string $debitAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($debitAccount) && !is_string($debitAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitAccount, true), gettype($debitAccount)), __LINE__);
        }
        $this->debitAccount = $debitAccount;
        
        return $this;
    }
    /**
     * Get entryId value
     * @return string|null
     */
    public function getEntryId(): ?string
    {
        return $this->entryId;
    }
    /**
     * Set entryId value
     * @param string $entryId
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setEntryId(?string $entryId = null): self
    {
        // validation for constraint: string
        if (!is_null($entryId) && !is_string($entryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryId, true), gettype($entryId)), __LINE__);
        }
        $this->entryId = $entryId;
        
        return $this;
    }
    /**
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
    /**
     * Get totalInvoicedAmount value
     * @return float|null
     */
    public function getTotalInvoicedAmount(): ?float
    {
        return $this->totalInvoicedAmount;
    }
    /**
     * Set totalInvoicedAmount value
     * @param float $totalInvoicedAmount
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setTotalInvoicedAmount(?float $totalInvoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalInvoicedAmount) && !(is_float($totalInvoicedAmount) || is_numeric($totalInvoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalInvoicedAmount, true), gettype($totalInvoicedAmount)), __LINE__);
        }
        $this->totalInvoicedAmount = $totalInvoicedAmount;
        
        return $this;
    }
    /**
     * Get totalOrigInvoicedAmount value
     * @return float|null
     */
    public function getTotalOrigInvoicedAmount(): ?float
    {
        return $this->totalOrigInvoicedAmount;
    }
    /**
     * Set totalOrigInvoicedAmount value
     * @param float $totalOrigInvoicedAmount
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setTotalOrigInvoicedAmount(?float $totalOrigInvoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalOrigInvoicedAmount) && !(is_float($totalOrigInvoicedAmount) || is_numeric($totalOrigInvoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalOrigInvoicedAmount, true), gettype($totalOrigInvoicedAmount)), __LINE__);
        }
        $this->totalOrigInvoicedAmount = $totalOrigInvoicedAmount;
        
        return $this;
    }
    /**
     * Get totalOrigPaidAmount value
     * @return float|null
     */
    public function getTotalOrigPaidAmount(): ?float
    {
        return $this->totalOrigPaidAmount;
    }
    /**
     * Set totalOrigPaidAmount value
     * @param float $totalOrigPaidAmount
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setTotalOrigPaidAmount(?float $totalOrigPaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalOrigPaidAmount) && !(is_float($totalOrigPaidAmount) || is_numeric($totalOrigPaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalOrigPaidAmount, true), gettype($totalOrigPaidAmount)), __LINE__);
        }
        $this->totalOrigPaidAmount = $totalOrigPaidAmount;
        
        return $this;
    }
    /**
     * Get totalPaidAmount value
     * @return float|null
     */
    public function getTotalPaidAmount(): ?float
    {
        return $this->totalPaidAmount;
    }
    /**
     * Set totalPaidAmount value
     * @param float $totalPaidAmount
     * @return \Pggns\MidocoApi\Order\StructType\EntryPeriodSumDTO
     */
    public function setTotalPaidAmount(?float $totalPaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPaidAmount) && !(is_float($totalPaidAmount) || is_numeric($totalPaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPaidAmount, true), gettype($totalPaidAmount)), __LINE__);
        }
        $this->totalPaidAmount = $totalPaidAmount;
        
        return $this;
    }
}
