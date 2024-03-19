<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetOrderLastWorkingUserRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetOrderLastWorkingUserRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The doClear
     * @var bool|null
     */
    protected ?bool $doClear = null;
    /**
     * Constructor method for SetOrderLastWorkingUserRequest
     * @uses SetOrderLastWorkingUserRequest::setOrderId()
     * @uses SetOrderLastWorkingUserRequest::setDoClear()
     * @param int $orderId
     * @param bool $doClear
     */
    public function __construct(?int $orderId = null, ?bool $doClear = null)
    {
        $this
            ->setOrderId($orderId)
            ->setDoClear($doClear);
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
     * @return \Pggns\MidocoApi\Order\StructType\SetOrderLastWorkingUserRequest
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
     * Get doClear value
     * @return bool|null
     */
    public function getDoClear(): ?bool
    {
        return $this->doClear;
    }
    /**
     * Set doClear value
     * @param bool $doClear
     * @return \Pggns\MidocoApi\Order\StructType\SetOrderLastWorkingUserRequest
     */
    public function setDoClear(?bool $doClear = null): self
    {
        // validation for constraint: boolean
        if (!is_null($doClear) && !is_bool($doClear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doClear, true), gettype($doClear)), __LINE__);
        }
        $this->doClear = $doClear;
        
        return $this;
    }
}
