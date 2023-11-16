<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPrintInfoRequest StructType
 * @subpackage Structs
 */
class GetBillingPrintInfoRequest extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderId;
    /**
     * Constructor method for GetBillingPrintInfoRequest
     * @uses GetBillingPrintInfoRequest::setOrderId()
     * @param int $orderId
     */
    public function __construct(int $orderId)
    {
        $this
            ->setOrderId($orderId);
    }
    /**
     * Get orderId value
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPrintInfoRequest
     */
    public function setOrderId(int $orderId): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
}
