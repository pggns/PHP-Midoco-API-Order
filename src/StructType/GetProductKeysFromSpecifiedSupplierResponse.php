<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductKeysFromSpecifiedSupplierResponse StructType
 * @subpackage Structs
 */
class GetProductKeysFromSpecifiedSupplierResponse extends AbstractStructBase
{
    /**
     * The ProductKey
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ProductKey
     * @var string[]
     */
    protected array $ProductKey = [];
    /**
     * Constructor method for GetProductKeysFromSpecifiedSupplierResponse
     * @uses GetProductKeysFromSpecifiedSupplierResponse::setProductKey()
     * @param string[] $productKey
     */
    public function __construct(array $productKey = [])
    {
        $this
            ->setProductKey($productKey);
    }
    /**
     * Get ProductKey value
     * @return string[]
     */
    public function getProductKey(): array
    {
        return $this->ProductKey;
    }
    /**
     * This method is responsible for validating the values passed to the setProductKey method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductKey method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductKeyForArrayConstraintsFromSetProductKey(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProductKeysFromSpecifiedSupplierResponseProductKeyItem) {
            // validation for constraint: itemType
            if (!is_string($getProductKeysFromSpecifiedSupplierResponseProductKeyItem)) {
                $invalidValues[] = is_object($getProductKeysFromSpecifiedSupplierResponseProductKeyItem) ? get_class($getProductKeysFromSpecifiedSupplierResponseProductKeyItem) : sprintf('%s(%s)', gettype($getProductKeysFromSpecifiedSupplierResponseProductKeyItem), var_export($getProductKeysFromSpecifiedSupplierResponseProductKeyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductKey property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductKey value
     * @throws InvalidArgumentException
     * @param string[] $productKey
     * @return \Pggns\MidocoApi\Order\StructType\GetProductKeysFromSpecifiedSupplierResponse
     */
    public function setProductKey(array $productKey = []): self
    {
        // validation for constraint: array
        if ('' !== ($productKeyArrayErrorMessage = self::validateProductKeyForArrayConstraintsFromSetProductKey($productKey))) {
            throw new InvalidArgumentException($productKeyArrayErrorMessage, __LINE__);
        }
        $this->ProductKey = $productKey;
        
        return $this;
    }
    /**
     * Add item to ProductKey value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetProductKeysFromSpecifiedSupplierResponse
     */
    public function addToProductKey(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ProductKey property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductKey[] = $item;
        
        return $this;
    }
}
