<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeeTypeForOrgunitResponse StructType
 * @subpackage Structs
 */
class GetFeeTypeForOrgunitResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeOrgUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoFeeTypeOrgUnit
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit[]
     */
    protected array $MidocoFeeTypeOrgUnit = [];
    /**
     * Constructor method for GetFeeTypeForOrgunitResponse
     * @uses GetFeeTypeForOrgunitResponse::setMidocoFeeTypeOrgUnit()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit[] $midocoFeeTypeOrgUnit
     */
    public function __construct(array $midocoFeeTypeOrgUnit = [])
    {
        $this
            ->setMidocoFeeTypeOrgUnit($midocoFeeTypeOrgUnit);
    }
    /**
     * Get MidocoFeeTypeOrgUnit value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit[]
     */
    public function getMidocoFeeTypeOrgUnit(): array
    {
        return $this->MidocoFeeTypeOrgUnit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFeeTypeOrgUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeTypeOrgUnit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeTypeOrgUnitForArrayConstraintsFromSetMidocoFeeTypeOrgUnit(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem) {
            // validation for constraint: itemType
            if (!$getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit) {
                $invalidValues[] = is_object($getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem) ? get_class($getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem) : sprintf('%s(%s)', gettype($getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem), var_export($getFeeTypeForOrgunitResponseMidocoFeeTypeOrgUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeTypeOrgUnit property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeTypeOrgUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit[] $midocoFeeTypeOrgUnit
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeTypeForOrgunitResponse
     */
    public function setMidocoFeeTypeOrgUnit(array $midocoFeeTypeOrgUnit = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeTypeOrgUnitArrayErrorMessage = self::validateMidocoFeeTypeOrgUnitForArrayConstraintsFromSetMidocoFeeTypeOrgUnit($midocoFeeTypeOrgUnit))) {
            throw new InvalidArgumentException($midocoFeeTypeOrgUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeTypeOrgUnit = $midocoFeeTypeOrgUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeTypeOrgUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit $item
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeTypeForOrgunitResponse
     */
    public function addToMidocoFeeTypeOrgUnit(\Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeTypeOrgUnit property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeTypeOrgUnit[] = $item;
        
        return $this;
    }
}
