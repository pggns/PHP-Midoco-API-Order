<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoFeeTypesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: return the fee types that match the criteria
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListMidocoFeeTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFeeType[]
     */
    protected ?array $MidocoFeeType = null;
    /**
     * Constructor method for ListMidocoFeeTypesResponse
     * @uses ListMidocoFeeTypesResponse::setMidocoFeeType()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeType[] $midocoFeeType
     */
    public function __construct(?array $midocoFeeType = null)
    {
        $this
            ->setMidocoFeeType($midocoFeeType);
    }
    /**
     * Get MidocoFeeType value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeType[]
     */
    public function getMidocoFeeType(): ?array
    {
        return $this->MidocoFeeType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFeeType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeTypeForArrayConstraintFromSetMidocoFeeType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listMidocoFeeTypesResponseMidocoFeeTypeItem) {
            // validation for constraint: itemType
            if (!$listMidocoFeeTypesResponseMidocoFeeTypeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeType) {
                $invalidValues[] = is_object($listMidocoFeeTypesResponseMidocoFeeTypeItem) ? get_class($listMidocoFeeTypesResponseMidocoFeeTypeItem) : sprintf('%s(%s)', gettype($listMidocoFeeTypesResponseMidocoFeeTypeItem), var_export($listMidocoFeeTypesResponseMidocoFeeTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeType[] $midocoFeeType
     * @return \Pggns\MidocoApi\Order\StructType\ListMidocoFeeTypesResponse
     */
    public function setMidocoFeeType(?array $midocoFeeType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeTypeArrayErrorMessage = self::validateMidocoFeeTypeForArrayConstraintFromSetMidocoFeeType($midocoFeeType))) {
            throw new InvalidArgumentException($midocoFeeTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeType $item
     * @return \Pggns\MidocoApi\Order\StructType\ListMidocoFeeTypesResponse
     */
    public function addToMidocoFeeType(\Pggns\MidocoApi\Order\StructType\MidocoFeeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeType) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeType[] = $item;
        
        return $this;
    }
}
