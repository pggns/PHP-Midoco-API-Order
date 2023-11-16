<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankStatementDTO StructType
 * @subpackage Structs
 */
class BankStatementDTO extends AbstractStructBase
{
    /**
     * The fileFormat
     * @var string|null
     */
    protected ?string $fileFormat = null;
    /**
     * The files
     * @var string|null
     */
    protected ?string $files = null;
    /**
     * The readDate
     * @var string|null
     */
    protected ?string $readDate = null;
    /**
     * The readUser
     * @var int|null
     */
    protected ?int $readUser = null;
    /**
     * The statementId
     * @var int|null
     */
    protected ?int $statementId = null;
    /**
     * Constructor method for BankStatementDTO
     * @uses BankStatementDTO::setFileFormat()
     * @uses BankStatementDTO::setFiles()
     * @uses BankStatementDTO::setReadDate()
     * @uses BankStatementDTO::setReadUser()
     * @uses BankStatementDTO::setStatementId()
     * @param string $fileFormat
     * @param string $files
     * @param string $readDate
     * @param int $readUser
     * @param int $statementId
     */
    public function __construct(?string $fileFormat = null, ?string $files = null, ?string $readDate = null, ?int $readUser = null, ?int $statementId = null)
    {
        $this
            ->setFileFormat($fileFormat)
            ->setFiles($files)
            ->setReadDate($readDate)
            ->setReadUser($readUser)
            ->setStatementId($statementId);
    }
    /**
     * Get fileFormat value
     * @return string|null
     */
    public function getFileFormat(): ?string
    {
        return $this->fileFormat;
    }
    /**
     * Set fileFormat value
     * @param string $fileFormat
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementDTO
     */
    public function setFileFormat(?string $fileFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($fileFormat) && !is_string($fileFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileFormat, true), gettype($fileFormat)), __LINE__);
        }
        $this->fileFormat = $fileFormat;
        
        return $this;
    }
    /**
     * Get files value
     * @return string|null
     */
    public function getFiles(): ?string
    {
        return $this->files;
    }
    /**
     * Set files value
     * @param string $files
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementDTO
     */
    public function setFiles(?string $files = null): self
    {
        // validation for constraint: string
        if (!is_null($files) && !is_string($files)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($files, true), gettype($files)), __LINE__);
        }
        $this->files = $files;
        
        return $this;
    }
    /**
     * Get readDate value
     * @return string|null
     */
    public function getReadDate(): ?string
    {
        return $this->readDate;
    }
    /**
     * Set readDate value
     * @param string $readDate
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementDTO
     */
    public function setReadDate(?string $readDate = null): self
    {
        // validation for constraint: string
        if (!is_null($readDate) && !is_string($readDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($readDate, true), gettype($readDate)), __LINE__);
        }
        $this->readDate = $readDate;
        
        return $this;
    }
    /**
     * Get readUser value
     * @return int|null
     */
    public function getReadUser(): ?int
    {
        return $this->readUser;
    }
    /**
     * Set readUser value
     * @param int $readUser
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementDTO
     */
    public function setReadUser(?int $readUser = null): self
    {
        // validation for constraint: int
        if (!is_null($readUser) && !(is_int($readUser) || ctype_digit($readUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($readUser, true), gettype($readUser)), __LINE__);
        }
        $this->readUser = $readUser;
        
        return $this;
    }
    /**
     * Get statementId value
     * @return int|null
     */
    public function getStatementId(): ?int
    {
        return $this->statementId;
    }
    /**
     * Set statementId value
     * @param int $statementId
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementDTO
     */
    public function setStatementId(?int $statementId = null): self
    {
        // validation for constraint: int
        if (!is_null($statementId) && !(is_int($statementId) || ctype_digit($statementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statementId, true), gettype($statementId)), __LINE__);
        }
        $this->statementId = $statementId;
        
        return $this;
    }
}
