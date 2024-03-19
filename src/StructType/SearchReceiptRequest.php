<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchReceiptRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchReceiptRequest extends AbstractStructBase
{
    /**
     * The cashBookId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $cashBookId;
    /**
     * The receiptNo
     * @var int|null
     */
    protected ?int $receiptNo = null;
    /**
     * The receiptDateFrom
     * @var string|null
     */
    protected ?string $receiptDateFrom = null;
    /**
     * The receiptDateUntil
     * @var string|null
     */
    protected ?string $receiptDateUntil = null;
    /**
     * The creator
     * @var int|null
     */
    protected ?int $creator = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The manuallyAdjustable
     * @var bool|null
     */
    protected ?bool $manuallyAdjustable = null;
    /**
     * The receiptCounter
     * @var int|null
     */
    protected ?int $receiptCounter = null;
    /**
     * The ignoreCashBookId
     * @var bool|null
     */
    protected ?bool $ignoreCashBookId = null;
    /**
     * Constructor method for SearchReceiptRequest
     * @uses SearchReceiptRequest::setCashBookId()
     * @uses SearchReceiptRequest::setReceiptNo()
     * @uses SearchReceiptRequest::setReceiptDateFrom()
     * @uses SearchReceiptRequest::setReceiptDateUntil()
     * @uses SearchReceiptRequest::setCreator()
     * @uses SearchReceiptRequest::setCustomerId()
     * @uses SearchReceiptRequest::setCustomerName()
     * @uses SearchReceiptRequest::setOrderNo()
     * @uses SearchReceiptRequest::setManuallyAdjustable()
     * @uses SearchReceiptRequest::setReceiptCounter()
     * @uses SearchReceiptRequest::setIgnoreCashBookId()
     * @param int $cashBookId
     * @param int $receiptNo
     * @param string $receiptDateFrom
     * @param string $receiptDateUntil
     * @param int $creator
     * @param int $customerId
     * @param string $customerName
     * @param int $orderNo
     * @param bool $manuallyAdjustable
     * @param int $receiptCounter
     * @param bool $ignoreCashBookId
     */
    public function __construct(int $cashBookId, ?int $receiptNo = null, ?string $receiptDateFrom = null, ?string $receiptDateUntil = null, ?int $creator = null, ?int $customerId = null, ?string $customerName = null, ?int $orderNo = null, ?bool $manuallyAdjustable = null, ?int $receiptCounter = null, ?bool $ignoreCashBookId = null)
    {
        $this
            ->setCashBookId($cashBookId)
            ->setReceiptNo($receiptNo)
            ->setReceiptDateFrom($receiptDateFrom)
            ->setReceiptDateUntil($receiptDateUntil)
            ->setCreator($creator)
            ->setCustomerId($customerId)
            ->setCustomerName($customerName)
            ->setOrderNo($orderNo)
            ->setManuallyAdjustable($manuallyAdjustable)
            ->setReceiptCounter($receiptCounter)
            ->setIgnoreCashBookId($ignoreCashBookId);
    }
    /**
     * Get cashBookId value
     * @return int
     */
    public function getCashBookId(): int
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param int $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest
     */
    public function setCashBookId(int $cashBookId): self
    {
        // validation for constraint: int
        if (!is_null($cashBookId) && !(is_int($cashBookId) || ctype_digit($cashBookId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest
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
     * Get receiptDateFrom value
     * @return string|null
     */
    public function getReceiptDateFrom(): ?string
    {
        return $this->receiptDateFrom;
    }
    /**
     * Set receiptDateFrom value
     * @param string $receiptDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest
     */
    public function setReceiptDateFrom(?string $receiptDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateFrom) && !is_string($receiptDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateFrom, true), gettype($receiptDateFrom)), __LINE__);
        }
        $this->receiptDateFrom = $receiptDateFrom;
        
        return $this;
    }
    /**
     * Get receiptDateUntil value
     * @return string|null
     */
    public function getReceiptDateUntil(): ?string
    {
        return $this->receiptDateUntil;
    }
    /**
     * Set receiptDateUntil value
     * @param string $receiptDateUntil
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest
     */
    public function setReceiptDateUntil(?string $receiptDateUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateUntil) && !is_string($receiptDateUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateUntil, true), gettype($receiptDateUntil)), __LINE__);
        }
        $this->receiptDateUntil = $receiptDateUntil;
        
        return $this;
    }
    /**
     * Get creator value
     * @return int|null
     */
    public function getCreator(): ?int
    {
        return $this->creator;
    }
    /**
     * Set creator value
     * @param int $creator
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest
     */
    public function setCreator(?int $creator = null): self
    {
        // validation for constraint: int
        if (!is_null($creator) && !(is_int($creator) || ctype_digit($creator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creator, true), gettype($creator)), __LINE__);
        }
        $this->creator = $creator;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest
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
     * Get manuallyAdjustable value
     * @return bool|null
     */
    public function getManuallyAdjustable(): ?bool
    {
        return $this->manuallyAdjustable;
    }
    /**
     * Set manuallyAdjustable value
     * @param bool $manuallyAdjustable
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest
     */
    public function setManuallyAdjustable(?bool $manuallyAdjustable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manuallyAdjustable) && !is_bool($manuallyAdjustable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manuallyAdjustable, true), gettype($manuallyAdjustable)), __LINE__);
        }
        $this->manuallyAdjustable = $manuallyAdjustable;
        
        return $this;
    }
    /**
     * Get receiptCounter value
     * @return int|null
     */
    public function getReceiptCounter(): ?int
    {
        return $this->receiptCounter;
    }
    /**
     * Set receiptCounter value
     * @param int $receiptCounter
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest
     */
    public function setReceiptCounter(?int $receiptCounter = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptCounter) && !(is_int($receiptCounter) || ctype_digit($receiptCounter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptCounter, true), gettype($receiptCounter)), __LINE__);
        }
        $this->receiptCounter = $receiptCounter;
        
        return $this;
    }
    /**
     * Get ignoreCashBookId value
     * @return bool|null
     */
    public function getIgnoreCashBookId(): ?bool
    {
        return $this->ignoreCashBookId;
    }
    /**
     * Set ignoreCashBookId value
     * @param bool $ignoreCashBookId
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest
     */
    public function setIgnoreCashBookId(?bool $ignoreCashBookId = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreCashBookId) && !is_bool($ignoreCashBookId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreCashBookId, true), gettype($ignoreCashBookId)), __LINE__);
        }
        $this->ignoreCashBookId = $ignoreCashBookId;
        
        return $this;
    }
}
