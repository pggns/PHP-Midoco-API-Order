<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PS2ImportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PS2ImportResponse extends AbstractStructBase
{
    /**
     * The PS2ImportStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\PS2ImportStatus[]
     */
    protected ?array $PS2ImportStatus = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * Constructor method for PS2ImportResponse
     * @uses PS2ImportResponse::setPS2ImportStatus()
     * @uses PS2ImportResponse::setError()
     * @param \Pggns\MidocoApi\Order\StructType\PS2ImportStatus[] $pS2ImportStatus
     * @param string $error
     */
    public function __construct(?array $pS2ImportStatus = null, ?string $error = null)
    {
        $this
            ->setPS2ImportStatus($pS2ImportStatus)
            ->setError($error);
    }
    /**
     * Get PS2ImportStatus value
     * @return \Pggns\MidocoApi\Order\StructType\PS2ImportStatus[]
     */
    public function getPS2ImportStatus(): ?array
    {
        return $this->PS2ImportStatus;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPS2ImportStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPS2ImportStatus method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePS2ImportStatusForArrayConstraintFromSetPS2ImportStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pS2ImportResponsePS2ImportStatusItem) {
            // validation for constraint: itemType
            if (!$pS2ImportResponsePS2ImportStatusItem instanceof \Pggns\MidocoApi\Order\StructType\PS2ImportStatus) {
                $invalidValues[] = is_object($pS2ImportResponsePS2ImportStatusItem) ? get_class($pS2ImportResponsePS2ImportStatusItem) : sprintf('%s(%s)', gettype($pS2ImportResponsePS2ImportStatusItem), var_export($pS2ImportResponsePS2ImportStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PS2ImportStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\PS2ImportStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PS2ImportStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PS2ImportStatus[] $pS2ImportStatus
     * @return \Pggns\MidocoApi\Order\StructType\PS2ImportResponse
     */
    public function setPS2ImportStatus(?array $pS2ImportStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($pS2ImportStatusArrayErrorMessage = self::validatePS2ImportStatusForArrayConstraintFromSetPS2ImportStatus($pS2ImportStatus))) {
            throw new InvalidArgumentException($pS2ImportStatusArrayErrorMessage, __LINE__);
        }
        $this->PS2ImportStatus = $pS2ImportStatus;
        
        return $this;
    }
    /**
     * Add item to PS2ImportStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PS2ImportStatus $item
     * @return \Pggns\MidocoApi\Order\StructType\PS2ImportResponse
     */
    public function addToPS2ImportStatus(\Pggns\MidocoApi\Order\StructType\PS2ImportStatus $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\PS2ImportStatus) {
            throw new InvalidArgumentException(sprintf('The PS2ImportStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\PS2ImportStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PS2ImportStatus[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Pggns\MidocoApi\Order\StructType\PS2ImportResponse
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
}
