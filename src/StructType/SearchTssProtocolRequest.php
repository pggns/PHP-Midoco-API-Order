<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTssProtocolRequest StructType
 * @subpackage Structs
 */
class SearchTssProtocolRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The exportId
     * @var string|null
     */
    protected ?string $exportId = null;
    /**
     * The tssId
     * Meta information extracted from the WSDL
     * - documentation: If the tssId is blank, the search includes all TSS.
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * The dateFrom
     * @var string|null
     */
    protected ?string $dateFrom = null;
    /**
     * The dateTo
     * @var string|null
     */
    protected ?string $dateTo = null;
    /**
     * Constructor method for SearchTssProtocolRequest
     * @uses SearchTssProtocolRequest::setUnitName()
     * @uses SearchTssProtocolRequest::setExportId()
     * @uses SearchTssProtocolRequest::setTssId()
     * @uses SearchTssProtocolRequest::setDateFrom()
     * @uses SearchTssProtocolRequest::setDateTo()
     * @param string $unitName
     * @param string $exportId
     * @param string $tssId
     * @param string $dateFrom
     * @param string $dateTo
     */
    public function __construct(?string $unitName = null, ?string $exportId = null, ?string $tssId = null, ?string $dateFrom = null, ?string $dateTo = null)
    {
        $this
            ->setUnitName($unitName)
            ->setExportId($exportId)
            ->setTssId($tssId)
            ->setDateFrom($dateFrom)
            ->setDateTo($dateTo);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SearchTssProtocolRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get exportId value
     * @return string|null
     */
    public function getExportId(): ?string
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param string $exportId
     * @return \Pggns\MidocoApi\Order\StructType\SearchTssProtocolRequest
     */
    public function setExportId(?string $exportId = null): self
    {
        // validation for constraint: string
        if (!is_null($exportId) && !is_string($exportId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get tssId value
     * @return string|null
     */
    public function getTssId(): ?string
    {
        return $this->tssId;
    }
    /**
     * Set tssId value
     * @param string $tssId
     * @return \Pggns\MidocoApi\Order\StructType\SearchTssProtocolRequest
     */
    public function setTssId(?string $tssId = null): self
    {
        // validation for constraint: string
        if (!is_null($tssId) && !is_string($tssId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssId, true), gettype($tssId)), __LINE__);
        }
        $this->tssId = $tssId;
        
        return $this;
    }
    /**
     * Get dateFrom value
     * @return string|null
     */
    public function getDateFrom(): ?string
    {
        return $this->dateFrom;
    }
    /**
     * Set dateFrom value
     * @param string $dateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchTssProtocolRequest
     */
    public function setDateFrom(?string $dateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFrom) && !is_string($dateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFrom, true), gettype($dateFrom)), __LINE__);
        }
        $this->dateFrom = $dateFrom;
        
        return $this;
    }
    /**
     * Get dateTo value
     * @return string|null
     */
    public function getDateTo(): ?string
    {
        return $this->dateTo;
    }
    /**
     * Set dateTo value
     * @param string $dateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchTssProtocolRequest
     */
    public function setDateTo(?string $dateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTo) && !is_string($dateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTo, true), gettype($dateTo)), __LINE__);
        }
        $this->dateTo = $dateTo;
        
        return $this;
    }
}
