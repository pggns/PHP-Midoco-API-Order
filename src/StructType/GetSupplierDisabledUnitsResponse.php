<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierDisabledUnitsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierDisabledUnitsResponse extends AbstractStructBase
{
    /**
     * The disabledUnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $disabledUnitName = null;
    /**
     * Constructor method for GetSupplierDisabledUnitsResponse
     * @uses GetSupplierDisabledUnitsResponse::setDisabledUnitName()
     * @param string[] $disabledUnitName
     */
    public function __construct(?array $disabledUnitName = null)
    {
        $this
            ->setDisabledUnitName($disabledUnitName);
    }
    /**
     * Get disabledUnitName value
     * @return string[]
     */
    public function getDisabledUnitName(): ?array
    {
        return $this->disabledUnitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDisabledUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisabledUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisabledUnitNameForArrayConstraintFromSetDisabledUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierDisabledUnitsResponseDisabledUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($getSupplierDisabledUnitsResponseDisabledUnitNameItem)) {
                $invalidValues[] = is_object($getSupplierDisabledUnitsResponseDisabledUnitNameItem) ? get_class($getSupplierDisabledUnitsResponseDisabledUnitNameItem) : sprintf('%s(%s)', gettype($getSupplierDisabledUnitsResponseDisabledUnitNameItem), var_export($getSupplierDisabledUnitsResponseDisabledUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The disabledUnitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set disabledUnitName value
     * @throws InvalidArgumentException
     * @param string[] $disabledUnitName
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierDisabledUnitsResponse
     */
    public function setDisabledUnitName(?array $disabledUnitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($disabledUnitNameArrayErrorMessage = self::validateDisabledUnitNameForArrayConstraintFromSetDisabledUnitName($disabledUnitName))) {
            throw new InvalidArgumentException($disabledUnitNameArrayErrorMessage, __LINE__);
        }
        $this->disabledUnitName = $disabledUnitName;
        
        return $this;
    }
    /**
     * Add item to disabledUnitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierDisabledUnitsResponse
     */
    public function addToDisabledUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The disabledUnitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->disabledUnitName[] = $item;
        
        return $this;
    }
}
