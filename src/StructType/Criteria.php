<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for criteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Criteria extends AbstractStructBase
{
    /**
     * The criteria_code
     * @var string|null
     */
    protected ?string $criteria_code = null;
    /**
     * The criteria_text
     * @var string|null
     */
    protected ?string $criteria_text = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The criteriaCode
     * @var string|null
     */
    protected ?string $criteriaCode = null;
    /**
     * The criteriaText
     * @var string|null
     */
    protected ?string $criteriaText = null;
    /**
     * Constructor method for criteria
     * @uses Criteria::setCriteria_code()
     * @uses Criteria::setCriteria_text()
     * @uses Criteria::setPosition()
     * @uses Criteria::setCriteriaCode()
     * @uses Criteria::setCriteriaText()
     * @param string $criteria_code
     * @param string $criteria_text
     * @param int $position
     * @param string $criteriaCode
     * @param string $criteriaText
     */
    public function __construct(?string $criteria_code = null, ?string $criteria_text = null, ?int $position = null, ?string $criteriaCode = null, ?string $criteriaText = null)
    {
        $this
            ->setCriteria_code($criteria_code)
            ->setCriteria_text($criteria_text)
            ->setPosition($position)
            ->setCriteriaCode($criteriaCode)
            ->setCriteriaText($criteriaText);
    }
    /**
     * Get criteria_code value
     * @return string|null
     */
    public function getCriteria_code(): ?string
    {
        return $this->{'criteria-code'};
    }
    /**
     * Set criteria_code value
     * @param string $criteria_code
     * @return \Pggns\MidocoApi\Order\StructType\Criteria
     */
    public function setCriteria_code(?string $criteria_code = null): self
    {
        // validation for constraint: string
        if (!is_null($criteria_code) && !is_string($criteria_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteria_code, true), gettype($criteria_code)), __LINE__);
        }
        $this->criteria_code = $this->{'criteria-code'} = $criteria_code;
        
        return $this;
    }
    /**
     * Get criteria_text value
     * @return string|null
     */
    public function getCriteria_text(): ?string
    {
        return $this->{'criteria-text'};
    }
    /**
     * Set criteria_text value
     * @param string $criteria_text
     * @return \Pggns\MidocoApi\Order\StructType\Criteria
     */
    public function setCriteria_text(?string $criteria_text = null): self
    {
        // validation for constraint: string
        if (!is_null($criteria_text) && !is_string($criteria_text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteria_text, true), gettype($criteria_text)), __LINE__);
        }
        $this->criteria_text = $this->{'criteria-text'} = $criteria_text;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Criteria
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
     * Get criteriaCode value
     * @return string|null
     */
    public function getCriteriaCode(): ?string
    {
        return $this->criteriaCode;
    }
    /**
     * Set criteriaCode value
     * @param string $criteriaCode
     * @return \Pggns\MidocoApi\Order\StructType\Criteria
     */
    public function setCriteriaCode(?string $criteriaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($criteriaCode) && !is_string($criteriaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteriaCode, true), gettype($criteriaCode)), __LINE__);
        }
        $this->criteriaCode = $criteriaCode;
        
        return $this;
    }
    /**
     * Get criteriaText value
     * @return string|null
     */
    public function getCriteriaText(): ?string
    {
        return $this->criteriaText;
    }
    /**
     * Set criteriaText value
     * @param string $criteriaText
     * @return \Pggns\MidocoApi\Order\StructType\Criteria
     */
    public function setCriteriaText(?string $criteriaText = null): self
    {
        // validation for constraint: string
        if (!is_null($criteriaText) && !is_string($criteriaText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteriaText, true), gettype($criteriaText)), __LINE__);
        }
        $this->criteriaText = $criteriaText;
        
        return $this;
    }
}
