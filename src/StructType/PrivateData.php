<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for privateData StructType
 * Meta information extracted from the WSDL
 * - documentation: Special data for a private customer
 * @subpackage Structs
 */
class PrivateData extends AbstractStructBase
{
    /**
     * The salutation
     * Meta information extracted from the WSDL
     * - documentation: Salutation in language specific form (Mr, Mrs, Herr, Frau etc).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - documentation: Optional title of the person (Dr., Prof., Lord, etc).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The forename
     * Meta information extracted from the WSDL
     * - documentation: Forename of the customer
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - documentation: Family name of the customer
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The middleName
     * Meta information extracted from the WSDL
     * - documentation: Middle name of the customer
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $middleName = null;
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
     * - documentation: Gender of the customer
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $gender = null;
    /**
     * Constructor method for privateData
     * @uses PrivateData::setSalutation()
     * @uses PrivateData::setTitle()
     * @uses PrivateData::setForename()
     * @uses PrivateData::setName()
     * @uses PrivateData::setMiddleName()
     * @uses PrivateData::setBirthday()
     * @uses PrivateData::setGender()
     * @param string $salutation
     * @param string $title
     * @param string $forename
     * @param string $name
     * @param string $middleName
     * @param string $birthday
     * @param string $gender
     */
    public function __construct(?string $salutation = null, ?string $title = null, ?string $forename = null, ?string $name = null, ?string $middleName = null, ?string $birthday = null, ?string $gender = null)
    {
        $this
            ->setSalutation($salutation)
            ->setTitle($title)
            ->setForename($forename)
            ->setName($name)
            ->setMiddleName($middleName)
            ->setBirthday($birthday)
            ->setGender($gender);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrivateData
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
     * @return \Pggns\MidocoApi\Order\StructType\PrivateData
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
     * @return \Pggns\MidocoApi\Order\StructType\PrivateData
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
     * @return \Pggns\MidocoApi\Order\StructType\PrivateData
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
     * @return \Pggns\MidocoApi\Order\StructType\PrivateData
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
     * @return \Pggns\MidocoApi\Order\StructType\PrivateData
     */
    public function setBirthday(?string $birthday = null): self
    {
        // validation for constraint: string
        if (!is_null($birthday) && !is_string($birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday, true), gettype($birthday)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($birthday) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $birthday)) {
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
     * @return \Pggns\MidocoApi\Order\StructType\PrivateData
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
}
