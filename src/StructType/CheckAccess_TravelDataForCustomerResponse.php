<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckAccess_TravelDataForCustomerResponse StructType
 * @subpackage Structs
 */
class CheckAccess_TravelDataForCustomerResponse extends AbstractStructBase
{
    /**
     * The access
     * @var bool|null
     */
    protected ?bool $access = null;
    /**
     * The message
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * Constructor method for CheckAccess_TravelDataForCustomerResponse
     * @uses CheckAccess_TravelDataForCustomerResponse::setAccess()
     * @uses CheckAccess_TravelDataForCustomerResponse::setMessage()
     * @param bool $access
     * @param string $message
     */
    public function __construct(?bool $access = null, ?string $message = null)
    {
        $this
            ->setAccess($access)
            ->setMessage($message);
    }
    /**
     * Get access value
     * @return bool|null
     */
    public function getAccess(): ?bool
    {
        return $this->access;
    }
    /**
     * Set access value
     * @param bool $access
     * @return \Pggns\MidocoApi\Order\StructType\CheckAccess_TravelDataForCustomerResponse
     */
    public function setAccess(?bool $access = null): self
    {
        // validation for constraint: boolean
        if (!is_null($access) && !is_bool($access)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($access, true), gettype($access)), __LINE__);
        }
        $this->access = $access;
        
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Pggns\MidocoApi\Order\StructType\CheckAccess_TravelDataForCustomerResponse
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
}
