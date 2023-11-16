<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFeeSellItemType StructType
 * @subpackage Structs
 */
class MidocoFeeSellItemType extends SellItemDTO
{
    /**
     * The MidocoCalcItem
     * Meta information extracted from the WSDL
     * - ref: MidocoCalcItem
     * @var \Pggns\MidocoApi\Order\StructType\CalcitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CalcitemDTO $MidocoCalcItem = null;
    /**
     * The MidocoSellItemPricing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSellItemPricing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $MidocoSellItemPricing = null;
    /**
     * The isUseCustomerCurrency
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isUseCustomerCurrency = null;
    /**
     * The dbUsePerMatch
     * @var bool|null
     */
    protected ?bool $dbUsePerMatch = null;
    /**
     * The perPax
     * @var bool|null
     */
    protected ?bool $perPax = null;
    /**
     * The dbMatchOnItemPrice
     * @var bool|null
     */
    protected ?bool $dbMatchOnItemPrice = null;
    /**
     * The forOrder
     * @var bool|null
     */
    protected ?bool $forOrder = null;
    /**
     * The isPercentage
     * @var bool|null
     */
    protected ?bool $isPercentage = null;
    /**
     * The percentage
     * @var float|null
     */
    protected ?float $percentage = null;
    /**
     * The isNettoFeeValue
     * @var bool|null
     */
    protected ?bool $isNettoFeeValue = null;
    /**
     * The takeParentVat
     * @var bool|null
     */
    protected ?bool $takeParentVat = null;
    /**
     * The noFeeSameDay
     * @var bool|null
     */
    protected ?bool $noFeeSameDay = null;
    /**
     * The noFeeSameDayCategory
     * @var string|null
     */
    protected ?string $noFeeSameDayCategory = null;
    /**
     * The noFeePrevDay
     * @var bool|null
     */
    protected ?bool $noFeePrevDay = null;
    /**
     * The noFeePrevDayCategory
     * @var string|null
     */
    protected ?string $noFeePrevDayCategory = null;
    /**
     * The oneFeeRelatedTicketsImport
     * @var bool|null
     */
    protected ?bool $oneFeeRelatedTicketsImport = null;
    /**
     * The feePriority
     * @var int|null
     */
    protected ?int $feePriority = null;
    /**
     * Constructor method for MidocoFeeSellItemType
     * @uses MidocoFeeSellItemType::setMidocoCalcItem()
     * @uses MidocoFeeSellItemType::setMidocoSellItemPricing()
     * @uses MidocoFeeSellItemType::setIsUseCustomerCurrency()
     * @uses MidocoFeeSellItemType::setDbUsePerMatch()
     * @uses MidocoFeeSellItemType::setPerPax()
     * @uses MidocoFeeSellItemType::setDbMatchOnItemPrice()
     * @uses MidocoFeeSellItemType::setForOrder()
     * @uses MidocoFeeSellItemType::setIsPercentage()
     * @uses MidocoFeeSellItemType::setPercentage()
     * @uses MidocoFeeSellItemType::setIsNettoFeeValue()
     * @uses MidocoFeeSellItemType::setTakeParentVat()
     * @uses MidocoFeeSellItemType::setNoFeeSameDay()
     * @uses MidocoFeeSellItemType::setNoFeeSameDayCategory()
     * @uses MidocoFeeSellItemType::setNoFeePrevDay()
     * @uses MidocoFeeSellItemType::setNoFeePrevDayCategory()
     * @uses MidocoFeeSellItemType::setOneFeeRelatedTicketsImport()
     * @uses MidocoFeeSellItemType::setFeePriority()
     * @param \Pggns\MidocoApi\Order\StructType\CalcitemDTO $midocoCalcItem
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing
     * @param bool $isUseCustomerCurrency
     * @param bool $dbUsePerMatch
     * @param bool $perPax
     * @param bool $dbMatchOnItemPrice
     * @param bool $forOrder
     * @param bool $isPercentage
     * @param float $percentage
     * @param bool $isNettoFeeValue
     * @param bool $takeParentVat
     * @param bool $noFeeSameDay
     * @param string $noFeeSameDayCategory
     * @param bool $noFeePrevDay
     * @param string $noFeePrevDayCategory
     * @param bool $oneFeeRelatedTicketsImport
     * @param int $feePriority
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CalcitemDTO $midocoCalcItem = null, ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing = null, ?bool $isUseCustomerCurrency = false, ?bool $dbUsePerMatch = null, ?bool $perPax = null, ?bool $dbMatchOnItemPrice = null, ?bool $forOrder = null, ?bool $isPercentage = null, ?float $percentage = null, ?bool $isNettoFeeValue = null, ?bool $takeParentVat = null, ?bool $noFeeSameDay = null, ?string $noFeeSameDayCategory = null, ?bool $noFeePrevDay = null, ?string $noFeePrevDayCategory = null, ?bool $oneFeeRelatedTicketsImport = null, ?int $feePriority = null)
    {
        $this
            ->setMidocoCalcItem($midocoCalcItem)
            ->setMidocoSellItemPricing($midocoSellItemPricing)
            ->setIsUseCustomerCurrency($isUseCustomerCurrency)
            ->setDbUsePerMatch($dbUsePerMatch)
            ->setPerPax($perPax)
            ->setDbMatchOnItemPrice($dbMatchOnItemPrice)
            ->setForOrder($forOrder)
            ->setIsPercentage($isPercentage)
            ->setPercentage($percentage)
            ->setIsNettoFeeValue($isNettoFeeValue)
            ->setTakeParentVat($takeParentVat)
            ->setNoFeeSameDay($noFeeSameDay)
            ->setNoFeeSameDayCategory($noFeeSameDayCategory)
            ->setNoFeePrevDay($noFeePrevDay)
            ->setNoFeePrevDayCategory($noFeePrevDayCategory)
            ->setOneFeeRelatedTicketsImport($oneFeeRelatedTicketsImport)
            ->setFeePriority($feePriority);
    }
    /**
     * Get MidocoCalcItem value
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO|null
     */
    public function getMidocoCalcItem(): ?\Pggns\MidocoApi\Order\StructType\CalcitemDTO
    {
        return $this->MidocoCalcItem;
    }
    /**
     * Set MidocoCalcItem value
     * @param \Pggns\MidocoApi\Order\StructType\CalcitemDTO $midocoCalcItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setMidocoCalcItem(?\Pggns\MidocoApi\Order\StructType\CalcitemDTO $midocoCalcItem = null): self
    {
        $this->MidocoCalcItem = $midocoCalcItem;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setMidocoSellItemPricing(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing = null): self
    {
        $this->MidocoSellItemPricing = $midocoSellItemPricing;
        
        return $this;
    }
    /**
     * Get isUseCustomerCurrency value
     * @return bool|null
     */
    public function getIsUseCustomerCurrency(): ?bool
    {
        return $this->isUseCustomerCurrency;
    }
    /**
     * Set isUseCustomerCurrency value
     * @param bool $isUseCustomerCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setIsUseCustomerCurrency(?bool $isUseCustomerCurrency = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isUseCustomerCurrency) && !is_bool($isUseCustomerCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUseCustomerCurrency, true), gettype($isUseCustomerCurrency)), __LINE__);
        }
        $this->isUseCustomerCurrency = $isUseCustomerCurrency;
        
        return $this;
    }
    /**
     * Get dbUsePerMatch value
     * @return bool|null
     */
    public function getDbUsePerMatch(): ?bool
    {
        return $this->dbUsePerMatch;
    }
    /**
     * Set dbUsePerMatch value
     * @param bool $dbUsePerMatch
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setDbUsePerMatch(?bool $dbUsePerMatch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dbUsePerMatch) && !is_bool($dbUsePerMatch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dbUsePerMatch, true), gettype($dbUsePerMatch)), __LINE__);
        }
        $this->dbUsePerMatch = $dbUsePerMatch;
        
        return $this;
    }
    /**
     * Get perPax value
     * @return bool|null
     */
    public function getPerPax(): ?bool
    {
        return $this->perPax;
    }
    /**
     * Set perPax value
     * @param bool $perPax
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setPerPax(?bool $perPax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($perPax) && !is_bool($perPax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($perPax, true), gettype($perPax)), __LINE__);
        }
        $this->perPax = $perPax;
        
        return $this;
    }
    /**
     * Get dbMatchOnItemPrice value
     * @return bool|null
     */
    public function getDbMatchOnItemPrice(): ?bool
    {
        return $this->dbMatchOnItemPrice;
    }
    /**
     * Set dbMatchOnItemPrice value
     * @param bool $dbMatchOnItemPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setDbMatchOnItemPrice(?bool $dbMatchOnItemPrice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dbMatchOnItemPrice) && !is_bool($dbMatchOnItemPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dbMatchOnItemPrice, true), gettype($dbMatchOnItemPrice)), __LINE__);
        }
        $this->dbMatchOnItemPrice = $dbMatchOnItemPrice;
        
        return $this;
    }
    /**
     * Get forOrder value
     * @return bool|null
     */
    public function getForOrder(): ?bool
    {
        return $this->forOrder;
    }
    /**
     * Set forOrder value
     * @param bool $forOrder
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setForOrder(?bool $forOrder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forOrder) && !is_bool($forOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forOrder, true), gettype($forOrder)), __LINE__);
        }
        $this->forOrder = $forOrder;
        
        return $this;
    }
    /**
     * Get isPercentage value
     * @return bool|null
     */
    public function getIsPercentage(): ?bool
    {
        return $this->isPercentage;
    }
    /**
     * Set isPercentage value
     * @param bool $isPercentage
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setIsPercentage(?bool $isPercentage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPercentage) && !is_bool($isPercentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPercentage, true), gettype($isPercentage)), __LINE__);
        }
        $this->isPercentage = $isPercentage;
        
        return $this;
    }
    /**
     * Get percentage value
     * @return float|null
     */
    public function getPercentage(): ?float
    {
        return $this->percentage;
    }
    /**
     * Set percentage value
     * @param float $percentage
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setPercentage(?float $percentage = null): self
    {
        // validation for constraint: float
        if (!is_null($percentage) && !(is_float($percentage) || is_numeric($percentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        $this->percentage = $percentage;
        
        return $this;
    }
    /**
     * Get isNettoFeeValue value
     * @return bool|null
     */
    public function getIsNettoFeeValue(): ?bool
    {
        return $this->isNettoFeeValue;
    }
    /**
     * Set isNettoFeeValue value
     * @param bool $isNettoFeeValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setIsNettoFeeValue(?bool $isNettoFeeValue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNettoFeeValue) && !is_bool($isNettoFeeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNettoFeeValue, true), gettype($isNettoFeeValue)), __LINE__);
        }
        $this->isNettoFeeValue = $isNettoFeeValue;
        
        return $this;
    }
    /**
     * Get takeParentVat value
     * @return bool|null
     */
    public function getTakeParentVat(): ?bool
    {
        return $this->takeParentVat;
    }
    /**
     * Set takeParentVat value
     * @param bool $takeParentVat
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setTakeParentVat(?bool $takeParentVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($takeParentVat) && !is_bool($takeParentVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($takeParentVat, true), gettype($takeParentVat)), __LINE__);
        }
        $this->takeParentVat = $takeParentVat;
        
        return $this;
    }
    /**
     * Get noFeeSameDay value
     * @return bool|null
     */
    public function getNoFeeSameDay(): ?bool
    {
        return $this->noFeeSameDay;
    }
    /**
     * Set noFeeSameDay value
     * @param bool $noFeeSameDay
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setNoFeeSameDay(?bool $noFeeSameDay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noFeeSameDay) && !is_bool($noFeeSameDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noFeeSameDay, true), gettype($noFeeSameDay)), __LINE__);
        }
        $this->noFeeSameDay = $noFeeSameDay;
        
        return $this;
    }
    /**
     * Get noFeeSameDayCategory value
     * @return string|null
     */
    public function getNoFeeSameDayCategory(): ?string
    {
        return $this->noFeeSameDayCategory;
    }
    /**
     * Set noFeeSameDayCategory value
     * @param string $noFeeSameDayCategory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setNoFeeSameDayCategory(?string $noFeeSameDayCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($noFeeSameDayCategory) && !is_string($noFeeSameDayCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noFeeSameDayCategory, true), gettype($noFeeSameDayCategory)), __LINE__);
        }
        $this->noFeeSameDayCategory = $noFeeSameDayCategory;
        
        return $this;
    }
    /**
     * Get noFeePrevDay value
     * @return bool|null
     */
    public function getNoFeePrevDay(): ?bool
    {
        return $this->noFeePrevDay;
    }
    /**
     * Set noFeePrevDay value
     * @param bool $noFeePrevDay
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setNoFeePrevDay(?bool $noFeePrevDay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noFeePrevDay) && !is_bool($noFeePrevDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noFeePrevDay, true), gettype($noFeePrevDay)), __LINE__);
        }
        $this->noFeePrevDay = $noFeePrevDay;
        
        return $this;
    }
    /**
     * Get noFeePrevDayCategory value
     * @return string|null
     */
    public function getNoFeePrevDayCategory(): ?string
    {
        return $this->noFeePrevDayCategory;
    }
    /**
     * Set noFeePrevDayCategory value
     * @param string $noFeePrevDayCategory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setNoFeePrevDayCategory(?string $noFeePrevDayCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($noFeePrevDayCategory) && !is_string($noFeePrevDayCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noFeePrevDayCategory, true), gettype($noFeePrevDayCategory)), __LINE__);
        }
        $this->noFeePrevDayCategory = $noFeePrevDayCategory;
        
        return $this;
    }
    /**
     * Get oneFeeRelatedTicketsImport value
     * @return bool|null
     */
    public function getOneFeeRelatedTicketsImport(): ?bool
    {
        return $this->oneFeeRelatedTicketsImport;
    }
    /**
     * Set oneFeeRelatedTicketsImport value
     * @param bool $oneFeeRelatedTicketsImport
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setOneFeeRelatedTicketsImport(?bool $oneFeeRelatedTicketsImport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($oneFeeRelatedTicketsImport) && !is_bool($oneFeeRelatedTicketsImport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oneFeeRelatedTicketsImport, true), gettype($oneFeeRelatedTicketsImport)), __LINE__);
        }
        $this->oneFeeRelatedTicketsImport = $oneFeeRelatedTicketsImport;
        
        return $this;
    }
    /**
     * Get feePriority value
     * @return int|null
     */
    public function getFeePriority(): ?int
    {
        return $this->feePriority;
    }
    /**
     * Set feePriority value
     * @param int $feePriority
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeSellItemType
     */
    public function setFeePriority(?int $feePriority = null): self
    {
        // validation for constraint: int
        if (!is_null($feePriority) && !(is_int($feePriority) || ctype_digit($feePriority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feePriority, true), gettype($feePriority)), __LINE__);
        }
        $this->feePriority = $feePriority;
        
        return $this;
    }
}
