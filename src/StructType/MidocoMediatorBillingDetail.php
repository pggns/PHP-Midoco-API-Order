<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMediatorBillingDetail StructType
 * @subpackage Structs
 */
class MidocoMediatorBillingDetail extends MediatorBillingDetailDTO
{
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The bookingCreationDate
     * @var string|null
     */
    protected ?string $bookingCreationDate = null;
    /**
     * The bookingStartTravelDate
     * @var string|null
     */
    protected ?string $bookingStartTravelDate = null;
    /**
     * Constructor method for MidocoMediatorBillingDetail
     * @uses MidocoMediatorBillingDetail::setTravelType()
     * @uses MidocoMediatorBillingDetail::setBookingCreationDate()
     * @uses MidocoMediatorBillingDetail::setBookingStartTravelDate()
     * @param string $travelType
     * @param string $bookingCreationDate
     * @param string $bookingStartTravelDate
     */
    public function __construct(?string $travelType = null, ?string $bookingCreationDate = null, ?string $bookingStartTravelDate = null)
    {
        $this
            ->setTravelType($travelType)
            ->setBookingCreationDate($bookingCreationDate)
            ->setBookingStartTravelDate($bookingStartTravelDate);
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
    /**
     * Get bookingCreationDate value
     * @return string|null
     */
    public function getBookingCreationDate(): ?string
    {
        return $this->bookingCreationDate;
    }
    /**
     * Set bookingCreationDate value
     * @param string $bookingCreationDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail
     */
    public function setBookingCreationDate(?string $bookingCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingCreationDate) && !is_string($bookingCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingCreationDate, true), gettype($bookingCreationDate)), __LINE__);
        }
        $this->bookingCreationDate = $bookingCreationDate;
        
        return $this;
    }
    /**
     * Get bookingStartTravelDate value
     * @return string|null
     */
    public function getBookingStartTravelDate(): ?string
    {
        return $this->bookingStartTravelDate;
    }
    /**
     * Set bookingStartTravelDate value
     * @param string $bookingStartTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail
     */
    public function setBookingStartTravelDate(?string $bookingStartTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingStartTravelDate) && !is_string($bookingStartTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingStartTravelDate, true), gettype($bookingStartTravelDate)), __LINE__);
        }
        $this->bookingStartTravelDate = $bookingStartTravelDate;
        
        return $this;
    }
}
