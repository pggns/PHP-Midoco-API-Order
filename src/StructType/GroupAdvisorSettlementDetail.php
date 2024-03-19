<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupAdvisorSettlementDetail StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GroupAdvisorSettlementDetail extends AbstractStructBase
{
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The mediatorName
     * @var string|null
     */
    protected ?string $mediatorName = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The wotAmount
     * @var float|null
     */
    protected ?float $wotAmount = null;
    /**
     * The specialAmount
     * @var float|null
     */
    protected ?float $specialAmount = null;
    /**
     * The flightAmount
     * @var float|null
     */
    protected ?float $flightAmount = null;
    /**
     * The hmrAmount
     * @var float|null
     */
    protected ?float $hmrAmount = null;
    /**
     * The noCommissionAmount
     * @var float|null
     */
    protected ?float $noCommissionAmount = null;
    /**
     * The noOfBookings
     * @var int|null
     */
    protected ?int $noOfBookings = null;
    /**
     * The specialNoOfBookings
     * @var int|null
     */
    protected ?int $specialNoOfBookings = null;
    /**
     * The wotNoOfBookings
     * @var int|null
     */
    protected ?int $wotNoOfBookings = null;
    /**
     * The flightNoOfBookings
     * @var int|null
     */
    protected ?int $flightNoOfBookings = null;
    /**
     * The hmrNoOfBookings
     * @var int|null
     */
    protected ?int $hmrNoOfBookings = null;
    /**
     * The noCommissionNoOfBookings
     * @var int|null
     */
    protected ?int $noCommissionNoOfBookings = null;
    /**
     * The wotPartPercent
     * @var float|null
     */
    protected ?float $wotPartPercent = null;
    /**
     * The specialPartPercent
     * @var float|null
     */
    protected ?float $specialPartPercent = null;
    /**
     * The flightPartPercent
     * @var float|null
     */
    protected ?float $flightPartPercent = null;
    /**
     * The hmrPartPercent
     * @var float|null
     */
    protected ?float $hmrPartPercent = null;
    /**
     * The noCommissionPartPercent
     * @var float|null
     */
    protected ?float $noCommissionPartPercent = null;
    /**
     * The allBookingsTotalAmount
     * @var float|null
     */
    protected ?float $allBookingsTotalAmount = null;
    /**
     * Constructor method for GroupAdvisorSettlementDetail
     * @uses GroupAdvisorSettlementDetail::setMediatorId()
     * @uses GroupAdvisorSettlementDetail::setMediatorName()
     * @uses GroupAdvisorSettlementDetail::setTotalAmount()
     * @uses GroupAdvisorSettlementDetail::setCommissionPercent()
     * @uses GroupAdvisorSettlementDetail::setCommissionAmount()
     * @uses GroupAdvisorSettlementDetail::setWotAmount()
     * @uses GroupAdvisorSettlementDetail::setSpecialAmount()
     * @uses GroupAdvisorSettlementDetail::setFlightAmount()
     * @uses GroupAdvisorSettlementDetail::setHmrAmount()
     * @uses GroupAdvisorSettlementDetail::setNoCommissionAmount()
     * @uses GroupAdvisorSettlementDetail::setNoOfBookings()
     * @uses GroupAdvisorSettlementDetail::setSpecialNoOfBookings()
     * @uses GroupAdvisorSettlementDetail::setWotNoOfBookings()
     * @uses GroupAdvisorSettlementDetail::setFlightNoOfBookings()
     * @uses GroupAdvisorSettlementDetail::setHmrNoOfBookings()
     * @uses GroupAdvisorSettlementDetail::setNoCommissionNoOfBookings()
     * @uses GroupAdvisorSettlementDetail::setWotPartPercent()
     * @uses GroupAdvisorSettlementDetail::setSpecialPartPercent()
     * @uses GroupAdvisorSettlementDetail::setFlightPartPercent()
     * @uses GroupAdvisorSettlementDetail::setHmrPartPercent()
     * @uses GroupAdvisorSettlementDetail::setNoCommissionPartPercent()
     * @uses GroupAdvisorSettlementDetail::setAllBookingsTotalAmount()
     * @param string $mediatorId
     * @param string $mediatorName
     * @param float $totalAmount
     * @param float $commissionPercent
     * @param float $commissionAmount
     * @param float $wotAmount
     * @param float $specialAmount
     * @param float $flightAmount
     * @param float $hmrAmount
     * @param float $noCommissionAmount
     * @param int $noOfBookings
     * @param int $specialNoOfBookings
     * @param int $wotNoOfBookings
     * @param int $flightNoOfBookings
     * @param int $hmrNoOfBookings
     * @param int $noCommissionNoOfBookings
     * @param float $wotPartPercent
     * @param float $specialPartPercent
     * @param float $flightPartPercent
     * @param float $hmrPartPercent
     * @param float $noCommissionPartPercent
     * @param float $allBookingsTotalAmount
     */
    public function __construct(?string $mediatorId = null, ?string $mediatorName = null, ?float $totalAmount = null, ?float $commissionPercent = null, ?float $commissionAmount = null, ?float $wotAmount = null, ?float $specialAmount = null, ?float $flightAmount = null, ?float $hmrAmount = null, ?float $noCommissionAmount = null, ?int $noOfBookings = null, ?int $specialNoOfBookings = null, ?int $wotNoOfBookings = null, ?int $flightNoOfBookings = null, ?int $hmrNoOfBookings = null, ?int $noCommissionNoOfBookings = null, ?float $wotPartPercent = null, ?float $specialPartPercent = null, ?float $flightPartPercent = null, ?float $hmrPartPercent = null, ?float $noCommissionPartPercent = null, ?float $allBookingsTotalAmount = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setMediatorName($mediatorName)
            ->setTotalAmount($totalAmount)
            ->setCommissionPercent($commissionPercent)
            ->setCommissionAmount($commissionAmount)
            ->setWotAmount($wotAmount)
            ->setSpecialAmount($specialAmount)
            ->setFlightAmount($flightAmount)
            ->setHmrAmount($hmrAmount)
            ->setNoCommissionAmount($noCommissionAmount)
            ->setNoOfBookings($noOfBookings)
            ->setSpecialNoOfBookings($specialNoOfBookings)
            ->setWotNoOfBookings($wotNoOfBookings)
            ->setFlightNoOfBookings($flightNoOfBookings)
            ->setHmrNoOfBookings($hmrNoOfBookings)
            ->setNoCommissionNoOfBookings($noCommissionNoOfBookings)
            ->setWotPartPercent($wotPartPercent)
            ->setSpecialPartPercent($specialPartPercent)
            ->setFlightPartPercent($flightPartPercent)
            ->setHmrPartPercent($hmrPartPercent)
            ->setNoCommissionPartPercent($noCommissionPartPercent)
            ->setAllBookingsTotalAmount($allBookingsTotalAmount);
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get mediatorName value
     * @return string|null
     */
    public function getMediatorName(): ?string
    {
        return $this->mediatorName;
    }
    /**
     * Set mediatorName value
     * @param string $mediatorName
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setMediatorName(?string $mediatorName = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorName) && !is_string($mediatorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorName, true), gettype($mediatorName)), __LINE__);
        }
        $this->mediatorName = $mediatorName;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get commissionPercent value
     * @return float|null
     */
    public function getCommissionPercent(): ?float
    {
        return $this->commissionPercent;
    }
    /**
     * Set commissionPercent value
     * @param float $commissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setCommissionPercent(?float $commissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercent) && !(is_float($commissionPercent) || is_numeric($commissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercent, true), gettype($commissionPercent)), __LINE__);
        }
        $this->commissionPercent = $commissionPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
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
     * Get wotAmount value
     * @return float|null
     */
    public function getWotAmount(): ?float
    {
        return $this->wotAmount;
    }
    /**
     * Set wotAmount value
     * @param float $wotAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setWotAmount(?float $wotAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($wotAmount) && !(is_float($wotAmount) || is_numeric($wotAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($wotAmount, true), gettype($wotAmount)), __LINE__);
        }
        $this->wotAmount = $wotAmount;
        
        return $this;
    }
    /**
     * Get specialAmount value
     * @return float|null
     */
    public function getSpecialAmount(): ?float
    {
        return $this->specialAmount;
    }
    /**
     * Set specialAmount value
     * @param float $specialAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setSpecialAmount(?float $specialAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($specialAmount) && !(is_float($specialAmount) || is_numeric($specialAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($specialAmount, true), gettype($specialAmount)), __LINE__);
        }
        $this->specialAmount = $specialAmount;
        
        return $this;
    }
    /**
     * Get flightAmount value
     * @return float|null
     */
    public function getFlightAmount(): ?float
    {
        return $this->flightAmount;
    }
    /**
     * Set flightAmount value
     * @param float $flightAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setFlightAmount(?float $flightAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($flightAmount) && !(is_float($flightAmount) || is_numeric($flightAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($flightAmount, true), gettype($flightAmount)), __LINE__);
        }
        $this->flightAmount = $flightAmount;
        
        return $this;
    }
    /**
     * Get hmrAmount value
     * @return float|null
     */
    public function getHmrAmount(): ?float
    {
        return $this->hmrAmount;
    }
    /**
     * Set hmrAmount value
     * @param float $hmrAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setHmrAmount(?float $hmrAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($hmrAmount) && !(is_float($hmrAmount) || is_numeric($hmrAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($hmrAmount, true), gettype($hmrAmount)), __LINE__);
        }
        $this->hmrAmount = $hmrAmount;
        
        return $this;
    }
    /**
     * Get noCommissionAmount value
     * @return float|null
     */
    public function getNoCommissionAmount(): ?float
    {
        return $this->noCommissionAmount;
    }
    /**
     * Set noCommissionAmount value
     * @param float $noCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setNoCommissionAmount(?float $noCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($noCommissionAmount) && !(is_float($noCommissionAmount) || is_numeric($noCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($noCommissionAmount, true), gettype($noCommissionAmount)), __LINE__);
        }
        $this->noCommissionAmount = $noCommissionAmount;
        
        return $this;
    }
    /**
     * Get noOfBookings value
     * @return int|null
     */
    public function getNoOfBookings(): ?int
    {
        return $this->noOfBookings;
    }
    /**
     * Set noOfBookings value
     * @param int $noOfBookings
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setNoOfBookings(?int $noOfBookings = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfBookings) && !(is_int($noOfBookings) || ctype_digit($noOfBookings))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfBookings, true), gettype($noOfBookings)), __LINE__);
        }
        $this->noOfBookings = $noOfBookings;
        
        return $this;
    }
    /**
     * Get specialNoOfBookings value
     * @return int|null
     */
    public function getSpecialNoOfBookings(): ?int
    {
        return $this->specialNoOfBookings;
    }
    /**
     * Set specialNoOfBookings value
     * @param int $specialNoOfBookings
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setSpecialNoOfBookings(?int $specialNoOfBookings = null): self
    {
        // validation for constraint: int
        if (!is_null($specialNoOfBookings) && !(is_int($specialNoOfBookings) || ctype_digit($specialNoOfBookings))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($specialNoOfBookings, true), gettype($specialNoOfBookings)), __LINE__);
        }
        $this->specialNoOfBookings = $specialNoOfBookings;
        
        return $this;
    }
    /**
     * Get wotNoOfBookings value
     * @return int|null
     */
    public function getWotNoOfBookings(): ?int
    {
        return $this->wotNoOfBookings;
    }
    /**
     * Set wotNoOfBookings value
     * @param int $wotNoOfBookings
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setWotNoOfBookings(?int $wotNoOfBookings = null): self
    {
        // validation for constraint: int
        if (!is_null($wotNoOfBookings) && !(is_int($wotNoOfBookings) || ctype_digit($wotNoOfBookings))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wotNoOfBookings, true), gettype($wotNoOfBookings)), __LINE__);
        }
        $this->wotNoOfBookings = $wotNoOfBookings;
        
        return $this;
    }
    /**
     * Get flightNoOfBookings value
     * @return int|null
     */
    public function getFlightNoOfBookings(): ?int
    {
        return $this->flightNoOfBookings;
    }
    /**
     * Set flightNoOfBookings value
     * @param int $flightNoOfBookings
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setFlightNoOfBookings(?int $flightNoOfBookings = null): self
    {
        // validation for constraint: int
        if (!is_null($flightNoOfBookings) && !(is_int($flightNoOfBookings) || ctype_digit($flightNoOfBookings))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($flightNoOfBookings, true), gettype($flightNoOfBookings)), __LINE__);
        }
        $this->flightNoOfBookings = $flightNoOfBookings;
        
        return $this;
    }
    /**
     * Get hmrNoOfBookings value
     * @return int|null
     */
    public function getHmrNoOfBookings(): ?int
    {
        return $this->hmrNoOfBookings;
    }
    /**
     * Set hmrNoOfBookings value
     * @param int $hmrNoOfBookings
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setHmrNoOfBookings(?int $hmrNoOfBookings = null): self
    {
        // validation for constraint: int
        if (!is_null($hmrNoOfBookings) && !(is_int($hmrNoOfBookings) || ctype_digit($hmrNoOfBookings))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hmrNoOfBookings, true), gettype($hmrNoOfBookings)), __LINE__);
        }
        $this->hmrNoOfBookings = $hmrNoOfBookings;
        
        return $this;
    }
    /**
     * Get noCommissionNoOfBookings value
     * @return int|null
     */
    public function getNoCommissionNoOfBookings(): ?int
    {
        return $this->noCommissionNoOfBookings;
    }
    /**
     * Set noCommissionNoOfBookings value
     * @param int $noCommissionNoOfBookings
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setNoCommissionNoOfBookings(?int $noCommissionNoOfBookings = null): self
    {
        // validation for constraint: int
        if (!is_null($noCommissionNoOfBookings) && !(is_int($noCommissionNoOfBookings) || ctype_digit($noCommissionNoOfBookings))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noCommissionNoOfBookings, true), gettype($noCommissionNoOfBookings)), __LINE__);
        }
        $this->noCommissionNoOfBookings = $noCommissionNoOfBookings;
        
        return $this;
    }
    /**
     * Get wotPartPercent value
     * @return float|null
     */
    public function getWotPartPercent(): ?float
    {
        return $this->wotPartPercent;
    }
    /**
     * Set wotPartPercent value
     * @param float $wotPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setWotPartPercent(?float $wotPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($wotPartPercent) && !(is_float($wotPartPercent) || is_numeric($wotPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($wotPartPercent, true), gettype($wotPartPercent)), __LINE__);
        }
        $this->wotPartPercent = $wotPartPercent;
        
        return $this;
    }
    /**
     * Get specialPartPercent value
     * @return float|null
     */
    public function getSpecialPartPercent(): ?float
    {
        return $this->specialPartPercent;
    }
    /**
     * Set specialPartPercent value
     * @param float $specialPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setSpecialPartPercent(?float $specialPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($specialPartPercent) && !(is_float($specialPartPercent) || is_numeric($specialPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($specialPartPercent, true), gettype($specialPartPercent)), __LINE__);
        }
        $this->specialPartPercent = $specialPartPercent;
        
        return $this;
    }
    /**
     * Get flightPartPercent value
     * @return float|null
     */
    public function getFlightPartPercent(): ?float
    {
        return $this->flightPartPercent;
    }
    /**
     * Set flightPartPercent value
     * @param float $flightPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setFlightPartPercent(?float $flightPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($flightPartPercent) && !(is_float($flightPartPercent) || is_numeric($flightPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($flightPartPercent, true), gettype($flightPartPercent)), __LINE__);
        }
        $this->flightPartPercent = $flightPartPercent;
        
        return $this;
    }
    /**
     * Get hmrPartPercent value
     * @return float|null
     */
    public function getHmrPartPercent(): ?float
    {
        return $this->hmrPartPercent;
    }
    /**
     * Set hmrPartPercent value
     * @param float $hmrPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setHmrPartPercent(?float $hmrPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($hmrPartPercent) && !(is_float($hmrPartPercent) || is_numeric($hmrPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($hmrPartPercent, true), gettype($hmrPartPercent)), __LINE__);
        }
        $this->hmrPartPercent = $hmrPartPercent;
        
        return $this;
    }
    /**
     * Get noCommissionPartPercent value
     * @return float|null
     */
    public function getNoCommissionPartPercent(): ?float
    {
        return $this->noCommissionPartPercent;
    }
    /**
     * Set noCommissionPartPercent value
     * @param float $noCommissionPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setNoCommissionPartPercent(?float $noCommissionPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($noCommissionPartPercent) && !(is_float($noCommissionPartPercent) || is_numeric($noCommissionPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($noCommissionPartPercent, true), gettype($noCommissionPartPercent)), __LINE__);
        }
        $this->noCommissionPartPercent = $noCommissionPartPercent;
        
        return $this;
    }
    /**
     * Get allBookingsTotalAmount value
     * @return float|null
     */
    public function getAllBookingsTotalAmount(): ?float
    {
        return $this->allBookingsTotalAmount;
    }
    /**
     * Set allBookingsTotalAmount value
     * @param float $allBookingsTotalAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail
     */
    public function setAllBookingsTotalAmount(?float $allBookingsTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($allBookingsTotalAmount) && !(is_float($allBookingsTotalAmount) || is_numeric($allBookingsTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($allBookingsTotalAmount, true), gettype($allBookingsTotalAmount)), __LINE__);
        }
        $this->allBookingsTotalAmount = $allBookingsTotalAmount;
        
        return $this;
    }
}
