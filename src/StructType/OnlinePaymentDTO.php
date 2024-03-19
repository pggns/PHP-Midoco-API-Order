<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnlinePaymentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OnlinePaymentDTO extends AbstractStructBase
{
    /**
     * The authAmount
     * @var float|null
     */
    protected ?float $authAmount = null;
    /**
     * The authenticatedId
     * @var string|null
     */
    protected ?string $authenticatedId = null;
    /**
     * The cardholderAuthApproval
     * @var int|null
     */
    protected ?int $cardholderAuthApproval = null;
    /**
     * The cardholderAuthVerification
     * @var string|null
     */
    protected ?string $cardholderAuthVerification = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The ccOwner
     * @var string|null
     */
    protected ?string $ccOwner = null;
    /**
     * The ccToken
     * @var string|null
     */
    protected ?string $ccToken = null;
    /**
     * The ccTokenReference
     * @var int|null
     */
    protected ?int $ccTokenReference = null;
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
     * The cvvToken
     * @var string|null
     */
    protected ?string $cvvToken = null;
    /**
     * The dstid
     * @var string|null
     */
    protected ?string $dstid = null;
    /**
     * The electronicCommerceIndicator
     * @var string|null
     */
    protected ?string $electronicCommerceIndicator = null;
    /**
     * The initialEcomTransactionId
     * @var string|null
     */
    protected ?string $initialEcomTransactionId = null;
    /**
     * The isRecurring
     * @var bool|null
     */
    protected ?bool $isRecurring = null;
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
     * The remainingAuthAmount
     * @var float|null
     */
    protected ?float $remainingAuthAmount = null;
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
     * The v3ds
     * @var string|null
     */
    protected ?string $v3ds = null;
    /**
     * The xid
     * @var string|null
     */
    protected ?string $xid = null;
    /**
     * Constructor method for OnlinePaymentDTO
     * @uses OnlinePaymentDTO::setAuthAmount()
     * @uses OnlinePaymentDTO::setAuthenticatedId()
     * @uses OnlinePaymentDTO::setCardholderAuthApproval()
     * @uses OnlinePaymentDTO::setCardholderAuthVerification()
     * @uses OnlinePaymentDTO::setCcNo()
     * @uses OnlinePaymentDTO::setCcOwner()
     * @uses OnlinePaymentDTO::setCcToken()
     * @uses OnlinePaymentDTO::setCcTokenReference()
     * @uses OnlinePaymentDTO::setCcTokenType()
     * @uses OnlinePaymentDTO::setCcType()
     * @uses OnlinePaymentDTO::setCcValidMonth()
     * @uses OnlinePaymentDTO::setCcValidYear()
     * @uses OnlinePaymentDTO::setCvvToken()
     * @uses OnlinePaymentDTO::setDstid()
     * @uses OnlinePaymentDTO::setElectronicCommerceIndicator()
     * @uses OnlinePaymentDTO::setInitialEcomTransactionId()
     * @uses OnlinePaymentDTO::setIsRecurring()
     * @uses OnlinePaymentDTO::setOrderId()
     * @uses OnlinePaymentDTO::setPaymentChannelIndicator()
     * @uses OnlinePaymentDTO::setRemainingAuthAmount()
     * @uses OnlinePaymentDTO::setSettlementDate()
     * @uses OnlinePaymentDTO::setTokenChecked()
     * @uses OnlinePaymentDTO::setV3ds()
     * @uses OnlinePaymentDTO::setXid()
     * @param float $authAmount
     * @param string $authenticatedId
     * @param int $cardholderAuthApproval
     * @param string $cardholderAuthVerification
     * @param string $ccNo
     * @param string $ccOwner
     * @param string $ccToken
     * @param int $ccTokenReference
     * @param string $ccTokenType
     * @param string $ccType
     * @param int $ccValidMonth
     * @param int $ccValidYear
     * @param string $cvvToken
     * @param string $dstid
     * @param string $electronicCommerceIndicator
     * @param string $initialEcomTransactionId
     * @param bool $isRecurring
     * @param int $orderId
     * @param string $paymentChannelIndicator
     * @param float $remainingAuthAmount
     * @param string $settlementDate
     * @param bool $tokenChecked
     * @param string $v3ds
     * @param string $xid
     */
    public function __construct(?float $authAmount = null, ?string $authenticatedId = null, ?int $cardholderAuthApproval = null, ?string $cardholderAuthVerification = null, ?string $ccNo = null, ?string $ccOwner = null, ?string $ccToken = null, ?int $ccTokenReference = null, ?string $ccTokenType = null, ?string $ccType = null, ?int $ccValidMonth = null, ?int $ccValidYear = null, ?string $cvvToken = null, ?string $dstid = null, ?string $electronicCommerceIndicator = null, ?string $initialEcomTransactionId = null, ?bool $isRecurring = null, ?int $orderId = null, ?string $paymentChannelIndicator = null, ?float $remainingAuthAmount = null, ?string $settlementDate = null, ?bool $tokenChecked = null, ?string $v3ds = null, ?string $xid = null)
    {
        $this
            ->setAuthAmount($authAmount)
            ->setAuthenticatedId($authenticatedId)
            ->setCardholderAuthApproval($cardholderAuthApproval)
            ->setCardholderAuthVerification($cardholderAuthVerification)
            ->setCcNo($ccNo)
            ->setCcOwner($ccOwner)
            ->setCcToken($ccToken)
            ->setCcTokenReference($ccTokenReference)
            ->setCcTokenType($ccTokenType)
            ->setCcType($ccType)
            ->setCcValidMonth($ccValidMonth)
            ->setCcValidYear($ccValidYear)
            ->setCvvToken($cvvToken)
            ->setDstid($dstid)
            ->setElectronicCommerceIndicator($electronicCommerceIndicator)
            ->setInitialEcomTransactionId($initialEcomTransactionId)
            ->setIsRecurring($isRecurring)
            ->setOrderId($orderId)
            ->setPaymentChannelIndicator($paymentChannelIndicator)
            ->setRemainingAuthAmount($remainingAuthAmount)
            ->setSettlementDate($settlementDate)
            ->setTokenChecked($tokenChecked)
            ->setV3ds($v3ds)
            ->setXid($xid);
    }
    /**
     * Get authAmount value
     * @return float|null
     */
    public function getAuthAmount(): ?float
    {
        return $this->authAmount;
    }
    /**
     * Set authAmount value
     * @param float $authAmount
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
     */
    public function setAuthAmount(?float $authAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($authAmount) && !(is_float($authAmount) || is_numeric($authAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($authAmount, true), gettype($authAmount)), __LINE__);
        }
        $this->authAmount = $authAmount;
        
        return $this;
    }
    /**
     * Get authenticatedId value
     * @return string|null
     */
    public function getAuthenticatedId(): ?string
    {
        return $this->authenticatedId;
    }
    /**
     * Set authenticatedId value
     * @param string $authenticatedId
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
     */
    public function setAuthenticatedId(?string $authenticatedId = null): self
    {
        // validation for constraint: string
        if (!is_null($authenticatedId) && !is_string($authenticatedId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authenticatedId, true), gettype($authenticatedId)), __LINE__);
        }
        $this->authenticatedId = $authenticatedId;
        
        return $this;
    }
    /**
     * Get cardholderAuthApproval value
     * @return int|null
     */
    public function getCardholderAuthApproval(): ?int
    {
        return $this->cardholderAuthApproval;
    }
    /**
     * Set cardholderAuthApproval value
     * @param int $cardholderAuthApproval
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
     */
    public function setCardholderAuthApproval(?int $cardholderAuthApproval = null): self
    {
        // validation for constraint: int
        if (!is_null($cardholderAuthApproval) && !(is_int($cardholderAuthApproval) || ctype_digit($cardholderAuthApproval))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cardholderAuthApproval, true), gettype($cardholderAuthApproval)), __LINE__);
        }
        $this->cardholderAuthApproval = $cardholderAuthApproval;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * Get ccOwner value
     * @return string|null
     */
    public function getCcOwner(): ?string
    {
        return $this->ccOwner;
    }
    /**
     * Set ccOwner value
     * @param string $ccOwner
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
     */
    public function setCcOwner(?string $ccOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($ccOwner) && !is_string($ccOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccOwner, true), gettype($ccOwner)), __LINE__);
        }
        $this->ccOwner = $ccOwner;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * Get ccTokenReference value
     * @return int|null
     */
    public function getCcTokenReference(): ?int
    {
        return $this->ccTokenReference;
    }
    /**
     * Set ccTokenReference value
     * @param int $ccTokenReference
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
     */
    public function setCcTokenReference(?int $ccTokenReference = null): self
    {
        // validation for constraint: int
        if (!is_null($ccTokenReference) && !(is_int($ccTokenReference) || ctype_digit($ccTokenReference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccTokenReference, true), gettype($ccTokenReference)), __LINE__);
        }
        $this->ccTokenReference = $ccTokenReference;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * Get cvvToken value
     * @return string|null
     */
    public function getCvvToken(): ?string
    {
        return $this->cvvToken;
    }
    /**
     * Set cvvToken value
     * @param string $cvvToken
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
     */
    public function setCvvToken(?string $cvvToken = null): self
    {
        // validation for constraint: string
        if (!is_null($cvvToken) && !is_string($cvvToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvvToken, true), gettype($cvvToken)), __LINE__);
        }
        $this->cvvToken = $cvvToken;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * Get remainingAuthAmount value
     * @return float|null
     */
    public function getRemainingAuthAmount(): ?float
    {
        return $this->remainingAuthAmount;
    }
    /**
     * Set remainingAuthAmount value
     * @param float $remainingAuthAmount
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
     */
    public function setRemainingAuthAmount(?float $remainingAuthAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($remainingAuthAmount) && !(is_float($remainingAuthAmount) || is_numeric($remainingAuthAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($remainingAuthAmount, true), gettype($remainingAuthAmount)), __LINE__);
        }
        $this->remainingAuthAmount = $remainingAuthAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentDTO
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
