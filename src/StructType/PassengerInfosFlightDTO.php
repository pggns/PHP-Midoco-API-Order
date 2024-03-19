<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerInfosFlightDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PassengerInfosFlightDTO extends AbstractStructBase
{
    /**
     * The baggageAllowance
     * @var string|null
     */
    protected ?string $baggageAllowance = null;
    /**
     * The frequentFlyerAirline
     * @var string|null
     */
    protected ?string $frequentFlyerAirline = null;
    /**
     * The frequentFlyerNo
     * @var string|null
     */
    protected ?string $frequentFlyerNo = null;
    /**
     * The frequentFlyerType
     * @var string|null
     */
    protected ?string $frequentFlyerType = null;
    /**
     * The identityCardNo
     * @var string|null
     */
    protected ?string $identityCardNo = null;
    /**
     * The identityCardRequired
     * @var bool|null
     */
    protected ?bool $identityCardRequired = null;
    /**
     * The identityCardType
     * @var string|null
     */
    protected ?string $identityCardType = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The passengerKey
     * @var string|null
     */
    protected ?string $passengerKey = null;
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * The preventPrinting
     * @var bool|null
     */
    protected ?bool $preventPrinting = null;
    /**
     * The ticketMail
     * @var bool|null
     */
    protected ?bool $ticketMail = null;
    /**
     * Constructor method for PassengerInfosFlightDTO
     * @uses PassengerInfosFlightDTO::setBaggageAllowance()
     * @uses PassengerInfosFlightDTO::setFrequentFlyerAirline()
     * @uses PassengerInfosFlightDTO::setFrequentFlyerNo()
     * @uses PassengerInfosFlightDTO::setFrequentFlyerType()
     * @uses PassengerInfosFlightDTO::setIdentityCardNo()
     * @uses PassengerInfosFlightDTO::setIdentityCardRequired()
     * @uses PassengerInfosFlightDTO::setIdentityCardType()
     * @uses PassengerInfosFlightDTO::setItemId()
     * @uses PassengerInfosFlightDTO::setPassengerKey()
     * @uses PassengerInfosFlightDTO::setPositionNo()
     * @uses PassengerInfosFlightDTO::setPreventPrinting()
     * @uses PassengerInfosFlightDTO::setTicketMail()
     * @param string $baggageAllowance
     * @param string $frequentFlyerAirline
     * @param string $frequentFlyerNo
     * @param string $frequentFlyerType
     * @param string $identityCardNo
     * @param bool $identityCardRequired
     * @param string $identityCardType
     * @param int $itemId
     * @param string $passengerKey
     * @param int $positionNo
     * @param bool $preventPrinting
     * @param bool $ticketMail
     */
    public function __construct(?string $baggageAllowance = null, ?string $frequentFlyerAirline = null, ?string $frequentFlyerNo = null, ?string $frequentFlyerType = null, ?string $identityCardNo = null, ?bool $identityCardRequired = null, ?string $identityCardType = null, ?int $itemId = null, ?string $passengerKey = null, ?int $positionNo = null, ?bool $preventPrinting = null, ?bool $ticketMail = null)
    {
        $this
            ->setBaggageAllowance($baggageAllowance)
            ->setFrequentFlyerAirline($frequentFlyerAirline)
            ->setFrequentFlyerNo($frequentFlyerNo)
            ->setFrequentFlyerType($frequentFlyerType)
            ->setIdentityCardNo($identityCardNo)
            ->setIdentityCardRequired($identityCardRequired)
            ->setIdentityCardType($identityCardType)
            ->setItemId($itemId)
            ->setPassengerKey($passengerKey)
            ->setPositionNo($positionNo)
            ->setPreventPrinting($preventPrinting)
            ->setTicketMail($ticketMail);
    }
    /**
     * Get baggageAllowance value
     * @return string|null
     */
    public function getBaggageAllowance(): ?string
    {
        return $this->baggageAllowance;
    }
    /**
     * Set baggageAllowance value
     * @param string $baggageAllowance
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
     */
    public function setBaggageAllowance(?string $baggageAllowance = null): self
    {
        // validation for constraint: string
        if (!is_null($baggageAllowance) && !is_string($baggageAllowance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baggageAllowance, true), gettype($baggageAllowance)), __LINE__);
        }
        $this->baggageAllowance = $baggageAllowance;
        
        return $this;
    }
    /**
     * Get frequentFlyerAirline value
     * @return string|null
     */
    public function getFrequentFlyerAirline(): ?string
    {
        return $this->frequentFlyerAirline;
    }
    /**
     * Set frequentFlyerAirline value
     * @param string $frequentFlyerAirline
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
     */
    public function setFrequentFlyerAirline(?string $frequentFlyerAirline = null): self
    {
        // validation for constraint: string
        if (!is_null($frequentFlyerAirline) && !is_string($frequentFlyerAirline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequentFlyerAirline, true), gettype($frequentFlyerAirline)), __LINE__);
        }
        $this->frequentFlyerAirline = $frequentFlyerAirline;
        
        return $this;
    }
    /**
     * Get frequentFlyerNo value
     * @return string|null
     */
    public function getFrequentFlyerNo(): ?string
    {
        return $this->frequentFlyerNo;
    }
    /**
     * Set frequentFlyerNo value
     * @param string $frequentFlyerNo
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
     */
    public function setFrequentFlyerNo(?string $frequentFlyerNo = null): self
    {
        // validation for constraint: string
        if (!is_null($frequentFlyerNo) && !is_string($frequentFlyerNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequentFlyerNo, true), gettype($frequentFlyerNo)), __LINE__);
        }
        $this->frequentFlyerNo = $frequentFlyerNo;
        
        return $this;
    }
    /**
     * Get frequentFlyerType value
     * @return string|null
     */
    public function getFrequentFlyerType(): ?string
    {
        return $this->frequentFlyerType;
    }
    /**
     * Set frequentFlyerType value
     * @param string $frequentFlyerType
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
     */
    public function setFrequentFlyerType(?string $frequentFlyerType = null): self
    {
        // validation for constraint: string
        if (!is_null($frequentFlyerType) && !is_string($frequentFlyerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequentFlyerType, true), gettype($frequentFlyerType)), __LINE__);
        }
        $this->frequentFlyerType = $frequentFlyerType;
        
        return $this;
    }
    /**
     * Get identityCardNo value
     * @return string|null
     */
    public function getIdentityCardNo(): ?string
    {
        return $this->identityCardNo;
    }
    /**
     * Set identityCardNo value
     * @param string $identityCardNo
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
     */
    public function setIdentityCardNo(?string $identityCardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($identityCardNo) && !is_string($identityCardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityCardNo, true), gettype($identityCardNo)), __LINE__);
        }
        $this->identityCardNo = $identityCardNo;
        
        return $this;
    }
    /**
     * Get identityCardRequired value
     * @return bool|null
     */
    public function getIdentityCardRequired(): ?bool
    {
        return $this->identityCardRequired;
    }
    /**
     * Set identityCardRequired value
     * @param bool $identityCardRequired
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
     */
    public function setIdentityCardRequired(?bool $identityCardRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($identityCardRequired) && !is_bool($identityCardRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($identityCardRequired, true), gettype($identityCardRequired)), __LINE__);
        }
        $this->identityCardRequired = $identityCardRequired;
        
        return $this;
    }
    /**
     * Get identityCardType value
     * @return string|null
     */
    public function getIdentityCardType(): ?string
    {
        return $this->identityCardType;
    }
    /**
     * Set identityCardType value
     * @param string $identityCardType
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
     */
    public function setIdentityCardType(?string $identityCardType = null): self
    {
        // validation for constraint: string
        if (!is_null($identityCardType) && !is_string($identityCardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityCardType, true), gettype($identityCardType)), __LINE__);
        }
        $this->identityCardType = $identityCardType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
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
     * Get passengerKey value
     * @return string|null
     */
    public function getPassengerKey(): ?string
    {
        return $this->passengerKey;
    }
    /**
     * Set passengerKey value
     * @param string $passengerKey
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
     */
    public function setPassengerKey(?string $passengerKey = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerKey) && !is_string($passengerKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerKey, true), gettype($passengerKey)), __LINE__);
        }
        $this->passengerKey = $passengerKey;
        
        return $this;
    }
    /**
     * Get positionNo value
     * @return int|null
     */
    public function getPositionNo(): ?int
    {
        return $this->positionNo;
    }
    /**
     * Set positionNo value
     * @param int $positionNo
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
     */
    public function setPositionNo(?int $positionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($positionNo) && !(is_int($positionNo) || ctype_digit($positionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionNo, true), gettype($positionNo)), __LINE__);
        }
        $this->positionNo = $positionNo;
        
        return $this;
    }
    /**
     * Get preventPrinting value
     * @return bool|null
     */
    public function getPreventPrinting(): ?bool
    {
        return $this->preventPrinting;
    }
    /**
     * Set preventPrinting value
     * @param bool $preventPrinting
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
     */
    public function setPreventPrinting(?bool $preventPrinting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventPrinting) && !is_bool($preventPrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventPrinting, true), gettype($preventPrinting)), __LINE__);
        }
        $this->preventPrinting = $preventPrinting;
        
        return $this;
    }
    /**
     * Get ticketMail value
     * @return bool|null
     */
    public function getTicketMail(): ?bool
    {
        return $this->ticketMail;
    }
    /**
     * Set ticketMail value
     * @param bool $ticketMail
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
     */
    public function setTicketMail(?bool $ticketMail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ticketMail) && !is_bool($ticketMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ticketMail, true), gettype($ticketMail)), __LINE__);
        }
        $this->ticketMail = $ticketMail;
        
        return $this;
    }
}
