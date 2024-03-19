<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceFileFormatDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InvoiceFileFormatDTO extends AbstractStructBase
{
    /**
     * The columnSeparator
     * @var string|null
     */
    protected ?string $columnSeparator = null;
    /**
     * The dateFormat
     * @var string|null
     */
    protected ?string $dateFormat = null;
    /**
     * The decimalSeparator
     * @var string|null
     */
    protected ?string $decimalSeparator = null;
    /**
     * The fileFormat
     * @var string|null
     */
    protected ?string $fileFormat = null;
    /**
     * The formatDescription
     * @var string|null
     */
    protected ?string $formatDescription = null;
    /**
     * The formatId
     * @var string|null
     */
    protected ?string $formatId = null;
    /**
     * The isProvideTotalValue
     * @var bool|null
     */
    protected ?bool $isProvideTotalValue = null;
    /**
     * The isTextInQuotes
     * @var bool|null
     */
    protected ?bool $isTextInQuotes = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * Constructor method for InvoiceFileFormatDTO
     * @uses InvoiceFileFormatDTO::setColumnSeparator()
     * @uses InvoiceFileFormatDTO::setDateFormat()
     * @uses InvoiceFileFormatDTO::setDecimalSeparator()
     * @uses InvoiceFileFormatDTO::setFileFormat()
     * @uses InvoiceFileFormatDTO::setFormatDescription()
     * @uses InvoiceFileFormatDTO::setFormatId()
     * @uses InvoiceFileFormatDTO::setIsProvideTotalValue()
     * @uses InvoiceFileFormatDTO::setIsTextInQuotes()
     * @uses InvoiceFileFormatDTO::setModifyDate()
     * @uses InvoiceFileFormatDTO::setModifyUser()
     * @param string $columnSeparator
     * @param string $dateFormat
     * @param string $decimalSeparator
     * @param string $fileFormat
     * @param string $formatDescription
     * @param string $formatId
     * @param bool $isProvideTotalValue
     * @param bool $isTextInQuotes
     * @param string $modifyDate
     * @param int $modifyUser
     */
    public function __construct(?string $columnSeparator = null, ?string $dateFormat = null, ?string $decimalSeparator = null, ?string $fileFormat = null, ?string $formatDescription = null, ?string $formatId = null, ?bool $isProvideTotalValue = null, ?bool $isTextInQuotes = null, ?string $modifyDate = null, ?int $modifyUser = null)
    {
        $this
            ->setColumnSeparator($columnSeparator)
            ->setDateFormat($dateFormat)
            ->setDecimalSeparator($decimalSeparator)
            ->setFileFormat($fileFormat)
            ->setFormatDescription($formatDescription)
            ->setFormatId($formatId)
            ->setIsProvideTotalValue($isProvideTotalValue)
            ->setIsTextInQuotes($isTextInQuotes)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser);
    }
    /**
     * Get columnSeparator value
     * @return string|null
     */
    public function getColumnSeparator(): ?string
    {
        return $this->columnSeparator;
    }
    /**
     * Set columnSeparator value
     * @param string $columnSeparator
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatDTO
     */
    public function setColumnSeparator(?string $columnSeparator = null): self
    {
        // validation for constraint: string
        if (!is_null($columnSeparator) && !is_string($columnSeparator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($columnSeparator, true), gettype($columnSeparator)), __LINE__);
        }
        $this->columnSeparator = $columnSeparator;
        
        return $this;
    }
    /**
     * Get dateFormat value
     * @return string|null
     */
    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }
    /**
     * Set dateFormat value
     * @param string $dateFormat
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatDTO
     */
    public function setDateFormat(?string $dateFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFormat, true), gettype($dateFormat)), __LINE__);
        }
        $this->dateFormat = $dateFormat;
        
        return $this;
    }
    /**
     * Get decimalSeparator value
     * @return string|null
     */
    public function getDecimalSeparator(): ?string
    {
        return $this->decimalSeparator;
    }
    /**
     * Set decimalSeparator value
     * @param string $decimalSeparator
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatDTO
     */
    public function setDecimalSeparator(?string $decimalSeparator = null): self
    {
        // validation for constraint: string
        if (!is_null($decimalSeparator) && !is_string($decimalSeparator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decimalSeparator, true), gettype($decimalSeparator)), __LINE__);
        }
        $this->decimalSeparator = $decimalSeparator;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatDTO
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
     * Get formatDescription value
     * @return string|null
     */
    public function getFormatDescription(): ?string
    {
        return $this->formatDescription;
    }
    /**
     * Set formatDescription value
     * @param string $formatDescription
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatDTO
     */
    public function setFormatDescription(?string $formatDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($formatDescription) && !is_string($formatDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatDescription, true), gettype($formatDescription)), __LINE__);
        }
        $this->formatDescription = $formatDescription;
        
        return $this;
    }
    /**
     * Get formatId value
     * @return string|null
     */
    public function getFormatId(): ?string
    {
        return $this->formatId;
    }
    /**
     * Set formatId value
     * @param string $formatId
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatDTO
     */
    public function setFormatId(?string $formatId = null): self
    {
        // validation for constraint: string
        if (!is_null($formatId) && !is_string($formatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatId, true), gettype($formatId)), __LINE__);
        }
        $this->formatId = $formatId;
        
        return $this;
    }
    /**
     * Get isProvideTotalValue value
     * @return bool|null
     */
    public function getIsProvideTotalValue(): ?bool
    {
        return $this->isProvideTotalValue;
    }
    /**
     * Set isProvideTotalValue value
     * @param bool $isProvideTotalValue
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatDTO
     */
    public function setIsProvideTotalValue(?bool $isProvideTotalValue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProvideTotalValue) && !is_bool($isProvideTotalValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProvideTotalValue, true), gettype($isProvideTotalValue)), __LINE__);
        }
        $this->isProvideTotalValue = $isProvideTotalValue;
        
        return $this;
    }
    /**
     * Get isTextInQuotes value
     * @return bool|null
     */
    public function getIsTextInQuotes(): ?bool
    {
        return $this->isTextInQuotes;
    }
    /**
     * Set isTextInQuotes value
     * @param bool $isTextInQuotes
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatDTO
     */
    public function setIsTextInQuotes(?bool $isTextInQuotes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTextInQuotes) && !is_bool($isTextInQuotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTextInQuotes, true), gettype($isTextInQuotes)), __LINE__);
        }
        $this->isTextInQuotes = $isTextInQuotes;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
}
