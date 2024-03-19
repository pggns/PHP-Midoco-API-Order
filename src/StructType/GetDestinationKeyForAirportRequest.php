<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDestinationKeyForAirportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDestinationKeyForAirportRequest extends AbstractStructBase
{
    /**
     * The airport_code
     * @var string|null
     */
    protected ?string $airport_code = null;
    /**
     * Constructor method for GetDestinationKeyForAirportRequest
     * @uses GetDestinationKeyForAirportRequest::setAirport_code()
     * @param string $airport_code
     */
    public function __construct(?string $airport_code = null)
    {
        $this
            ->setAirport_code($airport_code);
    }
    /**
     * Get airport_code value
     * @return string|null
     */
    public function getAirport_code(): ?string
    {
        return $this->airport_code;
    }
    /**
     * Set airport_code value
     * @param string $airport_code
     * @return \Pggns\MidocoApi\Order\StructType\GetDestinationKeyForAirportRequest
     */
    public function setAirport_code(?string $airport_code = null): self
    {
        // validation for constraint: string
        if (!is_null($airport_code) && !is_string($airport_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airport_code, true), gettype($airport_code)), __LINE__);
        }
        $this->airport_code = $airport_code;
        
        return $this;
    }
}
