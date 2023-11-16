<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoGuiAttributeDefinitionResponse StructType
 * @subpackage Structs
 */
class GetMidocoGuiAttributeDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoGuiAttributeDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoGuiAttributeDefinition
     * @var \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO[]
     */
    protected array $MidocoGuiAttributeDefinition = [];
    /**
     * Constructor method for GetMidocoGuiAttributeDefinitionResponse
     * @uses GetMidocoGuiAttributeDefinitionResponse::setMidocoGuiAttributeDefinition()
     * @param \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO[] $midocoGuiAttributeDefinition
     */
    public function __construct(array $midocoGuiAttributeDefinition = [])
    {
        $this
            ->setMidocoGuiAttributeDefinition($midocoGuiAttributeDefinition);
    }
    /**
     * Get MidocoGuiAttributeDefinition value
     * @return \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO[]
     */
    public function getMidocoGuiAttributeDefinition(): array
    {
        return $this->MidocoGuiAttributeDefinition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoGuiAttributeDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoGuiAttributeDefinition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoGuiAttributeDefinitionForArrayConstraintsFromSetMidocoGuiAttributeDefinition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoGuiAttributeDefinitionResponseMidocoGuiAttributeDefinitionItem) {
            // validation for constraint: itemType
            if (!$getMidocoGuiAttributeDefinitionResponseMidocoGuiAttributeDefinitionItem instanceof \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO) {
                $invalidValues[] = is_object($getMidocoGuiAttributeDefinitionResponseMidocoGuiAttributeDefinitionItem) ? get_class($getMidocoGuiAttributeDefinitionResponseMidocoGuiAttributeDefinitionItem) : sprintf('%s(%s)', gettype($getMidocoGuiAttributeDefinitionResponseMidocoGuiAttributeDefinitionItem), var_export($getMidocoGuiAttributeDefinitionResponseMidocoGuiAttributeDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoGuiAttributeDefinition property can only contain items of type \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoGuiAttributeDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO[] $midocoGuiAttributeDefinition
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoGuiAttributeDefinitionResponse
     */
    public function setMidocoGuiAttributeDefinition(array $midocoGuiAttributeDefinition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoGuiAttributeDefinitionArrayErrorMessage = self::validateMidocoGuiAttributeDefinitionForArrayConstraintsFromSetMidocoGuiAttributeDefinition($midocoGuiAttributeDefinition))) {
            throw new InvalidArgumentException($midocoGuiAttributeDefinitionArrayErrorMessage, __LINE__);
        }
        $this->MidocoGuiAttributeDefinition = $midocoGuiAttributeDefinition;
        
        return $this;
    }
    /**
     * Add item to MidocoGuiAttributeDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoGuiAttributeDefinitionResponse
     */
    public function addToMidocoGuiAttributeDefinition(\Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoGuiAttributeDefinition property can only contain items of type \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoGuiAttributeDefinition[] = $item;
        
        return $this;
    }
}
