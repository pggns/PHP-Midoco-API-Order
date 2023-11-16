<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorBillingDetailsExt StructType
 * @subpackage Structs
 */
class MediatorBillingDetailsExt extends MediatorBillingDetailDTO
{
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
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The pax
     * @var int|null
     */
    protected ?int $pax = null;
    /**
     * The bookingCreationDate
     * @var string|null
     */
    protected ?string $bookingCreationDate = null;
    /**
     * The bookingCount
     * @var int|null
     */
    protected ?int $bookingCount = null;
    /**
     * The agencySortName
     * @var string|null
     */
    protected ?string $agencySortName = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The mediatorAffiliate
     * @var string|null
     */
    protected ?string $mediatorAffiliate = null;
    /**
     * Constructor method for MediatorBillingDetailsExt
     * @uses MediatorBillingDetailsExt::setStartTravel()
     * @uses MediatorBillingDetailsExt::setEndTravel()
     * @uses MediatorBillingDetailsExt::setOrderNo()
     * @uses MediatorBillingDetailsExt::setPax()
     * @uses MediatorBillingDetailsExt::setBookingCreationDate()
     * @uses MediatorBillingDetailsExt::setBookingCount()
     * @uses MediatorBillingDetailsExt::setAgencySortName()
     * @uses MediatorBillingDetailsExt::setVatAmount()
     * @uses MediatorBillingDetailsExt::setMediatorAffiliate()
     * @param string $startTravel
     * @param string $endTravel
     * @param int $orderNo
     * @param int $pax
     * @param string $bookingCreationDate
     * @param int $bookingCount
     * @param string $agencySortName
     * @param float $vatAmount
     * @param string $mediatorAffiliate
     */
    public function __construct(?string $startTravel = null, ?string $endTravel = null, ?int $orderNo = null, ?int $pax = null, ?string $bookingCreationDate = null, ?int $bookingCount = null, ?string $agencySortName = null, ?float $vatAmount = null, ?string $mediatorAffiliate = null)
    {
        $this
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setOrderNo($orderNo)
            ->setPax($pax)
            ->setBookingCreationDate($bookingCreationDate)
            ->setBookingCount($bookingCount)
            ->setAgencySortName($agencySortName)
            ->setVatAmount($vatAmount)
            ->setMediatorAffiliate($mediatorAffiliate);
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailsExt
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailsExt
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailsExt
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
     * Get pax value
     * @return int|null
     */
    public function getPax(): ?int
    {
        return $this->pax;
    }
    /**
     * Set pax value
     * @param int $pax
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailsExt
     */
    public function setPax(?int $pax = null): self
    {
        // validation for constraint: int
        if (!is_null($pax) && !(is_int($pax) || ctype_digit($pax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pax, true), gettype($pax)), __LINE__);
        }
        $this->pax = $pax;
        
        return $this;
    }
    /**
     * Get bookingCreationDate value
     * @return string|null
     */
    public function getBookingCreationDate(): ?string
    {
        return $this->bookingCreationDate;
    }
    /**
     * Set bookingCreationDate value
     * @param string $bookingCreationDate
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailsExt
     */
    public function setBookingCreationDate(?string $bookingCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingCreationDate) && !is_string($bookingCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingCreationDate, true), gettype($bookingCreationDate)), __LINE__);
        }
        $this->bookingCreationDate = $bookingCreationDate;
        
        return $this;
    }
    /**
     * Get bookingCount value
     * @return int|null
     */
    public function getBookingCount(): ?int
    {
        return $this->bookingCount;
    }
    /**
     * Set bookingCount value
     * @param int $bookingCount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailsExt
     */
    public function setBookingCount(?int $bookingCount = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingCount) && !(is_int($bookingCount) || ctype_digit($bookingCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingCount, true), gettype($bookingCount)), __LINE__);
        }
        $this->bookingCount = $bookingCount;
        
        return $this;
    }
    /**
     * Get agencySortName value
     * @return string|null
     */
    public function getAgencySortName(): ?string
    {
        return $this->agencySortName;
    }
    /**
     * Set agencySortName value
     * @param string $agencySortName
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailsExt
     */
    public function setAgencySortName(?string $agencySortName = null): self
    {
        // validation for constraint: string
        if (!is_null($agencySortName) && !is_string($agencySortName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencySortName, true), gettype($agencySortName)), __LINE__);
        }
        $this->agencySortName = $agencySortName;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailsExt
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get mediatorAffiliate value
     * @return string|null
     */
    public function getMediatorAffiliate(): ?string
    {
        return $this->mediatorAffiliate;
    }
    /**
     * Set mediatorAffiliate value
     * @param string $mediatorAffiliate
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailsExt
     */
    public function setMediatorAffiliate(?string $mediatorAffiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorAffiliate) && !is_string($mediatorAffiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorAffiliate, true), gettype($mediatorAffiliate)), __LINE__);
        }
        $this->mediatorAffiliate = $mediatorAffiliate;
        
        return $this;
    }
}
