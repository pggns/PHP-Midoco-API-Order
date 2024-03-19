<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportAutomaticSettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportAutomaticSettlementResponse extends AbstractStructBase
{
    /**
     * The exportData
     * @var string|null
     */
    protected ?string $exportData = null;
    /**
     * Constructor method for ExportAutomaticSettlementResponse
     * @uses ExportAutomaticSettlementResponse::setExportData()
     * @param string $exportData
     */
    public function __construct(?string $exportData = null)
    {
        $this
            ->setExportData($exportData);
    }
    /**
     * Get exportData value
     * @return string|null
     */
    public function getExportData(): ?string
    {
        return $this->exportData;
    }
    /**
     * Set exportData value
     * @param string $exportData
     * @return \Pggns\MidocoApi\Order\StructType\ExportAutomaticSettlementResponse
     */
    public function setExportData(?string $exportData = null): self
    {
        // validation for constraint: string
        if (!is_null($exportData) && !is_string($exportData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportData, true), gettype($exportData)), __LINE__);
        }
        $this->exportData = $exportData;
        
        return $this;
    }
}
