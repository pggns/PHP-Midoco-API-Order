<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderImportedPaymentDTO StructType
 * @subpackage Structs
 */
class OrderImportedPaymentDTO extends AbstractStructBase
{
    /**
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
    /**
     * The ccToken
     * @var string|null
     */
    protected ?string $ccToken = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The currencyRate
     * @var float|null
     */
    protected ?float $currencyRate = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorParameters
     * @var string|null
     */
    protected ?string $errorParameters = null;
    /**
     * The importTimestamp
     * @var string|null
     */
    protected ?string $importTimestamp = null;
    /**
     * The medium
     * @var string|null
     */
    protected ?string $medium = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The paymentAmount
     * @var float|null
     */
    protected ?float $paymentAmount = null;
    /**
     * The paymentDate
     * @var string|null
     */
    protected ?string $paymentDate = null;
    /**
     * The paymentId
     * @var int|null
     */
    protected ?int $paymentId = null;
    /**
     * The paymentMethod
     * @var string|null
     */
    protected ?string $paymentMethod = null;
    /**
     * The transactionNumber
     * @var string|null
     */
    protected ?string $transactionNumber = null;
    /**
     * Constructor method for OrderImportedPaymentDTO
     * @uses OrderImportedPaymentDTO::setBooked()
     * @uses OrderImportedPaymentDTO::setCcToken()
     * @uses OrderImportedPaymentDTO::setCurrency()
     * @uses OrderImportedPaymentDTO::setCurrencyRate()
     * @uses OrderImportedPaymentDTO::setErrorBundle()
     * @uses OrderImportedPaymentDTO::setErrorCode()
     * @uses OrderImportedPaymentDTO::setErrorParameters()
     * @uses OrderImportedPaymentDTO::setImportTimestamp()
     * @uses OrderImportedPaymentDTO::setMedium()
     * @uses OrderImportedPaymentDTO::setOrderId()
     * @uses OrderImportedPaymentDTO::setPaymentAmount()
     * @uses OrderImportedPaymentDTO::setPaymentDate()
     * @uses OrderImportedPaymentDTO::setPaymentId()
     * @uses OrderImportedPaymentDTO::setPaymentMethod()
     * @uses OrderImportedPaymentDTO::setTransactionNumber()
     * @param bool $booked
     * @param string $ccToken
     * @param string $currency
     * @param float $currencyRate
     * @param string $errorBundle
     * @param string $errorCode
     * @param string $errorParameters
     * @param string $importTimestamp
     * @param string $medium
     * @param int $orderId
     * @param float $paymentAmount
     * @param string $paymentDate
     * @param int $paymentId
     * @param string $paymentMethod
     * @param string $transactionNumber
     */
    public function __construct(?bool $booked = null, ?string $ccToken = null, ?string $currency = null, ?float $currencyRate = null, ?string $errorBundle = null, ?string $errorCode = null, ?string $errorParameters = null, ?string $importTimestamp = null, ?string $medium = null, ?int $orderId = null, ?float $paymentAmount = null, ?string $paymentDate = null, ?int $paymentId = null, ?string $paymentMethod = null, ?string $transactionNumber = null)
    {
        $this
            ->setBooked($booked)
            ->setCcToken($ccToken)
            ->setCurrency($currency)
            ->setCurrencyRate($currencyRate)
            ->setErrorBundle($errorBundle)
            ->setErrorCode($errorCode)
            ->setErrorParameters($errorParameters)
            ->setImportTimestamp($importTimestamp)
            ->setMedium($medium)
            ->setOrderId($orderId)
            ->setPaymentAmount($paymentAmount)
            ->setPaymentDate($paymentDate)
            ->setPaymentId($paymentId)
            ->setPaymentMethod($paymentMethod)
            ->setTransactionNumber($transactionNumber);
    }
    /**
     * Get booked value
     * @return bool|null
     */
    public function getBooked(): ?bool
    {
        return $this->booked;
    }
    /**
     * Set booked value
     * @param bool $booked
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
     */
    public function setBooked(?bool $booked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($booked) && !is_bool($booked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($booked, true), gettype($booked)), __LINE__);
        }
        $this->booked = $booked;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
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
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
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
     * Get errorParameters value
     * @return string|null
     */
    public function getErrorParameters(): ?string
    {
        return $this->errorParameters;
    }
    /**
     * Set errorParameters value
     * @param string $errorParameters
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
     */
    public function setErrorParameters(?string $errorParameters = null): self
    {
        // validation for constraint: string
        if (!is_null($errorParameters) && !is_string($errorParameters)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorParameters, true), gettype($errorParameters)), __LINE__);
        }
        $this->errorParameters = $errorParameters;
        
        return $this;
    }
    /**
     * Get importTimestamp value
     * @return string|null
     */
    public function getImportTimestamp(): ?string
    {
        return $this->importTimestamp;
    }
    /**
     * Set importTimestamp value
     * @param string $importTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
     */
    public function setImportTimestamp(?string $importTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($importTimestamp) && !is_string($importTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importTimestamp, true), gettype($importTimestamp)), __LINE__);
        }
        $this->importTimestamp = $importTimestamp;
        
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
     * @param string $medium
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
     */
    public function setMedium(?string $medium = null): self
    {
        // validation for constraint: string
        if (!is_null($medium) && !is_string($medium)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medium, true), gettype($medium)), __LINE__);
        }
        $this->medium = $medium;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
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
     * Get paymentId value
     * @return int|null
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }
    /**
     * Set paymentId value
     * @param int $paymentId
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
     */
    public function setPaymentId(?int $paymentId = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentId) && !(is_int($paymentId) || ctype_digit($paymentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentId, true), gettype($paymentId)), __LINE__);
        }
        $this->paymentId = $paymentId;
        
        return $this;
    }
    /**
     * Get paymentMethod value
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }
    /**
     * Set paymentMethod value
     * @param string $paymentMethod
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
     */
    public function setPaymentMethod(?string $paymentMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethod) && !is_string($paymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethod, true), gettype($paymentMethod)), __LINE__);
        }
        $this->paymentMethod = $paymentMethod;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderImportedPaymentDTO
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
}
