<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankAccount StructType
 * @subpackage Structs
 */
class BankAccount extends AbstractStructBase
{
    /**
     * The IbanBic
     * Meta information extracted from the WSDL
     * - choice: IbanBic | AccountNumberBankNumber
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: IbanBic
     * @var \Pggns\MidocoApi\Order\StructType\IbanBic|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\IbanBic $IbanBic = null;
    /**
     * The AccountNumberBankNumber
     * Meta information extracted from the WSDL
     * - choice: IbanBic | AccountNumberBankNumber
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: AccountNumberBankNumber
     * @var \Pggns\MidocoApi\Order\StructType\AccountNumberBankNumber|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AccountNumberBankNumber $AccountNumberBankNumber = null;
    /**
     * The bankAccountId
     * @var int|null
     */
    protected ?int $bankAccountId = null;
    /**
     * The bankName
     * @var string|null
     */
    protected ?string $bankName = null;
    /**
     * The bankCity
     * @var string|null
     */
    protected ?string $bankCity = null;
    /**
     * The ownerName
     * @var string|null
     */
    protected ?string $ownerName = null;
    /**
     * Constructor method for BankAccount
     * @uses BankAccount::setIbanBic()
     * @uses BankAccount::setAccountNumberBankNumber()
     * @uses BankAccount::setBankAccountId()
     * @uses BankAccount::setBankName()
     * @uses BankAccount::setBankCity()
     * @uses BankAccount::setOwnerName()
     * @param \Pggns\MidocoApi\Order\StructType\IbanBic $ibanBic
     * @param \Pggns\MidocoApi\Order\StructType\AccountNumberBankNumber $accountNumberBankNumber
     * @param int $bankAccountId
     * @param string $bankName
     * @param string $bankCity
     * @param string $ownerName
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\IbanBic $ibanBic = null, ?\Pggns\MidocoApi\Order\StructType\AccountNumberBankNumber $accountNumberBankNumber = null, ?int $bankAccountId = null, ?string $bankName = null, ?string $bankCity = null, ?string $ownerName = null)
    {
        $this
            ->setIbanBic($ibanBic)
            ->setAccountNumberBankNumber($accountNumberBankNumber)
            ->setBankAccountId($bankAccountId)
            ->setBankName($bankName)
            ->setBankCity($bankCity)
            ->setOwnerName($ownerName);
    }
    /**
     * Get IbanBic value
     * @return \Pggns\MidocoApi\Order\StructType\IbanBic|null
     */
    public function getIbanBic(): ?\Pggns\MidocoApi\Order\StructType\IbanBic
    {
        return isset($this->IbanBic) ? $this->IbanBic : null;
    }
    /**
     * This method is responsible for validating the value passed to the setIbanBic method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIbanBic method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateIbanBicForChoiceConstraintsFromSetIbanBic($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountNumberBankNumber',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property IbanBic can\'t be set as the property %s is already set. Only one property must be set among these properties: IbanBic, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set IbanBic value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\IbanBic $ibanBic
     * @return \Pggns\MidocoApi\Order\StructType\BankAccount
     */
    public function setIbanBic(?\Pggns\MidocoApi\Order\StructType\IbanBic $ibanBic = null): self
    {
        // validation for constraint: choice(IbanBic, AccountNumberBankNumber)
        if ('' !== ($ibanBicChoiceErrorMessage = self::validateIbanBicForChoiceConstraintsFromSetIbanBic($ibanBic))) {
            throw new InvalidArgumentException($ibanBicChoiceErrorMessage, __LINE__);
        }
        if (is_null($ibanBic) || (is_array($ibanBic) && empty($ibanBic))) {
            unset($this->IbanBic);
        } else {
            $this->IbanBic = $ibanBic;
        }
        
        return $this;
    }
    /**
     * Get AccountNumberBankNumber value
     * @return \Pggns\MidocoApi\Order\StructType\AccountNumberBankNumber|null
     */
    public function getAccountNumberBankNumber(): ?\Pggns\MidocoApi\Order\StructType\AccountNumberBankNumber
    {
        return isset($this->AccountNumberBankNumber) ? $this->AccountNumberBankNumber : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAccountNumberBankNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountNumberBankNumber method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAccountNumberBankNumberForChoiceConstraintsFromSetAccountNumberBankNumber($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'IbanBic',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AccountNumberBankNumber can\'t be set as the property %s is already set. Only one property must be set among these properties: AccountNumberBankNumber, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AccountNumberBankNumber value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AccountNumberBankNumber $accountNumberBankNumber
     * @return \Pggns\MidocoApi\Order\StructType\BankAccount
     */
    public function setAccountNumberBankNumber(?\Pggns\MidocoApi\Order\StructType\AccountNumberBankNumber $accountNumberBankNumber = null): self
    {
        // validation for constraint: choice(IbanBic, AccountNumberBankNumber)
        if ('' !== ($accountNumberBankNumberChoiceErrorMessage = self::validateAccountNumberBankNumberForChoiceConstraintsFromSetAccountNumberBankNumber($accountNumberBankNumber))) {
            throw new InvalidArgumentException($accountNumberBankNumberChoiceErrorMessage, __LINE__);
        }
        if (is_null($accountNumberBankNumber) || (is_array($accountNumberBankNumber) && empty($accountNumberBankNumber))) {
            unset($this->AccountNumberBankNumber);
        } else {
            $this->AccountNumberBankNumber = $accountNumberBankNumber;
        }
        
        return $this;
    }
    /**
     * Get bankAccountId value
     * @return int|null
     */
    public function getBankAccountId(): ?int
    {
        return $this->bankAccountId;
    }
    /**
     * Set bankAccountId value
     * @param int $bankAccountId
     * @return \Pggns\MidocoApi\Order\StructType\BankAccount
     */
    public function setBankAccountId(?int $bankAccountId = null): self
    {
        // validation for constraint: int
        if (!is_null($bankAccountId) && !(is_int($bankAccountId) || ctype_digit($bankAccountId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bankAccountId, true), gettype($bankAccountId)), __LINE__);
        }
        $this->bankAccountId = $bankAccountId;
        
        return $this;
    }
    /**
     * Get bankName value
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }
    /**
     * Set bankName value
     * @param string $bankName
     * @return \Pggns\MidocoApi\Order\StructType\BankAccount
     */
    public function setBankName(?string $bankName = null): self
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankName, true), gettype($bankName)), __LINE__);
        }
        $this->bankName = $bankName;
        
        return $this;
    }
    /**
     * Get bankCity value
     * @return string|null
     */
    public function getBankCity(): ?string
    {
        return $this->bankCity;
    }
    /**
     * Set bankCity value
     * @param string $bankCity
     * @return \Pggns\MidocoApi\Order\StructType\BankAccount
     */
    public function setBankCity(?string $bankCity = null): self
    {
        // validation for constraint: string
        if (!is_null($bankCity) && !is_string($bankCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCity, true), gettype($bankCity)), __LINE__);
        }
        $this->bankCity = $bankCity;
        
        return $this;
    }
    /**
     * Get ownerName value
     * @return string|null
     */
    public function getOwnerName(): ?string
    {
        return $this->ownerName;
    }
    /**
     * Set ownerName value
     * @param string $ownerName
     * @return \Pggns\MidocoApi\Order\StructType\BankAccount
     */
    public function setOwnerName(?string $ownerName = null): self
    {
        // validation for constraint: string
        if (!is_null($ownerName) && !is_string($ownerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerName, true), gettype($ownerName)), __LINE__);
        }
        $this->ownerName = $ownerName;
        
        return $this;
    }
}
