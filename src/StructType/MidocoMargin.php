<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMargin StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMargin extends AbstractStructBase
{
    /**
     * The startTravel
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $startTravel;
    /**
     * The needsBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $needsBooking;
    /**
     * The preventBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $preventBooking;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The travelNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The packageID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $packageID = null;
    /**
     * The itemID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $itemID = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The bookingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The cancelled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $cancelled = null;
    /**
     * The totalSalesPrice
     * @var float|null
     */
    protected ?float $totalSalesPrice = null;
    /**
     * The totalBuyPrice
     * @var float|null
     */
    protected ?float $totalBuyPrice = null;
    /**
     * The commission
     * @var float|null
     */
    protected ?float $commission = null;
    /**
     * The calculatedPositiveMargin
     * @var float|null
     */
    protected ?float $calculatedPositiveMargin = null;
    /**
     * The calculatedNegativeMargin
     * @var float|null
     */
    protected ?float $calculatedNegativeMargin = null;
    /**
     * The calculatedNetMargin
     * @var float|null
     */
    protected ?float $calculatedNetMargin = null;
    /**
     * The calculatedMarginTax
     * @var float|null
     */
    protected ?float $calculatedMarginTax = null;
    /**
     * The bookedPositiveMargin
     * @var float|null
     */
    protected ?float $bookedPositiveMargin = null;
    /**
     * The bookedNegativeMargin
     * @var float|null
     */
    protected ?float $bookedNegativeMargin = null;
    /**
     * The displayedBookedMargin
     * @var float|null
     */
    protected ?float $displayedBookedMargin = null;
    /**
     * The bookedNetMargin
     * @var float|null
     */
    protected ?float $bookedNetMargin = null;
    /**
     * The bookedMarginTax
     * @var float|null
     */
    protected ?float $bookedMarginTax = null;
    /**
     * The percentTurnover
     * @var float|null
     */
    protected ?float $percentTurnover = null;
    /**
     * The orderID
     * @var int|null
     */
    protected ?int $orderID = null;
    /**
     * The packageMarginId
     * @var int|null
     */
    protected ?int $packageMarginId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The totalSalesPriceNegativeMargin
     * @var float|null
     */
    protected ?float $totalSalesPriceNegativeMargin = null;
    /**
     * The totalBuyPriceNegativeMargin
     * @var float|null
     */
    protected ?float $totalBuyPriceNegativeMargin = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MidocoMargin
     * @uses MidocoMargin::setStartTravel()
     * @uses MidocoMargin::setNeedsBooking()
     * @uses MidocoMargin::setPreventBooking()
     * @uses MidocoMargin::setType()
     * @uses MidocoMargin::setStatus()
     * @uses MidocoMargin::setTravelNo()
     * @uses MidocoMargin::setPackageID()
     * @uses MidocoMargin::setItemID()
     * @uses MidocoMargin::setOrderNo()
     * @uses MidocoMargin::setBookingDate()
     * @uses MidocoMargin::setCancelled()
     * @uses MidocoMargin::setTotalSalesPrice()
     * @uses MidocoMargin::setTotalBuyPrice()
     * @uses MidocoMargin::setCommission()
     * @uses MidocoMargin::setCalculatedPositiveMargin()
     * @uses MidocoMargin::setCalculatedNegativeMargin()
     * @uses MidocoMargin::setCalculatedNetMargin()
     * @uses MidocoMargin::setCalculatedMarginTax()
     * @uses MidocoMargin::setBookedPositiveMargin()
     * @uses MidocoMargin::setBookedNegativeMargin()
     * @uses MidocoMargin::setDisplayedBookedMargin()
     * @uses MidocoMargin::setBookedNetMargin()
     * @uses MidocoMargin::setBookedMarginTax()
     * @uses MidocoMargin::setPercentTurnover()
     * @uses MidocoMargin::setOrderID()
     * @uses MidocoMargin::setPackageMarginId()
     * @uses MidocoMargin::setSupplierId()
     * @uses MidocoMargin::setTotalSalesPriceNegativeMargin()
     * @uses MidocoMargin::setTotalBuyPriceNegativeMargin()
     * @uses MidocoMargin::setUnitName()
     * @param string $startTravel
     * @param bool $needsBooking
     * @param bool $preventBooking
     * @param string $type
     * @param string $status
     * @param string $travelNo
     * @param string $packageID
     * @param int $itemID
     * @param int $orderNo
     * @param string $bookingDate
     * @param bool $cancelled
     * @param float $totalSalesPrice
     * @param float $totalBuyPrice
     * @param float $commission
     * @param float $calculatedPositiveMargin
     * @param float $calculatedNegativeMargin
     * @param float $calculatedNetMargin
     * @param float $calculatedMarginTax
     * @param float $bookedPositiveMargin
     * @param float $bookedNegativeMargin
     * @param float $displayedBookedMargin
     * @param float $bookedNetMargin
     * @param float $bookedMarginTax
     * @param float $percentTurnover
     * @param int $orderID
     * @param int $packageMarginId
     * @param string $supplierId
     * @param float $totalSalesPriceNegativeMargin
     * @param float $totalBuyPriceNegativeMargin
     * @param string $unitName
     */
    public function __construct(string $startTravel, bool $needsBooking, bool $preventBooking, ?string $type = null, ?string $status = null, ?string $travelNo = null, ?string $packageID = null, ?int $itemID = null, ?int $orderNo = null, ?string $bookingDate = null, ?bool $cancelled = null, ?float $totalSalesPrice = null, ?float $totalBuyPrice = null, ?float $commission = null, ?float $calculatedPositiveMargin = null, ?float $calculatedNegativeMargin = null, ?float $calculatedNetMargin = null, ?float $calculatedMarginTax = null, ?float $bookedPositiveMargin = null, ?float $bookedNegativeMargin = null, ?float $displayedBookedMargin = null, ?float $bookedNetMargin = null, ?float $bookedMarginTax = null, ?float $percentTurnover = null, ?int $orderID = null, ?int $packageMarginId = null, ?string $supplierId = null, ?float $totalSalesPriceNegativeMargin = null, ?float $totalBuyPriceNegativeMargin = null, ?string $unitName = null)
    {
        $this
            ->setStartTravel($startTravel)
            ->setNeedsBooking($needsBooking)
            ->setPreventBooking($preventBooking)
            ->setType($type)
            ->setStatus($status)
            ->setTravelNo($travelNo)
            ->setPackageID($packageID)
            ->setItemID($itemID)
            ->setOrderNo($orderNo)
            ->setBookingDate($bookingDate)
            ->setCancelled($cancelled)
            ->setTotalSalesPrice($totalSalesPrice)
            ->setTotalBuyPrice($totalBuyPrice)
            ->setCommission($commission)
            ->setCalculatedPositiveMargin($calculatedPositiveMargin)
            ->setCalculatedNegativeMargin($calculatedNegativeMargin)
            ->setCalculatedNetMargin($calculatedNetMargin)
            ->setCalculatedMarginTax($calculatedMarginTax)
            ->setBookedPositiveMargin($bookedPositiveMargin)
            ->setBookedNegativeMargin($bookedNegativeMargin)
            ->setDisplayedBookedMargin($displayedBookedMargin)
            ->setBookedNetMargin($bookedNetMargin)
            ->setBookedMarginTax($bookedMarginTax)
            ->setPercentTurnover($percentTurnover)
            ->setOrderID($orderID)
            ->setPackageMarginId($packageMarginId)
            ->setSupplierId($supplierId)
            ->setTotalSalesPriceNegativeMargin($totalSalesPriceNegativeMargin)
            ->setTotalBuyPriceNegativeMargin($totalBuyPriceNegativeMargin)
            ->setUnitName($unitName);
    }
    /**
     * Get startTravel value
     * @return string
     */
    public function getStartTravel(): string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setStartTravel(string $startTravel): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get needsBooking value
     * @return bool
     */
    public function getNeedsBooking(): bool
    {
        return $this->needsBooking;
    }
    /**
     * Set needsBooking value
     * @param bool $needsBooking
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setNeedsBooking(bool $needsBooking): self
    {
        // validation for constraint: boolean
        if (!is_null($needsBooking) && !is_bool($needsBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsBooking, true), gettype($needsBooking)), __LINE__);
        }
        $this->needsBooking = $needsBooking;
        
        return $this;
    }
    /**
     * Get preventBooking value
     * @return bool
     */
    public function getPreventBooking(): bool
    {
        return $this->preventBooking;
    }
    /**
     * Set preventBooking value
     * @param bool $preventBooking
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setPreventBooking(bool $preventBooking): self
    {
        // validation for constraint: boolean
        if (!is_null($preventBooking) && !is_bool($preventBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventBooking, true), gettype($preventBooking)), __LINE__);
        }
        $this->preventBooking = $preventBooking;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
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
     * Get packageID value
     * @return string|null
     */
    public function getPackageID(): ?string
    {
        return $this->packageID;
    }
    /**
     * Set packageID value
     * @param string $packageID
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setPackageID(?string $packageID = null): self
    {
        // validation for constraint: string
        if (!is_null($packageID) && !is_string($packageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageID, true), gettype($packageID)), __LINE__);
        }
        $this->packageID = $packageID;
        
        return $this;
    }
    /**
     * Get itemID value
     * @return int|null
     */
    public function getItemID(): ?int
    {
        return $this->itemID;
    }
    /**
     * Set itemID value
     * @param int $itemID
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setItemID(?int $itemID = null): self
    {
        // validation for constraint: int
        if (!is_null($itemID) && !(is_int($itemID) || ctype_digit($itemID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->itemID = $itemID;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
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
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get cancelled value
     * @return bool|null
     */
    public function getCancelled(): ?bool
    {
        return $this->cancelled;
    }
    /**
     * Set cancelled value
     * @param bool $cancelled
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setCancelled(?bool $cancelled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cancelled) && !is_bool($cancelled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancelled, true), gettype($cancelled)), __LINE__);
        }
        $this->cancelled = $cancelled;
        
        return $this;
    }
    /**
     * Get totalSalesPrice value
     * @return float|null
     */
    public function getTotalSalesPrice(): ?float
    {
        return $this->totalSalesPrice;
    }
    /**
     * Set totalSalesPrice value
     * @param float $totalSalesPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setTotalSalesPrice(?float $totalSalesPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalSalesPrice) && !(is_float($totalSalesPrice) || is_numeric($totalSalesPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalSalesPrice, true), gettype($totalSalesPrice)), __LINE__);
        }
        $this->totalSalesPrice = $totalSalesPrice;
        
        return $this;
    }
    /**
     * Get totalBuyPrice value
     * @return float|null
     */
    public function getTotalBuyPrice(): ?float
    {
        return $this->totalBuyPrice;
    }
    /**
     * Set totalBuyPrice value
     * @param float $totalBuyPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setTotalBuyPrice(?float $totalBuyPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalBuyPrice) && !(is_float($totalBuyPrice) || is_numeric($totalBuyPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalBuyPrice, true), gettype($totalBuyPrice)), __LINE__);
        }
        $this->totalBuyPrice = $totalBuyPrice;
        
        return $this;
    }
    /**
     * Get commission value
     * @return float|null
     */
    public function getCommission(): ?float
    {
        return $this->commission;
    }
    /**
     * Set commission value
     * @param float $commission
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setCommission(?float $commission = null): self
    {
        // validation for constraint: float
        if (!is_null($commission) && !(is_float($commission) || is_numeric($commission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission, true), gettype($commission)), __LINE__);
        }
        $this->commission = $commission;
        
        return $this;
    }
    /**
     * Get calculatedPositiveMargin value
     * @return float|null
     */
    public function getCalculatedPositiveMargin(): ?float
    {
        return $this->calculatedPositiveMargin;
    }
    /**
     * Set calculatedPositiveMargin value
     * @param float $calculatedPositiveMargin
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setCalculatedPositiveMargin(?float $calculatedPositiveMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedPositiveMargin) && !(is_float($calculatedPositiveMargin) || is_numeric($calculatedPositiveMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedPositiveMargin, true), gettype($calculatedPositiveMargin)), __LINE__);
        }
        $this->calculatedPositiveMargin = $calculatedPositiveMargin;
        
        return $this;
    }
    /**
     * Get calculatedNegativeMargin value
     * @return float|null
     */
    public function getCalculatedNegativeMargin(): ?float
    {
        return $this->calculatedNegativeMargin;
    }
    /**
     * Set calculatedNegativeMargin value
     * @param float $calculatedNegativeMargin
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setCalculatedNegativeMargin(?float $calculatedNegativeMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedNegativeMargin) && !(is_float($calculatedNegativeMargin) || is_numeric($calculatedNegativeMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedNegativeMargin, true), gettype($calculatedNegativeMargin)), __LINE__);
        }
        $this->calculatedNegativeMargin = $calculatedNegativeMargin;
        
        return $this;
    }
    /**
     * Get calculatedNetMargin value
     * @return float|null
     */
    public function getCalculatedNetMargin(): ?float
    {
        return $this->calculatedNetMargin;
    }
    /**
     * Set calculatedNetMargin value
     * @param float $calculatedNetMargin
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setCalculatedNetMargin(?float $calculatedNetMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedNetMargin) && !(is_float($calculatedNetMargin) || is_numeric($calculatedNetMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedNetMargin, true), gettype($calculatedNetMargin)), __LINE__);
        }
        $this->calculatedNetMargin = $calculatedNetMargin;
        
        return $this;
    }
    /**
     * Get calculatedMarginTax value
     * @return float|null
     */
    public function getCalculatedMarginTax(): ?float
    {
        return $this->calculatedMarginTax;
    }
    /**
     * Set calculatedMarginTax value
     * @param float $calculatedMarginTax
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setCalculatedMarginTax(?float $calculatedMarginTax = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMarginTax) && !(is_float($calculatedMarginTax) || is_numeric($calculatedMarginTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMarginTax, true), gettype($calculatedMarginTax)), __LINE__);
        }
        $this->calculatedMarginTax = $calculatedMarginTax;
        
        return $this;
    }
    /**
     * Get bookedPositiveMargin value
     * @return float|null
     */
    public function getBookedPositiveMargin(): ?float
    {
        return $this->bookedPositiveMargin;
    }
    /**
     * Set bookedPositiveMargin value
     * @param float $bookedPositiveMargin
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setBookedPositiveMargin(?float $bookedPositiveMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedPositiveMargin) && !(is_float($bookedPositiveMargin) || is_numeric($bookedPositiveMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedPositiveMargin, true), gettype($bookedPositiveMargin)), __LINE__);
        }
        $this->bookedPositiveMargin = $bookedPositiveMargin;
        
        return $this;
    }
    /**
     * Get bookedNegativeMargin value
     * @return float|null
     */
    public function getBookedNegativeMargin(): ?float
    {
        return $this->bookedNegativeMargin;
    }
    /**
     * Set bookedNegativeMargin value
     * @param float $bookedNegativeMargin
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setBookedNegativeMargin(?float $bookedNegativeMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedNegativeMargin) && !(is_float($bookedNegativeMargin) || is_numeric($bookedNegativeMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedNegativeMargin, true), gettype($bookedNegativeMargin)), __LINE__);
        }
        $this->bookedNegativeMargin = $bookedNegativeMargin;
        
        return $this;
    }
    /**
     * Get displayedBookedMargin value
     * @return float|null
     */
    public function getDisplayedBookedMargin(): ?float
    {
        return $this->displayedBookedMargin;
    }
    /**
     * Set displayedBookedMargin value
     * @param float $displayedBookedMargin
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setDisplayedBookedMargin(?float $displayedBookedMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedBookedMargin) && !(is_float($displayedBookedMargin) || is_numeric($displayedBookedMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedBookedMargin, true), gettype($displayedBookedMargin)), __LINE__);
        }
        $this->displayedBookedMargin = $displayedBookedMargin;
        
        return $this;
    }
    /**
     * Get bookedNetMargin value
     * @return float|null
     */
    public function getBookedNetMargin(): ?float
    {
        return $this->bookedNetMargin;
    }
    /**
     * Set bookedNetMargin value
     * @param float $bookedNetMargin
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setBookedNetMargin(?float $bookedNetMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedNetMargin) && !(is_float($bookedNetMargin) || is_numeric($bookedNetMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedNetMargin, true), gettype($bookedNetMargin)), __LINE__);
        }
        $this->bookedNetMargin = $bookedNetMargin;
        
        return $this;
    }
    /**
     * Get bookedMarginTax value
     * @return float|null
     */
    public function getBookedMarginTax(): ?float
    {
        return $this->bookedMarginTax;
    }
    /**
     * Set bookedMarginTax value
     * @param float $bookedMarginTax
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setBookedMarginTax(?float $bookedMarginTax = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedMarginTax) && !(is_float($bookedMarginTax) || is_numeric($bookedMarginTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedMarginTax, true), gettype($bookedMarginTax)), __LINE__);
        }
        $this->bookedMarginTax = $bookedMarginTax;
        
        return $this;
    }
    /**
     * Get percentTurnover value
     * @return float|null
     */
    public function getPercentTurnover(): ?float
    {
        return $this->percentTurnover;
    }
    /**
     * Set percentTurnover value
     * @param float $percentTurnover
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setPercentTurnover(?float $percentTurnover = null): self
    {
        // validation for constraint: float
        if (!is_null($percentTurnover) && !(is_float($percentTurnover) || is_numeric($percentTurnover))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentTurnover, true), gettype($percentTurnover)), __LINE__);
        }
        $this->percentTurnover = $percentTurnover;
        
        return $this;
    }
    /**
     * Get orderID value
     * @return int|null
     */
    public function getOrderID(): ?int
    {
        return $this->orderID;
    }
    /**
     * Set orderID value
     * @param int $orderID
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setOrderID(?int $orderID = null): self
    {
        // validation for constraint: int
        if (!is_null($orderID) && !(is_int($orderID) || ctype_digit($orderID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        $this->orderID = $orderID;
        
        return $this;
    }
    /**
     * Get packageMarginId value
     * @return int|null
     */
    public function getPackageMarginId(): ?int
    {
        return $this->packageMarginId;
    }
    /**
     * Set packageMarginId value
     * @param int $packageMarginId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setPackageMarginId(?int $packageMarginId = null): self
    {
        // validation for constraint: int
        if (!is_null($packageMarginId) && !(is_int($packageMarginId) || ctype_digit($packageMarginId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($packageMarginId, true), gettype($packageMarginId)), __LINE__);
        }
        $this->packageMarginId = $packageMarginId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
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
     * Get totalSalesPriceNegativeMargin value
     * @return float|null
     */
    public function getTotalSalesPriceNegativeMargin(): ?float
    {
        return $this->totalSalesPriceNegativeMargin;
    }
    /**
     * Set totalSalesPriceNegativeMargin value
     * @param float $totalSalesPriceNegativeMargin
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setTotalSalesPriceNegativeMargin(?float $totalSalesPriceNegativeMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($totalSalesPriceNegativeMargin) && !(is_float($totalSalesPriceNegativeMargin) || is_numeric($totalSalesPriceNegativeMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalSalesPriceNegativeMargin, true), gettype($totalSalesPriceNegativeMargin)), __LINE__);
        }
        $this->totalSalesPriceNegativeMargin = $totalSalesPriceNegativeMargin;
        
        return $this;
    }
    /**
     * Get totalBuyPriceNegativeMargin value
     * @return float|null
     */
    public function getTotalBuyPriceNegativeMargin(): ?float
    {
        return $this->totalBuyPriceNegativeMargin;
    }
    /**
     * Set totalBuyPriceNegativeMargin value
     * @param float $totalBuyPriceNegativeMargin
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
     */
    public function setTotalBuyPriceNegativeMargin(?float $totalBuyPriceNegativeMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($totalBuyPriceNegativeMargin) && !(is_float($totalBuyPriceNegativeMargin) || is_numeric($totalBuyPriceNegativeMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalBuyPriceNegativeMargin, true), gettype($totalBuyPriceNegativeMargin)), __LINE__);
        }
        $this->totalBuyPriceNegativeMargin = $totalBuyPriceNegativeMargin;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin
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
}
