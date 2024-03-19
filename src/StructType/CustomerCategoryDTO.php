<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerCategoryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomerCategoryDTO extends AbstractStructBase
{
    /**
     * The customerCategory
     * @var string|null
     */
    protected ?string $customerCategory = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The isAdressLocked
     * @var bool|null
     */
    protected ?bool $isAdressLocked = null;
    /**
     * The isChangeable
     * @var bool|null
     */
    protected ?bool $isChangeable = null;
    /**
     * The isContactLocked
     * @var bool|null
     */
    protected ?bool $isContactLocked = null;
    /**
     * The isMainInfoLocked
     * @var bool|null
     */
    protected ?bool $isMainInfoLocked = null;
    /**
     * The isNoMandatoryFields
     * @var bool|null
     */
    protected ?bool $isNoMandatoryFields = null;
    /**
     * The isPaymentLocked
     * @var bool|null
     */
    protected ?bool $isPaymentLocked = null;
    /**
     * Constructor method for CustomerCategoryDTO
     * @uses CustomerCategoryDTO::setCustomerCategory()
     * @uses CustomerCategoryDTO::setDescription()
     * @uses CustomerCategoryDTO::setIsAdressLocked()
     * @uses CustomerCategoryDTO::setIsChangeable()
     * @uses CustomerCategoryDTO::setIsContactLocked()
     * @uses CustomerCategoryDTO::setIsMainInfoLocked()
     * @uses CustomerCategoryDTO::setIsNoMandatoryFields()
     * @uses CustomerCategoryDTO::setIsPaymentLocked()
     * @param string $customerCategory
     * @param string $description
     * @param bool $isAdressLocked
     * @param bool $isChangeable
     * @param bool $isContactLocked
     * @param bool $isMainInfoLocked
     * @param bool $isNoMandatoryFields
     * @param bool $isPaymentLocked
     */
    public function __construct(?string $customerCategory = null, ?string $description = null, ?bool $isAdressLocked = null, ?bool $isChangeable = null, ?bool $isContactLocked = null, ?bool $isMainInfoLocked = null, ?bool $isNoMandatoryFields = null, ?bool $isPaymentLocked = null)
    {
        $this
            ->setCustomerCategory($customerCategory)
            ->setDescription($description)
            ->setIsAdressLocked($isAdressLocked)
            ->setIsChangeable($isChangeable)
            ->setIsContactLocked($isContactLocked)
            ->setIsMainInfoLocked($isMainInfoLocked)
            ->setIsNoMandatoryFields($isNoMandatoryFields)
            ->setIsPaymentLocked($isPaymentLocked);
    }
    /**
     * Get customerCategory value
     * @return string|null
     */
    public function getCustomerCategory(): ?string
    {
        return $this->customerCategory;
    }
    /**
     * Set customerCategory value
     * @param string $customerCategory
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCategoryDTO
     */
    public function setCustomerCategory(?string $customerCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCategory) && !is_string($customerCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCategory, true), gettype($customerCategory)), __LINE__);
        }
        $this->customerCategory = $customerCategory;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCategoryDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get isAdressLocked value
     * @return bool|null
     */
    public function getIsAdressLocked(): ?bool
    {
        return $this->isAdressLocked;
    }
    /**
     * Set isAdressLocked value
     * @param bool $isAdressLocked
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCategoryDTO
     */
    public function setIsAdressLocked(?bool $isAdressLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAdressLocked) && !is_bool($isAdressLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAdressLocked, true), gettype($isAdressLocked)), __LINE__);
        }
        $this->isAdressLocked = $isAdressLocked;
        
        return $this;
    }
    /**
     * Get isChangeable value
     * @return bool|null
     */
    public function getIsChangeable(): ?bool
    {
        return $this->isChangeable;
    }
    /**
     * Set isChangeable value
     * @param bool $isChangeable
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCategoryDTO
     */
    public function setIsChangeable(?bool $isChangeable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isChangeable) && !is_bool($isChangeable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChangeable, true), gettype($isChangeable)), __LINE__);
        }
        $this->isChangeable = $isChangeable;
        
        return $this;
    }
    /**
     * Get isContactLocked value
     * @return bool|null
     */
    public function getIsContactLocked(): ?bool
    {
        return $this->isContactLocked;
    }
    /**
     * Set isContactLocked value
     * @param bool $isContactLocked
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCategoryDTO
     */
    public function setIsContactLocked(?bool $isContactLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isContactLocked) && !is_bool($isContactLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isContactLocked, true), gettype($isContactLocked)), __LINE__);
        }
        $this->isContactLocked = $isContactLocked;
        
        return $this;
    }
    /**
     * Get isMainInfoLocked value
     * @return bool|null
     */
    public function getIsMainInfoLocked(): ?bool
    {
        return $this->isMainInfoLocked;
    }
    /**
     * Set isMainInfoLocked value
     * @param bool $isMainInfoLocked
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCategoryDTO
     */
    public function setIsMainInfoLocked(?bool $isMainInfoLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMainInfoLocked) && !is_bool($isMainInfoLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMainInfoLocked, true), gettype($isMainInfoLocked)), __LINE__);
        }
        $this->isMainInfoLocked = $isMainInfoLocked;
        
        return $this;
    }
    /**
     * Get isNoMandatoryFields value
     * @return bool|null
     */
    public function getIsNoMandatoryFields(): ?bool
    {
        return $this->isNoMandatoryFields;
    }
    /**
     * Set isNoMandatoryFields value
     * @param bool $isNoMandatoryFields
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCategoryDTO
     */
    public function setIsNoMandatoryFields(?bool $isNoMandatoryFields = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNoMandatoryFields) && !is_bool($isNoMandatoryFields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNoMandatoryFields, true), gettype($isNoMandatoryFields)), __LINE__);
        }
        $this->isNoMandatoryFields = $isNoMandatoryFields;
        
        return $this;
    }
    /**
     * Get isPaymentLocked value
     * @return bool|null
     */
    public function getIsPaymentLocked(): ?bool
    {
        return $this->isPaymentLocked;
    }
    /**
     * Set isPaymentLocked value
     * @param bool $isPaymentLocked
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCategoryDTO
     */
    public function setIsPaymentLocked(?bool $isPaymentLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPaymentLocked) && !is_bool($isPaymentLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPaymentLocked, true), gettype($isPaymentLocked)), __LINE__);
        }
        $this->isPaymentLocked = $isPaymentLocked;
        
        return $this;
    }
}
