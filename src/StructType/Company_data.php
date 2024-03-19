<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for company-data StructType
 * Meta information extracted from the WSDL
 * - documentation: Special data in case of a company customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Company_data extends AbstractStructBase
{
    /**
     * The salutation
     * Meta information extracted from the WSDL
     * - documentation: THe salutation of the contact-person of the company
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The contact_person
     * Meta information extracted from the WSDL
     * - documentation: Forename and name of the contact-person in the company
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $contact_person = null;
    /**
     * The organisation_name
     * Meta information extracted from the WSDL
     * - documentation: Name of the company
     * @var string|null
     */
    protected ?string $organisation_name = null;
    /**
     * The vat_id
     * Meta information extracted from the WSDL
     * - documentation: vat id of the company
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vat_id = null;
    /**
     * The vat_type
     * Meta information extracted from the WSDL
     * - documentation: vat type of the company
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vat_type = null;
    /**
     * Constructor method for company-data
     * @uses Company_data::setSalutation()
     * @uses Company_data::setContact_person()
     * @uses Company_data::setOrganisation_name()
     * @uses Company_data::setVat_id()
     * @uses Company_data::setVat_type()
     * @param string $salutation
     * @param string $contact_person
     * @param string $organisation_name
     * @param string $vat_id
     * @param string $vat_type
     */
    public function __construct(?string $salutation = null, ?string $contact_person = null, ?string $organisation_name = null, ?string $vat_id = null, ?string $vat_type = null)
    {
        $this
            ->setSalutation($salutation)
            ->setContact_person($contact_person)
            ->setOrganisation_name($organisation_name)
            ->setVat_id($vat_id)
            ->setVat_type($vat_type);
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
     * @return \Pggns\MidocoApi\Order\StructType\Company_data
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
     * Get contact_person value
     * @return string|null
     */
    public function getContact_person(): ?string
    {
        return $this->{'contact-person'};
    }
    /**
     * Set contact_person value
     * @param string $contact_person
     * @return \Pggns\MidocoApi\Order\StructType\Company_data
     */
    public function setContact_person(?string $contact_person = null): self
    {
        // validation for constraint: string
        if (!is_null($contact_person) && !is_string($contact_person)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contact_person, true), gettype($contact_person)), __LINE__);
        }
        $this->contact_person = $this->{'contact-person'} = $contact_person;
        
        return $this;
    }
    /**
     * Get organisation_name value
     * @return string|null
     */
    public function getOrganisation_name(): ?string
    {
        return $this->{'organisation-name'};
    }
    /**
     * Set organisation_name value
     * @param string $organisation_name
     * @return \Pggns\MidocoApi\Order\StructType\Company_data
     */
    public function setOrganisation_name(?string $organisation_name = null): self
    {
        // validation for constraint: string
        if (!is_null($organisation_name) && !is_string($organisation_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisation_name, true), gettype($organisation_name)), __LINE__);
        }
        $this->organisation_name = $this->{'organisation-name'} = $organisation_name;
        
        return $this;
    }
    /**
     * Get vat_id value
     * @return string|null
     */
    public function getVat_id(): ?string
    {
        return $this->{'vat-id'};
    }
    /**
     * Set vat_id value
     * @param string $vat_id
     * @return \Pggns\MidocoApi\Order\StructType\Company_data
     */
    public function setVat_id(?string $vat_id = null): self
    {
        // validation for constraint: string
        if (!is_null($vat_id) && !is_string($vat_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vat_id, true), gettype($vat_id)), __LINE__);
        }
        $this->vat_id = $this->{'vat-id'} = $vat_id;
        
        return $this;
    }
    /**
     * Get vat_type value
     * @return string|null
     */
    public function getVat_type(): ?string
    {
        return $this->{'vat-type'};
    }
    /**
     * Set vat_type value
     * @uses \Pggns\MidocoApi\Order\EnumType\VatTypeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\VatTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $vat_type
     * @return \Pggns\MidocoApi\Order\StructType\Company_data
     */
    public function setVat_type(?string $vat_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\VatTypeType::valueIsValid($vat_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\VatTypeType', is_array($vat_type) ? implode(', ', $vat_type) : var_export($vat_type, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\VatTypeType::getValidValues())), __LINE__);
        }
        $this->vat_type = $this->{'vat-type'} = $vat_type;
        
        return $this;
    }
}
