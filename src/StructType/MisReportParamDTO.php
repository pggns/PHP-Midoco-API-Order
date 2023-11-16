<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisReportParamDTO StructType
 * @subpackage Structs
 */
class MisReportParamDTO extends AbstractStructBase
{
    /**
     * The allowMultiple
     * @var bool|null
     */
    protected ?bool $allowMultiple = null;
    /**
     * The defaultValue
     * @var string|null
     */
    protected ?string $defaultValue = null;
    /**
     * The granularity
     * @var int|null
     */
    protected ?int $granularity = null;
    /**
     * The isVisible
     * @var bool|null
     */
    protected ?bool $isVisible = null;
    /**
     * The mondrianType
     * @var string|null
     */
    protected ?string $mondrianType = null;
    /**
     * The paramDescription
     * @var string|null
     */
    protected ?string $paramDescription = null;
    /**
     * The paramName
     * @var string|null
     */
    protected ?string $paramName = null;
    /**
     * The paramType
     * @var string|null
     */
    protected ?string $paramType = null;
    /**
     * The parameterId
     * @var int|null
     */
    protected ?int $parameterId = null;
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * Constructor method for MisReportParamDTO
     * @uses MisReportParamDTO::setAllowMultiple()
     * @uses MisReportParamDTO::setDefaultValue()
     * @uses MisReportParamDTO::setGranularity()
     * @uses MisReportParamDTO::setIsVisible()
     * @uses MisReportParamDTO::setMondrianType()
     * @uses MisReportParamDTO::setParamDescription()
     * @uses MisReportParamDTO::setParamName()
     * @uses MisReportParamDTO::setParamType()
     * @uses MisReportParamDTO::setParameterId()
     * @uses MisReportParamDTO::setReportId()
     * @param bool $allowMultiple
     * @param string $defaultValue
     * @param int $granularity
     * @param bool $isVisible
     * @param string $mondrianType
     * @param string $paramDescription
     * @param string $paramName
     * @param string $paramType
     * @param int $parameterId
     * @param int $reportId
     */
    public function __construct(?bool $allowMultiple = null, ?string $defaultValue = null, ?int $granularity = null, ?bool $isVisible = null, ?string $mondrianType = null, ?string $paramDescription = null, ?string $paramName = null, ?string $paramType = null, ?int $parameterId = null, ?int $reportId = null)
    {
        $this
            ->setAllowMultiple($allowMultiple)
            ->setDefaultValue($defaultValue)
            ->setGranularity($granularity)
            ->setIsVisible($isVisible)
            ->setMondrianType($mondrianType)
            ->setParamDescription($paramDescription)
            ->setParamName($paramName)
            ->setParamType($paramType)
            ->setParameterId($parameterId)
            ->setReportId($reportId);
    }
    /**
     * Get allowMultiple value
     * @return bool|null
     */
    public function getAllowMultiple(): ?bool
    {
        return $this->allowMultiple;
    }
    /**
     * Set allowMultiple value
     * @param bool $allowMultiple
     * @return \Pggns\MidocoApi\Order\StructType\MisReportParamDTO
     */
    public function setAllowMultiple(?bool $allowMultiple = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowMultiple) && !is_bool($allowMultiple)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowMultiple, true), gettype($allowMultiple)), __LINE__);
        }
        $this->allowMultiple = $allowMultiple;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MisReportParamDTO
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
     * Get granularity value
     * @return int|null
     */
    public function getGranularity(): ?int
    {
        return $this->granularity;
    }
    /**
     * Set granularity value
     * @param int $granularity
     * @return \Pggns\MidocoApi\Order\StructType\MisReportParamDTO
     */
    public function setGranularity(?int $granularity = null): self
    {
        // validation for constraint: int
        if (!is_null($granularity) && !(is_int($granularity) || ctype_digit($granularity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($granularity, true), gettype($granularity)), __LINE__);
        }
        $this->granularity = $granularity;
        
        return $this;
    }
    /**
     * Get isVisible value
     * @return bool|null
     */
    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }
    /**
     * Set isVisible value
     * @param bool $isVisible
     * @return \Pggns\MidocoApi\Order\StructType\MisReportParamDTO
     */
    public function setIsVisible(?bool $isVisible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVisible) && !is_bool($isVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVisible, true), gettype($isVisible)), __LINE__);
        }
        $this->isVisible = $isVisible;
        
        return $this;
    }
    /**
     * Get mondrianType value
     * @return string|null
     */
    public function getMondrianType(): ?string
    {
        return $this->mondrianType;
    }
    /**
     * Set mondrianType value
     * @param string $mondrianType
     * @return \Pggns\MidocoApi\Order\StructType\MisReportParamDTO
     */
    public function setMondrianType(?string $mondrianType = null): self
    {
        // validation for constraint: string
        if (!is_null($mondrianType) && !is_string($mondrianType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mondrianType, true), gettype($mondrianType)), __LINE__);
        }
        $this->mondrianType = $mondrianType;
        
        return $this;
    }
    /**
     * Get paramDescription value
     * @return string|null
     */
    public function getParamDescription(): ?string
    {
        return $this->paramDescription;
    }
    /**
     * Set paramDescription value
     * @param string $paramDescription
     * @return \Pggns\MidocoApi\Order\StructType\MisReportParamDTO
     */
    public function setParamDescription(?string $paramDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($paramDescription) && !is_string($paramDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paramDescription, true), gettype($paramDescription)), __LINE__);
        }
        $this->paramDescription = $paramDescription;
        
        return $this;
    }
    /**
     * Get paramName value
     * @return string|null
     */
    public function getParamName(): ?string
    {
        return $this->paramName;
    }
    /**
     * Set paramName value
     * @param string $paramName
     * @return \Pggns\MidocoApi\Order\StructType\MisReportParamDTO
     */
    public function setParamName(?string $paramName = null): self
    {
        // validation for constraint: string
        if (!is_null($paramName) && !is_string($paramName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paramName, true), gettype($paramName)), __LINE__);
        }
        $this->paramName = $paramName;
        
        return $this;
    }
    /**
     * Get paramType value
     * @return string|null
     */
    public function getParamType(): ?string
    {
        return $this->paramType;
    }
    /**
     * Set paramType value
     * @param string $paramType
     * @return \Pggns\MidocoApi\Order\StructType\MisReportParamDTO
     */
    public function setParamType(?string $paramType = null): self
    {
        // validation for constraint: string
        if (!is_null($paramType) && !is_string($paramType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paramType, true), gettype($paramType)), __LINE__);
        }
        $this->paramType = $paramType;
        
        return $this;
    }
    /**
     * Get parameterId value
     * @return int|null
     */
    public function getParameterId(): ?int
    {
        return $this->parameterId;
    }
    /**
     * Set parameterId value
     * @param int $parameterId
     * @return \Pggns\MidocoApi\Order\StructType\MisReportParamDTO
     */
    public function setParameterId(?int $parameterId = null): self
    {
        // validation for constraint: int
        if (!is_null($parameterId) && !(is_int($parameterId) || ctype_digit($parameterId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parameterId, true), gettype($parameterId)), __LINE__);
        }
        $this->parameterId = $parameterId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MisReportParamDTO
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
