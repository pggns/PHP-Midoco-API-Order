<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmDocumentDTO StructType
 * @subpackage Structs
 */
class CrmDocumentDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The documentDate
     * @var string|null
     */
    protected ?string $documentDate = null;
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
     * The documentName
     * @var string|null
     */
    protected ?string $documentName = null;
    /**
     * The documentNatureId
     * @var string|null
     */
    protected ?string $documentNatureId = null;
    /**
     * The documentSize
     * @var int|null
     */
    protected ?int $documentSize = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The isDocumentExported
     * @var bool|null
     */
    protected ?bool $isDocumentExported = null;
    /**
     * The isLink
     * @var bool|null
     */
    protected ?bool $isLink = null;
    /**
     * The isManual
     * @var bool|null
     */
    protected ?bool $isManual = null;
    /**
     * The linkParameter
     * @var string|null
     */
    protected ?string $linkParameter = null;
    /**
     * The linkType
     * @var string|null
     */
    protected ?string $linkType = null;
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
     * The uploadDate
     * @var string|null
     */
    protected ?string $uploadDate = null;
    /**
     * Constructor method for CrmDocumentDTO
     * @uses CrmDocumentDTO::setCustomerId()
     * @uses CrmDocumentDTO::setDescription()
     * @uses CrmDocumentDTO::setDocumentDate()
     * @uses CrmDocumentDTO::setDocumentExportDate()
     * @uses CrmDocumentDTO::setDocumentId()
     * @uses CrmDocumentDTO::setDocumentName()
     * @uses CrmDocumentDTO::setDocumentNatureId()
     * @uses CrmDocumentDTO::setDocumentSize()
     * @uses CrmDocumentDTO::setDocumentType()
     * @uses CrmDocumentDTO::setIsDocumentExported()
     * @uses CrmDocumentDTO::setIsLink()
     * @uses CrmDocumentDTO::setIsManual()
     * @uses CrmDocumentDTO::setLinkParameter()
     * @uses CrmDocumentDTO::setLinkType()
     * @uses CrmDocumentDTO::setRepositoryId()
     * @uses CrmDocumentDTO::setStoreUntil()
     * @uses CrmDocumentDTO::setUploadDate()
     * @param int $customerId
     * @param string $description
     * @param string $documentDate
     * @param string $documentExportDate
     * @param int $documentId
     * @param string $documentName
     * @param string $documentNatureId
     * @param int $documentSize
     * @param string $documentType
     * @param bool $isDocumentExported
     * @param bool $isLink
     * @param bool $isManual
     * @param string $linkParameter
     * @param string $linkType
     * @param int $repositoryId
     * @param string $storeUntil
     * @param string $uploadDate
     */
    public function __construct(?int $customerId = null, ?string $description = null, ?string $documentDate = null, ?string $documentExportDate = null, ?int $documentId = null, ?string $documentName = null, ?string $documentNatureId = null, ?int $documentSize = null, ?string $documentType = null, ?bool $isDocumentExported = null, ?bool $isLink = null, ?bool $isManual = null, ?string $linkParameter = null, ?string $linkType = null, ?int $repositoryId = null, ?string $storeUntil = null, ?string $uploadDate = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setDescription($description)
            ->setDocumentDate($documentDate)
            ->setDocumentExportDate($documentExportDate)
            ->setDocumentId($documentId)
            ->setDocumentName($documentName)
            ->setDocumentNatureId($documentNatureId)
            ->setDocumentSize($documentSize)
            ->setDocumentType($documentType)
            ->setIsDocumentExported($isDocumentExported)
            ->setIsLink($isLink)
            ->setIsManual($isManual)
            ->setLinkParameter($linkParameter)
            ->setLinkType($linkType)
            ->setRepositoryId($repositoryId)
            ->setStoreUntil($storeUntil)
            ->setUploadDate($uploadDate);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
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
     * Get documentDate value
     * @return string|null
     */
    public function getDocumentDate(): ?string
    {
        return $this->documentDate;
    }
    /**
     * Set documentDate value
     * @param string $documentDate
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
     */
    public function setDocumentDate(?string $documentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($documentDate) && !is_string($documentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentDate, true), gettype($documentDate)), __LINE__);
        }
        $this->documentDate = $documentDate;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
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
     * Get documentName value
     * @return string|null
     */
    public function getDocumentName(): ?string
    {
        return $this->documentName;
    }
    /**
     * Set documentName value
     * @param string $documentName
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
     */
    public function setDocumentName(?string $documentName = null): self
    {
        // validation for constraint: string
        if (!is_null($documentName) && !is_string($documentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentName, true), gettype($documentName)), __LINE__);
        }
        $this->documentName = $documentName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
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
     * Get documentSize value
     * @return int|null
     */
    public function getDocumentSize(): ?int
    {
        return $this->documentSize;
    }
    /**
     * Set documentSize value
     * @param int $documentSize
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
     */
    public function setDocumentSize(?int $documentSize = null): self
    {
        // validation for constraint: int
        if (!is_null($documentSize) && !(is_int($documentSize) || ctype_digit($documentSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentSize, true), gettype($documentSize)), __LINE__);
        }
        $this->documentSize = $documentSize;
        
        return $this;
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
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
     * Get isLink value
     * @return bool|null
     */
    public function getIsLink(): ?bool
    {
        return $this->isLink;
    }
    /**
     * Set isLink value
     * @param bool $isLink
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
     */
    public function setIsLink(?bool $isLink = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLink) && !is_bool($isLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLink, true), gettype($isLink)), __LINE__);
        }
        $this->isLink = $isLink;
        
        return $this;
    }
    /**
     * Get isManual value
     * @return bool|null
     */
    public function getIsManual(): ?bool
    {
        return $this->isManual;
    }
    /**
     * Set isManual value
     * @param bool $isManual
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
     */
    public function setIsManual(?bool $isManual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManual) && !is_bool($isManual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManual, true), gettype($isManual)), __LINE__);
        }
        $this->isManual = $isManual;
        
        return $this;
    }
    /**
     * Get linkParameter value
     * @return string|null
     */
    public function getLinkParameter(): ?string
    {
        return $this->linkParameter;
    }
    /**
     * Set linkParameter value
     * @param string $linkParameter
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
     */
    public function setLinkParameter(?string $linkParameter = null): self
    {
        // validation for constraint: string
        if (!is_null($linkParameter) && !is_string($linkParameter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkParameter, true), gettype($linkParameter)), __LINE__);
        }
        $this->linkParameter = $linkParameter;
        
        return $this;
    }
    /**
     * Get linkType value
     * @return string|null
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }
    /**
     * Set linkType value
     * @param string $linkType
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
     */
    public function setLinkType(?string $linkType = null): self
    {
        // validation for constraint: string
        if (!is_null($linkType) && !is_string($linkType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkType, true), gettype($linkType)), __LINE__);
        }
        $this->linkType = $linkType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
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
