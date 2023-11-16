<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmMidocoSettlLevelDTO StructType
 * @subpackage Structs
 */
class CrmMidocoSettlLevelDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The bottomAmount
     * @var float|null
     */
    protected ?float $bottomAmount = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The flatrateAmount
     * @var float|null
     */
    protected ?float $flatrateAmount = null;
    /**
     * The isAmountProUnit
     * @var bool|null
     */
    protected ?bool $isAmountProUnit = null;
    /**
     * The levelId
     * @var int|null
     */
    protected ?int $levelId = null;
    /**
     * The maxValue
     * @var float|null
     */
    protected ?float $maxValue = null;
    /**
     * The minValue
     * @var float|null
     */
    protected ?float $minValue = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The topAmount
     * @var float|null
     */
    protected ?float $topAmount = null;
    /**
     * Constructor method for CrmMidocoSettlLevelDTO
     * @uses CrmMidocoSettlLevelDTO::setAmount()
     * @uses CrmMidocoSettlLevelDTO::setBottomAmount()
     * @uses CrmMidocoSettlLevelDTO::setCustomerId()
     * @uses CrmMidocoSettlLevelDTO::setFlatrateAmount()
     * @uses CrmMidocoSettlLevelDTO::setIsAmountProUnit()
     * @uses CrmMidocoSettlLevelDTO::setLevelId()
     * @uses CrmMidocoSettlLevelDTO::setMaxValue()
     * @uses CrmMidocoSettlLevelDTO::setMinValue()
     * @uses CrmMidocoSettlLevelDTO::setPercent()
     * @uses CrmMidocoSettlLevelDTO::setSettlementId()
     * @uses CrmMidocoSettlLevelDTO::setTopAmount()
     * @param float $amount
     * @param float $bottomAmount
     * @param int $customerId
     * @param float $flatrateAmount
     * @param bool $isAmountProUnit
     * @param int $levelId
     * @param float $maxValue
     * @param float $minValue
     * @param float $percent
     * @param int $settlementId
     * @param float $topAmount
     */
    public function __construct(?float $amount = null, ?float $bottomAmount = null, ?int $customerId = null, ?float $flatrateAmount = null, ?bool $isAmountProUnit = null, ?int $levelId = null, ?float $maxValue = null, ?float $minValue = null, ?float $percent = null, ?int $settlementId = null, ?float $topAmount = null)
    {
        $this
            ->setAmount($amount)
            ->setBottomAmount($bottomAmount)
            ->setCustomerId($customerId)
            ->setFlatrateAmount($flatrateAmount)
            ->setIsAmountProUnit($isAmountProUnit)
            ->setLevelId($levelId)
            ->setMaxValue($maxValue)
            ->setMinValue($minValue)
            ->setPercent($percent)
            ->setSettlementId($settlementId)
            ->setTopAmount($topAmount);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlLevelDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get bottomAmount value
     * @return float|null
     */
    public function getBottomAmount(): ?float
    {
        return $this->bottomAmount;
    }
    /**
     * Set bottomAmount value
     * @param float $bottomAmount
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlLevelDTO
     */
    public function setBottomAmount(?float $bottomAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($bottomAmount) && !(is_float($bottomAmount) || is_numeric($bottomAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bottomAmount, true), gettype($bottomAmount)), __LINE__);
        }
        $this->bottomAmount = $bottomAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlLevelDTO
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
     * Get flatrateAmount value
     * @return float|null
     */
    public function getFlatrateAmount(): ?float
    {
        return $this->flatrateAmount;
    }
    /**
     * Set flatrateAmount value
     * @param float $flatrateAmount
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlLevelDTO
     */
    public function setFlatrateAmount(?float $flatrateAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($flatrateAmount) && !(is_float($flatrateAmount) || is_numeric($flatrateAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($flatrateAmount, true), gettype($flatrateAmount)), __LINE__);
        }
        $this->flatrateAmount = $flatrateAmount;
        
        return $this;
    }
    /**
     * Get isAmountProUnit value
     * @return bool|null
     */
    public function getIsAmountProUnit(): ?bool
    {
        return $this->isAmountProUnit;
    }
    /**
     * Set isAmountProUnit value
     * @param bool $isAmountProUnit
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlLevelDTO
     */
    public function setIsAmountProUnit(?bool $isAmountProUnit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAmountProUnit) && !is_bool($isAmountProUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAmountProUnit, true), gettype($isAmountProUnit)), __LINE__);
        }
        $this->isAmountProUnit = $isAmountProUnit;
        
        return $this;
    }
    /**
     * Get levelId value
     * @return int|null
     */
    public function getLevelId(): ?int
    {
        return $this->levelId;
    }
    /**
     * Set levelId value
     * @param int $levelId
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlLevelDTO
     */
    public function setLevelId(?int $levelId = null): self
    {
        // validation for constraint: int
        if (!is_null($levelId) && !(is_int($levelId) || ctype_digit($levelId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($levelId, true), gettype($levelId)), __LINE__);
        }
        $this->levelId = $levelId;
        
        return $this;
    }
    /**
     * Get maxValue value
     * @return float|null
     */
    public function getMaxValue(): ?float
    {
        return $this->maxValue;
    }
    /**
     * Set maxValue value
     * @param float $maxValue
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlLevelDTO
     */
    public function setMaxValue(?float $maxValue = null): self
    {
        // validation for constraint: float
        if (!is_null($maxValue) && !(is_float($maxValue) || is_numeric($maxValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxValue, true), gettype($maxValue)), __LINE__);
        }
        $this->maxValue = $maxValue;
        
        return $this;
    }
    /**
     * Get minValue value
     * @return float|null
     */
    public function getMinValue(): ?float
    {
        return $this->minValue;
    }
    /**
     * Set minValue value
     * @param float $minValue
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlLevelDTO
     */
    public function setMinValue(?float $minValue = null): self
    {
        // validation for constraint: float
        if (!is_null($minValue) && !(is_float($minValue) || is_numeric($minValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minValue, true), gettype($minValue)), __LINE__);
        }
        $this->minValue = $minValue;
        
        return $this;
    }
    /**
     * Get percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }
    /**
     * Set percent value
     * @param float $percent
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlLevelDTO
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->percent = $percent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlLevelDTO
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
     * Get topAmount value
     * @return float|null
     */
    public function getTopAmount(): ?float
    {
        return $this->topAmount;
    }
    /**
     * Set topAmount value
     * @param float $topAmount
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlLevelDTO
     */
    public function setTopAmount(?float $topAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($topAmount) && !(is_float($topAmount) || is_numeric($topAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($topAmount, true), gettype($topAmount)), __LINE__);
        }
        $this->topAmount = $topAmount;
        
        return $this;
    }
}
