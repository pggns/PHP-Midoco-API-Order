<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierShipNamesResponse StructType
 * @subpackage Structs
 */
class GetSupplierShipNamesResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierShipName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierShipName
     * @var \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO[]
     */
    protected array $MidocoSupplierShipName = [];
    /**
     * Constructor method for GetSupplierShipNamesResponse
     * @uses GetSupplierShipNamesResponse::setMidocoSupplierShipName()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO[] $midocoSupplierShipName
     */
    public function __construct(array $midocoSupplierShipName = [])
    {
        $this
            ->setMidocoSupplierShipName($midocoSupplierShipName);
    }
    /**
     * Get MidocoSupplierShipName value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO[]
     */
    public function getMidocoSupplierShipName(): array
    {
        return $this->MidocoSupplierShipName;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierShipName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierShipName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierShipNameForArrayConstraintsFromSetMidocoSupplierShipName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierShipNamesResponseMidocoSupplierShipNameItem) {
            // validation for constraint: itemType
            if (!$getSupplierShipNamesResponseMidocoSupplierShipNameItem instanceof \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO) {
                $invalidValues[] = is_object($getSupplierShipNamesResponseMidocoSupplierShipNameItem) ? get_class($getSupplierShipNamesResponseMidocoSupplierShipNameItem) : sprintf('%s(%s)', gettype($getSupplierShipNamesResponseMidocoSupplierShipNameItem), var_export($getSupplierShipNamesResponseMidocoSupplierShipNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierShipName property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierShipName value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO[] $midocoSupplierShipName
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierShipNamesResponse
     */
    public function setMidocoSupplierShipName(array $midocoSupplierShipName = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierShipNameArrayErrorMessage = self::validateMidocoSupplierShipNameForArrayConstraintsFromSetMidocoSupplierShipName($midocoSupplierShipName))) {
            throw new InvalidArgumentException($midocoSupplierShipNameArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierShipName = $midocoSupplierShipName;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierShipName value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierShipNamesResponse
     */
    public function addToMidocoSupplierShipName(\Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierShipName property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierShipName[] = $item;
        
        return $this;
    }
}
