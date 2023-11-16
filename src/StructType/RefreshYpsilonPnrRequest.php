<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshYpsilonPnrRequest StructType
 * @subpackage Structs
 */
class RefreshYpsilonPnrRequest extends AbstractStructBase
{
    /**
     * The consolidator
     * @var string|null
     */
    protected ?string $consolidator = null;
    /**
     * The agent
     * @var string|null
     */
    protected ?string $agent = null;
    /**
     * The pnrId
     * @var string|null
     */
    protected ?string $pnrId = null;
    /**
     * Constructor method for RefreshYpsilonPnrRequest
     * @uses RefreshYpsilonPnrRequest::setConsolidator()
     * @uses RefreshYpsilonPnrRequest::setAgent()
     * @uses RefreshYpsilonPnrRequest::setPnrId()
     * @param string $consolidator
     * @param string $agent
     * @param string $pnrId
     */
    public function __construct(?string $consolidator = null, ?string $agent = null, ?string $pnrId = null)
    {
        $this
            ->setConsolidator($consolidator)
            ->setAgent($agent)
            ->setPnrId($pnrId);
    }
    /**
     * Get consolidator value
     * @return string|null
     */
    public function getConsolidator(): ?string
    {
        return $this->consolidator;
    }
    /**
     * Set consolidator value
     * @param string $consolidator
     * @return \Pggns\MidocoApi\Order\StructType\RefreshYpsilonPnrRequest
     */
    public function setConsolidator(?string $consolidator = null): self
    {
        // validation for constraint: string
        if (!is_null($consolidator) && !is_string($consolidator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consolidator, true), gettype($consolidator)), __LINE__);
        }
        $this->consolidator = $consolidator;
        
        return $this;
    }
    /**
     * Get agent value
     * @return string|null
     */
    public function getAgent(): ?string
    {
        return $this->agent;
    }
    /**
     * Set agent value
     * @param string $agent
     * @return \Pggns\MidocoApi\Order\StructType\RefreshYpsilonPnrRequest
     */
    public function setAgent(?string $agent = null): self
    {
        // validation for constraint: string
        if (!is_null($agent) && !is_string($agent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agent, true), gettype($agent)), __LINE__);
        }
        $this->agent = $agent;
        
        return $this;
    }
    /**
     * Get pnrId value
     * @return string|null
     */
    public function getPnrId(): ?string
    {
        return $this->pnrId;
    }
    /**
     * Set pnrId value
     * @param string $pnrId
     * @return \Pggns\MidocoApi\Order\StructType\RefreshYpsilonPnrRequest
     */
    public function setPnrId(?string $pnrId = null): self
    {
        // validation for constraint: string
        if (!is_null($pnrId) && !is_string($pnrId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pnrId, true), gettype($pnrId)), __LINE__);
        }
        $this->pnrId = $pnrId;
        
        return $this;
    }
}
