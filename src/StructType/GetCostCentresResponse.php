<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCostCentresResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCostCentresResponse extends AbstractStructBase
{
    /**
     * The MidocoCostCentre
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCostCentre
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCostCentre[]
     */
    protected ?array $MidocoCostCentre = null;
    /**
     * Constructor method for GetCostCentresResponse
     * @uses GetCostCentresResponse::setMidocoCostCentre()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCostCentre[] $midocoCostCentre
     */
    public function __construct(?array $midocoCostCentre = null)
    {
        $this
            ->setMidocoCostCentre($midocoCostCentre);
    }
    /**
     * Get MidocoCostCentre value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCostCentre[]
     */
    public function getMidocoCostCentre(): ?array
    {
        return $this->MidocoCostCentre;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCostCentre method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCostCentre method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCostCentreForArrayConstraintFromSetMidocoCostCentre(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCostCentresResponseMidocoCostCentreItem) {
            // validation for constraint: itemType
            if (!$getCostCentresResponseMidocoCostCentreItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCostCentre) {
                $invalidValues[] = is_object($getCostCentresResponseMidocoCostCentreItem) ? get_class($getCostCentresResponseMidocoCostCentreItem) : sprintf('%s(%s)', gettype($getCostCentresResponseMidocoCostCentreItem), var_export($getCostCentresResponseMidocoCostCentreItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCostCentre property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCostCentre, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCostCentre value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCostCentre[] $midocoCostCentre
     * @return \Pggns\MidocoApi\Order\StructType\GetCostCentresResponse
     */
    public function setMidocoCostCentre(?array $midocoCostCentre = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCostCentreArrayErrorMessage = self::validateMidocoCostCentreForArrayConstraintFromSetMidocoCostCentre($midocoCostCentre))) {
            throw new InvalidArgumentException($midocoCostCentreArrayErrorMessage, __LINE__);
        }
        $this->MidocoCostCentre = $midocoCostCentre;
        
        return $this;
    }
    /**
     * Add item to MidocoCostCentre value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCostCentre $item
     * @return \Pggns\MidocoApi\Order\StructType\GetCostCentresResponse
     */
    public function addToMidocoCostCentre(\Pggns\MidocoApi\Order\StructType\MidocoCostCentre $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCostCentre) {
            throw new InvalidArgumentException(sprintf('The MidocoCostCentre property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCostCentre, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCostCentre[] = $item;
        
        return $this;
    }
}
