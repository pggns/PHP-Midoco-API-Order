<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EinvoiceDocumentDTO StructType
 * @subpackage Structs
 */
class EinvoiceDocumentDTO extends AbstractStructBase
{
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
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
     * The fileType
     * @var string|null
     */
    protected ?string $fileType = null;
    /**
     * The gateway
     * @var string|null
     */
    protected ?string $gateway = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The isDocumentExported
     * @var bool|null
     */
    protected ?bool $isDocumentExported = null;
    /**
     * The orderRef
     * @var string|null
     */
    protected ?string $orderRef = null;
    /**
     * The provisionBy
     * @var int|null
     */
    protected ?int $provisionBy = null;
    /**
     * The provisionTimestamp
     * @var string|null
     */
    protected ?string $provisionTimestamp = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for EinvoiceDocumentDTO
     * @uses EinvoiceDocumentDTO::setCreationTimestamp()
     * @uses EinvoiceDocumentDTO::setDocumentExportDate()
     * @uses EinvoiceDocumentDTO::setDocumentId()
     * @uses EinvoiceDocumentDTO::setFileName()
     * @uses EinvoiceDocumentDTO::setFileType()
     * @uses EinvoiceDocumentDTO::setGateway()
     * @uses EinvoiceDocumentDTO::setId()
     * @uses EinvoiceDocumentDTO::setIsDocumentExported()
     * @uses EinvoiceDocumentDTO::setOrderRef()
     * @uses EinvoiceDocumentDTO::setProvisionBy()
     * @uses EinvoiceDocumentDTO::setProvisionTimestamp()
     * @uses EinvoiceDocumentDTO::setRepositoryId()
     * @param string $creationTimestamp
     * @param string $documentExportDate
     * @param int $documentId
     * @param string $fileName
     * @param string $fileType
     * @param string $gateway
     * @param int $id
     * @param bool $isDocumentExported
     * @param string $orderRef
     * @param int $provisionBy
     * @param string $provisionTimestamp
     * @param int $repositoryId
     */
    public function __construct(?string $creationTimestamp = null, ?string $documentExportDate = null, ?int $documentId = null, ?string $fileName = null, ?string $fileType = null, ?string $gateway = null, ?int $id = null, ?bool $isDocumentExported = null, ?string $orderRef = null, ?int $provisionBy = null, ?string $provisionTimestamp = null, ?int $repositoryId = null)
    {
        $this
            ->setCreationTimestamp($creationTimestamp)
            ->setDocumentExportDate($documentExportDate)
            ->setDocumentId($documentId)
            ->setFileName($fileName)
            ->setFileType($fileType)
            ->setGateway($gateway)
            ->setId($id)
            ->setIsDocumentExported($isDocumentExported)
            ->setOrderRef($orderRef)
            ->setProvisionBy($provisionBy)
            ->setProvisionTimestamp($provisionTimestamp)
            ->setRepositoryId($repositoryId);
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
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
    /**
     * Get gateway value
     * @return string|null
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }
    /**
     * Set gateway value
     * @param string $gateway
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
     */
    public function setGateway(?string $gateway = null): self
    {
        // validation for constraint: string
        if (!is_null($gateway) && !is_string($gateway)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gateway, true), gettype($gateway)), __LINE__);
        }
        $this->gateway = $gateway;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
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
     * Get orderRef value
     * @return string|null
     */
    public function getOrderRef(): ?string
    {
        return $this->orderRef;
    }
    /**
     * Set orderRef value
     * @param string $orderRef
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
     */
    public function setOrderRef(?string $orderRef = null): self
    {
        // validation for constraint: string
        if (!is_null($orderRef) && !is_string($orderRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderRef, true), gettype($orderRef)), __LINE__);
        }
        $this->orderRef = $orderRef;
        
        return $this;
    }
    /**
     * Get provisionBy value
     * @return int|null
     */
    public function getProvisionBy(): ?int
    {
        return $this->provisionBy;
    }
    /**
     * Set provisionBy value
     * @param int $provisionBy
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
     */
    public function setProvisionBy(?int $provisionBy = null): self
    {
        // validation for constraint: int
        if (!is_null($provisionBy) && !(is_int($provisionBy) || ctype_digit($provisionBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($provisionBy, true), gettype($provisionBy)), __LINE__);
        }
        $this->provisionBy = $provisionBy;
        
        return $this;
    }
    /**
     * Get provisionTimestamp value
     * @return string|null
     */
    public function getProvisionTimestamp(): ?string
    {
        return $this->provisionTimestamp;
    }
    /**
     * Set provisionTimestamp value
     * @param string $provisionTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
     */
    public function setProvisionTimestamp(?string $provisionTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($provisionTimestamp) && !is_string($provisionTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provisionTimestamp, true), gettype($provisionTimestamp)), __LINE__);
        }
        $this->provisionTimestamp = $provisionTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceDocumentDTO
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
