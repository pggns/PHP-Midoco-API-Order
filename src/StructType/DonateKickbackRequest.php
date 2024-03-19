<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DonateKickbackRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DonateKickbackRequest extends AbstractStructBase
{
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $customerId;
    /**
     * The travelStartDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $travelStartDate;
    /**
     * The bookingId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $bookingId;
    /**
     * The donationAmount
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    protected float $donationAmount;
    /**
     * The mediatorId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $mediatorId;
    /**
     * Constructor method for DonateKickbackRequest
     * @uses DonateKickbackRequest::setCustomerId()
     * @uses DonateKickbackRequest::setTravelStartDate()
     * @uses DonateKickbackRequest::setBookingId()
     * @uses DonateKickbackRequest::setDonationAmount()
     * @uses DonateKickbackRequest::setMediatorId()
     * @param int $customerId
     * @param string $travelStartDate
     * @param string $bookingId
     * @param float $donationAmount
     * @param string $mediatorId
     */
    public function __construct(int $customerId, string $travelStartDate, string $bookingId, float $donationAmount, string $mediatorId)
    {
        $this
            ->setCustomerId($customerId)
            ->setTravelStartDate($travelStartDate)
            ->setBookingId($bookingId)
            ->setDonationAmount($donationAmount)
            ->setMediatorId($mediatorId);
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
     * @return \Pggns\MidocoApi\Order\StructType\DonateKickbackRequest
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
     * Get travelStartDate value
     * @return string
     */
    public function getTravelStartDate(): string
    {
        return $this->travelStartDate;
    }
    /**
     * Set travelStartDate value
     * @param string $travelStartDate
     * @return \Pggns\MidocoApi\Order\StructType\DonateKickbackRequest
     */
    public function setTravelStartDate(string $travelStartDate): self
    {
        // validation for constraint: string
        if (!is_null($travelStartDate) && !is_string($travelStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStartDate, true), gettype($travelStartDate)), __LINE__);
        }
        $this->travelStartDate = $travelStartDate;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string
     */
    public function getBookingId(): string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\DonateKickbackRequest
     */
    public function setBookingId(string $bookingId): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get donationAmount value
     * @return float
     */
    public function getDonationAmount(): float
    {
        return $this->donationAmount;
    }
    /**
     * Set donationAmount value
     * @param float $donationAmount
     * @return \Pggns\MidocoApi\Order\StructType\DonateKickbackRequest
     */
    public function setDonationAmount(float $donationAmount): self
    {
        // validation for constraint: float
        if (!is_null($donationAmount) && !(is_float($donationAmount) || is_numeric($donationAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($donationAmount, true), gettype($donationAmount)), __LINE__);
        }
        $this->donationAmount = $donationAmount;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string
     */
    public function getMediatorId(): string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\DonateKickbackRequest
     */
    public function setMediatorId(string $mediatorId): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
}
