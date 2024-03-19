<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnlinePaymentInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OnlinePaymentInfoType extends AbstractStructBase
{
    /**
     * The CcOnlinePaymentMetadata
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CcOnlinePaymentMetadata
     * @var \Pggns\MidocoApi\Order\StructType\CcOnlinePaymentMetadata|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CcOnlinePaymentMetadata $CcOnlinePaymentMetadata = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The ccCvc
     * @var string|null
     */
    protected ?string $ccCvc = null;
    /**
     * The ccCvcToken
     * @var string|null
     */
    protected ?string $ccCvcToken = null;
    /**
     * The ccExpiry
     * @var string|null
     */
    protected ?string $ccExpiry = null;
    /**
     * The cardHolder
     * @var string|null
     */
    protected ?string $cardHolder = null;
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
     * The isRecurring
     * @var bool|null
     */
    protected ?bool $isRecurring = null;
    /**
     * The ccTokenCreationTimestamp
     * @var string|null
     */
    protected ?string $ccTokenCreationTimestamp = null;
    /**
     * The xid
     * @var string|null
     */
    protected ?string $xid = null;
    /**
     * The paymentChannelIndicator
     * @var string|null
     */
    protected ?string $paymentChannelIndicator = null;
    /**
     * The cardholderAuthVerification
     * @var string|null
     */
    protected ?string $cardholderAuthVerification = null;
    /**
     * The electronicCommerceIndicator
     * @var string|null
     */
    protected ?string $electronicCommerceIndicator = null;
    /**
     * The authAmount
     * @var float|null
     */
    protected ?float $authAmount = null;
    /**
     * The remainingAuthAmount
     * @var float|null
     */
    protected ?float $remainingAuthAmount = null;
    /**
     * The v3ds
     * @var string|null
     */
    protected ?string $v3ds = null;
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
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The settlementDate
     * @var string|null
     */
    protected ?string $settlementDate = null;
    /**
     * Constructor method for OnlinePaymentInfoType
     * @uses OnlinePaymentInfoType::setCcOnlinePaymentMetadata()
     * @uses OnlinePaymentInfoType::setCcType()
     * @uses OnlinePaymentInfoType::setCcNo()
     * @uses OnlinePaymentInfoType::setCcCvc()
     * @uses OnlinePaymentInfoType::setCcCvcToken()
     * @uses OnlinePaymentInfoType::setCcExpiry()
     * @uses OnlinePaymentInfoType::setCardHolder()
     * @uses OnlinePaymentInfoType::setCcToken()
     * @uses OnlinePaymentInfoType::setCcTokenType()
     * @uses OnlinePaymentInfoType::setIsRecurring()
     * @uses OnlinePaymentInfoType::setCcTokenCreationTimestamp()
     * @uses OnlinePaymentInfoType::setXid()
     * @uses OnlinePaymentInfoType::setPaymentChannelIndicator()
     * @uses OnlinePaymentInfoType::setCardholderAuthVerification()
     * @uses OnlinePaymentInfoType::setElectronicCommerceIndicator()
     * @uses OnlinePaymentInfoType::setAuthAmount()
     * @uses OnlinePaymentInfoType::setRemainingAuthAmount()
     * @uses OnlinePaymentInfoType::setV3ds()
     * @uses OnlinePaymentInfoType::setDstid()
     * @uses OnlinePaymentInfoType::setInitialEcomTransactionId()
     * @uses OnlinePaymentInfoType::setCurrency()
     * @uses OnlinePaymentInfoType::setSettlementDate()
     * @param \Pggns\MidocoApi\Order\StructType\CcOnlinePaymentMetadata $ccOnlinePaymentMetadata
     * @param string $ccType
     * @param string $ccNo
     * @param string $ccCvc
     * @param string $ccCvcToken
     * @param string $ccExpiry
     * @param string $cardHolder
     * @param string $ccToken
     * @param string $ccTokenType
     * @param bool $isRecurring
     * @param string $ccTokenCreationTimestamp
     * @param string $xid
     * @param string $paymentChannelIndicator
     * @param string $cardholderAuthVerification
     * @param string $electronicCommerceIndicator
     * @param float $authAmount
     * @param float $remainingAuthAmount
     * @param string $v3ds
     * @param string $dstid
     * @param string $initialEcomTransactionId
     * @param string $currency
     * @param string $settlementDate
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CcOnlinePaymentMetadata $ccOnlinePaymentMetadata = null, ?string $ccType = null, ?string $ccNo = null, ?string $ccCvc = null, ?string $ccCvcToken = null, ?string $ccExpiry = null, ?string $cardHolder = null, ?string $ccToken = null, ?string $ccTokenType = null, ?bool $isRecurring = null, ?string $ccTokenCreationTimestamp = null, ?string $xid = null, ?string $paymentChannelIndicator = null, ?string $cardholderAuthVerification = null, ?string $electronicCommerceIndicator = null, ?float $authAmount = null, ?float $remainingAuthAmount = null, ?string $v3ds = null, ?string $dstid = null, ?string $initialEcomTransactionId = null, ?string $currency = null, ?string $settlementDate = null)
    {
        $this
            ->setCcOnlinePaymentMetadata($ccOnlinePaymentMetadata)
            ->setCcType($ccType)
            ->setCcNo($ccNo)
            ->setCcCvc($ccCvc)
            ->setCcCvcToken($ccCvcToken)
            ->setCcExpiry($ccExpiry)
            ->setCardHolder($cardHolder)
            ->setCcToken($ccToken)
            ->setCcTokenType($ccTokenType)
            ->setIsRecurring($isRecurring)
            ->setCcTokenCreationTimestamp($ccTokenCreationTimestamp)
            ->setXid($xid)
            ->setPaymentChannelIndicator($paymentChannelIndicator)
            ->setCardholderAuthVerification($cardholderAuthVerification)
            ->setElectronicCommerceIndicator($electronicCommerceIndicator)
            ->setAuthAmount($authAmount)
            ->setRemainingAuthAmount($remainingAuthAmount)
            ->setV3ds($v3ds)
            ->setDstid($dstid)
            ->setInitialEcomTransactionId($initialEcomTransactionId)
            ->setCurrency($currency)
            ->setSettlementDate($settlementDate);
    }
    /**
     * Get CcOnlinePaymentMetadata value
     * @return \Pggns\MidocoApi\Order\StructType\CcOnlinePaymentMetadata|null
     */
    public function getCcOnlinePaymentMetadata(): ?\Pggns\MidocoApi\Order\StructType\CcOnlinePaymentMetadata
    {
        return $this->CcOnlinePaymentMetadata;
    }
    /**
     * Set CcOnlinePaymentMetadata value
     * @param \Pggns\MidocoApi\Order\StructType\CcOnlinePaymentMetadata $ccOnlinePaymentMetadata
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
     */
    public function setCcOnlinePaymentMetadata(?\Pggns\MidocoApi\Order\StructType\CcOnlinePaymentMetadata $ccOnlinePaymentMetadata = null): self
    {
        $this->CcOnlinePaymentMetadata = $ccOnlinePaymentMetadata;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * Get ccCvc value
     * @return string|null
     */
    public function getCcCvc(): ?string
    {
        return $this->ccCvc;
    }
    /**
     * Set ccCvc value
     * @param string $ccCvc
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
     */
    public function setCcCvc(?string $ccCvc = null): self
    {
        // validation for constraint: string
        if (!is_null($ccCvc) && !is_string($ccCvc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccCvc, true), gettype($ccCvc)), __LINE__);
        }
        $this->ccCvc = $ccCvc;
        
        return $this;
    }
    /**
     * Get ccCvcToken value
     * @return string|null
     */
    public function getCcCvcToken(): ?string
    {
        return $this->ccCvcToken;
    }
    /**
     * Set ccCvcToken value
     * @param string $ccCvcToken
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
     */
    public function setCcCvcToken(?string $ccCvcToken = null): self
    {
        // validation for constraint: string
        if (!is_null($ccCvcToken) && !is_string($ccCvcToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccCvcToken, true), gettype($ccCvcToken)), __LINE__);
        }
        $this->ccCvcToken = $ccCvcToken;
        
        return $this;
    }
    /**
     * Get ccExpiry value
     * @return string|null
     */
    public function getCcExpiry(): ?string
    {
        return $this->ccExpiry;
    }
    /**
     * Set ccExpiry value
     * @param string $ccExpiry
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
     */
    public function setCcExpiry(?string $ccExpiry = null): self
    {
        // validation for constraint: string
        if (!is_null($ccExpiry) && !is_string($ccExpiry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccExpiry, true), gettype($ccExpiry)), __LINE__);
        }
        $this->ccExpiry = $ccExpiry;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * Get ccTokenCreationTimestamp value
     * @return string|null
     */
    public function getCcTokenCreationTimestamp(): ?string
    {
        return $this->ccTokenCreationTimestamp;
    }
    /**
     * Set ccTokenCreationTimestamp value
     * @param string $ccTokenCreationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
     */
    public function setCcTokenCreationTimestamp(?string $ccTokenCreationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($ccTokenCreationTimestamp) && !is_string($ccTokenCreationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccTokenCreationTimestamp, true), gettype($ccTokenCreationTimestamp)), __LINE__);
        }
        $this->ccTokenCreationTimestamp = $ccTokenCreationTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\OnlinePaymentInfoType
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
}
