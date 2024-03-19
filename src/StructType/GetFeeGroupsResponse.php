<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeeGroupsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetFeeGroupsResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFeeGroup
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup[]
     */
    protected ?array $MidocoFeeGroup = null;
    /**
     * Constructor method for GetFeeGroupsResponse
     * @uses GetFeeGroupsResponse::setMidocoFeeGroup()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup[] $midocoFeeGroup
     */
    public function __construct(?array $midocoFeeGroup = null)
    {
        $this
            ->setMidocoFeeGroup($midocoFeeGroup);
    }
    /**
     * Get MidocoFeeGroup value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup[]
     */
    public function getMidocoFeeGroup(): ?array
    {
        return $this->MidocoFeeGroup;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFeeGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeGroup method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeGroupForArrayConstraintFromSetMidocoFeeGroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFeeGroupsResponseMidocoFeeGroupItem) {
            // validation for constraint: itemType
            if (!$getFeeGroupsResponseMidocoFeeGroupItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup) {
                $invalidValues[] = is_object($getFeeGroupsResponseMidocoFeeGroupItem) ? get_class($getFeeGroupsResponseMidocoFeeGroupItem) : sprintf('%s(%s)', gettype($getFeeGroupsResponseMidocoFeeGroupItem), var_export($getFeeGroupsResponseMidocoFeeGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeGroup property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup[] $midocoFeeGroup
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupsResponse
     */
    public function setMidocoFeeGroup(?array $midocoFeeGroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeGroupArrayErrorMessage = self::validateMidocoFeeGroupForArrayConstraintFromSetMidocoFeeGroup($midocoFeeGroup))) {
            throw new InvalidArgumentException($midocoFeeGroupArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeGroup = $midocoFeeGroup;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup $item
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupsResponse
     */
    public function addToMidocoFeeGroup(\Pggns\MidocoApi\Order\StructType\MidocoFeeGroup $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeGroup property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeGroup[] = $item;
        
        return $this;
    }
}
