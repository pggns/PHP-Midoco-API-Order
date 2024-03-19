<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEMDSubgroupsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEMDSubgroupsResponse extends AbstractStructBase
{
    /**
     * The MidocoEMDSubgroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoEMDSubgroup
     * @var \Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup[]
     */
    protected ?array $MidocoEMDSubgroup = null;
    /**
     * Constructor method for GetEMDSubgroupsResponse
     * @uses GetEMDSubgroupsResponse::setMidocoEMDSubgroup()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup[] $midocoEMDSubgroup
     */
    public function __construct(?array $midocoEMDSubgroup = null)
    {
        $this
            ->setMidocoEMDSubgroup($midocoEMDSubgroup);
    }
    /**
     * Get MidocoEMDSubgroup value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup[]
     */
    public function getMidocoEMDSubgroup(): ?array
    {
        return $this->MidocoEMDSubgroup;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoEMDSubgroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEMDSubgroup method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEMDSubgroupForArrayConstraintFromSetMidocoEMDSubgroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEMDSubgroupsResponseMidocoEMDSubgroupItem) {
            // validation for constraint: itemType
            if (!$getEMDSubgroupsResponseMidocoEMDSubgroupItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup) {
                $invalidValues[] = is_object($getEMDSubgroupsResponseMidocoEMDSubgroupItem) ? get_class($getEMDSubgroupsResponseMidocoEMDSubgroupItem) : sprintf('%s(%s)', gettype($getEMDSubgroupsResponseMidocoEMDSubgroupItem), var_export($getEMDSubgroupsResponseMidocoEMDSubgroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEMDSubgroup property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEMDSubgroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup[] $midocoEMDSubgroup
     * @return \Pggns\MidocoApi\Order\StructType\GetEMDSubgroupsResponse
     */
    public function setMidocoEMDSubgroup(?array $midocoEMDSubgroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEMDSubgroupArrayErrorMessage = self::validateMidocoEMDSubgroupForArrayConstraintFromSetMidocoEMDSubgroup($midocoEMDSubgroup))) {
            throw new InvalidArgumentException($midocoEMDSubgroupArrayErrorMessage, __LINE__);
        }
        $this->MidocoEMDSubgroup = $midocoEMDSubgroup;
        
        return $this;
    }
    /**
     * Add item to MidocoEMDSubgroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup $item
     * @return \Pggns\MidocoApi\Order\StructType\GetEMDSubgroupsResponse
     */
    public function addToMidocoEMDSubgroup(\Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup) {
            throw new InvalidArgumentException(sprintf('The MidocoEMDSubgroup property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEMDSubgroup[] = $item;
        
        return $this;
    }
}
