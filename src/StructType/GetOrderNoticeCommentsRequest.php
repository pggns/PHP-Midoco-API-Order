<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderNoticeCommentsRequest StructType
 * @subpackage Structs
 */
class GetOrderNoticeCommentsRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The noticePosition
     * @var int|null
     */
    protected ?int $noticePosition = null;
    /**
     * Constructor method for GetOrderNoticeCommentsRequest
     * @uses GetOrderNoticeCommentsRequest::setOrderId()
     * @uses GetOrderNoticeCommentsRequest::setNoticePosition()
     * @param int $orderId
     * @param int $noticePosition
     */
    public function __construct(?int $orderId = null, ?int $noticePosition = null)
    {
        $this
            ->setOrderId($orderId)
            ->setNoticePosition($noticePosition);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderNoticeCommentsRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderNoticeCommentsRequest
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
