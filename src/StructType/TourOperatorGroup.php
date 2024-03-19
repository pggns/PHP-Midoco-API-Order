<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TourOperatorGroup StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TourOperatorGroup extends AbstractStructBase
{
    /**
     * The tourOperatorName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $tourOperatorName;
    /**
     * The totalTravelPrice
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    protected float $totalTravelPrice;
    /**
     * The calculatedCommission
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    protected float $calculatedCommission;
    /**
     * The payedCommission
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    protected float $payedCommission;
    /**
     * The CommissionDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\CommissionDetail[]
     */
    protected ?array $CommissionDetail = null;
    /**
     * Constructor method for TourOperatorGroup
     * @uses TourOperatorGroup::setTourOperatorName()
     * @uses TourOperatorGroup::setTotalTravelPrice()
     * @uses TourOperatorGroup::setCalculatedCommission()
     * @uses TourOperatorGroup::setPayedCommission()
     * @uses TourOperatorGroup::setCommissionDetail()
     * @param string $tourOperatorName
     * @param float $totalTravelPrice
     * @param float $calculatedCommission
     * @param float $payedCommission
     * @param \Pggns\MidocoApi\Order\StructType\CommissionDetail[] $commissionDetail
     */
    public function __construct(string $tourOperatorName, float $totalTravelPrice, float $calculatedCommission, float $payedCommission, ?array $commissionDetail = null)
    {
        $this
            ->setTourOperatorName($tourOperatorName)
            ->setTotalTravelPrice($totalTravelPrice)
            ->setCalculatedCommission($calculatedCommission)
            ->setPayedCommission($payedCommission)
            ->setCommissionDetail($commissionDetail);
    }
    /**
     * Get tourOperatorName value
     * @return string
     */
    public function getTourOperatorName(): string
    {
        return $this->tourOperatorName;
    }
    /**
     * Set tourOperatorName value
     * @param string $tourOperatorName
     * @return \Pggns\MidocoApi\Order\StructType\TourOperatorGroup
     */
    public function setTourOperatorName(string $tourOperatorName): self
    {
        // validation for constraint: string
        if (!is_null($tourOperatorName) && !is_string($tourOperatorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourOperatorName, true), gettype($tourOperatorName)), __LINE__);
        }
        $this->tourOperatorName = $tourOperatorName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TourOperatorGroup
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
     * Get calculatedCommission value
     * @return float
     */
    public function getCalculatedCommission(): float
    {
        return $this->calculatedCommission;
    }
    /**
     * Set calculatedCommission value
     * @param float $calculatedCommission
     * @return \Pggns\MidocoApi\Order\StructType\TourOperatorGroup
     */
    public function setCalculatedCommission(float $calculatedCommission): self
    {
        // validation for constraint: float
        if (!is_null($calculatedCommission) && !(is_float($calculatedCommission) || is_numeric($calculatedCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedCommission, true), gettype($calculatedCommission)), __LINE__);
        }
        $this->calculatedCommission = $calculatedCommission;
        
        return $this;
    }
    /**
     * Get payedCommission value
     * @return float
     */
    public function getPayedCommission(): float
    {
        return $this->payedCommission;
    }
    /**
     * Set payedCommission value
     * @param float $payedCommission
     * @return \Pggns\MidocoApi\Order\StructType\TourOperatorGroup
     */
    public function setPayedCommission(float $payedCommission): self
    {
        // validation for constraint: float
        if (!is_null($payedCommission) && !(is_float($payedCommission) || is_numeric($payedCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($payedCommission, true), gettype($payedCommission)), __LINE__);
        }
        $this->payedCommission = $payedCommission;
        
        return $this;
    }
    /**
     * Get CommissionDetail value
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDetail[]
     */
    public function getCommissionDetail(): ?array
    {
        return $this->CommissionDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCommissionDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommissionDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommissionDetailForArrayConstraintFromSetCommissionDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tourOperatorGroupCommissionDetailItem) {
            // validation for constraint: itemType
            if (!$tourOperatorGroupCommissionDetailItem instanceof \Pggns\MidocoApi\Order\StructType\CommissionDetail) {
                $invalidValues[] = is_object($tourOperatorGroupCommissionDetailItem) ? get_class($tourOperatorGroupCommissionDetailItem) : sprintf('%s(%s)', gettype($tourOperatorGroupCommissionDetailItem), var_export($tourOperatorGroupCommissionDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CommissionDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\CommissionDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CommissionDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CommissionDetail[] $commissionDetail
     * @return \Pggns\MidocoApi\Order\StructType\TourOperatorGroup
     */
    public function setCommissionDetail(?array $commissionDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($commissionDetailArrayErrorMessage = self::validateCommissionDetailForArrayConstraintFromSetCommissionDetail($commissionDetail))) {
            throw new InvalidArgumentException($commissionDetailArrayErrorMessage, __LINE__);
        }
        $this->CommissionDetail = $commissionDetail;
        
        return $this;
    }
    /**
     * Add item to CommissionDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CommissionDetail $item
     * @return \Pggns\MidocoApi\Order\StructType\TourOperatorGroup
     */
    public function addToCommissionDetail(\Pggns\MidocoApi\Order\StructType\CommissionDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CommissionDetail) {
            throw new InvalidArgumentException(sprintf('The CommissionDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\CommissionDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CommissionDetail[] = $item;
        
        return $this;
    }
}
