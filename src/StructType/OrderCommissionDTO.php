<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderCommissionDTO StructType
 * @subpackage Structs
 */
class OrderCommissionDTO extends AbstractStructBase
{
    /**
     * The agencyCurrency
     * @var string|null
     */
    protected ?string $agencyCurrency = null;
    /**
     * The basePrice
     * @var float|null
     */
    protected ?float $basePrice = null;
    /**
     * The basePriceAgencyCurrency
     * @var float|null
     */
    protected ?float $basePriceAgencyCurrency = null;
    /**
     * The commissionAgencyCurrency
     * @var float|null
     */
    protected ?float $commissionAgencyCurrency = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The commissionBase
     * @var float|null
     */
    protected ?float $commissionBase = null;
    /**
     * The commissionBaseAmount
     * @var float|null
     */
    protected ?float $commissionBaseAmount = null;
    /**
     * The commissionInsuranceAgencyCurrency
     * @var float|null
     */
    protected ?float $commissionInsuranceAgencyCurrency = null;
    /**
     * The commissionInsuranceAmount
     * @var float|null
     */
    protected ?float $commissionInsuranceAmount = null;
    /**
     * The commissionVatAmount
     * @var float|null
     */
    protected ?float $commissionVatAmount = null;
    /**
     * The commissionVatAmountAgencyCurrency
     * @var float|null
     */
    protected ?float $commissionVatAmountAgencyCurrency = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The includedVatAmount
     * @var float|null
     */
    protected ?float $includedVatAmount = null;
    /**
     * The isAgencyFee
     * @var bool|null
     */
    protected ?bool $isAgencyFee = null;
    /**
     * The isManual
     * @var bool|null
     */
    protected ?bool $isManual = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for OrderCommissionDTO
     * @uses OrderCommissionDTO::setAgencyCurrency()
     * @uses OrderCommissionDTO::setBasePrice()
     * @uses OrderCommissionDTO::setBasePriceAgencyCurrency()
     * @uses OrderCommissionDTO::setCommissionAgencyCurrency()
     * @uses OrderCommissionDTO::setCommissionAmount()
     * @uses OrderCommissionDTO::setCommissionBase()
     * @uses OrderCommissionDTO::setCommissionBaseAmount()
     * @uses OrderCommissionDTO::setCommissionInsuranceAgencyCurrency()
     * @uses OrderCommissionDTO::setCommissionInsuranceAmount()
     * @uses OrderCommissionDTO::setCommissionVatAmount()
     * @uses OrderCommissionDTO::setCommissionVatAmountAgencyCurrency()
     * @uses OrderCommissionDTO::setDescription()
     * @uses OrderCommissionDTO::setId()
     * @uses OrderCommissionDTO::setIncludedVatAmount()
     * @uses OrderCommissionDTO::setIsAgencyFee()
     * @uses OrderCommissionDTO::setIsManual()
     * @uses OrderCommissionDTO::setItemId()
     * @uses OrderCommissionDTO::setOrderId()
     * @uses OrderCommissionDTO::setVatPercent()
     * @param string $agencyCurrency
     * @param float $basePrice
     * @param float $basePriceAgencyCurrency
     * @param float $commissionAgencyCurrency
     * @param float $commissionAmount
     * @param float $commissionBase
     * @param float $commissionBaseAmount
     * @param float $commissionInsuranceAgencyCurrency
     * @param float $commissionInsuranceAmount
     * @param float $commissionVatAmount
     * @param float $commissionVatAmountAgencyCurrency
     * @param string $description
     * @param int $id
     * @param float $includedVatAmount
     * @param bool $isAgencyFee
     * @param bool $isManual
     * @param int $itemId
     * @param int $orderId
     * @param float $vatPercent
     */
    public function __construct(?string $agencyCurrency = null, ?float $basePrice = null, ?float $basePriceAgencyCurrency = null, ?float $commissionAgencyCurrency = null, ?float $commissionAmount = null, ?float $commissionBase = null, ?float $commissionBaseAmount = null, ?float $commissionInsuranceAgencyCurrency = null, ?float $commissionInsuranceAmount = null, ?float $commissionVatAmount = null, ?float $commissionVatAmountAgencyCurrency = null, ?string $description = null, ?int $id = null, ?float $includedVatAmount = null, ?bool $isAgencyFee = null, ?bool $isManual = null, ?int $itemId = null, ?int $orderId = null, ?float $vatPercent = null)
    {
        $this
            ->setAgencyCurrency($agencyCurrency)
            ->setBasePrice($basePrice)
            ->setBasePriceAgencyCurrency($basePriceAgencyCurrency)
            ->setCommissionAgencyCurrency($commissionAgencyCurrency)
            ->setCommissionAmount($commissionAmount)
            ->setCommissionBase($commissionBase)
            ->setCommissionBaseAmount($commissionBaseAmount)
            ->setCommissionInsuranceAgencyCurrency($commissionInsuranceAgencyCurrency)
            ->setCommissionInsuranceAmount($commissionInsuranceAmount)
            ->setCommissionVatAmount($commissionVatAmount)
            ->setCommissionVatAmountAgencyCurrency($commissionVatAmountAgencyCurrency)
            ->setDescription($description)
            ->setId($id)
            ->setIncludedVatAmount($includedVatAmount)
            ->setIsAgencyFee($isAgencyFee)
            ->setIsManual($isManual)
            ->setItemId($itemId)
            ->setOrderId($orderId)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get agencyCurrency value
     * @return string|null
     */
    public function getAgencyCurrency(): ?string
    {
        return $this->agencyCurrency;
    }
    /**
     * Set agencyCurrency value
     * @param string $agencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setAgencyCurrency(?string $agencyCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyCurrency) && !is_string($agencyCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyCurrency, true), gettype($agencyCurrency)), __LINE__);
        }
        $this->agencyCurrency = $agencyCurrency;
        
        return $this;
    }
    /**
     * Get basePrice value
     * @return float|null
     */
    public function getBasePrice(): ?float
    {
        return $this->basePrice;
    }
    /**
     * Set basePrice value
     * @param float $basePrice
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setBasePrice(?float $basePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($basePrice) && !(is_float($basePrice) || is_numeric($basePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($basePrice, true), gettype($basePrice)), __LINE__);
        }
        $this->basePrice = $basePrice;
        
        return $this;
    }
    /**
     * Get basePriceAgencyCurrency value
     * @return float|null
     */
    public function getBasePriceAgencyCurrency(): ?float
    {
        return $this->basePriceAgencyCurrency;
    }
    /**
     * Set basePriceAgencyCurrency value
     * @param float $basePriceAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setBasePriceAgencyCurrency(?float $basePriceAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($basePriceAgencyCurrency) && !(is_float($basePriceAgencyCurrency) || is_numeric($basePriceAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($basePriceAgencyCurrency, true), gettype($basePriceAgencyCurrency)), __LINE__);
        }
        $this->basePriceAgencyCurrency = $basePriceAgencyCurrency;
        
        return $this;
    }
    /**
     * Get commissionAgencyCurrency value
     * @return float|null
     */
    public function getCommissionAgencyCurrency(): ?float
    {
        return $this->commissionAgencyCurrency;
    }
    /**
     * Set commissionAgencyCurrency value
     * @param float $commissionAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setCommissionAgencyCurrency(?float $commissionAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAgencyCurrency) && !(is_float($commissionAgencyCurrency) || is_numeric($commissionAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAgencyCurrency, true), gettype($commissionAgencyCurrency)), __LINE__);
        }
        $this->commissionAgencyCurrency = $commissionAgencyCurrency;
        
        return $this;
    }
    /**
     * Get commissionAmount value
     * @return float|null
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }
    /**
     * Set commissionAmount value
     * @param float $commissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setCommissionAmount(?float $commissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAmount) && !(is_float($commissionAmount) || is_numeric($commissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
        $this->commissionAmount = $commissionAmount;
        
        return $this;
    }
    /**
     * Get commissionBase value
     * @return float|null
     */
    public function getCommissionBase(): ?float
    {
        return $this->commissionBase;
    }
    /**
     * Set commissionBase value
     * @param float $commissionBase
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setCommissionBase(?float $commissionBase = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionBase) && !(is_float($commissionBase) || is_numeric($commissionBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionBase, true), gettype($commissionBase)), __LINE__);
        }
        $this->commissionBase = $commissionBase;
        
        return $this;
    }
    /**
     * Get commissionBaseAmount value
     * @return float|null
     */
    public function getCommissionBaseAmount(): ?float
    {
        return $this->commissionBaseAmount;
    }
    /**
     * Set commissionBaseAmount value
     * @param float $commissionBaseAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setCommissionBaseAmount(?float $commissionBaseAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionBaseAmount) && !(is_float($commissionBaseAmount) || is_numeric($commissionBaseAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionBaseAmount, true), gettype($commissionBaseAmount)), __LINE__);
        }
        $this->commissionBaseAmount = $commissionBaseAmount;
        
        return $this;
    }
    /**
     * Get commissionInsuranceAgencyCurrency value
     * @return float|null
     */
    public function getCommissionInsuranceAgencyCurrency(): ?float
    {
        return $this->commissionInsuranceAgencyCurrency;
    }
    /**
     * Set commissionInsuranceAgencyCurrency value
     * @param float $commissionInsuranceAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setCommissionInsuranceAgencyCurrency(?float $commissionInsuranceAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionInsuranceAgencyCurrency) && !(is_float($commissionInsuranceAgencyCurrency) || is_numeric($commissionInsuranceAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionInsuranceAgencyCurrency, true), gettype($commissionInsuranceAgencyCurrency)), __LINE__);
        }
        $this->commissionInsuranceAgencyCurrency = $commissionInsuranceAgencyCurrency;
        
        return $this;
    }
    /**
     * Get commissionInsuranceAmount value
     * @return float|null
     */
    public function getCommissionInsuranceAmount(): ?float
    {
        return $this->commissionInsuranceAmount;
    }
    /**
     * Set commissionInsuranceAmount value
     * @param float $commissionInsuranceAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setCommissionInsuranceAmount(?float $commissionInsuranceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionInsuranceAmount) && !(is_float($commissionInsuranceAmount) || is_numeric($commissionInsuranceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionInsuranceAmount, true), gettype($commissionInsuranceAmount)), __LINE__);
        }
        $this->commissionInsuranceAmount = $commissionInsuranceAmount;
        
        return $this;
    }
    /**
     * Get commissionVatAmount value
     * @return float|null
     */
    public function getCommissionVatAmount(): ?float
    {
        return $this->commissionVatAmount;
    }
    /**
     * Set commissionVatAmount value
     * @param float $commissionVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setCommissionVatAmount(?float $commissionVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionVatAmount) && !(is_float($commissionVatAmount) || is_numeric($commissionVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionVatAmount, true), gettype($commissionVatAmount)), __LINE__);
        }
        $this->commissionVatAmount = $commissionVatAmount;
        
        return $this;
    }
    /**
     * Get commissionVatAmountAgencyCurrency value
     * @return float|null
     */
    public function getCommissionVatAmountAgencyCurrency(): ?float
    {
        return $this->commissionVatAmountAgencyCurrency;
    }
    /**
     * Set commissionVatAmountAgencyCurrency value
     * @param float $commissionVatAmountAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setCommissionVatAmountAgencyCurrency(?float $commissionVatAmountAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionVatAmountAgencyCurrency) && !(is_float($commissionVatAmountAgencyCurrency) || is_numeric($commissionVatAmountAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionVatAmountAgencyCurrency, true), gettype($commissionVatAmountAgencyCurrency)), __LINE__);
        }
        $this->commissionVatAmountAgencyCurrency = $commissionVatAmountAgencyCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
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
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get includedVatAmount value
     * @return float|null
     */
    public function getIncludedVatAmount(): ?float
    {
        return $this->includedVatAmount;
    }
    /**
     * Set includedVatAmount value
     * @param float $includedVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setIncludedVatAmount(?float $includedVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($includedVatAmount) && !(is_float($includedVatAmount) || is_numeric($includedVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($includedVatAmount, true), gettype($includedVatAmount)), __LINE__);
        }
        $this->includedVatAmount = $includedVatAmount;
        
        return $this;
    }
    /**
     * Get isAgencyFee value
     * @return bool|null
     */
    public function getIsAgencyFee(): ?bool
    {
        return $this->isAgencyFee;
    }
    /**
     * Set isAgencyFee value
     * @param bool $isAgencyFee
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setIsAgencyFee(?bool $isAgencyFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAgencyFee) && !is_bool($isAgencyFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAgencyFee, true), gettype($isAgencyFee)), __LINE__);
        }
        $this->isAgencyFee = $isAgencyFee;
        
        return $this;
    }
    /**
     * Get isManual value
     * @return bool|null
     */
    public function getIsManual(): ?bool
    {
        return $this->isManual;
    }
    /**
     * Set isManual value
     * @param bool $isManual
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setIsManual(?bool $isManual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManual) && !is_bool($isManual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManual, true), gettype($isManual)), __LINE__);
        }
        $this->isManual = $isManual;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\OrderCommissionDTO
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
}
