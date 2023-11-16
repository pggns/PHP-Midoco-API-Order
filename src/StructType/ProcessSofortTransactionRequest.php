<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessSofortTransactionRequest StructType
 * @subpackage Structs
 */
class ProcessSofortTransactionRequest extends AbstractStructBase
{
    /**
     * The transactionMessage
     * @var string|null
     */
    protected ?string $transactionMessage = null;
    /**
     * Constructor method for ProcessSofortTransactionRequest
     * @uses ProcessSofortTransactionRequest::setTransactionMessage()
     * @param string $transactionMessage
     */
    public function __construct(?string $transactionMessage = null)
    {
        $this
            ->setTransactionMessage($transactionMessage);
    }
    /**
     * Get transactionMessage value
     * @return string|null
     */
    public function getTransactionMessage(): ?string
    {
        return $this->transactionMessage;
    }
    /**
     * Set transactionMessage value
     * @param string $transactionMessage
     * @return \Pggns\MidocoApi\Order\StructType\ProcessSofortTransactionRequest
     */
    public function setTransactionMessage(?string $transactionMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionMessage) && !is_string($transactionMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionMessage, true), gettype($transactionMessage)), __LINE__);
        }
        $this->transactionMessage = $transactionMessage;
        
        return $this;
    }
}
