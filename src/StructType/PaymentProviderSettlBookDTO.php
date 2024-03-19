<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentProviderSettlBookDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentProviderSettlBookDTO extends AbstractStructBase
{
    /**
     * The accountFeeNoVat
     * @var string|null
     */
    protected ?string $accountFeeNoVat = null;
    /**
     * The accountFeeVat
     * @var string|null
     */
    protected ?string $accountFeeVat = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
    /**
     * The bookingPosition
     * @var int|null
     */
    protected ?int $bookingPosition = null;
    /**
     * The checked
     * @var bool|null
     */
    protected ?bool $checked = null;
    /**
     * The comments
     * @var string|null
     */
    protected ?string $comments = null;
    /**
     * The costCentreFeeNoVat
     * @var string|null
     */
    protected ?string $costCentreFeeNoVat = null;
    /**
     * The costCentreFeeVat
     * @var string|null
     */
    protected ?string $costCentreFeeVat = null;
    /**
     * The customerField
     * @var string|null
     */
    protected ?string $customerField = null;
    /**
     * The customerField2
     * @var string|null
     */
    protected ?string $customerField2 = null;
    /**
     * The customerField3
     * @var string|null
     */
    protected ?string $customerField3 = null;
    /**
     * The customerField4
     * @var string|null
     */
    protected ?string $customerField4 = null;
    /**
     * The customerField5
     * @var string|null
     */
    protected ?string $customerField5 = null;
    /**
     * The diffManualChecked
     * @var bool|null
     */
    protected ?bool $diffManualChecked = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The errors
     * @var int|null
     */
    protected ?int $errors = null;
    /**
     * The feeNoVat
     * @var float|null
     */
    protected ?float $feeNoVat = null;
    /**
     * The feeVat
     * @var float|null
     */
    protected ?float $feeVat = null;
    /**
     * The ignoreFees
     * @var bool|null
     */
    protected ?bool $ignoreFees = null;
    /**
     * The ignored
     * @var bool|null
     */
    protected ?bool $ignored = null;
    /**
     * The midocoAmount
     * @var float|null
     */
    protected ?float $midocoAmount = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The transactionCode
     * @var string|null
     */
    protected ?string $transactionCode = null;
    /**
     * The transactionDate
     * @var string|null
     */
    protected ?string $transactionDate = null;
    /**
     * Constructor method for PaymentProviderSettlBookDTO
     * @uses PaymentProviderSettlBookDTO::setAccountFeeNoVat()
     * @uses PaymentProviderSettlBookDTO::setAccountFeeVat()
     * @uses PaymentProviderSettlBookDTO::setAccountId()
     * @uses PaymentProviderSettlBookDTO::setAmount()
     * @uses PaymentProviderSettlBookDTO::setBooked()
     * @uses PaymentProviderSettlBookDTO::setBookingPosition()
     * @uses PaymentProviderSettlBookDTO::setChecked()
     * @uses PaymentProviderSettlBookDTO::setComments()
     * @uses PaymentProviderSettlBookDTO::setCostCentreFeeNoVat()
     * @uses PaymentProviderSettlBookDTO::setCostCentreFeeVat()
     * @uses PaymentProviderSettlBookDTO::setCustomerField()
     * @uses PaymentProviderSettlBookDTO::setCustomerField2()
     * @uses PaymentProviderSettlBookDTO::setCustomerField3()
     * @uses PaymentProviderSettlBookDTO::setCustomerField4()
     * @uses PaymentProviderSettlBookDTO::setCustomerField5()
     * @uses PaymentProviderSettlBookDTO::setDiffManualChecked()
     * @uses PaymentProviderSettlBookDTO::setEntryId()
     * @uses PaymentProviderSettlBookDTO::setErrors()
     * @uses PaymentProviderSettlBookDTO::setFeeNoVat()
     * @uses PaymentProviderSettlBookDTO::setFeeVat()
     * @uses PaymentProviderSettlBookDTO::setIgnoreFees()
     * @uses PaymentProviderSettlBookDTO::setIgnored()
     * @uses PaymentProviderSettlBookDTO::setMidocoAmount()
     * @uses PaymentProviderSettlBookDTO::setOrderId()
     * @uses PaymentProviderSettlBookDTO::setPlanId()
     * @uses PaymentProviderSettlBookDTO::setSettlementId()
     * @uses PaymentProviderSettlBookDTO::setTransactionCode()
     * @uses PaymentProviderSettlBookDTO::setTransactionDate()
     * @param string $accountFeeNoVat
     * @param string $accountFeeVat
     * @param string $accountId
     * @param float $amount
     * @param bool $booked
     * @param int $bookingPosition
     * @param bool $checked
     * @param string $comments
     * @param string $costCentreFeeNoVat
     * @param string $costCentreFeeVat
     * @param string $customerField
     * @param string $customerField2
     * @param string $customerField3
     * @param string $customerField4
     * @param string $customerField5
     * @param bool $diffManualChecked
     * @param string $entryId
     * @param int $errors
     * @param float $feeNoVat
     * @param float $feeVat
     * @param bool $ignoreFees
     * @param bool $ignored
     * @param float $midocoAmount
     * @param int $orderId
     * @param string $planId
     * @param int $settlementId
     * @param string $transactionCode
     * @param string $transactionDate
     */
    public function __construct(?string $accountFeeNoVat = null, ?string $accountFeeVat = null, ?string $accountId = null, ?float $amount = null, ?bool $booked = null, ?int $bookingPosition = null, ?bool $checked = null, ?string $comments = null, ?string $costCentreFeeNoVat = null, ?string $costCentreFeeVat = null, ?string $customerField = null, ?string $customerField2 = null, ?string $customerField3 = null, ?string $customerField4 = null, ?string $customerField5 = null, ?bool $diffManualChecked = null, ?string $entryId = null, ?int $errors = null, ?float $feeNoVat = null, ?float $feeVat = null, ?bool $ignoreFees = null, ?bool $ignored = null, ?float $midocoAmount = null, ?int $orderId = null, ?string $planId = null, ?int $settlementId = null, ?string $transactionCode = null, ?string $transactionDate = null)
    {
        $this
            ->setAccountFeeNoVat($accountFeeNoVat)
            ->setAccountFeeVat($accountFeeVat)
            ->setAccountId($accountId)
            ->setAmount($amount)
            ->setBooked($booked)
            ->setBookingPosition($bookingPosition)
            ->setChecked($checked)
            ->setComments($comments)
            ->setCostCentreFeeNoVat($costCentreFeeNoVat)
            ->setCostCentreFeeVat($costCentreFeeVat)
            ->setCustomerField($customerField)
            ->setCustomerField2($customerField2)
            ->setCustomerField3($customerField3)
            ->setCustomerField4($customerField4)
            ->setCustomerField5($customerField5)
            ->setDiffManualChecked($diffManualChecked)
            ->setEntryId($entryId)
            ->setErrors($errors)
            ->setFeeNoVat($feeNoVat)
            ->setFeeVat($feeVat)
            ->setIgnoreFees($ignoreFees)
            ->setIgnored($ignored)
            ->setMidocoAmount($midocoAmount)
            ->setOrderId($orderId)
            ->setPlanId($planId)
            ->setSettlementId($settlementId)
            ->setTransactionCode($transactionCode)
            ->setTransactionDate($transactionDate);
    }
    /**
     * Get accountFeeNoVat value
     * @return string|null
     */
    public function getAccountFeeNoVat(): ?string
    {
        return $this->accountFeeNoVat;
    }
    /**
     * Set accountFeeNoVat value
     * @param string $accountFeeNoVat
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setAccountFeeNoVat(?string $accountFeeNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountFeeNoVat) && !is_string($accountFeeNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountFeeNoVat, true), gettype($accountFeeNoVat)), __LINE__);
        }
        $this->accountFeeNoVat = $accountFeeNoVat;
        
        return $this;
    }
    /**
     * Get accountFeeVat value
     * @return string|null
     */
    public function getAccountFeeVat(): ?string
    {
        return $this->accountFeeVat;
    }
    /**
     * Set accountFeeVat value
     * @param string $accountFeeVat
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setAccountFeeVat(?string $accountFeeVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountFeeVat) && !is_string($accountFeeVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountFeeVat, true), gettype($accountFeeVat)), __LINE__);
        }
        $this->accountFeeVat = $accountFeeVat;
        
        return $this;
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
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
     * Get bookingPosition value
     * @return int|null
     */
    public function getBookingPosition(): ?int
    {
        return $this->bookingPosition;
    }
    /**
     * Set bookingPosition value
     * @param int $bookingPosition
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setBookingPosition(?int $bookingPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPosition) && !(is_int($bookingPosition) || ctype_digit($bookingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPosition, true), gettype($bookingPosition)), __LINE__);
        }
        $this->bookingPosition = $bookingPosition;
        
        return $this;
    }
    /**
     * Get checked value
     * @return bool|null
     */
    public function getChecked(): ?bool
    {
        return $this->checked;
    }
    /**
     * Set checked value
     * @param bool $checked
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setChecked(?bool $checked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checked) && !is_bool($checked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checked, true), gettype($checked)), __LINE__);
        }
        $this->checked = $checked;
        
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setComments(?string $comments = null): self
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        
        return $this;
    }
    /**
     * Get costCentreFeeNoVat value
     * @return string|null
     */
    public function getCostCentreFeeNoVat(): ?string
    {
        return $this->costCentreFeeNoVat;
    }
    /**
     * Set costCentreFeeNoVat value
     * @param string $costCentreFeeNoVat
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setCostCentreFeeNoVat(?string $costCentreFeeNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentreFeeNoVat) && !is_string($costCentreFeeNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentreFeeNoVat, true), gettype($costCentreFeeNoVat)), __LINE__);
        }
        $this->costCentreFeeNoVat = $costCentreFeeNoVat;
        
        return $this;
    }
    /**
     * Get costCentreFeeVat value
     * @return string|null
     */
    public function getCostCentreFeeVat(): ?string
    {
        return $this->costCentreFeeVat;
    }
    /**
     * Set costCentreFeeVat value
     * @param string $costCentreFeeVat
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setCostCentreFeeVat(?string $costCentreFeeVat = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentreFeeVat) && !is_string($costCentreFeeVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentreFeeVat, true), gettype($costCentreFeeVat)), __LINE__);
        }
        $this->costCentreFeeVat = $costCentreFeeVat;
        
        return $this;
    }
    /**
     * Get customerField value
     * @return string|null
     */
    public function getCustomerField(): ?string
    {
        return $this->customerField;
    }
    /**
     * Set customerField value
     * @param string $customerField
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setCustomerField(?string $customerField = null): self
    {
        // validation for constraint: string
        if (!is_null($customerField) && !is_string($customerField)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerField, true), gettype($customerField)), __LINE__);
        }
        $this->customerField = $customerField;
        
        return $this;
    }
    /**
     * Get customerField2 value
     * @return string|null
     */
    public function getCustomerField2(): ?string
    {
        return $this->customerField2;
    }
    /**
     * Set customerField2 value
     * @param string $customerField2
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setCustomerField2(?string $customerField2 = null): self
    {
        // validation for constraint: string
        if (!is_null($customerField2) && !is_string($customerField2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerField2, true), gettype($customerField2)), __LINE__);
        }
        $this->customerField2 = $customerField2;
        
        return $this;
    }
    /**
     * Get customerField3 value
     * @return string|null
     */
    public function getCustomerField3(): ?string
    {
        return $this->customerField3;
    }
    /**
     * Set customerField3 value
     * @param string $customerField3
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setCustomerField3(?string $customerField3 = null): self
    {
        // validation for constraint: string
        if (!is_null($customerField3) && !is_string($customerField3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerField3, true), gettype($customerField3)), __LINE__);
        }
        $this->customerField3 = $customerField3;
        
        return $this;
    }
    /**
     * Get customerField4 value
     * @return string|null
     */
    public function getCustomerField4(): ?string
    {
        return $this->customerField4;
    }
    /**
     * Set customerField4 value
     * @param string $customerField4
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setCustomerField4(?string $customerField4 = null): self
    {
        // validation for constraint: string
        if (!is_null($customerField4) && !is_string($customerField4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerField4, true), gettype($customerField4)), __LINE__);
        }
        $this->customerField4 = $customerField4;
        
        return $this;
    }
    /**
     * Get customerField5 value
     * @return string|null
     */
    public function getCustomerField5(): ?string
    {
        return $this->customerField5;
    }
    /**
     * Set customerField5 value
     * @param string $customerField5
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setCustomerField5(?string $customerField5 = null): self
    {
        // validation for constraint: string
        if (!is_null($customerField5) && !is_string($customerField5)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerField5, true), gettype($customerField5)), __LINE__);
        }
        $this->customerField5 = $customerField5;
        
        return $this;
    }
    /**
     * Get diffManualChecked value
     * @return bool|null
     */
    public function getDiffManualChecked(): ?bool
    {
        return $this->diffManualChecked;
    }
    /**
     * Set diffManualChecked value
     * @param bool $diffManualChecked
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setDiffManualChecked(?bool $diffManualChecked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($diffManualChecked) && !is_bool($diffManualChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($diffManualChecked, true), gettype($diffManualChecked)), __LINE__);
        }
        $this->diffManualChecked = $diffManualChecked;
        
        return $this;
    }
    /**
     * Get entryId value
     * @return string|null
     */
    public function getEntryId(): ?string
    {
        return $this->entryId;
    }
    /**
     * Set entryId value
     * @param string $entryId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setEntryId(?string $entryId = null): self
    {
        // validation for constraint: string
        if (!is_null($entryId) && !is_string($entryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryId, true), gettype($entryId)), __LINE__);
        }
        $this->entryId = $entryId;
        
        return $this;
    }
    /**
     * Get errors value
     * @return int|null
     */
    public function getErrors(): ?int
    {
        return $this->errors;
    }
    /**
     * Set errors value
     * @param int $errors
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setErrors(?int $errors = null): self
    {
        // validation for constraint: int
        if (!is_null($errors) && !(is_int($errors) || ctype_digit($errors))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errors, true), gettype($errors)), __LINE__);
        }
        $this->errors = $errors;
        
        return $this;
    }
    /**
     * Get feeNoVat value
     * @return float|null
     */
    public function getFeeNoVat(): ?float
    {
        return $this->feeNoVat;
    }
    /**
     * Set feeNoVat value
     * @param float $feeNoVat
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setFeeNoVat(?float $feeNoVat = null): self
    {
        // validation for constraint: float
        if (!is_null($feeNoVat) && !(is_float($feeNoVat) || is_numeric($feeNoVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeNoVat, true), gettype($feeNoVat)), __LINE__);
        }
        $this->feeNoVat = $feeNoVat;
        
        return $this;
    }
    /**
     * Get feeVat value
     * @return float|null
     */
    public function getFeeVat(): ?float
    {
        return $this->feeVat;
    }
    /**
     * Set feeVat value
     * @param float $feeVat
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setFeeVat(?float $feeVat = null): self
    {
        // validation for constraint: float
        if (!is_null($feeVat) && !(is_float($feeVat) || is_numeric($feeVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeVat, true), gettype($feeVat)), __LINE__);
        }
        $this->feeVat = $feeVat;
        
        return $this;
    }
    /**
     * Get ignoreFees value
     * @return bool|null
     */
    public function getIgnoreFees(): ?bool
    {
        return $this->ignoreFees;
    }
    /**
     * Set ignoreFees value
     * @param bool $ignoreFees
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setIgnoreFees(?bool $ignoreFees = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreFees) && !is_bool($ignoreFees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreFees, true), gettype($ignoreFees)), __LINE__);
        }
        $this->ignoreFees = $ignoreFees;
        
        return $this;
    }
    /**
     * Get ignored value
     * @return bool|null
     */
    public function getIgnored(): ?bool
    {
        return $this->ignored;
    }
    /**
     * Set ignored value
     * @param bool $ignored
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setIgnored(?bool $ignored = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignored) && !is_bool($ignored)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignored, true), gettype($ignored)), __LINE__);
        }
        $this->ignored = $ignored;
        
        return $this;
    }
    /**
     * Get midocoAmount value
     * @return float|null
     */
    public function getMidocoAmount(): ?float
    {
        return $this->midocoAmount;
    }
    /**
     * Set midocoAmount value
     * @param float $midocoAmount
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setMidocoAmount(?float $midocoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($midocoAmount) && !(is_float($midocoAmount) || is_numeric($midocoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($midocoAmount, true), gettype($midocoAmount)), __LINE__);
        }
        $this->midocoAmount = $midocoAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
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
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get transactionCode value
     * @return string|null
     */
    public function getTransactionCode(): ?string
    {
        return $this->transactionCode;
    }
    /**
     * Set transactionCode value
     * @param string $transactionCode
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setTransactionCode(?string $transactionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionCode) && !is_string($transactionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionCode, true), gettype($transactionCode)), __LINE__);
        }
        $this->transactionCode = $transactionCode;
        
        return $this;
    }
    /**
     * Get transactionDate value
     * @return string|null
     */
    public function getTransactionDate(): ?string
    {
        return $this->transactionDate;
    }
    /**
     * Set transactionDate value
     * @param string $transactionDate
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlBookDTO
     */
    public function setTransactionDate(?string $transactionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->transactionDate = $transactionDate;
        
        return $this;
    }
}
