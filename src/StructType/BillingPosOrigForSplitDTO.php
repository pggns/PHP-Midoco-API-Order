<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingPosOrigForSplitDTO StructType
 * @subpackage Structs
 */
class BillingPosOrigForSplitDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The originalPrice
     * @var float|null
     */
    protected ?float $originalPrice = null;
    /**
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The singlePrice
     * @var float|null
     */
    protected ?float $singlePrice = null;
    /**
     * The vat2Amount
     * @var float|null
     */
    protected ?float $vat2Amount = null;
    /**
     * The vat2Base
     * @var float|null
     */
    protected ?float $vat2Base = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatBase
     * @var float|null
     */
    protected ?float $vatBase = null;
    /**
     * Constructor method for BillingPosOrigForSplitDTO
     * @uses BillingPosOrigForSplitDTO::setAccountId()
     * @uses BillingPosOrigForSplitDTO::setCreationTime()
     * @uses BillingPosOrigForSplitDTO::setCreationUser()
     * @uses BillingPosOrigForSplitDTO::setCurrency()
     * @uses BillingPosOrigForSplitDTO::setDescription()
     * @uses BillingPosOrigForSplitDTO::setOriginalCurrency()
     * @uses BillingPosOrigForSplitDTO::setOriginalPrice()
     * @uses BillingPosOrigForSplitDTO::setPositionId()
     * @uses BillingPosOrigForSplitDTO::setPrice()
     * @uses BillingPosOrigForSplitDTO::setSinglePrice()
     * @uses BillingPosOrigForSplitDTO::setVat2Amount()
     * @uses BillingPosOrigForSplitDTO::setVat2Base()
     * @uses BillingPosOrigForSplitDTO::setVatAmount()
     * @uses BillingPosOrigForSplitDTO::setVatBase()
     * @param string $accountId
     * @param string $creationTime
     * @param int $creationUser
     * @param string $currency
     * @param string $description
     * @param string $originalCurrency
     * @param float $originalPrice
     * @param int $positionId
     * @param float $price
     * @param float $singlePrice
     * @param float $vat2Amount
     * @param float $vat2Base
     * @param float $vatAmount
     * @param float $vatBase
     */
    public function __construct(?string $accountId = null, ?string $creationTime = null, ?int $creationUser = null, ?string $currency = null, ?string $description = null, ?string $originalCurrency = null, ?float $originalPrice = null, ?int $positionId = null, ?float $price = null, ?float $singlePrice = null, ?float $vat2Amount = null, ?float $vat2Base = null, ?float $vatAmount = null, ?float $vatBase = null)
    {
        $this
            ->setAccountId($accountId)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalPrice($originalPrice)
            ->setPositionId($positionId)
            ->setPrice($price)
            ->setSinglePrice($singlePrice)
            ->setVat2Amount($vat2Amount)
            ->setVat2Base($vat2Base)
            ->setVatAmount($vatAmount)
            ->setVatBase($vatBase);
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
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
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
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
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
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
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
    }
    /**
     * Get originalPrice value
     * @return float|null
     */
    public function getOriginalPrice(): ?float
    {
        return $this->originalPrice;
    }
    /**
     * Set originalPrice value
     * @param float $originalPrice
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
     */
    public function setOriginalPrice(?float $originalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($originalPrice) && !(is_float($originalPrice) || is_numeric($originalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalPrice, true), gettype($originalPrice)), __LINE__);
        }
        $this->originalPrice = $originalPrice;
        
        return $this;
    }
    /**
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
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
     * Get singlePrice value
     * @return float|null
     */
    public function getSinglePrice(): ?float
    {
        return $this->singlePrice;
    }
    /**
     * Set singlePrice value
     * @param float $singlePrice
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
     */
    public function setSinglePrice(?float $singlePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($singlePrice) && !(is_float($singlePrice) || is_numeric($singlePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($singlePrice, true), gettype($singlePrice)), __LINE__);
        }
        $this->singlePrice = $singlePrice;
        
        return $this;
    }
    /**
     * Get vat2Amount value
     * @return float|null
     */
    public function getVat2Amount(): ?float
    {
        return $this->vat2Amount;
    }
    /**
     * Set vat2Amount value
     * @param float $vat2Amount
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
     */
    public function setVat2Amount(?float $vat2Amount = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2Amount) && !(is_float($vat2Amount) || is_numeric($vat2Amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2Amount, true), gettype($vat2Amount)), __LINE__);
        }
        $this->vat2Amount = $vat2Amount;
        
        return $this;
    }
    /**
     * Get vat2Base value
     * @return float|null
     */
    public function getVat2Base(): ?float
    {
        return $this->vat2Base;
    }
    /**
     * Set vat2Base value
     * @param float $vat2Base
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
     */
    public function setVat2Base(?float $vat2Base = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2Base) && !(is_float($vat2Base) || is_numeric($vat2Base))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2Base, true), gettype($vat2Base)), __LINE__);
        }
        $this->vat2Base = $vat2Base;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get vatBase value
     * @return float|null
     */
    public function getVatBase(): ?float
    {
        return $this->vatBase;
    }
    /**
     * Set vatBase value
     * @param float $vatBase
     * @return \Pggns\MidocoApi\Order\StructType\BillingPosOrigForSplitDTO
     */
    public function setVatBase(?float $vatBase = null): self
    {
        // validation for constraint: float
        if (!is_null($vatBase) && !(is_float($vatBase) || is_numeric($vatBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatBase, true), gettype($vatBase)), __LINE__);
        }
        $this->vatBase = $vatBase;
        
        return $this;
    }
}
