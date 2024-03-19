<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankStatementEntryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BankStatementEntryDTO extends AbstractStructBase
{
    /**
     * The accountPosition
     * @var int|null
     */
    protected ?int $accountPosition = null;
    /**
     * The bankRef
     * @var string|null
     */
    protected ?string $bankRef = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The commentModifyDate
     * @var string|null
     */
    protected ?string $commentModifyDate = null;
    /**
     * The commentModifyUser
     * @var int|null
     */
    protected ?int $commentModifyUser = null;
    /**
     * The commentText
     * @var string|null
     */
    protected ?string $commentText = null;
    /**
     * The crc32
     * @var string|null
     */
    protected ?string $crc32 = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerRef
     * @var string|null
     */
    protected ?string $customerRef = null;
    /**
     * The debitCreditIndicator
     * @var string|null
     */
    protected ?string $debitCreditIndicator = null;
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
     * The errorParameters
     * @var string|null
     */
    protected ?string $errorParameters = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The exportDate
     * @var string|null
     */
    protected ?string $exportDate = null;
    /**
     * The feeAmount
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The feeCurrency
     * @var string|null
     */
    protected ?string $feeCurrency = null;
    /**
     * The infoAccountNo
     * @var string|null
     */
    protected ?string $infoAccountNo = null;
    /**
     * The infoBankNo
     * @var string|null
     */
    protected ?string $infoBankNo = null;
    /**
     * The infoIban
     * @var string|null
     */
    protected ?string $infoIban = null;
    /**
     * The infoName1
     * @var string|null
     */
    protected ?string $infoName1 = null;
    /**
     * The infoName2
     * @var string|null
     */
    protected ?string $infoName2 = null;
    /**
     * The infoSwiftBicCode
     * @var string|null
     */
    protected ?string $infoSwiftBicCode = null;
    /**
     * The isBooked
     * @var bool|null
     */
    protected ?bool $isBooked = null;
    /**
     * The isChargeBack
     * @var bool|null
     */
    protected ?bool $isChargeBack = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The originalValue
     * @var float|null
     */
    protected ?float $originalValue = null;
    /**
     * The pageNo
     * @var string|null
     */
    protected ?string $pageNo = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The primanotaNo
     * @var string|null
     */
    protected ?string $primanotaNo = null;
    /**
     * The statementId
     * @var int|null
     */
    protected ?int $statementId = null;
    /**
     * The statementNo
     * @var string|null
     */
    protected ?string $statementNo = null;
    /**
     * The value
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * The valutaDate
     * @var string|null
     */
    protected ?string $valutaDate = null;
    /**
     * The workingTimestamp
     * @var string|null
     */
    protected ?string $workingTimestamp = null;
    /**
     * The workingUser
     * @var int|null
     */
    protected ?int $workingUser = null;
    /**
     * Constructor method for BankStatementEntryDTO
     * @uses BankStatementEntryDTO::setAccountPosition()
     * @uses BankStatementEntryDTO::setBankRef()
     * @uses BankStatementEntryDTO::setBookingDate()
     * @uses BankStatementEntryDTO::setCommentModifyDate()
     * @uses BankStatementEntryDTO::setCommentModifyUser()
     * @uses BankStatementEntryDTO::setCommentText()
     * @uses BankStatementEntryDTO::setCrc32()
     * @uses BankStatementEntryDTO::setCurrency()
     * @uses BankStatementEntryDTO::setCustomerRef()
     * @uses BankStatementEntryDTO::setDebitCreditIndicator()
     * @uses BankStatementEntryDTO::setErrorBundle()
     * @uses BankStatementEntryDTO::setErrorCode()
     * @uses BankStatementEntryDTO::setErrorParameters()
     * @uses BankStatementEntryDTO::setExchangeRate()
     * @uses BankStatementEntryDTO::setExportDate()
     * @uses BankStatementEntryDTO::setFeeAmount()
     * @uses BankStatementEntryDTO::setFeeCurrency()
     * @uses BankStatementEntryDTO::setInfoAccountNo()
     * @uses BankStatementEntryDTO::setInfoBankNo()
     * @uses BankStatementEntryDTO::setInfoIban()
     * @uses BankStatementEntryDTO::setInfoName1()
     * @uses BankStatementEntryDTO::setInfoName2()
     * @uses BankStatementEntryDTO::setInfoSwiftBicCode()
     * @uses BankStatementEntryDTO::setIsBooked()
     * @uses BankStatementEntryDTO::setIsChargeBack()
     * @uses BankStatementEntryDTO::setIsExported()
     * @uses BankStatementEntryDTO::setModifyTimestamp()
     * @uses BankStatementEntryDTO::setOriginalCurrency()
     * @uses BankStatementEntryDTO::setOriginalValue()
     * @uses BankStatementEntryDTO::setPageNo()
     * @uses BankStatementEntryDTO::setPosition()
     * @uses BankStatementEntryDTO::setPrimanotaNo()
     * @uses BankStatementEntryDTO::setStatementId()
     * @uses BankStatementEntryDTO::setStatementNo()
     * @uses BankStatementEntryDTO::setValue()
     * @uses BankStatementEntryDTO::setValutaDate()
     * @uses BankStatementEntryDTO::setWorkingTimestamp()
     * @uses BankStatementEntryDTO::setWorkingUser()
     * @param int $accountPosition
     * @param string $bankRef
     * @param string $bookingDate
     * @param string $commentModifyDate
     * @param int $commentModifyUser
     * @param string $commentText
     * @param string $crc32
     * @param string $currency
     * @param string $customerRef
     * @param string $debitCreditIndicator
     * @param string $errorBundle
     * @param string $errorCode
     * @param string $errorParameters
     * @param float $exchangeRate
     * @param string $exportDate
     * @param float $feeAmount
     * @param string $feeCurrency
     * @param string $infoAccountNo
     * @param string $infoBankNo
     * @param string $infoIban
     * @param string $infoName1
     * @param string $infoName2
     * @param string $infoSwiftBicCode
     * @param bool $isBooked
     * @param bool $isChargeBack
     * @param bool $isExported
     * @param string $modifyTimestamp
     * @param string $originalCurrency
     * @param float $originalValue
     * @param string $pageNo
     * @param int $position
     * @param string $primanotaNo
     * @param int $statementId
     * @param string $statementNo
     * @param float $value
     * @param string $valutaDate
     * @param string $workingTimestamp
     * @param int $workingUser
     */
    public function __construct(?int $accountPosition = null, ?string $bankRef = null, ?string $bookingDate = null, ?string $commentModifyDate = null, ?int $commentModifyUser = null, ?string $commentText = null, ?string $crc32 = null, ?string $currency = null, ?string $customerRef = null, ?string $debitCreditIndicator = null, ?string $errorBundle = null, ?string $errorCode = null, ?string $errorParameters = null, ?float $exchangeRate = null, ?string $exportDate = null, ?float $feeAmount = null, ?string $feeCurrency = null, ?string $infoAccountNo = null, ?string $infoBankNo = null, ?string $infoIban = null, ?string $infoName1 = null, ?string $infoName2 = null, ?string $infoSwiftBicCode = null, ?bool $isBooked = null, ?bool $isChargeBack = null, ?bool $isExported = null, ?string $modifyTimestamp = null, ?string $originalCurrency = null, ?float $originalValue = null, ?string $pageNo = null, ?int $position = null, ?string $primanotaNo = null, ?int $statementId = null, ?string $statementNo = null, ?float $value = null, ?string $valutaDate = null, ?string $workingTimestamp = null, ?int $workingUser = null)
    {
        $this
            ->setAccountPosition($accountPosition)
            ->setBankRef($bankRef)
            ->setBookingDate($bookingDate)
            ->setCommentModifyDate($commentModifyDate)
            ->setCommentModifyUser($commentModifyUser)
            ->setCommentText($commentText)
            ->setCrc32($crc32)
            ->setCurrency($currency)
            ->setCustomerRef($customerRef)
            ->setDebitCreditIndicator($debitCreditIndicator)
            ->setErrorBundle($errorBundle)
            ->setErrorCode($errorCode)
            ->setErrorParameters($errorParameters)
            ->setExchangeRate($exchangeRate)
            ->setExportDate($exportDate)
            ->setFeeAmount($feeAmount)
            ->setFeeCurrency($feeCurrency)
            ->setInfoAccountNo($infoAccountNo)
            ->setInfoBankNo($infoBankNo)
            ->setInfoIban($infoIban)
            ->setInfoName1($infoName1)
            ->setInfoName2($infoName2)
            ->setInfoSwiftBicCode($infoSwiftBicCode)
            ->setIsBooked($isBooked)
            ->setIsChargeBack($isChargeBack)
            ->setIsExported($isExported)
            ->setModifyTimestamp($modifyTimestamp)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalValue($originalValue)
            ->setPageNo($pageNo)
            ->setPosition($position)
            ->setPrimanotaNo($primanotaNo)
            ->setStatementId($statementId)
            ->setStatementNo($statementNo)
            ->setValue($value)
            ->setValutaDate($valutaDate)
            ->setWorkingTimestamp($workingTimestamp)
            ->setWorkingUser($workingUser);
    }
    /**
     * Get accountPosition value
     * @return int|null
     */
    public function getAccountPosition(): ?int
    {
        return $this->accountPosition;
    }
    /**
     * Set accountPosition value
     * @param int $accountPosition
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setAccountPosition(?int $accountPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($accountPosition) && !(is_int($accountPosition) || ctype_digit($accountPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountPosition, true), gettype($accountPosition)), __LINE__);
        }
        $this->accountPosition = $accountPosition;
        
        return $this;
    }
    /**
     * Get bankRef value
     * @return string|null
     */
    public function getBankRef(): ?string
    {
        return $this->bankRef;
    }
    /**
     * Set bankRef value
     * @param string $bankRef
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setBankRef(?string $bankRef = null): self
    {
        // validation for constraint: string
        if (!is_null($bankRef) && !is_string($bankRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankRef, true), gettype($bankRef)), __LINE__);
        }
        $this->bankRef = $bankRef;
        
        return $this;
    }
    /**
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get commentModifyDate value
     * @return string|null
     */
    public function getCommentModifyDate(): ?string
    {
        return $this->commentModifyDate;
    }
    /**
     * Set commentModifyDate value
     * @param string $commentModifyDate
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setCommentModifyDate(?string $commentModifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($commentModifyDate) && !is_string($commentModifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentModifyDate, true), gettype($commentModifyDate)), __LINE__);
        }
        $this->commentModifyDate = $commentModifyDate;
        
        return $this;
    }
    /**
     * Get commentModifyUser value
     * @return int|null
     */
    public function getCommentModifyUser(): ?int
    {
        return $this->commentModifyUser;
    }
    /**
     * Set commentModifyUser value
     * @param int $commentModifyUser
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setCommentModifyUser(?int $commentModifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($commentModifyUser) && !(is_int($commentModifyUser) || ctype_digit($commentModifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commentModifyUser, true), gettype($commentModifyUser)), __LINE__);
        }
        $this->commentModifyUser = $commentModifyUser;
        
        return $this;
    }
    /**
     * Get commentText value
     * @return string|null
     */
    public function getCommentText(): ?string
    {
        return $this->commentText;
    }
    /**
     * Set commentText value
     * @param string $commentText
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setCommentText(?string $commentText = null): self
    {
        // validation for constraint: string
        if (!is_null($commentText) && !is_string($commentText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentText, true), gettype($commentText)), __LINE__);
        }
        $this->commentText = $commentText;
        
        return $this;
    }
    /**
     * Get crc32 value
     * @return string|null
     */
    public function getCrc32(): ?string
    {
        return $this->crc32;
    }
    /**
     * Set crc32 value
     * @param string $crc32
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setCrc32(?string $crc32 = null): self
    {
        // validation for constraint: string
        if (!is_null($crc32) && !is_string($crc32)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crc32, true), gettype($crc32)), __LINE__);
        }
        $this->crc32 = $crc32;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
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
     * Get customerRef value
     * @return string|null
     */
    public function getCustomerRef(): ?string
    {
        return $this->customerRef;
    }
    /**
     * Set customerRef value
     * @param string $customerRef
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setCustomerRef(?string $customerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($customerRef) && !is_string($customerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerRef, true), gettype($customerRef)), __LINE__);
        }
        $this->customerRef = $customerRef;
        
        return $this;
    }
    /**
     * Get debitCreditIndicator value
     * @return string|null
     */
    public function getDebitCreditIndicator(): ?string
    {
        return $this->debitCreditIndicator;
    }
    /**
     * Set debitCreditIndicator value
     * @param string $debitCreditIndicator
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setDebitCreditIndicator(?string $debitCreditIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($debitCreditIndicator) && !is_string($debitCreditIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitCreditIndicator, true), gettype($debitCreditIndicator)), __LINE__);
        }
        $this->debitCreditIndicator = $debitCreditIndicator;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
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
     * Get errorParameters value
     * @return string|null
     */
    public function getErrorParameters(): ?string
    {
        return $this->errorParameters;
    }
    /**
     * Set errorParameters value
     * @param string $errorParameters
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setErrorParameters(?string $errorParameters = null): self
    {
        // validation for constraint: string
        if (!is_null($errorParameters) && !is_string($errorParameters)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorParameters, true), gettype($errorParameters)), __LINE__);
        }
        $this->errorParameters = $errorParameters;
        
        return $this;
    }
    /**
     * Get exchangeRate value
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }
    /**
     * Set exchangeRate value
     * @param float $exchangeRate
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setExchangeRate(?float $exchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRate) && !(is_float($exchangeRate) || is_numeric($exchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRate, true), gettype($exchangeRate)), __LINE__);
        }
        $this->exchangeRate = $exchangeRate;
        
        return $this;
    }
    /**
     * Get exportDate value
     * @return string|null
     */
    public function getExportDate(): ?string
    {
        return $this->exportDate;
    }
    /**
     * Set exportDate value
     * @param string $exportDate
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setExportDate(?string $exportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDate) && !is_string($exportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDate, true), gettype($exportDate)), __LINE__);
        }
        $this->exportDate = $exportDate;
        
        return $this;
    }
    /**
     * Get feeAmount value
     * @return float|null
     */
    public function getFeeAmount(): ?float
    {
        return $this->feeAmount;
    }
    /**
     * Set feeAmount value
     * @param float $feeAmount
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setFeeAmount(?float $feeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($feeAmount) && !(is_float($feeAmount) || is_numeric($feeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeAmount, true), gettype($feeAmount)), __LINE__);
        }
        $this->feeAmount = $feeAmount;
        
        return $this;
    }
    /**
     * Get feeCurrency value
     * @return string|null
     */
    public function getFeeCurrency(): ?string
    {
        return $this->feeCurrency;
    }
    /**
     * Set feeCurrency value
     * @param string $feeCurrency
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setFeeCurrency(?string $feeCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCurrency) && !is_string($feeCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCurrency, true), gettype($feeCurrency)), __LINE__);
        }
        $this->feeCurrency = $feeCurrency;
        
        return $this;
    }
    /**
     * Get infoAccountNo value
     * @return string|null
     */
    public function getInfoAccountNo(): ?string
    {
        return $this->infoAccountNo;
    }
    /**
     * Set infoAccountNo value
     * @param string $infoAccountNo
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setInfoAccountNo(?string $infoAccountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($infoAccountNo) && !is_string($infoAccountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoAccountNo, true), gettype($infoAccountNo)), __LINE__);
        }
        $this->infoAccountNo = $infoAccountNo;
        
        return $this;
    }
    /**
     * Get infoBankNo value
     * @return string|null
     */
    public function getInfoBankNo(): ?string
    {
        return $this->infoBankNo;
    }
    /**
     * Set infoBankNo value
     * @param string $infoBankNo
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setInfoBankNo(?string $infoBankNo = null): self
    {
        // validation for constraint: string
        if (!is_null($infoBankNo) && !is_string($infoBankNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoBankNo, true), gettype($infoBankNo)), __LINE__);
        }
        $this->infoBankNo = $infoBankNo;
        
        return $this;
    }
    /**
     * Get infoIban value
     * @return string|null
     */
    public function getInfoIban(): ?string
    {
        return $this->infoIban;
    }
    /**
     * Set infoIban value
     * @param string $infoIban
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setInfoIban(?string $infoIban = null): self
    {
        // validation for constraint: string
        if (!is_null($infoIban) && !is_string($infoIban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoIban, true), gettype($infoIban)), __LINE__);
        }
        $this->infoIban = $infoIban;
        
        return $this;
    }
    /**
     * Get infoName1 value
     * @return string|null
     */
    public function getInfoName1(): ?string
    {
        return $this->infoName1;
    }
    /**
     * Set infoName1 value
     * @param string $infoName1
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setInfoName1(?string $infoName1 = null): self
    {
        // validation for constraint: string
        if (!is_null($infoName1) && !is_string($infoName1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoName1, true), gettype($infoName1)), __LINE__);
        }
        $this->infoName1 = $infoName1;
        
        return $this;
    }
    /**
     * Get infoName2 value
     * @return string|null
     */
    public function getInfoName2(): ?string
    {
        return $this->infoName2;
    }
    /**
     * Set infoName2 value
     * @param string $infoName2
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setInfoName2(?string $infoName2 = null): self
    {
        // validation for constraint: string
        if (!is_null($infoName2) && !is_string($infoName2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoName2, true), gettype($infoName2)), __LINE__);
        }
        $this->infoName2 = $infoName2;
        
        return $this;
    }
    /**
     * Get infoSwiftBicCode value
     * @return string|null
     */
    public function getInfoSwiftBicCode(): ?string
    {
        return $this->infoSwiftBicCode;
    }
    /**
     * Set infoSwiftBicCode value
     * @param string $infoSwiftBicCode
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setInfoSwiftBicCode(?string $infoSwiftBicCode = null): self
    {
        // validation for constraint: string
        if (!is_null($infoSwiftBicCode) && !is_string($infoSwiftBicCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoSwiftBicCode, true), gettype($infoSwiftBicCode)), __LINE__);
        }
        $this->infoSwiftBicCode = $infoSwiftBicCode;
        
        return $this;
    }
    /**
     * Get isBooked value
     * @return bool|null
     */
    public function getIsBooked(): ?bool
    {
        return $this->isBooked;
    }
    /**
     * Set isBooked value
     * @param bool $isBooked
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setIsBooked(?bool $isBooked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBooked) && !is_bool($isBooked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBooked, true), gettype($isBooked)), __LINE__);
        }
        $this->isBooked = $isBooked;
        
        return $this;
    }
    /**
     * Get isChargeBack value
     * @return bool|null
     */
    public function getIsChargeBack(): ?bool
    {
        return $this->isChargeBack;
    }
    /**
     * Set isChargeBack value
     * @param bool $isChargeBack
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setIsChargeBack(?bool $isChargeBack = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isChargeBack) && !is_bool($isChargeBack)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChargeBack, true), gettype($isChargeBack)), __LINE__);
        }
        $this->isChargeBack = $isChargeBack;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
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
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
        return $this;
    }
    /**
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
    }
    /**
     * Get originalValue value
     * @return float|null
     */
    public function getOriginalValue(): ?float
    {
        return $this->originalValue;
    }
    /**
     * Set originalValue value
     * @param float $originalValue
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setOriginalValue(?float $originalValue = null): self
    {
        // validation for constraint: float
        if (!is_null($originalValue) && !(is_float($originalValue) || is_numeric($originalValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalValue, true), gettype($originalValue)), __LINE__);
        }
        $this->originalValue = $originalValue;
        
        return $this;
    }
    /**
     * Get pageNo value
     * @return string|null
     */
    public function getPageNo(): ?string
    {
        return $this->pageNo;
    }
    /**
     * Set pageNo value
     * @param string $pageNo
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setPageNo(?string $pageNo = null): self
    {
        // validation for constraint: string
        if (!is_null($pageNo) && !is_string($pageNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageNo, true), gettype($pageNo)), __LINE__);
        }
        $this->pageNo = $pageNo;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get primanotaNo value
     * @return string|null
     */
    public function getPrimanotaNo(): ?string
    {
        return $this->primanotaNo;
    }
    /**
     * Set primanotaNo value
     * @param string $primanotaNo
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setPrimanotaNo(?string $primanotaNo = null): self
    {
        // validation for constraint: string
        if (!is_null($primanotaNo) && !is_string($primanotaNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($primanotaNo, true), gettype($primanotaNo)), __LINE__);
        }
        $this->primanotaNo = $primanotaNo;
        
        return $this;
    }
    /**
     * Get statementId value
     * @return int|null
     */
    public function getStatementId(): ?int
    {
        return $this->statementId;
    }
    /**
     * Set statementId value
     * @param int $statementId
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setStatementId(?int $statementId = null): self
    {
        // validation for constraint: int
        if (!is_null($statementId) && !(is_int($statementId) || ctype_digit($statementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statementId, true), gettype($statementId)), __LINE__);
        }
        $this->statementId = $statementId;
        
        return $this;
    }
    /**
     * Get statementNo value
     * @return string|null
     */
    public function getStatementNo(): ?string
    {
        return $this->statementNo;
    }
    /**
     * Set statementNo value
     * @param string $statementNo
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setStatementNo(?string $statementNo = null): self
    {
        // validation for constraint: string
        if (!is_null($statementNo) && !is_string($statementNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statementNo, true), gettype($statementNo)), __LINE__);
        }
        $this->statementNo = $statementNo;
        
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get valutaDate value
     * @return string|null
     */
    public function getValutaDate(): ?string
    {
        return $this->valutaDate;
    }
    /**
     * Set valutaDate value
     * @param string $valutaDate
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setValutaDate(?string $valutaDate = null): self
    {
        // validation for constraint: string
        if (!is_null($valutaDate) && !is_string($valutaDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valutaDate, true), gettype($valutaDate)), __LINE__);
        }
        $this->valutaDate = $valutaDate;
        
        return $this;
    }
    /**
     * Get workingTimestamp value
     * @return string|null
     */
    public function getWorkingTimestamp(): ?string
    {
        return $this->workingTimestamp;
    }
    /**
     * Set workingTimestamp value
     * @param string $workingTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setWorkingTimestamp(?string $workingTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($workingTimestamp) && !is_string($workingTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workingTimestamp, true), gettype($workingTimestamp)), __LINE__);
        }
        $this->workingTimestamp = $workingTimestamp;
        
        return $this;
    }
    /**
     * Get workingUser value
     * @return int|null
     */
    public function getWorkingUser(): ?int
    {
        return $this->workingUser;
    }
    /**
     * Set workingUser value
     * @param int $workingUser
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementEntryDTO
     */
    public function setWorkingUser(?int $workingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($workingUser) && !(is_int($workingUser) || ctype_digit($workingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workingUser, true), gettype($workingUser)), __LINE__);
        }
        $this->workingUser = $workingUser;
        
        return $this;
    }
}
