<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplaintStateDataDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ComplaintStateDataDTO extends AbstractStructBase
{
    /**
     * The stateId
     * @var string|null
     */
    protected ?string $stateId = null;
    /**
     * Constructor method for ComplaintStateDataDTO
     * @uses ComplaintStateDataDTO::setStateId()
     * @param string $stateId
     */
    public function __construct(?string $stateId = null)
    {
        $this
            ->setStateId($stateId);
    }
    /**
     * Get stateId value
     * @return string|null
     */
    public function getStateId(): ?string
    {
        return $this->stateId;
    }
    /**
     * Set stateId value
     * @param string $stateId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintStateDataDTO
     */
    public function setStateId(?string $stateId = null): self
    {
        // validation for constraint: string
        if (!is_null($stateId) && !is_string($stateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateId, true), gettype($stateId)), __LINE__);
        }
        $this->stateId = $stateId;
        
        return $this;
    }
}
