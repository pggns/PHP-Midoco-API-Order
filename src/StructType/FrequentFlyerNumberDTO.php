<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrequentFlyerNumberDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FrequentFlyerNumberDTO extends AbstractStructBase
{
    /**
     * The active
     * @var bool|null
     */
    protected ?bool $active = null;
    /**
     * The airlineCode
     * @var string|null
     */
    protected ?string $airlineCode = null;
    /**
     * The airlineTier
     * @var string|null
     */
    protected ?string $airlineTier = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The ffnNumber
     * @var string|null
     */
    protected ?string $ffnNumber = null;
    /**
     * Constructor method for FrequentFlyerNumberDTO
     * @uses FrequentFlyerNumberDTO::setActive()
     * @uses FrequentFlyerNumberDTO::setAirlineCode()
     * @uses FrequentFlyerNumberDTO::setAirlineTier()
     * @uses FrequentFlyerNumberDTO::setCustomerId()
     * @uses FrequentFlyerNumberDTO::setFfnNumber()
     * @param bool $active
     * @param string $airlineCode
     * @param string $airlineTier
     * @param int $customerId
     * @param string $ffnNumber
     */
    public function __construct(?bool $active = null, ?string $airlineCode = null, ?string $airlineTier = null, ?int $customerId = null, ?string $ffnNumber = null)
    {
        $this
            ->setActive($active)
            ->setAirlineCode($airlineCode)
            ->setAirlineTier($airlineTier)
            ->setCustomerId($customerId)
            ->setFfnNumber($ffnNumber);
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO
     */
    public function setActive(?bool $active = null): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        
        return $this;
    }
    /**
     * Get airlineCode value
     * @return string|null
     */
    public function getAirlineCode(): ?string
    {
        return $this->airlineCode;
    }
    /**
     * Set airlineCode value
     * @param string $airlineCode
     * @return \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO
     */
    public function setAirlineCode(?string $airlineCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineCode, true), gettype($airlineCode)), __LINE__);
        }
        $this->airlineCode = $airlineCode;
        
        return $this;
    }
    /**
     * Get airlineTier value
     * @return string|null
     */
    public function getAirlineTier(): ?string
    {
        return $this->airlineTier;
    }
    /**
     * Set airlineTier value
     * @param string $airlineTier
     * @return \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO
     */
    public function setAirlineTier(?string $airlineTier = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineTier) && !is_string($airlineTier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineTier, true), gettype($airlineTier)), __LINE__);
        }
        $this->airlineTier = $airlineTier;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO
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
     * Get ffnNumber value
     * @return string|null
     */
    public function getFfnNumber(): ?string
    {
        return $this->ffnNumber;
    }
    /**
     * Set ffnNumber value
     * @param string $ffnNumber
     * @return \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO
     */
    public function setFfnNumber(?string $ffnNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ffnNumber) && !is_string($ffnNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ffnNumber, true), gettype($ffnNumber)), __LINE__);
        }
        $this->ffnNumber = $ffnNumber;
        
        return $this;
    }
}
