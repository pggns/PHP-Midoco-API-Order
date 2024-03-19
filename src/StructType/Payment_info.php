<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for payment-info StructType
 * Meta information extracted from the WSDL
 * - documentation: Payment information
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Payment_info extends AbstractStructBase
{
    /**
     * The cc_payment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Cc_payment[]
     */
    protected ?array $cc_payment = null;
    /**
     * The debit_payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Debit_payment|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Debit_payment $debit_payment = null;
    /**
     * The advised_payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Advised_payment|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Advised_payment $advised_payment = null;
    /**
     * The preferred_payment_type
     * @var string|null
     */
    protected ?string $preferred_payment_type = null;
    /**
     * Constructor method for payment-info
     * @uses Payment_info::setCc_payment()
     * @uses Payment_info::setDebit_payment()
     * @uses Payment_info::setAdvised_payment()
     * @uses Payment_info::setPreferred_payment_type()
     * @param \Pggns\MidocoApi\Order\StructType\Cc_payment[] $cc_payment
     * @param \Pggns\MidocoApi\Order\StructType\Debit_payment $debit_payment
     * @param \Pggns\MidocoApi\Order\StructType\Advised_payment $advised_payment
     * @param string $preferred_payment_type
     */
    public function __construct(?array $cc_payment = null, ?\Pggns\MidocoApi\Order\StructType\Debit_payment $debit_payment = null, ?\Pggns\MidocoApi\Order\StructType\Advised_payment $advised_payment = null, ?string $preferred_payment_type = null)
    {
        $this
            ->setCc_payment($cc_payment)
            ->setDebit_payment($debit_payment)
            ->setAdvised_payment($advised_payment)
            ->setPreferred_payment_type($preferred_payment_type);
    }
    /**
     * Get cc_payment value
     * @return \Pggns\MidocoApi\Order\StructType\Cc_payment[]
     */
    public function getCc_payment(): ?array
    {
        return $this->{'cc-payment'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCc_payment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCc_payment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCc_paymentForArrayConstraintFromSetCc_payment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $payment_infoCc_paymentItem) {
            // validation for constraint: itemType
            if (!$payment_infoCc_paymentItem instanceof \Pggns\MidocoApi\Order\StructType\Cc_payment) {
                $invalidValues[] = is_object($payment_infoCc_paymentItem) ? get_class($payment_infoCc_paymentItem) : sprintf('%s(%s)', gettype($payment_infoCc_paymentItem), var_export($payment_infoCc_paymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cc_payment property can only contain items of type \Pggns\MidocoApi\Order\StructType\Cc_payment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set cc_payment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Cc_payment[] $cc_payment
     * @return \Pggns\MidocoApi\Order\StructType\Payment_info
     */
    public function setCc_payment(?array $cc_payment = null): self
    {
        // validation for constraint: array
        if ('' !== ($cc_paymentArrayErrorMessage = self::validateCc_paymentForArrayConstraintFromSetCc_payment($cc_payment))) {
            throw new InvalidArgumentException($cc_paymentArrayErrorMessage, __LINE__);
        }
        $this->cc_payment = $this->{'cc-payment'} = $cc_payment;
        
        return $this;
    }
    /**
     * Add item to cc_payment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Cc_payment $item
     * @return \Pggns\MidocoApi\Order\StructType\Payment_info
     */
    public function addToCc_payment(\Pggns\MidocoApi\Order\StructType\Cc_payment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Cc_payment) {
            throw new InvalidArgumentException(sprintf('The cc_payment property can only contain items of type \Pggns\MidocoApi\Order\StructType\Cc_payment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cc_payment[] = $this->{'cc-payment'}[] = $item;
        
        return $this;
    }
    /**
     * Get debit_payment value
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment|null
     */
    public function getDebit_payment(): ?\Pggns\MidocoApi\Order\StructType\Debit_payment
    {
        return $this->{'debit-payment'};
    }
    /**
     * Set debit_payment value
     * @param \Pggns\MidocoApi\Order\StructType\Debit_payment $debit_payment
     * @return \Pggns\MidocoApi\Order\StructType\Payment_info
     */
    public function setDebit_payment(?\Pggns\MidocoApi\Order\StructType\Debit_payment $debit_payment = null): self
    {
        $this->debit_payment = $this->{'debit-payment'} = $debit_payment;
        
        return $this;
    }
    /**
     * Get advised_payment value
     * @return \Pggns\MidocoApi\Order\StructType\Advised_payment|null
     */
    public function getAdvised_payment(): ?\Pggns\MidocoApi\Order\StructType\Advised_payment
    {
        return $this->{'advised-payment'};
    }
    /**
     * Set advised_payment value
     * @param \Pggns\MidocoApi\Order\StructType\Advised_payment $advised_payment
     * @return \Pggns\MidocoApi\Order\StructType\Payment_info
     */
    public function setAdvised_payment(?\Pggns\MidocoApi\Order\StructType\Advised_payment $advised_payment = null): self
    {
        $this->advised_payment = $this->{'advised-payment'} = $advised_payment;
        
        return $this;
    }
    /**
     * Get preferred_payment_type value
     * @return string|null
     */
    public function getPreferred_payment_type(): ?string
    {
        return $this->{'preferred-payment-type'};
    }
    /**
     * Set preferred_payment_type value
     * @uses \Pggns\MidocoApi\Order\EnumType\PaymentType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\PaymentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $preferred_payment_type
     * @return \Pggns\MidocoApi\Order\StructType\Payment_info
     */
    public function setPreferred_payment_type(?string $preferred_payment_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\PaymentType::valueIsValid($preferred_payment_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\PaymentType', is_array($preferred_payment_type) ? implode(', ', $preferred_payment_type) : var_export($preferred_payment_type, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\PaymentType::getValidValues())), __LINE__);
        }
        $this->preferred_payment_type = $this->{'preferred-payment-type'} = $preferred_payment_type;
        
        return $this;
    }
}
