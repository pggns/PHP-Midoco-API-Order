<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteTravelNoMarginBookingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteTravelNoMarginBookingRequest extends AbstractStructBase
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
     * The deactivateTravelNo
     * @var bool|null
     */
    protected ?bool $deactivateTravelNo = null;
    /**
     * The tentative
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $tentative = null;
    /**
     * Constructor method for ExecuteTravelNoMarginBookingRequest
     * @uses ExecuteTravelNoMarginBookingRequest::setMidocoTravelNoMargin()
     * @uses ExecuteTravelNoMarginBookingRequest::setDeactivateTravelNo()
     * @uses ExecuteTravelNoMarginBookingRequest::setTentative()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin
     * @param bool $deactivateTravelNo
     * @param bool $tentative
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null, ?bool $deactivateTravelNo = null, ?bool $tentative = false)
    {
        $this
            ->setMidocoTravelNoMargin($midocoTravelNoMargin)
            ->setDeactivateTravelNo($deactivateTravelNo)
            ->setTentative($tentative);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTravelNoMarginBookingRequest
     */
    public function setMidocoTravelNoMargin(?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null): self
    {
        $this->MidocoTravelNoMargin = $midocoTravelNoMargin;
        
        return $this;
    }
    /**
     * Get deactivateTravelNo value
     * @return bool|null
     */
    public function getDeactivateTravelNo(): ?bool
    {
        return $this->deactivateTravelNo;
    }
    /**
     * Set deactivateTravelNo value
     * @param bool $deactivateTravelNo
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTravelNoMarginBookingRequest
     */
    public function setDeactivateTravelNo(?bool $deactivateTravelNo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deactivateTravelNo) && !is_bool($deactivateTravelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deactivateTravelNo, true), gettype($deactivateTravelNo)), __LINE__);
        }
        $this->deactivateTravelNo = $deactivateTravelNo;
        
        return $this;
    }
    /**
     * Get tentative value
     * @return bool|null
     */
    public function getTentative(): ?bool
    {
        return $this->tentative;
    }
    /**
     * Set tentative value
     * @param bool $tentative
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTravelNoMarginBookingRequest
     */
    public function setTentative(?bool $tentative = false): self
    {
        // validation for constraint: boolean
        if (!is_null($tentative) && !is_bool($tentative)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tentative, true), gettype($tentative)), __LINE__);
        }
        $this->tentative = $tentative;
        
        return $this;
    }
}
