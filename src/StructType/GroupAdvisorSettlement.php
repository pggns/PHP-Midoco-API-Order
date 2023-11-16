<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupAdvisorSettlement StructType
 * @subpackage Structs
 */
class GroupAdvisorSettlement extends AbstractStructBase
{
    /**
     * The GroupAdvisorSettlementDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: GroupAdvisorSettlementDetail
     * @var \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail[]
     */
    protected array $GroupAdvisorSettlementDetail = [];
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
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The fromDate
     * @var string|null
     */
    protected ?string $fromDate = null;
    /**
     * The toDate
     * @var string|null
     */
    protected ?string $toDate = null;
    /**
     * The wotTotalAmount
     * @var float|null
     */
    protected ?float $wotTotalAmount = null;
    /**
     * The specialTotalAmount
     * @var float|null
     */
    protected ?float $specialTotalAmount = null;
    /**
     * The flightTotalAmount
     * @var float|null
     */
    protected ?float $flightTotalAmount = null;
    /**
     * The hmrTotalAmount
     * @var float|null
     */
    protected ?float $hmrTotalAmount = null;
    /**
     * The noCommissionTotalAmount
     * @var float|null
     */
    protected ?float $noCommissionTotalAmount = null;
    /**
     * The totalNoOfBookings
     * @var int|null
     */
    protected ?int $totalNoOfBookings = null;
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
     * The wotTotalPartPercent
     * @var float|null
     */
    protected ?float $wotTotalPartPercent = null;
    /**
     * The specialTotalPartPercent
     * @var float|null
     */
    protected ?float $specialTotalPartPercent = null;
    /**
     * The flightTotalPartPercent
     * @var float|null
     */
    protected ?float $flightTotalPartPercent = null;
    /**
     * The hmrTotalPartPercent
     * @var float|null
     */
    protected ?float $hmrTotalPartPercent = null;
    /**
     * The noCommissionTotalPartPercent
     * @var float|null
     */
    protected ?float $noCommissionTotalPartPercent = null;
    /**
     * The allBookingsTotalAmount
     * @var float|null
     */
    protected ?float $allBookingsTotalAmount = null;
    /**
     * Constructor method for GroupAdvisorSettlement
     * @uses GroupAdvisorSettlement::setGroupAdvisorSettlementDetail()
     * @uses GroupAdvisorSettlement::setMediatorId()
     * @uses GroupAdvisorSettlement::setMediatorName()
     * @uses GroupAdvisorSettlement::setTotalAmount()
     * @uses GroupAdvisorSettlement::setCommissionAmount()
     * @uses GroupAdvisorSettlement::setFromDate()
     * @uses GroupAdvisorSettlement::setToDate()
     * @uses GroupAdvisorSettlement::setWotTotalAmount()
     * @uses GroupAdvisorSettlement::setSpecialTotalAmount()
     * @uses GroupAdvisorSettlement::setFlightTotalAmount()
     * @uses GroupAdvisorSettlement::setHmrTotalAmount()
     * @uses GroupAdvisorSettlement::setNoCommissionTotalAmount()
     * @uses GroupAdvisorSettlement::setTotalNoOfBookings()
     * @uses GroupAdvisorSettlement::setSpecialNoOfBookings()
     * @uses GroupAdvisorSettlement::setWotNoOfBookings()
     * @uses GroupAdvisorSettlement::setFlightNoOfBookings()
     * @uses GroupAdvisorSettlement::setHmrNoOfBookings()
     * @uses GroupAdvisorSettlement::setNoCommissionNoOfBookings()
     * @uses GroupAdvisorSettlement::setWotTotalPartPercent()
     * @uses GroupAdvisorSettlement::setSpecialTotalPartPercent()
     * @uses GroupAdvisorSettlement::setFlightTotalPartPercent()
     * @uses GroupAdvisorSettlement::setHmrTotalPartPercent()
     * @uses GroupAdvisorSettlement::setNoCommissionTotalPartPercent()
     * @uses GroupAdvisorSettlement::setAllBookingsTotalAmount()
     * @param \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail[] $groupAdvisorSettlementDetail
     * @param string $mediatorId
     * @param string $mediatorName
     * @param float $totalAmount
     * @param float $commissionAmount
     * @param string $fromDate
     * @param string $toDate
     * @param float $wotTotalAmount
     * @param float $specialTotalAmount
     * @param float $flightTotalAmount
     * @param float $hmrTotalAmount
     * @param float $noCommissionTotalAmount
     * @param int $totalNoOfBookings
     * @param int $specialNoOfBookings
     * @param int $wotNoOfBookings
     * @param int $flightNoOfBookings
     * @param int $hmrNoOfBookings
     * @param int $noCommissionNoOfBookings
     * @param float $wotTotalPartPercent
     * @param float $specialTotalPartPercent
     * @param float $flightTotalPartPercent
     * @param float $hmrTotalPartPercent
     * @param float $noCommissionTotalPartPercent
     * @param float $allBookingsTotalAmount
     */
    public function __construct(array $groupAdvisorSettlementDetail = [], ?string $mediatorId = null, ?string $mediatorName = null, ?float $totalAmount = null, ?float $commissionAmount = null, ?string $fromDate = null, ?string $toDate = null, ?float $wotTotalAmount = null, ?float $specialTotalAmount = null, ?float $flightTotalAmount = null, ?float $hmrTotalAmount = null, ?float $noCommissionTotalAmount = null, ?int $totalNoOfBookings = null, ?int $specialNoOfBookings = null, ?int $wotNoOfBookings = null, ?int $flightNoOfBookings = null, ?int $hmrNoOfBookings = null, ?int $noCommissionNoOfBookings = null, ?float $wotTotalPartPercent = null, ?float $specialTotalPartPercent = null, ?float $flightTotalPartPercent = null, ?float $hmrTotalPartPercent = null, ?float $noCommissionTotalPartPercent = null, ?float $allBookingsTotalAmount = null)
    {
        $this
            ->setGroupAdvisorSettlementDetail($groupAdvisorSettlementDetail)
            ->setMediatorId($mediatorId)
            ->setMediatorName($mediatorName)
            ->setTotalAmount($totalAmount)
            ->setCommissionAmount($commissionAmount)
            ->setFromDate($fromDate)
            ->setToDate($toDate)
            ->setWotTotalAmount($wotTotalAmount)
            ->setSpecialTotalAmount($specialTotalAmount)
            ->setFlightTotalAmount($flightTotalAmount)
            ->setHmrTotalAmount($hmrTotalAmount)
            ->setNoCommissionTotalAmount($noCommissionTotalAmount)
            ->setTotalNoOfBookings($totalNoOfBookings)
            ->setSpecialNoOfBookings($specialNoOfBookings)
            ->setWotNoOfBookings($wotNoOfBookings)
            ->setFlightNoOfBookings($flightNoOfBookings)
            ->setHmrNoOfBookings($hmrNoOfBookings)
            ->setNoCommissionNoOfBookings($noCommissionNoOfBookings)
            ->setWotTotalPartPercent($wotTotalPartPercent)
            ->setSpecialTotalPartPercent($specialTotalPartPercent)
            ->setFlightTotalPartPercent($flightTotalPartPercent)
            ->setHmrTotalPartPercent($hmrTotalPartPercent)
            ->setNoCommissionTotalPartPercent($noCommissionTotalPartPercent)
            ->setAllBookingsTotalAmount($allBookingsTotalAmount);
    }
    /**
     * Get GroupAdvisorSettlementDetail value
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail[]
     */
    public function getGroupAdvisorSettlementDetail(): array
    {
        return $this->GroupAdvisorSettlementDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupAdvisorSettlementDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupAdvisorSettlementDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupAdvisorSettlementDetailForArrayConstraintsFromSetGroupAdvisorSettlementDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $groupAdvisorSettlementGroupAdvisorSettlementDetailItem) {
            // validation for constraint: itemType
            if (!$groupAdvisorSettlementGroupAdvisorSettlementDetailItem instanceof \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail) {
                $invalidValues[] = is_object($groupAdvisorSettlementGroupAdvisorSettlementDetailItem) ? get_class($groupAdvisorSettlementGroupAdvisorSettlementDetailItem) : sprintf('%s(%s)', gettype($groupAdvisorSettlementGroupAdvisorSettlementDetailItem), var_export($groupAdvisorSettlementGroupAdvisorSettlementDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GroupAdvisorSettlementDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GroupAdvisorSettlementDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail[] $groupAdvisorSettlementDetail
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setGroupAdvisorSettlementDetail(array $groupAdvisorSettlementDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($groupAdvisorSettlementDetailArrayErrorMessage = self::validateGroupAdvisorSettlementDetailForArrayConstraintsFromSetGroupAdvisorSettlementDetail($groupAdvisorSettlementDetail))) {
            throw new InvalidArgumentException($groupAdvisorSettlementDetailArrayErrorMessage, __LINE__);
        }
        $this->GroupAdvisorSettlementDetail = $groupAdvisorSettlementDetail;
        
        return $this;
    }
    /**
     * Add item to GroupAdvisorSettlementDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail $item
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function addToGroupAdvisorSettlementDetail(\Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail) {
            throw new InvalidArgumentException(sprintf('The GroupAdvisorSettlementDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GroupAdvisorSettlementDetail[] = $item;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
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
     * Get fromDate value
     * @return string|null
     */
    public function getFromDate(): ?string
    {
        return $this->fromDate;
    }
    /**
     * Set fromDate value
     * @param string $fromDate
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setFromDate(?string $fromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
        }
        $this->fromDate = $fromDate;
        
        return $this;
    }
    /**
     * Get toDate value
     * @return string|null
     */
    public function getToDate(): ?string
    {
        return $this->toDate;
    }
    /**
     * Set toDate value
     * @param string $toDate
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setToDate(?string $toDate = null): self
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDate, true), gettype($toDate)), __LINE__);
        }
        $this->toDate = $toDate;
        
        return $this;
    }
    /**
     * Get wotTotalAmount value
     * @return float|null
     */
    public function getWotTotalAmount(): ?float
    {
        return $this->wotTotalAmount;
    }
    /**
     * Set wotTotalAmount value
     * @param float $wotTotalAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setWotTotalAmount(?float $wotTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($wotTotalAmount) && !(is_float($wotTotalAmount) || is_numeric($wotTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($wotTotalAmount, true), gettype($wotTotalAmount)), __LINE__);
        }
        $this->wotTotalAmount = $wotTotalAmount;
        
        return $this;
    }
    /**
     * Get specialTotalAmount value
     * @return float|null
     */
    public function getSpecialTotalAmount(): ?float
    {
        return $this->specialTotalAmount;
    }
    /**
     * Set specialTotalAmount value
     * @param float $specialTotalAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setSpecialTotalAmount(?float $specialTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($specialTotalAmount) && !(is_float($specialTotalAmount) || is_numeric($specialTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($specialTotalAmount, true), gettype($specialTotalAmount)), __LINE__);
        }
        $this->specialTotalAmount = $specialTotalAmount;
        
        return $this;
    }
    /**
     * Get flightTotalAmount value
     * @return float|null
     */
    public function getFlightTotalAmount(): ?float
    {
        return $this->flightTotalAmount;
    }
    /**
     * Set flightTotalAmount value
     * @param float $flightTotalAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setFlightTotalAmount(?float $flightTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($flightTotalAmount) && !(is_float($flightTotalAmount) || is_numeric($flightTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($flightTotalAmount, true), gettype($flightTotalAmount)), __LINE__);
        }
        $this->flightTotalAmount = $flightTotalAmount;
        
        return $this;
    }
    /**
     * Get hmrTotalAmount value
     * @return float|null
     */
    public function getHmrTotalAmount(): ?float
    {
        return $this->hmrTotalAmount;
    }
    /**
     * Set hmrTotalAmount value
     * @param float $hmrTotalAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setHmrTotalAmount(?float $hmrTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($hmrTotalAmount) && !(is_float($hmrTotalAmount) || is_numeric($hmrTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($hmrTotalAmount, true), gettype($hmrTotalAmount)), __LINE__);
        }
        $this->hmrTotalAmount = $hmrTotalAmount;
        
        return $this;
    }
    /**
     * Get noCommissionTotalAmount value
     * @return float|null
     */
    public function getNoCommissionTotalAmount(): ?float
    {
        return $this->noCommissionTotalAmount;
    }
    /**
     * Set noCommissionTotalAmount value
     * @param float $noCommissionTotalAmount
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setNoCommissionTotalAmount(?float $noCommissionTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($noCommissionTotalAmount) && !(is_float($noCommissionTotalAmount) || is_numeric($noCommissionTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($noCommissionTotalAmount, true), gettype($noCommissionTotalAmount)), __LINE__);
        }
        $this->noCommissionTotalAmount = $noCommissionTotalAmount;
        
        return $this;
    }
    /**
     * Get totalNoOfBookings value
     * @return int|null
     */
    public function getTotalNoOfBookings(): ?int
    {
        return $this->totalNoOfBookings;
    }
    /**
     * Set totalNoOfBookings value
     * @param int $totalNoOfBookings
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setTotalNoOfBookings(?int $totalNoOfBookings = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNoOfBookings) && !(is_int($totalNoOfBookings) || ctype_digit($totalNoOfBookings))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNoOfBookings, true), gettype($totalNoOfBookings)), __LINE__);
        }
        $this->totalNoOfBookings = $totalNoOfBookings;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
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
     * Get wotTotalPartPercent value
     * @return float|null
     */
    public function getWotTotalPartPercent(): ?float
    {
        return $this->wotTotalPartPercent;
    }
    /**
     * Set wotTotalPartPercent value
     * @param float $wotTotalPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setWotTotalPartPercent(?float $wotTotalPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($wotTotalPartPercent) && !(is_float($wotTotalPartPercent) || is_numeric($wotTotalPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($wotTotalPartPercent, true), gettype($wotTotalPartPercent)), __LINE__);
        }
        $this->wotTotalPartPercent = $wotTotalPartPercent;
        
        return $this;
    }
    /**
     * Get specialTotalPartPercent value
     * @return float|null
     */
    public function getSpecialTotalPartPercent(): ?float
    {
        return $this->specialTotalPartPercent;
    }
    /**
     * Set specialTotalPartPercent value
     * @param float $specialTotalPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setSpecialTotalPartPercent(?float $specialTotalPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($specialTotalPartPercent) && !(is_float($specialTotalPartPercent) || is_numeric($specialTotalPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($specialTotalPartPercent, true), gettype($specialTotalPartPercent)), __LINE__);
        }
        $this->specialTotalPartPercent = $specialTotalPartPercent;
        
        return $this;
    }
    /**
     * Get flightTotalPartPercent value
     * @return float|null
     */
    public function getFlightTotalPartPercent(): ?float
    {
        return $this->flightTotalPartPercent;
    }
    /**
     * Set flightTotalPartPercent value
     * @param float $flightTotalPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setFlightTotalPartPercent(?float $flightTotalPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($flightTotalPartPercent) && !(is_float($flightTotalPartPercent) || is_numeric($flightTotalPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($flightTotalPartPercent, true), gettype($flightTotalPartPercent)), __LINE__);
        }
        $this->flightTotalPartPercent = $flightTotalPartPercent;
        
        return $this;
    }
    /**
     * Get hmrTotalPartPercent value
     * @return float|null
     */
    public function getHmrTotalPartPercent(): ?float
    {
        return $this->hmrTotalPartPercent;
    }
    /**
     * Set hmrTotalPartPercent value
     * @param float $hmrTotalPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setHmrTotalPartPercent(?float $hmrTotalPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($hmrTotalPartPercent) && !(is_float($hmrTotalPartPercent) || is_numeric($hmrTotalPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($hmrTotalPartPercent, true), gettype($hmrTotalPartPercent)), __LINE__);
        }
        $this->hmrTotalPartPercent = $hmrTotalPartPercent;
        
        return $this;
    }
    /**
     * Get noCommissionTotalPartPercent value
     * @return float|null
     */
    public function getNoCommissionTotalPartPercent(): ?float
    {
        return $this->noCommissionTotalPartPercent;
    }
    /**
     * Set noCommissionTotalPartPercent value
     * @param float $noCommissionTotalPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
     */
    public function setNoCommissionTotalPartPercent(?float $noCommissionTotalPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($noCommissionTotalPartPercent) && !(is_float($noCommissionTotalPartPercent) || is_numeric($noCommissionTotalPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($noCommissionTotalPartPercent, true), gettype($noCommissionTotalPartPercent)), __LINE__);
        }
        $this->noCommissionTotalPartPercent = $noCommissionTotalPartPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlement
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
