<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorCommision StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MediatorCommision extends AbstractStructBase
{
    /**
     * The mediatorId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $mediatorId;
    /**
     * The totalTravelPrice
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    protected float $totalTravelPrice;
    /**
     * The totalCalculatedCommission
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    protected float $totalCalculatedCommission;
    /**
     * The totalPayedCommission
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    protected float $totalPayedCommission;
    /**
     * The TourOperatorGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\TourOperatorGroup[]
     */
    protected ?array $TourOperatorGroup = null;
    /**
     * Constructor method for MediatorCommision
     * @uses MediatorCommision::setMediatorId()
     * @uses MediatorCommision::setTotalTravelPrice()
     * @uses MediatorCommision::setTotalCalculatedCommission()
     * @uses MediatorCommision::setTotalPayedCommission()
     * @uses MediatorCommision::setTourOperatorGroup()
     * @param string $mediatorId
     * @param float $totalTravelPrice
     * @param float $totalCalculatedCommission
     * @param float $totalPayedCommission
     * @param \Pggns\MidocoApi\Order\StructType\TourOperatorGroup[] $tourOperatorGroup
     */
    public function __construct(string $mediatorId, float $totalTravelPrice, float $totalCalculatedCommission, float $totalPayedCommission, ?array $tourOperatorGroup = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setTotalTravelPrice($totalTravelPrice)
            ->setTotalCalculatedCommission($totalCalculatedCommission)
            ->setTotalPayedCommission($totalPayedCommission)
            ->setTourOperatorGroup($tourOperatorGroup);
    }
    /**
     * Get mediatorId value
     * @return string
     */
    public function getMediatorId(): string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommision
     */
    public function setMediatorId(string $mediatorId): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get totalTravelPrice value
     * @return float
     */
    public function getTotalTravelPrice(): float
    {
        return $this->totalTravelPrice;
    }
    /**
     * Set totalTravelPrice value
     * @param float $totalTravelPrice
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommision
     */
    public function setTotalTravelPrice(float $totalTravelPrice): self
    {
        // validation for constraint: float
        if (!is_null($totalTravelPrice) && !(is_float($totalTravelPrice) || is_numeric($totalTravelPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalTravelPrice, true), gettype($totalTravelPrice)), __LINE__);
        }
        $this->totalTravelPrice = $totalTravelPrice;
        
        return $this;
    }
    /**
     * Get totalCalculatedCommission value
     * @return float
     */
    public function getTotalCalculatedCommission(): float
    {
        return $this->totalCalculatedCommission;
    }
    /**
     * Set totalCalculatedCommission value
     * @param float $totalCalculatedCommission
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommision
     */
    public function setTotalCalculatedCommission(float $totalCalculatedCommission): self
    {
        // validation for constraint: float
        if (!is_null($totalCalculatedCommission) && !(is_float($totalCalculatedCommission) || is_numeric($totalCalculatedCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCalculatedCommission, true), gettype($totalCalculatedCommission)), __LINE__);
        }
        $this->totalCalculatedCommission = $totalCalculatedCommission;
        
        return $this;
    }
    /**
     * Get totalPayedCommission value
     * @return float
     */
    public function getTotalPayedCommission(): float
    {
        return $this->totalPayedCommission;
    }
    /**
     * Set totalPayedCommission value
     * @param float $totalPayedCommission
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommision
     */
    public function setTotalPayedCommission(float $totalPayedCommission): self
    {
        // validation for constraint: float
        if (!is_null($totalPayedCommission) && !(is_float($totalPayedCommission) || is_numeric($totalPayedCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPayedCommission, true), gettype($totalPayedCommission)), __LINE__);
        }
        $this->totalPayedCommission = $totalPayedCommission;
        
        return $this;
    }
    /**
     * Get TourOperatorGroup value
     * @return \Pggns\MidocoApi\Order\StructType\TourOperatorGroup[]
     */
    public function getTourOperatorGroup(): ?array
    {
        return $this->TourOperatorGroup;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTourOperatorGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTourOperatorGroup method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTourOperatorGroupForArrayConstraintFromSetTourOperatorGroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mediatorCommisionTourOperatorGroupItem) {
            // validation for constraint: itemType
            if (!$mediatorCommisionTourOperatorGroupItem instanceof \Pggns\MidocoApi\Order\StructType\TourOperatorGroup) {
                $invalidValues[] = is_object($mediatorCommisionTourOperatorGroupItem) ? get_class($mediatorCommisionTourOperatorGroupItem) : sprintf('%s(%s)', gettype($mediatorCommisionTourOperatorGroupItem), var_export($mediatorCommisionTourOperatorGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TourOperatorGroup property can only contain items of type \Pggns\MidocoApi\Order\StructType\TourOperatorGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TourOperatorGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TourOperatorGroup[] $tourOperatorGroup
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommision
     */
    public function setTourOperatorGroup(?array $tourOperatorGroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($tourOperatorGroupArrayErrorMessage = self::validateTourOperatorGroupForArrayConstraintFromSetTourOperatorGroup($tourOperatorGroup))) {
            throw new InvalidArgumentException($tourOperatorGroupArrayErrorMessage, __LINE__);
        }
        $this->TourOperatorGroup = $tourOperatorGroup;
        
        return $this;
    }
    /**
     * Add item to TourOperatorGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TourOperatorGroup $item
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommision
     */
    public function addToTourOperatorGroup(\Pggns\MidocoApi\Order\StructType\TourOperatorGroup $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TourOperatorGroup) {
            throw new InvalidArgumentException(sprintf('The TourOperatorGroup property can only contain items of type \Pggns\MidocoApi\Order\StructType\TourOperatorGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TourOperatorGroup[] = $item;
        
        return $this;
    }
}
