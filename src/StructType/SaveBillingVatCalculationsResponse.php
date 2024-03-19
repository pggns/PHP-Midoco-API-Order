<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingVatCalculationsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveBillingVatCalculations --- generates and saves the recs in billing_vat_calculations table
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBillingVatCalculationsResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingVatCalculation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingVatCalculation
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation[]
     */
    protected ?array $MidocoBillingVatCalculation = null;
    /**
     * Constructor method for SaveBillingVatCalculationsResponse
     * @uses SaveBillingVatCalculationsResponse::setMidocoBillingVatCalculation()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation[] $midocoBillingVatCalculation
     */
    public function __construct(?array $midocoBillingVatCalculation = null)
    {
        $this
            ->setMidocoBillingVatCalculation($midocoBillingVatCalculation);
    }
    /**
     * Get MidocoBillingVatCalculation value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation[]
     */
    public function getMidocoBillingVatCalculation(): ?array
    {
        return $this->MidocoBillingVatCalculation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingVatCalculation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingVatCalculation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingVatCalculationForArrayConstraintFromSetMidocoBillingVatCalculation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveBillingVatCalculationsResponseMidocoBillingVatCalculationItem) {
            // validation for constraint: itemType
            if (!$saveBillingVatCalculationsResponseMidocoBillingVatCalculationItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation) {
                $invalidValues[] = is_object($saveBillingVatCalculationsResponseMidocoBillingVatCalculationItem) ? get_class($saveBillingVatCalculationsResponseMidocoBillingVatCalculationItem) : sprintf('%s(%s)', gettype($saveBillingVatCalculationsResponseMidocoBillingVatCalculationItem), var_export($saveBillingVatCalculationsResponseMidocoBillingVatCalculationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingVatCalculation property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingVatCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation[] $midocoBillingVatCalculation
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingVatCalculationsResponse
     */
    public function setMidocoBillingVatCalculation(?array $midocoBillingVatCalculation = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingVatCalculationArrayErrorMessage = self::validateMidocoBillingVatCalculationForArrayConstraintFromSetMidocoBillingVatCalculation($midocoBillingVatCalculation))) {
            throw new InvalidArgumentException($midocoBillingVatCalculationArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingVatCalculation = $midocoBillingVatCalculation;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingVatCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingVatCalculationsResponse
     */
    public function addToMidocoBillingVatCalculation(\Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingVatCalculation property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingVatCalculation[] = $item;
        
        return $this;
    }
}
