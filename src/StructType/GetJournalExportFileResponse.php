<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetJournalExportFileResponse StructType
 * @subpackage Structs
 */
class GetJournalExportFileResponse extends AbstractStructBase
{
    /**
     * The Filename
     * @var string|null
     */
    protected ?string $Filename = null;
    /**
     * The Filecontent
     * @var string|null
     */
    protected ?string $Filecontent = null;
    /**
     * Constructor method for GetJournalExportFileResponse
     * @uses GetJournalExportFileResponse::setFilename()
     * @uses GetJournalExportFileResponse::setFilecontent()
     * @param string $filename
     * @param string $filecontent
     */
    public function __construct(?string $filename = null, ?string $filecontent = null)
    {
        $this
            ->setFilename($filename)
            ->setFilecontent($filecontent);
    }
    /**
     * Get Filename value
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->Filename;
    }
    /**
     * Set Filename value
     * @param string $filename
     * @return \Pggns\MidocoApi\Order\StructType\GetJournalExportFileResponse
     */
    public function setFilename(?string $filename = null): self
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        $this->Filename = $filename;
        
        return $this;
    }
    /**
     * Get Filecontent value
     * @return string|null
     */
    public function getFilecontent(): ?string
    {
        return $this->Filecontent;
    }
    /**
     * Set Filecontent value
     * @param string $filecontent
     * @return \Pggns\MidocoApi\Order\StructType\GetJournalExportFileResponse
     */
    public function setFilecontent(?string $filecontent = null): self
    {
        // validation for constraint: string
        if (!is_null($filecontent) && !is_string($filecontent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filecontent, true), gettype($filecontent)), __LINE__);
        }
        $this->Filecontent = $filecontent;
        
        return $this;
    }
}
