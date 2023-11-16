<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderContextResponse StructType
 * @subpackage Structs
 */
class GetOrderContextResponse extends AbstractStructBase
{
    /**
     * The hasForeignDebitors
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasForeignDebitors;
    /**
     * The hasJournalExportCodes
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasJournalExportCodes;
    /**
     * Constructor method for GetOrderContextResponse
     * @uses GetOrderContextResponse::setHasForeignDebitors()
     * @uses GetOrderContextResponse::setHasJournalExportCodes()
     * @param bool $hasForeignDebitors
     * @param bool $hasJournalExportCodes
     */
    public function __construct(bool $hasForeignDebitors, bool $hasJournalExportCodes)
    {
        $this
            ->setHasForeignDebitors($hasForeignDebitors)
            ->setHasJournalExportCodes($hasJournalExportCodes);
    }
    /**
     * Get hasForeignDebitors value
     * @return bool
     */
    public function getHasForeignDebitors(): bool
    {
        return $this->hasForeignDebitors;
    }
    /**
     * Set hasForeignDebitors value
     * @param bool $hasForeignDebitors
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderContextResponse
     */
    public function setHasForeignDebitors(bool $hasForeignDebitors): self
    {
        // validation for constraint: boolean
        if (!is_null($hasForeignDebitors) && !is_bool($hasForeignDebitors)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasForeignDebitors, true), gettype($hasForeignDebitors)), __LINE__);
        }
        $this->hasForeignDebitors = $hasForeignDebitors;
        
        return $this;
    }
    /**
     * Get hasJournalExportCodes value
     * @return bool
     */
    public function getHasJournalExportCodes(): bool
    {
        return $this->hasJournalExportCodes;
    }
    /**
     * Set hasJournalExportCodes value
     * @param bool $hasJournalExportCodes
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderContextResponse
     */
    public function setHasJournalExportCodes(bool $hasJournalExportCodes): self
    {
        // validation for constraint: boolean
        if (!is_null($hasJournalExportCodes) && !is_bool($hasJournalExportCodes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasJournalExportCodes, true), gettype($hasJournalExportCodes)), __LINE__);
        }
        $this->hasJournalExportCodes = $hasJournalExportCodes;
        
        return $this;
    }
}
