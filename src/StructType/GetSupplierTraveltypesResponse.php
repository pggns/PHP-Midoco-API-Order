<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierTraveltypesResponse StructType
 * @subpackage Structs
 */
class GetSupplierTraveltypesResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierTraveltype
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierTraveltype
     * @var \Pggns\MidocoApi\Order\StructType\SupplierTraveltypeDTO[]
     */
    protected array $MidocoSupplierTraveltype = [];
    /**
     * Constructor method for GetSupplierTraveltypesResponse
     * @uses GetSupplierTraveltypesResponse::setMidocoSupplierTraveltype()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierTraveltypeDTO[] $midocoSupplierTraveltype
     */
    public function __construct(array $midocoSupplierTraveltype = [])
    {
        $this
            ->setMidocoSupplierTraveltype($midocoSupplierTraveltype);
    }
    /**
     * Get MidocoSupplierTraveltype value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierTraveltypeDTO[]
     */
    public function getMidocoSupplierTraveltype(): array
    {
        return $this->MidocoSupplierTraveltype;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierTraveltype method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierTraveltype method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierTraveltypeForArrayConstraintsFromSetMidocoSupplierTraveltype(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierTraveltypesResponseMidocoSupplierTraveltypeItem) {
            // validation for constraint: itemType
            if (!$getSupplierTraveltypesResponseMidocoSupplierTraveltypeItem instanceof \Pggns\MidocoApi\Order\StructType\SupplierTraveltypeDTO) {
                $invalidValues[] = is_object($getSupplierTraveltypesResponseMidocoSupplierTraveltypeItem) ? get_class($getSupplierTraveltypesResponseMidocoSupplierTraveltypeItem) : sprintf('%s(%s)', gettype($getSupplierTraveltypesResponseMidocoSupplierTraveltypeItem), var_export($getSupplierTraveltypesResponseMidocoSupplierTraveltypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierTraveltype property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierTraveltypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierTraveltype value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierTraveltypeDTO[] $midocoSupplierTraveltype
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierTraveltypesResponse
     */
    public function setMidocoSupplierTraveltype(array $midocoSupplierTraveltype = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierTraveltypeArrayErrorMessage = self::validateMidocoSupplierTraveltypeForArrayConstraintsFromSetMidocoSupplierTraveltype($midocoSupplierTraveltype))) {
            throw new InvalidArgumentException($midocoSupplierTraveltypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierTraveltype = $midocoSupplierTraveltype;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierTraveltype value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierTraveltypeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierTraveltypesResponse
     */
    public function addToMidocoSupplierTraveltype(\Pggns\MidocoApi\Order\StructType\SupplierTraveltypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SupplierTraveltypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierTraveltype property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierTraveltypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierTraveltype[] = $item;
        
        return $this;
    }
}
