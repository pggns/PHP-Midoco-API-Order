<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierDocumentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierDocumentDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The documentNatureId
     * @var string|null
     */
    protected ?string $documentNatureId = null;
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The fileSize
     * @var int|null
     */
    protected ?int $fileSize = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The storeUntil
     * @var string|null
     */
    protected ?string $storeUntil = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The uploadDate
     * @var string|null
     */
    protected ?string $uploadDate = null;
    /**
     * Constructor method for SupplierDocumentDTO
     * @uses SupplierDocumentDTO::setDescription()
     * @uses SupplierDocumentDTO::setDocumentNatureId()
     * @uses SupplierDocumentDTO::setFileName()
     * @uses SupplierDocumentDTO::setFileSize()
     * @uses SupplierDocumentDTO::setRepositoryId()
     * @uses SupplierDocumentDTO::setStoreUntil()
     * @uses SupplierDocumentDTO::setSupplierId()
     * @uses SupplierDocumentDTO::setUploadDate()
     * @param string $description
     * @param string $documentNatureId
     * @param string $fileName
     * @param int $fileSize
     * @param int $repositoryId
     * @param string $storeUntil
     * @param string $supplierId
     * @param string $uploadDate
     */
    public function __construct(?string $description = null, ?string $documentNatureId = null, ?string $fileName = null, ?int $fileSize = null, ?int $repositoryId = null, ?string $storeUntil = null, ?string $supplierId = null, ?string $uploadDate = null)
    {
        $this
            ->setDescription($description)
            ->setDocumentNatureId($documentNatureId)
            ->setFileName($fileName)
            ->setFileSize($fileSize)
            ->setRepositoryId($repositoryId)
            ->setStoreUntil($storeUntil)
            ->setSupplierId($supplierId)
            ->setUploadDate($uploadDate);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get documentNatureId value
     * @return string|null
     */
    public function getDocumentNatureId(): ?string
    {
        return $this->documentNatureId;
    }
    /**
     * Set documentNatureId value
     * @param string $documentNatureId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentDTO
     */
    public function setDocumentNatureId(?string $documentNatureId = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNatureId) && !is_string($documentNatureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNatureId, true), gettype($documentNatureId)), __LINE__);
        }
        $this->documentNatureId = $documentNatureId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentDTO
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
     * Get fileSize value
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
    /**
     * Set fileSize value
     * @param int $fileSize
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentDTO
     */
    public function setFileSize(?int $fileSize = null): self
    {
        // validation for constraint: int
        if (!is_null($fileSize) && !(is_int($fileSize) || ctype_digit($fileSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileSize, true), gettype($fileSize)), __LINE__);
        }
        $this->fileSize = $fileSize;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentDTO
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
     * Get storeUntil value
     * @return string|null
     */
    public function getStoreUntil(): ?string
    {
        return $this->storeUntil;
    }
    /**
     * Set storeUntil value
     * @param string $storeUntil
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentDTO
     */
    public function setStoreUntil(?string $storeUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($storeUntil) && !is_string($storeUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeUntil, true), gettype($storeUntil)), __LINE__);
        }
        $this->storeUntil = $storeUntil;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get uploadDate value
     * @return string|null
     */
    public function getUploadDate(): ?string
    {
        return $this->uploadDate;
    }
    /**
     * Set uploadDate value
     * @param string $uploadDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentDTO
     */
    public function setUploadDate(?string $uploadDate = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadDate) && !is_string($uploadDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadDate, true), gettype($uploadDate)), __LINE__);
        }
        $this->uploadDate = $uploadDate;
        
        return $this;
    }
}
