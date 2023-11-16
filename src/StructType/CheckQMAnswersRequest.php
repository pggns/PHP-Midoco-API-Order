<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckQMAnswersRequest StructType
 * @subpackage Structs
 */
class CheckQMAnswersRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The noticeText
     * @var string|null
     */
    protected ?string $noticeText = null;
    /**
     * Constructor method for CheckQMAnswersRequest
     * @uses CheckQMAnswersRequest::setOrderId()
     * @uses CheckQMAnswersRequest::setTaskType()
     * @uses CheckQMAnswersRequest::setNoticeText()
     * @param int $orderId
     * @param string $taskType
     * @param string $noticeText
     */
    public function __construct(?int $orderId = null, ?string $taskType = null, ?string $noticeText = null)
    {
        $this
            ->setOrderId($orderId)
            ->setTaskType($taskType)
            ->setNoticeText($noticeText);
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
     * @return \Pggns\MidocoApi\Order\StructType\CheckQMAnswersRequest
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
     * Get taskType value
     * @return string|null
     */
    public function getTaskType(): ?string
    {
        return $this->taskType;
    }
    /**
     * Set taskType value
     * @param string $taskType
     * @return \Pggns\MidocoApi\Order\StructType\CheckQMAnswersRequest
     */
    public function setTaskType(?string $taskType = null): self
    {
        // validation for constraint: string
        if (!is_null($taskType) && !is_string($taskType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskType, true), gettype($taskType)), __LINE__);
        }
        $this->taskType = $taskType;
        
        return $this;
    }
    /**
     * Get noticeText value
     * @return string|null
     */
    public function getNoticeText(): ?string
    {
        return $this->noticeText;
    }
    /**
     * Set noticeText value
     * @param string $noticeText
     * @return \Pggns\MidocoApi\Order\StructType\CheckQMAnswersRequest
     */
    public function setNoticeText(?string $noticeText = null): self
    {
        // validation for constraint: string
        if (!is_null($noticeText) && !is_string($noticeText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noticeText, true), gettype($noticeText)), __LINE__);
        }
        $this->noticeText = $noticeText;
        
        return $this;
    }
}
