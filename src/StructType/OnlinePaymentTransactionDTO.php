<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnlinePaymentTransactionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OnlinePaymentTransactionDTO extends AbstractStructBase
{
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
     * The basePositionId
     * @var int|null
     */
    protected ?int $basePositionId = null;
    /**
     * The calculatedPaymentDate
     * @var string|null
     */
    protected ?string $calculatedPaymentDate = null;
    /**
     * The captureDate
     * @var string|null
     */
    protected ?string $captureDate = null;
    /**
     * The captureDone
     * @var int|null
     */
    protected ?int $captureDone = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The ccReceiptNo
     * @var int|null
     */
    protected ?int $ccReceiptNo = null;
    /**
     * The ccToken
     * @var string|null
     */
    protected ?string $ccToken = null;
    /**
     * The ccTokenType
     * @var string|null
     */
    protected ?string $ccTokenType = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccValidMonth
     * @var int|null
     */
    protected ?int $ccValidMonth = null;
    /**
     * The ccValidYear
     * @var int|null
     */
    protected ?int $ccValidYear = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The dstid
     * @var string|null
     */
    protected ?string $dstid = null;
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
     * The externalId
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * The initialEcomTransactionId
     * @var string|null
     */
    protected ?string $initialEcomTransactionId = null;
    /**
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The isRecurring
     * @var bool|null
     */
    protected ?bool $isRecurring = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The manualApprovalCode
     * @var string|null
     */
    protected ?string $manualApprovalCode = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The paymentChannelIndicator
     * @var string|null
     */
    protected ?string $paymentChannelIndicator = null;
    /**
     * The posCode
     * @var string|null
     */
    protected ?string $posCode = null;
    /**
     * The settlementDate
     * @var string|null
     */
    protected ?string $settlementDate = null;
    /**
     * The tokenChecked
     * @var bool|null
     */
    protected ?bool $tokenChecked = null;
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
     * The usedAdapter
     * @var string|null
     */
    protected ?string $usedAdapter = null;
    /**
     * The usedMerchantId
     * @var string|null
     */
    protected ?string $usedMerchantId = null;
    /**
     * The vat2AmountExtern
     * @var float|null
     */
    protected ?float $vat2AmountExtern = null;
    /**
     * The vat2BaseExtern
     * @var float|null
     */
    protected ?float $vat2BaseExtern = null;
    /**
     * The vat2PercentExtern
     * @var float|null
     */
    protected ?float $vat2PercentExtern = null;
    /**
     * The vatAmountExtern
     * @var float|null
     */
    protected ?float $vatAmountExtern = null;
    /**
     * The vatBaseExtern
     * @var float|null
     */
    protected ?float $vatBaseExtern = null;
    /**
     * The vatPercentExtern
     * @var float|null
     */
    protected ?float $vatPercentExtern = null;
    /**
     * The xid
     * @var string|null
     */
    protected ?string $xid = null;
    /**
     * Constructor method for OnlinePaymentTransactionDTO
     * @uses OnlinePaymentTransactionDTO::setAmount()
     * @uses OnlinePaymentTransactionDTO::setApprovalCode()
     * @uses OnlinePaymentTransactionDTO::setBasePositionId()
     * @uses OnlinePaymentTransactionDTO::setCalculatedPaymentDate()
     * @uses OnlinePaymentTransactionDTO::setCaptureDate()
     * @uses OnlinePaymentTransactionDTO::setCaptureDone()
     * @uses OnlinePaymentTransactionDTO::setCcNo()
     * @uses OnlinePaymentTransactionDTO::setCcReceiptNo()
     * @uses OnlinePaymentTransactionDTO::setCcToken()
     * @uses OnlinePaymentTransactionDTO::setCcTokenType()
     * @uses OnlinePaymentTransactionDTO::setCcType()
     * @uses OnlinePaymentTransactionDTO::setCcValidMonth()
     * @uses OnlinePaymentTransactionDTO::setCcValidYear()
     * @uses OnlinePaymentTransactionDTO::setCreationTimestamp()
     * @uses OnlinePaymentTransactionDTO::setCurrency()
     * @uses OnlinePaymentTransactionDTO::setDstid()
     * @uses OnlinePaymentTransactionDTO::setErrorBundle()
     * @uses OnlinePaymentTransactionDTO::setErrorCode()
     * @uses OnlinePaymentTransactionDTO::setErrorDescriptionCode()
     * @uses OnlinePaymentTransactionDTO::setExternalId()
     * @uses OnlinePaymentTransactionDTO::setInitialEcomTransactionId()
     * @uses OnlinePaymentTransactionDTO::setIsDeposit()
     * @uses OnlinePaymentTransactionDTO::setIsRecurring()
     * @uses OnlinePaymentTransactionDTO::setItemId()
     * @uses OnlinePaymentTransactionDTO::setManualApprovalCode()
     * @uses OnlinePaymentTransactionDTO::setOrderId()
     * @uses OnlinePaymentTransactionDTO::setPaymentChannelIndicator()
     * @uses OnlinePaymentTransactionDTO::setPosCode()
     * @uses OnlinePaymentTransactionDTO::setSettlementDate()
     * @uses OnlinePaymentTransactionDTO::setTokenChecked()
     * @uses OnlinePaymentTransactionDTO::setTransactionId()
     * @uses OnlinePaymentTransactionDTO::setTransactionRefId()
     * @uses OnlinePaymentTransactionDTO::setUsedAdapter()
     * @uses OnlinePaymentTransactionDTO::setUsedMerchantId()
     * @uses OnlinePaymentTransactionDTO::setVat2AmountExtern()
     * @uses OnlinePaymentTransactionDTO::setVat2BaseExtern()
     * @uses OnlinePaymentTransactionDTO::setVat2PercentExtern()
     * @uses OnlinePaymentTransactionDTO::setVatAmountExtern()
     * @uses OnlinePaymentTransactionDTO::setVatBaseExtern()
     * @uses OnlinePaymentTransactionDTO::setVatPercentExtern()
     * @uses OnlinePaymentTransactionDTO::setXid()
     * @param float $amount
     * @param string $approvalCode
     * @param int $basePositionId
     * @param string $calculatedPaymentDate
     * @param string $captureDate
     * @param int $captureDone
     * @param string $ccNo
     * @param int $ccReceiptNo
     * @param string $ccToken
     * @param string $ccTokenType
     * @param string $ccType
     * @param int $ccValidMonth
     * @param int $ccValidYear
     * @param string $creationTimestamp
     * @param string $currency
     * @param string $dstid
     * @param string $errorBundle
     * @param string $errorCode
     * @param string $errorDescriptionCode
     * @param string $externalId
     * @param string $initialEcomTransactionId
     * @param bool $isDeposit
     * @param bool $isRecurring
     * @param int $itemId
     * @param string $manualApprovalCode
     * @param int $orderId
     * @param string $paymentChannelIndicator
     * @param string $posCode
     * @param string $settlementDate
     * @param bool $tokenChecked
     * @param int $transactionId
     * @param string $transactionRefId
     * @param string $usedAdapter
     * @param string $usedMerchantId
     * @param float $vat2AmountExtern
     * @param float $vat2BaseExtern
     * @param float $vat2PercentExtern
     * @param float $vatAmountExtern
     * @param float $vatBaseExtern
     * @param float $vatPercentExtern
     * @param string $xid
     */
    public function __construct(?float $amount = null, ?string $approvalCode = null, ?int $basePositionId = null, ?string $calculatedPaymentDate = null, ?string $captureDate = null, ?int $captureDone = null, ?string $ccNo = null, ?int $ccReceiptNo = null, ?string $ccToken = null, ?string $ccTokenType = null, ?string $ccType = null, ?int $ccValidMonth = null, ?int $ccValidYear = null, ?string $creationTimestamp = null, ?string $currency = null, ?string $dstid = null, ?string $errorBundle = null, ?string $errorCode = null, ?string $errorDescriptionCode = null, ?string $externalId = null, ?string $initialEcomTransactionId = null, ?bool $isDeposit = null, ?bool $isRecurring = null, ?int $itemId = null, ?string $manualApprovalCode = null, ?int $orderId = null, ?string $paymentChannelIndicator = null, ?string $posCode = null, ?string $settlementDate = null, ?bool $tokenChecked = null, ?int $transactionId = null, ?string $transactionRefId = null, ?string $usedAdapter = null, ?string $usedMerchantId = null, ?float $vat2AmountExtern = null, ?float $vat2BaseExtern = null, ?float $vat2PercentExtern = null, ?float $vatAmountExtern = null, ?float $vatBaseExtern = null, ?float $vatPercentExtern = null, ?string $xid = null)
    {
        $this
            ->setAmount($amount)
            ->setApprovalCode($approvalCode)
            ->setBasePositionId($basePositionId)
            ->setCalculatedPaymentDate($calculatedPaymentDate)
            ->setCaptureDate($captureDate)
            ->setCaptureDone($captureDone)
            ->setCcNo($ccNo)
            ->setCcReceiptNo($ccReceiptNo)
            ->setCcToken($ccToken)
            ->setCcTokenType($ccTokenType)
            ->setCcType($ccType)
            ->setCcValidMonth($ccValidMonth)
            ->setCcValidYear($ccValidYear)
            ->setCreationTimestamp($creationTimestamp)
            ->setCurrency($currency)
            ->setDstid($dstid)
            ->setErrorBundle($errorBundle)
            ->setErrorCode($errorCode)
            ->setErrorDescriptionCode($errorDescriptionCode)
            ->setExternalId($externalId)
            ->setInitialEcomTransactionId($initialEcomTransactionId)
            ->setIsDeposit($isDeposit)
            ->setIsRecurring($isRecurring)
            ->setItemId($itemId)
            ->setManualApprovalCode($manualApprovalCode)
            ->setOrderId($orderId)
            ->setPaymentChannelIndicator($paymentChannelIndicator)
            ->setPosCode($posCode)
            ->setSettlementDate($settlementDate)
            ->setTokenChecked($tokenChecked)
            ->setTransactionId($transactionId)
            ->setTransactionRefId($transactionRefId)
            ->setUsedAdapter($usedAdapter)
            ->setUsedMerchantId($usedMerchantId)
            ->setVat2AmountExtern($vat2AmountExtern)
            ->setVat2BaseExtern($vat2BaseExtern)
            ->setVat2PercentExtern($vat2PercentExtern)
            ->setVatAmountExtern($vatAmountExtern)
            ->setVatBaseExtern($vatBaseExtern)
            ->setVatPercentExtern($vatPercentExtern)
            ->setXid($xid);
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
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
     * Get basePositionId value
     * @return int|null
     */
    public function getBasePositionId(): ?int
    {
        return $this->basePositionId;
    }
    /**
     * Set basePositionId value
     * @param int $basePositionId
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setBasePositionId(?int $basePositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($basePositionId) && !(is_int($basePositionId) || ctype_digit($basePositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($basePositionId, true), gettype($basePositionId)), __LINE__);
        }
        $this->basePositionId = $basePositionId;
        
        return $this;
    }
    /**
     * Get calculatedPaymentDate value
     * @return string|null
     */
    public function getCalculatedPaymentDate(): ?string
    {
        return $this->calculatedPaymentDate;
    }
    /**
     * Set calculatedPaymentDate value
     * @param string $calculatedPaymentDate
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setCalculatedPaymentDate(?string $calculatedPaymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($calculatedPaymentDate) && !is_string($calculatedPaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calculatedPaymentDate, true), gettype($calculatedPaymentDate)), __LINE__);
        }
        $this->calculatedPaymentDate = $calculatedPaymentDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
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
     * @return int|null
     */
    public function getCaptureDone(): ?int
    {
        return $this->captureDone;
    }
    /**
     * Set captureDone value
     * @param int $captureDone
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setCaptureDone(?int $captureDone = null): self
    {
        // validation for constraint: int
        if (!is_null($captureDone) && !(is_int($captureDone) || ctype_digit($captureDone))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($captureDone, true), gettype($captureDone)), __LINE__);
        }
        $this->captureDone = $captureDone;
        
        return $this;
    }
    /**
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get ccReceiptNo value
     * @return int|null
     */
    public function getCcReceiptNo(): ?int
    {
        return $this->ccReceiptNo;
    }
    /**
     * Set ccReceiptNo value
     * @param int $ccReceiptNo
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setCcReceiptNo(?int $ccReceiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($ccReceiptNo) && !(is_int($ccReceiptNo) || ctype_digit($ccReceiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccReceiptNo, true), gettype($ccReceiptNo)), __LINE__);
        }
        $this->ccReceiptNo = $ccReceiptNo;
        
        return $this;
    }
    /**
     * Get ccToken value
     * @return string|null
     */
    public function getCcToken(): ?string
    {
        return $this->ccToken;
    }
    /**
     * Set ccToken value
     * @param string $ccToken
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setCcToken(?string $ccToken = null): self
    {
        // validation for constraint: string
        if (!is_null($ccToken) && !is_string($ccToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccToken, true), gettype($ccToken)), __LINE__);
        }
        $this->ccToken = $ccToken;
        
        return $this;
    }
    /**
     * Get ccTokenType value
     * @return string|null
     */
    public function getCcTokenType(): ?string
    {
        return $this->ccTokenType;
    }
    /**
     * Set ccTokenType value
     * @param string $ccTokenType
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setCcTokenType(?string $ccTokenType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccTokenType) && !is_string($ccTokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccTokenType, true), gettype($ccTokenType)), __LINE__);
        }
        $this->ccTokenType = $ccTokenType;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get ccValidMonth value
     * @return int|null
     */
    public function getCcValidMonth(): ?int
    {
        return $this->ccValidMonth;
    }
    /**
     * Set ccValidMonth value
     * @param int $ccValidMonth
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setCcValidMonth(?int $ccValidMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($ccValidMonth) && !(is_int($ccValidMonth) || ctype_digit($ccValidMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccValidMonth, true), gettype($ccValidMonth)), __LINE__);
        }
        $this->ccValidMonth = $ccValidMonth;
        
        return $this;
    }
    /**
     * Get ccValidYear value
     * @return int|null
     */
    public function getCcValidYear(): ?int
    {
        return $this->ccValidYear;
    }
    /**
     * Set ccValidYear value
     * @param int $ccValidYear
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setCcValidYear(?int $ccValidYear = null): self
    {
        // validation for constraint: int
        if (!is_null($ccValidYear) && !(is_int($ccValidYear) || ctype_digit($ccValidYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccValidYear, true), gettype($ccValidYear)), __LINE__);
        }
        $this->ccValidYear = $ccValidYear;
        
        return $this;
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
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
     * Get dstid value
     * @return string|null
     */
    public function getDstid(): ?string
    {
        return $this->dstid;
    }
    /**
     * Set dstid value
     * @param string $dstid
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setDstid(?string $dstid = null): self
    {
        // validation for constraint: string
        if (!is_null($dstid) && !is_string($dstid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dstid, true), gettype($dstid)), __LINE__);
        }
        $this->dstid = $dstid;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
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
     * Get externalId value
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $externalId
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setExternalId(?string $externalId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        
        return $this;
    }
    /**
     * Get initialEcomTransactionId value
     * @return string|null
     */
    public function getInitialEcomTransactionId(): ?string
    {
        return $this->initialEcomTransactionId;
    }
    /**
     * Set initialEcomTransactionId value
     * @param string $initialEcomTransactionId
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setInitialEcomTransactionId(?string $initialEcomTransactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($initialEcomTransactionId) && !is_string($initialEcomTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initialEcomTransactionId, true), gettype($initialEcomTransactionId)), __LINE__);
        }
        $this->initialEcomTransactionId = $initialEcomTransactionId;
        
        return $this;
    }
    /**
     * Get isDeposit value
     * @return bool|null
     */
    public function getIsDeposit(): ?bool
    {
        return $this->isDeposit;
    }
    /**
     * Set isDeposit value
     * @param bool $isDeposit
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setIsDeposit(?bool $isDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeposit) && !is_bool($isDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeposit, true), gettype($isDeposit)), __LINE__);
        }
        $this->isDeposit = $isDeposit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
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
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get manualApprovalCode value
     * @return string|null
     */
    public function getManualApprovalCode(): ?string
    {
        return $this->manualApprovalCode;
    }
    /**
     * Set manualApprovalCode value
     * @param string $manualApprovalCode
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setManualApprovalCode(?string $manualApprovalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($manualApprovalCode) && !is_string($manualApprovalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manualApprovalCode, true), gettype($manualApprovalCode)), __LINE__);
        }
        $this->manualApprovalCode = $manualApprovalCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
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
     * Get paymentChannelIndicator value
     * @return string|null
     */
    public function getPaymentChannelIndicator(): ?string
    {
        return $this->paymentChannelIndicator;
    }
    /**
     * Set paymentChannelIndicator value
     * @param string $paymentChannelIndicator
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setPaymentChannelIndicator(?string $paymentChannelIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentChannelIndicator) && !is_string($paymentChannelIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentChannelIndicator, true), gettype($paymentChannelIndicator)), __LINE__);
        }
        $this->paymentChannelIndicator = $paymentChannelIndicator;
        
        return $this;
    }
    /**
     * Get posCode value
     * @return string|null
     */
    public function getPosCode(): ?string
    {
        return $this->posCode;
    }
    /**
     * Set posCode value
     * @param string $posCode
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setPosCode(?string $posCode = null): self
    {
        // validation for constraint: string
        if (!is_null($posCode) && !is_string($posCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($posCode, true), gettype($posCode)), __LINE__);
        }
        $this->posCode = $posCode;
        
        return $this;
    }
    /**
     * Get settlementDate value
     * @return string|null
     */
    public function getSettlementDate(): ?string
    {
        return $this->settlementDate;
    }
    /**
     * Set settlementDate value
     * @param string $settlementDate
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setSettlementDate(?string $settlementDate = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementDate) && !is_string($settlementDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementDate, true), gettype($settlementDate)), __LINE__);
        }
        $this->settlementDate = $settlementDate;
        
        return $this;
    }
    /**
     * Get tokenChecked value
     * @return bool|null
     */
    public function getTokenChecked(): ?bool
    {
        return $this->tokenChecked;
    }
    /**
     * Set tokenChecked value
     * @param bool $tokenChecked
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setTokenChecked(?bool $tokenChecked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tokenChecked) && !is_bool($tokenChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tokenChecked, true), gettype($tokenChecked)), __LINE__);
        }
        $this->tokenChecked = $tokenChecked;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
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
    /**
     * Get usedAdapter value
     * @return string|null
     */
    public function getUsedAdapter(): ?string
    {
        return $this->usedAdapter;
    }
    /**
     * Set usedAdapter value
     * @param string $usedAdapter
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setUsedAdapter(?string $usedAdapter = null): self
    {
        // validation for constraint: string
        if (!is_null($usedAdapter) && !is_string($usedAdapter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usedAdapter, true), gettype($usedAdapter)), __LINE__);
        }
        $this->usedAdapter = $usedAdapter;
        
        return $this;
    }
    /**
     * Get usedMerchantId value
     * @return string|null
     */
    public function getUsedMerchantId(): ?string
    {
        return $this->usedMerchantId;
    }
    /**
     * Set usedMerchantId value
     * @param string $usedMerchantId
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setUsedMerchantId(?string $usedMerchantId = null): self
    {
        // validation for constraint: string
        if (!is_null($usedMerchantId) && !is_string($usedMerchantId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usedMerchantId, true), gettype($usedMerchantId)), __LINE__);
        }
        $this->usedMerchantId = $usedMerchantId;
        
        return $this;
    }
    /**
     * Get vat2AmountExtern value
     * @return float|null
     */
    public function getVat2AmountExtern(): ?float
    {
        return $this->vat2AmountExtern;
    }
    /**
     * Set vat2AmountExtern value
     * @param float $vat2AmountExtern
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setVat2AmountExtern(?float $vat2AmountExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2AmountExtern) && !(is_float($vat2AmountExtern) || is_numeric($vat2AmountExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2AmountExtern, true), gettype($vat2AmountExtern)), __LINE__);
        }
        $this->vat2AmountExtern = $vat2AmountExtern;
        
        return $this;
    }
    /**
     * Get vat2BaseExtern value
     * @return float|null
     */
    public function getVat2BaseExtern(): ?float
    {
        return $this->vat2BaseExtern;
    }
    /**
     * Set vat2BaseExtern value
     * @param float $vat2BaseExtern
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setVat2BaseExtern(?float $vat2BaseExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2BaseExtern) && !(is_float($vat2BaseExtern) || is_numeric($vat2BaseExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2BaseExtern, true), gettype($vat2BaseExtern)), __LINE__);
        }
        $this->vat2BaseExtern = $vat2BaseExtern;
        
        return $this;
    }
    /**
     * Get vat2PercentExtern value
     * @return float|null
     */
    public function getVat2PercentExtern(): ?float
    {
        return $this->vat2PercentExtern;
    }
    /**
     * Set vat2PercentExtern value
     * @param float $vat2PercentExtern
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setVat2PercentExtern(?float $vat2PercentExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2PercentExtern) && !(is_float($vat2PercentExtern) || is_numeric($vat2PercentExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2PercentExtern, true), gettype($vat2PercentExtern)), __LINE__);
        }
        $this->vat2PercentExtern = $vat2PercentExtern;
        
        return $this;
    }
    /**
     * Get vatAmountExtern value
     * @return float|null
     */
    public function getVatAmountExtern(): ?float
    {
        return $this->vatAmountExtern;
    }
    /**
     * Set vatAmountExtern value
     * @param float $vatAmountExtern
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setVatAmountExtern(?float $vatAmountExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmountExtern) && !(is_float($vatAmountExtern) || is_numeric($vatAmountExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmountExtern, true), gettype($vatAmountExtern)), __LINE__);
        }
        $this->vatAmountExtern = $vatAmountExtern;
        
        return $this;
    }
    /**
     * Get vatBaseExtern value
     * @return float|null
     */
    public function getVatBaseExtern(): ?float
    {
        return $this->vatBaseExtern;
    }
    /**
     * Set vatBaseExtern value
     * @param float $vatBaseExtern
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setVatBaseExtern(?float $vatBaseExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vatBaseExtern) && !(is_float($vatBaseExtern) || is_numeric($vatBaseExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatBaseExtern, true), gettype($vatBaseExtern)), __LINE__);
        }
        $this->vatBaseExtern = $vatBaseExtern;
        
        return $this;
    }
    /**
     * Get vatPercentExtern value
     * @return float|null
     */
    public function getVatPercentExtern(): ?float
    {
        return $this->vatPercentExtern;
    }
    /**
     * Set vatPercentExtern value
     * @param float $vatPercentExtern
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setVatPercentExtern(?float $vatPercentExtern = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercentExtern) && !(is_float($vatPercentExtern) || is_numeric($vatPercentExtern))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercentExtern, true), gettype($vatPercentExtern)), __LINE__);
        }
        $this->vatPercentExtern = $vatPercentExtern;
        
        return $this;
    }
    /**
     * Get xid value
     * @return string|null
     */
    public function getXid(): ?string
    {
        return $this->xid;
    }
    /**
     * Set xid value
     * @param string $xid
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentTransactionDTO
     */
    public function setXid(?string $xid = null): self
    {
        // validation for constraint: string
        if (!is_null($xid) && !is_string($xid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xid, true), gettype($xid)), __LINE__);
        }
        $this->xid = $xid;
        
        return $this;
    }
}
