<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderNotice StructType
 * @subpackage Structs
 */
class MidocoOrderNotice extends OrderNoticeDTO
{
    /**
     * The manuallyCreatedTask
     * @var bool|null
     */
    protected ?bool $manuallyCreatedTask = null;
    /**
     * The serviceAssignment
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $serviceAssignment = null;
    /**
     * The delegationComment
     * @var string|null
     */
    protected ?string $delegationComment = null;
    /**
     * Constructor method for MidocoOrderNotice
     * @uses MidocoOrderNotice::setManuallyCreatedTask()
     * @uses MidocoOrderNotice::setServiceAssignment()
     * @uses MidocoOrderNotice::setDelegationComment()
     * @param bool $manuallyCreatedTask
     * @param string $serviceAssignment
     * @param string $delegationComment
     */
    public function __construct(?bool $manuallyCreatedTask = null, ?string $serviceAssignment = '', ?string $delegationComment = null)
    {
        $this
            ->setManuallyCreatedTask($manuallyCreatedTask)
            ->setServiceAssignment($serviceAssignment)
            ->setDelegationComment($delegationComment);
    }
    /**
     * Get manuallyCreatedTask value
     * @return bool|null
     */
    public function getManuallyCreatedTask(): ?bool
    {
        return $this->manuallyCreatedTask;
    }
    /**
     * Set manuallyCreatedTask value
     * @param bool $manuallyCreatedTask
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice
     */
    public function setManuallyCreatedTask(?bool $manuallyCreatedTask = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manuallyCreatedTask) && !is_bool($manuallyCreatedTask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manuallyCreatedTask, true), gettype($manuallyCreatedTask)), __LINE__);
        }
        $this->manuallyCreatedTask = $manuallyCreatedTask;
        
        return $this;
    }
    /**
     * Get serviceAssignment value
     * @return string|null
     */
    public function getServiceAssignment(): ?string
    {
        return $this->serviceAssignment;
    }
    /**
     * Set serviceAssignment value
     * @param string $serviceAssignment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice
     */
    public function setServiceAssignment(?string $serviceAssignment = ''): self
    {
        // validation for constraint: string
        if (!is_null($serviceAssignment) && !is_string($serviceAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceAssignment, true), gettype($serviceAssignment)), __LINE__);
        }
        $this->serviceAssignment = $serviceAssignment;
        
        return $this;
    }
    /**
     * Get delegationComment value
     * @return string|null
     */
    public function getDelegationComment(): ?string
    {
        return $this->delegationComment;
    }
    /**
     * Set delegationComment value
     * @param string $delegationComment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice
     */
    public function setDelegationComment(?string $delegationComment = null): self
    {
        // validation for constraint: string
        if (!is_null($delegationComment) && !is_string($delegationComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegationComment, true), gettype($delegationComment)), __LINE__);
        }
        $this->delegationComment = $delegationComment;
        
        return $this;
    }
}
