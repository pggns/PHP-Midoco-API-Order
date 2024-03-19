<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SequencePushedBackDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SequencePushedBackDTO extends AbstractStructBase
{
    /**
     * The sequenceId
     * @var int|null
     */
    protected ?int $sequenceId = null;
    /**
     * The value
     * @var int|null
     */
    protected ?int $value = null;
    /**
     * Constructor method for SequencePushedBackDTO
     * @uses SequencePushedBackDTO::setSequenceId()
     * @uses SequencePushedBackDTO::setValue()
     * @param int $sequenceId
     * @param int $value
     */
    public function __construct(?int $sequenceId = null, ?int $value = null)
    {
        $this
            ->setSequenceId($sequenceId)
            ->setValue($value);
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
     * @return \Pggns\MidocoApi\Order\StructType\SequencePushedBackDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SequencePushedBackDTO
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
