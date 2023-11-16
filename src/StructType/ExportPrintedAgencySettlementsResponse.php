<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportPrintedAgencySettlementsResponse StructType
 * @subpackage Structs
 */
class ExportPrintedAgencySettlementsResponse extends AbstractStructBase
{
    /**
     * The exportedRows
     * @var int|null
     */
    protected ?int $exportedRows = null;
    /**
     * Constructor method for ExportPrintedAgencySettlementsResponse
     * @uses ExportPrintedAgencySettlementsResponse::setExportedRows()
     * @param int $exportedRows
     */
    public function __construct(?int $exportedRows = null)
    {
        $this
            ->setExportedRows($exportedRows);
    }
    /**
     * Get exportedRows value
     * @return int|null
     */
    public function getExportedRows(): ?int
    {
        return $this->exportedRows;
    }
    /**
     * Set exportedRows value
     * @param int $exportedRows
     * @return \Pggns\MidocoApi\Order\StructType\ExportPrintedAgencySettlementsResponse
     */
    public function setExportedRows(?int $exportedRows = null): self
    {
        // validation for constraint: int
        if (!is_null($exportedRows) && !(is_int($exportedRows) || ctype_digit($exportedRows))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportedRows, true), gettype($exportedRows)), __LINE__);
        }
        $this->exportedRows = $exportedRows;
        
        return $this;
    }
}
