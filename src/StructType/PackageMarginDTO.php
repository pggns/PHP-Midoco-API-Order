<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageMarginDTO StructType
 * @subpackage Structs
 */
class PackageMarginDTO extends AbstractStructBase
{
    /**
     * The agencyCommission
     * @var float|null
     */
    protected ?float $agencyCommission = null;
    /**
     * The bookedMargin
     * @var float|null
     */
    protected ?float $bookedMargin = null;
    /**
     * The bookedVat
     * @var float|null
     */
    protected ?float $bookedVat = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The calculatedMargin
     * @var float|null
     */
    protected ?float $calculatedMargin = null;
    /**
     * The calculatedVat
     * @var float|null
     */
    protected ?float $calculatedVat = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The incomingInvoiceComplete
     * @var bool|null
     */
    protected ?bool $incomingInvoiceComplete = null;
    /**
     * The marginAccount
     * @var string|null
     */
    protected ?string $marginAccount = null;
    /**
     * The marginPercent
     * @var float|null
     */
    protected ?float $marginPercent = null;
    /**
     * The needsMarginBooking
     * @var bool|null
     */
    protected ?bool $needsMarginBooking = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orgunitName
     * @var string|null
     */
    protected ?string $orgunitName = null;
    /**
     * The outgoingInvoiceComplete
     * @var bool|null
     */
    protected ?bool $outgoingInvoiceComplete = null;
    /**
     * The packageAccount
     * @var string|null
     */
    protected ?string $packageAccount = null;
    /**
     * The packageMarginId
     * @var int|null
     */
    protected ?int $packageMarginId = null;
    /**
     * The preventMarginBooking
     * @var bool|null
     */
    protected ?bool $preventMarginBooking = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The sumBuy
     * @var float|null
     */
    protected ?float $sumBuy = null;
    /**
     * The sumSale
     * @var float|null
     */
    protected ?float $sumSale = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for PackageMarginDTO
     * @uses PackageMarginDTO::setAgencyCommission()
     * @uses PackageMarginDTO::setBookedMargin()
     * @uses PackageMarginDTO::setBookedVat()
     * @uses PackageMarginDTO::setBookingId()
     * @uses PackageMarginDTO::setCalculatedMargin()
     * @uses PackageMarginDTO::setCalculatedVat()
     * @uses PackageMarginDTO::setCostCentre()
     * @uses PackageMarginDTO::setCreationTime()
     * @uses PackageMarginDTO::setCreationUser()
     * @uses PackageMarginDTO::setCurrency()
     * @uses PackageMarginDTO::setDestination()
     * @uses PackageMarginDTO::setIncomingInvoiceComplete()
     * @uses PackageMarginDTO::setMarginAccount()
     * @uses PackageMarginDTO::setMarginPercent()
     * @uses PackageMarginDTO::setNeedsMarginBooking()
     * @uses PackageMarginDTO::setOrderId()
     * @uses PackageMarginDTO::setOrgunitName()
     * @uses PackageMarginDTO::setOutgoingInvoiceComplete()
     * @uses PackageMarginDTO::setPackageAccount()
     * @uses PackageMarginDTO::setPackageMarginId()
     * @uses PackageMarginDTO::setPreventMarginBooking()
     * @uses PackageMarginDTO::setStartTravel()
     * @uses PackageMarginDTO::setSumBuy()
     * @uses PackageMarginDTO::setSumSale()
     * @uses PackageMarginDTO::setSupplierId()
     * @param float $agencyCommission
     * @param float $bookedMargin
     * @param float $bookedVat
     * @param string $bookingId
     * @param float $calculatedMargin
     * @param float $calculatedVat
     * @param string $costCentre
     * @param string $creationTime
     * @param int $creationUser
     * @param string $currency
     * @param string $destination
     * @param bool $incomingInvoiceComplete
     * @param string $marginAccount
     * @param float $marginPercent
     * @param bool $needsMarginBooking
     * @param int $orderId
     * @param string $orgunitName
     * @param bool $outgoingInvoiceComplete
     * @param string $packageAccount
     * @param int $packageMarginId
     * @param bool $preventMarginBooking
     * @param string $startTravel
     * @param float $sumBuy
     * @param float $sumSale
     * @param string $supplierId
     */
    public function __construct(?float $agencyCommission = null, ?float $bookedMargin = null, ?float $bookedVat = null, ?string $bookingId = null, ?float $calculatedMargin = null, ?float $calculatedVat = null, ?string $costCentre = null, ?string $creationTime = null, ?int $creationUser = null, ?string $currency = null, ?string $destination = null, ?bool $incomingInvoiceComplete = null, ?string $marginAccount = null, ?float $marginPercent = null, ?bool $needsMarginBooking = null, ?int $orderId = null, ?string $orgunitName = null, ?bool $outgoingInvoiceComplete = null, ?string $packageAccount = null, ?int $packageMarginId = null, ?bool $preventMarginBooking = null, ?string $startTravel = null, ?float $sumBuy = null, ?float $sumSale = null, ?string $supplierId = null)
    {
        $this
            ->setAgencyCommission($agencyCommission)
            ->setBookedMargin($bookedMargin)
            ->setBookedVat($bookedVat)
            ->setBookingId($bookingId)
            ->setCalculatedMargin($calculatedMargin)
            ->setCalculatedVat($calculatedVat)
            ->setCostCentre($costCentre)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setCurrency($currency)
            ->setDestination($destination)
            ->setIncomingInvoiceComplete($incomingInvoiceComplete)
            ->setMarginAccount($marginAccount)
            ->setMarginPercent($marginPercent)
            ->setNeedsMarginBooking($needsMarginBooking)
            ->setOrderId($orderId)
            ->setOrgunitName($orgunitName)
            ->setOutgoingInvoiceComplete($outgoingInvoiceComplete)
            ->setPackageAccount($packageAccount)
            ->setPackageMarginId($packageMarginId)
            ->setPreventMarginBooking($preventMarginBooking)
            ->setStartTravel($startTravel)
            ->setSumBuy($sumBuy)
            ->setSumSale($sumSale)
            ->setSupplierId($supplierId);
    }
    /**
     * Get agencyCommission value
     * @return float|null
     */
    public function getAgencyCommission(): ?float
    {
        return $this->agencyCommission;
    }
    /**
     * Set agencyCommission value
     * @param float $agencyCommission
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setAgencyCommission(?float $agencyCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCommission) && !(is_float($agencyCommission) || is_numeric($agencyCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCommission, true), gettype($agencyCommission)), __LINE__);
        }
        $this->agencyCommission = $agencyCommission;
        
        return $this;
    }
    /**
     * Get bookedMargin value
     * @return float|null
     */
    public function getBookedMargin(): ?float
    {
        return $this->bookedMargin;
    }
    /**
     * Set bookedMargin value
     * @param float $bookedMargin
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setBookedMargin(?float $bookedMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedMargin) && !(is_float($bookedMargin) || is_numeric($bookedMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedMargin, true), gettype($bookedMargin)), __LINE__);
        }
        $this->bookedMargin = $bookedMargin;
        
        return $this;
    }
    /**
     * Get bookedVat value
     * @return float|null
     */
    public function getBookedVat(): ?float
    {
        return $this->bookedVat;
    }
    /**
     * Set bookedVat value
     * @param float $bookedVat
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setBookedVat(?float $bookedVat = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedVat) && !(is_float($bookedVat) || is_numeric($bookedVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedVat, true), gettype($bookedVat)), __LINE__);
        }
        $this->bookedVat = $bookedVat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
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
     * Get calculatedMargin value
     * @return float|null
     */
    public function getCalculatedMargin(): ?float
    {
        return $this->calculatedMargin;
    }
    /**
     * Set calculatedMargin value
     * @param float $calculatedMargin
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setCalculatedMargin(?float $calculatedMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMargin) && !(is_float($calculatedMargin) || is_numeric($calculatedMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMargin, true), gettype($calculatedMargin)), __LINE__);
        }
        $this->calculatedMargin = $calculatedMargin;
        
        return $this;
    }
    /**
     * Get calculatedVat value
     * @return float|null
     */
    public function getCalculatedVat(): ?float
    {
        return $this->calculatedVat;
    }
    /**
     * Set calculatedVat value
     * @param float $calculatedVat
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setCalculatedVat(?float $calculatedVat = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedVat) && !(is_float($calculatedVat) || is_numeric($calculatedVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedVat, true), gettype($calculatedVat)), __LINE__);
        }
        $this->calculatedVat = $calculatedVat;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get incomingInvoiceComplete value
     * @return bool|null
     */
    public function getIncomingInvoiceComplete(): ?bool
    {
        return $this->incomingInvoiceComplete;
    }
    /**
     * Set incomingInvoiceComplete value
     * @param bool $incomingInvoiceComplete
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setIncomingInvoiceComplete(?bool $incomingInvoiceComplete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($incomingInvoiceComplete) && !is_bool($incomingInvoiceComplete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($incomingInvoiceComplete, true), gettype($incomingInvoiceComplete)), __LINE__);
        }
        $this->incomingInvoiceComplete = $incomingInvoiceComplete;
        
        return $this;
    }
    /**
     * Get marginAccount value
     * @return string|null
     */
    public function getMarginAccount(): ?string
    {
        return $this->marginAccount;
    }
    /**
     * Set marginAccount value
     * @param string $marginAccount
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setMarginAccount(?string $marginAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($marginAccount) && !is_string($marginAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marginAccount, true), gettype($marginAccount)), __LINE__);
        }
        $this->marginAccount = $marginAccount;
        
        return $this;
    }
    /**
     * Get marginPercent value
     * @return float|null
     */
    public function getMarginPercent(): ?float
    {
        return $this->marginPercent;
    }
    /**
     * Set marginPercent value
     * @param float $marginPercent
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setMarginPercent(?float $marginPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($marginPercent) && !(is_float($marginPercent) || is_numeric($marginPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginPercent, true), gettype($marginPercent)), __LINE__);
        }
        $this->marginPercent = $marginPercent;
        
        return $this;
    }
    /**
     * Get needsMarginBooking value
     * @return bool|null
     */
    public function getNeedsMarginBooking(): ?bool
    {
        return $this->needsMarginBooking;
    }
    /**
     * Set needsMarginBooking value
     * @param bool $needsMarginBooking
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setNeedsMarginBooking(?bool $needsMarginBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsMarginBooking) && !is_bool($needsMarginBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsMarginBooking, true), gettype($needsMarginBooking)), __LINE__);
        }
        $this->needsMarginBooking = $needsMarginBooking;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
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
     * Get orgunitName value
     * @return string|null
     */
    public function getOrgunitName(): ?string
    {
        return $this->orgunitName;
    }
    /**
     * Set orgunitName value
     * @param string $orgunitName
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setOrgunitName(?string $orgunitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunitName) && !is_string($orgunitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunitName, true), gettype($orgunitName)), __LINE__);
        }
        $this->orgunitName = $orgunitName;
        
        return $this;
    }
    /**
     * Get outgoingInvoiceComplete value
     * @return bool|null
     */
    public function getOutgoingInvoiceComplete(): ?bool
    {
        return $this->outgoingInvoiceComplete;
    }
    /**
     * Set outgoingInvoiceComplete value
     * @param bool $outgoingInvoiceComplete
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setOutgoingInvoiceComplete(?bool $outgoingInvoiceComplete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($outgoingInvoiceComplete) && !is_bool($outgoingInvoiceComplete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($outgoingInvoiceComplete, true), gettype($outgoingInvoiceComplete)), __LINE__);
        }
        $this->outgoingInvoiceComplete = $outgoingInvoiceComplete;
        
        return $this;
    }
    /**
     * Get packageAccount value
     * @return string|null
     */
    public function getPackageAccount(): ?string
    {
        return $this->packageAccount;
    }
    /**
     * Set packageAccount value
     * @param string $packageAccount
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setPackageAccount(?string $packageAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($packageAccount) && !is_string($packageAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageAccount, true), gettype($packageAccount)), __LINE__);
        }
        $this->packageAccount = $packageAccount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
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
     * Get preventMarginBooking value
     * @return bool|null
     */
    public function getPreventMarginBooking(): ?bool
    {
        return $this->preventMarginBooking;
    }
    /**
     * Set preventMarginBooking value
     * @param bool $preventMarginBooking
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setPreventMarginBooking(?bool $preventMarginBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventMarginBooking) && !is_bool($preventMarginBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventMarginBooking, true), gettype($preventMarginBooking)), __LINE__);
        }
        $this->preventMarginBooking = $preventMarginBooking;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
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
     * Get sumBuy value
     * @return float|null
     */
    public function getSumBuy(): ?float
    {
        return $this->sumBuy;
    }
    /**
     * Set sumBuy value
     * @param float $sumBuy
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setSumBuy(?float $sumBuy = null): self
    {
        // validation for constraint: float
        if (!is_null($sumBuy) && !(is_float($sumBuy) || is_numeric($sumBuy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumBuy, true), gettype($sumBuy)), __LINE__);
        }
        $this->sumBuy = $sumBuy;
        
        return $this;
    }
    /**
     * Get sumSale value
     * @return float|null
     */
    public function getSumSale(): ?float
    {
        return $this->sumSale;
    }
    /**
     * Set sumSale value
     * @param float $sumSale
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
     */
    public function setSumSale(?float $sumSale = null): self
    {
        // validation for constraint: float
        if (!is_null($sumSale) && !(is_float($sumSale) || is_numeric($sumSale))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumSale, true), gettype($sumSale)), __LINE__);
        }
        $this->sumSale = $sumSale;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginDTO
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
}
