<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationDocumentDTO StructType
 * @subpackage Structs
 */
class DestinationDocumentDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The destinationType
     * @var string|null
     */
    protected ?string $destinationType = null;
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
     * The uploadDate
     * @var string|null
     */
    protected ?string $uploadDate = null;
    /**
     * Constructor method for DestinationDocumentDTO
     * @uses DestinationDocumentDTO::setCultureId()
     * @uses DestinationDocumentDTO::setDescription()
     * @uses DestinationDocumentDTO::setDestinationCode()
     * @uses DestinationDocumentDTO::setDestinationType()
     * @uses DestinationDocumentDTO::setDocumentNatureId()
     * @uses DestinationDocumentDTO::setFileName()
     * @uses DestinationDocumentDTO::setFileSize()
     * @uses DestinationDocumentDTO::setRepositoryId()
     * @uses DestinationDocumentDTO::setStoreUntil()
     * @uses DestinationDocumentDTO::setUploadDate()
     * @param string $cultureId
     * @param string $description
     * @param string $destinationCode
     * @param string $destinationType
     * @param string $documentNatureId
     * @param string $fileName
     * @param int $fileSize
     * @param int $repositoryId
     * @param string $storeUntil
     * @param string $uploadDate
     */
    public function __construct(?string $cultureId = null, ?string $description = null, ?string $destinationCode = null, ?string $destinationType = null, ?string $documentNatureId = null, ?string $fileName = null, ?int $fileSize = null, ?int $repositoryId = null, ?string $storeUntil = null, ?string $uploadDate = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setDescription($description)
            ->setDestinationCode($destinationCode)
            ->setDestinationType($destinationType)
            ->setDocumentNatureId($documentNatureId)
            ->setFileName($fileName)
            ->setFileSize($fileSize)
            ->setRepositoryId($repositoryId)
            ->setStoreUntil($storeUntil)
            ->setUploadDate($uploadDate);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\DestinationDocumentDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DestinationDocumentDTO
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
     * Get destinationCode value
     * @return string|null
     */
    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }
    /**
     * Set destinationCode value
     * @param string $destinationCode
     * @return \Pggns\MidocoApi\Order\StructType\DestinationDocumentDTO
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
        return $this;
    }
    /**
     * Get destinationType value
     * @return string|null
     */
    public function getDestinationType(): ?string
    {
        return $this->destinationType;
    }
    /**
     * Set destinationType value
     * @param string $destinationType
     * @return \Pggns\MidocoApi\Order\StructType\DestinationDocumentDTO
     */
    public function setDestinationType(?string $destinationType = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationType) && !is_string($destinationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationType, true), gettype($destinationType)), __LINE__);
        }
        $this->destinationType = $destinationType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DestinationDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DestinationDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DestinationDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DestinationDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DestinationDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DestinationDocumentDTO
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
