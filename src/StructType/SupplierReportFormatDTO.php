<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierReportFormatDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierReportFormatDTO extends AbstractStructBase
{
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The showOnReport
     * @var bool|null
     */
    protected ?bool $showOnReport = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for SupplierReportFormatDTO
     * @uses SupplierReportFormatDTO::setFormat()
     * @uses SupplierReportFormatDTO::setShowOnReport()
     * @uses SupplierReportFormatDTO::setSupplierId()
     * @param string $format
     * @param bool $showOnReport
     * @param string $supplierId
     */
    public function __construct(?string $format = null, ?bool $showOnReport = null, ?string $supplierId = null)
    {
        $this
            ->setFormat($format)
            ->setShowOnReport($showOnReport)
            ->setSupplierId($supplierId);
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierReportFormatDTO
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
     * Get showOnReport value
     * @return bool|null
     */
    public function getShowOnReport(): ?bool
    {
        return $this->showOnReport;
    }
    /**
     * Set showOnReport value
     * @param bool $showOnReport
     * @return \Pggns\MidocoApi\Order\StructType\SupplierReportFormatDTO
     */
    public function setShowOnReport(?bool $showOnReport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showOnReport) && !is_bool($showOnReport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showOnReport, true), gettype($showOnReport)), __LINE__);
        }
        $this->showOnReport = $showOnReport;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierReportFormatDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
}
