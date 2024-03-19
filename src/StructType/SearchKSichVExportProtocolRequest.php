<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchKSichVExportProtocolRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchKSichVExportProtocolRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The AccountingDateFrom
     * @var string|null
     */
    protected ?string $AccountingDateFrom = null;
    /**
     * The AccountingDateTo
     * @var string|null
     */
    protected ?string $AccountingDateTo = null;
    /**
     * Constructor method for SearchKSichVExportProtocolRequest
     * @uses SearchKSichVExportProtocolRequest::setUnitName()
     * @uses SearchKSichVExportProtocolRequest::setAccountingDateFrom()
     * @uses SearchKSichVExportProtocolRequest::setAccountingDateTo()
     * @param string $unitName
     * @param string $accountingDateFrom
     * @param string $accountingDateTo
     */
    public function __construct(?string $unitName = null, ?string $accountingDateFrom = null, ?string $accountingDateTo = null)
    {
        $this
            ->setUnitName($unitName)
            ->setAccountingDateFrom($accountingDateFrom)
            ->setAccountingDateTo($accountingDateTo);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchKSichVExportProtocolRequest
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
     * Get AccountingDateFrom value
     * @return string|null
     */
    public function getAccountingDateFrom(): ?string
    {
        return $this->AccountingDateFrom;
    }
    /**
     * Set AccountingDateFrom value
     * @param string $accountingDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchKSichVExportProtocolRequest
     */
    public function setAccountingDateFrom(?string $accountingDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($accountingDateFrom) && !is_string($accountingDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountingDateFrom, true), gettype($accountingDateFrom)), __LINE__);
        }
        $this->AccountingDateFrom = $accountingDateFrom;
        
        return $this;
    }
    /**
     * Get AccountingDateTo value
     * @return string|null
     */
    public function getAccountingDateTo(): ?string
    {
        return $this->AccountingDateTo;
    }
    /**
     * Set AccountingDateTo value
     * @param string $accountingDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchKSichVExportProtocolRequest
     */
    public function setAccountingDateTo(?string $accountingDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountingDateTo) && !is_string($accountingDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountingDateTo, true), gettype($accountingDateTo)), __LINE__);
        }
        $this->AccountingDateTo = $accountingDateTo;
        
        return $this;
    }
}
