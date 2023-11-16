<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelNoMarginForSettlTypeDTO StructType
 * @subpackage Structs
 */
class TravelNoMarginForSettlTypeDTO extends AbstractStructBase
{
    /**
     * The calculatedMargin
     * @var float|null
     */
    protected ?float $calculatedMargin = null;
    /**
     * The calculatedNegativeMargin
     * @var float|null
     */
    protected ?float $calculatedNegativeMargin = null;
    /**
     * The calculatedVat
     * @var float|null
     */
    protected ?float $calculatedVat = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
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
     * The sumBuy
     * @var float|null
     */
    protected ?float $sumBuy = null;
    /**
     * The tentative
     * @var bool|null
     */
    protected ?bool $tentative = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * Constructor method for TravelNoMarginForSettlTypeDTO
     * @uses TravelNoMarginForSettlTypeDTO::setCalculatedMargin()
     * @uses TravelNoMarginForSettlTypeDTO::setCalculatedNegativeMargin()
     * @uses TravelNoMarginForSettlTypeDTO::setCalculatedVat()
     * @uses TravelNoMarginForSettlTypeDTO::setCreationTime()
     * @uses TravelNoMarginForSettlTypeDTO::setCreationUser()
     * @uses TravelNoMarginForSettlTypeDTO::setIsStorno()
     * @uses TravelNoMarginForSettlTypeDTO::setJournalId()
     * @uses TravelNoMarginForSettlTypeDTO::setPercent()
     * @uses TravelNoMarginForSettlTypeDTO::setSettlementDate()
     * @uses TravelNoMarginForSettlTypeDTO::setSettlementType()
     * @uses TravelNoMarginForSettlTypeDTO::setSumBuy()
     * @uses TravelNoMarginForSettlTypeDTO::setTentative()
     * @uses TravelNoMarginForSettlTypeDTO::setTravelNo()
     * @param float $calculatedMargin
     * @param float $calculatedNegativeMargin
     * @param float $calculatedVat
     * @param string $creationTime
     * @param int $creationUser
     * @param bool $isStorno
     * @param int $journalId
     * @param float $percent
     * @param string $settlementDate
     * @param string $settlementType
     * @param float $sumBuy
     * @param bool $tentative
     * @param string $travelNo
     */
    public function __construct(?float $calculatedMargin = null, ?float $calculatedNegativeMargin = null, ?float $calculatedVat = null, ?string $creationTime = null, ?int $creationUser = null, ?bool $isStorno = null, ?int $journalId = null, ?float $percent = null, ?string $settlementDate = null, ?string $settlementType = null, ?float $sumBuy = null, ?bool $tentative = null, ?string $travelNo = null)
    {
        $this
            ->setCalculatedMargin($calculatedMargin)
            ->setCalculatedNegativeMargin($calculatedNegativeMargin)
            ->setCalculatedVat($calculatedVat)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setIsStorno($isStorno)
            ->setJournalId($journalId)
            ->setPercent($percent)
            ->setSettlementDate($settlementDate)
            ->setSettlementType($settlementType)
            ->setSumBuy($sumBuy)
            ->setTentative($tentative)
            ->setTravelNo($travelNo);
    }
    /**
     * Get calculatedMargin value
     * @return float|null
     */
    public function getCalculatedMargin(): ?float
    {
        return $this->calculatedMargin;
    }
    /**
     * Set calculatedMargin value
     * @param float $calculatedMargin
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
     */
    public function setCalculatedMargin(?float $calculatedMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMargin) && !(is_float($calculatedMargin) || is_numeric($calculatedMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMargin, true), gettype($calculatedMargin)), __LINE__);
        }
        $this->calculatedMargin = $calculatedMargin;
        
        return $this;
    }
    /**
     * Get calculatedNegativeMargin value
     * @return float|null
     */
    public function getCalculatedNegativeMargin(): ?float
    {
        return $this->calculatedNegativeMargin;
    }
    /**
     * Set calculatedNegativeMargin value
     * @param float $calculatedNegativeMargin
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
     */
    public function setCalculatedNegativeMargin(?float $calculatedNegativeMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedNegativeMargin) && !(is_float($calculatedNegativeMargin) || is_numeric($calculatedNegativeMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedNegativeMargin, true), gettype($calculatedNegativeMargin)), __LINE__);
        }
        $this->calculatedNegativeMargin = $calculatedNegativeMargin;
        
        return $this;
    }
    /**
     * Get calculatedVat value
     * @return float|null
     */
    public function getCalculatedVat(): ?float
    {
        return $this->calculatedVat;
    }
    /**
     * Set calculatedVat value
     * @param float $calculatedVat
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
     */
    public function setCalculatedVat(?float $calculatedVat = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedVat) && !(is_float($calculatedVat) || is_numeric($calculatedVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedVat, true), gettype($calculatedVat)), __LINE__);
        }
        $this->calculatedVat = $calculatedVat;
        
        return $this;
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
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
     * Get percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }
    /**
     * Set percent value
     * @param float $percent
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->percent = $percent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
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
     * Get sumBuy value
     * @return float|null
     */
    public function getSumBuy(): ?float
    {
        return $this->sumBuy;
    }
    /**
     * Set sumBuy value
     * @param float $sumBuy
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
     */
    public function setSumBuy(?float $sumBuy = null): self
    {
        // validation for constraint: float
        if (!is_null($sumBuy) && !(is_float($sumBuy) || is_numeric($sumBuy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumBuy, true), gettype($sumBuy)), __LINE__);
        }
        $this->sumBuy = $sumBuy;
        
        return $this;
    }
    /**
     * Get tentative value
     * @return bool|null
     */
    public function getTentative(): ?bool
    {
        return $this->tentative;
    }
    /**
     * Set tentative value
     * @param bool $tentative
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
     */
    public function setTentative(?bool $tentative = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tentative) && !is_bool($tentative)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tentative, true), gettype($tentative)), __LINE__);
        }
        $this->tentative = $tentative;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNoMarginForSettlTypeDTO
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
