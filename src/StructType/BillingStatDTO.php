<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingStatDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingStatDTO extends AbstractStructBase
{
    /**
     * The accrualAccount
     * @var string|null
     */
    protected ?string $accrualAccount = null;
    /**
     * The accrualCommissionAccount
     * @var string|null
     */
    protected ?string $accrualCommissionAccount = null;
    /**
     * The accrualCommissionValue
     * @var float|null
     */
    protected ?float $accrualCommissionValue = null;
    /**
     * The accrualValue
     * @var float|null
     */
    protected ?float $accrualValue = null;
    /**
     * The airlineBspCode
     * @var string|null
     */
    protected ?string $airlineBspCode = null;
    /**
     * The airlineCode
     * @var string|null
     */
    protected ?string $airlineCode = null;
    /**
     * The airlineName
     * @var string|null
     */
    protected ?string $airlineName = null;
    /**
     * The billingStatId
     * @var int|null
     */
    protected ?int $billingStatId = null;
    /**
     * The bookingClass
     * @var string|null
     */
    protected ?string $bookingClass = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The calculatedRevenue
     * @var float|null
     */
    protected ?float $calculatedRevenue = null;
    /**
     * The commissionAccount
     * @var string|null
     */
    protected ?string $commissionAccount = null;
    /**
     * The commissionValue
     * @var float|null
     */
    protected ?float $commissionValue = null;
    /**
     * The commissionVat
     * @var float|null
     */
    protected ?float $commissionVat = null;
    /**
     * The corporateDiscount
     * @var string|null
     */
    protected ?string $corporateDiscount = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The countryDescription
     * @var string|null
     */
    protected ?string $countryDescription = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The creditorNo
     * @var string|null
     */
    protected ?string $creditorNo = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The daysAdvPurchase
     * @var int|null
     */
    protected ?int $daysAdvPurchase = null;
    /**
     * The daysOfTravel
     * @var int|null
     */
    protected ?int $daysOfTravel = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The depositValue
     * @var float|null
     */
    protected ?float $depositValue = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The expectedPurchase
     * @var float|null
     */
    protected ?float $expectedPurchase = null;
    /**
     * The fareBase
     * @var string|null
     */
    protected ?string $fareBase = null;
    /**
     * The feeCode
     * @var string|null
     */
    protected ?string $feeCode = null;
    /**
     * The feeDescription
     * @var string|null
     */
    protected ?string $feeDescription = null;
    /**
     * The feeValue
     * @var float|null
     */
    protected ?float $feeValue = null;
    /**
     * The feeVat
     * @var float|null
     */
    protected ?float $feeVat = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The inkassoMode
     * @var string|null
     */
    protected ?string $inkassoMode = null;
    /**
     * The isDomestic
     * @var bool|null
     */
    protected ?bool $isDomestic = null;
    /**
     * The isFullVoid
     * @var bool|null
     */
    protected ?bool $isFullVoid = null;
    /**
     * The isVisible
     * @var bool|null
     */
    protected ?bool $isVisible = null;
    /**
     * The isVoidEntry
     * @var bool|null
     */
    protected ?bool $isVoidEntry = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The markupValue
     * @var float|null
     */
    protected ?float $markupValue = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The origin
     * @var string|null
     */
    protected ?string $origin = null;
    /**
     * The originCode
     * @var string|null
     */
    protected ?string $originCode = null;
    /**
     * The penalty
     * @var float|null
     */
    protected ?float $penalty = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The purchaseAccount
     * @var string|null
     */
    protected ?string $purchaseAccount = null;
    /**
     * The purchaseValue
     * @var float|null
     */
    protected ?float $purchaseValue = null;
    /**
     * The purchaseVat
     * @var float|null
     */
    protected ?float $purchaseVat = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The receiptNo
     * @var int|null
     */
    protected ?int $receiptNo = null;
    /**
     * The routing
     * @var string|null
     */
    protected ?string $routing = null;
    /**
     * The salesAccount
     * @var string|null
     */
    protected ?string $salesAccount = null;
    /**
     * The salesValue
     * @var float|null
     */
    protected ?float $salesValue = null;
    /**
     * The salesVat
     * @var float|null
     */
    protected ?float $salesVat = null;
    /**
     * The savingsAccepted
     * @var float|null
     */
    protected ?float $savingsAccepted = null;
    /**
     * The savingsCode
     * @var string|null
     */
    protected ?string $savingsCode = null;
    /**
     * The savingsHigh
     * @var float|null
     */
    protected ?float $savingsHigh = null;
    /**
     * The savingsLow
     * @var float|null
     */
    protected ?float $savingsLow = null;
    /**
     * The savingsMissed
     * @var float|null
     */
    protected ?float $savingsMissed = null;
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
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The supplierAccount
     * @var string|null
     */
    protected ?string $supplierAccount = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The supplierName
     * @var string|null
     */
    protected ?string $supplierName = null;
    /**
     * The taxes
     * @var float|null
     */
    protected ?float $taxes = null;
    /**
     * The ticketNo
     * @var string|null
     */
    protected ?string $ticketNo = null;
    /**
     * The tourcode
     * @var string|null
     */
    protected ?string $tourcode = null;
    /**
     * The travellerName
     * @var string|null
     */
    protected ?string $travellerName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for BillingStatDTO
     * @uses BillingStatDTO::setAccrualAccount()
     * @uses BillingStatDTO::setAccrualCommissionAccount()
     * @uses BillingStatDTO::setAccrualCommissionValue()
     * @uses BillingStatDTO::setAccrualValue()
     * @uses BillingStatDTO::setAirlineBspCode()
     * @uses BillingStatDTO::setAirlineCode()
     * @uses BillingStatDTO::setAirlineName()
     * @uses BillingStatDTO::setBillingStatId()
     * @uses BillingStatDTO::setBookingClass()
     * @uses BillingStatDTO::setBookingDate()
     * @uses BillingStatDTO::setBookingId()
     * @uses BillingStatDTO::setCalculatedRevenue()
     * @uses BillingStatDTO::setCommissionAccount()
     * @uses BillingStatDTO::setCommissionValue()
     * @uses BillingStatDTO::setCommissionVat()
     * @uses BillingStatDTO::setCorporateDiscount()
     * @uses BillingStatDTO::setCostCentre()
     * @uses BillingStatDTO::setCountry()
     * @uses BillingStatDTO::setCountryDescription()
     * @uses BillingStatDTO::setCreationUser()
     * @uses BillingStatDTO::setCreditorNo()
     * @uses BillingStatDTO::setCustomerId()
     * @uses BillingStatDTO::setCustomerName()
     * @uses BillingStatDTO::setDaysAdvPurchase()
     * @uses BillingStatDTO::setDaysOfTravel()
     * @uses BillingStatDTO::setDebitorNo()
     * @uses BillingStatDTO::setDepositValue()
     * @uses BillingStatDTO::setDestination()
     * @uses BillingStatDTO::setDestinationCode()
     * @uses BillingStatDTO::setDocumentId()
     * @uses BillingStatDTO::setEndTravel()
     * @uses BillingStatDTO::setExpectedPurchase()
     * @uses BillingStatDTO::setFareBase()
     * @uses BillingStatDTO::setFeeCode()
     * @uses BillingStatDTO::setFeeDescription()
     * @uses BillingStatDTO::setFeeValue()
     * @uses BillingStatDTO::setFeeVat()
     * @uses BillingStatDTO::setFlightNo()
     * @uses BillingStatDTO::setGrantedRevenue()
     * @uses BillingStatDTO::setInkassoMode()
     * @uses BillingStatDTO::setIsDomestic()
     * @uses BillingStatDTO::setIsFullVoid()
     * @uses BillingStatDTO::setIsVisible()
     * @uses BillingStatDTO::setIsVoidEntry()
     * @uses BillingStatDTO::setItemId()
     * @uses BillingStatDTO::setItemType()
     * @uses BillingStatDTO::setMarkupValue()
     * @uses BillingStatDTO::setOrderNo()
     * @uses BillingStatDTO::setOrigin()
     * @uses BillingStatDTO::setOriginCode()
     * @uses BillingStatDTO::setPenalty()
     * @uses BillingStatDTO::setProductType()
     * @uses BillingStatDTO::setPurchaseAccount()
     * @uses BillingStatDTO::setPurchaseValue()
     * @uses BillingStatDTO::setPurchaseVat()
     * @uses BillingStatDTO::setReceiptDate()
     * @uses BillingStatDTO::setReceiptNo()
     * @uses BillingStatDTO::setRouting()
     * @uses BillingStatDTO::setSalesAccount()
     * @uses BillingStatDTO::setSalesValue()
     * @uses BillingStatDTO::setSalesVat()
     * @uses BillingStatDTO::setSavingsAccepted()
     * @uses BillingStatDTO::setSavingsCode()
     * @uses BillingStatDTO::setSavingsHigh()
     * @uses BillingStatDTO::setSavingsLow()
     * @uses BillingStatDTO::setSavingsMissed()
     * @uses BillingStatDTO::setSettlementType()
     * @uses BillingStatDTO::setSettlementTypeDebit()
     * @uses BillingStatDTO::setStartTravel()
     * @uses BillingStatDTO::setStatus()
     * @uses BillingStatDTO::setSupplierAccount()
     * @uses BillingStatDTO::setSupplierId()
     * @uses BillingStatDTO::setSupplierName()
     * @uses BillingStatDTO::setTaxes()
     * @uses BillingStatDTO::setTicketNo()
     * @uses BillingStatDTO::setTourcode()
     * @uses BillingStatDTO::setTravellerName()
     * @uses BillingStatDTO::setUnitName()
     * @param string $accrualAccount
     * @param string $accrualCommissionAccount
     * @param float $accrualCommissionValue
     * @param float $accrualValue
     * @param string $airlineBspCode
     * @param string $airlineCode
     * @param string $airlineName
     * @param int $billingStatId
     * @param string $bookingClass
     * @param string $bookingDate
     * @param string $bookingId
     * @param float $calculatedRevenue
     * @param string $commissionAccount
     * @param float $commissionValue
     * @param float $commissionVat
     * @param string $corporateDiscount
     * @param string $costCentre
     * @param string $country
     * @param string $countryDescription
     * @param int $creationUser
     * @param string $creditorNo
     * @param int $customerId
     * @param string $customerName
     * @param int $daysAdvPurchase
     * @param int $daysOfTravel
     * @param string $debitorNo
     * @param float $depositValue
     * @param string $destination
     * @param string $destinationCode
     * @param int $documentId
     * @param string $endTravel
     * @param float $expectedPurchase
     * @param string $fareBase
     * @param string $feeCode
     * @param string $feeDescription
     * @param float $feeValue
     * @param float $feeVat
     * @param string $flightNo
     * @param float $grantedRevenue
     * @param string $inkassoMode
     * @param bool $isDomestic
     * @param bool $isFullVoid
     * @param bool $isVisible
     * @param bool $isVoidEntry
     * @param int $itemId
     * @param string $itemType
     * @param float $markupValue
     * @param int $orderNo
     * @param string $origin
     * @param string $originCode
     * @param float $penalty
     * @param string $productType
     * @param string $purchaseAccount
     * @param float $purchaseValue
     * @param float $purchaseVat
     * @param string $receiptDate
     * @param int $receiptNo
     * @param string $routing
     * @param string $salesAccount
     * @param float $salesValue
     * @param float $salesVat
     * @param float $savingsAccepted
     * @param string $savingsCode
     * @param float $savingsHigh
     * @param float $savingsLow
     * @param float $savingsMissed
     * @param string $settlementType
     * @param string $settlementTypeDebit
     * @param string $startTravel
     * @param string $status
     * @param string $supplierAccount
     * @param string $supplierId
     * @param string $supplierName
     * @param float $taxes
     * @param string $ticketNo
     * @param string $tourcode
     * @param string $travellerName
     * @param string $unitName
     */
    public function __construct(?string $accrualAccount = null, ?string $accrualCommissionAccount = null, ?float $accrualCommissionValue = null, ?float $accrualValue = null, ?string $airlineBspCode = null, ?string $airlineCode = null, ?string $airlineName = null, ?int $billingStatId = null, ?string $bookingClass = null, ?string $bookingDate = null, ?string $bookingId = null, ?float $calculatedRevenue = null, ?string $commissionAccount = null, ?float $commissionValue = null, ?float $commissionVat = null, ?string $corporateDiscount = null, ?string $costCentre = null, ?string $country = null, ?string $countryDescription = null, ?int $creationUser = null, ?string $creditorNo = null, ?int $customerId = null, ?string $customerName = null, ?int $daysAdvPurchase = null, ?int $daysOfTravel = null, ?string $debitorNo = null, ?float $depositValue = null, ?string $destination = null, ?string $destinationCode = null, ?int $documentId = null, ?string $endTravel = null, ?float $expectedPurchase = null, ?string $fareBase = null, ?string $feeCode = null, ?string $feeDescription = null, ?float $feeValue = null, ?float $feeVat = null, ?string $flightNo = null, ?float $grantedRevenue = null, ?string $inkassoMode = null, ?bool $isDomestic = null, ?bool $isFullVoid = null, ?bool $isVisible = null, ?bool $isVoidEntry = null, ?int $itemId = null, ?string $itemType = null, ?float $markupValue = null, ?int $orderNo = null, ?string $origin = null, ?string $originCode = null, ?float $penalty = null, ?string $productType = null, ?string $purchaseAccount = null, ?float $purchaseValue = null, ?float $purchaseVat = null, ?string $receiptDate = null, ?int $receiptNo = null, ?string $routing = null, ?string $salesAccount = null, ?float $salesValue = null, ?float $salesVat = null, ?float $savingsAccepted = null, ?string $savingsCode = null, ?float $savingsHigh = null, ?float $savingsLow = null, ?float $savingsMissed = null, ?string $settlementType = null, ?string $settlementTypeDebit = null, ?string $startTravel = null, ?string $status = null, ?string $supplierAccount = null, ?string $supplierId = null, ?string $supplierName = null, ?float $taxes = null, ?string $ticketNo = null, ?string $tourcode = null, ?string $travellerName = null, ?string $unitName = null)
    {
        $this
            ->setAccrualAccount($accrualAccount)
            ->setAccrualCommissionAccount($accrualCommissionAccount)
            ->setAccrualCommissionValue($accrualCommissionValue)
            ->setAccrualValue($accrualValue)
            ->setAirlineBspCode($airlineBspCode)
            ->setAirlineCode($airlineCode)
            ->setAirlineName($airlineName)
            ->setBillingStatId($billingStatId)
            ->setBookingClass($bookingClass)
            ->setBookingDate($bookingDate)
            ->setBookingId($bookingId)
            ->setCalculatedRevenue($calculatedRevenue)
            ->setCommissionAccount($commissionAccount)
            ->setCommissionValue($commissionValue)
            ->setCommissionVat($commissionVat)
            ->setCorporateDiscount($corporateDiscount)
            ->setCostCentre($costCentre)
            ->setCountry($country)
            ->setCountryDescription($countryDescription)
            ->setCreationUser($creationUser)
            ->setCreditorNo($creditorNo)
            ->setCustomerId($customerId)
            ->setCustomerName($customerName)
            ->setDaysAdvPurchase($daysAdvPurchase)
            ->setDaysOfTravel($daysOfTravel)
            ->setDebitorNo($debitorNo)
            ->setDepositValue($depositValue)
            ->setDestination($destination)
            ->setDestinationCode($destinationCode)
            ->setDocumentId($documentId)
            ->setEndTravel($endTravel)
            ->setExpectedPurchase($expectedPurchase)
            ->setFareBase($fareBase)
            ->setFeeCode($feeCode)
            ->setFeeDescription($feeDescription)
            ->setFeeValue($feeValue)
            ->setFeeVat($feeVat)
            ->setFlightNo($flightNo)
            ->setGrantedRevenue($grantedRevenue)
            ->setInkassoMode($inkassoMode)
            ->setIsDomestic($isDomestic)
            ->setIsFullVoid($isFullVoid)
            ->setIsVisible($isVisible)
            ->setIsVoidEntry($isVoidEntry)
            ->setItemId($itemId)
            ->setItemType($itemType)
            ->setMarkupValue($markupValue)
            ->setOrderNo($orderNo)
            ->setOrigin($origin)
            ->setOriginCode($originCode)
            ->setPenalty($penalty)
            ->setProductType($productType)
            ->setPurchaseAccount($purchaseAccount)
            ->setPurchaseValue($purchaseValue)
            ->setPurchaseVat($purchaseVat)
            ->setReceiptDate($receiptDate)
            ->setReceiptNo($receiptNo)
            ->setRouting($routing)
            ->setSalesAccount($salesAccount)
            ->setSalesValue($salesValue)
            ->setSalesVat($salesVat)
            ->setSavingsAccepted($savingsAccepted)
            ->setSavingsCode($savingsCode)
            ->setSavingsHigh($savingsHigh)
            ->setSavingsLow($savingsLow)
            ->setSavingsMissed($savingsMissed)
            ->setSettlementType($settlementType)
            ->setSettlementTypeDebit($settlementTypeDebit)
            ->setStartTravel($startTravel)
            ->setStatus($status)
            ->setSupplierAccount($supplierAccount)
            ->setSupplierId($supplierId)
            ->setSupplierName($supplierName)
            ->setTaxes($taxes)
            ->setTicketNo($ticketNo)
            ->setTourcode($tourcode)
            ->setTravellerName($travellerName)
            ->setUnitName($unitName);
    }
    /**
     * Get accrualAccount value
     * @return string|null
     */
    public function getAccrualAccount(): ?string
    {
        return $this->accrualAccount;
    }
    /**
     * Set accrualAccount value
     * @param string $accrualAccount
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setAccrualAccount(?string $accrualAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($accrualAccount) && !is_string($accrualAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accrualAccount, true), gettype($accrualAccount)), __LINE__);
        }
        $this->accrualAccount = $accrualAccount;
        
        return $this;
    }
    /**
     * Get accrualCommissionAccount value
     * @return string|null
     */
    public function getAccrualCommissionAccount(): ?string
    {
        return $this->accrualCommissionAccount;
    }
    /**
     * Set accrualCommissionAccount value
     * @param string $accrualCommissionAccount
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setAccrualCommissionAccount(?string $accrualCommissionAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($accrualCommissionAccount) && !is_string($accrualCommissionAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accrualCommissionAccount, true), gettype($accrualCommissionAccount)), __LINE__);
        }
        $this->accrualCommissionAccount = $accrualCommissionAccount;
        
        return $this;
    }
    /**
     * Get accrualCommissionValue value
     * @return float|null
     */
    public function getAccrualCommissionValue(): ?float
    {
        return $this->accrualCommissionValue;
    }
    /**
     * Set accrualCommissionValue value
     * @param float $accrualCommissionValue
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setAccrualCommissionValue(?float $accrualCommissionValue = null): self
    {
        // validation for constraint: float
        if (!is_null($accrualCommissionValue) && !(is_float($accrualCommissionValue) || is_numeric($accrualCommissionValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($accrualCommissionValue, true), gettype($accrualCommissionValue)), __LINE__);
        }
        $this->accrualCommissionValue = $accrualCommissionValue;
        
        return $this;
    }
    /**
     * Get accrualValue value
     * @return float|null
     */
    public function getAccrualValue(): ?float
    {
        return $this->accrualValue;
    }
    /**
     * Set accrualValue value
     * @param float $accrualValue
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setAccrualValue(?float $accrualValue = null): self
    {
        // validation for constraint: float
        if (!is_null($accrualValue) && !(is_float($accrualValue) || is_numeric($accrualValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($accrualValue, true), gettype($accrualValue)), __LINE__);
        }
        $this->accrualValue = $accrualValue;
        
        return $this;
    }
    /**
     * Get airlineBspCode value
     * @return string|null
     */
    public function getAirlineBspCode(): ?string
    {
        return $this->airlineBspCode;
    }
    /**
     * Set airlineBspCode value
     * @param string $airlineBspCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setAirlineBspCode(?string $airlineBspCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineBspCode) && !is_string($airlineBspCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineBspCode, true), gettype($airlineBspCode)), __LINE__);
        }
        $this->airlineBspCode = $airlineBspCode;
        
        return $this;
    }
    /**
     * Get airlineCode value
     * @return string|null
     */
    public function getAirlineCode(): ?string
    {
        return $this->airlineCode;
    }
    /**
     * Set airlineCode value
     * @param string $airlineCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setAirlineCode(?string $airlineCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineCode, true), gettype($airlineCode)), __LINE__);
        }
        $this->airlineCode = $airlineCode;
        
        return $this;
    }
    /**
     * Get airlineName value
     * @return string|null
     */
    public function getAirlineName(): ?string
    {
        return $this->airlineName;
    }
    /**
     * Set airlineName value
     * @param string $airlineName
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setAirlineName(?string $airlineName = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineName) && !is_string($airlineName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineName, true), gettype($airlineName)), __LINE__);
        }
        $this->airlineName = $airlineName;
        
        return $this;
    }
    /**
     * Get billingStatId value
     * @return int|null
     */
    public function getBillingStatId(): ?int
    {
        return $this->billingStatId;
    }
    /**
     * Set billingStatId value
     * @param int $billingStatId
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setBillingStatId(?int $billingStatId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingStatId) && !(is_int($billingStatId) || ctype_digit($billingStatId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingStatId, true), gettype($billingStatId)), __LINE__);
        }
        $this->billingStatId = $billingStatId;
        
        return $this;
    }
    /**
     * Get bookingClass value
     * @return string|null
     */
    public function getBookingClass(): ?string
    {
        return $this->bookingClass;
    }
    /**
     * Set bookingClass value
     * @param string $bookingClass
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setBookingClass(?string $bookingClass = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingClass) && !is_string($bookingClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingClass, true), gettype($bookingClass)), __LINE__);
        }
        $this->bookingClass = $bookingClass;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * Get commissionAccount value
     * @return string|null
     */
    public function getCommissionAccount(): ?string
    {
        return $this->commissionAccount;
    }
    /**
     * Set commissionAccount value
     * @param string $commissionAccount
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setCommissionAccount(?string $commissionAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionAccount) && !is_string($commissionAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionAccount, true), gettype($commissionAccount)), __LINE__);
        }
        $this->commissionAccount = $commissionAccount;
        
        return $this;
    }
    /**
     * Get commissionValue value
     * @return float|null
     */
    public function getCommissionValue(): ?float
    {
        return $this->commissionValue;
    }
    /**
     * Set commissionValue value
     * @param float $commissionValue
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setCommissionValue(?float $commissionValue = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionValue) && !(is_float($commissionValue) || is_numeric($commissionValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionValue, true), gettype($commissionValue)), __LINE__);
        }
        $this->commissionValue = $commissionValue;
        
        return $this;
    }
    /**
     * Get commissionVat value
     * @return float|null
     */
    public function getCommissionVat(): ?float
    {
        return $this->commissionVat;
    }
    /**
     * Set commissionVat value
     * @param float $commissionVat
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setCommissionVat(?float $commissionVat = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionVat) && !(is_float($commissionVat) || is_numeric($commissionVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionVat, true), gettype($commissionVat)), __LINE__);
        }
        $this->commissionVat = $commissionVat;
        
        return $this;
    }
    /**
     * Get corporateDiscount value
     * @return string|null
     */
    public function getCorporateDiscount(): ?string
    {
        return $this->corporateDiscount;
    }
    /**
     * Set corporateDiscount value
     * @param string $corporateDiscount
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setCorporateDiscount(?string $corporateDiscount = null): self
    {
        // validation for constraint: string
        if (!is_null($corporateDiscount) && !is_string($corporateDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporateDiscount, true), gettype($corporateDiscount)), __LINE__);
        }
        $this->corporateDiscount = $corporateDiscount;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get countryDescription value
     * @return string|null
     */
    public function getCountryDescription(): ?string
    {
        return $this->countryDescription;
    }
    /**
     * Set countryDescription value
     * @param string $countryDescription
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setCountryDescription(?string $countryDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($countryDescription) && !is_string($countryDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryDescription, true), gettype($countryDescription)), __LINE__);
        }
        $this->countryDescription = $countryDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * Get creditorNo value
     * @return string|null
     */
    public function getCreditorNo(): ?string
    {
        return $this->creditorNo;
    }
    /**
     * Set creditorNo value
     * @param string $creditorNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setCreditorNo(?string $creditorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorNo) && !is_string($creditorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorNo, true), gettype($creditorNo)), __LINE__);
        }
        $this->creditorNo = $creditorNo;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get daysAdvPurchase value
     * @return int|null
     */
    public function getDaysAdvPurchase(): ?int
    {
        return $this->daysAdvPurchase;
    }
    /**
     * Set daysAdvPurchase value
     * @param int $daysAdvPurchase
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setDaysAdvPurchase(?int $daysAdvPurchase = null): self
    {
        // validation for constraint: int
        if (!is_null($daysAdvPurchase) && !(is_int($daysAdvPurchase) || ctype_digit($daysAdvPurchase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysAdvPurchase, true), gettype($daysAdvPurchase)), __LINE__);
        }
        $this->daysAdvPurchase = $daysAdvPurchase;
        
        return $this;
    }
    /**
     * Get daysOfTravel value
     * @return int|null
     */
    public function getDaysOfTravel(): ?int
    {
        return $this->daysOfTravel;
    }
    /**
     * Set daysOfTravel value
     * @param int $daysOfTravel
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setDaysOfTravel(?int $daysOfTravel = null): self
    {
        // validation for constraint: int
        if (!is_null($daysOfTravel) && !(is_int($daysOfTravel) || ctype_digit($daysOfTravel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysOfTravel, true), gettype($daysOfTravel)), __LINE__);
        }
        $this->daysOfTravel = $daysOfTravel;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get depositValue value
     * @return float|null
     */
    public function getDepositValue(): ?float
    {
        return $this->depositValue;
    }
    /**
     * Set depositValue value
     * @param float $depositValue
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setDepositValue(?float $depositValue = null): self
    {
        // validation for constraint: float
        if (!is_null($depositValue) && !(is_float($depositValue) || is_numeric($depositValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositValue, true), gettype($depositValue)), __LINE__);
        }
        $this->depositValue = $depositValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * Get destinationCode value
     * @return string|null
     */
    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }
    /**
     * Set destinationCode value
     * @param string $destinationCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * Get expectedPurchase value
     * @return float|null
     */
    public function getExpectedPurchase(): ?float
    {
        return $this->expectedPurchase;
    }
    /**
     * Set expectedPurchase value
     * @param float $expectedPurchase
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setExpectedPurchase(?float $expectedPurchase = null): self
    {
        // validation for constraint: float
        if (!is_null($expectedPurchase) && !(is_float($expectedPurchase) || is_numeric($expectedPurchase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($expectedPurchase, true), gettype($expectedPurchase)), __LINE__);
        }
        $this->expectedPurchase = $expectedPurchase;
        
        return $this;
    }
    /**
     * Get fareBase value
     * @return string|null
     */
    public function getFareBase(): ?string
    {
        return $this->fareBase;
    }
    /**
     * Set fareBase value
     * @param string $fareBase
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setFareBase(?string $fareBase = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBase) && !is_string($fareBase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBase, true), gettype($fareBase)), __LINE__);
        }
        $this->fareBase = $fareBase;
        
        return $this;
    }
    /**
     * Get feeCode value
     * @return string|null
     */
    public function getFeeCode(): ?string
    {
        return $this->feeCode;
    }
    /**
     * Set feeCode value
     * @param string $feeCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setFeeCode(?string $feeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCode, true), gettype($feeCode)), __LINE__);
        }
        $this->feeCode = $feeCode;
        
        return $this;
    }
    /**
     * Get feeDescription value
     * @return string|null
     */
    public function getFeeDescription(): ?string
    {
        return $this->feeDescription;
    }
    /**
     * Set feeDescription value
     * @param string $feeDescription
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setFeeDescription(?string $feeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($feeDescription) && !is_string($feeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeDescription, true), gettype($feeDescription)), __LINE__);
        }
        $this->feeDescription = $feeDescription;
        
        return $this;
    }
    /**
     * Get feeValue value
     * @return float|null
     */
    public function getFeeValue(): ?float
    {
        return $this->feeValue;
    }
    /**
     * Set feeValue value
     * @param float $feeValue
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setFeeValue(?float $feeValue = null): self
    {
        // validation for constraint: float
        if (!is_null($feeValue) && !(is_float($feeValue) || is_numeric($feeValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeValue, true), gettype($feeValue)), __LINE__);
        }
        $this->feeValue = $feeValue;
        
        return $this;
    }
    /**
     * Get feeVat value
     * @return float|null
     */
    public function getFeeVat(): ?float
    {
        return $this->feeVat;
    }
    /**
     * Set feeVat value
     * @param float $feeVat
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setFeeVat(?float $feeVat = null): self
    {
        // validation for constraint: float
        if (!is_null($feeVat) && !(is_float($feeVat) || is_numeric($feeVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeVat, true), gettype($feeVat)), __LINE__);
        }
        $this->feeVat = $feeVat;
        
        return $this;
    }
    /**
     * Get flightNo value
     * @return string|null
     */
    public function getFlightNo(): ?string
    {
        return $this->flightNo;
    }
    /**
     * Set flightNo value
     * @param string $flightNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setFlightNo(?string $flightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNo) && !is_string($flightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNo, true), gettype($flightNo)), __LINE__);
        }
        $this->flightNo = $flightNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * Get inkassoMode value
     * @return string|null
     */
    public function getInkassoMode(): ?string
    {
        return $this->inkassoMode;
    }
    /**
     * Set inkassoMode value
     * @param string $inkassoMode
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setInkassoMode(?string $inkassoMode = null): self
    {
        // validation for constraint: string
        if (!is_null($inkassoMode) && !is_string($inkassoMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkassoMode, true), gettype($inkassoMode)), __LINE__);
        }
        $this->inkassoMode = $inkassoMode;
        
        return $this;
    }
    /**
     * Get isDomestic value
     * @return bool|null
     */
    public function getIsDomestic(): ?bool
    {
        return $this->isDomestic;
    }
    /**
     * Set isDomestic value
     * @param bool $isDomestic
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setIsDomestic(?bool $isDomestic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDomestic) && !is_bool($isDomestic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDomestic, true), gettype($isDomestic)), __LINE__);
        }
        $this->isDomestic = $isDomestic;
        
        return $this;
    }
    /**
     * Get isFullVoid value
     * @return bool|null
     */
    public function getIsFullVoid(): ?bool
    {
        return $this->isFullVoid;
    }
    /**
     * Set isFullVoid value
     * @param bool $isFullVoid
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setIsFullVoid(?bool $isFullVoid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFullVoid) && !is_bool($isFullVoid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFullVoid, true), gettype($isFullVoid)), __LINE__);
        }
        $this->isFullVoid = $isFullVoid;
        
        return $this;
    }
    /**
     * Get isVisible value
     * @return bool|null
     */
    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }
    /**
     * Set isVisible value
     * @param bool $isVisible
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setIsVisible(?bool $isVisible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVisible) && !is_bool($isVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVisible, true), gettype($isVisible)), __LINE__);
        }
        $this->isVisible = $isVisible;
        
        return $this;
    }
    /**
     * Get isVoidEntry value
     * @return bool|null
     */
    public function getIsVoidEntry(): ?bool
    {
        return $this->isVoidEntry;
    }
    /**
     * Set isVoidEntry value
     * @param bool $isVoidEntry
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setIsVoidEntry(?bool $isVoidEntry = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoidEntry) && !is_bool($isVoidEntry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoidEntry, true), gettype($isVoidEntry)), __LINE__);
        }
        $this->isVoidEntry = $isVoidEntry;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * Get markupValue value
     * @return float|null
     */
    public function getMarkupValue(): ?float
    {
        return $this->markupValue;
    }
    /**
     * Set markupValue value
     * @param float $markupValue
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setMarkupValue(?float $markupValue = null): self
    {
        // validation for constraint: float
        if (!is_null($markupValue) && !(is_float($markupValue) || is_numeric($markupValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($markupValue, true), gettype($markupValue)), __LINE__);
        }
        $this->markupValue = $markupValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * Get origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param string $origin
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        
        return $this;
    }
    /**
     * Get originCode value
     * @return string|null
     */
    public function getOriginCode(): ?string
    {
        return $this->originCode;
    }
    /**
     * Set originCode value
     * @param string $originCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setOriginCode(?string $originCode = null): self
    {
        // validation for constraint: string
        if (!is_null($originCode) && !is_string($originCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originCode, true), gettype($originCode)), __LINE__);
        }
        $this->originCode = $originCode;
        
        return $this;
    }
    /**
     * Get penalty value
     * @return float|null
     */
    public function getPenalty(): ?float
    {
        return $this->penalty;
    }
    /**
     * Set penalty value
     * @param float $penalty
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setPenalty(?float $penalty = null): self
    {
        // validation for constraint: float
        if (!is_null($penalty) && !(is_float($penalty) || is_numeric($penalty))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($penalty, true), gettype($penalty)), __LINE__);
        }
        $this->penalty = $penalty;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get purchaseAccount value
     * @return string|null
     */
    public function getPurchaseAccount(): ?string
    {
        return $this->purchaseAccount;
    }
    /**
     * Set purchaseAccount value
     * @param string $purchaseAccount
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setPurchaseAccount(?string $purchaseAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($purchaseAccount) && !is_string($purchaseAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purchaseAccount, true), gettype($purchaseAccount)), __LINE__);
        }
        $this->purchaseAccount = $purchaseAccount;
        
        return $this;
    }
    /**
     * Get purchaseValue value
     * @return float|null
     */
    public function getPurchaseValue(): ?float
    {
        return $this->purchaseValue;
    }
    /**
     * Set purchaseValue value
     * @param float $purchaseValue
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setPurchaseValue(?float $purchaseValue = null): self
    {
        // validation for constraint: float
        if (!is_null($purchaseValue) && !(is_float($purchaseValue) || is_numeric($purchaseValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($purchaseValue, true), gettype($purchaseValue)), __LINE__);
        }
        $this->purchaseValue = $purchaseValue;
        
        return $this;
    }
    /**
     * Get purchaseVat value
     * @return float|null
     */
    public function getPurchaseVat(): ?float
    {
        return $this->purchaseVat;
    }
    /**
     * Set purchaseVat value
     * @param float $purchaseVat
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setPurchaseVat(?float $purchaseVat = null): self
    {
        // validation for constraint: float
        if (!is_null($purchaseVat) && !(is_float($purchaseVat) || is_numeric($purchaseVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($purchaseVat, true), gettype($purchaseVat)), __LINE__);
        }
        $this->purchaseVat = $purchaseVat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * @return int|null
     */
    public function getReceiptNo(): ?int
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param int $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setReceiptNo(?int $receiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptNo) && !(is_int($receiptNo) || ctype_digit($receiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get routing value
     * @return string|null
     */
    public function getRouting(): ?string
    {
        return $this->routing;
    }
    /**
     * Set routing value
     * @param string $routing
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setRouting(?string $routing = null): self
    {
        // validation for constraint: string
        if (!is_null($routing) && !is_string($routing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routing, true), gettype($routing)), __LINE__);
        }
        $this->routing = $routing;
        
        return $this;
    }
    /**
     * Get salesAccount value
     * @return string|null
     */
    public function getSalesAccount(): ?string
    {
        return $this->salesAccount;
    }
    /**
     * Set salesAccount value
     * @param string $salesAccount
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setSalesAccount(?string $salesAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($salesAccount) && !is_string($salesAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salesAccount, true), gettype($salesAccount)), __LINE__);
        }
        $this->salesAccount = $salesAccount;
        
        return $this;
    }
    /**
     * Get salesValue value
     * @return float|null
     */
    public function getSalesValue(): ?float
    {
        return $this->salesValue;
    }
    /**
     * Set salesValue value
     * @param float $salesValue
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setSalesValue(?float $salesValue = null): self
    {
        // validation for constraint: float
        if (!is_null($salesValue) && !(is_float($salesValue) || is_numeric($salesValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salesValue, true), gettype($salesValue)), __LINE__);
        }
        $this->salesValue = $salesValue;
        
        return $this;
    }
    /**
     * Get salesVat value
     * @return float|null
     */
    public function getSalesVat(): ?float
    {
        return $this->salesVat;
    }
    /**
     * Set salesVat value
     * @param float $salesVat
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setSalesVat(?float $salesVat = null): self
    {
        // validation for constraint: float
        if (!is_null($salesVat) && !(is_float($salesVat) || is_numeric($salesVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salesVat, true), gettype($salesVat)), __LINE__);
        }
        $this->salesVat = $salesVat;
        
        return $this;
    }
    /**
     * Get savingsAccepted value
     * @return float|null
     */
    public function getSavingsAccepted(): ?float
    {
        return $this->savingsAccepted;
    }
    /**
     * Set savingsAccepted value
     * @param float $savingsAccepted
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setSavingsAccepted(?float $savingsAccepted = null): self
    {
        // validation for constraint: float
        if (!is_null($savingsAccepted) && !(is_float($savingsAccepted) || is_numeric($savingsAccepted))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($savingsAccepted, true), gettype($savingsAccepted)), __LINE__);
        }
        $this->savingsAccepted = $savingsAccepted;
        
        return $this;
    }
    /**
     * Get savingsCode value
     * @return string|null
     */
    public function getSavingsCode(): ?string
    {
        return $this->savingsCode;
    }
    /**
     * Set savingsCode value
     * @param string $savingsCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setSavingsCode(?string $savingsCode = null): self
    {
        // validation for constraint: string
        if (!is_null($savingsCode) && !is_string($savingsCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($savingsCode, true), gettype($savingsCode)), __LINE__);
        }
        $this->savingsCode = $savingsCode;
        
        return $this;
    }
    /**
     * Get savingsHigh value
     * @return float|null
     */
    public function getSavingsHigh(): ?float
    {
        return $this->savingsHigh;
    }
    /**
     * Set savingsHigh value
     * @param float $savingsHigh
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setSavingsHigh(?float $savingsHigh = null): self
    {
        // validation for constraint: float
        if (!is_null($savingsHigh) && !(is_float($savingsHigh) || is_numeric($savingsHigh))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($savingsHigh, true), gettype($savingsHigh)), __LINE__);
        }
        $this->savingsHigh = $savingsHigh;
        
        return $this;
    }
    /**
     * Get savingsLow value
     * @return float|null
     */
    public function getSavingsLow(): ?float
    {
        return $this->savingsLow;
    }
    /**
     * Set savingsLow value
     * @param float $savingsLow
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setSavingsLow(?float $savingsLow = null): self
    {
        // validation for constraint: float
        if (!is_null($savingsLow) && !(is_float($savingsLow) || is_numeric($savingsLow))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($savingsLow, true), gettype($savingsLow)), __LINE__);
        }
        $this->savingsLow = $savingsLow;
        
        return $this;
    }
    /**
     * Get savingsMissed value
     * @return float|null
     */
    public function getSavingsMissed(): ?float
    {
        return $this->savingsMissed;
    }
    /**
     * Set savingsMissed value
     * @param float $savingsMissed
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setSavingsMissed(?float $savingsMissed = null): self
    {
        // validation for constraint: float
        if (!is_null($savingsMissed) && !(is_float($savingsMissed) || is_numeric($savingsMissed))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($savingsMissed, true), gettype($savingsMissed)), __LINE__);
        }
        $this->savingsMissed = $savingsMissed;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * Get supplierAccount value
     * @return string|null
     */
    public function getSupplierAccount(): ?string
    {
        return $this->supplierAccount;
    }
    /**
     * Set supplierAccount value
     * @param string $supplierAccount
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setSupplierAccount(?string $supplierAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierAccount) && !is_string($supplierAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierAccount, true), gettype($supplierAccount)), __LINE__);
        }
        $this->supplierAccount = $supplierAccount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
     * Get supplierName value
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }
    /**
     * Set supplierName value
     * @param string $supplierName
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setSupplierName(?string $supplierName = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierName, true), gettype($supplierName)), __LINE__);
        }
        $this->supplierName = $supplierName;
        
        return $this;
    }
    /**
     * Get taxes value
     * @return float|null
     */
    public function getTaxes(): ?float
    {
        return $this->taxes;
    }
    /**
     * Set taxes value
     * @param float $taxes
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setTaxes(?float $taxes = null): self
    {
        // validation for constraint: float
        if (!is_null($taxes) && !(is_float($taxes) || is_numeric($taxes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
        $this->taxes = $taxes;
        
        return $this;
    }
    /**
     * Get ticketNo value
     * @return string|null
     */
    public function getTicketNo(): ?string
    {
        return $this->ticketNo;
    }
    /**
     * Set ticketNo value
     * @param string $ticketNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setTicketNo(?string $ticketNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNo) && !is_string($ticketNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNo, true), gettype($ticketNo)), __LINE__);
        }
        $this->ticketNo = $ticketNo;
        
        return $this;
    }
    /**
     * Get tourcode value
     * @return string|null
     */
    public function getTourcode(): ?string
    {
        return $this->tourcode;
    }
    /**
     * Set tourcode value
     * @param string $tourcode
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setTourcode(?string $tourcode = null): self
    {
        // validation for constraint: string
        if (!is_null($tourcode) && !is_string($tourcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourcode, true), gettype($tourcode)), __LINE__);
        }
        $this->tourcode = $tourcode;
        
        return $this;
    }
    /**
     * Get travellerName value
     * @return string|null
     */
    public function getTravellerName(): ?string
    {
        return $this->travellerName;
    }
    /**
     * Set travellerName value
     * @param string $travellerName
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
     */
    public function setTravellerName(?string $travellerName = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerName) && !is_string($travellerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerName, true), gettype($travellerName)), __LINE__);
        }
        $this->travellerName = $travellerName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatDTO
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
