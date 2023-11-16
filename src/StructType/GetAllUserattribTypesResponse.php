<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllUserattribTypesResponse StructType
 * @subpackage Structs
 */
class GetAllUserattribTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoUserattribType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUserattribType
     * @var \Pggns\MidocoApi\Order\StructType\MidocoUserattribType[]
     */
    protected array $MidocoUserattribType = [];
    /**
     * Constructor method for GetAllUserattribTypesResponse
     * @uses GetAllUserattribTypesResponse::setMidocoUserattribType()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUserattribType[] $midocoUserattribType
     */
    public function __construct(array $midocoUserattribType = [])
    {
        $this
            ->setMidocoUserattribType($midocoUserattribType);
    }
    /**
     * Get MidocoUserattribType value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserattribType[]
     */
    public function getMidocoUserattribType(): array
    {
        return $this->MidocoUserattribType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoUserattribType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUserattribType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUserattribTypeForArrayConstraintsFromSetMidocoUserattribType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllUserattribTypesResponseMidocoUserattribTypeItem) {
            // validation for constraint: itemType
            if (!$getAllUserattribTypesResponseMidocoUserattribTypeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoUserattribType) {
                $invalidValues[] = is_object($getAllUserattribTypesResponseMidocoUserattribTypeItem) ? get_class($getAllUserattribTypesResponseMidocoUserattribTypeItem) : sprintf('%s(%s)', gettype($getAllUserattribTypesResponseMidocoUserattribTypeItem), var_export($getAllUserattribTypesResponseMidocoUserattribTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUserattribType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoUserattribType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUserattribType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUserattribType[] $midocoUserattribType
     * @return \Pggns\MidocoApi\Order\StructType\GetAllUserattribTypesResponse
     */
    public function setMidocoUserattribType(array $midocoUserattribType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUserattribTypeArrayErrorMessage = self::validateMidocoUserattribTypeForArrayConstraintsFromSetMidocoUserattribType($midocoUserattribType))) {
            throw new InvalidArgumentException($midocoUserattribTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoUserattribType = $midocoUserattribType;
        
        return $this;
    }
    /**
     * Add item to MidocoUserattribType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUserattribType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAllUserattribTypesResponse
     */
    public function addToMidocoUserattribType(\Pggns\MidocoApi\Order\StructType\MidocoUserattribType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoUserattribType) {
            throw new InvalidArgumentException(sprintf('The MidocoUserattribType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoUserattribType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUserattribType[] = $item;
        
        return $this;
    }
}
