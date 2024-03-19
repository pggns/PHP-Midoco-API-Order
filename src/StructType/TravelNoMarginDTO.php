<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelNoMarginDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TravelNoMarginDTO extends AbstractStructBase
{
    /**
     * The bookedMargin
     * @var float|null
     */
    protected ?float $bookedMargin = null;
    /**
     * The bookedNegativeMargin
     * @var float|null
     */
    protected ?float $bookedNegativeMargin = null;
    /**
     * The bookedVat
     * @var float|null
     */
    protected ?float $bookedVat = null;
    /**
     * The calculatedMargin
     * @var float|null
     */
    protected ?float $calculatedMargin = null;
    /**
     * The calculatedNegativeMargin
     * @var float|null
     */
    protected ?float $calculatedNegativeMargin = null;
    /**
     * The calculatedVat
     * @var float|null
     */
    protected ?float $calculatedVat = null;
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
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
     * The descrShort
     * @var string|null
     */
    protected ?string $descrShort = null;
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
     * The isDirty
     * @var bool|null
     */
    protected ?bool $isDirty = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The lastModifyTime
     * @var string|null
     */
    protected ?string $lastModifyTime = null;
    /**
     * The manualSettlTypePercent
     * @var bool|null
     */
    protected ?bool $manualSettlTypePercent = null;
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
     * The preventMarginBooking
     * @var bool|null
     */
    protected ?bool $preventMarginBooking = null;
    /**
     * The revenuePercent
     * @var float|null
     */
    protected ?float $revenuePercent = null;
    /**
     * The settlementDate
     * @var string|null
     */
    protected ?string $settlementDate = null;
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
     * The sumCommission
     * @var float|null
     */
    protected ?float $sumCommission = null;
    /**
     * The sumNegativeBuy
     * @var float|null
     */
    protected ?float $sumNegativeBuy = null;
    /**
     * The sumNegativeSale
     * @var float|null
     */
    protected ?float $sumNegativeSale = null;
    /**
     * The sumSale
     * @var float|null
     */
    protected ?float $sumSale = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * Constructor method for TravelNoMarginDTO
     * @uses TravelNoMarginDTO::setBookedMargin()
     * @uses TravelNoMarginDTO::setBookedNegativeMargin()
     * @uses TravelNoMarginDTO::setBookedVat()
     * @uses TravelNoMarginDTO::setCalculatedMargin()
     * @uses TravelNoMarginDTO::setCalculatedNegativeMargin()
     * @uses TravelNoMarginDTO::setCalculatedVat()
     * @uses TravelNoMarginDTO::setComment()
     * @uses TravelNoMarginDTO::setCostCentre()
     * @uses TravelNoMarginDTO::setCreationTime()
     * @uses TravelNoMarginDTO::setCreationUser()
     * @uses TravelNoMarginDTO::setDescrShort()
     * @uses TravelNoMarginDTO::setDestination()
     * @uses TravelNoMarginDTO::setIncomingInvoiceComplete()
     * @uses TravelNoMarginDTO::setIsDirty()
     * @uses TravelNoMarginDTO::setIsStorno()
     * @uses TravelNoMarginDTO::setLastModifyTime()
     * @uses TravelNoMarginDTO::setManualSettlTypePercent()
     * @uses TravelNoMarginDTO::setMarginPercent()
     * @uses TravelNoMarginDTO::setNeedsMarginBooking()
     * @uses TravelNoMarginDTO::setOrgunitName()
     * @uses TravelNoMarginDTO::setOutgoingInvoiceComplete()
     * @uses TravelNoMarginDTO::setPreventMarginBooking()
     * @uses TravelNoMarginDTO::setRevenuePercent()
     * @uses TravelNoMarginDTO::setSettlementDate()
     * @uses TravelNoMarginDTO::setStartTravel()
     * @uses TravelNoMarginDTO::setSumBuy()
     * @uses TravelNoMarginDTO::setSumCommission()
     * @uses TravelNoMarginDTO::setSumNegativeBuy()
     * @uses TravelNoMarginDTO::setSumNegativeSale()
     * @uses TravelNoMarginDTO::setSumSale()
     * @uses TravelNoMarginDTO::setTravelNo()
     * @param float $bookedMargin
     * @param float $bookedNegativeMargin
     * @param float $bookedVat
     * @param float $calculatedMargin
     * @param float $calculatedNegativeMargin
     * @param float $calculatedVat
     * @param string $comment
     * @param string $costCentre
     * @param string $creationTime
     * @param int $creationUser
     * @param string $descrShort
     * @param string $destination
     * @param bool $incomingInvoiceComplete
     * @param bool $isDirty
     * @param bool $isStorno
     * @param string $lastModifyTime
     * @param bool $manualSettlTypePercent
     * @param float $marginPercent
     * @param bool $needsMarginBooking
     * @param string $orgunitName
     * @param bool $outgoingInvoiceComplete
     * @param bool $preventMarginBooking
     * @param float $revenuePercent
     * @param string $settlementDate
     * @param string $startTravel
     * @param float $sumBuy
     * @param float $sumCommission
     * @param float $sumNegativeBuy
     * @param float $sumNegativeSale
     * @param float $sumSale
     * @param string $travelNo
     */
    public function __construct(?float $bookedMargin = null, ?float $bookedNegativeMargin = null, ?float $bookedVat = null, ?float $calculatedMargin = null, ?float $calculatedNegativeMargin = null, ?float $calculatedVat = null, ?string $comment = null, ?string $costCentre = null, ?string $creationTime = null, ?int $creationUser = null, ?string $descrShort = null, ?string $destination = null, ?bool $incomingInvoiceComplete = null, ?bool $isDirty = null, ?bool $isStorno = null, ?string $lastModifyTime = null, ?bool $manualSettlTypePercent = null, ?float $marginPercent = null, ?bool $needsMarginBooking = null, ?string $orgunitName = null, ?bool $outgoingInvoiceComplete = null, ?bool $preventMarginBooking = null, ?float $revenuePercent = null, ?string $settlementDate = null, ?string $startTravel = null, ?float $sumBuy = null, ?float $sumCommission = null, ?float $sumNegativeBuy = null, ?float $sumNegativeSale = null, ?float $sumSale = null, ?string $travelNo = null)
    {
        $this
            ->setBookedMargin($bookedMargin)
            ->setBookedNegativeMargin($bookedNegativeMargin)
            ->setBookedVat($bookedVat)
            ->setCalculatedMargin($calculatedMargin)
            ->setCalculatedNegativeMargin($calculatedNegativeMargin)
            ->setCalculatedVat($calculatedVat)
            ->setComment($comment)
            ->setCostCentre($costCentre)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setDescrShort($descrShort)
            ->setDestination($destination)
            ->setIncomingInvoiceComplete($incomingInvoiceComplete)
            ->setIsDirty($isDirty)
            ->setIsStorno($isStorno)
            ->setLastModifyTime($lastModifyTime)
            ->setManualSettlTypePercent($manualSettlTypePercent)
            ->setMarginPercent($marginPercent)
            ->setNeedsMarginBooking($needsMarginBooking)
            ->setOrgunitName($orgunitName)
            ->setOutgoingInvoiceComplete($outgoingInvoiceComplete)
            ->setPreventMarginBooking($preventMarginBooking)
            ->setRevenuePercent($revenuePercent)
            ->setSettlementDate($settlementDate)
            ->setStartTravel($startTravel)
            ->setSumBuy($sumBuy)
            ->setSumCommission($sumCommission)
            ->setSumNegativeBuy($sumNegativeBuy)
            ->setSumNegativeSale($sumNegativeSale)
            ->setSumSale($sumSale)
            ->setTravelNo($travelNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * Get descrShort value
     * @return string|null
     */
    public function getDescrShort(): ?string
    {
        return $this->descrShort;
    }
    /**
     * Set descrShort value
     * @param string $descrShort
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
     */
    public function setDescrShort(?string $descrShort = null): self
    {
        // validation for constraint: string
        if (!is_null($descrShort) && !is_string($descrShort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descrShort, true), gettype($descrShort)), __LINE__);
        }
        $this->descrShort = $descrShort;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * Get isDirty value
     * @return bool|null
     */
    public function getIsDirty(): ?bool
    {
        return $this->isDirty;
    }
    /**
     * Set isDirty value
     * @param bool $isDirty
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
     */
    public function setIsDirty(?bool $isDirty = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDirty) && !is_bool($isDirty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDirty, true), gettype($isDirty)), __LINE__);
        }
        $this->isDirty = $isDirty;
        
        return $this;
    }
    /**
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
        return $this;
    }
    /**
     * Get lastModifyTime value
     * @return string|null
     */
    public function getLastModifyTime(): ?string
    {
        return $this->lastModifyTime;
    }
    /**
     * Set lastModifyTime value
     * @param string $lastModifyTime
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
     */
    public function setLastModifyTime(?string $lastModifyTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifyTime) && !is_string($lastModifyTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifyTime, true), gettype($lastModifyTime)), __LINE__);
        }
        $this->lastModifyTime = $lastModifyTime;
        
        return $this;
    }
    /**
     * Get manualSettlTypePercent value
     * @return bool|null
     */
    public function getManualSettlTypePercent(): ?bool
    {
        return $this->manualSettlTypePercent;
    }
    /**
     * Set manualSettlTypePercent value
     * @param bool $manualSettlTypePercent
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
     */
    public function setManualSettlTypePercent(?bool $manualSettlTypePercent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manualSettlTypePercent) && !is_bool($manualSettlTypePercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manualSettlTypePercent, true), gettype($manualSettlTypePercent)), __LINE__);
        }
        $this->manualSettlTypePercent = $manualSettlTypePercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * Get revenuePercent value
     * @return float|null
     */
    public function getRevenuePercent(): ?float
    {
        return $this->revenuePercent;
    }
    /**
     * Set revenuePercent value
     * @param float $revenuePercent
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
     */
    public function setRevenuePercent(?float $revenuePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($revenuePercent) && !(is_float($revenuePercent) || is_numeric($revenuePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenuePercent, true), gettype($revenuePercent)), __LINE__);
        }
        $this->revenuePercent = $revenuePercent;
        
        return $this;
    }
    /**
     * Get settlementDate value
     * @return string|null
     */
    public function getSettlementDate(): ?string
    {
        return $this->settlementDate;
    }
    /**
     * Set settlementDate value
     * @param string $settlementDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
     */
    public function setSettlementDate(?string $settlementDate = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementDate) && !is_string($settlementDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementDate, true), gettype($settlementDate)), __LINE__);
        }
        $this->settlementDate = $settlementDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * Get sumCommission value
     * @return float|null
     */
    public function getSumCommission(): ?float
    {
        return $this->sumCommission;
    }
    /**
     * Set sumCommission value
     * @param float $sumCommission
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
     */
    public function setSumCommission(?float $sumCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($sumCommission) && !(is_float($sumCommission) || is_numeric($sumCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumCommission, true), gettype($sumCommission)), __LINE__);
        }
        $this->sumCommission = $sumCommission;
        
        return $this;
    }
    /**
     * Get sumNegativeBuy value
     * @return float|null
     */
    public function getSumNegativeBuy(): ?float
    {
        return $this->sumNegativeBuy;
    }
    /**
     * Set sumNegativeBuy value
     * @param float $sumNegativeBuy
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
     */
    public function setSumNegativeBuy(?float $sumNegativeBuy = null): self
    {
        // validation for constraint: float
        if (!is_null($sumNegativeBuy) && !(is_float($sumNegativeBuy) || is_numeric($sumNegativeBuy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumNegativeBuy, true), gettype($sumNegativeBuy)), __LINE__);
        }
        $this->sumNegativeBuy = $sumNegativeBuy;
        
        return $this;
    }
    /**
     * Get sumNegativeSale value
     * @return float|null
     */
    public function getSumNegativeSale(): ?float
    {
        return $this->sumNegativeSale;
    }
    /**
     * Set sumNegativeSale value
     * @param float $sumNegativeSale
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
     */
    public function setSumNegativeSale(?float $sumNegativeSale = null): self
    {
        // validation for constraint: float
        if (!is_null($sumNegativeSale) && !(is_float($sumNegativeSale) || is_numeric($sumNegativeSale))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumNegativeSale, true), gettype($sumNegativeSale)), __LINE__);
        }
        $this->sumNegativeSale = $sumNegativeSale;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginDTO
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
}
