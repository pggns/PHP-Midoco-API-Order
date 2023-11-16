<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConnectionTypeListResponse StructType
 * @subpackage Structs
 */
class GetConnectionTypeListResponse extends AbstractStructBase
{
    /**
     * The MidocoConnectionType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoConnectionType
     * @var \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO[]
     */
    protected array $MidocoConnectionType = [];
    /**
     * Constructor method for GetConnectionTypeListResponse
     * @uses GetConnectionTypeListResponse::setMidocoConnectionType()
     * @param \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO[] $midocoConnectionType
     */
    public function __construct(array $midocoConnectionType = [])
    {
        $this
            ->setMidocoConnectionType($midocoConnectionType);
    }
    /**
     * Get MidocoConnectionType value
     * @return \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO[]
     */
    public function getMidocoConnectionType(): array
    {
        return $this->MidocoConnectionType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoConnectionType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoConnectionType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoConnectionTypeForArrayConstraintsFromSetMidocoConnectionType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getConnectionTypeListResponseMidocoConnectionTypeItem) {
            // validation for constraint: itemType
            if (!$getConnectionTypeListResponseMidocoConnectionTypeItem instanceof \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO) {
                $invalidValues[] = is_object($getConnectionTypeListResponseMidocoConnectionTypeItem) ? get_class($getConnectionTypeListResponseMidocoConnectionTypeItem) : sprintf('%s(%s)', gettype($getConnectionTypeListResponseMidocoConnectionTypeItem), var_export($getConnectionTypeListResponseMidocoConnectionTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoConnectionType property can only contain items of type \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoConnectionType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO[] $midocoConnectionType
     * @return \Pggns\MidocoApi\Order\StructType\GetConnectionTypeListResponse
     */
    public function setMidocoConnectionType(array $midocoConnectionType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoConnectionTypeArrayErrorMessage = self::validateMidocoConnectionTypeForArrayConstraintsFromSetMidocoConnectionType($midocoConnectionType))) {
            throw new InvalidArgumentException($midocoConnectionTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoConnectionType = $midocoConnectionType;
        
        return $this;
    }
    /**
     * Add item to MidocoConnectionType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetConnectionTypeListResponse
     */
    public function addToMidocoConnectionType(\Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoConnectionType property can only contain items of type \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoConnectionType[] = $item;
        
        return $this;
    }
}
