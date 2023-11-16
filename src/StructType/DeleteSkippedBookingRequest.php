<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSkippedBookingRequest StructType
 * @subpackage Structs
 */
class DeleteSkippedBookingRequest extends AbstractStructBase
{
    /**
     * The externalId
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * The externalSystem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $externalSystem = null;
    /**
     * Constructor method for DeleteSkippedBookingRequest
     * @uses DeleteSkippedBookingRequest::setExternalId()
     * @uses DeleteSkippedBookingRequest::setExternalSystem()
     * @param string $externalId
     * @param string $externalSystem
     */
    public function __construct(?string $externalId = null, ?string $externalSystem = null)
    {
        $this
            ->setExternalId($externalId)
            ->setExternalSystem($externalSystem);
    }
    /**
     * Get externalId value
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $externalId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSkippedBookingRequest
     */
    public function setExternalId(?string $externalId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSkippedBookingRequest
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
