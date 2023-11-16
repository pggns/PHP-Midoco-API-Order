<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplaintDocDTO StructType
 * @subpackage Structs
 */
class ComplaintDocDTO extends AbstractStructBase
{
    /**
     * The complaintId
     * @var int|null
     */
    protected ?int $complaintId = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * Constructor method for ComplaintDocDTO
     * @uses ComplaintDocDTO::setComplaintId()
     * @uses ComplaintDocDTO::setDocumentId()
     * @param int $complaintId
     * @param int $documentId
     */
    public function __construct(?int $complaintId = null, ?int $documentId = null)
    {
        $this
            ->setComplaintId($complaintId)
            ->setDocumentId($documentId);
    }
    /**
     * Get complaintId value
     * @return int|null
     */
    public function getComplaintId(): ?int
    {
        return $this->complaintId;
    }
    /**
     * Set complaintId value
     * @param int $complaintId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDocDTO
     */
    public function setComplaintId(?int $complaintId = null): self
    {
        // validation for constraint: int
        if (!is_null($complaintId) && !(is_int($complaintId) || ctype_digit($complaintId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($complaintId, true), gettype($complaintId)), __LINE__);
        }
        $this->complaintId = $complaintId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDocDTO
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
