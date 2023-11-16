<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderMarginInfoRequest StructType
 * @subpackage Structs
 */
class SaveOrderMarginInfoRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The smallerMarginAllowed
     * @var bool|null
     */
    protected ?bool $smallerMarginAllowed = null;
    /**
     * Constructor method for SaveOrderMarginInfoRequest
     * @uses SaveOrderMarginInfoRequest::setOrderId()
     * @uses SaveOrderMarginInfoRequest::setComment()
     * @uses SaveOrderMarginInfoRequest::setSmallerMarginAllowed()
     * @param int $orderId
     * @param string $comment
     * @param bool $smallerMarginAllowed
     */
    public function __construct(?int $orderId = null, ?string $comment = null, ?bool $smallerMarginAllowed = null)
    {
        $this
            ->setOrderId($orderId)
            ->setComment($comment)
            ->setSmallerMarginAllowed($smallerMarginAllowed);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderMarginInfoRequest
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
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderMarginInfoRequest
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
        return $this;
    }
    /**
     * Get smallerMarginAllowed value
     * @return bool|null
     */
    public function getSmallerMarginAllowed(): ?bool
    {
        return $this->smallerMarginAllowed;
    }
    /**
     * Set smallerMarginAllowed value
     * @param bool $smallerMarginAllowed
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderMarginInfoRequest
     */
    public function setSmallerMarginAllowed(?bool $smallerMarginAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($smallerMarginAllowed) && !is_bool($smallerMarginAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($smallerMarginAllowed, true), gettype($smallerMarginAllowed)), __LINE__);
        }
        $this->smallerMarginAllowed = $smallerMarginAllowed;
        
        return $this;
    }
}
