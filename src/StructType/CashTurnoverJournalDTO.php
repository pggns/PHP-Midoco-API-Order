<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashTurnoverJournalDTO StructType
 * @subpackage Structs
 */
class CashTurnoverJournalDTO extends AbstractStructBase
{
    /**
     * The algorithmPrefix
     * @var string|null
     */
    protected ?string $algorithmPrefix = null;
    /**
     * The amount0Vat
     * @var float|null
     */
    protected ?float $amount0Vat = null;
    /**
     * The amountFullVat
     * @var float|null
     */
    protected ?float $amountFullVat = null;
    /**
     * The amountIntermediate1Vat
     * @var float|null
     */
    protected ?float $amountIntermediate1Vat = null;
    /**
     * The amountIntermediate2Vat
     * @var float|null
     */
    protected ?float $amountIntermediate2Vat = null;
    /**
     * The amountSpecialVat
     * @var float|null
     */
    protected ?float $amountSpecialVat = null;
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The certificateId
     * @var string|null
     */
    protected ?string $certificateId = null;
    /**
     * The clientId
     * @var string|null
     */
    protected ?string $clientId = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The encryptedReceiptSignature
     * @var string|null
     */
    protected ?string $encryptedReceiptSignature = null;
    /**
     * The encryptedTurnover
     * @var string|null
     */
    protected ?string $encryptedTurnover = null;
    /**
     * The encryptionKeyRef
     * @var string|null
     */
    protected ?string $encryptionKeyRef = null;
    /**
     * The endTime
     * @var string|null
     */
    protected ?string $endTime = null;
    /**
     * The exportDate
     * @var string|null
     */
    protected ?string $exportDate = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The failureReasonCode
     * @var string|null
     */
    protected ?string $failureReasonCode = null;
    /**
     * The internalType
     * @var string|null
     */
    protected ?string $internalType = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The lastTurnoverId
     * @var int|null
     */
    protected ?int $lastTurnoverId = null;
    /**
     * The processType
     * @var string|null
     */
    protected ?string $processType = null;
    /**
     * The receiptCounter
     * @var int|null
     */
    protected ?int $receiptCounter = null;
    /**
     * The receiptId
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * The receiptIdentifier
     * @var string|null
     */
    protected ?string $receiptIdentifier = null;
    /**
     * The receiptSignature
     * @var string|null
     */
    protected ?string $receiptSignature = null;
    /**
     * The receiptTimestamp
     * @var string|null
     */
    protected ?string $receiptTimestamp = null;
    /**
     * The signatureFailed
     * @var bool|null
     */
    protected ?bool $signatureFailed = null;
    /**
     * The startTime
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The transactionNo
     * @var int|null
     */
    protected ?int $transactionNo = null;
    /**
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * The turnover
     * @var float|null
     */
    protected ?float $turnover = null;
    /**
     * The turnoverId
     * @var int|null
     */
    protected ?int $turnoverId = null;
    /**
     * Constructor method for CashTurnoverJournalDTO
     * @uses CashTurnoverJournalDTO::setAlgorithmPrefix()
     * @uses CashTurnoverJournalDTO::setAmount0Vat()
     * @uses CashTurnoverJournalDTO::setAmountFullVat()
     * @uses CashTurnoverJournalDTO::setAmountIntermediate1Vat()
     * @uses CashTurnoverJournalDTO::setAmountIntermediate2Vat()
     * @uses CashTurnoverJournalDTO::setAmountSpecialVat()
     * @uses CashTurnoverJournalDTO::setCashBookId()
     * @uses CashTurnoverJournalDTO::setCertificateId()
     * @uses CashTurnoverJournalDTO::setClientId()
     * @uses CashTurnoverJournalDTO::setDocumentId()
     * @uses CashTurnoverJournalDTO::setEncryptedReceiptSignature()
     * @uses CashTurnoverJournalDTO::setEncryptedTurnover()
     * @uses CashTurnoverJournalDTO::setEncryptionKeyRef()
     * @uses CashTurnoverJournalDTO::setEndTime()
     * @uses CashTurnoverJournalDTO::setExportDate()
     * @uses CashTurnoverJournalDTO::setExportId()
     * @uses CashTurnoverJournalDTO::setFailureReasonCode()
     * @uses CashTurnoverJournalDTO::setInternalType()
     * @uses CashTurnoverJournalDTO::setIsExported()
     * @uses CashTurnoverJournalDTO::setLastTurnoverId()
     * @uses CashTurnoverJournalDTO::setProcessType()
     * @uses CashTurnoverJournalDTO::setReceiptCounter()
     * @uses CashTurnoverJournalDTO::setReceiptId()
     * @uses CashTurnoverJournalDTO::setReceiptIdentifier()
     * @uses CashTurnoverJournalDTO::setReceiptSignature()
     * @uses CashTurnoverJournalDTO::setReceiptTimestamp()
     * @uses CashTurnoverJournalDTO::setSignatureFailed()
     * @uses CashTurnoverJournalDTO::setStartTime()
     * @uses CashTurnoverJournalDTO::setStatus()
     * @uses CashTurnoverJournalDTO::setTransactionNo()
     * @uses CashTurnoverJournalDTO::setTssId()
     * @uses CashTurnoverJournalDTO::setTurnover()
     * @uses CashTurnoverJournalDTO::setTurnoverId()
     * @param string $algorithmPrefix
     * @param float $amount0Vat
     * @param float $amountFullVat
     * @param float $amountIntermediate1Vat
     * @param float $amountIntermediate2Vat
     * @param float $amountSpecialVat
     * @param int $cashBookId
     * @param string $certificateId
     * @param string $clientId
     * @param int $documentId
     * @param string $encryptedReceiptSignature
     * @param string $encryptedTurnover
     * @param string $encryptionKeyRef
     * @param string $endTime
     * @param string $exportDate
     * @param int $exportId
     * @param string $failureReasonCode
     * @param string $internalType
     * @param bool $isExported
     * @param int $lastTurnoverId
     * @param string $processType
     * @param int $receiptCounter
     * @param int $receiptId
     * @param string $receiptIdentifier
     * @param string $receiptSignature
     * @param string $receiptTimestamp
     * @param bool $signatureFailed
     * @param string $startTime
     * @param string $status
     * @param int $transactionNo
     * @param string $tssId
     * @param float $turnover
     * @param int $turnoverId
     */
    public function __construct(?string $algorithmPrefix = null, ?float $amount0Vat = null, ?float $amountFullVat = null, ?float $amountIntermediate1Vat = null, ?float $amountIntermediate2Vat = null, ?float $amountSpecialVat = null, ?int $cashBookId = null, ?string $certificateId = null, ?string $clientId = null, ?int $documentId = null, ?string $encryptedReceiptSignature = null, ?string $encryptedTurnover = null, ?string $encryptionKeyRef = null, ?string $endTime = null, ?string $exportDate = null, ?int $exportId = null, ?string $failureReasonCode = null, ?string $internalType = null, ?bool $isExported = null, ?int $lastTurnoverId = null, ?string $processType = null, ?int $receiptCounter = null, ?int $receiptId = null, ?string $receiptIdentifier = null, ?string $receiptSignature = null, ?string $receiptTimestamp = null, ?bool $signatureFailed = null, ?string $startTime = null, ?string $status = null, ?int $transactionNo = null, ?string $tssId = null, ?float $turnover = null, ?int $turnoverId = null)
    {
        $this
            ->setAlgorithmPrefix($algorithmPrefix)
            ->setAmount0Vat($amount0Vat)
            ->setAmountFullVat($amountFullVat)
            ->setAmountIntermediate1Vat($amountIntermediate1Vat)
            ->setAmountIntermediate2Vat($amountIntermediate2Vat)
            ->setAmountSpecialVat($amountSpecialVat)
            ->setCashBookId($cashBookId)
            ->setCertificateId($certificateId)
            ->setClientId($clientId)
            ->setDocumentId($documentId)
            ->setEncryptedReceiptSignature($encryptedReceiptSignature)
            ->setEncryptedTurnover($encryptedTurnover)
            ->setEncryptionKeyRef($encryptionKeyRef)
            ->setEndTime($endTime)
            ->setExportDate($exportDate)
            ->setExportId($exportId)
            ->setFailureReasonCode($failureReasonCode)
            ->setInternalType($internalType)
            ->setIsExported($isExported)
            ->setLastTurnoverId($lastTurnoverId)
            ->setProcessType($processType)
            ->setReceiptCounter($receiptCounter)
            ->setReceiptId($receiptId)
            ->setReceiptIdentifier($receiptIdentifier)
            ->setReceiptSignature($receiptSignature)
            ->setReceiptTimestamp($receiptTimestamp)
            ->setSignatureFailed($signatureFailed)
            ->setStartTime($startTime)
            ->setStatus($status)
            ->setTransactionNo($transactionNo)
            ->setTssId($tssId)
            ->setTurnover($turnover)
            ->setTurnoverId($turnoverId);
    }
    /**
     * Get algorithmPrefix value
     * @return string|null
     */
    public function getAlgorithmPrefix(): ?string
    {
        return $this->algorithmPrefix;
    }
    /**
     * Set algorithmPrefix value
     * @param string $algorithmPrefix
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setAlgorithmPrefix(?string $algorithmPrefix = null): self
    {
        // validation for constraint: string
        if (!is_null($algorithmPrefix) && !is_string($algorithmPrefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($algorithmPrefix, true), gettype($algorithmPrefix)), __LINE__);
        }
        $this->algorithmPrefix = $algorithmPrefix;
        
        return $this;
    }
    /**
     * Get amount0Vat value
     * @return float|null
     */
    public function getAmount0Vat(): ?float
    {
        return $this->amount0Vat;
    }
    /**
     * Set amount0Vat value
     * @param float $amount0Vat
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setAmount0Vat(?float $amount0Vat = null): self
    {
        // validation for constraint: float
        if (!is_null($amount0Vat) && !(is_float($amount0Vat) || is_numeric($amount0Vat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount0Vat, true), gettype($amount0Vat)), __LINE__);
        }
        $this->amount0Vat = $amount0Vat;
        
        return $this;
    }
    /**
     * Get amountFullVat value
     * @return float|null
     */
    public function getAmountFullVat(): ?float
    {
        return $this->amountFullVat;
    }
    /**
     * Set amountFullVat value
     * @param float $amountFullVat
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setAmountFullVat(?float $amountFullVat = null): self
    {
        // validation for constraint: float
        if (!is_null($amountFullVat) && !(is_float($amountFullVat) || is_numeric($amountFullVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountFullVat, true), gettype($amountFullVat)), __LINE__);
        }
        $this->amountFullVat = $amountFullVat;
        
        return $this;
    }
    /**
     * Get amountIntermediate1Vat value
     * @return float|null
     */
    public function getAmountIntermediate1Vat(): ?float
    {
        return $this->amountIntermediate1Vat;
    }
    /**
     * Set amountIntermediate1Vat value
     * @param float $amountIntermediate1Vat
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setAmountIntermediate1Vat(?float $amountIntermediate1Vat = null): self
    {
        // validation for constraint: float
        if (!is_null($amountIntermediate1Vat) && !(is_float($amountIntermediate1Vat) || is_numeric($amountIntermediate1Vat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountIntermediate1Vat, true), gettype($amountIntermediate1Vat)), __LINE__);
        }
        $this->amountIntermediate1Vat = $amountIntermediate1Vat;
        
        return $this;
    }
    /**
     * Get amountIntermediate2Vat value
     * @return float|null
     */
    public function getAmountIntermediate2Vat(): ?float
    {
        return $this->amountIntermediate2Vat;
    }
    /**
     * Set amountIntermediate2Vat value
     * @param float $amountIntermediate2Vat
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setAmountIntermediate2Vat(?float $amountIntermediate2Vat = null): self
    {
        // validation for constraint: float
        if (!is_null($amountIntermediate2Vat) && !(is_float($amountIntermediate2Vat) || is_numeric($amountIntermediate2Vat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountIntermediate2Vat, true), gettype($amountIntermediate2Vat)), __LINE__);
        }
        $this->amountIntermediate2Vat = $amountIntermediate2Vat;
        
        return $this;
    }
    /**
     * Get amountSpecialVat value
     * @return float|null
     */
    public function getAmountSpecialVat(): ?float
    {
        return $this->amountSpecialVat;
    }
    /**
     * Set amountSpecialVat value
     * @param float $amountSpecialVat
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setAmountSpecialVat(?float $amountSpecialVat = null): self
    {
        // validation for constraint: float
        if (!is_null($amountSpecialVat) && !(is_float($amountSpecialVat) || is_numeric($amountSpecialVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountSpecialVat, true), gettype($amountSpecialVat)), __LINE__);
        }
        $this->amountSpecialVat = $amountSpecialVat;
        
        return $this;
    }
    /**
     * Get cashBookId value
     * @return int|null
     */
    public function getCashBookId(): ?int
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param int $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setCashBookId(?int $cashBookId = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookId) && !(is_int($cashBookId) || ctype_digit($cashBookId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Get certificateId value
     * @return string|null
     */
    public function getCertificateId(): ?string
    {
        return $this->certificateId;
    }
    /**
     * Set certificateId value
     * @param string $certificateId
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setCertificateId(?string $certificateId = null): self
    {
        // validation for constraint: string
        if (!is_null($certificateId) && !is_string($certificateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certificateId, true), gettype($certificateId)), __LINE__);
        }
        $this->certificateId = $certificateId;
        
        return $this;
    }
    /**
     * Get clientId value
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }
    /**
     * Set clientId value
     * @param string $clientId
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setClientId(?string $clientId = null): self
    {
        // validation for constraint: string
        if (!is_null($clientId) && !is_string($clientId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientId, true), gettype($clientId)), __LINE__);
        }
        $this->clientId = $clientId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
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
     * Get encryptedReceiptSignature value
     * @return string|null
     */
    public function getEncryptedReceiptSignature(): ?string
    {
        return $this->encryptedReceiptSignature;
    }
    /**
     * Set encryptedReceiptSignature value
     * @param string $encryptedReceiptSignature
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setEncryptedReceiptSignature(?string $encryptedReceiptSignature = null): self
    {
        // validation for constraint: string
        if (!is_null($encryptedReceiptSignature) && !is_string($encryptedReceiptSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptedReceiptSignature, true), gettype($encryptedReceiptSignature)), __LINE__);
        }
        $this->encryptedReceiptSignature = $encryptedReceiptSignature;
        
        return $this;
    }
    /**
     * Get encryptedTurnover value
     * @return string|null
     */
    public function getEncryptedTurnover(): ?string
    {
        return $this->encryptedTurnover;
    }
    /**
     * Set encryptedTurnover value
     * @param string $encryptedTurnover
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setEncryptedTurnover(?string $encryptedTurnover = null): self
    {
        // validation for constraint: string
        if (!is_null($encryptedTurnover) && !is_string($encryptedTurnover)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptedTurnover, true), gettype($encryptedTurnover)), __LINE__);
        }
        $this->encryptedTurnover = $encryptedTurnover;
        
        return $this;
    }
    /**
     * Get encryptionKeyRef value
     * @return string|null
     */
    public function getEncryptionKeyRef(): ?string
    {
        return $this->encryptionKeyRef;
    }
    /**
     * Set encryptionKeyRef value
     * @param string $encryptionKeyRef
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setEncryptionKeyRef(?string $encryptionKeyRef = null): self
    {
        // validation for constraint: string
        if (!is_null($encryptionKeyRef) && !is_string($encryptionKeyRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptionKeyRef, true), gettype($encryptionKeyRef)), __LINE__);
        }
        $this->encryptionKeyRef = $encryptionKeyRef;
        
        return $this;
    }
    /**
     * Get endTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }
    /**
     * Set endTime value
     * @param string $endTime
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->endTime = $endTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
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
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get failureReasonCode value
     * @return string|null
     */
    public function getFailureReasonCode(): ?string
    {
        return $this->failureReasonCode;
    }
    /**
     * Set failureReasonCode value
     * @param string $failureReasonCode
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setFailureReasonCode(?string $failureReasonCode = null): self
    {
        // validation for constraint: string
        if (!is_null($failureReasonCode) && !is_string($failureReasonCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($failureReasonCode, true), gettype($failureReasonCode)), __LINE__);
        }
        $this->failureReasonCode = $failureReasonCode;
        
        return $this;
    }
    /**
     * Get internalType value
     * @return string|null
     */
    public function getInternalType(): ?string
    {
        return $this->internalType;
    }
    /**
     * Set internalType value
     * @param string $internalType
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setInternalType(?string $internalType = null): self
    {
        // validation for constraint: string
        if (!is_null($internalType) && !is_string($internalType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internalType, true), gettype($internalType)), __LINE__);
        }
        $this->internalType = $internalType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
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
     * Get lastTurnoverId value
     * @return int|null
     */
    public function getLastTurnoverId(): ?int
    {
        return $this->lastTurnoverId;
    }
    /**
     * Set lastTurnoverId value
     * @param int $lastTurnoverId
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setLastTurnoverId(?int $lastTurnoverId = null): self
    {
        // validation for constraint: int
        if (!is_null($lastTurnoverId) && !(is_int($lastTurnoverId) || ctype_digit($lastTurnoverId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastTurnoverId, true), gettype($lastTurnoverId)), __LINE__);
        }
        $this->lastTurnoverId = $lastTurnoverId;
        
        return $this;
    }
    /**
     * Get processType value
     * @return string|null
     */
    public function getProcessType(): ?string
    {
        return $this->processType;
    }
    /**
     * Set processType value
     * @param string $processType
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setProcessType(?string $processType = null): self
    {
        // validation for constraint: string
        if (!is_null($processType) && !is_string($processType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processType, true), gettype($processType)), __LINE__);
        }
        $this->processType = $processType;
        
        return $this;
    }
    /**
     * Get receiptCounter value
     * @return int|null
     */
    public function getReceiptCounter(): ?int
    {
        return $this->receiptCounter;
    }
    /**
     * Set receiptCounter value
     * @param int $receiptCounter
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setReceiptCounter(?int $receiptCounter = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptCounter) && !(is_int($receiptCounter) || ctype_digit($receiptCounter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptCounter, true), gettype($receiptCounter)), __LINE__);
        }
        $this->receiptCounter = $receiptCounter;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
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
     * Get receiptIdentifier value
     * @return string|null
     */
    public function getReceiptIdentifier(): ?string
    {
        return $this->receiptIdentifier;
    }
    /**
     * Set receiptIdentifier value
     * @param string $receiptIdentifier
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setReceiptIdentifier(?string $receiptIdentifier = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptIdentifier) && !is_string($receiptIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptIdentifier, true), gettype($receiptIdentifier)), __LINE__);
        }
        $this->receiptIdentifier = $receiptIdentifier;
        
        return $this;
    }
    /**
     * Get receiptSignature value
     * @return string|null
     */
    public function getReceiptSignature(): ?string
    {
        return $this->receiptSignature;
    }
    /**
     * Set receiptSignature value
     * @param string $receiptSignature
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setReceiptSignature(?string $receiptSignature = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptSignature) && !is_string($receiptSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptSignature, true), gettype($receiptSignature)), __LINE__);
        }
        $this->receiptSignature = $receiptSignature;
        
        return $this;
    }
    /**
     * Get receiptTimestamp value
     * @return string|null
     */
    public function getReceiptTimestamp(): ?string
    {
        return $this->receiptTimestamp;
    }
    /**
     * Set receiptTimestamp value
     * @param string $receiptTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setReceiptTimestamp(?string $receiptTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptTimestamp) && !is_string($receiptTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptTimestamp, true), gettype($receiptTimestamp)), __LINE__);
        }
        $this->receiptTimestamp = $receiptTimestamp;
        
        return $this;
    }
    /**
     * Get signatureFailed value
     * @return bool|null
     */
    public function getSignatureFailed(): ?bool
    {
        return $this->signatureFailed;
    }
    /**
     * Set signatureFailed value
     * @param bool $signatureFailed
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setSignatureFailed(?bool $signatureFailed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($signatureFailed) && !is_bool($signatureFailed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($signatureFailed, true), gettype($signatureFailed)), __LINE__);
        }
        $this->signatureFailed = $signatureFailed;
        
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get transactionNo value
     * @return int|null
     */
    public function getTransactionNo(): ?int
    {
        return $this->transactionNo;
    }
    /**
     * Set transactionNo value
     * @param int $transactionNo
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setTransactionNo(?int $transactionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionNo) && !(is_int($transactionNo) || ctype_digit($transactionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionNo, true), gettype($transactionNo)), __LINE__);
        }
        $this->transactionNo = $transactionNo;
        
        return $this;
    }
    /**
     * Get tssId value
     * @return string|null
     */
    public function getTssId(): ?string
    {
        return $this->tssId;
    }
    /**
     * Set tssId value
     * @param string $tssId
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setTssId(?string $tssId = null): self
    {
        // validation for constraint: string
        if (!is_null($tssId) && !is_string($tssId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssId, true), gettype($tssId)), __LINE__);
        }
        $this->tssId = $tssId;
        
        return $this;
    }
    /**
     * Get turnover value
     * @return float|null
     */
    public function getTurnover(): ?float
    {
        return $this->turnover;
    }
    /**
     * Set turnover value
     * @param float $turnover
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setTurnover(?float $turnover = null): self
    {
        // validation for constraint: float
        if (!is_null($turnover) && !(is_float($turnover) || is_numeric($turnover))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($turnover, true), gettype($turnover)), __LINE__);
        }
        $this->turnover = $turnover;
        
        return $this;
    }
    /**
     * Get turnoverId value
     * @return int|null
     */
    public function getTurnoverId(): ?int
    {
        return $this->turnoverId;
    }
    /**
     * Set turnoverId value
     * @param int $turnoverId
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverJournalDTO
     */
    public function setTurnoverId(?int $turnoverId = null): self
    {
        // validation for constraint: int
        if (!is_null($turnoverId) && !(is_int($turnoverId) || ctype_digit($turnoverId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($turnoverId, true), gettype($turnoverId)), __LINE__);
        }
        $this->turnoverId = $turnoverId;
        
        return $this;
    }
}
