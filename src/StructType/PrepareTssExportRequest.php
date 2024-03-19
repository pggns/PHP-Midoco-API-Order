<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareTssExportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrepareTssExportRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unitName = null;
    /**
     * The complete
     * @var bool|null
     */
    protected ?bool $complete = null;
    /**
     * The dateFrom
     * @var string|null
     */
    protected ?string $dateFrom = null;
    /**
     * The dateTo
     * @var string|null
     */
    protected ?string $dateTo = null;
    /**
     * The transactionNoFrom
     * @var int|null
     */
    protected ?int $transactionNoFrom = null;
    /**
     * The transactionNoTo
     * @var int|null
     */
    protected ?int $transactionNoTo = null;
    /**
     * The receiptNo
     * @var int|null
     */
    protected ?int $receiptNo = null;
    /**
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * Constructor method for PrepareTssExportRequest
     * @uses PrepareTssExportRequest::setUnitName()
     * @uses PrepareTssExportRequest::setComplete()
     * @uses PrepareTssExportRequest::setDateFrom()
     * @uses PrepareTssExportRequest::setDateTo()
     * @uses PrepareTssExportRequest::setTransactionNoFrom()
     * @uses PrepareTssExportRequest::setTransactionNoTo()
     * @uses PrepareTssExportRequest::setReceiptNo()
     * @uses PrepareTssExportRequest::setTssId()
     * @param string[] $unitName
     * @param bool $complete
     * @param string $dateFrom
     * @param string $dateTo
     * @param int $transactionNoFrom
     * @param int $transactionNoTo
     * @param int $receiptNo
     * @param string $tssId
     */
    public function __construct(?array $unitName = null, ?bool $complete = null, ?string $dateFrom = null, ?string $dateTo = null, ?int $transactionNoFrom = null, ?int $transactionNoTo = null, ?int $receiptNo = null, ?string $tssId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setComplete($complete)
            ->setDateFrom($dateFrom)
            ->setDateTo($dateTo)
            ->setTransactionNoFrom($transactionNoFrom)
            ->setTransactionNoTo($transactionNoTo)
            ->setReceiptNo($receiptNo)
            ->setTssId($tssId);
    }
    /**
     * Get unitName value
     * @return string[]
     */
    public function getUnitName(): ?array
    {
        return $this->unitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintFromSetUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prepareTssExportRequestUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($prepareTssExportRequestUnitNameItem)) {
                $invalidValues[] = is_object($prepareTssExportRequestUnitNameItem) ? get_class($prepareTssExportRequestUnitNameItem) : sprintf('%s(%s)', gettype($prepareTssExportRequestUnitNameItem), var_export($prepareTssExportRequestUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Order\StructType\PrepareTssExportRequest
     */
    public function setUnitName(?array $unitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to unitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\PrepareTssExportRequest
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitName[] = $item;
        
        return $this;
    }
    /**
     * Get complete value
     * @return bool|null
     */
    public function getComplete(): ?bool
    {
        return $this->complete;
    }
    /**
     * Set complete value
     * @param bool $complete
     * @return \Pggns\MidocoApi\Order\StructType\PrepareTssExportRequest
     */
    public function setComplete(?bool $complete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($complete) && !is_bool($complete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($complete, true), gettype($complete)), __LINE__);
        }
        $this->complete = $complete;
        
        return $this;
    }
    /**
     * Get dateFrom value
     * @return string|null
     */
    public function getDateFrom(): ?string
    {
        return $this->dateFrom;
    }
    /**
     * Set dateFrom value
     * @param string $dateFrom
     * @return \Pggns\MidocoApi\Order\StructType\PrepareTssExportRequest
     */
    public function setDateFrom(?string $dateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFrom) && !is_string($dateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFrom, true), gettype($dateFrom)), __LINE__);
        }
        $this->dateFrom = $dateFrom;
        
        return $this;
    }
    /**
     * Get dateTo value
     * @return string|null
     */
    public function getDateTo(): ?string
    {
        return $this->dateTo;
    }
    /**
     * Set dateTo value
     * @param string $dateTo
     * @return \Pggns\MidocoApi\Order\StructType\PrepareTssExportRequest
     */
    public function setDateTo(?string $dateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTo) && !is_string($dateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTo, true), gettype($dateTo)), __LINE__);
        }
        $this->dateTo = $dateTo;
        
        return $this;
    }
    /**
     * Get transactionNoFrom value
     * @return int|null
     */
    public function getTransactionNoFrom(): ?int
    {
        return $this->transactionNoFrom;
    }
    /**
     * Set transactionNoFrom value
     * @param int $transactionNoFrom
     * @return \Pggns\MidocoApi\Order\StructType\PrepareTssExportRequest
     */
    public function setTransactionNoFrom(?int $transactionNoFrom = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionNoFrom) && !(is_int($transactionNoFrom) || ctype_digit($transactionNoFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionNoFrom, true), gettype($transactionNoFrom)), __LINE__);
        }
        $this->transactionNoFrom = $transactionNoFrom;
        
        return $this;
    }
    /**
     * Get transactionNoTo value
     * @return int|null
     */
    public function getTransactionNoTo(): ?int
    {
        return $this->transactionNoTo;
    }
    /**
     * Set transactionNoTo value
     * @param int $transactionNoTo
     * @return \Pggns\MidocoApi\Order\StructType\PrepareTssExportRequest
     */
    public function setTransactionNoTo(?int $transactionNoTo = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionNoTo) && !(is_int($transactionNoTo) || ctype_digit($transactionNoTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionNoTo, true), gettype($transactionNoTo)), __LINE__);
        }
        $this->transactionNoTo = $transactionNoTo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrepareTssExportRequest
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
     * Get tssId value
     * @return string|null
     */
    public function getTssId(): ?string
    {
        return $this->tssId;
    }
    /**
     * Set tssId value
     * @param string $tssId
     * @return \Pggns\MidocoApi\Order\StructType\PrepareTssExportRequest
     */
    public function setTssId(?string $tssId = null): self
    {
        // validation for constraint: string
        if (!is_null($tssId) && !is_string($tssId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssId, true), gettype($tssId)), __LINE__);
        }
        $this->tssId = $tssId;
        
        return $this;
    }
}
