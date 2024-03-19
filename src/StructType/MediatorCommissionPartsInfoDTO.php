<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorCommissionPartsInfoDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MediatorCommissionPartsInfoDTO extends AbstractStructBase
{
    /**
     * The bookingPrice
     * @var float|null
     */
    protected ?float $bookingPrice = null;
    /**
     * The fromPrice
     * @var float|null
     */
    protected ?float $fromPrice = null;
    /**
     * The part
     * @var float|null
     */
    protected ?float $part = null;
    /**
     * The isPercent
     * @var bool|null
     */
    protected ?bool $isPercent = null;
    /**
     * The isUsedAlsoForLevel
     * @var bool|null
     */
    protected ?bool $isUsedAlsoForLevel = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The useMediatorLevelPercent
     * @var bool|null
     */
    protected ?bool $useMediatorLevelPercent = null;
    /**
     * Constructor method for MediatorCommissionPartsInfoDTO
     * @uses MediatorCommissionPartsInfoDTO::setBookingPrice()
     * @uses MediatorCommissionPartsInfoDTO::setFromPrice()
     * @uses MediatorCommissionPartsInfoDTO::setPart()
     * @uses MediatorCommissionPartsInfoDTO::setIsPercent()
     * @uses MediatorCommissionPartsInfoDTO::setIsUsedAlsoForLevel()
     * @uses MediatorCommissionPartsInfoDTO::setCommissionAmount()
     * @uses MediatorCommissionPartsInfoDTO::setUseMediatorLevelPercent()
     * @param float $bookingPrice
     * @param float $fromPrice
     * @param float $part
     * @param bool $isPercent
     * @param bool $isUsedAlsoForLevel
     * @param float $commissionAmount
     * @param bool $useMediatorLevelPercent
     */
    public function __construct(?float $bookingPrice = null, ?float $fromPrice = null, ?float $part = null, ?bool $isPercent = null, ?bool $isUsedAlsoForLevel = null, ?float $commissionAmount = null, ?bool $useMediatorLevelPercent = null)
    {
        $this
            ->setBookingPrice($bookingPrice)
            ->setFromPrice($fromPrice)
            ->setPart($part)
            ->setIsPercent($isPercent)
            ->setIsUsedAlsoForLevel($isUsedAlsoForLevel)
            ->setCommissionAmount($commissionAmount)
            ->setUseMediatorLevelPercent($useMediatorLevelPercent);
    }
    /**
     * Get bookingPrice value
     * @return float|null
     */
    public function getBookingPrice(): ?float
    {
        return $this->bookingPrice;
    }
    /**
     * Set bookingPrice value
     * @param float $bookingPrice
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommissionPartsInfoDTO
     */
    public function setBookingPrice(?float $bookingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($bookingPrice) && !(is_float($bookingPrice) || is_numeric($bookingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookingPrice, true), gettype($bookingPrice)), __LINE__);
        }
        $this->bookingPrice = $bookingPrice;
        
        return $this;
    }
    /**
     * Get fromPrice value
     * @return float|null
     */
    public function getFromPrice(): ?float
    {
        return $this->fromPrice;
    }
    /**
     * Set fromPrice value
     * @param float $fromPrice
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommissionPartsInfoDTO
     */
    public function setFromPrice(?float $fromPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($fromPrice) && !(is_float($fromPrice) || is_numeric($fromPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fromPrice, true), gettype($fromPrice)), __LINE__);
        }
        $this->fromPrice = $fromPrice;
        
        return $this;
    }
    /**
     * Get part value
     * @return float|null
     */
    public function getPart(): ?float
    {
        return $this->part;
    }
    /**
     * Set part value
     * @param float $part
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommissionPartsInfoDTO
     */
    public function setPart(?float $part = null): self
    {
        // validation for constraint: float
        if (!is_null($part) && !(is_float($part) || is_numeric($part))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($part, true), gettype($part)), __LINE__);
        }
        $this->part = $part;
        
        return $this;
    }
    /**
     * Get isPercent value
     * @return bool|null
     */
    public function getIsPercent(): ?bool
    {
        return $this->isPercent;
    }
    /**
     * Set isPercent value
     * @param bool $isPercent
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommissionPartsInfoDTO
     */
    public function setIsPercent(?bool $isPercent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPercent) && !is_bool($isPercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPercent, true), gettype($isPercent)), __LINE__);
        }
        $this->isPercent = $isPercent;
        
        return $this;
    }
    /**
     * Get isUsedAlsoForLevel value
     * @return bool|null
     */
    public function getIsUsedAlsoForLevel(): ?bool
    {
        return $this->isUsedAlsoForLevel;
    }
    /**
     * Set isUsedAlsoForLevel value
     * @param bool $isUsedAlsoForLevel
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommissionPartsInfoDTO
     */
    public function setIsUsedAlsoForLevel(?bool $isUsedAlsoForLevel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUsedAlsoForLevel) && !is_bool($isUsedAlsoForLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUsedAlsoForLevel, true), gettype($isUsedAlsoForLevel)), __LINE__);
        }
        $this->isUsedAlsoForLevel = $isUsedAlsoForLevel;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommissionPartsInfoDTO
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
     * Get useMediatorLevelPercent value
     * @return bool|null
     */
    public function getUseMediatorLevelPercent(): ?bool
    {
        return $this->useMediatorLevelPercent;
    }
    /**
     * Set useMediatorLevelPercent value
     * @param bool $useMediatorLevelPercent
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommissionPartsInfoDTO
     */
    public function setUseMediatorLevelPercent(?bool $useMediatorLevelPercent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useMediatorLevelPercent) && !is_bool($useMediatorLevelPercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useMediatorLevelPercent, true), gettype($useMediatorLevelPercent)), __LINE__);
        }
        $this->useMediatorLevelPercent = $useMediatorLevelPercent;
        
        return $this;
    }
}
