<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentNatureRetentionDTO StructType
 * @subpackage Structs
 */
class DocumentNatureRetentionDTO extends AbstractStructBase
{
    /**
     * The allowDeleteDocument
     * @var bool|null
     */
    protected ?bool $allowDeleteDocument = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
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
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for DocumentNatureRetentionDTO
     * @uses DocumentNatureRetentionDTO::setAllowDeleteDocument()
     * @uses DocumentNatureRetentionDTO::setDocumentId()
     * @uses DocumentNatureRetentionDTO::setModifiableByUser()
     * @uses DocumentNatureRetentionDTO::setRetentionMonths()
     * @uses DocumentNatureRetentionDTO::setStartRetentionPeriod()
     * @uses DocumentNatureRetentionDTO::setUnitName()
     * @param bool $allowDeleteDocument
     * @param int $documentId
     * @param bool $modifiableByUser
     * @param int $retentionMonths
     * @param int $startRetentionPeriod
     * @param string $unitName
     */
    public function __construct(?bool $allowDeleteDocument = null, ?int $documentId = null, ?bool $modifiableByUser = null, ?int $retentionMonths = null, ?int $startRetentionPeriod = null, ?string $unitName = null)
    {
        $this
            ->setAllowDeleteDocument($allowDeleteDocument)
            ->setDocumentId($documentId)
            ->setModifiableByUser($modifiableByUser)
            ->setRetentionMonths($retentionMonths)
            ->setStartRetentionPeriod($startRetentionPeriod)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureRetentionDTO
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
}
