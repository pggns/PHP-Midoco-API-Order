<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CcCardDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CcCardDTO extends AbstractStructBase
{
    /**
     * The cardNo
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The cvc
     * @var string|null
     */
    protected ?string $cvc = null;
    /**
     * The cvcToken
     * @var string|null
     */
    protected ?string $cvcToken = null;
    /**
     * The isBonus
     * @var bool|null
     */
    protected ?bool $isBonus = null;
    /**
     * The issuer
     * @var string|null
     */
    protected ?string $issuer = null;
    /**
     * The owner
     * @var string|null
     */
    protected ?string $owner = null;
    /**
     * The validMonth
     * @var int|null
     */
    protected ?int $validMonth = null;
    /**
     * The validYear
     * @var int|null
     */
    protected ?int $validYear = null;
    /**
     * The typeDescription
     * @var string|null
     */
    protected ?string $typeDescription = null;
    /**
     * The ccCardId
     * @var int|null
     */
    protected ?int $ccCardId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The authAmount
     * @var float|null
     */
    protected ?float $authAmount = null;
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
     * The electronicCommerceIndicator
     * @var string|null
     */
    protected ?string $electronicCommerceIndicator = null;
    /**
     * The paymentChannelIndicator
     * @var string|null
     */
    protected ?string $paymentChannelIndicator = null;
    /**
     * The RemainingAuthAmount
     * @var float|null
     */
    protected ?float $RemainingAuthAmount = null;
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
     * The initialEcomTransactionId
     * @var string|null
     */
    protected ?string $initialEcomTransactionId = null;
    /**
     * Constructor method for CcCardDTO
     * @uses CcCardDTO::setCardNo()
     * @uses CcCardDTO::setCardType()
     * @uses CcCardDTO::setCvc()
     * @uses CcCardDTO::setCvcToken()
     * @uses CcCardDTO::setIsBonus()
     * @uses CcCardDTO::setIssuer()
     * @uses CcCardDTO::setOwner()
     * @uses CcCardDTO::setValidMonth()
     * @uses CcCardDTO::setValidYear()
     * @uses CcCardDTO::setTypeDescription()
     * @uses CcCardDTO::setCcCardId()
     * @uses CcCardDTO::setCustomerId()
     * @uses CcCardDTO::setAuthAmount()
     * @uses CcCardDTO::setCardholderAuthVerification()
     * @uses CcCardDTO::setDstid()
     * @uses CcCardDTO::setElectronicCommerceIndicator()
     * @uses CcCardDTO::setPaymentChannelIndicator()
     * @uses CcCardDTO::setRemainingAuthAmount()
     * @uses CcCardDTO::setV3ds()
     * @uses CcCardDTO::setXid()
     * @uses CcCardDTO::setInitialEcomTransactionId()
     * @param string $cardNo
     * @param string $cardType
     * @param string $cvc
     * @param string $cvcToken
     * @param bool $isBonus
     * @param string $issuer
     * @param string $owner
     * @param int $validMonth
     * @param int $validYear
     * @param string $typeDescription
     * @param int $ccCardId
     * @param int $customerId
     * @param float $authAmount
     * @param string $cardholderAuthVerification
     * @param string $dstid
     * @param string $electronicCommerceIndicator
     * @param string $paymentChannelIndicator
     * @param float $remainingAuthAmount
     * @param string $v3ds
     * @param string $xid
     * @param string $initialEcomTransactionId
     */
    public function __construct(?string $cardNo = null, ?string $cardType = null, ?string $cvc = null, ?string $cvcToken = null, ?bool $isBonus = null, ?string $issuer = null, ?string $owner = null, ?int $validMonth = null, ?int $validYear = null, ?string $typeDescription = null, ?int $ccCardId = null, ?int $customerId = null, ?float $authAmount = null, ?string $cardholderAuthVerification = null, ?string $dstid = null, ?string $electronicCommerceIndicator = null, ?string $paymentChannelIndicator = null, ?float $remainingAuthAmount = null, ?string $v3ds = null, ?string $xid = null, ?string $initialEcomTransactionId = null)
    {
        $this
            ->setCardNo($cardNo)
            ->setCardType($cardType)
            ->setCvc($cvc)
            ->setCvcToken($cvcToken)
            ->setIsBonus($isBonus)
            ->setIssuer($issuer)
            ->setOwner($owner)
            ->setValidMonth($validMonth)
            ->setValidYear($validYear)
            ->setTypeDescription($typeDescription)
            ->setCcCardId($ccCardId)
            ->setCustomerId($customerId)
            ->setAuthAmount($authAmount)
            ->setCardholderAuthVerification($cardholderAuthVerification)
            ->setDstid($dstid)
            ->setElectronicCommerceIndicator($electronicCommerceIndicator)
            ->setPaymentChannelIndicator($paymentChannelIndicator)
            ->setRemainingAuthAmount($remainingAuthAmount)
            ->setV3ds($v3ds)
            ->setXid($xid)
            ->setInitialEcomTransactionId($initialEcomTransactionId);
    }
    /**
     * Get cardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }
    /**
     * Set cardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->cardNo = $cardNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
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
     * Get cvc value
     * @return string|null
     */
    public function getCvc(): ?string
    {
        return $this->cvc;
    }
    /**
     * Set cvc value
     * @param string $cvc
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setCvc(?string $cvc = null): self
    {
        // validation for constraint: string
        if (!is_null($cvc) && !is_string($cvc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvc, true), gettype($cvc)), __LINE__);
        }
        $this->cvc = $cvc;
        
        return $this;
    }
    /**
     * Get cvcToken value
     * @return string|null
     */
    public function getCvcToken(): ?string
    {
        return $this->cvcToken;
    }
    /**
     * Set cvcToken value
     * @param string $cvcToken
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setCvcToken(?string $cvcToken = null): self
    {
        // validation for constraint: string
        if (!is_null($cvcToken) && !is_string($cvcToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvcToken, true), gettype($cvcToken)), __LINE__);
        }
        $this->cvcToken = $cvcToken;
        
        return $this;
    }
    /**
     * Get isBonus value
     * @return bool|null
     */
    public function getIsBonus(): ?bool
    {
        return $this->isBonus;
    }
    /**
     * Set isBonus value
     * @param bool $isBonus
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setIsBonus(?bool $isBonus = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBonus) && !is_bool($isBonus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBonus, true), gettype($isBonus)), __LINE__);
        }
        $this->isBonus = $isBonus;
        
        return $this;
    }
    /**
     * Get issuer value
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }
    /**
     * Set issuer value
     * @param string $issuer
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setIssuer(?string $issuer = null): self
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuer, true), gettype($issuer)), __LINE__);
        }
        $this->issuer = $issuer;
        
        return $this;
    }
    /**
     * Get owner value
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @param string $owner
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setOwner(?string $owner = null): self
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owner, true), gettype($owner)), __LINE__);
        }
        $this->owner = $owner;
        
        return $this;
    }
    /**
     * Get validMonth value
     * @return int|null
     */
    public function getValidMonth(): ?int
    {
        return $this->validMonth;
    }
    /**
     * Set validMonth value
     * @param int $validMonth
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setValidMonth(?int $validMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($validMonth) && !(is_int($validMonth) || ctype_digit($validMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validMonth, true), gettype($validMonth)), __LINE__);
        }
        $this->validMonth = $validMonth;
        
        return $this;
    }
    /**
     * Get validYear value
     * @return int|null
     */
    public function getValidYear(): ?int
    {
        return $this->validYear;
    }
    /**
     * Set validYear value
     * @param int $validYear
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setValidYear(?int $validYear = null): self
    {
        // validation for constraint: int
        if (!is_null($validYear) && !(is_int($validYear) || ctype_digit($validYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validYear, true), gettype($validYear)), __LINE__);
        }
        $this->validYear = $validYear;
        
        return $this;
    }
    /**
     * Get typeDescription value
     * @return string|null
     */
    public function getTypeDescription(): ?string
    {
        return $this->typeDescription;
    }
    /**
     * Set typeDescription value
     * @param string $typeDescription
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setTypeDescription(?string $typeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($typeDescription) && !is_string($typeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeDescription, true), gettype($typeDescription)), __LINE__);
        }
        $this->typeDescription = $typeDescription;
        
        return $this;
    }
    /**
     * Get ccCardId value
     * @return int|null
     */
    public function getCcCardId(): ?int
    {
        return $this->ccCardId;
    }
    /**
     * Set ccCardId value
     * @param int $ccCardId
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setCcCardId(?int $ccCardId = null): self
    {
        // validation for constraint: int
        if (!is_null($ccCardId) && !(is_int($ccCardId) || ctype_digit($ccCardId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccCardId, true), gettype($ccCardId)), __LINE__);
        }
        $this->ccCardId = $ccCardId;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
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
     * Get RemainingAuthAmount value
     * @return float|null
     */
    public function getRemainingAuthAmount(): ?float
    {
        return $this->RemainingAuthAmount;
    }
    /**
     * Set RemainingAuthAmount value
     * @param float $remainingAuthAmount
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
     */
    public function setRemainingAuthAmount(?float $remainingAuthAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($remainingAuthAmount) && !(is_float($remainingAuthAmount) || is_numeric($remainingAuthAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($remainingAuthAmount, true), gettype($remainingAuthAmount)), __LINE__);
        }
        $this->RemainingAuthAmount = $remainingAuthAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CcCardDTO
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
}
