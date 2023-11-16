<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentAccrualSearchCriteria StructType
 * @subpackage Structs
 */
class PaymentAccrualSearchCriteria extends AbstractStructBase
{
    /**
     * The accountFrom
     * @var string|null
     */
    protected ?string $accountFrom = null;
    /**
     * The accountTo
     * @var string|null
     */
    protected ?string $accountTo = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The travelDateFrom
     * @var string|null
     */
    protected ?string $travelDateFrom = null;
    /**
     * The travelDateTo
     * @var string|null
     */
    protected ?string $travelDateTo = null;
    /**
     * The bookingPeriodFrom
     * @var int|null
     */
    protected ?int $bookingPeriodFrom = null;
    /**
     * The bookingPeriodTo
     * @var int|null
     */
    protected ?int $bookingPeriodTo = null;
    /**
     * The bookingYear
     * @var int|null
     */
    protected ?int $bookingYear = null;
    /**
     * The filterAutomaticValues
     * @var bool|null
     */
    protected ?bool $filterAutomaticValues = null;
    /**
     * The filterBalancedPositions
     * @var bool|null
     */
    protected ?bool $filterBalancedPositions = null;
    /**
     * Constructor method for PaymentAccrualSearchCriteria
     * @uses PaymentAccrualSearchCriteria::setAccountFrom()
     * @uses PaymentAccrualSearchCriteria::setAccountTo()
     * @uses PaymentAccrualSearchCriteria::setDueDate()
     * @uses PaymentAccrualSearchCriteria::setEntryId()
     * @uses PaymentAccrualSearchCriteria::setReceiptDate()
     * @uses PaymentAccrualSearchCriteria::setTravelDateFrom()
     * @uses PaymentAccrualSearchCriteria::setTravelDateTo()
     * @uses PaymentAccrualSearchCriteria::setBookingPeriodFrom()
     * @uses PaymentAccrualSearchCriteria::setBookingPeriodTo()
     * @uses PaymentAccrualSearchCriteria::setBookingYear()
     * @uses PaymentAccrualSearchCriteria::setFilterAutomaticValues()
     * @uses PaymentAccrualSearchCriteria::setFilterBalancedPositions()
     * @param string $accountFrom
     * @param string $accountTo
     * @param string $dueDate
     * @param string $entryId
     * @param string $receiptDate
     * @param string $travelDateFrom
     * @param string $travelDateTo
     * @param int $bookingPeriodFrom
     * @param int $bookingPeriodTo
     * @param int $bookingYear
     * @param bool $filterAutomaticValues
     * @param bool $filterBalancedPositions
     */
    public function __construct(?string $accountFrom = null, ?string $accountTo = null, ?string $dueDate = null, ?string $entryId = null, ?string $receiptDate = null, ?string $travelDateFrom = null, ?string $travelDateTo = null, ?int $bookingPeriodFrom = null, ?int $bookingPeriodTo = null, ?int $bookingYear = null, ?bool $filterAutomaticValues = null, ?bool $filterBalancedPositions = null)
    {
        $this
            ->setAccountFrom($accountFrom)
            ->setAccountTo($accountTo)
            ->setDueDate($dueDate)
            ->setEntryId($entryId)
            ->setReceiptDate($receiptDate)
            ->setTravelDateFrom($travelDateFrom)
            ->setTravelDateTo($travelDateTo)
            ->setBookingPeriodFrom($bookingPeriodFrom)
            ->setBookingPeriodTo($bookingPeriodTo)
            ->setBookingYear($bookingYear)
            ->setFilterAutomaticValues($filterAutomaticValues)
            ->setFilterBalancedPositions($filterBalancedPositions);
    }
    /**
     * Get accountFrom value
     * @return string|null
     */
    public function getAccountFrom(): ?string
    {
        return $this->accountFrom;
    }
    /**
     * Set accountFrom value
     * @param string $accountFrom
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
     */
    public function setAccountFrom(?string $accountFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($accountFrom) && !is_string($accountFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountFrom, true), gettype($accountFrom)), __LINE__);
        }
        $this->accountFrom = $accountFrom;
        
        return $this;
    }
    /**
     * Get accountTo value
     * @return string|null
     */
    public function getAccountTo(): ?string
    {
        return $this->accountTo;
    }
    /**
     * Set accountTo value
     * @param string $accountTo
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
     */
    public function setAccountTo(?string $accountTo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountTo) && !is_string($accountTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountTo, true), gettype($accountTo)), __LINE__);
        }
        $this->accountTo = $accountTo;
        
        return $this;
    }
    /**
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
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
     * Get travelDateFrom value
     * @return string|null
     */
    public function getTravelDateFrom(): ?string
    {
        return $this->travelDateFrom;
    }
    /**
     * Set travelDateFrom value
     * @param string $travelDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
     */
    public function setTravelDateFrom(?string $travelDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateFrom) && !is_string($travelDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateFrom, true), gettype($travelDateFrom)), __LINE__);
        }
        $this->travelDateFrom = $travelDateFrom;
        
        return $this;
    }
    /**
     * Get travelDateTo value
     * @return string|null
     */
    public function getTravelDateTo(): ?string
    {
        return $this->travelDateTo;
    }
    /**
     * Set travelDateTo value
     * @param string $travelDateTo
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
     */
    public function setTravelDateTo(?string $travelDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateTo) && !is_string($travelDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateTo, true), gettype($travelDateTo)), __LINE__);
        }
        $this->travelDateTo = $travelDateTo;
        
        return $this;
    }
    /**
     * Get bookingPeriodFrom value
     * @return int|null
     */
    public function getBookingPeriodFrom(): ?int
    {
        return $this->bookingPeriodFrom;
    }
    /**
     * Set bookingPeriodFrom value
     * @param int $bookingPeriodFrom
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
     */
    public function setBookingPeriodFrom(?int $bookingPeriodFrom = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriodFrom) && !(is_int($bookingPeriodFrom) || ctype_digit($bookingPeriodFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriodFrom, true), gettype($bookingPeriodFrom)), __LINE__);
        }
        $this->bookingPeriodFrom = $bookingPeriodFrom;
        
        return $this;
    }
    /**
     * Get bookingPeriodTo value
     * @return int|null
     */
    public function getBookingPeriodTo(): ?int
    {
        return $this->bookingPeriodTo;
    }
    /**
     * Set bookingPeriodTo value
     * @param int $bookingPeriodTo
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
     */
    public function setBookingPeriodTo(?int $bookingPeriodTo = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriodTo) && !(is_int($bookingPeriodTo) || ctype_digit($bookingPeriodTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriodTo, true), gettype($bookingPeriodTo)), __LINE__);
        }
        $this->bookingPeriodTo = $bookingPeriodTo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
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
     * Get filterAutomaticValues value
     * @return bool|null
     */
    public function getFilterAutomaticValues(): ?bool
    {
        return $this->filterAutomaticValues;
    }
    /**
     * Set filterAutomaticValues value
     * @param bool $filterAutomaticValues
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
     */
    public function setFilterAutomaticValues(?bool $filterAutomaticValues = null): self
    {
        // validation for constraint: boolean
        if (!is_null($filterAutomaticValues) && !is_bool($filterAutomaticValues)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($filterAutomaticValues, true), gettype($filterAutomaticValues)), __LINE__);
        }
        $this->filterAutomaticValues = $filterAutomaticValues;
        
        return $this;
    }
    /**
     * Get filterBalancedPositions value
     * @return bool|null
     */
    public function getFilterBalancedPositions(): ?bool
    {
        return $this->filterBalancedPositions;
    }
    /**
     * Set filterBalancedPositions value
     * @param bool $filterBalancedPositions
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
     */
    public function setFilterBalancedPositions(?bool $filterBalancedPositions = null): self
    {
        // validation for constraint: boolean
        if (!is_null($filterBalancedPositions) && !is_bool($filterBalancedPositions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($filterBalancedPositions, true), gettype($filterBalancedPositions)), __LINE__);
        }
        $this->filterBalancedPositions = $filterBalancedPositions;
        
        return $this;
    }
}
