<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportAutomaticSettlementRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportAutomaticSettlementRequest extends AbstractStructBase
{
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The exportAs
     * Meta information extracted from the WSDL
     * - default: CSV
     * @var string|null
     */
    protected ?string $exportAs = null;
    /**
     * Constructor method for ExportAutomaticSettlementRequest
     * @uses ExportAutomaticSettlementRequest::setSettlementId()
     * @uses ExportAutomaticSettlementRequest::setExportAs()
     * @param int $settlementId
     * @param string $exportAs
     */
    public function __construct(?int $settlementId = null, ?string $exportAs = 'CSV')
    {
        $this
            ->setSettlementId($settlementId)
            ->setExportAs($exportAs);
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\ExportAutomaticSettlementRequest
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get exportAs value
     * @return string|null
     */
    public function getExportAs(): ?string
    {
        return $this->exportAs;
    }
    /**
     * Set exportAs value
     * @param string $exportAs
     * @return \Pggns\MidocoApi\Order\StructType\ExportAutomaticSettlementRequest
     */
    public function setExportAs(?string $exportAs = 'CSV'): self
    {
        // validation for constraint: string
        if (!is_null($exportAs) && !is_string($exportAs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportAs, true), gettype($exportAs)), __LINE__);
        }
        $this->exportAs = $exportAs;
        
        return $this;
    }
}
