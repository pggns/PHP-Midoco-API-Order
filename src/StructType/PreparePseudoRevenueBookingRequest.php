<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreparePseudoRevenueBookingRequest StructType
 * @subpackage Structs
 */
class PreparePseudoRevenueBookingRequest extends AbstractStructBase
{
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The listBookingsWithInvoice
     * @var bool|null
     */
    protected ?bool $listBookingsWithInvoice = null;
    /**
     * Constructor method for PreparePseudoRevenueBookingRequest
     * @uses PreparePseudoRevenueBookingRequest::setStartTravel()
     * @uses PreparePseudoRevenueBookingRequest::setEndTravel()
     * @uses PreparePseudoRevenueBookingRequest::setOrgUnit()
     * @uses PreparePseudoRevenueBookingRequest::setOrderNo()
     * @uses PreparePseudoRevenueBookingRequest::setListBookingsWithInvoice()
     * @param string $startTravel
     * @param string $endTravel
     * @param string $orgUnit
     * @param int $orderNo
     * @param bool $listBookingsWithInvoice
     */
    public function __construct(?string $startTravel = null, ?string $endTravel = null, ?string $orgUnit = null, ?int $orderNo = null, ?bool $listBookingsWithInvoice = null)
    {
        $this
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setOrgUnit($orgUnit)
            ->setOrderNo($orderNo)
            ->setListBookingsWithInvoice($listBookingsWithInvoice);
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get listBookingsWithInvoice value
     * @return bool|null
     */
    public function getListBookingsWithInvoice(): ?bool
    {
        return $this->listBookingsWithInvoice;
    }
    /**
     * Set listBookingsWithInvoice value
     * @param bool $listBookingsWithInvoice
     * @return \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest
     */
    public function setListBookingsWithInvoice(?bool $listBookingsWithInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($listBookingsWithInvoice) && !is_bool($listBookingsWithInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($listBookingsWithInvoice, true), gettype($listBookingsWithInvoice)), __LINE__);
        }
        $this->listBookingsWithInvoice = $listBookingsWithInvoice;
        
        return $this;
    }
}
