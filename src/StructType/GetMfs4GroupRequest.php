<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfs4GroupRequest StructType
 * @subpackage Structs
 */
class GetMfs4GroupRequest extends AbstractStructBase
{
    /**
     * The bean
     * @var string|null
     */
    protected ?string $bean = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The groupName
     * @var string|null
     */
    protected ?string $groupName = null;
    /**
     * The className
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected array $className = [];
    /**
     * Constructor method for GetMfs4GroupRequest
     * @uses GetMfs4GroupRequest::setBean()
     * @uses GetMfs4GroupRequest::setUnitName()
     * @uses GetMfs4GroupRequest::setGroupName()
     * @uses GetMfs4GroupRequest::setClassName()
     * @param string $bean
     * @param string $unitName
     * @param string $groupName
     * @param string[] $className
     */
    public function __construct(?string $bean = null, ?string $unitName = null, ?string $groupName = null, array $className = [])
    {
        $this
            ->setBean($bean)
            ->setUnitName($unitName)
            ->setGroupName($groupName)
            ->setClassName($className);
    }
    /**
     * Get bean value
     * @return string|null
     */
    public function getBean(): ?string
    {
        return $this->bean;
    }
    /**
     * Set bean value
     * @param string $bean
     * @return \Pggns\MidocoApi\Order\StructType\GetMfs4GroupRequest
     */
    public function setBean(?string $bean = null): self
    {
        // validation for constraint: string
        if (!is_null($bean) && !is_string($bean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bean, true), gettype($bean)), __LINE__);
        }
        $this->bean = $bean;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetMfs4GroupRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get groupName value
     * @return string|null
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }
    /**
     * Set groupName value
     * @param string $groupName
     * @return \Pggns\MidocoApi\Order\StructType\GetMfs4GroupRequest
     */
    public function setGroupName(?string $groupName = null): self
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        $this->groupName = $groupName;
        
        return $this;
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
        foreach ($values as $getMfs4GroupRequestClassNameItem) {
            // validation for constraint: itemType
            if (!is_string($getMfs4GroupRequestClassNameItem)) {
                $invalidValues[] = is_object($getMfs4GroupRequestClassNameItem) ? get_class($getMfs4GroupRequestClassNameItem) : sprintf('%s(%s)', gettype($getMfs4GroupRequestClassNameItem), var_export($getMfs4GroupRequestClassNameItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMfs4GroupRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMfs4GroupRequest
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
