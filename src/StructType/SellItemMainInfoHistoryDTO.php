<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemMainInfoHistoryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SellItemMainInfoHistoryDTO extends AbstractStructBase
{
    /**
     * The attributeValue
     * @var string|null
     */
    protected ?string $attributeValue = null;
    /**
     * The calculatedRevenue
     * @var float|null
     */
    protected ?float $calculatedRevenue = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The historyId
     * @var int|null
     */
    protected ?int $historyId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The modifyTime
     * @var string|null
     */
    protected ?string $modifyTime = null;
    /**
     * The previousHistoryId
     * @var int|null
     */
    protected ?int $previousHistoryId = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
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
     * Constructor method for SellItemMainInfoHistoryDTO
     * @uses SellItemMainInfoHistoryDTO::setAttributeValue()
     * @uses SellItemMainInfoHistoryDTO::setCalculatedRevenue()
     * @uses SellItemMainInfoHistoryDTO::setGrantedRevenue()
     * @uses SellItemMainInfoHistoryDTO::setHistoryId()
     * @uses SellItemMainInfoHistoryDTO::setItemId()
     * @uses SellItemMainInfoHistoryDTO::setItemPrice()
     * @uses SellItemMainInfoHistoryDTO::setMediatorId()
     * @uses SellItemMainInfoHistoryDTO::setModifyTime()
     * @uses SellItemMainInfoHistoryDTO::setPreviousHistoryId()
     * @uses SellItemMainInfoHistoryDTO::setProductType()
     * @uses SellItemMainInfoHistoryDTO::setStatus()
     * @uses SellItemMainInfoHistoryDTO::setSupplierId()
     * @param string $attributeValue
     * @param float $calculatedRevenue
     * @param float $grantedRevenue
     * @param int $historyId
     * @param int $itemId
     * @param float $itemPrice
     * @param string $mediatorId
     * @param string $modifyTime
     * @param int $previousHistoryId
     * @param string $productType
     * @param string $status
     * @param string $supplierId
     */
    public function __construct(?string $attributeValue = null, ?float $calculatedRevenue = null, ?float $grantedRevenue = null, ?int $historyId = null, ?int $itemId = null, ?float $itemPrice = null, ?string $mediatorId = null, ?string $modifyTime = null, ?int $previousHistoryId = null, ?string $productType = null, ?string $status = null, ?string $supplierId = null)
    {
        $this
            ->setAttributeValue($attributeValue)
            ->setCalculatedRevenue($calculatedRevenue)
            ->setGrantedRevenue($grantedRevenue)
            ->setHistoryId($historyId)
            ->setItemId($itemId)
            ->setItemPrice($itemPrice)
            ->setMediatorId($mediatorId)
            ->setModifyTime($modifyTime)
            ->setPreviousHistoryId($previousHistoryId)
            ->setProductType($productType)
            ->setStatus($status)
            ->setSupplierId($supplierId);
    }
    /**
     * Get attributeValue value
     * @return string|null
     */
    public function getAttributeValue(): ?string
    {
        return $this->attributeValue;
    }
    /**
     * Set attributeValue value
     * @param string $attributeValue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
     */
    public function setAttributeValue(?string $attributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeValue) && !is_string($attributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeValue, true), gettype($attributeValue)), __LINE__);
        }
        $this->attributeValue = $attributeValue;
        
        return $this;
    }
    /**
     * Get calculatedRevenue value
     * @return float|null
     */
    public function getCalculatedRevenue(): ?float
    {
        return $this->calculatedRevenue;
    }
    /**
     * Set calculatedRevenue value
     * @param float $calculatedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
     */
    public function setCalculatedRevenue(?float $calculatedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedRevenue) && !(is_float($calculatedRevenue) || is_numeric($calculatedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedRevenue, true), gettype($calculatedRevenue)), __LINE__);
        }
        $this->calculatedRevenue = $calculatedRevenue;
        
        return $this;
    }
    /**
     * Get grantedRevenue value
     * @return float|null
     */
    public function getGrantedRevenue(): ?float
    {
        return $this->grantedRevenue;
    }
    /**
     * Set grantedRevenue value
     * @param float $grantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
     */
    public function setGrantedRevenue(?float $grantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedRevenue) && !(is_float($grantedRevenue) || is_numeric($grantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedRevenue, true), gettype($grantedRevenue)), __LINE__);
        }
        $this->grantedRevenue = $grantedRevenue;
        
        return $this;
    }
    /**
     * Get historyId value
     * @return int|null
     */
    public function getHistoryId(): ?int
    {
        return $this->historyId;
    }
    /**
     * Set historyId value
     * @param int $historyId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
     */
    public function setHistoryId(?int $historyId = null): self
    {
        // validation for constraint: int
        if (!is_null($historyId) && !(is_int($historyId) || ctype_digit($historyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($historyId, true), gettype($historyId)), __LINE__);
        }
        $this->historyId = $historyId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
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
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
     */
    public function setItemPrice(?float $itemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
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
     * Get modifyTime value
     * @return string|null
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }
    /**
     * Set modifyTime value
     * @param string $modifyTime
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
     */
    public function setModifyTime(?string $modifyTime = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTime) && !is_string($modifyTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTime, true), gettype($modifyTime)), __LINE__);
        }
        $this->modifyTime = $modifyTime;
        
        return $this;
    }
    /**
     * Get previousHistoryId value
     * @return int|null
     */
    public function getPreviousHistoryId(): ?int
    {
        return $this->previousHistoryId;
    }
    /**
     * Set previousHistoryId value
     * @param int $previousHistoryId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
     */
    public function setPreviousHistoryId(?int $previousHistoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($previousHistoryId) && !(is_int($previousHistoryId) || ctype_digit($previousHistoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($previousHistoryId, true), gettype($previousHistoryId)), __LINE__);
        }
        $this->previousHistoryId = $previousHistoryId;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMainInfoHistoryDTO
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
}
