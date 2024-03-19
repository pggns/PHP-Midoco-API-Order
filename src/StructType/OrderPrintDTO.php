<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderPrintDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderPrintDTO extends AbstractStructBase
{
    /**
     * The lastPrintDate
     * @var string|null
     */
    protected ?string $lastPrintDate = null;
    /**
     * The lastPrintUser
     * @var int|null
     */
    protected ?int $lastPrintUser = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for OrderPrintDTO
     * @uses OrderPrintDTO::setLastPrintDate()
     * @uses OrderPrintDTO::setLastPrintUser()
     * @uses OrderPrintDTO::setOrderId()
     * @uses OrderPrintDTO::setTypeId()
     * @param string $lastPrintDate
     * @param int $lastPrintUser
     * @param int $orderId
     * @param string $typeId
     */
    public function __construct(?string $lastPrintDate = null, ?int $lastPrintUser = null, ?int $orderId = null, ?string $typeId = null)
    {
        $this
            ->setLastPrintDate($lastPrintDate)
            ->setLastPrintUser($lastPrintUser)
            ->setOrderId($orderId)
            ->setTypeId($typeId);
    }
    /**
     * Get lastPrintDate value
     * @return string|null
     */
    public function getLastPrintDate(): ?string
    {
        return $this->lastPrintDate;
    }
    /**
     * Set lastPrintDate value
     * @param string $lastPrintDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintDTO
     */
    public function setLastPrintDate(?string $lastPrintDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastPrintDate) && !is_string($lastPrintDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastPrintDate, true), gettype($lastPrintDate)), __LINE__);
        }
        $this->lastPrintDate = $lastPrintDate;
        
        return $this;
    }
    /**
     * Get lastPrintUser value
     * @return int|null
     */
    public function getLastPrintUser(): ?int
    {
        return $this->lastPrintUser;
    }
    /**
     * Set lastPrintUser value
     * @param int $lastPrintUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintDTO
     */
    public function setLastPrintUser(?int $lastPrintUser = null): self
    {
        // validation for constraint: int
        if (!is_null($lastPrintUser) && !(is_int($lastPrintUser) || ctype_digit($lastPrintUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastPrintUser, true), gettype($lastPrintUser)), __LINE__);
        }
        $this->lastPrintUser = $lastPrintUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintDTO
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
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
