<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceFileFormatContentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InvoiceFileFormatContentDTO extends AbstractStructBase
{
    /**
     * The alternativeHeaderName
     * @var string|null
     */
    protected ?string $alternativeHeaderName = null;
    /**
     * The columnName
     * @var string|null
     */
    protected ?string $columnName = null;
    /**
     * The formatId
     * @var string|null
     */
    protected ?string $formatId = null;
    /**
     * The positionNoExport
     * @var int|null
     */
    protected ?int $positionNoExport = null;
    /**
     * Constructor method for InvoiceFileFormatContentDTO
     * @uses InvoiceFileFormatContentDTO::setAlternativeHeaderName()
     * @uses InvoiceFileFormatContentDTO::setColumnName()
     * @uses InvoiceFileFormatContentDTO::setFormatId()
     * @uses InvoiceFileFormatContentDTO::setPositionNoExport()
     * @param string $alternativeHeaderName
     * @param string $columnName
     * @param string $formatId
     * @param int $positionNoExport
     */
    public function __construct(?string $alternativeHeaderName = null, ?string $columnName = null, ?string $formatId = null, ?int $positionNoExport = null)
    {
        $this
            ->setAlternativeHeaderName($alternativeHeaderName)
            ->setColumnName($columnName)
            ->setFormatId($formatId)
            ->setPositionNoExport($positionNoExport);
    }
    /**
     * Get alternativeHeaderName value
     * @return string|null
     */
    public function getAlternativeHeaderName(): ?string
    {
        return $this->alternativeHeaderName;
    }
    /**
     * Set alternativeHeaderName value
     * @param string $alternativeHeaderName
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatContentDTO
     */
    public function setAlternativeHeaderName(?string $alternativeHeaderName = null): self
    {
        // validation for constraint: string
        if (!is_null($alternativeHeaderName) && !is_string($alternativeHeaderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alternativeHeaderName, true), gettype($alternativeHeaderName)), __LINE__);
        }
        $this->alternativeHeaderName = $alternativeHeaderName;
        
        return $this;
    }
    /**
     * Get columnName value
     * @return string|null
     */
    public function getColumnName(): ?string
    {
        return $this->columnName;
    }
    /**
     * Set columnName value
     * @param string $columnName
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatContentDTO
     */
    public function setColumnName(?string $columnName = null): self
    {
        // validation for constraint: string
        if (!is_null($columnName) && !is_string($columnName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($columnName, true), gettype($columnName)), __LINE__);
        }
        $this->columnName = $columnName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatContentDTO
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
     * Get positionNoExport value
     * @return int|null
     */
    public function getPositionNoExport(): ?int
    {
        return $this->positionNoExport;
    }
    /**
     * Set positionNoExport value
     * @param int $positionNoExport
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceFileFormatContentDTO
     */
    public function setPositionNoExport(?int $positionNoExport = null): self
    {
        // validation for constraint: int
        if (!is_null($positionNoExport) && !(is_int($positionNoExport) || ctype_digit($positionNoExport))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionNoExport, true), gettype($positionNoExport)), __LINE__);
        }
        $this->positionNoExport = $positionNoExport;
        
        return $this;
    }
}
