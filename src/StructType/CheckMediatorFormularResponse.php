<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckMediatorFormularResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckMediatorFormularResponse extends AbstractStructBase
{
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $errors = null;
    /**
     * Constructor method for CheckMediatorFormularResponse
     * @uses CheckMediatorFormularResponse::setErrors()
     * @param string[] $errors
     */
    public function __construct(?array $errors = null)
    {
        $this
            ->setErrors($errors);
    }
    /**
     * Get errors value
     * @return string[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrors method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorsForArrayConstraintFromSetErrors(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $checkMediatorFormularResponseErrorsItem) {
            // validation for constraint: itemType
            if (!is_string($checkMediatorFormularResponseErrorsItem)) {
                $invalidValues[] = is_object($checkMediatorFormularResponseErrorsItem) ? get_class($checkMediatorFormularResponseErrorsItem) : sprintf('%s(%s)', gettype($checkMediatorFormularResponseErrorsItem), var_export($checkMediatorFormularResponseErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errors property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set errors value
     * @throws InvalidArgumentException
     * @param string[] $errors
     * @return \Pggns\MidocoApi\Order\StructType\CheckMediatorFormularResponse
     */
    public function setErrors(?array $errors = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorsArrayErrorMessage = self::validateErrorsForArrayConstraintFromSetErrors($errors))) {
            throw new InvalidArgumentException($errorsArrayErrorMessage, __LINE__);
        }
        $this->errors = $errors;
        
        return $this;
    }
    /**
     * Add item to errors value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\CheckMediatorFormularResponse
     */
    public function addToErrors(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The errors property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errors[] = $item;
        
        return $this;
    }
}
