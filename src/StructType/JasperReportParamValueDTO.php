<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JasperReportParamValueDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JasperReportParamValueDTO extends AbstractStructBase
{
    /**
     * The defaultValue
     * @var string|null
     */
    protected ?string $defaultValue = null;
    /**
     * The isIncluded
     * @var bool|null
     */
    protected ?bool $isIncluded = null;
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
     * The valueId
     * @var int|null
     */
    protected ?int $valueId = null;
    /**
     * The versionId
     * @var int|null
     */
    protected ?int $versionId = null;
    /**
     * Constructor method for JasperReportParamValueDTO
     * @uses JasperReportParamValueDTO::setDefaultValue()
     * @uses JasperReportParamValueDTO::setIsIncluded()
     * @uses JasperReportParamValueDTO::setParamId()
     * @uses JasperReportParamValueDTO::setReportId()
     * @uses JasperReportParamValueDTO::setValueId()
     * @uses JasperReportParamValueDTO::setVersionId()
     * @param string $defaultValue
     * @param bool $isIncluded
     * @param int $paramId
     * @param int $reportId
     * @param int $valueId
     * @param int $versionId
     */
    public function __construct(?string $defaultValue = null, ?bool $isIncluded = null, ?int $paramId = null, ?int $reportId = null, ?int $valueId = null, ?int $versionId = null)
    {
        $this
            ->setDefaultValue($defaultValue)
            ->setIsIncluded($isIncluded)
            ->setParamId($paramId)
            ->setReportId($reportId)
            ->setValueId($valueId)
            ->setVersionId($versionId);
    }
    /**
     * Get defaultValue value
     * @return string|null
     */
    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }
    /**
     * Set defaultValue value
     * @param string $defaultValue
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO
     */
    public function setDefaultValue(?string $defaultValue = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        $this->defaultValue = $defaultValue;
        
        return $this;
    }
    /**
     * Get isIncluded value
     * @return bool|null
     */
    public function getIsIncluded(): ?bool
    {
        return $this->isIncluded;
    }
    /**
     * Set isIncluded value
     * @param bool $isIncluded
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO
     */
    public function setIsIncluded(?bool $isIncluded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isIncluded) && !is_bool($isIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isIncluded, true), gettype($isIncluded)), __LINE__);
        }
        $this->isIncluded = $isIncluded;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO
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
    /**
     * Get valueId value
     * @return int|null
     */
    public function getValueId(): ?int
    {
        return $this->valueId;
    }
    /**
     * Set valueId value
     * @param int $valueId
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO
     */
    public function setValueId(?int $valueId = null): self
    {
        // validation for constraint: int
        if (!is_null($valueId) && !(is_int($valueId) || ctype_digit($valueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($valueId, true), gettype($valueId)), __LINE__);
        }
        $this->valueId = $valueId;
        
        return $this;
    }
    /**
     * Get versionId value
     * @return int|null
     */
    public function getVersionId(): ?int
    {
        return $this->versionId;
    }
    /**
     * Set versionId value
     * @param int $versionId
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO
     */
    public function setVersionId(?int $versionId = null): self
    {
        // validation for constraint: int
        if (!is_null($versionId) && !(is_int($versionId) || ctype_digit($versionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionId, true), gettype($versionId)), __LINE__);
        }
        $this->versionId = $versionId;
        
        return $this;
    }
}
