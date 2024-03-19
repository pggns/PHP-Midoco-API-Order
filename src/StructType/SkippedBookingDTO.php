<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SkippedBookingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SkippedBookingDTO extends AbstractStructBase
{
    /**
     * The externalId
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * The externalSystem
     * @var string|null
     */
    protected ?string $externalSystem = null;
    /**
     * The messageSubtype
     * @var string|null
     */
    protected ?string $messageSubtype = null;
    /**
     * The messageText
     * @var string|null
     */
    protected ?string $messageText = null;
    /**
     * The messageType
     * @var string|null
     */
    protected ?string $messageType = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The tryNo
     * @var int|null
     */
    protected ?int $tryNo = null;
    /**
     * Constructor method for SkippedBookingDTO
     * @uses SkippedBookingDTO::setExternalId()
     * @uses SkippedBookingDTO::setExternalSystem()
     * @uses SkippedBookingDTO::setMessageSubtype()
     * @uses SkippedBookingDTO::setMessageText()
     * @uses SkippedBookingDTO::setMessageType()
     * @uses SkippedBookingDTO::setTimestamp()
     * @uses SkippedBookingDTO::setTryNo()
     * @param string $externalId
     * @param string $externalSystem
     * @param string $messageSubtype
     * @param string $messageText
     * @param string $messageType
     * @param string $timestamp
     * @param int $tryNo
     */
    public function __construct(?string $externalId = null, ?string $externalSystem = null, ?string $messageSubtype = null, ?string $messageText = null, ?string $messageType = null, ?string $timestamp = null, ?int $tryNo = null)
    {
        $this
            ->setExternalId($externalId)
            ->setExternalSystem($externalSystem)
            ->setMessageSubtype($messageSubtype)
            ->setMessageText($messageText)
            ->setMessageType($messageType)
            ->setTimestamp($timestamp)
            ->setTryNo($tryNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO
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
    /**
     * Get messageText value
     * @return string|null
     */
    public function getMessageText(): ?string
    {
        return $this->messageText;
    }
    /**
     * Set messageText value
     * @param string $messageText
     * @return \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO
     */
    public function setMessageText(?string $messageText = null): self
    {
        // validation for constraint: string
        if (!is_null($messageText) && !is_string($messageText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageText, true), gettype($messageText)), __LINE__);
        }
        $this->messageText = $messageText;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO
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
     * Get tryNo value
     * @return int|null
     */
    public function getTryNo(): ?int
    {
        return $this->tryNo;
    }
    /**
     * Set tryNo value
     * @param int $tryNo
     * @return \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO
     */
    public function setTryNo(?int $tryNo = null): self
    {
        // validation for constraint: int
        if (!is_null($tryNo) && !(is_int($tryNo) || ctype_digit($tryNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tryNo, true), gettype($tryNo)), __LINE__);
        }
        $this->tryNo = $tryNo;
        
        return $this;
    }
}
