<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingNotice StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillingNotice extends BillingNoticeDTO
{
    /**
     * The manuallyCreatedTask
     * @var bool|null
     */
    protected ?bool $manuallyCreatedTask = null;
    /**
     * The delegationComment
     * @var string|null
     */
    protected ?string $delegationComment = null;
    /**
     * Constructor method for MidocoBillingNotice
     * @uses MidocoBillingNotice::setManuallyCreatedTask()
     * @uses MidocoBillingNotice::setDelegationComment()
     * @param bool $manuallyCreatedTask
     * @param string $delegationComment
     */
    public function __construct(?bool $manuallyCreatedTask = null, ?string $delegationComment = null)
    {
        $this
            ->setManuallyCreatedTask($manuallyCreatedTask)
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice
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
