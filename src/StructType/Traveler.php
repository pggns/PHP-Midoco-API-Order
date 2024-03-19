<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Traveler StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Traveler extends AbstractStructBase
{
    /**
     * The CreditCardRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CreditCardRefId
     * @var int[]
     */
    protected ?array $CreditCardRefId = null;
    /**
     * The BankAccountRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: BankAccountRefId
     * @var int[]
     */
    protected ?array $BankAccountRefId = null;
    /**
     * The travelerId
     * Meta information extracted from the WSDL
     * - documentation: Unique ID for the traveler in this GDS Booking
     * @var int|null
     */
    protected ?int $travelerId = null;
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
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The gender
     * @var string|null
     */
    protected ?string $gender = null;
    /**
     * The birthDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $birthDate = null;
    /**
     * The midocoCustomerId
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * The nationality
     * @var string|null
     */
    protected ?string $nationality = null;
    /**
     * Constructor method for Traveler
     * @uses Traveler::setCreditCardRefId()
     * @uses Traveler::setBankAccountRefId()
     * @uses Traveler::setTravelerId()
     * @uses Traveler::setSalutation()
     * @uses Traveler::setTitle()
     * @uses Traveler::setName()
     * @uses Traveler::setForename()
     * @uses Traveler::setGender()
     * @uses Traveler::setBirthDate()
     * @uses Traveler::setMidocoCustomerId()
     * @uses Traveler::setNationality()
     * @param int[] $creditCardRefId
     * @param int[] $bankAccountRefId
     * @param int $travelerId
     * @param string $salutation
     * @param string $title
     * @param string $name
     * @param string $forename
     * @param string $gender
     * @param string $birthDate
     * @param int $midocoCustomerId
     * @param string $nationality
     */
    public function __construct(?array $creditCardRefId = null, ?array $bankAccountRefId = null, ?int $travelerId = null, ?string $salutation = null, ?string $title = null, ?string $name = null, ?string $forename = null, ?string $gender = null, ?string $birthDate = null, ?int $midocoCustomerId = null, ?string $nationality = null)
    {
        $this
            ->setCreditCardRefId($creditCardRefId)
            ->setBankAccountRefId($bankAccountRefId)
            ->setTravelerId($travelerId)
            ->setSalutation($salutation)
            ->setTitle($title)
            ->setName($name)
            ->setForename($forename)
            ->setGender($gender)
            ->setBirthDate($birthDate)
            ->setMidocoCustomerId($midocoCustomerId)
            ->setNationality($nationality);
    }
    /**
     * Get CreditCardRefId value
     * @return int[]
     */
    public function getCreditCardRefId(): ?array
    {
        return $this->CreditCardRefId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCreditCardRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCardRefId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreditCardRefIdForArrayConstraintFromSetCreditCardRefId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $travelerCreditCardRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($travelerCreditCardRefIdItem) || ctype_digit($travelerCreditCardRefIdItem))) {
                $invalidValues[] = is_object($travelerCreditCardRefIdItem) ? get_class($travelerCreditCardRefIdItem) : sprintf('%s(%s)', gettype($travelerCreditCardRefIdItem), var_export($travelerCreditCardRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CreditCardRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CreditCardRefId value
     * @throws InvalidArgumentException
     * @param int[] $creditCardRefId
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
     */
    public function setCreditCardRefId(?array $creditCardRefId = null): self
    {
        // validation for constraint: array
        if ('' !== ($creditCardRefIdArrayErrorMessage = self::validateCreditCardRefIdForArrayConstraintFromSetCreditCardRefId($creditCardRefId))) {
            throw new InvalidArgumentException($creditCardRefIdArrayErrorMessage, __LINE__);
        }
        $this->CreditCardRefId = $creditCardRefId;
        
        return $this;
    }
    /**
     * Add item to CreditCardRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
     */
    public function addToCreditCardRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The CreditCardRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CreditCardRefId[] = $item;
        
        return $this;
    }
    /**
     * Get BankAccountRefId value
     * @return int[]
     */
    public function getBankAccountRefId(): ?array
    {
        return $this->BankAccountRefId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBankAccountRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBankAccountRefId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBankAccountRefIdForArrayConstraintFromSetBankAccountRefId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $travelerBankAccountRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($travelerBankAccountRefIdItem) || ctype_digit($travelerBankAccountRefIdItem))) {
                $invalidValues[] = is_object($travelerBankAccountRefIdItem) ? get_class($travelerBankAccountRefIdItem) : sprintf('%s(%s)', gettype($travelerBankAccountRefIdItem), var_export($travelerBankAccountRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BankAccountRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BankAccountRefId value
     * @throws InvalidArgumentException
     * @param int[] $bankAccountRefId
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
     */
    public function setBankAccountRefId(?array $bankAccountRefId = null): self
    {
        // validation for constraint: array
        if ('' !== ($bankAccountRefIdArrayErrorMessage = self::validateBankAccountRefIdForArrayConstraintFromSetBankAccountRefId($bankAccountRefId))) {
            throw new InvalidArgumentException($bankAccountRefIdArrayErrorMessage, __LINE__);
        }
        $this->BankAccountRefId = $bankAccountRefId;
        
        return $this;
    }
    /**
     * Add item to BankAccountRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
     */
    public function addToBankAccountRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The BankAccountRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BankAccountRefId[] = $item;
        
        return $this;
    }
    /**
     * Get travelerId value
     * @return int|null
     */
    public function getTravelerId(): ?int
    {
        return $this->travelerId;
    }
    /**
     * Set travelerId value
     * @param int $travelerId
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
     */
    public function setTravelerId(?int $travelerId = null): self
    {
        // validation for constraint: int
        if (!is_null($travelerId) && !(is_int($travelerId) || ctype_digit($travelerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelerId, true), gettype($travelerId)), __LINE__);
        }
        $this->travelerId = $travelerId;
        
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
     * @uses \Pggns\MidocoApi\Order\EnumType\SalutationType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\SalutationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $salutation
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
     */
    public function setSalutation(?string $salutation = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\SalutationType::valueIsValid($salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\SalutationType', is_array($salutation) ? implode(', ', $salutation) : var_export($salutation, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\SalutationType::getValidValues())), __LINE__);
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
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
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
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
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
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
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
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
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
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
     */
    public function setBirthDate(?string $birthDate = null): self
    {
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthDate, true), gettype($birthDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($birthDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $birthDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($birthDate, true)), __LINE__);
        }
        $this->birthDate = $birthDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
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
     * @return \Pggns\MidocoApi\Order\StructType\Traveler
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
}
