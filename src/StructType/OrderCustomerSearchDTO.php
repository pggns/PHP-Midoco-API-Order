<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderCustomerSearchDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderCustomerSearchDTO extends AbstractStructBase
{
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The cityPhonetic
     * @var string|null
     */
    protected ?string $cityPhonetic = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The forenamePhonetic
     * @var string|null
     */
    protected ?string $forenamePhonetic = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The namePhonetic
     * @var string|null
     */
    protected ?string $namePhonetic = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The streetPhonetic
     * @var string|null
     */
    protected ?string $streetPhonetic = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for OrderCustomerSearchDTO
     * @uses OrderCustomerSearchDTO::setCity()
     * @uses OrderCustomerSearchDTO::setCityPhonetic()
     * @uses OrderCustomerSearchDTO::setCreationDate()
     * @uses OrderCustomerSearchDTO::setForename()
     * @uses OrderCustomerSearchDTO::setForenamePhonetic()
     * @uses OrderCustomerSearchDTO::setName()
     * @uses OrderCustomerSearchDTO::setNamePhonetic()
     * @uses OrderCustomerSearchDTO::setOrderId()
     * @uses OrderCustomerSearchDTO::setPostalCode()
     * @uses OrderCustomerSearchDTO::setSellItemId()
     * @uses OrderCustomerSearchDTO::setStartTravel()
     * @uses OrderCustomerSearchDTO::setStreet()
     * @uses OrderCustomerSearchDTO::setStreetPhonetic()
     * @uses OrderCustomerSearchDTO::setType()
     * @uses OrderCustomerSearchDTO::setUnitName()
     * @param string $city
     * @param string $cityPhonetic
     * @param string $creationDate
     * @param string $forename
     * @param string $forenamePhonetic
     * @param string $name
     * @param string $namePhonetic
     * @param int $orderId
     * @param string $postalCode
     * @param int $sellItemId
     * @param string $startTravel
     * @param string $street
     * @param string $streetPhonetic
     * @param string $type
     * @param string $unitName
     */
    public function __construct(?string $city = null, ?string $cityPhonetic = null, ?string $creationDate = null, ?string $forename = null, ?string $forenamePhonetic = null, ?string $name = null, ?string $namePhonetic = null, ?int $orderId = null, ?string $postalCode = null, ?int $sellItemId = null, ?string $startTravel = null, ?string $street = null, ?string $streetPhonetic = null, ?string $type = null, ?string $unitName = null)
    {
        $this
            ->setCity($city)
            ->setCityPhonetic($cityPhonetic)
            ->setCreationDate($creationDate)
            ->setForename($forename)
            ->setForenamePhonetic($forenamePhonetic)
            ->setName($name)
            ->setNamePhonetic($namePhonetic)
            ->setOrderId($orderId)
            ->setPostalCode($postalCode)
            ->setSellItemId($sellItemId)
            ->setStartTravel($startTravel)
            ->setStreet($street)
            ->setStreetPhonetic($streetPhonetic)
            ->setType($type)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
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
     * Get cityPhonetic value
     * @return string|null
     */
    public function getCityPhonetic(): ?string
    {
        return $this->cityPhonetic;
    }
    /**
     * Set cityPhonetic value
     * @param string $cityPhonetic
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
     */
    public function setCityPhonetic(?string $cityPhonetic = null): self
    {
        // validation for constraint: string
        if (!is_null($cityPhonetic) && !is_string($cityPhonetic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityPhonetic, true), gettype($cityPhonetic)), __LINE__);
        }
        $this->cityPhonetic = $cityPhonetic;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
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
     * Get forenamePhonetic value
     * @return string|null
     */
    public function getForenamePhonetic(): ?string
    {
        return $this->forenamePhonetic;
    }
    /**
     * Set forenamePhonetic value
     * @param string $forenamePhonetic
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
     */
    public function setForenamePhonetic(?string $forenamePhonetic = null): self
    {
        // validation for constraint: string
        if (!is_null($forenamePhonetic) && !is_string($forenamePhonetic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forenamePhonetic, true), gettype($forenamePhonetic)), __LINE__);
        }
        $this->forenamePhonetic = $forenamePhonetic;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
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
     * Get namePhonetic value
     * @return string|null
     */
    public function getNamePhonetic(): ?string
    {
        return $this->namePhonetic;
    }
    /**
     * Set namePhonetic value
     * @param string $namePhonetic
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
     */
    public function setNamePhonetic(?string $namePhonetic = null): self
    {
        // validation for constraint: string
        if (!is_null($namePhonetic) && !is_string($namePhonetic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($namePhonetic, true), gettype($namePhonetic)), __LINE__);
        }
        $this->namePhonetic = $namePhonetic;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get sellItemId value
     * @return int|null
     */
    public function getSellItemId(): ?int
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param int $sellItemId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
     */
    public function setSellItemId(?int $sellItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellItemId) && !(is_int($sellItemId) || ctype_digit($sellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemId, true), gettype($sellItemId)), __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
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
     * Get streetPhonetic value
     * @return string|null
     */
    public function getStreetPhonetic(): ?string
    {
        return $this->streetPhonetic;
    }
    /**
     * Set streetPhonetic value
     * @param string $streetPhonetic
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
     */
    public function setStreetPhonetic(?string $streetPhonetic = null): self
    {
        // validation for constraint: string
        if (!is_null($streetPhonetic) && !is_string($streetPhonetic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetPhonetic, true), gettype($streetPhonetic)), __LINE__);
        }
        $this->streetPhonetic = $streetPhonetic;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerSearchDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
