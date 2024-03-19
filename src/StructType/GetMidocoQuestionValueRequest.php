<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoQuestionValueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoQuestionValueRequest extends AbstractStructBase
{
    /**
     * The valueId
     * @var int|null
     */
    protected ?int $valueId = null;
    /**
     * Constructor method for GetMidocoQuestionValueRequest
     * @uses GetMidocoQuestionValueRequest::setValueId()
     * @param int $valueId
     */
    public function __construct(?int $valueId = null)
    {
        $this
            ->setValueId($valueId);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoQuestionValueRequest
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
