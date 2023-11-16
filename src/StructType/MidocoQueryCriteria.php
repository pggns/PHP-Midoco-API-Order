<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQueryCriteria StructType
 * @subpackage Structs
 */
class MidocoQueryCriteria extends AbstractStructBase
{
    /**
     * The value
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $value = [];
    /**
     * The fieldName
     * @var string|null
     */
    protected ?string $fieldName = null;
    /**
     * The compareWithField
     * @var bool|null
     */
    protected ?bool $compareWithField = null;
    /**
     * The opName
     * @var string|null
     */
    protected ?string $opName = null;
    /**
     * The visible
     * @var bool|null
     */
    protected ?bool $visible = null;
    /**
     * The isCaseInsensitive
     * @var bool|null
     */
    protected ?bool $isCaseInsensitive = null;
    /**
     * Constructor method for MidocoQueryCriteria
     * @uses MidocoQueryCriteria::setValue()
     * @uses MidocoQueryCriteria::setFieldName()
     * @uses MidocoQueryCriteria::setCompareWithField()
     * @uses MidocoQueryCriteria::setOpName()
     * @uses MidocoQueryCriteria::setVisible()
     * @uses MidocoQueryCriteria::setIsCaseInsensitive()
     * @param string[] $value
     * @param string $fieldName
     * @param bool $compareWithField
     * @param string $opName
     * @param bool $visible
     * @param bool $isCaseInsensitive
     */
    public function __construct(array $value = [], ?string $fieldName = null, ?bool $compareWithField = null, ?string $opName = null, ?bool $visible = null, ?bool $isCaseInsensitive = null)
    {
        $this
            ->setValue($value)
            ->setFieldName($fieldName)
            ->setCompareWithField($compareWithField)
            ->setOpName($opName)
            ->setVisible($visible)
            ->setIsCaseInsensitive($isCaseInsensitive);
    }
    /**
     * Get value value
     * @return string[]
     */
    public function getValue(): array
    {
        return $this->value;
    }
    /**
     * This method is responsible for validating the values passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForArrayConstraintsFromSetValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoQueryCriteriaValueItem) {
            // validation for constraint: itemType
            if (!is_string($midocoQueryCriteriaValueItem)) {
                $invalidValues[] = is_object($midocoQueryCriteriaValueItem) ? get_class($midocoQueryCriteriaValueItem) : sprintf('%s(%s)', gettype($midocoQueryCriteriaValueItem), var_export($midocoQueryCriteriaValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The value property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set value value
     * @throws InvalidArgumentException
     * @param string[] $value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria
     */
    public function setValue(array $value = []): self
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintsFromSetValue($value))) {
            throw new InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Add item to value value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria
     */
    public function addToValue(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The value property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->value[] = $item;
        
        return $this;
    }
    /**
     * Get fieldName value
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        
        return $this;
    }
    /**
     * Get compareWithField value
     * @return bool|null
     */
    public function getCompareWithField(): ?bool
    {
        return $this->compareWithField;
    }
    /**
     * Set compareWithField value
     * @param bool $compareWithField
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria
     */
    public function setCompareWithField(?bool $compareWithField = null): self
    {
        // validation for constraint: boolean
        if (!is_null($compareWithField) && !is_bool($compareWithField)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($compareWithField, true), gettype($compareWithField)), __LINE__);
        }
        $this->compareWithField = $compareWithField;
        
        return $this;
    }
    /**
     * Get opName value
     * @return string|null
     */
    public function getOpName(): ?string
    {
        return $this->opName;
    }
    /**
     * Set opName value
     * @param string $opName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria
     */
    public function setOpName(?string $opName = null): self
    {
        // validation for constraint: string
        if (!is_null($opName) && !is_string($opName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opName, true), gettype($opName)), __LINE__);
        }
        $this->opName = $opName;
        
        return $this;
    }
    /**
     * Get visible value
     * @return bool|null
     */
    public function getVisible(): ?bool
    {
        return $this->visible;
    }
    /**
     * Set visible value
     * @param bool $visible
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria
     */
    public function setVisible(?bool $visible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($visible) && !is_bool($visible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visible, true), gettype($visible)), __LINE__);
        }
        $this->visible = $visible;
        
        return $this;
    }
    /**
     * Get isCaseInsensitive value
     * @return bool|null
     */
    public function getIsCaseInsensitive(): ?bool
    {
        return $this->isCaseInsensitive;
    }
    /**
     * Set isCaseInsensitive value
     * @param bool $isCaseInsensitive
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria
     */
    public function setIsCaseInsensitive(?bool $isCaseInsensitive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCaseInsensitive) && !is_bool($isCaseInsensitive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCaseInsensitive, true), gettype($isCaseInsensitive)), __LINE__);
        }
        $this->isCaseInsensitive = $isCaseInsensitive;
        
        return $this;
    }
}
