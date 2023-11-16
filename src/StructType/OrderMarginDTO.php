<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderMarginDTO StructType
 * @subpackage Structs
 */
class OrderMarginDTO extends AbstractStructBase
{
    /**
     * The agencyCommission
     * @var float|null
     */
    protected ?float $agencyCommission = null;
    /**
     * The calculatedMarginServices
     * @var float|null
     */
    protected ?float $calculatedMarginServices = null;
    /**
     * The category
     * @var int|null
     */
    protected ?int $category = null;
    /**
     * The comments
     * @var string|null
     */
    protected ?string $comments = null;
    /**
     * The feeAmount
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The marginServices
     * @var float|null
     */
    protected ?float $marginServices = null;
    /**
     * The mediatorCommission
     * @var float|null
     */
    protected ?float $mediatorCommission = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The percentCalculatedMarginServices
     * @var float|null
     */
    protected ?float $percentCalculatedMarginServices = null;
    /**
     * The percentCommission
     * @var float|null
     */
    protected ?float $percentCommission = null;
    /**
     * The percentMarginServices
     * @var float|null
     */
    protected ?float $percentMarginServices = null;
    /**
     * The purchaseExpense
     * @var float|null
     */
    protected ?float $purchaseExpense = null;
    /**
     * The salePriceNet
     * @var float|null
     */
    protected ?float $salePriceNet = null;
    /**
     * The smallerMarginAllowed
     * @var bool|null
     */
    protected ?bool $smallerMarginAllowed = null;
    /**
     * Constructor method for OrderMarginDTO
     * @uses OrderMarginDTO::setAgencyCommission()
     * @uses OrderMarginDTO::setCalculatedMarginServices()
     * @uses OrderMarginDTO::setCategory()
     * @uses OrderMarginDTO::setComments()
     * @uses OrderMarginDTO::setFeeAmount()
     * @uses OrderMarginDTO::setMarginServices()
     * @uses OrderMarginDTO::setMediatorCommission()
     * @uses OrderMarginDTO::setModifyDate()
     * @uses OrderMarginDTO::setModifyUser()
     * @uses OrderMarginDTO::setOrderId()
     * @uses OrderMarginDTO::setPercentCalculatedMarginServices()
     * @uses OrderMarginDTO::setPercentCommission()
     * @uses OrderMarginDTO::setPercentMarginServices()
     * @uses OrderMarginDTO::setPurchaseExpense()
     * @uses OrderMarginDTO::setSalePriceNet()
     * @uses OrderMarginDTO::setSmallerMarginAllowed()
     * @param float $agencyCommission
     * @param float $calculatedMarginServices
     * @param int $category
     * @param string $comments
     * @param float $feeAmount
     * @param float $marginServices
     * @param float $mediatorCommission
     * @param string $modifyDate
     * @param int $modifyUser
     * @param int $orderId
     * @param float $percentCalculatedMarginServices
     * @param float $percentCommission
     * @param float $percentMarginServices
     * @param float $purchaseExpense
     * @param float $salePriceNet
     * @param bool $smallerMarginAllowed
     */
    public function __construct(?float $agencyCommission = null, ?float $calculatedMarginServices = null, ?int $category = null, ?string $comments = null, ?float $feeAmount = null, ?float $marginServices = null, ?float $mediatorCommission = null, ?string $modifyDate = null, ?int $modifyUser = null, ?int $orderId = null, ?float $percentCalculatedMarginServices = null, ?float $percentCommission = null, ?float $percentMarginServices = null, ?float $purchaseExpense = null, ?float $salePriceNet = null, ?bool $smallerMarginAllowed = null)
    {
        $this
            ->setAgencyCommission($agencyCommission)
            ->setCalculatedMarginServices($calculatedMarginServices)
            ->setCategory($category)
            ->setComments($comments)
            ->setFeeAmount($feeAmount)
            ->setMarginServices($marginServices)
            ->setMediatorCommission($mediatorCommission)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setOrderId($orderId)
            ->setPercentCalculatedMarginServices($percentCalculatedMarginServices)
            ->setPercentCommission($percentCommission)
            ->setPercentMarginServices($percentMarginServices)
            ->setPurchaseExpense($purchaseExpense)
            ->setSalePriceNet($salePriceNet)
            ->setSmallerMarginAllowed($smallerMarginAllowed);
    }
    /**
     * Get agencyCommission value
     * @return float|null
     */
    public function getAgencyCommission(): ?float
    {
        return $this->agencyCommission;
    }
    /**
     * Set agencyCommission value
     * @param float $agencyCommission
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setAgencyCommission(?float $agencyCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCommission) && !(is_float($agencyCommission) || is_numeric($agencyCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCommission, true), gettype($agencyCommission)), __LINE__);
        }
        $this->agencyCommission = $agencyCommission;
        
        return $this;
    }
    /**
     * Get calculatedMarginServices value
     * @return float|null
     */
    public function getCalculatedMarginServices(): ?float
    {
        return $this->calculatedMarginServices;
    }
    /**
     * Set calculatedMarginServices value
     * @param float $calculatedMarginServices
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setCalculatedMarginServices(?float $calculatedMarginServices = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMarginServices) && !(is_float($calculatedMarginServices) || is_numeric($calculatedMarginServices))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMarginServices, true), gettype($calculatedMarginServices)), __LINE__);
        }
        $this->calculatedMarginServices = $calculatedMarginServices;
        
        return $this;
    }
    /**
     * Get category value
     * @return int|null
     */
    public function getCategory(): ?int
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param int $category
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setCategory(?int $category = null): self
    {
        // validation for constraint: int
        if (!is_null($category) && !(is_int($category) || ctype_digit($category))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setComments(?string $comments = null): self
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        
        return $this;
    }
    /**
     * Get feeAmount value
     * @return float|null
     */
    public function getFeeAmount(): ?float
    {
        return $this->feeAmount;
    }
    /**
     * Set feeAmount value
     * @param float $feeAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setFeeAmount(?float $feeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($feeAmount) && !(is_float($feeAmount) || is_numeric($feeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeAmount, true), gettype($feeAmount)), __LINE__);
        }
        $this->feeAmount = $feeAmount;
        
        return $this;
    }
    /**
     * Get marginServices value
     * @return float|null
     */
    public function getMarginServices(): ?float
    {
        return $this->marginServices;
    }
    /**
     * Set marginServices value
     * @param float $marginServices
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setMarginServices(?float $marginServices = null): self
    {
        // validation for constraint: float
        if (!is_null($marginServices) && !(is_float($marginServices) || is_numeric($marginServices))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginServices, true), gettype($marginServices)), __LINE__);
        }
        $this->marginServices = $marginServices;
        
        return $this;
    }
    /**
     * Get mediatorCommission value
     * @return float|null
     */
    public function getMediatorCommission(): ?float
    {
        return $this->mediatorCommission;
    }
    /**
     * Set mediatorCommission value
     * @param float $mediatorCommission
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setMediatorCommission(?float $mediatorCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorCommission) && !(is_float($mediatorCommission) || is_numeric($mediatorCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorCommission, true), gettype($mediatorCommission)), __LINE__);
        }
        $this->mediatorCommission = $mediatorCommission;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
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
     * Get percentCalculatedMarginServices value
     * @return float|null
     */
    public function getPercentCalculatedMarginServices(): ?float
    {
        return $this->percentCalculatedMarginServices;
    }
    /**
     * Set percentCalculatedMarginServices value
     * @param float $percentCalculatedMarginServices
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setPercentCalculatedMarginServices(?float $percentCalculatedMarginServices = null): self
    {
        // validation for constraint: float
        if (!is_null($percentCalculatedMarginServices) && !(is_float($percentCalculatedMarginServices) || is_numeric($percentCalculatedMarginServices))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentCalculatedMarginServices, true), gettype($percentCalculatedMarginServices)), __LINE__);
        }
        $this->percentCalculatedMarginServices = $percentCalculatedMarginServices;
        
        return $this;
    }
    /**
     * Get percentCommission value
     * @return float|null
     */
    public function getPercentCommission(): ?float
    {
        return $this->percentCommission;
    }
    /**
     * Set percentCommission value
     * @param float $percentCommission
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setPercentCommission(?float $percentCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($percentCommission) && !(is_float($percentCommission) || is_numeric($percentCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentCommission, true), gettype($percentCommission)), __LINE__);
        }
        $this->percentCommission = $percentCommission;
        
        return $this;
    }
    /**
     * Get percentMarginServices value
     * @return float|null
     */
    public function getPercentMarginServices(): ?float
    {
        return $this->percentMarginServices;
    }
    /**
     * Set percentMarginServices value
     * @param float $percentMarginServices
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setPercentMarginServices(?float $percentMarginServices = null): self
    {
        // validation for constraint: float
        if (!is_null($percentMarginServices) && !(is_float($percentMarginServices) || is_numeric($percentMarginServices))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentMarginServices, true), gettype($percentMarginServices)), __LINE__);
        }
        $this->percentMarginServices = $percentMarginServices;
        
        return $this;
    }
    /**
     * Get purchaseExpense value
     * @return float|null
     */
    public function getPurchaseExpense(): ?float
    {
        return $this->purchaseExpense;
    }
    /**
     * Set purchaseExpense value
     * @param float $purchaseExpense
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setPurchaseExpense(?float $purchaseExpense = null): self
    {
        // validation for constraint: float
        if (!is_null($purchaseExpense) && !(is_float($purchaseExpense) || is_numeric($purchaseExpense))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($purchaseExpense, true), gettype($purchaseExpense)), __LINE__);
        }
        $this->purchaseExpense = $purchaseExpense;
        
        return $this;
    }
    /**
     * Get salePriceNet value
     * @return float|null
     */
    public function getSalePriceNet(): ?float
    {
        return $this->salePriceNet;
    }
    /**
     * Set salePriceNet value
     * @param float $salePriceNet
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setSalePriceNet(?float $salePriceNet = null): self
    {
        // validation for constraint: float
        if (!is_null($salePriceNet) && !(is_float($salePriceNet) || is_numeric($salePriceNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePriceNet, true), gettype($salePriceNet)), __LINE__);
        }
        $this->salePriceNet = $salePriceNet;
        
        return $this;
    }
    /**
     * Get smallerMarginAllowed value
     * @return bool|null
     */
    public function getSmallerMarginAllowed(): ?bool
    {
        return $this->smallerMarginAllowed;
    }
    /**
     * Set smallerMarginAllowed value
     * @param bool $smallerMarginAllowed
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO
     */
    public function setSmallerMarginAllowed(?bool $smallerMarginAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($smallerMarginAllowed) && !is_bool($smallerMarginAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($smallerMarginAllowed, true), gettype($smallerMarginAllowed)), __LINE__);
        }
        $this->smallerMarginAllowed = $smallerMarginAllowed;
        
        return $this;
    }
}
