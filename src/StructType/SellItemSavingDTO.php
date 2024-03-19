<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemSavingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SellItemSavingDTO extends AbstractStructBase
{
    /**
     * The airlineLowestFare
     * @var string|null
     */
    protected ?string $airlineLowestFare = null;
    /**
     * The detailsAssign
     * @var string|null
     */
    protected ?string $detailsAssign = null;
    /**
     * The highestFare
     * @var float|null
     */
    protected ?float $highestFare = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The lowestFare
     * @var float|null
     */
    protected ?float $lowestFare = null;
    /**
     * The manual
     * @var bool|null
     */
    protected ?bool $manual = null;
    /**
     * The reasonCode
     * @var string|null
     */
    protected ?string $reasonCode = null;
    /**
     * The reasonCode2
     * @var string|null
     */
    protected ?string $reasonCode2 = null;
    /**
     * The savingId
     * @var int|null
     */
    protected ?int $savingId = null;
    /**
     * The tarifCode
     * @var string|null
     */
    protected ?string $tarifCode = null;
    /**
     * Constructor method for SellItemSavingDTO
     * @uses SellItemSavingDTO::setAirlineLowestFare()
     * @uses SellItemSavingDTO::setDetailsAssign()
     * @uses SellItemSavingDTO::setHighestFare()
     * @uses SellItemSavingDTO::setItemId()
     * @uses SellItemSavingDTO::setLowestFare()
     * @uses SellItemSavingDTO::setManual()
     * @uses SellItemSavingDTO::setReasonCode()
     * @uses SellItemSavingDTO::setReasonCode2()
     * @uses SellItemSavingDTO::setSavingId()
     * @uses SellItemSavingDTO::setTarifCode()
     * @param string $airlineLowestFare
     * @param string $detailsAssign
     * @param float $highestFare
     * @param int $itemId
     * @param float $lowestFare
     * @param bool $manual
     * @param string $reasonCode
     * @param string $reasonCode2
     * @param int $savingId
     * @param string $tarifCode
     */
    public function __construct(?string $airlineLowestFare = null, ?string $detailsAssign = null, ?float $highestFare = null, ?int $itemId = null, ?float $lowestFare = null, ?bool $manual = null, ?string $reasonCode = null, ?string $reasonCode2 = null, ?int $savingId = null, ?string $tarifCode = null)
    {
        $this
            ->setAirlineLowestFare($airlineLowestFare)
            ->setDetailsAssign($detailsAssign)
            ->setHighestFare($highestFare)
            ->setItemId($itemId)
            ->setLowestFare($lowestFare)
            ->setManual($manual)
            ->setReasonCode($reasonCode)
            ->setReasonCode2($reasonCode2)
            ->setSavingId($savingId)
            ->setTarifCode($tarifCode);
    }
    /**
     * Get airlineLowestFare value
     * @return string|null
     */
    public function getAirlineLowestFare(): ?string
    {
        return $this->airlineLowestFare;
    }
    /**
     * Set airlineLowestFare value
     * @param string $airlineLowestFare
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO
     */
    public function setAirlineLowestFare(?string $airlineLowestFare = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineLowestFare) && !is_string($airlineLowestFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineLowestFare, true), gettype($airlineLowestFare)), __LINE__);
        }
        $this->airlineLowestFare = $airlineLowestFare;
        
        return $this;
    }
    /**
     * Get detailsAssign value
     * @return string|null
     */
    public function getDetailsAssign(): ?string
    {
        return $this->detailsAssign;
    }
    /**
     * Set detailsAssign value
     * @param string $detailsAssign
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO
     */
    public function setDetailsAssign(?string $detailsAssign = null): self
    {
        // validation for constraint: string
        if (!is_null($detailsAssign) && !is_string($detailsAssign)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailsAssign, true), gettype($detailsAssign)), __LINE__);
        }
        $this->detailsAssign = $detailsAssign;
        
        return $this;
    }
    /**
     * Get highestFare value
     * @return float|null
     */
    public function getHighestFare(): ?float
    {
        return $this->highestFare;
    }
    /**
     * Set highestFare value
     * @param float $highestFare
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO
     */
    public function setHighestFare(?float $highestFare = null): self
    {
        // validation for constraint: float
        if (!is_null($highestFare) && !(is_float($highestFare) || is_numeric($highestFare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($highestFare, true), gettype($highestFare)), __LINE__);
        }
        $this->highestFare = $highestFare;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO
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
     * Get lowestFare value
     * @return float|null
     */
    public function getLowestFare(): ?float
    {
        return $this->lowestFare;
    }
    /**
     * Set lowestFare value
     * @param float $lowestFare
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO
     */
    public function setLowestFare(?float $lowestFare = null): self
    {
        // validation for constraint: float
        if (!is_null($lowestFare) && !(is_float($lowestFare) || is_numeric($lowestFare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lowestFare, true), gettype($lowestFare)), __LINE__);
        }
        $this->lowestFare = $lowestFare;
        
        return $this;
    }
    /**
     * Get manual value
     * @return bool|null
     */
    public function getManual(): ?bool
    {
        return $this->manual;
    }
    /**
     * Set manual value
     * @param bool $manual
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO
     */
    public function setManual(?bool $manual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manual) && !is_bool($manual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manual, true), gettype($manual)), __LINE__);
        }
        $this->manual = $manual;
        
        return $this;
    }
    /**
     * Get reasonCode value
     * @return string|null
     */
    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }
    /**
     * Set reasonCode value
     * @param string $reasonCode
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO
     */
    public function setReasonCode(?string $reasonCode = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonCode) && !is_string($reasonCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonCode, true), gettype($reasonCode)), __LINE__);
        }
        $this->reasonCode = $reasonCode;
        
        return $this;
    }
    /**
     * Get reasonCode2 value
     * @return string|null
     */
    public function getReasonCode2(): ?string
    {
        return $this->reasonCode2;
    }
    /**
     * Set reasonCode2 value
     * @param string $reasonCode2
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO
     */
    public function setReasonCode2(?string $reasonCode2 = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonCode2) && !is_string($reasonCode2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonCode2, true), gettype($reasonCode2)), __LINE__);
        }
        $this->reasonCode2 = $reasonCode2;
        
        return $this;
    }
    /**
     * Get savingId value
     * @return int|null
     */
    public function getSavingId(): ?int
    {
        return $this->savingId;
    }
    /**
     * Set savingId value
     * @param int $savingId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO
     */
    public function setSavingId(?int $savingId = null): self
    {
        // validation for constraint: int
        if (!is_null($savingId) && !(is_int($savingId) || ctype_digit($savingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($savingId, true), gettype($savingId)), __LINE__);
        }
        $this->savingId = $savingId;
        
        return $this;
    }
    /**
     * Get tarifCode value
     * @return string|null
     */
    public function getTarifCode(): ?string
    {
        return $this->tarifCode;
    }
    /**
     * Set tarifCode value
     * @param string $tarifCode
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO
     */
    public function setTarifCode(?string $tarifCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tarifCode) && !is_string($tarifCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tarifCode, true), gettype($tarifCode)), __LINE__);
        }
        $this->tarifCode = $tarifCode;
        
        return $this;
    }
}
