<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptRecordExportDTO StructType
 * @subpackage Structs
 */
class ReceiptRecordExportDTO extends AbstractStructBase
{
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The printSequenceIdFrom
     * @var int|null
     */
    protected ?int $printSequenceIdFrom = null;
    /**
     * The printSequenceIdTo
     * @var int|null
     */
    protected ?int $printSequenceIdTo = null;
    /**
     * The printingDateFrom
     * @var string|null
     */
    protected ?string $printingDateFrom = null;
    /**
     * The printingDateTo
     * @var string|null
     */
    protected ?string $printingDateTo = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The selectedCashBooks
     * @var string|null
     */
    protected ?string $selectedCashBooks = null;
    /**
     * The selectedUnits
     * @var string|null
     */
    protected ?string $selectedUnits = null;
    /**
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * Constructor method for ReceiptRecordExportDTO
     * @uses ReceiptRecordExportDTO::setCreationTimestamp()
     * @uses ReceiptRecordExportDTO::setCreationUser()
     * @uses ReceiptRecordExportDTO::setDescription()
     * @uses ReceiptRecordExportDTO::setExportId()
     * @uses ReceiptRecordExportDTO::setPrintSequenceIdFrom()
     * @uses ReceiptRecordExportDTO::setPrintSequenceIdTo()
     * @uses ReceiptRecordExportDTO::setPrintingDateFrom()
     * @uses ReceiptRecordExportDTO::setPrintingDateTo()
     * @uses ReceiptRecordExportDTO::setRepositoryId()
     * @uses ReceiptRecordExportDTO::setSelectedCashBooks()
     * @uses ReceiptRecordExportDTO::setSelectedUnits()
     * @uses ReceiptRecordExportDTO::setTssId()
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $description
     * @param int $exportId
     * @param int $printSequenceIdFrom
     * @param int $printSequenceIdTo
     * @param string $printingDateFrom
     * @param string $printingDateTo
     * @param int $repositoryId
     * @param string $selectedCashBooks
     * @param string $selectedUnits
     * @param string $tssId
     */
    public function __construct(?string $creationTimestamp = null, ?int $creationUser = null, ?string $description = null, ?int $exportId = null, ?int $printSequenceIdFrom = null, ?int $printSequenceIdTo = null, ?string $printingDateFrom = null, ?string $printingDateTo = null, ?int $repositoryId = null, ?string $selectedCashBooks = null, ?string $selectedUnits = null, ?string $tssId = null)
    {
        $this
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setDescription($description)
            ->setExportId($exportId)
            ->setPrintSequenceIdFrom($printSequenceIdFrom)
            ->setPrintSequenceIdTo($printSequenceIdTo)
            ->setPrintingDateFrom($printingDateFrom)
            ->setPrintingDateTo($printingDateTo)
            ->setRepositoryId($repositoryId)
            ->setSelectedCashBooks($selectedCashBooks)
            ->setSelectedUnits($selectedUnits)
            ->setTssId($tssId);
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get printSequenceIdFrom value
     * @return int|null
     */
    public function getPrintSequenceIdFrom(): ?int
    {
        return $this->printSequenceIdFrom;
    }
    /**
     * Set printSequenceIdFrom value
     * @param int $printSequenceIdFrom
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
     */
    public function setPrintSequenceIdFrom(?int $printSequenceIdFrom = null): self
    {
        // validation for constraint: int
        if (!is_null($printSequenceIdFrom) && !(is_int($printSequenceIdFrom) || ctype_digit($printSequenceIdFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printSequenceIdFrom, true), gettype($printSequenceIdFrom)), __LINE__);
        }
        $this->printSequenceIdFrom = $printSequenceIdFrom;
        
        return $this;
    }
    /**
     * Get printSequenceIdTo value
     * @return int|null
     */
    public function getPrintSequenceIdTo(): ?int
    {
        return $this->printSequenceIdTo;
    }
    /**
     * Set printSequenceIdTo value
     * @param int $printSequenceIdTo
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
     */
    public function setPrintSequenceIdTo(?int $printSequenceIdTo = null): self
    {
        // validation for constraint: int
        if (!is_null($printSequenceIdTo) && !(is_int($printSequenceIdTo) || ctype_digit($printSequenceIdTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printSequenceIdTo, true), gettype($printSequenceIdTo)), __LINE__);
        }
        $this->printSequenceIdTo = $printSequenceIdTo;
        
        return $this;
    }
    /**
     * Get printingDateFrom value
     * @return string|null
     */
    public function getPrintingDateFrom(): ?string
    {
        return $this->printingDateFrom;
    }
    /**
     * Set printingDateFrom value
     * @param string $printingDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
     */
    public function setPrintingDateFrom(?string $printingDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($printingDateFrom) && !is_string($printingDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printingDateFrom, true), gettype($printingDateFrom)), __LINE__);
        }
        $this->printingDateFrom = $printingDateFrom;
        
        return $this;
    }
    /**
     * Get printingDateTo value
     * @return string|null
     */
    public function getPrintingDateTo(): ?string
    {
        return $this->printingDateTo;
    }
    /**
     * Set printingDateTo value
     * @param string $printingDateTo
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
     */
    public function setPrintingDateTo(?string $printingDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($printingDateTo) && !is_string($printingDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printingDateTo, true), gettype($printingDateTo)), __LINE__);
        }
        $this->printingDateTo = $printingDateTo;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
    /**
     * Get selectedCashBooks value
     * @return string|null
     */
    public function getSelectedCashBooks(): ?string
    {
        return $this->selectedCashBooks;
    }
    /**
     * Set selectedCashBooks value
     * @param string $selectedCashBooks
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
     */
    public function setSelectedCashBooks(?string $selectedCashBooks = null): self
    {
        // validation for constraint: string
        if (!is_null($selectedCashBooks) && !is_string($selectedCashBooks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selectedCashBooks, true), gettype($selectedCashBooks)), __LINE__);
        }
        $this->selectedCashBooks = $selectedCashBooks;
        
        return $this;
    }
    /**
     * Get selectedUnits value
     * @return string|null
     */
    public function getSelectedUnits(): ?string
    {
        return $this->selectedUnits;
    }
    /**
     * Set selectedUnits value
     * @param string $selectedUnits
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
     */
    public function setSelectedUnits(?string $selectedUnits = null): self
    {
        // validation for constraint: string
        if (!is_null($selectedUnits) && !is_string($selectedUnits)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selectedUnits, true), gettype($selectedUnits)), __LINE__);
        }
        $this->selectedUnits = $selectedUnits;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordExportDTO
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
