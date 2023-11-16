<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationKeyAssignDTO StructType
 * @subpackage Structs
 */
class DestinationKeyAssignDTO extends AbstractStructBase
{
    /**
     * The airportCode
     * @var string|null
     */
    protected ?string $airportCode = null;
    /**
     * The destinationKey
     * @var int|null
     */
    protected ?int $destinationKey = null;
    /**
     * Constructor method for DestinationKeyAssignDTO
     * @uses DestinationKeyAssignDTO::setAirportCode()
     * @uses DestinationKeyAssignDTO::setDestinationKey()
     * @param string $airportCode
     * @param int $destinationKey
     */
    public function __construct(?string $airportCode = null, ?int $destinationKey = null)
    {
        $this
            ->setAirportCode($airportCode)
            ->setDestinationKey($destinationKey);
    }
    /**
     * Get airportCode value
     * @return string|null
     */
    public function getAirportCode(): ?string
    {
        return $this->airportCode;
    }
    /**
     * Set airportCode value
     * @param string $airportCode
     * @return \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO
     */
    public function setAirportCode(?string $airportCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airportCode, true), gettype($airportCode)), __LINE__);
        }
        $this->airportCode = $airportCode;
        
        return $this;
    }
    /**
     * Get destinationKey value
     * @return int|null
     */
    public function getDestinationKey(): ?int
    {
        return $this->destinationKey;
    }
    /**
     * Set destinationKey value
     * @param int $destinationKey
     * @return \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO
     */
    public function setDestinationKey(?int $destinationKey = null): self
    {
        // validation for constraint: int
        if (!is_null($destinationKey) && !(is_int($destinationKey) || ctype_digit($destinationKey))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationKey, true), gettype($destinationKey)), __LINE__);
        }
        $this->destinationKey = $destinationKey;
        
        return $this;
    }
}
