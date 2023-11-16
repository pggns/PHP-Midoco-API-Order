<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierDisabledUnitsRequest StructType
 * @subpackage Structs
 */
class SaveSupplierDisabledUnitsRequest extends AbstractStructBase
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
    protected array $disabledUnitName = [];
    /**
     * Constructor method for SaveSupplierDisabledUnitsRequest
     * @uses SaveSupplierDisabledUnitsRequest::setSupplierId()
     * @uses SaveSupplierDisabledUnitsRequest::setDisabledUnitName()
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierDisabledUnitsRequest
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
     * This method is responsible for validating the values passed to the setDisabledUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisabledUnitName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisabledUnitNameForArrayConstraintsFromSetDisabledUnitName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveSupplierDisabledUnitsRequestDisabledUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($saveSupplierDisabledUnitsRequestDisabledUnitNameItem)) {
                $invalidValues[] = is_object($saveSupplierDisabledUnitsRequestDisabledUnitNameItem) ? get_class($saveSupplierDisabledUnitsRequestDisabledUnitNameItem) : sprintf('%s(%s)', gettype($saveSupplierDisabledUnitsRequestDisabledUnitNameItem), var_export($saveSupplierDisabledUnitsRequestDisabledUnitNameItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierDisabledUnitsRequest
     */
    public function setDisabledUnitName(array $disabledUnitName): self
    {
        // validation for constraint: array
        if ('' !== ($disabledUnitNameArrayErrorMessage = self::validateDisabledUnitNameForArrayConstraintsFromSetDisabledUnitName($disabledUnitName))) {
            throw new InvalidArgumentException($disabledUnitNameArrayErrorMessage, __LINE__);
        }
        $this->disabledUnitName = $disabledUnitName;
        
        return $this;
    }
    /**
     * Add item to disabledUnitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierDisabledUnitsRequest
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
