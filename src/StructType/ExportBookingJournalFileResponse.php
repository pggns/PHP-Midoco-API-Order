<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportBookingJournalFileResponse StructType
 * @subpackage Structs
 */
class ExportBookingJournalFileResponse extends AbstractStructBase
{
    /**
     * The file
     * @var string|null
     */
    protected ?string $file = null;
    /**
     * The fileType
     * @var string|null
     */
    protected ?string $fileType = null;
    /**
     * Constructor method for ExportBookingJournalFileResponse
     * @uses ExportBookingJournalFileResponse::setFile()
     * @uses ExportBookingJournalFileResponse::setFileType()
     * @param string $file
     * @param string $fileType
     */
    public function __construct(?string $file = null, ?string $fileType = null)
    {
        $this
            ->setFile($file)
            ->setFileType($fileType);
    }
    /**
     * Get file value
     * @return string|null
     */
    public function getFile(): ?string
    {
        return $this->file;
    }
    /**
     * Set file value
     * @param string $file
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalFileResponse
     */
    public function setFile(?string $file = null): self
    {
        // validation for constraint: string
        if (!is_null($file) && !is_string($file)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($file, true), gettype($file)), __LINE__);
        }
        $this->file = $file;
        
        return $this;
    }
    /**
     * Get fileType value
     * @return string|null
     */
    public function getFileType(): ?string
    {
        return $this->fileType;
    }
    /**
     * Set fileType value
     * @param string $fileType
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalFileResponse
     */
    public function setFileType(?string $fileType = null): self
    {
        // validation for constraint: string
        if (!is_null($fileType) && !is_string($fileType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileType, true), gettype($fileType)), __LINE__);
        }
        $this->fileType = $fileType;
        
        return $this;
    }
}
