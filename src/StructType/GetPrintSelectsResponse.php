<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintSelectsResponse StructType
 * @subpackage Structs
 */
class GetPrintSelectsResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintSelect
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintSelect
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[]
     */
    protected array $MidocoPrintSelect = [];
    /**
     * Constructor method for GetPrintSelectsResponse
     * @uses GetPrintSelectsResponse::setMidocoPrintSelect()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[] $midocoPrintSelect
     */
    public function __construct(array $midocoPrintSelect = [])
    {
        $this
            ->setMidocoPrintSelect($midocoPrintSelect);
    }
    /**
     * Get MidocoPrintSelect value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[]
     */
    public function getMidocoPrintSelect(): array
    {
        return $this->MidocoPrintSelect;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintSelect method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintSelect method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintSelectForArrayConstraintsFromSetMidocoPrintSelect(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintSelectsResponseMidocoPrintSelectItem) {
            // validation for constraint: itemType
            if (!$getPrintSelectsResponseMidocoPrintSelectItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect) {
                $invalidValues[] = is_object($getPrintSelectsResponseMidocoPrintSelectItem) ? get_class($getPrintSelectsResponseMidocoPrintSelectItem) : sprintf('%s(%s)', gettype($getPrintSelectsResponseMidocoPrintSelectItem), var_export($getPrintSelectsResponseMidocoPrintSelectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[] $midocoPrintSelect
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsResponse
     */
    public function setMidocoPrintSelect(array $midocoPrintSelect = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintSelectArrayErrorMessage = self::validateMidocoPrintSelectForArrayConstraintsFromSetMidocoPrintSelect($midocoPrintSelect))) {
            throw new InvalidArgumentException($midocoPrintSelectArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintSelect = $midocoPrintSelect;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsResponse
     */
    public function addToMidocoPrintSelect(\Pggns\MidocoApi\Order\StructType\MidocoPrintSelect $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintSelect[] = $item;
        
        return $this;
    }
}
