<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for advised-payment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Advised_payment extends AbstractStructBase
{
    /**
     * The payment_type
     * Meta information extracted from the WSDL
     * - documentation: in case of paypal: PAYPAL_ORDER
     * @var string|null
     */
    protected ?string $payment_type = null;
    /**
     * The payment_status
     * Meta information extracted from the WSDL
     * - documentation: status of payment. in case of paypal: CREATED, CAPTURED, DENIED, EXPIRED, PARTIALLY_CAPTURED, VOIDED, PENDING
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $payment_status = null;
    /**
     * The reference_no
     * Meta information extracted from the WSDL
     * - documentation: external reference to payment transaction. in case of paypal the orderId or the orderReferenceId
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reference_no = null;
    /**
     * Constructor method for advised-payment
     * @uses Advised_payment::setPayment_type()
     * @uses Advised_payment::setPayment_status()
     * @uses Advised_payment::setReference_no()
     * @param string $payment_type
     * @param string $payment_status
     * @param string $reference_no
     */
    public function __construct(?string $payment_type = null, ?string $payment_status = null, ?string $reference_no = null)
    {
        $this
            ->setPayment_type($payment_type)
            ->setPayment_status($payment_status)
            ->setReference_no($reference_no);
    }
    /**
     * Get payment_type value
     * @return string|null
     */
    public function getPayment_type(): ?string
    {
        return $this->{'payment-type'};
    }
    /**
     * Set payment_type value
     * @param string $payment_type
     * @return \Pggns\MidocoApi\Order\StructType\Advised_payment
     */
    public function setPayment_type(?string $payment_type = null): self
    {
        // validation for constraint: string
        if (!is_null($payment_type) && !is_string($payment_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payment_type, true), gettype($payment_type)), __LINE__);
        }
        $this->payment_type = $this->{'payment-type'} = $payment_type;
        
        return $this;
    }
    /**
     * Get payment_status value
     * @return string|null
     */
    public function getPayment_status(): ?string
    {
        return $this->{'payment-status'};
    }
    /**
     * Set payment_status value
     * @param string $payment_status
     * @return \Pggns\MidocoApi\Order\StructType\Advised_payment
     */
    public function setPayment_status(?string $payment_status = null): self
    {
        // validation for constraint: string
        if (!is_null($payment_status) && !is_string($payment_status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payment_status, true), gettype($payment_status)), __LINE__);
        }
        $this->payment_status = $this->{'payment-status'} = $payment_status;
        
        return $this;
    }
    /**
     * Get reference_no value
     * @return string|null
     */
    public function getReference_no(): ?string
    {
        return $this->{'reference-no'};
    }
    /**
     * Set reference_no value
     * @param string $reference_no
     * @return \Pggns\MidocoApi\Order\StructType\Advised_payment
     */
    public function setReference_no(?string $reference_no = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_no) && !is_string($reference_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_no, true), gettype($reference_no)), __LINE__);
        }
        $this->reference_no = $this->{'reference-no'} = $reference_no;
        
        return $this;
    }
}
