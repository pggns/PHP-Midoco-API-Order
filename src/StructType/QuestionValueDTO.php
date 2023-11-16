<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuestionValueDTO StructType
 * @subpackage Structs
 */
class QuestionValueDTO extends AbstractStructBase
{
    /**
     * The isDefault
     * @var bool|null
     */
    protected ?bool $isDefault = null;
    /**
     * The questionId
     * @var int|null
     */
    protected ?int $questionId = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * The valueId
     * @var int|null
     */
    protected ?int $valueId = null;
    /**
     * Constructor method for QuestionValueDTO
     * @uses QuestionValueDTO::setIsDefault()
     * @uses QuestionValueDTO::setQuestionId()
     * @uses QuestionValueDTO::setValue()
     * @uses QuestionValueDTO::setValueId()
     * @param bool $isDefault
     * @param int $questionId
     * @param string $value
     * @param int $valueId
     */
    public function __construct(?bool $isDefault = null, ?int $questionId = null, ?string $value = null, ?int $valueId = null)
    {
        $this
            ->setIsDefault($isDefault)
            ->setQuestionId($questionId)
            ->setValue($value)
            ->setValueId($valueId);
    }
    /**
     * Get isDefault value
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
    /**
     * Set isDefault value
     * @param bool $isDefault
     * @return \Pggns\MidocoApi\Order\StructType\QuestionValueDTO
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->isDefault = $isDefault;
        
        return $this;
    }
    /**
     * Get questionId value
     * @return int|null
     */
    public function getQuestionId(): ?int
    {
        return $this->questionId;
    }
    /**
     * Set questionId value
     * @param int $questionId
     * @return \Pggns\MidocoApi\Order\StructType\QuestionValueDTO
     */
    public function setQuestionId(?int $questionId = null): self
    {
        // validation for constraint: int
        if (!is_null($questionId) && !(is_int($questionId) || ctype_digit($questionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($questionId, true), gettype($questionId)), __LINE__);
        }
        $this->questionId = $questionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\QuestionValueDTO
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
     * Get valueId value
     * @return int|null
     */
    public function getValueId(): ?int
    {
        return $this->valueId;
    }
    /**
     * Set valueId value
     * @param int $valueId
     * @return \Pggns\MidocoApi\Order\StructType\QuestionValueDTO
     */
    public function setValueId(?int $valueId = null): self
    {
        // validation for constraint: int
        if (!is_null($valueId) && !(is_int($valueId) || ctype_digit($valueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($valueId, true), gettype($valueId)), __LINE__);
        }
        $this->valueId = $valueId;
        
        return $this;
    }
}
