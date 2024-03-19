<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelSubscriptionRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: CancelSubscription Webservice to cancel customer subscription of the annual service fees
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CancelSubscriptionRequest extends AbstractStructBase
{
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $customerId;
    /**
     * The cancelationDate
     * Meta information extracted from the WSDL
     * - documentation: The date the customer actually cancelled the subscription. The date is safed as crm criteria for documentation. If the value is not provided, we do not save a cancellation date.
     * - use: optional
     * @var string|null
     */
    protected ?string $cancelationDate = null;
    /**
     * Constructor method for CancelSubscriptionRequest
     * @uses CancelSubscriptionRequest::setCustomerId()
     * @uses CancelSubscriptionRequest::setCancelationDate()
     * @param int $customerId
     * @param string $cancelationDate
     */
    public function __construct(int $customerId, ?string $cancelationDate = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setCancelationDate($cancelationDate);
    }
    /**
     * Get customerId value
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CancelSubscriptionRequest
     */
    public function setCustomerId(int $customerId): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get cancelationDate value
     * @return string|null
     */
    public function getCancelationDate(): ?string
    {
        return $this->cancelationDate;
    }
    /**
     * Set cancelationDate value
     * @param string $cancelationDate
     * @return \Pggns\MidocoApi\Order\StructType\CancelSubscriptionRequest
     */
    public function setCancelationDate(?string $cancelationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelationDate) && !is_string($cancelationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelationDate, true), gettype($cancelationDate)), __LINE__);
        }
        $this->cancelationDate = $cancelationDate;
        
        return $this;
    }
}
