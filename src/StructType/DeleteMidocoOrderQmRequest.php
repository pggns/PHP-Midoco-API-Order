<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoOrderQmRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoOrderQmRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The questionId
     * @var int|null
     */
    protected ?int $questionId = null;
    /**
     * Constructor method for DeleteMidocoOrderQmRequest
     * @uses DeleteMidocoOrderQmRequest::setOrderId()
     * @uses DeleteMidocoOrderQmRequest::setQuestionId()
     * @param int $orderId
     * @param int $questionId
     */
    public function __construct(?int $orderId = null, ?int $questionId = null)
    {
        $this
            ->setOrderId($orderId)
            ->setQuestionId($questionId);
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoOrderQmRequest
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
     * Get questionId value
     * @return int|null
     */
    public function getQuestionId(): ?int
    {
        return $this->questionId;
    }
    /**
     * Set questionId value
     * @param int $questionId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoOrderQmRequest
     */
    public function setQuestionId(?int $questionId = null): self
    {
        // validation for constraint: int
        if (!is_null($questionId) && !(is_int($questionId) || ctype_digit($questionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($questionId, true), gettype($questionId)), __LINE__);
        }
        $this->questionId = $questionId;
        
        return $this;
    }
}
