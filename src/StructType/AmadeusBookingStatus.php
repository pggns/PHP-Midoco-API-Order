<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmadeusBookingStatus StructType
 * @subpackage Structs
 */
class AmadeusBookingStatus extends AbstractStructBase
{
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $supplierId;
    /**
     * The bookingId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $bookingId;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $status;
    /**
     * The MidocoTravelDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelDetail
     * @var \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[]
     */
    protected array $MidocoTravelDetail = [];
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * Constructor method for AmadeusBookingStatus
     * @uses AmadeusBookingStatus::setSupplierId()
     * @uses AmadeusBookingStatus::setBookingId()
     * @uses AmadeusBookingStatus::setStatus()
     * @uses AmadeusBookingStatus::setMidocoTravelDetail()
     * @uses AmadeusBookingStatus::setTravelType()
     * @uses AmadeusBookingStatus::setStartDate()
     * @uses AmadeusBookingStatus::setEndDate()
     * @uses AmadeusBookingStatus::setTotalPrice()
     * @param string $supplierId
     * @param string $bookingId
     * @param string $status
     * @param \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[] $midocoTravelDetail
     * @param string $travelType
     * @param string $startDate
     * @param string $endDate
     * @param float $totalPrice
     */
    public function __construct(string $supplierId, string $bookingId, string $status, array $midocoTravelDetail = [], ?string $travelType = null, ?string $startDate = null, ?string $endDate = null, ?float $totalPrice = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setStatus($status)
            ->setMidocoTravelDetail($midocoTravelDetail)
            ->setTravelType($travelType)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setTotalPrice($totalPrice);
    }
    /**
     * Get supplierId value
     * @return string
     */
    public function getSupplierId(): string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus
     */
    public function setSupplierId(string $supplierId): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus
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
     * Get status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get MidocoTravelDetail value
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[]
     */
    public function getMidocoTravelDetail(): array
    {
        return $this->MidocoTravelDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelDetailForArrayConstraintsFromSetMidocoTravelDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $amadeusBookingStatusMidocoTravelDetailItem) {
            // validation for constraint: itemType
            if (!$amadeusBookingStatusMidocoTravelDetailItem instanceof \Pggns\MidocoApi\Order\StructType\TravelDetailDTO) {
                $invalidValues[] = is_object($amadeusBookingStatusMidocoTravelDetailItem) ? get_class($amadeusBookingStatusMidocoTravelDetailItem) : sprintf('%s(%s)', gettype($amadeusBookingStatusMidocoTravelDetailItem), var_export($amadeusBookingStatusMidocoTravelDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[] $midocoTravelDetail
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus
     */
    public function setMidocoTravelDetail(array $midocoTravelDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelDetailArrayErrorMessage = self::validateMidocoTravelDetailForArrayConstraintsFromSetMidocoTravelDetail($midocoTravelDetail))) {
            throw new InvalidArgumentException($midocoTravelDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelDetail = $midocoTravelDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus
     */
    public function addToMidocoTravelDetail(\Pggns\MidocoApi\Order\StructType\TravelDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TravelDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelDetail[] = $item;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus
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
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
}
