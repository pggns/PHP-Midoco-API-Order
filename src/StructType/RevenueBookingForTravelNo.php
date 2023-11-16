<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueBookingForTravelNo StructType
 * @subpackage Structs
 */
class RevenueBookingForTravelNo extends RevenueBookingDTO
{
    /**
     * The automaticallySplit
     * @var bool|null
     */
    protected ?bool $automaticallySplit = null;
    /**
     * The bookedSupplierInvoice
     * @var float|null
     */
    protected ?float $bookedSupplierInvoice = null;
    /**
     * The manuallySplit
     * @var bool|null
     */
    protected ?bool $manuallySplit = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
    /**
     * Constructor method for RevenueBookingForTravelNo
     * @uses RevenueBookingForTravelNo::setAutomaticallySplit()
     * @uses RevenueBookingForTravelNo::setBookedSupplierInvoice()
     * @uses RevenueBookingForTravelNo::setManuallySplit()
     * @uses RevenueBookingForTravelNo::setPercent()
     * @param bool $automaticallySplit
     * @param float $bookedSupplierInvoice
     * @param bool $manuallySplit
     * @param float $percent
     */
    public function __construct(?bool $automaticallySplit = null, ?float $bookedSupplierInvoice = null, ?bool $manuallySplit = null, ?float $percent = null)
    {
        $this
            ->setAutomaticallySplit($automaticallySplit)
            ->setBookedSupplierInvoice($bookedSupplierInvoice)
            ->setManuallySplit($manuallySplit)
            ->setPercent($percent);
    }
    /**
     * Get automaticallySplit value
     * @return bool|null
     */
    public function getAutomaticallySplit(): ?bool
    {
        return $this->automaticallySplit;
    }
    /**
     * Set automaticallySplit value
     * @param bool $automaticallySplit
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo
     */
    public function setAutomaticallySplit(?bool $automaticallySplit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($automaticallySplit) && !is_bool($automaticallySplit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automaticallySplit, true), gettype($automaticallySplit)), __LINE__);
        }
        $this->automaticallySplit = $automaticallySplit;
        
        return $this;
    }
    /**
     * Get bookedSupplierInvoice value
     * @return float|null
     */
    public function getBookedSupplierInvoice(): ?float
    {
        return $this->bookedSupplierInvoice;
    }
    /**
     * Set bookedSupplierInvoice value
     * @param float $bookedSupplierInvoice
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo
     */
    public function setBookedSupplierInvoice(?float $bookedSupplierInvoice = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedSupplierInvoice) && !(is_float($bookedSupplierInvoice) || is_numeric($bookedSupplierInvoice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedSupplierInvoice, true), gettype($bookedSupplierInvoice)), __LINE__);
        }
        $this->bookedSupplierInvoice = $bookedSupplierInvoice;
        
        return $this;
    }
    /**
     * Get manuallySplit value
     * @return bool|null
     */
    public function getManuallySplit(): ?bool
    {
        return $this->manuallySplit;
    }
    /**
     * Set manuallySplit value
     * @param bool $manuallySplit
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo
     */
    public function setManuallySplit(?bool $manuallySplit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manuallySplit) && !is_bool($manuallySplit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manuallySplit, true), gettype($manuallySplit)), __LINE__);
        }
        $this->manuallySplit = $manuallySplit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo
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
}
