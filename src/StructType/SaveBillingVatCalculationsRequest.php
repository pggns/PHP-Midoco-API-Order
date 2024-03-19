<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingVatCalculationsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBillingVatCalculationsRequest extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The documentInternalVersion
     * @var int|null
     */
    protected ?int $documentInternalVersion = null;
    /**
     * Constructor method for SaveBillingVatCalculationsRequest
     * @uses SaveBillingVatCalculationsRequest::setDocumentId()
     * @uses SaveBillingVatCalculationsRequest::setDocumentInternalVersion()
     * @param int $documentId
     * @param int $documentInternalVersion
     */
    public function __construct(?int $documentId = null, ?int $documentInternalVersion = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setDocumentInternalVersion($documentInternalVersion);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingVatCalculationsRequest
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
     * Get documentInternalVersion value
     * @return int|null
     */
    public function getDocumentInternalVersion(): ?int
    {
        return $this->documentInternalVersion;
    }
    /**
     * Set documentInternalVersion value
     * @param int $documentInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingVatCalculationsRequest
     */
    public function setDocumentInternalVersion(?int $documentInternalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($documentInternalVersion) && !(is_int($documentInternalVersion) || ctype_digit($documentInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentInternalVersion, true), gettype($documentInternalVersion)), __LINE__);
        }
        $this->documentInternalVersion = $documentInternalVersion;
        
        return $this;
    }
}
