<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPaymentProviderEntriesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchPaymentProviderEntriesRequest extends AbstractStructBase
{
    /**
     * The receiptDateFrom
     * @var string|null
     */
    protected ?string $receiptDateFrom = null;
    /**
     * The receiptDateTo
     * @var string|null
     */
    protected ?string $receiptDateTo = null;
    /**
     * The transactionDateFrom
     * @var string|null
     */
    protected ?string $transactionDateFrom = null;
    /**
     * The transactionDateTo
     * @var string|null
     */
    protected ?string $transactionDateTo = null;
    /**
     * The dueDateFrom
     * @var string|null
     */
    protected ?string $dueDateFrom = null;
    /**
     * The dueDateTo
     * @var string|null
     */
    protected ?string $dueDateTo = null;
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * The entryPaidAmountFrom
     * @var float|null
     */
    protected ?float $entryPaidAmountFrom = null;
    /**
     * The entryPaidAmountTo
     * @var float|null
     */
    protected ?float $entryPaidAmountTo = null;
    /**
     * The settlementAmountFrom
     * @var float|null
     */
    protected ?float $settlementAmountFrom = null;
    /**
     * The settlementAmountTo
     * @var float|null
     */
    protected ?float $settlementAmountTo = null;
    /**
     * The invoiceNo
     * @var string|null
     */
    protected ?string $invoiceNo = null;
    /**
     * The entryAccountFrom
     * @var string|null
     */
    protected ?string $entryAccountFrom = null;
    /**
     * The entryAccountTo
     * @var string|null
     */
    protected ?string $entryAccountTo = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The withSettlement
     * @var bool|null
     */
    protected ?bool $withSettlement = null;
    /**
     * The withDifference
     * @var bool|null
     */
    protected ?bool $withDifference = null;
    /**
     * Constructor method for SearchPaymentProviderEntriesRequest
     * @uses SearchPaymentProviderEntriesRequest::setReceiptDateFrom()
     * @uses SearchPaymentProviderEntriesRequest::setReceiptDateTo()
     * @uses SearchPaymentProviderEntriesRequest::setTransactionDateFrom()
     * @uses SearchPaymentProviderEntriesRequest::setTransactionDateTo()
     * @uses SearchPaymentProviderEntriesRequest::setDueDateFrom()
     * @uses SearchPaymentProviderEntriesRequest::setDueDateTo()
     * @uses SearchPaymentProviderEntriesRequest::setCreationDateFrom()
     * @uses SearchPaymentProviderEntriesRequest::setCreationDateTo()
     * @uses SearchPaymentProviderEntriesRequest::setEntryPaidAmountFrom()
     * @uses SearchPaymentProviderEntriesRequest::setEntryPaidAmountTo()
     * @uses SearchPaymentProviderEntriesRequest::setSettlementAmountFrom()
     * @uses SearchPaymentProviderEntriesRequest::setSettlementAmountTo()
     * @uses SearchPaymentProviderEntriesRequest::setInvoiceNo()
     * @uses SearchPaymentProviderEntriesRequest::setEntryAccountFrom()
     * @uses SearchPaymentProviderEntriesRequest::setEntryAccountTo()
     * @uses SearchPaymentProviderEntriesRequest::setEntryId()
     * @uses SearchPaymentProviderEntriesRequest::setWithSettlement()
     * @uses SearchPaymentProviderEntriesRequest::setWithDifference()
     * @param string $receiptDateFrom
     * @param string $receiptDateTo
     * @param string $transactionDateFrom
     * @param string $transactionDateTo
     * @param string $dueDateFrom
     * @param string $dueDateTo
     * @param string $creationDateFrom
     * @param string $creationDateTo
     * @param float $entryPaidAmountFrom
     * @param float $entryPaidAmountTo
     * @param float $settlementAmountFrom
     * @param float $settlementAmountTo
     * @param string $invoiceNo
     * @param string $entryAccountFrom
     * @param string $entryAccountTo
     * @param string $entryId
     * @param bool $withSettlement
     * @param bool $withDifference
     */
    public function __construct(?string $receiptDateFrom = null, ?string $receiptDateTo = null, ?string $transactionDateFrom = null, ?string $transactionDateTo = null, ?string $dueDateFrom = null, ?string $dueDateTo = null, ?string $creationDateFrom = null, ?string $creationDateTo = null, ?float $entryPaidAmountFrom = null, ?float $entryPaidAmountTo = null, ?float $settlementAmountFrom = null, ?float $settlementAmountTo = null, ?string $invoiceNo = null, ?string $entryAccountFrom = null, ?string $entryAccountTo = null, ?string $entryId = null, ?bool $withSettlement = null, ?bool $withDifference = null)
    {
        $this
            ->setReceiptDateFrom($receiptDateFrom)
            ->setReceiptDateTo($receiptDateTo)
            ->setTransactionDateFrom($transactionDateFrom)
            ->setTransactionDateTo($transactionDateTo)
            ->setDueDateFrom($dueDateFrom)
            ->setDueDateTo($dueDateTo)
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo)
            ->setEntryPaidAmountFrom($entryPaidAmountFrom)
            ->setEntryPaidAmountTo($entryPaidAmountTo)
            ->setSettlementAmountFrom($settlementAmountFrom)
            ->setSettlementAmountTo($settlementAmountTo)
            ->setInvoiceNo($invoiceNo)
            ->setEntryAccountFrom($entryAccountFrom)
            ->setEntryAccountTo($entryAccountTo)
            ->setEntryId($entryId)
            ->setWithSettlement($withSettlement)
            ->setWithDifference($withDifference);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
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
     * Get receiptDateTo value
     * @return string|null
     */
    public function getReceiptDateTo(): ?string
    {
        return $this->receiptDateTo;
    }
    /**
     * Set receiptDateTo value
     * @param string $receiptDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setReceiptDateTo(?string $receiptDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateTo) && !is_string($receiptDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateTo, true), gettype($receiptDateTo)), __LINE__);
        }
        $this->receiptDateTo = $receiptDateTo;
        
        return $this;
    }
    /**
     * Get transactionDateFrom value
     * @return string|null
     */
    public function getTransactionDateFrom(): ?string
    {
        return $this->transactionDateFrom;
    }
    /**
     * Set transactionDateFrom value
     * @param string $transactionDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setTransactionDateFrom(?string $transactionDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionDateFrom) && !is_string($transactionDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDateFrom, true), gettype($transactionDateFrom)), __LINE__);
        }
        $this->transactionDateFrom = $transactionDateFrom;
        
        return $this;
    }
    /**
     * Get transactionDateTo value
     * @return string|null
     */
    public function getTransactionDateTo(): ?string
    {
        return $this->transactionDateTo;
    }
    /**
     * Set transactionDateTo value
     * @param string $transactionDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setTransactionDateTo(?string $transactionDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionDateTo) && !is_string($transactionDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDateTo, true), gettype($transactionDateTo)), __LINE__);
        }
        $this->transactionDateTo = $transactionDateTo;
        
        return $this;
    }
    /**
     * Get dueDateFrom value
     * @return string|null
     */
    public function getDueDateFrom(): ?string
    {
        return $this->dueDateFrom;
    }
    /**
     * Set dueDateFrom value
     * @param string $dueDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setDueDateFrom(?string $dueDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateFrom) && !is_string($dueDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateFrom, true), gettype($dueDateFrom)), __LINE__);
        }
        $this->dueDateFrom = $dueDateFrom;
        
        return $this;
    }
    /**
     * Get dueDateTo value
     * @return string|null
     */
    public function getDueDateTo(): ?string
    {
        return $this->dueDateTo;
    }
    /**
     * Set dueDateTo value
     * @param string $dueDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setDueDateTo(?string $dueDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateTo) && !is_string($dueDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateTo, true), gettype($dueDateTo)), __LINE__);
        }
        $this->dueDateTo = $dueDateTo;
        
        return $this;
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
    /**
     * Get entryPaidAmountFrom value
     * @return float|null
     */
    public function getEntryPaidAmountFrom(): ?float
    {
        return $this->entryPaidAmountFrom;
    }
    /**
     * Set entryPaidAmountFrom value
     * @param float $entryPaidAmountFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setEntryPaidAmountFrom(?float $entryPaidAmountFrom = null): self
    {
        // validation for constraint: float
        if (!is_null($entryPaidAmountFrom) && !(is_float($entryPaidAmountFrom) || is_numeric($entryPaidAmountFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($entryPaidAmountFrom, true), gettype($entryPaidAmountFrom)), __LINE__);
        }
        $this->entryPaidAmountFrom = $entryPaidAmountFrom;
        
        return $this;
    }
    /**
     * Get entryPaidAmountTo value
     * @return float|null
     */
    public function getEntryPaidAmountTo(): ?float
    {
        return $this->entryPaidAmountTo;
    }
    /**
     * Set entryPaidAmountTo value
     * @param float $entryPaidAmountTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setEntryPaidAmountTo(?float $entryPaidAmountTo = null): self
    {
        // validation for constraint: float
        if (!is_null($entryPaidAmountTo) && !(is_float($entryPaidAmountTo) || is_numeric($entryPaidAmountTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($entryPaidAmountTo, true), gettype($entryPaidAmountTo)), __LINE__);
        }
        $this->entryPaidAmountTo = $entryPaidAmountTo;
        
        return $this;
    }
    /**
     * Get settlementAmountFrom value
     * @return float|null
     */
    public function getSettlementAmountFrom(): ?float
    {
        return $this->settlementAmountFrom;
    }
    /**
     * Set settlementAmountFrom value
     * @param float $settlementAmountFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setSettlementAmountFrom(?float $settlementAmountFrom = null): self
    {
        // validation for constraint: float
        if (!is_null($settlementAmountFrom) && !(is_float($settlementAmountFrom) || is_numeric($settlementAmountFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($settlementAmountFrom, true), gettype($settlementAmountFrom)), __LINE__);
        }
        $this->settlementAmountFrom = $settlementAmountFrom;
        
        return $this;
    }
    /**
     * Get settlementAmountTo value
     * @return float|null
     */
    public function getSettlementAmountTo(): ?float
    {
        return $this->settlementAmountTo;
    }
    /**
     * Set settlementAmountTo value
     * @param float $settlementAmountTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setSettlementAmountTo(?float $settlementAmountTo = null): self
    {
        // validation for constraint: float
        if (!is_null($settlementAmountTo) && !(is_float($settlementAmountTo) || is_numeric($settlementAmountTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($settlementAmountTo, true), gettype($settlementAmountTo)), __LINE__);
        }
        $this->settlementAmountTo = $settlementAmountTo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
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
     * Get entryAccountFrom value
     * @return string|null
     */
    public function getEntryAccountFrom(): ?string
    {
        return $this->entryAccountFrom;
    }
    /**
     * Set entryAccountFrom value
     * @param string $entryAccountFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setEntryAccountFrom(?string $entryAccountFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($entryAccountFrom) && !is_string($entryAccountFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryAccountFrom, true), gettype($entryAccountFrom)), __LINE__);
        }
        $this->entryAccountFrom = $entryAccountFrom;
        
        return $this;
    }
    /**
     * Get entryAccountTo value
     * @return string|null
     */
    public function getEntryAccountTo(): ?string
    {
        return $this->entryAccountTo;
    }
    /**
     * Set entryAccountTo value
     * @param string $entryAccountTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setEntryAccountTo(?string $entryAccountTo = null): self
    {
        // validation for constraint: string
        if (!is_null($entryAccountTo) && !is_string($entryAccountTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryAccountTo, true), gettype($entryAccountTo)), __LINE__);
        }
        $this->entryAccountTo = $entryAccountTo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
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
     * Get withSettlement value
     * @return bool|null
     */
    public function getWithSettlement(): ?bool
    {
        return $this->withSettlement;
    }
    /**
     * Set withSettlement value
     * @param bool $withSettlement
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setWithSettlement(?bool $withSettlement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($withSettlement) && !is_bool($withSettlement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withSettlement, true), gettype($withSettlement)), __LINE__);
        }
        $this->withSettlement = $withSettlement;
        
        return $this;
    }
    /**
     * Get withDifference value
     * @return bool|null
     */
    public function getWithDifference(): ?bool
    {
        return $this->withDifference;
    }
    /**
     * Set withDifference value
     * @param bool $withDifference
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest
     */
    public function setWithDifference(?bool $withDifference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($withDifference) && !is_bool($withDifference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withDifference, true), gettype($withDifference)), __LINE__);
        }
        $this->withDifference = $withDifference;
        
        return $this;
    }
}
