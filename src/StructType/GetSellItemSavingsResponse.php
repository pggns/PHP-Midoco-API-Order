<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemSavingsResponse StructType
 * @subpackage Structs
 */
class GetSellItemSavingsResponse extends AbstractStructBase
{
    /**
     * The MidocoSellItemSaving
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemSaving
     * @var \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[]
     */
    protected array $MidocoSellItemSaving = [];
    /**
     * Constructor method for GetSellItemSavingsResponse
     * @uses GetSellItemSavingsResponse::setMidocoSellItemSaving()
     * @param \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[] $midocoSellItemSaving
     */
    public function __construct(array $midocoSellItemSaving = [])
    {
        $this
            ->setMidocoSellItemSaving($midocoSellItemSaving);
    }
    /**
     * Get MidocoSellItemSaving value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[]
     */
    public function getMidocoSellItemSaving(): array
    {
        return $this->MidocoSellItemSaving;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemSaving method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemSaving method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemSavingForArrayConstraintsFromSetMidocoSellItemSaving(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellItemSavingsResponseMidocoSellItemSavingItem) {
            // validation for constraint: itemType
            if (!$getSellItemSavingsResponseMidocoSellItemSavingItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO) {
                $invalidValues[] = is_object($getSellItemSavingsResponseMidocoSellItemSavingItem) ? get_class($getSellItemSavingsResponseMidocoSellItemSavingItem) : sprintf('%s(%s)', gettype($getSellItemSavingsResponseMidocoSellItemSavingItem), var_export($getSellItemSavingsResponseMidocoSellItemSavingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemSaving property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemSaving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[] $midocoSellItemSaving
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemSavingsResponse
     */
    public function setMidocoSellItemSaving(array $midocoSellItemSaving = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemSavingArrayErrorMessage = self::validateMidocoSellItemSavingForArrayConstraintsFromSetMidocoSellItemSaving($midocoSellItemSaving))) {
            throw new InvalidArgumentException($midocoSellItemSavingArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemSaving = $midocoSellItemSaving;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemSaving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemSavingsResponse
     */
    public function addToMidocoSellItemSaving(\Pggns\MidocoApi\Order\StructType\SellItemSavingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemSaving property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemSaving[] = $item;
        
        return $this;
    }
}
