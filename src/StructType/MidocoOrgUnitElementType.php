<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrgUnitElementType StructType
 * @subpackage Structs
 */
class MidocoOrgUnitElementType extends AbstractStructBase
{
    /**
     * The parent
     * @var string|null
     */
    protected ?string $parent = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The printName
     * @var string|null
     */
    protected ?string $printName = null;
    /**
     * The isProductiv
     * @var bool|null
     */
    protected ?bool $isProductiv = null;
    /**
     * The isTest
     * @var bool|null
     */
    protected ?bool $isTest = null;
    /**
     * The isAvailableByUser
     * @var bool|null
     */
    protected ?bool $isAvailableByUser = null;
    /**
     * The MidocoOrgUnitElement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgUnitElement
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType[]
     */
    protected array $MidocoOrgUnitElement = [];
    /**
     * Constructor method for MidocoOrgUnitElementType
     * @uses MidocoOrgUnitElementType::setParent()
     * @uses MidocoOrgUnitElementType::setUnitName()
     * @uses MidocoOrgUnitElementType::setPrintName()
     * @uses MidocoOrgUnitElementType::setIsProductiv()
     * @uses MidocoOrgUnitElementType::setIsTest()
     * @uses MidocoOrgUnitElementType::setIsAvailableByUser()
     * @uses MidocoOrgUnitElementType::setMidocoOrgUnitElement()
     * @param string $parent
     * @param string $unitName
     * @param string $printName
     * @param bool $isProductiv
     * @param bool $isTest
     * @param bool $isAvailableByUser
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType[] $midocoOrgUnitElement
     */
    public function __construct(?string $parent = null, ?string $unitName = null, ?string $printName = null, ?bool $isProductiv = null, ?bool $isTest = null, ?bool $isAvailableByUser = null, array $midocoOrgUnitElement = [])
    {
        $this
            ->setParent($parent)
            ->setUnitName($unitName)
            ->setPrintName($printName)
            ->setIsProductiv($isProductiv)
            ->setIsTest($isTest)
            ->setIsAvailableByUser($isAvailableByUser)
            ->setMidocoOrgUnitElement($midocoOrgUnitElement);
    }
    /**
     * Get parent value
     * @return string|null
     */
    public function getParent(): ?string
    {
        return $this->parent;
    }
    /**
     * Set parent value
     * @param string $parent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType
     */
    public function setParent(?string $parent = null): self
    {
        // validation for constraint: string
        if (!is_null($parent) && !is_string($parent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parent, true), gettype($parent)), __LINE__);
        }
        $this->parent = $parent;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get printName value
     * @return string|null
     */
    public function getPrintName(): ?string
    {
        return $this->printName;
    }
    /**
     * Set printName value
     * @param string $printName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType
     */
    public function setPrintName(?string $printName = null): self
    {
        // validation for constraint: string
        if (!is_null($printName) && !is_string($printName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printName, true), gettype($printName)), __LINE__);
        }
        $this->printName = $printName;
        
        return $this;
    }
    /**
     * Get isProductiv value
     * @return bool|null
     */
    public function getIsProductiv(): ?bool
    {
        return $this->isProductiv;
    }
    /**
     * Set isProductiv value
     * @param bool $isProductiv
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType
     */
    public function setIsProductiv(?bool $isProductiv = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProductiv) && !is_bool($isProductiv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProductiv, true), gettype($isProductiv)), __LINE__);
        }
        $this->isProductiv = $isProductiv;
        
        return $this;
    }
    /**
     * Get isTest value
     * @return bool|null
     */
    public function getIsTest(): ?bool
    {
        return $this->isTest;
    }
    /**
     * Set isTest value
     * @param bool $isTest
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType
     */
    public function setIsTest(?bool $isTest = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTest) && !is_bool($isTest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTest, true), gettype($isTest)), __LINE__);
        }
        $this->isTest = $isTest;
        
        return $this;
    }
    /**
     * Get isAvailableByUser value
     * @return bool|null
     */
    public function getIsAvailableByUser(): ?bool
    {
        return $this->isAvailableByUser;
    }
    /**
     * Set isAvailableByUser value
     * @param bool $isAvailableByUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType
     */
    public function setIsAvailableByUser(?bool $isAvailableByUser = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAvailableByUser) && !is_bool($isAvailableByUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAvailableByUser, true), gettype($isAvailableByUser)), __LINE__);
        }
        $this->isAvailableByUser = $isAvailableByUser;
        
        return $this;
    }
    /**
     * Get MidocoOrgUnitElement value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType[]
     */
    public function getMidocoOrgUnitElement(): array
    {
        return $this->MidocoOrgUnitElement;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrgUnitElement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgUnitElement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgUnitElementForArrayConstraintsFromSetMidocoOrgUnitElement(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrgUnitElementTypeMidocoOrgUnitElementItem) {
            // validation for constraint: itemType
            if (!$midocoOrgUnitElementTypeMidocoOrgUnitElementItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType) {
                $invalidValues[] = is_object($midocoOrgUnitElementTypeMidocoOrgUnitElementItem) ? get_class($midocoOrgUnitElementTypeMidocoOrgUnitElementItem) : sprintf('%s(%s)', gettype($midocoOrgUnitElementTypeMidocoOrgUnitElementItem), var_export($midocoOrgUnitElementTypeMidocoOrgUnitElementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgUnitElement property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgUnitElement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType[] $midocoOrgUnitElement
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType
     */
    public function setMidocoOrgUnitElement(array $midocoOrgUnitElement = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgUnitElementArrayErrorMessage = self::validateMidocoOrgUnitElementForArrayConstraintsFromSetMidocoOrgUnitElement($midocoOrgUnitElement))) {
            throw new InvalidArgumentException($midocoOrgUnitElementArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgUnitElement = $midocoOrgUnitElement;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgUnitElement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType
     */
    public function addToMidocoOrgUnitElement(\Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgUnitElement property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrgUnitElementType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgUnitElement[] = $item;
        
        return $this;
    }
}
