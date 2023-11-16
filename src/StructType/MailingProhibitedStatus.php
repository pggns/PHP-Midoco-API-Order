<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailingProhibitedStatus StructType
 * @subpackage Structs
 */
class MailingProhibitedStatus extends AbstractStructBase
{
    /**
     * The statusId
     * @var string|null
     */
    protected ?string $statusId = null;
    /**
     * The statusDescription
     * @var string|null
     */
    protected ?string $statusDescription = null;
    /**
     * Constructor method for MailingProhibitedStatus
     * @uses MailingProhibitedStatus::setStatusId()
     * @uses MailingProhibitedStatus::setStatusDescription()
     * @param string $statusId
     * @param string $statusDescription
     */
    public function __construct(?string $statusId = null, ?string $statusDescription = null)
    {
        $this
            ->setStatusId($statusId)
            ->setStatusDescription($statusDescription);
    }
    /**
     * Get statusId value
     * @return string|null
     */
    public function getStatusId(): ?string
    {
        return $this->statusId;
    }
    /**
     * Set statusId value
     * @param string $statusId
     * @return \Pggns\MidocoApi\Order\StructType\MailingProhibitedStatus
     */
    public function setStatusId(?string $statusId = null): self
    {
        // validation for constraint: string
        if (!is_null($statusId) && !is_string($statusId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusId, true), gettype($statusId)), __LINE__);
        }
        $this->statusId = $statusId;
        
        return $this;
    }
    /**
     * Get statusDescription value
     * @return string|null
     */
    public function getStatusDescription(): ?string
    {
        return $this->statusDescription;
    }
    /**
     * Set statusDescription value
     * @param string $statusDescription
     * @return \Pggns\MidocoApi\Order\StructType\MailingProhibitedStatus
     */
    public function setStatusDescription(?string $statusDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($statusDescription) && !is_string($statusDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusDescription, true), gettype($statusDescription)), __LINE__);
        }
        $this->statusDescription = $statusDescription;
        
        return $this;
    }
}
