<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteBackofficeExportRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: attributes: unitName = name for the unit name to trigger the BackOfficeExportJob exportDirectory = the location to export the files format = the backOffice formats to trigger the specific Jobs (comma separated) exmaple : BM,Ibiza
 * startDate = the travel start date to get the datas to export from the database (default:yesterday) endDate =
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteBackofficeExportRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The exportDirectory
     * @var string|null
     */
    protected ?string $exportDirectory = null;
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{2}.[0-9]{2}.[0-9]{4}
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{2}.[0-9]{2}.[0-9]{4}
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * Constructor method for ExecuteBackofficeExportRequest
     * @uses ExecuteBackofficeExportRequest::setUnitName()
     * @uses ExecuteBackofficeExportRequest::setExportDirectory()
     * @uses ExecuteBackofficeExportRequest::setFormat()
     * @uses ExecuteBackofficeExportRequest::setStartDate()
     * @uses ExecuteBackofficeExportRequest::setEndDate()
     * @param string $unitName
     * @param string $exportDirectory
     * @param string $format
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(?string $unitName = null, ?string $exportDirectory = null, ?string $format = null, ?string $startDate = null, ?string $endDate = null)
    {
        $this
            ->setUnitName($unitName)
            ->setExportDirectory($exportDirectory)
            ->setFormat($format)
            ->setStartDate($startDate)
            ->setEndDate($endDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteBackofficeExportRequest
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
     * Get exportDirectory value
     * @return string|null
     */
    public function getExportDirectory(): ?string
    {
        return $this->exportDirectory;
    }
    /**
     * Set exportDirectory value
     * @param string $exportDirectory
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteBackofficeExportRequest
     */
    public function setExportDirectory(?string $exportDirectory = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDirectory) && !is_string($exportDirectory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDirectory, true), gettype($exportDirectory)), __LINE__);
        }
        $this->exportDirectory = $exportDirectory;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteBackofficeExportRequest
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
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteBackofficeExportRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}.[0-9]{2}.[0-9]{4})
        if (!is_null($startDate) && !preg_match('/[0-9]{2}.[0-9]{2}.[0-9]{4}/', (string) $startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}.[0-9]{2}.[0-9]{4}/', var_export($startDate, true)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteBackofficeExportRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}.[0-9]{2}.[0-9]{4})
        if (!is_null($endDate) && !preg_match('/[0-9]{2}.[0-9]{2}.[0-9]{4}/', (string) $endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}.[0-9]{2}.[0-9]{4}/', var_export($endDate, true)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
}
