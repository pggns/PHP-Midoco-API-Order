<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMoreBurnTransactionLinkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMilesAndMoreBurnTransactionLinkRequest extends AbstractStructBase
{
    /**
     * The transactionId
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * Constructor method for GetMilesAndMoreBurnTransactionLinkRequest
     * @uses GetMilesAndMoreBurnTransactionLinkRequest::setTransactionId()
     * @param string $transactionId
     */
    public function __construct(?string $transactionId = null)
    {
        $this
            ->setTransactionId($transactionId);
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreBurnTransactionLinkRequest
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
}
