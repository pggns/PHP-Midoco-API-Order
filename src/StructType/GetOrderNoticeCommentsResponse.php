<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderNoticeCommentsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderNoticeCommentsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderNoticeComment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderNoticeComment
     * @var \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO[]
     */
    protected ?array $MidocoOrderNoticeComment = null;
    /**
     * Constructor method for GetOrderNoticeCommentsResponse
     * @uses GetOrderNoticeCommentsResponse::setMidocoOrderNoticeComment()
     * @param \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO[] $midocoOrderNoticeComment
     */
    public function __construct(?array $midocoOrderNoticeComment = null)
    {
        $this
            ->setMidocoOrderNoticeComment($midocoOrderNoticeComment);
    }
    /**
     * Get MidocoOrderNoticeComment value
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO[]
     */
    public function getMidocoOrderNoticeComment(): ?array
    {
        return $this->MidocoOrderNoticeComment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderNoticeComment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderNoticeComment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderNoticeCommentForArrayConstraintFromSetMidocoOrderNoticeComment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderNoticeCommentsResponseMidocoOrderNoticeCommentItem) {
            // validation for constraint: itemType
            if (!$getOrderNoticeCommentsResponseMidocoOrderNoticeCommentItem instanceof \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO) {
                $invalidValues[] = is_object($getOrderNoticeCommentsResponseMidocoOrderNoticeCommentItem) ? get_class($getOrderNoticeCommentsResponseMidocoOrderNoticeCommentItem) : sprintf('%s(%s)', gettype($getOrderNoticeCommentsResponseMidocoOrderNoticeCommentItem), var_export($getOrderNoticeCommentsResponseMidocoOrderNoticeCommentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderNoticeComment property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderNoticeComment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO[] $midocoOrderNoticeComment
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderNoticeCommentsResponse
     */
    public function setMidocoOrderNoticeComment(?array $midocoOrderNoticeComment = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderNoticeCommentArrayErrorMessage = self::validateMidocoOrderNoticeCommentForArrayConstraintFromSetMidocoOrderNoticeComment($midocoOrderNoticeComment))) {
            throw new InvalidArgumentException($midocoOrderNoticeCommentArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderNoticeComment = $midocoOrderNoticeComment;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderNoticeComment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderNoticeCommentsResponse
     */
    public function addToMidocoOrderNoticeComment(\Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderNoticeComment property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderNoticeCommentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderNoticeComment[] = $item;
        
        return $this;
    }
}
