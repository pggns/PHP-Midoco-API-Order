<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportSilverSurferDataRequest StructType
 * @subpackage Structs
 */
class ExportSilverSurferDataRequest extends AbstractStructBase
{
    /**
     * The unitNames
     * Meta information extracted from the WSDL
     * - documentation: units to export - if empty all units with adapter will be exported
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $unitNames = [];
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * Constructor method for ExportSilverSurferDataRequest
     * @uses ExportSilverSurferDataRequest::setUnitNames()
     * @uses ExportSilverSurferDataRequest::setStartTravel()
     * @param string[] $unitNames
     * @param string $startTravel
     */
    public function __construct(array $unitNames = [], ?string $startTravel = null)
    {
        $this
            ->setUnitNames($unitNames)
            ->setStartTravel($startTravel);
    }
    /**
     * Get unitNames value
     * @return string[]
     */
    public function getUnitNames(): array
    {
        return $this->unitNames;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitNames method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNamesForArrayConstraintsFromSetUnitNames(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $exportSilverSurferDataRequestUnitNamesItem) {
            // validation for constraint: itemType
            if (!is_string($exportSilverSurferDataRequestUnitNamesItem)) {
                $invalidValues[] = is_object($exportSilverSurferDataRequestUnitNamesItem) ? get_class($exportSilverSurferDataRequestUnitNamesItem) : sprintf('%s(%s)', gettype($exportSilverSurferDataRequestUnitNamesItem), var_export($exportSilverSurferDataRequestUnitNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitNames property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitNames value
     * @throws InvalidArgumentException
     * @param string[] $unitNames
     * @return \Pggns\MidocoApi\Order\StructType\ExportSilverSurferDataRequest
     */
    public function setUnitNames(array $unitNames = []): self
    {
        // validation for constraint: array
        if ('' !== ($unitNamesArrayErrorMessage = self::validateUnitNamesForArrayConstraintsFromSetUnitNames($unitNames))) {
            throw new InvalidArgumentException($unitNamesArrayErrorMessage, __LINE__);
        }
        $this->unitNames = $unitNames;
        
        return $this;
    }
    /**
     * Add item to unitNames value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\ExportSilverSurferDataRequest
     */
    public function addToUnitNames(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitNames property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitNames[] = $item;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\ExportSilverSurferDataRequest
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
}
