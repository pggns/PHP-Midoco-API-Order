<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentProviderImportFormatDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentProviderImportFormatDTO extends AbstractStructBase
{
    /**
     * The dateFormat
     * @var string|null
     */
    protected ?string $dateFormat = null;
    /**
     * The decimalDelimiter
     * @var string|null
     */
    protected ?string $decimalDelimiter = null;
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The paymentProviderId
     * @var string|null
     */
    protected ?string $paymentProviderId = null;
    /**
     * The textDelimiter
     * @var string|null
     */
    protected ?string $textDelimiter = null;
    /**
     * The textInQuotes
     * @var bool|null
     */
    protected ?bool $textInQuotes = null;
    /**
     * Constructor method for PaymentProviderImportFormatDTO
     * @uses PaymentProviderImportFormatDTO::setDateFormat()
     * @uses PaymentProviderImportFormatDTO::setDecimalDelimiter()
     * @uses PaymentProviderImportFormatDTO::setFormat()
     * @uses PaymentProviderImportFormatDTO::setPaymentProviderId()
     * @uses PaymentProviderImportFormatDTO::setTextDelimiter()
     * @uses PaymentProviderImportFormatDTO::setTextInQuotes()
     * @param string $dateFormat
     * @param string $decimalDelimiter
     * @param string $format
     * @param string $paymentProviderId
     * @param string $textDelimiter
     * @param bool $textInQuotes
     */
    public function __construct(?string $dateFormat = null, ?string $decimalDelimiter = null, ?string $format = null, ?string $paymentProviderId = null, ?string $textDelimiter = null, ?bool $textInQuotes = null)
    {
        $this
            ->setDateFormat($dateFormat)
            ->setDecimalDelimiter($decimalDelimiter)
            ->setFormat($format)
            ->setPaymentProviderId($paymentProviderId)
            ->setTextDelimiter($textDelimiter)
            ->setTextInQuotes($textInQuotes);
    }
    /**
     * Get dateFormat value
     * @return string|null
     */
    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }
    /**
     * Set dateFormat value
     * @param string $dateFormat
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO
     */
    public function setDateFormat(?string $dateFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFormat, true), gettype($dateFormat)), __LINE__);
        }
        $this->dateFormat = $dateFormat;
        
        return $this;
    }
    /**
     * Get decimalDelimiter value
     * @return string|null
     */
    public function getDecimalDelimiter(): ?string
    {
        return $this->decimalDelimiter;
    }
    /**
     * Set decimalDelimiter value
     * @param string $decimalDelimiter
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO
     */
    public function setDecimalDelimiter(?string $decimalDelimiter = null): self
    {
        // validation for constraint: string
        if (!is_null($decimalDelimiter) && !is_string($decimalDelimiter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decimalDelimiter, true), gettype($decimalDelimiter)), __LINE__);
        }
        $this->decimalDelimiter = $decimalDelimiter;
        
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
    /**
     * Get paymentProviderId value
     * @return string|null
     */
    public function getPaymentProviderId(): ?string
    {
        return $this->paymentProviderId;
    }
    /**
     * Set paymentProviderId value
     * @param string $paymentProviderId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO
     */
    public function setPaymentProviderId(?string $paymentProviderId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentProviderId) && !is_string($paymentProviderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentProviderId, true), gettype($paymentProviderId)), __LINE__);
        }
        $this->paymentProviderId = $paymentProviderId;
        
        return $this;
    }
    /**
     * Get textDelimiter value
     * @return string|null
     */
    public function getTextDelimiter(): ?string
    {
        return $this->textDelimiter;
    }
    /**
     * Set textDelimiter value
     * @param string $textDelimiter
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO
     */
    public function setTextDelimiter(?string $textDelimiter = null): self
    {
        // validation for constraint: string
        if (!is_null($textDelimiter) && !is_string($textDelimiter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textDelimiter, true), gettype($textDelimiter)), __LINE__);
        }
        $this->textDelimiter = $textDelimiter;
        
        return $this;
    }
    /**
     * Get textInQuotes value
     * @return bool|null
     */
    public function getTextInQuotes(): ?bool
    {
        return $this->textInQuotes;
    }
    /**
     * Set textInQuotes value
     * @param bool $textInQuotes
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO
     */
    public function setTextInQuotes(?bool $textInQuotes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($textInQuotes) && !is_bool($textInQuotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($textInQuotes, true), gettype($textInQuotes)), __LINE__);
        }
        $this->textInQuotes = $textInQuotes;
        
        return $this;
    }
}
