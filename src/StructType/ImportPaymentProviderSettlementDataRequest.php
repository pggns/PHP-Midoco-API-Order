<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportPaymentProviderSettlementDataRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportPaymentProviderSettlementDataRequest extends AbstractStructBase
{
    /**
     * The Data
     * @var string|null
     */
    protected ?string $Data = null;
    /**
     * The paymentProviderId
     * @var string|null
     */
    protected ?string $paymentProviderId = null;
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The delimiter
     * @var string|null
     */
    protected ?string $delimiter = null;
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
     * The genericDataFormat
     * @var string|null
     */
    protected ?string $genericDataFormat = null;
    /**
     * The textInQuotes
     * @var bool|null
     */
    protected ?bool $textInQuotes = null;
    /**
     * Constructor method for ImportPaymentProviderSettlementDataRequest
     * @uses ImportPaymentProviderSettlementDataRequest::setData()
     * @uses ImportPaymentProviderSettlementDataRequest::setPaymentProviderId()
     * @uses ImportPaymentProviderSettlementDataRequest::setFormat()
     * @uses ImportPaymentProviderSettlementDataRequest::setFileName()
     * @uses ImportPaymentProviderSettlementDataRequest::setDelimiter()
     * @uses ImportPaymentProviderSettlementDataRequest::setDateFormat()
     * @uses ImportPaymentProviderSettlementDataRequest::setDecimalDelimiter()
     * @uses ImportPaymentProviderSettlementDataRequest::setGenericDataFormat()
     * @uses ImportPaymentProviderSettlementDataRequest::setTextInQuotes()
     * @param string $data
     * @param string $paymentProviderId
     * @param string $format
     * @param string $fileName
     * @param string $delimiter
     * @param string $dateFormat
     * @param string $decimalDelimiter
     * @param string $genericDataFormat
     * @param bool $textInQuotes
     */
    public function __construct(?string $data = null, ?string $paymentProviderId = null, ?string $format = null, ?string $fileName = null, ?string $delimiter = null, ?string $dateFormat = null, ?string $decimalDelimiter = null, ?string $genericDataFormat = null, ?bool $textInQuotes = null)
    {
        $this
            ->setData($data)
            ->setPaymentProviderId($paymentProviderId)
            ->setFormat($format)
            ->setFileName($fileName)
            ->setDelimiter($delimiter)
            ->setDateFormat($dateFormat)
            ->setDecimalDelimiter($decimalDelimiter)
            ->setGenericDataFormat($genericDataFormat)
            ->setTextInQuotes($textInQuotes);
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest
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
     * Get fileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter(): ?string
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest
     */
    public function setDelimiter(?string $delimiter = null): self
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delimiter, true), gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest
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
     * Get genericDataFormat value
     * @return string|null
     */
    public function getGenericDataFormat(): ?string
    {
        return $this->genericDataFormat;
    }
    /**
     * Set genericDataFormat value
     * @param string $genericDataFormat
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest
     */
    public function setGenericDataFormat(?string $genericDataFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($genericDataFormat) && !is_string($genericDataFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($genericDataFormat, true), gettype($genericDataFormat)), __LINE__);
        }
        $this->genericDataFormat = $genericDataFormat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest
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
