<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address StructType
 * Meta information extracted from the WSDL
 * - documentation: Address information
 * @subpackage Structs
 */
class Address extends AbstractStructBase
{
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The streetNo
     * @var string|null
     */
    protected ?string $streetNo = null;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - documentation: State name in case of countries which are divided in states
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - documentation: ISO 3166-1 alpha-2 code for the country of the customer
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The postalCode
     * Meta information extracted from the WSDL
     * - documentation: Postal code of the street address
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The postOfficeBox
     * Meta information extracted from the WSDL
     * - documentation: Post office box address
     * @var string|null
     */
    protected ?string $postOfficeBox = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - documentation: City name
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The endorsement
     * Meta information extracted from the WSDL
     * - documentation: Any additional data (like part of the city, special House name etc).
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * Constructor method for Address
     * @uses Address::setStreet()
     * @uses Address::setStreetNo()
     * @uses Address::setState()
     * @uses Address::setCountry()
     * @uses Address::setPostalCode()
     * @uses Address::setPostOfficeBox()
     * @uses Address::setCity()
     * @uses Address::setEndorsement()
     * @param string $street
     * @param string $streetNo
     * @param string $state
     * @param string $country
     * @param string $postalCode
     * @param string $postOfficeBox
     * @param string $city
     * @param string $endorsement
     */
    public function __construct(?string $street = null, ?string $streetNo = null, ?string $state = null, ?string $country = null, ?string $postalCode = null, ?string $postOfficeBox = null, ?string $city = null, ?string $endorsement = null)
    {
        $this
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setState($state)
            ->setCountry($country)
            ->setPostalCode($postalCode)
            ->setPostOfficeBox($postOfficeBox)
            ->setCity($city)
            ->setEndorsement($endorsement);
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
     * @return \Pggns\MidocoApi\Order\StructType\Address
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
     * Get streetNo value
     * @return string|null
     */
    public function getStreetNo(): ?string
    {
        return $this->streetNo;
    }
    /**
     * Set streetNo value
     * @param string $streetNo
     * @return \Pggns\MidocoApi\Order\StructType\Address
     */
    public function setStreetNo(?string $streetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNo) && !is_string($streetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNo, true), gettype($streetNo)), __LINE__);
        }
        $this->streetNo = $streetNo;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Pggns\MidocoApi\Order\StructType\Address
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Address
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($country) && mb_strlen((string) $country) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $country)), __LINE__);
        }
        $this->country = $country;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Address
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
     * Get postOfficeBox value
     * @return string|null
     */
    public function getPostOfficeBox(): ?string
    {
        return $this->postOfficeBox;
    }
    /**
     * Set postOfficeBox value
     * @param string $postOfficeBox
     * @return \Pggns\MidocoApi\Order\StructType\Address
     */
    public function setPostOfficeBox(?string $postOfficeBox = null): self
    {
        // validation for constraint: string
        if (!is_null($postOfficeBox) && !is_string($postOfficeBox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postOfficeBox, true), gettype($postOfficeBox)), __LINE__);
        }
        $this->postOfficeBox = $postOfficeBox;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Address
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
     * Get endorsement value
     * @return string|null
     */
    public function getEndorsement(): ?string
    {
        return $this->endorsement;
    }
    /**
     * Set endorsement value
     * @param string $endorsement
     * @return \Pggns\MidocoApi\Order\StructType\Address
     */
    public function setEndorsement(?string $endorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsement, true), gettype($endorsement)), __LINE__);
        }
        $this->endorsement = $endorsement;
        
        return $this;
    }
}
