<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableSupplierNamesResponse StructType
 * @subpackage Structs
 */
class GetAvailableSupplierNamesResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierName
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierName[]
     */
    protected array $MidocoSupplierName = [];
    /**
     * Constructor method for GetAvailableSupplierNamesResponse
     * @uses GetAvailableSupplierNamesResponse::setMidocoSupplierName()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierName[] $midocoSupplierName
     */
    public function __construct(array $midocoSupplierName = [])
    {
        $this
            ->setMidocoSupplierName($midocoSupplierName);
    }
    /**
     * Get MidocoSupplierName value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierName[]
     */
    public function getMidocoSupplierName(): array
    {
        return $this->MidocoSupplierName;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierNameForArrayConstraintsFromSetMidocoSupplierName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableSupplierNamesResponseMidocoSupplierNameItem) {
            // validation for constraint: itemType
            if (!$getAvailableSupplierNamesResponseMidocoSupplierNameItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierName) {
                $invalidValues[] = is_object($getAvailableSupplierNamesResponseMidocoSupplierNameItem) ? get_class($getAvailableSupplierNamesResponseMidocoSupplierNameItem) : sprintf('%s(%s)', gettype($getAvailableSupplierNamesResponseMidocoSupplierNameItem), var_export($getAvailableSupplierNamesResponseMidocoSupplierNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierName property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierName value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierName[] $midocoSupplierName
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableSupplierNamesResponse
     */
    public function setMidocoSupplierName(array $midocoSupplierName = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierNameArrayErrorMessage = self::validateMidocoSupplierNameForArrayConstraintsFromSetMidocoSupplierName($midocoSupplierName))) {
            throw new InvalidArgumentException($midocoSupplierNameArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierName = $midocoSupplierName;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierName value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierName $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableSupplierNamesResponse
     */
    public function addToMidocoSupplierName(\Pggns\MidocoApi\Order\StructType\MidocoSupplierName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierName) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierName property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierName[] = $item;
        
        return $this;
    }
}
