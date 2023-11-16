<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeeTypeGroupsResponse StructType
 * @subpackage Structs
 */
class GetFeeTypeGroupsResponse extends AbstractStructBase
{
    /**
     * The feeGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $feeGroup = [];
    /**
     * Constructor method for GetFeeTypeGroupsResponse
     * @uses GetFeeTypeGroupsResponse::setFeeGroup()
     * @param string[] $feeGroup
     */
    public function __construct(array $feeGroup = [])
    {
        $this
            ->setFeeGroup($feeGroup);
    }
    /**
     * Get feeGroup value
     * @return string[]
     */
    public function getFeeGroup(): array
    {
        return $this->feeGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setFeeGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeGroupForArrayConstraintsFromSetFeeGroup(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFeeTypeGroupsResponseFeeGroupItem) {
            // validation for constraint: itemType
            if (!is_string($getFeeTypeGroupsResponseFeeGroupItem)) {
                $invalidValues[] = is_object($getFeeTypeGroupsResponseFeeGroupItem) ? get_class($getFeeTypeGroupsResponseFeeGroupItem) : sprintf('%s(%s)', gettype($getFeeTypeGroupsResponseFeeGroupItem), var_export($getFeeTypeGroupsResponseFeeGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The feeGroup property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set feeGroup value
     * @throws InvalidArgumentException
     * @param string[] $feeGroup
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeTypeGroupsResponse
     */
    public function setFeeGroup(array $feeGroup = []): self
    {
        // validation for constraint: array
        if ('' !== ($feeGroupArrayErrorMessage = self::validateFeeGroupForArrayConstraintsFromSetFeeGroup($feeGroup))) {
            throw new InvalidArgumentException($feeGroupArrayErrorMessage, __LINE__);
        }
        $this->feeGroup = $feeGroup;
        
        return $this;
    }
    /**
     * Add item to feeGroup value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeTypeGroupsResponse
     */
    public function addToFeeGroup(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The feeGroup property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->feeGroup[] = $item;
        
        return $this;
    }
}
