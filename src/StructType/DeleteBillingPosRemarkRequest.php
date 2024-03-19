<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBillingPosRemarkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteBillingPosRemarkRequest extends AbstractStructBase
{
    /**
     * The parentInternalVersion
     * @var int|null
     */
    protected ?int $parentInternalVersion = null;
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
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * Constructor method for DeleteBillingPosRemarkRequest
     * @uses DeleteBillingPosRemarkRequest::setParentInternalVersion()
     * @uses DeleteBillingPosRemarkRequest::setDocumentId()
     * @uses DeleteBillingPosRemarkRequest::setPosition()
     * @uses DeleteBillingPosRemarkRequest::setPositionId()
     * @param int $parentInternalVersion
     * @param int $documentId
     * @param int $position
     * @param int $positionId
     */
    public function __construct(?int $parentInternalVersion = null, ?int $documentId = null, ?int $position = null, ?int $positionId = null)
    {
        $this
            ->setParentInternalVersion($parentInternalVersion)
            ->setDocumentId($documentId)
            ->setPosition($position)
            ->setPositionId($positionId);
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPosRemarkRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPosRemarkRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPosRemarkRequest
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
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPosRemarkRequest
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
        return $this;
    }
}
