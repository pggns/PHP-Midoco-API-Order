<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatistikAtDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class StatistikAtDTO extends AbstractStructBase
{
    /**
     * The fileIndex
     * @var int|null
     */
    protected ?int $fileIndex = null;
    /**
     * The importDate
     * @var string|null
     */
    protected ?string $importDate = null;
    /**
     * The importId
     * @var int|null
     */
    protected ?int $importId = null;
    /**
     * The importIndex
     * @var int|null
     */
    protected ?int $importIndex = null;
    /**
     * Constructor method for StatistikAtDTO
     * @uses StatistikAtDTO::setFileIndex()
     * @uses StatistikAtDTO::setImportDate()
     * @uses StatistikAtDTO::setImportId()
     * @uses StatistikAtDTO::setImportIndex()
     * @param int $fileIndex
     * @param string $importDate
     * @param int $importId
     * @param int $importIndex
     */
    public function __construct(?int $fileIndex = null, ?string $importDate = null, ?int $importId = null, ?int $importIndex = null)
    {
        $this
            ->setFileIndex($fileIndex)
            ->setImportDate($importDate)
            ->setImportId($importId)
            ->setImportIndex($importIndex);
    }
    /**
     * Get fileIndex value
     * @return int|null
     */
    public function getFileIndex(): ?int
    {
        return $this->fileIndex;
    }
    /**
     * Set fileIndex value
     * @param int $fileIndex
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDTO
     */
    public function setFileIndex(?int $fileIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($fileIndex) && !(is_int($fileIndex) || ctype_digit($fileIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileIndex, true), gettype($fileIndex)), __LINE__);
        }
        $this->fileIndex = $fileIndex;
        
        return $this;
    }
    /**
     * Get importDate value
     * @return string|null
     */
    public function getImportDate(): ?string
    {
        return $this->importDate;
    }
    /**
     * Set importDate value
     * @param string $importDate
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDTO
     */
    public function setImportDate(?string $importDate = null): self
    {
        // validation for constraint: string
        if (!is_null($importDate) && !is_string($importDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importDate, true), gettype($importDate)), __LINE__);
        }
        $this->importDate = $importDate;
        
        return $this;
    }
    /**
     * Get importId value
     * @return int|null
     */
    public function getImportId(): ?int
    {
        return $this->importId;
    }
    /**
     * Set importId value
     * @param int $importId
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDTO
     */
    public function setImportId(?int $importId = null): self
    {
        // validation for constraint: int
        if (!is_null($importId) && !(is_int($importId) || ctype_digit($importId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importId, true), gettype($importId)), __LINE__);
        }
        $this->importId = $importId;
        
        return $this;
    }
    /**
     * Get importIndex value
     * @return int|null
     */
    public function getImportIndex(): ?int
    {
        return $this->importIndex;
    }
    /**
     * Set importIndex value
     * @param int $importIndex
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDTO
     */
    public function setImportIndex(?int $importIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($importIndex) && !(is_int($importIndex) || ctype_digit($importIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importIndex, true), gettype($importIndex)), __LINE__);
        }
        $this->importIndex = $importIndex;
        
        return $this;
    }
}
