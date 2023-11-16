<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SequencePoolDTO StructType
 * @subpackage Structs
 */
class SequencePoolDTO extends AbstractStructBase
{
    /**
     * The endValue
     * @var int|null
     */
    protected ?int $endValue = null;
    /**
     * The increment
     * @var int|null
     */
    protected ?int $increment = null;
    /**
     * The sequenceName
     * @var string|null
     */
    protected ?string $sequenceName = null;
    /**
     * The sequencePoolId
     * @var int|null
     */
    protected ?int $sequencePoolId = null;
    /**
     * The startValue
     * @var int|null
     */
    protected ?int $startValue = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The value
     * @var int|null
     */
    protected ?int $value = null;
    /**
     * Constructor method for SequencePoolDTO
     * @uses SequencePoolDTO::setEndValue()
     * @uses SequencePoolDTO::setIncrement()
     * @uses SequencePoolDTO::setSequenceName()
     * @uses SequencePoolDTO::setSequencePoolId()
     * @uses SequencePoolDTO::setStartValue()
     * @uses SequencePoolDTO::setUnitName()
     * @uses SequencePoolDTO::setValue()
     * @param int $endValue
     * @param int $increment
     * @param string $sequenceName
     * @param int $sequencePoolId
     * @param int $startValue
     * @param string $unitName
     * @param int $value
     */
    public function __construct(?int $endValue = null, ?int $increment = null, ?string $sequenceName = null, ?int $sequencePoolId = null, ?int $startValue = null, ?string $unitName = null, ?int $value = null)
    {
        $this
            ->setEndValue($endValue)
            ->setIncrement($increment)
            ->setSequenceName($sequenceName)
            ->setSequencePoolId($sequencePoolId)
            ->setStartValue($startValue)
            ->setUnitName($unitName)
            ->setValue($value);
    }
    /**
     * Get endValue value
     * @return int|null
     */
    public function getEndValue(): ?int
    {
        return $this->endValue;
    }
    /**
     * Set endValue value
     * @param int $endValue
     * @return \Pggns\MidocoApi\Order\StructType\SequencePoolDTO
     */
    public function setEndValue(?int $endValue = null): self
    {
        // validation for constraint: int
        if (!is_null($endValue) && !(is_int($endValue) || ctype_digit($endValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endValue, true), gettype($endValue)), __LINE__);
        }
        $this->endValue = $endValue;
        
        return $this;
    }
    /**
     * Get increment value
     * @return int|null
     */
    public function getIncrement(): ?int
    {
        return $this->increment;
    }
    /**
     * Set increment value
     * @param int $increment
     * @return \Pggns\MidocoApi\Order\StructType\SequencePoolDTO
     */
    public function setIncrement(?int $increment = null): self
    {
        // validation for constraint: int
        if (!is_null($increment) && !(is_int($increment) || ctype_digit($increment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($increment, true), gettype($increment)), __LINE__);
        }
        $this->increment = $increment;
        
        return $this;
    }
    /**
     * Get sequenceName value
     * @return string|null
     */
    public function getSequenceName(): ?string
    {
        return $this->sequenceName;
    }
    /**
     * Set sequenceName value
     * @param string $sequenceName
     * @return \Pggns\MidocoApi\Order\StructType\SequencePoolDTO
     */
    public function setSequenceName(?string $sequenceName = null): self
    {
        // validation for constraint: string
        if (!is_null($sequenceName) && !is_string($sequenceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequenceName, true), gettype($sequenceName)), __LINE__);
        }
        $this->sequenceName = $sequenceName;
        
        return $this;
    }
    /**
     * Get sequencePoolId value
     * @return int|null
     */
    public function getSequencePoolId(): ?int
    {
        return $this->sequencePoolId;
    }
    /**
     * Set sequencePoolId value
     * @param int $sequencePoolId
     * @return \Pggns\MidocoApi\Order\StructType\SequencePoolDTO
     */
    public function setSequencePoolId(?int $sequencePoolId = null): self
    {
        // validation for constraint: int
        if (!is_null($sequencePoolId) && !(is_int($sequencePoolId) || ctype_digit($sequencePoolId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sequencePoolId, true), gettype($sequencePoolId)), __LINE__);
        }
        $this->sequencePoolId = $sequencePoolId;
        
        return $this;
    }
    /**
     * Get startValue value
     * @return int|null
     */
    public function getStartValue(): ?int
    {
        return $this->startValue;
    }
    /**
     * Set startValue value
     * @param int $startValue
     * @return \Pggns\MidocoApi\Order\StructType\SequencePoolDTO
     */
    public function setStartValue(?int $startValue = null): self
    {
        // validation for constraint: int
        if (!is_null($startValue) && !(is_int($startValue) || ctype_digit($startValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startValue, true), gettype($startValue)), __LINE__);
        }
        $this->startValue = $startValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SequencePoolDTO
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
     * Get value value
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param int $value
     * @return \Pggns\MidocoApi\Order\StructType\SequencePoolDTO
     */
    public function setValue(?int $value = null): self
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
