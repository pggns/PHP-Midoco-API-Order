<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSkippedBookingsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSkippedBookingsRequest extends AbstractStructBase
{
    /**
     * The externalSystem
     * @var string|null
     */
    protected ?string $externalSystem = null;
    /**
     * The externalId
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The messageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $messageType = null;
    /**
     * The messageSubtype
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $messageSubtype = null;
    /**
     * Constructor method for GetSkippedBookingsRequest
     * @uses GetSkippedBookingsRequest::setExternalSystem()
     * @uses GetSkippedBookingsRequest::setExternalId()
     * @uses GetSkippedBookingsRequest::setTimestamp()
     * @uses GetSkippedBookingsRequest::setMessageType()
     * @uses GetSkippedBookingsRequest::setMessageSubtype()
     * @param string $externalSystem
     * @param string $externalId
     * @param string $timestamp
     * @param string $messageType
     * @param string $messageSubtype
     */
    public function __construct(?string $externalSystem = null, ?string $externalId = null, ?string $timestamp = null, ?string $messageType = null, ?string $messageSubtype = null)
    {
        $this
            ->setExternalSystem($externalSystem)
            ->setExternalId($externalId)
            ->setTimestamp($timestamp)
            ->setMessageType($messageType)
            ->setMessageSubtype($messageSubtype);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSkippedBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSkippedBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSkippedBookingsRequest
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
     * Get messageType value
     * @return string|null
     */
    public function getMessageType(): ?string
    {
        return $this->messageType;
    }
    /**
     * Set messageType value
     * @param string $messageType
     * @return \Pggns\MidocoApi\Order\StructType\GetSkippedBookingsRequest
     */
    public function setMessageType(?string $messageType = null): self
    {
        // validation for constraint: string
        if (!is_null($messageType) && !is_string($messageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageType, true), gettype($messageType)), __LINE__);
        }
        $this->messageType = $messageType;
        
        return $this;
    }
    /**
     * Get messageSubtype value
     * @return string|null
     */
    public function getMessageSubtype(): ?string
    {
        return $this->messageSubtype;
    }
    /**
     * Set messageSubtype value
     * @param string $messageSubtype
     * @return \Pggns\MidocoApi\Order\StructType\GetSkippedBookingsRequest
     */
    public function setMessageSubtype(?string $messageSubtype = null): self
    {
        // validation for constraint: string
        if (!is_null($messageSubtype) && !is_string($messageSubtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageSubtype, true), gettype($messageSubtype)), __LINE__);
        }
        $this->messageSubtype = $messageSubtype;
        
        return $this;
    }
}
