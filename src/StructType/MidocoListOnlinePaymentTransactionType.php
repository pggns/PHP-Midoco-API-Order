<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoListOnlinePaymentTransactionType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoListOnlinePaymentTransactionType extends OnlinePaymentTransactionDTO
{
    /**
     * The adapter
     * @var string|null
     */
    protected ?string $adapter = null;
    /**
     * The errorDescription
     * @var string|null
     */
    protected ?string $errorDescription = null;
    /**
     * Constructor method for MidocoListOnlinePaymentTransactionType
     * @uses MidocoListOnlinePaymentTransactionType::setAdapter()
     * @uses MidocoListOnlinePaymentTransactionType::setErrorDescription()
     * @param string $adapter
     * @param string $errorDescription
     */
    public function __construct(?string $adapter = null, ?string $errorDescription = null)
    {
        $this
            ->setAdapter($adapter)
            ->setErrorDescription($errorDescription);
    }
    /**
     * Get adapter value
     * @return string|null
     */
    public function getAdapter(): ?string
    {
        return $this->adapter;
    }
    /**
     * Set adapter value
     * @param string $adapter
     * @return \Pggns\MidocoApi\Order\StructType\MidocoListOnlinePaymentTransactionType
     */
    public function setAdapter(?string $adapter = null): self
    {
        // validation for constraint: string
        if (!is_null($adapter) && !is_string($adapter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapter, true), gettype($adapter)), __LINE__);
        }
        $this->adapter = $adapter;
        
        return $this;
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $errorDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoListOnlinePaymentTransactionType
     */
    public function setErrorDescription(?string $errorDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDescription) && !is_string($errorDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescription, true), gettype($errorDescription)), __LINE__);
        }
        $this->errorDescription = $errorDescription;
        
        return $this;
    }
}
