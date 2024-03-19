<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDSFinVKExportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateDSFinVKExportResponse extends AbstractStructBase
{
    /**
     * The exportFileName
     * @var string|null
     */
    protected ?string $exportFileName = null;
    /**
     * The exportFileSize
     * @var int|null
     */
    protected ?int $exportFileSize = null;
    /**
     * The exportFile
     * @var string|null
     */
    protected ?string $exportFile = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for CreateDSFinVKExportResponse
     * @uses CreateDSFinVKExportResponse::setExportFileName()
     * @uses CreateDSFinVKExportResponse::setExportFileSize()
     * @uses CreateDSFinVKExportResponse::setExportFile()
     * @uses CreateDSFinVKExportResponse::setRepositoryId()
     * @param string $exportFileName
     * @param int $exportFileSize
     * @param string $exportFile
     * @param int $repositoryId
     */
    public function __construct(?string $exportFileName = null, ?int $exportFileSize = null, ?string $exportFile = null, ?int $repositoryId = null)
    {
        $this
            ->setExportFileName($exportFileName)
            ->setExportFileSize($exportFileSize)
            ->setExportFile($exportFile)
            ->setRepositoryId($repositoryId);
    }
    /**
     * Get exportFileName value
     * @return string|null
     */
    public function getExportFileName(): ?string
    {
        return $this->exportFileName;
    }
    /**
     * Set exportFileName value
     * @param string $exportFileName
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportResponse
     */
    public function setExportFileName(?string $exportFileName = null): self
    {
        // validation for constraint: string
        if (!is_null($exportFileName) && !is_string($exportFileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportFileName, true), gettype($exportFileName)), __LINE__);
        }
        $this->exportFileName = $exportFileName;
        
        return $this;
    }
    /**
     * Get exportFileSize value
     * @return int|null
     */
    public function getExportFileSize(): ?int
    {
        return $this->exportFileSize;
    }
    /**
     * Set exportFileSize value
     * @param int $exportFileSize
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportResponse
     */
    public function setExportFileSize(?int $exportFileSize = null): self
    {
        // validation for constraint: int
        if (!is_null($exportFileSize) && !(is_int($exportFileSize) || ctype_digit($exportFileSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportFileSize, true), gettype($exportFileSize)), __LINE__);
        }
        $this->exportFileSize = $exportFileSize;
        
        return $this;
    }
    /**
     * Get exportFile value
     * @return string|null
     */
    public function getExportFile(): ?string
    {
        return $this->exportFile;
    }
    /**
     * Set exportFile value
     * @param string $exportFile
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportResponse
     */
    public function setExportFile(?string $exportFile = null): self
    {
        // validation for constraint: string
        if (!is_null($exportFile) && !is_string($exportFile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportFile, true), gettype($exportFile)), __LINE__);
        }
        $this->exportFile = $exportFile;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportResponse
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
}
