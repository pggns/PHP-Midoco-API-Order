<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdCriteriaTypeDescriptionsRequest StructType
 * @subpackage Structs
 */
class GetOrdCriteriaTypeDescriptionsRequest extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaType
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaType[]
     */
    protected array $MidocoOrdCriteriaType = [];
    /**
     * Constructor method for GetOrdCriteriaTypeDescriptionsRequest
     * @uses GetOrdCriteriaTypeDescriptionsRequest::setMidocoOrdCriteriaType()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaType[] $midocoOrdCriteriaType
     */
    public function __construct(array $midocoOrdCriteriaType = [])
    {
        $this
            ->setMidocoOrdCriteriaType($midocoOrdCriteriaType);
    }
    /**
     * Get MidocoOrdCriteriaType value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaType[]
     */
    public function getMidocoOrdCriteriaType(): array
    {
        return $this->MidocoOrdCriteriaType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdCriteriaType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaTypeForArrayConstraintsFromSetMidocoOrdCriteriaType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdCriteriaTypeDescriptionsRequestMidocoOrdCriteriaTypeItem) {
            // validation for constraint: itemType
            if (!$getOrdCriteriaTypeDescriptionsRequestMidocoOrdCriteriaTypeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaType) {
                $invalidValues[] = is_object($getOrdCriteriaTypeDescriptionsRequestMidocoOrdCriteriaTypeItem) ? get_class($getOrdCriteriaTypeDescriptionsRequestMidocoOrdCriteriaTypeItem) : sprintf('%s(%s)', gettype($getOrdCriteriaTypeDescriptionsRequestMidocoOrdCriteriaTypeItem), var_export($getOrdCriteriaTypeDescriptionsRequestMidocoOrdCriteriaTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaType[] $midocoOrdCriteriaType
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdCriteriaTypeDescriptionsRequest
     */
    public function setMidocoOrdCriteriaType(array $midocoOrdCriteriaType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaTypeArrayErrorMessage = self::validateMidocoOrdCriteriaTypeForArrayConstraintsFromSetMidocoOrdCriteriaType($midocoOrdCriteriaType))) {
            throw new InvalidArgumentException($midocoOrdCriteriaTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaType = $midocoOrdCriteriaType;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdCriteriaTypeDescriptionsRequest
     */
    public function addToMidocoOrdCriteriaType(\Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaType) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaType[] = $item;
        
        return $this;
    }
}
