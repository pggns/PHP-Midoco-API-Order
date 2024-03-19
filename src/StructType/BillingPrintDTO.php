<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingPrintDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingPrintDTO extends AbstractStructBase
{
    /**
     * The documentExportDate
     * @var string|null
     */
    protected ?string $documentExportDate = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The isDocumentExported
     * @var bool|null
     */
    protected ?bool $isDocumentExported = null;
    /**
     * The isDraft
     * @var bool|null
     */
    protected ?bool $isDraft = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The printDate
     * @var string|null
     */
    protected ?string $printDate = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * Constructor method for BillingPrintDTO
     * @uses BillingPrintDTO::setDocumentExportDate()
     * @uses BillingPrintDTO::setDocumentId()
     * @uses BillingPrintDTO::setFileName()
     * @uses BillingPrintDTO::setIsDocumentExported()
     * @uses BillingPrintDTO::setIsDraft()
     * @uses BillingPrintDTO::setIsExported()
     * @uses BillingPrintDTO::setMedia()
     * @uses BillingPrintDTO::setPrintDate()
     * @uses BillingPrintDTO::setRepositoryId()
     * @uses BillingPrintDTO::setUserId()
     * @uses BillingPrintDTO::setVersion()
     * @param string $documentExportDate
     * @param int $documentId
     * @param string $fileName
     * @param bool $isDocumentExported
     * @param bool $isDraft
     * @param bool $isExported
     * @param string $media
     * @param string $printDate
     * @param int $repositoryId
     * @param int $userId
     * @param int $version
     */
    public function __construct(?string $documentExportDate = null, ?int $documentId = null, ?string $fileName = null, ?bool $isDocumentExported = null, ?bool $isDraft = null, ?bool $isExported = null, ?string $media = null, ?string $printDate = null, ?int $repositoryId = null, ?int $userId = null, ?int $version = null)
    {
        $this
            ->setDocumentExportDate($documentExportDate)
            ->setDocumentId($documentId)
            ->setFileName($fileName)
            ->setIsDocumentExported($isDocumentExported)
            ->setIsDraft($isDraft)
            ->setIsExported($isExported)
            ->setMedia($media)
            ->setPrintDate($printDate)
            ->setRepositoryId($repositoryId)
            ->setUserId($userId)
            ->setVersion($version);
    }
    /**
     * Get documentExportDate value
     * @return string|null
     */
    public function getDocumentExportDate(): ?string
    {
        return $this->documentExportDate;
    }
    /**
     * Set documentExportDate value
     * @param string $documentExportDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO
     */
    public function setDocumentExportDate(?string $documentExportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($documentExportDate) && !is_string($documentExportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentExportDate, true), gettype($documentExportDate)), __LINE__);
        }
        $this->documentExportDate = $documentExportDate;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get fileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        
        return $this;
    }
    /**
     * Get isDocumentExported value
     * @return bool|null
     */
    public function getIsDocumentExported(): ?bool
    {
        return $this->isDocumentExported;
    }
    /**
     * Set isDocumentExported value
     * @param bool $isDocumentExported
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO
     */
    public function setIsDocumentExported(?bool $isDocumentExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDocumentExported) && !is_bool($isDocumentExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDocumentExported, true), gettype($isDocumentExported)), __LINE__);
        }
        $this->isDocumentExported = $isDocumentExported;
        
        return $this;
    }
    /**
     * Get isDraft value
     * @return bool|null
     */
    public function getIsDraft(): ?bool
    {
        return $this->isDraft;
    }
    /**
     * Set isDraft value
     * @param bool $isDraft
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO
     */
    public function setIsDraft(?bool $isDraft = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDraft) && !is_bool($isDraft)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDraft, true), gettype($isDraft)), __LINE__);
        }
        $this->isDraft = $isDraft;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;
        
        return $this;
    }
    /**
     * Get printDate value
     * @return string|null
     */
    public function getPrintDate(): ?string
    {
        return $this->printDate;
    }
    /**
     * Set printDate value
     * @param string $printDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO
     */
    public function setPrintDate(?string $printDate = null): self
    {
        // validation for constraint: string
        if (!is_null($printDate) && !is_string($printDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printDate, true), gettype($printDate)), __LINE__);
        }
        $this->printDate = $printDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO
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
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO
     */
    public function setVersion(?int $version = null): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
}
