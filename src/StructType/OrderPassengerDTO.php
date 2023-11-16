<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderPassengerDTO StructType
 * @subpackage Structs
 */
class OrderPassengerDTO extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderPassengerAge
     * @var int|null
     */
    protected ?int $orderPassengerAge = null;
    /**
     * The orderPassengerBirthdate
     * @var string|null
     */
    protected ?string $orderPassengerBirthdate = null;
    /**
     * The orderPassengerFirstName
     * @var string|null
     */
    protected ?string $orderPassengerFirstName = null;
    /**
     * The orderPassengerName
     * @var string|null
     */
    protected ?string $orderPassengerName = null;
    /**
     * The orderPassengerSalutation
     * @var string|null
     */
    protected ?string $orderPassengerSalutation = null;
    /**
     * Constructor method for OrderPassengerDTO
     * @uses OrderPassengerDTO::setOrderId()
     * @uses OrderPassengerDTO::setOrderPassengerAge()
     * @uses OrderPassengerDTO::setOrderPassengerBirthdate()
     * @uses OrderPassengerDTO::setOrderPassengerFirstName()
     * @uses OrderPassengerDTO::setOrderPassengerName()
     * @uses OrderPassengerDTO::setOrderPassengerSalutation()
     * @param int $orderId
     * @param int $orderPassengerAge
     * @param string $orderPassengerBirthdate
     * @param string $orderPassengerFirstName
     * @param string $orderPassengerName
     * @param string $orderPassengerSalutation
     */
    public function __construct(?int $orderId = null, ?int $orderPassengerAge = null, ?string $orderPassengerBirthdate = null, ?string $orderPassengerFirstName = null, ?string $orderPassengerName = null, ?string $orderPassengerSalutation = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderPassengerAge($orderPassengerAge)
            ->setOrderPassengerBirthdate($orderPassengerBirthdate)
            ->setOrderPassengerFirstName($orderPassengerFirstName)
            ->setOrderPassengerName($orderPassengerName)
            ->setOrderPassengerSalutation($orderPassengerSalutation);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO
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
     * Get orderPassengerAge value
     * @return int|null
     */
    public function getOrderPassengerAge(): ?int
    {
        return $this->orderPassengerAge;
    }
    /**
     * Set orderPassengerAge value
     * @param int $orderPassengerAge
     * @return \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO
     */
    public function setOrderPassengerAge(?int $orderPassengerAge = null): self
    {
        // validation for constraint: int
        if (!is_null($orderPassengerAge) && !(is_int($orderPassengerAge) || ctype_digit($orderPassengerAge))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderPassengerAge, true), gettype($orderPassengerAge)), __LINE__);
        }
        $this->orderPassengerAge = $orderPassengerAge;
        
        return $this;
    }
    /**
     * Get orderPassengerBirthdate value
     * @return string|null
     */
    public function getOrderPassengerBirthdate(): ?string
    {
        return $this->orderPassengerBirthdate;
    }
    /**
     * Set orderPassengerBirthdate value
     * @param string $orderPassengerBirthdate
     * @return \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO
     */
    public function setOrderPassengerBirthdate(?string $orderPassengerBirthdate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderPassengerBirthdate) && !is_string($orderPassengerBirthdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderPassengerBirthdate, true), gettype($orderPassengerBirthdate)), __LINE__);
        }
        $this->orderPassengerBirthdate = $orderPassengerBirthdate;
        
        return $this;
    }
    /**
     * Get orderPassengerFirstName value
     * @return string|null
     */
    public function getOrderPassengerFirstName(): ?string
    {
        return $this->orderPassengerFirstName;
    }
    /**
     * Set orderPassengerFirstName value
     * @param string $orderPassengerFirstName
     * @return \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO
     */
    public function setOrderPassengerFirstName(?string $orderPassengerFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($orderPassengerFirstName) && !is_string($orderPassengerFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderPassengerFirstName, true), gettype($orderPassengerFirstName)), __LINE__);
        }
        $this->orderPassengerFirstName = $orderPassengerFirstName;
        
        return $this;
    }
    /**
     * Get orderPassengerName value
     * @return string|null
     */
    public function getOrderPassengerName(): ?string
    {
        return $this->orderPassengerName;
    }
    /**
     * Set orderPassengerName value
     * @param string $orderPassengerName
     * @return \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO
     */
    public function setOrderPassengerName(?string $orderPassengerName = null): self
    {
        // validation for constraint: string
        if (!is_null($orderPassengerName) && !is_string($orderPassengerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderPassengerName, true), gettype($orderPassengerName)), __LINE__);
        }
        $this->orderPassengerName = $orderPassengerName;
        
        return $this;
    }
    /**
     * Get orderPassengerSalutation value
     * @return string|null
     */
    public function getOrderPassengerSalutation(): ?string
    {
        return $this->orderPassengerSalutation;
    }
    /**
     * Set orderPassengerSalutation value
     * @param string $orderPassengerSalutation
     * @return \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO
     */
    public function setOrderPassengerSalutation(?string $orderPassengerSalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($orderPassengerSalutation) && !is_string($orderPassengerSalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderPassengerSalutation, true), gettype($orderPassengerSalutation)), __LINE__);
        }
        $this->orderPassengerSalutation = $orderPassengerSalutation;
        
        return $this;
    }
}
