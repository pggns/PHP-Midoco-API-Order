<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckDtdAnswerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckDtdAnswerDTO extends AbstractStructBase
{
    /**
     * The answerText
     * @var string|null
     */
    protected ?string $answerText = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The dbId
     * @var int|null
     */
    protected ?int $dbId = null;
    /**
     * The inputType
     * @var string|null
     */
    protected ?string $inputType = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The requiresInput
     * @var bool|null
     */
    protected ?bool $requiresInput = null;
    /**
     * The validForSupplier
     * @var string|null
     */
    protected ?string $validForSupplier = null;
    /**
     * The validForTravelType
     * @var string|null
     */
    protected ?string $validForTravelType = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for CheckDtdAnswerDTO
     * @uses CheckDtdAnswerDTO::setAnswerText()
     * @uses CheckDtdAnswerDTO::setCategory()
     * @uses CheckDtdAnswerDTO::setCode()
     * @uses CheckDtdAnswerDTO::setDbId()
     * @uses CheckDtdAnswerDTO::setInputType()
     * @uses CheckDtdAnswerDTO::setPosition()
     * @uses CheckDtdAnswerDTO::setRequiresInput()
     * @uses CheckDtdAnswerDTO::setValidForSupplier()
     * @uses CheckDtdAnswerDTO::setValidForTravelType()
     * @uses CheckDtdAnswerDTO::setValidFrom()
     * @uses CheckDtdAnswerDTO::setValidTo()
     * @param string $answerText
     * @param string $category
     * @param string $code
     * @param int $dbId
     * @param string $inputType
     * @param int $position
     * @param bool $requiresInput
     * @param string $validForSupplier
     * @param string $validForTravelType
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?string $answerText = null, ?string $category = null, ?string $code = null, ?int $dbId = null, ?string $inputType = null, ?int $position = null, ?bool $requiresInput = null, ?string $validForSupplier = null, ?string $validForTravelType = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setAnswerText($answerText)
            ->setCategory($category)
            ->setCode($code)
            ->setDbId($dbId)
            ->setInputType($inputType)
            ->setPosition($position)
            ->setRequiresInput($requiresInput)
            ->setValidForSupplier($validForSupplier)
            ->setValidForTravelType($validForTravelType)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get answerText value
     * @return string|null
     */
    public function getAnswerText(): ?string
    {
        return $this->answerText;
    }
    /**
     * Set answerText value
     * @param string $answerText
     * @return \Pggns\MidocoApi\Order\StructType\CheckDtdAnswerDTO
     */
    public function setAnswerText(?string $answerText = null): self
    {
        // validation for constraint: string
        if (!is_null($answerText) && !is_string($answerText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($answerText, true), gettype($answerText)), __LINE__);
        }
        $this->answerText = $answerText;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\CheckDtdAnswerDTO
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\CheckDtdAnswerDTO
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get dbId value
     * @return int|null
     */
    public function getDbId(): ?int
    {
        return $this->dbId;
    }
    /**
     * Set dbId value
     * @param int $dbId
     * @return \Pggns\MidocoApi\Order\StructType\CheckDtdAnswerDTO
     */
    public function setDbId(?int $dbId = null): self
    {
        // validation for constraint: int
        if (!is_null($dbId) && !(is_int($dbId) || ctype_digit($dbId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dbId, true), gettype($dbId)), __LINE__);
        }
        $this->dbId = $dbId;
        
        return $this;
    }
    /**
     * Get inputType value
     * @return string|null
     */
    public function getInputType(): ?string
    {
        return $this->inputType;
    }
    /**
     * Set inputType value
     * @param string $inputType
     * @return \Pggns\MidocoApi\Order\StructType\CheckDtdAnswerDTO
     */
    public function setInputType(?string $inputType = null): self
    {
        // validation for constraint: string
        if (!is_null($inputType) && !is_string($inputType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inputType, true), gettype($inputType)), __LINE__);
        }
        $this->inputType = $inputType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CheckDtdAnswerDTO
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
    /**
     * Get requiresInput value
     * @return bool|null
     */
    public function getRequiresInput(): ?bool
    {
        return $this->requiresInput;
    }
    /**
     * Set requiresInput value
     * @param bool $requiresInput
     * @return \Pggns\MidocoApi\Order\StructType\CheckDtdAnswerDTO
     */
    public function setRequiresInput(?bool $requiresInput = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requiresInput) && !is_bool($requiresInput)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiresInput, true), gettype($requiresInput)), __LINE__);
        }
        $this->requiresInput = $requiresInput;
        
        return $this;
    }
    /**
     * Get validForSupplier value
     * @return string|null
     */
    public function getValidForSupplier(): ?string
    {
        return $this->validForSupplier;
    }
    /**
     * Set validForSupplier value
     * @param string $validForSupplier
     * @return \Pggns\MidocoApi\Order\StructType\CheckDtdAnswerDTO
     */
    public function setValidForSupplier(?string $validForSupplier = null): self
    {
        // validation for constraint: string
        if (!is_null($validForSupplier) && !is_string($validForSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validForSupplier, true), gettype($validForSupplier)), __LINE__);
        }
        $this->validForSupplier = $validForSupplier;
        
        return $this;
    }
    /**
     * Get validForTravelType value
     * @return string|null
     */
    public function getValidForTravelType(): ?string
    {
        return $this->validForTravelType;
    }
    /**
     * Set validForTravelType value
     * @param string $validForTravelType
     * @return \Pggns\MidocoApi\Order\StructType\CheckDtdAnswerDTO
     */
    public function setValidForTravelType(?string $validForTravelType = null): self
    {
        // validation for constraint: string
        if (!is_null($validForTravelType) && !is_string($validForTravelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validForTravelType, true), gettype($validForTravelType)), __LINE__);
        }
        $this->validForTravelType = $validForTravelType;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\CheckDtdAnswerDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Pggns\MidocoApi\Order\StructType\CheckDtdAnswerDTO
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
