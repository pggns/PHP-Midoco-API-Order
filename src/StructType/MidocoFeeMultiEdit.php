<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFeeMultiEdit StructType
 * @subpackage Structs
 */
class MidocoFeeMultiEdit extends AbstractStructBase
{
    /**
     * The field
     * @var string|null
     */
    protected ?string $field = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for MidocoFeeMultiEdit
     * @uses MidocoFeeMultiEdit::setField()
     * @uses MidocoFeeMultiEdit::setValue()
     * @param string $field
     * @param string $value
     */
    public function __construct(?string $field = null, ?string $value = null)
    {
        $this
            ->setField($field)
            ->setValue($value);
    }
    /**
     * Get field value
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param string $field
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit
     */
    public function setField(?string $field = null): self
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->field = $field;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit
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
