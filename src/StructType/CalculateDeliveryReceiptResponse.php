<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateDeliveryReceiptResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateDeliveryReceiptResponse extends AbstractStructBase
{
    /**
     * The isDeliveryReceipt
     * @var bool|null
     */
    protected ?bool $isDeliveryReceipt = null;
    /**
     * Constructor method for CalculateDeliveryReceiptResponse
     * @uses CalculateDeliveryReceiptResponse::setIsDeliveryReceipt()
     * @param bool $isDeliveryReceipt
     */
    public function __construct(?bool $isDeliveryReceipt = null)
    {
        $this
            ->setIsDeliveryReceipt($isDeliveryReceipt);
    }
    /**
     * Get isDeliveryReceipt value
     * @return bool|null
     */
    public function getIsDeliveryReceipt(): ?bool
    {
        return $this->isDeliveryReceipt;
    }
    /**
     * Set isDeliveryReceipt value
     * @param bool $isDeliveryReceipt
     * @return \Pggns\MidocoApi\Order\StructType\CalculateDeliveryReceiptResponse
     */
    public function setIsDeliveryReceipt(?bool $isDeliveryReceipt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeliveryReceipt) && !is_bool($isDeliveryReceipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeliveryReceipt, true), gettype($isDeliveryReceipt)), __LINE__);
        }
        $this->isDeliveryReceipt = $isDeliveryReceipt;
        
        return $this;
    }
}
