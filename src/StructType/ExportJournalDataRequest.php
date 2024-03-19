<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportJournalDataRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportJournalDataRequest extends AbstractStructBase
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
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $export_future = null;
    /**
     * The export_old_years
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $export_old_years = null;
    /**
     * Constructor method for ExportJournalDataRequest
     * @uses ExportJournalDataRequest::setBooking_year()
     * @uses ExportJournalDataRequest::setBooking_period()
     * @uses ExportJournalDataRequest::setTo_date()
     * @uses ExportJournalDataRequest::setComment()
     * @uses ExportJournalDataRequest::setExport_future()
     * @uses ExportJournalDataRequest::setExport_old_years()
     * @param int $booking_year
     * @param int $booking_period
     * @param string $to_date
     * @param string $comment
     * @param bool $export_future
     * @param bool $export_old_years
     */
    public function __construct(?int $booking_year = null, ?int $booking_period = null, ?string $to_date = null, ?string $comment = null, ?bool $export_future = false, ?bool $export_old_years = false)
    {
        $this
            ->setBooking_year($booking_year)
            ->setBooking_period($booking_period)
            ->setTo_date($to_date)
            ->setComment($comment)
            ->setExport_future($export_future)
            ->setExport_old_years($export_old_years);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataRequest
     */
    public function setExport_future(?bool $export_future = false): self
    {
        // validation for constraint: boolean
        if (!is_null($export_future) && !is_bool($export_future)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($export_future, true), gettype($export_future)), __LINE__);
        }
        $this->export_future = $export_future;
        
        return $this;
    }
    /**
     * Get export_old_years value
     * @return bool|null
     */
    public function getExport_old_years(): ?bool
    {
        return $this->export_old_years;
    }
    /**
     * Set export_old_years value
     * @param bool $export_old_years
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataRequest
     */
    public function setExport_old_years(?bool $export_old_years = false): self
    {
        // validation for constraint: boolean
        if (!is_null($export_old_years) && !is_bool($export_old_years)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($export_old_years, true), gettype($export_old_years)), __LINE__);
        }
        $this->export_old_years = $export_old_years;
        
        return $this;
    }
}
