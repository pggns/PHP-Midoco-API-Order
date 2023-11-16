<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HasBillingPositionsForSellItemsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: HasBillingPositionsForSellItemsRequest --- list with SellItemIds
 * @subpackage Structs
 */
class HasBillingPositionsForSellItemsRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoSellItemId
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[]
     */
    protected array $MidocoSellItemId = [];
    /**
     * Constructor method for HasBillingPositionsForSellItemsRequest
     * @uses HasBillingPositionsForSellItemsRequest::setMidocoSellItemId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[] $midocoSellItemId
     */
    public function __construct(array $midocoSellItemId = [])
    {
        $this
            ->setMidocoSellItemId($midocoSellItemId);
    }
    /**
     * Get MidocoSellItemId value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[]
     */
    public function getMidocoSellItemId(): array
    {
        return $this->MidocoSellItemId;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemIdForArrayConstraintsFromSetMidocoSellItemId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $hasBillingPositionsForSellItemsRequestMidocoSellItemIdItem) {
            // validation for constraint: itemType
            if (!$hasBillingPositionsForSellItemsRequestMidocoSellItemIdItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemId) {
                $invalidValues[] = is_object($hasBillingPositionsForSellItemsRequestMidocoSellItemIdItem) ? get_class($hasBillingPositionsForSellItemsRequestMidocoSellItemIdItem) : sprintf('%s(%s)', gettype($hasBillingPositionsForSellItemsRequestMidocoSellItemIdItem), var_export($hasBillingPositionsForSellItemsRequestMidocoSellItemIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemId property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemId, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[] $midocoSellItemId
     * @return \Pggns\MidocoApi\Order\StructType\HasBillingPositionsForSellItemsRequest
     */
    public function setMidocoSellItemId(array $midocoSellItemId = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemIdArrayErrorMessage = self::validateMidocoSellItemIdForArrayConstraintsFromSetMidocoSellItemId($midocoSellItemId))) {
            throw new InvalidArgumentException($midocoSellItemIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemId = $midocoSellItemId;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemId $item
     * @return \Pggns\MidocoApi\Order\StructType\HasBillingPositionsForSellItemsRequest
     */
    public function addToMidocoSellItemId(\Pggns\MidocoApi\Order\StructType\MidocoSellItemId $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemId) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemId property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemId, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemId[] = $item;
        
        return $this;
    }
}
