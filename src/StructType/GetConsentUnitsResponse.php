<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsentUnitsResponse StructType
 * @subpackage Structs
 */
class GetConsentUnitsResponse extends AbstractStructBase
{
    /**
     * The disabledUnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $disabledUnitName = [];
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $unitName = [];
    /**
     * Constructor method for GetConsentUnitsResponse
     * @uses GetConsentUnitsResponse::setDisabledUnitName()
     * @uses GetConsentUnitsResponse::setUnitName()
     * @param string[] $disabledUnitName
     * @param string[] $unitName
     */
    public function __construct(array $disabledUnitName = [], array $unitName = [])
    {
        $this
            ->setDisabledUnitName($disabledUnitName)
            ->setUnitName($unitName);
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
        foreach ($values as $getConsentUnitsResponseDisabledUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($getConsentUnitsResponseDisabledUnitNameItem)) {
                $invalidValues[] = is_object($getConsentUnitsResponseDisabledUnitNameItem) ? get_class($getConsentUnitsResponseDisabledUnitNameItem) : sprintf('%s(%s)', gettype($getConsentUnitsResponseDisabledUnitNameItem), var_export($getConsentUnitsResponseDisabledUnitNameItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetConsentUnitsResponse
     */
    public function setDisabledUnitName(array $disabledUnitName = []): self
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
     * @return \Pggns\MidocoApi\Order\StructType\GetConsentUnitsResponse
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
    /**
     * Get unitName value
     * @return string[]
     */
    public function getUnitName(): array
    {
        return $this->unitName;
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
        foreach ($values as $getConsentUnitsResponseUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($getConsentUnitsResponseUnitNameItem)) {
                $invalidValues[] = is_object($getConsentUnitsResponseUnitNameItem) ? get_class($getConsentUnitsResponseUnitNameItem) : sprintf('%s(%s)', gettype($getConsentUnitsResponseUnitNameItem), var_export($getConsentUnitsResponseUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetConsentUnitsResponse
     */
    public function setUnitName(array $unitName = []): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintsFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to unitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetConsentUnitsResponse
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitName[] = $item;
        
        return $this;
    }
}
