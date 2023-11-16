<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateKSichVExportRequest StructType
 * @subpackage Structs
 */
class CreateKSichVExportRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The fullExport
     * @var bool|null
     */
    protected ?bool $fullExport = null;
    /**
     * The receiptNoFrom
     * @var string|null
     */
    protected ?string $receiptNoFrom = null;
    /**
     * The receiptNoTo
     * @var string|null
     */
    protected ?string $receiptNoTo = null;
    /**
     * The transactionNoFrom
     * @var string|null
     */
    protected ?string $transactionNoFrom = null;
    /**
     * The transactionNoTo
     * @var string|null
     */
    protected ?string $transactionNoTo = null;
    /**
     * The AccountingDateFrom
     * @var string|null
     */
    protected ?string $AccountingDateFrom = null;
    /**
     * The AccountingDateTo
     * @var string|null
     */
    protected ?string $AccountingDateTo = null;
    /**
     * Constructor method for CreateKSichVExportRequest
     * @uses CreateKSichVExportRequest::setUnitName()
     * @uses CreateKSichVExportRequest::setFullExport()
     * @uses CreateKSichVExportRequest::setReceiptNoFrom()
     * @uses CreateKSichVExportRequest::setReceiptNoTo()
     * @uses CreateKSichVExportRequest::setTransactionNoFrom()
     * @uses CreateKSichVExportRequest::setTransactionNoTo()
     * @uses CreateKSichVExportRequest::setAccountingDateFrom()
     * @uses CreateKSichVExportRequest::setAccountingDateTo()
     * @param string $unitName
     * @param bool $fullExport
     * @param string $receiptNoFrom
     * @param string $receiptNoTo
     * @param string $transactionNoFrom
     * @param string $transactionNoTo
     * @param string $accountingDateFrom
     * @param string $accountingDateTo
     */
    public function __construct(?string $unitName = null, ?bool $fullExport = null, ?string $receiptNoFrom = null, ?string $receiptNoTo = null, ?string $transactionNoFrom = null, ?string $transactionNoTo = null, ?string $accountingDateFrom = null, ?string $accountingDateTo = null)
    {
        $this
            ->setUnitName($unitName)
            ->setFullExport($fullExport)
            ->setReceiptNoFrom($receiptNoFrom)
            ->setReceiptNoTo($receiptNoTo)
            ->setTransactionNoFrom($transactionNoFrom)
            ->setTransactionNoTo($transactionNoTo)
            ->setAccountingDateFrom($accountingDateFrom)
            ->setAccountingDateTo($accountingDateTo);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get fullExport value
     * @return bool|null
     */
    public function getFullExport(): ?bool
    {
        return $this->fullExport;
    }
    /**
     * Set fullExport value
     * @param bool $fullExport
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportRequest
     */
    public function setFullExport(?bool $fullExport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($fullExport) && !is_bool($fullExport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fullExport, true), gettype($fullExport)), __LINE__);
        }
        $this->fullExport = $fullExport;
        
        return $this;
    }
    /**
     * Get receiptNoFrom value
     * @return string|null
     */
    public function getReceiptNoFrom(): ?string
    {
        return $this->receiptNoFrom;
    }
    /**
     * Set receiptNoFrom value
     * @param string $receiptNoFrom
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportRequest
     */
    public function setReceiptNoFrom(?string $receiptNoFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNoFrom) && !is_string($receiptNoFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNoFrom, true), gettype($receiptNoFrom)), __LINE__);
        }
        $this->receiptNoFrom = $receiptNoFrom;
        
        return $this;
    }
    /**
     * Get receiptNoTo value
     * @return string|null
     */
    public function getReceiptNoTo(): ?string
    {
        return $this->receiptNoTo;
    }
    /**
     * Set receiptNoTo value
     * @param string $receiptNoTo
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportRequest
     */
    public function setReceiptNoTo(?string $receiptNoTo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNoTo) && !is_string($receiptNoTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNoTo, true), gettype($receiptNoTo)), __LINE__);
        }
        $this->receiptNoTo = $receiptNoTo;
        
        return $this;
    }
    /**
     * Get transactionNoFrom value
     * @return string|null
     */
    public function getTransactionNoFrom(): ?string
    {
        return $this->transactionNoFrom;
    }
    /**
     * Set transactionNoFrom value
     * @param string $transactionNoFrom
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportRequest
     */
    public function setTransactionNoFrom(?string $transactionNoFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionNoFrom) && !is_string($transactionNoFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionNoFrom, true), gettype($transactionNoFrom)), __LINE__);
        }
        $this->transactionNoFrom = $transactionNoFrom;
        
        return $this;
    }
    /**
     * Get transactionNoTo value
     * @return string|null
     */
    public function getTransactionNoTo(): ?string
    {
        return $this->transactionNoTo;
    }
    /**
     * Set transactionNoTo value
     * @param string $transactionNoTo
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportRequest
     */
    public function setTransactionNoTo(?string $transactionNoTo = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionNoTo) && !is_string($transactionNoTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionNoTo, true), gettype($transactionNoTo)), __LINE__);
        }
        $this->transactionNoTo = $transactionNoTo;
        
        return $this;
    }
    /**
     * Get AccountingDateFrom value
     * @return string|null
     */
    public function getAccountingDateFrom(): ?string
    {
        return $this->AccountingDateFrom;
    }
    /**
     * Set AccountingDateFrom value
     * @param string $accountingDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportRequest
     */
    public function setAccountingDateFrom(?string $accountingDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($accountingDateFrom) && !is_string($accountingDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountingDateFrom, true), gettype($accountingDateFrom)), __LINE__);
        }
        $this->AccountingDateFrom = $accountingDateFrom;
        
        return $this;
    }
    /**
     * Get AccountingDateTo value
     * @return string|null
     */
    public function getAccountingDateTo(): ?string
    {
        return $this->AccountingDateTo;
    }
    /**
     * Set AccountingDateTo value
     * @param string $accountingDateTo
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportRequest
     */
    public function setAccountingDateTo(?string $accountingDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountingDateTo) && !is_string($accountingDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountingDateTo, true), gettype($accountingDateTo)), __LINE__);
        }
        $this->AccountingDateTo = $accountingDateTo;
        
        return $this;
    }
}
