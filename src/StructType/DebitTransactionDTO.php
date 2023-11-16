<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitTransactionDTO StructType
 * @subpackage Structs
 */
class DebitTransactionDTO extends AbstractStructBase
{
    /**
     * The accountOwner
     * @var string|null
     */
    protected ?string $accountOwner = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The bankAccountId
     * @var int|null
     */
    protected ?int $bankAccountId = null;
    /**
     * The bankAccountNo
     * @var string|null
     */
    protected ?string $bankAccountNo = null;
    /**
     * The bankCountry
     * @var string|null
     */
    protected ?string $bankCountry = null;
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
     * The captureDate
     * @var string|null
     */
    protected ?string $captureDate = null;
    /**
     * The captureDone
     * @var bool|null
     */
    protected ?bool $captureDone = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The swiftBicCode
     * @var string|null
     */
    protected ?string $swiftBicCode = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * The transactionRefId
     * @var string|null
     */
    protected ?string $transactionRefId = null;
    /**
     * Constructor method for DebitTransactionDTO
     * @uses DebitTransactionDTO::setAccountOwner()
     * @uses DebitTransactionDTO::setAmount()
     * @uses DebitTransactionDTO::setBankAccountId()
     * @uses DebitTransactionDTO::setBankAccountNo()
     * @uses DebitTransactionDTO::setBankCountry()
     * @uses DebitTransactionDTO::setBankName()
     * @uses DebitTransactionDTO::setBankNo()
     * @uses DebitTransactionDTO::setCaptureDate()
     * @uses DebitTransactionDTO::setCaptureDone()
     * @uses DebitTransactionDTO::setCity()
     * @uses DebitTransactionDTO::setCurrency()
     * @uses DebitTransactionDTO::setDocumentId()
     * @uses DebitTransactionDTO::setIban()
     * @uses DebitTransactionDTO::setStreet()
     * @uses DebitTransactionDTO::setSwiftBicCode()
     * @uses DebitTransactionDTO::setTransactionId()
     * @uses DebitTransactionDTO::setTransactionRefId()
     * @param string $accountOwner
     * @param float $amount
     * @param int $bankAccountId
     * @param string $bankAccountNo
     * @param string $bankCountry
     * @param string $bankName
     * @param string $bankNo
     * @param string $captureDate
     * @param bool $captureDone
     * @param string $city
     * @param string $currency
     * @param int $documentId
     * @param string $iban
     * @param string $street
     * @param string $swiftBicCode
     * @param int $transactionId
     * @param string $transactionRefId
     */
    public function __construct(?string $accountOwner = null, ?float $amount = null, ?int $bankAccountId = null, ?string $bankAccountNo = null, ?string $bankCountry = null, ?string $bankName = null, ?string $bankNo = null, ?string $captureDate = null, ?bool $captureDone = null, ?string $city = null, ?string $currency = null, ?int $documentId = null, ?string $iban = null, ?string $street = null, ?string $swiftBicCode = null, ?int $transactionId = null, ?string $transactionRefId = null)
    {
        $this
            ->setAccountOwner($accountOwner)
            ->setAmount($amount)
            ->setBankAccountId($bankAccountId)
            ->setBankAccountNo($bankAccountNo)
            ->setBankCountry($bankCountry)
            ->setBankName($bankName)
            ->setBankNo($bankNo)
            ->setCaptureDate($captureDate)
            ->setCaptureDone($captureDone)
            ->setCity($city)
            ->setCurrency($currency)
            ->setDocumentId($documentId)
            ->setIban($iban)
            ->setStreet($street)
            ->setSwiftBicCode($swiftBicCode)
            ->setTransactionId($transactionId)
            ->setTransactionRefId($transactionRefId);
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
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
     * Get captureDate value
     * @return string|null
     */
    public function getCaptureDate(): ?string
    {
        return $this->captureDate;
    }
    /**
     * Set captureDate value
     * @param string $captureDate
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
     */
    public function setCaptureDate(?string $captureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($captureDate) && !is_string($captureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($captureDate, true), gettype($captureDate)), __LINE__);
        }
        $this->captureDate = $captureDate;
        
        return $this;
    }
    /**
     * Get captureDone value
     * @return bool|null
     */
    public function getCaptureDone(): ?bool
    {
        return $this->captureDone;
    }
    /**
     * Set captureDone value
     * @param bool $captureDone
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
     */
    public function setCaptureDone(?bool $captureDone = null): self
    {
        // validation for constraint: boolean
        if (!is_null($captureDone) && !is_bool($captureDone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($captureDone, true), gettype($captureDone)), __LINE__);
        }
        $this->captureDone = $captureDone;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
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
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
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
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
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
     * Get transactionId value
     * @return int|null
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param int $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
     */
    public function setTransactionId(?int $transactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionId) && !(is_int($transactionId) || ctype_digit($transactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get transactionRefId value
     * @return string|null
     */
    public function getTransactionRefId(): ?string
    {
        return $this->transactionRefId;
    }
    /**
     * Set transactionRefId value
     * @param string $transactionRefId
     * @return \Pggns\MidocoApi\Order\StructType\DebitTransactionDTO
     */
    public function setTransactionRefId(?string $transactionRefId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionRefId) && !is_string($transactionRefId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionRefId, true), gettype($transactionRefId)), __LINE__);
        }
        $this->transactionRefId = $transactionRefId;
        
        return $this;
    }
}
