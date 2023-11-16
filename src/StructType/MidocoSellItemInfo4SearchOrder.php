<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellItemInfo4SearchOrder StructType
 * @subpackage Structs
 */
class MidocoSellItemInfo4SearchOrder extends AbstractStructBase
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
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The crs
     * @var string|null
     */
    protected ?string $crs = null;
    /**
     * The noOfPersons
     * @var int|null
     */
    protected ?int $noOfPersons = null;
    /**
     * The displayedPrice
     * @var float|null
     */
    protected ?float $displayedPrice = null;
    /**
     * The displayedCurrency
     * @var string|null
     */
    protected ?string $displayedCurrency = null;
    /**
     * Constructor method for MidocoSellItemInfo4SearchOrder
     * @uses MidocoSellItemInfo4SearchOrder::setSupplier()
     * @uses MidocoSellItemInfo4SearchOrder::setBookingId()
     * @uses MidocoSellItemInfo4SearchOrder::setStartTravel()
     * @uses MidocoSellItemInfo4SearchOrder::setEndTravel()
     * @uses MidocoSellItemInfo4SearchOrder::setStatus()
     * @uses MidocoSellItemInfo4SearchOrder::setPrice()
     * @uses MidocoSellItemInfo4SearchOrder::setCrs()
     * @uses MidocoSellItemInfo4SearchOrder::setNoOfPersons()
     * @uses MidocoSellItemInfo4SearchOrder::setDisplayedPrice()
     * @uses MidocoSellItemInfo4SearchOrder::setDisplayedCurrency()
     * @param string $supplier
     * @param string $bookingId
     * @param string $startTravel
     * @param string $endTravel
     * @param string $status
     * @param float $price
     * @param string $crs
     * @param int $noOfPersons
     * @param float $displayedPrice
     * @param string $displayedCurrency
     */
    public function __construct(?string $supplier = null, ?string $bookingId = null, ?string $startTravel = null, ?string $endTravel = null, ?string $status = null, ?float $price = null, ?string $crs = null, ?int $noOfPersons = null, ?float $displayedPrice = null, ?string $displayedCurrency = null)
    {
        $this
            ->setSupplier($supplier)
            ->setBookingId($bookingId)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setStatus($status)
            ->setPrice($price)
            ->setCrs($crs)
            ->setNoOfPersons($noOfPersons)
            ->setDisplayedPrice($displayedPrice)
            ->setDisplayedCurrency($displayedCurrency);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder
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
     * Get crs value
     * @return string|null
     */
    public function getCrs(): ?string
    {
        return $this->crs;
    }
    /**
     * Set crs value
     * @param string $crs
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder
     */
    public function setCrs(?string $crs = null): self
    {
        // validation for constraint: string
        if (!is_null($crs) && !is_string($crs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crs, true), gettype($crs)), __LINE__);
        }
        $this->crs = $crs;
        
        return $this;
    }
    /**
     * Get noOfPersons value
     * @return int|null
     */
    public function getNoOfPersons(): ?int
    {
        return $this->noOfPersons;
    }
    /**
     * Set noOfPersons value
     * @param int $noOfPersons
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder
     */
    public function setNoOfPersons(?int $noOfPersons = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPersons) && !(is_int($noOfPersons) || ctype_digit($noOfPersons))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPersons, true), gettype($noOfPersons)), __LINE__);
        }
        $this->noOfPersons = $noOfPersons;
        
        return $this;
    }
    /**
     * Get displayedPrice value
     * @return float|null
     */
    public function getDisplayedPrice(): ?float
    {
        return $this->displayedPrice;
    }
    /**
     * Set displayedPrice value
     * @param float $displayedPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder
     */
    public function setDisplayedPrice(?float $displayedPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedPrice) && !(is_float($displayedPrice) || is_numeric($displayedPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedPrice, true), gettype($displayedPrice)), __LINE__);
        }
        $this->displayedPrice = $displayedPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder
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
