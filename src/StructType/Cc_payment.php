<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cc-payment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Cc_payment extends AbstractStructBase
{
    /**
     * The cc_type
     * @var string|null
     */
    protected ?string $cc_type = null;
    /**
     * The cc_number
     * Meta information extracted from the WSDL
     * - base: xs:string
     * @var string|null
     */
    protected ?string $cc_number = null;
    /**
     * The cc_valid_year
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}
     * @var string|null
     */
    protected ?string $cc_valid_year = null;
    /**
     * The cc_valid_month
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{2}
     * @var string|null
     */
    protected ?string $cc_valid_month = null;
    /**
     * The cvc_code
     * Meta information extracted from the WSDL
     * - documentation: this field won't be saved
     * - base: xs:string
     * - maxLength: 4
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cvc_code = null;
    /**
     * The cc_additional_info
     * Meta information extracted from the WSDL
     * - documentation: Additional air plus flight payments
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo[]
     */
    protected ?array $cc_additional_info = null;
    /**
     * The card_holder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $card_holder = null;
    /**
     * The cc_token
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: cc-token
     * @var \Pggns\MidocoApi\Order\StructType\Cc_token[]
     */
    protected ?array $cc_token = null;
    /**
     * The payment_channel_indicator
     * Meta information extracted from the WSDL
     * - documentation: This field indicates whether payment data was entered by the payee online (ecom) or via mail order telefon order = offline (moto). <br/><lu>possible values: <li>ecom</li> <li>moto</li> </lu>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $payment_channel_indicator = null;
    /**
     * The cardholder_auth_verification
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the way the authentication ID (XID or DSTID) was created. It is expected by the payment provider as CAVV.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cardholder_auth_verification = null;
    /**
     * The electronic_commerce_indicator
     * Meta information extracted from the WSDL
     * - documentation: This field is for validation when receiving the ECI to be one of the named values. It is expected by the payment provider. <br/><lu>possible values: <li>00=Mastercard no 3DS authentication/failure</li> <li>01=Mastercard attempted
     * authentication</li> <li>02=Mastercard fully authenticated</li> <li>05=Visa, AMEX, JCB, Diners/Discover fully authenticated</li> <li>06=Mastercard Acquirer exemption; no 3DS authentication</li> <li>06=Visa, AMEX, JCB, Diners/Discover attempted
     * authentication</li> <li>07=Mastercard fully authentication - recurring/installment transaction</li> <li>07=Visa, AMEX, JCB, Diners/Disvover no 3DS authentication/failure</li> </lu>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $electronic_commerce_indicator = null;
    /**
     * The xid
     * Meta information extracted from the WSDL
     * - documentation: <b>Transaction ID in 3D Secure version 1.x cases (XID)<b/><br/> This transaction reference is issued by the bank when a 3DS version 1.x authentication was successful. It is expected by the payment provider. <br/>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $xid = null;
    /**
     * The auth_amount
     * Meta information extracted from the WSDL
     * - documentation: An authentication is linked to an amount which the card holder is shown in the authentication process.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $auth_amount = null;
    /**
     * The remaining_auth_amount
     * Meta information extracted from the WSDL
     * - documentation: This field contains how much of the initially authenticated amount can still be used in transactions.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $remaining_auth_amount = null;
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
     * The initial_ecom_transaction_id
     * Meta information extracted from the WSDL
     * - documentation: Transaction ID of the initial successful ECOM transaction. Used as reference in every subsequent debit transaction
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $initial_ecom_transaction_id = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for cc-payment
     * @uses Cc_payment::setCc_type()
     * @uses Cc_payment::setCc_number()
     * @uses Cc_payment::setCc_valid_year()
     * @uses Cc_payment::setCc_valid_month()
     * @uses Cc_payment::setCvc_code()
     * @uses Cc_payment::setCc_additional_info()
     * @uses Cc_payment::setCard_holder()
     * @uses Cc_payment::setCc_token()
     * @uses Cc_payment::setPayment_channel_indicator()
     * @uses Cc_payment::setCardholder_auth_verification()
     * @uses Cc_payment::setElectronic_commerce_indicator()
     * @uses Cc_payment::setXid()
     * @uses Cc_payment::setAuth_amount()
     * @uses Cc_payment::setRemaining_auth_amount()
     * @uses Cc_payment::setV3ds()
     * @uses Cc_payment::setDstid()
     * @uses Cc_payment::setInitial_ecom_transaction_id()
     * @uses Cc_payment::setPosition()
     * @param string $cc_type
     * @param string $cc_number
     * @param string $cc_valid_year
     * @param string $cc_valid_month
     * @param string $cvc_code
     * @param \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo[] $cc_additional_info
     * @param string $card_holder
     * @param \Pggns\MidocoApi\Order\StructType\Cc_token[] $cc_token
     * @param string $payment_channel_indicator
     * @param string $cardholder_auth_verification
     * @param string $electronic_commerce_indicator
     * @param string $xid
     * @param float $auth_amount
     * @param float $remaining_auth_amount
     * @param string $v3ds
     * @param string $dstid
     * @param string $initial_ecom_transaction_id
     * @param int $position
     */
    public function __construct(?string $cc_type = null, ?string $cc_number = null, ?string $cc_valid_year = null, ?string $cc_valid_month = null, ?string $cvc_code = null, ?array $cc_additional_info = null, ?string $card_holder = null, ?array $cc_token = null, ?string $payment_channel_indicator = null, ?string $cardholder_auth_verification = null, ?string $electronic_commerce_indicator = null, ?string $xid = null, ?float $auth_amount = null, ?float $remaining_auth_amount = null, ?string $v3ds = null, ?string $dstid = null, ?string $initial_ecom_transaction_id = null, ?int $position = null)
    {
        $this
            ->setCc_type($cc_type)
            ->setCc_number($cc_number)
            ->setCc_valid_year($cc_valid_year)
            ->setCc_valid_month($cc_valid_month)
            ->setCvc_code($cvc_code)
            ->setCc_additional_info($cc_additional_info)
            ->setCard_holder($card_holder)
            ->setCc_token($cc_token)
            ->setPayment_channel_indicator($payment_channel_indicator)
            ->setCardholder_auth_verification($cardholder_auth_verification)
            ->setElectronic_commerce_indicator($electronic_commerce_indicator)
            ->setXid($xid)
            ->setAuth_amount($auth_amount)
            ->setRemaining_auth_amount($remaining_auth_amount)
            ->setV3ds($v3ds)
            ->setDstid($dstid)
            ->setInitial_ecom_transaction_id($initial_ecom_transaction_id)
            ->setPosition($position);
    }
    /**
     * Get cc_type value
     * @return string|null
     */
    public function getCc_type(): ?string
    {
        return $this->{'cc-type'};
    }
    /**
     * Set cc_type value
     * @param string $cc_type
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setCc_type(?string $cc_type = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_type) && !is_string($cc_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_type, true), gettype($cc_type)), __LINE__);
        }
        $this->cc_type = $this->{'cc-type'} = $cc_type;
        
        return $this;
    }
    /**
     * Get cc_number value
     * @return string|null
     */
    public function getCc_number(): ?string
    {
        return $this->{'cc-number'};
    }
    /**
     * Set cc_number value
     * @param string $cc_number
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setCc_number(?string $cc_number = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_number) && !is_string($cc_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_number, true), gettype($cc_number)), __LINE__);
        }
        $this->cc_number = $this->{'cc-number'} = $cc_number;
        
        return $this;
    }
    /**
     * Get cc_valid_year value
     * @return string|null
     */
    public function getCc_valid_year(): ?string
    {
        return $this->{'cc-valid-year'};
    }
    /**
     * Set cc_valid_year value
     * @param string $cc_valid_year
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setCc_valid_year(?string $cc_valid_year = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_valid_year) && !is_string($cc_valid_year)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_valid_year, true), gettype($cc_valid_year)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4})
        if (!is_null($cc_valid_year) && !preg_match('/[0-9]{4}/', (string) $cc_valid_year)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}/', var_export($cc_valid_year, true)), __LINE__);
        }
        $this->cc_valid_year = $this->{'cc-valid-year'} = $cc_valid_year;
        
        return $this;
    }
    /**
     * Get cc_valid_month value
     * @return string|null
     */
    public function getCc_valid_month(): ?string
    {
        return $this->{'cc-valid-month'};
    }
    /**
     * Set cc_valid_month value
     * @param string $cc_valid_month
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setCc_valid_month(?string $cc_valid_month = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_valid_month) && !is_string($cc_valid_month)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_valid_month, true), gettype($cc_valid_month)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2})
        if (!is_null($cc_valid_month) && !preg_match('/[0-9]{2}/', (string) $cc_valid_month)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}/', var_export($cc_valid_month, true)), __LINE__);
        }
        $this->cc_valid_month = $this->{'cc-valid-month'} = $cc_valid_month;
        
        return $this;
    }
    /**
     * Get cvc_code value
     * @return string|null
     */
    public function getCvc_code(): ?string
    {
        return $this->{'cvc-code'};
    }
    /**
     * Set cvc_code value
     * @param string $cvc_code
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setCvc_code(?string $cvc_code = null): self
    {
        // validation for constraint: string
        if (!is_null($cvc_code) && !is_string($cvc_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvc_code, true), gettype($cvc_code)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($cvc_code) && mb_strlen((string) $cvc_code) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $cvc_code)), __LINE__);
        }
        $this->cvc_code = $this->{'cvc-code'} = $cvc_code;
        
        return $this;
    }
    /**
     * Get cc_additional_info value
     * @return \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo[]
     */
    public function getCc_additional_info(): ?array
    {
        return $this->{'cc-additional-info'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCc_additional_info method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCc_additional_info method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCc_additional_infoForArrayConstraintFromSetCc_additional_info(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cc_paymentCc_additional_infoItem) {
            // validation for constraint: itemType
            if (!$cc_paymentCc_additional_infoItem instanceof \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo) {
                $invalidValues[] = is_object($cc_paymentCc_additional_infoItem) ? get_class($cc_paymentCc_additional_infoItem) : sprintf('%s(%s)', gettype($cc_paymentCc_additional_infoItem), var_export($cc_paymentCc_additional_infoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cc_additional_info property can only contain items of type \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set cc_additional_info value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo[] $cc_additional_info
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setCc_additional_info(?array $cc_additional_info = null): self
    {
        // validation for constraint: array
        if ('' !== ($cc_additional_infoArrayErrorMessage = self::validateCc_additional_infoForArrayConstraintFromSetCc_additional_info($cc_additional_info))) {
            throw new InvalidArgumentException($cc_additional_infoArrayErrorMessage, __LINE__);
        }
        $this->cc_additional_info = $this->{'cc-additional-info'} = $cc_additional_info;
        
        return $this;
    }
    /**
     * Add item to cc_additional_info value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function addToCc_additional_info(\Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo) {
            throw new InvalidArgumentException(sprintf('The cc_additional_info property can only contain items of type \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cc_additional_info[] = $this->{'cc-additional-info'}[] = $item;
        
        return $this;
    }
    /**
     * Get card_holder value
     * @return string|null
     */
    public function getCard_holder(): ?string
    {
        return $this->{'card-holder'};
    }
    /**
     * Set card_holder value
     * @param string $card_holder
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setCard_holder(?string $card_holder = null): self
    {
        // validation for constraint: string
        if (!is_null($card_holder) && !is_string($card_holder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($card_holder, true), gettype($card_holder)), __LINE__);
        }
        $this->card_holder = $this->{'card-holder'} = $card_holder;
        
        return $this;
    }
    /**
     * Get cc_token value
     * @return \Pggns\MidocoApi\Order\StructType\Cc_token[]
     */
    public function getCc_token(): ?array
    {
        return $this->{'cc-token'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCc_token method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCc_token method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCc_tokenForArrayConstraintFromSetCc_token(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cc_paymentCc_tokenItem) {
            // validation for constraint: itemType
            if (!$cc_paymentCc_tokenItem instanceof \Pggns\MidocoApi\Order\StructType\Cc_token) {
                $invalidValues[] = is_object($cc_paymentCc_tokenItem) ? get_class($cc_paymentCc_tokenItem) : sprintf('%s(%s)', gettype($cc_paymentCc_tokenItem), var_export($cc_paymentCc_tokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cc_token property can only contain items of type \Pggns\MidocoApi\Order\StructType\Cc_token, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set cc_token value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Cc_token[] $cc_token
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setCc_token(?array $cc_token = null): self
    {
        // validation for constraint: array
        if ('' !== ($cc_tokenArrayErrorMessage = self::validateCc_tokenForArrayConstraintFromSetCc_token($cc_token))) {
            throw new InvalidArgumentException($cc_tokenArrayErrorMessage, __LINE__);
        }
        $this->cc_token = $this->{'cc-token'} = $cc_token;
        
        return $this;
    }
    /**
     * Add item to cc_token value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Cc_token $item
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function addToCc_token(\Pggns\MidocoApi\Order\StructType\Cc_token $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Cc_token) {
            throw new InvalidArgumentException(sprintf('The cc_token property can only contain items of type \Pggns\MidocoApi\Order\StructType\Cc_token, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cc_token[] = $this->{'cc-token'}[] = $item;
        
        return $this;
    }
    /**
     * Get payment_channel_indicator value
     * @return string|null
     */
    public function getPayment_channel_indicator(): ?string
    {
        return $this->{'payment-channel-indicator'};
    }
    /**
     * Set payment_channel_indicator value
     * @param string $payment_channel_indicator
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setPayment_channel_indicator(?string $payment_channel_indicator = null): self
    {
        // validation for constraint: string
        if (!is_null($payment_channel_indicator) && !is_string($payment_channel_indicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payment_channel_indicator, true), gettype($payment_channel_indicator)), __LINE__);
        }
        $this->payment_channel_indicator = $this->{'payment-channel-indicator'} = $payment_channel_indicator;
        
        return $this;
    }
    /**
     * Get cardholder_auth_verification value
     * @return string|null
     */
    public function getCardholder_auth_verification(): ?string
    {
        return $this->{'cardholder-auth-verification'};
    }
    /**
     * Set cardholder_auth_verification value
     * @param string $cardholder_auth_verification
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setCardholder_auth_verification(?string $cardholder_auth_verification = null): self
    {
        // validation for constraint: string
        if (!is_null($cardholder_auth_verification) && !is_string($cardholder_auth_verification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardholder_auth_verification, true), gettype($cardholder_auth_verification)), __LINE__);
        }
        $this->cardholder_auth_verification = $this->{'cardholder-auth-verification'} = $cardholder_auth_verification;
        
        return $this;
    }
    /**
     * Get electronic_commerce_indicator value
     * @return string|null
     */
    public function getElectronic_commerce_indicator(): ?string
    {
        return $this->{'electronic-commerce-indicator'};
    }
    /**
     * Set electronic_commerce_indicator value
     * @param string $electronic_commerce_indicator
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setElectronic_commerce_indicator(?string $electronic_commerce_indicator = null): self
    {
        // validation for constraint: string
        if (!is_null($electronic_commerce_indicator) && !is_string($electronic_commerce_indicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($electronic_commerce_indicator, true), gettype($electronic_commerce_indicator)), __LINE__);
        }
        $this->electronic_commerce_indicator = $this->{'electronic-commerce-indicator'} = $electronic_commerce_indicator;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
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
     * Get auth_amount value
     * @return float|null
     */
    public function getAuth_amount(): ?float
    {
        return $this->{'auth-amount'};
    }
    /**
     * Set auth_amount value
     * @param float $auth_amount
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setAuth_amount(?float $auth_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($auth_amount) && !(is_float($auth_amount) || is_numeric($auth_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($auth_amount, true), gettype($auth_amount)), __LINE__);
        }
        $this->auth_amount = $this->{'auth-amount'} = $auth_amount;
        
        return $this;
    }
    /**
     * Get remaining_auth_amount value
     * @return float|null
     */
    public function getRemaining_auth_amount(): ?float
    {
        return $this->{'remaining-auth-amount'};
    }
    /**
     * Set remaining_auth_amount value
     * @param float $remaining_auth_amount
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setRemaining_auth_amount(?float $remaining_auth_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($remaining_auth_amount) && !(is_float($remaining_auth_amount) || is_numeric($remaining_auth_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($remaining_auth_amount, true), gettype($remaining_auth_amount)), __LINE__);
        }
        $this->remaining_auth_amount = $this->{'remaining-auth-amount'} = $remaining_auth_amount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
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
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
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
     * Get initial_ecom_transaction_id value
     * @return string|null
     */
    public function getInitial_ecom_transaction_id(): ?string
    {
        return $this->{'initial-ecom-transaction-id'};
    }
    /**
     * Set initial_ecom_transaction_id value
     * @param string $initial_ecom_transaction_id
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
     */
    public function setInitial_ecom_transaction_id(?string $initial_ecom_transaction_id = null): self
    {
        // validation for constraint: string
        if (!is_null($initial_ecom_transaction_id) && !is_string($initial_ecom_transaction_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initial_ecom_transaction_id, true), gettype($initial_ecom_transaction_id)), __LINE__);
        }
        $this->initial_ecom_transaction_id = $this->{'initial-ecom-transaction-id'} = $initial_ecom_transaction_id;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment
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
