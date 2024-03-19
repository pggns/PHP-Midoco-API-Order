<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingDocumentPhoneticDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingDocumentPhoneticDTO extends AbstractStructBase
{
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The exactCity
     * @var string|null
     */
    protected ?string $exactCity = null;
    /**
     * The exactForename
     * @var string|null
     */
    protected ?string $exactForename = null;
    /**
     * The exactName
     * @var string|null
     */
    protected ?string $exactName = null;
    /**
     * The exactStreet
     * @var string|null
     */
    protected ?string $exactStreet = null;
    /**
     * The exactTravellerName
     * @var string|null
     */
    protected ?string $exactTravellerName = null;
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
     * The travellerName
     * @var string|null
     */
    protected ?string $travellerName = null;
    /**
     * Constructor method for BillingDocumentPhoneticDTO
     * @uses BillingDocumentPhoneticDTO::setCity()
     * @uses BillingDocumentPhoneticDTO::setDocumentId()
     * @uses BillingDocumentPhoneticDTO::setExactCity()
     * @uses BillingDocumentPhoneticDTO::setExactForename()
     * @uses BillingDocumentPhoneticDTO::setExactName()
     * @uses BillingDocumentPhoneticDTO::setExactStreet()
     * @uses BillingDocumentPhoneticDTO::setExactTravellerName()
     * @uses BillingDocumentPhoneticDTO::setForename()
     * @uses BillingDocumentPhoneticDTO::setName()
     * @uses BillingDocumentPhoneticDTO::setStreet()
     * @uses BillingDocumentPhoneticDTO::setTravellerName()
     * @param string $city
     * @param int $documentId
     * @param string $exactCity
     * @param string $exactForename
     * @param string $exactName
     * @param string $exactStreet
     * @param string $exactTravellerName
     * @param string $forename
     * @param string $name
     * @param string $street
     * @param string $travellerName
     */
    public function __construct(?string $city = null, ?int $documentId = null, ?string $exactCity = null, ?string $exactForename = null, ?string $exactName = null, ?string $exactStreet = null, ?string $exactTravellerName = null, ?string $forename = null, ?string $name = null, ?string $street = null, ?string $travellerName = null)
    {
        $this
            ->setCity($city)
            ->setDocumentId($documentId)
            ->setExactCity($exactCity)
            ->setExactForename($exactForename)
            ->setExactName($exactName)
            ->setExactStreet($exactStreet)
            ->setExactTravellerName($exactTravellerName)
            ->setForename($forename)
            ->setName($name)
            ->setStreet($street)
            ->setTravellerName($travellerName);
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentPhoneticDTO
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
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentPhoneticDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get exactCity value
     * @return string|null
     */
    public function getExactCity(): ?string
    {
        return $this->exactCity;
    }
    /**
     * Set exactCity value
     * @param string $exactCity
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentPhoneticDTO
     */
    public function setExactCity(?string $exactCity = null): self
    {
        // validation for constraint: string
        if (!is_null($exactCity) && !is_string($exactCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactCity, true), gettype($exactCity)), __LINE__);
        }
        $this->exactCity = $exactCity;
        
        return $this;
    }
    /**
     * Get exactForename value
     * @return string|null
     */
    public function getExactForename(): ?string
    {
        return $this->exactForename;
    }
    /**
     * Set exactForename value
     * @param string $exactForename
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentPhoneticDTO
     */
    public function setExactForename(?string $exactForename = null): self
    {
        // validation for constraint: string
        if (!is_null($exactForename) && !is_string($exactForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactForename, true), gettype($exactForename)), __LINE__);
        }
        $this->exactForename = $exactForename;
        
        return $this;
    }
    /**
     * Get exactName value
     * @return string|null
     */
    public function getExactName(): ?string
    {
        return $this->exactName;
    }
    /**
     * Set exactName value
     * @param string $exactName
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentPhoneticDTO
     */
    public function setExactName(?string $exactName = null): self
    {
        // validation for constraint: string
        if (!is_null($exactName) && !is_string($exactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactName, true), gettype($exactName)), __LINE__);
        }
        $this->exactName = $exactName;
        
        return $this;
    }
    /**
     * Get exactStreet value
     * @return string|null
     */
    public function getExactStreet(): ?string
    {
        return $this->exactStreet;
    }
    /**
     * Set exactStreet value
     * @param string $exactStreet
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentPhoneticDTO
     */
    public function setExactStreet(?string $exactStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($exactStreet) && !is_string($exactStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactStreet, true), gettype($exactStreet)), __LINE__);
        }
        $this->exactStreet = $exactStreet;
        
        return $this;
    }
    /**
     * Get exactTravellerName value
     * @return string|null
     */
    public function getExactTravellerName(): ?string
    {
        return $this->exactTravellerName;
    }
    /**
     * Set exactTravellerName value
     * @param string $exactTravellerName
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentPhoneticDTO
     */
    public function setExactTravellerName(?string $exactTravellerName = null): self
    {
        // validation for constraint: string
        if (!is_null($exactTravellerName) && !is_string($exactTravellerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactTravellerName, true), gettype($exactTravellerName)), __LINE__);
        }
        $this->exactTravellerName = $exactTravellerName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentPhoneticDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentPhoneticDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentPhoneticDTO
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
     * Get travellerName value
     * @return string|null
     */
    public function getTravellerName(): ?string
    {
        return $this->travellerName;
    }
    /**
     * Set travellerName value
     * @param string $travellerName
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentPhoneticDTO
     */
    public function setTravellerName(?string $travellerName = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerName) && !is_string($travellerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerName, true), gettype($travellerName)), __LINE__);
        }
        $this->travellerName = $travellerName;
        
        return $this;
    }
}
