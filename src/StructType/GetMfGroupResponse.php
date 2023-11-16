<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfGroupResponse StructType
 * @subpackage Structs
 */
class GetMfGroupResponse extends AbstractStructBase
{
    /**
     * The MidocoMfGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMfGroup
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMfGroup[]
     */
    protected array $MidocoMfGroup = [];
    /**
     * Constructor method for GetMfGroupResponse
     * @uses GetMfGroupResponse::setMidocoMfGroup()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfGroup[] $midocoMfGroup
     */
    public function __construct(array $midocoMfGroup = [])
    {
        $this
            ->setMidocoMfGroup($midocoMfGroup);
    }
    /**
     * Get MidocoMfGroup value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMfGroup[]
     */
    public function getMidocoMfGroup(): array
    {
        return $this->MidocoMfGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMfGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMfGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMfGroupForArrayConstraintsFromSetMidocoMfGroup(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMfGroupResponseMidocoMfGroupItem) {
            // validation for constraint: itemType
            if (!$getMfGroupResponseMidocoMfGroupItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMfGroup) {
                $invalidValues[] = is_object($getMfGroupResponseMidocoMfGroupItem) ? get_class($getMfGroupResponseMidocoMfGroupItem) : sprintf('%s(%s)', gettype($getMfGroupResponseMidocoMfGroupItem), var_export($getMfGroupResponseMidocoMfGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMfGroup property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMfGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMfGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfGroup[] $midocoMfGroup
     * @return \Pggns\MidocoApi\Order\StructType\GetMfGroupResponse
     */
    public function setMidocoMfGroup(array $midocoMfGroup = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMfGroupArrayErrorMessage = self::validateMidocoMfGroupForArrayConstraintsFromSetMidocoMfGroup($midocoMfGroup))) {
            throw new InvalidArgumentException($midocoMfGroupArrayErrorMessage, __LINE__);
        }
        $this->MidocoMfGroup = $midocoMfGroup;
        
        return $this;
    }
    /**
     * Add item to MidocoMfGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfGroup $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMfGroupResponse
     */
    public function addToMidocoMfGroup(\Pggns\MidocoApi\Order\StructType\MidocoMfGroup $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMfGroup) {
            throw new InvalidArgumentException(sprintf('The MidocoMfGroup property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMfGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMfGroup[] = $item;
        
        return $this;
    }
}
