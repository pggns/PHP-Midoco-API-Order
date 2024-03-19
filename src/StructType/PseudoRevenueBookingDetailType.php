<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PseudoRevenueBookingDetailType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PseudoRevenueBookingDetailType extends AbstractStructBase
{
    /**
     * The PseudoRevenueBookingInfo
     * Meta information extracted from the WSDL
     * - ref: PseudoRevenueBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo $PseudoRevenueBookingInfo = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The year
     * @var string|null
     */
    protected ?string $year = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The bruttoAmount
     * @var float|null
     */
    protected ?float $bruttoAmount = null;
    /**
     * The account
     * @var string|null
     */
    protected ?string $account = null;
    /**
     * The hasRevenueBookings
     * @var bool|null
     */
    protected ?bool $hasRevenueBookings = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The inkassoMode
     * @var string|null
     */
    protected ?string $inkassoMode = null;
    /**
     * The creditAccount
     * @var string|null
     */
    protected ?string $creditAccount = null;
    /**
     * Constructor method for PseudoRevenueBookingDetailType
     * @uses PseudoRevenueBookingDetailType::setPseudoRevenueBookingInfo()
     * @uses PseudoRevenueBookingDetailType::setOrgUnit()
     * @uses PseudoRevenueBookingDetailType::setOrderNo()
     * @uses PseudoRevenueBookingDetailType::setYear()
     * @uses PseudoRevenueBookingDetailType::setSupplierId()
     * @uses PseudoRevenueBookingDetailType::setBookingId()
     * @uses PseudoRevenueBookingDetailType::setStartTravel()
     * @uses PseudoRevenueBookingDetailType::setEndTravel()
     * @uses PseudoRevenueBookingDetailType::setItemPrice()
     * @uses PseudoRevenueBookingDetailType::setAmount()
     * @uses PseudoRevenueBookingDetailType::setBruttoAmount()
     * @uses PseudoRevenueBookingDetailType::setAccount()
     * @uses PseudoRevenueBookingDetailType::setHasRevenueBookings()
     * @uses PseudoRevenueBookingDetailType::setItemId()
     * @uses PseudoRevenueBookingDetailType::setOrderId()
     * @uses PseudoRevenueBookingDetailType::setInkassoMode()
     * @uses PseudoRevenueBookingDetailType::setCreditAccount()
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo $pseudoRevenueBookingInfo
     * @param string $orgUnit
     * @param int $orderNo
     * @param string $year
     * @param string $supplierId
     * @param string $bookingId
     * @param string $startTravel
     * @param string $endTravel
     * @param float $itemPrice
     * @param float $amount
     * @param float $bruttoAmount
     * @param string $account
     * @param bool $hasRevenueBookings
     * @param int $itemId
     * @param int $orderId
     * @param string $inkassoMode
     * @param string $creditAccount
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo $pseudoRevenueBookingInfo = null, ?string $orgUnit = null, ?int $orderNo = null, ?string $year = null, ?string $supplierId = null, ?string $bookingId = null, ?string $startTravel = null, ?string $endTravel = null, ?float $itemPrice = null, ?float $amount = null, ?float $bruttoAmount = null, ?string $account = null, ?bool $hasRevenueBookings = null, ?int $itemId = null, ?int $orderId = null, ?string $inkassoMode = null, ?string $creditAccount = null)
    {
        $this
            ->setPseudoRevenueBookingInfo($pseudoRevenueBookingInfo)
            ->setOrgUnit($orgUnit)
            ->setOrderNo($orderNo)
            ->setYear($year)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setItemPrice($itemPrice)
            ->setAmount($amount)
            ->setBruttoAmount($bruttoAmount)
            ->setAccount($account)
            ->setHasRevenueBookings($hasRevenueBookings)
            ->setItemId($itemId)
            ->setOrderId($orderId)
            ->setInkassoMode($inkassoMode)
            ->setCreditAccount($creditAccount);
    }
    /**
     * Get PseudoRevenueBookingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo|null
     */
    public function getPseudoRevenueBookingInfo(): ?\Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo
    {
        return $this->PseudoRevenueBookingInfo;
    }
    /**
     * Set PseudoRevenueBookingInfo value
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo $pseudoRevenueBookingInfo
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
     */
    public function setPseudoRevenueBookingInfo(?\Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo $pseudoRevenueBookingInfo = null): self
    {
        $this->PseudoRevenueBookingInfo = $pseudoRevenueBookingInfo;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
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
     * Get year value
     * @return string|null
     */
    public function getYear(): ?string
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param string $year
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
     */
    public function setYear(?string $year = null): self
    {
        // validation for constraint: string
        if (!is_null($year) && !is_string($year)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
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
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
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
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
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
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
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
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
     */
    public function setItemPrice(?float $itemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
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
     * Get bruttoAmount value
     * @return float|null
     */
    public function getBruttoAmount(): ?float
    {
        return $this->bruttoAmount;
    }
    /**
     * Set bruttoAmount value
     * @param float $bruttoAmount
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
     */
    public function setBruttoAmount(?float $bruttoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($bruttoAmount) && !(is_float($bruttoAmount) || is_numeric($bruttoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bruttoAmount, true), gettype($bruttoAmount)), __LINE__);
        }
        $this->bruttoAmount = $bruttoAmount;
        
        return $this;
    }
    /**
     * Get account value
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param string $account
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
    /**
     * Get hasRevenueBookings value
     * @return bool|null
     */
    public function getHasRevenueBookings(): ?bool
    {
        return $this->hasRevenueBookings;
    }
    /**
     * Set hasRevenueBookings value
     * @param bool $hasRevenueBookings
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
     */
    public function setHasRevenueBookings(?bool $hasRevenueBookings = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasRevenueBookings) && !is_bool($hasRevenueBookings)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasRevenueBookings, true), gettype($hasRevenueBookings)), __LINE__);
        }
        $this->hasRevenueBookings = $hasRevenueBookings;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
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
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
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
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
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
     * Get creditAccount value
     * @return string|null
     */
    public function getCreditAccount(): ?string
    {
        return $this->creditAccount;
    }
    /**
     * Set creditAccount value
     * @param string $creditAccount
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType
     */
    public function setCreditAccount(?string $creditAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($creditAccount) && !is_string($creditAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditAccount, true), gettype($creditAccount)), __LINE__);
        }
        $this->creditAccount = $creditAccount;
        
        return $this;
    }
}
