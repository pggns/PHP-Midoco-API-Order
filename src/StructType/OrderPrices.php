<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderPrices StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderPrices extends AbstractStructBase
{
    /**
     * The deposit
     * @var float|null
     */
    protected ?float $deposit = null;
    /**
     * The inkasso
     * @var float|null
     */
    protected ?float $inkasso = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The displayedDeposit
     * @var float|null
     */
    protected ?float $displayedDeposit = null;
    /**
     * The displayedInkasso
     * @var float|null
     */
    protected ?float $displayedInkasso = null;
    /**
     * The displayedTotalPrice
     * @var float|null
     */
    protected ?float $displayedTotalPrice = null;
    /**
     * The depositDate
     * @var string|null
     */
    protected ?string $depositDate = null;
    /**
     * The finalDate
     * @var string|null
     */
    protected ?string $finalDate = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The depositPreset
     * @var bool|null
     */
    protected ?bool $depositPreset = null;
    /**
     * The totalPayment
     * @var float|null
     */
    protected ?float $totalPayment = null;
    /**
     * Constructor method for OrderPrices
     * @uses OrderPrices::setDeposit()
     * @uses OrderPrices::setInkasso()
     * @uses OrderPrices::setTotalPrice()
     * @uses OrderPrices::setDisplayedDeposit()
     * @uses OrderPrices::setDisplayedInkasso()
     * @uses OrderPrices::setDisplayedTotalPrice()
     * @uses OrderPrices::setDepositDate()
     * @uses OrderPrices::setFinalDate()
     * @uses OrderPrices::setIsStorno()
     * @uses OrderPrices::setDepositPreset()
     * @uses OrderPrices::setTotalPayment()
     * @param float $deposit
     * @param float $inkasso
     * @param float $totalPrice
     * @param float $displayedDeposit
     * @param float $displayedInkasso
     * @param float $displayedTotalPrice
     * @param string $depositDate
     * @param string $finalDate
     * @param bool $isStorno
     * @param bool $depositPreset
     * @param float $totalPayment
     */
    public function __construct(?float $deposit = null, ?float $inkasso = null, ?float $totalPrice = null, ?float $displayedDeposit = null, ?float $displayedInkasso = null, ?float $displayedTotalPrice = null, ?string $depositDate = null, ?string $finalDate = null, ?bool $isStorno = null, ?bool $depositPreset = null, ?float $totalPayment = null)
    {
        $this
            ->setDeposit($deposit)
            ->setInkasso($inkasso)
            ->setTotalPrice($totalPrice)
            ->setDisplayedDeposit($displayedDeposit)
            ->setDisplayedInkasso($displayedInkasso)
            ->setDisplayedTotalPrice($displayedTotalPrice)
            ->setDepositDate($depositDate)
            ->setFinalDate($finalDate)
            ->setIsStorno($isStorno)
            ->setDepositPreset($depositPreset)
            ->setTotalPayment($totalPayment);
    }
    /**
     * Get deposit value
     * @return float|null
     */
    public function getDeposit(): ?float
    {
        return $this->deposit;
    }
    /**
     * Set deposit value
     * @param float $deposit
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrices
     */
    public function setDeposit(?float $deposit = null): self
    {
        // validation for constraint: float
        if (!is_null($deposit) && !(is_float($deposit) || is_numeric($deposit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deposit, true), gettype($deposit)), __LINE__);
        }
        $this->deposit = $deposit;
        
        return $this;
    }
    /**
     * Get inkasso value
     * @return float|null
     */
    public function getInkasso(): ?float
    {
        return $this->inkasso;
    }
    /**
     * Set inkasso value
     * @param float $inkasso
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrices
     */
    public function setInkasso(?float $inkasso = null): self
    {
        // validation for constraint: float
        if (!is_null($inkasso) && !(is_float($inkasso) || is_numeric($inkasso))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkasso, true), gettype($inkasso)), __LINE__);
        }
        $this->inkasso = $inkasso;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrices
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
     * Get displayedDeposit value
     * @return float|null
     */
    public function getDisplayedDeposit(): ?float
    {
        return $this->displayedDeposit;
    }
    /**
     * Set displayedDeposit value
     * @param float $displayedDeposit
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrices
     */
    public function setDisplayedDeposit(?float $displayedDeposit = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedDeposit) && !(is_float($displayedDeposit) || is_numeric($displayedDeposit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedDeposit, true), gettype($displayedDeposit)), __LINE__);
        }
        $this->displayedDeposit = $displayedDeposit;
        
        return $this;
    }
    /**
     * Get displayedInkasso value
     * @return float|null
     */
    public function getDisplayedInkasso(): ?float
    {
        return $this->displayedInkasso;
    }
    /**
     * Set displayedInkasso value
     * @param float $displayedInkasso
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrices
     */
    public function setDisplayedInkasso(?float $displayedInkasso = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedInkasso) && !(is_float($displayedInkasso) || is_numeric($displayedInkasso))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedInkasso, true), gettype($displayedInkasso)), __LINE__);
        }
        $this->displayedInkasso = $displayedInkasso;
        
        return $this;
    }
    /**
     * Get displayedTotalPrice value
     * @return float|null
     */
    public function getDisplayedTotalPrice(): ?float
    {
        return $this->displayedTotalPrice;
    }
    /**
     * Set displayedTotalPrice value
     * @param float $displayedTotalPrice
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrices
     */
    public function setDisplayedTotalPrice(?float $displayedTotalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedTotalPrice) && !(is_float($displayedTotalPrice) || is_numeric($displayedTotalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedTotalPrice, true), gettype($displayedTotalPrice)), __LINE__);
        }
        $this->displayedTotalPrice = $displayedTotalPrice;
        
        return $this;
    }
    /**
     * Get depositDate value
     * @return string|null
     */
    public function getDepositDate(): ?string
    {
        return $this->depositDate;
    }
    /**
     * Set depositDate value
     * @param string $depositDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrices
     */
    public function setDepositDate(?string $depositDate = null): self
    {
        // validation for constraint: string
        if (!is_null($depositDate) && !is_string($depositDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositDate, true), gettype($depositDate)), __LINE__);
        }
        $this->depositDate = $depositDate;
        
        return $this;
    }
    /**
     * Get finalDate value
     * @return string|null
     */
    public function getFinalDate(): ?string
    {
        return $this->finalDate;
    }
    /**
     * Set finalDate value
     * @param string $finalDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrices
     */
    public function setFinalDate(?string $finalDate = null): self
    {
        // validation for constraint: string
        if (!is_null($finalDate) && !is_string($finalDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalDate, true), gettype($finalDate)), __LINE__);
        }
        $this->finalDate = $finalDate;
        
        return $this;
    }
    /**
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrices
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
        return $this;
    }
    /**
     * Get depositPreset value
     * @return bool|null
     */
    public function getDepositPreset(): ?bool
    {
        return $this->depositPreset;
    }
    /**
     * Set depositPreset value
     * @param bool $depositPreset
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrices
     */
    public function setDepositPreset(?bool $depositPreset = null): self
    {
        // validation for constraint: boolean
        if (!is_null($depositPreset) && !is_bool($depositPreset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($depositPreset, true), gettype($depositPreset)), __LINE__);
        }
        $this->depositPreset = $depositPreset;
        
        return $this;
    }
    /**
     * Get totalPayment value
     * @return float|null
     */
    public function getTotalPayment(): ?float
    {
        return $this->totalPayment;
    }
    /**
     * Set totalPayment value
     * @param float $totalPayment
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrices
     */
    public function setTotalPayment(?float $totalPayment = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPayment) && !(is_float($totalPayment) || is_numeric($totalPayment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPayment, true), gettype($totalPayment)), __LINE__);
        }
        $this->totalPayment = $totalPayment;
        
        return $this;
    }
}
