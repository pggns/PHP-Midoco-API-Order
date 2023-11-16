<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportAddress StructType
 * @subpackage Structs
 */
class MidocoImportAddress extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
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
     * The endorsement
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * The postOfficeBox
     * @var string|null
     */
    protected ?string $postOfficeBox = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
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
     * The mailingProhibited
     * @var bool|null
     */
    protected ?bool $mailingProhibited = null;
    /**
     * The validated
     * @var bool|null
     */
    protected ?bool $validated = null;
    /**
     * The addressTypeId
     * @var string|null
     */
    protected ?string $addressTypeId = null;
    /**
     * The mailingStatus
     * @var string|null
     */
    protected ?string $mailingStatus = null;
    /**
     * Constructor method for MidocoImportAddress
     * @uses MidocoImportAddress::setCustomerId()
     * @uses MidocoImportAddress::setStreet()
     * @uses MidocoImportAddress::setStreetNo()
     * @uses MidocoImportAddress::setEndorsement()
     * @uses MidocoImportAddress::setPostOfficeBox()
     * @uses MidocoImportAddress::setPostalCode()
     * @uses MidocoImportAddress::setCity()
     * @uses MidocoImportAddress::setCountryCode()
     * @uses MidocoImportAddress::setMailingProhibited()
     * @uses MidocoImportAddress::setValidated()
     * @uses MidocoImportAddress::setAddressTypeId()
     * @uses MidocoImportAddress::setMailingStatus()
     * @param string $customerId
     * @param string $street
     * @param string $streetNo
     * @param string $endorsement
     * @param string $postOfficeBox
     * @param string $postalCode
     * @param string $city
     * @param string $countryCode
     * @param bool $mailingProhibited
     * @param bool $validated
     * @param string $addressTypeId
     * @param string $mailingStatus
     */
    public function __construct(?string $customerId = null, ?string $street = null, ?string $streetNo = null, ?string $endorsement = null, ?string $postOfficeBox = null, ?string $postalCode = null, ?string $city = null, ?string $countryCode = null, ?bool $mailingProhibited = null, ?bool $validated = null, ?string $addressTypeId = null, ?string $mailingStatus = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setEndorsement($endorsement)
            ->setPostOfficeBox($postOfficeBox)
            ->setPostalCode($postalCode)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setMailingProhibited($mailingProhibited)
            ->setValidated($validated)
            ->setAddressTypeId($addressTypeId)
            ->setMailingStatus($mailingStatus);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
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
     * Get mailingProhibited value
     * @return bool|null
     */
    public function getMailingProhibited(): ?bool
    {
        return $this->mailingProhibited;
    }
    /**
     * Set mailingProhibited value
     * @param bool $mailingProhibited
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
     */
    public function setMailingProhibited(?bool $mailingProhibited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailingProhibited) && !is_bool($mailingProhibited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailingProhibited, true), gettype($mailingProhibited)), __LINE__);
        }
        $this->mailingProhibited = $mailingProhibited;
        
        return $this;
    }
    /**
     * Get validated value
     * @return bool|null
     */
    public function getValidated(): ?bool
    {
        return $this->validated;
    }
    /**
     * Set validated value
     * @param bool $validated
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
     */
    public function setValidated(?bool $validated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($validated) && !is_bool($validated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validated, true), gettype($validated)), __LINE__);
        }
        $this->validated = $validated;
        
        return $this;
    }
    /**
     * Get addressTypeId value
     * @return string|null
     */
    public function getAddressTypeId(): ?string
    {
        return $this->addressTypeId;
    }
    /**
     * Set addressTypeId value
     * @param string $addressTypeId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
     */
    public function setAddressTypeId(?string $addressTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($addressTypeId) && !is_string($addressTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressTypeId, true), gettype($addressTypeId)), __LINE__);
        }
        $this->addressTypeId = $addressTypeId;
        
        return $this;
    }
    /**
     * Get mailingStatus value
     * @return string|null
     */
    public function getMailingStatus(): ?string
    {
        return $this->mailingStatus;
    }
    /**
     * Set mailingStatus value
     * @param string $mailingStatus
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress
     */
    public function setMailingStatus(?string $mailingStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($mailingStatus) && !is_string($mailingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailingStatus, true), gettype($mailingStatus)), __LINE__);
        }
        $this->mailingStatus = $mailingStatus;
        
        return $this;
    }
}
