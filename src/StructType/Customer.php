<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customer StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer information, describing the person or company who is to be registered as paying or getting the paperwork for the booked travel (2 entries possible)
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Customer extends AbstractStructBase
{
    /**
     * The midoco_customer_id
     * Meta information extracted from the WSDL
     * - documentation: In case the external system has knowledge of an existing customer record in the midoco CRM, the id should be set here to enable automatic assignment.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $midoco_customer_id = null;
    /**
     * The midoco_debitor
     * Meta information extracted from the WSDL
     * - documentation: In case the external system has knowledge of an existing debitor record in the midoco CRM, the debitor can be set here to identify the customer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $midoco_debitor = null;
    /**
     * The force_debitor_infos
     * Meta information extracted from the WSDL
     * - documentation: use customer information (address...) from direct midoco debitor record in the midoco CRM
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $force_debitor_infos = null;
    /**
     * The use_mail_address_from_message
     * Meta information extracted from the WSDL
     * - documentation: use mail address information from message instead of direct midoco debitor mail address
     * - default: true
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $use_mail_address_from_message = null;
    /**
     * The reference_customer_id
     * Meta information extracted from the WSDL
     * - documentation: This field should contain an external customer id (from an external customer database).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reference_customer_id = null;
    /**
     * The reference_system
     * Meta information extracted from the WSDL
     * - documentation: In this field the external system for the external customer id is named by an known ID)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reference_system = null;
    /**
     * The reference_url
     * Meta information extracted from the WSDL
     * - documentation: This field can contain an URL descriptor to be executed in order to show the external customer in the external system
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reference_url = null;
    /**
     * The private_data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Private_data|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Private_data $private_data = null;
    /**
     * The company_data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Company_data|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Company_data $company_data = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
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
     * The state
     * Meta information extracted from the WSDL
     * - documentation: State name in case of countries which are divided in states
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - documentation: ISO Code for the country of the customer
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The postal_code
     * Meta information extracted from the WSDL
     * - documentation: Postal code of the street address
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $postal_code = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - documentation: City name
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The endorsement
     * Meta information extracted from the WSDL
     * - documentation: Any additional data (like part of the city, special House name etc).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * The communication
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Communication[]
     */
    protected ?array $communication = null;
    /**
     * The customer_has_business_contract
     * Meta information extracted from the WSDL
     * - documentation: customer has business contract
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $customer_has_business_contract = null;
    /**
     * The Consent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Consent
     * @var \Pggns\MidocoApi\Order\StructType\ConsentType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ConsentType $Consent = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - default: INVOICE
     * - use: optional
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The override_existing_order_customer
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $override_existing_order_customer = null;
    /**
     * The midocoCustomerId
     * Meta information extracted from the WSDL
     * - documentation: In case the external system has knowledge of an existing customer record in the midoco CRM, the id should be set here to enable automatic assignment.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * The midocoDebitor
     * Meta information extracted from the WSDL
     * - documentation: In case the external system has knowledge of an existing debitor record in the midoco CRM, the debitor can be set here to identify the customer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $midocoDebitor = null;
    /**
     * The forceDebitorInfos
     * Meta information extracted from the WSDL
     * - documentation: use customer information (address...) from direct midoco debitor record in the midoco CRM
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $forceDebitorInfos = null;
    /**
     * The useMailAddressFromMessage
     * Meta information extracted from the WSDL
     * - documentation: use mail address information from message instead of direct midoco debitor mail address
     * - default: true
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $useMailAddressFromMessage = null;
    /**
     * The referenceCustomerId
     * Meta information extracted from the WSDL
     * - documentation: This field should contain an external customer id (from an external customer database).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $referenceCustomerId = null;
    /**
     * The referenceSystem
     * Meta information extracted from the WSDL
     * - documentation: In this field the external system for the external customer id is named by an known ID)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $referenceSystem = null;
    /**
     * The referenceUrl
     * Meta information extracted from the WSDL
     * - documentation: This field can contain an URL descriptor to be executed in order to show the external customer in the external system
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $referenceUrl = null;
    /**
     * The privateData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\PrivateData|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PrivateData $privateData = null;
    /**
     * The companyData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\CompanyData|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CompanyData $companyData = null;
    /**
     * The streetNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $streetNo = null;
    /**
     * The postalCode
     * Meta information extracted from the WSDL
     * - documentation: Postal code of the street address
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The customerHasBusinessContract
     * Meta information extracted from the WSDL
     * - documentation: customer has business contract
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $customerHasBusinessContract = null;
    /**
     * The overrideExistingOrderCustomer
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $overrideExistingOrderCustomer = null;
    /**
     * Constructor method for customer
     * @uses Customer::setMidoco_customer_id()
     * @uses Customer::setMidoco_debitor()
     * @uses Customer::setForce_debitor_infos()
     * @uses Customer::setUse_mail_address_from_message()
     * @uses Customer::setReference_customer_id()
     * @uses Customer::setReference_system()
     * @uses Customer::setReference_url()
     * @uses Customer::setPrivate_data()
     * @uses Customer::setCompany_data()
     * @uses Customer::setLanguage()
     * @uses Customer::setStreet()
     * @uses Customer::setStreet_no()
     * @uses Customer::setState()
     * @uses Customer::setCountry()
     * @uses Customer::setPostal_code()
     * @uses Customer::setCity()
     * @uses Customer::setEndorsement()
     * @uses Customer::setCommunication()
     * @uses Customer::setCustomer_has_business_contract()
     * @uses Customer::setConsent()
     * @uses Customer::setType()
     * @uses Customer::setOverride_existing_order_customer()
     * @uses Customer::setMidocoCustomerId()
     * @uses Customer::setMidocoDebitor()
     * @uses Customer::setForceDebitorInfos()
     * @uses Customer::setUseMailAddressFromMessage()
     * @uses Customer::setReferenceCustomerId()
     * @uses Customer::setReferenceSystem()
     * @uses Customer::setReferenceUrl()
     * @uses Customer::setPrivateData()
     * @uses Customer::setCompanyData()
     * @uses Customer::setStreetNo()
     * @uses Customer::setPostalCode()
     * @uses Customer::setCustomerHasBusinessContract()
     * @uses Customer::setOverrideExistingOrderCustomer()
     * @param int $midoco_customer_id
     * @param string $midoco_debitor
     * @param bool $force_debitor_infos
     * @param bool $use_mail_address_from_message
     * @param string $reference_customer_id
     * @param string $reference_system
     * @param string $reference_url
     * @param \Pggns\MidocoApi\Order\StructType\Private_data $private_data
     * @param \Pggns\MidocoApi\Order\StructType\Company_data $company_data
     * @param string $language
     * @param string $street
     * @param string $street_no
     * @param string $state
     * @param string $country
     * @param string $postal_code
     * @param string $city
     * @param string $endorsement
     * @param \Pggns\MidocoApi\Order\StructType\Communication[] $communication
     * @param bool $customer_has_business_contract
     * @param \Pggns\MidocoApi\Order\StructType\ConsentType $consent
     * @param string $type
     * @param bool $override_existing_order_customer
     * @param int $midocoCustomerId
     * @param string $midocoDebitor
     * @param bool $forceDebitorInfos
     * @param bool $useMailAddressFromMessage
     * @param string $referenceCustomerId
     * @param string $referenceSystem
     * @param string $referenceUrl
     * @param \Pggns\MidocoApi\Order\StructType\PrivateData $privateData
     * @param \Pggns\MidocoApi\Order\StructType\CompanyData $companyData
     * @param string $streetNo
     * @param string $postalCode
     * @param bool $customerHasBusinessContract
     * @param bool $overrideExistingOrderCustomer
     */
    public function __construct(?int $midoco_customer_id = null, ?string $midoco_debitor = null, ?bool $force_debitor_infos = false, ?bool $use_mail_address_from_message = true, ?string $reference_customer_id = null, ?string $reference_system = null, ?string $reference_url = null, ?\Pggns\MidocoApi\Order\StructType\Private_data $private_data = null, ?\Pggns\MidocoApi\Order\StructType\Company_data $company_data = null, ?string $language = null, ?string $street = null, ?string $street_no = null, ?string $state = null, ?string $country = null, ?string $postal_code = null, ?string $city = null, ?string $endorsement = null, ?array $communication = null, ?bool $customer_has_business_contract = null, ?\Pggns\MidocoApi\Order\StructType\ConsentType $consent = null, ?string $type = 'INVOICE', ?bool $override_existing_order_customer = false, ?int $midocoCustomerId = null, ?string $midocoDebitor = null, ?bool $forceDebitorInfos = false, ?bool $useMailAddressFromMessage = true, ?string $referenceCustomerId = null, ?string $referenceSystem = null, ?string $referenceUrl = null, ?\Pggns\MidocoApi\Order\StructType\PrivateData $privateData = null, ?\Pggns\MidocoApi\Order\StructType\CompanyData $companyData = null, ?string $streetNo = null, ?string $postalCode = null, ?bool $customerHasBusinessContract = null, ?bool $overrideExistingOrderCustomer = false)
    {
        $this
            ->setMidoco_customer_id($midoco_customer_id)
            ->setMidoco_debitor($midoco_debitor)
            ->setForce_debitor_infos($force_debitor_infos)
            ->setUse_mail_address_from_message($use_mail_address_from_message)
            ->setReference_customer_id($reference_customer_id)
            ->setReference_system($reference_system)
            ->setReference_url($reference_url)
            ->setPrivate_data($private_data)
            ->setCompany_data($company_data)
            ->setLanguage($language)
            ->setStreet($street)
            ->setStreet_no($street_no)
            ->setState($state)
            ->setCountry($country)
            ->setPostal_code($postal_code)
            ->setCity($city)
            ->setEndorsement($endorsement)
            ->setCommunication($communication)
            ->setCustomer_has_business_contract($customer_has_business_contract)
            ->setConsent($consent)
            ->setType($type)
            ->setOverride_existing_order_customer($override_existing_order_customer)
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMidocoDebitor($midocoDebitor)
            ->setForceDebitorInfos($forceDebitorInfos)
            ->setUseMailAddressFromMessage($useMailAddressFromMessage)
            ->setReferenceCustomerId($referenceCustomerId)
            ->setReferenceSystem($referenceSystem)
            ->setReferenceUrl($referenceUrl)
            ->setPrivateData($privateData)
            ->setCompanyData($companyData)
            ->setStreetNo($streetNo)
            ->setPostalCode($postalCode)
            ->setCustomerHasBusinessContract($customerHasBusinessContract)
            ->setOverrideExistingOrderCustomer($overrideExistingOrderCustomer);
    }
    /**
     * Get midoco_customer_id value
     * @return int|null
     */
    public function getMidoco_customer_id(): ?int
    {
        return $this->{'midoco-customer-id'};
    }
    /**
     * Set midoco_customer_id value
     * @param int $midoco_customer_id
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setMidoco_customer_id(?int $midoco_customer_id = null): self
    {
        // validation for constraint: int
        if (!is_null($midoco_customer_id) && !(is_int($midoco_customer_id) || ctype_digit($midoco_customer_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midoco_customer_id, true), gettype($midoco_customer_id)), __LINE__);
        }
        $this->midoco_customer_id = $this->{'midoco-customer-id'} = $midoco_customer_id;
        
        return $this;
    }
    /**
     * Get midoco_debitor value
     * @return string|null
     */
    public function getMidoco_debitor(): ?string
    {
        return $this->{'midoco-debitor'};
    }
    /**
     * Set midoco_debitor value
     * @param string $midoco_debitor
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setMidoco_debitor(?string $midoco_debitor = null): self
    {
        // validation for constraint: string
        if (!is_null($midoco_debitor) && !is_string($midoco_debitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midoco_debitor, true), gettype($midoco_debitor)), __LINE__);
        }
        $this->midoco_debitor = $this->{'midoco-debitor'} = $midoco_debitor;
        
        return $this;
    }
    /**
     * Get force_debitor_infos value
     * @return bool|null
     */
    public function getForce_debitor_infos(): ?bool
    {
        return $this->{'force-debitor-infos'};
    }
    /**
     * Set force_debitor_infos value
     * @param bool $force_debitor_infos
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setForce_debitor_infos(?bool $force_debitor_infos = false): self
    {
        // validation for constraint: boolean
        if (!is_null($force_debitor_infos) && !is_bool($force_debitor_infos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($force_debitor_infos, true), gettype($force_debitor_infos)), __LINE__);
        }
        $this->force_debitor_infos = $this->{'force-debitor-infos'} = $force_debitor_infos;
        
        return $this;
    }
    /**
     * Get use_mail_address_from_message value
     * @return bool|null
     */
    public function getUse_mail_address_from_message(): ?bool
    {
        return $this->{'use-mail-address-from-message'};
    }
    /**
     * Set use_mail_address_from_message value
     * @param bool $use_mail_address_from_message
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setUse_mail_address_from_message(?bool $use_mail_address_from_message = true): self
    {
        // validation for constraint: boolean
        if (!is_null($use_mail_address_from_message) && !is_bool($use_mail_address_from_message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($use_mail_address_from_message, true), gettype($use_mail_address_from_message)), __LINE__);
        }
        $this->use_mail_address_from_message = $this->{'use-mail-address-from-message'} = $use_mail_address_from_message;
        
        return $this;
    }
    /**
     * Get reference_customer_id value
     * @return string|null
     */
    public function getReference_customer_id(): ?string
    {
        return $this->{'reference-customer-id'};
    }
    /**
     * Set reference_customer_id value
     * @param string $reference_customer_id
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setReference_customer_id(?string $reference_customer_id = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_customer_id) && !is_string($reference_customer_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_customer_id, true), gettype($reference_customer_id)), __LINE__);
        }
        $this->reference_customer_id = $this->{'reference-customer-id'} = $reference_customer_id;
        
        return $this;
    }
    /**
     * Get reference_system value
     * @return string|null
     */
    public function getReference_system(): ?string
    {
        return $this->{'reference-system'};
    }
    /**
     * Set reference_system value
     * @param string $reference_system
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setReference_system(?string $reference_system = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_system) && !is_string($reference_system)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_system, true), gettype($reference_system)), __LINE__);
        }
        $this->reference_system = $this->{'reference-system'} = $reference_system;
        
        return $this;
    }
    /**
     * Get reference_url value
     * @return string|null
     */
    public function getReference_url(): ?string
    {
        return $this->{'reference-url'};
    }
    /**
     * Set reference_url value
     * @param string $reference_url
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setReference_url(?string $reference_url = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_url) && !is_string($reference_url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_url, true), gettype($reference_url)), __LINE__);
        }
        $this->reference_url = $this->{'reference-url'} = $reference_url;
        
        return $this;
    }
    /**
     * Get private_data value
     * @return \Pggns\MidocoApi\Order\StructType\Private_data|null
     */
    public function getPrivate_data(): ?\Pggns\MidocoApi\Order\StructType\Private_data
    {
        return $this->{'private-data'};
    }
    /**
     * Set private_data value
     * @param \Pggns\MidocoApi\Order\StructType\Private_data $private_data
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setPrivate_data(?\Pggns\MidocoApi\Order\StructType\Private_data $private_data = null): self
    {
        $this->private_data = $this->{'private-data'} = $private_data;
        
        return $this;
    }
    /**
     * Get company_data value
     * @return \Pggns\MidocoApi\Order\StructType\Company_data|null
     */
    public function getCompany_data(): ?\Pggns\MidocoApi\Order\StructType\Company_data
    {
        return $this->{'company-data'};
    }
    /**
     * Set company_data value
     * @param \Pggns\MidocoApi\Order\StructType\Company_data $company_data
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setCompany_data(?\Pggns\MidocoApi\Order\StructType\Company_data $company_data = null): self
    {
        $this->company_data = $this->{'company-data'} = $company_data;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Customer
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
     * @return \Pggns\MidocoApi\Order\StructType\Customer
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
     * @return \Pggns\MidocoApi\Order\StructType\Customer
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
     * @return \Pggns\MidocoApi\Order\StructType\Customer
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
     * Get postal_code value
     * @return string|null
     */
    public function getPostal_code(): ?string
    {
        return $this->{'postal-code'};
    }
    /**
     * Set postal_code value
     * @param string $postal_code
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setPostal_code(?string $postal_code = null): self
    {
        // validation for constraint: string
        if (!is_null($postal_code) && !is_string($postal_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postal_code, true), gettype($postal_code)), __LINE__);
        }
        $this->postal_code = $this->{'postal-code'} = $postal_code;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Customer
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
     * @return \Pggns\MidocoApi\Order\StructType\Customer
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
     * Get communication value
     * @return \Pggns\MidocoApi\Order\StructType\Communication[]
     */
    public function getCommunication(): ?array
    {
        return $this->communication;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCommunication method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommunication method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommunicationForArrayConstraintFromSetCommunication(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCommunicationItem) {
            // validation for constraint: itemType
            if (!$customerCommunicationItem instanceof \Pggns\MidocoApi\Order\StructType\Communication) {
                $invalidValues[] = is_object($customerCommunicationItem) ? get_class($customerCommunicationItem) : sprintf('%s(%s)', gettype($customerCommunicationItem), var_export($customerCommunicationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The communication property can only contain items of type \Pggns\MidocoApi\Order\StructType\Communication, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set communication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Communication[] $communication
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setCommunication(?array $communication = null): self
    {
        // validation for constraint: array
        if ('' !== ($communicationArrayErrorMessage = self::validateCommunicationForArrayConstraintFromSetCommunication($communication))) {
            throw new InvalidArgumentException($communicationArrayErrorMessage, __LINE__);
        }
        $this->communication = $communication;
        
        return $this;
    }
    /**
     * Add item to communication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Communication $item
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function addToCommunication(\Pggns\MidocoApi\Order\StructType\Communication $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Communication) {
            throw new InvalidArgumentException(sprintf('The communication property can only contain items of type \Pggns\MidocoApi\Order\StructType\Communication, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->communication[] = $item;
        
        return $this;
    }
    /**
     * Get customer_has_business_contract value
     * @return bool|null
     */
    public function getCustomer_has_business_contract(): ?bool
    {
        return $this->{'customer-has-business-contract'};
    }
    /**
     * Set customer_has_business_contract value
     * @param bool $customer_has_business_contract
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setCustomer_has_business_contract(?bool $customer_has_business_contract = null): self
    {
        // validation for constraint: boolean
        if (!is_null($customer_has_business_contract) && !is_bool($customer_has_business_contract)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customer_has_business_contract, true), gettype($customer_has_business_contract)), __LINE__);
        }
        $this->customer_has_business_contract = $this->{'customer-has-business-contract'} = $customer_has_business_contract;
        
        return $this;
    }
    /**
     * Get Consent value
     * @return \Pggns\MidocoApi\Order\StructType\ConsentType|null
     */
    public function getConsent(): ?\Pggns\MidocoApi\Order\StructType\ConsentType
    {
        return $this->Consent;
    }
    /**
     * Set Consent value
     * @param \Pggns\MidocoApi\Order\StructType\ConsentType $consent
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setConsent(?\Pggns\MidocoApi\Order\StructType\ConsentType $consent = null): self
    {
        $this->Consent = $consent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setType(?string $type = 'INVOICE'): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get override_existing_order_customer value
     * @return bool|null
     */
    public function getOverride_existing_order_customer(): ?bool
    {
        return $this->{'override-existing-order-customer'};
    }
    /**
     * Set override_existing_order_customer value
     * @param bool $override_existing_order_customer
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setOverride_existing_order_customer(?bool $override_existing_order_customer = false): self
    {
        // validation for constraint: boolean
        if (!is_null($override_existing_order_customer) && !is_bool($override_existing_order_customer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($override_existing_order_customer, true), gettype($override_existing_order_customer)), __LINE__);
        }
        $this->override_existing_order_customer = $this->{'override-existing-order-customer'} = $override_existing_order_customer;
        
        return $this;
    }
    /**
     * Get midocoCustomerId value
     * @return int|null
     */
    public function getMidocoCustomerId(): ?int
    {
        return $this->midocoCustomerId;
    }
    /**
     * Set midocoCustomerId value
     * @param int $midocoCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setMidocoCustomerId(?int $midocoCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCustomerId) && !(is_int($midocoCustomerId) || ctype_digit($midocoCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCustomerId, true), gettype($midocoCustomerId)), __LINE__);
        }
        $this->midocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get midocoDebitor value
     * @return string|null
     */
    public function getMidocoDebitor(): ?string
    {
        return $this->midocoDebitor;
    }
    /**
     * Set midocoDebitor value
     * @param string $midocoDebitor
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setMidocoDebitor(?string $midocoDebitor = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoDebitor) && !is_string($midocoDebitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoDebitor, true), gettype($midocoDebitor)), __LINE__);
        }
        $this->midocoDebitor = $midocoDebitor;
        
        return $this;
    }
    /**
     * Get forceDebitorInfos value
     * @return bool|null
     */
    public function getForceDebitorInfos(): ?bool
    {
        return $this->forceDebitorInfos;
    }
    /**
     * Set forceDebitorInfos value
     * @param bool $forceDebitorInfos
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setForceDebitorInfos(?bool $forceDebitorInfos = false): self
    {
        // validation for constraint: boolean
        if (!is_null($forceDebitorInfos) && !is_bool($forceDebitorInfos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forceDebitorInfos, true), gettype($forceDebitorInfos)), __LINE__);
        }
        $this->forceDebitorInfos = $forceDebitorInfos;
        
        return $this;
    }
    /**
     * Get useMailAddressFromMessage value
     * @return bool|null
     */
    public function getUseMailAddressFromMessage(): ?bool
    {
        return $this->useMailAddressFromMessage;
    }
    /**
     * Set useMailAddressFromMessage value
     * @param bool $useMailAddressFromMessage
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setUseMailAddressFromMessage(?bool $useMailAddressFromMessage = true): self
    {
        // validation for constraint: boolean
        if (!is_null($useMailAddressFromMessage) && !is_bool($useMailAddressFromMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useMailAddressFromMessage, true), gettype($useMailAddressFromMessage)), __LINE__);
        }
        $this->useMailAddressFromMessage = $useMailAddressFromMessage;
        
        return $this;
    }
    /**
     * Get referenceCustomerId value
     * @return string|null
     */
    public function getReferenceCustomerId(): ?string
    {
        return $this->referenceCustomerId;
    }
    /**
     * Set referenceCustomerId value
     * @param string $referenceCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setReferenceCustomerId(?string $referenceCustomerId = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceCustomerId) && !is_string($referenceCustomerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceCustomerId, true), gettype($referenceCustomerId)), __LINE__);
        }
        $this->referenceCustomerId = $referenceCustomerId;
        
        return $this;
    }
    /**
     * Get referenceSystem value
     * @return string|null
     */
    public function getReferenceSystem(): ?string
    {
        return $this->referenceSystem;
    }
    /**
     * Set referenceSystem value
     * @param string $referenceSystem
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setReferenceSystem(?string $referenceSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceSystem) && !is_string($referenceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceSystem, true), gettype($referenceSystem)), __LINE__);
        }
        $this->referenceSystem = $referenceSystem;
        
        return $this;
    }
    /**
     * Get referenceUrl value
     * @return string|null
     */
    public function getReferenceUrl(): ?string
    {
        return $this->referenceUrl;
    }
    /**
     * Set referenceUrl value
     * @param string $referenceUrl
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setReferenceUrl(?string $referenceUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceUrl) && !is_string($referenceUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceUrl, true), gettype($referenceUrl)), __LINE__);
        }
        $this->referenceUrl = $referenceUrl;
        
        return $this;
    }
    /**
     * Get privateData value
     * @return \Pggns\MidocoApi\Order\StructType\PrivateData|null
     */
    public function getPrivateData(): ?\Pggns\MidocoApi\Order\StructType\PrivateData
    {
        return $this->privateData;
    }
    /**
     * Set privateData value
     * @param \Pggns\MidocoApi\Order\StructType\PrivateData $privateData
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setPrivateData(?\Pggns\MidocoApi\Order\StructType\PrivateData $privateData = null): self
    {
        $this->privateData = $privateData;
        
        return $this;
    }
    /**
     * Get companyData value
     * @return \Pggns\MidocoApi\Order\StructType\CompanyData|null
     */
    public function getCompanyData(): ?\Pggns\MidocoApi\Order\StructType\CompanyData
    {
        return $this->companyData;
    }
    /**
     * Set companyData value
     * @param \Pggns\MidocoApi\Order\StructType\CompanyData $companyData
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setCompanyData(?\Pggns\MidocoApi\Order\StructType\CompanyData $companyData = null): self
    {
        $this->companyData = $companyData;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Customer
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
     * @return \Pggns\MidocoApi\Order\StructType\Customer
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
     * Get customerHasBusinessContract value
     * @return bool|null
     */
    public function getCustomerHasBusinessContract(): ?bool
    {
        return $this->customerHasBusinessContract;
    }
    /**
     * Set customerHasBusinessContract value
     * @param bool $customerHasBusinessContract
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setCustomerHasBusinessContract(?bool $customerHasBusinessContract = null): self
    {
        // validation for constraint: boolean
        if (!is_null($customerHasBusinessContract) && !is_bool($customerHasBusinessContract)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customerHasBusinessContract, true), gettype($customerHasBusinessContract)), __LINE__);
        }
        $this->customerHasBusinessContract = $customerHasBusinessContract;
        
        return $this;
    }
    /**
     * Get overrideExistingOrderCustomer value
     * @return bool|null
     */
    public function getOverrideExistingOrderCustomer(): ?bool
    {
        return $this->overrideExistingOrderCustomer;
    }
    /**
     * Set overrideExistingOrderCustomer value
     * @param bool $overrideExistingOrderCustomer
     * @return \Pggns\MidocoApi\Order\StructType\Customer
     */
    public function setOverrideExistingOrderCustomer(?bool $overrideExistingOrderCustomer = false): self
    {
        // validation for constraint: boolean
        if (!is_null($overrideExistingOrderCustomer) && !is_bool($overrideExistingOrderCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overrideExistingOrderCustomer, true), gettype($overrideExistingOrderCustomer)), __LINE__);
        }
        $this->overrideExistingOrderCustomer = $overrideExistingOrderCustomer;
        
        return $this;
    }
}
