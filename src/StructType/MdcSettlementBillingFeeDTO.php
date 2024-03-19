<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MdcSettlementBillingFeeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MdcSettlementBillingFeeDTO extends AbstractStructBase
{
    /**
     * The additionalBatches
     * @var int|null
     */
    protected ?int $additionalBatches = null;
    /**
     * The dynamicAmount
     * @var float|null
     */
    protected ?float $dynamicAmount = null;
    /**
     * The flatRateAmount
     * @var float|null
     */
    protected ?float $flatRateAmount = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The includedQuantity
     * @var int|null
     */
    protected ?int $includedQuantity = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The mdcSettlementBillingId
     * @var int|null
     */
    protected ?int $mdcSettlementBillingId = null;
    /**
     * The noOfItems
     * @var int|null
     */
    protected ?int $noOfItems = null;
    /**
     * The period
     * @var string|null
     */
    protected ?string $period = null;
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
     * Constructor method for MdcSettlementBillingFeeDTO
     * @uses MdcSettlementBillingFeeDTO::setAdditionalBatches()
     * @uses MdcSettlementBillingFeeDTO::setDynamicAmount()
     * @uses MdcSettlementBillingFeeDTO::setFlatRateAmount()
     * @uses MdcSettlementBillingFeeDTO::setId()
     * @uses MdcSettlementBillingFeeDTO::setIncludedQuantity()
     * @uses MdcSettlementBillingFeeDTO::setItemType()
     * @uses MdcSettlementBillingFeeDTO::setMdcSettlementBillingId()
     * @uses MdcSettlementBillingFeeDTO::setNoOfItems()
     * @uses MdcSettlementBillingFeeDTO::setPeriod()
     * @uses MdcSettlementBillingFeeDTO::setSettlementMonth()
     * @uses MdcSettlementBillingFeeDTO::setTotalAmount()
     * @uses MdcSettlementBillingFeeDTO::setUnitName()
     * @param int $additionalBatches
     * @param float $dynamicAmount
     * @param float $flatRateAmount
     * @param int $id
     * @param int $includedQuantity
     * @param string $itemType
     * @param int $mdcSettlementBillingId
     * @param int $noOfItems
     * @param string $period
     * @param string $settlementMonth
     * @param float $totalAmount
     * @param string $unitName
     */
    public function __construct(?int $additionalBatches = null, ?float $dynamicAmount = null, ?float $flatRateAmount = null, ?int $id = null, ?int $includedQuantity = null, ?string $itemType = null, ?int $mdcSettlementBillingId = null, ?int $noOfItems = null, ?string $period = null, ?string $settlementMonth = null, ?float $totalAmount = null, ?string $unitName = null)
    {
        $this
            ->setAdditionalBatches($additionalBatches)
            ->setDynamicAmount($dynamicAmount)
            ->setFlatRateAmount($flatRateAmount)
            ->setId($id)
            ->setIncludedQuantity($includedQuantity)
            ->setItemType($itemType)
            ->setMdcSettlementBillingId($mdcSettlementBillingId)
            ->setNoOfItems($noOfItems)
            ->setPeriod($period)
            ->setSettlementMonth($settlementMonth)
            ->setTotalAmount($totalAmount)
            ->setUnitName($unitName);
    }
    /**
     * Get additionalBatches value
     * @return int|null
     */
    public function getAdditionalBatches(): ?int
    {
        return $this->additionalBatches;
    }
    /**
     * Set additionalBatches value
     * @param int $additionalBatches
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
     */
    public function setAdditionalBatches(?int $additionalBatches = null): self
    {
        // validation for constraint: int
        if (!is_null($additionalBatches) && !(is_int($additionalBatches) || ctype_digit($additionalBatches))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($additionalBatches, true), gettype($additionalBatches)), __LINE__);
        }
        $this->additionalBatches = $additionalBatches;
        
        return $this;
    }
    /**
     * Get dynamicAmount value
     * @return float|null
     */
    public function getDynamicAmount(): ?float
    {
        return $this->dynamicAmount;
    }
    /**
     * Set dynamicAmount value
     * @param float $dynamicAmount
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
     */
    public function setDynamicAmount(?float $dynamicAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($dynamicAmount) && !(is_float($dynamicAmount) || is_numeric($dynamicAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dynamicAmount, true), gettype($dynamicAmount)), __LINE__);
        }
        $this->dynamicAmount = $dynamicAmount;
        
        return $this;
    }
    /**
     * Get flatRateAmount value
     * @return float|null
     */
    public function getFlatRateAmount(): ?float
    {
        return $this->flatRateAmount;
    }
    /**
     * Set flatRateAmount value
     * @param float $flatRateAmount
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
     */
    public function setFlatRateAmount(?float $flatRateAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($flatRateAmount) && !(is_float($flatRateAmount) || is_numeric($flatRateAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($flatRateAmount, true), gettype($flatRateAmount)), __LINE__);
        }
        $this->flatRateAmount = $flatRateAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
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
     * Get includedQuantity value
     * @return int|null
     */
    public function getIncludedQuantity(): ?int
    {
        return $this->includedQuantity;
    }
    /**
     * Set includedQuantity value
     * @param int $includedQuantity
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
     */
    public function setIncludedQuantity(?int $includedQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($includedQuantity) && !(is_int($includedQuantity) || ctype_digit($includedQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($includedQuantity, true), gettype($includedQuantity)), __LINE__);
        }
        $this->includedQuantity = $includedQuantity;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
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
     * Get noOfItems value
     * @return int|null
     */
    public function getNoOfItems(): ?int
    {
        return $this->noOfItems;
    }
    /**
     * Set noOfItems value
     * @param int $noOfItems
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
     */
    public function setNoOfItems(?int $noOfItems = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfItems) && !(is_int($noOfItems) || ctype_digit($noOfItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfItems, true), gettype($noOfItems)), __LINE__);
        }
        $this->noOfItems = $noOfItems;
        
        return $this;
    }
    /**
     * Get period value
     * @return string|null
     */
    public function getPeriod(): ?string
    {
        return $this->period;
    }
    /**
     * Set period value
     * @param string $period
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
     */
    public function setPeriod(?string $period = null): self
    {
        // validation for constraint: string
        if (!is_null($period) && !is_string($period)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($period, true), gettype($period)), __LINE__);
        }
        $this->period = $period;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO
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
