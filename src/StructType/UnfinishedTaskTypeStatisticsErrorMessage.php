<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnfinishedTaskTypeStatisticsErrorMessage StructType
 * @subpackage Structs
 */
class UnfinishedTaskTypeStatisticsErrorMessage extends AbstractStructBase
{
    /**
     * The errorMessage
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * Constructor method for UnfinishedTaskTypeStatisticsErrorMessage
     * @uses UnfinishedTaskTypeStatisticsErrorMessage::setErrorMessage()
     * @param string $errorMessage
     */
    public function __construct(?string $errorMessage = null)
    {
        $this
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsErrorMessage
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
}
