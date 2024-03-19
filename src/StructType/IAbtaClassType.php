<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IAbtaClassType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IAbtaClassType extends AbstractStructBase
{
    /**
     * The key
     * @var int|null
     */
    protected ?int $key = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for IAbtaClassType
     * @uses IAbtaClassType::setKey()
     * @uses IAbtaClassType::setValue()
     * @param int $key
     * @param string $value
     */
    public function __construct(?int $key = null, ?string $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get key value
     * @return int|null
     */
    public function getKey(): ?int
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param int $key
     * @return \Pggns\MidocoApi\Order\StructType\IAbtaClassType
     */
    public function setKey(?int $key = null): self
    {
        // validation for constraint: int
        if (!is_null($key) && !(is_int($key) || ctype_digit($key))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\IAbtaClassType
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
