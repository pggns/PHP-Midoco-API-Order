<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierGroupsResponse StructType
 * @subpackage Structs
 */
class GetSupplierGroupsResponse extends AbstractStructBase
{
    /**
     * The group1
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $group1 = [];
    /**
     * The group2
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $group2 = [];
    /**
     * The group3
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $group3 = [];
    /**
     * Constructor method for GetSupplierGroupsResponse
     * @uses GetSupplierGroupsResponse::setGroup1()
     * @uses GetSupplierGroupsResponse::setGroup2()
     * @uses GetSupplierGroupsResponse::setGroup3()
     * @param string[] $group1
     * @param string[] $group2
     * @param string[] $group3
     */
    public function __construct(array $group1 = [], array $group2 = [], array $group3 = [])
    {
        $this
            ->setGroup1($group1)
            ->setGroup2($group2)
            ->setGroup3($group3);
    }
    /**
     * Get group1 value
     * @return string[]
     */
    public function getGroup1(): array
    {
        return $this->group1;
    }
    /**
     * This method is responsible for validating the values passed to the setGroup1 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroup1 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroup1ForArrayConstraintsFromSetGroup1(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierGroupsResponseGroup1Item) {
            // validation for constraint: itemType
            if (!is_string($getSupplierGroupsResponseGroup1Item)) {
                $invalidValues[] = is_object($getSupplierGroupsResponseGroup1Item) ? get_class($getSupplierGroupsResponseGroup1Item) : sprintf('%s(%s)', gettype($getSupplierGroupsResponseGroup1Item), var_export($getSupplierGroupsResponseGroup1Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The group1 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set group1 value
     * @throws InvalidArgumentException
     * @param string[] $group1
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierGroupsResponse
     */
    public function setGroup1(array $group1 = []): self
    {
        // validation for constraint: array
        if ('' !== ($group1ArrayErrorMessage = self::validateGroup1ForArrayConstraintsFromSetGroup1($group1))) {
            throw new InvalidArgumentException($group1ArrayErrorMessage, __LINE__);
        }
        $this->group1 = $group1;
        
        return $this;
    }
    /**
     * Add item to group1 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierGroupsResponse
     */
    public function addToGroup1(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The group1 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->group1[] = $item;
        
        return $this;
    }
    /**
     * Get group2 value
     * @return string[]
     */
    public function getGroup2(): array
    {
        return $this->group2;
    }
    /**
     * This method is responsible for validating the values passed to the setGroup2 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroup2 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroup2ForArrayConstraintsFromSetGroup2(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierGroupsResponseGroup2Item) {
            // validation for constraint: itemType
            if (!is_string($getSupplierGroupsResponseGroup2Item)) {
                $invalidValues[] = is_object($getSupplierGroupsResponseGroup2Item) ? get_class($getSupplierGroupsResponseGroup2Item) : sprintf('%s(%s)', gettype($getSupplierGroupsResponseGroup2Item), var_export($getSupplierGroupsResponseGroup2Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The group2 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set group2 value
     * @throws InvalidArgumentException
     * @param string[] $group2
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierGroupsResponse
     */
    public function setGroup2(array $group2 = []): self
    {
        // validation for constraint: array
        if ('' !== ($group2ArrayErrorMessage = self::validateGroup2ForArrayConstraintsFromSetGroup2($group2))) {
            throw new InvalidArgumentException($group2ArrayErrorMessage, __LINE__);
        }
        $this->group2 = $group2;
        
        return $this;
    }
    /**
     * Add item to group2 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierGroupsResponse
     */
    public function addToGroup2(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The group2 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->group2[] = $item;
        
        return $this;
    }
    /**
     * Get group3 value
     * @return string[]
     */
    public function getGroup3(): array
    {
        return $this->group3;
    }
    /**
     * This method is responsible for validating the values passed to the setGroup3 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroup3 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroup3ForArrayConstraintsFromSetGroup3(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierGroupsResponseGroup3Item) {
            // validation for constraint: itemType
            if (!is_string($getSupplierGroupsResponseGroup3Item)) {
                $invalidValues[] = is_object($getSupplierGroupsResponseGroup3Item) ? get_class($getSupplierGroupsResponseGroup3Item) : sprintf('%s(%s)', gettype($getSupplierGroupsResponseGroup3Item), var_export($getSupplierGroupsResponseGroup3Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The group3 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set group3 value
     * @throws InvalidArgumentException
     * @param string[] $group3
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierGroupsResponse
     */
    public function setGroup3(array $group3 = []): self
    {
        // validation for constraint: array
        if ('' !== ($group3ArrayErrorMessage = self::validateGroup3ForArrayConstraintsFromSetGroup3($group3))) {
            throw new InvalidArgumentException($group3ArrayErrorMessage, __LINE__);
        }
        $this->group3 = $group3;
        
        return $this;
    }
    /**
     * Add item to group3 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierGroupsResponse
     */
    public function addToGroup3(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The group3 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->group3[] = $item;
        
        return $this;
    }
}
