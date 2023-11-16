<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAttributeValue StructType
 * @subpackage Structs
 */
class MidocoAttributeValue extends AbstractStructBase
{
    /**
     * The MidocoChoiceValues
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoChoiceValues
     * @var \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueType[]
     */
    protected array $MidocoChoiceValues = [];
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * The attributeValue
     * @var string|null
     */
    protected ?string $attributeValue = null;
    /**
     * The attributeType
     * @var int|null
     */
    protected ?int $attributeType = null;
    /**
     * The localization
     * @var string|null
     */
    protected ?string $localization = null;
    /**
     * The mandatory
     * @var bool|null
     */
    protected ?bool $mandatory = null;
    /**
     * The defaultValue
     * @var string|null
     */
    protected ?string $defaultValue = null;
    /**
     * The formatedValue
     * @var string|null
     */
    protected ?string $formatedValue = null;
    /**
     * The typeLength
     * @var int|null
     */
    protected ?int $typeLength = null;
    /**
     * The typePrecision
     * @var int|null
     */
    protected ?int $typePrecision = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * Constructor method for MidocoAttributeValue
     * @uses MidocoAttributeValue::setMidocoChoiceValues()
     * @uses MidocoAttributeValue::setId()
     * @uses MidocoAttributeValue::setAttributeName()
     * @uses MidocoAttributeValue::setAttributeValue()
     * @uses MidocoAttributeValue::setAttributeType()
     * @uses MidocoAttributeValue::setLocalization()
     * @uses MidocoAttributeValue::setMandatory()
     * @uses MidocoAttributeValue::setDefaultValue()
     * @uses MidocoAttributeValue::setFormatedValue()
     * @uses MidocoAttributeValue::setTypeLength()
     * @uses MidocoAttributeValue::setTypePrecision()
     * @uses MidocoAttributeValue::setCreationUser()
     * @uses MidocoAttributeValue::setModifyUser()
     * @uses MidocoAttributeValue::setCreationDate()
     * @uses MidocoAttributeValue::setModifyDate()
     * @param \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueType[] $midocoChoiceValues
     * @param int $id
     * @param string $attributeName
     * @param string $attributeValue
     * @param int $attributeType
     * @param string $localization
     * @param bool $mandatory
     * @param string $defaultValue
     * @param string $formatedValue
     * @param int $typeLength
     * @param int $typePrecision
     * @param int $creationUser
     * @param int $modifyUser
     * @param string $creationDate
     * @param string $modifyDate
     */
    public function __construct(array $midocoChoiceValues = [], ?int $id = null, ?string $attributeName = null, ?string $attributeValue = null, ?int $attributeType = null, ?string $localization = null, ?bool $mandatory = null, ?string $defaultValue = null, ?string $formatedValue = null, ?int $typeLength = null, ?int $typePrecision = null, ?int $creationUser = null, ?int $modifyUser = null, ?string $creationDate = null, ?string $modifyDate = null)
    {
        $this
            ->setMidocoChoiceValues($midocoChoiceValues)
            ->setId($id)
            ->setAttributeName($attributeName)
            ->setAttributeValue($attributeValue)
            ->setAttributeType($attributeType)
            ->setLocalization($localization)
            ->setMandatory($mandatory)
            ->setDefaultValue($defaultValue)
            ->setFormatedValue($formatedValue)
            ->setTypeLength($typeLength)
            ->setTypePrecision($typePrecision)
            ->setCreationUser($creationUser)
            ->setModifyUser($modifyUser)
            ->setCreationDate($creationDate)
            ->setModifyDate($modifyDate);
    }
    /**
     * Get MidocoChoiceValues value
     * @return \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueType[]
     */
    public function getMidocoChoiceValues(): array
    {
        return $this->MidocoChoiceValues;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoChoiceValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoChoiceValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoChoiceValuesForArrayConstraintsFromSetMidocoChoiceValues(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAttributeValueMidocoChoiceValuesItem) {
            // validation for constraint: itemType
            if (!$midocoAttributeValueMidocoChoiceValuesItem instanceof \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueType) {
                $invalidValues[] = is_object($midocoAttributeValueMidocoChoiceValuesItem) ? get_class($midocoAttributeValueMidocoChoiceValuesItem) : sprintf('%s(%s)', gettype($midocoAttributeValueMidocoChoiceValuesItem), var_export($midocoAttributeValueMidocoChoiceValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoChoiceValues property can only contain items of type \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoChoiceValues value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueType[] $midocoChoiceValues
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setMidocoChoiceValues(array $midocoChoiceValues = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoChoiceValuesArrayErrorMessage = self::validateMidocoChoiceValuesForArrayConstraintsFromSetMidocoChoiceValues($midocoChoiceValues))) {
            throw new InvalidArgumentException($midocoChoiceValuesArrayErrorMessage, __LINE__);
        }
        $this->MidocoChoiceValues = $midocoChoiceValues;
        
        return $this;
    }
    /**
     * Add item to MidocoChoiceValues value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function addToMidocoChoiceValues(\Pggns\MidocoApi\Order\StructType\AttributeChoiceValueType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueType) {
            throw new InvalidArgumentException(sprintf('The MidocoChoiceValues property can only contain items of type \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoChoiceValues[] = $item;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get attributeName value
     * @return string|null
     */
    public function getAttributeName(): ?string
    {
        return $this->attributeName;
    }
    /**
     * Set attributeName value
     * @param string $attributeName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setAttributeName(?string $attributeName = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeName) && !is_string($attributeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeName, true), gettype($attributeName)), __LINE__);
        }
        $this->attributeName = $attributeName;
        
        return $this;
    }
    /**
     * Get attributeValue value
     * @return string|null
     */
    public function getAttributeValue(): ?string
    {
        return $this->attributeValue;
    }
    /**
     * Set attributeValue value
     * @param string $attributeValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setAttributeValue(?string $attributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeValue) && !is_string($attributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeValue, true), gettype($attributeValue)), __LINE__);
        }
        $this->attributeValue = $attributeValue;
        
        return $this;
    }
    /**
     * Get attributeType value
     * @return int|null
     */
    public function getAttributeType(): ?int
    {
        return $this->attributeType;
    }
    /**
     * Set attributeType value
     * @param int $attributeType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setAttributeType(?int $attributeType = null): self
    {
        // validation for constraint: int
        if (!is_null($attributeType) && !(is_int($attributeType) || ctype_digit($attributeType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeType, true), gettype($attributeType)), __LINE__);
        }
        $this->attributeType = $attributeType;
        
        return $this;
    }
    /**
     * Get localization value
     * @return string|null
     */
    public function getLocalization(): ?string
    {
        return $this->localization;
    }
    /**
     * Set localization value
     * @param string $localization
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setLocalization(?string $localization = null): self
    {
        // validation for constraint: string
        if (!is_null($localization) && !is_string($localization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localization, true), gettype($localization)), __LINE__);
        }
        $this->localization = $localization;
        
        return $this;
    }
    /**
     * Get mandatory value
     * @return bool|null
     */
    public function getMandatory(): ?bool
    {
        return $this->mandatory;
    }
    /**
     * Set mandatory value
     * @param bool $mandatory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setMandatory(?bool $mandatory = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mandatory) && !is_bool($mandatory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mandatory, true), gettype($mandatory)), __LINE__);
        }
        $this->mandatory = $mandatory;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
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
    /**
     * Get formatedValue value
     * @return string|null
     */
    public function getFormatedValue(): ?string
    {
        return $this->formatedValue;
    }
    /**
     * Set formatedValue value
     * @param string $formatedValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setFormatedValue(?string $formatedValue = null): self
    {
        // validation for constraint: string
        if (!is_null($formatedValue) && !is_string($formatedValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatedValue, true), gettype($formatedValue)), __LINE__);
        }
        $this->formatedValue = $formatedValue;
        
        return $this;
    }
    /**
     * Get typeLength value
     * @return int|null
     */
    public function getTypeLength(): ?int
    {
        return $this->typeLength;
    }
    /**
     * Set typeLength value
     * @param int $typeLength
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setTypeLength(?int $typeLength = null): self
    {
        // validation for constraint: int
        if (!is_null($typeLength) && !(is_int($typeLength) || ctype_digit($typeLength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeLength, true), gettype($typeLength)), __LINE__);
        }
        $this->typeLength = $typeLength;
        
        return $this;
    }
    /**
     * Get typePrecision value
     * @return int|null
     */
    public function getTypePrecision(): ?int
    {
        return $this->typePrecision;
    }
    /**
     * Set typePrecision value
     * @param int $typePrecision
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setTypePrecision(?int $typePrecision = null): self
    {
        // validation for constraint: int
        if (!is_null($typePrecision) && !(is_int($typePrecision) || ctype_digit($typePrecision))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typePrecision, true), gettype($typePrecision)), __LINE__);
        }
        $this->typePrecision = $typePrecision;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
}
