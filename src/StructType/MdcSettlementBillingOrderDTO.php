<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MdcSettlementBillingOrderDTO StructType
 * @subpackage Structs
 */
class MdcSettlementBillingOrderDTO extends AbstractStructBase
{
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
     * The noOfOrders
     * @var int|null
     */
    protected ?int $noOfOrders = null;
    /**
     * The noOfPrintedInvoices
     * @var int|null
     */
    protected ?int $noOfPrintedInvoices = null;
    /**
     * The settlementMonth
     * @var string|null
     */
    protected ?string $settlementMonth = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MdcSettlementBillingOrderDTO
     * @uses MdcSettlementBillingOrderDTO::setId()
     * @uses MdcSettlementBillingOrderDTO::setMdcSettlementBillingId()
     * @uses MdcSettlementBillingOrderDTO::setNoOfOrders()
     * @uses MdcSettlementBillingOrderDTO::setNoOfPrintedInvoices()
     * @uses MdcSettlementBillingOrderDTO::setSettlementMonth()
     * @uses MdcSettlementBillingOrderDTO::setTotalAmount()
     * @uses MdcSettlementBillingOrderDTO::setUnitName()
     * @param int $id
     * @param int $mdcSettlementBillingId
     * @param int $noOfOrders
     * @param int $noOfPrintedInvoices
     * @param string $settlementMonth
     * @param float $totalAmount
     * @param string $unitName
     */
    public function __construct(?int $id = null, ?int $mdcSettlementBillingId = null, ?int $noOfOrders = null, ?int $noOfPrintedInvoices = null, ?string $settlementMonth = null, ?float $totalAmount = null, ?string $unitName = null)
    {
        $this
            ->setId($id)
            ->setMdcSettlementBillingId($mdcSettlementBillingId)
            ->setNoOfOrders($noOfOrders)
            ->setNoOfPrintedInvoices($noOfPrintedInvoices)
            ->setSettlementMonth($settlementMonth)
            ->setTotalAmount($totalAmount)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO
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
     * Get noOfOrders value
     * @return int|null
     */
    public function getNoOfOrders(): ?int
    {
        return $this->noOfOrders;
    }
    /**
     * Set noOfOrders value
     * @param int $noOfOrders
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO
     */
    public function setNoOfOrders(?int $noOfOrders = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfOrders) && !(is_int($noOfOrders) || ctype_digit($noOfOrders))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfOrders, true), gettype($noOfOrders)), __LINE__);
        }
        $this->noOfOrders = $noOfOrders;
        
        return $this;
    }
    /**
     * Get noOfPrintedInvoices value
     * @return int|null
     */
    public function getNoOfPrintedInvoices(): ?int
    {
        return $this->noOfPrintedInvoices;
    }
    /**
     * Set noOfPrintedInvoices value
     * @param int $noOfPrintedInvoices
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO
     */
    public function setNoOfPrintedInvoices(?int $noOfPrintedInvoices = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPrintedInvoices) && !(is_int($noOfPrintedInvoices) || ctype_digit($noOfPrintedInvoices))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPrintedInvoices, true), gettype($noOfPrintedInvoices)), __LINE__);
        }
        $this->noOfPrintedInvoices = $noOfPrintedInvoices;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO
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
