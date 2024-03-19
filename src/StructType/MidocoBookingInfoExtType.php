<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBookingInfoExtType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBookingInfoExtType extends MidocoBookingInfoType
{
    /**
     * The subAgency
     * @var string|null
     */
    protected ?string $subAgency = null;
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * Constructor method for MidocoBookingInfoExtType
     * @uses MidocoBookingInfoExtType::setSubAgency()
     * @uses MidocoBookingInfoExtType::setCooperationId()
     * @param string $subAgency
     * @param string $cooperationId
     */
    public function __construct(?string $subAgency = null, ?string $cooperationId = null)
    {
        $this
            ->setSubAgency($subAgency)
            ->setCooperationId($cooperationId);
    }
    /**
     * Get subAgency value
     * @return string|null
     */
    public function getSubAgency(): ?string
    {
        return $this->subAgency;
    }
    /**
     * Set subAgency value
     * @param string $subAgency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType
     */
    public function setSubAgency(?string $subAgency = null): self
    {
        // validation for constraint: string
        if (!is_null($subAgency) && !is_string($subAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subAgency, true), gettype($subAgency)), __LINE__);
        }
        $this->subAgency = $subAgency;
        
        return $this;
    }
    /**
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
}
