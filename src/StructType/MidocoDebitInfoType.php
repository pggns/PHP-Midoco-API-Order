<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDebitInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDebitInfoType extends AbstractStructBase
{
    /**
     * The debitPayment
     * @var bool|null
     */
    protected ?bool $debitPayment = null;
    /**
     * The bankName
     * @var string|null
     */
    protected ?string $bankName = null;
    /**
     * The bankNo
     * @var string|null
     */
    protected ?string $bankNo = null;
    /**
     * The bankCountry
     * @var string|null
     */
    protected ?string $bankCountry = null;
    /**
     * The bankAccountNo
     * @var string|null
     */
    protected ?string $bankAccountNo = null;
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The swiftBicCode
     * @var string|null
     */
    protected ?string $swiftBicCode = null;
    /**
     * The bankStreet
     * @var string|null
     */
    protected ?string $bankStreet = null;
    /**
     * The bankCity
     * @var string|null
     */
    protected ?string $bankCity = null;
    /**
     * The accountOwner
     * @var string|null
     */
    protected ?string $accountOwner = null;
    /**
     * The mandateId
     * @var string|null
     */
    protected ?string $mandateId = null;
    /**
     * Constructor method for MidocoDebitInfoType
     * @uses MidocoDebitInfoType::setDebitPayment()
     * @uses MidocoDebitInfoType::setBankName()
     * @uses MidocoDebitInfoType::setBankNo()
     * @uses MidocoDebitInfoType::setBankCountry()
     * @uses MidocoDebitInfoType::setBankAccountNo()
     * @uses MidocoDebitInfoType::setIban()
     * @uses MidocoDebitInfoType::setSwiftBicCode()
     * @uses MidocoDebitInfoType::setBankStreet()
     * @uses MidocoDebitInfoType::setBankCity()
     * @uses MidocoDebitInfoType::setAccountOwner()
     * @uses MidocoDebitInfoType::setMandateId()
     * @param bool $debitPayment
     * @param string $bankName
     * @param string $bankNo
     * @param string $bankCountry
     * @param string $bankAccountNo
     * @param string $iban
     * @param string $swiftBicCode
     * @param string $bankStreet
     * @param string $bankCity
     * @param string $accountOwner
     * @param string $mandateId
     */
    public function __construct(?bool $debitPayment = null, ?string $bankName = null, ?string $bankNo = null, ?string $bankCountry = null, ?string $bankAccountNo = null, ?string $iban = null, ?string $swiftBicCode = null, ?string $bankStreet = null, ?string $bankCity = null, ?string $accountOwner = null, ?string $mandateId = null)
    {
        $this
            ->setDebitPayment($debitPayment)
            ->setBankName($bankName)
            ->setBankNo($bankNo)
            ->setBankCountry($bankCountry)
            ->setBankAccountNo($bankAccountNo)
            ->setIban($iban)
            ->setSwiftBicCode($swiftBicCode)
            ->setBankStreet($bankStreet)
            ->setBankCity($bankCity)
            ->setAccountOwner($accountOwner)
            ->setMandateId($mandateId);
    }
    /**
     * Get debitPayment value
     * @return bool|null
     */
    public function getDebitPayment(): ?bool
    {
        return $this->debitPayment;
    }
    /**
     * Set debitPayment value
     * @param bool $debitPayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
     */
    public function setDebitPayment(?bool $debitPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($debitPayment) && !is_bool($debitPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($debitPayment, true), gettype($debitPayment)), __LINE__);
        }
        $this->debitPayment = $debitPayment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
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
     * Get bankNo value
     * @return string|null
     */
    public function getBankNo(): ?string
    {
        return $this->bankNo;
    }
    /**
     * Set bankNo value
     * @param string $bankNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
     */
    public function setBankNo(?string $bankNo = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNo) && !is_string($bankNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNo, true), gettype($bankNo)), __LINE__);
        }
        $this->bankNo = $bankNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
     */
    public function setBankCountry(?string $bankCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($bankCountry) && !is_string($bankCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCountry, true), gettype($bankCountry)), __LINE__);
        }
        $this->bankCountry = $bankCountry;
        
        return $this;
    }
    /**
     * Get bankAccountNo value
     * @return string|null
     */
    public function getBankAccountNo(): ?string
    {
        return $this->bankAccountNo;
    }
    /**
     * Set bankAccountNo value
     * @param string $bankAccountNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
     */
    public function setBankAccountNo(?string $bankAccountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($bankAccountNo) && !is_string($bankAccountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankAccountNo, true), gettype($bankAccountNo)), __LINE__);
        }
        $this->bankAccountNo = $bankAccountNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
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
     * Get mandateId value
     * @return string|null
     */
    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }
    /**
     * Set mandateId value
     * @param string $mandateId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
     */
    public function setMandateId(?string $mandateId = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateId) && !is_string($mandateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateId, true), gettype($mandateId)), __LINE__);
        }
        $this->mandateId = $mandateId;
        
        return $this;
    }
}
