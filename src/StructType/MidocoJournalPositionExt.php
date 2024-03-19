<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoJournalPositionExt StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoJournalPositionExt extends BookingJournalDTO
{
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
    /**
     * Constructor method for MidocoJournalPositionExt
     * @uses MidocoJournalPositionExt::setType()
     * @uses MidocoJournalPositionExt::setBooked()
     * @param string $type
     * @param bool $booked
     */
    public function __construct(?string $type = null, ?bool $booked = null)
    {
        $this
            ->setType($type)
            ->setBooked($booked);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\MidocoJournalPositionExt
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get booked value
     * @return bool|null
     */
    public function getBooked(): ?bool
    {
        return $this->booked;
    }
    /**
     * Set booked value
     * @param bool $booked
     * @return \Pggns\MidocoApi\Order\StructType\MidocoJournalPositionExt
     */
    public function setBooked(?bool $booked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($booked) && !is_bool($booked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($booked, true), gettype($booked)), __LINE__);
        }
        $this->booked = $booked;
        
        return $this;
    }
}
