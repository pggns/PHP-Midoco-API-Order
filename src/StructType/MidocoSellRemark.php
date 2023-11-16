<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellRemark StructType
 * @subpackage Structs
 */
class MidocoSellRemark extends SellRemarkDTO
{
    /**
     * The passengerAssignment
     * @var string|null
     */
    protected ?string $passengerAssignment = null;
    /**
     * The segmentAssignment
     * @var string|null
     */
    protected ?string $segmentAssignment = null;
    /**
     * Constructor method for MidocoSellRemark
     * @uses MidocoSellRemark::setPassengerAssignment()
     * @uses MidocoSellRemark::setSegmentAssignment()
     * @param string $passengerAssignment
     * @param string $segmentAssignment
     */
    public function __construct(?string $passengerAssignment = null, ?string $segmentAssignment = null)
    {
        $this
            ->setPassengerAssignment($passengerAssignment)
            ->setSegmentAssignment($segmentAssignment);
    }
    /**
     * Get passengerAssignment value
     * @return string|null
     */
    public function getPassengerAssignment(): ?string
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param string $passengerAssignment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellRemark
     */
    public function setPassengerAssignment(?string $passengerAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerAssignment) && !is_string($passengerAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
        return $this;
    }
    /**
     * Get segmentAssignment value
     * @return string|null
     */
    public function getSegmentAssignment(): ?string
    {
        return $this->segmentAssignment;
    }
    /**
     * Set segmentAssignment value
     * @param string $segmentAssignment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellRemark
     */
    public function setSegmentAssignment(?string $segmentAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentAssignment) && !is_string($segmentAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentAssignment, true), gettype($segmentAssignment)), __LINE__);
        }
        $this->segmentAssignment = $segmentAssignment;
        
        return $this;
    }
}
