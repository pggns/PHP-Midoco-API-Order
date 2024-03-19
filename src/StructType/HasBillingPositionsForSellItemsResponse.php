<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HasBillingPositionsForSellItemsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: HasBillingPositionsForSellItems --- checks for each sellItem if the sellItem or one of his children have BillingPositions. return list with SellItemIds and hasPrinted
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HasBillingPositionsForSellItemsResponse extends AbstractStructBase
{
    /**
     * The SellItemHasPrinted
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: SellItemHasPrinted
     * @var \Pggns\MidocoApi\Order\StructType\SellItemHasPrinted[]
     */
    protected ?array $SellItemHasPrinted = null;
    /**
     * Constructor method for HasBillingPositionsForSellItemsResponse
     * @uses HasBillingPositionsForSellItemsResponse::setSellItemHasPrinted()
     * @param \Pggns\MidocoApi\Order\StructType\SellItemHasPrinted[] $sellItemHasPrinted
     */
    public function __construct(?array $sellItemHasPrinted = null)
    {
        $this
            ->setSellItemHasPrinted($sellItemHasPrinted);
    }
    /**
     * Get SellItemHasPrinted value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemHasPrinted[]
     */
    public function getSellItemHasPrinted(): ?array
    {
        return $this->SellItemHasPrinted;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSellItemHasPrinted method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellItemHasPrinted method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellItemHasPrintedForArrayConstraintFromSetSellItemHasPrinted(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hasBillingPositionsForSellItemsResponseSellItemHasPrintedItem) {
            // validation for constraint: itemType
            if (!$hasBillingPositionsForSellItemsResponseSellItemHasPrintedItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemHasPrinted) {
                $invalidValues[] = is_object($hasBillingPositionsForSellItemsResponseSellItemHasPrintedItem) ? get_class($hasBillingPositionsForSellItemsResponseSellItemHasPrintedItem) : sprintf('%s(%s)', gettype($hasBillingPositionsForSellItemsResponseSellItemHasPrintedItem), var_export($hasBillingPositionsForSellItemsResponseSellItemHasPrintedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellItemHasPrinted property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemHasPrinted, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellItemHasPrinted value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemHasPrinted[] $sellItemHasPrinted
     * @return \Pggns\MidocoApi\Order\StructType\HasBillingPositionsForSellItemsResponse
     */
    public function setSellItemHasPrinted(?array $sellItemHasPrinted = null): self
    {
        // validation for constraint: array
        if ('' !== ($sellItemHasPrintedArrayErrorMessage = self::validateSellItemHasPrintedForArrayConstraintFromSetSellItemHasPrinted($sellItemHasPrinted))) {
            throw new InvalidArgumentException($sellItemHasPrintedArrayErrorMessage, __LINE__);
        }
        $this->SellItemHasPrinted = $sellItemHasPrinted;
        
        return $this;
    }
    /**
     * Add item to SellItemHasPrinted value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemHasPrinted $item
     * @return \Pggns\MidocoApi\Order\StructType\HasBillingPositionsForSellItemsResponse
     */
    public function addToSellItemHasPrinted(\Pggns\MidocoApi\Order\StructType\SellItemHasPrinted $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SellItemHasPrinted) {
            throw new InvalidArgumentException(sprintf('The SellItemHasPrinted property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemHasPrinted, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellItemHasPrinted[] = $item;
        
        return $this;
    }
}
