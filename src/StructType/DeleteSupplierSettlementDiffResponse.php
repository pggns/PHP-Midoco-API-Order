<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierSettlementDiffResponse StructType
 * @subpackage Structs
 */
class DeleteSupplierSettlementDiffResponse extends AbstractStructBase
{
    /**
     * The message
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * Constructor method for DeleteSupplierSettlementDiffResponse
     * @uses DeleteSupplierSettlementDiffResponse::setMessage()
     * @param string $message
     */
    public function __construct(?string $message = null)
    {
        $this
            ->setMessage($message);
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierSettlementDiffResponse
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
