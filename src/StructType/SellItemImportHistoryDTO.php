<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemImportHistoryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SellItemImportHistoryDTO extends AbstractStructBase
{
    /**
     * The hotelCode
     * @var string|null
     */
    protected ?string $hotelCode = null;
    /**
     * The importMessageType
     * @var string|null
     */
    protected ?string $importMessageType = null;
    /**
     * The importSystem
     * @var string|null
     */
    protected ?string $importSystem = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The sihId
     * @var int|null
     */
    protected ?int $sihId = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The travelDestination
     * @var string|null
     */
    protected ?string $travelDestination = null;
    /**
     * The travellerCount
     * @var int|null
     */
    protected ?int $travellerCount = null;
    /**
     * Constructor method for SellItemImportHistoryDTO
     * @uses SellItemImportHistoryDTO::setHotelCode()
     * @uses SellItemImportHistoryDTO::setImportMessageType()
     * @uses SellItemImportHistoryDTO::setImportSystem()
     * @uses SellItemImportHistoryDTO::setItemId()
     * @uses SellItemImportHistoryDTO::setModifyTimestamp()
     * @uses SellItemImportHistoryDTO::setPrice()
     * @uses SellItemImportHistoryDTO::setSihId()
     * @uses SellItemImportHistoryDTO::setStatus()
     * @uses SellItemImportHistoryDTO::setTravelDate()
     * @uses SellItemImportHistoryDTO::setTravelDestination()
     * @uses SellItemImportHistoryDTO::setTravellerCount()
     * @param string $hotelCode
     * @param string $importMessageType
     * @param string $importSystem
     * @param int $itemId
     * @param string $modifyTimestamp
     * @param float $price
     * @param int $sihId
     * @param string $status
     * @param string $travelDate
     * @param string $travelDestination
     * @param int $travellerCount
     */
    public function __construct(?string $hotelCode = null, ?string $importMessageType = null, ?string $importSystem = null, ?int $itemId = null, ?string $modifyTimestamp = null, ?float $price = null, ?int $sihId = null, ?string $status = null, ?string $travelDate = null, ?string $travelDestination = null, ?int $travellerCount = null)
    {
        $this
            ->setHotelCode($hotelCode)
            ->setImportMessageType($importMessageType)
            ->setImportSystem($importSystem)
            ->setItemId($itemId)
            ->setModifyTimestamp($modifyTimestamp)
            ->setPrice($price)
            ->setSihId($sihId)
            ->setStatus($status)
            ->setTravelDate($travelDate)
            ->setTravelDestination($travelDestination)
            ->setTravellerCount($travellerCount);
    }
    /**
     * Get hotelCode value
     * @return string|null
     */
    public function getHotelCode(): ?string
    {
        return $this->hotelCode;
    }
    /**
     * Set hotelCode value
     * @param string $hotelCode
     * @return \Pggns\MidocoApi\Order\StructType\SellItemImportHistoryDTO
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCode, true), gettype($hotelCode)), __LINE__);
        }
        $this->hotelCode = $hotelCode;
        
        return $this;
    }
    /**
     * Get importMessageType value
     * @return string|null
     */
    public function getImportMessageType(): ?string
    {
        return $this->importMessageType;
    }
    /**
     * Set importMessageType value
     * @param string $importMessageType
     * @return \Pggns\MidocoApi\Order\StructType\SellItemImportHistoryDTO
     */
    public function setImportMessageType(?string $importMessageType = null): self
    {
        // validation for constraint: string
        if (!is_null($importMessageType) && !is_string($importMessageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importMessageType, true), gettype($importMessageType)), __LINE__);
        }
        $this->importMessageType = $importMessageType;
        
        return $this;
    }
    /**
     * Get importSystem value
     * @return string|null
     */
    public function getImportSystem(): ?string
    {
        return $this->importSystem;
    }
    /**
     * Set importSystem value
     * @param string $importSystem
     * @return \Pggns\MidocoApi\Order\StructType\SellItemImportHistoryDTO
     */
    public function setImportSystem(?string $importSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($importSystem) && !is_string($importSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importSystem, true), gettype($importSystem)), __LINE__);
        }
        $this->importSystem = $importSystem;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemImportHistoryDTO
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
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\SellItemImportHistoryDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemImportHistoryDTO
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
     * Get sihId value
     * @return int|null
     */
    public function getSihId(): ?int
    {
        return $this->sihId;
    }
    /**
     * Set sihId value
     * @param int $sihId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemImportHistoryDTO
     */
    public function setSihId(?int $sihId = null): self
    {
        // validation for constraint: int
        if (!is_null($sihId) && !(is_int($sihId) || ctype_digit($sihId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sihId, true), gettype($sihId)), __LINE__);
        }
        $this->sihId = $sihId;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\SellItemImportHistoryDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemImportHistoryDTO
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get travelDestination value
     * @return string|null
     */
    public function getTravelDestination(): ?string
    {
        return $this->travelDestination;
    }
    /**
     * Set travelDestination value
     * @param string $travelDestination
     * @return \Pggns\MidocoApi\Order\StructType\SellItemImportHistoryDTO
     */
    public function setTravelDestination(?string $travelDestination = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDestination) && !is_string($travelDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDestination, true), gettype($travelDestination)), __LINE__);
        }
        $this->travelDestination = $travelDestination;
        
        return $this;
    }
    /**
     * Get travellerCount value
     * @return int|null
     */
    public function getTravellerCount(): ?int
    {
        return $this->travellerCount;
    }
    /**
     * Set travellerCount value
     * @param int $travellerCount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemImportHistoryDTO
     */
    public function setTravellerCount(?int $travellerCount = null): self
    {
        // validation for constraint: int
        if (!is_null($travellerCount) && !(is_int($travellerCount) || ctype_digit($travellerCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travellerCount, true), gettype($travellerCount)), __LINE__);
        }
        $this->travellerCount = $travellerCount;
        
        return $this;
    }
}
