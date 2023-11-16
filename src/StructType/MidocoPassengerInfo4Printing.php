<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPassengerInfo4Printing StructType
 * @subpackage Structs
 */
class MidocoPassengerInfo4Printing extends AbstractStructBase
{
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The age
     * @var string|null
     */
    protected ?string $age = null;
    /**
     * The singlePrice
     * @var float|null
     */
    protected ?float $singlePrice = null;
    /**
     * The ticketNumber
     * @var string|null
     */
    protected ?string $ticketNumber = null;
    /**
     * The ticketType
     * @var string|null
     */
    protected ?string $ticketType = null;
    /**
     * The ticketMedia
     * @var string|null
     */
    protected ?string $ticketMedia = null;
    /**
     * The tax
     * @var float|null
     */
    protected ?float $tax = null;
    /**
     * The farePrice
     * @var float|null
     */
    protected ?float $farePrice = null;
    /**
     * The vatPercent
     * @var string|null
     */
    protected ?string $vatPercent = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The feeAmount
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The originalFarePrice
     * @var float|null
     */
    protected ?float $originalFarePrice = null;
    /**
     * The birthDate
     * @var string|null
     */
    protected ?string $birthDate = null;
    /**
     * The ignoreInPartialInvoice
     * @var bool|null
     */
    protected ?bool $ignoreInPartialInvoice = null;
    /**
     * The nationality
     * @var string|null
     */
    protected ?string $nationality = null;
    /**
     * The midocoCustomerId
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * The handicap
     * @var string|null
     */
    protected ?string $handicap = null;
    /**
     * The MidocoPassengerInfosFlight
     * Meta information extracted from the WSDL
     * - ref: MidocoPassengerInfosFlight
     * @var \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO $MidocoPassengerInfosFlight = null;
    /**
     * The MidocoPassengerInfosRail
     * Meta information extracted from the WSDL
     * - ref: MidocoPassengerInfosRail
     * @var \Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO $MidocoPassengerInfosRail = null;
    /**
     * The MidocoFlightSegmentDetails4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFlightSegmentDetails4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing[]
     */
    protected array $MidocoFlightSegmentDetails4Printing = [];
    /**
     * Constructor method for MidocoPassengerInfo4Printing
     * @uses MidocoPassengerInfo4Printing::setPositionNo()
     * @uses MidocoPassengerInfo4Printing::setSalutation()
     * @uses MidocoPassengerInfo4Printing::setTitle()
     * @uses MidocoPassengerInfo4Printing::setForename()
     * @uses MidocoPassengerInfo4Printing::setMiddleName()
     * @uses MidocoPassengerInfo4Printing::setName()
     * @uses MidocoPassengerInfo4Printing::setAge()
     * @uses MidocoPassengerInfo4Printing::setSinglePrice()
     * @uses MidocoPassengerInfo4Printing::setTicketNumber()
     * @uses MidocoPassengerInfo4Printing::setTicketType()
     * @uses MidocoPassengerInfo4Printing::setTicketMedia()
     * @uses MidocoPassengerInfo4Printing::setTax()
     * @uses MidocoPassengerInfo4Printing::setFarePrice()
     * @uses MidocoPassengerInfo4Printing::setVatPercent()
     * @uses MidocoPassengerInfo4Printing::setVatAmount()
     * @uses MidocoPassengerInfo4Printing::setFeeAmount()
     * @uses MidocoPassengerInfo4Printing::setOriginalFarePrice()
     * @uses MidocoPassengerInfo4Printing::setBirthDate()
     * @uses MidocoPassengerInfo4Printing::setIgnoreInPartialInvoice()
     * @uses MidocoPassengerInfo4Printing::setNationality()
     * @uses MidocoPassengerInfo4Printing::setMidocoCustomerId()
     * @uses MidocoPassengerInfo4Printing::setHandicap()
     * @uses MidocoPassengerInfo4Printing::setMidocoPassengerInfosFlight()
     * @uses MidocoPassengerInfo4Printing::setMidocoPassengerInfosRail()
     * @uses MidocoPassengerInfo4Printing::setMidocoFlightSegmentDetails4Printing()
     * @param int $positionNo
     * @param string $salutation
     * @param string $title
     * @param string $forename
     * @param string $middleName
     * @param string $name
     * @param string $age
     * @param float $singlePrice
     * @param string $ticketNumber
     * @param string $ticketType
     * @param string $ticketMedia
     * @param float $tax
     * @param float $farePrice
     * @param string $vatPercent
     * @param float $vatAmount
     * @param float $feeAmount
     * @param float $originalFarePrice
     * @param string $birthDate
     * @param bool $ignoreInPartialInvoice
     * @param string $nationality
     * @param int $midocoCustomerId
     * @param string $handicap
     * @param \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight
     * @param \Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing[] $midocoFlightSegmentDetails4Printing
     */
    public function __construct(?int $positionNo = null, ?string $salutation = null, ?string $title = null, ?string $forename = null, ?string $middleName = null, ?string $name = null, ?string $age = null, ?float $singlePrice = null, ?string $ticketNumber = null, ?string $ticketType = null, ?string $ticketMedia = null, ?float $tax = null, ?float $farePrice = null, ?string $vatPercent = null, ?float $vatAmount = null, ?float $feeAmount = null, ?float $originalFarePrice = null, ?string $birthDate = null, ?bool $ignoreInPartialInvoice = null, ?string $nationality = null, ?int $midocoCustomerId = null, ?string $handicap = null, ?\Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight = null, ?\Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail = null, array $midocoFlightSegmentDetails4Printing = [])
    {
        $this
            ->setPositionNo($positionNo)
            ->setSalutation($salutation)
            ->setTitle($title)
            ->setForename($forename)
            ->setMiddleName($middleName)
            ->setName($name)
            ->setAge($age)
            ->setSinglePrice($singlePrice)
            ->setTicketNumber($ticketNumber)
            ->setTicketType($ticketType)
            ->setTicketMedia($ticketMedia)
            ->setTax($tax)
            ->setFarePrice($farePrice)
            ->setVatPercent($vatPercent)
            ->setVatAmount($vatAmount)
            ->setFeeAmount($feeAmount)
            ->setOriginalFarePrice($originalFarePrice)
            ->setBirthDate($birthDate)
            ->setIgnoreInPartialInvoice($ignoreInPartialInvoice)
            ->setNationality($nationality)
            ->setMidocoCustomerId($midocoCustomerId)
            ->setHandicap($handicap)
            ->setMidocoPassengerInfosFlight($midocoPassengerInfosFlight)
            ->setMidocoPassengerInfosRail($midocoPassengerInfosRail)
            ->setMidocoFlightSegmentDetails4Printing($midocoFlightSegmentDetails4Printing);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
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
     * Get salutation value
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }
    /**
     * Set salutation value
     * @param string $salutation
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setSalutation(?string $salutation = null): self
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutation, true), gettype($salutation)), __LINE__);
        }
        $this->salutation = $salutation;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }
    /**
     * Set middleName value
     * @param string $middleName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setMiddleName(?string $middleName = null): self
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        $this->middleName = $middleName;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get age value
     * @return string|null
     */
    public function getAge(): ?string
    {
        return $this->age;
    }
    /**
     * Set age value
     * @param string $age
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setAge(?string $age = null): self
    {
        // validation for constraint: string
        if (!is_null($age) && !is_string($age)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        $this->age = $age;
        
        return $this;
    }
    /**
     * Get singlePrice value
     * @return float|null
     */
    public function getSinglePrice(): ?float
    {
        return $this->singlePrice;
    }
    /**
     * Set singlePrice value
     * @param float $singlePrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setSinglePrice(?float $singlePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($singlePrice) && !(is_float($singlePrice) || is_numeric($singlePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($singlePrice, true), gettype($singlePrice)), __LINE__);
        }
        $this->singlePrice = $singlePrice;
        
        return $this;
    }
    /**
     * Get ticketNumber value
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->ticketNumber;
    }
    /**
     * Set ticketNumber value
     * @param string $ticketNumber
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        $this->ticketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get ticketType value
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->ticketType;
    }
    /**
     * Set ticketType value
     * @param string $ticketType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setTicketType(?string $ticketType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketType, true), gettype($ticketType)), __LINE__);
        }
        $this->ticketType = $ticketType;
        
        return $this;
    }
    /**
     * Get ticketMedia value
     * @return string|null
     */
    public function getTicketMedia(): ?string
    {
        return $this->ticketMedia;
    }
    /**
     * Set ticketMedia value
     * @param string $ticketMedia
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setTicketMedia(?string $ticketMedia = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketMedia) && !is_string($ticketMedia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketMedia, true), gettype($ticketMedia)), __LINE__);
        }
        $this->ticketMedia = $ticketMedia;
        
        return $this;
    }
    /**
     * Get tax value
     * @return float|null
     */
    public function getTax(): ?float
    {
        return $this->tax;
    }
    /**
     * Set tax value
     * @param float $tax
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setTax(?float $tax = null): self
    {
        // validation for constraint: float
        if (!is_null($tax) && !(is_float($tax) || is_numeric($tax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tax, true), gettype($tax)), __LINE__);
        }
        $this->tax = $tax;
        
        return $this;
    }
    /**
     * Get farePrice value
     * @return float|null
     */
    public function getFarePrice(): ?float
    {
        return $this->farePrice;
    }
    /**
     * Set farePrice value
     * @param float $farePrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setFarePrice(?float $farePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($farePrice) && !(is_float($farePrice) || is_numeric($farePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($farePrice, true), gettype($farePrice)), __LINE__);
        }
        $this->farePrice = $farePrice;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return string|null
     */
    public function getVatPercent(): ?string
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param string $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setVatPercent(?string $vatPercent = null): self
    {
        // validation for constraint: string
        if (!is_null($vatPercent) && !is_string($vatPercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
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
     * Get feeAmount value
     * @return float|null
     */
    public function getFeeAmount(): ?float
    {
        return $this->feeAmount;
    }
    /**
     * Set feeAmount value
     * @param float $feeAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setFeeAmount(?float $feeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($feeAmount) && !(is_float($feeAmount) || is_numeric($feeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeAmount, true), gettype($feeAmount)), __LINE__);
        }
        $this->feeAmount = $feeAmount;
        
        return $this;
    }
    /**
     * Get originalFarePrice value
     * @return float|null
     */
    public function getOriginalFarePrice(): ?float
    {
        return $this->originalFarePrice;
    }
    /**
     * Set originalFarePrice value
     * @param float $originalFarePrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setOriginalFarePrice(?float $originalFarePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($originalFarePrice) && !(is_float($originalFarePrice) || is_numeric($originalFarePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalFarePrice, true), gettype($originalFarePrice)), __LINE__);
        }
        $this->originalFarePrice = $originalFarePrice;
        
        return $this;
    }
    /**
     * Get birthDate value
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }
    /**
     * Set birthDate value
     * @param string $birthDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setBirthDate(?string $birthDate = null): self
    {
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthDate, true), gettype($birthDate)), __LINE__);
        }
        $this->birthDate = $birthDate;
        
        return $this;
    }
    /**
     * Get ignoreInPartialInvoice value
     * @return bool|null
     */
    public function getIgnoreInPartialInvoice(): ?bool
    {
        return $this->ignoreInPartialInvoice;
    }
    /**
     * Set ignoreInPartialInvoice value
     * @param bool $ignoreInPartialInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setIgnoreInPartialInvoice(?bool $ignoreInPartialInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreInPartialInvoice) && !is_bool($ignoreInPartialInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreInPartialInvoice, true), gettype($ignoreInPartialInvoice)), __LINE__);
        }
        $this->ignoreInPartialInvoice = $ignoreInPartialInvoice;
        
        return $this;
    }
    /**
     * Get nationality value
     * @return string|null
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }
    /**
     * Set nationality value
     * @param string $nationality
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setNationality(?string $nationality = null): self
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationality, true), gettype($nationality)), __LINE__);
        }
        $this->nationality = $nationality;
        
        return $this;
    }
    /**
     * Get midocoCustomerId value
     * @return int|null
     */
    public function getMidocoCustomerId(): ?int
    {
        return $this->midocoCustomerId;
    }
    /**
     * Set midocoCustomerId value
     * @param int $midocoCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setMidocoCustomerId(?int $midocoCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCustomerId) && !(is_int($midocoCustomerId) || ctype_digit($midocoCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCustomerId, true), gettype($midocoCustomerId)), __LINE__);
        }
        $this->midocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get handicap value
     * @return string|null
     */
    public function getHandicap(): ?string
    {
        return $this->handicap;
    }
    /**
     * Set handicap value
     * @param string $handicap
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setHandicap(?string $handicap = null): self
    {
        // validation for constraint: string
        if (!is_null($handicap) && !is_string($handicap)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handicap, true), gettype($handicap)), __LINE__);
        }
        $this->handicap = $handicap;
        
        return $this;
    }
    /**
     * Get MidocoPassengerInfosFlight value
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO|null
     */
    public function getMidocoPassengerInfosFlight(): ?\Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO
    {
        return $this->MidocoPassengerInfosFlight;
    }
    /**
     * Set MidocoPassengerInfosFlight value
     * @param \Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setMidocoPassengerInfosFlight(?\Pggns\MidocoApi\Order\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight = null): self
    {
        $this->MidocoPassengerInfosFlight = $midocoPassengerInfosFlight;
        
        return $this;
    }
    /**
     * Get MidocoPassengerInfosRail value
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO|null
     */
    public function getMidocoPassengerInfosRail(): ?\Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO
    {
        return $this->MidocoPassengerInfosRail;
    }
    /**
     * Set MidocoPassengerInfosRail value
     * @param \Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setMidocoPassengerInfosRail(?\Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail = null): self
    {
        $this->MidocoPassengerInfosRail = $midocoPassengerInfosRail;
        
        return $this;
    }
    /**
     * Get MidocoFlightSegmentDetails4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing[]
     */
    public function getMidocoFlightSegmentDetails4Printing(): array
    {
        return $this->MidocoFlightSegmentDetails4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFlightSegmentDetails4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFlightSegmentDetails4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFlightSegmentDetails4PrintingForArrayConstraintsFromSetMidocoFlightSegmentDetails4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoPassengerInfo4PrintingMidocoFlightSegmentDetails4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoPassengerInfo4PrintingMidocoFlightSegmentDetails4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing) {
                $invalidValues[] = is_object($midocoPassengerInfo4PrintingMidocoFlightSegmentDetails4PrintingItem) ? get_class($midocoPassengerInfo4PrintingMidocoFlightSegmentDetails4PrintingItem) : sprintf('%s(%s)', gettype($midocoPassengerInfo4PrintingMidocoFlightSegmentDetails4PrintingItem), var_export($midocoPassengerInfo4PrintingMidocoFlightSegmentDetails4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFlightSegmentDetails4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFlightSegmentDetails4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing[] $midocoFlightSegmentDetails4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function setMidocoFlightSegmentDetails4Printing(array $midocoFlightSegmentDetails4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFlightSegmentDetails4PrintingArrayErrorMessage = self::validateMidocoFlightSegmentDetails4PrintingForArrayConstraintsFromSetMidocoFlightSegmentDetails4Printing($midocoFlightSegmentDetails4Printing))) {
            throw new InvalidArgumentException($midocoFlightSegmentDetails4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoFlightSegmentDetails4Printing = $midocoFlightSegmentDetails4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoFlightSegmentDetails4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
     */
    public function addToMidocoFlightSegmentDetails4Printing(\Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoFlightSegmentDetails4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFlightSegmentDetails4Printing[] = $item;
        
        return $this;
    }
}
