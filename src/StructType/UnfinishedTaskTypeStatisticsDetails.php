<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnfinishedTaskTypeStatisticsDetails StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UnfinishedTaskTypeStatisticsDetails extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The notePosition
     * @var int|null
     */
    protected ?int $notePosition = null;
    /**
     * The isWindowClosing
     * @var bool|null
     */
    protected ?bool $isWindowClosing = null;
    /**
     * Constructor method for UnfinishedTaskTypeStatisticsDetails
     * @uses UnfinishedTaskTypeStatisticsDetails::setOrderId()
     * @uses UnfinishedTaskTypeStatisticsDetails::setOrgUnit()
     * @uses UnfinishedTaskTypeStatisticsDetails::setNotePosition()
     * @uses UnfinishedTaskTypeStatisticsDetails::setIsWindowClosing()
     * @param int $orderId
     * @param string $orgUnit
     * @param int $notePosition
     * @param bool $isWindowClosing
     */
    public function __construct(?int $orderId = null, ?string $orgUnit = null, ?int $notePosition = null, ?bool $isWindowClosing = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrgUnit($orgUnit)
            ->setNotePosition($notePosition)
            ->setIsWindowClosing($isWindowClosing);
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
     * @return \Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails
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
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get notePosition value
     * @return int|null
     */
    public function getNotePosition(): ?int
    {
        return $this->notePosition;
    }
    /**
     * Set notePosition value
     * @param int $notePosition
     * @return \Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails
     */
    public function setNotePosition(?int $notePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($notePosition) && !(is_int($notePosition) || ctype_digit($notePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($notePosition, true), gettype($notePosition)), __LINE__);
        }
        $this->notePosition = $notePosition;
        
        return $this;
    }
    /**
     * Get isWindowClosing value
     * @return bool|null
     */
    public function getIsWindowClosing(): ?bool
    {
        return $this->isWindowClosing;
    }
    /**
     * Set isWindowClosing value
     * @param bool $isWindowClosing
     * @return \Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails
     */
    public function setIsWindowClosing(?bool $isWindowClosing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isWindowClosing) && !is_bool($isWindowClosing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isWindowClosing, true), gettype($isWindowClosing)), __LINE__);
        }
        $this->isWindowClosing = $isWindowClosing;
        
        return $this;
    }
}
