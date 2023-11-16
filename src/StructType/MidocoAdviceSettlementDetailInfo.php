<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAdviceSettlementDetailInfo StructType
 * @subpackage Structs
 */
class MidocoAdviceSettlementDetailInfo extends AdviceSettlemDetailDTO
{
    /**
     * The MidocoAdviceDetailVatDiv
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdviceDetailVatDiv
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdviceDetailVatDiv[]
     */
    protected array $MidocoAdviceDetailVatDiv = [];
    /**
     * The foreignCurrency
     * @var string|null
     */
    protected ?string $foreignCurrency = null;
    /**
     * The foreignRevenueInclVat
     * @var float|null
     */
    protected ?float $foreignRevenueInclVat = null;
    /**
     * The foreignRevenueVatFree
     * @var float|null
     */
    protected ?float $foreignRevenueVatFree = null;
    /**
     * The foreignRevenueInsurance
     * @var float|null
     */
    protected ?float $foreignRevenueInsurance = null;
    /**
     * The foreignSupplierInvoice
     * @var float|null
     */
    protected ?float $foreignSupplierInvoice = null;
    /**
     * The foreignVatAmount
     * @var float|null
     */
    protected ?float $foreignVatAmount = null;
    /**
     * The foreignNettoAmount
     * @var float|null
     */
    protected ?float $foreignNettoAmount = null;
    /**
     * The foreignTotalPrice
     * @var float|null
     */
    protected ?float $foreignTotalPrice = null;
    /**
     * The foreignTravelPrice
     * @var float|null
     */
    protected ?float $foreignTravelPrice = null;
    /**
     * The foreignSupplierDiAmount
     * @var float|null
     */
    protected ?float $foreignSupplierDiAmount = null;
    /**
     * The foreignCalculatedRevenue
     * @var float|null
     */
    protected ?float $foreignCalculatedRevenue = null;
    /**
     * The foreignGrantedRevenue
     * @var float|null
     */
    protected ?float $foreignGrantedRevenue = null;
    /**
     * The foreignInkassoPrice
     * @var float|null
     */
    protected ?float $foreignInkassoPrice = null;
    /**
     * The foreignFeeAmount
     * @var float|null
     */
    protected ?float $foreignFeeAmount = null;
    /**
     * Constructor method for MidocoAdviceSettlementDetailInfo
     * @uses MidocoAdviceSettlementDetailInfo::setMidocoAdviceDetailVatDiv()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignCurrency()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignRevenueInclVat()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignRevenueVatFree()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignRevenueInsurance()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignSupplierInvoice()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignVatAmount()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignNettoAmount()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignTotalPrice()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignTravelPrice()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignSupplierDiAmount()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignCalculatedRevenue()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignGrantedRevenue()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignInkassoPrice()
     * @uses MidocoAdviceSettlementDetailInfo::setForeignFeeAmount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceDetailVatDiv[] $midocoAdviceDetailVatDiv
     * @param string $foreignCurrency
     * @param float $foreignRevenueInclVat
     * @param float $foreignRevenueVatFree
     * @param float $foreignRevenueInsurance
     * @param float $foreignSupplierInvoice
     * @param float $foreignVatAmount
     * @param float $foreignNettoAmount
     * @param float $foreignTotalPrice
     * @param float $foreignTravelPrice
     * @param float $foreignSupplierDiAmount
     * @param float $foreignCalculatedRevenue
     * @param float $foreignGrantedRevenue
     * @param float $foreignInkassoPrice
     * @param float $foreignFeeAmount
     */
    public function __construct(array $midocoAdviceDetailVatDiv = [], ?string $foreignCurrency = null, ?float $foreignRevenueInclVat = null, ?float $foreignRevenueVatFree = null, ?float $foreignRevenueInsurance = null, ?float $foreignSupplierInvoice = null, ?float $foreignVatAmount = null, ?float $foreignNettoAmount = null, ?float $foreignTotalPrice = null, ?float $foreignTravelPrice = null, ?float $foreignSupplierDiAmount = null, ?float $foreignCalculatedRevenue = null, ?float $foreignGrantedRevenue = null, ?float $foreignInkassoPrice = null, ?float $foreignFeeAmount = null)
    {
        $this
            ->setMidocoAdviceDetailVatDiv($midocoAdviceDetailVatDiv)
            ->setForeignCurrency($foreignCurrency)
            ->setForeignRevenueInclVat($foreignRevenueInclVat)
            ->setForeignRevenueVatFree($foreignRevenueVatFree)
            ->setForeignRevenueInsurance($foreignRevenueInsurance)
            ->setForeignSupplierInvoice($foreignSupplierInvoice)
            ->setForeignVatAmount($foreignVatAmount)
            ->setForeignNettoAmount($foreignNettoAmount)
            ->setForeignTotalPrice($foreignTotalPrice)
            ->setForeignTravelPrice($foreignTravelPrice)
            ->setForeignSupplierDiAmount($foreignSupplierDiAmount)
            ->setForeignCalculatedRevenue($foreignCalculatedRevenue)
            ->setForeignGrantedRevenue($foreignGrantedRevenue)
            ->setForeignInkassoPrice($foreignInkassoPrice)
            ->setForeignFeeAmount($foreignFeeAmount);
    }
    /**
     * Get MidocoAdviceDetailVatDiv value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceDetailVatDiv[]
     */
    public function getMidocoAdviceDetailVatDiv(): array
    {
        return $this->MidocoAdviceDetailVatDiv;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdviceDetailVatDiv method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdviceDetailVatDiv method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdviceDetailVatDivForArrayConstraintsFromSetMidocoAdviceDetailVatDiv(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAdviceSettlementDetailInfoMidocoAdviceDetailVatDivItem) {
            // validation for constraint: itemType
            if (!$midocoAdviceSettlementDetailInfoMidocoAdviceDetailVatDivItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdviceDetailVatDiv) {
                $invalidValues[] = is_object($midocoAdviceSettlementDetailInfoMidocoAdviceDetailVatDivItem) ? get_class($midocoAdviceSettlementDetailInfoMidocoAdviceDetailVatDivItem) : sprintf('%s(%s)', gettype($midocoAdviceSettlementDetailInfoMidocoAdviceDetailVatDivItem), var_export($midocoAdviceSettlementDetailInfoMidocoAdviceDetailVatDivItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdviceDetailVatDiv property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdviceDetailVatDiv, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdviceDetailVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceDetailVatDiv[] $midocoAdviceDetailVatDiv
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setMidocoAdviceDetailVatDiv(array $midocoAdviceDetailVatDiv = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdviceDetailVatDivArrayErrorMessage = self::validateMidocoAdviceDetailVatDivForArrayConstraintsFromSetMidocoAdviceDetailVatDiv($midocoAdviceDetailVatDiv))) {
            throw new InvalidArgumentException($midocoAdviceDetailVatDivArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdviceDetailVatDiv = $midocoAdviceDetailVatDiv;
        
        return $this;
    }
    /**
     * Add item to MidocoAdviceDetailVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceDetailVatDiv $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function addToMidocoAdviceDetailVatDiv(\Pggns\MidocoApi\Order\StructType\MidocoAdviceDetailVatDiv $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdviceDetailVatDiv) {
            throw new InvalidArgumentException(sprintf('The MidocoAdviceDetailVatDiv property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdviceDetailVatDiv, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdviceDetailVatDiv[] = $item;
        
        return $this;
    }
    /**
     * Get foreignCurrency value
     * @return string|null
     */
    public function getForeignCurrency(): ?string
    {
        return $this->foreignCurrency;
    }
    /**
     * Set foreignCurrency value
     * @param string $foreignCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignCurrency(?string $foreignCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignCurrency) && !is_string($foreignCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignCurrency, true), gettype($foreignCurrency)), __LINE__);
        }
        $this->foreignCurrency = $foreignCurrency;
        
        return $this;
    }
    /**
     * Get foreignRevenueInclVat value
     * @return float|null
     */
    public function getForeignRevenueInclVat(): ?float
    {
        return $this->foreignRevenueInclVat;
    }
    /**
     * Set foreignRevenueInclVat value
     * @param float $foreignRevenueInclVat
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignRevenueInclVat(?float $foreignRevenueInclVat = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignRevenueInclVat) && !(is_float($foreignRevenueInclVat) || is_numeric($foreignRevenueInclVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignRevenueInclVat, true), gettype($foreignRevenueInclVat)), __LINE__);
        }
        $this->foreignRevenueInclVat = $foreignRevenueInclVat;
        
        return $this;
    }
    /**
     * Get foreignRevenueVatFree value
     * @return float|null
     */
    public function getForeignRevenueVatFree(): ?float
    {
        return $this->foreignRevenueVatFree;
    }
    /**
     * Set foreignRevenueVatFree value
     * @param float $foreignRevenueVatFree
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignRevenueVatFree(?float $foreignRevenueVatFree = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignRevenueVatFree) && !(is_float($foreignRevenueVatFree) || is_numeric($foreignRevenueVatFree))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignRevenueVatFree, true), gettype($foreignRevenueVatFree)), __LINE__);
        }
        $this->foreignRevenueVatFree = $foreignRevenueVatFree;
        
        return $this;
    }
    /**
     * Get foreignRevenueInsurance value
     * @return float|null
     */
    public function getForeignRevenueInsurance(): ?float
    {
        return $this->foreignRevenueInsurance;
    }
    /**
     * Set foreignRevenueInsurance value
     * @param float $foreignRevenueInsurance
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignRevenueInsurance(?float $foreignRevenueInsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignRevenueInsurance) && !(is_float($foreignRevenueInsurance) || is_numeric($foreignRevenueInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignRevenueInsurance, true), gettype($foreignRevenueInsurance)), __LINE__);
        }
        $this->foreignRevenueInsurance = $foreignRevenueInsurance;
        
        return $this;
    }
    /**
     * Get foreignSupplierInvoice value
     * @return float|null
     */
    public function getForeignSupplierInvoice(): ?float
    {
        return $this->foreignSupplierInvoice;
    }
    /**
     * Set foreignSupplierInvoice value
     * @param float $foreignSupplierInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignSupplierInvoice(?float $foreignSupplierInvoice = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignSupplierInvoice) && !(is_float($foreignSupplierInvoice) || is_numeric($foreignSupplierInvoice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignSupplierInvoice, true), gettype($foreignSupplierInvoice)), __LINE__);
        }
        $this->foreignSupplierInvoice = $foreignSupplierInvoice;
        
        return $this;
    }
    /**
     * Get foreignVatAmount value
     * @return float|null
     */
    public function getForeignVatAmount(): ?float
    {
        return $this->foreignVatAmount;
    }
    /**
     * Set foreignVatAmount value
     * @param float $foreignVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignVatAmount(?float $foreignVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignVatAmount) && !(is_float($foreignVatAmount) || is_numeric($foreignVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignVatAmount, true), gettype($foreignVatAmount)), __LINE__);
        }
        $this->foreignVatAmount = $foreignVatAmount;
        
        return $this;
    }
    /**
     * Get foreignNettoAmount value
     * @return float|null
     */
    public function getForeignNettoAmount(): ?float
    {
        return $this->foreignNettoAmount;
    }
    /**
     * Set foreignNettoAmount value
     * @param float $foreignNettoAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignNettoAmount(?float $foreignNettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignNettoAmount) && !(is_float($foreignNettoAmount) || is_numeric($foreignNettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignNettoAmount, true), gettype($foreignNettoAmount)), __LINE__);
        }
        $this->foreignNettoAmount = $foreignNettoAmount;
        
        return $this;
    }
    /**
     * Get foreignTotalPrice value
     * @return float|null
     */
    public function getForeignTotalPrice(): ?float
    {
        return $this->foreignTotalPrice;
    }
    /**
     * Set foreignTotalPrice value
     * @param float $foreignTotalPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignTotalPrice(?float $foreignTotalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignTotalPrice) && !(is_float($foreignTotalPrice) || is_numeric($foreignTotalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignTotalPrice, true), gettype($foreignTotalPrice)), __LINE__);
        }
        $this->foreignTotalPrice = $foreignTotalPrice;
        
        return $this;
    }
    /**
     * Get foreignTravelPrice value
     * @return float|null
     */
    public function getForeignTravelPrice(): ?float
    {
        return $this->foreignTravelPrice;
    }
    /**
     * Set foreignTravelPrice value
     * @param float $foreignTravelPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignTravelPrice(?float $foreignTravelPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignTravelPrice) && !(is_float($foreignTravelPrice) || is_numeric($foreignTravelPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignTravelPrice, true), gettype($foreignTravelPrice)), __LINE__);
        }
        $this->foreignTravelPrice = $foreignTravelPrice;
        
        return $this;
    }
    /**
     * Get foreignSupplierDiAmount value
     * @return float|null
     */
    public function getForeignSupplierDiAmount(): ?float
    {
        return $this->foreignSupplierDiAmount;
    }
    /**
     * Set foreignSupplierDiAmount value
     * @param float $foreignSupplierDiAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignSupplierDiAmount(?float $foreignSupplierDiAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignSupplierDiAmount) && !(is_float($foreignSupplierDiAmount) || is_numeric($foreignSupplierDiAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignSupplierDiAmount, true), gettype($foreignSupplierDiAmount)), __LINE__);
        }
        $this->foreignSupplierDiAmount = $foreignSupplierDiAmount;
        
        return $this;
    }
    /**
     * Get foreignCalculatedRevenue value
     * @return float|null
     */
    public function getForeignCalculatedRevenue(): ?float
    {
        return $this->foreignCalculatedRevenue;
    }
    /**
     * Set foreignCalculatedRevenue value
     * @param float $foreignCalculatedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignCalculatedRevenue(?float $foreignCalculatedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignCalculatedRevenue) && !(is_float($foreignCalculatedRevenue) || is_numeric($foreignCalculatedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignCalculatedRevenue, true), gettype($foreignCalculatedRevenue)), __LINE__);
        }
        $this->foreignCalculatedRevenue = $foreignCalculatedRevenue;
        
        return $this;
    }
    /**
     * Get foreignGrantedRevenue value
     * @return float|null
     */
    public function getForeignGrantedRevenue(): ?float
    {
        return $this->foreignGrantedRevenue;
    }
    /**
     * Set foreignGrantedRevenue value
     * @param float $foreignGrantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignGrantedRevenue(?float $foreignGrantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignGrantedRevenue) && !(is_float($foreignGrantedRevenue) || is_numeric($foreignGrantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignGrantedRevenue, true), gettype($foreignGrantedRevenue)), __LINE__);
        }
        $this->foreignGrantedRevenue = $foreignGrantedRevenue;
        
        return $this;
    }
    /**
     * Get foreignInkassoPrice value
     * @return float|null
     */
    public function getForeignInkassoPrice(): ?float
    {
        return $this->foreignInkassoPrice;
    }
    /**
     * Set foreignInkassoPrice value
     * @param float $foreignInkassoPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignInkassoPrice(?float $foreignInkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignInkassoPrice) && !(is_float($foreignInkassoPrice) || is_numeric($foreignInkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignInkassoPrice, true), gettype($foreignInkassoPrice)), __LINE__);
        }
        $this->foreignInkassoPrice = $foreignInkassoPrice;
        
        return $this;
    }
    /**
     * Get foreignFeeAmount value
     * @return float|null
     */
    public function getForeignFeeAmount(): ?float
    {
        return $this->foreignFeeAmount;
    }
    /**
     * Set foreignFeeAmount value
     * @param float $foreignFeeAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetailInfo
     */
    public function setForeignFeeAmount(?float $foreignFeeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignFeeAmount) && !(is_float($foreignFeeAmount) || is_numeric($foreignFeeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignFeeAmount, true), gettype($foreignFeeAmount)), __LINE__);
        }
        $this->foreignFeeAmount = $foreignFeeAmount;
        
        return $this;
    }
}
