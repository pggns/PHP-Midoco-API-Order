<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MdcSettlementBillingRevenueDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MdcSettlementBillingRevenueDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The amountProPassenger
     * @var float|null
     */
    protected ?float $amountProPassenger = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The mdcSettlementBillingId
     * @var int|null
     */
    protected ?int $mdcSettlementBillingId = null;
    /**
     * The noOfPassengers
     * @var int|null
     */
    protected ?int $noOfPassengers = null;
    /**
     * The percentFromAmount
     * @var float|null
     */
    protected ?float $percentFromAmount = null;
    /**
     * The settlementMonth
     * @var string|null
     */
    protected ?string $settlementMonth = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MdcSettlementBillingRevenueDTO
     * @uses MdcSettlementBillingRevenueDTO::setAmount()
     * @uses MdcSettlementBillingRevenueDTO::setAmountProPassenger()
     * @uses MdcSettlementBillingRevenueDTO::setId()
     * @uses MdcSettlementBillingRevenueDTO::setMdcSettlementBillingId()
     * @uses MdcSettlementBillingRevenueDTO::setNoOfPassengers()
     * @uses MdcSettlementBillingRevenueDTO::setPercentFromAmount()
     * @uses MdcSettlementBillingRevenueDTO::setSettlementMonth()
     * @uses MdcSettlementBillingRevenueDTO::setStatus()
     * @uses MdcSettlementBillingRevenueDTO::setSupplierId()
     * @uses MdcSettlementBillingRevenueDTO::setUnitName()
     * @param float $amount
     * @param float $amountProPassenger
     * @param int $id
     * @param int $mdcSettlementBillingId
     * @param int $noOfPassengers
     * @param float $percentFromAmount
     * @param string $settlementMonth
     * @param string $status
     * @param string $supplierId
     * @param string $unitName
     */
    public function __construct(?float $amount = null, ?float $amountProPassenger = null, ?int $id = null, ?int $mdcSettlementBillingId = null, ?int $noOfPassengers = null, ?float $percentFromAmount = null, ?string $settlementMonth = null, ?string $status = null, ?string $supplierId = null, ?string $unitName = null)
    {
        $this
            ->setAmount($amount)
            ->setAmountProPassenger($amountProPassenger)
            ->setId($id)
            ->setMdcSettlementBillingId($mdcSettlementBillingId)
            ->setNoOfPassengers($noOfPassengers)
            ->setPercentFromAmount($percentFromAmount)
            ->setSettlementMonth($settlementMonth)
            ->setStatus($status)
            ->setSupplierId($supplierId)
            ->setUnitName($unitName);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get amountProPassenger value
     * @return float|null
     */
    public function getAmountProPassenger(): ?float
    {
        return $this->amountProPassenger;
    }
    /**
     * Set amountProPassenger value
     * @param float $amountProPassenger
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO
     */
    public function setAmountProPassenger(?float $amountProPassenger = null): self
    {
        // validation for constraint: float
        if (!is_null($amountProPassenger) && !(is_float($amountProPassenger) || is_numeric($amountProPassenger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountProPassenger, true), gettype($amountProPassenger)), __LINE__);
        }
        $this->amountProPassenger = $amountProPassenger;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get mdcSettlementBillingId value
     * @return int|null
     */
    public function getMdcSettlementBillingId(): ?int
    {
        return $this->mdcSettlementBillingId;
    }
    /**
     * Set mdcSettlementBillingId value
     * @param int $mdcSettlementBillingId
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO
     */
    public function setMdcSettlementBillingId(?int $mdcSettlementBillingId = null): self
    {
        // validation for constraint: int
        if (!is_null($mdcSettlementBillingId) && !(is_int($mdcSettlementBillingId) || ctype_digit($mdcSettlementBillingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mdcSettlementBillingId, true), gettype($mdcSettlementBillingId)), __LINE__);
        }
        $this->mdcSettlementBillingId = $mdcSettlementBillingId;
        
        return $this;
    }
    /**
     * Get noOfPassengers value
     * @return int|null
     */
    public function getNoOfPassengers(): ?int
    {
        return $this->noOfPassengers;
    }
    /**
     * Set noOfPassengers value
     * @param int $noOfPassengers
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO
     */
    public function setNoOfPassengers(?int $noOfPassengers = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPassengers) && !(is_int($noOfPassengers) || ctype_digit($noOfPassengers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPassengers, true), gettype($noOfPassengers)), __LINE__);
        }
        $this->noOfPassengers = $noOfPassengers;
        
        return $this;
    }
    /**
     * Get percentFromAmount value
     * @return float|null
     */
    public function getPercentFromAmount(): ?float
    {
        return $this->percentFromAmount;
    }
    /**
     * Set percentFromAmount value
     * @param float $percentFromAmount
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO
     */
    public function setPercentFromAmount(?float $percentFromAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($percentFromAmount) && !(is_float($percentFromAmount) || is_numeric($percentFromAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentFromAmount, true), gettype($percentFromAmount)), __LINE__);
        }
        $this->percentFromAmount = $percentFromAmount;
        
        return $this;
    }
    /**
     * Get settlementMonth value
     * @return string|null
     */
    public function getSettlementMonth(): ?string
    {
        return $this->settlementMonth;
    }
    /**
     * Set settlementMonth value
     * @param string $settlementMonth
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO
     */
    public function setSettlementMonth(?string $settlementMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementMonth) && !is_string($settlementMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementMonth, true), gettype($settlementMonth)), __LINE__);
        }
        $this->settlementMonth = $settlementMonth;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO
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
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
