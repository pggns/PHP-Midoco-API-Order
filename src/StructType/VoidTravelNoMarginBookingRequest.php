<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidTravelNoMarginBookingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VoidTravelNoMarginBookingRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNoMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTravelNoMargin
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $MidocoTravelNoMargin = null;
    /**
     * The activateTravelNo
     * @var bool|null
     */
    protected ?bool $activateTravelNo = null;
    /**
     * Constructor method for VoidTravelNoMarginBookingRequest
     * @uses VoidTravelNoMarginBookingRequest::setMidocoTravelNoMargin()
     * @uses VoidTravelNoMarginBookingRequest::setActivateTravelNo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin
     * @param bool $activateTravelNo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null, ?bool $activateTravelNo = null)
    {
        $this
            ->setMidocoTravelNoMargin($midocoTravelNoMargin)
            ->setActivateTravelNo($activateTravelNo);
    }
    /**
     * Get MidocoTravelNoMargin value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin|null
     */
    public function getMidocoTravelNoMargin(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin
    {
        return $this->MidocoTravelNoMargin;
    }
    /**
     * Set MidocoTravelNoMargin value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin
     * @return \Pggns\MidocoApi\Order\StructType\VoidTravelNoMarginBookingRequest
     */
    public function setMidocoTravelNoMargin(?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null): self
    {
        $this->MidocoTravelNoMargin = $midocoTravelNoMargin;
        
        return $this;
    }
    /**
     * Get activateTravelNo value
     * @return bool|null
     */
    public function getActivateTravelNo(): ?bool
    {
        return $this->activateTravelNo;
    }
    /**
     * Set activateTravelNo value
     * @param bool $activateTravelNo
     * @return \Pggns\MidocoApi\Order\StructType\VoidTravelNoMarginBookingRequest
     */
    public function setActivateTravelNo(?bool $activateTravelNo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($activateTravelNo) && !is_bool($activateTravelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($activateTravelNo, true), gettype($activateTravelNo)), __LINE__);
        }
        $this->activateTravelNo = $activateTravelNo;
        
        return $this;
    }
}
