<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorErrorType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MediatorErrorType extends AbstractStructBase
{
    /**
     * The mediatorId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $mediatorId;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $message;
    /**
     * Constructor method for MediatorErrorType
     * @uses MediatorErrorType::setMediatorId()
     * @uses MediatorErrorType::setMessage()
     * @param string $mediatorId
     * @param string $message
     */
    public function __construct(string $mediatorId, string $message)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setMessage($message);
    }
    /**
     * Get mediatorId value
     * @return string
     */
    public function getMediatorId(): string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorErrorType
     */
    public function setMediatorId(string $mediatorId): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get message value
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Pggns\MidocoApi\Order\StructType\MediatorErrorType
     */
    public function setMessage(string $message): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
}
