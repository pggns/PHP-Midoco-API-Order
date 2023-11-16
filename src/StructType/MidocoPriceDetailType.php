<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPriceDetailType StructType
 * @subpackage Structs
 */
class MidocoPriceDetailType extends PriceDetailDTO
{
    /**
     * The MidocoDocumentItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDocumentItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem[]
     */
    protected array $MidocoDocumentItem = [];
    /**
     * Constructor method for MidocoPriceDetailType
     * @uses MidocoPriceDetailType::setMidocoDocumentItem()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem[] $midocoDocumentItem
     */
    public function __construct(array $midocoDocumentItem = [])
    {
        $this
            ->setMidocoDocumentItem($midocoDocumentItem);
    }
    /**
     * Get MidocoDocumentItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem[]
     */
    public function getMidocoDocumentItem(): array
    {
        return $this->MidocoDocumentItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDocumentItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDocumentItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDocumentItemForArrayConstraintsFromSetMidocoDocumentItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoPriceDetailTypeMidocoDocumentItemItem) {
            // validation for constraint: itemType
            if (!$midocoPriceDetailTypeMidocoDocumentItemItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem) {
                $invalidValues[] = is_object($midocoPriceDetailTypeMidocoDocumentItemItem) ? get_class($midocoPriceDetailTypeMidocoDocumentItemItem) : sprintf('%s(%s)', gettype($midocoPriceDetailTypeMidocoDocumentItemItem), var_export($midocoPriceDetailTypeMidocoDocumentItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDocumentItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDocumentItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem[] $midocoDocumentItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType
     */
    public function setMidocoDocumentItem(array $midocoDocumentItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDocumentItemArrayErrorMessage = self::validateMidocoDocumentItemForArrayConstraintsFromSetMidocoDocumentItem($midocoDocumentItem))) {
            throw new InvalidArgumentException($midocoDocumentItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoDocumentItem = $midocoDocumentItem;
        
        return $this;
    }
    /**
     * Add item to MidocoDocumentItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType
     */
    public function addToMidocoDocumentItem(\Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem) {
            throw new InvalidArgumentException(sprintf('The MidocoDocumentItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDocumentItem[] = $item;
        
        return $this;
    }
}
