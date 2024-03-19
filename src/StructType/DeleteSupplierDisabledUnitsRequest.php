<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierDisabledUnitsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSupplierDisabledUnitsRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $supplierId;
    /**
     * The disabledUnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $disabledUnitName;
    /**
     * Constructor method for DeleteSupplierDisabledUnitsRequest
     * @uses DeleteSupplierDisabledUnitsRequest::setSupplierId()
     * @uses DeleteSupplierDisabledUnitsRequest::setDisabledUnitName()
     * @param string $supplierId
     * @param string[] $disabledUnitName
     */
    public function __construct(string $supplierId, array $disabledUnitName)
    {
        $this
            ->setSupplierId($supplierId)
            ->setDisabledUnitName($disabledUnitName);
    }
    /**
     * Get supplierId value
     * @return string
     */
    public function getSupplierId(): string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierDisabledUnitsRequest
     */
    public function setSupplierId(string $supplierId): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get disabledUnitName value
     * @return string[]
     */
    public function getDisabledUnitName(): array
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
        foreach ($values as $deleteSupplierDisabledUnitsRequestDisabledUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($deleteSupplierDisabledUnitsRequestDisabledUnitNameItem)) {
                $invalidValues[] = is_object($deleteSupplierDisabledUnitsRequestDisabledUnitNameItem) ? get_class($deleteSupplierDisabledUnitsRequestDisabledUnitNameItem) : sprintf('%s(%s)', gettype($deleteSupplierDisabledUnitsRequestDisabledUnitNameItem), var_export($deleteSupplierDisabledUnitsRequestDisabledUnitNameItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierDisabledUnitsRequest
     */
    public function setDisabledUnitName(array $disabledUnitName): self
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierDisabledUnitsRequest
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
