<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoPrintOptionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoPrintOptionResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintOption
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintOption
     * @var \Pggns\MidocoApi\Order\StructType\PrintOptionDTO[]
     */
    protected ?array $MidocoPrintOption = null;
    /**
     * Constructor method for GetMidocoPrintOptionResponse
     * @uses GetMidocoPrintOptionResponse::setMidocoPrintOption()
     * @param \Pggns\MidocoApi\Order\StructType\PrintOptionDTO[] $midocoPrintOption
     */
    public function __construct(?array $midocoPrintOption = null)
    {
        $this
            ->setMidocoPrintOption($midocoPrintOption);
    }
    /**
     * Get MidocoPrintOption value
     * @return \Pggns\MidocoApi\Order\StructType\PrintOptionDTO[]
     */
    public function getMidocoPrintOption(): ?array
    {
        return $this->MidocoPrintOption;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPrintOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintOption method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintOptionForArrayConstraintFromSetMidocoPrintOption(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoPrintOptionResponseMidocoPrintOptionItem) {
            // validation for constraint: itemType
            if (!$getMidocoPrintOptionResponseMidocoPrintOptionItem instanceof \Pggns\MidocoApi\Order\StructType\PrintOptionDTO) {
                $invalidValues[] = is_object($getMidocoPrintOptionResponseMidocoPrintOptionItem) ? get_class($getMidocoPrintOptionResponseMidocoPrintOptionItem) : sprintf('%s(%s)', gettype($getMidocoPrintOptionResponseMidocoPrintOptionItem), var_export($getMidocoPrintOptionResponseMidocoPrintOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintOption property can only contain items of type \Pggns\MidocoApi\Order\StructType\PrintOptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintOption value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PrintOptionDTO[] $midocoPrintOption
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoPrintOptionResponse
     */
    public function setMidocoPrintOption(?array $midocoPrintOption = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintOptionArrayErrorMessage = self::validateMidocoPrintOptionForArrayConstraintFromSetMidocoPrintOption($midocoPrintOption))) {
            throw new InvalidArgumentException($midocoPrintOptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintOption = $midocoPrintOption;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintOption value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PrintOptionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoPrintOptionResponse
     */
    public function addToMidocoPrintOption(\Pggns\MidocoApi\Order\StructType\PrintOptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\PrintOptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintOption property can only contain items of type \Pggns\MidocoApi\Order\StructType\PrintOptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintOption[] = $item;
        
        return $this;
    }
}
