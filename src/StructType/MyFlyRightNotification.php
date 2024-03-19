<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyFlyRightNotification StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MyFlyRightNotification extends AbstractStructBase
{
    /**
     * The midocoCustomerId
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * The status
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The CompensationAmount
     * @var float|null
     */
    protected ?float $CompensationAmount = null;
    /**
     * The totalSum
     * @var float|null
     */
    protected ?float $totalSum = null;
    /**
     * The CompensationAmountPerPassenger
     * @var float|null
     */
    protected ?float $CompensationAmountPerPassenger = null;
    /**
     * The canceled
     * @var bool|null
     */
    protected ?bool $canceled = null;
    /**
     * The delayAtArrival
     * @var int|null
     */
    protected ?int $delayAtArrival = null;
    /**
     * The tokenProcessUrl
     * @var string|null
     */
    protected ?string $tokenProcessUrl = null;
    /**
     * The tokenLetterUrl
     * @var string|null
     */
    protected ?string $tokenLetterUrl = null;
    /**
     * Constructor method for MyFlyRightNotification
     * @uses MyFlyRightNotification::setMidocoCustomerId()
     * @uses MyFlyRightNotification::setStatus()
     * @uses MyFlyRightNotification::setItemId()
     * @uses MyFlyRightNotification::setPosition()
     * @uses MyFlyRightNotification::setUnitName()
     * @uses MyFlyRightNotification::setCompensationAmount()
     * @uses MyFlyRightNotification::setTotalSum()
     * @uses MyFlyRightNotification::setCompensationAmountPerPassenger()
     * @uses MyFlyRightNotification::setCanceled()
     * @uses MyFlyRightNotification::setDelayAtArrival()
     * @uses MyFlyRightNotification::setTokenProcessUrl()
     * @uses MyFlyRightNotification::setTokenLetterUrl()
     * @param int $midocoCustomerId
     * @param int $status
     * @param int $itemId
     * @param int $position
     * @param string $unitName
     * @param float $compensationAmount
     * @param float $totalSum
     * @param float $compensationAmountPerPassenger
     * @param bool $canceled
     * @param int $delayAtArrival
     * @param string $tokenProcessUrl
     * @param string $tokenLetterUrl
     */
    public function __construct(?int $midocoCustomerId = null, ?int $status = null, ?int $itemId = null, ?int $position = null, ?string $unitName = null, ?float $compensationAmount = null, ?float $totalSum = null, ?float $compensationAmountPerPassenger = null, ?bool $canceled = null, ?int $delayAtArrival = null, ?string $tokenProcessUrl = null, ?string $tokenLetterUrl = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setStatus($status)
            ->setItemId($itemId)
            ->setPosition($position)
            ->setUnitName($unitName)
            ->setCompensationAmount($compensationAmount)
            ->setTotalSum($totalSum)
            ->setCompensationAmountPerPassenger($compensationAmountPerPassenger)
            ->setCanceled($canceled)
            ->setDelayAtArrival($delayAtArrival)
            ->setTokenProcessUrl($tokenProcessUrl)
            ->setTokenLetterUrl($tokenLetterUrl);
    }
    /**
     * Get midocoCustomerId value
     * @return int|null
     */
    public function getMidocoCustomerId(): ?int
    {
        return $this->midocoCustomerId;
    }
    /**
     * Set midocoCustomerId value
     * @param int $midocoCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
     */
    public function setMidocoCustomerId(?int $midocoCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCustomerId) && !(is_int($midocoCustomerId) || ctype_digit($midocoCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCustomerId, true), gettype($midocoCustomerId)), __LINE__);
        }
        $this->midocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get status value
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
     */
    public function setStatus(?int $status = null): self
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
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
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get CompensationAmount value
     * @return float|null
     */
    public function getCompensationAmount(): ?float
    {
        return $this->CompensationAmount;
    }
    /**
     * Set CompensationAmount value
     * @param float $compensationAmount
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
     */
    public function setCompensationAmount(?float $compensationAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($compensationAmount) && !(is_float($compensationAmount) || is_numeric($compensationAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($compensationAmount, true), gettype($compensationAmount)), __LINE__);
        }
        $this->CompensationAmount = $compensationAmount;
        
        return $this;
    }
    /**
     * Get totalSum value
     * @return float|null
     */
    public function getTotalSum(): ?float
    {
        return $this->totalSum;
    }
    /**
     * Set totalSum value
     * @param float $totalSum
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
     */
    public function setTotalSum(?float $totalSum = null): self
    {
        // validation for constraint: float
        if (!is_null($totalSum) && !(is_float($totalSum) || is_numeric($totalSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalSum, true), gettype($totalSum)), __LINE__);
        }
        $this->totalSum = $totalSum;
        
        return $this;
    }
    /**
     * Get CompensationAmountPerPassenger value
     * @return float|null
     */
    public function getCompensationAmountPerPassenger(): ?float
    {
        return $this->CompensationAmountPerPassenger;
    }
    /**
     * Set CompensationAmountPerPassenger value
     * @param float $compensationAmountPerPassenger
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
     */
    public function setCompensationAmountPerPassenger(?float $compensationAmountPerPassenger = null): self
    {
        // validation for constraint: float
        if (!is_null($compensationAmountPerPassenger) && !(is_float($compensationAmountPerPassenger) || is_numeric($compensationAmountPerPassenger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($compensationAmountPerPassenger, true), gettype($compensationAmountPerPassenger)), __LINE__);
        }
        $this->CompensationAmountPerPassenger = $compensationAmountPerPassenger;
        
        return $this;
    }
    /**
     * Get canceled value
     * @return bool|null
     */
    public function getCanceled(): ?bool
    {
        return $this->canceled;
    }
    /**
     * Set canceled value
     * @param bool $canceled
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
     */
    public function setCanceled(?bool $canceled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($canceled) && !is_bool($canceled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canceled, true), gettype($canceled)), __LINE__);
        }
        $this->canceled = $canceled;
        
        return $this;
    }
    /**
     * Get delayAtArrival value
     * @return int|null
     */
    public function getDelayAtArrival(): ?int
    {
        return $this->delayAtArrival;
    }
    /**
     * Set delayAtArrival value
     * @param int $delayAtArrival
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
     */
    public function setDelayAtArrival(?int $delayAtArrival = null): self
    {
        // validation for constraint: int
        if (!is_null($delayAtArrival) && !(is_int($delayAtArrival) || ctype_digit($delayAtArrival))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delayAtArrival, true), gettype($delayAtArrival)), __LINE__);
        }
        $this->delayAtArrival = $delayAtArrival;
        
        return $this;
    }
    /**
     * Get tokenProcessUrl value
     * @return string|null
     */
    public function getTokenProcessUrl(): ?string
    {
        return $this->tokenProcessUrl;
    }
    /**
     * Set tokenProcessUrl value
     * @param string $tokenProcessUrl
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
     */
    public function setTokenProcessUrl(?string $tokenProcessUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenProcessUrl) && !is_string($tokenProcessUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenProcessUrl, true), gettype($tokenProcessUrl)), __LINE__);
        }
        $this->tokenProcessUrl = $tokenProcessUrl;
        
        return $this;
    }
    /**
     * Get tokenLetterUrl value
     * @return string|null
     */
    public function getTokenLetterUrl(): ?string
    {
        return $this->tokenLetterUrl;
    }
    /**
     * Set tokenLetterUrl value
     * @param string $tokenLetterUrl
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
     */
    public function setTokenLetterUrl(?string $tokenLetterUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenLetterUrl) && !is_string($tokenLetterUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenLetterUrl, true), gettype($tokenLetterUrl)), __LINE__);
        }
        $this->tokenLetterUrl = $tokenLetterUrl;
        
        return $this;
    }
}
