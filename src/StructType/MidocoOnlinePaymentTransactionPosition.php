<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOnlinePaymentTransactionPosition StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOnlinePaymentTransactionPosition extends AbstractStructBase
{
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The foreName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $foreName = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The debitType
     * Meta information extracted from the WSDL
     * - documentation: either normal (0) or direct debit (1)
     * @var int|null
     */
    protected ?int $debitType = null;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - documentation: the amount to collect
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The invoiceId
     * Meta information extracted from the WSDL
     * - documentation: the invoice id which is being collected
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The invoiceNo
     * Meta information extracted from the WSDL
     * - documentation: the invoice no
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $invoiceNo = null;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The isDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The invoiceType
     * Meta information extracted from the WSDL
     * - documentation: invoiceing type of order (Customer or Agency)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $invoiceType = null;
    /**
     * The departureDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departureDate = null;
    /**
     * The debitorNo
     * Meta information extracted from the WSDL
     * - documentation: debitor of order
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorBundle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorArgs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorArgs = null;
    /**
     * The errorDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorDescription = null;
    /**
     * The Usage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: Usage
     * @var \Pggns\MidocoApi\Order\StructType\Usage[]
     */
    protected ?array $Usage = null;
    /**
     * The isManual
     * @var bool|null
     */
    protected ?bool $isManual = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
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
     * Constructor method for MidocoOnlinePaymentTransactionPosition
     * @uses MidocoOnlinePaymentTransactionPosition::setCustomerId()
     * @uses MidocoOnlinePaymentTransactionPosition::setForeName()
     * @uses MidocoOnlinePaymentTransactionPosition::setName()
     * @uses MidocoOnlinePaymentTransactionPosition::setDebitType()
     * @uses MidocoOnlinePaymentTransactionPosition::setAmount()
     * @uses MidocoOnlinePaymentTransactionPosition::setInvoiceId()
     * @uses MidocoOnlinePaymentTransactionPosition::setInvoiceNo()
     * @uses MidocoOnlinePaymentTransactionPosition::setOrderNo()
     * @uses MidocoOnlinePaymentTransactionPosition::setOrderId()
     * @uses MidocoOnlinePaymentTransactionPosition::setDate()
     * @uses MidocoOnlinePaymentTransactionPosition::setIsDeposit()
     * @uses MidocoOnlinePaymentTransactionPosition::setInvoiceType()
     * @uses MidocoOnlinePaymentTransactionPosition::setDepartureDate()
     * @uses MidocoOnlinePaymentTransactionPosition::setDebitorNo()
     * @uses MidocoOnlinePaymentTransactionPosition::setErrorCode()
     * @uses MidocoOnlinePaymentTransactionPosition::setErrorBundle()
     * @uses MidocoOnlinePaymentTransactionPosition::setErrorArgs()
     * @uses MidocoOnlinePaymentTransactionPosition::setErrorDescription()
     * @uses MidocoOnlinePaymentTransactionPosition::setUsage()
     * @uses MidocoOnlinePaymentTransactionPosition::setIsManual()
     * @uses MidocoOnlinePaymentTransactionPosition::setCurrency()
     * @uses MidocoOnlinePaymentTransactionPosition::setOriginalAmount()
     * @uses MidocoOnlinePaymentTransactionPosition::setOriginalCurrency()
     * @param int $customerId
     * @param string $foreName
     * @param string $name
     * @param int $debitType
     * @param float $amount
     * @param int $invoiceId
     * @param string $invoiceNo
     * @param int $orderNo
     * @param int $orderId
     * @param string $date
     * @param bool $isDeposit
     * @param string $invoiceType
     * @param string $departureDate
     * @param string $debitorNo
     * @param string $errorCode
     * @param string $errorBundle
     * @param string $errorArgs
     * @param string $errorDescription
     * @param \Pggns\MidocoApi\Order\StructType\Usage[] $usage
     * @param bool $isManual
     * @param string $currency
     * @param float $originalAmount
     * @param string $originalCurrency
     */
    public function __construct(?int $customerId = null, ?string $foreName = null, ?string $name = null, ?int $debitType = null, ?float $amount = null, ?int $invoiceId = null, ?string $invoiceNo = null, ?int $orderNo = null, ?int $orderId = null, ?string $date = null, ?bool $isDeposit = null, ?string $invoiceType = null, ?string $departureDate = null, ?string $debitorNo = null, ?string $errorCode = null, ?string $errorBundle = null, ?string $errorArgs = null, ?string $errorDescription = null, ?array $usage = null, ?bool $isManual = null, ?string $currency = null, ?float $originalAmount = null, ?string $originalCurrency = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setForeName($foreName)
            ->setName($name)
            ->setDebitType($debitType)
            ->setAmount($amount)
            ->setInvoiceId($invoiceId)
            ->setInvoiceNo($invoiceNo)
            ->setOrderNo($orderNo)
            ->setOrderId($orderId)
            ->setDate($date)
            ->setIsDeposit($isDeposit)
            ->setInvoiceType($invoiceType)
            ->setDepartureDate($departureDate)
            ->setDebitorNo($debitorNo)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle)
            ->setErrorArgs($errorArgs)
            ->setErrorDescription($errorDescription)
            ->setUsage($usage)
            ->setIsManual($isManual)
            ->setCurrency($currency)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
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
     * Get foreName value
     * @return string|null
     */
    public function getForeName(): ?string
    {
        return $this->foreName;
    }
    /**
     * Set foreName value
     * @param string $foreName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setForeName(?string $foreName = null): self
    {
        // validation for constraint: string
        if (!is_null($foreName) && !is_string($foreName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreName, true), gettype($foreName)), __LINE__);
        }
        $this->foreName = $foreName;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get debitType value
     * @return int|null
     */
    public function getDebitType(): ?int
    {
        return $this->debitType;
    }
    /**
     * Set debitType value
     * @param int $debitType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setDebitType(?int $debitType = null): self
    {
        // validation for constraint: int
        if (!is_null($debitType) && !(is_int($debitType) || ctype_digit($debitType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($debitType, true), gettype($debitType)), __LINE__);
        }
        $this->debitType = $debitType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
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
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return string|null
     */
    public function getInvoiceNo(): ?string
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param string $invoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setInvoiceNo(?string $invoiceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNo) && !is_string($invoiceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
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
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get isDeposit value
     * @return bool|null
     */
    public function getIsDeposit(): ?bool
    {
        return $this->isDeposit;
    }
    /**
     * Set isDeposit value
     * @param bool $isDeposit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setIsDeposit(?bool $isDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeposit) && !is_bool($isDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeposit, true), gettype($isDeposit)), __LINE__);
        }
        $this->isDeposit = $isDeposit;
        
        return $this;
    }
    /**
     * Get invoiceType value
     * @return string|null
     */
    public function getInvoiceType(): ?string
    {
        return $this->invoiceType;
    }
    /**
     * Set invoiceType value
     * @param string $invoiceType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setInvoiceType(?string $invoiceType = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceType) && !is_string($invoiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceType, true), gettype($invoiceType)), __LINE__);
        }
        $this->invoiceType = $invoiceType;
        
        return $this;
    }
    /**
     * Get departureDate value
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }
    /**
     * Set departureDate value
     * @param string $departureDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
        $this->departureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
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
     * Get errorArgs value
     * @return string|null
     */
    public function getErrorArgs(): ?string
    {
        return $this->errorArgs;
    }
    /**
     * Set errorArgs value
     * @param string $errorArgs
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setErrorArgs(?string $errorArgs = null): self
    {
        // validation for constraint: string
        if (!is_null($errorArgs) && !is_string($errorArgs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorArgs, true), gettype($errorArgs)), __LINE__);
        }
        $this->errorArgs = $errorArgs;
        
        return $this;
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $errorDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setErrorDescription(?string $errorDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDescription) && !is_string($errorDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescription, true), gettype($errorDescription)), __LINE__);
        }
        $this->errorDescription = $errorDescription;
        
        return $this;
    }
    /**
     * Get Usage value
     * @return \Pggns\MidocoApi\Order\StructType\Usage[]
     */
    public function getUsage(): ?array
    {
        return $this->Usage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUsage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUsageForArrayConstraintFromSetUsage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOnlinePaymentTransactionPositionUsageItem) {
            // validation for constraint: itemType
            if (!$midocoOnlinePaymentTransactionPositionUsageItem instanceof \Pggns\MidocoApi\Order\StructType\Usage) {
                $invalidValues[] = is_object($midocoOnlinePaymentTransactionPositionUsageItem) ? get_class($midocoOnlinePaymentTransactionPositionUsageItem) : sprintf('%s(%s)', gettype($midocoOnlinePaymentTransactionPositionUsageItem), var_export($midocoOnlinePaymentTransactionPositionUsageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Usage property can only contain items of type \Pggns\MidocoApi\Order\StructType\Usage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Usage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Usage[] $usage
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setUsage(?array $usage = null): self
    {
        // validation for constraint: array
        if ('' !== ($usageArrayErrorMessage = self::validateUsageForArrayConstraintFromSetUsage($usage))) {
            throw new InvalidArgumentException($usageArrayErrorMessage, __LINE__);
        }
        $this->Usage = $usage;
        
        return $this;
    }
    /**
     * Add item to Usage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Usage $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function addToUsage(\Pggns\MidocoApi\Order\StructType\Usage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Usage) {
            throw new InvalidArgumentException(sprintf('The Usage property can only contain items of type \Pggns\MidocoApi\Order\StructType\Usage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Usage[] = $item;
        
        return $this;
    }
    /**
     * Get isManual value
     * @return bool|null
     */
    public function getIsManual(): ?bool
    {
        return $this->isManual;
    }
    /**
     * Set isManual value
     * @param bool $isManual
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
     */
    public function setIsManual(?bool $isManual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManual) && !is_bool($isManual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManual, true), gettype($isManual)), __LINE__);
        }
        $this->isManual = $isManual;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionPosition
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
