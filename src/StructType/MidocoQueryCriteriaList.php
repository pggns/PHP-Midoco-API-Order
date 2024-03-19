<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQueryCriteriaList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoQueryCriteriaList extends AbstractStructBase
{
    /**
     * The MidocoQueryCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoQueryCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria[]
     */
    protected ?array $MidocoQueryCriteria = null;
    /**
     * The displayIndex
     * @var int|null
     */
    protected ?int $displayIndex = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The existent
     * @var bool|null
     */
    protected ?bool $existent = null;
    /**
     * The inPackage
     * @var bool|null
     */
    protected ?bool $inPackage = null;
    /**
     * Constructor method for MidocoQueryCriteriaList
     * @uses MidocoQueryCriteriaList::setMidocoQueryCriteria()
     * @uses MidocoQueryCriteriaList::setDisplayIndex()
     * @uses MidocoQueryCriteriaList::setCategory()
     * @uses MidocoQueryCriteriaList::setExistent()
     * @uses MidocoQueryCriteriaList::setInPackage()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria[] $midocoQueryCriteria
     * @param int $displayIndex
     * @param string $category
     * @param bool $existent
     * @param bool $inPackage
     */
    public function __construct(?array $midocoQueryCriteria = null, ?int $displayIndex = null, ?string $category = null, ?bool $existent = null, ?bool $inPackage = null)
    {
        $this
            ->setMidocoQueryCriteria($midocoQueryCriteria)
            ->setDisplayIndex($displayIndex)
            ->setCategory($category)
            ->setExistent($existent)
            ->setInPackage($inPackage);
    }
    /**
     * Get MidocoQueryCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria[]
     */
    public function getMidocoQueryCriteria(): ?array
    {
        return $this->MidocoQueryCriteria;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoQueryCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQueryCriteria method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQueryCriteriaForArrayConstraintFromSetMidocoQueryCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoQueryCriteriaListMidocoQueryCriteriaItem) {
            // validation for constraint: itemType
            if (!$midocoQueryCriteriaListMidocoQueryCriteriaItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria) {
                $invalidValues[] = is_object($midocoQueryCriteriaListMidocoQueryCriteriaItem) ? get_class($midocoQueryCriteriaListMidocoQueryCriteriaItem) : sprintf('%s(%s)', gettype($midocoQueryCriteriaListMidocoQueryCriteriaItem), var_export($midocoQueryCriteriaListMidocoQueryCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQueryCriteria property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQueryCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria[] $midocoQueryCriteria
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList
     */
    public function setMidocoQueryCriteria(?array $midocoQueryCriteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQueryCriteriaArrayErrorMessage = self::validateMidocoQueryCriteriaForArrayConstraintFromSetMidocoQueryCriteria($midocoQueryCriteria))) {
            throw new InvalidArgumentException($midocoQueryCriteriaArrayErrorMessage, __LINE__);
        }
        $this->MidocoQueryCriteria = $midocoQueryCriteria;
        
        return $this;
    }
    /**
     * Add item to MidocoQueryCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList
     */
    public function addToMidocoQueryCriteria(\Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria) {
            throw new InvalidArgumentException(sprintf('The MidocoQueryCriteria property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQueryCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get displayIndex value
     * @return int|null
     */
    public function getDisplayIndex(): ?int
    {
        return $this->displayIndex;
    }
    /**
     * Set displayIndex value
     * @param int $displayIndex
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList
     */
    public function setDisplayIndex(?int $displayIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($displayIndex) && !(is_int($displayIndex) || ctype_digit($displayIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($displayIndex, true), gettype($displayIndex)), __LINE__);
        }
        $this->displayIndex = $displayIndex;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get existent value
     * @return bool|null
     */
    public function getExistent(): ?bool
    {
        return $this->existent;
    }
    /**
     * Set existent value
     * @param bool $existent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList
     */
    public function setExistent(?bool $existent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existent) && !is_bool($existent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existent, true), gettype($existent)), __LINE__);
        }
        $this->existent = $existent;
        
        return $this;
    }
    /**
     * Get inPackage value
     * @return bool|null
     */
    public function getInPackage(): ?bool
    {
        return $this->inPackage;
    }
    /**
     * Set inPackage value
     * @param bool $inPackage
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList
     */
    public function setInPackage(?bool $inPackage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inPackage) && !is_bool($inPackage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inPackage, true), gettype($inPackage)), __LINE__);
        }
        $this->inPackage = $inPackage;
        
        return $this;
    }
}
