<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensation2GoNotificationType StructType
 * @subpackage Structs
 */
class Compensation2GoNotificationType extends AbstractStructBase
{
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
     * The claimValue
     * @var float|null
     */
    protected ?float $claimValue = null;
    /**
     * The compensationValue
     * @var float|null
     */
    protected ?float $compensationValue = null;
    /**
     * The canceled
     * @var bool|null
     */
    protected ?bool $canceled = null;
    /**
     * The delay
     * @var int|null
     */
    protected ?int $delay = null;
    /**
     * Constructor method for Compensation2GoNotificationType
     * @uses Compensation2GoNotificationType::setStatus()
     * @uses Compensation2GoNotificationType::setItemId()
     * @uses Compensation2GoNotificationType::setPosition()
     * @uses Compensation2GoNotificationType::setUnitName()
     * @uses Compensation2GoNotificationType::setClaimValue()
     * @uses Compensation2GoNotificationType::setCompensationValue()
     * @uses Compensation2GoNotificationType::setCanceled()
     * @uses Compensation2GoNotificationType::setDelay()
     * @param int $status
     * @param int $itemId
     * @param int $position
     * @param string $unitName
     * @param float $claimValue
     * @param float $compensationValue
     * @param bool $canceled
     * @param int $delay
     */
    public function __construct(?int $status = null, ?int $itemId = null, ?int $position = null, ?string $unitName = null, ?float $claimValue = null, ?float $compensationValue = null, ?bool $canceled = null, ?int $delay = null)
    {
        $this
            ->setStatus($status)
            ->setItemId($itemId)
            ->setPosition($position)
            ->setUnitName($unitName)
            ->setClaimValue($claimValue)
            ->setCompensationValue($compensationValue)
            ->setCanceled($canceled)
            ->setDelay($delay);
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
     * @return \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType
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
     * @return \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType
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
     * @return \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType
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
     * @return \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType
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
     * Get claimValue value
     * @return float|null
     */
    public function getClaimValue(): ?float
    {
        return $this->claimValue;
    }
    /**
     * Set claimValue value
     * @param float $claimValue
     * @return \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType
     */
    public function setClaimValue(?float $claimValue = null): self
    {
        // validation for constraint: float
        if (!is_null($claimValue) && !(is_float($claimValue) || is_numeric($claimValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($claimValue, true), gettype($claimValue)), __LINE__);
        }
        $this->claimValue = $claimValue;
        
        return $this;
    }
    /**
     * Get compensationValue value
     * @return float|null
     */
    public function getCompensationValue(): ?float
    {
        return $this->compensationValue;
    }
    /**
     * Set compensationValue value
     * @param float $compensationValue
     * @return \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType
     */
    public function setCompensationValue(?float $compensationValue = null): self
    {
        // validation for constraint: float
        if (!is_null($compensationValue) && !(is_float($compensationValue) || is_numeric($compensationValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($compensationValue, true), gettype($compensationValue)), __LINE__);
        }
        $this->compensationValue = $compensationValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType
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
     * Get delay value
     * @return int|null
     */
    public function getDelay(): ?int
    {
        return $this->delay;
    }
    /**
     * Set delay value
     * @param int $delay
     * @return \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType
     */
    public function setDelay(?int $delay = null): self
    {
        // validation for constraint: int
        if (!is_null($delay) && !(is_int($delay) || ctype_digit($delay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delay, true), gettype($delay)), __LINE__);
        }
        $this->delay = $delay;
        
        return $this;
    }
}
