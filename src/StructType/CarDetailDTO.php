<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CarDetailDTO extends AbstractStructBase
{
    /**
     * The areaDescription
     * @var string|null
     */
    protected ?string $areaDescription = null;
    /**
     * The carDescription
     * @var string|null
     */
    protected ?string $carDescription = null;
    /**
     * The carSupplier
     * @var string|null
     */
    protected ?string $carSupplier = null;
    /**
     * The carType
     * @var string|null
     */
    protected ?string $carType = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The collectionInfo
     * @var string|null
     */
    protected ?string $collectionInfo = null;
    /**
     * The corporateDiscount
     * @var string|null
     */
    protected ?string $corporateDiscount = null;
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
     * The deliveryInfo
     * @var string|null
     */
    protected ?string $deliveryInfo = null;
    /**
     * The destinationArea
     * @var string|null
     */
    protected ?string $destinationArea = null;
    /**
     * The dropoffInfo
     * @var string|null
     */
    protected ?string $dropoffInfo = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The insuranceDescription
     * @var string|null
     */
    protected ?string $insuranceDescription = null;
    /**
     * The insuranceType
     * @var string|null
     */
    protected ?string $insuranceType = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The noOfServices
     * @var int|null
     */
    protected ?int $noOfServices = null;
    /**
     * The pickupCode
     * @var string|null
     */
    protected ?string $pickupCode = null;
    /**
     * The pickupDate
     * @var string|null
     */
    protected ?string $pickupDate = null;
    /**
     * The pickupDescription
     * @var string|null
     */
    protected ?string $pickupDescription = null;
    /**
     * The pickupInfo
     * @var string|null
     */
    protected ?string $pickupInfo = null;
    /**
     * The pickupTime
     * @var string|null
     */
    protected ?string $pickupTime = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The referencePosition
     * @var int|null
     */
    protected ?int $referencePosition = null;
    /**
     * The regionCode
     * @var string|null
     */
    protected ?string $regionCode = null;
    /**
     * The regionDescription
     * @var string|null
     */
    protected ?string $regionDescription = null;
    /**
     * The returnAreaDescription
     * @var string|null
     */
    protected ?string $returnAreaDescription = null;
    /**
     * The returnCode
     * @var string|null
     */
    protected ?string $returnCode = null;
    /**
     * The returnCountryCode
     * @var string|null
     */
    protected ?string $returnCountryCode = null;
    /**
     * The returnCountryDescription
     * @var string|null
     */
    protected ?string $returnCountryDescription = null;
    /**
     * The returnDate
     * @var string|null
     */
    protected ?string $returnDate = null;
    /**
     * The returnDescription
     * @var string|null
     */
    protected ?string $returnDescription = null;
    /**
     * The returnDestinationArea
     * @var string|null
     */
    protected ?string $returnDestinationArea = null;
    /**
     * The returnTime
     * @var string|null
     */
    protected ?string $returnTime = null;
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
     * The servicePrice
     * @var float|null
     */
    protected ?float $servicePrice = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The vatIncluded
     * @var bool|null
     */
    protected ?bool $vatIncluded = null;
    /**
     * Constructor method for CarDetailDTO
     * @uses CarDetailDTO::setAreaDescription()
     * @uses CarDetailDTO::setCarDescription()
     * @uses CarDetailDTO::setCarSupplier()
     * @uses CarDetailDTO::setCarType()
     * @uses CarDetailDTO::setCategory()
     * @uses CarDetailDTO::setCollectionInfo()
     * @uses CarDetailDTO::setCorporateDiscount()
     * @uses CarDetailDTO::setCountryCode()
     * @uses CarDetailDTO::setCountryDescription()
     * @uses CarDetailDTO::setCurrency()
     * @uses CarDetailDTO::setDeliveryInfo()
     * @uses CarDetailDTO::setDestinationArea()
     * @uses CarDetailDTO::setDropoffInfo()
     * @uses CarDetailDTO::setFlightNo()
     * @uses CarDetailDTO::setInsuranceDescription()
     * @uses CarDetailDTO::setInsuranceType()
     * @uses CarDetailDTO::setItemId()
     * @uses CarDetailDTO::setNoOfServices()
     * @uses CarDetailDTO::setPickupCode()
     * @uses CarDetailDTO::setPickupDate()
     * @uses CarDetailDTO::setPickupDescription()
     * @uses CarDetailDTO::setPickupInfo()
     * @uses CarDetailDTO::setPickupTime()
     * @uses CarDetailDTO::setPosition()
     * @uses CarDetailDTO::setReferencePosition()
     * @uses CarDetailDTO::setRegionCode()
     * @uses CarDetailDTO::setRegionDescription()
     * @uses CarDetailDTO::setReturnAreaDescription()
     * @uses CarDetailDTO::setReturnCode()
     * @uses CarDetailDTO::setReturnCountryCode()
     * @uses CarDetailDTO::setReturnCountryDescription()
     * @uses CarDetailDTO::setReturnDate()
     * @uses CarDetailDTO::setReturnDescription()
     * @uses CarDetailDTO::setReturnDestinationArea()
     * @uses CarDetailDTO::setReturnTime()
     * @uses CarDetailDTO::setServiceCode()
     * @uses CarDetailDTO::setServiceName()
     * @uses CarDetailDTO::setServicePrice()
     * @uses CarDetailDTO::setServiceStatus()
     * @uses CarDetailDTO::setVatIncluded()
     * @param string $areaDescription
     * @param string $carDescription
     * @param string $carSupplier
     * @param string $carType
     * @param string $category
     * @param string $collectionInfo
     * @param string $corporateDiscount
     * @param string $countryCode
     * @param string $countryDescription
     * @param string $currency
     * @param string $deliveryInfo
     * @param string $destinationArea
     * @param string $dropoffInfo
     * @param string $flightNo
     * @param string $insuranceDescription
     * @param string $insuranceType
     * @param int $itemId
     * @param int $noOfServices
     * @param string $pickupCode
     * @param string $pickupDate
     * @param string $pickupDescription
     * @param string $pickupInfo
     * @param string $pickupTime
     * @param int $position
     * @param int $referencePosition
     * @param string $regionCode
     * @param string $regionDescription
     * @param string $returnAreaDescription
     * @param string $returnCode
     * @param string $returnCountryCode
     * @param string $returnCountryDescription
     * @param string $returnDate
     * @param string $returnDescription
     * @param string $returnDestinationArea
     * @param string $returnTime
     * @param string $serviceCode
     * @param string $serviceName
     * @param float $servicePrice
     * @param string $serviceStatus
     * @param bool $vatIncluded
     */
    public function __construct(?string $areaDescription = null, ?string $carDescription = null, ?string $carSupplier = null, ?string $carType = null, ?string $category = null, ?string $collectionInfo = null, ?string $corporateDiscount = null, ?string $countryCode = null, ?string $countryDescription = null, ?string $currency = null, ?string $deliveryInfo = null, ?string $destinationArea = null, ?string $dropoffInfo = null, ?string $flightNo = null, ?string $insuranceDescription = null, ?string $insuranceType = null, ?int $itemId = null, ?int $noOfServices = null, ?string $pickupCode = null, ?string $pickupDate = null, ?string $pickupDescription = null, ?string $pickupInfo = null, ?string $pickupTime = null, ?int $position = null, ?int $referencePosition = null, ?string $regionCode = null, ?string $regionDescription = null, ?string $returnAreaDescription = null, ?string $returnCode = null, ?string $returnCountryCode = null, ?string $returnCountryDescription = null, ?string $returnDate = null, ?string $returnDescription = null, ?string $returnDestinationArea = null, ?string $returnTime = null, ?string $serviceCode = null, ?string $serviceName = null, ?float $servicePrice = null, ?string $serviceStatus = null, ?bool $vatIncluded = null)
    {
        $this
            ->setAreaDescription($areaDescription)
            ->setCarDescription($carDescription)
            ->setCarSupplier($carSupplier)
            ->setCarType($carType)
            ->setCategory($category)
            ->setCollectionInfo($collectionInfo)
            ->setCorporateDiscount($corporateDiscount)
            ->setCountryCode($countryCode)
            ->setCountryDescription($countryDescription)
            ->setCurrency($currency)
            ->setDeliveryInfo($deliveryInfo)
            ->setDestinationArea($destinationArea)
            ->setDropoffInfo($dropoffInfo)
            ->setFlightNo($flightNo)
            ->setInsuranceDescription($insuranceDescription)
            ->setInsuranceType($insuranceType)
            ->setItemId($itemId)
            ->setNoOfServices($noOfServices)
            ->setPickupCode($pickupCode)
            ->setPickupDate($pickupDate)
            ->setPickupDescription($pickupDescription)
            ->setPickupInfo($pickupInfo)
            ->setPickupTime($pickupTime)
            ->setPosition($position)
            ->setReferencePosition($referencePosition)
            ->setRegionCode($regionCode)
            ->setRegionDescription($regionDescription)
            ->setReturnAreaDescription($returnAreaDescription)
            ->setReturnCode($returnCode)
            ->setReturnCountryCode($returnCountryCode)
            ->setReturnCountryDescription($returnCountryDescription)
            ->setReturnDate($returnDate)
            ->setReturnDescription($returnDescription)
            ->setReturnDestinationArea($returnDestinationArea)
            ->setReturnTime($returnTime)
            ->setServiceCode($serviceCode)
            ->setServiceName($serviceName)
            ->setServicePrice($servicePrice)
            ->setServiceStatus($serviceStatus)
            ->setVatIncluded($vatIncluded);
    }
    /**
     * Get areaDescription value
     * @return string|null
     */
    public function getAreaDescription(): ?string
    {
        return $this->areaDescription;
    }
    /**
     * Set areaDescription value
     * @param string $areaDescription
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setAreaDescription(?string $areaDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($areaDescription) && !is_string($areaDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaDescription, true), gettype($areaDescription)), __LINE__);
        }
        $this->areaDescription = $areaDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * Get collectionInfo value
     * @return string|null
     */
    public function getCollectionInfo(): ?string
    {
        return $this->collectionInfo;
    }
    /**
     * Set collectionInfo value
     * @param string $collectionInfo
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setCollectionInfo(?string $collectionInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($collectionInfo) && !is_string($collectionInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($collectionInfo, true), gettype($collectionInfo)), __LINE__);
        }
        $this->collectionInfo = $collectionInfo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * Get deliveryInfo value
     * @return string|null
     */
    public function getDeliveryInfo(): ?string
    {
        return $this->deliveryInfo;
    }
    /**
     * Set deliveryInfo value
     * @param string $deliveryInfo
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setDeliveryInfo(?string $deliveryInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryInfo) && !is_string($deliveryInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryInfo, true), gettype($deliveryInfo)), __LINE__);
        }
        $this->deliveryInfo = $deliveryInfo;
        
        return $this;
    }
    /**
     * Get destinationArea value
     * @return string|null
     */
    public function getDestinationArea(): ?string
    {
        return $this->destinationArea;
    }
    /**
     * Set destinationArea value
     * @param string $destinationArea
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setDestinationArea(?string $destinationArea = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationArea) && !is_string($destinationArea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationArea, true), gettype($destinationArea)), __LINE__);
        }
        $this->destinationArea = $destinationArea;
        
        return $this;
    }
    /**
     * Get dropoffInfo value
     * @return string|null
     */
    public function getDropoffInfo(): ?string
    {
        return $this->dropoffInfo;
    }
    /**
     * Set dropoffInfo value
     * @param string $dropoffInfo
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setDropoffInfo(?string $dropoffInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($dropoffInfo) && !is_string($dropoffInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dropoffInfo, true), gettype($dropoffInfo)), __LINE__);
        }
        $this->dropoffInfo = $dropoffInfo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return int|null
     */
    public function getNoOfServices(): ?int
    {
        return $this->noOfServices;
    }
    /**
     * Set noOfServices value
     * @param int $noOfServices
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setPickupDate(?string $pickupDate = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDate, true), gettype($pickupDate)), __LINE__);
        }
        $this->pickupDate = $pickupDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * Get pickupInfo value
     * @return string|null
     */
    public function getPickupInfo(): ?string
    {
        return $this->pickupInfo;
    }
    /**
     * Set pickupInfo value
     * @param string $pickupInfo
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setPickupInfo(?string $pickupInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupInfo) && !is_string($pickupInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupInfo, true), gettype($pickupInfo)), __LINE__);
        }
        $this->pickupInfo = $pickupInfo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setPickupTime(?string $pickupTime = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupTime) && !is_string($pickupTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupTime, true), gettype($pickupTime)), __LINE__);
        }
        $this->pickupTime = $pickupTime;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get referencePosition value
     * @return int|null
     */
    public function getReferencePosition(): ?int
    {
        return $this->referencePosition;
    }
    /**
     * Set referencePosition value
     * @param int $referencePosition
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setReferencePosition(?int $referencePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($referencePosition) && !(is_int($referencePosition) || ctype_digit($referencePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referencePosition, true), gettype($referencePosition)), __LINE__);
        }
        $this->referencePosition = $referencePosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * Get returnAreaDescription value
     * @return string|null
     */
    public function getReturnAreaDescription(): ?string
    {
        return $this->returnAreaDescription;
    }
    /**
     * Set returnAreaDescription value
     * @param string $returnAreaDescription
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setReturnAreaDescription(?string $returnAreaDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnAreaDescription) && !is_string($returnAreaDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnAreaDescription, true), gettype($returnAreaDescription)), __LINE__);
        }
        $this->returnAreaDescription = $returnAreaDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setReturnDate(?string $returnDate = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDate) && !is_string($returnDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDate, true), gettype($returnDate)), __LINE__);
        }
        $this->returnDate = $returnDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * Get returnDestinationArea value
     * @return string|null
     */
    public function getReturnDestinationArea(): ?string
    {
        return $this->returnDestinationArea;
    }
    /**
     * Set returnDestinationArea value
     * @param string $returnDestinationArea
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setReturnDestinationArea(?string $returnDestinationArea = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationArea) && !is_string($returnDestinationArea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationArea, true), gettype($returnDestinationArea)), __LINE__);
        }
        $this->returnDestinationArea = $returnDestinationArea;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setReturnTime(?string $returnTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnTime) && !is_string($returnTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnTime, true), gettype($returnTime)), __LINE__);
        }
        $this->returnTime = $returnTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO
     */
    public function setVatIncluded(?bool $vatIncluded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatIncluded) && !is_bool($vatIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatIncluded, true), gettype($vatIncluded)), __LINE__);
        }
        $this->vatIncluded = $vatIncluded;
        
        return $this;
    }
}
