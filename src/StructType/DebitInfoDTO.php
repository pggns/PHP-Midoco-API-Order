<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitInfoDTO StructType
 * @subpackage Structs
 */
class DebitInfoDTO extends AbstractStructBase
{
    /**
     * The accountNo
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
     * The bankTransferOffsetDays
     * @var int|null
     */
    protected ?int $bankTransferOffsetDays = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The debitor
     * @var string|null
     */
    protected ?string $debitor = null;
    /**
     * The entry
     * @var string|null
     */
    protected ?string $entry = null;
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The isProcessed
     * @var bool|null
     */
    protected ?bool $isProcessed = null;
    /**
     * The isRecurring
     * @var bool|null
     */
    protected ?bool $isRecurring = null;
    /**
     * The issueDate
     * @var string|null
     */
    protected ?string $issueDate = null;
    /**
     * The lastBankTransferOffsetDays
     * @var int|null
     */
    protected ?int $lastBankTransferOffsetDays = null;
    /**
     * The lastIssueDate
     * @var string|null
     */
    protected ?string $lastIssueDate = null;
    /**
     * The lastSubmitDate
     * @var string|null
     */
    protected ?string $lastSubmitDate = null;
    /**
     * The mandateId
     * @var int|null
     */
    protected ?int $mandateId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The receiptId
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The submitDate
     * @var string|null
     */
    protected ?string $submitDate = null;
    /**
     * The swiftBicCode
     * @var string|null
     */
    protected ?string $swiftBicCode = null;
    /**
     * Constructor method for DebitInfoDTO
     * @uses DebitInfoDTO::setAccountNo()
     * @uses DebitInfoDTO::setAccountOwner()
     * @uses DebitInfoDTO::setBankCountry()
     * @uses DebitInfoDTO::setBankName()
     * @uses DebitInfoDTO::setBankNo()
     * @uses DebitInfoDTO::setBankTransferOffsetDays()
     * @uses DebitInfoDTO::setCity()
     * @uses DebitInfoDTO::setDebitor()
     * @uses DebitInfoDTO::setEntry()
     * @uses DebitInfoDTO::setIban()
     * @uses DebitInfoDTO::setIsProcessed()
     * @uses DebitInfoDTO::setIsRecurring()
     * @uses DebitInfoDTO::setIssueDate()
     * @uses DebitInfoDTO::setLastBankTransferOffsetDays()
     * @uses DebitInfoDTO::setLastIssueDate()
     * @uses DebitInfoDTO::setLastSubmitDate()
     * @uses DebitInfoDTO::setMandateId()
     * @uses DebitInfoDTO::setOrderId()
     * @uses DebitInfoDTO::setReceiptId()
     * @uses DebitInfoDTO::setStreet()
     * @uses DebitInfoDTO::setSubmitDate()
     * @uses DebitInfoDTO::setSwiftBicCode()
     * @param string $accountNo
     * @param string $accountOwner
     * @param string $bankCountry
     * @param string $bankName
     * @param string $bankNo
     * @param int $bankTransferOffsetDays
     * @param string $city
     * @param string $debitor
     * @param string $entry
     * @param string $iban
     * @param bool $isProcessed
     * @param bool $isRecurring
     * @param string $issueDate
     * @param int $lastBankTransferOffsetDays
     * @param string $lastIssueDate
     * @param string $lastSubmitDate
     * @param int $mandateId
     * @param int $orderId
     * @param int $receiptId
     * @param string $street
     * @param string $submitDate
     * @param string $swiftBicCode
     */
    public function __construct(?string $accountNo = null, ?string $accountOwner = null, ?string $bankCountry = null, ?string $bankName = null, ?string $bankNo = null, ?int $bankTransferOffsetDays = null, ?string $city = null, ?string $debitor = null, ?string $entry = null, ?string $iban = null, ?bool $isProcessed = null, ?bool $isRecurring = null, ?string $issueDate = null, ?int $lastBankTransferOffsetDays = null, ?string $lastIssueDate = null, ?string $lastSubmitDate = null, ?int $mandateId = null, ?int $orderId = null, ?int $receiptId = null, ?string $street = null, ?string $submitDate = null, ?string $swiftBicCode = null)
    {
        $this
            ->setAccountNo($accountNo)
            ->setAccountOwner($accountOwner)
            ->setBankCountry($bankCountry)
            ->setBankName($bankName)
            ->setBankNo($bankNo)
            ->setBankTransferOffsetDays($bankTransferOffsetDays)
            ->setCity($city)
            ->setDebitor($debitor)
            ->setEntry($entry)
            ->setIban($iban)
            ->setIsProcessed($isProcessed)
            ->setIsRecurring($isRecurring)
            ->setIssueDate($issueDate)
            ->setLastBankTransferOffsetDays($lastBankTransferOffsetDays)
            ->setLastIssueDate($lastIssueDate)
            ->setLastSubmitDate($lastSubmitDate)
            ->setMandateId($mandateId)
            ->setOrderId($orderId)
            ->setReceiptId($receiptId)
            ->setStreet($street)
            ->setSubmitDate($submitDate)
            ->setSwiftBicCode($swiftBicCode);
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
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
     * Get bankTransferOffsetDays value
     * @return int|null
     */
    public function getBankTransferOffsetDays(): ?int
    {
        return $this->bankTransferOffsetDays;
    }
    /**
     * Set bankTransferOffsetDays value
     * @param int $bankTransferOffsetDays
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
     */
    public function setBankTransferOffsetDays(?int $bankTransferOffsetDays = null): self
    {
        // validation for constraint: int
        if (!is_null($bankTransferOffsetDays) && !(is_int($bankTransferOffsetDays) || ctype_digit($bankTransferOffsetDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bankTransferOffsetDays, true), gettype($bankTransferOffsetDays)), __LINE__);
        }
        $this->bankTransferOffsetDays = $bankTransferOffsetDays;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
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
     * Get debitor value
     * @return string|null
     */
    public function getDebitor(): ?string
    {
        return $this->debitor;
    }
    /**
     * Set debitor value
     * @param string $debitor
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
     */
    public function setDebitor(?string $debitor = null): self
    {
        // validation for constraint: string
        if (!is_null($debitor) && !is_string($debitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitor, true), gettype($debitor)), __LINE__);
        }
        $this->debitor = $debitor;
        
        return $this;
    }
    /**
     * Get entry value
     * @return string|null
     */
    public function getEntry(): ?string
    {
        return $this->entry;
    }
    /**
     * Set entry value
     * @param string $entry
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
     */
    public function setEntry(?string $entry = null): self
    {
        // validation for constraint: string
        if (!is_null($entry) && !is_string($entry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entry, true), gettype($entry)), __LINE__);
        }
        $this->entry = $entry;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
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
     * Get isRecurring value
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->isRecurring;
    }
    /**
     * Set isRecurring value
     * @param bool $isRecurring
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
     */
    public function setIsRecurring(?bool $isRecurring = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRecurring) && !is_bool($isRecurring)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRecurring, true), gettype($isRecurring)), __LINE__);
        }
        $this->isRecurring = $isRecurring;
        
        return $this;
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
        
        return $this;
    }
    /**
     * Get lastBankTransferOffsetDays value
     * @return int|null
     */
    public function getLastBankTransferOffsetDays(): ?int
    {
        return $this->lastBankTransferOffsetDays;
    }
    /**
     * Set lastBankTransferOffsetDays value
     * @param int $lastBankTransferOffsetDays
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
     */
    public function setLastBankTransferOffsetDays(?int $lastBankTransferOffsetDays = null): self
    {
        // validation for constraint: int
        if (!is_null($lastBankTransferOffsetDays) && !(is_int($lastBankTransferOffsetDays) || ctype_digit($lastBankTransferOffsetDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastBankTransferOffsetDays, true), gettype($lastBankTransferOffsetDays)), __LINE__);
        }
        $this->lastBankTransferOffsetDays = $lastBankTransferOffsetDays;
        
        return $this;
    }
    /**
     * Get lastIssueDate value
     * @return string|null
     */
    public function getLastIssueDate(): ?string
    {
        return $this->lastIssueDate;
    }
    /**
     * Set lastIssueDate value
     * @param string $lastIssueDate
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
     */
    public function setLastIssueDate(?string $lastIssueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastIssueDate) && !is_string($lastIssueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastIssueDate, true), gettype($lastIssueDate)), __LINE__);
        }
        $this->lastIssueDate = $lastIssueDate;
        
        return $this;
    }
    /**
     * Get lastSubmitDate value
     * @return string|null
     */
    public function getLastSubmitDate(): ?string
    {
        return $this->lastSubmitDate;
    }
    /**
     * Set lastSubmitDate value
     * @param string $lastSubmitDate
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
     */
    public function setLastSubmitDate(?string $lastSubmitDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastSubmitDate) && !is_string($lastSubmitDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastSubmitDate, true), gettype($lastSubmitDate)), __LINE__);
        }
        $this->lastSubmitDate = $lastSubmitDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
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
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get receiptId value
     * @return int|null
     */
    public function getReceiptId(): ?int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
     */
    public function setReceiptId(?int $receiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
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
     * Get submitDate value
     * @return string|null
     */
    public function getSubmitDate(): ?string
    {
        return $this->submitDate;
    }
    /**
     * Set submitDate value
     * @param string $submitDate
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
     */
    public function setSubmitDate(?string $submitDate = null): self
    {
        // validation for constraint: string
        if (!is_null($submitDate) && !is_string($submitDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($submitDate, true), gettype($submitDate)), __LINE__);
        }
        $this->submitDate = $submitDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitInfoDTO
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
}
