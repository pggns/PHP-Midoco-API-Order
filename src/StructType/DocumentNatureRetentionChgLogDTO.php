<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentNatureRetentionChgLogDTO StructType
 * @subpackage Structs
 */
class DocumentNatureRetentionChgLogDTO extends AbstractStructBase
{
    /**
     * The action
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * The allowDeleteDocument
     * @var bool|null
     */
    protected ?bool $allowDeleteDocument = null;
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
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
     * The modifiableByUser
     * @var bool|null
     */
    protected ?bool $modifiableByUser = null;
    /**
     * The retentionMonths
     * @var int|null
     */
    protected ?int $retentionMonths = null;
    /**
     * The startRetentionPeriod
     * @var int|null
     */
    protected ?int $startRetentionPeriod = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for DocumentNatureRetentionChgLogDTO
     * @uses DocumentNatureRetentionChgLogDTO::setAction()
     * @uses DocumentNatureRetentionChgLogDTO::setAllowDeleteDocument()
     * @uses DocumentNatureRetentionChgLogDTO::setChangeId()
     * @uses DocumentNatureRetentionChgLogDTO::setDocumentId()
     * @uses DocumentNatureRetentionChgLogDTO::setDocumentNatureId()
     * @uses DocumentNatureRetentionChgLogDTO::setModifiableByUser()
     * @uses DocumentNatureRetentionChgLogDTO::setRetentionMonths()
     * @uses DocumentNatureRetentionChgLogDTO::setStartRetentionPeriod()
     * @uses DocumentNatureRetentionChgLogDTO::setTimestamp()
     * @uses DocumentNatureRetentionChgLogDTO::setUnitName()
     * @uses DocumentNatureRetentionChgLogDTO::setUserId()
     * @param string $action
     * @param bool $allowDeleteDocument
     * @param int $changeId
     * @param int $documentId
     * @param string $documentNatureId
     * @param bool $modifiableByUser
     * @param int $retentionMonths
     * @param int $startRetentionPeriod
     * @param string $timestamp
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?string $action = null, ?bool $allowDeleteDocument = null, ?int $changeId = null, ?int $documentId = null, ?string $documentNatureId = null, ?bool $modifiableByUser = null, ?int $retentionMonths = null, ?int $startRetentionPeriod = null, ?string $timestamp = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setAction($action)
            ->setAllowDeleteDocument($allowDeleteDocument)
            ->setChangeId($changeId)
            ->setDocumentId($documentId)
            ->setDocumentNatureId($documentNatureId)
            ->setModifiableByUser($modifiableByUser)
            ->setRetentionMonths($retentionMonths)
            ->setStartRetentionPeriod($startRetentionPeriod)
            ->setTimestamp($timestamp)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionChgLogDTO
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
        return $this;
    }
    /**
     * Get allowDeleteDocument value
     * @return bool|null
     */
    public function getAllowDeleteDocument(): ?bool
    {
        return $this->allowDeleteDocument;
    }
    /**
     * Set allowDeleteDocument value
     * @param bool $allowDeleteDocument
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionChgLogDTO
     */
    public function setAllowDeleteDocument(?bool $allowDeleteDocument = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowDeleteDocument) && !is_bool($allowDeleteDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowDeleteDocument, true), gettype($allowDeleteDocument)), __LINE__);
        }
        $this->allowDeleteDocument = $allowDeleteDocument;
        
        return $this;
    }
    /**
     * Get changeId value
     * @return int|null
     */
    public function getChangeId(): ?int
    {
        return $this->changeId;
    }
    /**
     * Set changeId value
     * @param int $changeId
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionChgLogDTO
     */
    public function setChangeId(?int $changeId = null): self
    {
        // validation for constraint: int
        if (!is_null($changeId) && !(is_int($changeId) || ctype_digit($changeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changeId, true), gettype($changeId)), __LINE__);
        }
        $this->changeId = $changeId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionChgLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionChgLogDTO
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
     * Get modifiableByUser value
     * @return bool|null
     */
    public function getModifiableByUser(): ?bool
    {
        return $this->modifiableByUser;
    }
    /**
     * Set modifiableByUser value
     * @param bool $modifiableByUser
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionChgLogDTO
     */
    public function setModifiableByUser(?bool $modifiableByUser = null): self
    {
        // validation for constraint: boolean
        if (!is_null($modifiableByUser) && !is_bool($modifiableByUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($modifiableByUser, true), gettype($modifiableByUser)), __LINE__);
        }
        $this->modifiableByUser = $modifiableByUser;
        
        return $this;
    }
    /**
     * Get retentionMonths value
     * @return int|null
     */
    public function getRetentionMonths(): ?int
    {
        return $this->retentionMonths;
    }
    /**
     * Set retentionMonths value
     * @param int $retentionMonths
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionChgLogDTO
     */
    public function setRetentionMonths(?int $retentionMonths = null): self
    {
        // validation for constraint: int
        if (!is_null($retentionMonths) && !(is_int($retentionMonths) || ctype_digit($retentionMonths))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($retentionMonths, true), gettype($retentionMonths)), __LINE__);
        }
        $this->retentionMonths = $retentionMonths;
        
        return $this;
    }
    /**
     * Get startRetentionPeriod value
     * @return int|null
     */
    public function getStartRetentionPeriod(): ?int
    {
        return $this->startRetentionPeriod;
    }
    /**
     * Set startRetentionPeriod value
     * @param int $startRetentionPeriod
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionChgLogDTO
     */
    public function setStartRetentionPeriod(?int $startRetentionPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($startRetentionPeriod) && !(is_int($startRetentionPeriod) || ctype_digit($startRetentionPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startRetentionPeriod, true), gettype($startRetentionPeriod)), __LINE__);
        }
        $this->startRetentionPeriod = $startRetentionPeriod;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionChgLogDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionChgLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionChgLogDTO
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
}
