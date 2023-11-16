<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cc-token StructType
 * @subpackage Structs
 */
class Cc_token extends AbstractStructBase
{
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * The cc_token_type
     * Meta information extracted from the WSDL
     * - ref: cc-token-type
     * @var string|null
     */
    protected ?string $cc_token_type = null;
    /**
     * The is_recurring
     * @var bool|null
     */
    protected ?bool $is_recurring = null;
    /**
     * The token_attributes
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: token-attributes
     * @var \Pggns\MidocoApi\Order\StructType\Token_attributes[]
     */
    protected array $token_attributes = [];
    /**
     * Constructor method for cc-token
     * @uses Cc_token::setValue()
     * @uses Cc_token::setCc_token_type()
     * @uses Cc_token::setIs_recurring()
     * @uses Cc_token::setToken_attributes()
     * @param string $value
     * @param string $cc_token_type
     * @param bool $is_recurring
     * @param \Pggns\MidocoApi\Order\StructType\Token_attributes[] $token_attributes
     */
    public function __construct(?string $value = null, ?string $cc_token_type = null, ?bool $is_recurring = null, array $token_attributes = [])
    {
        $this
            ->setValue($value)
            ->setCc_token_type($cc_token_type)
            ->setIs_recurring($is_recurring)
            ->setToken_attributes($token_attributes);
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
     * @return \Pggns\MidocoApi\Order\StructType\Cc_token
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
     * Get cc_token_type value
     * @return string|null
     */
    public function getCc_token_type(): ?string
    {
        return $this->{'cc-token-type'};
    }
    /**
     * Set cc_token_type value
     * @uses \Pggns\MidocoApi\Order\EnumType\Cc_token_type::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Cc_token_type::getValidValues()
     * @throws InvalidArgumentException
     * @param string $cc_token_type
     * @return \Pggns\MidocoApi\Order\StructType\Cc_token
     */
    public function setCc_token_type(?string $cc_token_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Cc_token_type::valueIsValid($cc_token_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Cc_token_type', is_array($cc_token_type) ? implode(', ', $cc_token_type) : var_export($cc_token_type, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Cc_token_type::getValidValues())), __LINE__);
        }
        $this->cc_token_type = $this->{'cc-token-type'} = $cc_token_type;
        
        return $this;
    }
    /**
     * Get is_recurring value
     * @return bool|null
     */
    public function getIs_recurring(): ?bool
    {
        return $this->{'is-recurring'};
    }
    /**
     * Set is_recurring value
     * @param bool $is_recurring
     * @return \Pggns\MidocoApi\Order\StructType\Cc_token
     */
    public function setIs_recurring(?bool $is_recurring = null): self
    {
        // validation for constraint: boolean
        if (!is_null($is_recurring) && !is_bool($is_recurring)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_recurring, true), gettype($is_recurring)), __LINE__);
        }
        $this->is_recurring = $this->{'is-recurring'} = $is_recurring;
        
        return $this;
    }
    /**
     * Get token_attributes value
     * @return \Pggns\MidocoApi\Order\StructType\Token_attributes[]
     */
    public function getToken_attributes(): array
    {
        return $this->{'token-attributes'};
    }
    /**
     * This method is responsible for validating the values passed to the setToken_attributes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setToken_attributes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateToken_attributesForArrayConstraintsFromSetToken_attributes(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cc_tokenToken_attributesItem) {
            // validation for constraint: itemType
            if (!$cc_tokenToken_attributesItem instanceof \Pggns\MidocoApi\Order\StructType\Token_attributes) {
                $invalidValues[] = is_object($cc_tokenToken_attributesItem) ? get_class($cc_tokenToken_attributesItem) : sprintf('%s(%s)', gettype($cc_tokenToken_attributesItem), var_export($cc_tokenToken_attributesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The token_attributes property can only contain items of type \Pggns\MidocoApi\Order\StructType\Token_attributes, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set token_attributes value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Token_attributes[] $token_attributes
     * @return \Pggns\MidocoApi\Order\StructType\Cc_token
     */
    public function setToken_attributes(array $token_attributes = []): self
    {
        // validation for constraint: array
        if ('' !== ($token_attributesArrayErrorMessage = self::validateToken_attributesForArrayConstraintsFromSetToken_attributes($token_attributes))) {
            throw new InvalidArgumentException($token_attributesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($token_attributes) && count($token_attributes) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($token_attributes)), __LINE__);
        }
        $this->token_attributes = $this->{'token-attributes'} = $token_attributes;
        
        return $this;
    }
    /**
     * Add item to token_attributes value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Token_attributes $item
     * @return \Pggns\MidocoApi\Order\StructType\Cc_token
     */
    public function addToToken_attributes(\Pggns\MidocoApi\Order\StructType\Token_attributes $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Token_attributes) {
            throw new InvalidArgumentException(sprintf('The token_attributes property can only contain items of type \Pggns\MidocoApi\Order\StructType\Token_attributes, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->token_attributes) && count($this->token_attributes) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->token_attributes)), __LINE__);
        }
        $this->token_attributes[] = $this->{'token-attributes'}[] = $item;
        
        return $this;
    }
}
