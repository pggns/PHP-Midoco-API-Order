<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBookingInfo4Kickback StructType
 * @subpackage Structs
 */
class MidocoBookingInfo4Kickback extends AbstractStructBase
{
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The supplierBookingId
     * @var string|null
     */
    protected ?string $supplierBookingId = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The countryDestination
     * @var string|null
     */
    protected ?string $countryDestination = null;
    /**
     * The salePrice
     * @var float|null
     */
    protected ?float $salePrice = null;
    /**
     * The kickbackAmount
     * @var float|null
     */
    protected ?float $kickbackAmount = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The paymentDate
     * @var string|null
     */
    protected ?string $paymentDate = null;
    /**
     * Constructor method for MidocoBookingInfo4Kickback
     * @uses MidocoBookingInfo4Kickback::setBookingDate()
     * @uses MidocoBookingInfo4Kickback::setSupplierBookingId()
     * @uses MidocoBookingInfo4Kickback::setStartTravel()
     * @uses MidocoBookingInfo4Kickback::setCountryDestination()
     * @uses MidocoBookingInfo4Kickback::setSalePrice()
     * @uses MidocoBookingInfo4Kickback::setKickbackAmount()
     * @uses MidocoBookingInfo4Kickback::setStatus()
     * @uses MidocoBookingInfo4Kickback::setPaymentDate()
     * @param string $bookingDate
     * @param string $supplierBookingId
     * @param string $startTravel
     * @param string $countryDestination
     * @param float $salePrice
     * @param float $kickbackAmount
     * @param string $status
     * @param string $paymentDate
     */
    public function __construct(?string $bookingDate = null, ?string $supplierBookingId = null, ?string $startTravel = null, ?string $countryDestination = null, ?float $salePrice = null, ?float $kickbackAmount = null, ?string $status = null, ?string $paymentDate = null)
    {
        $this
            ->setBookingDate($bookingDate)
            ->setSupplierBookingId($supplierBookingId)
            ->setStartTravel($startTravel)
            ->setCountryDestination($countryDestination)
            ->setSalePrice($salePrice)
            ->setKickbackAmount($kickbackAmount)
            ->setStatus($status)
            ->setPaymentDate($paymentDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback
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
     * Get supplierBookingId value
     * @return string|null
     */
    public function getSupplierBookingId(): ?string
    {
        return $this->supplierBookingId;
    }
    /**
     * Set supplierBookingId value
     * @param string $supplierBookingId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback
     */
    public function setSupplierBookingId(?string $supplierBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierBookingId) && !is_string($supplierBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierBookingId, true), gettype($supplierBookingId)), __LINE__);
        }
        $this->supplierBookingId = $supplierBookingId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback
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
     * Get countryDestination value
     * @return string|null
     */
    public function getCountryDestination(): ?string
    {
        return $this->countryDestination;
    }
    /**
     * Set countryDestination value
     * @param string $countryDestination
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback
     */
    public function setCountryDestination(?string $countryDestination = null): self
    {
        // validation for constraint: string
        if (!is_null($countryDestination) && !is_string($countryDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryDestination, true), gettype($countryDestination)), __LINE__);
        }
        $this->countryDestination = $countryDestination;
        
        return $this;
    }
    /**
     * Get salePrice value
     * @return float|null
     */
    public function getSalePrice(): ?float
    {
        return $this->salePrice;
    }
    /**
     * Set salePrice value
     * @param float $salePrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback
     */
    public function setSalePrice(?float $salePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($salePrice) && !(is_float($salePrice) || is_numeric($salePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePrice, true), gettype($salePrice)), __LINE__);
        }
        $this->salePrice = $salePrice;
        
        return $this;
    }
    /**
     * Get kickbackAmount value
     * @return float|null
     */
    public function getKickbackAmount(): ?float
    {
        return $this->kickbackAmount;
    }
    /**
     * Set kickbackAmount value
     * @param float $kickbackAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback
     */
    public function setKickbackAmount(?float $kickbackAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($kickbackAmount) && !(is_float($kickbackAmount) || is_numeric($kickbackAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($kickbackAmount, true), gettype($kickbackAmount)), __LINE__);
        }
        $this->kickbackAmount = $kickbackAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback
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
     * Get paymentDate value
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }
    /**
     * Set paymentDate value
     * @param string $paymentDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback
     */
    public function setPaymentDate(?string $paymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDate, true), gettype($paymentDate)), __LINE__);
        }
        $this->paymentDate = $paymentDate;
        
        return $this;
    }
}
