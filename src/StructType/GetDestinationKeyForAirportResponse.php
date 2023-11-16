<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDestinationKeyForAirportResponse StructType
 * @subpackage Structs
 */
class GetDestinationKeyForAirportResponse extends AbstractStructBase
{
    /**
     * The destinationKey
     * @var string|null
     */
    protected ?string $destinationKey = null;
    /**
     * Constructor method for GetDestinationKeyForAirportResponse
     * @uses GetDestinationKeyForAirportResponse::setDestinationKey()
     * @param string $destinationKey
     */
    public function __construct(?string $destinationKey = null)
    {
        $this
            ->setDestinationKey($destinationKey);
    }
    /**
     * Get destinationKey value
     * @return string|null
     */
    public function getDestinationKey(): ?string
    {
        return $this->destinationKey;
    }
    /**
     * Set destinationKey value
     * @param string $destinationKey
     * @return \Pggns\MidocoApi\Order\StructType\GetDestinationKeyForAirportResponse
     */
    public function setDestinationKey(?string $destinationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationKey) && !is_string($destinationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationKey, true), gettype($destinationKey)), __LINE__);
        }
        $this->destinationKey = $destinationKey;
        
        return $this;
    }
}
