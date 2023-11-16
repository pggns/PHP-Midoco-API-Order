<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCompanyDTO StructType
 * @subpackage Structs
 */
class CrmCompanyDTO extends AbstractStructBase
{
    /**
     * The commissionId
     * @var string|null
     */
    protected ?string $commissionId = null;
    /**
     * The contactPerson
     * @var string|null
     */
    protected ?string $contactPerson = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The invoiceSignature
     * @var bool|null
     */
    protected ?bool $invoiceSignature = null;
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The linkedSupplierId
     * @var string|null
     */
    protected ?string $linkedSupplierId = null;
    /**
     * The organisationName
     * @var string|null
     */
    protected ?string $organisationName = null;
    /**
     * The tradeRegister
     * @var string|null
     */
    protected ?string $tradeRegister = null;
    /**
     * The vatId
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * Constructor method for CrmCompanyDTO
     * @uses CrmCompanyDTO::setCommissionId()
     * @uses CrmCompanyDTO::setContactPerson()
     * @uses CrmCompanyDTO::setCustomerId()
     * @uses CrmCompanyDTO::setInvoiceSignature()
     * @uses CrmCompanyDTO::setIsSpecialCustomer()
     * @uses CrmCompanyDTO::setLinkedSupplierId()
     * @uses CrmCompanyDTO::setOrganisationName()
     * @uses CrmCompanyDTO::setTradeRegister()
     * @uses CrmCompanyDTO::setVatId()
     * @param string $commissionId
     * @param string $contactPerson
     * @param int $customerId
     * @param bool $invoiceSignature
     * @param bool $isSpecialCustomer
     * @param string $linkedSupplierId
     * @param string $organisationName
     * @param string $tradeRegister
     * @param string $vatId
     */
    public function __construct(?string $commissionId = null, ?string $contactPerson = null, ?int $customerId = null, ?bool $invoiceSignature = null, ?bool $isSpecialCustomer = null, ?string $linkedSupplierId = null, ?string $organisationName = null, ?string $tradeRegister = null, ?string $vatId = null)
    {
        $this
            ->setCommissionId($commissionId)
            ->setContactPerson($contactPerson)
            ->setCustomerId($customerId)
            ->setInvoiceSignature($invoiceSignature)
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setLinkedSupplierId($linkedSupplierId)
            ->setOrganisationName($organisationName)
            ->setTradeRegister($tradeRegister)
            ->setVatId($vatId);
    }
    /**
     * Get commissionId value
     * @return string|null
     */
    public function getCommissionId(): ?string
    {
        return $this->commissionId;
    }
    /**
     * Set commissionId value
     * @param string $commissionId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyDTO
     */
    public function setCommissionId(?string $commissionId = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionId) && !is_string($commissionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionId, true), gettype($commissionId)), __LINE__);
        }
        $this->commissionId = $commissionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyDTO
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get invoiceSignature value
     * @return bool|null
     */
    public function getInvoiceSignature(): ?bool
    {
        return $this->invoiceSignature;
    }
    /**
     * Set invoiceSignature value
     * @param bool $invoiceSignature
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyDTO
     */
    public function setInvoiceSignature(?bool $invoiceSignature = null): self
    {
        // validation for constraint: boolean
        if (!is_null($invoiceSignature) && !is_bool($invoiceSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($invoiceSignature, true), gettype($invoiceSignature)), __LINE__);
        }
        $this->invoiceSignature = $invoiceSignature;
        
        return $this;
    }
    /**
     * Get isSpecialCustomer value
     * @return bool|null
     */
    public function getIsSpecialCustomer(): ?bool
    {
        return $this->isSpecialCustomer;
    }
    /**
     * Set isSpecialCustomer value
     * @param bool $isSpecialCustomer
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyDTO
     */
    public function setIsSpecialCustomer(?bool $isSpecialCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialCustomer) && !is_bool($isSpecialCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSpecialCustomer, true), gettype($isSpecialCustomer)), __LINE__);
        }
        $this->isSpecialCustomer = $isSpecialCustomer;
        
        return $this;
    }
    /**
     * Get linkedSupplierId value
     * @return string|null
     */
    public function getLinkedSupplierId(): ?string
    {
        return $this->linkedSupplierId;
    }
    /**
     * Set linkedSupplierId value
     * @param string $linkedSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyDTO
     */
    public function setLinkedSupplierId(?string $linkedSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($linkedSupplierId) && !is_string($linkedSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkedSupplierId, true), gettype($linkedSupplierId)), __LINE__);
        }
        $this->linkedSupplierId = $linkedSupplierId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyDTO
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
     * Get tradeRegister value
     * @return string|null
     */
    public function getTradeRegister(): ?string
    {
        return $this->tradeRegister;
    }
    /**
     * Set tradeRegister value
     * @param string $tradeRegister
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyDTO
     */
    public function setTradeRegister(?string $tradeRegister = null): self
    {
        // validation for constraint: string
        if (!is_null($tradeRegister) && !is_string($tradeRegister)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradeRegister, true), gettype($tradeRegister)), __LINE__);
        }
        $this->tradeRegister = $tradeRegister;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyDTO
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
}
