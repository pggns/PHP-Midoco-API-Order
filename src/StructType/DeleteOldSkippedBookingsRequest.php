<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOldSkippedBookingsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteOldSkippedBookingsRequest extends AbstractStructBase
{
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The externalSystem
     * @var string|null
     */
    protected ?string $externalSystem = null;
    /**
     * Constructor method for DeleteOldSkippedBookingsRequest
     * @uses DeleteOldSkippedBookingsRequest::setTimestamp()
     * @uses DeleteOldSkippedBookingsRequest::setExternalSystem()
     * @param string $timestamp
     * @param string $externalSystem
     */
    public function __construct(?string $timestamp = null, ?string $externalSystem = null)
    {
        $this
            ->setTimestamp($timestamp)
            ->setExternalSystem($externalSystem);
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOldSkippedBookingsRequest
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get externalSystem value
     * @return string|null
     */
    public function getExternalSystem(): ?string
    {
        return $this->externalSystem;
    }
    /**
     * Set externalSystem value
     * @param string $externalSystem
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOldSkippedBookingsRequest
     */
    public function setExternalSystem(?string $externalSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($externalSystem) && !is_string($externalSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSystem, true), gettype($externalSystem)), __LINE__);
        }
        $this->externalSystem = $externalSystem;
        
        return $this;
    }
}
