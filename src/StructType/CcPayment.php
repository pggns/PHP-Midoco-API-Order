<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ccPayment StructType
 * @subpackage Structs
 */
class CcPayment extends AbstractStructBase
{
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ccNumber = null;
    /**
     * The ccValidYear
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}
     * @var string|null
     */
    protected ?string $ccValidYear = null;
    /**
     * The ccValidMonth
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{2}
     * @var string|null
     */
    protected ?string $ccValidMonth = null;
    /**
     * The cvcCode
     * Meta information extracted from the WSDL
     * - documentation: this field won't be saved
     * - base: xs:string
     * - maxLength: 4
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cvcCode = null;
    /**
     * The ccAdditionalInfo
     * Meta information extracted from the WSDL
     * - documentation: Additional air plus flight payments
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo[]
     */
    protected array $ccAdditionalInfo = [];
    /**
     * The cardHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cardHolder = null;
    /**
     * The ccToken
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ccToken
     * @var \Pggns\MidocoApi\Order\StructType\CcToken[]
     */
    protected array $ccToken = [];
    /**
     * The paymentChannelIndicator
     * Meta information extracted from the WSDL
     * - documentation: This field indicates whether payment data was entered by the payee online (ecom) or via mail order telefon order = offline (moto). <br/><lu>possible values: <li>ecom</li> <li>moto</li> </lu>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentChannelIndicator = null;
    /**
     * The cardholderAuthVerification
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the way the authentication ID (XID or DSTID) was created. It is expected by the payment provider as CAVV.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cardholderAuthVerification = null;
    /**
     * The electronicCommerceIndicator
     * Meta information extracted from the WSDL
     * - documentation: This field is for validation when receiving the ECI to be one of the named values. It is expected by the payment provider. <br/><lu>possible values: <li>00=Mastercard no 3DS authentication/failure</li> <li>01=Mastercard attempted
     * authentication</li> <li>02=Mastercard fully authenticated</li> <li>05=Visa, AMEX, JCB, Diners/Discover fully authenticated</li> <li>06=Mastercard Acquirer exemption; no 3DS authentication</li> <li>06=Visa, AMEX, JCB, Diners/Discover attempted
     * authentication</li> <li>07=Mastercard fully authentication - recurring/installment transaction</li> <li>07=Visa, AMEX, JCB, Diners/Disvover no 3DS authentication/failure</li> </lu>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $electronicCommerceIndicator = null;
    /**
     * The xid
     * Meta information extracted from the WSDL
     * - documentation: <b>Transaction ID in 3D Secure version 1.x cases (XID)<b/><br/> This transaction reference is issued by the bank when a 3DS version 1.x authentication was successful. It is expected by the payment provider. <br/>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $xid = null;
    /**
     * The authAmount
     * Meta information extracted from the WSDL
     * - documentation: An authentication is linked to an amount which the card holder is shown in the authentication process.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $authAmount = null;
    /**
     * The remainingAuthAmount
     * Meta information extracted from the WSDL
     * - documentation: This field contains how much of the initially authenticated amount can still be used in transactions.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $remainingAuthAmount = null;
    /**
     * The v3ds
     * Meta information extracted from the WSDL
     * - documentation: This element takes the 3D Secure version number used in the authentication process. Depending on this 3D Secure version (either 1.x or 2.x) the xid3ds1 or the dstid3ds2 need to be provided as well.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $v3ds = null;
    /**
     * The dstid
     * Meta information extracted from the WSDL
     * - documentation: <b>Transaction ID in 3D Secure version 2.x cases (dstId)<b/><br/> This transaction reference is issued by the bank when a 3DS version 2.x authentication was successful. It is expected by the payment provider. <br/>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dstid = null;
    /**
     * The initialEcomTransactionId
     * Meta information extracted from the WSDL
     * - documentation: Transaction ID of the initial successful ECOM transaction. Used as reference in every subsequent debit transaction
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $initialEcomTransactionId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for ccPayment
     * @uses CcPayment::setCcType()
     * @uses CcPayment::setCcNumber()
     * @uses CcPayment::setCcValidYear()
     * @uses CcPayment::setCcValidMonth()
     * @uses CcPayment::setCvcCode()
     * @uses CcPayment::setCcAdditionalInfo()
     * @uses CcPayment::setCardHolder()
     * @uses CcPayment::setCcToken()
     * @uses CcPayment::setPaymentChannelIndicator()
     * @uses CcPayment::setCardholderAuthVerification()
     * @uses CcPayment::setElectronicCommerceIndicator()
     * @uses CcPayment::setXid()
     * @uses CcPayment::setAuthAmount()
     * @uses CcPayment::setRemainingAuthAmount()
     * @uses CcPayment::setV3ds()
     * @uses CcPayment::setDstid()
     * @uses CcPayment::setInitialEcomTransactionId()
     * @uses CcPayment::setPosition()
     * @param string $ccType
     * @param string $ccNumber
     * @param string $ccValidYear
     * @param string $ccValidMonth
     * @param string $cvcCode
     * @param \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo[] $ccAdditionalInfo
     * @param string $cardHolder
     * @param \Pggns\MidocoApi\Order\StructType\CcToken[] $ccToken
     * @param string $paymentChannelIndicator
     * @param string $cardholderAuthVerification
     * @param string $electronicCommerceIndicator
     * @param string $xid
     * @param float $authAmount
     * @param float $remainingAuthAmount
     * @param string $v3ds
     * @param string $dstid
     * @param string $initialEcomTransactionId
     * @param int $position
     */
    public function __construct(?string $ccType = null, ?string $ccNumber = null, ?string $ccValidYear = null, ?string $ccValidMonth = null, ?string $cvcCode = null, array $ccAdditionalInfo = [], ?string $cardHolder = null, array $ccToken = [], ?string $paymentChannelIndicator = null, ?string $cardholderAuthVerification = null, ?string $electronicCommerceIndicator = null, ?string $xid = null, ?float $authAmount = null, ?float $remainingAuthAmount = null, ?string $v3ds = null, ?string $dstid = null, ?string $initialEcomTransactionId = null, ?int $position = null)
    {
        $this
            ->setCcType($ccType)
            ->setCcNumber($ccNumber)
            ->setCcValidYear($ccValidYear)
            ->setCcValidMonth($ccValidMonth)
            ->setCvcCode($cvcCode)
            ->setCcAdditionalInfo($ccAdditionalInfo)
            ->setCardHolder($cardHolder)
            ->setCcToken($ccToken)
            ->setPaymentChannelIndicator($paymentChannelIndicator)
            ->setCardholderAuthVerification($cardholderAuthVerification)
            ->setElectronicCommerceIndicator($electronicCommerceIndicator)
            ->setXid($xid)
            ->setAuthAmount($authAmount)
            ->setRemainingAuthAmount($remainingAuthAmount)
            ->setV3ds($v3ds)
            ->setDstid($dstid)
            ->setInitialEcomTransactionId($initialEcomTransactionId)
            ->setPosition($position);
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * Get ccValidYear value
     * @return string|null
     */
    public function getCcValidYear(): ?string
    {
        return $this->ccValidYear;
    }
    /**
     * Set ccValidYear value
     * @param string $ccValidYear
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
     */
    public function setCcValidYear(?string $ccValidYear = null): self
    {
        // validation for constraint: string
        if (!is_null($ccValidYear) && !is_string($ccValidYear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccValidYear, true), gettype($ccValidYear)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4})
        if (!is_null($ccValidYear) && !preg_match('/[0-9]{4}/', $ccValidYear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}/', var_export($ccValidYear, true)), __LINE__);
        }
        $this->ccValidYear = $ccValidYear;
        
        return $this;
    }
    /**
     * Get ccValidMonth value
     * @return string|null
     */
    public function getCcValidMonth(): ?string
    {
        return $this->ccValidMonth;
    }
    /**
     * Set ccValidMonth value
     * @param string $ccValidMonth
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
     */
    public function setCcValidMonth(?string $ccValidMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($ccValidMonth) && !is_string($ccValidMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccValidMonth, true), gettype($ccValidMonth)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2})
        if (!is_null($ccValidMonth) && !preg_match('/[0-9]{2}/', $ccValidMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}/', var_export($ccValidMonth, true)), __LINE__);
        }
        $this->ccValidMonth = $ccValidMonth;
        
        return $this;
    }
    /**
     * Get cvcCode value
     * @return string|null
     */
    public function getCvcCode(): ?string
    {
        return $this->cvcCode;
    }
    /**
     * Set cvcCode value
     * @param string $cvcCode
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
     */
    public function setCvcCode(?string $cvcCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cvcCode) && !is_string($cvcCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvcCode, true), gettype($cvcCode)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($cvcCode) && mb_strlen((string) $cvcCode) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $cvcCode)), __LINE__);
        }
        $this->cvcCode = $cvcCode;
        
        return $this;
    }
    /**
     * Get ccAdditionalInfo value
     * @return \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo[]
     */
    public function getCcAdditionalInfo(): array
    {
        return $this->ccAdditionalInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setCcAdditionalInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCcAdditionalInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCcAdditionalInfoForArrayConstraintsFromSetCcAdditionalInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $ccPaymentCcAdditionalInfoItem) {
            // validation for constraint: itemType
            if (!$ccPaymentCcAdditionalInfoItem instanceof \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo) {
                $invalidValues[] = is_object($ccPaymentCcAdditionalInfoItem) ? get_class($ccPaymentCcAdditionalInfoItem) : sprintf('%s(%s)', gettype($ccPaymentCcAdditionalInfoItem), var_export($ccPaymentCcAdditionalInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ccAdditionalInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ccAdditionalInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo[] $ccAdditionalInfo
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
     */
    public function setCcAdditionalInfo(array $ccAdditionalInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($ccAdditionalInfoArrayErrorMessage = self::validateCcAdditionalInfoForArrayConstraintsFromSetCcAdditionalInfo($ccAdditionalInfo))) {
            throw new InvalidArgumentException($ccAdditionalInfoArrayErrorMessage, __LINE__);
        }
        $this->ccAdditionalInfo = $ccAdditionalInfo;
        
        return $this;
    }
    /**
     * Add item to ccAdditionalInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
     */
    public function addToCcAdditionalInfo(\Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo) {
            throw new InvalidArgumentException(sprintf('The ccAdditionalInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ccAdditionalInfo[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CcToken[]
     */
    public function getCcToken(): array
    {
        return $this->ccToken;
    }
    /**
     * This method is responsible for validating the values passed to the setCcToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCcToken method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCcTokenForArrayConstraintsFromSetCcToken(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $ccPaymentCcTokenItem) {
            // validation for constraint: itemType
            if (!$ccPaymentCcTokenItem instanceof \Pggns\MidocoApi\Order\StructType\CcToken) {
                $invalidValues[] = is_object($ccPaymentCcTokenItem) ? get_class($ccPaymentCcTokenItem) : sprintf('%s(%s)', gettype($ccPaymentCcTokenItem), var_export($ccPaymentCcTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ccToken property can only contain items of type \Pggns\MidocoApi\Order\StructType\CcToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ccToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CcToken[] $ccToken
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
     */
    public function setCcToken(array $ccToken = []): self
    {
        // validation for constraint: array
        if ('' !== ($ccTokenArrayErrorMessage = self::validateCcTokenForArrayConstraintsFromSetCcToken($ccToken))) {
            throw new InvalidArgumentException($ccTokenArrayErrorMessage, __LINE__);
        }
        $this->ccToken = $ccToken;
        
        return $this;
    }
    /**
     * Add item to ccToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CcToken $item
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
     */
    public function addToCcToken(\Pggns\MidocoApi\Order\StructType\CcToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CcToken) {
            throw new InvalidArgumentException(sprintf('The ccToken property can only contain items of type \Pggns\MidocoApi\Order\StructType\CcToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ccToken[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CcPayment
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
}
