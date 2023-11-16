<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellPassengerDTO StructType
 * @subpackage Structs
 */
class SellPassengerDTO extends AbstractStructBase
{
    /**
     * The age
     * @var int|null
     */
    protected ?int $age = null;
    /**
     * The birthDate
     * @var string|null
     */
    protected ?string $birthDate = null;
    /**
     * The crsImportedName
     * @var string|null
     */
    protected ?string $crsImportedName = null;
    /**
     * The crsImportedSalutation
     * @var string|null
     */
    protected ?string $crsImportedSalutation = null;
    /**
     * The facesId
     * @var string|null
     */
    protected ?string $facesId = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The gender
     * @var int|null
     */
    protected ?int $gender = null;
    /**
     * The ignoreInPartialInvoice
     * @var bool|null
     */
    protected ?bool $ignoreInPartialInvoice = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The midocoCustomerId
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The nationality
     * @var string|null
     */
    protected ?string $nationality = null;
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * The referenceNo
     * @var string|null
     */
    protected ?string $referenceNo = null;
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The singlePrice
     * @var float|null
     */
    protected ?float $singlePrice = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * Constructor method for SellPassengerDTO
     * @uses SellPassengerDTO::setAge()
     * @uses SellPassengerDTO::setBirthDate()
     * @uses SellPassengerDTO::setCrsImportedName()
     * @uses SellPassengerDTO::setCrsImportedSalutation()
     * @uses SellPassengerDTO::setFacesId()
     * @uses SellPassengerDTO::setForename()
     * @uses SellPassengerDTO::setGender()
     * @uses SellPassengerDTO::setIgnoreInPartialInvoice()
     * @uses SellPassengerDTO::setItemId()
     * @uses SellPassengerDTO::setMiddleName()
     * @uses SellPassengerDTO::setMidocoCustomerId()
     * @uses SellPassengerDTO::setName()
     * @uses SellPassengerDTO::setNationality()
     * @uses SellPassengerDTO::setPositionNo()
     * @uses SellPassengerDTO::setReferenceNo()
     * @uses SellPassengerDTO::setSalutation()
     * @uses SellPassengerDTO::setSinglePrice()
     * @uses SellPassengerDTO::setTitle()
     * @param int $age
     * @param string $birthDate
     * @param string $crsImportedName
     * @param string $crsImportedSalutation
     * @param string $facesId
     * @param string $forename
     * @param int $gender
     * @param bool $ignoreInPartialInvoice
     * @param int $itemId
     * @param string $middleName
     * @param int $midocoCustomerId
     * @param string $name
     * @param string $nationality
     * @param int $positionNo
     * @param string $referenceNo
     * @param string $salutation
     * @param float $singlePrice
     * @param string $title
     */
    public function __construct(?int $age = null, ?string $birthDate = null, ?string $crsImportedName = null, ?string $crsImportedSalutation = null, ?string $facesId = null, ?string $forename = null, ?int $gender = null, ?bool $ignoreInPartialInvoice = null, ?int $itemId = null, ?string $middleName = null, ?int $midocoCustomerId = null, ?string $name = null, ?string $nationality = null, ?int $positionNo = null, ?string $referenceNo = null, ?string $salutation = null, ?float $singlePrice = null, ?string $title = null)
    {
        $this
            ->setAge($age)
            ->setBirthDate($birthDate)
            ->setCrsImportedName($crsImportedName)
            ->setCrsImportedSalutation($crsImportedSalutation)
            ->setFacesId($facesId)
            ->setForename($forename)
            ->setGender($gender)
            ->setIgnoreInPartialInvoice($ignoreInPartialInvoice)
            ->setItemId($itemId)
            ->setMiddleName($middleName)
            ->setMidocoCustomerId($midocoCustomerId)
            ->setName($name)
            ->setNationality($nationality)
            ->setPositionNo($positionNo)
            ->setReferenceNo($referenceNo)
            ->setSalutation($salutation)
            ->setSinglePrice($singlePrice)
            ->setTitle($title);
    }
    /**
     * Get age value
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->age;
    }
    /**
     * Set age value
     * @param int $age
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
     */
    public function setAge(?int $age = null): self
    {
        // validation for constraint: int
        if (!is_null($age) && !(is_int($age) || ctype_digit($age))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        $this->age = $age;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
     * Get crsImportedName value
     * @return string|null
     */
    public function getCrsImportedName(): ?string
    {
        return $this->crsImportedName;
    }
    /**
     * Set crsImportedName value
     * @param string $crsImportedName
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
     */
    public function setCrsImportedName(?string $crsImportedName = null): self
    {
        // validation for constraint: string
        if (!is_null($crsImportedName) && !is_string($crsImportedName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsImportedName, true), gettype($crsImportedName)), __LINE__);
        }
        $this->crsImportedName = $crsImportedName;
        
        return $this;
    }
    /**
     * Get crsImportedSalutation value
     * @return string|null
     */
    public function getCrsImportedSalutation(): ?string
    {
        return $this->crsImportedSalutation;
    }
    /**
     * Set crsImportedSalutation value
     * @param string $crsImportedSalutation
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
     */
    public function setCrsImportedSalutation(?string $crsImportedSalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($crsImportedSalutation) && !is_string($crsImportedSalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsImportedSalutation, true), gettype($crsImportedSalutation)), __LINE__);
        }
        $this->crsImportedSalutation = $crsImportedSalutation;
        
        return $this;
    }
    /**
     * Get facesId value
     * @return string|null
     */
    public function getFacesId(): ?string
    {
        return $this->facesId;
    }
    /**
     * Set facesId value
     * @param string $facesId
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
     */
    public function setFacesId(?string $facesId = null): self
    {
        // validation for constraint: string
        if (!is_null($facesId) && !is_string($facesId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($facesId, true), gettype($facesId)), __LINE__);
        }
        $this->facesId = $facesId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
     * Get gender value
     * @return int|null
     */
    public function getGender(): ?int
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @param int $gender
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
     */
    public function setGender(?int $gender = null): self
    {
        // validation for constraint: int
        if (!is_null($gender) && !(is_int($gender) || ctype_digit($gender))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($gender, true), gettype($gender)), __LINE__);
        }
        $this->gender = $gender;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
     * Get referenceNo value
     * @return string|null
     */
    public function getReferenceNo(): ?string
    {
        return $this->referenceNo;
    }
    /**
     * Set referenceNo value
     * @param string $referenceNo
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
     */
    public function setReferenceNo(?string $referenceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceNo) && !is_string($referenceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceNo, true), gettype($referenceNo)), __LINE__);
        }
        $this->referenceNo = $referenceNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellPassengerDTO
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
}
