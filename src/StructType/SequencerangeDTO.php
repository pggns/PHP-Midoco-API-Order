<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SequencerangeDTO StructType
 * @subpackage Structs
 */
class SequencerangeDTO extends AbstractStructBase
{
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The endValue
     * @var int|null
     */
    protected ?int $endValue = null;
    /**
     * The sequenceId
     * @var int|null
     */
    protected ?int $sequenceId = null;
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
     * The validEnd
     * @var string|null
     */
    protected ?string $validEnd = null;
    /**
     * The validStart
     * @var string|null
     */
    protected ?string $validStart = null;
    /**
     * The value
     * @var int|null
     */
    protected ?int $value = null;
    /**
     * Constructor method for SequencerangeDTO
     * @uses SequencerangeDTO::setCreationTime()
     * @uses SequencerangeDTO::setEndValue()
     * @uses SequencerangeDTO::setSequenceId()
     * @uses SequencerangeDTO::setSequenceName()
     * @uses SequencerangeDTO::setSequencePoolId()
     * @uses SequencerangeDTO::setStartValue()
     * @uses SequencerangeDTO::setUnitName()
     * @uses SequencerangeDTO::setValidEnd()
     * @uses SequencerangeDTO::setValidStart()
     * @uses SequencerangeDTO::setValue()
     * @param string $creationTime
     * @param int $endValue
     * @param int $sequenceId
     * @param string $sequenceName
     * @param int $sequencePoolId
     * @param int $startValue
     * @param string $unitName
     * @param string $validEnd
     * @param string $validStart
     * @param int $value
     */
    public function __construct(?string $creationTime = null, ?int $endValue = null, ?int $sequenceId = null, ?string $sequenceName = null, ?int $sequencePoolId = null, ?int $startValue = null, ?string $unitName = null, ?string $validEnd = null, ?string $validStart = null, ?int $value = null)
    {
        $this
            ->setCreationTime($creationTime)
            ->setEndValue($endValue)
            ->setSequenceId($sequenceId)
            ->setSequenceName($sequenceName)
            ->setSequencePoolId($sequencePoolId)
            ->setStartValue($startValue)
            ->setUnitName($unitName)
            ->setValidEnd($validEnd)
            ->setValidStart($validStart)
            ->setValue($value);
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\SequencerangeDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SequencerangeDTO
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
     * Get sequenceId value
     * @return int|null
     */
    public function getSequenceId(): ?int
    {
        return $this->sequenceId;
    }
    /**
     * Set sequenceId value
     * @param int $sequenceId
     * @return \Pggns\MidocoApi\Order\StructType\SequencerangeDTO
     */
    public function setSequenceId(?int $sequenceId = null): self
    {
        // validation for constraint: int
        if (!is_null($sequenceId) && !(is_int($sequenceId) || ctype_digit($sequenceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sequenceId, true), gettype($sequenceId)), __LINE__);
        }
        $this->sequenceId = $sequenceId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SequencerangeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SequencerangeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SequencerangeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SequencerangeDTO
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
     * Get validEnd value
     * @return string|null
     */
    public function getValidEnd(): ?string
    {
        return $this->validEnd;
    }
    /**
     * Set validEnd value
     * @param string $validEnd
     * @return \Pggns\MidocoApi\Order\StructType\SequencerangeDTO
     */
    public function setValidEnd(?string $validEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($validEnd) && !is_string($validEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validEnd, true), gettype($validEnd)), __LINE__);
        }
        $this->validEnd = $validEnd;
        
        return $this;
    }
    /**
     * Get validStart value
     * @return string|null
     */
    public function getValidStart(): ?string
    {
        return $this->validStart;
    }
    /**
     * Set validStart value
     * @param string $validStart
     * @return \Pggns\MidocoApi\Order\StructType\SequencerangeDTO
     */
    public function setValidStart(?string $validStart = null): self
    {
        // validation for constraint: string
        if (!is_null($validStart) && !is_string($validStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validStart, true), gettype($validStart)), __LINE__);
        }
        $this->validStart = $validStart;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SequencerangeDTO
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
