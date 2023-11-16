<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenericCsvImportMetadataDTO StructType
 * @subpackage Structs
 */
class GenericCsvImportMetadataDTO extends AbstractStructBase
{
    /**
     * The dateFormat
     * @var string|null
     */
    protected ?string $dateFormat = null;
    /**
     * The decimalDelimiter
     * @var string|null
     */
    protected ?string $decimalDelimiter = null;
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The textDelimiter
     * @var string|null
     */
    protected ?string $textDelimiter = null;
    /**
     * The textInQuotes
     * @var bool|null
     */
    protected ?bool $textInQuotes = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for GenericCsvImportMetadataDTO
     * @uses GenericCsvImportMetadataDTO::setDateFormat()
     * @uses GenericCsvImportMetadataDTO::setDecimalDelimiter()
     * @uses GenericCsvImportMetadataDTO::setFormat()
     * @uses GenericCsvImportMetadataDTO::setId()
     * @uses GenericCsvImportMetadataDTO::setTextDelimiter()
     * @uses GenericCsvImportMetadataDTO::setTextInQuotes()
     * @uses GenericCsvImportMetadataDTO::setUnitName()
     * @param string $dateFormat
     * @param string $decimalDelimiter
     * @param string $format
     * @param int $id
     * @param string $textDelimiter
     * @param bool $textInQuotes
     * @param string $unitName
     */
    public function __construct(?string $dateFormat = null, ?string $decimalDelimiter = null, ?string $format = null, ?int $id = null, ?string $textDelimiter = null, ?bool $textInQuotes = null, ?string $unitName = null)
    {
        $this
            ->setDateFormat($dateFormat)
            ->setDecimalDelimiter($decimalDelimiter)
            ->setFormat($format)
            ->setId($id)
            ->setTextDelimiter($textDelimiter)
            ->setTextInQuotes($textInQuotes)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO
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
     * Get decimalDelimiter value
     * @return string|null
     */
    public function getDecimalDelimiter(): ?string
    {
        return $this->decimalDelimiter;
    }
    /**
     * Set decimalDelimiter value
     * @param string $decimalDelimiter
     * @return \Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO
     */
    public function setDecimalDelimiter(?string $decimalDelimiter = null): self
    {
        // validation for constraint: string
        if (!is_null($decimalDelimiter) && !is_string($decimalDelimiter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decimalDelimiter, true), gettype($decimalDelimiter)), __LINE__);
        }
        $this->decimalDelimiter = $decimalDelimiter;
        
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get textDelimiter value
     * @return string|null
     */
    public function getTextDelimiter(): ?string
    {
        return $this->textDelimiter;
    }
    /**
     * Set textDelimiter value
     * @param string $textDelimiter
     * @return \Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO
     */
    public function setTextDelimiter(?string $textDelimiter = null): self
    {
        // validation for constraint: string
        if (!is_null($textDelimiter) && !is_string($textDelimiter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textDelimiter, true), gettype($textDelimiter)), __LINE__);
        }
        $this->textDelimiter = $textDelimiter;
        
        return $this;
    }
    /**
     * Get textInQuotes value
     * @return bool|null
     */
    public function getTextInQuotes(): ?bool
    {
        return $this->textInQuotes;
    }
    /**
     * Set textInQuotes value
     * @param bool $textInQuotes
     * @return \Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO
     */
    public function setTextInQuotes(?bool $textInQuotes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($textInQuotes) && !is_bool($textInQuotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($textInQuotes, true), gettype($textInQuotes)), __LINE__);
        }
        $this->textInQuotes = $textInQuotes;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO
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
}
