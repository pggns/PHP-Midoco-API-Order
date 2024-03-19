<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportBookingJournalCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportBookingJournalCriteria extends AbstractStructBase
{
    /**
     * The booking_year
     * @var int|null
     */
    protected ?int $booking_year = null;
    /**
     * The booking_period
     * @var int|null
     */
    protected ?int $booking_period = null;
    /**
     * The to_date
     * @var string|null
     */
    protected ?string $to_date = null;
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The export_future
     * @var bool|null
     */
    protected ?bool $export_future = null;
    /**
     * The export_period_only
     * @var bool|null
     */
    protected ?bool $export_period_only = null;
    /**
     * The account_ids
     * @var string|null
     */
    protected ?string $account_ids = null;
    /**
     * The account_types
     * @var string|null
     */
    protected ?string $account_types = null;
    /**
     * The from_date
     * @var string|null
     */
    protected ?string $from_date = null;
    /**
     * Constructor method for ExportBookingJournalCriteria
     * @uses ExportBookingJournalCriteria::setBooking_year()
     * @uses ExportBookingJournalCriteria::setBooking_period()
     * @uses ExportBookingJournalCriteria::setTo_date()
     * @uses ExportBookingJournalCriteria::setComment()
     * @uses ExportBookingJournalCriteria::setExport_future()
     * @uses ExportBookingJournalCriteria::setExport_period_only()
     * @uses ExportBookingJournalCriteria::setAccount_ids()
     * @uses ExportBookingJournalCriteria::setAccount_types()
     * @uses ExportBookingJournalCriteria::setFrom_date()
     * @param int $booking_year
     * @param int $booking_period
     * @param string $to_date
     * @param string $comment
     * @param bool $export_future
     * @param bool $export_period_only
     * @param string $account_ids
     * @param string $account_types
     * @param string $from_date
     */
    public function __construct(?int $booking_year = null, ?int $booking_period = null, ?string $to_date = null, ?string $comment = null, ?bool $export_future = null, ?bool $export_period_only = null, ?string $account_ids = null, ?string $account_types = null, ?string $from_date = null)
    {
        $this
            ->setBooking_year($booking_year)
            ->setBooking_period($booking_period)
            ->setTo_date($to_date)
            ->setComment($comment)
            ->setExport_future($export_future)
            ->setExport_period_only($export_period_only)
            ->setAccount_ids($account_ids)
            ->setAccount_types($account_types)
            ->setFrom_date($from_date);
    }
    /**
     * Get booking_year value
     * @return int|null
     */
    public function getBooking_year(): ?int
    {
        return $this->booking_year;
    }
    /**
     * Set booking_year value
     * @param int $booking_year
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria
     */
    public function setBooking_year(?int $booking_year = null): self
    {
        // validation for constraint: int
        if (!is_null($booking_year) && !(is_int($booking_year) || ctype_digit($booking_year))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($booking_year, true), gettype($booking_year)), __LINE__);
        }
        $this->booking_year = $booking_year;
        
        return $this;
    }
    /**
     * Get booking_period value
     * @return int|null
     */
    public function getBooking_period(): ?int
    {
        return $this->booking_period;
    }
    /**
     * Set booking_period value
     * @param int $booking_period
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria
     */
    public function setBooking_period(?int $booking_period = null): self
    {
        // validation for constraint: int
        if (!is_null($booking_period) && !(is_int($booking_period) || ctype_digit($booking_period))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($booking_period, true), gettype($booking_period)), __LINE__);
        }
        $this->booking_period = $booking_period;
        
        return $this;
    }
    /**
     * Get to_date value
     * @return string|null
     */
    public function getTo_date(): ?string
    {
        return $this->to_date;
    }
    /**
     * Set to_date value
     * @param string $to_date
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria
     */
    public function setTo_date(?string $to_date = null): self
    {
        // validation for constraint: string
        if (!is_null($to_date) && !is_string($to_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to_date, true), gettype($to_date)), __LINE__);
        }
        $this->to_date = $to_date;
        
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
        return $this;
    }
    /**
     * Get export_future value
     * @return bool|null
     */
    public function getExport_future(): ?bool
    {
        return $this->export_future;
    }
    /**
     * Set export_future value
     * @param bool $export_future
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria
     */
    public function setExport_future(?bool $export_future = null): self
    {
        // validation for constraint: boolean
        if (!is_null($export_future) && !is_bool($export_future)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($export_future, true), gettype($export_future)), __LINE__);
        }
        $this->export_future = $export_future;
        
        return $this;
    }
    /**
     * Get export_period_only value
     * @return bool|null
     */
    public function getExport_period_only(): ?bool
    {
        return $this->export_period_only;
    }
    /**
     * Set export_period_only value
     * @param bool $export_period_only
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria
     */
    public function setExport_period_only(?bool $export_period_only = null): self
    {
        // validation for constraint: boolean
        if (!is_null($export_period_only) && !is_bool($export_period_only)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($export_period_only, true), gettype($export_period_only)), __LINE__);
        }
        $this->export_period_only = $export_period_only;
        
        return $this;
    }
    /**
     * Get account_ids value
     * @return string|null
     */
    public function getAccount_ids(): ?string
    {
        return $this->account_ids;
    }
    /**
     * Set account_ids value
     * @param string $account_ids
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria
     */
    public function setAccount_ids(?string $account_ids = null): self
    {
        // validation for constraint: string
        if (!is_null($account_ids) && !is_string($account_ids)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account_ids, true), gettype($account_ids)), __LINE__);
        }
        $this->account_ids = $account_ids;
        
        return $this;
    }
    /**
     * Get account_types value
     * @return string|null
     */
    public function getAccount_types(): ?string
    {
        return $this->account_types;
    }
    /**
     * Set account_types value
     * @param string $account_types
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria
     */
    public function setAccount_types(?string $account_types = null): self
    {
        // validation for constraint: string
        if (!is_null($account_types) && !is_string($account_types)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account_types, true), gettype($account_types)), __LINE__);
        }
        $this->account_types = $account_types;
        
        return $this;
    }
    /**
     * Get from_date value
     * @return string|null
     */
    public function getFrom_date(): ?string
    {
        return $this->from_date;
    }
    /**
     * Set from_date value
     * @param string $from_date
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria
     */
    public function setFrom_date(?string $from_date = null): self
    {
        // validation for constraint: string
        if (!is_null($from_date) && !is_string($from_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from_date, true), gettype($from_date)), __LINE__);
        }
        $this->from_date = $from_date;
        
        return $this;
    }
}
