<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfClassNameResponse StructType
 * @subpackage Structs
 */
class GetMfClassNameResponse extends AbstractStructBase
{
    /**
     * The className
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected array $className = [];
    /**
     * Constructor method for GetMfClassNameResponse
     * @uses GetMfClassNameResponse::setClassName()
     * @param string[] $className
     */
    public function __construct(array $className = [])
    {
        $this
            ->setClassName($className);
    }
    /**
     * Get className value
     * @return string[]
     */
    public function getClassName(): array
    {
        return $this->className;
    }
    /**
     * This method is responsible for validating the values passed to the setClassName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClassName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClassNameForArrayConstraintsFromSetClassName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMfClassNameResponseClassNameItem) {
            // validation for constraint: itemType
            if (!is_string($getMfClassNameResponseClassNameItem)) {
                $invalidValues[] = is_object($getMfClassNameResponseClassNameItem) ? get_class($getMfClassNameResponseClassNameItem) : sprintf('%s(%s)', gettype($getMfClassNameResponseClassNameItem), var_export($getMfClassNameResponseClassNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The className property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set className value
     * @throws InvalidArgumentException
     * @param string[] $className
     * @return \Pggns\MidocoApi\Order\StructType\GetMfClassNameResponse
     */
    public function setClassName(array $className = []): self
    {
        // validation for constraint: array
        if ('' !== ($classNameArrayErrorMessage = self::validateClassNameForArrayConstraintsFromSetClassName($className))) {
            throw new InvalidArgumentException($classNameArrayErrorMessage, __LINE__);
        }
        $this->className = $className;
        
        return $this;
    }
    /**
     * Add item to className value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMfClassNameResponse
     */
    public function addToClassName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The className property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->className[] = $item;
        
        return $this;
    }
}
