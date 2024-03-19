<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getOrder --- retrieve an Order response is constructed as: - one OrderDTO - SellItemList (zero or more)
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The MidocoDunning
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoDunning
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDunning|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDunning $MidocoDunning = null;
    /**
     * The isReadOnlyByLockPeriod
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isReadOnlyByLockPeriod = null;
    /**
     * The isCustomerDunningLock
     * @var bool|null
     */
    protected ?bool $isCustomerDunningLock = null;
    /**
     * Constructor method for GetOrderResponse
     * @uses GetOrderResponse::setMidocoOrder()
     * @uses GetOrderResponse::setMidocoDunning()
     * @uses GetOrderResponse::setIsReadOnlyByLockPeriod()
     * @uses GetOrderResponse::setIsCustomerDunningLock()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunning $midocoDunning
     * @param bool $isReadOnlyByLockPeriod
     * @param bool $isCustomerDunningLock
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, ?\Pggns\MidocoApi\Order\StructType\MidocoDunning $midocoDunning = null, ?bool $isReadOnlyByLockPeriod = false, ?bool $isCustomerDunningLock = null)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setMidocoDunning($midocoDunning)
            ->setIsReadOnlyByLockPeriod($isReadOnlyByLockPeriod)
            ->setIsCustomerDunningLock($isCustomerDunningLock);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderResponse
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get MidocoDunning value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning|null
     */
    public function getMidocoDunning(): ?\Pggns\MidocoApi\Order\StructType\MidocoDunning
    {
        return $this->MidocoDunning;
    }
    /**
     * Set MidocoDunning value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunning $midocoDunning
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderResponse
     */
    public function setMidocoDunning(?\Pggns\MidocoApi\Order\StructType\MidocoDunning $midocoDunning = null): self
    {
        $this->MidocoDunning = $midocoDunning;
        
        return $this;
    }
    /**
     * Get isReadOnlyByLockPeriod value
     * @return bool|null
     */
    public function getIsReadOnlyByLockPeriod(): ?bool
    {
        return $this->isReadOnlyByLockPeriod;
    }
    /**
     * Set isReadOnlyByLockPeriod value
     * @param bool $isReadOnlyByLockPeriod
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderResponse
     */
    public function setIsReadOnlyByLockPeriod(?bool $isReadOnlyByLockPeriod = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isReadOnlyByLockPeriod) && !is_bool($isReadOnlyByLockPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReadOnlyByLockPeriod, true), gettype($isReadOnlyByLockPeriod)), __LINE__);
        }
        $this->isReadOnlyByLockPeriod = $isReadOnlyByLockPeriod;
        
        return $this;
    }
    /**
     * Get isCustomerDunningLock value
     * @return bool|null
     */
    public function getIsCustomerDunningLock(): ?bool
    {
        return $this->isCustomerDunningLock;
    }
    /**
     * Set isCustomerDunningLock value
     * @param bool $isCustomerDunningLock
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderResponse
     */
    public function setIsCustomerDunningLock(?bool $isCustomerDunningLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCustomerDunningLock) && !is_bool($isCustomerDunningLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCustomerDunningLock, true), gettype($isCustomerDunningLock)), __LINE__);
        }
        $this->isCustomerDunningLock = $isCustomerDunningLock;
        
        return $this;
    }
}
