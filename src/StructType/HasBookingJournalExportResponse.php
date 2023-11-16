<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HasBookingJournalExportResponse StructType
 * @subpackage Structs
 */
class HasBookingJournalExportResponse extends AbstractStructBase
{
    /**
     * The hasExport
     * @var bool|null
     */
    protected ?bool $hasExport = null;
    /**
     * Constructor method for HasBookingJournalExportResponse
     * @uses HasBookingJournalExportResponse::setHasExport()
     * @param bool $hasExport
     */
    public function __construct(?bool $hasExport = null)
    {
        $this
            ->setHasExport($hasExport);
    }
    /**
     * Get hasExport value
     * @return bool|null
     */
    public function getHasExport(): ?bool
    {
        return $this->hasExport;
    }
    /**
     * Set hasExport value
     * @param bool $hasExport
     * @return \Pggns\MidocoApi\Order\StructType\HasBookingJournalExportResponse
     */
    public function setHasExport(?bool $hasExport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasExport) && !is_bool($hasExport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasExport, true), gettype($hasExport)), __LINE__);
        }
        $this->hasExport = $hasExport;
        
        return $this;
    }
}
