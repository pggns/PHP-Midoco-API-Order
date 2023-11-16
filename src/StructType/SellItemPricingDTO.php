<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemPricingDTO StructType
 * @subpackage Structs
 */
class SellItemPricingDTO extends AbstractStructBase
{
    /**
     * The agencyCurrency
     * @var string|null
     */
    protected ?string $agencyCurrency = null;
    /**
     * The baseBuyingPrice
     * @var float|null
     */
    protected ?float $baseBuyingPrice = null;
    /**
     * The baseCurrency
     * @var string|null
     */
    protected ?string $baseCurrency = null;
    /**
     * The baseSellingPrice
     * @var float|null
     */
    protected ?float $baseSellingPrice = null;
    /**
     * The calculatedCommissionMediatorCurrency
     * @var float|null
     */
    protected ?float $calculatedCommissionMediatorCurrency = null;
    /**
     * The calculatedRevenue
     * @var float|null
     */
    protected ?float $calculatedRevenue = null;
    /**
     * The commissionAgencyCurrency
     * @var float|null
     */
    protected ?float $commissionAgencyCurrency = null;
    /**
     * The commissionPercentage
     * @var float|null
     */
    protected ?float $commissionPercentage = null;
    /**
     * The customerAdoptPurchaseValue
     * @var bool|null
     */
    protected ?bool $customerAdoptPurchaseValue = null;
    /**
     * The customerCurrency
     * @var string|null
     */
    protected ?string $customerCurrency = null;
    /**
     * The customerCurrencyRate
     * @var float|null
     */
    protected ?float $customerCurrencyRate = null;
    /**
     * The customerSellingPrice
     * @var float|null
     */
    protected ?float $customerSellingPrice = null;
    /**
     * The fromAgencyCurrencyRate
     * @var float|null
     */
    protected ?float $fromAgencyCurrencyRate = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The isCustomCustomerFxAmount
     * @var bool|null
     */
    protected ?bool $isCustomCustomerFxAmount = null;
    /**
     * The isIndividualSupplierCurrencyRate
     * @var bool|null
     */
    protected ?bool $isIndividualSupplierCurrencyRate = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The manualRevenue
     * @var bool|null
     */
    protected ?bool $manualRevenue = null;
    /**
     * The marginBase
     * @var float|null
     */
    protected ?float $marginBase = null;
    /**
     * The marginCoreValueIndicator
     * @var int|null
     */
    protected ?int $marginCoreValueIndicator = null;
    /**
     * The marginCustomer
     * @var float|null
     */
    protected ?float $marginCustomer = null;
    /**
     * The marginPercentage
     * @var float|null
     */
    protected ?float $marginPercentage = null;
    /**
     * The marginSupplier
     * @var float|null
     */
    protected ?float $marginSupplier = null;
    /**
     * The mediatorCommissionPercent
     * @var float|null
     */
    protected ?float $mediatorCommissionPercent = null;
    /**
     * The mediatorCurrency
     * @var string|null
     */
    protected ?string $mediatorCurrency = null;
    /**
     * The modeRevenueCalculation
     * @var string|null
     */
    protected ?string $modeRevenueCalculation = null;
    /**
     * The originalCalculatedRevenue
     * @var float|null
     */
    protected ?float $originalCalculatedRevenue = null;
    /**
     * The originalGrantedRevenue
     * @var float|null
     */
    protected ?float $originalGrantedRevenue = null;
    /**
     * The originalSupplierCommissionAmount
     * @var float|null
     */
    protected ?float $originalSupplierCommissionAmount = null;
    /**
     * The paidCommissionMediatorCurrency
     * @var float|null
     */
    protected ?float $paidCommissionMediatorCurrency = null;
    /**
     * The pricingCalculationMode
     * @var int|null
     */
    protected ?int $pricingCalculationMode = null;
    /**
     * The providedMediatorCommissionOption
     * @var string|null
     */
    protected ?string $providedMediatorCommissionOption = null;
    /**
     * The sellItemCoreValueIndicator
     * @var int|null
     */
    protected ?int $sellItemCoreValueIndicator = null;
    /**
     * The sumOfFees
     * @var float|null
     */
    protected ?float $sumOfFees = null;
    /**
     * The supplierBuyingPrice
     * @var float|null
     */
    protected ?float $supplierBuyingPrice = null;
    /**
     * The supplierCommissionAmount
     * @var float|null
     */
    protected ?float $supplierCommissionAmount = null;
    /**
     * The supplierCurrency
     * @var string|null
     */
    protected ?string $supplierCurrency = null;
    /**
     * The supplierCurrencyRate
     * @var float|null
     */
    protected ?float $supplierCurrencyRate = null;
    /**
     * The supplierSellingPrice
     * @var float|null
     */
    protected ?float $supplierSellingPrice = null;
    /**
     * The toAgencyCurrencyRate
     * @var float|null
     */
    protected ?float $toAgencyCurrencyRate = null;
    /**
     * Constructor method for SellItemPricingDTO
     * @uses SellItemPricingDTO::setAgencyCurrency()
     * @uses SellItemPricingDTO::setBaseBuyingPrice()
     * @uses SellItemPricingDTO::setBaseCurrency()
     * @uses SellItemPricingDTO::setBaseSellingPrice()
     * @uses SellItemPricingDTO::setCalculatedCommissionMediatorCurrency()
     * @uses SellItemPricingDTO::setCalculatedRevenue()
     * @uses SellItemPricingDTO::setCommissionAgencyCurrency()
     * @uses SellItemPricingDTO::setCommissionPercentage()
     * @uses SellItemPricingDTO::setCustomerAdoptPurchaseValue()
     * @uses SellItemPricingDTO::setCustomerCurrency()
     * @uses SellItemPricingDTO::setCustomerCurrencyRate()
     * @uses SellItemPricingDTO::setCustomerSellingPrice()
     * @uses SellItemPricingDTO::setFromAgencyCurrencyRate()
     * @uses SellItemPricingDTO::setGrantedRevenue()
     * @uses SellItemPricingDTO::setIsCustomCustomerFxAmount()
     * @uses SellItemPricingDTO::setIsIndividualSupplierCurrencyRate()
     * @uses SellItemPricingDTO::setItemId()
     * @uses SellItemPricingDTO::setManualRevenue()
     * @uses SellItemPricingDTO::setMarginBase()
     * @uses SellItemPricingDTO::setMarginCoreValueIndicator()
     * @uses SellItemPricingDTO::setMarginCustomer()
     * @uses SellItemPricingDTO::setMarginPercentage()
     * @uses SellItemPricingDTO::setMarginSupplier()
     * @uses SellItemPricingDTO::setMediatorCommissionPercent()
     * @uses SellItemPricingDTO::setMediatorCurrency()
     * @uses SellItemPricingDTO::setModeRevenueCalculation()
     * @uses SellItemPricingDTO::setOriginalCalculatedRevenue()
     * @uses SellItemPricingDTO::setOriginalGrantedRevenue()
     * @uses SellItemPricingDTO::setOriginalSupplierCommissionAmount()
     * @uses SellItemPricingDTO::setPaidCommissionMediatorCurrency()
     * @uses SellItemPricingDTO::setPricingCalculationMode()
     * @uses SellItemPricingDTO::setProvidedMediatorCommissionOption()
     * @uses SellItemPricingDTO::setSellItemCoreValueIndicator()
     * @uses SellItemPricingDTO::setSumOfFees()
     * @uses SellItemPricingDTO::setSupplierBuyingPrice()
     * @uses SellItemPricingDTO::setSupplierCommissionAmount()
     * @uses SellItemPricingDTO::setSupplierCurrency()
     * @uses SellItemPricingDTO::setSupplierCurrencyRate()
     * @uses SellItemPricingDTO::setSupplierSellingPrice()
     * @uses SellItemPricingDTO::setToAgencyCurrencyRate()
     * @param string $agencyCurrency
     * @param float $baseBuyingPrice
     * @param string $baseCurrency
     * @param float $baseSellingPrice
     * @param float $calculatedCommissionMediatorCurrency
     * @param float $calculatedRevenue
     * @param float $commissionAgencyCurrency
     * @param float $commissionPercentage
     * @param bool $customerAdoptPurchaseValue
     * @param string $customerCurrency
     * @param float $customerCurrencyRate
     * @param float $customerSellingPrice
     * @param float $fromAgencyCurrencyRate
     * @param float $grantedRevenue
     * @param bool $isCustomCustomerFxAmount
     * @param bool $isIndividualSupplierCurrencyRate
     * @param int $itemId
     * @param bool $manualRevenue
     * @param float $marginBase
     * @param int $marginCoreValueIndicator
     * @param float $marginCustomer
     * @param float $marginPercentage
     * @param float $marginSupplier
     * @param float $mediatorCommissionPercent
     * @param string $mediatorCurrency
     * @param string $modeRevenueCalculation
     * @param float $originalCalculatedRevenue
     * @param float $originalGrantedRevenue
     * @param float $originalSupplierCommissionAmount
     * @param float $paidCommissionMediatorCurrency
     * @param int $pricingCalculationMode
     * @param string $providedMediatorCommissionOption
     * @param int $sellItemCoreValueIndicator
     * @param float $sumOfFees
     * @param float $supplierBuyingPrice
     * @param float $supplierCommissionAmount
     * @param string $supplierCurrency
     * @param float $supplierCurrencyRate
     * @param float $supplierSellingPrice
     * @param float $toAgencyCurrencyRate
     */
    public function __construct(?string $agencyCurrency = null, ?float $baseBuyingPrice = null, ?string $baseCurrency = null, ?float $baseSellingPrice = null, ?float $calculatedCommissionMediatorCurrency = null, ?float $calculatedRevenue = null, ?float $commissionAgencyCurrency = null, ?float $commissionPercentage = null, ?bool $customerAdoptPurchaseValue = null, ?string $customerCurrency = null, ?float $customerCurrencyRate = null, ?float $customerSellingPrice = null, ?float $fromAgencyCurrencyRate = null, ?float $grantedRevenue = null, ?bool $isCustomCustomerFxAmount = null, ?bool $isIndividualSupplierCurrencyRate = null, ?int $itemId = null, ?bool $manualRevenue = null, ?float $marginBase = null, ?int $marginCoreValueIndicator = null, ?float $marginCustomer = null, ?float $marginPercentage = null, ?float $marginSupplier = null, ?float $mediatorCommissionPercent = null, ?string $mediatorCurrency = null, ?string $modeRevenueCalculation = null, ?float $originalCalculatedRevenue = null, ?float $originalGrantedRevenue = null, ?float $originalSupplierCommissionAmount = null, ?float $paidCommissionMediatorCurrency = null, ?int $pricingCalculationMode = null, ?string $providedMediatorCommissionOption = null, ?int $sellItemCoreValueIndicator = null, ?float $sumOfFees = null, ?float $supplierBuyingPrice = null, ?float $supplierCommissionAmount = null, ?string $supplierCurrency = null, ?float $supplierCurrencyRate = null, ?float $supplierSellingPrice = null, ?float $toAgencyCurrencyRate = null)
    {
        $this
            ->setAgencyCurrency($agencyCurrency)
            ->setBaseBuyingPrice($baseBuyingPrice)
            ->setBaseCurrency($baseCurrency)
            ->setBaseSellingPrice($baseSellingPrice)
            ->setCalculatedCommissionMediatorCurrency($calculatedCommissionMediatorCurrency)
            ->setCalculatedRevenue($calculatedRevenue)
            ->setCommissionAgencyCurrency($commissionAgencyCurrency)
            ->setCommissionPercentage($commissionPercentage)
            ->setCustomerAdoptPurchaseValue($customerAdoptPurchaseValue)
            ->setCustomerCurrency($customerCurrency)
            ->setCustomerCurrencyRate($customerCurrencyRate)
            ->setCustomerSellingPrice($customerSellingPrice)
            ->setFromAgencyCurrencyRate($fromAgencyCurrencyRate)
            ->setGrantedRevenue($grantedRevenue)
            ->setIsCustomCustomerFxAmount($isCustomCustomerFxAmount)
            ->setIsIndividualSupplierCurrencyRate($isIndividualSupplierCurrencyRate)
            ->setItemId($itemId)
            ->setManualRevenue($manualRevenue)
            ->setMarginBase($marginBase)
            ->setMarginCoreValueIndicator($marginCoreValueIndicator)
            ->setMarginCustomer($marginCustomer)
            ->setMarginPercentage($marginPercentage)
            ->setMarginSupplier($marginSupplier)
            ->setMediatorCommissionPercent($mediatorCommissionPercent)
            ->setMediatorCurrency($mediatorCurrency)
            ->setModeRevenueCalculation($modeRevenueCalculation)
            ->setOriginalCalculatedRevenue($originalCalculatedRevenue)
            ->setOriginalGrantedRevenue($originalGrantedRevenue)
            ->setOriginalSupplierCommissionAmount($originalSupplierCommissionAmount)
            ->setPaidCommissionMediatorCurrency($paidCommissionMediatorCurrency)
            ->setPricingCalculationMode($pricingCalculationMode)
            ->setProvidedMediatorCommissionOption($providedMediatorCommissionOption)
            ->setSellItemCoreValueIndicator($sellItemCoreValueIndicator)
            ->setSumOfFees($sumOfFees)
            ->setSupplierBuyingPrice($supplierBuyingPrice)
            ->setSupplierCommissionAmount($supplierCommissionAmount)
            ->setSupplierCurrency($supplierCurrency)
            ->setSupplierCurrencyRate($supplierCurrencyRate)
            ->setSupplierSellingPrice($supplierSellingPrice)
            ->setToAgencyCurrencyRate($toAgencyCurrencyRate);
    }
    /**
     * Get agencyCurrency value
     * @return string|null
     */
    public function getAgencyCurrency(): ?string
    {
        return $this->agencyCurrency;
    }
    /**
     * Set agencyCurrency value
     * @param string $agencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setAgencyCurrency(?string $agencyCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyCurrency) && !is_string($agencyCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyCurrency, true), gettype($agencyCurrency)), __LINE__);
        }
        $this->agencyCurrency = $agencyCurrency;
        
        return $this;
    }
    /**
     * Get baseBuyingPrice value
     * @return float|null
     */
    public function getBaseBuyingPrice(): ?float
    {
        return $this->baseBuyingPrice;
    }
    /**
     * Set baseBuyingPrice value
     * @param float $baseBuyingPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setBaseBuyingPrice(?float $baseBuyingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($baseBuyingPrice) && !(is_float($baseBuyingPrice) || is_numeric($baseBuyingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseBuyingPrice, true), gettype($baseBuyingPrice)), __LINE__);
        }
        $this->baseBuyingPrice = $baseBuyingPrice;
        
        return $this;
    }
    /**
     * Get baseCurrency value
     * @return string|null
     */
    public function getBaseCurrency(): ?string
    {
        return $this->baseCurrency;
    }
    /**
     * Set baseCurrency value
     * @param string $baseCurrency
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setBaseCurrency(?string $baseCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($baseCurrency) && !is_string($baseCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseCurrency, true), gettype($baseCurrency)), __LINE__);
        }
        $this->baseCurrency = $baseCurrency;
        
        return $this;
    }
    /**
     * Get baseSellingPrice value
     * @return float|null
     */
    public function getBaseSellingPrice(): ?float
    {
        return $this->baseSellingPrice;
    }
    /**
     * Set baseSellingPrice value
     * @param float $baseSellingPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setBaseSellingPrice(?float $baseSellingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($baseSellingPrice) && !(is_float($baseSellingPrice) || is_numeric($baseSellingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseSellingPrice, true), gettype($baseSellingPrice)), __LINE__);
        }
        $this->baseSellingPrice = $baseSellingPrice;
        
        return $this;
    }
    /**
     * Get calculatedCommissionMediatorCurrency value
     * @return float|null
     */
    public function getCalculatedCommissionMediatorCurrency(): ?float
    {
        return $this->calculatedCommissionMediatorCurrency;
    }
    /**
     * Set calculatedCommissionMediatorCurrency value
     * @param float $calculatedCommissionMediatorCurrency
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setCalculatedCommissionMediatorCurrency(?float $calculatedCommissionMediatorCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedCommissionMediatorCurrency) && !(is_float($calculatedCommissionMediatorCurrency) || is_numeric($calculatedCommissionMediatorCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedCommissionMediatorCurrency, true), gettype($calculatedCommissionMediatorCurrency)), __LINE__);
        }
        $this->calculatedCommissionMediatorCurrency = $calculatedCommissionMediatorCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
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
     * Get commissionAgencyCurrency value
     * @return float|null
     */
    public function getCommissionAgencyCurrency(): ?float
    {
        return $this->commissionAgencyCurrency;
    }
    /**
     * Set commissionAgencyCurrency value
     * @param float $commissionAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setCommissionAgencyCurrency(?float $commissionAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAgencyCurrency) && !(is_float($commissionAgencyCurrency) || is_numeric($commissionAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAgencyCurrency, true), gettype($commissionAgencyCurrency)), __LINE__);
        }
        $this->commissionAgencyCurrency = $commissionAgencyCurrency;
        
        return $this;
    }
    /**
     * Get commissionPercentage value
     * @return float|null
     */
    public function getCommissionPercentage(): ?float
    {
        return $this->commissionPercentage;
    }
    /**
     * Set commissionPercentage value
     * @param float $commissionPercentage
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setCommissionPercentage(?float $commissionPercentage = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercentage) && !(is_float($commissionPercentage) || is_numeric($commissionPercentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercentage, true), gettype($commissionPercentage)), __LINE__);
        }
        $this->commissionPercentage = $commissionPercentage;
        
        return $this;
    }
    /**
     * Get customerAdoptPurchaseValue value
     * @return bool|null
     */
    public function getCustomerAdoptPurchaseValue(): ?bool
    {
        return $this->customerAdoptPurchaseValue;
    }
    /**
     * Set customerAdoptPurchaseValue value
     * @param bool $customerAdoptPurchaseValue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setCustomerAdoptPurchaseValue(?bool $customerAdoptPurchaseValue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($customerAdoptPurchaseValue) && !is_bool($customerAdoptPurchaseValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customerAdoptPurchaseValue, true), gettype($customerAdoptPurchaseValue)), __LINE__);
        }
        $this->customerAdoptPurchaseValue = $customerAdoptPurchaseValue;
        
        return $this;
    }
    /**
     * Get customerCurrency value
     * @return string|null
     */
    public function getCustomerCurrency(): ?string
    {
        return $this->customerCurrency;
    }
    /**
     * Set customerCurrency value
     * @param string $customerCurrency
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setCustomerCurrency(?string $customerCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCurrency) && !is_string($customerCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCurrency, true), gettype($customerCurrency)), __LINE__);
        }
        $this->customerCurrency = $customerCurrency;
        
        return $this;
    }
    /**
     * Get customerCurrencyRate value
     * @return float|null
     */
    public function getCustomerCurrencyRate(): ?float
    {
        return $this->customerCurrencyRate;
    }
    /**
     * Set customerCurrencyRate value
     * @param float $customerCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setCustomerCurrencyRate(?float $customerCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($customerCurrencyRate) && !(is_float($customerCurrencyRate) || is_numeric($customerCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customerCurrencyRate, true), gettype($customerCurrencyRate)), __LINE__);
        }
        $this->customerCurrencyRate = $customerCurrencyRate;
        
        return $this;
    }
    /**
     * Get customerSellingPrice value
     * @return float|null
     */
    public function getCustomerSellingPrice(): ?float
    {
        return $this->customerSellingPrice;
    }
    /**
     * Set customerSellingPrice value
     * @param float $customerSellingPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setCustomerSellingPrice(?float $customerSellingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($customerSellingPrice) && !(is_float($customerSellingPrice) || is_numeric($customerSellingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customerSellingPrice, true), gettype($customerSellingPrice)), __LINE__);
        }
        $this->customerSellingPrice = $customerSellingPrice;
        
        return $this;
    }
    /**
     * Get fromAgencyCurrencyRate value
     * @return float|null
     */
    public function getFromAgencyCurrencyRate(): ?float
    {
        return $this->fromAgencyCurrencyRate;
    }
    /**
     * Set fromAgencyCurrencyRate value
     * @param float $fromAgencyCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setFromAgencyCurrencyRate(?float $fromAgencyCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($fromAgencyCurrencyRate) && !(is_float($fromAgencyCurrencyRate) || is_numeric($fromAgencyCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fromAgencyCurrencyRate, true), gettype($fromAgencyCurrencyRate)), __LINE__);
        }
        $this->fromAgencyCurrencyRate = $fromAgencyCurrencyRate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
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
     * Get isCustomCustomerFxAmount value
     * @return bool|null
     */
    public function getIsCustomCustomerFxAmount(): ?bool
    {
        return $this->isCustomCustomerFxAmount;
    }
    /**
     * Set isCustomCustomerFxAmount value
     * @param bool $isCustomCustomerFxAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setIsCustomCustomerFxAmount(?bool $isCustomCustomerFxAmount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCustomCustomerFxAmount) && !is_bool($isCustomCustomerFxAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCustomCustomerFxAmount, true), gettype($isCustomCustomerFxAmount)), __LINE__);
        }
        $this->isCustomCustomerFxAmount = $isCustomCustomerFxAmount;
        
        return $this;
    }
    /**
     * Get isIndividualSupplierCurrencyRate value
     * @return bool|null
     */
    public function getIsIndividualSupplierCurrencyRate(): ?bool
    {
        return $this->isIndividualSupplierCurrencyRate;
    }
    /**
     * Set isIndividualSupplierCurrencyRate value
     * @param bool $isIndividualSupplierCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setIsIndividualSupplierCurrencyRate(?bool $isIndividualSupplierCurrencyRate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isIndividualSupplierCurrencyRate) && !is_bool($isIndividualSupplierCurrencyRate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isIndividualSupplierCurrencyRate, true), gettype($isIndividualSupplierCurrencyRate)), __LINE__);
        }
        $this->isIndividualSupplierCurrencyRate = $isIndividualSupplierCurrencyRate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
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
     * Get manualRevenue value
     * @return bool|null
     */
    public function getManualRevenue(): ?bool
    {
        return $this->manualRevenue;
    }
    /**
     * Set manualRevenue value
     * @param bool $manualRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setManualRevenue(?bool $manualRevenue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manualRevenue) && !is_bool($manualRevenue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manualRevenue, true), gettype($manualRevenue)), __LINE__);
        }
        $this->manualRevenue = $manualRevenue;
        
        return $this;
    }
    /**
     * Get marginBase value
     * @return float|null
     */
    public function getMarginBase(): ?float
    {
        return $this->marginBase;
    }
    /**
     * Set marginBase value
     * @param float $marginBase
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setMarginBase(?float $marginBase = null): self
    {
        // validation for constraint: float
        if (!is_null($marginBase) && !(is_float($marginBase) || is_numeric($marginBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginBase, true), gettype($marginBase)), __LINE__);
        }
        $this->marginBase = $marginBase;
        
        return $this;
    }
    /**
     * Get marginCoreValueIndicator value
     * @return int|null
     */
    public function getMarginCoreValueIndicator(): ?int
    {
        return $this->marginCoreValueIndicator;
    }
    /**
     * Set marginCoreValueIndicator value
     * @param int $marginCoreValueIndicator
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setMarginCoreValueIndicator(?int $marginCoreValueIndicator = null): self
    {
        // validation for constraint: int
        if (!is_null($marginCoreValueIndicator) && !(is_int($marginCoreValueIndicator) || ctype_digit($marginCoreValueIndicator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($marginCoreValueIndicator, true), gettype($marginCoreValueIndicator)), __LINE__);
        }
        $this->marginCoreValueIndicator = $marginCoreValueIndicator;
        
        return $this;
    }
    /**
     * Get marginCustomer value
     * @return float|null
     */
    public function getMarginCustomer(): ?float
    {
        return $this->marginCustomer;
    }
    /**
     * Set marginCustomer value
     * @param float $marginCustomer
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setMarginCustomer(?float $marginCustomer = null): self
    {
        // validation for constraint: float
        if (!is_null($marginCustomer) && !(is_float($marginCustomer) || is_numeric($marginCustomer))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginCustomer, true), gettype($marginCustomer)), __LINE__);
        }
        $this->marginCustomer = $marginCustomer;
        
        return $this;
    }
    /**
     * Get marginPercentage value
     * @return float|null
     */
    public function getMarginPercentage(): ?float
    {
        return $this->marginPercentage;
    }
    /**
     * Set marginPercentage value
     * @param float $marginPercentage
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setMarginPercentage(?float $marginPercentage = null): self
    {
        // validation for constraint: float
        if (!is_null($marginPercentage) && !(is_float($marginPercentage) || is_numeric($marginPercentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginPercentage, true), gettype($marginPercentage)), __LINE__);
        }
        $this->marginPercentage = $marginPercentage;
        
        return $this;
    }
    /**
     * Get marginSupplier value
     * @return float|null
     */
    public function getMarginSupplier(): ?float
    {
        return $this->marginSupplier;
    }
    /**
     * Set marginSupplier value
     * @param float $marginSupplier
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setMarginSupplier(?float $marginSupplier = null): self
    {
        // validation for constraint: float
        if (!is_null($marginSupplier) && !(is_float($marginSupplier) || is_numeric($marginSupplier))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginSupplier, true), gettype($marginSupplier)), __LINE__);
        }
        $this->marginSupplier = $marginSupplier;
        
        return $this;
    }
    /**
     * Get mediatorCommissionPercent value
     * @return float|null
     */
    public function getMediatorCommissionPercent(): ?float
    {
        return $this->mediatorCommissionPercent;
    }
    /**
     * Set mediatorCommissionPercent value
     * @param float $mediatorCommissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setMediatorCommissionPercent(?float $mediatorCommissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorCommissionPercent) && !(is_float($mediatorCommissionPercent) || is_numeric($mediatorCommissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorCommissionPercent, true), gettype($mediatorCommissionPercent)), __LINE__);
        }
        $this->mediatorCommissionPercent = $mediatorCommissionPercent;
        
        return $this;
    }
    /**
     * Get mediatorCurrency value
     * @return string|null
     */
    public function getMediatorCurrency(): ?string
    {
        return $this->mediatorCurrency;
    }
    /**
     * Set mediatorCurrency value
     * @param string $mediatorCurrency
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setMediatorCurrency(?string $mediatorCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorCurrency) && !is_string($mediatorCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorCurrency, true), gettype($mediatorCurrency)), __LINE__);
        }
        $this->mediatorCurrency = $mediatorCurrency;
        
        return $this;
    }
    /**
     * Get modeRevenueCalculation value
     * @return string|null
     */
    public function getModeRevenueCalculation(): ?string
    {
        return $this->modeRevenueCalculation;
    }
    /**
     * Set modeRevenueCalculation value
     * @param string $modeRevenueCalculation
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setModeRevenueCalculation(?string $modeRevenueCalculation = null): self
    {
        // validation for constraint: string
        if (!is_null($modeRevenueCalculation) && !is_string($modeRevenueCalculation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRevenueCalculation, true), gettype($modeRevenueCalculation)), __LINE__);
        }
        $this->modeRevenueCalculation = $modeRevenueCalculation;
        
        return $this;
    }
    /**
     * Get originalCalculatedRevenue value
     * @return float|null
     */
    public function getOriginalCalculatedRevenue(): ?float
    {
        return $this->originalCalculatedRevenue;
    }
    /**
     * Set originalCalculatedRevenue value
     * @param float $originalCalculatedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setOriginalCalculatedRevenue(?float $originalCalculatedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($originalCalculatedRevenue) && !(is_float($originalCalculatedRevenue) || is_numeric($originalCalculatedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalCalculatedRevenue, true), gettype($originalCalculatedRevenue)), __LINE__);
        }
        $this->originalCalculatedRevenue = $originalCalculatedRevenue;
        
        return $this;
    }
    /**
     * Get originalGrantedRevenue value
     * @return float|null
     */
    public function getOriginalGrantedRevenue(): ?float
    {
        return $this->originalGrantedRevenue;
    }
    /**
     * Set originalGrantedRevenue value
     * @param float $originalGrantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setOriginalGrantedRevenue(?float $originalGrantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($originalGrantedRevenue) && !(is_float($originalGrantedRevenue) || is_numeric($originalGrantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalGrantedRevenue, true), gettype($originalGrantedRevenue)), __LINE__);
        }
        $this->originalGrantedRevenue = $originalGrantedRevenue;
        
        return $this;
    }
    /**
     * Get originalSupplierCommissionAmount value
     * @return float|null
     */
    public function getOriginalSupplierCommissionAmount(): ?float
    {
        return $this->originalSupplierCommissionAmount;
    }
    /**
     * Set originalSupplierCommissionAmount value
     * @param float $originalSupplierCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setOriginalSupplierCommissionAmount(?float $originalSupplierCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalSupplierCommissionAmount) && !(is_float($originalSupplierCommissionAmount) || is_numeric($originalSupplierCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalSupplierCommissionAmount, true), gettype($originalSupplierCommissionAmount)), __LINE__);
        }
        $this->originalSupplierCommissionAmount = $originalSupplierCommissionAmount;
        
        return $this;
    }
    /**
     * Get paidCommissionMediatorCurrency value
     * @return float|null
     */
    public function getPaidCommissionMediatorCurrency(): ?float
    {
        return $this->paidCommissionMediatorCurrency;
    }
    /**
     * Set paidCommissionMediatorCurrency value
     * @param float $paidCommissionMediatorCurrency
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setPaidCommissionMediatorCurrency(?float $paidCommissionMediatorCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($paidCommissionMediatorCurrency) && !(is_float($paidCommissionMediatorCurrency) || is_numeric($paidCommissionMediatorCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidCommissionMediatorCurrency, true), gettype($paidCommissionMediatorCurrency)), __LINE__);
        }
        $this->paidCommissionMediatorCurrency = $paidCommissionMediatorCurrency;
        
        return $this;
    }
    /**
     * Get pricingCalculationMode value
     * @return int|null
     */
    public function getPricingCalculationMode(): ?int
    {
        return $this->pricingCalculationMode;
    }
    /**
     * Set pricingCalculationMode value
     * @param int $pricingCalculationMode
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setPricingCalculationMode(?int $pricingCalculationMode = null): self
    {
        // validation for constraint: int
        if (!is_null($pricingCalculationMode) && !(is_int($pricingCalculationMode) || ctype_digit($pricingCalculationMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pricingCalculationMode, true), gettype($pricingCalculationMode)), __LINE__);
        }
        $this->pricingCalculationMode = $pricingCalculationMode;
        
        return $this;
    }
    /**
     * Get providedMediatorCommissionOption value
     * @return string|null
     */
    public function getProvidedMediatorCommissionOption(): ?string
    {
        return $this->providedMediatorCommissionOption;
    }
    /**
     * Set providedMediatorCommissionOption value
     * @param string $providedMediatorCommissionOption
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setProvidedMediatorCommissionOption(?string $providedMediatorCommissionOption = null): self
    {
        // validation for constraint: string
        if (!is_null($providedMediatorCommissionOption) && !is_string($providedMediatorCommissionOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providedMediatorCommissionOption, true), gettype($providedMediatorCommissionOption)), __LINE__);
        }
        $this->providedMediatorCommissionOption = $providedMediatorCommissionOption;
        
        return $this;
    }
    /**
     * Get sellItemCoreValueIndicator value
     * @return int|null
     */
    public function getSellItemCoreValueIndicator(): ?int
    {
        return $this->sellItemCoreValueIndicator;
    }
    /**
     * Set sellItemCoreValueIndicator value
     * @param int $sellItemCoreValueIndicator
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setSellItemCoreValueIndicator(?int $sellItemCoreValueIndicator = null): self
    {
        // validation for constraint: int
        if (!is_null($sellItemCoreValueIndicator) && !(is_int($sellItemCoreValueIndicator) || ctype_digit($sellItemCoreValueIndicator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemCoreValueIndicator, true), gettype($sellItemCoreValueIndicator)), __LINE__);
        }
        $this->sellItemCoreValueIndicator = $sellItemCoreValueIndicator;
        
        return $this;
    }
    /**
     * Get sumOfFees value
     * @return float|null
     */
    public function getSumOfFees(): ?float
    {
        return $this->sumOfFees;
    }
    /**
     * Set sumOfFees value
     * @param float $sumOfFees
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setSumOfFees(?float $sumOfFees = null): self
    {
        // validation for constraint: float
        if (!is_null($sumOfFees) && !(is_float($sumOfFees) || is_numeric($sumOfFees))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumOfFees, true), gettype($sumOfFees)), __LINE__);
        }
        $this->sumOfFees = $sumOfFees;
        
        return $this;
    }
    /**
     * Get supplierBuyingPrice value
     * @return float|null
     */
    public function getSupplierBuyingPrice(): ?float
    {
        return $this->supplierBuyingPrice;
    }
    /**
     * Set supplierBuyingPrice value
     * @param float $supplierBuyingPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setSupplierBuyingPrice(?float $supplierBuyingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierBuyingPrice) && !(is_float($supplierBuyingPrice) || is_numeric($supplierBuyingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierBuyingPrice, true), gettype($supplierBuyingPrice)), __LINE__);
        }
        $this->supplierBuyingPrice = $supplierBuyingPrice;
        
        return $this;
    }
    /**
     * Get supplierCommissionAmount value
     * @return float|null
     */
    public function getSupplierCommissionAmount(): ?float
    {
        return $this->supplierCommissionAmount;
    }
    /**
     * Set supplierCommissionAmount value
     * @param float $supplierCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setSupplierCommissionAmount(?float $supplierCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierCommissionAmount) && !(is_float($supplierCommissionAmount) || is_numeric($supplierCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierCommissionAmount, true), gettype($supplierCommissionAmount)), __LINE__);
        }
        $this->supplierCommissionAmount = $supplierCommissionAmount;
        
        return $this;
    }
    /**
     * Get supplierCurrency value
     * @return string|null
     */
    public function getSupplierCurrency(): ?string
    {
        return $this->supplierCurrency;
    }
    /**
     * Set supplierCurrency value
     * @param string $supplierCurrency
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setSupplierCurrency(?string $supplierCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCurrency) && !is_string($supplierCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCurrency, true), gettype($supplierCurrency)), __LINE__);
        }
        $this->supplierCurrency = $supplierCurrency;
        
        return $this;
    }
    /**
     * Get supplierCurrencyRate value
     * @return float|null
     */
    public function getSupplierCurrencyRate(): ?float
    {
        return $this->supplierCurrencyRate;
    }
    /**
     * Set supplierCurrencyRate value
     * @param float $supplierCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setSupplierCurrencyRate(?float $supplierCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierCurrencyRate) && !(is_float($supplierCurrencyRate) || is_numeric($supplierCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierCurrencyRate, true), gettype($supplierCurrencyRate)), __LINE__);
        }
        $this->supplierCurrencyRate = $supplierCurrencyRate;
        
        return $this;
    }
    /**
     * Get supplierSellingPrice value
     * @return float|null
     */
    public function getSupplierSellingPrice(): ?float
    {
        return $this->supplierSellingPrice;
    }
    /**
     * Set supplierSellingPrice value
     * @param float $supplierSellingPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setSupplierSellingPrice(?float $supplierSellingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierSellingPrice) && !(is_float($supplierSellingPrice) || is_numeric($supplierSellingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierSellingPrice, true), gettype($supplierSellingPrice)), __LINE__);
        }
        $this->supplierSellingPrice = $supplierSellingPrice;
        
        return $this;
    }
    /**
     * Get toAgencyCurrencyRate value
     * @return float|null
     */
    public function getToAgencyCurrencyRate(): ?float
    {
        return $this->toAgencyCurrencyRate;
    }
    /**
     * Set toAgencyCurrencyRate value
     * @param float $toAgencyCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPricingDTO
     */
    public function setToAgencyCurrencyRate(?float $toAgencyCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($toAgencyCurrencyRate) && !(is_float($toAgencyCurrencyRate) || is_numeric($toAgencyCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($toAgencyCurrencyRate, true), gettype($toAgencyCurrencyRate)), __LINE__);
        }
        $this->toAgencyCurrencyRate = $toAgencyCurrencyRate;
        
        return $this;
    }
}
