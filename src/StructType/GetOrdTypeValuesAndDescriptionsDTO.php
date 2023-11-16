<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdTypeValuesAndDescriptionsDTO StructType
 * @subpackage Structs
 */
class GetOrdTypeValuesAndDescriptionsDTO extends AbstractStructBase
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
     * The key
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * The categoryId
     * @var int|null
     */
    protected ?int $categoryId = null;
    /**
     * The defaultValue
     * @var string|null
     */
    protected ?string $defaultValue = null;
    /**
     * Constructor method for GetOrdTypeValuesAndDescriptionsDTO
     * @uses GetOrdTypeValuesAndDescriptionsDTO::setValue()
     * @uses GetOrdTypeValuesAndDescriptionsDTO::setKey()
     * @uses GetOrdTypeValuesAndDescriptionsDTO::setCategoryId()
     * @uses GetOrdTypeValuesAndDescriptionsDTO::setDefaultValue()
     * @param string[] $value
     * @param string $key
     * @param int $categoryId
     * @param string $defaultValue
     */
    public function __construct(array $value = [], ?string $key = null, ?int $categoryId = null, ?string $defaultValue = null)
    {
        $this
            ->setValue($value)
            ->setKey($key)
            ->setCategoryId($categoryId)
            ->setDefaultValue($defaultValue);
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
        foreach ($values as $getOrdTypeValuesAndDescriptionsDTOValueItem) {
            // validation for constraint: itemType
            if (!is_string($getOrdTypeValuesAndDescriptionsDTOValueItem)) {
                $invalidValues[] = is_object($getOrdTypeValuesAndDescriptionsDTOValueItem) ? get_class($getOrdTypeValuesAndDescriptionsDTOValueItem) : sprintf('%s(%s)', gettype($getOrdTypeValuesAndDescriptionsDTOValueItem), var_export($getOrdTypeValuesAndDescriptionsDTOValueItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdTypeValuesAndDescriptionsDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdTypeValuesAndDescriptionsDTO
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
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdTypeValuesAndDescriptionsDTO
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get categoryId value
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $categoryId
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdTypeValuesAndDescriptionsDTO
     */
    public function setCategoryId(?int $categoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($categoryId) && !(is_int($categoryId) || ctype_digit($categoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
    /**
     * Get defaultValue value
     * @return string|null
     */
    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }
    /**
     * Set defaultValue value
     * @param string $defaultValue
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdTypeValuesAndDescriptionsDTO
     */
    public function setDefaultValue(?string $defaultValue = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        $this->defaultValue = $defaultValue;
        
        return $this;
    }
}
