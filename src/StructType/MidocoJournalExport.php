<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoJournalExport StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoJournalExport extends JournalExportDTO
{
    /**
     * The exportUserName
     * @var string|null
     */
    protected ?string $exportUserName = null;
    /**
     * Constructor method for MidocoJournalExport
     * @uses MidocoJournalExport::setExportUserName()
     * @param string $exportUserName
     */
    public function __construct(?string $exportUserName = null)
    {
        $this
            ->setExportUserName($exportUserName);
    }
    /**
     * Get exportUserName value
     * @return string|null
     */
    public function getExportUserName(): ?string
    {
        return $this->exportUserName;
    }
    /**
     * Set exportUserName value
     * @param string $exportUserName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoJournalExport
     */
    public function setExportUserName(?string $exportUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($exportUserName) && !is_string($exportUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportUserName, true), gettype($exportUserName)), __LINE__);
        }
        $this->exportUserName = $exportUserName;
        
        return $this;
    }
}
