<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkVoidedBillingNoticeCommentRequest StructType
 * @subpackage Structs
 */
class MarkVoidedBillingNoticeCommentRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingNoticeComment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingNoticeComment
     * @var \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO $MidocoBillingNoticeComment = null;
    /**
     * The documentInternalVersion
     * @var int|null
     */
    protected ?int $documentInternalVersion = null;
    /**
     * Constructor method for MarkVoidedBillingNoticeCommentRequest
     * @uses MarkVoidedBillingNoticeCommentRequest::setMidocoBillingNoticeComment()
     * @uses MarkVoidedBillingNoticeCommentRequest::setDocumentInternalVersion()
     * @param \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO $midocoBillingNoticeComment
     * @param int $documentInternalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO $midocoBillingNoticeComment = null, ?int $documentInternalVersion = null)
    {
        $this
            ->setMidocoBillingNoticeComment($midocoBillingNoticeComment)
            ->setDocumentInternalVersion($documentInternalVersion);
    }
    /**
     * Get MidocoBillingNoticeComment value
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO|null
     */
    public function getMidocoBillingNoticeComment(): ?\Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO
    {
        return $this->MidocoBillingNoticeComment;
    }
    /**
     * Set MidocoBillingNoticeComment value
     * @param \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO $midocoBillingNoticeComment
     * @return \Pggns\MidocoApi\Order\StructType\MarkVoidedBillingNoticeCommentRequest
     */
    public function setMidocoBillingNoticeComment(?\Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO $midocoBillingNoticeComment = null): self
    {
        $this->MidocoBillingNoticeComment = $midocoBillingNoticeComment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MarkVoidedBillingNoticeCommentRequest
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
