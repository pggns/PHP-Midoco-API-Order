<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFibuExportSettingsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetFibuExportSettingsResponse extends AbstractStructBase
{
    /**
     * The exportFormat
     * @var string|null
     */
    protected ?string $exportFormat = null;
    /**
     * The mode
     * @var string|null
     */
    protected ?string $mode = null;
    /**
     * The hasJournalExport
     * @var bool|null
     */
    protected ?bool $hasJournalExport = null;
    /**
     * The hasDebitorExport
     * @var bool|null
     */
    protected ?bool $hasDebitorExport = null;
    /**
     * The hasCreditorExport
     * @var bool|null
     */
    protected ?bool $hasCreditorExport = null;
    /**
     * The hasExportCodes
     * @var bool|null
     */
    protected ?bool $hasExportCodes = null;
    /**
     * The hasAllowManualExportCode
     * @var bool|null
     */
    protected ?bool $hasAllowManualExportCode = null;
    /**
     * Constructor method for GetFibuExportSettingsResponse
     * @uses GetFibuExportSettingsResponse::setExportFormat()
     * @uses GetFibuExportSettingsResponse::setMode()
     * @uses GetFibuExportSettingsResponse::setHasJournalExport()
     * @uses GetFibuExportSettingsResponse::setHasDebitorExport()
     * @uses GetFibuExportSettingsResponse::setHasCreditorExport()
     * @uses GetFibuExportSettingsResponse::setHasExportCodes()
     * @uses GetFibuExportSettingsResponse::setHasAllowManualExportCode()
     * @param string $exportFormat
     * @param string $mode
     * @param bool $hasJournalExport
     * @param bool $hasDebitorExport
     * @param bool $hasCreditorExport
     * @param bool $hasExportCodes
     * @param bool $hasAllowManualExportCode
     */
    public function __construct(?string $exportFormat = null, ?string $mode = null, ?bool $hasJournalExport = null, ?bool $hasDebitorExport = null, ?bool $hasCreditorExport = null, ?bool $hasExportCodes = null, ?bool $hasAllowManualExportCode = null)
    {
        $this
            ->setExportFormat($exportFormat)
            ->setMode($mode)
            ->setHasJournalExport($hasJournalExport)
            ->setHasDebitorExport($hasDebitorExport)
            ->setHasCreditorExport($hasCreditorExport)
            ->setHasExportCodes($hasExportCodes)
            ->setHasAllowManualExportCode($hasAllowManualExportCode);
    }
    /**
     * Get exportFormat value
     * @return string|null
     */
    public function getExportFormat(): ?string
    {
        return $this->exportFormat;
    }
    /**
     * Set exportFormat value
     * @param string $exportFormat
     * @return \Pggns\MidocoApi\Order\StructType\GetFibuExportSettingsResponse
     */
    public function setExportFormat(?string $exportFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($exportFormat) && !is_string($exportFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportFormat, true), gettype($exportFormat)), __LINE__);
        }
        $this->exportFormat = $exportFormat;
        
        return $this;
    }
    /**
     * Get mode value
     * @return string|null
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @param string $mode
     * @return \Pggns\MidocoApi\Order\StructType\GetFibuExportSettingsResponse
     */
    public function setMode(?string $mode = null): self
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;
        
        return $this;
    }
    /**
     * Get hasJournalExport value
     * @return bool|null
     */
    public function getHasJournalExport(): ?bool
    {
        return $this->hasJournalExport;
    }
    /**
     * Set hasJournalExport value
     * @param bool $hasJournalExport
     * @return \Pggns\MidocoApi\Order\StructType\GetFibuExportSettingsResponse
     */
    public function setHasJournalExport(?bool $hasJournalExport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasJournalExport) && !is_bool($hasJournalExport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasJournalExport, true), gettype($hasJournalExport)), __LINE__);
        }
        $this->hasJournalExport = $hasJournalExport;
        
        return $this;
    }
    /**
     * Get hasDebitorExport value
     * @return bool|null
     */
    public function getHasDebitorExport(): ?bool
    {
        return $this->hasDebitorExport;
    }
    /**
     * Set hasDebitorExport value
     * @param bool $hasDebitorExport
     * @return \Pggns\MidocoApi\Order\StructType\GetFibuExportSettingsResponse
     */
    public function setHasDebitorExport(?bool $hasDebitorExport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasDebitorExport) && !is_bool($hasDebitorExport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasDebitorExport, true), gettype($hasDebitorExport)), __LINE__);
        }
        $this->hasDebitorExport = $hasDebitorExport;
        
        return $this;
    }
    /**
     * Get hasCreditorExport value
     * @return bool|null
     */
    public function getHasCreditorExport(): ?bool
    {
        return $this->hasCreditorExport;
    }
    /**
     * Set hasCreditorExport value
     * @param bool $hasCreditorExport
     * @return \Pggns\MidocoApi\Order\StructType\GetFibuExportSettingsResponse
     */
    public function setHasCreditorExport(?bool $hasCreditorExport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasCreditorExport) && !is_bool($hasCreditorExport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasCreditorExport, true), gettype($hasCreditorExport)), __LINE__);
        }
        $this->hasCreditorExport = $hasCreditorExport;
        
        return $this;
    }
    /**
     * Get hasExportCodes value
     * @return bool|null
     */
    public function getHasExportCodes(): ?bool
    {
        return $this->hasExportCodes;
    }
    /**
     * Set hasExportCodes value
     * @param bool $hasExportCodes
     * @return \Pggns\MidocoApi\Order\StructType\GetFibuExportSettingsResponse
     */
    public function setHasExportCodes(?bool $hasExportCodes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasExportCodes) && !is_bool($hasExportCodes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasExportCodes, true), gettype($hasExportCodes)), __LINE__);
        }
        $this->hasExportCodes = $hasExportCodes;
        
        return $this;
    }
    /**
     * Get hasAllowManualExportCode value
     * @return bool|null
     */
    public function getHasAllowManualExportCode(): ?bool
    {
        return $this->hasAllowManualExportCode;
    }
    /**
     * Set hasAllowManualExportCode value
     * @param bool $hasAllowManualExportCode
     * @return \Pggns\MidocoApi\Order\StructType\GetFibuExportSettingsResponse
     */
    public function setHasAllowManualExportCode(?bool $hasAllowManualExportCode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasAllowManualExportCode) && !is_bool($hasAllowManualExportCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAllowManualExportCode, true), gettype($hasAllowManualExportCode)), __LINE__);
        }
        $this->hasAllowManualExportCode = $hasAllowManualExportCode;
        
        return $this;
    }
}
