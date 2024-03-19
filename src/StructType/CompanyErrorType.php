<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyErrorType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CompanyErrorType extends AbstractStructBase
{
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $customerId;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $message;
    /**
     * Constructor method for CompanyErrorType
     * @uses CompanyErrorType::setCustomerId()
     * @uses CompanyErrorType::setMessage()
     * @param int $customerId
     * @param string $message
     */
    public function __construct(int $customerId, string $message)
    {
        $this
            ->setCustomerId($customerId)
            ->setMessage($message);
    }
    /**
     * Get customerId value
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CompanyErrorType
     */
    public function setCustomerId(int $customerId): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CompanyErrorType
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
