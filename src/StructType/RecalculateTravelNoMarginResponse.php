<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecalculateTravelNoMarginResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RecalculateTravelNoMarginResponse extends AbstractStructBase
{
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:Error
     * @var \Pggns\MidocoApi\Order\StructType\Error[]
     */
    protected ?array $Error = null;
    /**
     * Constructor method for RecalculateTravelNoMarginResponse
     * @uses RecalculateTravelNoMarginResponse::setError()
     * @param \Pggns\MidocoApi\Order\StructType\Error[] $error
     */
    public function __construct(?array $error = null)
    {
        $this
            ->setError($error);
    }
    /**
     * Get Error value
     * @return \Pggns\MidocoApi\Order\StructType\Error[]
     */
    public function getError(): ?array
    {
        return $this->Error;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $recalculateTravelNoMarginResponseErrorItem) {
            // validation for constraint: itemType
            if (!$recalculateTravelNoMarginResponseErrorItem instanceof \Pggns\MidocoApi\Order\StructType\Error) {
                $invalidValues[] = is_object($recalculateTravelNoMarginResponseErrorItem) ? get_class($recalculateTravelNoMarginResponseErrorItem) : sprintf('%s(%s)', gettype($recalculateTravelNoMarginResponseErrorItem), var_export($recalculateTravelNoMarginResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Error property can only contain items of type \Pggns\MidocoApi\Order\StructType\Error, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Error value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Error[] $error
     * @return \Pggns\MidocoApi\Order\StructType\RecalculateTravelNoMarginResponse
     */
    public function setError(?array $error = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->Error = $error;
        
        return $this;
    }
    /**
     * Add item to Error value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Error $item
     * @return \Pggns\MidocoApi\Order\StructType\RecalculateTravelNoMarginResponse
     */
    public function addToError(\Pggns\MidocoApi\Order\StructType\Error $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Error) {
            throw new InvalidArgumentException(sprintf('The Error property can only contain items of type \Pggns\MidocoApi\Order\StructType\Error, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Error[] = $item;
        
        return $this;
    }
}
