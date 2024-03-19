<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for person StructType
 * Meta information extracted from the WSDL
 * - documentation: Persons for a booking or package
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Person extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The salutation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The forename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The middleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The birthday
     * Meta information extracted from the WSDL
     * - documentation: optional birthday field
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $birthday = null;
    /**
     * The gender
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $gender = null;
    /**
     * The age
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $age = null;
    /**
     * The person_price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $person_price = null;
    /**
     * The AdditionalFlightPassengerInfos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AdditionalFlightPassengerInfos
     * @var \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos $AdditionalFlightPassengerInfos = null;
    /**
     * The AdditionalRailPassengerInfos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AdditionalRailPassengerInfos
     * @var \Pggns\MidocoApi\Order\StructType\AdditionalRailPassengerInfos|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AdditionalRailPassengerInfos $AdditionalRailPassengerInfos = null;
    /**
     * The crs_salutation
     * Meta information extracted from the WSDL
     * - documentation: original name from crs system e.g. in capital letters MEIER/JOE MR
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crs_salutation = null;
    /**
     * The crs_name
     * Meta information extracted from the WSDL
     * - documentation: original salutation from crs system e.g. MRS/MRS in foreign language
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crs_name = null;
    /**
     * The nationality
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nationality = null;
    /**
     * The personPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $personPrice = null;
    /**
     * The crsSalutation
     * Meta information extracted from the WSDL
     * - documentation: original name from crs system e.g. in capital letters MEIER/JOE MR
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crsSalutation = null;
    /**
     * The crsName
     * Meta information extracted from the WSDL
     * - documentation: original salutation from crs system e.g. MRS/MRS in foreign language
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crsName = null;
    /**
     * Constructor method for person
     * @uses Person::setPosition()
     * @uses Person::setSalutation()
     * @uses Person::setTitle()
     * @uses Person::setForename()
     * @uses Person::setMiddleName()
     * @uses Person::setName()
     * @uses Person::setBirthday()
     * @uses Person::setGender()
     * @uses Person::setAge()
     * @uses Person::setPerson_price()
     * @uses Person::setAdditionalFlightPassengerInfos()
     * @uses Person::setAdditionalRailPassengerInfos()
     * @uses Person::setCrs_salutation()
     * @uses Person::setCrs_name()
     * @uses Person::setNationality()
     * @uses Person::setPersonPrice()
     * @uses Person::setCrsSalutation()
     * @uses Person::setCrsName()
     * @param int $position
     * @param string $salutation
     * @param string $title
     * @param string $forename
     * @param string $middleName
     * @param string $name
     * @param string $birthday
     * @param string $gender
     * @param int $age
     * @param float $person_price
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos $additionalFlightPassengerInfos
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalRailPassengerInfos $additionalRailPassengerInfos
     * @param string $crs_salutation
     * @param string $crs_name
     * @param string $nationality
     * @param float $personPrice
     * @param string $crsSalutation
     * @param string $crsName
     */
    public function __construct(int $position, ?string $salutation = null, ?string $title = null, ?string $forename = null, ?string $middleName = null, ?string $name = null, ?string $birthday = null, ?string $gender = null, ?int $age = null, ?float $person_price = null, ?\Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos $additionalFlightPassengerInfos = null, ?\Pggns\MidocoApi\Order\StructType\AdditionalRailPassengerInfos $additionalRailPassengerInfos = null, ?string $crs_salutation = null, ?string $crs_name = null, ?string $nationality = null, ?float $personPrice = null, ?string $crsSalutation = null, ?string $crsName = null)
    {
        $this
            ->setPosition($position)
            ->setSalutation($salutation)
            ->setTitle($title)
            ->setForename($forename)
            ->setMiddleName($middleName)
            ->setName($name)
            ->setBirthday($birthday)
            ->setGender($gender)
            ->setAge($age)
            ->setPerson_price($person_price)
            ->setAdditionalFlightPassengerInfos($additionalFlightPassengerInfos)
            ->setAdditionalRailPassengerInfos($additionalRailPassengerInfos)
            ->setCrs_salutation($crs_salutation)
            ->setCrs_name($crs_name)
            ->setNationality($nationality)
            ->setPersonPrice($personPrice)
            ->setCrsSalutation($crsSalutation)
            ->setCrsName($crsName);
    }
    /**
     * Get position value
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\Person
     */
    public function setPosition(int $position): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Person
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
     * @return \Pggns\MidocoApi\Order\StructType\Person
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
     * @return \Pggns\MidocoApi\Order\StructType\Person
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
     * @return \Pggns\MidocoApi\Order\StructType\Person
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
     * @return \Pggns\MidocoApi\Order\StructType\Person
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
     * Get birthday value
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }
    /**
     * Set birthday value
     * @param string $birthday
     * @return \Pggns\MidocoApi\Order\StructType\Person
     */
    public function setBirthday(?string $birthday = null): self
    {
        // validation for constraint: string
        if (!is_null($birthday) && !is_string($birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday, true), gettype($birthday)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($birthday) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($birthday, true)), __LINE__);
        }
        $this->birthday = $birthday;
        
        return $this;
    }
    /**
     * Get gender value
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @uses \Pggns\MidocoApi\Order\EnumType\GenderType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\GenderType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $gender
     * @return \Pggns\MidocoApi\Order\StructType\Person
     */
    public function setGender(?string $gender = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\GenderType::valueIsValid($gender)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\GenderType', is_array($gender) ? implode(', ', $gender) : var_export($gender, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\GenderType::getValidValues())), __LINE__);
        }
        $this->gender = $gender;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\Person
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
     * Get person_price value
     * @return float|null
     */
    public function getPerson_price(): ?float
    {
        return $this->{'person-price'};
    }
    /**
     * Set person_price value
     * @param float $person_price
     * @return \Pggns\MidocoApi\Order\StructType\Person
     */
    public function setPerson_price(?float $person_price = null): self
    {
        // validation for constraint: float
        if (!is_null($person_price) && !(is_float($person_price) || is_numeric($person_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($person_price, true), gettype($person_price)), __LINE__);
        }
        $this->person_price = $this->{'person-price'} = $person_price;
        
        return $this;
    }
    /**
     * Get AdditionalFlightPassengerInfos value
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos|null
     */
    public function getAdditionalFlightPassengerInfos(): ?\Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
    {
        return $this->AdditionalFlightPassengerInfos;
    }
    /**
     * Set AdditionalFlightPassengerInfos value
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos $additionalFlightPassengerInfos
     * @return \Pggns\MidocoApi\Order\StructType\Person
     */
    public function setAdditionalFlightPassengerInfos(?\Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos $additionalFlightPassengerInfos = null): self
    {
        $this->AdditionalFlightPassengerInfos = $additionalFlightPassengerInfos;
        
        return $this;
    }
    /**
     * Get AdditionalRailPassengerInfos value
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalRailPassengerInfos|null
     */
    public function getAdditionalRailPassengerInfos(): ?\Pggns\MidocoApi\Order\StructType\AdditionalRailPassengerInfos
    {
        return $this->AdditionalRailPassengerInfos;
    }
    /**
     * Set AdditionalRailPassengerInfos value
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalRailPassengerInfos $additionalRailPassengerInfos
     * @return \Pggns\MidocoApi\Order\StructType\Person
     */
    public function setAdditionalRailPassengerInfos(?\Pggns\MidocoApi\Order\StructType\AdditionalRailPassengerInfos $additionalRailPassengerInfos = null): self
    {
        $this->AdditionalRailPassengerInfos = $additionalRailPassengerInfos;
        
        return $this;
    }
    /**
     * Get crs_salutation value
     * @return string|null
     */
    public function getCrs_salutation(): ?string
    {
        return $this->{'crs-salutation'};
    }
    /**
     * Set crs_salutation value
     * @param string $crs_salutation
     * @return \Pggns\MidocoApi\Order\StructType\Person
     */
    public function setCrs_salutation(?string $crs_salutation = null): self
    {
        // validation for constraint: string
        if (!is_null($crs_salutation) && !is_string($crs_salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crs_salutation, true), gettype($crs_salutation)), __LINE__);
        }
        $this->crs_salutation = $this->{'crs-salutation'} = $crs_salutation;
        
        return $this;
    }
    /**
     * Get crs_name value
     * @return string|null
     */
    public function getCrs_name(): ?string
    {
        return $this->{'crs-name'};
    }
    /**
     * Set crs_name value
     * @param string $crs_name
     * @return \Pggns\MidocoApi\Order\StructType\Person
     */
    public function setCrs_name(?string $crs_name = null): self
    {
        // validation for constraint: string
        if (!is_null($crs_name) && !is_string($crs_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crs_name, true), gettype($crs_name)), __LINE__);
        }
        $this->crs_name = $this->{'crs-name'} = $crs_name;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Person
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
     * Get personPrice value
     * @return float|null
     */
    public function getPersonPrice(): ?float
    {
        return $this->personPrice;
    }
    /**
     * Set personPrice value
     * @param float $personPrice
     * @return \Pggns\MidocoApi\Order\StructType\Person
     */
    public function setPersonPrice(?float $personPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($personPrice) && !(is_float($personPrice) || is_numeric($personPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($personPrice, true), gettype($personPrice)), __LINE__);
        }
        $this->personPrice = $personPrice;
        
        return $this;
    }
    /**
     * Get crsSalutation value
     * @return string|null
     */
    public function getCrsSalutation(): ?string
    {
        return $this->crsSalutation;
    }
    /**
     * Set crsSalutation value
     * @param string $crsSalutation
     * @return \Pggns\MidocoApi\Order\StructType\Person
     */
    public function setCrsSalutation(?string $crsSalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($crsSalutation) && !is_string($crsSalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsSalutation, true), gettype($crsSalutation)), __LINE__);
        }
        $this->crsSalutation = $crsSalutation;
        
        return $this;
    }
    /**
     * Get crsName value
     * @return string|null
     */
    public function getCrsName(): ?string
    {
        return $this->crsName;
    }
    /**
     * Set crsName value
     * @param string $crsName
     * @return \Pggns\MidocoApi\Order\StructType\Person
     */
    public function setCrsName(?string $crsName = null): self
    {
        // validation for constraint: string
        if (!is_null($crsName) && !is_string($crsName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsName, true), gettype($crsName)), __LINE__);
        }
        $this->crsName = $crsName;
        
        return $this;
    }
}
