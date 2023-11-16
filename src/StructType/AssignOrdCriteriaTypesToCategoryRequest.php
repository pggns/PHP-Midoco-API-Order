<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignOrdCriteriaTypesToCategoryRequest StructType
 * @subpackage Structs
 */
class AssignOrdCriteriaTypesToCategoryRequest extends AbstractStructBase
{
    /**
     * The categoryId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $categoryId;
    /**
     * The MidocoOrdCriteriaTypeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaTypeInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaTypeInfo[]
     */
    protected array $MidocoOrdCriteriaTypeInfo = [];
    /**
     * Constructor method for AssignOrdCriteriaTypesToCategoryRequest
     * @uses AssignOrdCriteriaTypesToCategoryRequest::setCategoryId()
     * @uses AssignOrdCriteriaTypesToCategoryRequest::setMidocoOrdCriteriaTypeInfo()
     * @param int $categoryId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaTypeInfo[] $midocoOrdCriteriaTypeInfo
     */
    public function __construct(int $categoryId, array $midocoOrdCriteriaTypeInfo = [])
    {
        $this
            ->setCategoryId($categoryId)
            ->setMidocoOrdCriteriaTypeInfo($midocoOrdCriteriaTypeInfo);
    }
    /**
     * Get categoryId value
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $categoryId
     * @return \Pggns\MidocoApi\Order\StructType\AssignOrdCriteriaTypesToCategoryRequest
     */
    public function setCategoryId(int $categoryId): self
    {
        // validation for constraint: int
        if (!is_null($categoryId) && !(is_int($categoryId) || ctype_digit($categoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
    /**
     * Get MidocoOrdCriteriaTypeInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaTypeInfo[]
     */
    public function getMidocoOrdCriteriaTypeInfo(): array
    {
        return $this->MidocoOrdCriteriaTypeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdCriteriaTypeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaTypeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaTypeInfoForArrayConstraintsFromSetMidocoOrdCriteriaTypeInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assignOrdCriteriaTypesToCategoryRequestMidocoOrdCriteriaTypeInfoItem) {
            // validation for constraint: itemType
            if (!$assignOrdCriteriaTypesToCategoryRequestMidocoOrdCriteriaTypeInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaTypeInfo) {
                $invalidValues[] = is_object($assignOrdCriteriaTypesToCategoryRequestMidocoOrdCriteriaTypeInfoItem) ? get_class($assignOrdCriteriaTypesToCategoryRequestMidocoOrdCriteriaTypeInfoItem) : sprintf('%s(%s)', gettype($assignOrdCriteriaTypesToCategoryRequestMidocoOrdCriteriaTypeInfoItem), var_export($assignOrdCriteriaTypesToCategoryRequestMidocoOrdCriteriaTypeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaTypeInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaTypeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaTypeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaTypeInfo[] $midocoOrdCriteriaTypeInfo
     * @return \Pggns\MidocoApi\Order\StructType\AssignOrdCriteriaTypesToCategoryRequest
     */
    public function setMidocoOrdCriteriaTypeInfo(array $midocoOrdCriteriaTypeInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaTypeInfoArrayErrorMessage = self::validateMidocoOrdCriteriaTypeInfoForArrayConstraintsFromSetMidocoOrdCriteriaTypeInfo($midocoOrdCriteriaTypeInfo))) {
            throw new InvalidArgumentException($midocoOrdCriteriaTypeInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaTypeInfo = $midocoOrdCriteriaTypeInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaTypeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaTypeInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\AssignOrdCriteriaTypesToCategoryRequest
     */
    public function addToMidocoOrdCriteriaTypeInfo(\Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaTypeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaTypeInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaTypeInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdCriteriaTypeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaTypeInfo[] = $item;
        
        return $this;
    }
}
