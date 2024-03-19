<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusPointDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BonusPointDTO extends AbstractStructBase
{
    /**
     * The bonusId
     * @var int|null
     */
    protected ?int $bonusId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The event
     * @var string|null
     */
    protected ?string $event = null;
    /**
     * The points
     * @var int|null
     */
    protected ?int $points = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for BonusPointDTO
     * @uses BonusPointDTO::setBonusId()
     * @uses BonusPointDTO::setCustomerId()
     * @uses BonusPointDTO::setEvent()
     * @uses BonusPointDTO::setPoints()
     * @uses BonusPointDTO::setTimestamp()
     * @uses BonusPointDTO::setTypeId()
     * @param int $bonusId
     * @param int $customerId
     * @param string $event
     * @param int $points
     * @param string $timestamp
     * @param string $typeId
     */
    public function __construct(?int $bonusId = null, ?int $customerId = null, ?string $event = null, ?int $points = null, ?string $timestamp = null, ?string $typeId = null)
    {
        $this
            ->setBonusId($bonusId)
            ->setCustomerId($customerId)
            ->setEvent($event)
            ->setPoints($points)
            ->setTimestamp($timestamp)
            ->setTypeId($typeId);
    }
    /**
     * Get bonusId value
     * @return int|null
     */
    public function getBonusId(): ?int
    {
        return $this->bonusId;
    }
    /**
     * Set bonusId value
     * @param int $bonusId
     * @return \Pggns\MidocoApi\Order\StructType\BonusPointDTO
     */
    public function setBonusId(?int $bonusId = null): self
    {
        // validation for constraint: int
        if (!is_null($bonusId) && !(is_int($bonusId) || ctype_digit($bonusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bonusId, true), gettype($bonusId)), __LINE__);
        }
        $this->bonusId = $bonusId;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\BonusPointDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get event value
     * @return string|null
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }
    /**
     * Set event value
     * @param string $event
     * @return \Pggns\MidocoApi\Order\StructType\BonusPointDTO
     */
    public function setEvent(?string $event = null): self
    {
        // validation for constraint: string
        if (!is_null($event) && !is_string($event)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($event, true), gettype($event)), __LINE__);
        }
        $this->event = $event;
        
        return $this;
    }
    /**
     * Get points value
     * @return int|null
     */
    public function getPoints(): ?int
    {
        return $this->points;
    }
    /**
     * Set points value
     * @param int $points
     * @return \Pggns\MidocoApi\Order\StructType\BonusPointDTO
     */
    public function setPoints(?int $points = null): self
    {
        // validation for constraint: int
        if (!is_null($points) && !(is_int($points) || ctype_digit($points))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($points, true), gettype($points)), __LINE__);
        }
        $this->points = $points;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Order\StructType\BonusPointDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusPointDTO
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
