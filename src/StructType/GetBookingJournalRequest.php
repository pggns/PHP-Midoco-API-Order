<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingJournalRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBookingJournalRequest extends AbstractStructBase
{
    /**
     * The bookingSource
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $bookingSource = null;
    /**
     * The MidocoOrderByInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoOrderByInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[]
     */
    protected ?array $MidocoOrderByInfo = null;
    /**
     * The from_date
     * @var string|null
     */
    protected ?string $from_date = null;
    /**
     * The to_date
     * @var string|null
     */
    protected ?string $to_date = null;
    /**
     * The accountIds
     * @var string|null
     */
    protected ?string $accountIds = null;
    /**
     * The accountType
     * @var string|null
     */
    protected ?string $accountType = null;
    /**
     * The export_done
     * @var bool|null
     */
    protected ?bool $export_done = null;
    /**
     * The booking_year
     * @var int|null
     */
    protected ?int $booking_year = null;
    /**
     * The from_booking_period
     * @var int|null
     */
    protected ?int $from_booking_period = null;
    /**
     * The to_booking_period
     * @var int|null
     */
    protected ?int $to_booking_period = null;
    /**
     * The bookingDateFrom
     * @var string|null
     */
    protected ?string $bookingDateFrom = null;
    /**
     * The bookingDateTo
     * @var string|null
     */
    protected ?string $bookingDateTo = null;
    /**
     * The entry_id
     * @var string|null
     */
    protected ?string $entry_id = null;
    /**
     * The export_id
     * @var int|null
     */
    protected ?int $export_id = null;
    /**
     * The beginIndex
     * @var int|null
     */
    protected ?int $beginIndex = null;
    /**
     * The endIndex
     * @var int|null
     */
    protected ?int $endIndex = null;
    /**
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The buildSum
     * @var bool|null
     */
    protected ?bool $buildSum = null;
    /**
     * The onlyReverseCharges
     * @var bool|null
     */
    protected ?bool $onlyReverseCharges = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The bookingAmount
     * @var float|null
     */
    protected ?float $bookingAmount = null;
    /**
     * The costCentres
     * Meta information extracted from the WSDL
     * - documentation: single or multiple costCentres (delimiter ',')
     * @var string|null
     */
    protected ?string $costCentres = null;
    /**
     * The exportCodes
     * Meta information extracted from the WSDL
     * - documentation: single or multiple costCentres (delimiter ',')
     * @var string|null
     */
    protected ?string $exportCodes = null;
    /**
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
    /**
     * Constructor method for GetBookingJournalRequest
     * @uses GetBookingJournalRequest::setBookingSource()
     * @uses GetBookingJournalRequest::setMidocoOrderByInfo()
     * @uses GetBookingJournalRequest::setFrom_date()
     * @uses GetBookingJournalRequest::setTo_date()
     * @uses GetBookingJournalRequest::setAccountIds()
     * @uses GetBookingJournalRequest::setAccountType()
     * @uses GetBookingJournalRequest::setExport_done()
     * @uses GetBookingJournalRequest::setBooking_year()
     * @uses GetBookingJournalRequest::setFrom_booking_period()
     * @uses GetBookingJournalRequest::setTo_booking_period()
     * @uses GetBookingJournalRequest::setBookingDateFrom()
     * @uses GetBookingJournalRequest::setBookingDateTo()
     * @uses GetBookingJournalRequest::setEntry_id()
     * @uses GetBookingJournalRequest::setExport_id()
     * @uses GetBookingJournalRequest::setBeginIndex()
     * @uses GetBookingJournalRequest::setEndIndex()
     * @uses GetBookingJournalRequest::setBookingText()
     * @uses GetBookingJournalRequest::setBuildSum()
     * @uses GetBookingJournalRequest::setOnlyReverseCharges()
     * @uses GetBookingJournalRequest::setReceiptNo()
     * @uses GetBookingJournalRequest::setCreationDateFrom()
     * @uses GetBookingJournalRequest::setCreationDateTo()
     * @uses GetBookingJournalRequest::setCreationUser()
     * @uses GetBookingJournalRequest::setBookingAmount()
     * @uses GetBookingJournalRequest::setCostCentres()
     * @uses GetBookingJournalRequest::setExportCodes()
     * @uses GetBookingJournalRequest::setJournalId()
     * @param int[] $bookingSource
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[] $midocoOrderByInfo
     * @param string $from_date
     * @param string $to_date
     * @param string $accountIds
     * @param string $accountType
     * @param bool $export_done
     * @param int $booking_year
     * @param int $from_booking_period
     * @param int $to_booking_period
     * @param string $bookingDateFrom
     * @param string $bookingDateTo
     * @param string $entry_id
     * @param int $export_id
     * @param int $beginIndex
     * @param int $endIndex
     * @param string $bookingText
     * @param bool $buildSum
     * @param bool $onlyReverseCharges
     * @param string $receiptNo
     * @param string $creationDateFrom
     * @param string $creationDateTo
     * @param int $creationUser
     * @param float $bookingAmount
     * @param string $costCentres
     * @param string $exportCodes
     * @param int $journalId
     */
    public function __construct(?array $bookingSource = null, ?array $midocoOrderByInfo = null, ?string $from_date = null, ?string $to_date = null, ?string $accountIds = null, ?string $accountType = null, ?bool $export_done = null, ?int $booking_year = null, ?int $from_booking_period = null, ?int $to_booking_period = null, ?string $bookingDateFrom = null, ?string $bookingDateTo = null, ?string $entry_id = null, ?int $export_id = null, ?int $beginIndex = null, ?int $endIndex = null, ?string $bookingText = null, ?bool $buildSum = null, ?bool $onlyReverseCharges = null, ?string $receiptNo = null, ?string $creationDateFrom = null, ?string $creationDateTo = null, ?int $creationUser = null, ?float $bookingAmount = null, ?string $costCentres = null, ?string $exportCodes = null, ?int $journalId = null)
    {
        $this
            ->setBookingSource($bookingSource)
            ->setMidocoOrderByInfo($midocoOrderByInfo)
            ->setFrom_date($from_date)
            ->setTo_date($to_date)
            ->setAccountIds($accountIds)
            ->setAccountType($accountType)
            ->setExport_done($export_done)
            ->setBooking_year($booking_year)
            ->setFrom_booking_period($from_booking_period)
            ->setTo_booking_period($to_booking_period)
            ->setBookingDateFrom($bookingDateFrom)
            ->setBookingDateTo($bookingDateTo)
            ->setEntry_id($entry_id)
            ->setExport_id($export_id)
            ->setBeginIndex($beginIndex)
            ->setEndIndex($endIndex)
            ->setBookingText($bookingText)
            ->setBuildSum($buildSum)
            ->setOnlyReverseCharges($onlyReverseCharges)
            ->setReceiptNo($receiptNo)
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo)
            ->setCreationUser($creationUser)
            ->setBookingAmount($bookingAmount)
            ->setCostCentres($costCentres)
            ->setExportCodes($exportCodes)
            ->setJournalId($journalId);
    }
    /**
     * Get bookingSource value
     * @return int[]
     */
    public function getBookingSource(): ?array
    {
        return $this->bookingSource;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingSource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingSource method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingSourceForArrayConstraintFromSetBookingSource(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingJournalRequestBookingSourceItem) {
            // validation for constraint: itemType
            if (!(is_int($getBookingJournalRequestBookingSourceItem) || ctype_digit($getBookingJournalRequestBookingSourceItem))) {
                $invalidValues[] = is_object($getBookingJournalRequestBookingSourceItem) ? get_class($getBookingJournalRequestBookingSourceItem) : sprintf('%s(%s)', gettype($getBookingJournalRequestBookingSourceItem), var_export($getBookingJournalRequestBookingSourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bookingSource property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set bookingSource value
     * @throws InvalidArgumentException
     * @param int[] $bookingSource
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setBookingSource(?array $bookingSource = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingSourceArrayErrorMessage = self::validateBookingSourceForArrayConstraintFromSetBookingSource($bookingSource))) {
            throw new InvalidArgumentException($bookingSourceArrayErrorMessage, __LINE__);
        }
        $this->bookingSource = $bookingSource;
        
        return $this;
    }
    /**
     * Add item to bookingSource value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function addToBookingSource(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The bookingSource property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bookingSource[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrderByInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[]
     */
    public function getMidocoOrderByInfo(): ?array
    {
        return $this->MidocoOrderByInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderByInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderByInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderByInfoForArrayConstraintFromSetMidocoOrderByInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingJournalRequestMidocoOrderByInfoItem) {
            // validation for constraint: itemType
            if (!$getBookingJournalRequestMidocoOrderByInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo) {
                $invalidValues[] = is_object($getBookingJournalRequestMidocoOrderByInfoItem) ? get_class($getBookingJournalRequestMidocoOrderByInfoItem) : sprintf('%s(%s)', gettype($getBookingJournalRequestMidocoOrderByInfoItem), var_export($getBookingJournalRequestMidocoOrderByInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderByInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderByInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[] $midocoOrderByInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setMidocoOrderByInfo(?array $midocoOrderByInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderByInfoArrayErrorMessage = self::validateMidocoOrderByInfoForArrayConstraintFromSetMidocoOrderByInfo($midocoOrderByInfo))) {
            throw new InvalidArgumentException($midocoOrderByInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderByInfo = $midocoOrderByInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderByInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function addToMidocoOrderByInfo(\Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderByInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderByInfo[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
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
     * Get accountIds value
     * @return string|null
     */
    public function getAccountIds(): ?string
    {
        return $this->accountIds;
    }
    /**
     * Set accountIds value
     * @param string $accountIds
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setAccountIds(?string $accountIds = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIds) && !is_string($accountIds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIds, true), gettype($accountIds)), __LINE__);
        }
        $this->accountIds = $accountIds;
        
        return $this;
    }
    /**
     * Get accountType value
     * @return string|null
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @param string $accountType
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setAccountType(?string $accountType = null): self
    {
        // validation for constraint: string
        if (!is_null($accountType) && !is_string($accountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountType, true), gettype($accountType)), __LINE__);
        }
        $this->accountType = $accountType;
        
        return $this;
    }
    /**
     * Get export_done value
     * @return bool|null
     */
    public function getExport_done(): ?bool
    {
        return $this->export_done;
    }
    /**
     * Set export_done value
     * @param bool $export_done
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setExport_done(?bool $export_done = null): self
    {
        // validation for constraint: boolean
        if (!is_null($export_done) && !is_bool($export_done)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($export_done, true), gettype($export_done)), __LINE__);
        }
        $this->export_done = $export_done;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
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
     * Get from_booking_period value
     * @return int|null
     */
    public function getFrom_booking_period(): ?int
    {
        return $this->from_booking_period;
    }
    /**
     * Set from_booking_period value
     * @param int $from_booking_period
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setFrom_booking_period(?int $from_booking_period = null): self
    {
        // validation for constraint: int
        if (!is_null($from_booking_period) && !(is_int($from_booking_period) || ctype_digit($from_booking_period))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($from_booking_period, true), gettype($from_booking_period)), __LINE__);
        }
        $this->from_booking_period = $from_booking_period;
        
        return $this;
    }
    /**
     * Get to_booking_period value
     * @return int|null
     */
    public function getTo_booking_period(): ?int
    {
        return $this->to_booking_period;
    }
    /**
     * Set to_booking_period value
     * @param int $to_booking_period
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setTo_booking_period(?int $to_booking_period = null): self
    {
        // validation for constraint: int
        if (!is_null($to_booking_period) && !(is_int($to_booking_period) || ctype_digit($to_booking_period))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($to_booking_period, true), gettype($to_booking_period)), __LINE__);
        }
        $this->to_booking_period = $to_booking_period;
        
        return $this;
    }
    /**
     * Get bookingDateFrom value
     * @return string|null
     */
    public function getBookingDateFrom(): ?string
    {
        return $this->bookingDateFrom;
    }
    /**
     * Set bookingDateFrom value
     * @param string $bookingDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setBookingDateFrom(?string $bookingDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateFrom) && !is_string($bookingDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateFrom, true), gettype($bookingDateFrom)), __LINE__);
        }
        $this->bookingDateFrom = $bookingDateFrom;
        
        return $this;
    }
    /**
     * Get bookingDateTo value
     * @return string|null
     */
    public function getBookingDateTo(): ?string
    {
        return $this->bookingDateTo;
    }
    /**
     * Set bookingDateTo value
     * @param string $bookingDateTo
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setBookingDateTo(?string $bookingDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateTo) && !is_string($bookingDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateTo, true), gettype($bookingDateTo)), __LINE__);
        }
        $this->bookingDateTo = $bookingDateTo;
        
        return $this;
    }
    /**
     * Get entry_id value
     * @return string|null
     */
    public function getEntry_id(): ?string
    {
        return $this->entry_id;
    }
    /**
     * Set entry_id value
     * @param string $entry_id
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setEntry_id(?string $entry_id = null): self
    {
        // validation for constraint: string
        if (!is_null($entry_id) && !is_string($entry_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entry_id, true), gettype($entry_id)), __LINE__);
        }
        $this->entry_id = $entry_id;
        
        return $this;
    }
    /**
     * Get export_id value
     * @return int|null
     */
    public function getExport_id(): ?int
    {
        return $this->export_id;
    }
    /**
     * Set export_id value
     * @param int $export_id
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setExport_id(?int $export_id = null): self
    {
        // validation for constraint: int
        if (!is_null($export_id) && !(is_int($export_id) || ctype_digit($export_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($export_id, true), gettype($export_id)), __LINE__);
        }
        $this->export_id = $export_id;
        
        return $this;
    }
    /**
     * Get beginIndex value
     * @return int|null
     */
    public function getBeginIndex(): ?int
    {
        return $this->beginIndex;
    }
    /**
     * Set beginIndex value
     * @param int $beginIndex
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setBeginIndex(?int $beginIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($beginIndex) && !(is_int($beginIndex) || ctype_digit($beginIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($beginIndex, true), gettype($beginIndex)), __LINE__);
        }
        $this->beginIndex = $beginIndex;
        
        return $this;
    }
    /**
     * Get endIndex value
     * @return int|null
     */
    public function getEndIndex(): ?int
    {
        return $this->endIndex;
    }
    /**
     * Set endIndex value
     * @param int $endIndex
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setEndIndex(?int $endIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($endIndex) && !(is_int($endIndex) || ctype_digit($endIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endIndex, true), gettype($endIndex)), __LINE__);
        }
        $this->endIndex = $endIndex;
        
        return $this;
    }
    /**
     * Get bookingText value
     * @return string|null
     */
    public function getBookingText(): ?string
    {
        return $this->bookingText;
    }
    /**
     * Set bookingText value
     * @param string $bookingText
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setBookingText(?string $bookingText = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingText) && !is_string($bookingText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingText, true), gettype($bookingText)), __LINE__);
        }
        $this->bookingText = $bookingText;
        
        return $this;
    }
    /**
     * Get buildSum value
     * @return bool|null
     */
    public function getBuildSum(): ?bool
    {
        return $this->buildSum;
    }
    /**
     * Set buildSum value
     * @param bool $buildSum
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setBuildSum(?bool $buildSum = null): self
    {
        // validation for constraint: boolean
        if (!is_null($buildSum) && !is_bool($buildSum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buildSum, true), gettype($buildSum)), __LINE__);
        }
        $this->buildSum = $buildSum;
        
        return $this;
    }
    /**
     * Get onlyReverseCharges value
     * @return bool|null
     */
    public function getOnlyReverseCharges(): ?bool
    {
        return $this->onlyReverseCharges;
    }
    /**
     * Set onlyReverseCharges value
     * @param bool $onlyReverseCharges
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setOnlyReverseCharges(?bool $onlyReverseCharges = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyReverseCharges) && !is_bool($onlyReverseCharges)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyReverseCharges, true), gettype($onlyReverseCharges)), __LINE__);
        }
        $this->onlyReverseCharges = $onlyReverseCharges;
        
        return $this;
    }
    /**
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get bookingAmount value
     * @return float|null
     */
    public function getBookingAmount(): ?float
    {
        return $this->bookingAmount;
    }
    /**
     * Set bookingAmount value
     * @param float $bookingAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setBookingAmount(?float $bookingAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($bookingAmount) && !(is_float($bookingAmount) || is_numeric($bookingAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookingAmount, true), gettype($bookingAmount)), __LINE__);
        }
        $this->bookingAmount = $bookingAmount;
        
        return $this;
    }
    /**
     * Get costCentres value
     * @return string|null
     */
    public function getCostCentres(): ?string
    {
        return $this->costCentres;
    }
    /**
     * Set costCentres value
     * @param string $costCentres
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setCostCentres(?string $costCentres = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentres) && !is_string($costCentres)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentres, true), gettype($costCentres)), __LINE__);
        }
        $this->costCentres = $costCentres;
        
        return $this;
    }
    /**
     * Get exportCodes value
     * @return string|null
     */
    public function getExportCodes(): ?string
    {
        return $this->exportCodes;
    }
    /**
     * Set exportCodes value
     * @param string $exportCodes
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setExportCodes(?string $exportCodes = null): self
    {
        // validation for constraint: string
        if (!is_null($exportCodes) && !is_string($exportCodes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportCodes, true), gettype($exportCodes)), __LINE__);
        }
        $this->exportCodes = $exportCodes;
        
        return $this;
    }
    /**
     * Get journalId value
     * @return int|null
     */
    public function getJournalId(): ?int
    {
        return $this->journalId;
    }
    /**
     * Set journalId value
     * @param int $journalId
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest
     */
    public function setJournalId(?int $journalId = null): self
    {
        // validation for constraint: int
        if (!is_null($journalId) && !(is_int($journalId) || ctype_digit($journalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalId, true), gettype($journalId)), __LINE__);
        }
        $this->journalId = $journalId;
        
        return $this;
    }
}
