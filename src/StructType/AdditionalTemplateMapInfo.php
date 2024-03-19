<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalTemplateMapInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdditionalTemplateMapInfo extends AbstractStructBase
{
    /**
     * The parameterKey
     * @var string|null
     */
    protected ?string $parameterKey = null;
    /**
     * The parameterValue
     * @var string|null
     */
    protected ?string $parameterValue = null;
    /**
     * Constructor method for AdditionalTemplateMapInfo
     * @uses AdditionalTemplateMapInfo::setParameterKey()
     * @uses AdditionalTemplateMapInfo::setParameterValue()
     * @param string $parameterKey
     * @param string $parameterValue
     */
    public function __construct(?string $parameterKey = null, ?string $parameterValue = null)
    {
        $this
            ->setParameterKey($parameterKey)
            ->setParameterValue($parameterValue);
    }
    /**
     * Get parameterKey value
     * @return string|null
     */
    public function getParameterKey(): ?string
    {
        return $this->parameterKey;
    }
    /**
     * Set parameterKey value
     * @param string $parameterKey
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo
     */
    public function setParameterKey(?string $parameterKey = null): self
    {
        // validation for constraint: string
        if (!is_null($parameterKey) && !is_string($parameterKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parameterKey, true), gettype($parameterKey)), __LINE__);
        }
        $this->parameterKey = $parameterKey;
        
        return $this;
    }
    /**
     * Get parameterValue value
     * @return string|null
     */
    public function getParameterValue(): ?string
    {
        return $this->parameterValue;
    }
    /**
     * Set parameterValue value
     * @param string $parameterValue
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo
     */
    public function setParameterValue(?string $parameterValue = null): self
    {
        // validation for constraint: string
        if (!is_null($parameterValue) && !is_string($parameterValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parameterValue, true), gettype($parameterValue)), __LINE__);
        }
        $this->parameterValue = $parameterValue;
        
        return $this;
    }
}
