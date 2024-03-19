<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchingProductTypeSupplierRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMatchingProductTypeSupplierRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The forPerson
     * @var bool|null
     */
    protected ?bool $forPerson = null;
    /**
     * The forCompany
     * @var bool|null
     */
    protected ?bool $forCompany = null;
    /**
     * The defaultProductType
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $defaultProductType = null;
    /**
     * Constructor method for GetMatchingProductTypeSupplierRequest
     * @uses GetMatchingProductTypeSupplierRequest::setSupplierId()
     * @uses GetMatchingProductTypeSupplierRequest::setItemType()
     * @uses GetMatchingProductTypeSupplierRequest::setValidFrom()
     * @uses GetMatchingProductTypeSupplierRequest::setForPerson()
     * @uses GetMatchingProductTypeSupplierRequest::setForCompany()
     * @uses GetMatchingProductTypeSupplierRequest::setDefaultProductType()
     * @param string $supplierId
     * @param string $itemType
     * @param string $validFrom
     * @param bool $forPerson
     * @param bool $forCompany
     * @param bool $defaultProductType
     */
    public function __construct(?string $supplierId = null, ?string $itemType = null, ?string $validFrom = null, ?bool $forPerson = null, ?bool $forCompany = null, ?bool $defaultProductType = false)
    {
        $this
            ->setSupplierId($supplierId)
            ->setItemType($itemType)
            ->setValidFrom($validFrom)
            ->setForPerson($forPerson)
            ->setForCompany($forCompany)
            ->setDefaultProductType($defaultProductType);
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingProductTypeSupplierRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingProductTypeSupplierRequest
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingProductTypeSupplierRequest
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get forPerson value
     * @return bool|null
     */
    public function getForPerson(): ?bool
    {
        return $this->forPerson;
    }
    /**
     * Set forPerson value
     * @param bool $forPerson
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingProductTypeSupplierRequest
     */
    public function setForPerson(?bool $forPerson = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forPerson) && !is_bool($forPerson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forPerson, true), gettype($forPerson)), __LINE__);
        }
        $this->forPerson = $forPerson;
        
        return $this;
    }
    /**
     * Get forCompany value
     * @return bool|null
     */
    public function getForCompany(): ?bool
    {
        return $this->forCompany;
    }
    /**
     * Set forCompany value
     * @param bool $forCompany
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingProductTypeSupplierRequest
     */
    public function setForCompany(?bool $forCompany = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forCompany) && !is_bool($forCompany)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forCompany, true), gettype($forCompany)), __LINE__);
        }
        $this->forCompany = $forCompany;
        
        return $this;
    }
    /**
     * Get defaultProductType value
     * @return bool|null
     */
    public function getDefaultProductType(): ?bool
    {
        return $this->defaultProductType;
    }
    /**
     * Set defaultProductType value
     * @param bool $defaultProductType
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingProductTypeSupplierRequest
     */
    public function setDefaultProductType(?bool $defaultProductType = false): self
    {
        // validation for constraint: boolean
        if (!is_null($defaultProductType) && !is_bool($defaultProductType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($defaultProductType, true), gettype($defaultProductType)), __LINE__);
        }
        $this->defaultProductType = $defaultProductType;
        
        return $this;
    }
}
