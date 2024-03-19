<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoProperty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoProperty extends AbstractStructBase
{
    /**
     * The MidocoVisibleClass
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVisibleClass
     * @var \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass[]
     */
    protected ?array $MidocoVisibleClass = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MidocoProperty
     * @uses MidocoProperty::setMidocoVisibleClass()
     * @uses MidocoProperty::setUnitName()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass[] $midocoVisibleClass
     * @param string $unitName
     */
    public function __construct(?array $midocoVisibleClass = null, ?string $unitName = null)
    {
        $this
            ->setMidocoVisibleClass($midocoVisibleClass)
            ->setUnitName($unitName);
    }
    /**
     * Get MidocoVisibleClass value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass[]
     */
    public function getMidocoVisibleClass(): ?array
    {
        return $this->MidocoVisibleClass;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVisibleClass method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVisibleClass method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVisibleClassForArrayConstraintFromSetMidocoVisibleClass(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoPropertyMidocoVisibleClassItem) {
            // validation for constraint: itemType
            if (!$midocoPropertyMidocoVisibleClassItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass) {
                $invalidValues[] = is_object($midocoPropertyMidocoVisibleClassItem) ? get_class($midocoPropertyMidocoVisibleClassItem) : sprintf('%s(%s)', gettype($midocoPropertyMidocoVisibleClassItem), var_export($midocoPropertyMidocoVisibleClassItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVisibleClass property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVisibleClass value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass[] $midocoVisibleClass
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProperty
     */
    public function setMidocoVisibleClass(?array $midocoVisibleClass = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVisibleClassArrayErrorMessage = self::validateMidocoVisibleClassForArrayConstraintFromSetMidocoVisibleClass($midocoVisibleClass))) {
            throw new InvalidArgumentException($midocoVisibleClassArrayErrorMessage, __LINE__);
        }
        $this->MidocoVisibleClass = $midocoVisibleClass;
        
        return $this;
    }
    /**
     * Add item to MidocoVisibleClass value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProperty
     */
    public function addToMidocoVisibleClass(\Pggns\MidocoApi\Order\StructType\MidocoVisibleClass $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass) {
            throw new InvalidArgumentException(sprintf('The MidocoVisibleClass property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVisibleClass[] = $item;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProperty
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
