<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemarkOrgunitsResponse StructType
 * @subpackage Structs
 */
class GetRemarkOrgunitsResponse extends AbstractStructBase
{
    /**
     * The MidocoRemarkOrgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRemarkOrgunit
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit[]
     */
    protected array $MidocoRemarkOrgunit = [];
    /**
     * Constructor method for GetRemarkOrgunitsResponse
     * @uses GetRemarkOrgunitsResponse::setMidocoRemarkOrgunit()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit[] $midocoRemarkOrgunit
     */
    public function __construct(array $midocoRemarkOrgunit = [])
    {
        $this
            ->setMidocoRemarkOrgunit($midocoRemarkOrgunit);
    }
    /**
     * Get MidocoRemarkOrgunit value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit[]
     */
    public function getMidocoRemarkOrgunit(): array
    {
        return $this->MidocoRemarkOrgunit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRemarkOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRemarkOrgunit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRemarkOrgunitForArrayConstraintsFromSetMidocoRemarkOrgunit(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRemarkOrgunitsResponseMidocoRemarkOrgunitItem) {
            // validation for constraint: itemType
            if (!$getRemarkOrgunitsResponseMidocoRemarkOrgunitItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit) {
                $invalidValues[] = is_object($getRemarkOrgunitsResponseMidocoRemarkOrgunitItem) ? get_class($getRemarkOrgunitsResponseMidocoRemarkOrgunitItem) : sprintf('%s(%s)', gettype($getRemarkOrgunitsResponseMidocoRemarkOrgunitItem), var_export($getRemarkOrgunitsResponseMidocoRemarkOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRemarkOrgunit property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRemarkOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit[] $midocoRemarkOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\GetRemarkOrgunitsResponse
     */
    public function setMidocoRemarkOrgunit(array $midocoRemarkOrgunit = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRemarkOrgunitArrayErrorMessage = self::validateMidocoRemarkOrgunitForArrayConstraintsFromSetMidocoRemarkOrgunit($midocoRemarkOrgunit))) {
            throw new InvalidArgumentException($midocoRemarkOrgunitArrayErrorMessage, __LINE__);
        }
        $this->MidocoRemarkOrgunit = $midocoRemarkOrgunit;
        
        return $this;
    }
    /**
     * Add item to MidocoRemarkOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $item
     * @return \Pggns\MidocoApi\Order\StructType\GetRemarkOrgunitsResponse
     */
    public function addToMidocoRemarkOrgunit(\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit) {
            throw new InvalidArgumentException(sprintf('The MidocoRemarkOrgunit property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRemarkOrgunit[] = $item;
        
        return $this;
    }
}
