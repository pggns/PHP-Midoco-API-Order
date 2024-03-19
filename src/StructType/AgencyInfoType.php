<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AgencyInfoType extends AbstractStructBase
{
    /**
     * The short_name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $short_name = null;
    /**
     * The reseller_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reseller_id = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The street_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $street_no = null;
    /**
     * The zip_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zip_code = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The fax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fax = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The shortName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shortName = null;
    /**
     * The resellerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $resellerId = null;
    /**
     * The streetNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $streetNo = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * Constructor method for AgencyInfoType
     * @uses AgencyInfoType::setShort_name()
     * @uses AgencyInfoType::setReseller_id()
     * @uses AgencyInfoType::setName()
     * @uses AgencyInfoType::setStreet()
     * @uses AgencyInfoType::setStreet_no()
     * @uses AgencyInfoType::setZip_code()
     * @uses AgencyInfoType::setCity()
     * @uses AgencyInfoType::setPhone()
     * @uses AgencyInfoType::setFax()
     * @uses AgencyInfoType::setEmail()
     * @uses AgencyInfoType::setShortName()
     * @uses AgencyInfoType::setResellerId()
     * @uses AgencyInfoType::setStreetNo()
     * @uses AgencyInfoType::setZipCode()
     * @param string $short_name
     * @param string $reseller_id
     * @param string $name
     * @param string $street
     * @param string $street_no
     * @param string $zip_code
     * @param string $city
     * @param string $phone
     * @param string $fax
     * @param string $email
     * @param string $shortName
     * @param string $resellerId
     * @param string $streetNo
     * @param string $zipCode
     */
    public function __construct(?string $short_name = null, ?string $reseller_id = null, ?string $name = null, ?string $street = null, ?string $street_no = null, ?string $zip_code = null, ?string $city = null, ?string $phone = null, ?string $fax = null, ?string $email = null, ?string $shortName = null, ?string $resellerId = null, ?string $streetNo = null, ?string $zipCode = null)
    {
        $this
            ->setShort_name($short_name)
            ->setReseller_id($reseller_id)
            ->setName($name)
            ->setStreet($street)
            ->setStreet_no($street_no)
            ->setZip_code($zip_code)
            ->setCity($city)
            ->setPhone($phone)
            ->setFax($fax)
            ->setEmail($email)
            ->setShortName($shortName)
            ->setResellerId($resellerId)
            ->setStreetNo($streetNo)
            ->setZipCode($zipCode);
    }
    /**
     * Get short_name value
     * @return string|null
     */
    public function getShort_name(): ?string
    {
        return $this->{'short-name'};
    }
    /**
     * Set short_name value
     * @param string $short_name
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
     */
    public function setShort_name(?string $short_name = null): self
    {
        // validation for constraint: string
        if (!is_null($short_name) && !is_string($short_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($short_name, true), gettype($short_name)), __LINE__);
        }
        $this->short_name = $this->{'short-name'} = $short_name;
        
        return $this;
    }
    /**
     * Get reseller_id value
     * @return string|null
     */
    public function getReseller_id(): ?string
    {
        return $this->{'reseller-id'};
    }
    /**
     * Set reseller_id value
     * @param string $reseller_id
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
     */
    public function setReseller_id(?string $reseller_id = null): self
    {
        // validation for constraint: string
        if (!is_null($reseller_id) && !is_string($reseller_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reseller_id, true), gettype($reseller_id)), __LINE__);
        }
        $this->reseller_id = $this->{'reseller-id'} = $reseller_id;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
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
     * Get street_no value
     * @return string|null
     */
    public function getStreet_no(): ?string
    {
        return $this->{'street-no'};
    }
    /**
     * Set street_no value
     * @param string $street_no
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
     */
    public function setStreet_no(?string $street_no = null): self
    {
        // validation for constraint: string
        if (!is_null($street_no) && !is_string($street_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street_no, true), gettype($street_no)), __LINE__);
        }
        $this->street_no = $this->{'street-no'} = $street_no;
        
        return $this;
    }
    /**
     * Get zip_code value
     * @return string|null
     */
    public function getZip_code(): ?string
    {
        return $this->{'zip-code'};
    }
    /**
     * Set zip_code value
     * @param string $zip_code
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
     */
    public function setZip_code(?string $zip_code = null): self
    {
        // validation for constraint: string
        if (!is_null($zip_code) && !is_string($zip_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zip_code, true), gettype($zip_code)), __LINE__);
        }
        $this->zip_code = $this->{'zip-code'} = $zip_code;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
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
     * Get fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
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
     * Get shortName value
     * @return string|null
     */
    public function getShortName(): ?string
    {
        return $this->shortName;
    }
    /**
     * Set shortName value
     * @param string $shortName
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
     */
    public function setShortName(?string $shortName = null): self
    {
        // validation for constraint: string
        if (!is_null($shortName) && !is_string($shortName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortName, true), gettype($shortName)), __LINE__);
        }
        $this->shortName = $shortName;
        
        return $this;
    }
    /**
     * Get resellerId value
     * @return string|null
     */
    public function getResellerId(): ?string
    {
        return $this->resellerId;
    }
    /**
     * Set resellerId value
     * @param string $resellerId
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
     */
    public function setResellerId(?string $resellerId = null): self
    {
        // validation for constraint: string
        if (!is_null($resellerId) && !is_string($resellerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resellerId, true), gettype($resellerId)), __LINE__);
        }
        $this->resellerId = $resellerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
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
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
}
