<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBookReceiptPosition4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CashBookReceiptPosition4Printing extends ReceiptPositionDTO
{
    /**
     * The receiptNo
     * @var int|null
     */
    protected ?int $receiptNo = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The creationUser
     * @var string|null
     */
    protected ?string $creationUser = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The isExpense
     * @var bool|null
     */
    protected ?bool $isExpense = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The total4CcType
     * @var float|null
     */
    protected ?float $total4CcType = null;
    /**
     * The paymentAccount
     * @var string|null
     */
    protected ?string $paymentAccount = null;
    /**
     * The signatureFailure
     * @var string|null
     */
    protected ?string $signatureFailure = null;
    /**
     * Constructor method for CashBookReceiptPosition4Printing
     * @uses CashBookReceiptPosition4Printing::setReceiptNo()
     * @uses CashBookReceiptPosition4Printing::setReceiptDate()
     * @uses CashBookReceiptPosition4Printing::setCustomerName()
     * @uses CashBookReceiptPosition4Printing::setCustomerId()
     * @uses CashBookReceiptPosition4Printing::setCreationUser()
     * @uses CashBookReceiptPosition4Printing::setOrderNo()
     * @uses CashBookReceiptPosition4Printing::setIsExpense()
     * @uses CashBookReceiptPosition4Printing::setCcType()
     * @uses CashBookReceiptPosition4Printing::setTotal4CcType()
     * @uses CashBookReceiptPosition4Printing::setPaymentAccount()
     * @uses CashBookReceiptPosition4Printing::setSignatureFailure()
     * @param int $receiptNo
     * @param string $receiptDate
     * @param string $customerName
     * @param string $customerId
     * @param string $creationUser
     * @param int $orderNo
     * @param bool $isExpense
     * @param string $ccType
     * @param float $total4CcType
     * @param string $paymentAccount
     * @param string $signatureFailure
     */
    public function __construct(?int $receiptNo = null, ?string $receiptDate = null, ?string $customerName = null, ?string $customerId = null, ?string $creationUser = null, ?int $orderNo = null, ?bool $isExpense = null, ?string $ccType = null, ?float $total4CcType = null, ?string $paymentAccount = null, ?string $signatureFailure = null)
    {
        $this
            ->setReceiptNo($receiptNo)
            ->setReceiptDate($receiptDate)
            ->setCustomerName($customerName)
            ->setCustomerId($customerId)
            ->setCreationUser($creationUser)
            ->setOrderNo($orderNo)
            ->setIsExpense($isExpense)
            ->setCcType($ccType)
            ->setTotal4CcType($total4CcType)
            ->setPaymentAccount($paymentAccount)
            ->setSignatureFailure($signatureFailure);
    }
    /**
     * Get receiptNo value
     * @return int|null
     */
    public function getReceiptNo(): ?int
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param int $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing
     */
    public function setReceiptNo(?int $receiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptNo) && !(is_int($receiptNo) || ctype_digit($receiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing
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
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return string|null
     */
    public function getCreationUser(): ?string
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param string $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing
     */
    public function setCreationUser(?string $creationUser = null): self
    {
        // validation for constraint: string
        if (!is_null($creationUser) && !is_string($creationUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing
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
     * Get isExpense value
     * @return bool|null
     */
    public function getIsExpense(): ?bool
    {
        return $this->isExpense;
    }
    /**
     * Set isExpense value
     * @param bool $isExpense
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing
     */
    public function setIsExpense(?bool $isExpense = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExpense) && !is_bool($isExpense)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExpense, true), gettype($isExpense)), __LINE__);
        }
        $this->isExpense = $isExpense;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get total4CcType value
     * @return float|null
     */
    public function getTotal4CcType(): ?float
    {
        return $this->total4CcType;
    }
    /**
     * Set total4CcType value
     * @param float $total4CcType
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing
     */
    public function setTotal4CcType(?float $total4CcType = null): self
    {
        // validation for constraint: float
        if (!is_null($total4CcType) && !(is_float($total4CcType) || is_numeric($total4CcType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total4CcType, true), gettype($total4CcType)), __LINE__);
        }
        $this->total4CcType = $total4CcType;
        
        return $this;
    }
    /**
     * Get paymentAccount value
     * @return string|null
     */
    public function getPaymentAccount(): ?string
    {
        return $this->paymentAccount;
    }
    /**
     * Set paymentAccount value
     * @param string $paymentAccount
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing
     */
    public function setPaymentAccount(?string $paymentAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentAccount) && !is_string($paymentAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentAccount, true), gettype($paymentAccount)), __LINE__);
        }
        $this->paymentAccount = $paymentAccount;
        
        return $this;
    }
    /**
     * Get signatureFailure value
     * @return string|null
     */
    public function getSignatureFailure(): ?string
    {
        return $this->signatureFailure;
    }
    /**
     * Set signatureFailure value
     * @param string $signatureFailure
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing
     */
    public function setSignatureFailure(?string $signatureFailure = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureFailure) && !is_string($signatureFailure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureFailure, true), gettype($signatureFailure)), __LINE__);
        }
        $this->signatureFailure = $signatureFailure;
        
        return $this;
    }
}
