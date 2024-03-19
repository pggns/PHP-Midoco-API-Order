<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareAdviceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrepareAdviceRequest extends PrepareAdviceInfoRequest
{
    /**
     * The creditorFrom
     * @var string|null
     */
    protected ?string $creditorFrom = null;
    /**
     * The creditorTo
     * @var string|null
     */
    protected ?string $creditorTo = null;
    /**
     * The groupByCreditor
     * @var bool|null
     */
    protected ?bool $groupByCreditor = null;
    /**
     * The onlyPaid
     * @var bool|null
     */
    protected ?bool $onlyPaid = null;
    /**
     * The supplierDepositAmount
     * @var float|null
     */
    protected ?float $supplierDepositAmount = null;
    /**
     * The supplierDepositDate
     * @var string|null
     */
    protected ?string $supplierDepositDate = null;
    /**
     * The supplierFinalPaymentDate
     * @var string|null
     */
    protected ?string $supplierFinalPaymentDate = null;
    /**
     * The supplierCommissionAmount
     * @var float|null
     */
    protected ?float $supplierCommissionAmount = null;
    /**
     * Constructor method for PrepareAdviceRequest
     * @uses PrepareAdviceRequest::setCreditorFrom()
     * @uses PrepareAdviceRequest::setCreditorTo()
     * @uses PrepareAdviceRequest::setGroupByCreditor()
     * @uses PrepareAdviceRequest::setOnlyPaid()
     * @uses PrepareAdviceRequest::setSupplierDepositAmount()
     * @uses PrepareAdviceRequest::setSupplierDepositDate()
     * @uses PrepareAdviceRequest::setSupplierFinalPaymentDate()
     * @uses PrepareAdviceRequest::setSupplierCommissionAmount()
     * @param string $creditorFrom
     * @param string $creditorTo
     * @param bool $groupByCreditor
     * @param bool $onlyPaid
     * @param float $supplierDepositAmount
     * @param string $supplierDepositDate
     * @param string $supplierFinalPaymentDate
     * @param float $supplierCommissionAmount
     */
    public function __construct(?string $creditorFrom = null, ?string $creditorTo = null, ?bool $groupByCreditor = null, ?bool $onlyPaid = null, ?float $supplierDepositAmount = null, ?string $supplierDepositDate = null, ?string $supplierFinalPaymentDate = null, ?float $supplierCommissionAmount = null)
    {
        $this
            ->setCreditorFrom($creditorFrom)
            ->setCreditorTo($creditorTo)
            ->setGroupByCreditor($groupByCreditor)
            ->setOnlyPaid($onlyPaid)
            ->setSupplierDepositAmount($supplierDepositAmount)
            ->setSupplierDepositDate($supplierDepositDate)
            ->setSupplierFinalPaymentDate($supplierFinalPaymentDate)
            ->setSupplierCommissionAmount($supplierCommissionAmount);
    }
    /**
     * Get creditorFrom value
     * @return string|null
     */
    public function getCreditorFrom(): ?string
    {
        return $this->creditorFrom;
    }
    /**
     * Set creditorFrom value
     * @param string $creditorFrom
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceRequest
     */
    public function setCreditorFrom(?string $creditorFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorFrom) && !is_string($creditorFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorFrom, true), gettype($creditorFrom)), __LINE__);
        }
        $this->creditorFrom = $creditorFrom;
        
        return $this;
    }
    /**
     * Get creditorTo value
     * @return string|null
     */
    public function getCreditorTo(): ?string
    {
        return $this->creditorTo;
    }
    /**
     * Set creditorTo value
     * @param string $creditorTo
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceRequest
     */
    public function setCreditorTo(?string $creditorTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorTo) && !is_string($creditorTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorTo, true), gettype($creditorTo)), __LINE__);
        }
        $this->creditorTo = $creditorTo;
        
        return $this;
    }
    /**
     * Get groupByCreditor value
     * @return bool|null
     */
    public function getGroupByCreditor(): ?bool
    {
        return $this->groupByCreditor;
    }
    /**
     * Set groupByCreditor value
     * @param bool $groupByCreditor
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceRequest
     */
    public function setGroupByCreditor(?bool $groupByCreditor = null): self
    {
        // validation for constraint: boolean
        if (!is_null($groupByCreditor) && !is_bool($groupByCreditor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupByCreditor, true), gettype($groupByCreditor)), __LINE__);
        }
        $this->groupByCreditor = $groupByCreditor;
        
        return $this;
    }
    /**
     * Get onlyPaid value
     * @return bool|null
     */
    public function getOnlyPaid(): ?bool
    {
        return $this->onlyPaid;
    }
    /**
     * Set onlyPaid value
     * @param bool $onlyPaid
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceRequest
     */
    public function setOnlyPaid(?bool $onlyPaid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyPaid) && !is_bool($onlyPaid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyPaid, true), gettype($onlyPaid)), __LINE__);
        }
        $this->onlyPaid = $onlyPaid;
        
        return $this;
    }
    /**
     * Get supplierDepositAmount value
     * @return float|null
     */
    public function getSupplierDepositAmount(): ?float
    {
        return $this->supplierDepositAmount;
    }
    /**
     * Set supplierDepositAmount value
     * @param float $supplierDepositAmount
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceRequest
     */
    public function setSupplierDepositAmount(?float $supplierDepositAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierDepositAmount) && !(is_float($supplierDepositAmount) || is_numeric($supplierDepositAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierDepositAmount, true), gettype($supplierDepositAmount)), __LINE__);
        }
        $this->supplierDepositAmount = $supplierDepositAmount;
        
        return $this;
    }
    /**
     * Get supplierDepositDate value
     * @return string|null
     */
    public function getSupplierDepositDate(): ?string
    {
        return $this->supplierDepositDate;
    }
    /**
     * Set supplierDepositDate value
     * @param string $supplierDepositDate
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceRequest
     */
    public function setSupplierDepositDate(?string $supplierDepositDate = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierDepositDate) && !is_string($supplierDepositDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierDepositDate, true), gettype($supplierDepositDate)), __LINE__);
        }
        $this->supplierDepositDate = $supplierDepositDate;
        
        return $this;
    }
    /**
     * Get supplierFinalPaymentDate value
     * @return string|null
     */
    public function getSupplierFinalPaymentDate(): ?string
    {
        return $this->supplierFinalPaymentDate;
    }
    /**
     * Set supplierFinalPaymentDate value
     * @param string $supplierFinalPaymentDate
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceRequest
     */
    public function setSupplierFinalPaymentDate(?string $supplierFinalPaymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierFinalPaymentDate) && !is_string($supplierFinalPaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierFinalPaymentDate, true), gettype($supplierFinalPaymentDate)), __LINE__);
        }
        $this->supplierFinalPaymentDate = $supplierFinalPaymentDate;
        
        return $this;
    }
    /**
     * Get supplierCommissionAmount value
     * @return float|null
     */
    public function getSupplierCommissionAmount(): ?float
    {
        return $this->supplierCommissionAmount;
    }
    /**
     * Set supplierCommissionAmount value
     * @param float $supplierCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceRequest
     */
    public function setSupplierCommissionAmount(?float $supplierCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierCommissionAmount) && !(is_float($supplierCommissionAmount) || is_numeric($supplierCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierCommissionAmount, true), gettype($supplierCommissionAmount)), __LINE__);
        }
        $this->supplierCommissionAmount = $supplierCommissionAmount;
        
        return $this;
    }
}
