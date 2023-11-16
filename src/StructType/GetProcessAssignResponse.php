<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProcessAssignResponse StructType
 * @subpackage Structs
 */
class GetProcessAssignResponse extends AbstractStructBase
{
    /**
     * The MidocoProcessAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProcessAssign
     * @var \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO[]
     */
    protected array $MidocoProcessAssign = [];
    /**
     * Constructor method for GetProcessAssignResponse
     * @uses GetProcessAssignResponse::setMidocoProcessAssign()
     * @param \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO[] $midocoProcessAssign
     */
    public function __construct(array $midocoProcessAssign = [])
    {
        $this
            ->setMidocoProcessAssign($midocoProcessAssign);
    }
    /**
     * Get MidocoProcessAssign value
     * @return \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO[]
     */
    public function getMidocoProcessAssign(): array
    {
        return $this->MidocoProcessAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoProcessAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProcessAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProcessAssignForArrayConstraintsFromSetMidocoProcessAssign(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProcessAssignResponseMidocoProcessAssignItem) {
            // validation for constraint: itemType
            if (!$getProcessAssignResponseMidocoProcessAssignItem instanceof \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO) {
                $invalidValues[] = is_object($getProcessAssignResponseMidocoProcessAssignItem) ? get_class($getProcessAssignResponseMidocoProcessAssignItem) : sprintf('%s(%s)', gettype($getProcessAssignResponseMidocoProcessAssignItem), var_export($getProcessAssignResponseMidocoProcessAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProcessAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProcessAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO[] $midocoProcessAssign
     * @return \Pggns\MidocoApi\Order\StructType\GetProcessAssignResponse
     */
    public function setMidocoProcessAssign(array $midocoProcessAssign = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProcessAssignArrayErrorMessage = self::validateMidocoProcessAssignForArrayConstraintsFromSetMidocoProcessAssign($midocoProcessAssign))) {
            throw new InvalidArgumentException($midocoProcessAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoProcessAssign = $midocoProcessAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoProcessAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetProcessAssignResponse
     */
    public function addToMidocoProcessAssign(\Pggns\MidocoApi\Order\StructType\ProcessAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoProcessAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProcessAssign[] = $item;
        
        return $this;
    }
}
