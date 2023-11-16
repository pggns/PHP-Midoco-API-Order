<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilteredBillingDocumentsForOrderRequest StructType
 * @subpackage Structs
 */
class GetFilteredBillingDocumentsForOrderRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The filter
     * @var string|null
     */
    protected ?string $filter = null;
    /**
     * Constructor method for GetFilteredBillingDocumentsForOrderRequest
     * @uses GetFilteredBillingDocumentsForOrderRequest::setOrderId()
     * @uses GetFilteredBillingDocumentsForOrderRequest::setFilter()
     * @param int $orderId
     * @param string $filter
     */
    public function __construct(?int $orderId = null, ?string $filter = null)
    {
        $this
            ->setOrderId($orderId)
            ->setFilter($filter);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetFilteredBillingDocumentsForOrderRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get filter value
     * @return string|null
     */
    public function getFilter(): ?string
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \Pggns\MidocoApi\Order\StructType\GetFilteredBillingDocumentsForOrderRequest
     */
    public function setFilter(?string $filter = null): self
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter, true), gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        
        return $this;
    }
}
