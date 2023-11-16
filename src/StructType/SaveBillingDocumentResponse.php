<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveBillingDocument --- Save a document (error, if the document is already assigned a document_no). Request: - a BillingDocumentDTO - zero or more BillingPositionDTO Calculate the new total_price
 * @subpackage Structs
 */
class SaveBillingDocumentResponse extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * Constructor method for SaveBillingDocumentResponse
     * @uses SaveBillingDocumentResponse::setDocumentId()
     * @param int $documentId
     */
    public function __construct(?int $documentId = null)
    {
        $this
            ->setDocumentId($documentId);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocumentResponse
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
}
