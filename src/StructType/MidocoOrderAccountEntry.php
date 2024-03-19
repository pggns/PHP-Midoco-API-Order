<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderAccountEntry StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderAccountEntry extends AbstractStructBase
{
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The surname
     * @var string|null
     */
    protected ?string $surname = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The duePaymentDate
     * @var string|null
     */
    protected ?string $duePaymentDate = null;
    /**
     * The dueAmount
     * @var float|null
     */
    protected ?float $dueAmount = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The isDepositPayment
     * @var bool|null
     */
    protected ?bool $isDepositPayment = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The dunning_level
     * @var int|null
     */
    protected ?int $dunning_level = null;
    /**
     * The dunning_block
     * @var bool|null
     */
    protected ?bool $dunning_block = null;
    /**
     * The total_payment
     * @var float|null
     */
    protected ?float $total_payment = null;
    /**
     * The delegationComment
     * @var string|null
     */
    protected ?string $delegationComment = null;
    /**
     * The displayedCurrency
     * @var string|null
     */
    protected ?string $displayedCurrency = null;
    /**
     * Constructor method for MidocoOrderAccountEntry
     * @uses MidocoOrderAccountEntry::setForename()
     * @uses MidocoOrderAccountEntry::setSurname()
     * @uses MidocoOrderAccountEntry::setOrderNo()
     * @uses MidocoOrderAccountEntry::setStartTravel()
     * @uses MidocoOrderAccountEntry::setDuePaymentDate()
     * @uses MidocoOrderAccountEntry::setDueAmount()
     * @uses MidocoOrderAccountEntry::setInkassoPrice()
     * @uses MidocoOrderAccountEntry::setUnitName()
     * @uses MidocoOrderAccountEntry::setIsDepositPayment()
     * @uses MidocoOrderAccountEntry::setPaymentType()
     * @uses MidocoOrderAccountEntry::setDunning_level()
     * @uses MidocoOrderAccountEntry::setDunning_block()
     * @uses MidocoOrderAccountEntry::setTotal_payment()
     * @uses MidocoOrderAccountEntry::setDelegationComment()
     * @uses MidocoOrderAccountEntry::setDisplayedCurrency()
     * @param string $forename
     * @param string $surname
     * @param int $orderNo
     * @param string $startTravel
     * @param string $duePaymentDate
     * @param float $dueAmount
     * @param float $inkassoPrice
     * @param string $unitName
     * @param bool $isDepositPayment
     * @param string $paymentType
     * @param int $dunning_level
     * @param bool $dunning_block
     * @param float $total_payment
     * @param string $delegationComment
     * @param string $displayedCurrency
     */
    public function __construct(?string $forename = null, ?string $surname = null, ?int $orderNo = null, ?string $startTravel = null, ?string $duePaymentDate = null, ?float $dueAmount = null, ?float $inkassoPrice = null, ?string $unitName = null, ?bool $isDepositPayment = null, ?string $paymentType = null, ?int $dunning_level = null, ?bool $dunning_block = null, ?float $total_payment = null, ?string $delegationComment = null, ?string $displayedCurrency = null)
    {
        $this
            ->setForename($forename)
            ->setSurname($surname)
            ->setOrderNo($orderNo)
            ->setStartTravel($startTravel)
            ->setDuePaymentDate($duePaymentDate)
            ->setDueAmount($dueAmount)
            ->setInkassoPrice($inkassoPrice)
            ->setUnitName($unitName)
            ->setIsDepositPayment($isDepositPayment)
            ->setPaymentType($paymentType)
            ->setDunning_level($dunning_level)
            ->setDunning_block($dunning_block)
            ->setTotal_payment($total_payment)
            ->setDelegationComment($delegationComment)
            ->setDisplayedCurrency($displayedCurrency);
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get surname value
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }
    /**
     * Set surname value
     * @param string $surname
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
     */
    public function setSurname(?string $surname = null): self
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
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
     * Get duePaymentDate value
     * @return string|null
     */
    public function getDuePaymentDate(): ?string
    {
        return $this->duePaymentDate;
    }
    /**
     * Set duePaymentDate value
     * @param string $duePaymentDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
     */
    public function setDuePaymentDate(?string $duePaymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($duePaymentDate) && !is_string($duePaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duePaymentDate, true), gettype($duePaymentDate)), __LINE__);
        }
        $this->duePaymentDate = $duePaymentDate;
        
        return $this;
    }
    /**
     * Get dueAmount value
     * @return float|null
     */
    public function getDueAmount(): ?float
    {
        return $this->dueAmount;
    }
    /**
     * Set dueAmount value
     * @param float $dueAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
     */
    public function setDueAmount(?float $dueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($dueAmount) && !(is_float($dueAmount) || is_numeric($dueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dueAmount, true), gettype($dueAmount)), __LINE__);
        }
        $this->dueAmount = $dueAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
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
     * Get isDepositPayment value
     * @return bool|null
     */
    public function getIsDepositPayment(): ?bool
    {
        return $this->isDepositPayment;
    }
    /**
     * Set isDepositPayment value
     * @param bool $isDepositPayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
     */
    public function setIsDepositPayment(?bool $isDepositPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDepositPayment) && !is_bool($isDepositPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDepositPayment, true), gettype($isDepositPayment)), __LINE__);
        }
        $this->isDepositPayment = $isDepositPayment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
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
     * Get dunning_level value
     * @return int|null
     */
    public function getDunning_level(): ?int
    {
        return $this->dunning_level;
    }
    /**
     * Set dunning_level value
     * @param int $dunning_level
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
     */
    public function setDunning_level(?int $dunning_level = null): self
    {
        // validation for constraint: int
        if (!is_null($dunning_level) && !(is_int($dunning_level) || ctype_digit($dunning_level))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dunning_level, true), gettype($dunning_level)), __LINE__);
        }
        $this->dunning_level = $dunning_level;
        
        return $this;
    }
    /**
     * Get dunning_block value
     * @return bool|null
     */
    public function getDunning_block(): ?bool
    {
        return $this->dunning_block;
    }
    /**
     * Set dunning_block value
     * @param bool $dunning_block
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
     */
    public function setDunning_block(?bool $dunning_block = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dunning_block) && !is_bool($dunning_block)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dunning_block, true), gettype($dunning_block)), __LINE__);
        }
        $this->dunning_block = $dunning_block;
        
        return $this;
    }
    /**
     * Get total_payment value
     * @return float|null
     */
    public function getTotal_payment(): ?float
    {
        return $this->total_payment;
    }
    /**
     * Set total_payment value
     * @param float $total_payment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
     */
    public function setTotal_payment(?float $total_payment = null): self
    {
        // validation for constraint: float
        if (!is_null($total_payment) && !(is_float($total_payment) || is_numeric($total_payment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_payment, true), gettype($total_payment)), __LINE__);
        }
        $this->total_payment = $total_payment;
        
        return $this;
    }
    /**
     * Get delegationComment value
     * @return string|null
     */
    public function getDelegationComment(): ?string
    {
        return $this->delegationComment;
    }
    /**
     * Set delegationComment value
     * @param string $delegationComment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
     */
    public function setDelegationComment(?string $delegationComment = null): self
    {
        // validation for constraint: string
        if (!is_null($delegationComment) && !is_string($delegationComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegationComment, true), gettype($delegationComment)), __LINE__);
        }
        $this->delegationComment = $delegationComment;
        
        return $this;
    }
    /**
     * Get displayedCurrency value
     * @return string|null
     */
    public function getDisplayedCurrency(): ?string
    {
        return $this->displayedCurrency;
    }
    /**
     * Set displayedCurrency value
     * @param string $displayedCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry
     */
    public function setDisplayedCurrency(?string $displayedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($displayedCurrency) && !is_string($displayedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayedCurrency, true), gettype($displayedCurrency)), __LINE__);
        }
        $this->displayedCurrency = $displayedCurrency;
        
        return $this;
    }
}
