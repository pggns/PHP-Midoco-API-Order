<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBonusAssignmentSellitemDetails StructType
 * @subpackage Structs
 */
class MidocoBonusAssignmentSellitemDetails extends AbstractStructBase
{
    /**
     * The supplier
     * @var string|null
     */
    protected ?string $supplier = null;
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
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The numberOfPersons
     * @var int|null
     */
    protected ?int $numberOfPersons = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The bonus
     * @var float|null
     */
    protected ?float $bonus = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The storno
     * @var bool|null
     */
    protected ?bool $storno = null;
    /**
     * The ruleAmountBase
     * @var float|null
     */
    protected ?float $ruleAmountBase = null;
    /**
     * The revenue
     * @var float|null
     */
    protected ?float $revenue = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * Constructor method for MidocoBonusAssignmentSellitemDetails
     * @uses MidocoBonusAssignmentSellitemDetails::setSupplier()
     * @uses MidocoBonusAssignmentSellitemDetails::setBookingId()
     * @uses MidocoBonusAssignmentSellitemDetails::setStartTravel()
     * @uses MidocoBonusAssignmentSellitemDetails::setCreationDate()
     * @uses MidocoBonusAssignmentSellitemDetails::setNumberOfPersons()
     * @uses MidocoBonusAssignmentSellitemDetails::setPrice()
     * @uses MidocoBonusAssignmentSellitemDetails::setBonus()
     * @uses MidocoBonusAssignmentSellitemDetails::setItemId()
     * @uses MidocoBonusAssignmentSellitemDetails::setStorno()
     * @uses MidocoBonusAssignmentSellitemDetails::setRuleAmountBase()
     * @uses MidocoBonusAssignmentSellitemDetails::setRevenue()
     * @uses MidocoBonusAssignmentSellitemDetails::setUnitName()
     * @uses MidocoBonusAssignmentSellitemDetails::setOrderNo()
     * @uses MidocoBonusAssignmentSellitemDetails::setItemType()
     * @uses MidocoBonusAssignmentSellitemDetails::setDescription()
     * @uses MidocoBonusAssignmentSellitemDetails::setCustomerName()
     * @param string $supplier
     * @param string $bookingId
     * @param string $startTravel
     * @param string $creationDate
     * @param int $numberOfPersons
     * @param float $price
     * @param float $bonus
     * @param int $itemId
     * @param bool $storno
     * @param float $ruleAmountBase
     * @param float $revenue
     * @param string $unitName
     * @param int $orderNo
     * @param string $itemType
     * @param string $description
     * @param string $customerName
     */
    public function __construct(?string $supplier = null, ?string $bookingId = null, ?string $startTravel = null, ?string $creationDate = null, ?int $numberOfPersons = null, ?float $price = null, ?float $bonus = null, ?int $itemId = null, ?bool $storno = null, ?float $ruleAmountBase = null, ?float $revenue = null, ?string $unitName = null, ?int $orderNo = null, ?string $itemType = null, ?string $description = null, ?string $customerName = null)
    {
        $this
            ->setSupplier($supplier)
            ->setBookingId($bookingId)
            ->setStartTravel($startTravel)
            ->setCreationDate($creationDate)
            ->setNumberOfPersons($numberOfPersons)
            ->setPrice($price)
            ->setBonus($bonus)
            ->setItemId($itemId)
            ->setStorno($storno)
            ->setRuleAmountBase($ruleAmountBase)
            ->setRevenue($revenue)
            ->setUnitName($unitName)
            ->setOrderNo($orderNo)
            ->setItemType($itemType)
            ->setDescription($description)
            ->setCustomerName($customerName);
    }
    /**
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
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
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
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
     * Get bonus value
     * @return float|null
     */
    public function getBonus(): ?float
    {
        return $this->bonus;
    }
    /**
     * Set bonus value
     * @param float $bonus
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
     */
    public function setBonus(?float $bonus = null): self
    {
        // validation for constraint: float
        if (!is_null($bonus) && !(is_float($bonus) || is_numeric($bonus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bonus, true), gettype($bonus)), __LINE__);
        }
        $this->bonus = $bonus;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
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
     * Get storno value
     * @return bool|null
     */
    public function getStorno(): ?bool
    {
        return $this->storno;
    }
    /**
     * Set storno value
     * @param bool $storno
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
     */
    public function setStorno(?bool $storno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($storno) && !is_bool($storno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($storno, true), gettype($storno)), __LINE__);
        }
        $this->storno = $storno;
        
        return $this;
    }
    /**
     * Get ruleAmountBase value
     * @return float|null
     */
    public function getRuleAmountBase(): ?float
    {
        return $this->ruleAmountBase;
    }
    /**
     * Set ruleAmountBase value
     * @param float $ruleAmountBase
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
     */
    public function setRuleAmountBase(?float $ruleAmountBase = null): self
    {
        // validation for constraint: float
        if (!is_null($ruleAmountBase) && !(is_float($ruleAmountBase) || is_numeric($ruleAmountBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ruleAmountBase, true), gettype($ruleAmountBase)), __LINE__);
        }
        $this->ruleAmountBase = $ruleAmountBase;
        
        return $this;
    }
    /**
     * Get revenue value
     * @return float|null
     */
    public function getRevenue(): ?float
    {
        return $this->revenue;
    }
    /**
     * Set revenue value
     * @param float $revenue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
     */
    public function setRevenue(?float $revenue = null): self
    {
        // validation for constraint: float
        if (!is_null($revenue) && !(is_float($revenue) || is_numeric($revenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenue, true), gettype($revenue)), __LINE__);
        }
        $this->revenue = $revenue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails
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
}
