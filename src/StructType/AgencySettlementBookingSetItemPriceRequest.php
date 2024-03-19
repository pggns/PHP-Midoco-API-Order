<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencySettlementBookingSetItemPriceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AgencySettlementBookingSetItemPriceRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlementBooking
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencySettlementBooking
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $MidocoSupplierAgencySettlementBooking = null;
    /**
     * The priceSetupIndicator
     * Meta information extracted from the WSDL
     * - default: 0
     * @var int|null
     */
    protected ?int $priceSetupIndicator = null;
    /**
     * Constructor method for AgencySettlementBookingSetItemPriceRequest
     * @uses AgencySettlementBookingSetItemPriceRequest::setMidocoSupplierAgencySettlementBooking()
     * @uses AgencySettlementBookingSetItemPriceRequest::setPriceSetupIndicator()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking
     * @param int $priceSetupIndicator
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking = null, ?int $priceSetupIndicator = 0)
    {
        $this
            ->setMidocoSupplierAgencySettlementBooking($midocoSupplierAgencySettlementBooking)
            ->setPriceSetupIndicator($priceSetupIndicator);
    }
    /**
     * Get MidocoSupplierAgencySettlementBooking value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking|null
     */
    public function getMidocoSupplierAgencySettlementBooking(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking
    {
        return $this->MidocoSupplierAgencySettlementBooking;
    }
    /**
     * Set MidocoSupplierAgencySettlementBooking value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementBookingSetItemPriceRequest
     */
    public function setMidocoSupplierAgencySettlementBooking(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking = null): self
    {
        $this->MidocoSupplierAgencySettlementBooking = $midocoSupplierAgencySettlementBooking;
        
        return $this;
    }
    /**
     * Get priceSetupIndicator value
     * @return int|null
     */
    public function getPriceSetupIndicator(): ?int
    {
        return $this->priceSetupIndicator;
    }
    /**
     * Set priceSetupIndicator value
     * @param int $priceSetupIndicator
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementBookingSetItemPriceRequest
     */
    public function setPriceSetupIndicator(?int $priceSetupIndicator = 0): self
    {
        // validation for constraint: int
        if (!is_null($priceSetupIndicator) && !(is_int($priceSetupIndicator) || ctype_digit($priceSetupIndicator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priceSetupIndicator, true), gettype($priceSetupIndicator)), __LINE__);
        }
        $this->priceSetupIndicator = $priceSetupIndicator;
        
        return $this;
    }
}
