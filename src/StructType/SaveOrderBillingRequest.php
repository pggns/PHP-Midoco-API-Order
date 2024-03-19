<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderBillingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrderBillingRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The billingDocumentId
     * @var int|null
     */
    protected ?int $billingDocumentId = null;
    /**
     * Constructor method for SaveOrderBillingRequest
     * @uses SaveOrderBillingRequest::setOrderId()
     * @uses SaveOrderBillingRequest::setBillingDocumentId()
     * @param int $orderId
     * @param int $billingDocumentId
     */
    public function __construct(?int $orderId = null, ?int $billingDocumentId = null)
    {
        $this
            ->setOrderId($orderId)
            ->setBillingDocumentId($billingDocumentId);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderBillingRequest
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
     * Get billingDocumentId value
     * @return int|null
     */
    public function getBillingDocumentId(): ?int
    {
        return $this->billingDocumentId;
    }
    /**
     * Set billingDocumentId value
     * @param int $billingDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderBillingRequest
     */
    public function setBillingDocumentId(?int $billingDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingDocumentId) && !(is_int($billingDocumentId) || ctype_digit($billingDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingDocumentId, true), gettype($billingDocumentId)), __LINE__);
        }
        $this->billingDocumentId = $billingDocumentId;
        
        return $this;
    }
}
