<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingNoticeCommentResponse StructType
 * @subpackage Structs
 */
class SaveBillingNoticeCommentResponse extends AbstractStructBase
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
     * Constructor method for SaveBillingNoticeCommentResponse
     * @uses SaveBillingNoticeCommentResponse::setMidocoBillingNoticeComment()
     * @param \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO $midocoBillingNoticeComment
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO $midocoBillingNoticeComment = null)
    {
        $this
            ->setMidocoBillingNoticeComment($midocoBillingNoticeComment);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingNoticeCommentResponse
     */
    public function setMidocoBillingNoticeComment(?\Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO $midocoBillingNoticeComment = null): self
    {
        $this->MidocoBillingNoticeComment = $midocoBillingNoticeComment;
        
        return $this;
    }
}
