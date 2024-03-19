<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentNatureMidocoTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DocumentNatureMidocoTypeDTO extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The midocoType
     * @var string|null
     */
    protected ?string $midocoType = null;
    /**
     * Constructor method for DocumentNatureMidocoTypeDTO
     * @uses DocumentNatureMidocoTypeDTO::setDocumentId()
     * @uses DocumentNatureMidocoTypeDTO::setMidocoType()
     * @param int $documentId
     * @param string $midocoType
     */
    public function __construct(?int $documentId = null, ?string $midocoType = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setMidocoType($midocoType);
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
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureMidocoTypeDTO
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
     * Get midocoType value
     * @return string|null
     */
    public function getMidocoType(): ?string
    {
        return $this->midocoType;
    }
    /**
     * Set midocoType value
     * @param string $midocoType
     * @return \Pggns\MidocoApi\Order\StructType\DocumentNatureMidocoTypeDTO
     */
    public function setMidocoType(?string $midocoType = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoType) && !is_string($midocoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoType, true), gettype($midocoType)), __LINE__);
        }
        $this->midocoType = $midocoType;
        
        return $this;
    }
}
