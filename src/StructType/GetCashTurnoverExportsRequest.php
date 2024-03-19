<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCashTurnoverExportsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCashTurnoverExportsRequest extends AbstractStructBase
{
    /**
     * The cashBookId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $cashBookId;
    /**
     * The exportDateFrom
     * @var string|null
     */
    protected ?string $exportDateFrom = null;
    /**
     * The exportDateTo
     * @var string|null
     */
    protected ?string $exportDateTo = null;
    /**
     * Constructor method for GetCashTurnoverExportsRequest
     * @uses GetCashTurnoverExportsRequest::setCashBookId()
     * @uses GetCashTurnoverExportsRequest::setExportDateFrom()
     * @uses GetCashTurnoverExportsRequest::setExportDateTo()
     * @param int $cashBookId
     * @param string $exportDateFrom
     * @param string $exportDateTo
     */
    public function __construct(int $cashBookId, ?string $exportDateFrom = null, ?string $exportDateTo = null)
    {
        $this
            ->setCashBookId($cashBookId)
            ->setExportDateFrom($exportDateFrom)
            ->setExportDateTo($exportDateTo);
    }
    /**
     * Get cashBookId value
     * @return int
     */
    public function getCashBookId(): int
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param int $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\GetCashTurnoverExportsRequest
     */
    public function setCashBookId(int $cashBookId): self
    {
        // validation for constraint: int
        if (!is_null($cashBookId) && !(is_int($cashBookId) || ctype_digit($cashBookId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Get exportDateFrom value
     * @return string|null
     */
    public function getExportDateFrom(): ?string
    {
        return $this->exportDateFrom;
    }
    /**
     * Set exportDateFrom value
     * @param string $exportDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetCashTurnoverExportsRequest
     */
    public function setExportDateFrom(?string $exportDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDateFrom) && !is_string($exportDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDateFrom, true), gettype($exportDateFrom)), __LINE__);
        }
        $this->exportDateFrom = $exportDateFrom;
        
        return $this;
    }
    /**
     * Get exportDateTo value
     * @return string|null
     */
    public function getExportDateTo(): ?string
    {
        return $this->exportDateTo;
    }
    /**
     * Set exportDateTo value
     * @param string $exportDateTo
     * @return \Pggns\MidocoApi\Order\StructType\GetCashTurnoverExportsRequest
     */
    public function setExportDateTo(?string $exportDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDateTo) && !is_string($exportDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDateTo, true), gettype($exportDateTo)), __LINE__);
        }
        $this->exportDateTo = $exportDateTo;
        
        return $this;
    }
}
