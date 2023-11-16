<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplaintStateDTO StructType
 * @subpackage Structs
 */
class ComplaintStateDTO extends AbstractStructBase
{
    /**
     * The complaintId
     * @var int|null
     */
    protected ?int $complaintId = null;
    /**
     * The state
     * @var int|null
     */
    protected ?int $state = null;
    /**
     * The stateId
     * @var string|null
     */
    protected ?string $stateId = null;
    /**
     * Constructor method for ComplaintStateDTO
     * @uses ComplaintStateDTO::setComplaintId()
     * @uses ComplaintStateDTO::setState()
     * @uses ComplaintStateDTO::setStateId()
     * @param int $complaintId
     * @param int $state
     * @param string $stateId
     */
    public function __construct(?int $complaintId = null, ?int $state = null, ?string $stateId = null)
    {
        $this
            ->setComplaintId($complaintId)
            ->setState($state)
            ->setStateId($stateId);
    }
    /**
     * Get complaintId value
     * @return int|null
     */
    public function getComplaintId(): ?int
    {
        return $this->complaintId;
    }
    /**
     * Set complaintId value
     * @param int $complaintId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintStateDTO
     */
    public function setComplaintId(?int $complaintId = null): self
    {
        // validation for constraint: int
        if (!is_null($complaintId) && !(is_int($complaintId) || ctype_digit($complaintId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($complaintId, true), gettype($complaintId)), __LINE__);
        }
        $this->complaintId = $complaintId;
        
        return $this;
    }
    /**
     * Get state value
     * @return int|null
     */
    public function getState(): ?int
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param int $state
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintStateDTO
     */
    public function setState(?int $state = null): self
    {
        // validation for constraint: int
        if (!is_null($state) && !(is_int($state) || ctype_digit($state))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintStateDTO
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
