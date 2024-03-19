<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for companyData StructType
 * Meta information extracted from the WSDL
 * - documentation: Special data in case of a company customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CompanyData extends AbstractStructBase
{
    /**
     * The salutation
     * Meta information extracted from the WSDL
     * - documentation: THe salutation of the contactPerson of the company
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The contactPerson
     * Meta information extracted from the WSDL
     * - documentation: Forename and name of the contactPerson in the company
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $contactPerson = null;
    /**
     * The organisationName
     * Meta information extracted from the WSDL
     * - documentation: Name of the company
     * @var string|null
     */
    protected ?string $organisationName = null;
    /**
     * The vatId
     * Meta information extracted from the WSDL
     * - documentation: vat id of the company
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * The vatType
     * Meta information extracted from the WSDL
     * - documentation: vat type of the company
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vatType = null;
    /**
     * Constructor method for companyData
     * @uses CompanyData::setSalutation()
     * @uses CompanyData::setContactPerson()
     * @uses CompanyData::setOrganisationName()
     * @uses CompanyData::setVatId()
     * @uses CompanyData::setVatType()
     * @param string $salutation
     * @param string $contactPerson
     * @param string $organisationName
     * @param string $vatId
     * @param string $vatType
     */
    public function __construct(?string $salutation = null, ?string $contactPerson = null, ?string $organisationName = null, ?string $vatId = null, ?string $vatType = null)
    {
        $this
            ->setSalutation($salutation)
            ->setContactPerson($contactPerson)
            ->setOrganisationName($organisationName)
            ->setVatId($vatId)
            ->setVatType($vatType);
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
     * @return \Pggns\MidocoApi\Order\StructType\CompanyData
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
     * Get contactPerson value
     * @return string|null
     */
    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }
    /**
     * Set contactPerson value
     * @param string $contactPerson
     * @return \Pggns\MidocoApi\Order\StructType\CompanyData
     */
    public function setContactPerson(?string $contactPerson = null): self
    {
        // validation for constraint: string
        if (!is_null($contactPerson) && !is_string($contactPerson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPerson, true), gettype($contactPerson)), __LINE__);
        }
        $this->contactPerson = $contactPerson;
        
        return $this;
    }
    /**
     * Get organisationName value
     * @return string|null
     */
    public function getOrganisationName(): ?string
    {
        return $this->organisationName;
    }
    /**
     * Set organisationName value
     * @param string $organisationName
     * @return \Pggns\MidocoApi\Order\StructType\CompanyData
     */
    public function setOrganisationName(?string $organisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($organisationName) && !is_string($organisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationName, true), gettype($organisationName)), __LINE__);
        }
        $this->organisationName = $organisationName;
        
        return $this;
    }
    /**
     * Get vatId value
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }
    /**
     * Set vatId value
     * @param string $vatId
     * @return \Pggns\MidocoApi\Order\StructType\CompanyData
     */
    public function setVatId(?string $vatId = null): self
    {
        // validation for constraint: string
        if (!is_null($vatId) && !is_string($vatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatId, true), gettype($vatId)), __LINE__);
        }
        $this->vatId = $vatId;
        
        return $this;
    }
    /**
     * Get vatType value
     * @return string|null
     */
    public function getVatType(): ?string
    {
        return $this->vatType;
    }
    /**
     * Set vatType value
     * @uses \Pggns\MidocoApi\Order\EnumType\VatTypeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\VatTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $vatType
     * @return \Pggns\MidocoApi\Order\StructType\CompanyData
     */
    public function setVatType(?string $vatType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\VatTypeType::valueIsValid($vatType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\VatTypeType', is_array($vatType) ? implode(', ', $vatType) : var_export($vatType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\VatTypeType::getValidValues())), __LINE__);
        }
        $this->vatType = $vatType;
        
        return $this;
    }
}
