<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportTravelRegistrationResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportTravelRegistrationResponse extends AbstractStructBase
{
    /**
     * The TravelRegistrationData
     * @var string|null
     */
    protected ?string $TravelRegistrationData = null;
    /**
     * Constructor method for ExportTravelRegistrationResponse
     * @uses ExportTravelRegistrationResponse::setTravelRegistrationData()
     * @param string $travelRegistrationData
     */
    public function __construct(?string $travelRegistrationData = null)
    {
        $this
            ->setTravelRegistrationData($travelRegistrationData);
    }
    /**
     * Get TravelRegistrationData value
     * @return string|null
     */
    public function getTravelRegistrationData(): ?string
    {
        return $this->TravelRegistrationData;
    }
    /**
     * Set TravelRegistrationData value
     * @param string $travelRegistrationData
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelRegistrationResponse
     */
    public function setTravelRegistrationData(?string $travelRegistrationData = null): self
    {
        // validation for constraint: string
        if (!is_null($travelRegistrationData) && !is_string($travelRegistrationData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelRegistrationData, true), gettype($travelRegistrationData)), __LINE__);
        }
        $this->TravelRegistrationData = $travelRegistrationData;
        
        return $this;
    }
}
