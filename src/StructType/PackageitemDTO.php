<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageitemDTO StructType
 * @subpackage Structs
 */
class PackageitemDTO extends AbstractStructBase
{
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The extSystem
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The groupItemFlag
     * @var bool|null
     */
    protected ?bool $groupItemFlag = null;
    /**
     * The groupItemName
     * @var string|null
     */
    protected ?string $groupItemName = null;
    /**
     * The insuranceCancelDate
     * @var string|null
     */
    protected ?string $insuranceCancelDate = null;
    /**
     * The insuranceDate
     * @var string|null
     */
    protected ?string $insuranceDate = null;
    /**
     * The insuranceId
     * @var string|null
     */
    protected ?string $insuranceId = null;
    /**
     * The insuranceValidFrom
     * @var string|null
     */
    protected ?string $insuranceValidFrom = null;
    /**
     * The insuranceValidUntil
     * @var string|null
     */
    protected ?string $insuranceValidUntil = null;
    /**
     * The insuredAmount
     * @var float|null
     */
    protected ?float $insuredAmount = null;
    /**
     * The insuredCancelAmount
     * @var float|null
     */
    protected ?float $insuredCancelAmount = null;
    /**
     * The isSingleMargin
     * @var bool|null
     */
    protected ?bool $isSingleMargin = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The noOfPersons
     * @var int|null
     */
    protected ?int $noOfPersons = null;
    /**
     * The offlineBooking
     * @var bool|null
     */
    protected ?bool $offlineBooking = null;
    /**
     * The offlineCancel
     * @var bool|null
     */
    protected ?bool $offlineCancel = null;
    /**
     * The packageId
     * @var string|null
     */
    protected ?string $packageId = null;
    /**
     * The policyNo
     * @var string|null
     */
    protected ?string $policyNo = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The stornoDate
     * @var string|null
     */
    protected ?string $stornoDate = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * Constructor method for PackageitemDTO
     * @uses PackageitemDTO::setBookingDate()
     * @uses PackageitemDTO::setDestination()
     * @uses PackageitemDTO::setEndTravel()
     * @uses PackageitemDTO::setExtSystem()
     * @uses PackageitemDTO::setGroupItemFlag()
     * @uses PackageitemDTO::setGroupItemName()
     * @uses PackageitemDTO::setInsuranceCancelDate()
     * @uses PackageitemDTO::setInsuranceDate()
     * @uses PackageitemDTO::setInsuranceId()
     * @uses PackageitemDTO::setInsuranceValidFrom()
     * @uses PackageitemDTO::setInsuranceValidUntil()
     * @uses PackageitemDTO::setInsuredAmount()
     * @uses PackageitemDTO::setInsuredCancelAmount()
     * @uses PackageitemDTO::setIsSingleMargin()
     * @uses PackageitemDTO::setItemId()
     * @uses PackageitemDTO::setNoOfPersons()
     * @uses PackageitemDTO::setOfflineBooking()
     * @uses PackageitemDTO::setOfflineCancel()
     * @uses PackageitemDTO::setPackageId()
     * @uses PackageitemDTO::setPolicyNo()
     * @uses PackageitemDTO::setStartTravel()
     * @uses PackageitemDTO::setStatus()
     * @uses PackageitemDTO::setStornoDate()
     * @uses PackageitemDTO::setSupplierId()
     * @uses PackageitemDTO::setTravelNo()
     * @uses PackageitemDTO::setTraveltype()
     * @param string $bookingDate
     * @param string $destination
     * @param string $endTravel
     * @param string $extSystem
     * @param bool $groupItemFlag
     * @param string $groupItemName
     * @param string $insuranceCancelDate
     * @param string $insuranceDate
     * @param string $insuranceId
     * @param string $insuranceValidFrom
     * @param string $insuranceValidUntil
     * @param float $insuredAmount
     * @param float $insuredCancelAmount
     * @param bool $isSingleMargin
     * @param int $itemId
     * @param int $noOfPersons
     * @param bool $offlineBooking
     * @param bool $offlineCancel
     * @param string $packageId
     * @param string $policyNo
     * @param string $startTravel
     * @param string $status
     * @param string $stornoDate
     * @param string $supplierId
     * @param string $travelNo
     * @param string $traveltype
     */
    public function __construct(?string $bookingDate = null, ?string $destination = null, ?string $endTravel = null, ?string $extSystem = null, ?bool $groupItemFlag = null, ?string $groupItemName = null, ?string $insuranceCancelDate = null, ?string $insuranceDate = null, ?string $insuranceId = null, ?string $insuranceValidFrom = null, ?string $insuranceValidUntil = null, ?float $insuredAmount = null, ?float $insuredCancelAmount = null, ?bool $isSingleMargin = null, ?int $itemId = null, ?int $noOfPersons = null, ?bool $offlineBooking = null, ?bool $offlineCancel = null, ?string $packageId = null, ?string $policyNo = null, ?string $startTravel = null, ?string $status = null, ?string $stornoDate = null, ?string $supplierId = null, ?string $travelNo = null, ?string $traveltype = null)
    {
        $this
            ->setBookingDate($bookingDate)
            ->setDestination($destination)
            ->setEndTravel($endTravel)
            ->setExtSystem($extSystem)
            ->setGroupItemFlag($groupItemFlag)
            ->setGroupItemName($groupItemName)
            ->setInsuranceCancelDate($insuranceCancelDate)
            ->setInsuranceDate($insuranceDate)
            ->setInsuranceId($insuranceId)
            ->setInsuranceValidFrom($insuranceValidFrom)
            ->setInsuranceValidUntil($insuranceValidUntil)
            ->setInsuredAmount($insuredAmount)
            ->setInsuredCancelAmount($insuredCancelAmount)
            ->setIsSingleMargin($isSingleMargin)
            ->setItemId($itemId)
            ->setNoOfPersons($noOfPersons)
            ->setOfflineBooking($offlineBooking)
            ->setOfflineCancel($offlineCancel)
            ->setPackageId($packageId)
            ->setPolicyNo($policyNo)
            ->setStartTravel($startTravel)
            ->setStatus($status)
            ->setStornoDate($stornoDate)
            ->setSupplierId($supplierId)
            ->setTravelNo($travelNo)
            ->setTraveltype($traveltype);
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
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
     * Get extSystem value
     * @return string|null
     */
    public function getExtSystem(): ?string
    {
        return $this->extSystem;
    }
    /**
     * Set extSystem value
     * @param string $extSystem
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setExtSystem(?string $extSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($extSystem) && !is_string($extSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extSystem, true), gettype($extSystem)), __LINE__);
        }
        $this->extSystem = $extSystem;
        
        return $this;
    }
    /**
     * Get groupItemFlag value
     * @return bool|null
     */
    public function getGroupItemFlag(): ?bool
    {
        return $this->groupItemFlag;
    }
    /**
     * Set groupItemFlag value
     * @param bool $groupItemFlag
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setGroupItemFlag(?bool $groupItemFlag = null): self
    {
        // validation for constraint: boolean
        if (!is_null($groupItemFlag) && !is_bool($groupItemFlag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupItemFlag, true), gettype($groupItemFlag)), __LINE__);
        }
        $this->groupItemFlag = $groupItemFlag;
        
        return $this;
    }
    /**
     * Get groupItemName value
     * @return string|null
     */
    public function getGroupItemName(): ?string
    {
        return $this->groupItemName;
    }
    /**
     * Set groupItemName value
     * @param string $groupItemName
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setGroupItemName(?string $groupItemName = null): self
    {
        // validation for constraint: string
        if (!is_null($groupItemName) && !is_string($groupItemName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupItemName, true), gettype($groupItemName)), __LINE__);
        }
        $this->groupItemName = $groupItemName;
        
        return $this;
    }
    /**
     * Get insuranceCancelDate value
     * @return string|null
     */
    public function getInsuranceCancelDate(): ?string
    {
        return $this->insuranceCancelDate;
    }
    /**
     * Set insuranceCancelDate value
     * @param string $insuranceCancelDate
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setInsuranceCancelDate(?string $insuranceCancelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceCancelDate) && !is_string($insuranceCancelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceCancelDate, true), gettype($insuranceCancelDate)), __LINE__);
        }
        $this->insuranceCancelDate = $insuranceCancelDate;
        
        return $this;
    }
    /**
     * Get insuranceDate value
     * @return string|null
     */
    public function getInsuranceDate(): ?string
    {
        return $this->insuranceDate;
    }
    /**
     * Set insuranceDate value
     * @param string $insuranceDate
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setInsuranceDate(?string $insuranceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceDate) && !is_string($insuranceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceDate, true), gettype($insuranceDate)), __LINE__);
        }
        $this->insuranceDate = $insuranceDate;
        
        return $this;
    }
    /**
     * Get insuranceId value
     * @return string|null
     */
    public function getInsuranceId(): ?string
    {
        return $this->insuranceId;
    }
    /**
     * Set insuranceId value
     * @param string $insuranceId
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setInsuranceId(?string $insuranceId = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceId) && !is_string($insuranceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceId, true), gettype($insuranceId)), __LINE__);
        }
        $this->insuranceId = $insuranceId;
        
        return $this;
    }
    /**
     * Get insuranceValidFrom value
     * @return string|null
     */
    public function getInsuranceValidFrom(): ?string
    {
        return $this->insuranceValidFrom;
    }
    /**
     * Set insuranceValidFrom value
     * @param string $insuranceValidFrom
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setInsuranceValidFrom(?string $insuranceValidFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceValidFrom) && !is_string($insuranceValidFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceValidFrom, true), gettype($insuranceValidFrom)), __LINE__);
        }
        $this->insuranceValidFrom = $insuranceValidFrom;
        
        return $this;
    }
    /**
     * Get insuranceValidUntil value
     * @return string|null
     */
    public function getInsuranceValidUntil(): ?string
    {
        return $this->insuranceValidUntil;
    }
    /**
     * Set insuranceValidUntil value
     * @param string $insuranceValidUntil
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setInsuranceValidUntil(?string $insuranceValidUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceValidUntil) && !is_string($insuranceValidUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceValidUntil, true), gettype($insuranceValidUntil)), __LINE__);
        }
        $this->insuranceValidUntil = $insuranceValidUntil;
        
        return $this;
    }
    /**
     * Get insuredAmount value
     * @return float|null
     */
    public function getInsuredAmount(): ?float
    {
        return $this->insuredAmount;
    }
    /**
     * Set insuredAmount value
     * @param float $insuredAmount
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setInsuredAmount(?float $insuredAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($insuredAmount) && !(is_float($insuredAmount) || is_numeric($insuredAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($insuredAmount, true), gettype($insuredAmount)), __LINE__);
        }
        $this->insuredAmount = $insuredAmount;
        
        return $this;
    }
    /**
     * Get insuredCancelAmount value
     * @return float|null
     */
    public function getInsuredCancelAmount(): ?float
    {
        return $this->insuredCancelAmount;
    }
    /**
     * Set insuredCancelAmount value
     * @param float $insuredCancelAmount
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setInsuredCancelAmount(?float $insuredCancelAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($insuredCancelAmount) && !(is_float($insuredCancelAmount) || is_numeric($insuredCancelAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($insuredCancelAmount, true), gettype($insuredCancelAmount)), __LINE__);
        }
        $this->insuredCancelAmount = $insuredCancelAmount;
        
        return $this;
    }
    /**
     * Get isSingleMargin value
     * @return bool|null
     */
    public function getIsSingleMargin(): ?bool
    {
        return $this->isSingleMargin;
    }
    /**
     * Set isSingleMargin value
     * @param bool $isSingleMargin
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setIsSingleMargin(?bool $isSingleMargin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSingleMargin) && !is_bool($isSingleMargin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSingleMargin, true), gettype($isSingleMargin)), __LINE__);
        }
        $this->isSingleMargin = $isSingleMargin;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
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
     * Get offlineBooking value
     * @return bool|null
     */
    public function getOfflineBooking(): ?bool
    {
        return $this->offlineBooking;
    }
    /**
     * Set offlineBooking value
     * @param bool $offlineBooking
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setOfflineBooking(?bool $offlineBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($offlineBooking) && !is_bool($offlineBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($offlineBooking, true), gettype($offlineBooking)), __LINE__);
        }
        $this->offlineBooking = $offlineBooking;
        
        return $this;
    }
    /**
     * Get offlineCancel value
     * @return bool|null
     */
    public function getOfflineCancel(): ?bool
    {
        return $this->offlineCancel;
    }
    /**
     * Set offlineCancel value
     * @param bool $offlineCancel
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setOfflineCancel(?bool $offlineCancel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($offlineCancel) && !is_bool($offlineCancel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($offlineCancel, true), gettype($offlineCancel)), __LINE__);
        }
        $this->offlineCancel = $offlineCancel;
        
        return $this;
    }
    /**
     * Get packageId value
     * @return string|null
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }
    /**
     * Set packageId value
     * @param string $packageId
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setPackageId(?string $packageId = null): self
    {
        // validation for constraint: string
        if (!is_null($packageId) && !is_string($packageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageId, true), gettype($packageId)), __LINE__);
        }
        $this->packageId = $packageId;
        
        return $this;
    }
    /**
     * Get policyNo value
     * @return string|null
     */
    public function getPolicyNo(): ?string
    {
        return $this->policyNo;
    }
    /**
     * Set policyNo value
     * @param string $policyNo
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setPolicyNo(?string $policyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($policyNo) && !is_string($policyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($policyNo, true), gettype($policyNo)), __LINE__);
        }
        $this->policyNo = $policyNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
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
     * Get stornoDate value
     * @return string|null
     */
    public function getStornoDate(): ?string
    {
        return $this->stornoDate;
    }
    /**
     * Set stornoDate value
     * @param string $stornoDate
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setStornoDate(?string $stornoDate = null): self
    {
        // validation for constraint: string
        if (!is_null($stornoDate) && !is_string($stornoDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stornoDate, true), gettype($stornoDate)), __LINE__);
        }
        $this->stornoDate = $stornoDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
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
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
        return $this;
    }
}
