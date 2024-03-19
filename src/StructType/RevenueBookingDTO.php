<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueBookingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RevenueBookingDTO extends AbstractStructBase
{
    /**
     * The accrualWrittenOff
     * @var bool|null
     */
    protected ?bool $accrualWrittenOff = null;
    /**
     * The adviceDetailId
     * @var int|null
     */
    protected ?int $adviceDetailId = null;
    /**
     * The automaticEntry
     * @var bool|null
     */
    protected ?bool $automaticEntry = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The bruttoPrice
     * @var float|null
     */
    protected ?float $bruttoPrice = null;
    /**
     * The cancelledTimestamp
     * @var string|null
     */
    protected ?string $cancelledTimestamp = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationType
     * @var string|null
     */
    protected ?string $creationType = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The fullyAssignedToTravelnoSales
     * @var bool|null
     */
    protected ?bool $fullyAssignedToTravelnoSales = null;
    /**
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The isManual
     * @var bool|null
     */
    protected ?bool $isManual = null;
    /**
     * The isPaid
     * @var bool|null
     */
    protected ?bool $isPaid = null;
    /**
     * The isPseudoBooking
     * @var bool|null
     */
    protected ?bool $isPseudoBooking = null;
    /**
     * The isSingleMargin
     * @var bool|null
     */
    protected ?bool $isSingleMargin = null;
    /**
     * The isVoided
     * @var bool|null
     */
    protected ?bool $isVoided = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The originalAmount
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The originalRevenueInclVat
     * @var float|null
     */
    protected ?float $originalRevenueInclVat = null;
    /**
     * The originalRevenueInsurance
     * @var float|null
     */
    protected ?float $originalRevenueInsurance = null;
    /**
     * The originalRevenueVatFree
     * @var float|null
     */
    protected ?float $originalRevenueVatFree = null;
    /**
     * The paymentDate
     * @var string|null
     */
    protected ?string $paymentDate = null;
    /**
     * The qrInvoiceRefNo
     * @var string|null
     */
    protected ?string $qrInvoiceRefNo = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The revenueId
     * @var int|null
     */
    protected ?int $revenueId = null;
    /**
     * The revenueInclVat
     * @var float|null
     */
    protected ?float $revenueInclVat = null;
    /**
     * The revenueInsurance
     * @var float|null
     */
    protected ?float $revenueInsurance = null;
    /**
     * The revenueVatAmount
     * @var float|null
     */
    protected ?float $revenueVatAmount = null;
    /**
     * The revenueVatFree
     * @var float|null
     */
    protected ?float $revenueVatFree = null;
    /**
     * The revenueVatPercent
     * @var float|null
     */
    protected ?float $revenueVatPercent = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The settlementTypeDebit
     * @var string|null
     */
    protected ?string $settlementTypeDebit = null;
    /**
     * The stornoAccounts
     * @var bool|null
     */
    protected ?bool $stornoAccounts = null;
    /**
     * The suppSettlemId
     * @var int|null
     */
    protected ?int $suppSettlemId = null;
    /**
     * The suppSettlemPos
     * @var int|null
     */
    protected ?int $suppSettlemPos = null;
    /**
     * The supplierDiAmount
     * @var float|null
     */
    protected ?float $supplierDiAmount = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The supplierInvoiceAmount
     * @var float|null
     */
    protected ?float $supplierInvoiceAmount = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * Constructor method for RevenueBookingDTO
     * @uses RevenueBookingDTO::setAccrualWrittenOff()
     * @uses RevenueBookingDTO::setAdviceDetailId()
     * @uses RevenueBookingDTO::setAutomaticEntry()
     * @uses RevenueBookingDTO::setBookingDate()
     * @uses RevenueBookingDTO::setBookingText()
     * @uses RevenueBookingDTO::setBruttoPrice()
     * @uses RevenueBookingDTO::setCancelledTimestamp()
     * @uses RevenueBookingDTO::setCreationTimestamp()
     * @uses RevenueBookingDTO::setCreationType()
     * @uses RevenueBookingDTO::setCreationUser()
     * @uses RevenueBookingDTO::setCurrency()
     * @uses RevenueBookingDTO::setDestination()
     * @uses RevenueBookingDTO::setDueDate()
     * @uses RevenueBookingDTO::setFullyAssignedToTravelnoSales()
     * @uses RevenueBookingDTO::setIsDeposit()
     * @uses RevenueBookingDTO::setIsManual()
     * @uses RevenueBookingDTO::setIsPaid()
     * @uses RevenueBookingDTO::setIsPseudoBooking()
     * @uses RevenueBookingDTO::setIsSingleMargin()
     * @uses RevenueBookingDTO::setIsVoided()
     * @uses RevenueBookingDTO::setItemId()
     * @uses RevenueBookingDTO::setModifyUser()
     * @uses RevenueBookingDTO::setOriginalAmount()
     * @uses RevenueBookingDTO::setOriginalCurrency()
     * @uses RevenueBookingDTO::setOriginalRevenueInclVat()
     * @uses RevenueBookingDTO::setOriginalRevenueInsurance()
     * @uses RevenueBookingDTO::setOriginalRevenueVatFree()
     * @uses RevenueBookingDTO::setPaymentDate()
     * @uses RevenueBookingDTO::setQrInvoiceRefNo()
     * @uses RevenueBookingDTO::setReceiptDate()
     * @uses RevenueBookingDTO::setReceiptNo()
     * @uses RevenueBookingDTO::setRevenueId()
     * @uses RevenueBookingDTO::setRevenueInclVat()
     * @uses RevenueBookingDTO::setRevenueInsurance()
     * @uses RevenueBookingDTO::setRevenueVatAmount()
     * @uses RevenueBookingDTO::setRevenueVatFree()
     * @uses RevenueBookingDTO::setRevenueVatPercent()
     * @uses RevenueBookingDTO::setSettlementType()
     * @uses RevenueBookingDTO::setSettlementTypeDebit()
     * @uses RevenueBookingDTO::setStornoAccounts()
     * @uses RevenueBookingDTO::setSuppSettlemId()
     * @uses RevenueBookingDTO::setSuppSettlemPos()
     * @uses RevenueBookingDTO::setSupplierDiAmount()
     * @uses RevenueBookingDTO::setSupplierId()
     * @uses RevenueBookingDTO::setSupplierInvoiceAmount()
     * @uses RevenueBookingDTO::setTravelType()
     * @param bool $accrualWrittenOff
     * @param int $adviceDetailId
     * @param bool $automaticEntry
     * @param string $bookingDate
     * @param string $bookingText
     * @param float $bruttoPrice
     * @param string $cancelledTimestamp
     * @param string $creationTimestamp
     * @param string $creationType
     * @param int $creationUser
     * @param string $currency
     * @param string $destination
     * @param string $dueDate
     * @param bool $fullyAssignedToTravelnoSales
     * @param bool $isDeposit
     * @param bool $isManual
     * @param bool $isPaid
     * @param bool $isPseudoBooking
     * @param bool $isSingleMargin
     * @param bool $isVoided
     * @param int $itemId
     * @param int $modifyUser
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param float $originalRevenueInclVat
     * @param float $originalRevenueInsurance
     * @param float $originalRevenueVatFree
     * @param string $paymentDate
     * @param string $qrInvoiceRefNo
     * @param string $receiptDate
     * @param string $receiptNo
     * @param int $revenueId
     * @param float $revenueInclVat
     * @param float $revenueInsurance
     * @param float $revenueVatAmount
     * @param float $revenueVatFree
     * @param float $revenueVatPercent
     * @param string $settlementType
     * @param string $settlementTypeDebit
     * @param bool $stornoAccounts
     * @param int $suppSettlemId
     * @param int $suppSettlemPos
     * @param float $supplierDiAmount
     * @param string $supplierId
     * @param float $supplierInvoiceAmount
     * @param string $travelType
     */
    public function __construct(?bool $accrualWrittenOff = null, ?int $adviceDetailId = null, ?bool $automaticEntry = null, ?string $bookingDate = null, ?string $bookingText = null, ?float $bruttoPrice = null, ?string $cancelledTimestamp = null, ?string $creationTimestamp = null, ?string $creationType = null, ?int $creationUser = null, ?string $currency = null, ?string $destination = null, ?string $dueDate = null, ?bool $fullyAssignedToTravelnoSales = null, ?bool $isDeposit = null, ?bool $isManual = null, ?bool $isPaid = null, ?bool $isPseudoBooking = null, ?bool $isSingleMargin = null, ?bool $isVoided = null, ?int $itemId = null, ?int $modifyUser = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?float $originalRevenueInclVat = null, ?float $originalRevenueInsurance = null, ?float $originalRevenueVatFree = null, ?string $paymentDate = null, ?string $qrInvoiceRefNo = null, ?string $receiptDate = null, ?string $receiptNo = null, ?int $revenueId = null, ?float $revenueInclVat = null, ?float $revenueInsurance = null, ?float $revenueVatAmount = null, ?float $revenueVatFree = null, ?float $revenueVatPercent = null, ?string $settlementType = null, ?string $settlementTypeDebit = null, ?bool $stornoAccounts = null, ?int $suppSettlemId = null, ?int $suppSettlemPos = null, ?float $supplierDiAmount = null, ?string $supplierId = null, ?float $supplierInvoiceAmount = null, ?string $travelType = null)
    {
        $this
            ->setAccrualWrittenOff($accrualWrittenOff)
            ->setAdviceDetailId($adviceDetailId)
            ->setAutomaticEntry($automaticEntry)
            ->setBookingDate($bookingDate)
            ->setBookingText($bookingText)
            ->setBruttoPrice($bruttoPrice)
            ->setCancelledTimestamp($cancelledTimestamp)
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationType($creationType)
            ->setCreationUser($creationUser)
            ->setCurrency($currency)
            ->setDestination($destination)
            ->setDueDate($dueDate)
            ->setFullyAssignedToTravelnoSales($fullyAssignedToTravelnoSales)
            ->setIsDeposit($isDeposit)
            ->setIsManual($isManual)
            ->setIsPaid($isPaid)
            ->setIsPseudoBooking($isPseudoBooking)
            ->setIsSingleMargin($isSingleMargin)
            ->setIsVoided($isVoided)
            ->setItemId($itemId)
            ->setModifyUser($modifyUser)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalRevenueInclVat($originalRevenueInclVat)
            ->setOriginalRevenueInsurance($originalRevenueInsurance)
            ->setOriginalRevenueVatFree($originalRevenueVatFree)
            ->setPaymentDate($paymentDate)
            ->setQrInvoiceRefNo($qrInvoiceRefNo)
            ->setReceiptDate($receiptDate)
            ->setReceiptNo($receiptNo)
            ->setRevenueId($revenueId)
            ->setRevenueInclVat($revenueInclVat)
            ->setRevenueInsurance($revenueInsurance)
            ->setRevenueVatAmount($revenueVatAmount)
            ->setRevenueVatFree($revenueVatFree)
            ->setRevenueVatPercent($revenueVatPercent)
            ->setSettlementType($settlementType)
            ->setSettlementTypeDebit($settlementTypeDebit)
            ->setStornoAccounts($stornoAccounts)
            ->setSuppSettlemId($suppSettlemId)
            ->setSuppSettlemPos($suppSettlemPos)
            ->setSupplierDiAmount($supplierDiAmount)
            ->setSupplierId($supplierId)
            ->setSupplierInvoiceAmount($supplierInvoiceAmount)
            ->setTravelType($travelType);
    }
    /**
     * Get accrualWrittenOff value
     * @return bool|null
     */
    public function getAccrualWrittenOff(): ?bool
    {
        return $this->accrualWrittenOff;
    }
    /**
     * Set accrualWrittenOff value
     * @param bool $accrualWrittenOff
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setAccrualWrittenOff(?bool $accrualWrittenOff = null): self
    {
        // validation for constraint: boolean
        if (!is_null($accrualWrittenOff) && !is_bool($accrualWrittenOff)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($accrualWrittenOff, true), gettype($accrualWrittenOff)), __LINE__);
        }
        $this->accrualWrittenOff = $accrualWrittenOff;
        
        return $this;
    }
    /**
     * Get adviceDetailId value
     * @return int|null
     */
    public function getAdviceDetailId(): ?int
    {
        return $this->adviceDetailId;
    }
    /**
     * Set adviceDetailId value
     * @param int $adviceDetailId
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setAdviceDetailId(?int $adviceDetailId = null): self
    {
        // validation for constraint: int
        if (!is_null($adviceDetailId) && !(is_int($adviceDetailId) || ctype_digit($adviceDetailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adviceDetailId, true), gettype($adviceDetailId)), __LINE__);
        }
        $this->adviceDetailId = $adviceDetailId;
        
        return $this;
    }
    /**
     * Get automaticEntry value
     * @return bool|null
     */
    public function getAutomaticEntry(): ?bool
    {
        return $this->automaticEntry;
    }
    /**
     * Set automaticEntry value
     * @param bool $automaticEntry
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setAutomaticEntry(?bool $automaticEntry = null): self
    {
        // validation for constraint: boolean
        if (!is_null($automaticEntry) && !is_bool($automaticEntry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automaticEntry, true), gettype($automaticEntry)), __LINE__);
        }
        $this->automaticEntry = $automaticEntry;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
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
     * Get bruttoPrice value
     * @return float|null
     */
    public function getBruttoPrice(): ?float
    {
        return $this->bruttoPrice;
    }
    /**
     * Set bruttoPrice value
     * @param float $bruttoPrice
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setBruttoPrice(?float $bruttoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($bruttoPrice) && !(is_float($bruttoPrice) || is_numeric($bruttoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bruttoPrice, true), gettype($bruttoPrice)), __LINE__);
        }
        $this->bruttoPrice = $bruttoPrice;
        
        return $this;
    }
    /**
     * Get cancelledTimestamp value
     * @return string|null
     */
    public function getCancelledTimestamp(): ?string
    {
        return $this->cancelledTimestamp;
    }
    /**
     * Set cancelledTimestamp value
     * @param string $cancelledTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setCancelledTimestamp(?string $cancelledTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelledTimestamp) && !is_string($cancelledTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelledTimestamp, true), gettype($cancelledTimestamp)), __LINE__);
        }
        $this->cancelledTimestamp = $cancelledTimestamp;
        
        return $this;
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get creationType value
     * @return string|null
     */
    public function getCreationType(): ?string
    {
        return $this->creationType;
    }
    /**
     * Set creationType value
     * @param string $creationType
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setCreationType(?string $creationType = null): self
    {
        // validation for constraint: string
        if (!is_null($creationType) && !is_string($creationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationType, true), gettype($creationType)), __LINE__);
        }
        $this->creationType = $creationType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
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
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
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
     * Get fullyAssignedToTravelnoSales value
     * @return bool|null
     */
    public function getFullyAssignedToTravelnoSales(): ?bool
    {
        return $this->fullyAssignedToTravelnoSales;
    }
    /**
     * Set fullyAssignedToTravelnoSales value
     * @param bool $fullyAssignedToTravelnoSales
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setFullyAssignedToTravelnoSales(?bool $fullyAssignedToTravelnoSales = null): self
    {
        // validation for constraint: boolean
        if (!is_null($fullyAssignedToTravelnoSales) && !is_bool($fullyAssignedToTravelnoSales)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fullyAssignedToTravelnoSales, true), gettype($fullyAssignedToTravelnoSales)), __LINE__);
        }
        $this->fullyAssignedToTravelnoSales = $fullyAssignedToTravelnoSales;
        
        return $this;
    }
    /**
     * Get isDeposit value
     * @return bool|null
     */
    public function getIsDeposit(): ?bool
    {
        return $this->isDeposit;
    }
    /**
     * Set isDeposit value
     * @param bool $isDeposit
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setIsDeposit(?bool $isDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeposit) && !is_bool($isDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeposit, true), gettype($isDeposit)), __LINE__);
        }
        $this->isDeposit = $isDeposit;
        
        return $this;
    }
    /**
     * Get isManual value
     * @return bool|null
     */
    public function getIsManual(): ?bool
    {
        return $this->isManual;
    }
    /**
     * Set isManual value
     * @param bool $isManual
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setIsManual(?bool $isManual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManual) && !is_bool($isManual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManual, true), gettype($isManual)), __LINE__);
        }
        $this->isManual = $isManual;
        
        return $this;
    }
    /**
     * Get isPaid value
     * @return bool|null
     */
    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }
    /**
     * Set isPaid value
     * @param bool $isPaid
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setIsPaid(?bool $isPaid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPaid) && !is_bool($isPaid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPaid, true), gettype($isPaid)), __LINE__);
        }
        $this->isPaid = $isPaid;
        
        return $this;
    }
    /**
     * Get isPseudoBooking value
     * @return bool|null
     */
    public function getIsPseudoBooking(): ?bool
    {
        return $this->isPseudoBooking;
    }
    /**
     * Set isPseudoBooking value
     * @param bool $isPseudoBooking
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setIsPseudoBooking(?bool $isPseudoBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPseudoBooking) && !is_bool($isPseudoBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPseudoBooking, true), gettype($isPseudoBooking)), __LINE__);
        }
        $this->isPseudoBooking = $isPseudoBooking;
        
        return $this;
    }
    /**
     * Get isSingleMargin value
     * @return bool|null
     */
    public function getIsSingleMargin(): ?bool
    {
        return $this->isSingleMargin;
    }
    /**
     * Set isSingleMargin value
     * @param bool $isSingleMargin
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setIsSingleMargin(?bool $isSingleMargin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSingleMargin) && !is_bool($isSingleMargin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSingleMargin, true), gettype($isSingleMargin)), __LINE__);
        }
        $this->isSingleMargin = $isSingleMargin;
        
        return $this;
    }
    /**
     * Get isVoided value
     * @return bool|null
     */
    public function getIsVoided(): ?bool
    {
        return $this->isVoided;
    }
    /**
     * Set isVoided value
     * @param bool $isVoided
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setIsVoided(?bool $isVoided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoided) && !is_bool($isVoided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoided, true), gettype($isVoided)), __LINE__);
        }
        $this->isVoided = $isVoided;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
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
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get originalAmount value
     * @return float|null
     */
    public function getOriginalAmount(): ?float
    {
        return $this->originalAmount;
    }
    /**
     * Set originalAmount value
     * @param float $originalAmount
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setOriginalAmount(?float $originalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalAmount) && !(is_float($originalAmount) || is_numeric($originalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalAmount, true), gettype($originalAmount)), __LINE__);
        }
        $this->originalAmount = $originalAmount;
        
        return $this;
    }
    /**
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
    }
    /**
     * Get originalRevenueInclVat value
     * @return float|null
     */
    public function getOriginalRevenueInclVat(): ?float
    {
        return $this->originalRevenueInclVat;
    }
    /**
     * Set originalRevenueInclVat value
     * @param float $originalRevenueInclVat
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setOriginalRevenueInclVat(?float $originalRevenueInclVat = null): self
    {
        // validation for constraint: float
        if (!is_null($originalRevenueInclVat) && !(is_float($originalRevenueInclVat) || is_numeric($originalRevenueInclVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalRevenueInclVat, true), gettype($originalRevenueInclVat)), __LINE__);
        }
        $this->originalRevenueInclVat = $originalRevenueInclVat;
        
        return $this;
    }
    /**
     * Get originalRevenueInsurance value
     * @return float|null
     */
    public function getOriginalRevenueInsurance(): ?float
    {
        return $this->originalRevenueInsurance;
    }
    /**
     * Set originalRevenueInsurance value
     * @param float $originalRevenueInsurance
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setOriginalRevenueInsurance(?float $originalRevenueInsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($originalRevenueInsurance) && !(is_float($originalRevenueInsurance) || is_numeric($originalRevenueInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalRevenueInsurance, true), gettype($originalRevenueInsurance)), __LINE__);
        }
        $this->originalRevenueInsurance = $originalRevenueInsurance;
        
        return $this;
    }
    /**
     * Get originalRevenueVatFree value
     * @return float|null
     */
    public function getOriginalRevenueVatFree(): ?float
    {
        return $this->originalRevenueVatFree;
    }
    /**
     * Set originalRevenueVatFree value
     * @param float $originalRevenueVatFree
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setOriginalRevenueVatFree(?float $originalRevenueVatFree = null): self
    {
        // validation for constraint: float
        if (!is_null($originalRevenueVatFree) && !(is_float($originalRevenueVatFree) || is_numeric($originalRevenueVatFree))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalRevenueVatFree, true), gettype($originalRevenueVatFree)), __LINE__);
        }
        $this->originalRevenueVatFree = $originalRevenueVatFree;
        
        return $this;
    }
    /**
     * Get paymentDate value
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }
    /**
     * Set paymentDate value
     * @param string $paymentDate
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setPaymentDate(?string $paymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDate, true), gettype($paymentDate)), __LINE__);
        }
        $this->paymentDate = $paymentDate;
        
        return $this;
    }
    /**
     * Get qrInvoiceRefNo value
     * @return string|null
     */
    public function getQrInvoiceRefNo(): ?string
    {
        return $this->qrInvoiceRefNo;
    }
    /**
     * Set qrInvoiceRefNo value
     * @param string $qrInvoiceRefNo
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setQrInvoiceRefNo(?string $qrInvoiceRefNo = null): self
    {
        // validation for constraint: string
        if (!is_null($qrInvoiceRefNo) && !is_string($qrInvoiceRefNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qrInvoiceRefNo, true), gettype($qrInvoiceRefNo)), __LINE__);
        }
        $this->qrInvoiceRefNo = $qrInvoiceRefNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
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
     * Get revenueId value
     * @return int|null
     */
    public function getRevenueId(): ?int
    {
        return $this->revenueId;
    }
    /**
     * Set revenueId value
     * @param int $revenueId
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setRevenueId(?int $revenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($revenueId) && !(is_int($revenueId) || ctype_digit($revenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($revenueId, true), gettype($revenueId)), __LINE__);
        }
        $this->revenueId = $revenueId;
        
        return $this;
    }
    /**
     * Get revenueInclVat value
     * @return float|null
     */
    public function getRevenueInclVat(): ?float
    {
        return $this->revenueInclVat;
    }
    /**
     * Set revenueInclVat value
     * @param float $revenueInclVat
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setRevenueInclVat(?float $revenueInclVat = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueInclVat) && !(is_float($revenueInclVat) || is_numeric($revenueInclVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueInclVat, true), gettype($revenueInclVat)), __LINE__);
        }
        $this->revenueInclVat = $revenueInclVat;
        
        return $this;
    }
    /**
     * Get revenueInsurance value
     * @return float|null
     */
    public function getRevenueInsurance(): ?float
    {
        return $this->revenueInsurance;
    }
    /**
     * Set revenueInsurance value
     * @param float $revenueInsurance
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setRevenueInsurance(?float $revenueInsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueInsurance) && !(is_float($revenueInsurance) || is_numeric($revenueInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueInsurance, true), gettype($revenueInsurance)), __LINE__);
        }
        $this->revenueInsurance = $revenueInsurance;
        
        return $this;
    }
    /**
     * Get revenueVatAmount value
     * @return float|null
     */
    public function getRevenueVatAmount(): ?float
    {
        return $this->revenueVatAmount;
    }
    /**
     * Set revenueVatAmount value
     * @param float $revenueVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setRevenueVatAmount(?float $revenueVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueVatAmount) && !(is_float($revenueVatAmount) || is_numeric($revenueVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueVatAmount, true), gettype($revenueVatAmount)), __LINE__);
        }
        $this->revenueVatAmount = $revenueVatAmount;
        
        return $this;
    }
    /**
     * Get revenueVatFree value
     * @return float|null
     */
    public function getRevenueVatFree(): ?float
    {
        return $this->revenueVatFree;
    }
    /**
     * Set revenueVatFree value
     * @param float $revenueVatFree
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setRevenueVatFree(?float $revenueVatFree = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueVatFree) && !(is_float($revenueVatFree) || is_numeric($revenueVatFree))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueVatFree, true), gettype($revenueVatFree)), __LINE__);
        }
        $this->revenueVatFree = $revenueVatFree;
        
        return $this;
    }
    /**
     * Get revenueVatPercent value
     * @return float|null
     */
    public function getRevenueVatPercent(): ?float
    {
        return $this->revenueVatPercent;
    }
    /**
     * Set revenueVatPercent value
     * @param float $revenueVatPercent
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setRevenueVatPercent(?float $revenueVatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueVatPercent) && !(is_float($revenueVatPercent) || is_numeric($revenueVatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueVatPercent, true), gettype($revenueVatPercent)), __LINE__);
        }
        $this->revenueVatPercent = $revenueVatPercent;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get settlementTypeDebit value
     * @return string|null
     */
    public function getSettlementTypeDebit(): ?string
    {
        return $this->settlementTypeDebit;
    }
    /**
     * Set settlementTypeDebit value
     * @param string $settlementTypeDebit
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setSettlementTypeDebit(?string $settlementTypeDebit = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementTypeDebit) && !is_string($settlementTypeDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementTypeDebit, true), gettype($settlementTypeDebit)), __LINE__);
        }
        $this->settlementTypeDebit = $settlementTypeDebit;
        
        return $this;
    }
    /**
     * Get stornoAccounts value
     * @return bool|null
     */
    public function getStornoAccounts(): ?bool
    {
        return $this->stornoAccounts;
    }
    /**
     * Set stornoAccounts value
     * @param bool $stornoAccounts
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setStornoAccounts(?bool $stornoAccounts = null): self
    {
        // validation for constraint: boolean
        if (!is_null($stornoAccounts) && !is_bool($stornoAccounts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stornoAccounts, true), gettype($stornoAccounts)), __LINE__);
        }
        $this->stornoAccounts = $stornoAccounts;
        
        return $this;
    }
    /**
     * Get suppSettlemId value
     * @return int|null
     */
    public function getSuppSettlemId(): ?int
    {
        return $this->suppSettlemId;
    }
    /**
     * Set suppSettlemId value
     * @param int $suppSettlemId
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setSuppSettlemId(?int $suppSettlemId = null): self
    {
        // validation for constraint: int
        if (!is_null($suppSettlemId) && !(is_int($suppSettlemId) || ctype_digit($suppSettlemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($suppSettlemId, true), gettype($suppSettlemId)), __LINE__);
        }
        $this->suppSettlemId = $suppSettlemId;
        
        return $this;
    }
    /**
     * Get suppSettlemPos value
     * @return int|null
     */
    public function getSuppSettlemPos(): ?int
    {
        return $this->suppSettlemPos;
    }
    /**
     * Set suppSettlemPos value
     * @param int $suppSettlemPos
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setSuppSettlemPos(?int $suppSettlemPos = null): self
    {
        // validation for constraint: int
        if (!is_null($suppSettlemPos) && !(is_int($suppSettlemPos) || ctype_digit($suppSettlemPos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($suppSettlemPos, true), gettype($suppSettlemPos)), __LINE__);
        }
        $this->suppSettlemPos = $suppSettlemPos;
        
        return $this;
    }
    /**
     * Get supplierDiAmount value
     * @return float|null
     */
    public function getSupplierDiAmount(): ?float
    {
        return $this->supplierDiAmount;
    }
    /**
     * Set supplierDiAmount value
     * @param float $supplierDiAmount
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setSupplierDiAmount(?float $supplierDiAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierDiAmount) && !(is_float($supplierDiAmount) || is_numeric($supplierDiAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierDiAmount, true), gettype($supplierDiAmount)), __LINE__);
        }
        $this->supplierDiAmount = $supplierDiAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
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
     * Get supplierInvoiceAmount value
     * @return float|null
     */
    public function getSupplierInvoiceAmount(): ?float
    {
        return $this->supplierInvoiceAmount;
    }
    /**
     * Set supplierInvoiceAmount value
     * @param float $supplierInvoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setSupplierInvoiceAmount(?float $supplierInvoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierInvoiceAmount) && !(is_float($supplierInvoiceAmount) || is_numeric($supplierInvoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierInvoiceAmount, true), gettype($supplierInvoiceAmount)), __LINE__);
        }
        $this->supplierInvoiceAmount = $supplierInvoiceAmount;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingDTO
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
}
