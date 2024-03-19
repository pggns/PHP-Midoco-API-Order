<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderHistory StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderHistory extends OrderHistoryDTO
{
    /**
     * The orderDocRefId
     * @var string|null
     */
    protected ?string $orderDocRefId = null;
    /**
     * Constructor method for MidocoOrderHistory
     * @uses MidocoOrderHistory::setOrderDocRefId()
     * @param string $orderDocRefId
     */
    public function __construct(?string $orderDocRefId = null)
    {
        $this
            ->setOrderDocRefId($orderDocRefId);
    }
    /**
     * Get orderDocRefId value
     * @return string|null
     */
    public function getOrderDocRefId(): ?string
    {
        return $this->orderDocRefId;
    }
    /**
     * Set orderDocRefId value
     * @param string $orderDocRefId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderHistory
     */
    public function setOrderDocRefId(?string $orderDocRefId = null): self
    {
        // validation for constraint: string
        if (!is_null($orderDocRefId) && !is_string($orderDocRefId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDocRefId, true), gettype($orderDocRefId)), __LINE__);
        }
        $this->orderDocRefId = $orderDocRefId;
        
        return $this;
    }
}
