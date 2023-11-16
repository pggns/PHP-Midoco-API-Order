<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareSubOrdersRequest StructType
 * @subpackage Structs
 */
class PrepareSubOrdersRequest extends AbstractStructBase
{
    /**
     * The mainOrderId
     * @var int|null
     */
    protected ?int $mainOrderId = null;
    /**
     * The actionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $actionType = null;
    /**
     * The MidocoSubOrders
     * Meta information extracted from the WSDL
     * - ref: MidocoSubOrders
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSubOrders|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSubOrders $MidocoSubOrders = null;
    /**
     * Constructor method for PrepareSubOrdersRequest
     * @uses PrepareSubOrdersRequest::setMainOrderId()
     * @uses PrepareSubOrdersRequest::setActionType()
     * @uses PrepareSubOrdersRequest::setMidocoSubOrders()
     * @param int $mainOrderId
     * @param int $actionType
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSubOrders $midocoSubOrders
     */
    public function __construct(?int $mainOrderId = null, ?int $actionType = null, ?\Pggns\MidocoApi\Order\StructType\MidocoSubOrders $midocoSubOrders = null)
    {
        $this
            ->setMainOrderId($mainOrderId)
            ->setActionType($actionType)
            ->setMidocoSubOrders($midocoSubOrders);
    }
    /**
     * Get mainOrderId value
     * @return int|null
     */
    public function getMainOrderId(): ?int
    {
        return $this->mainOrderId;
    }
    /**
     * Set mainOrderId value
     * @param int $mainOrderId
     * @return \Pggns\MidocoApi\Order\StructType\PrepareSubOrdersRequest
     */
    public function setMainOrderId(?int $mainOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($mainOrderId) && !(is_int($mainOrderId) || ctype_digit($mainOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mainOrderId, true), gettype($mainOrderId)), __LINE__);
        }
        $this->mainOrderId = $mainOrderId;
        
        return $this;
    }
    /**
     * Get actionType value
     * @return int|null
     */
    public function getActionType(): ?int
    {
        return $this->actionType;
    }
    /**
     * Set actionType value
     * @param int $actionType
     * @return \Pggns\MidocoApi\Order\StructType\PrepareSubOrdersRequest
     */
    public function setActionType(?int $actionType = null): self
    {
        // validation for constraint: int
        if (!is_null($actionType) && !(is_int($actionType) || ctype_digit($actionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($actionType, true), gettype($actionType)), __LINE__);
        }
        $this->actionType = $actionType;
        
        return $this;
    }
    /**
     * Get MidocoSubOrders value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubOrders|null
     */
    public function getMidocoSubOrders(): ?\Pggns\MidocoApi\Order\StructType\MidocoSubOrders
    {
        return $this->MidocoSubOrders;
    }
    /**
     * Set MidocoSubOrders value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSubOrders $midocoSubOrders
     * @return \Pggns\MidocoApi\Order\StructType\PrepareSubOrdersRequest
     */
    public function setMidocoSubOrders(?\Pggns\MidocoApi\Order\StructType\MidocoSubOrders $midocoSubOrders = null): self
    {
        $this->MidocoSubOrders = $midocoSubOrders;
        
        return $this;
    }
}
