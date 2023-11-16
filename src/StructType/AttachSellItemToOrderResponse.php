<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachSellItemToOrderResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: attachSellItemToOrder --- attaches one or more SellItems to an Order. This process calculates the deposit amounts or dates and final payment dates. This has to be done using the data from all sell-items which have an inkasso value
 * not 0. These values are saved in the order (which has to exist before this method is invoked). In case there has been a different calculation of the deposit or final values before, this has to be retained only if the inkasso-sum has not changed
 * (compared to the last_inkasso value). The new inkasso_amount and deposit or final payment dates or amounts should be stored in the Order.
 * @subpackage Structs
 */
class AttachSellItemToOrderResponse extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The deletedOldOrder
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $deletedOldOrder = null;
    /**
     * Constructor method for AttachSellItemToOrderResponse
     * @uses AttachSellItemToOrderResponse::setOrderId()
     * @uses AttachSellItemToOrderResponse::setDeletedOldOrder()
     * @param int $orderId
     * @param bool $deletedOldOrder
     */
    public function __construct(?int $orderId = null, ?bool $deletedOldOrder = false)
    {
        $this
            ->setOrderId($orderId)
            ->setDeletedOldOrder($deletedOldOrder);
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
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderResponse
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
     * Get deletedOldOrder value
     * @return bool|null
     */
    public function getDeletedOldOrder(): ?bool
    {
        return $this->deletedOldOrder;
    }
    /**
     * Set deletedOldOrder value
     * @param bool $deletedOldOrder
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderResponse
     */
    public function setDeletedOldOrder(?bool $deletedOldOrder = false): self
    {
        // validation for constraint: boolean
        if (!is_null($deletedOldOrder) && !is_bool($deletedOldOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deletedOldOrder, true), gettype($deletedOldOrder)), __LINE__);
        }
        $this->deletedOldOrder = $deletedOldOrder;
        
        return $this;
    }
}
