<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JasperReportDTO StructType
 * @subpackage Structs
 */
class JasperReportDTO extends AbstractStructBase
{
    /**
     * The datastoreType
     * @var string|null
     */
    protected ?string $datastoreType = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * Constructor method for JasperReportDTO
     * @uses JasperReportDTO::setDatastoreType()
     * @uses JasperReportDTO::setDescription()
     * @uses JasperReportDTO::setName()
     * @uses JasperReportDTO::setReportId()
     * @param string $datastoreType
     * @param string $description
     * @param string $name
     * @param int $reportId
     */
    public function __construct(?string $datastoreType = null, ?string $description = null, ?string $name = null, ?int $reportId = null)
    {
        $this
            ->setDatastoreType($datastoreType)
            ->setDescription($description)
            ->setName($name)
            ->setReportId($reportId);
    }
    /**
     * Get datastoreType value
     * @return string|null
     */
    public function getDatastoreType(): ?string
    {
        return $this->datastoreType;
    }
    /**
     * Set datastoreType value
     * @param string $datastoreType
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportDTO
     */
    public function setDatastoreType(?string $datastoreType = null): self
    {
        // validation for constraint: string
        if (!is_null($datastoreType) && !is_string($datastoreType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datastoreType, true), gettype($datastoreType)), __LINE__);
        }
        $this->datastoreType = $datastoreType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportDTO
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
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportDTO
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
