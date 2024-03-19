<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOSSTTravelData StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOSSTTravelData extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The postalcode
     * @var string|null
     */
    protected ?string $postalcode = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
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
     * The additionalPosition
     * @var int|null
     */
    protected ?int $additionalPosition = null;
    /**
     * The depositAmount
     * @var float|null
     */
    protected ?float $depositAmount = null;
    /**
     * The depositDate
     * @var string|null
     */
    protected ?string $depositDate = null;
    /**
     * The finalPaymentAmount
     * @var float|null
     */
    protected ?float $finalPaymentAmount = null;
    /**
     * The finalPaymentDate
     * @var string|null
     */
    protected ?string $finalPaymentDate = null;
    /**
     * Constructor method for MidocoOSSTTravelData
     * @uses MidocoOSSTTravelData::setItemId()
     * @uses MidocoOSSTTravelData::setBookingId()
     * @uses MidocoOSSTTravelData::setSalutation()
     * @uses MidocoOSSTTravelData::setTitle()
     * @uses MidocoOSSTTravelData::setForename()
     * @uses MidocoOSSTTravelData::setName()
     * @uses MidocoOSSTTravelData::setStreet()
     * @uses MidocoOSSTTravelData::setPostalcode()
     * @uses MidocoOSSTTravelData::setCity()
     * @uses MidocoOSSTTravelData::setCountry()
     * @uses MidocoOSSTTravelData::setTotalPrice()
     * @uses MidocoOSSTTravelData::setStartTravel()
     * @uses MidocoOSSTTravelData::setEndTravel()
     * @uses MidocoOSSTTravelData::setAdditionalPosition()
     * @uses MidocoOSSTTravelData::setDepositAmount()
     * @uses MidocoOSSTTravelData::setDepositDate()
     * @uses MidocoOSSTTravelData::setFinalPaymentAmount()
     * @uses MidocoOSSTTravelData::setFinalPaymentDate()
     * @param int $itemId
     * @param string $bookingId
     * @param string $salutation
     * @param string $title
     * @param string $forename
     * @param string $name
     * @param string $street
     * @param string $postalcode
     * @param string $city
     * @param string $country
     * @param float $totalPrice
     * @param string $startTravel
     * @param string $endTravel
     * @param int $additionalPosition
     * @param float $depositAmount
     * @param string $depositDate
     * @param float $finalPaymentAmount
     * @param string $finalPaymentDate
     */
    public function __construct(?int $itemId = null, ?string $bookingId = null, ?string $salutation = null, ?string $title = null, ?string $forename = null, ?string $name = null, ?string $street = null, ?string $postalcode = null, ?string $city = null, ?string $country = null, ?float $totalPrice = null, ?string $startTravel = null, ?string $endTravel = null, ?int $additionalPosition = null, ?float $depositAmount = null, ?string $depositDate = null, ?float $finalPaymentAmount = null, ?string $finalPaymentDate = null)
    {
        $this
            ->setItemId($itemId)
            ->setBookingId($bookingId)
            ->setSalutation($salutation)
            ->setTitle($title)
            ->setForename($forename)
            ->setName($name)
            ->setStreet($street)
            ->setPostalcode($postalcode)
            ->setCity($city)
            ->setCountry($country)
            ->setTotalPrice($totalPrice)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setAdditionalPosition($additionalPosition)
            ->setDepositAmount($depositAmount)
            ->setDepositDate($depositDate)
            ->setFinalPaymentAmount($finalPaymentAmount)
            ->setFinalPaymentDate($finalPaymentDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
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
     * Get salutation value
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }
    /**
     * Set salutation value
     * @param string $salutation
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setSalutation(?string $salutation = null): self
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutation, true), gettype($salutation)), __LINE__);
        }
        $this->salutation = $salutation;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get postalcode value
     * @return string|null
     */
    public function getPostalcode(): ?string
    {
        return $this->postalcode;
    }
    /**
     * Set postalcode value
     * @param string $postalcode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setPostalcode(?string $postalcode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalcode) && !is_string($postalcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalcode, true), gettype($postalcode)), __LINE__);
        }
        $this->postalcode = $postalcode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
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
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
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
     * Get additionalPosition value
     * @return int|null
     */
    public function getAdditionalPosition(): ?int
    {
        return $this->additionalPosition;
    }
    /**
     * Set additionalPosition value
     * @param int $additionalPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setAdditionalPosition(?int $additionalPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($additionalPosition) && !(is_int($additionalPosition) || ctype_digit($additionalPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($additionalPosition, true), gettype($additionalPosition)), __LINE__);
        }
        $this->additionalPosition = $additionalPosition;
        
        return $this;
    }
    /**
     * Get depositAmount value
     * @return float|null
     */
    public function getDepositAmount(): ?float
    {
        return $this->depositAmount;
    }
    /**
     * Set depositAmount value
     * @param float $depositAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setDepositAmount(?float $depositAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($depositAmount) && !(is_float($depositAmount) || is_numeric($depositAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositAmount, true), gettype($depositAmount)), __LINE__);
        }
        $this->depositAmount = $depositAmount;
        
        return $this;
    }
    /**
     * Get depositDate value
     * @return string|null
     */
    public function getDepositDate(): ?string
    {
        return $this->depositDate;
    }
    /**
     * Set depositDate value
     * @param string $depositDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setDepositDate(?string $depositDate = null): self
    {
        // validation for constraint: string
        if (!is_null($depositDate) && !is_string($depositDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositDate, true), gettype($depositDate)), __LINE__);
        }
        $this->depositDate = $depositDate;
        
        return $this;
    }
    /**
     * Get finalPaymentAmount value
     * @return float|null
     */
    public function getFinalPaymentAmount(): ?float
    {
        return $this->finalPaymentAmount;
    }
    /**
     * Set finalPaymentAmount value
     * @param float $finalPaymentAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setFinalPaymentAmount(?float $finalPaymentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($finalPaymentAmount) && !(is_float($finalPaymentAmount) || is_numeric($finalPaymentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($finalPaymentAmount, true), gettype($finalPaymentAmount)), __LINE__);
        }
        $this->finalPaymentAmount = $finalPaymentAmount;
        
        return $this;
    }
    /**
     * Get finalPaymentDate value
     * @return string|null
     */
    public function getFinalPaymentDate(): ?string
    {
        return $this->finalPaymentDate;
    }
    /**
     * Set finalPaymentDate value
     * @param string $finalPaymentDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOSSTTravelData
     */
    public function setFinalPaymentDate(?string $finalPaymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($finalPaymentDate) && !is_string($finalPaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalPaymentDate, true), gettype($finalPaymentDate)), __LINE__);
        }
        $this->finalPaymentDate = $finalPaymentDate;
        
        return $this;
    }
}
