<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelDetailDTO StructType
 * @subpackage Structs
 */
class TravelDetailDTO extends AbstractStructBase
{
    /**
     * The accomodation
     * @var string|null
     */
    protected ?string $accomodation = null;
    /**
     * The accomodationDescription
     * @var string|null
     */
    protected ?string $accomodationDescription = null;
    /**
     * The arrivalTime
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The catering
     * @var string|null
     */
    protected ?string $catering = null;
    /**
     * The cateringDescription
     * @var string|null
     */
    protected ?string $cateringDescription = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The countryDescription
     * @var string|null
     */
    protected ?string $countryDescription = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureDescription
     * @var string|null
     */
    protected ?string $departureDescription = null;
    /**
     * The departureTime
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The departureViaCode
     * @var string|null
     */
    protected ?string $departureViaCode = null;
    /**
     * The departureViaDescription
     * @var string|null
     */
    protected ?string $departureViaDescription = null;
    /**
     * The departureViaTime
     * @var string|null
     */
    protected ?string $departureViaTime = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The destinationDescription
     * @var string|null
     */
    protected ?string $destinationDescription = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The hotelCategory
     * @var string|null
     */
    protected ?string $hotelCategory = null;
    /**
     * The hotelCode
     * @var string|null
     */
    protected ?string $hotelCode = null;
    /**
     * The hotelName
     * @var string|null
     */
    protected ?string $hotelName = null;
    /**
     * The iffCode
     * @var string|null
     */
    protected ?string $iffCode = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The noOfServices
     * @var string|null
     */
    protected ?string $noOfServices = null;
    /**
     * The opicCode
     * @var int|null
     */
    protected ?int $opicCode = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The originalItemBookingId
     * @var string|null
     */
    protected ?string $originalItemBookingId = null;
    /**
     * The originalItemItemId
     * @var int|null
     */
    protected ?int $originalItemItemId = null;
    /**
     * The originalItemPositionNo
     * @var int|null
     */
    protected ?int $originalItemPositionNo = null;
    /**
     * The originalItemSupplierId
     * @var string|null
     */
    protected ?string $originalItemSupplierId = null;
    /**
     * The originalPrice
     * @var float|null
     */
    protected ?float $originalPrice = null;
    /**
     * The paxAssigned
     * @var string|null
     */
    protected ?string $paxAssigned = null;
    /**
     * The personsPerService
     * @var int|null
     */
    protected ?int $personsPerService = null;
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The retViaCode
     * @var string|null
     */
    protected ?string $retViaCode = null;
    /**
     * The retViaDescription
     * @var string|null
     */
    protected ?string $retViaDescription = null;
    /**
     * The retViaTime
     * @var string|null
     */
    protected ?string $retViaTime = null;
    /**
     * The returnArrivalTime
     * @var string|null
     */
    protected ?string $returnArrivalTime = null;
    /**
     * The returnCarrier
     * @var string|null
     */
    protected ?string $returnCarrier = null;
    /**
     * The returnDepartureCode
     * @var string|null
     */
    protected ?string $returnDepartureCode = null;
    /**
     * The returnDepartureDescription
     * @var string|null
     */
    protected ?string $returnDepartureDescription = null;
    /**
     * The returnDepartureTime
     * @var string|null
     */
    protected ?string $returnDepartureTime = null;
    /**
     * The returnDestinationCode
     * @var string|null
     */
    protected ?string $returnDestinationCode = null;
    /**
     * The returnDestinationDescription
     * @var string|null
     */
    protected ?string $returnDestinationDescription = null;
    /**
     * The returnFlightNo
     * @var string|null
     */
    protected ?string $returnFlightNo = null;
    /**
     * The serviceCode
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * The serviceDescription
     * @var string|null
     */
    protected ?string $serviceDescription = null;
    /**
     * The serviceName
     * @var string|null
     */
    protected ?string $serviceName = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The tariffCode
     * @var string|null
     */
    protected ?string $tariffCode = null;
    /**
     * The transfer
     * @var string|null
     */
    protected ?string $transfer = null;
    /**
     * Constructor method for TravelDetailDTO
     * @uses TravelDetailDTO::setAccomodation()
     * @uses TravelDetailDTO::setAccomodationDescription()
     * @uses TravelDetailDTO::setArrivalTime()
     * @uses TravelDetailDTO::setCarrier()
     * @uses TravelDetailDTO::setCatering()
     * @uses TravelDetailDTO::setCateringDescription()
     * @uses TravelDetailDTO::setCountryCode()
     * @uses TravelDetailDTO::setCountryDescription()
     * @uses TravelDetailDTO::setCurrency()
     * @uses TravelDetailDTO::setDepartureCode()
     * @uses TravelDetailDTO::setDepartureDescription()
     * @uses TravelDetailDTO::setDepartureTime()
     * @uses TravelDetailDTO::setDepartureViaCode()
     * @uses TravelDetailDTO::setDepartureViaDescription()
     * @uses TravelDetailDTO::setDepartureViaTime()
     * @uses TravelDetailDTO::setDestinationCode()
     * @uses TravelDetailDTO::setDestinationDescription()
     * @uses TravelDetailDTO::setEndDate()
     * @uses TravelDetailDTO::setExchangeRate()
     * @uses TravelDetailDTO::setFlightNo()
     * @uses TravelDetailDTO::setHotelCategory()
     * @uses TravelDetailDTO::setHotelCode()
     * @uses TravelDetailDTO::setHotelName()
     * @uses TravelDetailDTO::setIffCode()
     * @uses TravelDetailDTO::setItemId()
     * @uses TravelDetailDTO::setNoOfServices()
     * @uses TravelDetailDTO::setOpicCode()
     * @uses TravelDetailDTO::setOriginalCurrency()
     * @uses TravelDetailDTO::setOriginalItemBookingId()
     * @uses TravelDetailDTO::setOriginalItemItemId()
     * @uses TravelDetailDTO::setOriginalItemPositionNo()
     * @uses TravelDetailDTO::setOriginalItemSupplierId()
     * @uses TravelDetailDTO::setOriginalPrice()
     * @uses TravelDetailDTO::setPaxAssigned()
     * @uses TravelDetailDTO::setPersonsPerService()
     * @uses TravelDetailDTO::setPositionNo()
     * @uses TravelDetailDTO::setPrice()
     * @uses TravelDetailDTO::setRetViaCode()
     * @uses TravelDetailDTO::setRetViaDescription()
     * @uses TravelDetailDTO::setRetViaTime()
     * @uses TravelDetailDTO::setReturnArrivalTime()
     * @uses TravelDetailDTO::setReturnCarrier()
     * @uses TravelDetailDTO::setReturnDepartureCode()
     * @uses TravelDetailDTO::setReturnDepartureDescription()
     * @uses TravelDetailDTO::setReturnDepartureTime()
     * @uses TravelDetailDTO::setReturnDestinationCode()
     * @uses TravelDetailDTO::setReturnDestinationDescription()
     * @uses TravelDetailDTO::setReturnFlightNo()
     * @uses TravelDetailDTO::setServiceCode()
     * @uses TravelDetailDTO::setServiceDescription()
     * @uses TravelDetailDTO::setServiceName()
     * @uses TravelDetailDTO::setServiceStatus()
     * @uses TravelDetailDTO::setStartDate()
     * @uses TravelDetailDTO::setTariffCode()
     * @uses TravelDetailDTO::setTransfer()
     * @param string $accomodation
     * @param string $accomodationDescription
     * @param string $arrivalTime
     * @param string $carrier
     * @param string $catering
     * @param string $cateringDescription
     * @param string $countryCode
     * @param string $countryDescription
     * @param string $currency
     * @param string $departureCode
     * @param string $departureDescription
     * @param string $departureTime
     * @param string $departureViaCode
     * @param string $departureViaDescription
     * @param string $departureViaTime
     * @param string $destinationCode
     * @param string $destinationDescription
     * @param string $endDate
     * @param float $exchangeRate
     * @param string $flightNo
     * @param string $hotelCategory
     * @param string $hotelCode
     * @param string $hotelName
     * @param string $iffCode
     * @param int $itemId
     * @param string $noOfServices
     * @param int $opicCode
     * @param string $originalCurrency
     * @param string $originalItemBookingId
     * @param int $originalItemItemId
     * @param int $originalItemPositionNo
     * @param string $originalItemSupplierId
     * @param float $originalPrice
     * @param string $paxAssigned
     * @param int $personsPerService
     * @param int $positionNo
     * @param float $price
     * @param string $retViaCode
     * @param string $retViaDescription
     * @param string $retViaTime
     * @param string $returnArrivalTime
     * @param string $returnCarrier
     * @param string $returnDepartureCode
     * @param string $returnDepartureDescription
     * @param string $returnDepartureTime
     * @param string $returnDestinationCode
     * @param string $returnDestinationDescription
     * @param string $returnFlightNo
     * @param string $serviceCode
     * @param string $serviceDescription
     * @param string $serviceName
     * @param string $serviceStatus
     * @param string $startDate
     * @param string $tariffCode
     * @param string $transfer
     */
    public function __construct(?string $accomodation = null, ?string $accomodationDescription = null, ?string $arrivalTime = null, ?string $carrier = null, ?string $catering = null, ?string $cateringDescription = null, ?string $countryCode = null, ?string $countryDescription = null, ?string $currency = null, ?string $departureCode = null, ?string $departureDescription = null, ?string $departureTime = null, ?string $departureViaCode = null, ?string $departureViaDescription = null, ?string $departureViaTime = null, ?string $destinationCode = null, ?string $destinationDescription = null, ?string $endDate = null, ?float $exchangeRate = null, ?string $flightNo = null, ?string $hotelCategory = null, ?string $hotelCode = null, ?string $hotelName = null, ?string $iffCode = null, ?int $itemId = null, ?string $noOfServices = null, ?int $opicCode = null, ?string $originalCurrency = null, ?string $originalItemBookingId = null, ?int $originalItemItemId = null, ?int $originalItemPositionNo = null, ?string $originalItemSupplierId = null, ?float $originalPrice = null, ?string $paxAssigned = null, ?int $personsPerService = null, ?int $positionNo = null, ?float $price = null, ?string $retViaCode = null, ?string $retViaDescription = null, ?string $retViaTime = null, ?string $returnArrivalTime = null, ?string $returnCarrier = null, ?string $returnDepartureCode = null, ?string $returnDepartureDescription = null, ?string $returnDepartureTime = null, ?string $returnDestinationCode = null, ?string $returnDestinationDescription = null, ?string $returnFlightNo = null, ?string $serviceCode = null, ?string $serviceDescription = null, ?string $serviceName = null, ?string $serviceStatus = null, ?string $startDate = null, ?string $tariffCode = null, ?string $transfer = null)
    {
        $this
            ->setAccomodation($accomodation)
            ->setAccomodationDescription($accomodationDescription)
            ->setArrivalTime($arrivalTime)
            ->setCarrier($carrier)
            ->setCatering($catering)
            ->setCateringDescription($cateringDescription)
            ->setCountryCode($countryCode)
            ->setCountryDescription($countryDescription)
            ->setCurrency($currency)
            ->setDepartureCode($departureCode)
            ->setDepartureDescription($departureDescription)
            ->setDepartureTime($departureTime)
            ->setDepartureViaCode($departureViaCode)
            ->setDepartureViaDescription($departureViaDescription)
            ->setDepartureViaTime($departureViaTime)
            ->setDestinationCode($destinationCode)
            ->setDestinationDescription($destinationDescription)
            ->setEndDate($endDate)
            ->setExchangeRate($exchangeRate)
            ->setFlightNo($flightNo)
            ->setHotelCategory($hotelCategory)
            ->setHotelCode($hotelCode)
            ->setHotelName($hotelName)
            ->setIffCode($iffCode)
            ->setItemId($itemId)
            ->setNoOfServices($noOfServices)
            ->setOpicCode($opicCode)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalItemBookingId($originalItemBookingId)
            ->setOriginalItemItemId($originalItemItemId)
            ->setOriginalItemPositionNo($originalItemPositionNo)
            ->setOriginalItemSupplierId($originalItemSupplierId)
            ->setOriginalPrice($originalPrice)
            ->setPaxAssigned($paxAssigned)
            ->setPersonsPerService($personsPerService)
            ->setPositionNo($positionNo)
            ->setPrice($price)
            ->setRetViaCode($retViaCode)
            ->setRetViaDescription($retViaDescription)
            ->setRetViaTime($retViaTime)
            ->setReturnArrivalTime($returnArrivalTime)
            ->setReturnCarrier($returnCarrier)
            ->setReturnDepartureCode($returnDepartureCode)
            ->setReturnDepartureDescription($returnDepartureDescription)
            ->setReturnDepartureTime($returnDepartureTime)
            ->setReturnDestinationCode($returnDestinationCode)
            ->setReturnDestinationDescription($returnDestinationDescription)
            ->setReturnFlightNo($returnFlightNo)
            ->setServiceCode($serviceCode)
            ->setServiceDescription($serviceDescription)
            ->setServiceName($serviceName)
            ->setServiceStatus($serviceStatus)
            ->setStartDate($startDate)
            ->setTariffCode($tariffCode)
            ->setTransfer($transfer);
    }
    /**
     * Get accomodation value
     * @return string|null
     */
    public function getAccomodation(): ?string
    {
        return $this->accomodation;
    }
    /**
     * Set accomodation value
     * @param string $accomodation
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setAccomodation(?string $accomodation = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodation) && !is_string($accomodation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodation, true), gettype($accomodation)), __LINE__);
        }
        $this->accomodation = $accomodation;
        
        return $this;
    }
    /**
     * Get accomodationDescription value
     * @return string|null
     */
    public function getAccomodationDescription(): ?string
    {
        return $this->accomodationDescription;
    }
    /**
     * Set accomodationDescription value
     * @param string $accomodationDescription
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setAccomodationDescription(?string $accomodationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationDescription) && !is_string($accomodationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationDescription, true), gettype($accomodationDescription)), __LINE__);
        }
        $this->accomodationDescription = $accomodationDescription;
        
        return $this;
    }
    /**
     * Get arrivalTime value
     * @return string|null
     */
    public function getArrivalTime(): ?string
    {
        return $this->arrivalTime;
    }
    /**
     * Set arrivalTime value
     * @param string $arrivalTime
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->arrivalTime = $arrivalTime;
        
        return $this;
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        
        return $this;
    }
    /**
     * Get catering value
     * @return string|null
     */
    public function getCatering(): ?string
    {
        return $this->catering;
    }
    /**
     * Set catering value
     * @param string $catering
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setCatering(?string $catering = null): self
    {
        // validation for constraint: string
        if (!is_null($catering) && !is_string($catering)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catering, true), gettype($catering)), __LINE__);
        }
        $this->catering = $catering;
        
        return $this;
    }
    /**
     * Get cateringDescription value
     * @return string|null
     */
    public function getCateringDescription(): ?string
    {
        return $this->cateringDescription;
    }
    /**
     * Set cateringDescription value
     * @param string $cateringDescription
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setCateringDescription(?string $cateringDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cateringDescription) && !is_string($cateringDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cateringDescription, true), gettype($cateringDescription)), __LINE__);
        }
        $this->cateringDescription = $cateringDescription;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get countryDescription value
     * @return string|null
     */
    public function getCountryDescription(): ?string
    {
        return $this->countryDescription;
    }
    /**
     * Set countryDescription value
     * @param string $countryDescription
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setCountryDescription(?string $countryDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($countryDescription) && !is_string($countryDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryDescription, true), gettype($countryDescription)), __LINE__);
        }
        $this->countryDescription = $countryDescription;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get departureCode value
     * @return string|null
     */
    public function getDepartureCode(): ?string
    {
        return $this->departureCode;
    }
    /**
     * Set departureCode value
     * @param string $departureCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setDepartureCode(?string $departureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCode) && !is_string($departureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCode, true), gettype($departureCode)), __LINE__);
        }
        $this->departureCode = $departureCode;
        
        return $this;
    }
    /**
     * Get departureDescription value
     * @return string|null
     */
    public function getDepartureDescription(): ?string
    {
        return $this->departureDescription;
    }
    /**
     * Set departureDescription value
     * @param string $departureDescription
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setDepartureDescription(?string $departureDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDescription) && !is_string($departureDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDescription, true), gettype($departureDescription)), __LINE__);
        }
        $this->departureDescription = $departureDescription;
        
        return $this;
    }
    /**
     * Get departureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->departureTime;
    }
    /**
     * Set departureTime value
     * @param string $departureTime
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->departureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get departureViaCode value
     * @return string|null
     */
    public function getDepartureViaCode(): ?string
    {
        return $this->departureViaCode;
    }
    /**
     * Set departureViaCode value
     * @param string $departureViaCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setDepartureViaCode(?string $departureViaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureViaCode) && !is_string($departureViaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureViaCode, true), gettype($departureViaCode)), __LINE__);
        }
        $this->departureViaCode = $departureViaCode;
        
        return $this;
    }
    /**
     * Get departureViaDescription value
     * @return string|null
     */
    public function getDepartureViaDescription(): ?string
    {
        return $this->departureViaDescription;
    }
    /**
     * Set departureViaDescription value
     * @param string $departureViaDescription
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setDepartureViaDescription(?string $departureViaDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($departureViaDescription) && !is_string($departureViaDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureViaDescription, true), gettype($departureViaDescription)), __LINE__);
        }
        $this->departureViaDescription = $departureViaDescription;
        
        return $this;
    }
    /**
     * Get departureViaTime value
     * @return string|null
     */
    public function getDepartureViaTime(): ?string
    {
        return $this->departureViaTime;
    }
    /**
     * Set departureViaTime value
     * @param string $departureViaTime
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setDepartureViaTime(?string $departureViaTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureViaTime) && !is_string($departureViaTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureViaTime, true), gettype($departureViaTime)), __LINE__);
        }
        $this->departureViaTime = $departureViaTime;
        
        return $this;
    }
    /**
     * Get destinationCode value
     * @return string|null
     */
    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }
    /**
     * Set destinationCode value
     * @param string $destinationCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
        return $this;
    }
    /**
     * Get destinationDescription value
     * @return string|null
     */
    public function getDestinationDescription(): ?string
    {
        return $this->destinationDescription;
    }
    /**
     * Set destinationDescription value
     * @param string $destinationDescription
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setDestinationDescription(?string $destinationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationDescription) && !is_string($destinationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDescription, true), gettype($destinationDescription)), __LINE__);
        }
        $this->destinationDescription = $destinationDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
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
     * Get exchangeRate value
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }
    /**
     * Set exchangeRate value
     * @param float $exchangeRate
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setExchangeRate(?float $exchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRate) && !(is_float($exchangeRate) || is_numeric($exchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRate, true), gettype($exchangeRate)), __LINE__);
        }
        $this->exchangeRate = $exchangeRate;
        
        return $this;
    }
    /**
     * Get flightNo value
     * @return string|null
     */
    public function getFlightNo(): ?string
    {
        return $this->flightNo;
    }
    /**
     * Set flightNo value
     * @param string $flightNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setFlightNo(?string $flightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNo) && !is_string($flightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNo, true), gettype($flightNo)), __LINE__);
        }
        $this->flightNo = $flightNo;
        
        return $this;
    }
    /**
     * Get hotelCategory value
     * @return string|null
     */
    public function getHotelCategory(): ?string
    {
        return $this->hotelCategory;
    }
    /**
     * Set hotelCategory value
     * @param string $hotelCategory
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setHotelCategory(?string $hotelCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCategory) && !is_string($hotelCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCategory, true), gettype($hotelCategory)), __LINE__);
        }
        $this->hotelCategory = $hotelCategory;
        
        return $this;
    }
    /**
     * Get hotelCode value
     * @return string|null
     */
    public function getHotelCode(): ?string
    {
        return $this->hotelCode;
    }
    /**
     * Set hotelCode value
     * @param string $hotelCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCode, true), gettype($hotelCode)), __LINE__);
        }
        $this->hotelCode = $hotelCode;
        
        return $this;
    }
    /**
     * Get hotelName value
     * @return string|null
     */
    public function getHotelName(): ?string
    {
        return $this->hotelName;
    }
    /**
     * Set hotelName value
     * @param string $hotelName
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setHotelName(?string $hotelName = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelName, true), gettype($hotelName)), __LINE__);
        }
        $this->hotelName = $hotelName;
        
        return $this;
    }
    /**
     * Get iffCode value
     * @return string|null
     */
    public function getIffCode(): ?string
    {
        return $this->iffCode;
    }
    /**
     * Set iffCode value
     * @param string $iffCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setIffCode(?string $iffCode = null): self
    {
        // validation for constraint: string
        if (!is_null($iffCode) && !is_string($iffCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iffCode, true), gettype($iffCode)), __LINE__);
        }
        $this->iffCode = $iffCode;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get noOfServices value
     * @return string|null
     */
    public function getNoOfServices(): ?string
    {
        return $this->noOfServices;
    }
    /**
     * Set noOfServices value
     * @param string $noOfServices
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setNoOfServices(?string $noOfServices = null): self
    {
        // validation for constraint: string
        if (!is_null($noOfServices) && !is_string($noOfServices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noOfServices, true), gettype($noOfServices)), __LINE__);
        }
        $this->noOfServices = $noOfServices;
        
        return $this;
    }
    /**
     * Get opicCode value
     * @return int|null
     */
    public function getOpicCode(): ?int
    {
        return $this->opicCode;
    }
    /**
     * Set opicCode value
     * @param int $opicCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setOpicCode(?int $opicCode = null): self
    {
        // validation for constraint: int
        if (!is_null($opicCode) && !(is_int($opicCode) || ctype_digit($opicCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($opicCode, true), gettype($opicCode)), __LINE__);
        }
        $this->opicCode = $opicCode;
        
        return $this;
    }
    /**
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
    }
    /**
     * Get originalItemBookingId value
     * @return string|null
     */
    public function getOriginalItemBookingId(): ?string
    {
        return $this->originalItemBookingId;
    }
    /**
     * Set originalItemBookingId value
     * @param string $originalItemBookingId
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setOriginalItemBookingId(?string $originalItemBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($originalItemBookingId) && !is_string($originalItemBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalItemBookingId, true), gettype($originalItemBookingId)), __LINE__);
        }
        $this->originalItemBookingId = $originalItemBookingId;
        
        return $this;
    }
    /**
     * Get originalItemItemId value
     * @return int|null
     */
    public function getOriginalItemItemId(): ?int
    {
        return $this->originalItemItemId;
    }
    /**
     * Set originalItemItemId value
     * @param int $originalItemItemId
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setOriginalItemItemId(?int $originalItemItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($originalItemItemId) && !(is_int($originalItemItemId) || ctype_digit($originalItemItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($originalItemItemId, true), gettype($originalItemItemId)), __LINE__);
        }
        $this->originalItemItemId = $originalItemItemId;
        
        return $this;
    }
    /**
     * Get originalItemPositionNo value
     * @return int|null
     */
    public function getOriginalItemPositionNo(): ?int
    {
        return $this->originalItemPositionNo;
    }
    /**
     * Set originalItemPositionNo value
     * @param int $originalItemPositionNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setOriginalItemPositionNo(?int $originalItemPositionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($originalItemPositionNo) && !(is_int($originalItemPositionNo) || ctype_digit($originalItemPositionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($originalItemPositionNo, true), gettype($originalItemPositionNo)), __LINE__);
        }
        $this->originalItemPositionNo = $originalItemPositionNo;
        
        return $this;
    }
    /**
     * Get originalItemSupplierId value
     * @return string|null
     */
    public function getOriginalItemSupplierId(): ?string
    {
        return $this->originalItemSupplierId;
    }
    /**
     * Set originalItemSupplierId value
     * @param string $originalItemSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setOriginalItemSupplierId(?string $originalItemSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($originalItemSupplierId) && !is_string($originalItemSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalItemSupplierId, true), gettype($originalItemSupplierId)), __LINE__);
        }
        $this->originalItemSupplierId = $originalItemSupplierId;
        
        return $this;
    }
    /**
     * Get originalPrice value
     * @return float|null
     */
    public function getOriginalPrice(): ?float
    {
        return $this->originalPrice;
    }
    /**
     * Set originalPrice value
     * @param float $originalPrice
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setOriginalPrice(?float $originalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($originalPrice) && !(is_float($originalPrice) || is_numeric($originalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalPrice, true), gettype($originalPrice)), __LINE__);
        }
        $this->originalPrice = $originalPrice;
        
        return $this;
    }
    /**
     * Get paxAssigned value
     * @return string|null
     */
    public function getPaxAssigned(): ?string
    {
        return $this->paxAssigned;
    }
    /**
     * Set paxAssigned value
     * @param string $paxAssigned
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setPaxAssigned(?string $paxAssigned = null): self
    {
        // validation for constraint: string
        if (!is_null($paxAssigned) && !is_string($paxAssigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paxAssigned, true), gettype($paxAssigned)), __LINE__);
        }
        $this->paxAssigned = $paxAssigned;
        
        return $this;
    }
    /**
     * Get personsPerService value
     * @return int|null
     */
    public function getPersonsPerService(): ?int
    {
        return $this->personsPerService;
    }
    /**
     * Set personsPerService value
     * @param int $personsPerService
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setPersonsPerService(?int $personsPerService = null): self
    {
        // validation for constraint: int
        if (!is_null($personsPerService) && !(is_int($personsPerService) || ctype_digit($personsPerService))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personsPerService, true), gettype($personsPerService)), __LINE__);
        }
        $this->personsPerService = $personsPerService;
        
        return $this;
    }
    /**
     * Get positionNo value
     * @return int|null
     */
    public function getPositionNo(): ?int
    {
        return $this->positionNo;
    }
    /**
     * Set positionNo value
     * @param int $positionNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setPositionNo(?int $positionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($positionNo) && !(is_int($positionNo) || ctype_digit($positionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionNo, true), gettype($positionNo)), __LINE__);
        }
        $this->positionNo = $positionNo;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get retViaCode value
     * @return string|null
     */
    public function getRetViaCode(): ?string
    {
        return $this->retViaCode;
    }
    /**
     * Set retViaCode value
     * @param string $retViaCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setRetViaCode(?string $retViaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($retViaCode) && !is_string($retViaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retViaCode, true), gettype($retViaCode)), __LINE__);
        }
        $this->retViaCode = $retViaCode;
        
        return $this;
    }
    /**
     * Get retViaDescription value
     * @return string|null
     */
    public function getRetViaDescription(): ?string
    {
        return $this->retViaDescription;
    }
    /**
     * Set retViaDescription value
     * @param string $retViaDescription
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setRetViaDescription(?string $retViaDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($retViaDescription) && !is_string($retViaDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retViaDescription, true), gettype($retViaDescription)), __LINE__);
        }
        $this->retViaDescription = $retViaDescription;
        
        return $this;
    }
    /**
     * Get retViaTime value
     * @return string|null
     */
    public function getRetViaTime(): ?string
    {
        return $this->retViaTime;
    }
    /**
     * Set retViaTime value
     * @param string $retViaTime
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setRetViaTime(?string $retViaTime = null): self
    {
        // validation for constraint: string
        if (!is_null($retViaTime) && !is_string($retViaTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retViaTime, true), gettype($retViaTime)), __LINE__);
        }
        $this->retViaTime = $retViaTime;
        
        return $this;
    }
    /**
     * Get returnArrivalTime value
     * @return string|null
     */
    public function getReturnArrivalTime(): ?string
    {
        return $this->returnArrivalTime;
    }
    /**
     * Set returnArrivalTime value
     * @param string $returnArrivalTime
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setReturnArrivalTime(?string $returnArrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnArrivalTime) && !is_string($returnArrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnArrivalTime, true), gettype($returnArrivalTime)), __LINE__);
        }
        $this->returnArrivalTime = $returnArrivalTime;
        
        return $this;
    }
    /**
     * Get returnCarrier value
     * @return string|null
     */
    public function getReturnCarrier(): ?string
    {
        return $this->returnCarrier;
    }
    /**
     * Set returnCarrier value
     * @param string $returnCarrier
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setReturnCarrier(?string $returnCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($returnCarrier) && !is_string($returnCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCarrier, true), gettype($returnCarrier)), __LINE__);
        }
        $this->returnCarrier = $returnCarrier;
        
        return $this;
    }
    /**
     * Get returnDepartureCode value
     * @return string|null
     */
    public function getReturnDepartureCode(): ?string
    {
        return $this->returnDepartureCode;
    }
    /**
     * Set returnDepartureCode value
     * @param string $returnDepartureCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setReturnDepartureCode(?string $returnDepartureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureCode) && !is_string($returnDepartureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureCode, true), gettype($returnDepartureCode)), __LINE__);
        }
        $this->returnDepartureCode = $returnDepartureCode;
        
        return $this;
    }
    /**
     * Get returnDepartureDescription value
     * @return string|null
     */
    public function getReturnDepartureDescription(): ?string
    {
        return $this->returnDepartureDescription;
    }
    /**
     * Set returnDepartureDescription value
     * @param string $returnDepartureDescription
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setReturnDepartureDescription(?string $returnDepartureDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureDescription) && !is_string($returnDepartureDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureDescription, true), gettype($returnDepartureDescription)), __LINE__);
        }
        $this->returnDepartureDescription = $returnDepartureDescription;
        
        return $this;
    }
    /**
     * Get returnDepartureTime value
     * @return string|null
     */
    public function getReturnDepartureTime(): ?string
    {
        return $this->returnDepartureTime;
    }
    /**
     * Set returnDepartureTime value
     * @param string $returnDepartureTime
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setReturnDepartureTime(?string $returnDepartureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureTime) && !is_string($returnDepartureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureTime, true), gettype($returnDepartureTime)), __LINE__);
        }
        $this->returnDepartureTime = $returnDepartureTime;
        
        return $this;
    }
    /**
     * Get returnDestinationCode value
     * @return string|null
     */
    public function getReturnDestinationCode(): ?string
    {
        return $this->returnDestinationCode;
    }
    /**
     * Set returnDestinationCode value
     * @param string $returnDestinationCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setReturnDestinationCode(?string $returnDestinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationCode) && !is_string($returnDestinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationCode, true), gettype($returnDestinationCode)), __LINE__);
        }
        $this->returnDestinationCode = $returnDestinationCode;
        
        return $this;
    }
    /**
     * Get returnDestinationDescription value
     * @return string|null
     */
    public function getReturnDestinationDescription(): ?string
    {
        return $this->returnDestinationDescription;
    }
    /**
     * Set returnDestinationDescription value
     * @param string $returnDestinationDescription
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setReturnDestinationDescription(?string $returnDestinationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationDescription) && !is_string($returnDestinationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationDescription, true), gettype($returnDestinationDescription)), __LINE__);
        }
        $this->returnDestinationDescription = $returnDestinationDescription;
        
        return $this;
    }
    /**
     * Get returnFlightNo value
     * @return string|null
     */
    public function getReturnFlightNo(): ?string
    {
        return $this->returnFlightNo;
    }
    /**
     * Set returnFlightNo value
     * @param string $returnFlightNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setReturnFlightNo(?string $returnFlightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($returnFlightNo) && !is_string($returnFlightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnFlightNo, true), gettype($returnFlightNo)), __LINE__);
        }
        $this->returnFlightNo = $returnFlightNo;
        
        return $this;
    }
    /**
     * Get serviceCode value
     * @return string|null
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }
    /**
     * Set serviceCode value
     * @param string $serviceCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setServiceCode(?string $serviceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceCode) && !is_string($serviceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), gettype($serviceCode)), __LINE__);
        }
        $this->serviceCode = $serviceCode;
        
        return $this;
    }
    /**
     * Get serviceDescription value
     * @return string|null
     */
    public function getServiceDescription(): ?string
    {
        return $this->serviceDescription;
    }
    /**
     * Set serviceDescription value
     * @param string $serviceDescription
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setServiceDescription(?string $serviceDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceDescription) && !is_string($serviceDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceDescription, true), gettype($serviceDescription)), __LINE__);
        }
        $this->serviceDescription = $serviceDescription;
        
        return $this;
    }
    /**
     * Get serviceName value
     * @return string|null
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }
    /**
     * Set serviceName value
     * @param string $serviceName
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setServiceName(?string $serviceName = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceName, true), gettype($serviceName)), __LINE__);
        }
        $this->serviceName = $serviceName;
        
        return $this;
    }
    /**
     * Get serviceStatus value
     * @return string|null
     */
    public function getServiceStatus(): ?string
    {
        return $this->serviceStatus;
    }
    /**
     * Set serviceStatus value
     * @param string $serviceStatus
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setServiceStatus(?string $serviceStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceStatus) && !is_string($serviceStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceStatus, true), gettype($serviceStatus)), __LINE__);
        }
        $this->serviceStatus = $serviceStatus;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
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
     * Get tariffCode value
     * @return string|null
     */
    public function getTariffCode(): ?string
    {
        return $this->tariffCode;
    }
    /**
     * Set tariffCode value
     * @param string $tariffCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setTariffCode(?string $tariffCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffCode) && !is_string($tariffCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffCode, true), gettype($tariffCode)), __LINE__);
        }
        $this->tariffCode = $tariffCode;
        
        return $this;
    }
    /**
     * Get transfer value
     * @return string|null
     */
    public function getTransfer(): ?string
    {
        return $this->transfer;
    }
    /**
     * Set transfer value
     * @param string $transfer
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO
     */
    public function setTransfer(?string $transfer = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer) && !is_string($transfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer, true), gettype($transfer)), __LINE__);
        }
        $this->transfer = $transfer;
        
        return $this;
    }
}
