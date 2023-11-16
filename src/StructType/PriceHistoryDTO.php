<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceHistoryDTO StructType
 * @subpackage Structs
 */
class PriceHistoryDTO extends AbstractStructBase
{
    /**
     * The isImport
     * @var bool|null
     */
    protected ?bool $isImport = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The modifyTime
     * @var string|null
     */
    protected ?string $modifyTime = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The newCalculatedRevenue
     * @var float|null
     */
    protected ?float $newCalculatedRevenue = null;
    /**
     * The newFarePrice
     * @var float|null
     */
    protected ?float $newFarePrice = null;
    /**
     * The newFeeAmount
     * @var float|null
     */
    protected ?float $newFeeAmount = null;
    /**
     * The newGrantedRevenue
     * @var float|null
     */
    protected ?float $newGrantedRevenue = null;
    /**
     * The newPrice
     * @var float|null
     */
    protected ?float $newPrice = null;
    /**
     * The newTotalTax
     * @var float|null
     */
    protected ?float $newTotalTax = null;
    /**
     * The oldCalculatedRevenue
     * @var float|null
     */
    protected ?float $oldCalculatedRevenue = null;
    /**
     * The oldFarePrice
     * @var float|null
     */
    protected ?float $oldFarePrice = null;
    /**
     * The oldFeeAmount
     * @var float|null
     */
    protected ?float $oldFeeAmount = null;
    /**
     * The oldGrantedRevenue
     * @var float|null
     */
    protected ?float $oldGrantedRevenue = null;
    /**
     * The oldPrice
     * @var float|null
     */
    protected ?float $oldPrice = null;
    /**
     * The oldTotalTax
     * @var float|null
     */
    protected ?float $oldTotalTax = null;
    /**
     * Constructor method for PriceHistoryDTO
     * @uses PriceHistoryDTO::setIsImport()
     * @uses PriceHistoryDTO::setIsStorno()
     * @uses PriceHistoryDTO::setItemId()
     * @uses PriceHistoryDTO::setModifyTime()
     * @uses PriceHistoryDTO::setModifyUser()
     * @uses PriceHistoryDTO::setNewCalculatedRevenue()
     * @uses PriceHistoryDTO::setNewFarePrice()
     * @uses PriceHistoryDTO::setNewFeeAmount()
     * @uses PriceHistoryDTO::setNewGrantedRevenue()
     * @uses PriceHistoryDTO::setNewPrice()
     * @uses PriceHistoryDTO::setNewTotalTax()
     * @uses PriceHistoryDTO::setOldCalculatedRevenue()
     * @uses PriceHistoryDTO::setOldFarePrice()
     * @uses PriceHistoryDTO::setOldFeeAmount()
     * @uses PriceHistoryDTO::setOldGrantedRevenue()
     * @uses PriceHistoryDTO::setOldPrice()
     * @uses PriceHistoryDTO::setOldTotalTax()
     * @param bool $isImport
     * @param bool $isStorno
     * @param int $itemId
     * @param string $modifyTime
     * @param int $modifyUser
     * @param float $newCalculatedRevenue
     * @param float $newFarePrice
     * @param float $newFeeAmount
     * @param float $newGrantedRevenue
     * @param float $newPrice
     * @param float $newTotalTax
     * @param float $oldCalculatedRevenue
     * @param float $oldFarePrice
     * @param float $oldFeeAmount
     * @param float $oldGrantedRevenue
     * @param float $oldPrice
     * @param float $oldTotalTax
     */
    public function __construct(?bool $isImport = null, ?bool $isStorno = null, ?int $itemId = null, ?string $modifyTime = null, ?int $modifyUser = null, ?float $newCalculatedRevenue = null, ?float $newFarePrice = null, ?float $newFeeAmount = null, ?float $newGrantedRevenue = null, ?float $newPrice = null, ?float $newTotalTax = null, ?float $oldCalculatedRevenue = null, ?float $oldFarePrice = null, ?float $oldFeeAmount = null, ?float $oldGrantedRevenue = null, ?float $oldPrice = null, ?float $oldTotalTax = null)
    {
        $this
            ->setIsImport($isImport)
            ->setIsStorno($isStorno)
            ->setItemId($itemId)
            ->setModifyTime($modifyTime)
            ->setModifyUser($modifyUser)
            ->setNewCalculatedRevenue($newCalculatedRevenue)
            ->setNewFarePrice($newFarePrice)
            ->setNewFeeAmount($newFeeAmount)
            ->setNewGrantedRevenue($newGrantedRevenue)
            ->setNewPrice($newPrice)
            ->setNewTotalTax($newTotalTax)
            ->setOldCalculatedRevenue($oldCalculatedRevenue)
            ->setOldFarePrice($oldFarePrice)
            ->setOldFeeAmount($oldFeeAmount)
            ->setOldGrantedRevenue($oldGrantedRevenue)
            ->setOldPrice($oldPrice)
            ->setOldTotalTax($oldTotalTax);
    }
    /**
     * Get isImport value
     * @return bool|null
     */
    public function getIsImport(): ?bool
    {
        return $this->isImport;
    }
    /**
     * Set isImport value
     * @param bool $isImport
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setIsImport(?bool $isImport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImport) && !is_bool($isImport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImport, true), gettype($isImport)), __LINE__);
        }
        $this->isImport = $isImport;
        
        return $this;
    }
    /**
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
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
     * Get modifyTime value
     * @return string|null
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }
    /**
     * Set modifyTime value
     * @param string $modifyTime
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setModifyTime(?string $modifyTime = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTime) && !is_string($modifyTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTime, true), gettype($modifyTime)), __LINE__);
        }
        $this->modifyTime = $modifyTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
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
     * Get newCalculatedRevenue value
     * @return float|null
     */
    public function getNewCalculatedRevenue(): ?float
    {
        return $this->newCalculatedRevenue;
    }
    /**
     * Set newCalculatedRevenue value
     * @param float $newCalculatedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setNewCalculatedRevenue(?float $newCalculatedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($newCalculatedRevenue) && !(is_float($newCalculatedRevenue) || is_numeric($newCalculatedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($newCalculatedRevenue, true), gettype($newCalculatedRevenue)), __LINE__);
        }
        $this->newCalculatedRevenue = $newCalculatedRevenue;
        
        return $this;
    }
    /**
     * Get newFarePrice value
     * @return float|null
     */
    public function getNewFarePrice(): ?float
    {
        return $this->newFarePrice;
    }
    /**
     * Set newFarePrice value
     * @param float $newFarePrice
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setNewFarePrice(?float $newFarePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($newFarePrice) && !(is_float($newFarePrice) || is_numeric($newFarePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($newFarePrice, true), gettype($newFarePrice)), __LINE__);
        }
        $this->newFarePrice = $newFarePrice;
        
        return $this;
    }
    /**
     * Get newFeeAmount value
     * @return float|null
     */
    public function getNewFeeAmount(): ?float
    {
        return $this->newFeeAmount;
    }
    /**
     * Set newFeeAmount value
     * @param float $newFeeAmount
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setNewFeeAmount(?float $newFeeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($newFeeAmount) && !(is_float($newFeeAmount) || is_numeric($newFeeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($newFeeAmount, true), gettype($newFeeAmount)), __LINE__);
        }
        $this->newFeeAmount = $newFeeAmount;
        
        return $this;
    }
    /**
     * Get newGrantedRevenue value
     * @return float|null
     */
    public function getNewGrantedRevenue(): ?float
    {
        return $this->newGrantedRevenue;
    }
    /**
     * Set newGrantedRevenue value
     * @param float $newGrantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setNewGrantedRevenue(?float $newGrantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($newGrantedRevenue) && !(is_float($newGrantedRevenue) || is_numeric($newGrantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($newGrantedRevenue, true), gettype($newGrantedRevenue)), __LINE__);
        }
        $this->newGrantedRevenue = $newGrantedRevenue;
        
        return $this;
    }
    /**
     * Get newPrice value
     * @return float|null
     */
    public function getNewPrice(): ?float
    {
        return $this->newPrice;
    }
    /**
     * Set newPrice value
     * @param float $newPrice
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setNewPrice(?float $newPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($newPrice) && !(is_float($newPrice) || is_numeric($newPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($newPrice, true), gettype($newPrice)), __LINE__);
        }
        $this->newPrice = $newPrice;
        
        return $this;
    }
    /**
     * Get newTotalTax value
     * @return float|null
     */
    public function getNewTotalTax(): ?float
    {
        return $this->newTotalTax;
    }
    /**
     * Set newTotalTax value
     * @param float $newTotalTax
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setNewTotalTax(?float $newTotalTax = null): self
    {
        // validation for constraint: float
        if (!is_null($newTotalTax) && !(is_float($newTotalTax) || is_numeric($newTotalTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($newTotalTax, true), gettype($newTotalTax)), __LINE__);
        }
        $this->newTotalTax = $newTotalTax;
        
        return $this;
    }
    /**
     * Get oldCalculatedRevenue value
     * @return float|null
     */
    public function getOldCalculatedRevenue(): ?float
    {
        return $this->oldCalculatedRevenue;
    }
    /**
     * Set oldCalculatedRevenue value
     * @param float $oldCalculatedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setOldCalculatedRevenue(?float $oldCalculatedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($oldCalculatedRevenue) && !(is_float($oldCalculatedRevenue) || is_numeric($oldCalculatedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oldCalculatedRevenue, true), gettype($oldCalculatedRevenue)), __LINE__);
        }
        $this->oldCalculatedRevenue = $oldCalculatedRevenue;
        
        return $this;
    }
    /**
     * Get oldFarePrice value
     * @return float|null
     */
    public function getOldFarePrice(): ?float
    {
        return $this->oldFarePrice;
    }
    /**
     * Set oldFarePrice value
     * @param float $oldFarePrice
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setOldFarePrice(?float $oldFarePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($oldFarePrice) && !(is_float($oldFarePrice) || is_numeric($oldFarePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oldFarePrice, true), gettype($oldFarePrice)), __LINE__);
        }
        $this->oldFarePrice = $oldFarePrice;
        
        return $this;
    }
    /**
     * Get oldFeeAmount value
     * @return float|null
     */
    public function getOldFeeAmount(): ?float
    {
        return $this->oldFeeAmount;
    }
    /**
     * Set oldFeeAmount value
     * @param float $oldFeeAmount
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setOldFeeAmount(?float $oldFeeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($oldFeeAmount) && !(is_float($oldFeeAmount) || is_numeric($oldFeeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oldFeeAmount, true), gettype($oldFeeAmount)), __LINE__);
        }
        $this->oldFeeAmount = $oldFeeAmount;
        
        return $this;
    }
    /**
     * Get oldGrantedRevenue value
     * @return float|null
     */
    public function getOldGrantedRevenue(): ?float
    {
        return $this->oldGrantedRevenue;
    }
    /**
     * Set oldGrantedRevenue value
     * @param float $oldGrantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setOldGrantedRevenue(?float $oldGrantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($oldGrantedRevenue) && !(is_float($oldGrantedRevenue) || is_numeric($oldGrantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oldGrantedRevenue, true), gettype($oldGrantedRevenue)), __LINE__);
        }
        $this->oldGrantedRevenue = $oldGrantedRevenue;
        
        return $this;
    }
    /**
     * Get oldPrice value
     * @return float|null
     */
    public function getOldPrice(): ?float
    {
        return $this->oldPrice;
    }
    /**
     * Set oldPrice value
     * @param float $oldPrice
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setOldPrice(?float $oldPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($oldPrice) && !(is_float($oldPrice) || is_numeric($oldPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oldPrice, true), gettype($oldPrice)), __LINE__);
        }
        $this->oldPrice = $oldPrice;
        
        return $this;
    }
    /**
     * Get oldTotalTax value
     * @return float|null
     */
    public function getOldTotalTax(): ?float
    {
        return $this->oldTotalTax;
    }
    /**
     * Set oldTotalTax value
     * @param float $oldTotalTax
     * @return \Pggns\MidocoApi\Order\StructType\PriceHistoryDTO
     */
    public function setOldTotalTax(?float $oldTotalTax = null): self
    {
        // validation for constraint: float
        if (!is_null($oldTotalTax) && !(is_float($oldTotalTax) || is_numeric($oldTotalTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oldTotalTax, true), gettype($oldTotalTax)), __LINE__);
        }
        $this->oldTotalTax = $oldTotalTax;
        
        return $this;
    }
}
