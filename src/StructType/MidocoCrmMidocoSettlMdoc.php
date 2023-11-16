<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmMidocoSettlMdoc StructType
 * @subpackage Structs
 */
class MidocoCrmMidocoSettlMdoc extends CrmMidocoSettlMdocDTO
{
    /**
     * The MidocoCrmMidocoSettlMdocLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoSettlMdocLevel
     * @var \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO[]
     */
    protected array $MidocoCrmMidocoSettlMdocLevel = [];
    /**
     * The MidocoAssignedMidocoMdocOUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAssignedMidocoMdocOUnit
     * @var \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO[]
     */
    protected array $MidocoAssignedMidocoMdocOUnit = [];
    /**
     * Constructor method for MidocoCrmMidocoSettlMdoc
     * @uses MidocoCrmMidocoSettlMdoc::setMidocoCrmMidocoSettlMdocLevel()
     * @uses MidocoCrmMidocoSettlMdoc::setMidocoAssignedMidocoMdocOUnit()
     * @param \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO[] $midocoCrmMidocoSettlMdocLevel
     * @param \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO[] $midocoAssignedMidocoMdocOUnit
     */
    public function __construct(array $midocoCrmMidocoSettlMdocLevel = [], array $midocoAssignedMidocoMdocOUnit = [])
    {
        $this
            ->setMidocoCrmMidocoSettlMdocLevel($midocoCrmMidocoSettlMdocLevel)
            ->setMidocoAssignedMidocoMdocOUnit($midocoAssignedMidocoMdocOUnit);
    }
    /**
     * Get MidocoCrmMidocoSettlMdocLevel value
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO[]
     */
    public function getMidocoCrmMidocoSettlMdocLevel(): array
    {
        return $this->MidocoCrmMidocoSettlMdocLevel;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmMidocoSettlMdocLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMidocoSettlMdocLevel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMidocoSettlMdocLevelForArrayConstraintsFromSetMidocoCrmMidocoSettlMdocLevel(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem) {
            // validation for constraint: itemType
            if (!$midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem instanceof \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO) {
                $invalidValues[] = is_object($midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem) ? get_class($midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem) : sprintf('%s(%s)', gettype($midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem), var_export($midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmMidocoSettlMdocLevel property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmMidocoSettlMdocLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO[] $midocoCrmMidocoSettlMdocLevel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmMidocoSettlMdoc
     */
    public function setMidocoCrmMidocoSettlMdocLevel(array $midocoCrmMidocoSettlMdocLevel = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMidocoSettlMdocLevelArrayErrorMessage = self::validateMidocoCrmMidocoSettlMdocLevelForArrayConstraintsFromSetMidocoCrmMidocoSettlMdocLevel($midocoCrmMidocoSettlMdocLevel))) {
            throw new InvalidArgumentException($midocoCrmMidocoSettlMdocLevelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMidocoSettlMdocLevel = $midocoCrmMidocoSettlMdocLevel;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMidocoSettlMdocLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmMidocoSettlMdoc
     */
    public function addToMidocoCrmMidocoSettlMdocLevel(\Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmMidocoSettlMdocLevel property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmMidocoSettlMdocLevel[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAssignedMidocoMdocOUnit value
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO[]
     */
    public function getMidocoAssignedMidocoMdocOUnit(): array
    {
        return $this->MidocoAssignedMidocoMdocOUnit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAssignedMidocoMdocOUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAssignedMidocoMdocOUnit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAssignedMidocoMdocOUnitForArrayConstraintsFromSetMidocoAssignedMidocoMdocOUnit(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem) {
            // validation for constraint: itemType
            if (!$midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem instanceof \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO) {
                $invalidValues[] = is_object($midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem) ? get_class($midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem) : sprintf('%s(%s)', gettype($midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem), var_export($midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAssignedMidocoMdocOUnit property can only contain items of type \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAssignedMidocoMdocOUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO[] $midocoAssignedMidocoMdocOUnit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmMidocoSettlMdoc
     */
    public function setMidocoAssignedMidocoMdocOUnit(array $midocoAssignedMidocoMdocOUnit = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAssignedMidocoMdocOUnitArrayErrorMessage = self::validateMidocoAssignedMidocoMdocOUnitForArrayConstraintsFromSetMidocoAssignedMidocoMdocOUnit($midocoAssignedMidocoMdocOUnit))) {
            throw new InvalidArgumentException($midocoAssignedMidocoMdocOUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoAssignedMidocoMdocOUnit = $midocoAssignedMidocoMdocOUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoAssignedMidocoMdocOUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmMidocoSettlMdoc
     */
    public function addToMidocoAssignedMidocoMdocOUnit(\Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAssignedMidocoMdocOUnit property can only contain items of type \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAssignedMidocoMdocOUnit[] = $item;
        
        return $this;
    }
}
