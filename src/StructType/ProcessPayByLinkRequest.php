<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessPayByLinkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessPayByLinkRequest extends AbstractStructBase
{
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The transactionRefId
     * @var string|null
     */
    protected ?string $transactionRefId = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The apiResponse
     * @var string|null
     */
    protected ?string $apiResponse = null;
    /**
     * The approvalCode
     * @var string|null
     */
    protected ?string $approvalCode = null;
    /**
     * The electronicCommerceIndicator
     * @var string|null
     */
    protected ?string $electronicCommerceIndicator = null;
    /**
     * The v3ds
     * @var string|null
     */
    protected ?string $v3ds = null;
    /**
     * The cardholderAuthVerification
     * @var string|null
     */
    protected ?string $cardholderAuthVerification = null;
    /**
     * The dstid
     * @var string|null
     */
    protected ?string $dstid = null;
    /**
     * The initialEcomTransactionId
     * @var string|null
     */
    protected ?string $initialEcomTransactionId = null;
    /**
     * The ccNumber
     * @var string|null
     */
    protected ?string $ccNumber = null;
    /**
     * The token
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The tokenType
     * @var string|null
     */
    protected ?string $tokenType = null;
    /**
     * The cardHolder
     * @var string|null
     */
    protected ?string $cardHolder = null;
    /**
     * Constructor method for ProcessPayByLinkRequest
     * @uses ProcessPayByLinkRequest::setStatus()
     * @uses ProcessPayByLinkRequest::setTransactionId()
     * @uses ProcessPayByLinkRequest::setUnitName()
     * @uses ProcessPayByLinkRequest::setTransactionRefId()
     * @uses ProcessPayByLinkRequest::setAmount()
     * @uses ProcessPayByLinkRequest::setCurrency()
     * @uses ProcessPayByLinkRequest::setApiResponse()
     * @uses ProcessPayByLinkRequest::setApprovalCode()
     * @uses ProcessPayByLinkRequest::setElectronicCommerceIndicator()
     * @uses ProcessPayByLinkRequest::setV3ds()
     * @uses ProcessPayByLinkRequest::setCardholderAuthVerification()
     * @uses ProcessPayByLinkRequest::setDstid()
     * @uses ProcessPayByLinkRequest::setInitialEcomTransactionId()
     * @uses ProcessPayByLinkRequest::setCcNumber()
     * @uses ProcessPayByLinkRequest::setToken()
     * @uses ProcessPayByLinkRequest::setTokenType()
     * @uses ProcessPayByLinkRequest::setCardHolder()
     * @param string $status
     * @param int $transactionId
     * @param string $unitName
     * @param string $transactionRefId
     * @param float $amount
     * @param string $currency
     * @param string $apiResponse
     * @param string $approvalCode
     * @param string $electronicCommerceIndicator
     * @param string $v3ds
     * @param string $cardholderAuthVerification
     * @param string $dstid
     * @param string $initialEcomTransactionId
     * @param string $ccNumber
     * @param string $token
     * @param string $tokenType
     * @param string $cardHolder
     */
    public function __construct(?string $status = null, ?int $transactionId = null, ?string $unitName = null, ?string $transactionRefId = null, ?float $amount = null, ?string $currency = null, ?string $apiResponse = null, ?string $approvalCode = null, ?string $electronicCommerceIndicator = null, ?string $v3ds = null, ?string $cardholderAuthVerification = null, ?string $dstid = null, ?string $initialEcomTransactionId = null, ?string $ccNumber = null, ?string $token = null, ?string $tokenType = null, ?string $cardHolder = null)
    {
        $this
            ->setStatus($status)
            ->setTransactionId($transactionId)
            ->setUnitName($unitName)
            ->setTransactionRefId($transactionRefId)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setApiResponse($apiResponse)
            ->setApprovalCode($approvalCode)
            ->setElectronicCommerceIndicator($electronicCommerceIndicator)
            ->setV3ds($v3ds)
            ->setCardholderAuthVerification($cardholderAuthVerification)
            ->setDstid($dstid)
            ->setInitialEcomTransactionId($initialEcomTransactionId)
            ->setCcNumber($ccNumber)
            ->setToken($token)
            ->setTokenType($tokenType)
            ->setCardHolder($cardHolder);
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
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
     * Get apiResponse value
     * @return string|null
     */
    public function getApiResponse(): ?string
    {
        return $this->apiResponse;
    }
    /**
     * Set apiResponse value
     * @param string $apiResponse
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
     */
    public function setApiResponse(?string $apiResponse = null): self
    {
        // validation for constraint: string
        if (!is_null($apiResponse) && !is_string($apiResponse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiResponse, true), gettype($apiResponse)), __LINE__);
        }
        $this->apiResponse = $apiResponse;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
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
     * Get electronicCommerceIndicator value
     * @return string|null
     */
    public function getElectronicCommerceIndicator(): ?string
    {
        return $this->electronicCommerceIndicator;
    }
    /**
     * Set electronicCommerceIndicator value
     * @param string $electronicCommerceIndicator
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
     */
    public function setElectronicCommerceIndicator(?string $electronicCommerceIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($electronicCommerceIndicator) && !is_string($electronicCommerceIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($electronicCommerceIndicator, true), gettype($electronicCommerceIndicator)), __LINE__);
        }
        $this->electronicCommerceIndicator = $electronicCommerceIndicator;
        
        return $this;
    }
    /**
     * Get v3ds value
     * @return string|null
     */
    public function getV3ds(): ?string
    {
        return $this->v3ds;
    }
    /**
     * Set v3ds value
     * @param string $v3ds
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
     */
    public function setV3ds(?string $v3ds = null): self
    {
        // validation for constraint: string
        if (!is_null($v3ds) && !is_string($v3ds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($v3ds, true), gettype($v3ds)), __LINE__);
        }
        $this->v3ds = $v3ds;
        
        return $this;
    }
    /**
     * Get cardholderAuthVerification value
     * @return string|null
     */
    public function getCardholderAuthVerification(): ?string
    {
        return $this->cardholderAuthVerification;
    }
    /**
     * Set cardholderAuthVerification value
     * @param string $cardholderAuthVerification
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
     */
    public function setCardholderAuthVerification(?string $cardholderAuthVerification = null): self
    {
        // validation for constraint: string
        if (!is_null($cardholderAuthVerification) && !is_string($cardholderAuthVerification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardholderAuthVerification, true), gettype($cardholderAuthVerification)), __LINE__);
        }
        $this->cardholderAuthVerification = $cardholderAuthVerification;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
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
     * Get ccNumber value
     * @return string|null
     */
    public function getCcNumber(): ?string
    {
        return $this->ccNumber;
    }
    /**
     * Set ccNumber value
     * @param string $ccNumber
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
     */
    public function setCcNumber(?string $ccNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNumber) && !is_string($ccNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNumber, true), gettype($ccNumber)), __LINE__);
        }
        $this->ccNumber = $ccNumber;
        
        return $this;
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;
        
        return $this;
    }
    /**
     * Get tokenType value
     * @return string|null
     */
    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }
    /**
     * Set tokenType value
     * @param string $tokenType
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
     */
    public function setTokenType(?string $tokenType = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenType) && !is_string($tokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenType, true), gettype($tokenType)), __LINE__);
        }
        $this->tokenType = $tokenType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkRequest
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
}
