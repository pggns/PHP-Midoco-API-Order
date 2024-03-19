<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PriceDetailDTO extends AbstractStructBase
{
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
     * The farePrice
     * @var float|null
     */
    protected ?float $farePrice = null;
    /**
     * The fareType
     * @var string|null
     */
    protected ?string $fareType = null;
    /**
     * The feeAmountIncluded
     * @var float|null
     */
    protected ?float $feeAmountIncluded = null;
    /**
     * The feeCalculated
     * @var bool|null
     */
    protected ?bool $feeCalculated = null;
    /**
     * The feeTaxPartPercent
     * @var float|null
     */
    protected ?float $feeTaxPartPercent = null;
    /**
     * The isDomestic
     * @var bool|null
     */
    protected ?bool $isDomestic = null;
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
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * The segmentAssignment
     * @var string|null
     */
    protected ?string $segmentAssignment = null;
    /**
     * The ticketingDate
     * @var string|null
     */
    protected ?string $ticketingDate = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The totalTax
     * @var float|null
     */
    protected ?float $totalTax = null;
    /**
     * Constructor method for PriceDetailDTO
     * @uses PriceDetailDTO::setCurrency()
     * @uses PriceDetailDTO::setDescription()
     * @uses PriceDetailDTO::setFarePrice()
     * @uses PriceDetailDTO::setFareType()
     * @uses PriceDetailDTO::setFeeAmountIncluded()
     * @uses PriceDetailDTO::setFeeCalculated()
     * @uses PriceDetailDTO::setFeeTaxPartPercent()
     * @uses PriceDetailDTO::setIsDomestic()
     * @uses PriceDetailDTO::setItemId()
     * @uses PriceDetailDTO::setPassengerAssignment()
     * @uses PriceDetailDTO::setPositionNo()
     * @uses PriceDetailDTO::setSegmentAssignment()
     * @uses PriceDetailDTO::setTicketingDate()
     * @uses PriceDetailDTO::setTotalPrice()
     * @uses PriceDetailDTO::setTotalTax()
     * @param string $currency
     * @param string $description
     * @param float $farePrice
     * @param string $fareType
     * @param float $feeAmountIncluded
     * @param bool $feeCalculated
     * @param float $feeTaxPartPercent
     * @param bool $isDomestic
     * @param int $itemId
     * @param string $passengerAssignment
     * @param int $positionNo
     * @param string $segmentAssignment
     * @param string $ticketingDate
     * @param float $totalPrice
     * @param float $totalTax
     */
    public function __construct(?string $currency = null, ?string $description = null, ?float $farePrice = null, ?string $fareType = null, ?float $feeAmountIncluded = null, ?bool $feeCalculated = null, ?float $feeTaxPartPercent = null, ?bool $isDomestic = null, ?int $itemId = null, ?string $passengerAssignment = null, ?int $positionNo = null, ?string $segmentAssignment = null, ?string $ticketingDate = null, ?float $totalPrice = null, ?float $totalTax = null)
    {
        $this
            ->setCurrency($currency)
            ->setDescription($description)
            ->setFarePrice($farePrice)
            ->setFareType($fareType)
            ->setFeeAmountIncluded($feeAmountIncluded)
            ->setFeeCalculated($feeCalculated)
            ->setFeeTaxPartPercent($feeTaxPartPercent)
            ->setIsDomestic($isDomestic)
            ->setItemId($itemId)
            ->setPassengerAssignment($passengerAssignment)
            ->setPositionNo($positionNo)
            ->setSegmentAssignment($segmentAssignment)
            ->setTicketingDate($ticketingDate)
            ->setTotalPrice($totalPrice)
            ->setTotalTax($totalTax);
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
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
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
     * Get farePrice value
     * @return float|null
     */
    public function getFarePrice(): ?float
    {
        return $this->farePrice;
    }
    /**
     * Set farePrice value
     * @param float $farePrice
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
     */
    public function setFarePrice(?float $farePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($farePrice) && !(is_float($farePrice) || is_numeric($farePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($farePrice, true), gettype($farePrice)), __LINE__);
        }
        $this->farePrice = $farePrice;
        
        return $this;
    }
    /**
     * Get fareType value
     * @return string|null
     */
    public function getFareType(): ?string
    {
        return $this->fareType;
    }
    /**
     * Set fareType value
     * @param string $fareType
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
     */
    public function setFareType(?string $fareType = null): self
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareType, true), gettype($fareType)), __LINE__);
        }
        $this->fareType = $fareType;
        
        return $this;
    }
    /**
     * Get feeAmountIncluded value
     * @return float|null
     */
    public function getFeeAmountIncluded(): ?float
    {
        return $this->feeAmountIncluded;
    }
    /**
     * Set feeAmountIncluded value
     * @param float $feeAmountIncluded
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
     */
    public function setFeeAmountIncluded(?float $feeAmountIncluded = null): self
    {
        // validation for constraint: float
        if (!is_null($feeAmountIncluded) && !(is_float($feeAmountIncluded) || is_numeric($feeAmountIncluded))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeAmountIncluded, true), gettype($feeAmountIncluded)), __LINE__);
        }
        $this->feeAmountIncluded = $feeAmountIncluded;
        
        return $this;
    }
    /**
     * Get feeCalculated value
     * @return bool|null
     */
    public function getFeeCalculated(): ?bool
    {
        return $this->feeCalculated;
    }
    /**
     * Set feeCalculated value
     * @param bool $feeCalculated
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
     */
    public function setFeeCalculated(?bool $feeCalculated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($feeCalculated) && !is_bool($feeCalculated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feeCalculated, true), gettype($feeCalculated)), __LINE__);
        }
        $this->feeCalculated = $feeCalculated;
        
        return $this;
    }
    /**
     * Get feeTaxPartPercent value
     * @return float|null
     */
    public function getFeeTaxPartPercent(): ?float
    {
        return $this->feeTaxPartPercent;
    }
    /**
     * Set feeTaxPartPercent value
     * @param float $feeTaxPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
     */
    public function setFeeTaxPartPercent(?float $feeTaxPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($feeTaxPartPercent) && !(is_float($feeTaxPartPercent) || is_numeric($feeTaxPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeTaxPartPercent, true), gettype($feeTaxPartPercent)), __LINE__);
        }
        $this->feeTaxPartPercent = $feeTaxPartPercent;
        
        return $this;
    }
    /**
     * Get isDomestic value
     * @return bool|null
     */
    public function getIsDomestic(): ?bool
    {
        return $this->isDomestic;
    }
    /**
     * Set isDomestic value
     * @param bool $isDomestic
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
     */
    public function setIsDomestic(?bool $isDomestic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDomestic) && !is_bool($isDomestic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDomestic, true), gettype($isDomestic)), __LINE__);
        }
        $this->isDomestic = $isDomestic;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
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
     * Get positionNo value
     * @return int|null
     */
    public function getPositionNo(): ?int
    {
        return $this->positionNo;
    }
    /**
     * Set positionNo value
     * @param int $positionNo
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
     */
    public function setPositionNo(?int $positionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($positionNo) && !(is_int($positionNo) || ctype_digit($positionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionNo, true), gettype($positionNo)), __LINE__);
        }
        $this->positionNo = $positionNo;
        
        return $this;
    }
    /**
     * Get segmentAssignment value
     * @return string|null
     */
    public function getSegmentAssignment(): ?string
    {
        return $this->segmentAssignment;
    }
    /**
     * Set segmentAssignment value
     * @param string $segmentAssignment
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
     */
    public function setSegmentAssignment(?string $segmentAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentAssignment) && !is_string($segmentAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentAssignment, true), gettype($segmentAssignment)), __LINE__);
        }
        $this->segmentAssignment = $segmentAssignment;
        
        return $this;
    }
    /**
     * Get ticketingDate value
     * @return string|null
     */
    public function getTicketingDate(): ?string
    {
        return $this->ticketingDate;
    }
    /**
     * Set ticketingDate value
     * @param string $ticketingDate
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
     */
    public function setTicketingDate(?string $ticketingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingDate) && !is_string($ticketingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingDate, true), gettype($ticketingDate)), __LINE__);
        }
        $this->ticketingDate = $ticketingDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
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
     * Get totalTax value
     * @return float|null
     */
    public function getTotalTax(): ?float
    {
        return $this->totalTax;
    }
    /**
     * Set totalTax value
     * @param float $totalTax
     * @return \Pggns\MidocoApi\Order\StructType\PriceDetailDTO
     */
    public function setTotalTax(?float $totalTax = null): self
    {
        // validation for constraint: float
        if (!is_null($totalTax) && !(is_float($totalTax) || is_numeric($totalTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalTax, true), gettype($totalTax)), __LINE__);
        }
        $this->totalTax = $totalTax;
        
        return $this;
    }
}
