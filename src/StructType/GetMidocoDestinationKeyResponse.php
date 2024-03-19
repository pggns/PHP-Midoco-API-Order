<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoDestinationKeyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoDestinationKeyResponse extends AbstractStructBase
{
    /**
     * The MidocoDestinationKeyAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDestinationKeyAssign
     * @var \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO[]
     */
    protected ?array $MidocoDestinationKeyAssign = null;
    /**
     * Constructor method for GetMidocoDestinationKeyResponse
     * @uses GetMidocoDestinationKeyResponse::setMidocoDestinationKeyAssign()
     * @param \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO[] $midocoDestinationKeyAssign
     */
    public function __construct(?array $midocoDestinationKeyAssign = null)
    {
        $this
            ->setMidocoDestinationKeyAssign($midocoDestinationKeyAssign);
    }
    /**
     * Get MidocoDestinationKeyAssign value
     * @return \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO[]
     */
    public function getMidocoDestinationKeyAssign(): ?array
    {
        return $this->MidocoDestinationKeyAssign;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDestinationKeyAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDestinationKeyAssign method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDestinationKeyAssignForArrayConstraintFromSetMidocoDestinationKeyAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoDestinationKeyResponseMidocoDestinationKeyAssignItem) {
            // validation for constraint: itemType
            if (!$getMidocoDestinationKeyResponseMidocoDestinationKeyAssignItem instanceof \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO) {
                $invalidValues[] = is_object($getMidocoDestinationKeyResponseMidocoDestinationKeyAssignItem) ? get_class($getMidocoDestinationKeyResponseMidocoDestinationKeyAssignItem) : sprintf('%s(%s)', gettype($getMidocoDestinationKeyResponseMidocoDestinationKeyAssignItem), var_export($getMidocoDestinationKeyResponseMidocoDestinationKeyAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDestinationKeyAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDestinationKeyAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO[] $midocoDestinationKeyAssign
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoDestinationKeyResponse
     */
    public function setMidocoDestinationKeyAssign(?array $midocoDestinationKeyAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDestinationKeyAssignArrayErrorMessage = self::validateMidocoDestinationKeyAssignForArrayConstraintFromSetMidocoDestinationKeyAssign($midocoDestinationKeyAssign))) {
            throw new InvalidArgumentException($midocoDestinationKeyAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoDestinationKeyAssign = $midocoDestinationKeyAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoDestinationKeyAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoDestinationKeyResponse
     */
    public function addToMidocoDestinationKeyAssign(\Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDestinationKeyAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\DestinationKeyAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDestinationKeyAssign[] = $item;
        
        return $this;
    }
}
