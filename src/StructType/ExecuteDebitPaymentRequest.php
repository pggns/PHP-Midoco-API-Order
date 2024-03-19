<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteDebitPaymentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteDebitPaymentRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The bankNumber
     * @var string|null
     */
    protected ?string $bankNumber = null;
    /**
     * The accountNumber
     * @var string|null
     */
    protected ?string $accountNumber = null;
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
     * The cardHolder
     * @var string|null
     */
    protected ?string $cardHolder = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The transactionType
     * @var string|null
     */
    protected ?string $transactionType = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The cardCountry
     * @var string|null
     */
    protected ?string $cardCountry = null;
    /**
     * The terminalId
     * @var string|null
     */
    protected ?string $terminalId = null;
    /**
     * The traceNumber
     * @var string|null
     */
    protected ?string $traceNumber = null;
    /**
     * Constructor method for ExecuteDebitPaymentRequest
     * @uses ExecuteDebitPaymentRequest::setMidocoBillingDocument()
     * @uses ExecuteDebitPaymentRequest::setAmount()
     * @uses ExecuteDebitPaymentRequest::setBankNumber()
     * @uses ExecuteDebitPaymentRequest::setAccountNumber()
     * @uses ExecuteDebitPaymentRequest::setIban()
     * @uses ExecuteDebitPaymentRequest::setSwiftBicCode()
     * @uses ExecuteDebitPaymentRequest::setCardHolder()
     * @uses ExecuteDebitPaymentRequest::setReceiptNo()
     * @uses ExecuteDebitPaymentRequest::setReceiptDate()
     * @uses ExecuteDebitPaymentRequest::setTransactionType()
     * @uses ExecuteDebitPaymentRequest::setCardType()
     * @uses ExecuteDebitPaymentRequest::setCardCountry()
     * @uses ExecuteDebitPaymentRequest::setTerminalId()
     * @uses ExecuteDebitPaymentRequest::setTraceNumber()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param float $amount
     * @param string $bankNumber
     * @param string $accountNumber
     * @param string $iban
     * @param string $swiftBicCode
     * @param string $cardHolder
     * @param string $receiptNo
     * @param string $receiptDate
     * @param string $transactionType
     * @param string $cardType
     * @param string $cardCountry
     * @param string $terminalId
     * @param string $traceNumber
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?float $amount = null, ?string $bankNumber = null, ?string $accountNumber = null, ?string $iban = null, ?string $swiftBicCode = null, ?string $cardHolder = null, ?string $receiptNo = null, ?string $receiptDate = null, ?string $transactionType = null, ?string $cardType = null, ?string $cardCountry = null, ?string $terminalId = null, ?string $traceNumber = null)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setAmount($amount)
            ->setBankNumber($bankNumber)
            ->setAccountNumber($accountNumber)
            ->setIban($iban)
            ->setSwiftBicCode($swiftBicCode)
            ->setCardHolder($cardHolder)
            ->setReceiptNo($receiptNo)
            ->setReceiptDate($receiptDate)
            ->setTransactionType($transactionType)
            ->setCardType($cardType)
            ->setCardCountry($cardCountry)
            ->setTerminalId($terminalId)
            ->setTraceNumber($traceNumber);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
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
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
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
     * Get cardHolder value
     * @return string|null
     */
    public function getCardHolder(): ?string
    {
        return $this->cardHolder;
    }
    /**
     * Set cardHolder value
     * @param string $cardHolder
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
     */
    public function setCardHolder(?string $cardHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($cardHolder) && !is_string($cardHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolder, true), gettype($cardHolder)), __LINE__);
        }
        $this->cardHolder = $cardHolder;
        
        return $this;
    }
    /**
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
    /**
     * Get transactionType value
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }
    /**
     * Set transactionType value
     * @param string $transactionType
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
     */
    public function setTransactionType(?string $transactionType = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionType) && !is_string($transactionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionType, true), gettype($transactionType)), __LINE__);
        }
        $this->transactionType = $transactionType;
        
        return $this;
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get cardCountry value
     * @return string|null
     */
    public function getCardCountry(): ?string
    {
        return $this->cardCountry;
    }
    /**
     * Set cardCountry value
     * @param string $cardCountry
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
     */
    public function setCardCountry(?string $cardCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($cardCountry) && !is_string($cardCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardCountry, true), gettype($cardCountry)), __LINE__);
        }
        $this->cardCountry = $cardCountry;
        
        return $this;
    }
    /**
     * Get terminalId value
     * @return string|null
     */
    public function getTerminalId(): ?string
    {
        return $this->terminalId;
    }
    /**
     * Set terminalId value
     * @param string $terminalId
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
     */
    public function setTerminalId(?string $terminalId = null): self
    {
        // validation for constraint: string
        if (!is_null($terminalId) && !is_string($terminalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminalId, true), gettype($terminalId)), __LINE__);
        }
        $this->terminalId = $terminalId;
        
        return $this;
    }
    /**
     * Get traceNumber value
     * @return string|null
     */
    public function getTraceNumber(): ?string
    {
        return $this->traceNumber;
    }
    /**
     * Set traceNumber value
     * @param string $traceNumber
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDebitPaymentRequest
     */
    public function setTraceNumber(?string $traceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($traceNumber) && !is_string($traceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traceNumber, true), gettype($traceNumber)), __LINE__);
        }
        $this->traceNumber = $traceNumber;
        
        return $this;
    }
}
