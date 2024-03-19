<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JasperReportParameterDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JasperReportParameterDTO extends AbstractStructBase
{
    /**
     * The isHidden
     * @var bool|null
     */
    protected ?bool $isHidden = null;
    /**
     * The multipleValues
     * @var bool|null
     */
    protected ?bool $multipleValues = null;
    /**
     * The paramId
     * @var int|null
     */
    protected ?int $paramId = null;
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * Constructor method for JasperReportParameterDTO
     * @uses JasperReportParameterDTO::setIsHidden()
     * @uses JasperReportParameterDTO::setMultipleValues()
     * @uses JasperReportParameterDTO::setParamId()
     * @uses JasperReportParameterDTO::setReportId()
     * @param bool $isHidden
     * @param bool $multipleValues
     * @param int $paramId
     * @param int $reportId
     */
    public function __construct(?bool $isHidden = null, ?bool $multipleValues = null, ?int $paramId = null, ?int $reportId = null)
    {
        $this
            ->setIsHidden($isHidden)
            ->setMultipleValues($multipleValues)
            ->setParamId($paramId)
            ->setReportId($reportId);
    }
    /**
     * Get isHidden value
     * @return bool|null
     */
    public function getIsHidden(): ?bool
    {
        return $this->isHidden;
    }
    /**
     * Set isHidden value
     * @param bool $isHidden
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportParameterDTO
     */
    public function setIsHidden(?bool $isHidden = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isHidden) && !is_bool($isHidden)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isHidden, true), gettype($isHidden)), __LINE__);
        }
        $this->isHidden = $isHidden;
        
        return $this;
    }
    /**
     * Get multipleValues value
     * @return bool|null
     */
    public function getMultipleValues(): ?bool
    {
        return $this->multipleValues;
    }
    /**
     * Set multipleValues value
     * @param bool $multipleValues
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportParameterDTO
     */
    public function setMultipleValues(?bool $multipleValues = null): self
    {
        // validation for constraint: boolean
        if (!is_null($multipleValues) && !is_bool($multipleValues)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($multipleValues, true), gettype($multipleValues)), __LINE__);
        }
        $this->multipleValues = $multipleValues;
        
        return $this;
    }
    /**
     * Get paramId value
     * @return int|null
     */
    public function getParamId(): ?int
    {
        return $this->paramId;
    }
    /**
     * Set paramId value
     * @param int $paramId
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportParameterDTO
     */
    public function setParamId(?int $paramId = null): self
    {
        // validation for constraint: int
        if (!is_null($paramId) && !(is_int($paramId) || ctype_digit($paramId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paramId, true), gettype($paramId)), __LINE__);
        }
        $this->paramId = $paramId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportParameterDTO
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
