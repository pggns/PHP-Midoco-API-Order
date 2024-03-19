<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCheckDtdAnswer StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCheckDtdAnswer extends CheckDtdAnswerDTO
{
    /**
     * The answerValue
     * Meta information extracted from the WSDL
     * - documentation: The value entered by the user - internal use only
     * @var string|null
     */
    protected ?string $answerValue = null;
    /**
     * Constructor method for MidocoCheckDtdAnswer
     * @uses MidocoCheckDtdAnswer::setAnswerValue()
     * @param string $answerValue
     */
    public function __construct(?string $answerValue = null)
    {
        $this
            ->setAnswerValue($answerValue);
    }
    /**
     * Get answerValue value
     * @return string|null
     */
    public function getAnswerValue(): ?string
    {
        return $this->answerValue;
    }
    /**
     * Set answerValue value
     * @param string $answerValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer
     */
    public function setAnswerValue(?string $answerValue = null): self
    {
        // validation for constraint: string
        if (!is_null($answerValue) && !is_string($answerValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($answerValue, true), gettype($answerValue)), __LINE__);
        }
        $this->answerValue = $answerValue;
        
        return $this;
    }
}
