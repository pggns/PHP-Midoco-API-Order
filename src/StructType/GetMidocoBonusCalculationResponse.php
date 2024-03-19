<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoBonusCalculationResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoBonusCalculationResponse extends AbstractStructBase
{
    /**
     * The MidocoBonusCalculation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoBonusCalculation
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation[]
     */
    protected ?array $MidocoBonusCalculation = null;
    /**
     * Constructor method for GetMidocoBonusCalculationResponse
     * @uses GetMidocoBonusCalculationResponse::setMidocoBonusCalculation()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation[] $midocoBonusCalculation
     */
    public function __construct(?array $midocoBonusCalculation = null)
    {
        $this
            ->setMidocoBonusCalculation($midocoBonusCalculation);
    }
    /**
     * Get MidocoBonusCalculation value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation[]
     */
    public function getMidocoBonusCalculation(): ?array
    {
        return $this->MidocoBonusCalculation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBonusCalculation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBonusCalculation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBonusCalculationForArrayConstraintFromSetMidocoBonusCalculation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoBonusCalculationResponseMidocoBonusCalculationItem) {
            // validation for constraint: itemType
            if (!$getMidocoBonusCalculationResponseMidocoBonusCalculationItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation) {
                $invalidValues[] = is_object($getMidocoBonusCalculationResponseMidocoBonusCalculationItem) ? get_class($getMidocoBonusCalculationResponseMidocoBonusCalculationItem) : sprintf('%s(%s)', gettype($getMidocoBonusCalculationResponseMidocoBonusCalculationItem), var_export($getMidocoBonusCalculationResponseMidocoBonusCalculationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBonusCalculation property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBonusCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation[] $midocoBonusCalculation
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBonusCalculationResponse
     */
    public function setMidocoBonusCalculation(?array $midocoBonusCalculation = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBonusCalculationArrayErrorMessage = self::validateMidocoBonusCalculationForArrayConstraintFromSetMidocoBonusCalculation($midocoBonusCalculation))) {
            throw new InvalidArgumentException($midocoBonusCalculationArrayErrorMessage, __LINE__);
        }
        $this->MidocoBonusCalculation = $midocoBonusCalculation;
        
        return $this;
    }
    /**
     * Add item to MidocoBonusCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBonusCalculationResponse
     */
    public function addToMidocoBonusCalculation(\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation) {
            throw new InvalidArgumentException(sprintf('The MidocoBonusCalculation property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBonusCalculation[] = $item;
        
        return $this;
    }
}
