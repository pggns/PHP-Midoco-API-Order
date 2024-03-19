<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoRemarkCategory StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoRemarkCategory extends RemarkCategoryDTO
{
    /**
     * The MidocoRemarkCategoryDesc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRemarkCategoryDesc
     * @var \Pggns\MidocoApi\Order\StructType\RemarkCategoryDescDTO[]
     */
    protected ?array $MidocoRemarkCategoryDesc = null;
    /**
     * The isInheritance
     * @var bool|null
     */
    protected ?bool $isInheritance = null;
    /**
     * The calcedDesc
     * @var string|null
     */
    protected ?string $calcedDesc = null;
    /**
     * Constructor method for MidocoRemarkCategory
     * @uses MidocoRemarkCategory::setMidocoRemarkCategoryDesc()
     * @uses MidocoRemarkCategory::setIsInheritance()
     * @uses MidocoRemarkCategory::setCalcedDesc()
     * @param \Pggns\MidocoApi\Order\StructType\RemarkCategoryDescDTO[] $midocoRemarkCategoryDesc
     * @param bool $isInheritance
     * @param string $calcedDesc
     */
    public function __construct(?array $midocoRemarkCategoryDesc = null, ?bool $isInheritance = null, ?string $calcedDesc = null)
    {
        $this
            ->setMidocoRemarkCategoryDesc($midocoRemarkCategoryDesc)
            ->setIsInheritance($isInheritance)
            ->setCalcedDesc($calcedDesc);
    }
    /**
     * Get MidocoRemarkCategoryDesc value
     * @return \Pggns\MidocoApi\Order\StructType\RemarkCategoryDescDTO[]
     */
    public function getMidocoRemarkCategoryDesc(): ?array
    {
        return $this->MidocoRemarkCategoryDesc;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoRemarkCategoryDesc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRemarkCategoryDesc method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRemarkCategoryDescForArrayConstraintFromSetMidocoRemarkCategoryDesc(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoRemarkCategoryMidocoRemarkCategoryDescItem) {
            // validation for constraint: itemType
            if (!$midocoRemarkCategoryMidocoRemarkCategoryDescItem instanceof \Pggns\MidocoApi\Order\StructType\RemarkCategoryDescDTO) {
                $invalidValues[] = is_object($midocoRemarkCategoryMidocoRemarkCategoryDescItem) ? get_class($midocoRemarkCategoryMidocoRemarkCategoryDescItem) : sprintf('%s(%s)', gettype($midocoRemarkCategoryMidocoRemarkCategoryDescItem), var_export($midocoRemarkCategoryMidocoRemarkCategoryDescItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRemarkCategoryDesc property can only contain items of type \Pggns\MidocoApi\Order\StructType\RemarkCategoryDescDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRemarkCategoryDesc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RemarkCategoryDescDTO[] $midocoRemarkCategoryDesc
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory
     */
    public function setMidocoRemarkCategoryDesc(?array $midocoRemarkCategoryDesc = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRemarkCategoryDescArrayErrorMessage = self::validateMidocoRemarkCategoryDescForArrayConstraintFromSetMidocoRemarkCategoryDesc($midocoRemarkCategoryDesc))) {
            throw new InvalidArgumentException($midocoRemarkCategoryDescArrayErrorMessage, __LINE__);
        }
        $this->MidocoRemarkCategoryDesc = $midocoRemarkCategoryDesc;
        
        return $this;
    }
    /**
     * Add item to MidocoRemarkCategoryDesc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RemarkCategoryDescDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory
     */
    public function addToMidocoRemarkCategoryDesc(\Pggns\MidocoApi\Order\StructType\RemarkCategoryDescDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\RemarkCategoryDescDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoRemarkCategoryDesc property can only contain items of type \Pggns\MidocoApi\Order\StructType\RemarkCategoryDescDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRemarkCategoryDesc[] = $item;
        
        return $this;
    }
    /**
     * Get isInheritance value
     * @return bool|null
     */
    public function getIsInheritance(): ?bool
    {
        return $this->isInheritance;
    }
    /**
     * Set isInheritance value
     * @param bool $isInheritance
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory
     */
    public function setIsInheritance(?bool $isInheritance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInheritance) && !is_bool($isInheritance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInheritance, true), gettype($isInheritance)), __LINE__);
        }
        $this->isInheritance = $isInheritance;
        
        return $this;
    }
    /**
     * Get calcedDesc value
     * @return string|null
     */
    public function getCalcedDesc(): ?string
    {
        return $this->calcedDesc;
    }
    /**
     * Set calcedDesc value
     * @param string $calcedDesc
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory
     */
    public function setCalcedDesc(?string $calcedDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($calcedDesc) && !is_string($calcedDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calcedDesc, true), gettype($calcedDesc)), __LINE__);
        }
        $this->calcedDesc = $calcedDesc;
        
        return $this;
    }
}
