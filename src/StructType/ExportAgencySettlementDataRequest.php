<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportAgencySettlementDataRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: exportAgencySettlementData -- exports the agencyno, booking id, supplier ID for the sellitems from the orders with mediator id.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportAgencySettlementDataRequest extends AbstractStructBase
{
    /**
     * The date
     * Meta information extracted from the WSDL
     * - base: xs:dateTime
     * - pattern: dd.MM.yyyy
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The tourOperator
     * @var string|null
     */
    protected ?string $tourOperator = null;
    /**
     * The exportSubOrgUnits
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $exportSubOrgUnits = null;
    /**
     * The noOfMonths
     * Meta information extracted from the WSDL
     * - default: 3
     * @var int|null
     */
    protected ?int $noOfMonths = null;
    /**
     * Constructor method for ExportAgencySettlementDataRequest
     * @uses ExportAgencySettlementDataRequest::setDate()
     * @uses ExportAgencySettlementDataRequest::setTourOperator()
     * @uses ExportAgencySettlementDataRequest::setExportSubOrgUnits()
     * @uses ExportAgencySettlementDataRequest::setNoOfMonths()
     * @param string $date
     * @param string $tourOperator
     * @param bool $exportSubOrgUnits
     * @param int $noOfMonths
     */
    public function __construct(?string $date = null, ?string $tourOperator = null, ?bool $exportSubOrgUnits = false, ?int $noOfMonths = 3)
    {
        $this
            ->setDate($date)
            ->setTourOperator($tourOperator)
            ->setExportSubOrgUnits($exportSubOrgUnits)
            ->setNoOfMonths($noOfMonths);
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Pggns\MidocoApi\Order\StructType\ExportAgencySettlementDataRequest
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        // validation for constraint: pattern(dd.MM.yyyy)
        if (!is_null($date) && !preg_match('/dd.MM.yyyy/', (string) $date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /dd.MM.yyyy/', var_export($date, true)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get tourOperator value
     * @return string|null
     */
    public function getTourOperator(): ?string
    {
        return $this->tourOperator;
    }
    /**
     * Set tourOperator value
     * @param string $tourOperator
     * @return \Pggns\MidocoApi\Order\StructType\ExportAgencySettlementDataRequest
     */
    public function setTourOperator(?string $tourOperator = null): self
    {
        // validation for constraint: string
        if (!is_null($tourOperator) && !is_string($tourOperator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourOperator, true), gettype($tourOperator)), __LINE__);
        }
        $this->tourOperator = $tourOperator;
        
        return $this;
    }
    /**
     * Get exportSubOrgUnits value
     * @return bool|null
     */
    public function getExportSubOrgUnits(): ?bool
    {
        return $this->exportSubOrgUnits;
    }
    /**
     * Set exportSubOrgUnits value
     * @param bool $exportSubOrgUnits
     * @return \Pggns\MidocoApi\Order\StructType\ExportAgencySettlementDataRequest
     */
    public function setExportSubOrgUnits(?bool $exportSubOrgUnits = false): self
    {
        // validation for constraint: boolean
        if (!is_null($exportSubOrgUnits) && !is_bool($exportSubOrgUnits)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportSubOrgUnits, true), gettype($exportSubOrgUnits)), __LINE__);
        }
        $this->exportSubOrgUnits = $exportSubOrgUnits;
        
        return $this;
    }
    /**
     * Get noOfMonths value
     * @return int|null
     */
    public function getNoOfMonths(): ?int
    {
        return $this->noOfMonths;
    }
    /**
     * Set noOfMonths value
     * @param int $noOfMonths
     * @return \Pggns\MidocoApi\Order\StructType\ExportAgencySettlementDataRequest
     */
    public function setNoOfMonths(?int $noOfMonths = 3): self
    {
        // validation for constraint: int
        if (!is_null($noOfMonths) && !(is_int($noOfMonths) || ctype_digit($noOfMonths))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfMonths, true), gettype($noOfMonths)), __LINE__);
        }
        $this->noOfMonths = $noOfMonths;
        
        return $this;
    }
}
