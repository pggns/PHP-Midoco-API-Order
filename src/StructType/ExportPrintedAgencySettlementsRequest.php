<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportPrintedAgencySettlementsRequest StructType
 * @subpackage Structs
 */
class ExportPrintedAgencySettlementsRequest extends AbstractStructBase
{
    /**
     * The exportType
     * @var string|null
     */
    protected ?string $exportType = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The creationDateStart
     * @var string|null
     */
    protected ?string $creationDateStart = null;
    /**
     * The creationDateEnd
     * @var string|null
     */
    protected ?string $creationDateEnd = null;
    /**
     * The doMail
     * @var bool|null
     */
    protected ?bool $doMail = null;
    /**
     * Constructor method for ExportPrintedAgencySettlementsRequest
     * @uses ExportPrintedAgencySettlementsRequest::setExportType()
     * @uses ExportPrintedAgencySettlementsRequest::setAgencyId()
     * @uses ExportPrintedAgencySettlementsRequest::setCreationDateStart()
     * @uses ExportPrintedAgencySettlementsRequest::setCreationDateEnd()
     * @uses ExportPrintedAgencySettlementsRequest::setDoMail()
     * @param string $exportType
     * @param string $agencyId
     * @param string $creationDateStart
     * @param string $creationDateEnd
     * @param bool $doMail
     */
    public function __construct(?string $exportType = null, ?string $agencyId = null, ?string $creationDateStart = null, ?string $creationDateEnd = null, ?bool $doMail = null)
    {
        $this
            ->setExportType($exportType)
            ->setAgencyId($agencyId)
            ->setCreationDateStart($creationDateStart)
            ->setCreationDateEnd($creationDateEnd)
            ->setDoMail($doMail);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportPrintedAgencySettlementsRequest
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
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\ExportPrintedAgencySettlementsRequest
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get creationDateStart value
     * @return string|null
     */
    public function getCreationDateStart(): ?string
    {
        return $this->creationDateStart;
    }
    /**
     * Set creationDateStart value
     * @param string $creationDateStart
     * @return \Pggns\MidocoApi\Order\StructType\ExportPrintedAgencySettlementsRequest
     */
    public function setCreationDateStart(?string $creationDateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateStart) && !is_string($creationDateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateStart, true), gettype($creationDateStart)), __LINE__);
        }
        $this->creationDateStart = $creationDateStart;
        
        return $this;
    }
    /**
     * Get creationDateEnd value
     * @return string|null
     */
    public function getCreationDateEnd(): ?string
    {
        return $this->creationDateEnd;
    }
    /**
     * Set creationDateEnd value
     * @param string $creationDateEnd
     * @return \Pggns\MidocoApi\Order\StructType\ExportPrintedAgencySettlementsRequest
     */
    public function setCreationDateEnd(?string $creationDateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateEnd) && !is_string($creationDateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateEnd, true), gettype($creationDateEnd)), __LINE__);
        }
        $this->creationDateEnd = $creationDateEnd;
        
        return $this;
    }
    /**
     * Get doMail value
     * @return bool|null
     */
    public function getDoMail(): ?bool
    {
        return $this->doMail;
    }
    /**
     * Set doMail value
     * @param bool $doMail
     * @return \Pggns\MidocoApi\Order\StructType\ExportPrintedAgencySettlementsRequest
     */
    public function setDoMail(?bool $doMail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($doMail) && !is_bool($doMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doMail, true), gettype($doMail)), __LINE__);
        }
        $this->doMail = $doMail;
        
        return $this;
    }
}
