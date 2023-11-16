<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemProvisionDTO StructType
 * @subpackage Structs
 */
class SellItemProvisionDTO extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The numberOfPersons
     * @var int|null
     */
    protected ?int $numberOfPersons = null;
    /**
     * The traveldate
     * @var string|null
     */
    protected ?string $traveldate = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The calculatedRevenue
     * @var float|null
     */
    protected ?float $calculatedRevenue = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The invoiceDate
     * @var string|null
     */
    protected ?string $invoiceDate = null;
    /**
     * The vatInclAmount
     * @var float|null
     */
    protected ?float $vatInclAmount = null;
    /**
     * The vatFreeAmount
     * @var float|null
     */
    protected ?float $vatFreeAmount = null;
    /**
     * The vatInsurance
     * @var float|null
     */
    protected ?float $vatInsurance = null;
    /**
     * The supplierInvoice
     * @var float|null
     */
    protected ?float $supplierInvoice = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The customerSurName
     * @var string|null
     */
    protected ?string $customerSurName = null;
    /**
     * The customerForeName
     * @var string|null
     */
    protected ?string $customerForeName = null;
    /**
     * The isCollective
     * @var bool|null
     */
    protected ?bool $isCollective = null;
    /**
     * The revenueId
     * @var int|null
     */
    protected ?int $revenueId = null;
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The commissionMode
     * @var int|null
     */
    protected ?int $commissionMode = null;
    /**
     * The entryRestAsProv
     * @var bool|null
     */
    protected ?bool $entryRestAsProv = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The inPackage
     * @var bool|null
     */
    protected ?bool $inPackage = null;
    /**
     * The isInsurance
     * @var bool|null
     */
    protected ?bool $isInsurance = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The extId
     * @var string|null
     */
    protected ?string $extId = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The feeAmount
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The manualEntriesExist
     * @var bool|null
     */
    protected ?bool $manualEntriesExist = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The foreignCurrency
     * @var string|null
     */
    protected ?string $foreignCurrency = null;
    /**
     * The foreignCurrencyExchangeRate
     * @var float|null
     */
    protected ?float $foreignCurrencyExchangeRate = null;
    /**
     * The foreignCurrencyRateMasterData
     * @var float|null
     */
    protected ?float $foreignCurrencyRateMasterData = null;
    /**
     * The foreignCurrencyLookupMethod
     * @var int|null
     */
    protected ?int $foreignCurrencyLookupMethod = null;
    /**
     * The isForeignCreditor
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isForeignCreditor = null;
    /**
     * The inkassoMode
     * @var int|null
     */
    protected ?int $inkassoMode = null;
    /**
     * The supplierDIAmount
     * @var float|null
     */
    protected ?float $supplierDIAmount = null;
    /**
     * The travelPrice
     * @var float|null
     */
    protected ?float $travelPrice = null;
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
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The travelitemDestination
     * @var string|null
     */
    protected ?string $travelitemDestination = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
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
     * The isQrInvoiceTransfer
     * @var bool|null
     */
    protected ?bool $isQrInvoiceTransfer = null;
    /**
     * The qrInvoiceRefNo
     * @var string|null
     */
    protected ?string $qrInvoiceRefNo = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * Constructor method for SellItemProvisionDTO
     * @uses SellItemProvisionDTO::setItemId()
     * @uses SellItemProvisionDTO::setBookingId()
     * @uses SellItemProvisionDTO::setTraveltype()
     * @uses SellItemProvisionDTO::setTotalPrice()
     * @uses SellItemProvisionDTO::setNumberOfPersons()
     * @uses SellItemProvisionDTO::setTraveldate()
     * @uses SellItemProvisionDTO::setStatus()
     * @uses SellItemProvisionDTO::setCalculatedRevenue()
     * @uses SellItemProvisionDTO::setGrantedRevenue()
     * @uses SellItemProvisionDTO::setInvoiceDate()
     * @uses SellItemProvisionDTO::setVatInclAmount()
     * @uses SellItemProvisionDTO::setVatFreeAmount()
     * @uses SellItemProvisionDTO::setVatInsurance()
     * @uses SellItemProvisionDTO::setSupplierInvoice()
     * @uses SellItemProvisionDTO::setReceiptNo()
     * @uses SellItemProvisionDTO::setSupplierId()
     * @uses SellItemProvisionDTO::setOrderId()
     * @uses SellItemProvisionDTO::setOrderNo()
     * @uses SellItemProvisionDTO::setCustomerSurName()
     * @uses SellItemProvisionDTO::setCustomerForeName()
     * @uses SellItemProvisionDTO::setIsCollective()
     * @uses SellItemProvisionDTO::setRevenueId()
     * @uses SellItemProvisionDTO::setNettoAmount()
     * @uses SellItemProvisionDTO::setVatAmount()
     * @uses SellItemProvisionDTO::setVatPercent()
     * @uses SellItemProvisionDTO::setUnitName()
     * @uses SellItemProvisionDTO::setCommissionMode()
     * @uses SellItemProvisionDTO::setEntryRestAsProv()
     * @uses SellItemProvisionDTO::setPaymentType()
     * @uses SellItemProvisionDTO::setInPackage()
     * @uses SellItemProvisionDTO::setIsInsurance()
     * @uses SellItemProvisionDTO::setInkassoPrice()
     * @uses SellItemProvisionDTO::setExtId()
     * @uses SellItemProvisionDTO::setDestination()
     * @uses SellItemProvisionDTO::setFeeAmount()
     * @uses SellItemProvisionDTO::setManualEntriesExist()
     * @uses SellItemProvisionDTO::setCurrency()
     * @uses SellItemProvisionDTO::setForeignCurrency()
     * @uses SellItemProvisionDTO::setForeignCurrencyExchangeRate()
     * @uses SellItemProvisionDTO::setForeignCurrencyRateMasterData()
     * @uses SellItemProvisionDTO::setForeignCurrencyLookupMethod()
     * @uses SellItemProvisionDTO::setIsForeignCreditor()
     * @uses SellItemProvisionDTO::setInkassoMode()
     * @uses SellItemProvisionDTO::setSupplierDIAmount()
     * @uses SellItemProvisionDTO::setTravelPrice()
     * @uses SellItemProvisionDTO::setSettlementType()
     * @uses SellItemProvisionDTO::setSettlementTypeDebit()
     * @uses SellItemProvisionDTO::setIsDeposit()
     * @uses SellItemProvisionDTO::setTravelitemDestination()
     * @uses SellItemProvisionDTO::setItemType()
     * @uses SellItemProvisionDTO::setEndTravel()
     * @uses SellItemProvisionDTO::setDueDate()
     * @uses SellItemProvisionDTO::setBookingDate()
     * @uses SellItemProvisionDTO::setBookingText()
     * @uses SellItemProvisionDTO::setIsQrInvoiceTransfer()
     * @uses SellItemProvisionDTO::setQrInvoiceRefNo()
     * @uses SellItemProvisionDTO::setCreationDate()
     * @param int $itemId
     * @param string $bookingId
     * @param string $traveltype
     * @param float $totalPrice
     * @param int $numberOfPersons
     * @param string $traveldate
     * @param string $status
     * @param float $calculatedRevenue
     * @param float $grantedRevenue
     * @param string $invoiceDate
     * @param float $vatInclAmount
     * @param float $vatFreeAmount
     * @param float $vatInsurance
     * @param float $supplierInvoice
     * @param string $receiptNo
     * @param string $supplierId
     * @param int $orderId
     * @param int $orderNo
     * @param string $customerSurName
     * @param string $customerForeName
     * @param bool $isCollective
     * @param int $revenueId
     * @param float $nettoAmount
     * @param float $vatAmount
     * @param float $vatPercent
     * @param string $unitName
     * @param int $commissionMode
     * @param bool $entryRestAsProv
     * @param string $paymentType
     * @param bool $inPackage
     * @param bool $isInsurance
     * @param float $inkassoPrice
     * @param string $extId
     * @param string $destination
     * @param float $feeAmount
     * @param bool $manualEntriesExist
     * @param string $currency
     * @param string $foreignCurrency
     * @param float $foreignCurrencyExchangeRate
     * @param float $foreignCurrencyRateMasterData
     * @param int $foreignCurrencyLookupMethod
     * @param bool $isForeignCreditor
     * @param int $inkassoMode
     * @param float $supplierDIAmount
     * @param float $travelPrice
     * @param string $settlementType
     * @param string $settlementTypeDebit
     * @param bool $isDeposit
     * @param string $travelitemDestination
     * @param string $itemType
     * @param string $endTravel
     * @param string $dueDate
     * @param string $bookingDate
     * @param string $bookingText
     * @param bool $isQrInvoiceTransfer
     * @param string $qrInvoiceRefNo
     * @param string $creationDate
     */
    public function __construct(?int $itemId = null, ?string $bookingId = null, ?string $traveltype = null, ?float $totalPrice = null, ?int $numberOfPersons = null, ?string $traveldate = null, ?string $status = null, ?float $calculatedRevenue = null, ?float $grantedRevenue = null, ?string $invoiceDate = null, ?float $vatInclAmount = null, ?float $vatFreeAmount = null, ?float $vatInsurance = null, ?float $supplierInvoice = null, ?string $receiptNo = null, ?string $supplierId = null, ?int $orderId = null, ?int $orderNo = null, ?string $customerSurName = null, ?string $customerForeName = null, ?bool $isCollective = null, ?int $revenueId = null, ?float $nettoAmount = null, ?float $vatAmount = null, ?float $vatPercent = null, ?string $unitName = null, ?int $commissionMode = null, ?bool $entryRestAsProv = null, ?string $paymentType = null, ?bool $inPackage = null, ?bool $isInsurance = null, ?float $inkassoPrice = null, ?string $extId = null, ?string $destination = null, ?float $feeAmount = null, ?bool $manualEntriesExist = null, ?string $currency = null, ?string $foreignCurrency = null, ?float $foreignCurrencyExchangeRate = null, ?float $foreignCurrencyRateMasterData = null, ?int $foreignCurrencyLookupMethod = null, ?bool $isForeignCreditor = false, ?int $inkassoMode = null, ?float $supplierDIAmount = null, ?float $travelPrice = null, ?string $settlementType = null, ?string $settlementTypeDebit = null, ?bool $isDeposit = null, ?string $travelitemDestination = null, ?string $itemType = null, ?string $endTravel = null, ?string $dueDate = null, ?string $bookingDate = null, ?string $bookingText = null, ?bool $isQrInvoiceTransfer = null, ?string $qrInvoiceRefNo = null, ?string $creationDate = null)
    {
        $this
            ->setItemId($itemId)
            ->setBookingId($bookingId)
            ->setTraveltype($traveltype)
            ->setTotalPrice($totalPrice)
            ->setNumberOfPersons($numberOfPersons)
            ->setTraveldate($traveldate)
            ->setStatus($status)
            ->setCalculatedRevenue($calculatedRevenue)
            ->setGrantedRevenue($grantedRevenue)
            ->setInvoiceDate($invoiceDate)
            ->setVatInclAmount($vatInclAmount)
            ->setVatFreeAmount($vatFreeAmount)
            ->setVatInsurance($vatInsurance)
            ->setSupplierInvoice($supplierInvoice)
            ->setReceiptNo($receiptNo)
            ->setSupplierId($supplierId)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setCustomerSurName($customerSurName)
            ->setCustomerForeName($customerForeName)
            ->setIsCollective($isCollective)
            ->setRevenueId($revenueId)
            ->setNettoAmount($nettoAmount)
            ->setVatAmount($vatAmount)
            ->setVatPercent($vatPercent)
            ->setUnitName($unitName)
            ->setCommissionMode($commissionMode)
            ->setEntryRestAsProv($entryRestAsProv)
            ->setPaymentType($paymentType)
            ->setInPackage($inPackage)
            ->setIsInsurance($isInsurance)
            ->setInkassoPrice($inkassoPrice)
            ->setExtId($extId)
            ->setDestination($destination)
            ->setFeeAmount($feeAmount)
            ->setManualEntriesExist($manualEntriesExist)
            ->setCurrency($currency)
            ->setForeignCurrency($foreignCurrency)
            ->setForeignCurrencyExchangeRate($foreignCurrencyExchangeRate)
            ->setForeignCurrencyRateMasterData($foreignCurrencyRateMasterData)
            ->setForeignCurrencyLookupMethod($foreignCurrencyLookupMethod)
            ->setIsForeignCreditor($isForeignCreditor)
            ->setInkassoMode($inkassoMode)
            ->setSupplierDIAmount($supplierDIAmount)
            ->setTravelPrice($travelPrice)
            ->setSettlementType($settlementType)
            ->setSettlementTypeDebit($settlementTypeDebit)
            ->setIsDeposit($isDeposit)
            ->setTravelitemDestination($travelitemDestination)
            ->setItemType($itemType)
            ->setEndTravel($endTravel)
            ->setDueDate($dueDate)
            ->setBookingDate($bookingDate)
            ->setBookingText($bookingText)
            ->setIsQrInvoiceTransfer($isQrInvoiceTransfer)
            ->setQrInvoiceRefNo($qrInvoiceRefNo)
            ->setCreationDate($creationDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get numberOfPersons value
     * @return int|null
     */
    public function getNumberOfPersons(): ?int
    {
        return $this->numberOfPersons;
    }
    /**
     * Set numberOfPersons value
     * @param int $numberOfPersons
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setNumberOfPersons(?int $numberOfPersons = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfPersons) && !(is_int($numberOfPersons) || ctype_digit($numberOfPersons))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfPersons, true), gettype($numberOfPersons)), __LINE__);
        }
        $this->numberOfPersons = $numberOfPersons;
        
        return $this;
    }
    /**
     * Get traveldate value
     * @return string|null
     */
    public function getTraveldate(): ?string
    {
        return $this->traveldate;
    }
    /**
     * Set traveldate value
     * @param string $traveldate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setTraveldate(?string $traveldate = null): self
    {
        // validation for constraint: string
        if (!is_null($traveldate) && !is_string($traveldate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveldate, true), gettype($traveldate)), __LINE__);
        }
        $this->traveldate = $traveldate;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * Get grantedRevenue value
     * @return float|null
     */
    public function getGrantedRevenue(): ?float
    {
        return $this->grantedRevenue;
    }
    /**
     * Set grantedRevenue value
     * @param float $grantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setGrantedRevenue(?float $grantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedRevenue) && !(is_float($grantedRevenue) || is_numeric($grantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedRevenue, true), gettype($grantedRevenue)), __LINE__);
        }
        $this->grantedRevenue = $grantedRevenue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * Get vatInclAmount value
     * @return float|null
     */
    public function getVatInclAmount(): ?float
    {
        return $this->vatInclAmount;
    }
    /**
     * Set vatInclAmount value
     * @param float $vatInclAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setVatInclAmount(?float $vatInclAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatInclAmount) && !(is_float($vatInclAmount) || is_numeric($vatInclAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatInclAmount, true), gettype($vatInclAmount)), __LINE__);
        }
        $this->vatInclAmount = $vatInclAmount;
        
        return $this;
    }
    /**
     * Get vatFreeAmount value
     * @return float|null
     */
    public function getVatFreeAmount(): ?float
    {
        return $this->vatFreeAmount;
    }
    /**
     * Set vatFreeAmount value
     * @param float $vatFreeAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setVatFreeAmount(?float $vatFreeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatFreeAmount) && !(is_float($vatFreeAmount) || is_numeric($vatFreeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatFreeAmount, true), gettype($vatFreeAmount)), __LINE__);
        }
        $this->vatFreeAmount = $vatFreeAmount;
        
        return $this;
    }
    /**
     * Get vatInsurance value
     * @return float|null
     */
    public function getVatInsurance(): ?float
    {
        return $this->vatInsurance;
    }
    /**
     * Set vatInsurance value
     * @param float $vatInsurance
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setVatInsurance(?float $vatInsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($vatInsurance) && !(is_float($vatInsurance) || is_numeric($vatInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatInsurance, true), gettype($vatInsurance)), __LINE__);
        }
        $this->vatInsurance = $vatInsurance;
        
        return $this;
    }
    /**
     * Get supplierInvoice value
     * @return float|null
     */
    public function getSupplierInvoice(): ?float
    {
        return $this->supplierInvoice;
    }
    /**
     * Set supplierInvoice value
     * @param float $supplierInvoice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setSupplierInvoice(?float $supplierInvoice = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierInvoice) && !(is_float($supplierInvoice) || is_numeric($supplierInvoice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierInvoice, true), gettype($supplierInvoice)), __LINE__);
        }
        $this->supplierInvoice = $supplierInvoice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get customerSurName value
     * @return string|null
     */
    public function getCustomerSurName(): ?string
    {
        return $this->customerSurName;
    }
    /**
     * Set customerSurName value
     * @param string $customerSurName
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setCustomerSurName(?string $customerSurName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerSurName) && !is_string($customerSurName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerSurName, true), gettype($customerSurName)), __LINE__);
        }
        $this->customerSurName = $customerSurName;
        
        return $this;
    }
    /**
     * Get customerForeName value
     * @return string|null
     */
    public function getCustomerForeName(): ?string
    {
        return $this->customerForeName;
    }
    /**
     * Set customerForeName value
     * @param string $customerForeName
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setCustomerForeName(?string $customerForeName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerForeName) && !is_string($customerForeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerForeName, true), gettype($customerForeName)), __LINE__);
        }
        $this->customerForeName = $customerForeName;
        
        return $this;
    }
    /**
     * Get isCollective value
     * @return bool|null
     */
    public function getIsCollective(): ?bool
    {
        return $this->isCollective;
    }
    /**
     * Set isCollective value
     * @param bool $isCollective
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setIsCollective(?bool $isCollective = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCollective) && !is_bool($isCollective)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCollective, true), gettype($isCollective)), __LINE__);
        }
        $this->isCollective = $isCollective;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * Get nettoAmount value
     * @return float|null
     */
    public function getNettoAmount(): ?float
    {
        return $this->nettoAmount;
    }
    /**
     * Set nettoAmount value
     * @param float $nettoAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setNettoAmount(?float $nettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nettoAmount) && !(is_float($nettoAmount) || is_numeric($nettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nettoAmount, true), gettype($nettoAmount)), __LINE__);
        }
        $this->nettoAmount = $nettoAmount;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
    /**
     * Get commissionMode value
     * @return int|null
     */
    public function getCommissionMode(): ?int
    {
        return $this->commissionMode;
    }
    /**
     * Set commissionMode value
     * @param int $commissionMode
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setCommissionMode(?int $commissionMode = null): self
    {
        // validation for constraint: int
        if (!is_null($commissionMode) && !(is_int($commissionMode) || ctype_digit($commissionMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commissionMode, true), gettype($commissionMode)), __LINE__);
        }
        $this->commissionMode = $commissionMode;
        
        return $this;
    }
    /**
     * Get entryRestAsProv value
     * @return bool|null
     */
    public function getEntryRestAsProv(): ?bool
    {
        return $this->entryRestAsProv;
    }
    /**
     * Set entryRestAsProv value
     * @param bool $entryRestAsProv
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setEntryRestAsProv(?bool $entryRestAsProv = null): self
    {
        // validation for constraint: boolean
        if (!is_null($entryRestAsProv) && !is_bool($entryRestAsProv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($entryRestAsProv, true), gettype($entryRestAsProv)), __LINE__);
        }
        $this->entryRestAsProv = $entryRestAsProv;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get inPackage value
     * @return bool|null
     */
    public function getInPackage(): ?bool
    {
        return $this->inPackage;
    }
    /**
     * Set inPackage value
     * @param bool $inPackage
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setInPackage(?bool $inPackage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inPackage) && !is_bool($inPackage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inPackage, true), gettype($inPackage)), __LINE__);
        }
        $this->inPackage = $inPackage;
        
        return $this;
    }
    /**
     * Get isInsurance value
     * @return bool|null
     */
    public function getIsInsurance(): ?bool
    {
        return $this->isInsurance;
    }
    /**
     * Set isInsurance value
     * @param bool $isInsurance
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setIsInsurance(?bool $isInsurance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInsurance) && !is_bool($isInsurance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInsurance, true), gettype($isInsurance)), __LINE__);
        }
        $this->isInsurance = $isInsurance;
        
        return $this;
    }
    /**
     * Get inkassoPrice value
     * @return float|null
     */
    public function getInkassoPrice(): ?float
    {
        return $this->inkassoPrice;
    }
    /**
     * Set inkassoPrice value
     * @param float $inkassoPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setInkassoPrice(?float $inkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($inkassoPrice) && !(is_float($inkassoPrice) || is_numeric($inkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkassoPrice, true), gettype($inkassoPrice)), __LINE__);
        }
        $this->inkassoPrice = $inkassoPrice;
        
        return $this;
    }
    /**
     * Get extId value
     * @return string|null
     */
    public function getExtId(): ?string
    {
        return $this->extId;
    }
    /**
     * Set extId value
     * @param string $extId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setExtId(?string $extId = null): self
    {
        // validation for constraint: string
        if (!is_null($extId) && !is_string($extId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extId, true), gettype($extId)), __LINE__);
        }
        $this->extId = $extId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * Get feeAmount value
     * @return float|null
     */
    public function getFeeAmount(): ?float
    {
        return $this->feeAmount;
    }
    /**
     * Set feeAmount value
     * @param float $feeAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setFeeAmount(?float $feeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($feeAmount) && !(is_float($feeAmount) || is_numeric($feeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeAmount, true), gettype($feeAmount)), __LINE__);
        }
        $this->feeAmount = $feeAmount;
        
        return $this;
    }
    /**
     * Get manualEntriesExist value
     * @return bool|null
     */
    public function getManualEntriesExist(): ?bool
    {
        return $this->manualEntriesExist;
    }
    /**
     * Set manualEntriesExist value
     * @param bool $manualEntriesExist
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setManualEntriesExist(?bool $manualEntriesExist = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manualEntriesExist) && !is_bool($manualEntriesExist)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manualEntriesExist, true), gettype($manualEntriesExist)), __LINE__);
        }
        $this->manualEntriesExist = $manualEntriesExist;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * Get foreignCurrency value
     * @return string|null
     */
    public function getForeignCurrency(): ?string
    {
        return $this->foreignCurrency;
    }
    /**
     * Set foreignCurrency value
     * @param string $foreignCurrency
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setForeignCurrency(?string $foreignCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignCurrency) && !is_string($foreignCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignCurrency, true), gettype($foreignCurrency)), __LINE__);
        }
        $this->foreignCurrency = $foreignCurrency;
        
        return $this;
    }
    /**
     * Get foreignCurrencyExchangeRate value
     * @return float|null
     */
    public function getForeignCurrencyExchangeRate(): ?float
    {
        return $this->foreignCurrencyExchangeRate;
    }
    /**
     * Set foreignCurrencyExchangeRate value
     * @param float $foreignCurrencyExchangeRate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setForeignCurrencyExchangeRate(?float $foreignCurrencyExchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignCurrencyExchangeRate) && !(is_float($foreignCurrencyExchangeRate) || is_numeric($foreignCurrencyExchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignCurrencyExchangeRate, true), gettype($foreignCurrencyExchangeRate)), __LINE__);
        }
        $this->foreignCurrencyExchangeRate = $foreignCurrencyExchangeRate;
        
        return $this;
    }
    /**
     * Get foreignCurrencyRateMasterData value
     * @return float|null
     */
    public function getForeignCurrencyRateMasterData(): ?float
    {
        return $this->foreignCurrencyRateMasterData;
    }
    /**
     * Set foreignCurrencyRateMasterData value
     * @param float $foreignCurrencyRateMasterData
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setForeignCurrencyRateMasterData(?float $foreignCurrencyRateMasterData = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignCurrencyRateMasterData) && !(is_float($foreignCurrencyRateMasterData) || is_numeric($foreignCurrencyRateMasterData))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignCurrencyRateMasterData, true), gettype($foreignCurrencyRateMasterData)), __LINE__);
        }
        $this->foreignCurrencyRateMasterData = $foreignCurrencyRateMasterData;
        
        return $this;
    }
    /**
     * Get foreignCurrencyLookupMethod value
     * @return int|null
     */
    public function getForeignCurrencyLookupMethod(): ?int
    {
        return $this->foreignCurrencyLookupMethod;
    }
    /**
     * Set foreignCurrencyLookupMethod value
     * @param int $foreignCurrencyLookupMethod
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setForeignCurrencyLookupMethod(?int $foreignCurrencyLookupMethod = null): self
    {
        // validation for constraint: int
        if (!is_null($foreignCurrencyLookupMethod) && !(is_int($foreignCurrencyLookupMethod) || ctype_digit($foreignCurrencyLookupMethod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($foreignCurrencyLookupMethod, true), gettype($foreignCurrencyLookupMethod)), __LINE__);
        }
        $this->foreignCurrencyLookupMethod = $foreignCurrencyLookupMethod;
        
        return $this;
    }
    /**
     * Get isForeignCreditor value
     * @return bool|null
     */
    public function getIsForeignCreditor(): ?bool
    {
        return $this->isForeignCreditor;
    }
    /**
     * Set isForeignCreditor value
     * @param bool $isForeignCreditor
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setIsForeignCreditor(?bool $isForeignCreditor = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isForeignCreditor) && !is_bool($isForeignCreditor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isForeignCreditor, true), gettype($isForeignCreditor)), __LINE__);
        }
        $this->isForeignCreditor = $isForeignCreditor;
        
        return $this;
    }
    /**
     * Get inkassoMode value
     * @return int|null
     */
    public function getInkassoMode(): ?int
    {
        return $this->inkassoMode;
    }
    /**
     * Set inkassoMode value
     * @param int $inkassoMode
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setInkassoMode(?int $inkassoMode = null): self
    {
        // validation for constraint: int
        if (!is_null($inkassoMode) && !(is_int($inkassoMode) || ctype_digit($inkassoMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($inkassoMode, true), gettype($inkassoMode)), __LINE__);
        }
        $this->inkassoMode = $inkassoMode;
        
        return $this;
    }
    /**
     * Get supplierDIAmount value
     * @return float|null
     */
    public function getSupplierDIAmount(): ?float
    {
        return $this->supplierDIAmount;
    }
    /**
     * Set supplierDIAmount value
     * @param float $supplierDIAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setSupplierDIAmount(?float $supplierDIAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierDIAmount) && !(is_float($supplierDIAmount) || is_numeric($supplierDIAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierDIAmount, true), gettype($supplierDIAmount)), __LINE__);
        }
        $this->supplierDIAmount = $supplierDIAmount;
        
        return $this;
    }
    /**
     * Get travelPrice value
     * @return float|null
     */
    public function getTravelPrice(): ?float
    {
        return $this->travelPrice;
    }
    /**
     * Set travelPrice value
     * @param float $travelPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setTravelPrice(?float $travelPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($travelPrice) && !(is_float($travelPrice) || is_numeric($travelPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($travelPrice, true), gettype($travelPrice)), __LINE__);
        }
        $this->travelPrice = $travelPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * Get travelitemDestination value
     * @return string|null
     */
    public function getTravelitemDestination(): ?string
    {
        return $this->travelitemDestination;
    }
    /**
     * Set travelitemDestination value
     * @param string $travelitemDestination
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setTravelitemDestination(?string $travelitemDestination = null): self
    {
        // validation for constraint: string
        if (!is_null($travelitemDestination) && !is_string($travelitemDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelitemDestination, true), gettype($travelitemDestination)), __LINE__);
        }
        $this->travelitemDestination = $travelitemDestination;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * Get isQrInvoiceTransfer value
     * @return bool|null
     */
    public function getIsQrInvoiceTransfer(): ?bool
    {
        return $this->isQrInvoiceTransfer;
    }
    /**
     * Set isQrInvoiceTransfer value
     * @param bool $isQrInvoiceTransfer
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
     */
    public function setIsQrInvoiceTransfer(?bool $isQrInvoiceTransfer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isQrInvoiceTransfer) && !is_bool($isQrInvoiceTransfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isQrInvoiceTransfer, true), gettype($isQrInvoiceTransfer)), __LINE__);
        }
        $this->isQrInvoiceTransfer = $isQrInvoiceTransfer;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionDTO
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
}
