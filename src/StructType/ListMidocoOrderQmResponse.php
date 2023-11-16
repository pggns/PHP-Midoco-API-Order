<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoOrderQmResponse StructType
 * @subpackage Structs
 */
class ListMidocoOrderQmResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderQm
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderQm
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderQm[]
     */
    protected array $MidocoOrderQm = [];
    /**
     * Constructor method for ListMidocoOrderQmResponse
     * @uses ListMidocoOrderQmResponse::setMidocoOrderQm()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderQm[] $midocoOrderQm
     */
    public function __construct(array $midocoOrderQm = [])
    {
        $this
            ->setMidocoOrderQm($midocoOrderQm);
    }
    /**
     * Get MidocoOrderQm value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderQm[]
     */
    public function getMidocoOrderQm(): array
    {
        return $this->MidocoOrderQm;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderQm method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderQm method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderQmForArrayConstraintsFromSetMidocoOrderQm(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listMidocoOrderQmResponseMidocoOrderQmItem) {
            // validation for constraint: itemType
            if (!$listMidocoOrderQmResponseMidocoOrderQmItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderQm) {
                $invalidValues[] = is_object($listMidocoOrderQmResponseMidocoOrderQmItem) ? get_class($listMidocoOrderQmResponseMidocoOrderQmItem) : sprintf('%s(%s)', gettype($listMidocoOrderQmResponseMidocoOrderQmItem), var_export($listMidocoOrderQmResponseMidocoOrderQmItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderQm property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderQm, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderQm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderQm[] $midocoOrderQm
     * @return \Pggns\MidocoApi\Order\StructType\ListMidocoOrderQmResponse
     */
    public function setMidocoOrderQm(array $midocoOrderQm = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderQmArrayErrorMessage = self::validateMidocoOrderQmForArrayConstraintsFromSetMidocoOrderQm($midocoOrderQm))) {
            throw new InvalidArgumentException($midocoOrderQmArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderQm = $midocoOrderQm;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderQm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderQm $item
     * @return \Pggns\MidocoApi\Order\StructType\ListMidocoOrderQmResponse
     */
    public function addToMidocoOrderQm(\Pggns\MidocoApi\Order\StructType\MidocoOrderQm $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderQm) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderQm property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderQm, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderQm[] = $item;
        
        return $this;
    }
}
