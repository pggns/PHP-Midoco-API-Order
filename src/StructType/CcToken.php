<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ccToken StructType
 * @subpackage Structs
 */
class CcToken extends AbstractStructBase
{
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * The ccTokenType
     * Meta information extracted from the WSDL
     * - ref: ccTokenType
     * @var string|null
     */
    protected ?string $ccTokenType = null;
    /**
     * The isRecurring
     * @var bool|null
     */
    protected ?bool $isRecurring = null;
    /**
     * The tokenAttributes
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: tokenAttributes
     * @var \Pggns\MidocoApi\Order\StructType\TokenAttributes[]
     */
    protected array $tokenAttributes = [];
    /**
     * Constructor method for ccToken
     * @uses CcToken::setValue()
     * @uses CcToken::setCcTokenType()
     * @uses CcToken::setIsRecurring()
     * @uses CcToken::setTokenAttributes()
     * @param string $value
     * @param string $ccTokenType
     * @param bool $isRecurring
     * @param \Pggns\MidocoApi\Order\StructType\TokenAttributes[] $tokenAttributes
     */
    public function __construct(?string $value = null, ?string $ccTokenType = null, ?bool $isRecurring = null, array $tokenAttributes = [])
    {
        $this
            ->setValue($value)
            ->setCcTokenType($ccTokenType)
            ->setIsRecurring($isRecurring)
            ->setTokenAttributes($tokenAttributes);
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Order\StructType\CcToken
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get ccTokenType value
     * @return string|null
     */
    public function getCcTokenType(): ?string
    {
        return $this->ccTokenType;
    }
    /**
     * Set ccTokenType value
     * @uses \Pggns\MidocoApi\Order\EnumType\CcTokenType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\CcTokenType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ccTokenType
     * @return \Pggns\MidocoApi\Order\StructType\CcToken
     */
    public function setCcTokenType(?string $ccTokenType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\CcTokenType::valueIsValid($ccTokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\CcTokenType', is_array($ccTokenType) ? implode(', ', $ccTokenType) : var_export($ccTokenType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\CcTokenType::getValidValues())), __LINE__);
        }
        $this->ccTokenType = $ccTokenType;
        
        return $this;
    }
    /**
     * Get isRecurring value
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->isRecurring;
    }
    /**
     * Set isRecurring value
     * @param bool $isRecurring
     * @return \Pggns\MidocoApi\Order\StructType\CcToken
     */
    public function setIsRecurring(?bool $isRecurring = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRecurring) && !is_bool($isRecurring)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRecurring, true), gettype($isRecurring)), __LINE__);
        }
        $this->isRecurring = $isRecurring;
        
        return $this;
    }
    /**
     * Get tokenAttributes value
     * @return \Pggns\MidocoApi\Order\StructType\TokenAttributes[]
     */
    public function getTokenAttributes(): array
    {
        return $this->tokenAttributes;
    }
    /**
     * This method is responsible for validating the values passed to the setTokenAttributes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTokenAttributes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTokenAttributesForArrayConstraintsFromSetTokenAttributes(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $ccTokenTokenAttributesItem) {
            // validation for constraint: itemType
            if (!$ccTokenTokenAttributesItem instanceof \Pggns\MidocoApi\Order\StructType\TokenAttributes) {
                $invalidValues[] = is_object($ccTokenTokenAttributesItem) ? get_class($ccTokenTokenAttributesItem) : sprintf('%s(%s)', gettype($ccTokenTokenAttributesItem), var_export($ccTokenTokenAttributesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The tokenAttributes property can only contain items of type \Pggns\MidocoApi\Order\StructType\TokenAttributes, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set tokenAttributes value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TokenAttributes[] $tokenAttributes
     * @return \Pggns\MidocoApi\Order\StructType\CcToken
     */
    public function setTokenAttributes(array $tokenAttributes = []): self
    {
        // validation for constraint: array
        if ('' !== ($tokenAttributesArrayErrorMessage = self::validateTokenAttributesForArrayConstraintsFromSetTokenAttributes($tokenAttributes))) {
            throw new InvalidArgumentException($tokenAttributesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($tokenAttributes) && count($tokenAttributes) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($tokenAttributes)), __LINE__);
        }
        $this->tokenAttributes = $tokenAttributes;
        
        return $this;
    }
    /**
     * Add item to tokenAttributes value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TokenAttributes $item
     * @return \Pggns\MidocoApi\Order\StructType\CcToken
     */
    public function addToTokenAttributes(\Pggns\MidocoApi\Order\StructType\TokenAttributes $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TokenAttributes) {
            throw new InvalidArgumentException(sprintf('The tokenAttributes property can only contain items of type \Pggns\MidocoApi\Order\StructType\TokenAttributes, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->tokenAttributes) && count($this->tokenAttributes) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->tokenAttributes)), __LINE__);
        }
        $this->tokenAttributes[] = $item;
        
        return $this;
    }
}
