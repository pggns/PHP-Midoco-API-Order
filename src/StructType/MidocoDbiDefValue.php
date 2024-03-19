<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDbiDefValue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDbiDefValue extends AbstractStructBase
{
    /**
     * The dbiKey
     * @var string|null
     */
    protected ?string $dbiKey = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for MidocoDbiDefValue
     * @uses MidocoDbiDefValue::setDbiKey()
     * @uses MidocoDbiDefValue::setDescription()
     * @uses MidocoDbiDefValue::setValue()
     * @uses MidocoDbiDefValue::setPosition()
     * @param string $dbiKey
     * @param string $description
     * @param string $value
     * @param int $position
     */
    public function __construct(?string $dbiKey = null, ?string $description = null, ?string $value = null, ?int $position = null)
    {
        $this
            ->setDbiKey($dbiKey)
            ->setDescription($description)
            ->setValue($value)
            ->setPosition($position);
    }
    /**
     * Get dbiKey value
     * @return string|null
     */
    public function getDbiKey(): ?string
    {
        return $this->dbiKey;
    }
    /**
     * Set dbiKey value
     * @param string $dbiKey
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue
     */
    public function setDbiKey(?string $dbiKey = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiKey) && !is_string($dbiKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiKey, true), gettype($dbiKey)), __LINE__);
        }
        $this->dbiKey = $dbiKey;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
}
