<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFlightTimeChange StructType
 * @subpackage Structs
 */
class MidocoFlightTimeChange extends AbstractStructBase
{
    /**
     * The oldDepartureCode
     * @var string|null
     */
    protected ?string $oldDepartureCode = null;
    /**
     * The newDepartureCode
     * @var string|null
     */
    protected ?string $newDepartureCode = null;
    /**
     * The distanceToNewDeparture
     * @var int|null
     */
    protected ?int $distanceToNewDeparture = null;
    /**
     * The oldDestinationCode
     * @var string|null
     */
    protected ?string $oldDestinationCode = null;
    /**
     * The newDestinationCode
     * @var string|null
     */
    protected ?string $newDestinationCode = null;
    /**
     * The oldDepartureDate
     * @var string|null
     */
    protected ?string $oldDepartureDate = null;
    /**
     * The newDepartureDate
     * @var string|null
     */
    protected ?string $newDepartureDate = null;
    /**
     * The departureTimeDifference
     * @var int|null
     */
    protected ?int $departureTimeDifference = null;
    /**
     * The oldArrivalDate
     * @var string|null
     */
    protected ?string $oldArrivalDate = null;
    /**
     * The newArrivalDate
     * @var string|null
     */
    protected ?string $newArrivalDate = null;
    /**
     * The arrivalTimeDifference
     * @var int|null
     */
    protected ?int $arrivalTimeDifference = null;
    /**
     * The oldCarrier
     * @var string|null
     */
    protected ?string $oldCarrier = null;
    /**
     * The newCarrier
     * @var string|null
     */
    protected ?string $newCarrier = null;
    /**
     * The oldFlightNo
     * @var string|null
     */
    protected ?string $oldFlightNo = null;
    /**
     * The newFlightNo
     * @var string|null
     */
    protected ?string $newFlightNo = null;
    /**
     * The mailId
     * @var string|null
     */
    protected ?string $mailId = null;
    /**
     * The newSubcharter
     * @var string|null
     */
    protected ?string $newSubcharter = null;
    /**
     * The oldSubcharter
     * @var string|null
     */
    protected ?string $oldSubcharter = null;
    /**
     * Constructor method for MidocoFlightTimeChange
     * @uses MidocoFlightTimeChange::setOldDepartureCode()
     * @uses MidocoFlightTimeChange::setNewDepartureCode()
     * @uses MidocoFlightTimeChange::setDistanceToNewDeparture()
     * @uses MidocoFlightTimeChange::setOldDestinationCode()
     * @uses MidocoFlightTimeChange::setNewDestinationCode()
     * @uses MidocoFlightTimeChange::setOldDepartureDate()
     * @uses MidocoFlightTimeChange::setNewDepartureDate()
     * @uses MidocoFlightTimeChange::setDepartureTimeDifference()
     * @uses MidocoFlightTimeChange::setOldArrivalDate()
     * @uses MidocoFlightTimeChange::setNewArrivalDate()
     * @uses MidocoFlightTimeChange::setArrivalTimeDifference()
     * @uses MidocoFlightTimeChange::setOldCarrier()
     * @uses MidocoFlightTimeChange::setNewCarrier()
     * @uses MidocoFlightTimeChange::setOldFlightNo()
     * @uses MidocoFlightTimeChange::setNewFlightNo()
     * @uses MidocoFlightTimeChange::setMailId()
     * @uses MidocoFlightTimeChange::setNewSubcharter()
     * @uses MidocoFlightTimeChange::setOldSubcharter()
     * @param string $oldDepartureCode
     * @param string $newDepartureCode
     * @param int $distanceToNewDeparture
     * @param string $oldDestinationCode
     * @param string $newDestinationCode
     * @param string $oldDepartureDate
     * @param string $newDepartureDate
     * @param int $departureTimeDifference
     * @param string $oldArrivalDate
     * @param string $newArrivalDate
     * @param int $arrivalTimeDifference
     * @param string $oldCarrier
     * @param string $newCarrier
     * @param string $oldFlightNo
     * @param string $newFlightNo
     * @param string $mailId
     * @param string $newSubcharter
     * @param string $oldSubcharter
     */
    public function __construct(?string $oldDepartureCode = null, ?string $newDepartureCode = null, ?int $distanceToNewDeparture = null, ?string $oldDestinationCode = null, ?string $newDestinationCode = null, ?string $oldDepartureDate = null, ?string $newDepartureDate = null, ?int $departureTimeDifference = null, ?string $oldArrivalDate = null, ?string $newArrivalDate = null, ?int $arrivalTimeDifference = null, ?string $oldCarrier = null, ?string $newCarrier = null, ?string $oldFlightNo = null, ?string $newFlightNo = null, ?string $mailId = null, ?string $newSubcharter = null, ?string $oldSubcharter = null)
    {
        $this
            ->setOldDepartureCode($oldDepartureCode)
            ->setNewDepartureCode($newDepartureCode)
            ->setDistanceToNewDeparture($distanceToNewDeparture)
            ->setOldDestinationCode($oldDestinationCode)
            ->setNewDestinationCode($newDestinationCode)
            ->setOldDepartureDate($oldDepartureDate)
            ->setNewDepartureDate($newDepartureDate)
            ->setDepartureTimeDifference($departureTimeDifference)
            ->setOldArrivalDate($oldArrivalDate)
            ->setNewArrivalDate($newArrivalDate)
            ->setArrivalTimeDifference($arrivalTimeDifference)
            ->setOldCarrier($oldCarrier)
            ->setNewCarrier($newCarrier)
            ->setOldFlightNo($oldFlightNo)
            ->setNewFlightNo($newFlightNo)
            ->setMailId($mailId)
            ->setNewSubcharter($newSubcharter)
            ->setOldSubcharter($oldSubcharter);
    }
    /**
     * Get oldDepartureCode value
     * @return string|null
     */
    public function getOldDepartureCode(): ?string
    {
        return $this->oldDepartureCode;
    }
    /**
     * Set oldDepartureCode value
     * @param string $oldDepartureCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setOldDepartureCode(?string $oldDepartureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($oldDepartureCode) && !is_string($oldDepartureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldDepartureCode, true), gettype($oldDepartureCode)), __LINE__);
        }
        $this->oldDepartureCode = $oldDepartureCode;
        
        return $this;
    }
    /**
     * Get newDepartureCode value
     * @return string|null
     */
    public function getNewDepartureCode(): ?string
    {
        return $this->newDepartureCode;
    }
    /**
     * Set newDepartureCode value
     * @param string $newDepartureCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setNewDepartureCode(?string $newDepartureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($newDepartureCode) && !is_string($newDepartureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newDepartureCode, true), gettype($newDepartureCode)), __LINE__);
        }
        $this->newDepartureCode = $newDepartureCode;
        
        return $this;
    }
    /**
     * Get distanceToNewDeparture value
     * @return int|null
     */
    public function getDistanceToNewDeparture(): ?int
    {
        return $this->distanceToNewDeparture;
    }
    /**
     * Set distanceToNewDeparture value
     * @param int $distanceToNewDeparture
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setDistanceToNewDeparture(?int $distanceToNewDeparture = null): self
    {
        // validation for constraint: int
        if (!is_null($distanceToNewDeparture) && !(is_int($distanceToNewDeparture) || ctype_digit($distanceToNewDeparture))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($distanceToNewDeparture, true), gettype($distanceToNewDeparture)), __LINE__);
        }
        $this->distanceToNewDeparture = $distanceToNewDeparture;
        
        return $this;
    }
    /**
     * Get oldDestinationCode value
     * @return string|null
     */
    public function getOldDestinationCode(): ?string
    {
        return $this->oldDestinationCode;
    }
    /**
     * Set oldDestinationCode value
     * @param string $oldDestinationCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setOldDestinationCode(?string $oldDestinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($oldDestinationCode) && !is_string($oldDestinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldDestinationCode, true), gettype($oldDestinationCode)), __LINE__);
        }
        $this->oldDestinationCode = $oldDestinationCode;
        
        return $this;
    }
    /**
     * Get newDestinationCode value
     * @return string|null
     */
    public function getNewDestinationCode(): ?string
    {
        return $this->newDestinationCode;
    }
    /**
     * Set newDestinationCode value
     * @param string $newDestinationCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setNewDestinationCode(?string $newDestinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($newDestinationCode) && !is_string($newDestinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newDestinationCode, true), gettype($newDestinationCode)), __LINE__);
        }
        $this->newDestinationCode = $newDestinationCode;
        
        return $this;
    }
    /**
     * Get oldDepartureDate value
     * @return string|null
     */
    public function getOldDepartureDate(): ?string
    {
        return $this->oldDepartureDate;
    }
    /**
     * Set oldDepartureDate value
     * @param string $oldDepartureDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setOldDepartureDate(?string $oldDepartureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($oldDepartureDate) && !is_string($oldDepartureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldDepartureDate, true), gettype($oldDepartureDate)), __LINE__);
        }
        $this->oldDepartureDate = $oldDepartureDate;
        
        return $this;
    }
    /**
     * Get newDepartureDate value
     * @return string|null
     */
    public function getNewDepartureDate(): ?string
    {
        return $this->newDepartureDate;
    }
    /**
     * Set newDepartureDate value
     * @param string $newDepartureDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setNewDepartureDate(?string $newDepartureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($newDepartureDate) && !is_string($newDepartureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newDepartureDate, true), gettype($newDepartureDate)), __LINE__);
        }
        $this->newDepartureDate = $newDepartureDate;
        
        return $this;
    }
    /**
     * Get departureTimeDifference value
     * @return int|null
     */
    public function getDepartureTimeDifference(): ?int
    {
        return $this->departureTimeDifference;
    }
    /**
     * Set departureTimeDifference value
     * @param int $departureTimeDifference
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setDepartureTimeDifference(?int $departureTimeDifference = null): self
    {
        // validation for constraint: int
        if (!is_null($departureTimeDifference) && !(is_int($departureTimeDifference) || ctype_digit($departureTimeDifference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($departureTimeDifference, true), gettype($departureTimeDifference)), __LINE__);
        }
        $this->departureTimeDifference = $departureTimeDifference;
        
        return $this;
    }
    /**
     * Get oldArrivalDate value
     * @return string|null
     */
    public function getOldArrivalDate(): ?string
    {
        return $this->oldArrivalDate;
    }
    /**
     * Set oldArrivalDate value
     * @param string $oldArrivalDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setOldArrivalDate(?string $oldArrivalDate = null): self
    {
        // validation for constraint: string
        if (!is_null($oldArrivalDate) && !is_string($oldArrivalDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldArrivalDate, true), gettype($oldArrivalDate)), __LINE__);
        }
        $this->oldArrivalDate = $oldArrivalDate;
        
        return $this;
    }
    /**
     * Get newArrivalDate value
     * @return string|null
     */
    public function getNewArrivalDate(): ?string
    {
        return $this->newArrivalDate;
    }
    /**
     * Set newArrivalDate value
     * @param string $newArrivalDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setNewArrivalDate(?string $newArrivalDate = null): self
    {
        // validation for constraint: string
        if (!is_null($newArrivalDate) && !is_string($newArrivalDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newArrivalDate, true), gettype($newArrivalDate)), __LINE__);
        }
        $this->newArrivalDate = $newArrivalDate;
        
        return $this;
    }
    /**
     * Get arrivalTimeDifference value
     * @return int|null
     */
    public function getArrivalTimeDifference(): ?int
    {
        return $this->arrivalTimeDifference;
    }
    /**
     * Set arrivalTimeDifference value
     * @param int $arrivalTimeDifference
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setArrivalTimeDifference(?int $arrivalTimeDifference = null): self
    {
        // validation for constraint: int
        if (!is_null($arrivalTimeDifference) && !(is_int($arrivalTimeDifference) || ctype_digit($arrivalTimeDifference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($arrivalTimeDifference, true), gettype($arrivalTimeDifference)), __LINE__);
        }
        $this->arrivalTimeDifference = $arrivalTimeDifference;
        
        return $this;
    }
    /**
     * Get oldCarrier value
     * @return string|null
     */
    public function getOldCarrier(): ?string
    {
        return $this->oldCarrier;
    }
    /**
     * Set oldCarrier value
     * @param string $oldCarrier
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setOldCarrier(?string $oldCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($oldCarrier) && !is_string($oldCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldCarrier, true), gettype($oldCarrier)), __LINE__);
        }
        $this->oldCarrier = $oldCarrier;
        
        return $this;
    }
    /**
     * Get newCarrier value
     * @return string|null
     */
    public function getNewCarrier(): ?string
    {
        return $this->newCarrier;
    }
    /**
     * Set newCarrier value
     * @param string $newCarrier
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setNewCarrier(?string $newCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($newCarrier) && !is_string($newCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newCarrier, true), gettype($newCarrier)), __LINE__);
        }
        $this->newCarrier = $newCarrier;
        
        return $this;
    }
    /**
     * Get oldFlightNo value
     * @return string|null
     */
    public function getOldFlightNo(): ?string
    {
        return $this->oldFlightNo;
    }
    /**
     * Set oldFlightNo value
     * @param string $oldFlightNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setOldFlightNo(?string $oldFlightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($oldFlightNo) && !is_string($oldFlightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldFlightNo, true), gettype($oldFlightNo)), __LINE__);
        }
        $this->oldFlightNo = $oldFlightNo;
        
        return $this;
    }
    /**
     * Get newFlightNo value
     * @return string|null
     */
    public function getNewFlightNo(): ?string
    {
        return $this->newFlightNo;
    }
    /**
     * Set newFlightNo value
     * @param string $newFlightNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setNewFlightNo(?string $newFlightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($newFlightNo) && !is_string($newFlightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newFlightNo, true), gettype($newFlightNo)), __LINE__);
        }
        $this->newFlightNo = $newFlightNo;
        
        return $this;
    }
    /**
     * Get mailId value
     * @return string|null
     */
    public function getMailId(): ?string
    {
        return $this->mailId;
    }
    /**
     * Set mailId value
     * @param string $mailId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setMailId(?string $mailId = null): self
    {
        // validation for constraint: string
        if (!is_null($mailId) && !is_string($mailId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailId, true), gettype($mailId)), __LINE__);
        }
        $this->mailId = $mailId;
        
        return $this;
    }
    /**
     * Get newSubcharter value
     * @return string|null
     */
    public function getNewSubcharter(): ?string
    {
        return $this->newSubcharter;
    }
    /**
     * Set newSubcharter value
     * @param string $newSubcharter
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setNewSubcharter(?string $newSubcharter = null): self
    {
        // validation for constraint: string
        if (!is_null($newSubcharter) && !is_string($newSubcharter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newSubcharter, true), gettype($newSubcharter)), __LINE__);
        }
        $this->newSubcharter = $newSubcharter;
        
        return $this;
    }
    /**
     * Get oldSubcharter value
     * @return string|null
     */
    public function getOldSubcharter(): ?string
    {
        return $this->oldSubcharter;
    }
    /**
     * Set oldSubcharter value
     * @param string $oldSubcharter
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange
     */
    public function setOldSubcharter(?string $oldSubcharter = null): self
    {
        // validation for constraint: string
        if (!is_null($oldSubcharter) && !is_string($oldSubcharter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldSubcharter, true), gettype($oldSubcharter)), __LINE__);
        }
        $this->oldSubcharter = $oldSubcharter;
        
        return $this;
    }
}
