<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCalendarEvent StructType
 * @subpackage Structs
 */
class MidocoCalendarEvent extends AbstractStructBase
{
    /**
     * The organizer
     * @var string|null
     */
    protected ?string $organizer = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The summary
     * @var string|null
     */
    protected ?string $summary = null;
    /**
     * The location
     * @var string|null
     */
    protected ?string $location = null;
    /**
     * The startTime
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The endTime
     * @var string|null
     */
    protected ?string $endTime = null;
    /**
     * Constructor method for MidocoCalendarEvent
     * @uses MidocoCalendarEvent::setOrganizer()
     * @uses MidocoCalendarEvent::setDescription()
     * @uses MidocoCalendarEvent::setSummary()
     * @uses MidocoCalendarEvent::setLocation()
     * @uses MidocoCalendarEvent::setStartTime()
     * @uses MidocoCalendarEvent::setEndTime()
     * @param string $organizer
     * @param string $description
     * @param string $summary
     * @param string $location
     * @param string $startTime
     * @param string $endTime
     */
    public function __construct(?string $organizer = null, ?string $description = null, ?string $summary = null, ?string $location = null, ?string $startTime = null, ?string $endTime = null)
    {
        $this
            ->setOrganizer($organizer)
            ->setDescription($description)
            ->setSummary($summary)
            ->setLocation($location)
            ->setStartTime($startTime)
            ->setEndTime($endTime);
    }
    /**
     * Get organizer value
     * @return string|null
     */
    public function getOrganizer(): ?string
    {
        return $this->organizer;
    }
    /**
     * Set organizer value
     * @param string $organizer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalendarEvent
     */
    public function setOrganizer(?string $organizer = null): self
    {
        // validation for constraint: string
        if (!is_null($organizer) && !is_string($organizer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizer, true), gettype($organizer)), __LINE__);
        }
        $this->organizer = $organizer;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalendarEvent
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get summary value
     * @return string|null
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }
    /**
     * Set summary value
     * @param string $summary
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalendarEvent
     */
    public function setSummary(?string $summary = null): self
    {
        // validation for constraint: string
        if (!is_null($summary) && !is_string($summary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($summary, true), gettype($summary)), __LINE__);
        }
        $this->summary = $summary;
        
        return $this;
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalendarEvent
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->location = $location;
        
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalendarEvent
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        
        return $this;
    }
    /**
     * Get endTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }
    /**
     * Set endTime value
     * @param string $endTime
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalendarEvent
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->endTime = $endTime;
        
        return $this;
    }
}
