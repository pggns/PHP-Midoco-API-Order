<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGUIOrderResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveGUIOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The MidocoSellItemTooltip
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemTooltip
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip[]
     */
    protected ?array $MidocoSellItemTooltip = null;
    /**
     * Constructor method for SaveGUIOrderResponse
     * @uses SaveGUIOrderResponse::setMidocoOrder()
     * @uses SaveGUIOrderResponse::setMidocoSellItemTooltip()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip[] $midocoSellItemTooltip
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, ?array $midocoSellItemTooltip = null)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setMidocoSellItemTooltip($midocoSellItemTooltip);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\SaveGUIOrderResponse
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get MidocoSellItemTooltip value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip[]
     */
    public function getMidocoSellItemTooltip(): ?array
    {
        return $this->MidocoSellItemTooltip;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellItemTooltip method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemTooltip method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemTooltipForArrayConstraintFromSetMidocoSellItemTooltip(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveGUIOrderResponseMidocoSellItemTooltipItem) {
            // validation for constraint: itemType
            if (!$saveGUIOrderResponseMidocoSellItemTooltipItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip) {
                $invalidValues[] = is_object($saveGUIOrderResponseMidocoSellItemTooltipItem) ? get_class($saveGUIOrderResponseMidocoSellItemTooltipItem) : sprintf('%s(%s)', gettype($saveGUIOrderResponseMidocoSellItemTooltipItem), var_export($saveGUIOrderResponseMidocoSellItemTooltipItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemTooltip property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemTooltip value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip[] $midocoSellItemTooltip
     * @return \Pggns\MidocoApi\Order\StructType\SaveGUIOrderResponse
     */
    public function setMidocoSellItemTooltip(?array $midocoSellItemTooltip = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemTooltipArrayErrorMessage = self::validateMidocoSellItemTooltipForArrayConstraintFromSetMidocoSellItemTooltip($midocoSellItemTooltip))) {
            throw new InvalidArgumentException($midocoSellItemTooltipArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemTooltip = $midocoSellItemTooltip;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemTooltip value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveGUIOrderResponse
     */
    public function addToMidocoSellItemTooltip(\Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemTooltip property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemTooltip, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemTooltip[] = $item;
        
        return $this;
    }
}
