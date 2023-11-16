<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportDimensionDTO StructType
 * @subpackage Structs
 */
class ReportDimensionDTO extends AbstractStructBase
{
    /**
     * The dimensionName
     * @var string|null
     */
    protected ?string $dimensionName = null;
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * Constructor method for ReportDimensionDTO
     * @uses ReportDimensionDTO::setDimensionName()
     * @uses ReportDimensionDTO::setReportId()
     * @param string $dimensionName
     * @param int $reportId
     */
    public function __construct(?string $dimensionName = null, ?int $reportId = null)
    {
        $this
            ->setDimensionName($dimensionName)
            ->setReportId($reportId);
    }
    /**
     * Get dimensionName value
     * @return string|null
     */
    public function getDimensionName(): ?string
    {
        return $this->dimensionName;
    }
    /**
     * Set dimensionName value
     * @param string $dimensionName
     * @return \Pggns\MidocoApi\Order\StructType\ReportDimensionDTO
     */
    public function setDimensionName(?string $dimensionName = null): self
    {
        // validation for constraint: string
        if (!is_null($dimensionName) && !is_string($dimensionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dimensionName, true), gettype($dimensionName)), __LINE__);
        }
        $this->dimensionName = $dimensionName;
        
        return $this;
    }
    /**
     * Get reportId value
     * @return int|null
     */
    public function getReportId(): ?int
    {
        return $this->reportId;
    }
    /**
     * Set reportId value
     * @param int $reportId
     * @return \Pggns\MidocoApi\Order\StructType\ReportDimensionDTO
     */
    public function setReportId(?int $reportId = null): self
    {
        // validation for constraint: int
        if (!is_null($reportId) && !(is_int($reportId) || ctype_digit($reportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reportId, true), gettype($reportId)), __LINE__);
        }
        $this->reportId = $reportId;
        
        return $this;
    }
}
