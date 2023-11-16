<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedPrintTypeResponse StructType
 * @subpackage Structs
 */
class GetAssignedPrintTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintTypeAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoPrintTypeAssign
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPrintTypeAssign[]
     */
    protected array $MidocoPrintTypeAssign = [];
    /**
     * Constructor method for GetAssignedPrintTypeResponse
     * @uses GetAssignedPrintTypeResponse::setMidocoPrintTypeAssign()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintTypeAssign[] $midocoPrintTypeAssign
     */
    public function __construct(array $midocoPrintTypeAssign = [])
    {
        $this
            ->setMidocoPrintTypeAssign($midocoPrintTypeAssign);
    }
    /**
     * Get MidocoPrintTypeAssign value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintTypeAssign[]
     */
    public function getMidocoPrintTypeAssign(): array
    {
        return $this->MidocoPrintTypeAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintTypeAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintTypeAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintTypeAssignForArrayConstraintsFromSetMidocoPrintTypeAssign(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAssignedPrintTypeResponseMidocoPrintTypeAssignItem) {
            // validation for constraint: itemType
            if (!$getAssignedPrintTypeResponseMidocoPrintTypeAssignItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintTypeAssign) {
                $invalidValues[] = is_object($getAssignedPrintTypeResponseMidocoPrintTypeAssignItem) ? get_class($getAssignedPrintTypeResponseMidocoPrintTypeAssignItem) : sprintf('%s(%s)', gettype($getAssignedPrintTypeResponseMidocoPrintTypeAssignItem), var_export($getAssignedPrintTypeResponseMidocoPrintTypeAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintTypeAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintTypeAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintTypeAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintTypeAssign[] $midocoPrintTypeAssign
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedPrintTypeResponse
     */
    public function setMidocoPrintTypeAssign(array $midocoPrintTypeAssign = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintTypeAssignArrayErrorMessage = self::validateMidocoPrintTypeAssignForArrayConstraintsFromSetMidocoPrintTypeAssign($midocoPrintTypeAssign))) {
            throw new InvalidArgumentException($midocoPrintTypeAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintTypeAssign = $midocoPrintTypeAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintTypeAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintTypeAssign $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedPrintTypeResponse
     */
    public function addToMidocoPrintTypeAssign(\Pggns\MidocoApi\Order\StructType\MidocoPrintTypeAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintTypeAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintTypeAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintTypeAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintTypeAssign[] = $item;
        
        return $this;
    }
}
