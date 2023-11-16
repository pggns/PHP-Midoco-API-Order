<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCustomerLinkDTO StructType
 * @subpackage Structs
 */
class CrmCustomerLinkDTO extends CustomerAssignDTO
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - documentation: name/organisation name/street
     * @var string|null
     */
    protected ?string $name = null;
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
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The phone
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - documentation: from default address or empty
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The web
     * @var string|null
     */
    protected ?string $web = null;
    /**
     * Constructor method for CrmCustomerLinkDTO
     * @uses CrmCustomerLinkDTO::setName()
     * @uses CrmCustomerLinkDTO::setStreet()
     * @uses CrmCustomerLinkDTO::setStreetNo()
     * @uses CrmCustomerLinkDTO::setCity()
     * @uses CrmCustomerLinkDTO::setPostalCode()
     * @uses CrmCustomerLinkDTO::setPhone()
     * @uses CrmCustomerLinkDTO::setEmail()
     * @uses CrmCustomerLinkDTO::setWeb()
     * @param string $name
     * @param string $street
     * @param string $streetNo
     * @param string $city
     * @param string $postalCode
     * @param string $phone
     * @param string $email
     * @param string $web
     */
    public function __construct(?string $name = null, ?string $street = null, ?string $streetNo = null, ?string $city = null, ?string $postalCode = null, ?string $phone = null, ?string $email = null, ?string $web = null)
    {
        $this
            ->setName($name)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setCity($city)
            ->setPostalCode($postalCode)
            ->setPhone($phone)
            ->setEmail($email)
            ->setWeb($web);
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO
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
     * Get phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get web value
     * @return string|null
     */
    public function getWeb(): ?string
    {
        return $this->web;
    }
    /**
     * Set web value
     * @param string $web
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO
     */
    public function setWeb(?string $web = null): self
    {
        // validation for constraint: string
        if (!is_null($web) && !is_string($web)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($web, true), gettype($web)), __LINE__);
        }
        $this->web = $web;
        
        return $this;
    }
}
