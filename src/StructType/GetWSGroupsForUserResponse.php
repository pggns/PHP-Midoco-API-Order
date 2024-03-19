<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWSGroupsForUserResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetWSGroupsForUserResponse extends AbstractStructBase
{
    /**
     * The MidocoWsGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoWsGroup
     * @var \Pggns\MidocoApi\Order\StructType\WsgroupDTO[]
     */
    protected ?array $MidocoWsGroup = null;
    /**
     * Constructor method for GetWSGroupsForUserResponse
     * @uses GetWSGroupsForUserResponse::setMidocoWsGroup()
     * @param \Pggns\MidocoApi\Order\StructType\WsgroupDTO[] $midocoWsGroup
     */
    public function __construct(?array $midocoWsGroup = null)
    {
        $this
            ->setMidocoWsGroup($midocoWsGroup);
    }
    /**
     * Get MidocoWsGroup value
     * @return \Pggns\MidocoApi\Order\StructType\WsgroupDTO[]
     */
    public function getMidocoWsGroup(): ?array
    {
        return $this->MidocoWsGroup;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoWsGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoWsGroup method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoWsGroupForArrayConstraintFromSetMidocoWsGroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWSGroupsForUserResponseMidocoWsGroupItem) {
            // validation for constraint: itemType
            if (!$getWSGroupsForUserResponseMidocoWsGroupItem instanceof \Pggns\MidocoApi\Order\StructType\WsgroupDTO) {
                $invalidValues[] = is_object($getWSGroupsForUserResponseMidocoWsGroupItem) ? get_class($getWSGroupsForUserResponseMidocoWsGroupItem) : sprintf('%s(%s)', gettype($getWSGroupsForUserResponseMidocoWsGroupItem), var_export($getWSGroupsForUserResponseMidocoWsGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoWsGroup property can only contain items of type \Pggns\MidocoApi\Order\StructType\WsgroupDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoWsGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\WsgroupDTO[] $midocoWsGroup
     * @return \Pggns\MidocoApi\Order\StructType\GetWSGroupsForUserResponse
     */
    public function setMidocoWsGroup(?array $midocoWsGroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoWsGroupArrayErrorMessage = self::validateMidocoWsGroupForArrayConstraintFromSetMidocoWsGroup($midocoWsGroup))) {
            throw new InvalidArgumentException($midocoWsGroupArrayErrorMessage, __LINE__);
        }
        $this->MidocoWsGroup = $midocoWsGroup;
        
        return $this;
    }
    /**
     * Add item to MidocoWsGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\WsgroupDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetWSGroupsForUserResponse
     */
    public function addToMidocoWsGroup(\Pggns\MidocoApi\Order\StructType\WsgroupDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\WsgroupDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoWsGroup property can only contain items of type \Pggns\MidocoApi\Order\StructType\WsgroupDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoWsGroup[] = $item;
        
        return $this;
    }
}
