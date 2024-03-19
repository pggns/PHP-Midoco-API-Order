<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQueryPageLineValue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoQueryPageLineValue extends AbstractStructBase
{
    /**
     * The isNull
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isNull = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for MidocoQueryPageLineValue
     * @uses MidocoQueryPageLineValue::setIsNull()
     * @uses MidocoQueryPageLineValue::setValue()
     * @param bool $isNull
     * @param string $value
     */
    public function __construct(?bool $isNull = false, ?string $value = null)
    {
        $this
            ->setIsNull($isNull)
            ->setValue($value);
    }
    /**
     * Get isNull value
     * @return bool|null
     */
    public function getIsNull(): ?bool
    {
        return $this->isNull;
    }
    /**
     * Set isNull value
     * @param bool $isNull
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryPageLineValue
     */
    public function setIsNull(?bool $isNull = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isNull) && !is_bool($isNull)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNull, true), gettype($isNull)), __LINE__);
        }
        $this->isNull = $isNull;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryPageLineValue
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
}
