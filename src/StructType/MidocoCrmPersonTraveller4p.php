<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmPersonTraveller4p StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmPersonTraveller4p extends CrmPersonTravellerDTO
{
    /**
     * The travellerTypeDesc
     * @var string|null
     */
    protected ?string $travellerTypeDesc = null;
    /**
     * Constructor method for MidocoCrmPersonTraveller4p
     * @uses MidocoCrmPersonTraveller4p::setTravellerTypeDesc()
     * @param string $travellerTypeDesc
     */
    public function __construct(?string $travellerTypeDesc = null)
    {
        $this
            ->setTravellerTypeDesc($travellerTypeDesc);
    }
    /**
     * Get travellerTypeDesc value
     * @return string|null
     */
    public function getTravellerTypeDesc(): ?string
    {
        return $this->travellerTypeDesc;
    }
    /**
     * Set travellerTypeDesc value
     * @param string $travellerTypeDesc
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmPersonTraveller4p
     */
    public function setTravellerTypeDesc(?string $travellerTypeDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerTypeDesc) && !is_string($travellerTypeDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerTypeDesc, true), gettype($travellerTypeDesc)), __LINE__);
        }
        $this->travellerTypeDesc = $travellerTypeDesc;
        
        return $this;
    }
}
