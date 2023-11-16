<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelnoPurchaseAssignmentDTO StructType
 * @subpackage Structs
 */
class TravelnoPurchaseAssignmentDTO extends AbstractStructBase
{
    /**
     * The automaticallySplit
     * @var bool|null
     */
    protected ?bool $automaticallySplit = null;
    /**
     * The bookedSupplierInvoice
     * @var float|null
     */
    protected ?float $bookedSupplierInvoice = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The manuallySplit
     * @var bool|null
     */
    protected ?bool $manuallySplit = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
    /**
     * The revenueId
     * @var int|null
     */
    protected ?int $revenueId = null;
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
     * Constructor method for TravelnoPurchaseAssignmentDTO
     * @uses TravelnoPurchaseAssignmentDTO::setAutomaticallySplit()
     * @uses TravelnoPurchaseAssignmentDTO::setBookedSupplierInvoice()
     * @uses TravelnoPurchaseAssignmentDTO::setItemId()
     * @uses TravelnoPurchaseAssignmentDTO::setManuallySplit()
     * @uses TravelnoPurchaseAssignmentDTO::setPercent()
     * @uses TravelnoPurchaseAssignmentDTO::setRevenueId()
     * @uses TravelnoPurchaseAssignmentDTO::setSettlementType()
     * @uses TravelnoPurchaseAssignmentDTO::setTravelNo()
     * @param bool $automaticallySplit
     * @param float $bookedSupplierInvoice
     * @param int $itemId
     * @param bool $manuallySplit
     * @param float $percent
     * @param int $revenueId
     * @param string $settlementType
     * @param string $travelNo
     */
    public function __construct(?bool $automaticallySplit = null, ?float $bookedSupplierInvoice = null, ?int $itemId = null, ?bool $manuallySplit = null, ?float $percent = null, ?int $revenueId = null, ?string $settlementType = null, ?string $travelNo = null)
    {
        $this
            ->setAutomaticallySplit($automaticallySplit)
            ->setBookedSupplierInvoice($bookedSupplierInvoice)
            ->setItemId($itemId)
            ->setManuallySplit($manuallySplit)
            ->setPercent($percent)
            ->setRevenueId($revenueId)
            ->setSettlementType($settlementType)
            ->setTravelNo($travelNo);
    }
    /**
     * Get automaticallySplit value
     * @return bool|null
     */
    public function getAutomaticallySplit(): ?bool
    {
        return $this->automaticallySplit;
    }
    /**
     * Set automaticallySplit value
     * @param bool $automaticallySplit
     * @return \Pggns\MidocoApi\Order\StructType\TravelnoPurchaseAssignmentDTO
     */
    public function setAutomaticallySplit(?bool $automaticallySplit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($automaticallySplit) && !is_bool($automaticallySplit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automaticallySplit, true), gettype($automaticallySplit)), __LINE__);
        }
        $this->automaticallySplit = $automaticallySplit;
        
        return $this;
    }
    /**
     * Get bookedSupplierInvoice value
     * @return float|null
     */
    public function getBookedSupplierInvoice(): ?float
    {
        return $this->bookedSupplierInvoice;
    }
    /**
     * Set bookedSupplierInvoice value
     * @param float $bookedSupplierInvoice
     * @return \Pggns\MidocoApi\Order\StructType\TravelnoPurchaseAssignmentDTO
     */
    public function setBookedSupplierInvoice(?float $bookedSupplierInvoice = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedSupplierInvoice) && !(is_float($bookedSupplierInvoice) || is_numeric($bookedSupplierInvoice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedSupplierInvoice, true), gettype($bookedSupplierInvoice)), __LINE__);
        }
        $this->bookedSupplierInvoice = $bookedSupplierInvoice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelnoPurchaseAssignmentDTO
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
     * Get manuallySplit value
     * @return bool|null
     */
    public function getManuallySplit(): ?bool
    {
        return $this->manuallySplit;
    }
    /**
     * Set manuallySplit value
     * @param bool $manuallySplit
     * @return \Pggns\MidocoApi\Order\StructType\TravelnoPurchaseAssignmentDTO
     */
    public function setManuallySplit(?bool $manuallySplit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manuallySplit) && !is_bool($manuallySplit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manuallySplit, true), gettype($manuallySplit)), __LINE__);
        }
        $this->manuallySplit = $manuallySplit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelnoPurchaseAssignmentDTO
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
     * Get revenueId value
     * @return int|null
     */
    public function getRevenueId(): ?int
    {
        return $this->revenueId;
    }
    /**
     * Set revenueId value
     * @param int $revenueId
     * @return \Pggns\MidocoApi\Order\StructType\TravelnoPurchaseAssignmentDTO
     */
    public function setRevenueId(?int $revenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($revenueId) && !(is_int($revenueId) || ctype_digit($revenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($revenueId, true), gettype($revenueId)), __LINE__);
        }
        $this->revenueId = $revenueId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelnoPurchaseAssignmentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelnoPurchaseAssignmentDTO
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
