<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArticleDTO StructType
 * @subpackage Structs
 */
class ArticleDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The active
     * @var bool|null
     */
    protected ?bool $active = null;
    /**
     * The areaCodeRequired
     * @var bool|null
     */
    protected ?bool $areaCodeRequired = null;
    /**
     * The bookingIdDistinct
     * @var bool|null
     */
    protected ?bool $bookingIdDistinct = null;
    /**
     * The bookingIdRequired
     * @var bool|null
     */
    protected ?bool $bookingIdRequired = null;
    /**
     * The countryCodeRequired
     * @var bool|null
     */
    protected ?bool $countryCodeRequired = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The travelDateRequired
     * @var bool|null
     */
    protected ?bool $travelDateRequired = null;
    /**
     * The travellerRequired
     * @var bool|null
     */
    protected ?bool $travellerRequired = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The vat
     * @var float|null
     */
    protected ?float $vat = null;
    /**
     * Constructor method for ArticleDTO
     * @uses ArticleDTO::setAccountId()
     * @uses ArticleDTO::setActive()
     * @uses ArticleDTO::setAreaCodeRequired()
     * @uses ArticleDTO::setBookingIdDistinct()
     * @uses ArticleDTO::setBookingIdRequired()
     * @uses ArticleDTO::setCountryCodeRequired()
     * @uses ArticleDTO::setDescription()
     * @uses ArticleDTO::setPrice()
     * @uses ArticleDTO::setSupplierId()
     * @uses ArticleDTO::setTravelDateRequired()
     * @uses ArticleDTO::setTravellerRequired()
     * @uses ArticleDTO::setTypeId()
     * @uses ArticleDTO::setVat()
     * @param string $accountId
     * @param bool $active
     * @param bool $areaCodeRequired
     * @param bool $bookingIdDistinct
     * @param bool $bookingIdRequired
     * @param bool $countryCodeRequired
     * @param string $description
     * @param float $price
     * @param string $supplierId
     * @param bool $travelDateRequired
     * @param bool $travellerRequired
     * @param string $typeId
     * @param float $vat
     */
    public function __construct(?string $accountId = null, ?bool $active = null, ?bool $areaCodeRequired = null, ?bool $bookingIdDistinct = null, ?bool $bookingIdRequired = null, ?bool $countryCodeRequired = null, ?string $description = null, ?float $price = null, ?string $supplierId = null, ?bool $travelDateRequired = null, ?bool $travellerRequired = null, ?string $typeId = null, ?float $vat = null)
    {
        $this
            ->setAccountId($accountId)
            ->setActive($active)
            ->setAreaCodeRequired($areaCodeRequired)
            ->setBookingIdDistinct($bookingIdDistinct)
            ->setBookingIdRequired($bookingIdRequired)
            ->setCountryCodeRequired($countryCodeRequired)
            ->setDescription($description)
            ->setPrice($price)
            ->setSupplierId($supplierId)
            ->setTravelDateRequired($travelDateRequired)
            ->setTravellerRequired($travellerRequired)
            ->setTypeId($typeId)
            ->setVat($vat);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
     */
    public function setActive(?bool $active = null): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        
        return $this;
    }
    /**
     * Get areaCodeRequired value
     * @return bool|null
     */
    public function getAreaCodeRequired(): ?bool
    {
        return $this->areaCodeRequired;
    }
    /**
     * Set areaCodeRequired value
     * @param bool $areaCodeRequired
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
     */
    public function setAreaCodeRequired(?bool $areaCodeRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($areaCodeRequired) && !is_bool($areaCodeRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($areaCodeRequired, true), gettype($areaCodeRequired)), __LINE__);
        }
        $this->areaCodeRequired = $areaCodeRequired;
        
        return $this;
    }
    /**
     * Get bookingIdDistinct value
     * @return bool|null
     */
    public function getBookingIdDistinct(): ?bool
    {
        return $this->bookingIdDistinct;
    }
    /**
     * Set bookingIdDistinct value
     * @param bool $bookingIdDistinct
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
     */
    public function setBookingIdDistinct(?bool $bookingIdDistinct = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookingIdDistinct) && !is_bool($bookingIdDistinct)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookingIdDistinct, true), gettype($bookingIdDistinct)), __LINE__);
        }
        $this->bookingIdDistinct = $bookingIdDistinct;
        
        return $this;
    }
    /**
     * Get bookingIdRequired value
     * @return bool|null
     */
    public function getBookingIdRequired(): ?bool
    {
        return $this->bookingIdRequired;
    }
    /**
     * Set bookingIdRequired value
     * @param bool $bookingIdRequired
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
     */
    public function setBookingIdRequired(?bool $bookingIdRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookingIdRequired) && !is_bool($bookingIdRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookingIdRequired, true), gettype($bookingIdRequired)), __LINE__);
        }
        $this->bookingIdRequired = $bookingIdRequired;
        
        return $this;
    }
    /**
     * Get countryCodeRequired value
     * @return bool|null
     */
    public function getCountryCodeRequired(): ?bool
    {
        return $this->countryCodeRequired;
    }
    /**
     * Set countryCodeRequired value
     * @param bool $countryCodeRequired
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
     */
    public function setCountryCodeRequired(?bool $countryCodeRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($countryCodeRequired) && !is_bool($countryCodeRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($countryCodeRequired, true), gettype($countryCodeRequired)), __LINE__);
        }
        $this->countryCodeRequired = $countryCodeRequired;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
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
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
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
     * Get travelDateRequired value
     * @return bool|null
     */
    public function getTravelDateRequired(): ?bool
    {
        return $this->travelDateRequired;
    }
    /**
     * Set travelDateRequired value
     * @param bool $travelDateRequired
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
     */
    public function setTravelDateRequired(?bool $travelDateRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($travelDateRequired) && !is_bool($travelDateRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($travelDateRequired, true), gettype($travelDateRequired)), __LINE__);
        }
        $this->travelDateRequired = $travelDateRequired;
        
        return $this;
    }
    /**
     * Get travellerRequired value
     * @return bool|null
     */
    public function getTravellerRequired(): ?bool
    {
        return $this->travellerRequired;
    }
    /**
     * Set travellerRequired value
     * @param bool $travellerRequired
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
     */
    public function setTravellerRequired(?bool $travellerRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($travellerRequired) && !is_bool($travellerRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($travellerRequired, true), gettype($travellerRequired)), __LINE__);
        }
        $this->travellerRequired = $travellerRequired;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
    /**
     * Get vat value
     * @return float|null
     */
    public function getVat(): ?float
    {
        return $this->vat;
    }
    /**
     * Set vat value
     * @param float $vat
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO
     */
    public function setVat(?float $vat = null): self
    {
        // validation for constraint: float
        if (!is_null($vat) && !(is_float($vat) || is_numeric($vat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat, true), gettype($vat)), __LINE__);
        }
        $this->vat = $vat;
        
        return $this;
    }
}
