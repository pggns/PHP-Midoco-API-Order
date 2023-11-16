<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Unprocessed-Units StructType
 * @subpackage Structs
 */
class Unprocessed_Units extends AbstractStructBase
{
    /**
     * The UnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $UnitName = [];
    /**
     * Constructor method for Unprocessed-Units
     * @uses Unprocessed_Units::setUnitName()
     * @param string[] $unitName
     */
    public function __construct(array $unitName)
    {
        $this
            ->setUnitName($unitName);
    }
    /**
     * Get UnitName value
     * @return string[]
     */
    public function getUnitName(): array
    {
        return $this->UnitName;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintsFromSetUnitName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $unprocessed_UnitsUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($unprocessed_UnitsUnitNameItem)) {
                $invalidValues[] = is_object($unprocessed_UnitsUnitNameItem) ? get_class($unprocessed_UnitsUnitNameItem) : sprintf('%s(%s)', gettype($unprocessed_UnitsUnitNameItem), var_export($unprocessed_UnitsUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Order\StructType\Unprocessed_Units
     */
    public function setUnitName(array $unitName): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintsFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->UnitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to UnitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\Unprocessed_Units
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The UnitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnitName[] = $item;
        
        return $this;
    }
}
