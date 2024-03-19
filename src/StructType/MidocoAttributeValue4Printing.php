<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAttributeValue4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAttributeValue4Printing extends AbstractStructBase
{
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
     * The formatedValue
     * @var string|null
     */
    protected ?string $formatedValue = null;
    /**
     * The localization
     * @var string|null
     */
    protected ?string $localization = null;
    /**
     * Constructor method for MidocoAttributeValue4Printing
     * @uses MidocoAttributeValue4Printing::setId()
     * @uses MidocoAttributeValue4Printing::setAttributeName()
     * @uses MidocoAttributeValue4Printing::setFormatedValue()
     * @uses MidocoAttributeValue4Printing::setLocalization()
     * @param int $id
     * @param string $attributeName
     * @param string $formatedValue
     * @param string $localization
     */
    public function __construct(?int $id = null, ?string $attributeName = null, ?string $formatedValue = null, ?string $localization = null)
    {
        $this
            ->setId($id)
            ->setAttributeName($attributeName)
            ->setFormatedValue($formatedValue)
            ->setLocalization($localization);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing
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
}
