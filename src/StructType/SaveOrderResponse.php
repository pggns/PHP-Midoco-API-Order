<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveOrder --- creates or changes an Order. On creation, a OrderNo is assigned using a sequence of the OrgUnit All the billing_positions of the contained Sell-Items are recalculated which the payment dates of the order (if these are
 * changed). Request is constructed with: - one OrderDTO The creation date/used and changing date/user should be auto assigned. SellItems are attached or detached using a different service. Only the fields customerId, debitor, deposit_date,
 * deposit_amount, final_payment are user-writable In case the user changed the dates/amounts for deposit and final payment, the field last_inkasso_price should be auto_assigned to the value of inkasso_price. This field is used internally for automatic
 * calculation of deposit values when a sell-item changes. All connected SellItems are to be updated with the newly set deposit dates. In case the sum of deposit is changed, the difference to the sum of deposit amounts has to be calculated. The
 * difference has to be assigned to the connected sell-items. This has to be done considering the inkasso value and the already paid billing positions. TODO: create an activity diagram for this calculation When a customer is assigned to the Order, the
 * debitor value should be auto-assigned. In case the customer has a specific debitor assigned, this should be used. In case the customer has no debitor assigned, a debitor should be looked up by the OrgUnit. This value should be looked up in the
 * debitor_assign table (Crm Database).
 * @subpackage Structs
 */
class SaveOrderResponse extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for SaveOrderResponse
     * @uses SaveOrderResponse::setOrderId()
     * @param int $orderId
     */
    public function __construct(?int $orderId = null)
    {
        $this
            ->setOrderId($orderId);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderResponse
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
}
