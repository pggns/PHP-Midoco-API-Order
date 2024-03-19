<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carServiceType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CarServiceType extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The serviceCode
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * The serviceName
     * @var string|null
     */
    protected ?string $serviceName = null;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The carType
     * @var string|null
     */
    protected ?string $carType = null;
    /**
     * The carDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $carDescription = null;
    /**
     * The pickupCode
     * Meta information extracted from the WSDL
     * - documentation: abbreviation for pickup place (e.g. SFO for San Francisco airport)
     * @var string|null
     */
    protected ?string $pickupCode = null;
    /**
     * The pickupDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pickupDescription = null;
    /**
     * The pickupDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $pickupDate = null;
    /**
     * The pickupTime
     * Meta information extracted from the WSDL
     * - documentation: earliest time for picking up the car
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $pickupTime = null;
    /**
     * The returnCode
     * Meta information extracted from the WSDL
     * - documentation: abbreviation for return place (see pickupCode)
     * @var string|null
     */
    protected ?string $returnCode = null;
    /**
     * The returnDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnDescription = null;
    /**
     * The returnDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $returnDate = null;
    /**
     * The returnTime
     * Meta information extracted from the WSDL
     * - documentation: latest time for returning the car at the return date
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $returnTime = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The servicePrice
     * @var float|null
     */
    protected ?float $servicePrice = null;
    /**
     * The noOfServices
     * @var int|null
     */
    protected ?int $noOfServices = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The insuranceType
     * Meta information extracted from the WSDL
     * - documentation: if there is additional insurance information, it should be added here
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $insuranceType = null;
    /**
     * The insuranceDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $insuranceDescription = null;
    /**
     * The vatIncluded
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $vatIncluded = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - documentation: ISO Code for the country
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The countryDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryDescription = null;
    /**
     * The returnCountryCode
     * Meta information extracted from the WSDL
     * - documentation: ISO Code for the country
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnCountryCode = null;
    /**
     * The returnCountryDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnCountryDescription = null;
    /**
     * The carSupplier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $carSupplier = null;
    /**
     * The regionCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $regionCode = null;
    /**
     * The regionDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $regionDescription = null;
    /**
     * The corporateDiscount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $corporateDiscount = null;
    /**
     * The travelerRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $travelerRefId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The extId
     * @var string|null
     */
    protected ?string $extId = null;
    /**
     * The sourceSystem
     * @var string|null
     */
    protected ?string $sourceSystem = null;
    /**
     * The sourceExtId
     * @var string|null
     */
    protected ?string $sourceExtId = null;
    /**
     * Constructor method for carServiceType
     * @uses CarServiceType::setPosition()
     * @uses CarServiceType::setServiceCode()
     * @uses CarServiceType::setServiceName()
     * @uses CarServiceType::setCategory()
     * @uses CarServiceType::setCarType()
     * @uses CarServiceType::setCarDescription()
     * @uses CarServiceType::setPickupCode()
     * @uses CarServiceType::setPickupDescription()
     * @uses CarServiceType::setPickupDate()
     * @uses CarServiceType::setPickupTime()
     * @uses CarServiceType::setReturnCode()
     * @uses CarServiceType::setReturnDescription()
     * @uses CarServiceType::setReturnDate()
     * @uses CarServiceType::setReturnTime()
     * @uses CarServiceType::setServiceStatus()
     * @uses CarServiceType::setServicePrice()
     * @uses CarServiceType::setNoOfServices()
     * @uses CarServiceType::setCurrency()
     * @uses CarServiceType::setInsuranceType()
     * @uses CarServiceType::setInsuranceDescription()
     * @uses CarServiceType::setVatIncluded()
     * @uses CarServiceType::setCountryCode()
     * @uses CarServiceType::setCountryDescription()
     * @uses CarServiceType::setReturnCountryCode()
     * @uses CarServiceType::setReturnCountryDescription()
     * @uses CarServiceType::setCarSupplier()
     * @uses CarServiceType::setRegionCode()
     * @uses CarServiceType::setRegionDescription()
     * @uses CarServiceType::setCorporateDiscount()
     * @uses CarServiceType::setTravelerRefId()
     * @uses CarServiceType::setBookingId()
     * @uses CarServiceType::setBookingDate()
     * @uses CarServiceType::setSupplierId()
     * @uses CarServiceType::setExtId()
     * @uses CarServiceType::setSourceSystem()
     * @uses CarServiceType::setSourceExtId()
     * @param int $position
     * @param string $serviceCode
     * @param string $serviceName
     * @param string $category
     * @param string $carType
     * @param string $carDescription
     * @param string $pickupCode
     * @param string $pickupDescription
     * @param string $pickupDate
     * @param string $pickupTime
     * @param string $returnCode
     * @param string $returnDescription
     * @param string $returnDate
     * @param string $returnTime
     * @param string $serviceStatus
     * @param float $servicePrice
     * @param int $noOfServices
     * @param string $currency
     * @param string $insuranceType
     * @param string $insuranceDescription
     * @param bool $vatIncluded
     * @param string $countryCode
     * @param string $countryDescription
     * @param string $returnCountryCode
     * @param string $returnCountryDescription
     * @param string $carSupplier
     * @param string $regionCode
     * @param string $regionDescription
     * @param string $corporateDiscount
     * @param int[] $travelerRefId
     * @param string $bookingId
     * @param string $bookingDate
     * @param string $supplierId
     * @param string $extId
     * @param string $sourceSystem
     * @param string $sourceExtId
     */
    public function __construct(int $position, ?string $serviceCode = null, ?string $serviceName = null, ?string $category = null, ?string $carType = null, ?string $carDescription = null, ?string $pickupCode = null, ?string $pickupDescription = null, ?string $pickupDate = null, ?string $pickupTime = null, ?string $returnCode = null, ?string $returnDescription = null, ?string $returnDate = null, ?string $returnTime = null, ?string $serviceStatus = null, ?float $servicePrice = null, ?int $noOfServices = null, ?string $currency = null, ?string $insuranceType = null, ?string $insuranceDescription = null, ?bool $vatIncluded = false, ?string $countryCode = null, ?string $countryDescription = null, ?string $returnCountryCode = null, ?string $returnCountryDescription = null, ?string $carSupplier = null, ?string $regionCode = null, ?string $regionDescription = null, ?string $corporateDiscount = null, ?array $travelerRefId = null, ?string $bookingId = null, ?string $bookingDate = null, ?string $supplierId = null, ?string $extId = null, ?string $sourceSystem = null, ?string $sourceExtId = null)
    {
        $this
            ->setPosition($position)
            ->setServiceCode($serviceCode)
            ->setServiceName($serviceName)
            ->setCategory($category)
            ->setCarType($carType)
            ->setCarDescription($carDescription)
            ->setPickupCode($pickupCode)
            ->setPickupDescription($pickupDescription)
            ->setPickupDate($pickupDate)
            ->setPickupTime($pickupTime)
            ->setReturnCode($returnCode)
            ->setReturnDescription($returnDescription)
            ->setReturnDate($returnDate)
            ->setReturnTime($returnTime)
            ->setServiceStatus($serviceStatus)
            ->setServicePrice($servicePrice)
            ->setNoOfServices($noOfServices)
            ->setCurrency($currency)
            ->setInsuranceType($insuranceType)
            ->setInsuranceDescription($insuranceDescription)
            ->setVatIncluded($vatIncluded)
            ->setCountryCode($countryCode)
            ->setCountryDescription($countryDescription)
            ->setReturnCountryCode($returnCountryCode)
            ->setReturnCountryDescription($returnCountryDescription)
            ->setCarSupplier($carSupplier)
            ->setRegionCode($regionCode)
            ->setRegionDescription($regionDescription)
            ->setCorporateDiscount($corporateDiscount)
            ->setTravelerRefId($travelerRefId)
            ->setBookingId($bookingId)
            ->setBookingDate($bookingDate)
            ->setSupplierId($supplierId)
            ->setExtId($extId)
            ->setSourceSystem($sourceSystem)
            ->setSourceExtId($sourceExtId);
    }
    /**
     * Get position value
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setPosition(int $position): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
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
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get carType value
     * @return string|null
     */
    public function getCarType(): ?string
    {
        return $this->carType;
    }
    /**
     * Set carType value
     * @param string $carType
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setCarType(?string $carType = null): self
    {
        // validation for constraint: string
        if (!is_null($carType) && !is_string($carType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carType, true), gettype($carType)), __LINE__);
        }
        $this->carType = $carType;
        
        return $this;
    }
    /**
     * Get carDescription value
     * @return string|null
     */
    public function getCarDescription(): ?string
    {
        return $this->carDescription;
    }
    /**
     * Set carDescription value
     * @param string $carDescription
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setCarDescription(?string $carDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($carDescription) && !is_string($carDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carDescription, true), gettype($carDescription)), __LINE__);
        }
        $this->carDescription = $carDescription;
        
        return $this;
    }
    /**
     * Get pickupCode value
     * @return string|null
     */
    public function getPickupCode(): ?string
    {
        return $this->pickupCode;
    }
    /**
     * Set pickupCode value
     * @param string $pickupCode
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setPickupCode(?string $pickupCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupCode) && !is_string($pickupCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupCode, true), gettype($pickupCode)), __LINE__);
        }
        $this->pickupCode = $pickupCode;
        
        return $this;
    }
    /**
     * Get pickupDescription value
     * @return string|null
     */
    public function getPickupDescription(): ?string
    {
        return $this->pickupDescription;
    }
    /**
     * Set pickupDescription value
     * @param string $pickupDescription
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setPickupDescription(?string $pickupDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDescription) && !is_string($pickupDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDescription, true), gettype($pickupDescription)), __LINE__);
        }
        $this->pickupDescription = $pickupDescription;
        
        return $this;
    }
    /**
     * Get pickupDate value
     * @return string|null
     */
    public function getPickupDate(): ?string
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param string $pickupDate
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setPickupDate(?string $pickupDate = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDate, true), gettype($pickupDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($pickupDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $pickupDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($pickupDate, true)), __LINE__);
        }
        $this->pickupDate = $pickupDate;
        
        return $this;
    }
    /**
     * Get pickupTime value
     * @return string|null
     */
    public function getPickupTime(): ?string
    {
        return $this->pickupTime;
    }
    /**
     * Set pickupTime value
     * @param string $pickupTime
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setPickupTime(?string $pickupTime = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupTime) && !is_string($pickupTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupTime, true), gettype($pickupTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($pickupTime) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $pickupTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($pickupTime, true)), __LINE__);
        }
        $this->pickupTime = $pickupTime;
        
        return $this;
    }
    /**
     * Get returnCode value
     * @return string|null
     */
    public function getReturnCode(): ?string
    {
        return $this->returnCode;
    }
    /**
     * Set returnCode value
     * @param string $returnCode
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setReturnCode(?string $returnCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnCode) && !is_string($returnCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCode, true), gettype($returnCode)), __LINE__);
        }
        $this->returnCode = $returnCode;
        
        return $this;
    }
    /**
     * Get returnDescription value
     * @return string|null
     */
    public function getReturnDescription(): ?string
    {
        return $this->returnDescription;
    }
    /**
     * Set returnDescription value
     * @param string $returnDescription
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setReturnDescription(?string $returnDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDescription) && !is_string($returnDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDescription, true), gettype($returnDescription)), __LINE__);
        }
        $this->returnDescription = $returnDescription;
        
        return $this;
    }
    /**
     * Get returnDate value
     * @return string|null
     */
    public function getReturnDate(): ?string
    {
        return $this->returnDate;
    }
    /**
     * Set returnDate value
     * @param string $returnDate
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setReturnDate(?string $returnDate = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDate) && !is_string($returnDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDate, true), gettype($returnDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($returnDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $returnDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($returnDate, true)), __LINE__);
        }
        $this->returnDate = $returnDate;
        
        return $this;
    }
    /**
     * Get returnTime value
     * @return string|null
     */
    public function getReturnTime(): ?string
    {
        return $this->returnTime;
    }
    /**
     * Set returnTime value
     * @param string $returnTime
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setReturnTime(?string $returnTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnTime) && !is_string($returnTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnTime, true), gettype($returnTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($returnTime) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $returnTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($returnTime, true)), __LINE__);
        }
        $this->returnTime = $returnTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
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
     * Get servicePrice value
     * @return float|null
     */
    public function getServicePrice(): ?float
    {
        return $this->servicePrice;
    }
    /**
     * Set servicePrice value
     * @param float $servicePrice
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setServicePrice(?float $servicePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($servicePrice) && !(is_float($servicePrice) || is_numeric($servicePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($servicePrice, true), gettype($servicePrice)), __LINE__);
        }
        $this->servicePrice = $servicePrice;
        
        return $this;
    }
    /**
     * Get noOfServices value
     * @return int|null
     */
    public function getNoOfServices(): ?int
    {
        return $this->noOfServices;
    }
    /**
     * Set noOfServices value
     * @param int $noOfServices
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setNoOfServices(?int $noOfServices = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfServices) && !(is_int($noOfServices) || ctype_digit($noOfServices))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfServices, true), gettype($noOfServices)), __LINE__);
        }
        $this->noOfServices = $noOfServices;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
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
     * Get insuranceType value
     * @return string|null
     */
    public function getInsuranceType(): ?string
    {
        return $this->insuranceType;
    }
    /**
     * Set insuranceType value
     * @param string $insuranceType
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setInsuranceType(?string $insuranceType = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceType) && !is_string($insuranceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceType, true), gettype($insuranceType)), __LINE__);
        }
        $this->insuranceType = $insuranceType;
        
        return $this;
    }
    /**
     * Get insuranceDescription value
     * @return string|null
     */
    public function getInsuranceDescription(): ?string
    {
        return $this->insuranceDescription;
    }
    /**
     * Set insuranceDescription value
     * @param string $insuranceDescription
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setInsuranceDescription(?string $insuranceDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceDescription) && !is_string($insuranceDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceDescription, true), gettype($insuranceDescription)), __LINE__);
        }
        $this->insuranceDescription = $insuranceDescription;
        
        return $this;
    }
    /**
     * Get vatIncluded value
     * @return bool|null
     */
    public function getVatIncluded(): ?bool
    {
        return $this->vatIncluded;
    }
    /**
     * Set vatIncluded value
     * @param bool $vatIncluded
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setVatIncluded(?bool $vatIncluded = false): self
    {
        // validation for constraint: boolean
        if (!is_null($vatIncluded) && !is_bool($vatIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatIncluded, true), gettype($vatIncluded)), __LINE__);
        }
        $this->vatIncluded = $vatIncluded;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
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
     * Get returnCountryCode value
     * @return string|null
     */
    public function getReturnCountryCode(): ?string
    {
        return $this->returnCountryCode;
    }
    /**
     * Set returnCountryCode value
     * @param string $returnCountryCode
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setReturnCountryCode(?string $returnCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnCountryCode) && !is_string($returnCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCountryCode, true), gettype($returnCountryCode)), __LINE__);
        }
        $this->returnCountryCode = $returnCountryCode;
        
        return $this;
    }
    /**
     * Get returnCountryDescription value
     * @return string|null
     */
    public function getReturnCountryDescription(): ?string
    {
        return $this->returnCountryDescription;
    }
    /**
     * Set returnCountryDescription value
     * @param string $returnCountryDescription
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setReturnCountryDescription(?string $returnCountryDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnCountryDescription) && !is_string($returnCountryDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCountryDescription, true), gettype($returnCountryDescription)), __LINE__);
        }
        $this->returnCountryDescription = $returnCountryDescription;
        
        return $this;
    }
    /**
     * Get carSupplier value
     * @return string|null
     */
    public function getCarSupplier(): ?string
    {
        return $this->carSupplier;
    }
    /**
     * Set carSupplier value
     * @param string $carSupplier
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setCarSupplier(?string $carSupplier = null): self
    {
        // validation for constraint: string
        if (!is_null($carSupplier) && !is_string($carSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carSupplier, true), gettype($carSupplier)), __LINE__);
        }
        $this->carSupplier = $carSupplier;
        
        return $this;
    }
    /**
     * Get regionCode value
     * @return string|null
     */
    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }
    /**
     * Set regionCode value
     * @param string $regionCode
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setRegionCode(?string $regionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($regionCode) && !is_string($regionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regionCode, true), gettype($regionCode)), __LINE__);
        }
        $this->regionCode = $regionCode;
        
        return $this;
    }
    /**
     * Get regionDescription value
     * @return string|null
     */
    public function getRegionDescription(): ?string
    {
        return $this->regionDescription;
    }
    /**
     * Set regionDescription value
     * @param string $regionDescription
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setRegionDescription(?string $regionDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($regionDescription) && !is_string($regionDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regionDescription, true), gettype($regionDescription)), __LINE__);
        }
        $this->regionDescription = $regionDescription;
        
        return $this;
    }
    /**
     * Get corporateDiscount value
     * @return string|null
     */
    public function getCorporateDiscount(): ?string
    {
        return $this->corporateDiscount;
    }
    /**
     * Set corporateDiscount value
     * @param string $corporateDiscount
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setCorporateDiscount(?string $corporateDiscount = null): self
    {
        // validation for constraint: string
        if (!is_null($corporateDiscount) && !is_string($corporateDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporateDiscount, true), gettype($corporateDiscount)), __LINE__);
        }
        $this->corporateDiscount = $corporateDiscount;
        
        return $this;
    }
    /**
     * Get travelerRefId value
     * @return int[]
     */
    public function getTravelerRefId(): ?array
    {
        return $this->travelerRefId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTravelerRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelerRefId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelerRefIdForArrayConstraintFromSetTravelerRefId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $carServiceTypeTravelerRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($carServiceTypeTravelerRefIdItem) || ctype_digit($carServiceTypeTravelerRefIdItem))) {
                $invalidValues[] = is_object($carServiceTypeTravelerRefIdItem) ? get_class($carServiceTypeTravelerRefIdItem) : sprintf('%s(%s)', gettype($carServiceTypeTravelerRefIdItem), var_export($carServiceTypeTravelerRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The travelerRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set travelerRefId value
     * @throws InvalidArgumentException
     * @param int[] $travelerRefId
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setTravelerRefId(?array $travelerRefId = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelerRefIdArrayErrorMessage = self::validateTravelerRefIdForArrayConstraintFromSetTravelerRefId($travelerRefId))) {
            throw new InvalidArgumentException($travelerRefIdArrayErrorMessage, __LINE__);
        }
        $this->travelerRefId = $travelerRefId;
        
        return $this;
    }
    /**
     * Add item to travelerRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function addToTravelerRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The travelerRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->travelerRefId[] = $item;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get extId value
     * @return string|null
     */
    public function getExtId(): ?string
    {
        return $this->extId;
    }
    /**
     * Set extId value
     * @param string $extId
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setExtId(?string $extId = null): self
    {
        // validation for constraint: string
        if (!is_null($extId) && !is_string($extId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extId, true), gettype($extId)), __LINE__);
        }
        $this->extId = $extId;
        
        return $this;
    }
    /**
     * Get sourceSystem value
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->sourceSystem;
    }
    /**
     * Set sourceSystem value
     * @param string $sourceSystem
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceSystem) && !is_string($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceSystem, true), gettype($sourceSystem)), __LINE__);
        }
        $this->sourceSystem = $sourceSystem;
        
        return $this;
    }
    /**
     * Get sourceExtId value
     * @return string|null
     */
    public function getSourceExtId(): ?string
    {
        return $this->sourceExtId;
    }
    /**
     * Set sourceExtId value
     * @param string $sourceExtId
     * @return \Pggns\MidocoApi\Order\StructType\CarServiceType
     */
    public function setSourceExtId(?string $sourceExtId = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceExtId) && !is_string($sourceExtId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceExtId, true), gettype($sourceExtId)), __LINE__);
        }
        $this->sourceExtId = $sourceExtId;
        
        return $this;
    }
}
