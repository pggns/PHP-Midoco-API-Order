<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JSPSellItem StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JSPSellItem extends AbstractStructBase
{
    /**
     * The supplier
     * @var string|null
     */
    protected ?string $supplier = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
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
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The freeing
     * @var bool|null
     */
    protected ?bool $freeing = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The invoiceName
     * @var string|null
     */
    protected ?string $invoiceName = null;
    /**
     * Constructor method for JSPSellItem
     * @uses JSPSellItem::setSupplier()
     * @uses JSPSellItem::setCreationDate()
     * @uses JSPSellItem::setStartTravel()
     * @uses JSPSellItem::setEndTravel()
     * @uses JSPSellItem::setItemPrice()
     * @uses JSPSellItem::setStatus()
     * @uses JSPSellItem::setFreeing()
     * @uses JSPSellItem::setItemId()
     * @uses JSPSellItem::setBookingId()
     * @uses JSPSellItem::setInvoiceName()
     * @param string $supplier
     * @param string $creationDate
     * @param string $startTravel
     * @param string $endTravel
     * @param float $itemPrice
     * @param string $status
     * @param bool $freeing
     * @param int $itemId
     * @param string $bookingId
     * @param string $invoiceName
     */
    public function __construct(?string $supplier = null, ?string $creationDate = null, ?string $startTravel = null, ?string $endTravel = null, ?float $itemPrice = null, ?string $status = null, ?bool $freeing = null, ?int $itemId = null, ?string $bookingId = null, ?string $invoiceName = null)
    {
        $this
            ->setSupplier($supplier)
            ->setCreationDate($creationDate)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setItemPrice($itemPrice)
            ->setStatus($status)
            ->setFreeing($freeing)
            ->setItemId($itemId)
            ->setBookingId($bookingId)
            ->setInvoiceName($invoiceName);
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
     * @return \Pggns\MidocoApi\Order\StructType\JSPSellItem
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
     * @return \Pggns\MidocoApi\Order\StructType\JSPSellItem
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
     * @return \Pggns\MidocoApi\Order\StructType\JSPSellItem
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
     * @return \Pggns\MidocoApi\Order\StructType\JSPSellItem
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
     * @return \Pggns\MidocoApi\Order\StructType\JSPSellItem
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
     * @return \Pggns\MidocoApi\Order\StructType\JSPSellItem
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
     * Get freeing value
     * @return bool|null
     */
    public function getFreeing(): ?bool
    {
        return $this->freeing;
    }
    /**
     * Set freeing value
     * @param bool $freeing
     * @return \Pggns\MidocoApi\Order\StructType\JSPSellItem
     */
    public function setFreeing(?bool $freeing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($freeing) && !is_bool($freeing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($freeing, true), gettype($freeing)), __LINE__);
        }
        $this->freeing = $freeing;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JSPSellItem
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
     * @return \Pggns\MidocoApi\Order\StructType\JSPSellItem
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
     * Get invoiceName value
     * @return string|null
     */
    public function getInvoiceName(): ?string
    {
        return $this->invoiceName;
    }
    /**
     * Set invoiceName value
     * @param string $invoiceName
     * @return \Pggns\MidocoApi\Order\StructType\JSPSellItem
     */
    public function setInvoiceName(?string $invoiceName = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceName) && !is_string($invoiceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceName, true), gettype($invoiceName)), __LINE__);
        }
        $this->invoiceName = $invoiceName;
        
        return $this;
    }
}
