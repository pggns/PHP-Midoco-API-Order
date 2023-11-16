<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankAccountRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: search a bank account by accountNo and BankNo
 * @subpackage Structs
 */
class SearchBankAccountRequest extends AbstractStructBase
{
    /**
     * The iban
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The bic
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bic = null;
    /**
     * The bankNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bankNo = null;
    /**
     * The accountNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The intermediateAccountDebit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $intermediateAccountDebit = null;
    /**
     * The intermediateAccountCredit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $intermediateAccountCredit = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SearchBankAccountRequest
     * @uses SearchBankAccountRequest::setIban()
     * @uses SearchBankAccountRequest::setBic()
     * @uses SearchBankAccountRequest::setBankNo()
     * @uses SearchBankAccountRequest::setAccountNo()
     * @uses SearchBankAccountRequest::setIntermediateAccountDebit()
     * @uses SearchBankAccountRequest::setIntermediateAccountCredit()
     * @uses SearchBankAccountRequest::setUnitName()
     * @param string $iban
     * @param string $bic
     * @param string $bankNo
     * @param string $accountNo
     * @param int $intermediateAccountDebit
     * @param int $intermediateAccountCredit
     * @param string $unitName
     */
    public function __construct(?string $iban = null, ?string $bic = null, ?string $bankNo = null, ?string $accountNo = null, ?int $intermediateAccountDebit = null, ?int $intermediateAccountCredit = null, ?string $unitName = null)
    {
        $this
            ->setIban($iban)
            ->setBic($bic)
            ->setBankNo($bankNo)
            ->setAccountNo($accountNo)
            ->setIntermediateAccountDebit($intermediateAccountDebit)
            ->setIntermediateAccountCredit($intermediateAccountCredit)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchBankAccountRequest
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
     * Get bic value
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }
    /**
     * Set bic value
     * @param string $bic
     * @return \Pggns\MidocoApi\Order\StructType\SearchBankAccountRequest
     */
    public function setBic(?string $bic = null): self
    {
        // validation for constraint: string
        if (!is_null($bic) && !is_string($bic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic, true), gettype($bic)), __LINE__);
        }
        $this->bic = $bic;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchBankAccountRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchBankAccountRequest
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
     * Get intermediateAccountDebit value
     * @return int|null
     */
    public function getIntermediateAccountDebit(): ?int
    {
        return $this->intermediateAccountDebit;
    }
    /**
     * Set intermediateAccountDebit value
     * @param int $intermediateAccountDebit
     * @return \Pggns\MidocoApi\Order\StructType\SearchBankAccountRequest
     */
    public function setIntermediateAccountDebit(?int $intermediateAccountDebit = null): self
    {
        // validation for constraint: int
        if (!is_null($intermediateAccountDebit) && !(is_int($intermediateAccountDebit) || ctype_digit($intermediateAccountDebit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($intermediateAccountDebit, true), gettype($intermediateAccountDebit)), __LINE__);
        }
        $this->intermediateAccountDebit = $intermediateAccountDebit;
        
        return $this;
    }
    /**
     * Get intermediateAccountCredit value
     * @return int|null
     */
    public function getIntermediateAccountCredit(): ?int
    {
        return $this->intermediateAccountCredit;
    }
    /**
     * Set intermediateAccountCredit value
     * @param int $intermediateAccountCredit
     * @return \Pggns\MidocoApi\Order\StructType\SearchBankAccountRequest
     */
    public function setIntermediateAccountCredit(?int $intermediateAccountCredit = null): self
    {
        // validation for constraint: int
        if (!is_null($intermediateAccountCredit) && !(is_int($intermediateAccountCredit) || ctype_digit($intermediateAccountCredit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($intermediateAccountCredit, true), gettype($intermediateAccountCredit)), __LINE__);
        }
        $this->intermediateAccountCredit = $intermediateAccountCredit;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SearchBankAccountRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
