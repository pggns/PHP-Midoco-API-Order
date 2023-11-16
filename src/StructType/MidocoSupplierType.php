<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierType StructType
 * @subpackage Structs
 */
class MidocoSupplierType extends SupplierDTO
{
    /**
     * The isInheritance
     * @var bool|null
     */
    protected ?bool $isInheritance = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * The inkassoModeDescription
     * @var string|null
     */
    protected ?string $inkassoModeDescription = null;
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The defaultProductType
     * @var string|null
     */
    protected ?string $defaultProductType = null;
    /**
     * The isHistorical
     * @var bool|null
     */
    protected ?bool $isHistorical = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The accountRevenueOwnService
     * @var string|null
     */
    protected ?string $accountRevenueOwnService = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * Constructor method for MidocoSupplierType
     * @uses MidocoSupplierType::setIsInheritance()
     * @uses MidocoSupplierType::setOrgunit()
     * @uses MidocoSupplierType::setInkassoModeDescription()
     * @uses MidocoSupplierType::setLanguage()
     * @uses MidocoSupplierType::setDefaultProductType()
     * @uses MidocoSupplierType::setIsHistorical()
     * @uses MidocoSupplierType::setCreationUser()
     * @uses MidocoSupplierType::setCreationDate()
     * @uses MidocoSupplierType::setAccountRevenueOwnService()
     * @uses MidocoSupplierType::setCity()
     * @param bool $isInheritance
     * @param string $orgunit
     * @param string $inkassoModeDescription
     * @param string $language
     * @param string $defaultProductType
     * @param bool $isHistorical
     * @param int $creationUser
     * @param string $creationDate
     * @param string $accountRevenueOwnService
     * @param string $city
     */
    public function __construct(?bool $isInheritance = null, ?string $orgunit = null, ?string $inkassoModeDescription = null, ?string $language = null, ?string $defaultProductType = null, ?bool $isHistorical = null, ?int $creationUser = null, ?string $creationDate = null, ?string $accountRevenueOwnService = null, ?string $city = '')
    {
        $this
            ->setIsInheritance($isInheritance)
            ->setOrgunit($orgunit)
            ->setInkassoModeDescription($inkassoModeDescription)
            ->setLanguage($language)
            ->setDefaultProductType($defaultProductType)
            ->setIsHistorical($isHistorical)
            ->setCreationUser($creationUser)
            ->setCreationDate($creationDate)
            ->setAccountRevenueOwnService($accountRevenueOwnService)
            ->setCity($city);
    }
    /**
     * Get isInheritance value
     * @return bool|null
     */
    public function getIsInheritance(): ?bool
    {
        return $this->isInheritance;
    }
    /**
     * Set isInheritance value
     * @param bool $isInheritance
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType
     */
    public function setIsInheritance(?bool $isInheritance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInheritance) && !is_bool($isInheritance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInheritance, true), gettype($isInheritance)), __LINE__);
        }
        $this->isInheritance = $isInheritance;
        
        return $this;
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
    /**
     * Get inkassoModeDescription value
     * @return string|null
     */
    public function getInkassoModeDescription(): ?string
    {
        return $this->inkassoModeDescription;
    }
    /**
     * Set inkassoModeDescription value
     * @param string $inkassoModeDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType
     */
    public function setInkassoModeDescription(?string $inkassoModeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($inkassoModeDescription) && !is_string($inkassoModeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkassoModeDescription, true), gettype($inkassoModeDescription)), __LINE__);
        }
        $this->inkassoModeDescription = $inkassoModeDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType
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
     * Get defaultProductType value
     * @return string|null
     */
    public function getDefaultProductType(): ?string
    {
        return $this->defaultProductType;
    }
    /**
     * Set defaultProductType value
     * @param string $defaultProductType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType
     */
    public function setDefaultProductType(?string $defaultProductType = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultProductType) && !is_string($defaultProductType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultProductType, true), gettype($defaultProductType)), __LINE__);
        }
        $this->defaultProductType = $defaultProductType;
        
        return $this;
    }
    /**
     * Get isHistorical value
     * @return bool|null
     */
    public function getIsHistorical(): ?bool
    {
        return $this->isHistorical;
    }
    /**
     * Set isHistorical value
     * @param bool $isHistorical
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType
     */
    public function setIsHistorical(?bool $isHistorical = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isHistorical) && !is_bool($isHistorical)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isHistorical, true), gettype($isHistorical)), __LINE__);
        }
        $this->isHistorical = $isHistorical;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get accountRevenueOwnService value
     * @return string|null
     */
    public function getAccountRevenueOwnService(): ?string
    {
        return $this->accountRevenueOwnService;
    }
    /**
     * Set accountRevenueOwnService value
     * @param string $accountRevenueOwnService
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType
     */
    public function setAccountRevenueOwnService(?string $accountRevenueOwnService = null): self
    {
        // validation for constraint: string
        if (!is_null($accountRevenueOwnService) && !is_string($accountRevenueOwnService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountRevenueOwnService, true), gettype($accountRevenueOwnService)), __LINE__);
        }
        $this->accountRevenueOwnService = $accountRevenueOwnService;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType
     */
    public function setCity(?string $city = ''): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
}
