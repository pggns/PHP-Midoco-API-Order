<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingPositionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingPositionDTO extends AbstractStructBase
{
    /**
     * The acceptCc
     * @var bool|null
     */
    protected ?bool $acceptCc = null;
    /**
     * The acceptDebit
     * @var bool|null
     */
    protected ?bool $acceptDebit = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The calculatedPrintDate
     * @var string|null
     */
    protected ?string $calculatedPrintDate = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The costUnit
     * @var string|null
     */
    protected ?string $costUnit = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
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
     * The dbiInfosStatus
     * @var int|null
     */
    protected ?int $dbiInfosStatus = null;
    /**
     * The degussaPositionId
     * @var int|null
     */
    protected ?int $degussaPositionId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The detailPosition
     * @var int|null
     */
    protected ?int $detailPosition = null;
    /**
     * The documentCode
     * @var string|null
     */
    protected ?string $documentCode = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The forAgency
     * @var bool|null
     */
    protected ?bool $forAgency = null;
    /**
     * The imported
     * @var bool|null
     */
    protected ?bool $imported = null;
    /**
     * The isBackgroundPosition
     * @var bool|null
     */
    protected ?bool $isBackgroundPosition = null;
    /**
     * The isCommission
     * @var bool|null
     */
    protected ?bool $isCommission = null;
    /**
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The isNettoSinglePrice
     * @var bool|null
     */
    protected ?bool $isNettoSinglePrice = null;
    /**
     * The isPackage
     * @var bool|null
     */
    protected ?bool $isPackage = null;
    /**
     * The isPackageManual
     * @var bool|null
     */
    protected ?bool $isPackageManual = null;
    /**
     * The isPayment
     * @var bool|null
     */
    protected ?bool $isPayment = null;
    /**
     * The isRevenue
     * @var bool|null
     */
    protected ?bool $isRevenue = null;
    /**
     * The isReverseCharge
     * @var bool|null
     */
    protected ?bool $isReverseCharge = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The noOfItems
     * @var int|null
     */
    protected ?int $noOfItems = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The originalPrice
     * @var float|null
     */
    protected ?float $originalPrice = null;
    /**
     * The packageCode
     * @var string|null
     */
    protected ?string $packageCode = null;
    /**
     * The paidDate
     * @var string|null
     */
    protected ?string $paidDate = null;
    /**
     * The paymentPosition
     * @var string|null
     */
    protected ?string $paymentPosition = null;
    /**
     * The paymentPositionId
     * @var int|null
     */
    protected ?int $paymentPositionId = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The printDescription
     * @var string|null
     */
    protected ?string $printDescription = null;
    /**
     * The printPackageCode
     * @var string|null
     */
    protected ?string $printPackageCode = null;
    /**
     * The referenceNo
     * @var string|null
     */
    protected ?string $referenceNo = null;
    /**
     * The revenuePercent
     * @var float|null
     */
    protected ?float $revenuePercent = null;
    /**
     * The settlementPositionId
     * @var int|null
     */
    protected ?int $settlementPositionId = null;
    /**
     * The singlePrice
     * @var float|null
     */
    protected ?float $singlePrice = null;
    /**
     * The splitPositionId
     * @var int|null
     */
    protected ?int $splitPositionId = null;
    /**
     * The tokenChecked
     * @var bool|null
     */
    protected ?bool $tokenChecked = null;
    /**
     * The totalTax
     * @var float|null
     */
    protected ?float $totalTax = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * The travelNoHandling
     * @var string|null
     */
    protected ?string $travelNoHandling = null;
    /**
     * The vat2Amount
     * @var float|null
     */
    protected ?float $vat2Amount = null;
    /**
     * The vat2AmountExtern
     * @var float|null
     */
    protected ?float $vat2AmountExtern = null;
    /**
     * The vat2Base
     * @var float|null
     */
    protected ?float $vat2Base = null;
    /**
     * The vat2BaseExtern
     * @var float|null
     */
    protected ?float $vat2BaseExtern = null;
    /**
     * The vat2Percent
     * @var float|null
     */
    protected ?float $vat2Percent = null;
    /**
     * The vat2PercentExtern
     * @var float|null
     */
    protected ?float $vat2PercentExtern = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatAmountExtern
     * @var float|null
     */
    protected ?float $vatAmountExtern = null;
    /**
     * The vatBase
     * @var float|null
     */
    protected ?float $vatBase = null;
    /**
     * The vatBaseExtern
     * @var float|null
     */
    protected ?float $vatBaseExtern = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * The vatPercentExtern
     * @var float|null
     */
    protected ?float $vatPercentExtern = null;
    /**
     * The voidPositionId
     * @var int|null
     */
    protected ?int $voidPositionId = null;
    /**
     * The voided
     * @var bool|null
     */
    protected ?bool $voided = null;
    /**
     * Constructor method for BillingPositionDTO
     * @uses BillingPositionDTO::setAcceptCc()
     * @uses BillingPositionDTO::setAcceptDebit()
     * @uses BillingPositionDTO::setAccountId()
     * @uses BillingPositionDTO::setCalculatedPrintDate()
     * @uses BillingPositionDTO::setCommissionPercent()
     * @uses BillingPositionDTO::setCostCentre()
     * @uses BillingPositionDTO::setCostUnit()
     * @uses BillingPositionDTO::setCreationTimestamp()
     * @uses BillingPositionDTO::setCreationUser()
     * @uses BillingPositionDTO::setCurrency()
     * @uses BillingPositionDTO::setDbiInfosStatus()
     * @uses BillingPositionDTO::setDegussaPositionId()
     * @uses BillingPositionDTO::setDescription()
     * @uses BillingPositionDTO::setDestinationCode()
     * @uses BillingPositionDTO::setDetailPosition()
     * @uses BillingPositionDTO::setDocumentCode()
     * @uses BillingPositionDTO::setDocumentId()
     * @uses BillingPositionDTO::setDueDate()
     * @uses BillingPositionDTO::setExchangeRate()
     * @uses BillingPositionDTO::setForAgency()
     * @uses BillingPositionDTO::setImported()
     * @uses BillingPositionDTO::setIsBackgroundPosition()
     * @uses BillingPositionDTO::setIsCommission()
     * @uses BillingPositionDTO::setIsDeposit()
     * @uses BillingPositionDTO::setIsNettoSinglePrice()
     * @uses BillingPositionDTO::setIsPackage()
     * @uses BillingPositionDTO::setIsPackageManual()
     * @uses BillingPositionDTO::setIsPayment()
     * @uses BillingPositionDTO::setIsRevenue()
     * @uses BillingPositionDTO::setIsReverseCharge()
     * @uses BillingPositionDTO::setItemId()
     * @uses BillingPositionDTO::setNoOfItems()
     * @uses BillingPositionDTO::setOrderId()
     * @uses BillingPositionDTO::setOriginalCurrency()
     * @uses BillingPositionDTO::setOriginalPrice()
     * @uses BillingPositionDTO::setPackageCode()
     * @uses BillingPositionDTO::setPaidDate()
     * @uses BillingPositionDTO::setPaymentPosition()
     * @uses BillingPositionDTO::setPaymentPositionId()
     * @uses BillingPositionDTO::setPaymentType()
     * @uses BillingPositionDTO::setPlanId()
     * @uses BillingPositionDTO::setPosition()
     * @uses BillingPositionDTO::setPositionId()
     * @uses BillingPositionDTO::setPrice()
     * @uses BillingPositionDTO::setPrintDescription()
     * @uses BillingPositionDTO::setPrintPackageCode()
     * @uses BillingPositionDTO::setReferenceNo()
     * @uses BillingPositionDTO::setRevenuePercent()
     * @uses BillingPositionDTO::setSettlementPositionId()
     * @uses BillingPositionDTO::setSinglePrice()
     * @uses BillingPositionDTO::setSplitPositionId()
     * @uses BillingPositionDTO::setTokenChecked()
     * @uses BillingPositionDTO::setTotalTax()
     * @uses BillingPositionDTO::setTransactionId()
     * @uses BillingPositionDTO::setTravelNoHandling()
     * @uses BillingPositionDTO::setVat2Amount()
     * @uses BillingPositionDTO::setVat2AmountExtern()
     * @uses BillingPositionDTO::setVat2Base()
     * @uses BillingPositionDTO::setVat2BaseExtern()
     * @uses BillingPositionDTO::setVat2Percent()
     * @uses BillingPositionDTO::setVat2PercentExtern()
     * @uses BillingPositionDTO::setVatAmount()
     * @uses BillingPositionDTO::setVatAmountExtern()
     * @uses BillingPositionDTO::setVatBase()
     * @uses BillingPositionDTO::setVatBaseExtern()
     * @uses BillingPositionDTO::setVatCode()
     * @uses BillingPositionDTO::setVatPercent()
     * @uses BillingPositionDTO::setVatPercentExtern()
     * @uses BillingPositionDTO::setVoidPositionId()
     * @uses BillingPositionDTO::setVoided()
     * @param bool $acceptCc
     * @param bool $acceptDebit
     * @param string $accountId
     * @param string $calculatedPrintDate
     * @param float $commissionPercent
     * @param string $costCentre
     * @param string $costUnit
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $currency
     * @param int $dbiInfosStatus
     * @param int $degussaPositionId
     * @param string $description
     * @param string $destinationCode
     * @param int $detailPosition
     * @param string $documentCode
     * @param int $documentId
     * @param string $dueDate
     * @param float $exchangeRate
     * @param bool $forAgency
     * @param bool $imported
     * @param bool $isBackgroundPosition
     * @param bool $isCommission
     * @param bool $isDeposit
     * @param bool $isNettoSinglePrice
     * @param bool $isPackage
     * @param bool $isPackageManual
     * @param bool $isPayment
     * @param bool $isRevenue
     * @param bool $isReverseCharge
     * @param int $itemId
     * @param int $noOfItems
     * @param int $orderId
     * @param string $originalCurrency
     * @param float $originalPrice
     * @param string $packageCode
     * @param string $paidDate
     * @param string $paymentPosition
     * @param int $paymentPositionId
     * @param string $paymentType
     * @param string $planId
     * @param int $position
     * @param int $positionId
     * @param float $price
     * @param string $printDescription
     * @param string $printPackageCode
     * @param string $referenceNo
     * @param float $revenuePercent
     * @param int $settlementPositionId
     * @param float $singlePrice
     * @param int $splitPositionId
     * @param bool $tokenChecked
     * @param float $totalTax
     * @param int $transactionId
     * @param string $travelNoHandling
     * @param float $vat2Amount
     * @param float $vat2AmountExtern
     * @param float $vat2Base
     * @param float $vat2BaseExtern
     * @param float $vat2Percent
     * @param float $vat2PercentExtern
     * @param float $vatAmount
     * @param float $vatAmountExtern
     * @param float $vatBase
     * @param float $vatBaseExtern
     * @param string $vatCode
     * @param float $vatPercent
     * @param float $vatPercentExtern
     * @param int $voidPositionId
     * @param bool $voided
     */
    public function __construct(?bool $acceptCc = null, ?bool $acceptDebit = null, ?string $accountId = null, ?string $calculatedPrintDate = null, ?float $commissionPercent = null, ?string $costCentre = null, ?string $costUnit = null, ?string $creationTimestamp = null, ?int $creationUser = null, ?string $currency = null, ?int $dbiInfosStatus = null, ?int $degussaPositionId = null, ?string $description = null, ?string $destinationCode = null, ?int $detailPosition = null, ?string $documentCode = null, ?int $documentId = null, ?string $dueDate = null, ?float $exchangeRate = null, ?bool $forAgency = null, ?bool $imported = null, ?bool $isBackgroundPosition = null, ?bool $isCommission = null, ?bool $isDeposit = null, ?bool $isNettoSinglePrice = null, ?bool $isPackage = null, ?bool $isPackageManual = null, ?bool $isPayment = null, ?bool $isRevenue = null, ?bool $isReverseCharge = null, ?int $itemId = null, ?int $noOfItems = null, ?int $orderId = null, ?string $originalCurrency = null, ?float $originalPrice = null, ?string $packageCode = null, ?string $paidDate = null, ?string $paymentPosition = null, ?int $paymentPositionId = null, ?string $paymentType = null, ?string $planId = null, ?int $position = null, ?int $positionId = null, ?float $price = null, ?string $printDescription = null, ?string $printPackageCode = null, ?string $referenceNo = null, ?float $revenuePercent = null, ?int $settlementPositionId = null, ?float $singlePrice = null, ?int $splitPositionId = null, ?bool $tokenChecked = null, ?float $totalTax = null, ?int $transactionId = null, ?string $travelNoHandling = null, ?float $vat2Amount = null, ?float $vat2AmountExtern = null, ?float $vat2Base = null, ?float $vat2BaseExtern = null, ?float $vat2Percent = null, ?float $vat2PercentExtern = null, ?float $vatAmount = null, ?float $vatAmountExtern = null, ?float $vatBase = null, ?float $vatBaseExtern = null, ?string $vatCode = null, ?float $vatPercent = null, ?float $vatPercentExtern = null, ?int $voidPositionId = null, ?bool $voided = null)
    {
        $this
            ->setAcceptCc($acceptCc)
            ->setAcceptDebit($acceptDebit)
            ->setAccountId($accountId)
            ->setCalculatedPrintDate($calculatedPrintDate)
            ->setCommissionPercent($commissionPercent)
            ->setCostCentre($costCentre)
            ->setCostUnit($costUnit)
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setCurrency($currency)
            ->setDbiInfosStatus($dbiInfosStatus)
            ->setDegussaPositionId($degussaPositionId)
            ->setDescription($description)
            ->setDestinationCode($destinationCode)
            ->setDetailPosition($detailPosition)
            ->setDocumentCode($documentCode)
            ->setDocumentId($documentId)
            ->setDueDate($dueDate)
            ->setExchangeRate($exchangeRate)
            ->setForAgency($forAgency)
            ->setImported($imported)
            ->setIsBackgroundPosition($isBackgroundPosition)
            ->setIsCommission($isCommission)
            ->setIsDeposit($isDeposit)
            ->setIsNettoSinglePrice($isNettoSinglePrice)
            ->setIsPackage($isPackage)
            ->setIsPackageManual($isPackageManual)
            ->setIsPayment($isPayment)
            ->setIsRevenue($isRevenue)
            ->setIsReverseCharge($isReverseCharge)
            ->setItemId($itemId)
            ->setNoOfItems($noOfItems)
            ->setOrderId($orderId)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalPrice($originalPrice)
            ->setPackageCode($packageCode)
            ->setPaidDate($paidDate)
            ->setPaymentPosition($paymentPosition)
            ->setPaymentPositionId($paymentPositionId)
            ->setPaymentType($paymentType)
            ->setPlanId($planId)
            ->setPosition($position)
            ->setPositionId($positionId)
            ->setPrice($price)
            ->setPrintDescription($printDescription)
            ->setPrintPackageCode($printPackageCode)
            ->setReferenceNo($referenceNo)
            ->setRevenuePercent($revenuePercent)
            ->setSettlementPositionId($settlementPositionId)
            ->setSinglePrice($singlePrice)
            ->setSplitPositionId($splitPositionId)
            ->setTokenChecked($tokenChecked)
            ->setTotalTax($totalTax)
            ->setTransactionId($transactionId)
            ->setTravelNoHandling($travelNoHandling)
            ->setVat2Amount($vat2Amount)
            ->setVat2AmountExtern($vat2AmountExtern)
            ->setVat2Base($vat2Base)
            ->setVat2BaseExtern($vat2BaseExtern)
            ->setVat2Percent($vat2Percent)
            ->setVat2PercentExtern($vat2PercentExtern)
            ->setVatAmount($vatAmount)
            ->setVatAmountExtern($vatAmountExtern)
            ->setVatBase($vatBase)
            ->setVatBaseExtern($vatBaseExtern)
            ->setVatCode($vatCode)
            ->setVatPercent($vatPercent)
            ->setVatPercentExtern($vatPercentExtern)
            ->setVoidPositionId($voidPositionId)
            ->setVoided($voided);
    }
    /**
     * Get acceptCc value
     * @return bool|null
     */
    public function getAcceptCc(): ?bool
    {
        return $this->acceptCc;
    }
    /**
     * Set acceptCc value
     * @param bool $acceptCc
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setAcceptCc(?bool $acceptCc = null): self
    {
        // validation for constraint: boolean
        if (!is_null($acceptCc) && !is_bool($acceptCc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($acceptCc, true), gettype($acceptCc)), __LINE__);
        }
        $this->acceptCc = $acceptCc;
        
        return $this;
    }
    /**
     * Get acceptDebit value
     * @return bool|null
     */
    public function getAcceptDebit(): ?bool
    {
        return $this->acceptDebit;
    }
    /**
     * Set acceptDebit value
     * @param bool $acceptDebit
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setAcceptDebit(?bool $acceptDebit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($acceptDebit) && !is_bool($acceptDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($acceptDebit, true), gettype($acceptDebit)), __LINE__);
        }
        $this->acceptDebit = $acceptDebit;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get calculatedPrintDate value
     * @return string|null
     */
    public function getCalculatedPrintDate(): ?string
    {
        return $this->calculatedPrintDate;
    }
    /**
     * Set calculatedPrintDate value
     * @param string $calculatedPrintDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setCalculatedPrintDate(?string $calculatedPrintDate = null): self
    {
        // validation for constraint: string
        if (!is_null($calculatedPrintDate) && !is_string($calculatedPrintDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calculatedPrintDate, true), gettype($calculatedPrintDate)), __LINE__);
        }
        $this->calculatedPrintDate = $calculatedPrintDate;
        
        return $this;
    }
    /**
     * Get commissionPercent value
     * @return float|null
     */
    public function getCommissionPercent(): ?float
    {
        return $this->commissionPercent;
    }
    /**
     * Set commissionPercent value
     * @param float $commissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setCommissionPercent(?float $commissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercent) && !(is_float($commissionPercent) || is_numeric($commissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercent, true), gettype($commissionPercent)), __LINE__);
        }
        $this->commissionPercent = $commissionPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get costUnit value
     * @return string|null
     */
    public function getCostUnit(): ?string
    {
        return $this->costUnit;
    }
    /**
     * Set costUnit value
     * @param string $costUnit
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setCostUnit(?string $costUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($costUnit) && !is_string($costUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costUnit, true), gettype($costUnit)), __LINE__);
        }
        $this->costUnit = $costUnit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get dbiInfosStatus value
     * @return int|null
     */
    public function getDbiInfosStatus(): ?int
    {
        return $this->dbiInfosStatus;
    }
    /**
     * Set dbiInfosStatus value
     * @param int $dbiInfosStatus
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setDbiInfosStatus(?int $dbiInfosStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($dbiInfosStatus) && !(is_int($dbiInfosStatus) || ctype_digit($dbiInfosStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dbiInfosStatus, true), gettype($dbiInfosStatus)), __LINE__);
        }
        $this->dbiInfosStatus = $dbiInfosStatus;
        
        return $this;
    }
    /**
     * Get degussaPositionId value
     * @return int|null
     */
    public function getDegussaPositionId(): ?int
    {
        return $this->degussaPositionId;
    }
    /**
     * Set degussaPositionId value
     * @param int $degussaPositionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setDegussaPositionId(?int $degussaPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($degussaPositionId) && !(is_int($degussaPositionId) || ctype_digit($degussaPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($degussaPositionId, true), gettype($degussaPositionId)), __LINE__);
        }
        $this->degussaPositionId = $degussaPositionId;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get detailPosition value
     * @return int|null
     */
    public function getDetailPosition(): ?int
    {
        return $this->detailPosition;
    }
    /**
     * Set detailPosition value
     * @param int $detailPosition
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setDetailPosition(?int $detailPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($detailPosition) && !(is_int($detailPosition) || ctype_digit($detailPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($detailPosition, true), gettype($detailPosition)), __LINE__);
        }
        $this->detailPosition = $detailPosition;
        
        return $this;
    }
    /**
     * Get documentCode value
     * @return string|null
     */
    public function getDocumentCode(): ?string
    {
        return $this->documentCode;
    }
    /**
     * Set documentCode value
     * @param string $documentCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setDocumentCode(?string $documentCode = null): self
    {
        // validation for constraint: string
        if (!is_null($documentCode) && !is_string($documentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentCode, true), gettype($documentCode)), __LINE__);
        }
        $this->documentCode = $documentCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get forAgency value
     * @return bool|null
     */
    public function getForAgency(): ?bool
    {
        return $this->forAgency;
    }
    /**
     * Set forAgency value
     * @param bool $forAgency
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setForAgency(?bool $forAgency = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forAgency) && !is_bool($forAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forAgency, true), gettype($forAgency)), __LINE__);
        }
        $this->forAgency = $forAgency;
        
        return $this;
    }
    /**
     * Get imported value
     * @return bool|null
     */
    public function getImported(): ?bool
    {
        return $this->imported;
    }
    /**
     * Set imported value
     * @param bool $imported
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setImported(?bool $imported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($imported) && !is_bool($imported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($imported, true), gettype($imported)), __LINE__);
        }
        $this->imported = $imported;
        
        return $this;
    }
    /**
     * Get isBackgroundPosition value
     * @return bool|null
     */
    public function getIsBackgroundPosition(): ?bool
    {
        return $this->isBackgroundPosition;
    }
    /**
     * Set isBackgroundPosition value
     * @param bool $isBackgroundPosition
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setIsBackgroundPosition(?bool $isBackgroundPosition = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBackgroundPosition) && !is_bool($isBackgroundPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBackgroundPosition, true), gettype($isBackgroundPosition)), __LINE__);
        }
        $this->isBackgroundPosition = $isBackgroundPosition;
        
        return $this;
    }
    /**
     * Get isCommission value
     * @return bool|null
     */
    public function getIsCommission(): ?bool
    {
        return $this->isCommission;
    }
    /**
     * Set isCommission value
     * @param bool $isCommission
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setIsCommission(?bool $isCommission = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCommission) && !is_bool($isCommission)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCommission, true), gettype($isCommission)), __LINE__);
        }
        $this->isCommission = $isCommission;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get isNettoSinglePrice value
     * @return bool|null
     */
    public function getIsNettoSinglePrice(): ?bool
    {
        return $this->isNettoSinglePrice;
    }
    /**
     * Set isNettoSinglePrice value
     * @param bool $isNettoSinglePrice
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setIsNettoSinglePrice(?bool $isNettoSinglePrice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNettoSinglePrice) && !is_bool($isNettoSinglePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNettoSinglePrice, true), gettype($isNettoSinglePrice)), __LINE__);
        }
        $this->isNettoSinglePrice = $isNettoSinglePrice;
        
        return $this;
    }
    /**
     * Get isPackage value
     * @return bool|null
     */
    public function getIsPackage(): ?bool
    {
        return $this->isPackage;
    }
    /**
     * Set isPackage value
     * @param bool $isPackage
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setIsPackage(?bool $isPackage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPackage) && !is_bool($isPackage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPackage, true), gettype($isPackage)), __LINE__);
        }
        $this->isPackage = $isPackage;
        
        return $this;
    }
    /**
     * Get isPackageManual value
     * @return bool|null
     */
    public function getIsPackageManual(): ?bool
    {
        return $this->isPackageManual;
    }
    /**
     * Set isPackageManual value
     * @param bool $isPackageManual
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setIsPackageManual(?bool $isPackageManual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPackageManual) && !is_bool($isPackageManual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPackageManual, true), gettype($isPackageManual)), __LINE__);
        }
        $this->isPackageManual = $isPackageManual;
        
        return $this;
    }
    /**
     * Get isPayment value
     * @return bool|null
     */
    public function getIsPayment(): ?bool
    {
        return $this->isPayment;
    }
    /**
     * Set isPayment value
     * @param bool $isPayment
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setIsPayment(?bool $isPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPayment) && !is_bool($isPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPayment, true), gettype($isPayment)), __LINE__);
        }
        $this->isPayment = $isPayment;
        
        return $this;
    }
    /**
     * Get isRevenue value
     * @return bool|null
     */
    public function getIsRevenue(): ?bool
    {
        return $this->isRevenue;
    }
    /**
     * Set isRevenue value
     * @param bool $isRevenue
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setIsRevenue(?bool $isRevenue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRevenue) && !is_bool($isRevenue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRevenue, true), gettype($isRevenue)), __LINE__);
        }
        $this->isRevenue = $isRevenue;
        
        return $this;
    }
    /**
     * Get isReverseCharge value
     * @return bool|null
     */
    public function getIsReverseCharge(): ?bool
    {
        return $this->isReverseCharge;
    }
    /**
     * Set isReverseCharge value
     * @param bool $isReverseCharge
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setIsReverseCharge(?bool $isReverseCharge = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReverseCharge) && !is_bool($isReverseCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReverseCharge, true), gettype($isReverseCharge)), __LINE__);
        }
        $this->isReverseCharge = $isReverseCharge;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get noOfItems value
     * @return int|null
     */
    public function getNoOfItems(): ?int
    {
        return $this->noOfItems;
    }
    /**
     * Set noOfItems value
     * @param int $noOfItems
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setNoOfItems(?int $noOfItems = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfItems) && !(is_int($noOfItems) || ctype_digit($noOfItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfItems, true), gettype($noOfItems)), __LINE__);
        }
        $this->noOfItems = $noOfItems;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get originalPrice value
     * @return float|null
     */
    public function getOriginalPrice(): ?float
    {
        return $this->originalPrice;
    }
    /**
     * Set originalPrice value
     * @param float $originalPrice
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setOriginalPrice(?float $originalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($originalPrice) && !(is_float($originalPrice) || is_numeric($originalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalPrice, true), gettype($originalPrice)), __LINE__);
        }
        $this->originalPrice = $originalPrice;
        
        return $this;
    }
    /**
     * Get packageCode value
     * @return string|null
     */
    public function getPackageCode(): ?string
    {
        return $this->packageCode;
    }
    /**
     * Set packageCode value
     * @param string $packageCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setPackageCode(?string $packageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($packageCode) && !is_string($packageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageCode, true), gettype($packageCode)), __LINE__);
        }
        $this->packageCode = $packageCode;
        
        return $this;
    }
    /**
     * Get paidDate value
     * @return string|null
     */
    public function getPaidDate(): ?string
    {
        return $this->paidDate;
    }
    /**
     * Set paidDate value
     * @param string $paidDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setPaidDate(?string $paidDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paidDate) && !is_string($paidDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paidDate, true), gettype($paidDate)), __LINE__);
        }
        $this->paidDate = $paidDate;
        
        return $this;
    }
    /**
     * Get paymentPosition value
     * @return string|null
     */
    public function getPaymentPosition(): ?string
    {
        return $this->paymentPosition;
    }
    /**
     * Set paymentPosition value
     * @param string $paymentPosition
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setPaymentPosition(?string $paymentPosition = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentPosition) && !is_string($paymentPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentPosition, true), gettype($paymentPosition)), __LINE__);
        }
        $this->paymentPosition = $paymentPosition;
        
        return $this;
    }
    /**
     * Get paymentPositionId value
     * @return int|null
     */
    public function getPaymentPositionId(): ?int
    {
        return $this->paymentPositionId;
    }
    /**
     * Set paymentPositionId value
     * @param int $paymentPositionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setPaymentPositionId(?int $paymentPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentPositionId) && !(is_int($paymentPositionId) || ctype_digit($paymentPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentPositionId, true), gettype($paymentPositionId)), __LINE__);
        }
        $this->paymentPositionId = $paymentPositionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get printDescription value
     * @return string|null
     */
    public function getPrintDescription(): ?string
    {
        return $this->printDescription;
    }
    /**
     * Set printDescription value
     * @param string $printDescription
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setPrintDescription(?string $printDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($printDescription) && !is_string($printDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printDescription, true), gettype($printDescription)), __LINE__);
        }
        $this->printDescription = $printDescription;
        
        return $this;
    }
    /**
     * Get printPackageCode value
     * @return string|null
     */
    public function getPrintPackageCode(): ?string
    {
        return $this->printPackageCode;
    }
    /**
     * Set printPackageCode value
     * @param string $printPackageCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setPrintPackageCode(?string $printPackageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($printPackageCode) && !is_string($printPackageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printPackageCode, true), gettype($printPackageCode)), __LINE__);
        }
        $this->printPackageCode = $printPackageCode;
        
        return $this;
    }
    /**
     * Get referenceNo value
     * @return string|null
     */
    public function getReferenceNo(): ?string
    {
        return $this->referenceNo;
    }
    /**
     * Set referenceNo value
     * @param string $referenceNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setReferenceNo(?string $referenceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceNo) && !is_string($referenceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceNo, true), gettype($referenceNo)), __LINE__);
        }
        $this->referenceNo = $referenceNo;
        
        return $this;
    }
    /**
     * Get revenuePercent value
     * @return float|null
     */
    public function getRevenuePercent(): ?float
    {
        return $this->revenuePercent;
    }
    /**
     * Set revenuePercent value
     * @param float $revenuePercent
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setRevenuePercent(?float $revenuePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($revenuePercent) && !(is_float($revenuePercent) || is_numeric($revenuePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenuePercent, true), gettype($revenuePercent)), __LINE__);
        }
        $this->revenuePercent = $revenuePercent;
        
        return $this;
    }
    /**
     * Get settlementPositionId value
     * @return int|null
     */
    public function getSettlementPositionId(): ?int
    {
        return $this->settlementPositionId;
    }
    /**
     * Set settlementPositionId value
     * @param int $settlementPositionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setSettlementPositionId(?int $settlementPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementPositionId) && !(is_int($settlementPositionId) || ctype_digit($settlementPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementPositionId, true), gettype($settlementPositionId)), __LINE__);
        }
        $this->settlementPositionId = $settlementPositionId;
        
        return $this;
    }
    /**
     * Get singlePrice value
     * @return float|null
     */
    public function getSinglePrice(): ?float
    {
        return $this->singlePrice;
    }
    /**
     * Set singlePrice value
     * @param float $singlePrice
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setSinglePrice(?float $singlePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($singlePrice) && !(is_float($singlePrice) || is_numeric($singlePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($singlePrice, true), gettype($singlePrice)), __LINE__);
        }
        $this->singlePrice = $singlePrice;
        
        return $this;
    }
    /**
     * Get splitPositionId value
     * @return int|null
     */
    public function getSplitPositionId(): ?int
    {
        return $this->splitPositionId;
    }
    /**
     * Set splitPositionId value
     * @param int $splitPositionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setSplitPositionId(?int $splitPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($splitPositionId) && !(is_int($splitPositionId) || ctype_digit($splitPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($splitPositionId, true), gettype($splitPositionId)), __LINE__);
        }
        $this->splitPositionId = $splitPositionId;
        
        return $this;
    }
    /**
     * Get tokenChecked value
     * @return bool|null
     */
    public function getTokenChecked(): ?bool
    {
        return $this->tokenChecked;
    }
    /**
     * Set tokenChecked value
     * @param bool $tokenChecked
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setTokenChecked(?bool $tokenChecked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tokenChecked) && !is_bool($tokenChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tokenChecked, true), gettype($tokenChecked)), __LINE__);
        }
        $this->tokenChecked = $tokenChecked;
        
        return $this;
    }
    /**
     * Get totalTax value
     * @return float|null
     */
    public function getTotalTax(): ?float
    {
        return $this->totalTax;
    }
    /**
     * Set totalTax value
     * @param float $totalTax
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setTotalTax(?float $totalTax = null): self
    {
        // validation for constraint: float
        if (!is_null($totalTax) && !(is_float($totalTax) || is_numeric($totalTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalTax, true), gettype($totalTax)), __LINE__);
        }
        $this->totalTax = $totalTax;
        
        return $this;
    }
    /**
     * Get transactionId value
     * @return int|null
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param int $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setTransactionId(?int $transactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionId) && !(is_int($transactionId) || ctype_digit($transactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get travelNoHandling value
     * @return string|null
     */
    public function getTravelNoHandling(): ?string
    {
        return $this->travelNoHandling;
    }
    /**
     * Set travelNoHandling value
     * @param string $travelNoHandling
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setTravelNoHandling(?string $travelNoHandling = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNoHandling) && !is_string($travelNoHandling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNoHandling, true), gettype($travelNoHandling)), __LINE__);
        }
        $this->travelNoHandling = $travelNoHandling;
        
        return $this;
    }
    /**
     * Get vat2Amount value
     * @return float|null
     */
    public function getVat2Amount(): ?float
    {
        return $this->vat2Amount;
    }
    /**
     * Set vat2Amount value
     * @param float $vat2Amount
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVat2Amount(?float $vat2Amount = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2Amount) && !(is_float($vat2Amount) || is_numeric($vat2Amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2Amount, true), gettype($vat2Amount)), __LINE__);
        }
        $this->vat2Amount = $vat2Amount;
        
        return $this;
    }
    /**
     * Get vat2AmountExtern value
     * @return float|null
     */
    public function getVat2AmountExtern(): ?float
    {
        return $this->vat2AmountExtern;
    }
    /**
     * Set vat2AmountExtern value
     * @param float $vat2AmountExtern
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVat2AmountExtern(?float $vat2AmountExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2AmountExtern) && !(is_float($vat2AmountExtern) || is_numeric($vat2AmountExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2AmountExtern, true), gettype($vat2AmountExtern)), __LINE__);
        }
        $this->vat2AmountExtern = $vat2AmountExtern;
        
        return $this;
    }
    /**
     * Get vat2Base value
     * @return float|null
     */
    public function getVat2Base(): ?float
    {
        return $this->vat2Base;
    }
    /**
     * Set vat2Base value
     * @param float $vat2Base
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVat2Base(?float $vat2Base = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2Base) && !(is_float($vat2Base) || is_numeric($vat2Base))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2Base, true), gettype($vat2Base)), __LINE__);
        }
        $this->vat2Base = $vat2Base;
        
        return $this;
    }
    /**
     * Get vat2BaseExtern value
     * @return float|null
     */
    public function getVat2BaseExtern(): ?float
    {
        return $this->vat2BaseExtern;
    }
    /**
     * Set vat2BaseExtern value
     * @param float $vat2BaseExtern
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVat2BaseExtern(?float $vat2BaseExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2BaseExtern) && !(is_float($vat2BaseExtern) || is_numeric($vat2BaseExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2BaseExtern, true), gettype($vat2BaseExtern)), __LINE__);
        }
        $this->vat2BaseExtern = $vat2BaseExtern;
        
        return $this;
    }
    /**
     * Get vat2Percent value
     * @return float|null
     */
    public function getVat2Percent(): ?float
    {
        return $this->vat2Percent;
    }
    /**
     * Set vat2Percent value
     * @param float $vat2Percent
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVat2Percent(?float $vat2Percent = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2Percent) && !(is_float($vat2Percent) || is_numeric($vat2Percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2Percent, true), gettype($vat2Percent)), __LINE__);
        }
        $this->vat2Percent = $vat2Percent;
        
        return $this;
    }
    /**
     * Get vat2PercentExtern value
     * @return float|null
     */
    public function getVat2PercentExtern(): ?float
    {
        return $this->vat2PercentExtern;
    }
    /**
     * Set vat2PercentExtern value
     * @param float $vat2PercentExtern
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVat2PercentExtern(?float $vat2PercentExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2PercentExtern) && !(is_float($vat2PercentExtern) || is_numeric($vat2PercentExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2PercentExtern, true), gettype($vat2PercentExtern)), __LINE__);
        }
        $this->vat2PercentExtern = $vat2PercentExtern;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get vatAmountExtern value
     * @return float|null
     */
    public function getVatAmountExtern(): ?float
    {
        return $this->vatAmountExtern;
    }
    /**
     * Set vatAmountExtern value
     * @param float $vatAmountExtern
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVatAmountExtern(?float $vatAmountExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmountExtern) && !(is_float($vatAmountExtern) || is_numeric($vatAmountExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmountExtern, true), gettype($vatAmountExtern)), __LINE__);
        }
        $this->vatAmountExtern = $vatAmountExtern;
        
        return $this;
    }
    /**
     * Get vatBase value
     * @return float|null
     */
    public function getVatBase(): ?float
    {
        return $this->vatBase;
    }
    /**
     * Set vatBase value
     * @param float $vatBase
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVatBase(?float $vatBase = null): self
    {
        // validation for constraint: float
        if (!is_null($vatBase) && !(is_float($vatBase) || is_numeric($vatBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatBase, true), gettype($vatBase)), __LINE__);
        }
        $this->vatBase = $vatBase;
        
        return $this;
    }
    /**
     * Get vatBaseExtern value
     * @return float|null
     */
    public function getVatBaseExtern(): ?float
    {
        return $this->vatBaseExtern;
    }
    /**
     * Set vatBaseExtern value
     * @param float $vatBaseExtern
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVatBaseExtern(?float $vatBaseExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vatBaseExtern) && !(is_float($vatBaseExtern) || is_numeric($vatBaseExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatBaseExtern, true), gettype($vatBaseExtern)), __LINE__);
        }
        $this->vatBaseExtern = $vatBaseExtern;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
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
     * Get vatPercentExtern value
     * @return float|null
     */
    public function getVatPercentExtern(): ?float
    {
        return $this->vatPercentExtern;
    }
    /**
     * Set vatPercentExtern value
     * @param float $vatPercentExtern
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVatPercentExtern(?float $vatPercentExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercentExtern) && !(is_float($vatPercentExtern) || is_numeric($vatPercentExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercentExtern, true), gettype($vatPercentExtern)), __LINE__);
        }
        $this->vatPercentExtern = $vatPercentExtern;
        
        return $this;
    }
    /**
     * Get voidPositionId value
     * @return int|null
     */
    public function getVoidPositionId(): ?int
    {
        return $this->voidPositionId;
    }
    /**
     * Set voidPositionId value
     * @param int $voidPositionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVoidPositionId(?int $voidPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($voidPositionId) && !(is_int($voidPositionId) || ctype_digit($voidPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidPositionId, true), gettype($voidPositionId)), __LINE__);
        }
        $this->voidPositionId = $voidPositionId;
        
        return $this;
    }
    /**
     * Get voided value
     * @return bool|null
     */
    public function getVoided(): ?bool
    {
        return $this->voided;
    }
    /**
     * Set voided value
     * @param bool $voided
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDTO
     */
    public function setVoided(?bool $voided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($voided) && !is_bool($voided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($voided, true), gettype($voided)), __LINE__);
        }
        $this->voided = $voided;
        
        return $this;
    }
}
