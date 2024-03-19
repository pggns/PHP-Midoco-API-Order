<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmExternalOfferDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmExternalOfferDTO extends AbstractStructBase
{
    /**
     * The advisoryId
     * @var string|null
     */
    protected ?string $advisoryId = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
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
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
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
     * The duration
     * @var int|null
     */
    protected ?int $duration = null;
    /**
     * The hotelName
     * @var string|null
     */
    protected ?string $hotelName = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The noOfOffer
     * @var int|null
     */
    protected ?int $noOfOffer = null;
    /**
     * The noOfPersons
     * @var int|null
     */
    protected ?int $noOfPersons = null;
    /**
     * The offerId
     * @var string|null
     */
    protected ?string $offerId = null;
    /**
     * The offerSource
     * @var string|null
     */
    protected ?string $offerSource = null;
    /**
     * The refId
     * @var int|null
     */
    protected ?int $refId = null;
    /**
     * The scope
     * @var string|null
     */
    protected ?string $scope = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The travelPrice
     * @var float|null
     */
    protected ?float $travelPrice = null;
    /**
     * The traveldate
     * @var string|null
     */
    protected ?string $traveldate = null;
    /**
     * Constructor method for CrmExternalOfferDTO
     * @uses CrmExternalOfferDTO::setAdvisoryId()
     * @uses CrmExternalOfferDTO::setCategory()
     * @uses CrmExternalOfferDTO::setCity()
     * @uses CrmExternalOfferDTO::setCountryCode()
     * @uses CrmExternalOfferDTO::setCountryDescription()
     * @uses CrmExternalOfferDTO::setCreationTimestamp()
     * @uses CrmExternalOfferDTO::setCustomerId()
     * @uses CrmExternalOfferDTO::setDepartureCode()
     * @uses CrmExternalOfferDTO::setDepartureDescription()
     * @uses CrmExternalOfferDTO::setDestinationCode()
     * @uses CrmExternalOfferDTO::setDestinationDescription()
     * @uses CrmExternalOfferDTO::setDuration()
     * @uses CrmExternalOfferDTO::setHotelName()
     * @uses CrmExternalOfferDTO::setModifyTimestamp()
     * @uses CrmExternalOfferDTO::setNoOfOffer()
     * @uses CrmExternalOfferDTO::setNoOfPersons()
     * @uses CrmExternalOfferDTO::setOfferId()
     * @uses CrmExternalOfferDTO::setOfferSource()
     * @uses CrmExternalOfferDTO::setRefId()
     * @uses CrmExternalOfferDTO::setScope()
     * @uses CrmExternalOfferDTO::setStatus()
     * @uses CrmExternalOfferDTO::setSupplierId()
     * @uses CrmExternalOfferDTO::setTravelPrice()
     * @uses CrmExternalOfferDTO::setTraveldate()
     * @param string $advisoryId
     * @param string $category
     * @param string $city
     * @param string $countryCode
     * @param string $countryDescription
     * @param string $creationTimestamp
     * @param int $customerId
     * @param string $departureCode
     * @param string $departureDescription
     * @param string $destinationCode
     * @param string $destinationDescription
     * @param int $duration
     * @param string $hotelName
     * @param string $modifyTimestamp
     * @param int $noOfOffer
     * @param int $noOfPersons
     * @param string $offerId
     * @param string $offerSource
     * @param int $refId
     * @param string $scope
     * @param string $status
     * @param string $supplierId
     * @param float $travelPrice
     * @param string $traveldate
     */
    public function __construct(?string $advisoryId = null, ?string $category = null, ?string $city = null, ?string $countryCode = null, ?string $countryDescription = null, ?string $creationTimestamp = null, ?int $customerId = null, ?string $departureCode = null, ?string $departureDescription = null, ?string $destinationCode = null, ?string $destinationDescription = null, ?int $duration = null, ?string $hotelName = null, ?string $modifyTimestamp = null, ?int $noOfOffer = null, ?int $noOfPersons = null, ?string $offerId = null, ?string $offerSource = null, ?int $refId = null, ?string $scope = null, ?string $status = null, ?string $supplierId = null, ?float $travelPrice = null, ?string $traveldate = null)
    {
        $this
            ->setAdvisoryId($advisoryId)
            ->setCategory($category)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setCountryDescription($countryDescription)
            ->setCreationTimestamp($creationTimestamp)
            ->setCustomerId($customerId)
            ->setDepartureCode($departureCode)
            ->setDepartureDescription($departureDescription)
            ->setDestinationCode($destinationCode)
            ->setDestinationDescription($destinationDescription)
            ->setDuration($duration)
            ->setHotelName($hotelName)
            ->setModifyTimestamp($modifyTimestamp)
            ->setNoOfOffer($noOfOffer)
            ->setNoOfPersons($noOfPersons)
            ->setOfferId($offerId)
            ->setOfferSource($offerSource)
            ->setRefId($refId)
            ->setScope($scope)
            ->setStatus($status)
            ->setSupplierId($supplierId)
            ->setTravelPrice($travelPrice)
            ->setTraveldate($traveldate);
    }
    /**
     * Get advisoryId value
     * @return string|null
     */
    public function getAdvisoryId(): ?string
    {
        return $this->advisoryId;
    }
    /**
     * Set advisoryId value
     * @param string $advisoryId
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setAdvisoryId(?string $advisoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($advisoryId) && !is_string($advisoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($advisoryId, true), gettype($advisoryId)), __LINE__);
        }
        $this->advisoryId = $advisoryId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
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
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
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
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
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
     * Get duration value
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param int $duration
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setDuration(?int $duration = null): self
    {
        // validation for constraint: int
        if (!is_null($duration) && !(is_int($duration) || ctype_digit($duration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
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
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
        return $this;
    }
    /**
     * Get noOfOffer value
     * @return int|null
     */
    public function getNoOfOffer(): ?int
    {
        return $this->noOfOffer;
    }
    /**
     * Set noOfOffer value
     * @param int $noOfOffer
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setNoOfOffer(?int $noOfOffer = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfOffer) && !(is_int($noOfOffer) || ctype_digit($noOfOffer))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfOffer, true), gettype($noOfOffer)), __LINE__);
        }
        $this->noOfOffer = $noOfOffer;
        
        return $this;
    }
    /**
     * Get noOfPersons value
     * @return int|null
     */
    public function getNoOfPersons(): ?int
    {
        return $this->noOfPersons;
    }
    /**
     * Set noOfPersons value
     * @param int $noOfPersons
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setNoOfPersons(?int $noOfPersons = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPersons) && !(is_int($noOfPersons) || ctype_digit($noOfPersons))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPersons, true), gettype($noOfPersons)), __LINE__);
        }
        $this->noOfPersons = $noOfPersons;
        
        return $this;
    }
    /**
     * Get offerId value
     * @return string|null
     */
    public function getOfferId(): ?string
    {
        return $this->offerId;
    }
    /**
     * Set offerId value
     * @param string $offerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setOfferId(?string $offerId = null): self
    {
        // validation for constraint: string
        if (!is_null($offerId) && !is_string($offerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerId, true), gettype($offerId)), __LINE__);
        }
        $this->offerId = $offerId;
        
        return $this;
    }
    /**
     * Get offerSource value
     * @return string|null
     */
    public function getOfferSource(): ?string
    {
        return $this->offerSource;
    }
    /**
     * Set offerSource value
     * @param string $offerSource
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setOfferSource(?string $offerSource = null): self
    {
        // validation for constraint: string
        if (!is_null($offerSource) && !is_string($offerSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerSource, true), gettype($offerSource)), __LINE__);
        }
        $this->offerSource = $offerSource;
        
        return $this;
    }
    /**
     * Get refId value
     * @return int|null
     */
    public function getRefId(): ?int
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param int $refId
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setRefId(?int $refId = null): self
    {
        // validation for constraint: int
        if (!is_null($refId) && !(is_int($refId) || ctype_digit($refId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
        return $this;
    }
    /**
     * Get scope value
     * @return string|null
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }
    /**
     * Set scope value
     * @param string $scope
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setScope(?string $scope = null): self
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        $this->scope = $scope;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
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
     * Get travelPrice value
     * @return float|null
     */
    public function getTravelPrice(): ?float
    {
        return $this->travelPrice;
    }
    /**
     * Set travelPrice value
     * @param float $travelPrice
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setTravelPrice(?float $travelPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($travelPrice) && !(is_float($travelPrice) || is_numeric($travelPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($travelPrice, true), gettype($travelPrice)), __LINE__);
        }
        $this->travelPrice = $travelPrice;
        
        return $this;
    }
    /**
     * Get traveldate value
     * @return string|null
     */
    public function getTraveldate(): ?string
    {
        return $this->traveldate;
    }
    /**
     * Set traveldate value
     * @param string $traveldate
     * @return \Pggns\MidocoApi\Order\StructType\CrmExternalOfferDTO
     */
    public function setTraveldate(?string $traveldate = null): self
    {
        // validation for constraint: string
        if (!is_null($traveldate) && !is_string($traveldate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveldate, true), gettype($traveldate)), __LINE__);
        }
        $this->traveldate = $traveldate;
        
        return $this;
    }
}
