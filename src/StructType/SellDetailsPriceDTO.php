<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellDetailsPriceDTO StructType
 * @subpackage Structs
 */
class SellDetailsPriceDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The detailsPriceId
     * @var int|null
     */
    protected ?int $detailsPriceId = null;
    /**
     * The hiddenFee
     * @var float|null
     */
    protected ?float $hiddenFee = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The passengerAssignment
     * @var string|null
     */
    protected ?string $passengerAssignment = null;
    /**
     * The priceMultiply
     * @var int|null
     */
    protected ?int $priceMultiply = null;
    /**
     * The servicePosition
     * @var int|null
     */
    protected ?int $servicePosition = null;
    /**
     * The singlePrice
     * @var float|null
     */
    protected ?float $singlePrice = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * Constructor method for SellDetailsPriceDTO
     * @uses SellDetailsPriceDTO::setDescription()
     * @uses SellDetailsPriceDTO::setDetailsPriceId()
     * @uses SellDetailsPriceDTO::setHiddenFee()
     * @uses SellDetailsPriceDTO::setItemId()
     * @uses SellDetailsPriceDTO::setPassengerAssignment()
     * @uses SellDetailsPriceDTO::setPriceMultiply()
     * @uses SellDetailsPriceDTO::setServicePosition()
     * @uses SellDetailsPriceDTO::setSinglePrice()
     * @uses SellDetailsPriceDTO::setTotalPrice()
     * @param string $description
     * @param int $detailsPriceId
     * @param float $hiddenFee
     * @param int $itemId
     * @param string $passengerAssignment
     * @param int $priceMultiply
     * @param int $servicePosition
     * @param float $singlePrice
     * @param float $totalPrice
     */
    public function __construct(?string $description = null, ?int $detailsPriceId = null, ?float $hiddenFee = null, ?int $itemId = null, ?string $passengerAssignment = null, ?int $priceMultiply = null, ?int $servicePosition = null, ?float $singlePrice = null, ?float $totalPrice = null)
    {
        $this
            ->setDescription($description)
            ->setDetailsPriceId($detailsPriceId)
            ->setHiddenFee($hiddenFee)
            ->setItemId($itemId)
            ->setPassengerAssignment($passengerAssignment)
            ->setPriceMultiply($priceMultiply)
            ->setServicePosition($servicePosition)
            ->setSinglePrice($singlePrice)
            ->setTotalPrice($totalPrice);
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
     * @return \Pggns\MidocoApi\Order\StructType\SellDetailsPriceDTO
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
     * Get detailsPriceId value
     * @return int|null
     */
    public function getDetailsPriceId(): ?int
    {
        return $this->detailsPriceId;
    }
    /**
     * Set detailsPriceId value
     * @param int $detailsPriceId
     * @return \Pggns\MidocoApi\Order\StructType\SellDetailsPriceDTO
     */
    public function setDetailsPriceId(?int $detailsPriceId = null): self
    {
        // validation for constraint: int
        if (!is_null($detailsPriceId) && !(is_int($detailsPriceId) || ctype_digit($detailsPriceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($detailsPriceId, true), gettype($detailsPriceId)), __LINE__);
        }
        $this->detailsPriceId = $detailsPriceId;
        
        return $this;
    }
    /**
     * Get hiddenFee value
     * @return float|null
     */
    public function getHiddenFee(): ?float
    {
        return $this->hiddenFee;
    }
    /**
     * Set hiddenFee value
     * @param float $hiddenFee
     * @return \Pggns\MidocoApi\Order\StructType\SellDetailsPriceDTO
     */
    public function setHiddenFee(?float $hiddenFee = null): self
    {
        // validation for constraint: float
        if (!is_null($hiddenFee) && !(is_float($hiddenFee) || is_numeric($hiddenFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($hiddenFee, true), gettype($hiddenFee)), __LINE__);
        }
        $this->hiddenFee = $hiddenFee;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellDetailsPriceDTO
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
     * Get passengerAssignment value
     * @return string|null
     */
    public function getPassengerAssignment(): ?string
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param string $passengerAssignment
     * @return \Pggns\MidocoApi\Order\StructType\SellDetailsPriceDTO
     */
    public function setPassengerAssignment(?string $passengerAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerAssignment) && !is_string($passengerAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
        return $this;
    }
    /**
     * Get priceMultiply value
     * @return int|null
     */
    public function getPriceMultiply(): ?int
    {
        return $this->priceMultiply;
    }
    /**
     * Set priceMultiply value
     * @param int $priceMultiply
     * @return \Pggns\MidocoApi\Order\StructType\SellDetailsPriceDTO
     */
    public function setPriceMultiply(?int $priceMultiply = null): self
    {
        // validation for constraint: int
        if (!is_null($priceMultiply) && !(is_int($priceMultiply) || ctype_digit($priceMultiply))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priceMultiply, true), gettype($priceMultiply)), __LINE__);
        }
        $this->priceMultiply = $priceMultiply;
        
        return $this;
    }
    /**
     * Get servicePosition value
     * @return int|null
     */
    public function getServicePosition(): ?int
    {
        return $this->servicePosition;
    }
    /**
     * Set servicePosition value
     * @param int $servicePosition
     * @return \Pggns\MidocoApi\Order\StructType\SellDetailsPriceDTO
     */
    public function setServicePosition(?int $servicePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($servicePosition) && !(is_int($servicePosition) || ctype_digit($servicePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($servicePosition, true), gettype($servicePosition)), __LINE__);
        }
        $this->servicePosition = $servicePosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellDetailsPriceDTO
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
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellDetailsPriceDTO
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
}
