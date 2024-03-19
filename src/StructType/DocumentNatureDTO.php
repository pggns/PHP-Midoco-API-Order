<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentNatureDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DocumentNatureDTO extends AbstractStructBase
{
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
     * The systemOnly
     * @var bool|null
     */
    protected ?bool $systemOnly = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for DocumentNatureDTO
     * @uses DocumentNatureDTO::setDocumentId()
     * @uses DocumentNatureDTO::setDocumentNatureId()
     * @uses DocumentNatureDTO::setSystemOnly()
     * @uses DocumentNatureDTO::setUnitName()
     * @param int $documentId
     * @param string $documentNatureId
     * @param bool $systemOnly
     * @param string $unitName
     */
    public function __construct(?int $documentId = null, ?string $documentNatureId = null, ?bool $systemOnly = null, ?string $unitName = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setDocumentNatureId($documentNatureId)
            ->setSystemOnly($systemOnly)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureDTO
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
     * Get systemOnly value
     * @return bool|null
     */
    public function getSystemOnly(): ?bool
    {
        return $this->systemOnly;
    }
    /**
     * Set systemOnly value
     * @param bool $systemOnly
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureDTO
     */
    public function setSystemOnly(?bool $systemOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($systemOnly) && !is_bool($systemOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($systemOnly, true), gettype($systemOnly)), __LINE__);
        }
        $this->systemOnly = $systemOnly;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureDTO
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
