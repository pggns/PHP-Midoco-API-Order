<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DtausTransactionDTO StructType
 * @subpackage Structs
 */
class DtausTransactionDTO extends AbstractStructBase
{
    /**
     * The accountOwner
     * @var string|null
     */
    protected ?string $accountOwner = null;
    /**
     * The additonalKey
     * @var string|null
     */
    protected ?string $additonalKey = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The approvalCode
     * @var string|null
     */
    protected ?string $approvalCode = null;
    /**
     * The bankTransferCollective
     * @var bool|null
     */
    protected ?bool $bankTransferCollective = null;
    /**
     * The contraAccountBlz
     * @var string|null
     */
    protected ?string $contraAccountBlz = null;
    /**
     * The contraAccountNo
     * @var string|null
     */
    protected ?string $contraAccountNo = null;
    /**
     * The contraAccountOwner
     * @var string|null
     */
    protected ?string $contraAccountOwner = null;
    /**
     * The contraAccountOwnerCity
     * @var string|null
     */
    protected ?string $contraAccountOwnerCity = null;
    /**
     * The contraAccountOwnerCountry
     * @var string|null
     */
    protected ?string $contraAccountOwnerCountry = null;
    /**
     * The contraAccountOwnerStreet
     * @var string|null
     */
    protected ?string $contraAccountOwnerStreet = null;
    /**
     * The contraBankCity
     * @var string|null
     */
    protected ?string $contraBankCity = null;
    /**
     * The contraBankCountry
     * @var string|null
     */
    protected ?string $contraBankCountry = null;
    /**
     * The contraBankName
     * @var string|null
     */
    protected ?string $contraBankName = null;
    /**
     * The contraBankStreet
     * @var string|null
     */
    protected ?string $contraBankStreet = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The endToEndId
     * @var string|null
     */
    protected ?string $endToEndId = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorDescriptionCode
     * @var string|null
     */
    protected ?string $errorDescriptionCode = null;
    /**
     * The executionDate
     * @var string|null
     */
    protected ?string $executionDate = null;
    /**
     * The extReference
     * @var string|null
     */
    protected ?string $extReference = null;
    /**
     * The fileid
     * @var int|null
     */
    protected ?int $fileid = null;
    /**
     * The internalCustomerId
     * @var int|null
     */
    protected ?int $internalCustomerId = null;
    /**
     * The invoiceNo
     * @var int|null
     */
    protected ?int $invoiceNo = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The isManual
     * @var bool|null
     */
    protected ?bool $isManual = null;
    /**
     * The isProcessed
     * @var bool|null
     */
    protected ?bool $isProcessed = null;
    /**
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
    /**
     * The key
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * The mandateId
     * @var int|null
     */
    protected ?int $mandateId = null;
    /**
     * The refOrderId
     * @var int|null
     */
    protected ?int $refOrderId = null;
    /**
     * The transactionPosition
     * @var int|null
     */
    protected ?int $transactionPosition = null;
    /**
     * Constructor method for DtausTransactionDTO
     * @uses DtausTransactionDTO::setAccountOwner()
     * @uses DtausTransactionDTO::setAdditonalKey()
     * @uses DtausTransactionDTO::setAmount()
     * @uses DtausTransactionDTO::setApprovalCode()
     * @uses DtausTransactionDTO::setBankTransferCollective()
     * @uses DtausTransactionDTO::setContraAccountBlz()
     * @uses DtausTransactionDTO::setContraAccountNo()
     * @uses DtausTransactionDTO::setContraAccountOwner()
     * @uses DtausTransactionDTO::setContraAccountOwnerCity()
     * @uses DtausTransactionDTO::setContraAccountOwnerCountry()
     * @uses DtausTransactionDTO::setContraAccountOwnerStreet()
     * @uses DtausTransactionDTO::setContraBankCity()
     * @uses DtausTransactionDTO::setContraBankCountry()
     * @uses DtausTransactionDTO::setContraBankName()
     * @uses DtausTransactionDTO::setContraBankStreet()
     * @uses DtausTransactionDTO::setCurrency()
     * @uses DtausTransactionDTO::setEndToEndId()
     * @uses DtausTransactionDTO::setErrorBundle()
     * @uses DtausTransactionDTO::setErrorCode()
     * @uses DtausTransactionDTO::setErrorDescriptionCode()
     * @uses DtausTransactionDTO::setExecutionDate()
     * @uses DtausTransactionDTO::setExtReference()
     * @uses DtausTransactionDTO::setFileid()
     * @uses DtausTransactionDTO::setInternalCustomerId()
     * @uses DtausTransactionDTO::setInvoiceNo()
     * @uses DtausTransactionDTO::setIsExported()
     * @uses DtausTransactionDTO::setIsManual()
     * @uses DtausTransactionDTO::setIsProcessed()
     * @uses DtausTransactionDTO::setJournalId()
     * @uses DtausTransactionDTO::setKey()
     * @uses DtausTransactionDTO::setMandateId()
     * @uses DtausTransactionDTO::setRefOrderId()
     * @uses DtausTransactionDTO::setTransactionPosition()
     * @param string $accountOwner
     * @param string $additonalKey
     * @param float $amount
     * @param string $approvalCode
     * @param bool $bankTransferCollective
     * @param string $contraAccountBlz
     * @param string $contraAccountNo
     * @param string $contraAccountOwner
     * @param string $contraAccountOwnerCity
     * @param string $contraAccountOwnerCountry
     * @param string $contraAccountOwnerStreet
     * @param string $contraBankCity
     * @param string $contraBankCountry
     * @param string $contraBankName
     * @param string $contraBankStreet
     * @param string $currency
     * @param string $endToEndId
     * @param string $errorBundle
     * @param string $errorCode
     * @param string $errorDescriptionCode
     * @param string $executionDate
     * @param string $extReference
     * @param int $fileid
     * @param int $internalCustomerId
     * @param int $invoiceNo
     * @param bool $isExported
     * @param bool $isManual
     * @param bool $isProcessed
     * @param int $journalId
     * @param string $key
     * @param int $mandateId
     * @param int $refOrderId
     * @param int $transactionPosition
     */
    public function __construct(?string $accountOwner = null, ?string $additonalKey = null, ?float $amount = null, ?string $approvalCode = null, ?bool $bankTransferCollective = null, ?string $contraAccountBlz = null, ?string $contraAccountNo = null, ?string $contraAccountOwner = null, ?string $contraAccountOwnerCity = null, ?string $contraAccountOwnerCountry = null, ?string $contraAccountOwnerStreet = null, ?string $contraBankCity = null, ?string $contraBankCountry = null, ?string $contraBankName = null, ?string $contraBankStreet = null, ?string $currency = null, ?string $endToEndId = null, ?string $errorBundle = null, ?string $errorCode = null, ?string $errorDescriptionCode = null, ?string $executionDate = null, ?string $extReference = null, ?int $fileid = null, ?int $internalCustomerId = null, ?int $invoiceNo = null, ?bool $isExported = null, ?bool $isManual = null, ?bool $isProcessed = null, ?int $journalId = null, ?string $key = null, ?int $mandateId = null, ?int $refOrderId = null, ?int $transactionPosition = null)
    {
        $this
            ->setAccountOwner($accountOwner)
            ->setAdditonalKey($additonalKey)
            ->setAmount($amount)
            ->setApprovalCode($approvalCode)
            ->setBankTransferCollective($bankTransferCollective)
            ->setContraAccountBlz($contraAccountBlz)
            ->setContraAccountNo($contraAccountNo)
            ->setContraAccountOwner($contraAccountOwner)
            ->setContraAccountOwnerCity($contraAccountOwnerCity)
            ->setContraAccountOwnerCountry($contraAccountOwnerCountry)
            ->setContraAccountOwnerStreet($contraAccountOwnerStreet)
            ->setContraBankCity($contraBankCity)
            ->setContraBankCountry($contraBankCountry)
            ->setContraBankName($contraBankName)
            ->setContraBankStreet($contraBankStreet)
            ->setCurrency($currency)
            ->setEndToEndId($endToEndId)
            ->setErrorBundle($errorBundle)
            ->setErrorCode($errorCode)
            ->setErrorDescriptionCode($errorDescriptionCode)
            ->setExecutionDate($executionDate)
            ->setExtReference($extReference)
            ->setFileid($fileid)
            ->setInternalCustomerId($internalCustomerId)
            ->setInvoiceNo($invoiceNo)
            ->setIsExported($isExported)
            ->setIsManual($isManual)
            ->setIsProcessed($isProcessed)
            ->setJournalId($journalId)
            ->setKey($key)
            ->setMandateId($mandateId)
            ->setRefOrderId($refOrderId)
            ->setTransactionPosition($transactionPosition);
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
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
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
     * Get additonalKey value
     * @return string|null
     */
    public function getAdditonalKey(): ?string
    {
        return $this->additonalKey;
    }
    /**
     * Set additonalKey value
     * @param string $additonalKey
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setAdditonalKey(?string $additonalKey = null): self
    {
        // validation for constraint: string
        if (!is_null($additonalKey) && !is_string($additonalKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additonalKey, true), gettype($additonalKey)), __LINE__);
        }
        $this->additonalKey = $additonalKey;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get approvalCode value
     * @return string|null
     */
    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }
    /**
     * Set approvalCode value
     * @param string $approvalCode
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setApprovalCode(?string $approvalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($approvalCode) && !is_string($approvalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approvalCode, true), gettype($approvalCode)), __LINE__);
        }
        $this->approvalCode = $approvalCode;
        
        return $this;
    }
    /**
     * Get bankTransferCollective value
     * @return bool|null
     */
    public function getBankTransferCollective(): ?bool
    {
        return $this->bankTransferCollective;
    }
    /**
     * Set bankTransferCollective value
     * @param bool $bankTransferCollective
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setBankTransferCollective(?bool $bankTransferCollective = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bankTransferCollective) && !is_bool($bankTransferCollective)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bankTransferCollective, true), gettype($bankTransferCollective)), __LINE__);
        }
        $this->bankTransferCollective = $bankTransferCollective;
        
        return $this;
    }
    /**
     * Get contraAccountBlz value
     * @return string|null
     */
    public function getContraAccountBlz(): ?string
    {
        return $this->contraAccountBlz;
    }
    /**
     * Set contraAccountBlz value
     * @param string $contraAccountBlz
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setContraAccountBlz(?string $contraAccountBlz = null): self
    {
        // validation for constraint: string
        if (!is_null($contraAccountBlz) && !is_string($contraAccountBlz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraAccountBlz, true), gettype($contraAccountBlz)), __LINE__);
        }
        $this->contraAccountBlz = $contraAccountBlz;
        
        return $this;
    }
    /**
     * Get contraAccountNo value
     * @return string|null
     */
    public function getContraAccountNo(): ?string
    {
        return $this->contraAccountNo;
    }
    /**
     * Set contraAccountNo value
     * @param string $contraAccountNo
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setContraAccountNo(?string $contraAccountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($contraAccountNo) && !is_string($contraAccountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraAccountNo, true), gettype($contraAccountNo)), __LINE__);
        }
        $this->contraAccountNo = $contraAccountNo;
        
        return $this;
    }
    /**
     * Get contraAccountOwner value
     * @return string|null
     */
    public function getContraAccountOwner(): ?string
    {
        return $this->contraAccountOwner;
    }
    /**
     * Set contraAccountOwner value
     * @param string $contraAccountOwner
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setContraAccountOwner(?string $contraAccountOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($contraAccountOwner) && !is_string($contraAccountOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraAccountOwner, true), gettype($contraAccountOwner)), __LINE__);
        }
        $this->contraAccountOwner = $contraAccountOwner;
        
        return $this;
    }
    /**
     * Get contraAccountOwnerCity value
     * @return string|null
     */
    public function getContraAccountOwnerCity(): ?string
    {
        return $this->contraAccountOwnerCity;
    }
    /**
     * Set contraAccountOwnerCity value
     * @param string $contraAccountOwnerCity
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setContraAccountOwnerCity(?string $contraAccountOwnerCity = null): self
    {
        // validation for constraint: string
        if (!is_null($contraAccountOwnerCity) && !is_string($contraAccountOwnerCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraAccountOwnerCity, true), gettype($contraAccountOwnerCity)), __LINE__);
        }
        $this->contraAccountOwnerCity = $contraAccountOwnerCity;
        
        return $this;
    }
    /**
     * Get contraAccountOwnerCountry value
     * @return string|null
     */
    public function getContraAccountOwnerCountry(): ?string
    {
        return $this->contraAccountOwnerCountry;
    }
    /**
     * Set contraAccountOwnerCountry value
     * @param string $contraAccountOwnerCountry
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setContraAccountOwnerCountry(?string $contraAccountOwnerCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($contraAccountOwnerCountry) && !is_string($contraAccountOwnerCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraAccountOwnerCountry, true), gettype($contraAccountOwnerCountry)), __LINE__);
        }
        $this->contraAccountOwnerCountry = $contraAccountOwnerCountry;
        
        return $this;
    }
    /**
     * Get contraAccountOwnerStreet value
     * @return string|null
     */
    public function getContraAccountOwnerStreet(): ?string
    {
        return $this->contraAccountOwnerStreet;
    }
    /**
     * Set contraAccountOwnerStreet value
     * @param string $contraAccountOwnerStreet
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setContraAccountOwnerStreet(?string $contraAccountOwnerStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($contraAccountOwnerStreet) && !is_string($contraAccountOwnerStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraAccountOwnerStreet, true), gettype($contraAccountOwnerStreet)), __LINE__);
        }
        $this->contraAccountOwnerStreet = $contraAccountOwnerStreet;
        
        return $this;
    }
    /**
     * Get contraBankCity value
     * @return string|null
     */
    public function getContraBankCity(): ?string
    {
        return $this->contraBankCity;
    }
    /**
     * Set contraBankCity value
     * @param string $contraBankCity
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setContraBankCity(?string $contraBankCity = null): self
    {
        // validation for constraint: string
        if (!is_null($contraBankCity) && !is_string($contraBankCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraBankCity, true), gettype($contraBankCity)), __LINE__);
        }
        $this->contraBankCity = $contraBankCity;
        
        return $this;
    }
    /**
     * Get contraBankCountry value
     * @return string|null
     */
    public function getContraBankCountry(): ?string
    {
        return $this->contraBankCountry;
    }
    /**
     * Set contraBankCountry value
     * @param string $contraBankCountry
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setContraBankCountry(?string $contraBankCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($contraBankCountry) && !is_string($contraBankCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraBankCountry, true), gettype($contraBankCountry)), __LINE__);
        }
        $this->contraBankCountry = $contraBankCountry;
        
        return $this;
    }
    /**
     * Get contraBankName value
     * @return string|null
     */
    public function getContraBankName(): ?string
    {
        return $this->contraBankName;
    }
    /**
     * Set contraBankName value
     * @param string $contraBankName
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setContraBankName(?string $contraBankName = null): self
    {
        // validation for constraint: string
        if (!is_null($contraBankName) && !is_string($contraBankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraBankName, true), gettype($contraBankName)), __LINE__);
        }
        $this->contraBankName = $contraBankName;
        
        return $this;
    }
    /**
     * Get contraBankStreet value
     * @return string|null
     */
    public function getContraBankStreet(): ?string
    {
        return $this->contraBankStreet;
    }
    /**
     * Set contraBankStreet value
     * @param string $contraBankStreet
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setContraBankStreet(?string $contraBankStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($contraBankStreet) && !is_string($contraBankStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraBankStreet, true), gettype($contraBankStreet)), __LINE__);
        }
        $this->contraBankStreet = $contraBankStreet;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get endToEndId value
     * @return string|null
     */
    public function getEndToEndId(): ?string
    {
        return $this->endToEndId;
    }
    /**
     * Set endToEndId value
     * @param string $endToEndId
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setEndToEndId(?string $endToEndId = null): self
    {
        // validation for constraint: string
        if (!is_null($endToEndId) && !is_string($endToEndId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endToEndId, true), gettype($endToEndId)), __LINE__);
        }
        $this->endToEndId = $endToEndId;
        
        return $this;
    }
    /**
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorDescriptionCode value
     * @return string|null
     */
    public function getErrorDescriptionCode(): ?string
    {
        return $this->errorDescriptionCode;
    }
    /**
     * Set errorDescriptionCode value
     * @param string $errorDescriptionCode
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setErrorDescriptionCode(?string $errorDescriptionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDescriptionCode) && !is_string($errorDescriptionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescriptionCode, true), gettype($errorDescriptionCode)), __LINE__);
        }
        $this->errorDescriptionCode = $errorDescriptionCode;
        
        return $this;
    }
    /**
     * Get executionDate value
     * @return string|null
     */
    public function getExecutionDate(): ?string
    {
        return $this->executionDate;
    }
    /**
     * Set executionDate value
     * @param string $executionDate
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setExecutionDate(?string $executionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($executionDate) && !is_string($executionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($executionDate, true), gettype($executionDate)), __LINE__);
        }
        $this->executionDate = $executionDate;
        
        return $this;
    }
    /**
     * Get extReference value
     * @return string|null
     */
    public function getExtReference(): ?string
    {
        return $this->extReference;
    }
    /**
     * Set extReference value
     * @param string $extReference
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setExtReference(?string $extReference = null): self
    {
        // validation for constraint: string
        if (!is_null($extReference) && !is_string($extReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extReference, true), gettype($extReference)), __LINE__);
        }
        $this->extReference = $extReference;
        
        return $this;
    }
    /**
     * Get fileid value
     * @return int|null
     */
    public function getFileid(): ?int
    {
        return $this->fileid;
    }
    /**
     * Set fileid value
     * @param int $fileid
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setFileid(?int $fileid = null): self
    {
        // validation for constraint: int
        if (!is_null($fileid) && !(is_int($fileid) || ctype_digit($fileid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileid, true), gettype($fileid)), __LINE__);
        }
        $this->fileid = $fileid;
        
        return $this;
    }
    /**
     * Get internalCustomerId value
     * @return int|null
     */
    public function getInternalCustomerId(): ?int
    {
        return $this->internalCustomerId;
    }
    /**
     * Set internalCustomerId value
     * @param int $internalCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setInternalCustomerId(?int $internalCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($internalCustomerId) && !(is_int($internalCustomerId) || ctype_digit($internalCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalCustomerId, true), gettype($internalCustomerId)), __LINE__);
        }
        $this->internalCustomerId = $internalCustomerId;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return int|null
     */
    public function getInvoiceNo(): ?int
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param int $invoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setInvoiceNo(?int $invoiceNo = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceNo) && !(is_int($invoiceNo) || ctype_digit($invoiceNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get isManual value
     * @return bool|null
     */
    public function getIsManual(): ?bool
    {
        return $this->isManual;
    }
    /**
     * Set isManual value
     * @param bool $isManual
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setIsManual(?bool $isManual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManual) && !is_bool($isManual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManual, true), gettype($isManual)), __LINE__);
        }
        $this->isManual = $isManual;
        
        return $this;
    }
    /**
     * Get isProcessed value
     * @return bool|null
     */
    public function getIsProcessed(): ?bool
    {
        return $this->isProcessed;
    }
    /**
     * Set isProcessed value
     * @param bool $isProcessed
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setIsProcessed(?bool $isProcessed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProcessed) && !is_bool($isProcessed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProcessed, true), gettype($isProcessed)), __LINE__);
        }
        $this->isProcessed = $isProcessed;
        
        return $this;
    }
    /**
     * Get journalId value
     * @return int|null
     */
    public function getJournalId(): ?int
    {
        return $this->journalId;
    }
    /**
     * Set journalId value
     * @param int $journalId
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setJournalId(?int $journalId = null): self
    {
        // validation for constraint: int
        if (!is_null($journalId) && !(is_int($journalId) || ctype_digit($journalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalId, true), gettype($journalId)), __LINE__);
        }
        $this->journalId = $journalId;
        
        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get mandateId value
     * @return int|null
     */
    public function getMandateId(): ?int
    {
        return $this->mandateId;
    }
    /**
     * Set mandateId value
     * @param int $mandateId
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setMandateId(?int $mandateId = null): self
    {
        // validation for constraint: int
        if (!is_null($mandateId) && !(is_int($mandateId) || ctype_digit($mandateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandateId, true), gettype($mandateId)), __LINE__);
        }
        $this->mandateId = $mandateId;
        
        return $this;
    }
    /**
     * Get refOrderId value
     * @return int|null
     */
    public function getRefOrderId(): ?int
    {
        return $this->refOrderId;
    }
    /**
     * Set refOrderId value
     * @param int $refOrderId
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setRefOrderId(?int $refOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($refOrderId) && !(is_int($refOrderId) || ctype_digit($refOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refOrderId, true), gettype($refOrderId)), __LINE__);
        }
        $this->refOrderId = $refOrderId;
        
        return $this;
    }
    /**
     * Get transactionPosition value
     * @return int|null
     */
    public function getTransactionPosition(): ?int
    {
        return $this->transactionPosition;
    }
    /**
     * Set transactionPosition value
     * @param int $transactionPosition
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionDTO
     */
    public function setTransactionPosition(?int $transactionPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionPosition) && !(is_int($transactionPosition) || ctype_digit($transactionPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionPosition, true), gettype($transactionPosition)), __LINE__);
        }
        $this->transactionPosition = $transactionPosition;
        
        return $this;
    }
}
