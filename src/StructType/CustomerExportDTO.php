<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerExportDTO StructType
 * @subpackage Structs
 */
class CustomerExportDTO extends AbstractStructBase
{
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The exportTimestamp
     * @var string|null
     */
    protected ?string $exportTimestamp = null;
    /**
     * The exportType
     * @var string|null
     */
    protected ?string $exportType = null;
    /**
     * Constructor method for CustomerExportDTO
     * @uses CustomerExportDTO::setExportId()
     * @uses CustomerExportDTO::setExportTimestamp()
     * @uses CustomerExportDTO::setExportType()
     * @param int $exportId
     * @param string $exportTimestamp
     * @param string $exportType
     */
    public function __construct(?int $exportId = null, ?string $exportTimestamp = null, ?string $exportType = null)
    {
        $this
            ->setExportId($exportId)
            ->setExportTimestamp($exportTimestamp)
            ->setExportType($exportType);
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerExportDTO
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
     * Get exportTimestamp value
     * @return string|null
     */
    public function getExportTimestamp(): ?string
    {
        return $this->exportTimestamp;
    }
    /**
     * Set exportTimestamp value
     * @param string $exportTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\CustomerExportDTO
     */
    public function setExportTimestamp(?string $exportTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTimestamp) && !is_string($exportTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTimestamp, true), gettype($exportTimestamp)), __LINE__);
        }
        $this->exportTimestamp = $exportTimestamp;
        
        return $this;
    }
    /**
     * Get exportType value
     * @return string|null
     */
    public function getExportType(): ?string
    {
        return $this->exportType;
    }
    /**
     * Set exportType value
     * @param string $exportType
     * @return \Pggns\MidocoApi\Order\StructType\CustomerExportDTO
     */
    public function setExportType(?string $exportType = null): self
    {
        // validation for constraint: string
        if (!is_null($exportType) && !is_string($exportType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportType, true), gettype($exportType)), __LINE__);
        }
        $this->exportType = $exportType;
        
        return $this;
    }
}
