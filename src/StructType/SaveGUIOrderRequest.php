<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGUIOrderRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: save a GUI order and returns the updated Order
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveGUIOrderRequest extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The orderHasChanges4Suborders
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $orderHasChanges4Suborders = null;
    /**
     * Constructor method for SaveGUIOrderRequest
     * @uses SaveGUIOrderRequest::setMidocoOrder()
     * @uses SaveGUIOrderRequest::setOrderHasChanges4Suborders()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param bool $orderHasChanges4Suborders
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, ?bool $orderHasChanges4Suborders = true)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setOrderHasChanges4Suborders($orderHasChanges4Suborders);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\SaveGUIOrderRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get orderHasChanges4Suborders value
     * @return bool|null
     */
    public function getOrderHasChanges4Suborders(): ?bool
    {
        return $this->orderHasChanges4Suborders;
    }
    /**
     * Set orderHasChanges4Suborders value
     * @param bool $orderHasChanges4Suborders
     * @return \Pggns\MidocoApi\Order\StructType\SaveGUIOrderRequest
     */
    public function setOrderHasChanges4Suborders(?bool $orderHasChanges4Suborders = true): self
    {
        // validation for constraint: boolean
        if (!is_null($orderHasChanges4Suborders) && !is_bool($orderHasChanges4Suborders)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($orderHasChanges4Suborders, true), gettype($orderHasChanges4Suborders)), __LINE__);
        }
        $this->orderHasChanges4Suborders = $orderHasChanges4Suborders;
        
        return $this;
    }
}
