<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceOrderPayment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnounceOrderPayment extends AbstractStructBase
{
    /**
     * The paymentAmount
     * @var float|null
     */
    protected ?float $paymentAmount = null;
    /**
     * The paymentDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $paymentDate = null;
    /**
     * The paymentText
     * @var string|null
     */
    protected ?string $paymentText = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The originalAmount
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * Constructor method for AnnounceOrderPayment
     * @uses AnnounceOrderPayment::setPaymentAmount()
     * @uses AnnounceOrderPayment::setPaymentDate()
     * @uses AnnounceOrderPayment::setPaymentText()
     * @uses AnnounceOrderPayment::setPaymentType()
     * @uses AnnounceOrderPayment::setOriginalAmount()
     * @uses AnnounceOrderPayment::setOriginalCurrency()
     * @param float $paymentAmount
     * @param string $paymentDate
     * @param string $paymentText
     * @param string $paymentType
     * @param float $originalAmount
     * @param string $originalCurrency
     */
    public function __construct(?float $paymentAmount = null, ?string $paymentDate = null, ?string $paymentText = null, ?string $paymentType = null, ?float $originalAmount = null, ?string $originalCurrency = null)
    {
        $this
            ->setPaymentAmount($paymentAmount)
            ->setPaymentDate($paymentDate)
            ->setPaymentText($paymentText)
            ->setPaymentType($paymentType)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency);
    }
    /**
     * Get paymentAmount value
     * @return float|null
     */
    public function getPaymentAmount(): ?float
    {
        return $this->paymentAmount;
    }
    /**
     * Set paymentAmount value
     * @param float $paymentAmount
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment
     */
    public function setPaymentAmount(?float $paymentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paymentAmount) && !(is_float($paymentAmount) || is_numeric($paymentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paymentAmount, true), gettype($paymentAmount)), __LINE__);
        }
        $this->paymentAmount = $paymentAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment
     */
    public function setPaymentDate(?string $paymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDate, true), gettype($paymentDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($paymentDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $paymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($paymentDate, true)), __LINE__);
        }
        $this->paymentDate = $paymentDate;
        
        return $this;
    }
    /**
     * Get paymentText value
     * @return string|null
     */
    public function getPaymentText(): ?string
    {
        return $this->paymentText;
    }
    /**
     * Set paymentText value
     * @param string $paymentText
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment
     */
    public function setPaymentText(?string $paymentText = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentText) && !is_string($paymentText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentText, true), gettype($paymentText)), __LINE__);
        }
        $this->paymentText = $paymentText;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @uses \Pggns\MidocoApi\Order\EnumType\PaymentType_1::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\PaymentType_1::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\PaymentType_1::valueIsValid($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\PaymentType_1', is_array($paymentType) ? implode(', ', $paymentType) : var_export($paymentType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\PaymentType_1::getValidValues())), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get originalAmount value
     * @return float|null
     */
    public function getOriginalAmount(): ?float
    {
        return $this->originalAmount;
    }
    /**
     * Set originalAmount value
     * @param float $originalAmount
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment
     */
    public function setOriginalAmount(?float $originalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalAmount) && !(is_float($originalAmount) || is_numeric($originalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalAmount, true), gettype($originalAmount)), __LINE__);
        }
        $this->originalAmount = $originalAmount;
        
        return $this;
    }
    /**
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
    }
}
