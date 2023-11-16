<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderDocumentDTO StructType
 * @subpackage Structs
 */
class OrderDocumentDTO extends AbstractStructBase
{
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
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
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The isManual
     * @var bool|null
     */
    protected ?bool $isManual = null;
    /**
     * The orderDocumentId
     * @var int|null
     */
    protected ?int $orderDocumentId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orgunitRepositoryId
     * @var int|null
     */
    protected ?int $orgunitRepositoryId = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The shipment
     * @var string|null
     */
    protected ?string $shipment = null;
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
     * Constructor method for OrderDocumentDTO
     * @uses OrderDocumentDTO::setCreationUser()
     * @uses OrderDocumentDTO::setDescription()
     * @uses OrderDocumentDTO::setDocumentDate()
     * @uses OrderDocumentDTO::setDocumentExportDate()
     * @uses OrderDocumentDTO::setDocumentName()
     * @uses OrderDocumentDTO::setDocumentNatureId()
     * @uses OrderDocumentDTO::setDocumentSize()
     * @uses OrderDocumentDTO::setDocumentType()
     * @uses OrderDocumentDTO::setIsDocumentExported()
     * @uses OrderDocumentDTO::setIsExported()
     * @uses OrderDocumentDTO::setIsManual()
     * @uses OrderDocumentDTO::setOrderDocumentId()
     * @uses OrderDocumentDTO::setOrderId()
     * @uses OrderDocumentDTO::setOrgunitRepositoryId()
     * @uses OrderDocumentDTO::setRepositoryId()
     * @uses OrderDocumentDTO::setShipment()
     * @uses OrderDocumentDTO::setStoreUntil()
     * @uses OrderDocumentDTO::setUploadDate()
     * @param int $creationUser
     * @param string $description
     * @param string $documentDate
     * @param string $documentExportDate
     * @param string $documentName
     * @param string $documentNatureId
     * @param int $documentSize
     * @param string $documentType
     * @param bool $isDocumentExported
     * @param bool $isExported
     * @param bool $isManual
     * @param int $orderDocumentId
     * @param int $orderId
     * @param int $orgunitRepositoryId
     * @param int $repositoryId
     * @param string $shipment
     * @param string $storeUntil
     * @param string $uploadDate
     */
    public function __construct(?int $creationUser = null, ?string $description = null, ?string $documentDate = null, ?string $documentExportDate = null, ?string $documentName = null, ?string $documentNatureId = null, ?int $documentSize = null, ?string $documentType = null, ?bool $isDocumentExported = null, ?bool $isExported = null, ?bool $isManual = null, ?int $orderDocumentId = null, ?int $orderId = null, ?int $orgunitRepositoryId = null, ?int $repositoryId = null, ?string $shipment = null, ?string $storeUntil = null, ?string $uploadDate = null)
    {
        $this
            ->setCreationUser($creationUser)
            ->setDescription($description)
            ->setDocumentDate($documentDate)
            ->setDocumentExportDate($documentExportDate)
            ->setDocumentName($documentName)
            ->setDocumentNatureId($documentNatureId)
            ->setDocumentSize($documentSize)
            ->setDocumentType($documentType)
            ->setIsDocumentExported($isDocumentExported)
            ->setIsExported($isExported)
            ->setIsManual($isManual)
            ->setOrderDocumentId($orderDocumentId)
            ->setOrderId($orderId)
            ->setOrgunitRepositoryId($orgunitRepositoryId)
            ->setRepositoryId($repositoryId)
            ->setShipment($shipment)
            ->setStoreUntil($storeUntil)
            ->setUploadDate($uploadDate);
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * Get orderDocumentId value
     * @return int|null
     */
    public function getOrderDocumentId(): ?int
    {
        return $this->orderDocumentId;
    }
    /**
     * Set orderDocumentId value
     * @param int $orderDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
     */
    public function setOrderDocumentId(?int $orderDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderDocumentId) && !(is_int($orderDocumentId) || ctype_digit($orderDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderDocumentId, true), gettype($orderDocumentId)), __LINE__);
        }
        $this->orderDocumentId = $orderDocumentId;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get orgunitRepositoryId value
     * @return int|null
     */
    public function getOrgunitRepositoryId(): ?int
    {
        return $this->orgunitRepositoryId;
    }
    /**
     * Set orgunitRepositoryId value
     * @param int $orgunitRepositoryId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
     */
    public function setOrgunitRepositoryId(?int $orgunitRepositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($orgunitRepositoryId) && !(is_int($orgunitRepositoryId) || ctype_digit($orgunitRepositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgunitRepositoryId, true), gettype($orgunitRepositoryId)), __LINE__);
        }
        $this->orgunitRepositoryId = $orgunitRepositoryId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * Get shipment value
     * @return string|null
     */
    public function getShipment(): ?string
    {
        return $this->shipment;
    }
    /**
     * Set shipment value
     * @param string $shipment
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
     */
    public function setShipment(?string $shipment = null): self
    {
        // validation for constraint: string
        if (!is_null($shipment) && !is_string($shipment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipment, true), gettype($shipment)), __LINE__);
        }
        $this->shipment = $shipment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDocumentDTO
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
