<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for debitPayment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DebitPayment extends AbstractStructBase
{
    /**
     * The bankName
     * @var string|null
     */
    protected ?string $bankName = null;
    /**
     * The bankNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bankNumber = null;
    /**
     * The accountNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The accountOwner
     * @var string|null
     */
    protected ?string $accountOwner = null;
    /**
     * The bankCountry
     * Meta information extracted from the WSDL
     * - default: DE
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bankCountry = null;
    /**
     * The isIban
     * Meta information extracted from the WSDL
     * - documentation: this field will be removed in the future release
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isIban = null;
    /**
     * The iban
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The swiftBicCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $swiftBicCode = null;
    /**
     * The bankCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bankCity = null;
    /**
     * The bankStreet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bankStreet = null;
    /**
     * The mandateReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * Constructor method for debitPayment
     * @uses DebitPayment::setBankName()
     * @uses DebitPayment::setBankNumber()
     * @uses DebitPayment::setAccountNo()
     * @uses DebitPayment::setAccountOwner()
     * @uses DebitPayment::setBankCountry()
     * @uses DebitPayment::setIsIban()
     * @uses DebitPayment::setIban()
     * @uses DebitPayment::setSwiftBicCode()
     * @uses DebitPayment::setBankCity()
     * @uses DebitPayment::setBankStreet()
     * @uses DebitPayment::setMandateReference()
     * @param string $bankName
     * @param string $bankNumber
     * @param string $accountNo
     * @param string $accountOwner
     * @param string $bankCountry
     * @param bool $isIban
     * @param string $iban
     * @param string $swiftBicCode
     * @param string $bankCity
     * @param string $bankStreet
     * @param string $mandateReference
     */
    public function __construct(?string $bankName = null, ?string $bankNumber = null, ?string $accountNo = null, ?string $accountOwner = null, ?string $bankCountry = 'DE', ?bool $isIban = false, ?string $iban = null, ?string $swiftBicCode = null, ?string $bankCity = null, ?string $bankStreet = null, ?string $mandateReference = null)
    {
        $this
            ->setBankName($bankName)
            ->setBankNumber($bankNumber)
            ->setAccountNo($accountNo)
            ->setAccountOwner($accountOwner)
            ->setBankCountry($bankCountry)
            ->setIsIban($isIban)
            ->setIban($iban)
            ->setSwiftBicCode($swiftBicCode)
            ->setBankCity($bankCity)
            ->setBankStreet($bankStreet)
            ->setMandateReference($mandateReference);
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitPayment
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
     * Get bankNumber value
     * @return string|null
     */
    public function getBankNumber(): ?string
    {
        return $this->bankNumber;
    }
    /**
     * Set bankNumber value
     * @param string $bankNumber
     * @return \Pggns\MidocoApi\Order\StructType\DebitPayment
     */
    public function setBankNumber(?string $bankNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNumber) && !is_string($bankNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNumber, true), gettype($bankNumber)), __LINE__);
        }
        $this->bankNumber = $bankNumber;
        
        return $this;
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Order\StructType\DebitPayment
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
    /**
     * Get accountOwner value
     * @return string|null
     */
    public function getAccountOwner(): ?string
    {
        return $this->accountOwner;
    }
    /**
     * Set accountOwner value
     * @param string $accountOwner
     * @return \Pggns\MidocoApi\Order\StructType\DebitPayment
     */
    public function setAccountOwner(?string $accountOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($accountOwner) && !is_string($accountOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountOwner, true), gettype($accountOwner)), __LINE__);
        }
        $this->accountOwner = $accountOwner;
        
        return $this;
    }
    /**
     * Get bankCountry value
     * @return string|null
     */
    public function getBankCountry(): ?string
    {
        return $this->bankCountry;
    }
    /**
     * Set bankCountry value
     * @param string $bankCountry
     * @return \Pggns\MidocoApi\Order\StructType\DebitPayment
     */
    public function setBankCountry(?string $bankCountry = 'DE'): self
    {
        // validation for constraint: string
        if (!is_null($bankCountry) && !is_string($bankCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCountry, true), gettype($bankCountry)), __LINE__);
        }
        $this->bankCountry = $bankCountry;
        
        return $this;
    }
    /**
     * Get isIban value
     * @return bool|null
     */
    public function getIsIban(): ?bool
    {
        return $this->isIban;
    }
    /**
     * Set isIban value
     * @param bool $isIban
     * @return \Pggns\MidocoApi\Order\StructType\DebitPayment
     */
    public function setIsIban(?bool $isIban = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isIban) && !is_bool($isIban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isIban, true), gettype($isIban)), __LINE__);
        }
        $this->isIban = $isIban;
        
        return $this;
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Pggns\MidocoApi\Order\StructType\DebitPayment
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get swiftBicCode value
     * @return string|null
     */
    public function getSwiftBicCode(): ?string
    {
        return $this->swiftBicCode;
    }
    /**
     * Set swiftBicCode value
     * @param string $swiftBicCode
     * @return \Pggns\MidocoApi\Order\StructType\DebitPayment
     */
    public function setSwiftBicCode(?string $swiftBicCode = null): self
    {
        // validation for constraint: string
        if (!is_null($swiftBicCode) && !is_string($swiftBicCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swiftBicCode, true), gettype($swiftBicCode)), __LINE__);
        }
        $this->swiftBicCode = $swiftBicCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitPayment
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
     * Get bankStreet value
     * @return string|null
     */
    public function getBankStreet(): ?string
    {
        return $this->bankStreet;
    }
    /**
     * Set bankStreet value
     * @param string $bankStreet
     * @return \Pggns\MidocoApi\Order\StructType\DebitPayment
     */
    public function setBankStreet(?string $bankStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($bankStreet) && !is_string($bankStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankStreet, true), gettype($bankStreet)), __LINE__);
        }
        $this->bankStreet = $bankStreet;
        
        return $this;
    }
    /**
     * Get mandateReference value
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * Set mandateReference value
     * @param string $mandateReference
     * @return \Pggns\MidocoApi\Order\StructType\DebitPayment
     */
    public function setMandateReference(?string $mandateReference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateReference) && !is_string($mandateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateReference, true), gettype($mandateReference)), __LINE__);
        }
        $this->mandateReference = $mandateReference;
        
        return $this;
    }
}
