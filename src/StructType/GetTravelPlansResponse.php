<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelPlansResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTravelPlans --- returns the list of travel plans for an order
 * @subpackage Structs
 */
class GetTravelPlansResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelPlan
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelPlan
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelPlan[]
     */
    protected array $MidocoTravelPlan = [];
    /**
     * Constructor method for GetTravelPlansResponse
     * @uses GetTravelPlansResponse::setMidocoTravelPlan()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelPlan[] $midocoTravelPlan
     */
    public function __construct(array $midocoTravelPlan = [])
    {
        $this
            ->setMidocoTravelPlan($midocoTravelPlan);
    }
    /**
     * Get MidocoTravelPlan value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelPlan[]
     */
    public function getMidocoTravelPlan(): array
    {
        return $this->MidocoTravelPlan;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelPlan method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelPlan method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelPlanForArrayConstraintsFromSetMidocoTravelPlan(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelPlansResponseMidocoTravelPlanItem) {
            // validation for constraint: itemType
            if (!$getTravelPlansResponseMidocoTravelPlanItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelPlan) {
                $invalidValues[] = is_object($getTravelPlansResponseMidocoTravelPlanItem) ? get_class($getTravelPlansResponseMidocoTravelPlanItem) : sprintf('%s(%s)', gettype($getTravelPlansResponseMidocoTravelPlanItem), var_export($getTravelPlansResponseMidocoTravelPlanItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelPlan property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelPlan, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelPlan value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelPlan[] $midocoTravelPlan
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelPlansResponse
     */
    public function setMidocoTravelPlan(array $midocoTravelPlan = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelPlanArrayErrorMessage = self::validateMidocoTravelPlanForArrayConstraintsFromSetMidocoTravelPlan($midocoTravelPlan))) {
            throw new InvalidArgumentException($midocoTravelPlanArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelPlan = $midocoTravelPlan;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelPlan value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelPlan $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelPlansResponse
     */
    public function addToMidocoTravelPlan(\Pggns\MidocoApi\Order\StructType\MidocoTravelPlan $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelPlan) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelPlan property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelPlan, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelPlan[] = $item;
        
        return $this;
    }
}
