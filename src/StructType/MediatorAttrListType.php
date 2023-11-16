<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorAttrListType StructType
 * @subpackage Structs
 */
class MediatorAttrListType extends AbstractStructBase
{
    /**
     * The mediatorAttr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $mediatorAttr = [];
    /**
     * Constructor method for MediatorAttrListType
     * @uses MediatorAttrListType::setMediatorAttr()
     * @param string[] $mediatorAttr
     */
    public function __construct(array $mediatorAttr = [])
    {
        $this
            ->setMediatorAttr($mediatorAttr);
    }
    /**
     * Get mediatorAttr value
     * @return string[]
     */
    public function getMediatorAttr(): array
    {
        return $this->mediatorAttr;
    }
    /**
     * This method is responsible for validating the values passed to the setMediatorAttr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediatorAttr method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediatorAttrForArrayConstraintsFromSetMediatorAttr(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mediatorAttrListTypeMediatorAttrItem) {
            // validation for constraint: itemType
            if (!is_string($mediatorAttrListTypeMediatorAttrItem)) {
                $invalidValues[] = is_object($mediatorAttrListTypeMediatorAttrItem) ? get_class($mediatorAttrListTypeMediatorAttrItem) : sprintf('%s(%s)', gettype($mediatorAttrListTypeMediatorAttrItem), var_export($mediatorAttrListTypeMediatorAttrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mediatorAttr property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mediatorAttr value
     * @throws InvalidArgumentException
     * @param string[] $mediatorAttr
     * @return \Pggns\MidocoApi\Order\StructType\MediatorAttrListType
     */
    public function setMediatorAttr(array $mediatorAttr = []): self
    {
        // validation for constraint: array
        if ('' !== ($mediatorAttrArrayErrorMessage = self::validateMediatorAttrForArrayConstraintsFromSetMediatorAttr($mediatorAttr))) {
            throw new InvalidArgumentException($mediatorAttrArrayErrorMessage, __LINE__);
        }
        $this->mediatorAttr = $mediatorAttr;
        
        return $this;
    }
    /**
     * Add item to mediatorAttr value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MediatorAttrListType
     */
    public function addToMediatorAttr(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The mediatorAttr property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mediatorAttr[] = $item;
        
        return $this;
    }
}
