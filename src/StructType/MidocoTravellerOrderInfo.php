<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTravellerOrderInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTravellerOrderInfo extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The projectNo
     * @var string|null
     */
    protected ?string $projectNo = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The flight
     * @var string|null
     */
    protected ?string $flight = null;
    /**
     * The hotel
     * @var string|null
     */
    protected ?string $hotel = null;
    /**
     * The train
     * @var string|null
     */
    protected ?string $train = null;
    /**
     * The car
     * @var string|null
     */
    protected ?string $car = null;
    /**
     * The travelFrom
     * @var string|null
     */
    protected ?string $travelFrom = null;
    /**
     * The travelUntil
     * @var string|null
     */
    protected ?string $travelUntil = null;
    /**
     * The remarkExists
     * @var bool|null
     */
    protected ?bool $remarkExists = null;
    /**
     * Constructor method for MidocoTravellerOrderInfo
     * @uses MidocoTravellerOrderInfo::setCreationDate()
     * @uses MidocoTravellerOrderInfo::setOrderNo()
     * @uses MidocoTravellerOrderInfo::setTravelType()
     * @uses MidocoTravellerOrderInfo::setTotalPrice()
     * @uses MidocoTravellerOrderInfo::setProjectNo()
     * @uses MidocoTravellerOrderInfo::setRemark()
     * @uses MidocoTravellerOrderInfo::setFlight()
     * @uses MidocoTravellerOrderInfo::setHotel()
     * @uses MidocoTravellerOrderInfo::setTrain()
     * @uses MidocoTravellerOrderInfo::setCar()
     * @uses MidocoTravellerOrderInfo::setTravelFrom()
     * @uses MidocoTravellerOrderInfo::setTravelUntil()
     * @uses MidocoTravellerOrderInfo::setRemarkExists()
     * @param string $creationDate
     * @param int $orderNo
     * @param string $travelType
     * @param float $totalPrice
     * @param string $projectNo
     * @param string $remark
     * @param string $flight
     * @param string $hotel
     * @param string $train
     * @param string $car
     * @param string $travelFrom
     * @param string $travelUntil
     * @param bool $remarkExists
     */
    public function __construct(?string $creationDate = null, ?int $orderNo = null, ?string $travelType = null, ?float $totalPrice = null, ?string $projectNo = null, ?string $remark = null, ?string $flight = null, ?string $hotel = null, ?string $train = null, ?string $car = null, ?string $travelFrom = null, ?string $travelUntil = null, ?bool $remarkExists = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setOrderNo($orderNo)
            ->setTravelType($travelType)
            ->setTotalPrice($totalPrice)
            ->setProjectNo($projectNo)
            ->setRemark($remark)
            ->setFlight($flight)
            ->setHotel($hotel)
            ->setTrain($train)
            ->setCar($car)
            ->setTravelFrom($travelFrom)
            ->setTravelUntil($travelUntil)
            ->setRemarkExists($remarkExists);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
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
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
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
    /**
     * Get projectNo value
     * @return string|null
     */
    public function getProjectNo(): ?string
    {
        return $this->projectNo;
    }
    /**
     * Set projectNo value
     * @param string $projectNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
     */
    public function setProjectNo(?string $projectNo = null): self
    {
        // validation for constraint: string
        if (!is_null($projectNo) && !is_string($projectNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($projectNo, true), gettype($projectNo)), __LINE__);
        }
        $this->projectNo = $projectNo;
        
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
    }
    /**
     * Get flight value
     * @return string|null
     */
    public function getFlight(): ?string
    {
        return $this->flight;
    }
    /**
     * Set flight value
     * @param string $flight
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
     */
    public function setFlight(?string $flight = null): self
    {
        // validation for constraint: string
        if (!is_null($flight) && !is_string($flight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flight, true), gettype($flight)), __LINE__);
        }
        $this->flight = $flight;
        
        return $this;
    }
    /**
     * Get hotel value
     * @return string|null
     */
    public function getHotel(): ?string
    {
        return $this->hotel;
    }
    /**
     * Set hotel value
     * @param string $hotel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
     */
    public function setHotel(?string $hotel = null): self
    {
        // validation for constraint: string
        if (!is_null($hotel) && !is_string($hotel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotel, true), gettype($hotel)), __LINE__);
        }
        $this->hotel = $hotel;
        
        return $this;
    }
    /**
     * Get train value
     * @return string|null
     */
    public function getTrain(): ?string
    {
        return $this->train;
    }
    /**
     * Set train value
     * @param string $train
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
     */
    public function setTrain(?string $train = null): self
    {
        // validation for constraint: string
        if (!is_null($train) && !is_string($train)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($train, true), gettype($train)), __LINE__);
        }
        $this->train = $train;
        
        return $this;
    }
    /**
     * Get car value
     * @return string|null
     */
    public function getCar(): ?string
    {
        return $this->car;
    }
    /**
     * Set car value
     * @param string $car
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
     */
    public function setCar(?string $car = null): self
    {
        // validation for constraint: string
        if (!is_null($car) && !is_string($car)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($car, true), gettype($car)), __LINE__);
        }
        $this->car = $car;
        
        return $this;
    }
    /**
     * Get travelFrom value
     * @return string|null
     */
    public function getTravelFrom(): ?string
    {
        return $this->travelFrom;
    }
    /**
     * Set travelFrom value
     * @param string $travelFrom
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
     */
    public function setTravelFrom(?string $travelFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelFrom) && !is_string($travelFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelFrom, true), gettype($travelFrom)), __LINE__);
        }
        $this->travelFrom = $travelFrom;
        
        return $this;
    }
    /**
     * Get travelUntil value
     * @return string|null
     */
    public function getTravelUntil(): ?string
    {
        return $this->travelUntil;
    }
    /**
     * Set travelUntil value
     * @param string $travelUntil
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
     */
    public function setTravelUntil(?string $travelUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($travelUntil) && !is_string($travelUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelUntil, true), gettype($travelUntil)), __LINE__);
        }
        $this->travelUntil = $travelUntil;
        
        return $this;
    }
    /**
     * Get remarkExists value
     * @return bool|null
     */
    public function getRemarkExists(): ?bool
    {
        return $this->remarkExists;
    }
    /**
     * Set remarkExists value
     * @param bool $remarkExists
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo
     */
    public function setRemarkExists(?bool $remarkExists = null): self
    {
        // validation for constraint: boolean
        if (!is_null($remarkExists) && !is_bool($remarkExists)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remarkExists, true), gettype($remarkExists)), __LINE__);
        }
        $this->remarkExists = $remarkExists;
        
        return $this;
    }
}
