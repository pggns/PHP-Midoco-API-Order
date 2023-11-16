<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderTask StructType
 * @subpackage Structs
 */
class MidocoOrderTask extends AbstractStructBase
{
    /**
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The unit
     * @var string|null
     */
    protected ?string $unit = null;
    /**
     * Constructor method for MidocoOrderTask
     * @uses MidocoOrderTask::setContactId()
     * @uses MidocoOrderTask::setOrderId()
     * @uses MidocoOrderTask::setPosition()
     * @uses MidocoOrderTask::setUnit()
     * @param int $contactId
     * @param int $orderId
     * @param int $position
     * @param string $unit
     */
    public function __construct(?int $contactId = null, ?int $orderId = null, ?int $position = null, ?string $unit = null)
    {
        $this
            ->setContactId($contactId)
            ->setOrderId($orderId)
            ->setPosition($position)
            ->setUnit($unit);
    }
    /**
     * Get contactId value
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param int $contactId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderTask
     */
    public function setContactId(?int $contactId = null): self
    {
        // validation for constraint: int
        if (!is_null($contactId) && !(is_int($contactId) || ctype_digit($contactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactId, true), gettype($contactId)), __LINE__);
        }
        $this->contactId = $contactId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderTask
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderTask
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get unit value
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @param string $unit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderTask
     */
    public function setUnit(?string $unit = null): self
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit, true), gettype($unit)), __LINE__);
        }
        $this->unit = $unit;
        
        return $this;
    }
}
