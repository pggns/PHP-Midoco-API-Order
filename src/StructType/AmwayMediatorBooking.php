<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmwayMediatorBooking StructType
 * @subpackage Structs
 */
class AmwayMediatorBooking extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * The isFee
     * @var bool|null
     */
    protected ?bool $isFee = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The supplierName
     * @var string|null
     */
    protected ?string $supplierName = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The ownUsage
     * @var string|null
     */
    protected ?string $ownUsage = null;
    /**
     * The productGroup
     * @var string|null
     */
    protected ?string $productGroup = null;
    /**
     * The travellerName
     * @var string|null
     */
    protected ?string $travellerName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The expedient
     * @var string|null
     */
    protected ?string $expedient = null;
    /**
     * The sourceSystem
     * @var string|null
     */
    protected ?string $sourceSystem = null;
    /**
     * The mediatorAffiliate
     * @var string|null
     */
    protected ?string $mediatorAffiliate = null;
    /**
     * Constructor method for AmwayMediatorBooking
     * @uses AmwayMediatorBooking::setItemId()
     * @uses AmwayMediatorBooking::setOrderId()
     * @uses AmwayMediatorBooking::setType()
     * @uses AmwayMediatorBooking::setIsFee()
     * @uses AmwayMediatorBooking::setOrderNo()
     * @uses AmwayMediatorBooking::setSupplierId()
     * @uses AmwayMediatorBooking::setSupplierName()
     * @uses AmwayMediatorBooking::setTravelDate()
     * @uses AmwayMediatorBooking::setStatus()
     * @uses AmwayMediatorBooking::setAmount()
     * @uses AmwayMediatorBooking::setOwnUsage()
     * @uses AmwayMediatorBooking::setProductGroup()
     * @uses AmwayMediatorBooking::setTravellerName()
     * @uses AmwayMediatorBooking::setUnitName()
     * @uses AmwayMediatorBooking::setExpedient()
     * @uses AmwayMediatorBooking::setSourceSystem()
     * @uses AmwayMediatorBooking::setMediatorAffiliate()
     * @param int $itemId
     * @param int $orderId
     * @param int $type
     * @param bool $isFee
     * @param int $orderNo
     * @param string $supplierId
     * @param string $supplierName
     * @param string $travelDate
     * @param string $status
     * @param float $amount
     * @param string $ownUsage
     * @param string $productGroup
     * @param string $travellerName
     * @param string $unitName
     * @param string $expedient
     * @param string $sourceSystem
     * @param string $mediatorAffiliate
     */
    public function __construct(?int $itemId = null, ?int $orderId = null, ?int $type = null, ?bool $isFee = null, ?int $orderNo = null, ?string $supplierId = null, ?string $supplierName = null, ?string $travelDate = null, ?string $status = null, ?float $amount = null, ?string $ownUsage = null, ?string $productGroup = null, ?string $travellerName = null, ?string $unitName = null, ?string $expedient = null, ?string $sourceSystem = null, ?string $mediatorAffiliate = null)
    {
        $this
            ->setItemId($itemId)
            ->setOrderId($orderId)
            ->setType($type)
            ->setIsFee($isFee)
            ->setOrderNo($orderNo)
            ->setSupplierId($supplierId)
            ->setSupplierName($supplierName)
            ->setTravelDate($travelDate)
            ->setStatus($status)
            ->setAmount($amount)
            ->setOwnUsage($ownUsage)
            ->setProductGroup($productGroup)
            ->setTravellerName($travellerName)
            ->setUnitName($unitName)
            ->setExpedient($expedient)
            ->setSourceSystem($sourceSystem)
            ->setMediatorAffiliate($mediatorAffiliate);
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
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
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
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get isFee value
     * @return bool|null
     */
    public function getIsFee(): ?bool
    {
        return $this->isFee;
    }
    /**
     * Set isFee value
     * @param bool $isFee
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
     */
    public function setIsFee(?bool $isFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFee) && !is_bool($isFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFee, true), gettype($isFee)), __LINE__);
        }
        $this->isFee = $isFee;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
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
     * Get supplierName value
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }
    /**
     * Set supplierName value
     * @param string $supplierName
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
     */
    public function setSupplierName(?string $supplierName = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierName, true), gettype($supplierName)), __LINE__);
        }
        $this->supplierName = $supplierName;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
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
     * Get ownUsage value
     * @return string|null
     */
    public function getOwnUsage(): ?string
    {
        return $this->ownUsage;
    }
    /**
     * Set ownUsage value
     * @param string $ownUsage
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
     */
    public function setOwnUsage(?string $ownUsage = null): self
    {
        // validation for constraint: string
        if (!is_null($ownUsage) && !is_string($ownUsage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownUsage, true), gettype($ownUsage)), __LINE__);
        }
        $this->ownUsage = $ownUsage;
        
        return $this;
    }
    /**
     * Get productGroup value
     * @return string|null
     */
    public function getProductGroup(): ?string
    {
        return $this->productGroup;
    }
    /**
     * Set productGroup value
     * @param string $productGroup
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
     */
    public function setProductGroup(?string $productGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($productGroup) && !is_string($productGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productGroup, true), gettype($productGroup)), __LINE__);
        }
        $this->productGroup = $productGroup;
        
        return $this;
    }
    /**
     * Get travellerName value
     * @return string|null
     */
    public function getTravellerName(): ?string
    {
        return $this->travellerName;
    }
    /**
     * Set travellerName value
     * @param string $travellerName
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
     */
    public function setTravellerName(?string $travellerName = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerName) && !is_string($travellerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerName, true), gettype($travellerName)), __LINE__);
        }
        $this->travellerName = $travellerName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
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
    /**
     * Get expedient value
     * @return string|null
     */
    public function getExpedient(): ?string
    {
        return $this->expedient;
    }
    /**
     * Set expedient value
     * @param string $expedient
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
     */
    public function setExpedient(?string $expedient = null): self
    {
        // validation for constraint: string
        if (!is_null($expedient) && !is_string($expedient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expedient, true), gettype($expedient)), __LINE__);
        }
        $this->expedient = $expedient;
        
        return $this;
    }
    /**
     * Get sourceSystem value
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->sourceSystem;
    }
    /**
     * Set sourceSystem value
     * @param string $sourceSystem
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceSystem) && !is_string($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceSystem, true), gettype($sourceSystem)), __LINE__);
        }
        $this->sourceSystem = $sourceSystem;
        
        return $this;
    }
    /**
     * Get mediatorAffiliate value
     * @return string|null
     */
    public function getMediatorAffiliate(): ?string
    {
        return $this->mediatorAffiliate;
    }
    /**
     * Set mediatorAffiliate value
     * @param string $mediatorAffiliate
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking
     */
    public function setMediatorAffiliate(?string $mediatorAffiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorAffiliate) && !is_string($mediatorAffiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorAffiliate, true), gettype($mediatorAffiliate)), __LINE__);
        }
        $this->mediatorAffiliate = $mediatorAffiliate;
        
        return $this;
    }
}
