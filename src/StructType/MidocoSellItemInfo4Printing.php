<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellItemInfo4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSellItemInfo4Printing extends MidocoSellItemDetails
{
    /**
     * The orderPosition
     * @var string|null
     */
    protected ?string $orderPosition = null;
    /**
     * The originalPrice
     * @var float|null
     */
    protected ?float $originalPrice = null;
    /**
     * The actualPrice
     * @var float|null
     */
    protected ?float $actualPrice = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The salePrice
     * @var float|null
     */
    protected ?float $salePrice = null;
    /**
     * The oldPrice
     * @var float|null
     */
    protected ?float $oldPrice = null;
    /**
     * The oldNonBookedVatAmount
     * Meta information extracted from the WSDL
     * - default: 0
     * @var float|null
     */
    protected ?float $oldNonBookedVatAmount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The originalCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The vatPercent
     * @var string|null
     */
    protected ?string $vatPercent = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The feeAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The taxAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $taxAmount = null;
    /**
     * The supplierVatPercent
     * @var string|null
     */
    protected ?string $supplierVatPercent = null;
    /**
     * The supplierVatAmount
     * @var float|null
     */
    protected ?float $supplierVatAmount = null;
    /**
     * The isReferenced
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isReferenced = null;
    /**
     * The printOptionId
     * @var int|null
     */
    protected ?int $printOptionId = null;
    /**
     * The reducedVatPercent
     * @var string|null
     */
    protected ?string $reducedVatPercent = null;
    /**
     * The reducedVatAmount
     * @var float|null
     */
    protected ?float $reducedVatAmount = null;
    /**
     * The supplierReducedVatPercent
     * @var string|null
     */
    protected ?string $supplierReducedVatPercent = null;
    /**
     * The supplierReducedVatAmount
     * @var float|null
     */
    protected ?float $supplierReducedVatAmount = null;
    /**
     * The geographicalCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $geographicalCategory = null;
    /**
     * The isTicketBased
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isTicketBased = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - default: true
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The countryDescription
     * Meta information extracted from the WSDL
     * - default: true
     * @var string|null
     */
    protected ?string $countryDescription = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The MidocoTravelSupplierInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTravelSupplierInfo
     * @var \Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO $MidocoTravelSupplierInfo = null;
    /**
     * The expedientUserId
     * @var int|null
     */
    protected ?int $expedientUserId = null;
    /**
     * The crsExpedientId
     * @var string|null
     */
    protected ?string $crsExpedientId = null;
    /**
     * The MidocoSellItemVatDivision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemVatDivision
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[]
     */
    protected ?array $MidocoSellItemVatDivision = null;
    /**
     * The turnaroundPoint
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $turnaroundPoint = null;
    /**
     * The depositPercent
     * @var float|null
     */
    protected ?float $depositPercent = null;
    /**
     * The noOfItems
     * @var int|null
     */
    protected ?int $noOfItems = null;
    /**
     * The singlePrice
     * @var float|null
     */
    protected ?float $singlePrice = null;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The extPaymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $extPaymentType = null;
    /**
     * The MidocoInvoicePosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoicePosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[]
     */
    protected ?array $MidocoInvoicePosition = null;
    /**
     * The MidocoInvoiceVatPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceVatPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[]
     */
    protected ?array $MidocoInvoiceVatPosition = null;
    /**
     * The groupItemName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $groupItemName = null;
    /**
     * The groupItemFlag
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $groupItemFlag = null;
    /**
     * The isMarginVat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isMarginVat = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The MidocoTouchedVatCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTouchedVatCode
     * @var \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[]
     */
    protected ?array $MidocoTouchedVatCode = null;
    /**
     * The MidocoVoucherInfo4Printing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoVoucherInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing $MidocoVoucherInfo4Printing = null;
    /**
     * The MidocoTravelCm
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelCm
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelCm[]
     */
    protected ?array $MidocoTravelCm = null;
    /**
     * The MidocoSellItemSaving
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemSaving
     * @var \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[]
     */
    protected ?array $MidocoSellItemSaving = null;
    /**
     * The AtolIndex
     * @var int|null
     */
    protected ?int $AtolIndex = null;
    /**
     * The AtolPeriod
     * @var string|null
     */
    protected ?string $AtolPeriod = null;
    /**
     * The parentItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $parentItemId = null;
    /**
     * The MidocoSellItemPricing
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoSellItemPricing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $MidocoSellItemPricing = null;
    /**
     * The buyCurrencyRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $buyCurrencyRate = null;
    /**
     * Constructor method for MidocoSellItemInfo4Printing
     * @uses MidocoSellItemInfo4Printing::setOrderPosition()
     * @uses MidocoSellItemInfo4Printing::setOriginalPrice()
     * @uses MidocoSellItemInfo4Printing::setActualPrice()
     * @uses MidocoSellItemInfo4Printing::setTotalPrice()
     * @uses MidocoSellItemInfo4Printing::setSalePrice()
     * @uses MidocoSellItemInfo4Printing::setOldPrice()
     * @uses MidocoSellItemInfo4Printing::setOldNonBookedVatAmount()
     * @uses MidocoSellItemInfo4Printing::setCurrency()
     * @uses MidocoSellItemInfo4Printing::setOriginalCurrency()
     * @uses MidocoSellItemInfo4Printing::setVatPercent()
     * @uses MidocoSellItemInfo4Printing::setVatAmount()
     * @uses MidocoSellItemInfo4Printing::setFeeAmount()
     * @uses MidocoSellItemInfo4Printing::setTaxAmount()
     * @uses MidocoSellItemInfo4Printing::setSupplierVatPercent()
     * @uses MidocoSellItemInfo4Printing::setSupplierVatAmount()
     * @uses MidocoSellItemInfo4Printing::setIsReferenced()
     * @uses MidocoSellItemInfo4Printing::setPrintOptionId()
     * @uses MidocoSellItemInfo4Printing::setReducedVatPercent()
     * @uses MidocoSellItemInfo4Printing::setReducedVatAmount()
     * @uses MidocoSellItemInfo4Printing::setSupplierReducedVatPercent()
     * @uses MidocoSellItemInfo4Printing::setSupplierReducedVatAmount()
     * @uses MidocoSellItemInfo4Printing::setGeographicalCategory()
     * @uses MidocoSellItemInfo4Printing::setIsTicketBased()
     * @uses MidocoSellItemInfo4Printing::setCountryCode()
     * @uses MidocoSellItemInfo4Printing::setCountryDescription()
     * @uses MidocoSellItemInfo4Printing::setCommissionAmount()
     * @uses MidocoSellItemInfo4Printing::setCommissionPercent()
     * @uses MidocoSellItemInfo4Printing::setMidocoTravelSupplierInfo()
     * @uses MidocoSellItemInfo4Printing::setExpedientUserId()
     * @uses MidocoSellItemInfo4Printing::setCrsExpedientId()
     * @uses MidocoSellItemInfo4Printing::setMidocoSellItemVatDivision()
     * @uses MidocoSellItemInfo4Printing::setTurnaroundPoint()
     * @uses MidocoSellItemInfo4Printing::setDepositPercent()
     * @uses MidocoSellItemInfo4Printing::setNoOfItems()
     * @uses MidocoSellItemInfo4Printing::setSinglePrice()
     * @uses MidocoSellItemInfo4Printing::setCategory()
     * @uses MidocoSellItemInfo4Printing::setExtPaymentType()
     * @uses MidocoSellItemInfo4Printing::setMidocoInvoicePosition()
     * @uses MidocoSellItemInfo4Printing::setMidocoInvoiceVatPosition()
     * @uses MidocoSellItemInfo4Printing::setGroupItemName()
     * @uses MidocoSellItemInfo4Printing::setGroupItemFlag()
     * @uses MidocoSellItemInfo4Printing::setIsMarginVat()
     * @uses MidocoSellItemInfo4Printing::setTravelNo()
     * @uses MidocoSellItemInfo4Printing::setMidocoTouchedVatCode()
     * @uses MidocoSellItemInfo4Printing::setMidocoVoucherInfo4Printing()
     * @uses MidocoSellItemInfo4Printing::setMidocoTravelCm()
     * @uses MidocoSellItemInfo4Printing::setMidocoSellItemSaving()
     * @uses MidocoSellItemInfo4Printing::setAtolIndex()
     * @uses MidocoSellItemInfo4Printing::setAtolPeriod()
     * @uses MidocoSellItemInfo4Printing::setParentItemId()
     * @uses MidocoSellItemInfo4Printing::setMidocoSellItemPricing()
     * @uses MidocoSellItemInfo4Printing::setBuyCurrencyRate()
     * @param string $orderPosition
     * @param float $originalPrice
     * @param float $actualPrice
     * @param float $totalPrice
     * @param float $salePrice
     * @param float $oldPrice
     * @param float $oldNonBookedVatAmount
     * @param string $currency
     * @param string $originalCurrency
     * @param string $vatPercent
     * @param float $vatAmount
     * @param float $feeAmount
     * @param float $taxAmount
     * @param string $supplierVatPercent
     * @param float $supplierVatAmount
     * @param bool $isReferenced
     * @param int $printOptionId
     * @param string $reducedVatPercent
     * @param float $reducedVatAmount
     * @param string $supplierReducedVatPercent
     * @param float $supplierReducedVatAmount
     * @param string $geographicalCategory
     * @param bool $isTicketBased
     * @param string $countryCode
     * @param string $countryDescription
     * @param float $commissionAmount
     * @param float $commissionPercent
     * @param \Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO $midocoTravelSupplierInfo
     * @param int $expedientUserId
     * @param string $crsExpedientId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     * @param string $turnaroundPoint
     * @param float $depositPercent
     * @param int $noOfItems
     * @param float $singlePrice
     * @param string $category
     * @param string $extPaymentType
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[] $midocoInvoicePosition
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[] $midocoInvoiceVatPosition
     * @param string $groupItemName
     * @param bool $groupItemFlag
     * @param bool $isMarginVat
     * @param string $travelNo
     * @param \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[] $midocoTouchedVatCode
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing $midocoVoucherInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelCm[] $midocoTravelCm
     * @param \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[] $midocoSellItemSaving
     * @param int $atolIndex
     * @param string $atolPeriod
     * @param int $parentItemId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing
     * @param float $buyCurrencyRate
     */
    public function __construct(?string $orderPosition = null, ?float $originalPrice = null, ?float $actualPrice = null, ?float $totalPrice = null, ?float $salePrice = null, ?float $oldPrice = null, ?float $oldNonBookedVatAmount = 0, ?string $currency = null, ?string $originalCurrency = null, ?string $vatPercent = null, ?float $vatAmount = null, ?float $feeAmount = null, ?float $taxAmount = null, ?string $supplierVatPercent = null, ?float $supplierVatAmount = null, ?bool $isReferenced = true, ?int $printOptionId = null, ?string $reducedVatPercent = null, ?float $reducedVatAmount = null, ?string $supplierReducedVatPercent = null, ?float $supplierReducedVatAmount = null, ?string $geographicalCategory = null, ?bool $isTicketBased = true, ?string $countryCode = 'true', ?string $countryDescription = 'true', ?float $commissionAmount = null, ?float $commissionPercent = null, ?\Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO $midocoTravelSupplierInfo = null, ?int $expedientUserId = null, ?string $crsExpedientId = null, ?array $midocoSellItemVatDivision = null, ?string $turnaroundPoint = null, ?float $depositPercent = null, ?int $noOfItems = null, ?float $singlePrice = null, ?string $category = null, ?string $extPaymentType = null, ?array $midocoInvoicePosition = null, ?array $midocoInvoiceVatPosition = null, ?string $groupItemName = null, ?bool $groupItemFlag = false, ?bool $isMarginVat = null, ?string $travelNo = null, ?array $midocoTouchedVatCode = null, ?\Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing $midocoVoucherInfo4Printing = null, ?array $midocoTravelCm = null, ?array $midocoSellItemSaving = null, ?int $atolIndex = null, ?string $atolPeriod = null, ?int $parentItemId = null, ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing = null, ?float $buyCurrencyRate = null)
    {
        $this
            ->setOrderPosition($orderPosition)
            ->setOriginalPrice($originalPrice)
            ->setActualPrice($actualPrice)
            ->setTotalPrice($totalPrice)
            ->setSalePrice($salePrice)
            ->setOldPrice($oldPrice)
            ->setOldNonBookedVatAmount($oldNonBookedVatAmount)
            ->setCurrency($currency)
            ->setOriginalCurrency($originalCurrency)
            ->setVatPercent($vatPercent)
            ->setVatAmount($vatAmount)
            ->setFeeAmount($feeAmount)
            ->setTaxAmount($taxAmount)
            ->setSupplierVatPercent($supplierVatPercent)
            ->setSupplierVatAmount($supplierVatAmount)
            ->setIsReferenced($isReferenced)
            ->setPrintOptionId($printOptionId)
            ->setReducedVatPercent($reducedVatPercent)
            ->setReducedVatAmount($reducedVatAmount)
            ->setSupplierReducedVatPercent($supplierReducedVatPercent)
            ->setSupplierReducedVatAmount($supplierReducedVatAmount)
            ->setGeographicalCategory($geographicalCategory)
            ->setIsTicketBased($isTicketBased)
            ->setCountryCode($countryCode)
            ->setCountryDescription($countryDescription)
            ->setCommissionAmount($commissionAmount)
            ->setCommissionPercent($commissionPercent)
            ->setMidocoTravelSupplierInfo($midocoTravelSupplierInfo)
            ->setExpedientUserId($expedientUserId)
            ->setCrsExpedientId($crsExpedientId)
            ->setMidocoSellItemVatDivision($midocoSellItemVatDivision)
            ->setTurnaroundPoint($turnaroundPoint)
            ->setDepositPercent($depositPercent)
            ->setNoOfItems($noOfItems)
            ->setSinglePrice($singlePrice)
            ->setCategory($category)
            ->setExtPaymentType($extPaymentType)
            ->setMidocoInvoicePosition($midocoInvoicePosition)
            ->setMidocoInvoiceVatPosition($midocoInvoiceVatPosition)
            ->setGroupItemName($groupItemName)
            ->setGroupItemFlag($groupItemFlag)
            ->setIsMarginVat($isMarginVat)
            ->setTravelNo($travelNo)
            ->setMidocoTouchedVatCode($midocoTouchedVatCode)
            ->setMidocoVoucherInfo4Printing($midocoVoucherInfo4Printing)
            ->setMidocoTravelCm($midocoTravelCm)
            ->setMidocoSellItemSaving($midocoSellItemSaving)
            ->setAtolIndex($atolIndex)
            ->setAtolPeriod($atolPeriod)
            ->setParentItemId($parentItemId)
            ->setMidocoSellItemPricing($midocoSellItemPricing)
            ->setBuyCurrencyRate($buyCurrencyRate);
    }
    /**
     * Get orderPosition value
     * @return string|null
     */
    public function getOrderPosition(): ?string
    {
        return $this->orderPosition;
    }
    /**
     * Set orderPosition value
     * @param string $orderPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setOrderPosition(?string $orderPosition = null): self
    {
        // validation for constraint: string
        if (!is_null($orderPosition) && !is_string($orderPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderPosition, true), gettype($orderPosition)), __LINE__);
        }
        $this->orderPosition = $orderPosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
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
     * Get actualPrice value
     * @return float|null
     */
    public function getActualPrice(): ?float
    {
        return $this->actualPrice;
    }
    /**
     * Set actualPrice value
     * @param float $actualPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setActualPrice(?float $actualPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($actualPrice) && !(is_float($actualPrice) || is_numeric($actualPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($actualPrice, true), gettype($actualPrice)), __LINE__);
        }
        $this->actualPrice = $actualPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
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
     * Get salePrice value
     * @return float|null
     */
    public function getSalePrice(): ?float
    {
        return $this->salePrice;
    }
    /**
     * Set salePrice value
     * @param float $salePrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setSalePrice(?float $salePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($salePrice) && !(is_float($salePrice) || is_numeric($salePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePrice, true), gettype($salePrice)), __LINE__);
        }
        $this->salePrice = $salePrice;
        
        return $this;
    }
    /**
     * Get oldPrice value
     * @return float|null
     */
    public function getOldPrice(): ?float
    {
        return $this->oldPrice;
    }
    /**
     * Set oldPrice value
     * @param float $oldPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setOldPrice(?float $oldPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($oldPrice) && !(is_float($oldPrice) || is_numeric($oldPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oldPrice, true), gettype($oldPrice)), __LINE__);
        }
        $this->oldPrice = $oldPrice;
        
        return $this;
    }
    /**
     * Get oldNonBookedVatAmount value
     * @return float|null
     */
    public function getOldNonBookedVatAmount(): ?float
    {
        return $this->oldNonBookedVatAmount;
    }
    /**
     * Set oldNonBookedVatAmount value
     * @param float $oldNonBookedVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setOldNonBookedVatAmount(?float $oldNonBookedVatAmount = 0): self
    {
        // validation for constraint: float
        if (!is_null($oldNonBookedVatAmount) && !(is_float($oldNonBookedVatAmount) || is_numeric($oldNonBookedVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oldNonBookedVatAmount, true), gettype($oldNonBookedVatAmount)), __LINE__);
        }
        $this->oldNonBookedVatAmount = $oldNonBookedVatAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
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
     * Get vatPercent value
     * @return string|null
     */
    public function getVatPercent(): ?string
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param string $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setVatPercent(?string $vatPercent = null): self
    {
        // validation for constraint: string
        if (!is_null($vatPercent) && !is_string($vatPercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
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
     * Get taxAmount value
     * @return float|null
     */
    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }
    /**
     * Set taxAmount value
     * @param float $taxAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setTaxAmount(?float $taxAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($taxAmount) && !(is_float($taxAmount) || is_numeric($taxAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxAmount, true), gettype($taxAmount)), __LINE__);
        }
        $this->taxAmount = $taxAmount;
        
        return $this;
    }
    /**
     * Get supplierVatPercent value
     * @return string|null
     */
    public function getSupplierVatPercent(): ?string
    {
        return $this->supplierVatPercent;
    }
    /**
     * Set supplierVatPercent value
     * @param string $supplierVatPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setSupplierVatPercent(?string $supplierVatPercent = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierVatPercent) && !is_string($supplierVatPercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierVatPercent, true), gettype($supplierVatPercent)), __LINE__);
        }
        $this->supplierVatPercent = $supplierVatPercent;
        
        return $this;
    }
    /**
     * Get supplierVatAmount value
     * @return float|null
     */
    public function getSupplierVatAmount(): ?float
    {
        return $this->supplierVatAmount;
    }
    /**
     * Set supplierVatAmount value
     * @param float $supplierVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setSupplierVatAmount(?float $supplierVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierVatAmount) && !(is_float($supplierVatAmount) || is_numeric($supplierVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierVatAmount, true), gettype($supplierVatAmount)), __LINE__);
        }
        $this->supplierVatAmount = $supplierVatAmount;
        
        return $this;
    }
    /**
     * Get isReferenced value
     * @return bool|null
     */
    public function getIsReferenced(): ?bool
    {
        return $this->isReferenced;
    }
    /**
     * Set isReferenced value
     * @param bool $isReferenced
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setIsReferenced(?bool $isReferenced = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isReferenced) && !is_bool($isReferenced)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReferenced, true), gettype($isReferenced)), __LINE__);
        }
        $this->isReferenced = $isReferenced;
        
        return $this;
    }
    /**
     * Get printOptionId value
     * @return int|null
     */
    public function getPrintOptionId(): ?int
    {
        return $this->printOptionId;
    }
    /**
     * Set printOptionId value
     * @param int $printOptionId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setPrintOptionId(?int $printOptionId = null): self
    {
        // validation for constraint: int
        if (!is_null($printOptionId) && !(is_int($printOptionId) || ctype_digit($printOptionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printOptionId, true), gettype($printOptionId)), __LINE__);
        }
        $this->printOptionId = $printOptionId;
        
        return $this;
    }
    /**
     * Get reducedVatPercent value
     * @return string|null
     */
    public function getReducedVatPercent(): ?string
    {
        return $this->reducedVatPercent;
    }
    /**
     * Set reducedVatPercent value
     * @param string $reducedVatPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setReducedVatPercent(?string $reducedVatPercent = null): self
    {
        // validation for constraint: string
        if (!is_null($reducedVatPercent) && !is_string($reducedVatPercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reducedVatPercent, true), gettype($reducedVatPercent)), __LINE__);
        }
        $this->reducedVatPercent = $reducedVatPercent;
        
        return $this;
    }
    /**
     * Get reducedVatAmount value
     * @return float|null
     */
    public function getReducedVatAmount(): ?float
    {
        return $this->reducedVatAmount;
    }
    /**
     * Set reducedVatAmount value
     * @param float $reducedVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setReducedVatAmount(?float $reducedVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($reducedVatAmount) && !(is_float($reducedVatAmount) || is_numeric($reducedVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($reducedVatAmount, true), gettype($reducedVatAmount)), __LINE__);
        }
        $this->reducedVatAmount = $reducedVatAmount;
        
        return $this;
    }
    /**
     * Get supplierReducedVatPercent value
     * @return string|null
     */
    public function getSupplierReducedVatPercent(): ?string
    {
        return $this->supplierReducedVatPercent;
    }
    /**
     * Set supplierReducedVatPercent value
     * @param string $supplierReducedVatPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setSupplierReducedVatPercent(?string $supplierReducedVatPercent = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierReducedVatPercent) && !is_string($supplierReducedVatPercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierReducedVatPercent, true), gettype($supplierReducedVatPercent)), __LINE__);
        }
        $this->supplierReducedVatPercent = $supplierReducedVatPercent;
        
        return $this;
    }
    /**
     * Get supplierReducedVatAmount value
     * @return float|null
     */
    public function getSupplierReducedVatAmount(): ?float
    {
        return $this->supplierReducedVatAmount;
    }
    /**
     * Set supplierReducedVatAmount value
     * @param float $supplierReducedVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setSupplierReducedVatAmount(?float $supplierReducedVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierReducedVatAmount) && !(is_float($supplierReducedVatAmount) || is_numeric($supplierReducedVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierReducedVatAmount, true), gettype($supplierReducedVatAmount)), __LINE__);
        }
        $this->supplierReducedVatAmount = $supplierReducedVatAmount;
        
        return $this;
    }
    /**
     * Get geographicalCategory value
     * @return string|null
     */
    public function getGeographicalCategory(): ?string
    {
        return $this->geographicalCategory;
    }
    /**
     * Set geographicalCategory value
     * @param string $geographicalCategory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setGeographicalCategory(?string $geographicalCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($geographicalCategory) && !is_string($geographicalCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geographicalCategory, true), gettype($geographicalCategory)), __LINE__);
        }
        $this->geographicalCategory = $geographicalCategory;
        
        return $this;
    }
    /**
     * Get isTicketBased value
     * @return bool|null
     */
    public function getIsTicketBased(): ?bool
    {
        return $this->isTicketBased;
    }
    /**
     * Set isTicketBased value
     * @param bool $isTicketBased
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setIsTicketBased(?bool $isTicketBased = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isTicketBased) && !is_bool($isTicketBased)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTicketBased, true), gettype($isTicketBased)), __LINE__);
        }
        $this->isTicketBased = $isTicketBased;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setCountryCode(?string $countryCode = 'true'): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setCountryDescription(?string $countryDescription = 'true'): self
    {
        // validation for constraint: string
        if (!is_null($countryDescription) && !is_string($countryDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryDescription, true), gettype($countryDescription)), __LINE__);
        }
        $this->countryDescription = $countryDescription;
        
        return $this;
    }
    /**
     * Get commissionAmount value
     * @return float|null
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }
    /**
     * Set commissionAmount value
     * @param float $commissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setCommissionAmount(?float $commissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAmount) && !(is_float($commissionAmount) || is_numeric($commissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
        $this->commissionAmount = $commissionAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
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
     * Get MidocoTravelSupplierInfo value
     * @return \Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO|null
     */
    public function getMidocoTravelSupplierInfo(): ?\Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO
    {
        return $this->MidocoTravelSupplierInfo;
    }
    /**
     * Set MidocoTravelSupplierInfo value
     * @param \Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO $midocoTravelSupplierInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setMidocoTravelSupplierInfo(?\Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO $midocoTravelSupplierInfo = null): self
    {
        $this->MidocoTravelSupplierInfo = $midocoTravelSupplierInfo;
        
        return $this;
    }
    /**
     * Get expedientUserId value
     * @return int|null
     */
    public function getExpedientUserId(): ?int
    {
        return $this->expedientUserId;
    }
    /**
     * Set expedientUserId value
     * @param int $expedientUserId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setExpedientUserId(?int $expedientUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($expedientUserId) && !(is_int($expedientUserId) || ctype_digit($expedientUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expedientUserId, true), gettype($expedientUserId)), __LINE__);
        }
        $this->expedientUserId = $expedientUserId;
        
        return $this;
    }
    /**
     * Get crsExpedientId value
     * @return string|null
     */
    public function getCrsExpedientId(): ?string
    {
        return $this->crsExpedientId;
    }
    /**
     * Set crsExpedientId value
     * @param string $crsExpedientId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setCrsExpedientId(?string $crsExpedientId = null): self
    {
        // validation for constraint: string
        if (!is_null($crsExpedientId) && !is_string($crsExpedientId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsExpedientId, true), gettype($crsExpedientId)), __LINE__);
        }
        $this->crsExpedientId = $crsExpedientId;
        
        return $this;
    }
    /**
     * Get MidocoSellItemVatDivision value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[]
     */
    public function getMidocoSellItemVatDivision(): ?array
    {
        return $this->MidocoSellItemVatDivision;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellItemVatDivision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemVatDivision method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemVatDivisionForArrayConstraintFromSetMidocoSellItemVatDivision(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemInfo4PrintingMidocoSellItemVatDivisionItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemInfo4PrintingMidocoSellItemVatDivisionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision) {
                $invalidValues[] = is_object($midocoSellItemInfo4PrintingMidocoSellItemVatDivisionItem) ? get_class($midocoSellItemInfo4PrintingMidocoSellItemVatDivisionItem) : sprintf('%s(%s)', gettype($midocoSellItemInfo4PrintingMidocoSellItemVatDivisionItem), var_export($midocoSellItemInfo4PrintingMidocoSellItemVatDivisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setMidocoSellItemVatDivision(?array $midocoSellItemVatDivision = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemVatDivisionArrayErrorMessage = self::validateMidocoSellItemVatDivisionForArrayConstraintFromSetMidocoSellItemVatDivision($midocoSellItemVatDivision))) {
            throw new InvalidArgumentException($midocoSellItemVatDivisionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemVatDivision = $midocoSellItemVatDivision;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function addToMidocoSellItemVatDivision(\Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemVatDivision[] = $item;
        
        return $this;
    }
    /**
     * Get turnaroundPoint value
     * @return string|null
     */
    public function getTurnaroundPoint(): ?string
    {
        return $this->turnaroundPoint;
    }
    /**
     * Set turnaroundPoint value
     * @param string $turnaroundPoint
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setTurnaroundPoint(?string $turnaroundPoint = null): self
    {
        // validation for constraint: string
        if (!is_null($turnaroundPoint) && !is_string($turnaroundPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($turnaroundPoint, true), gettype($turnaroundPoint)), __LINE__);
        }
        $this->turnaroundPoint = $turnaroundPoint;
        
        return $this;
    }
    /**
     * Get depositPercent value
     * @return float|null
     */
    public function getDepositPercent(): ?float
    {
        return $this->depositPercent;
    }
    /**
     * Set depositPercent value
     * @param float $depositPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setDepositPercent(?float $depositPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($depositPercent) && !(is_float($depositPercent) || is_numeric($depositPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositPercent, true), gettype($depositPercent)), __LINE__);
        }
        $this->depositPercent = $depositPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
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
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get extPaymentType value
     * @return string|null
     */
    public function getExtPaymentType(): ?string
    {
        return $this->extPaymentType;
    }
    /**
     * Set extPaymentType value
     * @param string $extPaymentType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setExtPaymentType(?string $extPaymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($extPaymentType) && !is_string($extPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extPaymentType, true), gettype($extPaymentType)), __LINE__);
        }
        $this->extPaymentType = $extPaymentType;
        
        return $this;
    }
    /**
     * Get MidocoInvoicePosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[]
     */
    public function getMidocoInvoicePosition(): ?array
    {
        return $this->MidocoInvoicePosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoInvoicePosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoicePosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoicePositionForArrayConstraintFromSetMidocoInvoicePosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemInfo4PrintingMidocoInvoicePositionItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemInfo4PrintingMidocoInvoicePositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition) {
                $invalidValues[] = is_object($midocoSellItemInfo4PrintingMidocoInvoicePositionItem) ? get_class($midocoSellItemInfo4PrintingMidocoInvoicePositionItem) : sprintf('%s(%s)', gettype($midocoSellItemInfo4PrintingMidocoInvoicePositionItem), var_export($midocoSellItemInfo4PrintingMidocoInvoicePositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoicePosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoicePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[] $midocoInvoicePosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setMidocoInvoicePosition(?array $midocoInvoicePosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoicePositionArrayErrorMessage = self::validateMidocoInvoicePositionForArrayConstraintFromSetMidocoInvoicePosition($midocoInvoicePosition))) {
            throw new InvalidArgumentException($midocoInvoicePositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoicePosition = $midocoInvoicePosition;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoicePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function addToMidocoInvoicePosition(\Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoicePosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoicePosition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInvoiceVatPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[]
     */
    public function getMidocoInvoiceVatPosition(): ?array
    {
        return $this->MidocoInvoiceVatPosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoInvoiceVatPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceVatPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceVatPositionForArrayConstraintFromSetMidocoInvoiceVatPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemInfo4PrintingMidocoInvoiceVatPositionItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemInfo4PrintingMidocoInvoiceVatPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition) {
                $invalidValues[] = is_object($midocoSellItemInfo4PrintingMidocoInvoiceVatPositionItem) ? get_class($midocoSellItemInfo4PrintingMidocoInvoiceVatPositionItem) : sprintf('%s(%s)', gettype($midocoSellItemInfo4PrintingMidocoInvoiceVatPositionItem), var_export($midocoSellItemInfo4PrintingMidocoInvoiceVatPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceVatPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceVatPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[] $midocoInvoiceVatPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setMidocoInvoiceVatPosition(?array $midocoInvoiceVatPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceVatPositionArrayErrorMessage = self::validateMidocoInvoiceVatPositionForArrayConstraintFromSetMidocoInvoiceVatPosition($midocoInvoiceVatPosition))) {
            throw new InvalidArgumentException($midocoInvoiceVatPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceVatPosition = $midocoInvoiceVatPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceVatPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function addToMidocoInvoiceVatPosition(\Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceVatPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceVatPosition[] = $item;
        
        return $this;
    }
    /**
     * Get groupItemName value
     * @return string|null
     */
    public function getGroupItemName(): ?string
    {
        return $this->groupItemName;
    }
    /**
     * Set groupItemName value
     * @param string $groupItemName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setGroupItemName(?string $groupItemName = null): self
    {
        // validation for constraint: string
        if (!is_null($groupItemName) && !is_string($groupItemName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupItemName, true), gettype($groupItemName)), __LINE__);
        }
        $this->groupItemName = $groupItemName;
        
        return $this;
    }
    /**
     * Get groupItemFlag value
     * @return bool|null
     */
    public function getGroupItemFlag(): ?bool
    {
        return $this->groupItemFlag;
    }
    /**
     * Set groupItemFlag value
     * @param bool $groupItemFlag
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setGroupItemFlag(?bool $groupItemFlag = false): self
    {
        // validation for constraint: boolean
        if (!is_null($groupItemFlag) && !is_bool($groupItemFlag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupItemFlag, true), gettype($groupItemFlag)), __LINE__);
        }
        $this->groupItemFlag = $groupItemFlag;
        
        return $this;
    }
    /**
     * Get isMarginVat value
     * @return bool|null
     */
    public function getIsMarginVat(): ?bool
    {
        return $this->isMarginVat;
    }
    /**
     * Set isMarginVat value
     * @param bool $isMarginVat
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setIsMarginVat(?bool $isMarginVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMarginVat) && !is_bool($isMarginVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMarginVat, true), gettype($isMarginVat)), __LINE__);
        }
        $this->isMarginVat = $isMarginVat;
        
        return $this;
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
    /**
     * Get MidocoTouchedVatCode value
     * @return \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[]
     */
    public function getMidocoTouchedVatCode(): ?array
    {
        return $this->MidocoTouchedVatCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTouchedVatCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTouchedVatCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTouchedVatCodeForArrayConstraintFromSetMidocoTouchedVatCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemInfo4PrintingMidocoTouchedVatCodeItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemInfo4PrintingMidocoTouchedVatCodeItem instanceof \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType) {
                $invalidValues[] = is_object($midocoSellItemInfo4PrintingMidocoTouchedVatCodeItem) ? get_class($midocoSellItemInfo4PrintingMidocoTouchedVatCodeItem) : sprintf('%s(%s)', gettype($midocoSellItemInfo4PrintingMidocoTouchedVatCodeItem), var_export($midocoSellItemInfo4PrintingMidocoTouchedVatCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTouchedVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTouchedVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[] $midocoTouchedVatCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setMidocoTouchedVatCode(?array $midocoTouchedVatCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTouchedVatCodeArrayErrorMessage = self::validateMidocoTouchedVatCodeForArrayConstraintFromSetMidocoTouchedVatCode($midocoTouchedVatCode))) {
            throw new InvalidArgumentException($midocoTouchedVatCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoTouchedVatCode = $midocoTouchedVatCode;
        
        return $this;
    }
    /**
     * Add item to MidocoTouchedVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function addToMidocoTouchedVatCode(\Pggns\MidocoApi\Order\StructType\TouchedVatCodeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType) {
            throw new InvalidArgumentException(sprintf('The MidocoTouchedVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTouchedVatCode[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoVoucherInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing|null
     */
    public function getMidocoVoucherInfo4Printing(): ?\Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing
    {
        return $this->MidocoVoucherInfo4Printing;
    }
    /**
     * Set MidocoVoucherInfo4Printing value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing $midocoVoucherInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setMidocoVoucherInfo4Printing(?\Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing $midocoVoucherInfo4Printing = null): self
    {
        $this->MidocoVoucherInfo4Printing = $midocoVoucherInfo4Printing;
        
        return $this;
    }
    /**
     * Get MidocoTravelCm value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelCm[]
     */
    public function getMidocoTravelCm(): ?array
    {
        return $this->MidocoTravelCm;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTravelCm method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelCm method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelCmForArrayConstraintFromSetMidocoTravelCm(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemInfo4PrintingMidocoTravelCmItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemInfo4PrintingMidocoTravelCmItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelCm) {
                $invalidValues[] = is_object($midocoSellItemInfo4PrintingMidocoTravelCmItem) ? get_class($midocoSellItemInfo4PrintingMidocoTravelCmItem) : sprintf('%s(%s)', gettype($midocoSellItemInfo4PrintingMidocoTravelCmItem), var_export($midocoSellItemInfo4PrintingMidocoTravelCmItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelCm property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelCm, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelCm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelCm[] $midocoTravelCm
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setMidocoTravelCm(?array $midocoTravelCm = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelCmArrayErrorMessage = self::validateMidocoTravelCmForArrayConstraintFromSetMidocoTravelCm($midocoTravelCm))) {
            throw new InvalidArgumentException($midocoTravelCmArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelCm = $midocoTravelCm;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelCm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelCm $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function addToMidocoTravelCm(\Pggns\MidocoApi\Order\StructType\MidocoTravelCm $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelCm) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelCm property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelCm, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelCm[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItemSaving value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[]
     */
    public function getMidocoSellItemSaving(): ?array
    {
        return $this->MidocoSellItemSaving;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellItemSaving method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemSaving method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemSavingForArrayConstraintFromSetMidocoSellItemSaving(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemInfo4PrintingMidocoSellItemSavingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemInfo4PrintingMidocoSellItemSavingItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO) {
                $invalidValues[] = is_object($midocoSellItemInfo4PrintingMidocoSellItemSavingItem) ? get_class($midocoSellItemInfo4PrintingMidocoSellItemSavingItem) : sprintf('%s(%s)', gettype($midocoSellItemInfo4PrintingMidocoSellItemSavingItem), var_export($midocoSellItemInfo4PrintingMidocoSellItemSavingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemSaving property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemSaving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[] $midocoSellItemSaving
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setMidocoSellItemSaving(?array $midocoSellItemSaving = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemSavingArrayErrorMessage = self::validateMidocoSellItemSavingForArrayConstraintFromSetMidocoSellItemSaving($midocoSellItemSaving))) {
            throw new InvalidArgumentException($midocoSellItemSavingArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemSaving = $midocoSellItemSaving;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemSaving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function addToMidocoSellItemSaving(\Pggns\MidocoApi\Order\StructType\SellItemSavingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemSaving property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemSaving[] = $item;
        
        return $this;
    }
    /**
     * Get AtolIndex value
     * @return int|null
     */
    public function getAtolIndex(): ?int
    {
        return $this->AtolIndex;
    }
    /**
     * Set AtolIndex value
     * @param int $atolIndex
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setAtolIndex(?int $atolIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($atolIndex) && !(is_int($atolIndex) || ctype_digit($atolIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($atolIndex, true), gettype($atolIndex)), __LINE__);
        }
        $this->AtolIndex = $atolIndex;
        
        return $this;
    }
    /**
     * Get AtolPeriod value
     * @return string|null
     */
    public function getAtolPeriod(): ?string
    {
        return $this->AtolPeriod;
    }
    /**
     * Set AtolPeriod value
     * @param string $atolPeriod
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setAtolPeriod(?string $atolPeriod = null): self
    {
        // validation for constraint: string
        if (!is_null($atolPeriod) && !is_string($atolPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($atolPeriod, true), gettype($atolPeriod)), __LINE__);
        }
        $this->AtolPeriod = $atolPeriod;
        
        return $this;
    }
    /**
     * Get parentItemId value
     * @return int|null
     */
    public function getParentItemId(): ?int
    {
        return $this->parentItemId;
    }
    /**
     * Set parentItemId value
     * @param int $parentItemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setParentItemId(?int $parentItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentItemId) && !(is_int($parentItemId) || ctype_digit($parentItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentItemId, true), gettype($parentItemId)), __LINE__);
        }
        $this->parentItemId = $parentItemId;
        
        return $this;
    }
    /**
     * Get MidocoSellItemPricing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing|null
     */
    public function getMidocoSellItemPricing(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
    {
        return $this->MidocoSellItemPricing;
    }
    /**
     * Set MidocoSellItemPricing value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setMidocoSellItemPricing(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing = null): self
    {
        $this->MidocoSellItemPricing = $midocoSellItemPricing;
        
        return $this;
    }
    /**
     * Get buyCurrencyRate value
     * @return float|null
     */
    public function getBuyCurrencyRate(): ?float
    {
        return $this->buyCurrencyRate;
    }
    /**
     * Set buyCurrencyRate value
     * @param float $buyCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing
     */
    public function setBuyCurrencyRate(?float $buyCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($buyCurrencyRate) && !(is_float($buyCurrencyRate) || is_numeric($buyCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyCurrencyRate, true), gettype($buyCurrencyRate)), __LINE__);
        }
        $this->buyCurrencyRate = $buyCurrencyRate;
        
        return $this;
    }
}
