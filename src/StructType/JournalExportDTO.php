<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalExportDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JournalExportDTO extends AbstractStructBase
{
    /**
     * The checksum
     * @var int|null
     */
    protected ?int $checksum = null;
    /**
     * The comments
     * @var string|null
     */
    protected ?string $comments = null;
    /**
     * The exportDate
     * @var string|null
     */
    protected ?string $exportDate = null;
    /**
     * The exportFuture
     * @var bool|null
     */
    protected ?bool $exportFuture = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The exportUser
     * @var int|null
     */
    protected ?int $exportUser = null;
    /**
     * The numberOfRows
     * @var int|null
     */
    protected ?int $numberOfRows = null;
    /**
     * The perDate
     * @var string|null
     */
    protected ?string $perDate = null;
    /**
     * The perPeriod
     * @var int|null
     */
    protected ?int $perPeriod = null;
    /**
     * The perYear
     * @var int|null
     */
    protected ?int $perYear = null;
    /**
     * The periodOnly
     * @var bool|null
     */
    protected ?bool $periodOnly = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The selectAccount
     * @var string|null
     */
    protected ?string $selectAccount = null;
    /**
     * The selectAccountType
     * @var string|null
     */
    protected ?string $selectAccountType = null;
    /**
     * Constructor method for JournalExportDTO
     * @uses JournalExportDTO::setChecksum()
     * @uses JournalExportDTO::setComments()
     * @uses JournalExportDTO::setExportDate()
     * @uses JournalExportDTO::setExportFuture()
     * @uses JournalExportDTO::setExportId()
     * @uses JournalExportDTO::setExportUser()
     * @uses JournalExportDTO::setNumberOfRows()
     * @uses JournalExportDTO::setPerDate()
     * @uses JournalExportDTO::setPerPeriod()
     * @uses JournalExportDTO::setPerYear()
     * @uses JournalExportDTO::setPeriodOnly()
     * @uses JournalExportDTO::setRepositoryId()
     * @uses JournalExportDTO::setSelectAccount()
     * @uses JournalExportDTO::setSelectAccountType()
     * @param int $checksum
     * @param string $comments
     * @param string $exportDate
     * @param bool $exportFuture
     * @param int $exportId
     * @param int $exportUser
     * @param int $numberOfRows
     * @param string $perDate
     * @param int $perPeriod
     * @param int $perYear
     * @param bool $periodOnly
     * @param int $repositoryId
     * @param string $selectAccount
     * @param string $selectAccountType
     */
    public function __construct(?int $checksum = null, ?string $comments = null, ?string $exportDate = null, ?bool $exportFuture = null, ?int $exportId = null, ?int $exportUser = null, ?int $numberOfRows = null, ?string $perDate = null, ?int $perPeriod = null, ?int $perYear = null, ?bool $periodOnly = null, ?int $repositoryId = null, ?string $selectAccount = null, ?string $selectAccountType = null)
    {
        $this
            ->setChecksum($checksum)
            ->setComments($comments)
            ->setExportDate($exportDate)
            ->setExportFuture($exportFuture)
            ->setExportId($exportId)
            ->setExportUser($exportUser)
            ->setNumberOfRows($numberOfRows)
            ->setPerDate($perDate)
            ->setPerPeriod($perPeriod)
            ->setPerYear($perYear)
            ->setPeriodOnly($periodOnly)
            ->setRepositoryId($repositoryId)
            ->setSelectAccount($selectAccount)
            ->setSelectAccountType($selectAccountType);
    }
    /**
     * Get checksum value
     * @return int|null
     */
    public function getChecksum(): ?int
    {
        return $this->checksum;
    }
    /**
     * Set checksum value
     * @param int $checksum
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
     */
    public function setChecksum(?int $checksum = null): self
    {
        // validation for constraint: int
        if (!is_null($checksum) && !(is_int($checksum) || ctype_digit($checksum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($checksum, true), gettype($checksum)), __LINE__);
        }
        $this->checksum = $checksum;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
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
     * Get exportDate value
     * @return string|null
     */
    public function getExportDate(): ?string
    {
        return $this->exportDate;
    }
    /**
     * Set exportDate value
     * @param string $exportDate
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
     */
    public function setExportDate(?string $exportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDate) && !is_string($exportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDate, true), gettype($exportDate)), __LINE__);
        }
        $this->exportDate = $exportDate;
        
        return $this;
    }
    /**
     * Get exportFuture value
     * @return bool|null
     */
    public function getExportFuture(): ?bool
    {
        return $this->exportFuture;
    }
    /**
     * Set exportFuture value
     * @param bool $exportFuture
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
     */
    public function setExportFuture(?bool $exportFuture = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportFuture) && !is_bool($exportFuture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportFuture, true), gettype($exportFuture)), __LINE__);
        }
        $this->exportFuture = $exportFuture;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
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
     * Get exportUser value
     * @return int|null
     */
    public function getExportUser(): ?int
    {
        return $this->exportUser;
    }
    /**
     * Set exportUser value
     * @param int $exportUser
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
     */
    public function setExportUser(?int $exportUser = null): self
    {
        // validation for constraint: int
        if (!is_null($exportUser) && !(is_int($exportUser) || ctype_digit($exportUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportUser, true), gettype($exportUser)), __LINE__);
        }
        $this->exportUser = $exportUser;
        
        return $this;
    }
    /**
     * Get numberOfRows value
     * @return int|null
     */
    public function getNumberOfRows(): ?int
    {
        return $this->numberOfRows;
    }
    /**
     * Set numberOfRows value
     * @param int $numberOfRows
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
     */
    public function setNumberOfRows(?int $numberOfRows = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfRows) && !(is_int($numberOfRows) || ctype_digit($numberOfRows))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRows, true), gettype($numberOfRows)), __LINE__);
        }
        $this->numberOfRows = $numberOfRows;
        
        return $this;
    }
    /**
     * Get perDate value
     * @return string|null
     */
    public function getPerDate(): ?string
    {
        return $this->perDate;
    }
    /**
     * Set perDate value
     * @param string $perDate
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
     */
    public function setPerDate(?string $perDate = null): self
    {
        // validation for constraint: string
        if (!is_null($perDate) && !is_string($perDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($perDate, true), gettype($perDate)), __LINE__);
        }
        $this->perDate = $perDate;
        
        return $this;
    }
    /**
     * Get perPeriod value
     * @return int|null
     */
    public function getPerPeriod(): ?int
    {
        return $this->perPeriod;
    }
    /**
     * Set perPeriod value
     * @param int $perPeriod
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
     */
    public function setPerPeriod(?int $perPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($perPeriod) && !(is_int($perPeriod) || ctype_digit($perPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($perPeriod, true), gettype($perPeriod)), __LINE__);
        }
        $this->perPeriod = $perPeriod;
        
        return $this;
    }
    /**
     * Get perYear value
     * @return int|null
     */
    public function getPerYear(): ?int
    {
        return $this->perYear;
    }
    /**
     * Set perYear value
     * @param int $perYear
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
     */
    public function setPerYear(?int $perYear = null): self
    {
        // validation for constraint: int
        if (!is_null($perYear) && !(is_int($perYear) || ctype_digit($perYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($perYear, true), gettype($perYear)), __LINE__);
        }
        $this->perYear = $perYear;
        
        return $this;
    }
    /**
     * Get periodOnly value
     * @return bool|null
     */
    public function getPeriodOnly(): ?bool
    {
        return $this->periodOnly;
    }
    /**
     * Set periodOnly value
     * @param bool $periodOnly
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
     */
    public function setPeriodOnly(?bool $periodOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($periodOnly) && !is_bool($periodOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($periodOnly, true), gettype($periodOnly)), __LINE__);
        }
        $this->periodOnly = $periodOnly;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
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
     * Get selectAccount value
     * @return string|null
     */
    public function getSelectAccount(): ?string
    {
        return $this->selectAccount;
    }
    /**
     * Set selectAccount value
     * @param string $selectAccount
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
     */
    public function setSelectAccount(?string $selectAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($selectAccount) && !is_string($selectAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selectAccount, true), gettype($selectAccount)), __LINE__);
        }
        $this->selectAccount = $selectAccount;
        
        return $this;
    }
    /**
     * Get selectAccountType value
     * @return string|null
     */
    public function getSelectAccountType(): ?string
    {
        return $this->selectAccountType;
    }
    /**
     * Set selectAccountType value
     * @param string $selectAccountType
     * @return \Pggns\MidocoApi\Order\StructType\JournalExportDTO
     */
    public function setSelectAccountType(?string $selectAccountType = null): self
    {
        // validation for constraint: string
        if (!is_null($selectAccountType) && !is_string($selectAccountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selectAccountType, true), gettype($selectAccountType)), __LINE__);
        }
        $this->selectAccountType = $selectAccountType;
        
        return $this;
    }
}
