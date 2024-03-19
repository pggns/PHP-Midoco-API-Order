<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderNoticeCommentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrderNoticeCommentResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderNoticeComment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderNoticeComment
     * @var \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO $MidocoOrderNoticeComment = null;
    /**
     * Constructor method for SaveOrderNoticeCommentResponse
     * @uses SaveOrderNoticeCommentResponse::setMidocoOrderNoticeComment()
     * @param \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO $midocoOrderNoticeComment
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO $midocoOrderNoticeComment = null)
    {
        $this
            ->setMidocoOrderNoticeComment($midocoOrderNoticeComment);
    }
    /**
     * Get MidocoOrderNoticeComment value
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO|null
     */
    public function getMidocoOrderNoticeComment(): ?\Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO
    {
        return $this->MidocoOrderNoticeComment;
    }
    /**
     * Set MidocoOrderNoticeComment value
     * @param \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO $midocoOrderNoticeComment
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderNoticeCommentResponse
     */
    public function setMidocoOrderNoticeComment(?\Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO $midocoOrderNoticeComment = null): self
    {
        $this->MidocoOrderNoticeComment = $midocoOrderNoticeComment;
        
        return $this;
    }
}
