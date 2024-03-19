<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingNoticeCommentsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingNoticeCommentsRequest extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The noticePosition
     * @var int|null
     */
    protected ?int $noticePosition = null;
    /**
     * Constructor method for GetBillingNoticeCommentsRequest
     * @uses GetBillingNoticeCommentsRequest::setDocumentId()
     * @uses GetBillingNoticeCommentsRequest::setNoticePosition()
     * @param int $documentId
     * @param int $noticePosition
     */
    public function __construct(?int $documentId = null, ?int $noticePosition = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setNoticePosition($noticePosition);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticeCommentsRequest
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
     * Get noticePosition value
     * @return int|null
     */
    public function getNoticePosition(): ?int
    {
        return $this->noticePosition;
    }
    /**
     * Set noticePosition value
     * @param int $noticePosition
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticeCommentsRequest
     */
    public function setNoticePosition(?int $noticePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($noticePosition) && !(is_int($noticePosition) || ctype_digit($noticePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noticePosition, true), gettype($noticePosition)), __LINE__);
        }
        $this->noticePosition = $noticePosition;
        
        return $this;
    }
}
