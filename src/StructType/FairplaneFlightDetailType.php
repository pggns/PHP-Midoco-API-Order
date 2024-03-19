<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FairplaneFlightDetailType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FairplaneFlightDetailType extends AbstractStructBase
{
    /**
     * The identifier
     * @var string|null
     */
    protected ?string $identifier = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The airlineCode
     * @var string|null
     */
    protected ?string $airlineCode = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The compensation
     * @var float|null
     */
    protected ?float $compensation = null;
    /**
     * The delay
     * @var string|null
     */
    protected ?string $delay = null;
    /**
     * The link
     * @var string|null
     */
    protected ?string $link = null;
    /**
     * The scheduledDeparture
     * @var string|null
     */
    protected ?string $scheduledDeparture = null;
    /**
     * The scheduledArrival
     * @var string|null
     */
    protected ?string $scheduledArrival = null;
    /**
     * The actualDeparture
     * @var string|null
     */
    protected ?string $actualDeparture = null;
    /**
     * The actualArrival
     * @var string|null
     */
    protected ?string $actualArrival = null;
    /**
     * The departureAirport
     * @var string|null
     */
    protected ?string $departureAirport = null;
    /**
     * The arrivalAirport
     * @var string|null
     */
    protected ?string $arrivalAirport = null;
    /**
     * The status
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * The emailContent
     * @var string|null
     */
    protected ?string $emailContent = null;
    /**
     * The emailSubject
     * @var string|null
     */
    protected ?string $emailSubject = null;
    /**
     * The emailAddress
     * @var string|null
     */
    protected ?string $emailAddress = null;
    /**
     * Constructor method for FairplaneFlightDetailType
     * @uses FairplaneFlightDetailType::setIdentifier()
     * @uses FairplaneFlightDetailType::setStartTravel()
     * @uses FairplaneFlightDetailType::setAirlineCode()
     * @uses FairplaneFlightDetailType::setFlightNo()
     * @uses FairplaneFlightDetailType::setCompensation()
     * @uses FairplaneFlightDetailType::setDelay()
     * @uses FairplaneFlightDetailType::setLink()
     * @uses FairplaneFlightDetailType::setScheduledDeparture()
     * @uses FairplaneFlightDetailType::setScheduledArrival()
     * @uses FairplaneFlightDetailType::setActualDeparture()
     * @uses FairplaneFlightDetailType::setActualArrival()
     * @uses FairplaneFlightDetailType::setDepartureAirport()
     * @uses FairplaneFlightDetailType::setArrivalAirport()
     * @uses FairplaneFlightDetailType::setStatus()
     * @uses FairplaneFlightDetailType::setEmailContent()
     * @uses FairplaneFlightDetailType::setEmailSubject()
     * @uses FairplaneFlightDetailType::setEmailAddress()
     * @param string $identifier
     * @param string $startTravel
     * @param string $airlineCode
     * @param string $flightNo
     * @param float $compensation
     * @param string $delay
     * @param string $link
     * @param string $scheduledDeparture
     * @param string $scheduledArrival
     * @param string $actualDeparture
     * @param string $actualArrival
     * @param string $departureAirport
     * @param string $arrivalAirport
     * @param int $status
     * @param string $emailContent
     * @param string $emailSubject
     * @param string $emailAddress
     */
    public function __construct(?string $identifier = null, ?string $startTravel = null, ?string $airlineCode = null, ?string $flightNo = null, ?float $compensation = null, ?string $delay = null, ?string $link = null, ?string $scheduledDeparture = null, ?string $scheduledArrival = null, ?string $actualDeparture = null, ?string $actualArrival = null, ?string $departureAirport = null, ?string $arrivalAirport = null, ?int $status = null, ?string $emailContent = null, ?string $emailSubject = null, ?string $emailAddress = null)
    {
        $this
            ->setIdentifier($identifier)
            ->setStartTravel($startTravel)
            ->setAirlineCode($airlineCode)
            ->setFlightNo($flightNo)
            ->setCompensation($compensation)
            ->setDelay($delay)
            ->setLink($link)
            ->setScheduledDeparture($scheduledDeparture)
            ->setScheduledArrival($scheduledArrival)
            ->setActualDeparture($actualDeparture)
            ->setActualArrival($actualArrival)
            ->setDepartureAirport($departureAirport)
            ->setArrivalAirport($arrivalAirport)
            ->setStatus($status)
            ->setEmailContent($emailContent)
            ->setEmailSubject($emailSubject)
            ->setEmailAddress($emailAddress);
    }
    /**
     * Get identifier value
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }
    /**
     * Set identifier value
     * @param string $identifier
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setIdentifier(?string $identifier = null): self
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifier, true), gettype($identifier)), __LINE__);
        }
        $this->identifier = $identifier;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
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
     * Get airlineCode value
     * @return string|null
     */
    public function getAirlineCode(): ?string
    {
        return $this->airlineCode;
    }
    /**
     * Set airlineCode value
     * @param string $airlineCode
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setAirlineCode(?string $airlineCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineCode, true), gettype($airlineCode)), __LINE__);
        }
        $this->airlineCode = $airlineCode;
        
        return $this;
    }
    /**
     * Get flightNo value
     * @return string|null
     */
    public function getFlightNo(): ?string
    {
        return $this->flightNo;
    }
    /**
     * Set flightNo value
     * @param string $flightNo
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setFlightNo(?string $flightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNo) && !is_string($flightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNo, true), gettype($flightNo)), __LINE__);
        }
        $this->flightNo = $flightNo;
        
        return $this;
    }
    /**
     * Get compensation value
     * @return float|null
     */
    public function getCompensation(): ?float
    {
        return $this->compensation;
    }
    /**
     * Set compensation value
     * @param float $compensation
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setCompensation(?float $compensation = null): self
    {
        // validation for constraint: float
        if (!is_null($compensation) && !(is_float($compensation) || is_numeric($compensation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($compensation, true), gettype($compensation)), __LINE__);
        }
        $this->compensation = $compensation;
        
        return $this;
    }
    /**
     * Get delay value
     * @return string|null
     */
    public function getDelay(): ?string
    {
        return $this->delay;
    }
    /**
     * Set delay value
     * @param string $delay
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setDelay(?string $delay = null): self
    {
        // validation for constraint: string
        if (!is_null($delay) && !is_string($delay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delay, true), gettype($delay)), __LINE__);
        }
        $this->delay = $delay;
        
        return $this;
    }
    /**
     * Get link value
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }
    /**
     * Set link value
     * @param string $link
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setLink(?string $link = null): self
    {
        // validation for constraint: string
        if (!is_null($link) && !is_string($link)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link, true), gettype($link)), __LINE__);
        }
        $this->link = $link;
        
        return $this;
    }
    /**
     * Get scheduledDeparture value
     * @return string|null
     */
    public function getScheduledDeparture(): ?string
    {
        return $this->scheduledDeparture;
    }
    /**
     * Set scheduledDeparture value
     * @param string $scheduledDeparture
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setScheduledDeparture(?string $scheduledDeparture = null): self
    {
        // validation for constraint: string
        if (!is_null($scheduledDeparture) && !is_string($scheduledDeparture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduledDeparture, true), gettype($scheduledDeparture)), __LINE__);
        }
        $this->scheduledDeparture = $scheduledDeparture;
        
        return $this;
    }
    /**
     * Get scheduledArrival value
     * @return string|null
     */
    public function getScheduledArrival(): ?string
    {
        return $this->scheduledArrival;
    }
    /**
     * Set scheduledArrival value
     * @param string $scheduledArrival
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setScheduledArrival(?string $scheduledArrival = null): self
    {
        // validation for constraint: string
        if (!is_null($scheduledArrival) && !is_string($scheduledArrival)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduledArrival, true), gettype($scheduledArrival)), __LINE__);
        }
        $this->scheduledArrival = $scheduledArrival;
        
        return $this;
    }
    /**
     * Get actualDeparture value
     * @return string|null
     */
    public function getActualDeparture(): ?string
    {
        return $this->actualDeparture;
    }
    /**
     * Set actualDeparture value
     * @param string $actualDeparture
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setActualDeparture(?string $actualDeparture = null): self
    {
        // validation for constraint: string
        if (!is_null($actualDeparture) && !is_string($actualDeparture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualDeparture, true), gettype($actualDeparture)), __LINE__);
        }
        $this->actualDeparture = $actualDeparture;
        
        return $this;
    }
    /**
     * Get actualArrival value
     * @return string|null
     */
    public function getActualArrival(): ?string
    {
        return $this->actualArrival;
    }
    /**
     * Set actualArrival value
     * @param string $actualArrival
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setActualArrival(?string $actualArrival = null): self
    {
        // validation for constraint: string
        if (!is_null($actualArrival) && !is_string($actualArrival)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualArrival, true), gettype($actualArrival)), __LINE__);
        }
        $this->actualArrival = $actualArrival;
        
        return $this;
    }
    /**
     * Get departureAirport value
     * @return string|null
     */
    public function getDepartureAirport(): ?string
    {
        return $this->departureAirport;
    }
    /**
     * Set departureAirport value
     * @param string $departureAirport
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setDepartureAirport(?string $departureAirport = null): self
    {
        // validation for constraint: string
        if (!is_null($departureAirport) && !is_string($departureAirport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureAirport, true), gettype($departureAirport)), __LINE__);
        }
        $this->departureAirport = $departureAirport;
        
        return $this;
    }
    /**
     * Get arrivalAirport value
     * @return string|null
     */
    public function getArrivalAirport(): ?string
    {
        return $this->arrivalAirport;
    }
    /**
     * Set arrivalAirport value
     * @param string $arrivalAirport
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setArrivalAirport(?string $arrivalAirport = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalAirport) && !is_string($arrivalAirport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalAirport, true), gettype($arrivalAirport)), __LINE__);
        }
        $this->arrivalAirport = $arrivalAirport;
        
        return $this;
    }
    /**
     * Get status value
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setStatus(?int $status = null): self
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get emailContent value
     * @return string|null
     */
    public function getEmailContent(): ?string
    {
        return $this->emailContent;
    }
    /**
     * Set emailContent value
     * @param string $emailContent
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setEmailContent(?string $emailContent = null): self
    {
        // validation for constraint: string
        if (!is_null($emailContent) && !is_string($emailContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailContent, true), gettype($emailContent)), __LINE__);
        }
        $this->emailContent = $emailContent;
        
        return $this;
    }
    /**
     * Get emailSubject value
     * @return string|null
     */
    public function getEmailSubject(): ?string
    {
        return $this->emailSubject;
    }
    /**
     * Set emailSubject value
     * @param string $emailSubject
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setEmailSubject(?string $emailSubject = null): self
    {
        // validation for constraint: string
        if (!is_null($emailSubject) && !is_string($emailSubject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailSubject, true), gettype($emailSubject)), __LINE__);
        }
        $this->emailSubject = $emailSubject;
        
        return $this;
    }
    /**
     * Get emailAddress value
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }
    /**
     * Set emailAddress value
     * @param string $emailAddress
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneFlightDetailType
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        $this->emailAddress = $emailAddress;
        
        return $this;
    }
}
