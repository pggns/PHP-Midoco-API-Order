<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderNoticeCommentRequest StructType
 * @subpackage Structs
 */
class SaveOrderNoticeCommentRequest extends AbstractStructBase
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
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveOrderNoticeCommentRequest
     * @uses SaveOrderNoticeCommentRequest::setMidocoOrderNoticeComment()
     * @uses SaveOrderNoticeCommentRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO $midocoOrderNoticeComment
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO $midocoOrderNoticeComment = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoOrderNoticeComment($midocoOrderNoticeComment)
            ->setInternalVersion($internalVersion);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderNoticeCommentRequest
     */
    public function setMidocoOrderNoticeComment(?\Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO $midocoOrderNoticeComment = null): self
    {
        $this->MidocoOrderNoticeComment = $midocoOrderNoticeComment;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderNoticeCommentRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
