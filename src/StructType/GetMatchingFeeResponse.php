<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchingFeeResponse StructType
 * @subpackage Structs
 */
class GetMatchingFeeResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFeeTypeAssign
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign[]
     */
    protected array $MidocoFeeTypeAssign = [];
    /**
     * Constructor method for GetMatchingFeeResponse
     * @uses GetMatchingFeeResponse::setMidocoFeeTypeAssign()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign[] $midocoFeeTypeAssign
     */
    public function __construct(array $midocoFeeTypeAssign = [])
    {
        $this
            ->setMidocoFeeTypeAssign($midocoFeeTypeAssign);
    }
    /**
     * Get MidocoFeeTypeAssign value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign[]
     */
    public function getMidocoFeeTypeAssign(): array
    {
        return $this->MidocoFeeTypeAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFeeTypeAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeTypeAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeTypeAssignForArrayConstraintsFromSetMidocoFeeTypeAssign(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMatchingFeeResponseMidocoFeeTypeAssignItem) {
            // validation for constraint: itemType
            if (!$getMatchingFeeResponseMidocoFeeTypeAssignItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign) {
                $invalidValues[] = is_object($getMatchingFeeResponseMidocoFeeTypeAssignItem) ? get_class($getMatchingFeeResponseMidocoFeeTypeAssignItem) : sprintf('%s(%s)', gettype($getMatchingFeeResponseMidocoFeeTypeAssignItem), var_export($getMatchingFeeResponseMidocoFeeTypeAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeTypeAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeTypeAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign[] $midocoFeeTypeAssign
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeResponse
     */
    public function setMidocoFeeTypeAssign(array $midocoFeeTypeAssign = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeTypeAssignArrayErrorMessage = self::validateMidocoFeeTypeAssignForArrayConstraintsFromSetMidocoFeeTypeAssign($midocoFeeTypeAssign))) {
            throw new InvalidArgumentException($midocoFeeTypeAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeTypeAssign = $midocoFeeTypeAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeTypeAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeResponse
     */
    public function addToMidocoFeeTypeAssign(\Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeTypeAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeTypeAssign[] = $item;
        
        return $this;
    }
}
