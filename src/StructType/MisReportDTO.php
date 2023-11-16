<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisReportDTO StructType
 * @subpackage Structs
 */
class MisReportDTO extends AbstractStructBase
{
    /**
     * The cubeId
     * @var int|null
     */
    protected ?int $cubeId = null;
    /**
     * The definition
     * @var string|null
     */
    protected ?string $definition = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * The reportName
     * @var string|null
     */
    protected ?string $reportName = null;
    /**
     * The visibility
     * @var int|null
     */
    protected ?int $visibility = null;
    /**
     * Constructor method for MisReportDTO
     * @uses MisReportDTO::setCubeId()
     * @uses MisReportDTO::setDefinition()
     * @uses MisReportDTO::setDescription()
     * @uses MisReportDTO::setOrgUnit()
     * @uses MisReportDTO::setReportId()
     * @uses MisReportDTO::setReportName()
     * @uses MisReportDTO::setVisibility()
     * @param int $cubeId
     * @param string $definition
     * @param string $description
     * @param string $orgUnit
     * @param int $reportId
     * @param string $reportName
     * @param int $visibility
     */
    public function __construct(?int $cubeId = null, ?string $definition = null, ?string $description = null, ?string $orgUnit = null, ?int $reportId = null, ?string $reportName = null, ?int $visibility = null)
    {
        $this
            ->setCubeId($cubeId)
            ->setDefinition($definition)
            ->setDescription($description)
            ->setOrgUnit($orgUnit)
            ->setReportId($reportId)
            ->setReportName($reportName)
            ->setVisibility($visibility);
    }
    /**
     * Get cubeId value
     * @return int|null
     */
    public function getCubeId(): ?int
    {
        return $this->cubeId;
    }
    /**
     * Set cubeId value
     * @param int $cubeId
     * @return \Pggns\MidocoApi\Order\StructType\MisReportDTO
     */
    public function setCubeId(?int $cubeId = null): self
    {
        // validation for constraint: int
        if (!is_null($cubeId) && !(is_int($cubeId) || ctype_digit($cubeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cubeId, true), gettype($cubeId)), __LINE__);
        }
        $this->cubeId = $cubeId;
        
        return $this;
    }
    /**
     * Get definition value
     * @return string|null
     */
    public function getDefinition(): ?string
    {
        return $this->definition;
    }
    /**
     * Set definition value
     * @param string $definition
     * @return \Pggns\MidocoApi\Order\StructType\MisReportDTO
     */
    public function setDefinition(?string $definition = null): self
    {
        // validation for constraint: string
        if (!is_null($definition) && !is_string($definition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($definition, true), gettype($definition)), __LINE__);
        }
        $this->definition = $definition;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MisReportDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\MisReportDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MisReportDTO
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
     * Get reportName value
     * @return string|null
     */
    public function getReportName(): ?string
    {
        return $this->reportName;
    }
    /**
     * Set reportName value
     * @param string $reportName
     * @return \Pggns\MidocoApi\Order\StructType\MisReportDTO
     */
    public function setReportName(?string $reportName = null): self
    {
        // validation for constraint: string
        if (!is_null($reportName) && !is_string($reportName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportName, true), gettype($reportName)), __LINE__);
        }
        $this->reportName = $reportName;
        
        return $this;
    }
    /**
     * Get visibility value
     * @return int|null
     */
    public function getVisibility(): ?int
    {
        return $this->visibility;
    }
    /**
     * Set visibility value
     * @param int $visibility
     * @return \Pggns\MidocoApi\Order\StructType\MisReportDTO
     */
    public function setVisibility(?int $visibility = null): self
    {
        // validation for constraint: int
        if (!is_null($visibility) && !(is_int($visibility) || ctype_digit($visibility))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($visibility, true), gettype($visibility)), __LINE__);
        }
        $this->visibility = $visibility;
        
        return $this;
    }
}
