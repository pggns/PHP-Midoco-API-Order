<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMediatorProductSettlementDetail StructType
 * @subpackage Structs
 */
class MidocoMediatorProductSettlementDetail extends MedStlmntProdDetailDTO
{
    /**
     * The orderTravelDate
     * @var string|null
     */
    protected ?string $orderTravelDate = null;
    /**
     * The orderCustomerName
     * @var string|null
     */
    protected ?string $orderCustomerName = null;
    /**
     * Constructor method for MidocoMediatorProductSettlementDetail
     * @uses MidocoMediatorProductSettlementDetail::setOrderTravelDate()
     * @uses MidocoMediatorProductSettlementDetail::setOrderCustomerName()
     * @param string $orderTravelDate
     * @param string $orderCustomerName
     */
    public function __construct(?string $orderTravelDate = null, ?string $orderCustomerName = null)
    {
        $this
            ->setOrderTravelDate($orderTravelDate)
            ->setOrderCustomerName($orderCustomerName);
    }
    /**
     * Get orderTravelDate value
     * @return string|null
     */
    public function getOrderTravelDate(): ?string
    {
        return $this->orderTravelDate;
    }
    /**
     * Set orderTravelDate value
     * @param string $orderTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail
     */
    public function setOrderTravelDate(?string $orderTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderTravelDate) && !is_string($orderTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderTravelDate, true), gettype($orderTravelDate)), __LINE__);
        }
        $this->orderTravelDate = $orderTravelDate;
        
        return $this;
    }
    /**
     * Get orderCustomerName value
     * @return string|null
     */
    public function getOrderCustomerName(): ?string
    {
        return $this->orderCustomerName;
    }
    /**
     * Set orderCustomerName value
     * @param string $orderCustomerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail
     */
    public function setOrderCustomerName(?string $orderCustomerName = null): self
    {
        // validation for constraint: string
        if (!is_null($orderCustomerName) && !is_string($orderCustomerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderCustomerName, true), gettype($orderCustomerName)), __LINE__);
        }
        $this->orderCustomerName = $orderCustomerName;
        
        return $this;
    }
}
