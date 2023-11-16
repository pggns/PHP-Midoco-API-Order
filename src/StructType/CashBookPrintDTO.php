<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBookPrintDTO StructType
 * @subpackage Structs
 */
class CashBookPrintDTO extends AbstractStructBase
{
    /**
     * The carryOver
     * @var float|null
     */
    protected ?float $carryOver = null;
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The documentExportDate
     * @var string|null
     */
    protected ?string $documentExportDate = null;
    /**
     * The endPage
     * @var int|null
     */
    protected ?int $endPage = null;
    /**
     * The finishTimestamp
     * @var string|null
     */
    protected ?string $finishTimestamp = null;
    /**
     * The forUser
     * @var int|null
     */
    protected ?int $forUser = null;
    /**
     * The foreignCarryOver
     * @var float|null
     */
    protected ?float $foreignCarryOver = null;
    /**
     * The foreignPrintBalance
     * @var float|null
     */
    protected ?float $foreignPrintBalance = null;
    /**
     * The isDocumentExported
     * @var bool|null
     */
    protected ?bool $isDocumentExported = null;
    /**
     * The isFinished
     * @var bool|null
     */
    protected ?bool $isFinished = null;
    /**
     * The midocoVersion
     * @var string|null
     */
    protected ?string $midocoVersion = null;
    /**
     * The printId
     * @var int|null
     */
    protected ?int $printId = null;
    /**
     * The printSequenceid
     * @var int|null
     */
    protected ?int $printSequenceid = null;
    /**
     * The printingBalance
     * @var float|null
     */
    protected ?float $printingBalance = null;
    /**
     * The printingDate
     * @var string|null
     */
    protected ?string $printingDate = null;
    /**
     * The printingUser
     * @var int|null
     */
    protected ?int $printingUser = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The startPage
     * @var int|null
     */
    protected ?int $startPage = null;
    /**
     * Constructor method for CashBookPrintDTO
     * @uses CashBookPrintDTO::setCarryOver()
     * @uses CashBookPrintDTO::setCashBookId()
     * @uses CashBookPrintDTO::setDocumentExportDate()
     * @uses CashBookPrintDTO::setEndPage()
     * @uses CashBookPrintDTO::setFinishTimestamp()
     * @uses CashBookPrintDTO::setForUser()
     * @uses CashBookPrintDTO::setForeignCarryOver()
     * @uses CashBookPrintDTO::setForeignPrintBalance()
     * @uses CashBookPrintDTO::setIsDocumentExported()
     * @uses CashBookPrintDTO::setIsFinished()
     * @uses CashBookPrintDTO::setMidocoVersion()
     * @uses CashBookPrintDTO::setPrintId()
     * @uses CashBookPrintDTO::setPrintSequenceid()
     * @uses CashBookPrintDTO::setPrintingBalance()
     * @uses CashBookPrintDTO::setPrintingDate()
     * @uses CashBookPrintDTO::setPrintingUser()
     * @uses CashBookPrintDTO::setRepositoryId()
     * @uses CashBookPrintDTO::setStartPage()
     * @param float $carryOver
     * @param int $cashBookId
     * @param string $documentExportDate
     * @param int $endPage
     * @param string $finishTimestamp
     * @param int $forUser
     * @param float $foreignCarryOver
     * @param float $foreignPrintBalance
     * @param bool $isDocumentExported
     * @param bool $isFinished
     * @param string $midocoVersion
     * @param int $printId
     * @param int $printSequenceid
     * @param float $printingBalance
     * @param string $printingDate
     * @param int $printingUser
     * @param int $repositoryId
     * @param int $startPage
     */
    public function __construct(?float $carryOver = null, ?int $cashBookId = null, ?string $documentExportDate = null, ?int $endPage = null, ?string $finishTimestamp = null, ?int $forUser = null, ?float $foreignCarryOver = null, ?float $foreignPrintBalance = null, ?bool $isDocumentExported = null, ?bool $isFinished = null, ?string $midocoVersion = null, ?int $printId = null, ?int $printSequenceid = null, ?float $printingBalance = null, ?string $printingDate = null, ?int $printingUser = null, ?int $repositoryId = null, ?int $startPage = null)
    {
        $this
            ->setCarryOver($carryOver)
            ->setCashBookId($cashBookId)
            ->setDocumentExportDate($documentExportDate)
            ->setEndPage($endPage)
            ->setFinishTimestamp($finishTimestamp)
            ->setForUser($forUser)
            ->setForeignCarryOver($foreignCarryOver)
            ->setForeignPrintBalance($foreignPrintBalance)
            ->setIsDocumentExported($isDocumentExported)
            ->setIsFinished($isFinished)
            ->setMidocoVersion($midocoVersion)
            ->setPrintId($printId)
            ->setPrintSequenceid($printSequenceid)
            ->setPrintingBalance($printingBalance)
            ->setPrintingDate($printingDate)
            ->setPrintingUser($printingUser)
            ->setRepositoryId($repositoryId)
            ->setStartPage($startPage);
    }
    /**
     * Get carryOver value
     * @return float|null
     */
    public function getCarryOver(): ?float
    {
        return $this->carryOver;
    }
    /**
     * Set carryOver value
     * @param float $carryOver
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setCarryOver(?float $carryOver = null): self
    {
        // validation for constraint: float
        if (!is_null($carryOver) && !(is_float($carryOver) || is_numeric($carryOver))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($carryOver, true), gettype($carryOver)), __LINE__);
        }
        $this->carryOver = $carryOver;
        
        return $this;
    }
    /**
     * Get cashBookId value
     * @return int|null
     */
    public function getCashBookId(): ?int
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param int $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setCashBookId(?int $cashBookId = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookId) && !(is_int($cashBookId) || ctype_digit($cashBookId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Get documentExportDate value
     * @return string|null
     */
    public function getDocumentExportDate(): ?string
    {
        return $this->documentExportDate;
    }
    /**
     * Set documentExportDate value
     * @param string $documentExportDate
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setDocumentExportDate(?string $documentExportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($documentExportDate) && !is_string($documentExportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentExportDate, true), gettype($documentExportDate)), __LINE__);
        }
        $this->documentExportDate = $documentExportDate;
        
        return $this;
    }
    /**
     * Get endPage value
     * @return int|null
     */
    public function getEndPage(): ?int
    {
        return $this->endPage;
    }
    /**
     * Set endPage value
     * @param int $endPage
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setEndPage(?int $endPage = null): self
    {
        // validation for constraint: int
        if (!is_null($endPage) && !(is_int($endPage) || ctype_digit($endPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endPage, true), gettype($endPage)), __LINE__);
        }
        $this->endPage = $endPage;
        
        return $this;
    }
    /**
     * Get finishTimestamp value
     * @return string|null
     */
    public function getFinishTimestamp(): ?string
    {
        return $this->finishTimestamp;
    }
    /**
     * Set finishTimestamp value
     * @param string $finishTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setFinishTimestamp(?string $finishTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($finishTimestamp) && !is_string($finishTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finishTimestamp, true), gettype($finishTimestamp)), __LINE__);
        }
        $this->finishTimestamp = $finishTimestamp;
        
        return $this;
    }
    /**
     * Get forUser value
     * @return int|null
     */
    public function getForUser(): ?int
    {
        return $this->forUser;
    }
    /**
     * Set forUser value
     * @param int $forUser
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setForUser(?int $forUser = null): self
    {
        // validation for constraint: int
        if (!is_null($forUser) && !(is_int($forUser) || ctype_digit($forUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($forUser, true), gettype($forUser)), __LINE__);
        }
        $this->forUser = $forUser;
        
        return $this;
    }
    /**
     * Get foreignCarryOver value
     * @return float|null
     */
    public function getForeignCarryOver(): ?float
    {
        return $this->foreignCarryOver;
    }
    /**
     * Set foreignCarryOver value
     * @param float $foreignCarryOver
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setForeignCarryOver(?float $foreignCarryOver = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignCarryOver) && !(is_float($foreignCarryOver) || is_numeric($foreignCarryOver))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignCarryOver, true), gettype($foreignCarryOver)), __LINE__);
        }
        $this->foreignCarryOver = $foreignCarryOver;
        
        return $this;
    }
    /**
     * Get foreignPrintBalance value
     * @return float|null
     */
    public function getForeignPrintBalance(): ?float
    {
        return $this->foreignPrintBalance;
    }
    /**
     * Set foreignPrintBalance value
     * @param float $foreignPrintBalance
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setForeignPrintBalance(?float $foreignPrintBalance = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignPrintBalance) && !(is_float($foreignPrintBalance) || is_numeric($foreignPrintBalance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignPrintBalance, true), gettype($foreignPrintBalance)), __LINE__);
        }
        $this->foreignPrintBalance = $foreignPrintBalance;
        
        return $this;
    }
    /**
     * Get isDocumentExported value
     * @return bool|null
     */
    public function getIsDocumentExported(): ?bool
    {
        return $this->isDocumentExported;
    }
    /**
     * Set isDocumentExported value
     * @param bool $isDocumentExported
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setIsDocumentExported(?bool $isDocumentExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDocumentExported) && !is_bool($isDocumentExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDocumentExported, true), gettype($isDocumentExported)), __LINE__);
        }
        $this->isDocumentExported = $isDocumentExported;
        
        return $this;
    }
    /**
     * Get isFinished value
     * @return bool|null
     */
    public function getIsFinished(): ?bool
    {
        return $this->isFinished;
    }
    /**
     * Set isFinished value
     * @param bool $isFinished
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setIsFinished(?bool $isFinished = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFinished) && !is_bool($isFinished)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFinished, true), gettype($isFinished)), __LINE__);
        }
        $this->isFinished = $isFinished;
        
        return $this;
    }
    /**
     * Get midocoVersion value
     * @return string|null
     */
    public function getMidocoVersion(): ?string
    {
        return $this->midocoVersion;
    }
    /**
     * Set midocoVersion value
     * @param string $midocoVersion
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setMidocoVersion(?string $midocoVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoVersion) && !is_string($midocoVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoVersion, true), gettype($midocoVersion)), __LINE__);
        }
        $this->midocoVersion = $midocoVersion;
        
        return $this;
    }
    /**
     * Get printId value
     * @return int|null
     */
    public function getPrintId(): ?int
    {
        return $this->printId;
    }
    /**
     * Set printId value
     * @param int $printId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setPrintId(?int $printId = null): self
    {
        // validation for constraint: int
        if (!is_null($printId) && !(is_int($printId) || ctype_digit($printId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printId, true), gettype($printId)), __LINE__);
        }
        $this->printId = $printId;
        
        return $this;
    }
    /**
     * Get printSequenceid value
     * @return int|null
     */
    public function getPrintSequenceid(): ?int
    {
        return $this->printSequenceid;
    }
    /**
     * Set printSequenceid value
     * @param int $printSequenceid
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setPrintSequenceid(?int $printSequenceid = null): self
    {
        // validation for constraint: int
        if (!is_null($printSequenceid) && !(is_int($printSequenceid) || ctype_digit($printSequenceid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printSequenceid, true), gettype($printSequenceid)), __LINE__);
        }
        $this->printSequenceid = $printSequenceid;
        
        return $this;
    }
    /**
     * Get printingBalance value
     * @return float|null
     */
    public function getPrintingBalance(): ?float
    {
        return $this->printingBalance;
    }
    /**
     * Set printingBalance value
     * @param float $printingBalance
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setPrintingBalance(?float $printingBalance = null): self
    {
        // validation for constraint: float
        if (!is_null($printingBalance) && !(is_float($printingBalance) || is_numeric($printingBalance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($printingBalance, true), gettype($printingBalance)), __LINE__);
        }
        $this->printingBalance = $printingBalance;
        
        return $this;
    }
    /**
     * Get printingDate value
     * @return string|null
     */
    public function getPrintingDate(): ?string
    {
        return $this->printingDate;
    }
    /**
     * Set printingDate value
     * @param string $printingDate
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setPrintingDate(?string $printingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($printingDate) && !is_string($printingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printingDate, true), gettype($printingDate)), __LINE__);
        }
        $this->printingDate = $printingDate;
        
        return $this;
    }
    /**
     * Get printingUser value
     * @return int|null
     */
    public function getPrintingUser(): ?int
    {
        return $this->printingUser;
    }
    /**
     * Set printingUser value
     * @param int $printingUser
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setPrintingUser(?int $printingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($printingUser) && !(is_int($printingUser) || ctype_digit($printingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printingUser, true), gettype($printingUser)), __LINE__);
        }
        $this->printingUser = $printingUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
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
     * Get startPage value
     * @return int|null
     */
    public function getStartPage(): ?int
    {
        return $this->startPage;
    }
    /**
     * Set startPage value
     * @param int $startPage
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintDTO
     */
    public function setStartPage(?int $startPage = null): self
    {
        // validation for constraint: int
        if (!is_null($startPage) && !(is_int($startPage) || ctype_digit($startPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startPage, true), gettype($startPage)), __LINE__);
        }
        $this->startPage = $startPage;
        
        return $this;
    }
}
