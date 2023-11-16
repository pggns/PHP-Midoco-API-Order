<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdviceSettlemDetailDTO StructType
 * @subpackage Structs
 */
class AdviceSettlemDetailDTO extends AbstractStructBase
{
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
     * The commissionMode
     * @var int|null
     */
    protected ?int $commissionMode = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The detailId
     * @var int|null
     */
    protected ?int $detailId = null;
    /**
     * The entryRestAsProv
     * @var bool|null
     */
    protected ?bool $entryRestAsProv = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The executed
     * @var bool|null
     */
    protected ?bool $executed = null;
    /**
     * The extId
     * @var string|null
     */
    protected ?string $extId = null;
    /**
     * The feeAmount
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The inPackage
     * @var bool|null
     */
    protected ?bool $inPackage = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The invoiceDate
     * @var string|null
     */
    protected ?string $invoiceDate = null;
    /**
     * The isCollective
     * @var bool|null
     */
    protected ?bool $isCollective = null;
    /**
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The isInsurance
     * @var bool|null
     */
    protected ?bool $isInsurance = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The needsVatDivision
     * @var bool|null
     */
    protected ?bool $needsVatDivision = null;
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
    /**
     * The numberOfPersons
     * @var int|null
     */
    protected ?int $numberOfPersons = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
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
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
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
     * The status
     * @var string|null
     */
    protected ?string $status = null;
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
     * The supplierInvoice
     * @var float|null
     */
    protected ?float $supplierInvoice = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The travelPrice
     * @var float|null
     */
    protected ?float $travelPrice = null;
    /**
     * The traveldate
     * @var string|null
     */
    protected ?string $traveldate = null;
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
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatFreeAmount
     * @var float|null
     */
    protected ?float $vatFreeAmount = null;
    /**
     * The vatInclAmount
     * @var float|null
     */
    protected ?float $vatInclAmount = null;
    /**
     * The vatInsurance
     * @var float|null
     */
    protected ?float $vatInsurance = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for AdviceSettlemDetailDTO
     * @uses AdviceSettlemDetailDTO::setBookingId()
     * @uses AdviceSettlemDetailDTO::setCalculatedRevenue()
     * @uses AdviceSettlemDetailDTO::setCommissionMode()
     * @uses AdviceSettlemDetailDTO::setCurrency()
     * @uses AdviceSettlemDetailDTO::setCustomerName()
     * @uses AdviceSettlemDetailDTO::setDestination()
     * @uses AdviceSettlemDetailDTO::setDetailId()
     * @uses AdviceSettlemDetailDTO::setEntryRestAsProv()
     * @uses AdviceSettlemDetailDTO::setExchangeRate()
     * @uses AdviceSettlemDetailDTO::setExecuted()
     * @uses AdviceSettlemDetailDTO::setExtId()
     * @uses AdviceSettlemDetailDTO::setFeeAmount()
     * @uses AdviceSettlemDetailDTO::setGrantedRevenue()
     * @uses AdviceSettlemDetailDTO::setInPackage()
     * @uses AdviceSettlemDetailDTO::setInkassoPrice()
     * @uses AdviceSettlemDetailDTO::setInvoiceDate()
     * @uses AdviceSettlemDetailDTO::setIsCollective()
     * @uses AdviceSettlemDetailDTO::setIsDeposit()
     * @uses AdviceSettlemDetailDTO::setIsInsurance()
     * @uses AdviceSettlemDetailDTO::setItemId()
     * @uses AdviceSettlemDetailDTO::setModifyDate()
     * @uses AdviceSettlemDetailDTO::setModifyUser()
     * @uses AdviceSettlemDetailDTO::setNeedsVatDivision()
     * @uses AdviceSettlemDetailDTO::setNettoAmount()
     * @uses AdviceSettlemDetailDTO::setNumberOfPersons()
     * @uses AdviceSettlemDetailDTO::setPaymentType()
     * @uses AdviceSettlemDetailDTO::setReceiptNo()
     * @uses AdviceSettlemDetailDTO::setRevenueId()
     * @uses AdviceSettlemDetailDTO::setSettlementId()
     * @uses AdviceSettlemDetailDTO::setSettlementType()
     * @uses AdviceSettlemDetailDTO::setSettlementTypeDebit()
     * @uses AdviceSettlemDetailDTO::setStatus()
     * @uses AdviceSettlemDetailDTO::setSupplierDiAmount()
     * @uses AdviceSettlemDetailDTO::setSupplierId()
     * @uses AdviceSettlemDetailDTO::setSupplierInvoice()
     * @uses AdviceSettlemDetailDTO::setTotalPrice()
     * @uses AdviceSettlemDetailDTO::setTravelPrice()
     * @uses AdviceSettlemDetailDTO::setTraveldate()
     * @uses AdviceSettlemDetailDTO::setTraveltype()
     * @uses AdviceSettlemDetailDTO::setUnitName()
     * @uses AdviceSettlemDetailDTO::setVatAmount()
     * @uses AdviceSettlemDetailDTO::setVatFreeAmount()
     * @uses AdviceSettlemDetailDTO::setVatInclAmount()
     * @uses AdviceSettlemDetailDTO::setVatInsurance()
     * @uses AdviceSettlemDetailDTO::setVatPercent()
     * @param string $bookingId
     * @param float $calculatedRevenue
     * @param int $commissionMode
     * @param string $currency
     * @param string $customerName
     * @param string $destination
     * @param int $detailId
     * @param bool $entryRestAsProv
     * @param float $exchangeRate
     * @param bool $executed
     * @param string $extId
     * @param float $feeAmount
     * @param float $grantedRevenue
     * @param bool $inPackage
     * @param float $inkassoPrice
     * @param string $invoiceDate
     * @param bool $isCollective
     * @param bool $isDeposit
     * @param bool $isInsurance
     * @param int $itemId
     * @param string $modifyDate
     * @param int $modifyUser
     * @param bool $needsVatDivision
     * @param float $nettoAmount
     * @param int $numberOfPersons
     * @param string $paymentType
     * @param string $receiptNo
     * @param int $revenueId
     * @param int $settlementId
     * @param string $settlementType
     * @param string $settlementTypeDebit
     * @param string $status
     * @param float $supplierDiAmount
     * @param string $supplierId
     * @param float $supplierInvoice
     * @param float $totalPrice
     * @param float $travelPrice
     * @param string $traveldate
     * @param string $traveltype
     * @param string $unitName
     * @param float $vatAmount
     * @param float $vatFreeAmount
     * @param float $vatInclAmount
     * @param float $vatInsurance
     * @param float $vatPercent
     */
    public function __construct(?string $bookingId = null, ?float $calculatedRevenue = null, ?int $commissionMode = null, ?string $currency = null, ?string $customerName = null, ?string $destination = null, ?int $detailId = null, ?bool $entryRestAsProv = null, ?float $exchangeRate = null, ?bool $executed = null, ?string $extId = null, ?float $feeAmount = null, ?float $grantedRevenue = null, ?bool $inPackage = null, ?float $inkassoPrice = null, ?string $invoiceDate = null, ?bool $isCollective = null, ?bool $isDeposit = null, ?bool $isInsurance = null, ?int $itemId = null, ?string $modifyDate = null, ?int $modifyUser = null, ?bool $needsVatDivision = null, ?float $nettoAmount = null, ?int $numberOfPersons = null, ?string $paymentType = null, ?string $receiptNo = null, ?int $revenueId = null, ?int $settlementId = null, ?string $settlementType = null, ?string $settlementTypeDebit = null, ?string $status = null, ?float $supplierDiAmount = null, ?string $supplierId = null, ?float $supplierInvoice = null, ?float $totalPrice = null, ?float $travelPrice = null, ?string $traveldate = null, ?string $traveltype = null, ?string $unitName = null, ?float $vatAmount = null, ?float $vatFreeAmount = null, ?float $vatInclAmount = null, ?float $vatInsurance = null, ?float $vatPercent = null)
    {
        $this
            ->setBookingId($bookingId)
            ->setCalculatedRevenue($calculatedRevenue)
            ->setCommissionMode($commissionMode)
            ->setCurrency($currency)
            ->setCustomerName($customerName)
            ->setDestination($destination)
            ->setDetailId($detailId)
            ->setEntryRestAsProv($entryRestAsProv)
            ->setExchangeRate($exchangeRate)
            ->setExecuted($executed)
            ->setExtId($extId)
            ->setFeeAmount($feeAmount)
            ->setGrantedRevenue($grantedRevenue)
            ->setInPackage($inPackage)
            ->setInkassoPrice($inkassoPrice)
            ->setInvoiceDate($invoiceDate)
            ->setIsCollective($isCollective)
            ->setIsDeposit($isDeposit)
            ->setIsInsurance($isInsurance)
            ->setItemId($itemId)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setNeedsVatDivision($needsVatDivision)
            ->setNettoAmount($nettoAmount)
            ->setNumberOfPersons($numberOfPersons)
            ->setPaymentType($paymentType)
            ->setReceiptNo($receiptNo)
            ->setRevenueId($revenueId)
            ->setSettlementId($settlementId)
            ->setSettlementType($settlementType)
            ->setSettlementTypeDebit($settlementTypeDebit)
            ->setStatus($status)
            ->setSupplierDiAmount($supplierDiAmount)
            ->setSupplierId($supplierId)
            ->setSupplierInvoice($supplierInvoice)
            ->setTotalPrice($totalPrice)
            ->setTravelPrice($travelPrice)
            ->setTraveldate($traveldate)
            ->setTraveltype($traveltype)
            ->setUnitName($unitName)
            ->setVatAmount($vatAmount)
            ->setVatFreeAmount($vatFreeAmount)
            ->setVatInclAmount($vatInclAmount)
            ->setVatInsurance($vatInsurance)
            ->setVatPercent($vatPercent);
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * Get detailId value
     * @return int|null
     */
    public function getDetailId(): ?int
    {
        return $this->detailId;
    }
    /**
     * Set detailId value
     * @param int $detailId
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
     */
    public function setDetailId(?int $detailId = null): self
    {
        // validation for constraint: int
        if (!is_null($detailId) && !(is_int($detailId) || ctype_digit($detailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($detailId, true), gettype($detailId)), __LINE__);
        }
        $this->detailId = $detailId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * Get executed value
     * @return bool|null
     */
    public function getExecuted(): ?bool
    {
        return $this->executed;
    }
    /**
     * Set executed value
     * @param bool $executed
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
     */
    public function setExecuted(?bool $executed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($executed) && !is_bool($executed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($executed, true), gettype($executed)), __LINE__);
        }
        $this->executed = $executed;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * Get needsVatDivision value
     * @return bool|null
     */
    public function getNeedsVatDivision(): ?bool
    {
        return $this->needsVatDivision;
    }
    /**
     * Set needsVatDivision value
     * @param bool $needsVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
     */
    public function setNeedsVatDivision(?bool $needsVatDivision = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsVatDivision) && !is_bool($needsVatDivision)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsVatDivision, true), gettype($needsVatDivision)), __LINE__);
        }
        $this->needsVatDivision = $needsVatDivision;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlemDetailDTO
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
}
