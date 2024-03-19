<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportAgencySettlementDataResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportAgencySettlementDataResponse extends AbstractStructBase
{
    /**
     * The CSVData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CSVData = null;
    /**
     * Constructor method for ExportAgencySettlementDataResponse
     * @uses ExportAgencySettlementDataResponse::setCSVData()
     * @param string $cSVData
     */
    public function __construct(?string $cSVData = null)
    {
        $this
            ->setCSVData($cSVData);
    }
    /**
     * Get CSVData value
     * @return string|null
     */
    public function getCSVData(): ?string
    {
        return $this->CSVData;
    }
    /**
     * Set CSVData value
     * @param string $cSVData
     * @return \Pggns\MidocoApi\Order\StructType\ExportAgencySettlementDataResponse
     */
    public function setCSVData(?string $cSVData = null): self
    {
        // validation for constraint: string
        if (!is_null($cSVData) && !is_string($cSVData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cSVData, true), gettype($cSVData)), __LINE__);
        }
        $this->CSVData = $cSVData;
        
        return $this;
    }
}
