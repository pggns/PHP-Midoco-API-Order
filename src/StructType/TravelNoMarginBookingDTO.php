<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelNoMarginBookingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TravelNoMarginBookingDTO extends AbstractStructBase
{
    /**
     * The isCancelbooking
     * @var bool|null
     */
    protected ?bool $isCancelbooking = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The isVoided
     * @var bool|null
     */
    protected ?bool $isVoided = null;
    /**
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The settlementDate
     * @var string|null
     */
    protected ?string $settlementDate = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * Constructor method for TravelNoMarginBookingDTO
     * @uses TravelNoMarginBookingDTO::setIsCancelbooking()
     * @uses TravelNoMarginBookingDTO::setIsStorno()
     * @uses TravelNoMarginBookingDTO::setIsVoided()
     * @uses TravelNoMarginBookingDTO::setJournalId()
     * @uses TravelNoMarginBookingDTO::setOrderId()
     * @uses TravelNoMarginBookingDTO::setSettlementDate()
     * @uses TravelNoMarginBookingDTO::setSettlementType()
     * @uses TravelNoMarginBookingDTO::setTravelNo()
     * @param bool $isCancelbooking
     * @param bool $isStorno
     * @param bool $isVoided
     * @param int $journalId
     * @param int $orderId
     * @param string $settlementDate
     * @param string $settlementType
     * @param string $travelNo
     */
    public function __construct(?bool $isCancelbooking = null, ?bool $isStorno = null, ?bool $isVoided = null, ?int $journalId = null, ?int $orderId = null, ?string $settlementDate = null, ?string $settlementType = null, ?string $travelNo = null)
    {
        $this
            ->setIsCancelbooking($isCancelbooking)
            ->setIsStorno($isStorno)
            ->setIsVoided($isVoided)
            ->setJournalId($journalId)
            ->setOrderId($orderId)
            ->setSettlementDate($settlementDate)
            ->setSettlementType($settlementType)
            ->setTravelNo($travelNo);
    }
    /**
     * Get isCancelbooking value
     * @return bool|null
     */
    public function getIsCancelbooking(): ?bool
    {
        return $this->isCancelbooking;
    }
    /**
     * Set isCancelbooking value
     * @param bool $isCancelbooking
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginBookingDTO
     */
    public function setIsCancelbooking(?bool $isCancelbooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCancelbooking) && !is_bool($isCancelbooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCancelbooking, true), gettype($isCancelbooking)), __LINE__);
        }
        $this->isCancelbooking = $isCancelbooking;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginBookingDTO
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
     * Get isVoided value
     * @return bool|null
     */
    public function getIsVoided(): ?bool
    {
        return $this->isVoided;
    }
    /**
     * Set isVoided value
     * @param bool $isVoided
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginBookingDTO
     */
    public function setIsVoided(?bool $isVoided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoided) && !is_bool($isVoided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoided, true), gettype($isVoided)), __LINE__);
        }
        $this->isVoided = $isVoided;
        
        return $this;
    }
    /**
     * Get journalId value
     * @return int|null
     */
    public function getJournalId(): ?int
    {
        return $this->journalId;
    }
    /**
     * Set journalId value
     * @param int $journalId
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginBookingDTO
     */
    public function setJournalId(?int $journalId = null): self
    {
        // validation for constraint: int
        if (!is_null($journalId) && !(is_int($journalId) || ctype_digit($journalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalId, true), gettype($journalId)), __LINE__);
        }
        $this->journalId = $journalId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginBookingDTO
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
     * Get settlementDate value
     * @return string|null
     */
    public function getSettlementDate(): ?string
    {
        return $this->settlementDate;
    }
    /**
     * Set settlementDate value
     * @param string $settlementDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginBookingDTO
     */
    public function setSettlementDate(?string $settlementDate = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementDate) && !is_string($settlementDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementDate, true), gettype($settlementDate)), __LINE__);
        }
        $this->settlementDate = $settlementDate;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginBookingDTO
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginBookingDTO
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
}
