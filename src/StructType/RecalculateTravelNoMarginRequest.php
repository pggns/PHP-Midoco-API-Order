<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecalculateTravelNoMarginRequest StructType
 * @subpackage Structs
 */
class RecalculateTravelNoMarginRequest extends AbstractStructBase
{
    /**
     * The travelNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The startTravelStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startTravelStart = null;
    /**
     * The endTravelStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endTravelStart = null;
    /**
     * The removePurchaseAssignments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $removePurchaseAssignments = null;
    /**
     * Constructor method for RecalculateTravelNoMarginRequest
     * @uses RecalculateTravelNoMarginRequest::setTravelNo()
     * @uses RecalculateTravelNoMarginRequest::setStartTravelStart()
     * @uses RecalculateTravelNoMarginRequest::setEndTravelStart()
     * @uses RecalculateTravelNoMarginRequest::setRemovePurchaseAssignments()
     * @param string $travelNo
     * @param string $startTravelStart
     * @param string $endTravelStart
     * @param bool $removePurchaseAssignments
     */
    public function __construct(?string $travelNo = null, ?string $startTravelStart = null, ?string $endTravelStart = null, ?bool $removePurchaseAssignments = null)
    {
        $this
            ->setTravelNo($travelNo)
            ->setStartTravelStart($startTravelStart)
            ->setEndTravelStart($endTravelStart)
            ->setRemovePurchaseAssignments($removePurchaseAssignments);
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\RecalculateTravelNoMarginRequest
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
    /**
     * Get startTravelStart value
     * @return string|null
     */
    public function getStartTravelStart(): ?string
    {
        return $this->startTravelStart;
    }
    /**
     * Set startTravelStart value
     * @param string $startTravelStart
     * @return \Pggns\MidocoApi\Order\StructType\RecalculateTravelNoMarginRequest
     */
    public function setStartTravelStart(?string $startTravelStart = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelStart) && !is_string($startTravelStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelStart, true), gettype($startTravelStart)), __LINE__);
        }
        $this->startTravelStart = $startTravelStart;
        
        return $this;
    }
    /**
     * Get endTravelStart value
     * @return string|null
     */
    public function getEndTravelStart(): ?string
    {
        return $this->endTravelStart;
    }
    /**
     * Set endTravelStart value
     * @param string $endTravelStart
     * @return \Pggns\MidocoApi\Order\StructType\RecalculateTravelNoMarginRequest
     */
    public function setEndTravelStart(?string $endTravelStart = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravelStart) && !is_string($endTravelStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravelStart, true), gettype($endTravelStart)), __LINE__);
        }
        $this->endTravelStart = $endTravelStart;
        
        return $this;
    }
    /**
     * Get removePurchaseAssignments value
     * @return bool|null
     */
    public function getRemovePurchaseAssignments(): ?bool
    {
        return $this->removePurchaseAssignments;
    }
    /**
     * Set removePurchaseAssignments value
     * @param bool $removePurchaseAssignments
     * @return \Pggns\MidocoApi\Order\StructType\RecalculateTravelNoMarginRequest
     */
    public function setRemovePurchaseAssignments(?bool $removePurchaseAssignments = null): self
    {
        // validation for constraint: boolean
        if (!is_null($removePurchaseAssignments) && !is_bool($removePurchaseAssignments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($removePurchaseAssignments, true), gettype($removePurchaseAssignments)), __LINE__);
        }
        $this->removePurchaseAssignments = $removePurchaseAssignments;
        
        return $this;
    }
}
