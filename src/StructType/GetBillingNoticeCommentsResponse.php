<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingNoticeCommentsResponse StructType
 * @subpackage Structs
 */
class GetBillingNoticeCommentsResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingNoticeComment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingNoticeComment
     * @var \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO[]
     */
    protected array $MidocoBillingNoticeComment = [];
    /**
     * Constructor method for GetBillingNoticeCommentsResponse
     * @uses GetBillingNoticeCommentsResponse::setMidocoBillingNoticeComment()
     * @param \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO[] $midocoBillingNoticeComment
     */
    public function __construct(array $midocoBillingNoticeComment = [])
    {
        $this
            ->setMidocoBillingNoticeComment($midocoBillingNoticeComment);
    }
    /**
     * Get MidocoBillingNoticeComment value
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO[]
     */
    public function getMidocoBillingNoticeComment(): array
    {
        return $this->MidocoBillingNoticeComment;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingNoticeComment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingNoticeComment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingNoticeCommentForArrayConstraintsFromSetMidocoBillingNoticeComment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingNoticeCommentsResponseMidocoBillingNoticeCommentItem) {
            // validation for constraint: itemType
            if (!$getBillingNoticeCommentsResponseMidocoBillingNoticeCommentItem instanceof \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO) {
                $invalidValues[] = is_object($getBillingNoticeCommentsResponseMidocoBillingNoticeCommentItem) ? get_class($getBillingNoticeCommentsResponseMidocoBillingNoticeCommentItem) : sprintf('%s(%s)', gettype($getBillingNoticeCommentsResponseMidocoBillingNoticeCommentItem), var_export($getBillingNoticeCommentsResponseMidocoBillingNoticeCommentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingNoticeComment property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingNoticeComment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO[] $midocoBillingNoticeComment
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticeCommentsResponse
     */
    public function setMidocoBillingNoticeComment(array $midocoBillingNoticeComment = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingNoticeCommentArrayErrorMessage = self::validateMidocoBillingNoticeCommentForArrayConstraintsFromSetMidocoBillingNoticeComment($midocoBillingNoticeComment))) {
            throw new InvalidArgumentException($midocoBillingNoticeCommentArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingNoticeComment = $midocoBillingNoticeComment;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingNoticeComment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticeCommentsResponse
     */
    public function addToMidocoBillingNoticeComment(\Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingNoticeComment property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingNoticeComment[] = $item;
        
        return $this;
    }
}
