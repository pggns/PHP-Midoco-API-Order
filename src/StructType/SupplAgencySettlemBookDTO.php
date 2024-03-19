<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplAgencySettlemBookDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplAgencySettlemBookDTO extends AbstractStructBase
{
    /**
     * The backupData
     * @var string|null
     */
    protected ?string $backupData = null;
    /**
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The bookingPosition
     * @var int|null
     */
    protected ?int $bookingPosition = null;
    /**
     * The bookingType
     * @var string|null
     */
    protected ?string $bookingType = null;
    /**
     * The calculatedRevenue
     * @var float|null
     */
    protected ?float $calculatedRevenue = null;
    /**
     * The checked
     * @var bool|null
     */
    protected ?bool $checked = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The diffManualChecked
     * @var bool|null
     */
    protected ?bool $diffManualChecked = null;
    /**
     * The documentNo
     * @var string|null
     */
    protected ?string $documentNo = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The errors
     * @var int|null
     */
    protected ?int $errors = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The invoiceDate
     * @var string|null
     */
    protected ?string $invoiceDate = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The manualJournalBooking
     * @var bool|null
     */
    protected ?bool $manualJournalBooking = null;
    /**
     * The noOfPersons
     * @var int|null
     */
    protected ?int $noOfPersons = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The settlementParty
     * @var string|null
     */
    protected ?string $settlementParty = null;
    /**
     * The siCalculatedRevenue
     * @var float|null
     */
    protected ?float $siCalculatedRevenue = null;
    /**
     * The siNoOfPersons
     * @var int|null
     */
    protected ?int $siNoOfPersons = null;
    /**
     * The siPrice
     * @var float|null
     */
    protected ?float $siPrice = null;
    /**
     * The siStatus
     * @var string|null
     */
    protected ?string $siStatus = null;
    /**
     * The siTravelDate
     * @var string|null
     */
    protected ?string $siTravelDate = null;
    /**
     * The siTravelType
     * @var string|null
     */
    protected ?string $siTravelType = null;
    /**
     * The siUnitName
     * @var string|null
     */
    protected ?string $siUnitName = null;
    /**
     * The skipBooking
     * @var bool|null
     */
    protected ?bool $skipBooking = null;
    /**
     * The supplierAgencyNo
     * @var string|null
     */
    protected ?string $supplierAgencyNo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The traveller
     * @var string|null
     */
    protected ?string $traveller = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SupplAgencySettlemBookDTO
     * @uses SupplAgencySettlemBookDTO::setBackupData()
     * @uses SupplAgencySettlemBookDTO::setBooked()
     * @uses SupplAgencySettlemBookDTO::setBookingId()
     * @uses SupplAgencySettlemBookDTO::setBookingPosition()
     * @uses SupplAgencySettlemBookDTO::setBookingType()
     * @uses SupplAgencySettlemBookDTO::setCalculatedRevenue()
     * @uses SupplAgencySettlemBookDTO::setChecked()
     * @uses SupplAgencySettlemBookDTO::setCurrency()
     * @uses SupplAgencySettlemBookDTO::setDiffManualChecked()
     * @uses SupplAgencySettlemBookDTO::setDocumentNo()
     * @uses SupplAgencySettlemBookDTO::setDocumentType()
     * @uses SupplAgencySettlemBookDTO::setErrors()
     * @uses SupplAgencySettlemBookDTO::setExchangeRate()
     * @uses SupplAgencySettlemBookDTO::setInvoiceDate()
     * @uses SupplAgencySettlemBookDTO::setItemId()
     * @uses SupplAgencySettlemBookDTO::setManualJournalBooking()
     * @uses SupplAgencySettlemBookDTO::setNoOfPersons()
     * @uses SupplAgencySettlemBookDTO::setPrice()
     * @uses SupplAgencySettlemBookDTO::setSettlementId()
     * @uses SupplAgencySettlemBookDTO::setSettlementParty()
     * @uses SupplAgencySettlemBookDTO::setSiCalculatedRevenue()
     * @uses SupplAgencySettlemBookDTO::setSiNoOfPersons()
     * @uses SupplAgencySettlemBookDTO::setSiPrice()
     * @uses SupplAgencySettlemBookDTO::setSiStatus()
     * @uses SupplAgencySettlemBookDTO::setSiTravelDate()
     * @uses SupplAgencySettlemBookDTO::setSiTravelType()
     * @uses SupplAgencySettlemBookDTO::setSiUnitName()
     * @uses SupplAgencySettlemBookDTO::setSkipBooking()
     * @uses SupplAgencySettlemBookDTO::setSupplierAgencyNo()
     * @uses SupplAgencySettlemBookDTO::setSupplierId()
     * @uses SupplAgencySettlemBookDTO::setTravelDate()
     * @uses SupplAgencySettlemBookDTO::setTraveller()
     * @uses SupplAgencySettlemBookDTO::setTraveltype()
     * @uses SupplAgencySettlemBookDTO::setUnitName()
     * @param string $backupData
     * @param bool $booked
     * @param string $bookingId
     * @param int $bookingPosition
     * @param string $bookingType
     * @param float $calculatedRevenue
     * @param bool $checked
     * @param string $currency
     * @param bool $diffManualChecked
     * @param string $documentNo
     * @param string $documentType
     * @param int $errors
     * @param float $exchangeRate
     * @param string $invoiceDate
     * @param int $itemId
     * @param bool $manualJournalBooking
     * @param int $noOfPersons
     * @param float $price
     * @param int $settlementId
     * @param string $settlementParty
     * @param float $siCalculatedRevenue
     * @param int $siNoOfPersons
     * @param float $siPrice
     * @param string $siStatus
     * @param string $siTravelDate
     * @param string $siTravelType
     * @param string $siUnitName
     * @param bool $skipBooking
     * @param string $supplierAgencyNo
     * @param string $supplierId
     * @param string $travelDate
     * @param string $traveller
     * @param string $traveltype
     * @param string $unitName
     */
    public function __construct(?string $backupData = null, ?bool $booked = null, ?string $bookingId = null, ?int $bookingPosition = null, ?string $bookingType = null, ?float $calculatedRevenue = null, ?bool $checked = null, ?string $currency = null, ?bool $diffManualChecked = null, ?string $documentNo = null, ?string $documentType = null, ?int $errors = null, ?float $exchangeRate = null, ?string $invoiceDate = null, ?int $itemId = null, ?bool $manualJournalBooking = null, ?int $noOfPersons = null, ?float $price = null, ?int $settlementId = null, ?string $settlementParty = null, ?float $siCalculatedRevenue = null, ?int $siNoOfPersons = null, ?float $siPrice = null, ?string $siStatus = null, ?string $siTravelDate = null, ?string $siTravelType = null, ?string $siUnitName = null, ?bool $skipBooking = null, ?string $supplierAgencyNo = null, ?string $supplierId = null, ?string $travelDate = null, ?string $traveller = null, ?string $traveltype = null, ?string $unitName = null)
    {
        $this
            ->setBackupData($backupData)
            ->setBooked($booked)
            ->setBookingId($bookingId)
            ->setBookingPosition($bookingPosition)
            ->setBookingType($bookingType)
            ->setCalculatedRevenue($calculatedRevenue)
            ->setChecked($checked)
            ->setCurrency($currency)
            ->setDiffManualChecked($diffManualChecked)
            ->setDocumentNo($documentNo)
            ->setDocumentType($documentType)
            ->setErrors($errors)
            ->setExchangeRate($exchangeRate)
            ->setInvoiceDate($invoiceDate)
            ->setItemId($itemId)
            ->setManualJournalBooking($manualJournalBooking)
            ->setNoOfPersons($noOfPersons)
            ->setPrice($price)
            ->setSettlementId($settlementId)
            ->setSettlementParty($settlementParty)
            ->setSiCalculatedRevenue($siCalculatedRevenue)
            ->setSiNoOfPersons($siNoOfPersons)
            ->setSiPrice($siPrice)
            ->setSiStatus($siStatus)
            ->setSiTravelDate($siTravelDate)
            ->setSiTravelType($siTravelType)
            ->setSiUnitName($siUnitName)
            ->setSkipBooking($skipBooking)
            ->setSupplierAgencyNo($supplierAgencyNo)
            ->setSupplierId($supplierId)
            ->setTravelDate($travelDate)
            ->setTraveller($traveller)
            ->setTraveltype($traveltype)
            ->setUnitName($unitName);
    }
    /**
     * Get backupData value
     * @return string|null
     */
    public function getBackupData(): ?string
    {
        return $this->backupData;
    }
    /**
     * Set backupData value
     * @param string $backupData
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setBackupData(?string $backupData = null): self
    {
        // validation for constraint: string
        if (!is_null($backupData) && !is_string($backupData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($backupData, true), gettype($backupData)), __LINE__);
        }
        $this->backupData = $backupData;
        
        return $this;
    }
    /**
     * Get booked value
     * @return bool|null
     */
    public function getBooked(): ?bool
    {
        return $this->booked;
    }
    /**
     * Set booked value
     * @param bool $booked
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setBooked(?bool $booked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($booked) && !is_bool($booked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($booked, true), gettype($booked)), __LINE__);
        }
        $this->booked = $booked;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get bookingPosition value
     * @return int|null
     */
    public function getBookingPosition(): ?int
    {
        return $this->bookingPosition;
    }
    /**
     * Set bookingPosition value
     * @param int $bookingPosition
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setBookingPosition(?int $bookingPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPosition) && !(is_int($bookingPosition) || ctype_digit($bookingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPosition, true), gettype($bookingPosition)), __LINE__);
        }
        $this->bookingPosition = $bookingPosition;
        
        return $this;
    }
    /**
     * Get bookingType value
     * @return string|null
     */
    public function getBookingType(): ?string
    {
        return $this->bookingType;
    }
    /**
     * Set bookingType value
     * @param string $bookingType
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setBookingType(?string $bookingType = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingType) && !is_string($bookingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingType, true), gettype($bookingType)), __LINE__);
        }
        $this->bookingType = $bookingType;
        
        return $this;
    }
    /**
     * Get calculatedRevenue value
     * @return float|null
     */
    public function getCalculatedRevenue(): ?float
    {
        return $this->calculatedRevenue;
    }
    /**
     * Set calculatedRevenue value
     * @param float $calculatedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setCalculatedRevenue(?float $calculatedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedRevenue) && !(is_float($calculatedRevenue) || is_numeric($calculatedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedRevenue, true), gettype($calculatedRevenue)), __LINE__);
        }
        $this->calculatedRevenue = $calculatedRevenue;
        
        return $this;
    }
    /**
     * Get checked value
     * @return bool|null
     */
    public function getChecked(): ?bool
    {
        return $this->checked;
    }
    /**
     * Set checked value
     * @param bool $checked
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setChecked(?bool $checked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checked) && !is_bool($checked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checked, true), gettype($checked)), __LINE__);
        }
        $this->checked = $checked;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get diffManualChecked value
     * @return bool|null
     */
    public function getDiffManualChecked(): ?bool
    {
        return $this->diffManualChecked;
    }
    /**
     * Set diffManualChecked value
     * @param bool $diffManualChecked
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setDiffManualChecked(?bool $diffManualChecked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($diffManualChecked) && !is_bool($diffManualChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($diffManualChecked, true), gettype($diffManualChecked)), __LINE__);
        }
        $this->diffManualChecked = $diffManualChecked;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return string|null
     */
    public function getDocumentNo(): ?string
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param string $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setDocumentNo(?string $documentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNo) && !is_string($documentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get errors value
     * @return int|null
     */
    public function getErrors(): ?int
    {
        return $this->errors;
    }
    /**
     * Set errors value
     * @param int $errors
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setErrors(?int $errors = null): self
    {
        // validation for constraint: int
        if (!is_null($errors) && !(is_int($errors) || ctype_digit($errors))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errors, true), gettype($errors)), __LINE__);
        }
        $this->errors = $errors;
        
        return $this;
    }
    /**
     * Get exchangeRate value
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }
    /**
     * Set exchangeRate value
     * @param float $exchangeRate
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setExchangeRate(?float $exchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRate) && !(is_float($exchangeRate) || is_numeric($exchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRate, true), gettype($exchangeRate)), __LINE__);
        }
        $this->exchangeRate = $exchangeRate;
        
        return $this;
    }
    /**
     * Get invoiceDate value
     * @return string|null
     */
    public function getInvoiceDate(): ?string
    {
        return $this->invoiceDate;
    }
    /**
     * Set invoiceDate value
     * @param string $invoiceDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setInvoiceDate(?string $invoiceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        $this->invoiceDate = $invoiceDate;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get manualJournalBooking value
     * @return bool|null
     */
    public function getManualJournalBooking(): ?bool
    {
        return $this->manualJournalBooking;
    }
    /**
     * Set manualJournalBooking value
     * @param bool $manualJournalBooking
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setManualJournalBooking(?bool $manualJournalBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manualJournalBooking) && !is_bool($manualJournalBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manualJournalBooking, true), gettype($manualJournalBooking)), __LINE__);
        }
        $this->manualJournalBooking = $manualJournalBooking;
        
        return $this;
    }
    /**
     * Get noOfPersons value
     * @return int|null
     */
    public function getNoOfPersons(): ?int
    {
        return $this->noOfPersons;
    }
    /**
     * Set noOfPersons value
     * @param int $noOfPersons
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setNoOfPersons(?int $noOfPersons = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPersons) && !(is_int($noOfPersons) || ctype_digit($noOfPersons))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPersons, true), gettype($noOfPersons)), __LINE__);
        }
        $this->noOfPersons = $noOfPersons;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get settlementParty value
     * @return string|null
     */
    public function getSettlementParty(): ?string
    {
        return $this->settlementParty;
    }
    /**
     * Set settlementParty value
     * @param string $settlementParty
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSettlementParty(?string $settlementParty = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementParty) && !is_string($settlementParty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementParty, true), gettype($settlementParty)), __LINE__);
        }
        $this->settlementParty = $settlementParty;
        
        return $this;
    }
    /**
     * Get siCalculatedRevenue value
     * @return float|null
     */
    public function getSiCalculatedRevenue(): ?float
    {
        return $this->siCalculatedRevenue;
    }
    /**
     * Set siCalculatedRevenue value
     * @param float $siCalculatedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSiCalculatedRevenue(?float $siCalculatedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($siCalculatedRevenue) && !(is_float($siCalculatedRevenue) || is_numeric($siCalculatedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($siCalculatedRevenue, true), gettype($siCalculatedRevenue)), __LINE__);
        }
        $this->siCalculatedRevenue = $siCalculatedRevenue;
        
        return $this;
    }
    /**
     * Get siNoOfPersons value
     * @return int|null
     */
    public function getSiNoOfPersons(): ?int
    {
        return $this->siNoOfPersons;
    }
    /**
     * Set siNoOfPersons value
     * @param int $siNoOfPersons
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSiNoOfPersons(?int $siNoOfPersons = null): self
    {
        // validation for constraint: int
        if (!is_null($siNoOfPersons) && !(is_int($siNoOfPersons) || ctype_digit($siNoOfPersons))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($siNoOfPersons, true), gettype($siNoOfPersons)), __LINE__);
        }
        $this->siNoOfPersons = $siNoOfPersons;
        
        return $this;
    }
    /**
     * Get siPrice value
     * @return float|null
     */
    public function getSiPrice(): ?float
    {
        return $this->siPrice;
    }
    /**
     * Set siPrice value
     * @param float $siPrice
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSiPrice(?float $siPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($siPrice) && !(is_float($siPrice) || is_numeric($siPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($siPrice, true), gettype($siPrice)), __LINE__);
        }
        $this->siPrice = $siPrice;
        
        return $this;
    }
    /**
     * Get siStatus value
     * @return string|null
     */
    public function getSiStatus(): ?string
    {
        return $this->siStatus;
    }
    /**
     * Set siStatus value
     * @param string $siStatus
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSiStatus(?string $siStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($siStatus) && !is_string($siStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siStatus, true), gettype($siStatus)), __LINE__);
        }
        $this->siStatus = $siStatus;
        
        return $this;
    }
    /**
     * Get siTravelDate value
     * @return string|null
     */
    public function getSiTravelDate(): ?string
    {
        return $this->siTravelDate;
    }
    /**
     * Set siTravelDate value
     * @param string $siTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSiTravelDate(?string $siTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($siTravelDate) && !is_string($siTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siTravelDate, true), gettype($siTravelDate)), __LINE__);
        }
        $this->siTravelDate = $siTravelDate;
        
        return $this;
    }
    /**
     * Get siTravelType value
     * @return string|null
     */
    public function getSiTravelType(): ?string
    {
        return $this->siTravelType;
    }
    /**
     * Set siTravelType value
     * @param string $siTravelType
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSiTravelType(?string $siTravelType = null): self
    {
        // validation for constraint: string
        if (!is_null($siTravelType) && !is_string($siTravelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siTravelType, true), gettype($siTravelType)), __LINE__);
        }
        $this->siTravelType = $siTravelType;
        
        return $this;
    }
    /**
     * Get siUnitName value
     * @return string|null
     */
    public function getSiUnitName(): ?string
    {
        return $this->siUnitName;
    }
    /**
     * Set siUnitName value
     * @param string $siUnitName
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSiUnitName(?string $siUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($siUnitName) && !is_string($siUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siUnitName, true), gettype($siUnitName)), __LINE__);
        }
        $this->siUnitName = $siUnitName;
        
        return $this;
    }
    /**
     * Get skipBooking value
     * @return bool|null
     */
    public function getSkipBooking(): ?bool
    {
        return $this->skipBooking;
    }
    /**
     * Set skipBooking value
     * @param bool $skipBooking
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSkipBooking(?bool $skipBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($skipBooking) && !is_bool($skipBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skipBooking, true), gettype($skipBooking)), __LINE__);
        }
        $this->skipBooking = $skipBooking;
        
        return $this;
    }
    /**
     * Get supplierAgencyNo value
     * @return string|null
     */
    public function getSupplierAgencyNo(): ?string
    {
        return $this->supplierAgencyNo;
    }
    /**
     * Set supplierAgencyNo value
     * @param string $supplierAgencyNo
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSupplierAgencyNo(?string $supplierAgencyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierAgencyNo) && !is_string($supplierAgencyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierAgencyNo, true), gettype($supplierAgencyNo)), __LINE__);
        }
        $this->supplierAgencyNo = $supplierAgencyNo;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get traveller value
     * @return string|null
     */
    public function getTraveller(): ?string
    {
        return $this->traveller;
    }
    /**
     * Set traveller value
     * @param string $traveller
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setTraveller(?string $traveller = null): self
    {
        // validation for constraint: string
        if (!is_null($traveller) && !is_string($traveller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveller, true), gettype($traveller)), __LINE__);
        }
        $this->traveller = $traveller;
        
        return $this;
    }
    /**
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemBookDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
