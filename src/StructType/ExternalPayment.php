<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalPayment StructType
 * Meta information extracted from the WSDL
 * - documentation: Payment for a booking or an Order
 * @subpackage Structs
 */
class ExternalPayment extends AbstractStructBase
{
    /**
     * The payment_date
     * @var string|null
     */
    protected ?string $payment_date = null;
    /**
     * The transaction_number
     * Meta information extracted from the WSDL
     * - documentation: unique identifier to detect double imports
     * @var string|null
     */
    protected ?string $transaction_number = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - default: EUR
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The currencyRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $currencyRate = null;
    /**
     * The error_code
     * Meta information extracted from the WSDL
     * - documentation: error on capture. payment will not processed by midoco
     * @var string|null
     */
    protected ?string $error_code = null;
    /**
     * The medium
     * @var string|null
     */
    protected ?string $medium = null;
    /**
     * The cc_token
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: cc-token
     * @var \Pggns\MidocoApi\Order\StructType\Cc_token|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Cc_token $cc_token = null;
    /**
     * The transaction_type
     * @var string|null
     */
    protected ?string $transaction_type = null;
    /**
     * The customer_name
     * @var string|null
     */
    protected ?string $customer_name = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The street_no
     * @var string|null
     */
    protected ?string $street_no = null;
    /**
     * The endorsement
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * The postal_code
     * @var string|null
     */
    protected ?string $postal_code = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The auth_code
     * @var string|null
     */
    protected ?string $auth_code = null;
    /**
     * The reference_number
     * @var string|null
     */
    protected ?string $reference_number = null;
    /**
     * The cc_card_number
     * @var string|null
     */
    protected ?string $cc_card_number = null;
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
     * The cc_check_number
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $cc_check_number = null;
    /**
     * The cc_issue_number
     * @var string|null
     */
    protected ?string $cc_issue_number = null;
    /**
     * The cc_start_date
     * @var string|null
     */
    protected ?string $cc_start_date = null;
    /**
     * The elv_bankname
     * @var string|null
     */
    protected ?string $elv_bankname = null;
    /**
     * The elv_bankcode
     * @var string|null
     */
    protected ?string $elv_bankcode = null;
    /**
     * The elv_bank_account_no
     * @var string|null
     */
    protected ?string $elv_bank_account_no = null;
    /**
     * The mp_mobile_number
     * @var string|null
     */
    protected ?string $mp_mobile_number = null;
    /**
     * The order_id
     * @var int|null
     */
    protected ?int $order_id = null;
    /**
     * The transaction_id
     * @var string|null
     */
    protected ?string $transaction_id = null;
    /**
     * The security_code
     * @var string|null
     */
    protected ?string $security_code = null;
    /**
     * The shopper_id
     * @var string|null
     */
    protected ?string $shopper_id = null;
    /**
     * The ip_country
     * @var string|null
     */
    protected ?string $ip_country = null;
    /**
     * The invoice_text
     * Meta information extracted from the WSDL
     * - documentation: referencing booking id, to detect order for payment
     * @var string|null
     */
    protected ?string $invoice_text = null;
    /**
     * The payment_country
     * @var string|null
     */
    protected ?string $payment_country = null;
    /**
     * The address_checked
     * @var string|null
     */
    protected ?string $address_checked = null;
    /**
     * The check_fraud
     * @var string|null
     */
    protected ?string $check_fraud = null;
    /**
     * The card_holder
     * @var string|null
     */
    protected ?string $card_holder = null;
    /**
     * The paymentDate
     * @var string|null
     */
    protected ?string $paymentDate = null;
    /**
     * The transactionNumber
     * Meta information extracted from the WSDL
     * - documentation: unique identifier to detect double imports
     * @var string|null
     */
    protected ?string $transactionNumber = null;
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - documentation: error on capture. payment will not processed by midoco
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The ccToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ccToken
     * @var \Pggns\MidocoApi\Order\StructType\CcToken|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CcToken $ccToken = null;
    /**
     * The transactionType
     * @var string|null
     */
    protected ?string $transactionType = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The streetNo
     * @var string|null
     */
    protected ?string $streetNo = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The authCode
     * @var string|null
     */
    protected ?string $authCode = null;
    /**
     * The referenceNumber
     * @var string|null
     */
    protected ?string $referenceNumber = null;
    /**
     * The ccCardNumber
     * @var string|null
     */
    protected ?string $ccCardNumber = null;
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
     * The ccCheckNumber
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $ccCheckNumber = null;
    /**
     * The ccIssueNumber
     * @var string|null
     */
    protected ?string $ccIssueNumber = null;
    /**
     * The ccStartDate
     * @var string|null
     */
    protected ?string $ccStartDate = null;
    /**
     * The elvBankname
     * @var string|null
     */
    protected ?string $elvBankname = null;
    /**
     * The elvBankcode
     * @var string|null
     */
    protected ?string $elvBankcode = null;
    /**
     * The elvBankAccountNo
     * @var string|null
     */
    protected ?string $elvBankAccountNo = null;
    /**
     * The mpMobileNumber
     * @var string|null
     */
    protected ?string $mpMobileNumber = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The transactionId
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * The securityCode
     * @var string|null
     */
    protected ?string $securityCode = null;
    /**
     * The shopperId
     * @var string|null
     */
    protected ?string $shopperId = null;
    /**
     * The ipCountry
     * @var string|null
     */
    protected ?string $ipCountry = null;
    /**
     * The invoiceText
     * Meta information extracted from the WSDL
     * - documentation: referencing booking id, to detect order for payment
     * @var string|null
     */
    protected ?string $invoiceText = null;
    /**
     * The paymentCountry
     * @var string|null
     */
    protected ?string $paymentCountry = null;
    /**
     * The addressChecked
     * @var string|null
     */
    protected ?string $addressChecked = null;
    /**
     * The checkFraud
     * @var string|null
     */
    protected ?string $checkFraud = null;
    /**
     * The cardHolder
     * @var string|null
     */
    protected ?string $cardHolder = null;
    /**
     * Constructor method for ExternalPayment
     * @uses ExternalPayment::setPayment_date()
     * @uses ExternalPayment::setTransaction_number()
     * @uses ExternalPayment::setAmount()
     * @uses ExternalPayment::setCurrency()
     * @uses ExternalPayment::setCurrencyRate()
     * @uses ExternalPayment::setError_code()
     * @uses ExternalPayment::setMedium()
     * @uses ExternalPayment::setCc_token()
     * @uses ExternalPayment::setTransaction_type()
     * @uses ExternalPayment::setCustomer_name()
     * @uses ExternalPayment::setEmail()
     * @uses ExternalPayment::setStreet()
     * @uses ExternalPayment::setStreet_no()
     * @uses ExternalPayment::setEndorsement()
     * @uses ExternalPayment::setPostal_code()
     * @uses ExternalPayment::setState()
     * @uses ExternalPayment::setCountry()
     * @uses ExternalPayment::setComment()
     * @uses ExternalPayment::setAuth_code()
     * @uses ExternalPayment::setReference_number()
     * @uses ExternalPayment::setCc_card_number()
     * @uses ExternalPayment::setCc_valid_year()
     * @uses ExternalPayment::setCc_valid_month()
     * @uses ExternalPayment::setCc_check_number()
     * @uses ExternalPayment::setCc_issue_number()
     * @uses ExternalPayment::setCc_start_date()
     * @uses ExternalPayment::setElv_bankname()
     * @uses ExternalPayment::setElv_bankcode()
     * @uses ExternalPayment::setElv_bank_account_no()
     * @uses ExternalPayment::setMp_mobile_number()
     * @uses ExternalPayment::setOrder_id()
     * @uses ExternalPayment::setTransaction_id()
     * @uses ExternalPayment::setSecurity_code()
     * @uses ExternalPayment::setShopper_id()
     * @uses ExternalPayment::setIp_country()
     * @uses ExternalPayment::setInvoice_text()
     * @uses ExternalPayment::setPayment_country()
     * @uses ExternalPayment::setAddress_checked()
     * @uses ExternalPayment::setCheck_fraud()
     * @uses ExternalPayment::setCard_holder()
     * @uses ExternalPayment::setPaymentDate()
     * @uses ExternalPayment::setTransactionNumber()
     * @uses ExternalPayment::setErrorCode()
     * @uses ExternalPayment::setCcToken()
     * @uses ExternalPayment::setTransactionType()
     * @uses ExternalPayment::setCustomerName()
     * @uses ExternalPayment::setStreetNo()
     * @uses ExternalPayment::setPostalCode()
     * @uses ExternalPayment::setAuthCode()
     * @uses ExternalPayment::setReferenceNumber()
     * @uses ExternalPayment::setCcCardNumber()
     * @uses ExternalPayment::setCcValidYear()
     * @uses ExternalPayment::setCcValidMonth()
     * @uses ExternalPayment::setCcCheckNumber()
     * @uses ExternalPayment::setCcIssueNumber()
     * @uses ExternalPayment::setCcStartDate()
     * @uses ExternalPayment::setElvBankname()
     * @uses ExternalPayment::setElvBankcode()
     * @uses ExternalPayment::setElvBankAccountNo()
     * @uses ExternalPayment::setMpMobileNumber()
     * @uses ExternalPayment::setOrderId()
     * @uses ExternalPayment::setTransactionId()
     * @uses ExternalPayment::setSecurityCode()
     * @uses ExternalPayment::setShopperId()
     * @uses ExternalPayment::setIpCountry()
     * @uses ExternalPayment::setInvoiceText()
     * @uses ExternalPayment::setPaymentCountry()
     * @uses ExternalPayment::setAddressChecked()
     * @uses ExternalPayment::setCheckFraud()
     * @uses ExternalPayment::setCardHolder()
     * @param string $payment_date
     * @param string $transaction_number
     * @param float $amount
     * @param string $currency
     * @param float $currencyRate
     * @param string $error_code
     * @param string $medium
     * @param \Pggns\MidocoApi\Order\StructType\Cc_token $cc_token
     * @param string $transaction_type
     * @param string $customer_name
     * @param string $email
     * @param string $street
     * @param string $street_no
     * @param string $endorsement
     * @param string $postal_code
     * @param string $state
     * @param string $country
     * @param string $comment
     * @param string $auth_code
     * @param string $reference_number
     * @param string $cc_card_number
     * @param string $cc_valid_year
     * @param string $cc_valid_month
     * @param bool $cc_check_number
     * @param string $cc_issue_number
     * @param string $cc_start_date
     * @param string $elv_bankname
     * @param string $elv_bankcode
     * @param string $elv_bank_account_no
     * @param string $mp_mobile_number
     * @param int $order_id
     * @param string $transaction_id
     * @param string $security_code
     * @param string $shopper_id
     * @param string $ip_country
     * @param string $invoice_text
     * @param string $payment_country
     * @param string $address_checked
     * @param string $check_fraud
     * @param string $card_holder
     * @param string $paymentDate
     * @param string $transactionNumber
     * @param string $errorCode
     * @param \Pggns\MidocoApi\Order\StructType\CcToken $ccToken
     * @param string $transactionType
     * @param string $customerName
     * @param string $streetNo
     * @param string $postalCode
     * @param string $authCode
     * @param string $referenceNumber
     * @param string $ccCardNumber
     * @param string $ccValidYear
     * @param string $ccValidMonth
     * @param bool $ccCheckNumber
     * @param string $ccIssueNumber
     * @param string $ccStartDate
     * @param string $elvBankname
     * @param string $elvBankcode
     * @param string $elvBankAccountNo
     * @param string $mpMobileNumber
     * @param int $orderId
     * @param string $transactionId
     * @param string $securityCode
     * @param string $shopperId
     * @param string $ipCountry
     * @param string $invoiceText
     * @param string $paymentCountry
     * @param string $addressChecked
     * @param string $checkFraud
     * @param string $cardHolder
     */
    public function __construct(?string $payment_date = null, ?string $transaction_number = null, ?float $amount = null, ?string $currency = 'EUR', ?float $currencyRate = null, ?string $error_code = null, ?string $medium = null, ?\Pggns\MidocoApi\Order\StructType\Cc_token $cc_token = null, ?string $transaction_type = null, ?string $customer_name = null, ?string $email = null, ?string $street = null, ?string $street_no = null, ?string $endorsement = null, ?string $postal_code = null, ?string $state = null, ?string $country = null, ?string $comment = null, ?string $auth_code = null, ?string $reference_number = null, ?string $cc_card_number = null, ?string $cc_valid_year = null, ?string $cc_valid_month = null, ?bool $cc_check_number = false, ?string $cc_issue_number = null, ?string $cc_start_date = null, ?string $elv_bankname = null, ?string $elv_bankcode = null, ?string $elv_bank_account_no = null, ?string $mp_mobile_number = null, ?int $order_id = null, ?string $transaction_id = null, ?string $security_code = null, ?string $shopper_id = null, ?string $ip_country = null, ?string $invoice_text = null, ?string $payment_country = null, ?string $address_checked = null, ?string $check_fraud = null, ?string $card_holder = null, ?string $paymentDate = null, ?string $transactionNumber = null, ?string $errorCode = null, ?\Pggns\MidocoApi\Order\StructType\CcToken $ccToken = null, ?string $transactionType = null, ?string $customerName = null, ?string $streetNo = null, ?string $postalCode = null, ?string $authCode = null, ?string $referenceNumber = null, ?string $ccCardNumber = null, ?string $ccValidYear = null, ?string $ccValidMonth = null, ?bool $ccCheckNumber = false, ?string $ccIssueNumber = null, ?string $ccStartDate = null, ?string $elvBankname = null, ?string $elvBankcode = null, ?string $elvBankAccountNo = null, ?string $mpMobileNumber = null, ?int $orderId = null, ?string $transactionId = null, ?string $securityCode = null, ?string $shopperId = null, ?string $ipCountry = null, ?string $invoiceText = null, ?string $paymentCountry = null, ?string $addressChecked = null, ?string $checkFraud = null, ?string $cardHolder = null)
    {
        $this
            ->setPayment_date($payment_date)
            ->setTransaction_number($transaction_number)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setCurrencyRate($currencyRate)
            ->setError_code($error_code)
            ->setMedium($medium)
            ->setCc_token($cc_token)
            ->setTransaction_type($transaction_type)
            ->setCustomer_name($customer_name)
            ->setEmail($email)
            ->setStreet($street)
            ->setStreet_no($street_no)
            ->setEndorsement($endorsement)
            ->setPostal_code($postal_code)
            ->setState($state)
            ->setCountry($country)
            ->setComment($comment)
            ->setAuth_code($auth_code)
            ->setReference_number($reference_number)
            ->setCc_card_number($cc_card_number)
            ->setCc_valid_year($cc_valid_year)
            ->setCc_valid_month($cc_valid_month)
            ->setCc_check_number($cc_check_number)
            ->setCc_issue_number($cc_issue_number)
            ->setCc_start_date($cc_start_date)
            ->setElv_bankname($elv_bankname)
            ->setElv_bankcode($elv_bankcode)
            ->setElv_bank_account_no($elv_bank_account_no)
            ->setMp_mobile_number($mp_mobile_number)
            ->setOrder_id($order_id)
            ->setTransaction_id($transaction_id)
            ->setSecurity_code($security_code)
            ->setShopper_id($shopper_id)
            ->setIp_country($ip_country)
            ->setInvoice_text($invoice_text)
            ->setPayment_country($payment_country)
            ->setAddress_checked($address_checked)
            ->setCheck_fraud($check_fraud)
            ->setCard_holder($card_holder)
            ->setPaymentDate($paymentDate)
            ->setTransactionNumber($transactionNumber)
            ->setErrorCode($errorCode)
            ->setCcToken($ccToken)
            ->setTransactionType($transactionType)
            ->setCustomerName($customerName)
            ->setStreetNo($streetNo)
            ->setPostalCode($postalCode)
            ->setAuthCode($authCode)
            ->setReferenceNumber($referenceNumber)
            ->setCcCardNumber($ccCardNumber)
            ->setCcValidYear($ccValidYear)
            ->setCcValidMonth($ccValidMonth)
            ->setCcCheckNumber($ccCheckNumber)
            ->setCcIssueNumber($ccIssueNumber)
            ->setCcStartDate($ccStartDate)
            ->setElvBankname($elvBankname)
            ->setElvBankcode($elvBankcode)
            ->setElvBankAccountNo($elvBankAccountNo)
            ->setMpMobileNumber($mpMobileNumber)
            ->setOrderId($orderId)
            ->setTransactionId($transactionId)
            ->setSecurityCode($securityCode)
            ->setShopperId($shopperId)
            ->setIpCountry($ipCountry)
            ->setInvoiceText($invoiceText)
            ->setPaymentCountry($paymentCountry)
            ->setAddressChecked($addressChecked)
            ->setCheckFraud($checkFraud)
            ->setCardHolder($cardHolder);
    }
    /**
     * Get payment_date value
     * @return string|null
     */
    public function getPayment_date(): ?string
    {
        return $this->{'payment-date'};
    }
    /**
     * Set payment_date value
     * @param string $payment_date
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setPayment_date(?string $payment_date = null): self
    {
        // validation for constraint: string
        if (!is_null($payment_date) && !is_string($payment_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payment_date, true), gettype($payment_date)), __LINE__);
        }
        $this->payment_date = $this->{'payment-date'} = $payment_date;
        
        return $this;
    }
    /**
     * Get transaction_number value
     * @return string|null
     */
    public function getTransaction_number(): ?string
    {
        return $this->{'transaction-number'};
    }
    /**
     * Set transaction_number value
     * @param string $transaction_number
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setTransaction_number(?string $transaction_number = null): self
    {
        // validation for constraint: string
        if (!is_null($transaction_number) && !is_string($transaction_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction_number, true), gettype($transaction_number)), __LINE__);
        }
        $this->transaction_number = $this->{'transaction-number'} = $transaction_number;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCurrency(?string $currency = 'EUR'): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get currencyRate value
     * @return float|null
     */
    public function getCurrencyRate(): ?float
    {
        return $this->currencyRate;
    }
    /**
     * Set currencyRate value
     * @param float $currencyRate
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCurrencyRate(?float $currencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($currencyRate) && !(is_float($currencyRate) || is_numeric($currencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($currencyRate, true), gettype($currencyRate)), __LINE__);
        }
        $this->currencyRate = $currencyRate;
        
        return $this;
    }
    /**
     * Get error_code value
     * @return string|null
     */
    public function getError_code(): ?string
    {
        return $this->{'error-code'};
    }
    /**
     * Set error_code value
     * @param string $error_code
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setError_code(?string $error_code = null): self
    {
        // validation for constraint: string
        if (!is_null($error_code) && !is_string($error_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error_code, true), gettype($error_code)), __LINE__);
        }
        $this->error_code = $this->{'error-code'} = $error_code;
        
        return $this;
    }
    /**
     * Get medium value
     * @return string|null
     */
    public function getMedium(): ?string
    {
        return $this->medium;
    }
    /**
     * Set medium value
     * @uses \Pggns\MidocoApi\Order\EnumType\Medium::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Medium::getValidValues()
     * @throws InvalidArgumentException
     * @param string $medium
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setMedium(?string $medium = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Medium::valueIsValid($medium)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Medium', is_array($medium) ? implode(', ', $medium) : var_export($medium, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Medium::getValidValues())), __LINE__);
        }
        $this->medium = $medium;
        
        return $this;
    }
    /**
     * Get cc_token value
     * @return \Pggns\MidocoApi\Order\StructType\Cc_token|null
     */
    public function getCc_token(): ?\Pggns\MidocoApi\Order\StructType\Cc_token
    {
        return $this->{'cc-token'};
    }
    /**
     * Set cc_token value
     * @param \Pggns\MidocoApi\Order\StructType\Cc_token $cc_token
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCc_token(?\Pggns\MidocoApi\Order\StructType\Cc_token $cc_token = null): self
    {
        $this->cc_token = $this->{'cc-token'} = $cc_token;
        
        return $this;
    }
    /**
     * Get transaction_type value
     * @return string|null
     */
    public function getTransaction_type(): ?string
    {
        return $this->{'transaction-type'};
    }
    /**
     * Set transaction_type value
     * @param string $transaction_type
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setTransaction_type(?string $transaction_type = null): self
    {
        // validation for constraint: string
        if (!is_null($transaction_type) && !is_string($transaction_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction_type, true), gettype($transaction_type)), __LINE__);
        }
        $this->transaction_type = $this->{'transaction-type'} = $transaction_type;
        
        return $this;
    }
    /**
     * Get customer_name value
     * @return string|null
     */
    public function getCustomer_name(): ?string
    {
        return $this->{'customer-name'};
    }
    /**
     * Set customer_name value
     * @param string $customer_name
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCustomer_name(?string $customer_name = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_name) && !is_string($customer_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_name, true), gettype($customer_name)), __LINE__);
        }
        $this->customer_name = $this->{'customer-name'} = $customer_name;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get street_no value
     * @return string|null
     */
    public function getStreet_no(): ?string
    {
        return $this->{'street-no'};
    }
    /**
     * Set street_no value
     * @param string $street_no
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setStreet_no(?string $street_no = null): self
    {
        // validation for constraint: string
        if (!is_null($street_no) && !is_string($street_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street_no, true), gettype($street_no)), __LINE__);
        }
        $this->street_no = $this->{'street-no'} = $street_no;
        
        return $this;
    }
    /**
     * Get endorsement value
     * @return string|null
     */
    public function getEndorsement(): ?string
    {
        return $this->endorsement;
    }
    /**
     * Set endorsement value
     * @param string $endorsement
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setEndorsement(?string $endorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsement, true), gettype($endorsement)), __LINE__);
        }
        $this->endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Get postal_code value
     * @return string|null
     */
    public function getPostal_code(): ?string
    {
        return $this->{'postal-code'};
    }
    /**
     * Set postal_code value
     * @param string $postal_code
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setPostal_code(?string $postal_code = null): self
    {
        // validation for constraint: string
        if (!is_null($postal_code) && !is_string($postal_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postal_code, true), gettype($postal_code)), __LINE__);
        }
        $this->postal_code = $this->{'postal-code'} = $postal_code;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
        return $this;
    }
    /**
     * Get auth_code value
     * @return string|null
     */
    public function getAuth_code(): ?string
    {
        return $this->{'auth-code'};
    }
    /**
     * Set auth_code value
     * @param string $auth_code
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setAuth_code(?string $auth_code = null): self
    {
        // validation for constraint: string
        if (!is_null($auth_code) && !is_string($auth_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($auth_code, true), gettype($auth_code)), __LINE__);
        }
        $this->auth_code = $this->{'auth-code'} = $auth_code;
        
        return $this;
    }
    /**
     * Get reference_number value
     * @return string|null
     */
    public function getReference_number(): ?string
    {
        return $this->{'reference-number'};
    }
    /**
     * Set reference_number value
     * @param string $reference_number
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setReference_number(?string $reference_number = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_number) && !is_string($reference_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_number, true), gettype($reference_number)), __LINE__);
        }
        $this->reference_number = $this->{'reference-number'} = $reference_number;
        
        return $this;
    }
    /**
     * Get cc_card_number value
     * @return string|null
     */
    public function getCc_card_number(): ?string
    {
        return $this->{'cc-card-number'};
    }
    /**
     * Set cc_card_number value
     * @param string $cc_card_number
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCc_card_number(?string $cc_card_number = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_card_number) && !is_string($cc_card_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_card_number, true), gettype($cc_card_number)), __LINE__);
        }
        $this->cc_card_number = $this->{'cc-card-number'} = $cc_card_number;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCc_valid_year(?string $cc_valid_year = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_valid_year) && !is_string($cc_valid_year)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_valid_year, true), gettype($cc_valid_year)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4})
        if (!is_null($cc_valid_year) && !preg_match('/[0-9]{4}/', $cc_valid_year)) {
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCc_valid_month(?string $cc_valid_month = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_valid_month) && !is_string($cc_valid_month)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_valid_month, true), gettype($cc_valid_month)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2})
        if (!is_null($cc_valid_month) && !preg_match('/[0-9]{2}/', $cc_valid_month)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}/', var_export($cc_valid_month, true)), __LINE__);
        }
        $this->cc_valid_month = $this->{'cc-valid-month'} = $cc_valid_month;
        
        return $this;
    }
    /**
     * Get cc_check_number value
     * @return bool|null
     */
    public function getCc_check_number(): ?bool
    {
        return $this->{'cc-check-number'};
    }
    /**
     * Set cc_check_number value
     * @param bool $cc_check_number
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCc_check_number(?bool $cc_check_number = false): self
    {
        // validation for constraint: boolean
        if (!is_null($cc_check_number) && !is_bool($cc_check_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cc_check_number, true), gettype($cc_check_number)), __LINE__);
        }
        $this->cc_check_number = $this->{'cc-check-number'} = $cc_check_number;
        
        return $this;
    }
    /**
     * Get cc_issue_number value
     * @return string|null
     */
    public function getCc_issue_number(): ?string
    {
        return $this->{'cc-issue-number'};
    }
    /**
     * Set cc_issue_number value
     * @param string $cc_issue_number
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCc_issue_number(?string $cc_issue_number = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_issue_number) && !is_string($cc_issue_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_issue_number, true), gettype($cc_issue_number)), __LINE__);
        }
        $this->cc_issue_number = $this->{'cc-issue-number'} = $cc_issue_number;
        
        return $this;
    }
    /**
     * Get cc_start_date value
     * @return string|null
     */
    public function getCc_start_date(): ?string
    {
        return $this->{'cc-start-date'};
    }
    /**
     * Set cc_start_date value
     * @param string $cc_start_date
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCc_start_date(?string $cc_start_date = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_start_date) && !is_string($cc_start_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_start_date, true), gettype($cc_start_date)), __LINE__);
        }
        $this->cc_start_date = $this->{'cc-start-date'} = $cc_start_date;
        
        return $this;
    }
    /**
     * Get elv_bankname value
     * @return string|null
     */
    public function getElv_bankname(): ?string
    {
        return $this->{'elv-bankname'};
    }
    /**
     * Set elv_bankname value
     * @param string $elv_bankname
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setElv_bankname(?string $elv_bankname = null): self
    {
        // validation for constraint: string
        if (!is_null($elv_bankname) && !is_string($elv_bankname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elv_bankname, true), gettype($elv_bankname)), __LINE__);
        }
        $this->elv_bankname = $this->{'elv-bankname'} = $elv_bankname;
        
        return $this;
    }
    /**
     * Get elv_bankcode value
     * @return string|null
     */
    public function getElv_bankcode(): ?string
    {
        return $this->{'elv-bankcode'};
    }
    /**
     * Set elv_bankcode value
     * @param string $elv_bankcode
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setElv_bankcode(?string $elv_bankcode = null): self
    {
        // validation for constraint: string
        if (!is_null($elv_bankcode) && !is_string($elv_bankcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elv_bankcode, true), gettype($elv_bankcode)), __LINE__);
        }
        $this->elv_bankcode = $this->{'elv-bankcode'} = $elv_bankcode;
        
        return $this;
    }
    /**
     * Get elv_bank_account_no value
     * @return string|null
     */
    public function getElv_bank_account_no(): ?string
    {
        return $this->{'elv-bank-account-no'};
    }
    /**
     * Set elv_bank_account_no value
     * @param string $elv_bank_account_no
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setElv_bank_account_no(?string $elv_bank_account_no = null): self
    {
        // validation for constraint: string
        if (!is_null($elv_bank_account_no) && !is_string($elv_bank_account_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elv_bank_account_no, true), gettype($elv_bank_account_no)), __LINE__);
        }
        $this->elv_bank_account_no = $this->{'elv-bank-account-no'} = $elv_bank_account_no;
        
        return $this;
    }
    /**
     * Get mp_mobile_number value
     * @return string|null
     */
    public function getMp_mobile_number(): ?string
    {
        return $this->{'mp-mobile-number'};
    }
    /**
     * Set mp_mobile_number value
     * @param string $mp_mobile_number
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setMp_mobile_number(?string $mp_mobile_number = null): self
    {
        // validation for constraint: string
        if (!is_null($mp_mobile_number) && !is_string($mp_mobile_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mp_mobile_number, true), gettype($mp_mobile_number)), __LINE__);
        }
        $this->mp_mobile_number = $this->{'mp-mobile-number'} = $mp_mobile_number;
        
        return $this;
    }
    /**
     * Get order_id value
     * @return int|null
     */
    public function getOrder_id(): ?int
    {
        return $this->{'order-id'};
    }
    /**
     * Set order_id value
     * @param int $order_id
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setOrder_id(?int $order_id = null): self
    {
        // validation for constraint: int
        if (!is_null($order_id) && !(is_int($order_id) || ctype_digit($order_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order_id, true), gettype($order_id)), __LINE__);
        }
        $this->order_id = $this->{'order-id'} = $order_id;
        
        return $this;
    }
    /**
     * Get transaction_id value
     * @return string|null
     */
    public function getTransaction_id(): ?string
    {
        return $this->{'transaction-id'};
    }
    /**
     * Set transaction_id value
     * @param string $transaction_id
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setTransaction_id(?string $transaction_id = null): self
    {
        // validation for constraint: string
        if (!is_null($transaction_id) && !is_string($transaction_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction_id, true), gettype($transaction_id)), __LINE__);
        }
        $this->transaction_id = $this->{'transaction-id'} = $transaction_id;
        
        return $this;
    }
    /**
     * Get security_code value
     * @return string|null
     */
    public function getSecurity_code(): ?string
    {
        return $this->{'security-code'};
    }
    /**
     * Set security_code value
     * @param string $security_code
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setSecurity_code(?string $security_code = null): self
    {
        // validation for constraint: string
        if (!is_null($security_code) && !is_string($security_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($security_code, true), gettype($security_code)), __LINE__);
        }
        $this->security_code = $this->{'security-code'} = $security_code;
        
        return $this;
    }
    /**
     * Get shopper_id value
     * @return string|null
     */
    public function getShopper_id(): ?string
    {
        return $this->{'shopper-id'};
    }
    /**
     * Set shopper_id value
     * @param string $shopper_id
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setShopper_id(?string $shopper_id = null): self
    {
        // validation for constraint: string
        if (!is_null($shopper_id) && !is_string($shopper_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shopper_id, true), gettype($shopper_id)), __LINE__);
        }
        $this->shopper_id = $this->{'shopper-id'} = $shopper_id;
        
        return $this;
    }
    /**
     * Get ip_country value
     * @return string|null
     */
    public function getIp_country(): ?string
    {
        return $this->{'ip-country'};
    }
    /**
     * Set ip_country value
     * @param string $ip_country
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setIp_country(?string $ip_country = null): self
    {
        // validation for constraint: string
        if (!is_null($ip_country) && !is_string($ip_country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip_country, true), gettype($ip_country)), __LINE__);
        }
        $this->ip_country = $this->{'ip-country'} = $ip_country;
        
        return $this;
    }
    /**
     * Get invoice_text value
     * @return string|null
     */
    public function getInvoice_text(): ?string
    {
        return $this->{'invoice-text'};
    }
    /**
     * Set invoice_text value
     * @param string $invoice_text
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setInvoice_text(?string $invoice_text = null): self
    {
        // validation for constraint: string
        if (!is_null($invoice_text) && !is_string($invoice_text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoice_text, true), gettype($invoice_text)), __LINE__);
        }
        $this->invoice_text = $this->{'invoice-text'} = $invoice_text;
        
        return $this;
    }
    /**
     * Get payment_country value
     * @return string|null
     */
    public function getPayment_country(): ?string
    {
        return $this->{'payment-country'};
    }
    /**
     * Set payment_country value
     * @param string $payment_country
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setPayment_country(?string $payment_country = null): self
    {
        // validation for constraint: string
        if (!is_null($payment_country) && !is_string($payment_country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payment_country, true), gettype($payment_country)), __LINE__);
        }
        $this->payment_country = $this->{'payment-country'} = $payment_country;
        
        return $this;
    }
    /**
     * Get address_checked value
     * @return string|null
     */
    public function getAddress_checked(): ?string
    {
        return $this->{'address-checked'};
    }
    /**
     * Set address_checked value
     * @param string $address_checked
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setAddress_checked(?string $address_checked = null): self
    {
        // validation for constraint: string
        if (!is_null($address_checked) && !is_string($address_checked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_checked, true), gettype($address_checked)), __LINE__);
        }
        $this->address_checked = $this->{'address-checked'} = $address_checked;
        
        return $this;
    }
    /**
     * Get check_fraud value
     * @return string|null
     */
    public function getCheck_fraud(): ?string
    {
        return $this->{'check-fraud'};
    }
    /**
     * Set check_fraud value
     * @param string $check_fraud
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCheck_fraud(?string $check_fraud = null): self
    {
        // validation for constraint: string
        if (!is_null($check_fraud) && !is_string($check_fraud)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($check_fraud, true), gettype($check_fraud)), __LINE__);
        }
        $this->check_fraud = $this->{'check-fraud'} = $check_fraud;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
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
     * Get paymentDate value
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }
    /**
     * Set paymentDate value
     * @param string $paymentDate
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setPaymentDate(?string $paymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDate, true), gettype($paymentDate)), __LINE__);
        }
        $this->paymentDate = $paymentDate;
        
        return $this;
    }
    /**
     * Get transactionNumber value
     * @return string|null
     */
    public function getTransactionNumber(): ?string
    {
        return $this->transactionNumber;
    }
    /**
     * Set transactionNumber value
     * @param string $transactionNumber
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setTransactionNumber(?string $transactionNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionNumber) && !is_string($transactionNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionNumber, true), gettype($transactionNumber)), __LINE__);
        }
        $this->transactionNumber = $transactionNumber;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
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
     * Get ccToken value
     * @return \Pggns\MidocoApi\Order\StructType\CcToken|null
     */
    public function getCcToken(): ?\Pggns\MidocoApi\Order\StructType\CcToken
    {
        return $this->ccToken;
    }
    /**
     * Set ccToken value
     * @param \Pggns\MidocoApi\Order\StructType\CcToken $ccToken
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCcToken(?\Pggns\MidocoApi\Order\StructType\CcToken $ccToken = null): self
    {
        $this->ccToken = $ccToken;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
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
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get streetNo value
     * @return string|null
     */
    public function getStreetNo(): ?string
    {
        return $this->streetNo;
    }
    /**
     * Set streetNo value
     * @param string $streetNo
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setStreetNo(?string $streetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNo) && !is_string($streetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNo, true), gettype($streetNo)), __LINE__);
        }
        $this->streetNo = $streetNo;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get authCode value
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }
    /**
     * Set authCode value
     * @param string $authCode
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setAuthCode(?string $authCode = null): self
    {
        // validation for constraint: string
        if (!is_null($authCode) && !is_string($authCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authCode, true), gettype($authCode)), __LINE__);
        }
        $this->authCode = $authCode;
        
        return $this;
    }
    /**
     * Get referenceNumber value
     * @return string|null
     */
    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }
    /**
     * Set referenceNumber value
     * @param string $referenceNumber
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setReferenceNumber(?string $referenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceNumber) && !is_string($referenceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceNumber, true), gettype($referenceNumber)), __LINE__);
        }
        $this->referenceNumber = $referenceNumber;
        
        return $this;
    }
    /**
     * Get ccCardNumber value
     * @return string|null
     */
    public function getCcCardNumber(): ?string
    {
        return $this->ccCardNumber;
    }
    /**
     * Set ccCardNumber value
     * @param string $ccCardNumber
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCcCardNumber(?string $ccCardNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ccCardNumber) && !is_string($ccCardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccCardNumber, true), gettype($ccCardNumber)), __LINE__);
        }
        $this->ccCardNumber = $ccCardNumber;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
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
     * Get ccCheckNumber value
     * @return bool|null
     */
    public function getCcCheckNumber(): ?bool
    {
        return $this->ccCheckNumber;
    }
    /**
     * Set ccCheckNumber value
     * @param bool $ccCheckNumber
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCcCheckNumber(?bool $ccCheckNumber = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ccCheckNumber) && !is_bool($ccCheckNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ccCheckNumber, true), gettype($ccCheckNumber)), __LINE__);
        }
        $this->ccCheckNumber = $ccCheckNumber;
        
        return $this;
    }
    /**
     * Get ccIssueNumber value
     * @return string|null
     */
    public function getCcIssueNumber(): ?string
    {
        return $this->ccIssueNumber;
    }
    /**
     * Set ccIssueNumber value
     * @param string $ccIssueNumber
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCcIssueNumber(?string $ccIssueNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ccIssueNumber) && !is_string($ccIssueNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccIssueNumber, true), gettype($ccIssueNumber)), __LINE__);
        }
        $this->ccIssueNumber = $ccIssueNumber;
        
        return $this;
    }
    /**
     * Get ccStartDate value
     * @return string|null
     */
    public function getCcStartDate(): ?string
    {
        return $this->ccStartDate;
    }
    /**
     * Set ccStartDate value
     * @param string $ccStartDate
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCcStartDate(?string $ccStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($ccStartDate) && !is_string($ccStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccStartDate, true), gettype($ccStartDate)), __LINE__);
        }
        $this->ccStartDate = $ccStartDate;
        
        return $this;
    }
    /**
     * Get elvBankname value
     * @return string|null
     */
    public function getElvBankname(): ?string
    {
        return $this->elvBankname;
    }
    /**
     * Set elvBankname value
     * @param string $elvBankname
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setElvBankname(?string $elvBankname = null): self
    {
        // validation for constraint: string
        if (!is_null($elvBankname) && !is_string($elvBankname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elvBankname, true), gettype($elvBankname)), __LINE__);
        }
        $this->elvBankname = $elvBankname;
        
        return $this;
    }
    /**
     * Get elvBankcode value
     * @return string|null
     */
    public function getElvBankcode(): ?string
    {
        return $this->elvBankcode;
    }
    /**
     * Set elvBankcode value
     * @param string $elvBankcode
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setElvBankcode(?string $elvBankcode = null): self
    {
        // validation for constraint: string
        if (!is_null($elvBankcode) && !is_string($elvBankcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elvBankcode, true), gettype($elvBankcode)), __LINE__);
        }
        $this->elvBankcode = $elvBankcode;
        
        return $this;
    }
    /**
     * Get elvBankAccountNo value
     * @return string|null
     */
    public function getElvBankAccountNo(): ?string
    {
        return $this->elvBankAccountNo;
    }
    /**
     * Set elvBankAccountNo value
     * @param string $elvBankAccountNo
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setElvBankAccountNo(?string $elvBankAccountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($elvBankAccountNo) && !is_string($elvBankAccountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elvBankAccountNo, true), gettype($elvBankAccountNo)), __LINE__);
        }
        $this->elvBankAccountNo = $elvBankAccountNo;
        
        return $this;
    }
    /**
     * Get mpMobileNumber value
     * @return string|null
     */
    public function getMpMobileNumber(): ?string
    {
        return $this->mpMobileNumber;
    }
    /**
     * Set mpMobileNumber value
     * @param string $mpMobileNumber
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setMpMobileNumber(?string $mpMobileNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($mpMobileNumber) && !is_string($mpMobileNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mpMobileNumber, true), gettype($mpMobileNumber)), __LINE__);
        }
        $this->mpMobileNumber = $mpMobileNumber;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
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
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get securityCode value
     * @return string|null
     */
    public function getSecurityCode(): ?string
    {
        return $this->securityCode;
    }
    /**
     * Set securityCode value
     * @param string $securityCode
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setSecurityCode(?string $securityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($securityCode) && !is_string($securityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityCode, true), gettype($securityCode)), __LINE__);
        }
        $this->securityCode = $securityCode;
        
        return $this;
    }
    /**
     * Get shopperId value
     * @return string|null
     */
    public function getShopperId(): ?string
    {
        return $this->shopperId;
    }
    /**
     * Set shopperId value
     * @param string $shopperId
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setShopperId(?string $shopperId = null): self
    {
        // validation for constraint: string
        if (!is_null($shopperId) && !is_string($shopperId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shopperId, true), gettype($shopperId)), __LINE__);
        }
        $this->shopperId = $shopperId;
        
        return $this;
    }
    /**
     * Get ipCountry value
     * @return string|null
     */
    public function getIpCountry(): ?string
    {
        return $this->ipCountry;
    }
    /**
     * Set ipCountry value
     * @param string $ipCountry
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setIpCountry(?string $ipCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($ipCountry) && !is_string($ipCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ipCountry, true), gettype($ipCountry)), __LINE__);
        }
        $this->ipCountry = $ipCountry;
        
        return $this;
    }
    /**
     * Get invoiceText value
     * @return string|null
     */
    public function getInvoiceText(): ?string
    {
        return $this->invoiceText;
    }
    /**
     * Set invoiceText value
     * @param string $invoiceText
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setInvoiceText(?string $invoiceText = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceText) && !is_string($invoiceText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceText, true), gettype($invoiceText)), __LINE__);
        }
        $this->invoiceText = $invoiceText;
        
        return $this;
    }
    /**
     * Get paymentCountry value
     * @return string|null
     */
    public function getPaymentCountry(): ?string
    {
        return $this->paymentCountry;
    }
    /**
     * Set paymentCountry value
     * @param string $paymentCountry
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setPaymentCountry(?string $paymentCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentCountry) && !is_string($paymentCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentCountry, true), gettype($paymentCountry)), __LINE__);
        }
        $this->paymentCountry = $paymentCountry;
        
        return $this;
    }
    /**
     * Get addressChecked value
     * @return string|null
     */
    public function getAddressChecked(): ?string
    {
        return $this->addressChecked;
    }
    /**
     * Set addressChecked value
     * @param string $addressChecked
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setAddressChecked(?string $addressChecked = null): self
    {
        // validation for constraint: string
        if (!is_null($addressChecked) && !is_string($addressChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressChecked, true), gettype($addressChecked)), __LINE__);
        }
        $this->addressChecked = $addressChecked;
        
        return $this;
    }
    /**
     * Get checkFraud value
     * @return string|null
     */
    public function getCheckFraud(): ?string
    {
        return $this->checkFraud;
    }
    /**
     * Set checkFraud value
     * @param string $checkFraud
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
     */
    public function setCheckFraud(?string $checkFraud = null): self
    {
        // validation for constraint: string
        if (!is_null($checkFraud) && !is_string($checkFraud)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkFraud, true), gettype($checkFraud)), __LINE__);
        }
        $this->checkFraud = $checkFraud;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment
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
