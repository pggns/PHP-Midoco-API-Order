<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseOrderNoticeRequest StructType
 * @subpackage Structs
 */
class CloseOrderNoticeRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The finished
     * @var bool|null
     */
    protected ?bool $finished = null;
    /**
     * Constructor method for CloseOrderNoticeRequest
     * @uses CloseOrderNoticeRequest::setOrderId()
     * @uses CloseOrderNoticeRequest::setType()
     * @uses CloseOrderNoticeRequest::setFinished()
     * @param int $orderId
     * @param string $type
     * @param bool $finished
     */
    public function __construct(?int $orderId = null, ?string $type = null, ?bool $finished = null)
    {
        $this
            ->setOrderId($orderId)
            ->setType($type)
            ->setFinished($finished);
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
     * @return \Pggns\MidocoApi\Order\StructType\CloseOrderNoticeRequest
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
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\CloseOrderNoticeRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get finished value
     * @return bool|null
     */
    public function getFinished(): ?bool
    {
        return $this->finished;
    }
    /**
     * Set finished value
     * @param bool $finished
     * @return \Pggns\MidocoApi\Order\StructType\CloseOrderNoticeRequest
     */
    public function setFinished(?bool $finished = null): self
    {
        // validation for constraint: boolean
        if (!is_null($finished) && !is_bool($finished)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($finished, true), gettype($finished)), __LINE__);
        }
        $this->finished = $finished;
        
        return $this;
    }
}
