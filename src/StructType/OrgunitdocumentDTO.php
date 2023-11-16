<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgunitdocumentDTO StructType
 * @subpackage Structs
 */
class OrgunitdocumentDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
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
     * The isAutoEmail
     * @var bool|null
     */
    protected ?bool $isAutoEmail = null;
    /**
     * The isInheritable
     * @var bool|null
     */
    protected ?bool $isInheritable = null;
    /**
     * The printTypeId
     * @var string|null
     */
    protected ?string $printTypeId = null;
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
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The uploadDate
     * @var string|null
     */
    protected ?string $uploadDate = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validUntil
     * @var string|null
     */
    protected ?string $validUntil = null;
    /**
     * Constructor method for OrgunitdocumentDTO
     * @uses OrgunitdocumentDTO::setDescription()
     * @uses OrgunitdocumentDTO::setDocumentId()
     * @uses OrgunitdocumentDTO::setDocumentNatureId()
     * @uses OrgunitdocumentDTO::setFileName()
     * @uses OrgunitdocumentDTO::setFileSize()
     * @uses OrgunitdocumentDTO::setIsAutoEmail()
     * @uses OrgunitdocumentDTO::setIsInheritable()
     * @uses OrgunitdocumentDTO::setPrintTypeId()
     * @uses OrgunitdocumentDTO::setRepositoryId()
     * @uses OrgunitdocumentDTO::setStoreUntil()
     * @uses OrgunitdocumentDTO::setUnitName()
     * @uses OrgunitdocumentDTO::setUploadDate()
     * @uses OrgunitdocumentDTO::setValidFrom()
     * @uses OrgunitdocumentDTO::setValidUntil()
     * @param string $description
     * @param int $documentId
     * @param string $documentNatureId
     * @param string $fileName
     * @param int $fileSize
     * @param bool $isAutoEmail
     * @param bool $isInheritable
     * @param string $printTypeId
     * @param int $repositoryId
     * @param string $storeUntil
     * @param string $unitName
     * @param string $uploadDate
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct(?string $description = null, ?int $documentId = null, ?string $documentNatureId = null, ?string $fileName = null, ?int $fileSize = null, ?bool $isAutoEmail = null, ?bool $isInheritable = null, ?string $printTypeId = null, ?int $repositoryId = null, ?string $storeUntil = null, ?string $unitName = null, ?string $uploadDate = null, ?string $validFrom = null, ?string $validUntil = null)
    {
        $this
            ->setDescription($description)
            ->setDocumentId($documentId)
            ->setDocumentNatureId($documentNatureId)
            ->setFileName($fileName)
            ->setFileSize($fileSize)
            ->setIsAutoEmail($isAutoEmail)
            ->setIsInheritable($isInheritable)
            ->setPrintTypeId($printTypeId)
            ->setRepositoryId($repositoryId)
            ->setStoreUntil($storeUntil)
            ->setUnitName($unitName)
            ->setUploadDate($uploadDate)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
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
     * Get isAutoEmail value
     * @return bool|null
     */
    public function getIsAutoEmail(): ?bool
    {
        return $this->isAutoEmail;
    }
    /**
     * Set isAutoEmail value
     * @param bool $isAutoEmail
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
     */
    public function setIsAutoEmail(?bool $isAutoEmail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAutoEmail) && !is_bool($isAutoEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAutoEmail, true), gettype($isAutoEmail)), __LINE__);
        }
        $this->isAutoEmail = $isAutoEmail;
        
        return $this;
    }
    /**
     * Get isInheritable value
     * @return bool|null
     */
    public function getIsInheritable(): ?bool
    {
        return $this->isInheritable;
    }
    /**
     * Set isInheritable value
     * @param bool $isInheritable
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
     */
    public function setIsInheritable(?bool $isInheritable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInheritable) && !is_bool($isInheritable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInheritable, true), gettype($isInheritable)), __LINE__);
        }
        $this->isInheritable = $isInheritable;
        
        return $this;
    }
    /**
     * Get printTypeId value
     * @return string|null
     */
    public function getPrintTypeId(): ?string
    {
        return $this->printTypeId;
    }
    /**
     * Set printTypeId value
     * @param string $printTypeId
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
     */
    public function setPrintTypeId(?string $printTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($printTypeId) && !is_string($printTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTypeId, true), gettype($printTypeId)), __LINE__);
        }
        $this->printTypeId = $printTypeId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
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
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
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
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validUntil value
     * @return string|null
     */
    public function getValidUntil(): ?string
    {
        return $this->validUntil;
    }
    /**
     * Set validUntil value
     * @param string $validUntil
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitdocumentDTO
     */
    public function setValidUntil(?string $validUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), gettype($validUntil)), __LINE__);
        }
        $this->validUntil = $validUntil;
        
        return $this;
    }
}
