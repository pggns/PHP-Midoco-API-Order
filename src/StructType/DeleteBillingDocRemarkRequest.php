<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBillingDocRemarkRequest StructType
 * @subpackage Structs
 */
class DeleteBillingDocRemarkRequest extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The parentInternalVersion
     * @var int|null
     */
    protected ?int $parentInternalVersion = null;
    /**
     * Constructor method for DeleteBillingDocRemarkRequest
     * @uses DeleteBillingDocRemarkRequest::setDocumentId()
     * @uses DeleteBillingDocRemarkRequest::setPosition()
     * @uses DeleteBillingDocRemarkRequest::setParentInternalVersion()
     * @param int $documentId
     * @param int $position
     * @param int $parentInternalVersion
     */
    public function __construct(?int $documentId = null, ?int $position = null, ?int $parentInternalVersion = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setPosition($position)
            ->setParentInternalVersion($parentInternalVersion);
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingDocRemarkRequest
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingDocRemarkRequest
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get parentInternalVersion value
     * @return int|null
     */
    public function getParentInternalVersion(): ?int
    {
        return $this->parentInternalVersion;
    }
    /**
     * Set parentInternalVersion value
     * @param int $parentInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingDocRemarkRequest
     */
    public function setParentInternalVersion(?int $parentInternalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($parentInternalVersion) && !(is_int($parentInternalVersion) || ctype_digit($parentInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentInternalVersion, true), gettype($parentInternalVersion)), __LINE__);
        }
        $this->parentInternalVersion = $parentInternalVersion;
        
        return $this;
    }
}
